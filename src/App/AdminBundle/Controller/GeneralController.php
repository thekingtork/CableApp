<?php

namespace App\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use App\AdminBundle\Entity\Administrador;
use App\AdminBundle\Form\AdministradorType;

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
}
