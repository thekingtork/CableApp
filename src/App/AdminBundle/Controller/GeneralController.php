<?php

namespace App\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use App\AdminBundle\Entity\Administrador;
use App\AdminBundle\Form\AdministradorType;
use App\AdminBundle\Entity\Proovedor;
use App\AdminBundle\Form\ProovedorType;
use App\AdminBundle\Entity\CajaMenor;
use App\AdminBundle\Form\CajaMenorType;

class GeneralController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminBundle:General:index.html.twig');
    }
    
    public function loginAction()
    {
        $request=$this->getRequest();
        $session=$request->getSession();
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
                $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
                $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
        }
        return $this->render('AdminBundle:General:login.html.twig',array('error'=>$error));
    }
    
    public function registrarAction()
    {
        $request=$this->getRequest();
        $administrador= new Administrador();
        $form=$this->createForm(new AdministradorType(),$administrador);
        if($request->getMethod()=='POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $this->setSecurePassword($administrador);
                $em=$this->getDoctrine()->getManager();
                $em->persist($administrador);
                $em->flush();
                return $this->render('AdminBundle:General:exito.html.twig');
            }
        }
        return $this->render('AdminBundle:General:registrar.html.twig',array('form'=>$form->createView()));
    }
    
    private function setSecurePassword(&$entity) {
    	$entity->setSalt(md5(time()));
    	$encoder = new \Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder('sha512', true, 10);
    	$password = $encoder->encodePassword($entity->getPassword(), $entity->getSalt());
    	$entity->setPassword($password);
    }
    
    public function proovedoresAction()
    {
        $request = $this->getRequest();
        $proovedor = new Proovedor();
        $formulario = $this->createForm(new ProovedorType(),$proovedor);
        $em = $this->getDoctrine()->getManager();
        $proovedores = $em->getRepository('AdminBundle:Proovedor')->findAll();
        if($request->getMethod()=='POST')
        {
            $formulario->bind($request);
            if($formulario->isValid())
            {
                $em->persist($proovedor);
                $em->flush();
                $proovedores = $em->getRepository('AdminBundle:Proovedor')->findAll();
                return $this->render('AdminBundle:General:proovedores.html.twig',array('proovedores'=>$proovedores,'formulario'=>$formulario->createView()));
            }
        }
        return $this->render('AdminBundle:General:proovedores.html.twig',array('proovedores'=>$proovedores,'formulario'=>$formulario->createView()));
    }
    
    public function cajaMenorAction()
    {
        $request = $this->getRequest();
        $cajam = new CajaMenor();
        $formulario = $this->createForm(new CajaMenorType(),$cajam);
        $em = $this->getDoctrine()->getManager();
        $registros = $em->getRepository('AdminBundle:CajaMenor')->findAll();
        if($request->getMethod()=='POST')
        {
            $formulario->bind($request);
            if($formulario->isValid())
            {
                $em->persist($cajam);
                $em->flush();
                $registros = $em->getRepository('AdminBundle:CajaMenor')->findAll();
                return $this->render('AdminBundle:General:cajamenor.html.twig',array('registros'=>$registros,'formulario'=>$formulario->createView()));
            }
        }
        return $this->render('AdminBundle:General:cajamenor.html.twig',array('registros'=>$registros,'formulario'=>$formulario->createView()));
    }
}
