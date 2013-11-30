<?php

namespace App\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\AdminBundle\Entity\Afiliacion;
use App\AdminBundle\Form\AfiliacionType;
use App\AdminBundle\Form\AfiliacionTransfType;

class AfiliacionesController extends Controller
{
    public function afiliacionesAction()
    {
        $request = $this->getRequest();
        $afiliacion = new Afiliacion();
        $formulario = $this->createForm(new AfiliacionType(),$afiliacion);
        $em = $this->getDoctrine()->getEntityManager();
        $afiliaciones = $em->getRepository('AdminBundle:Afiliacion')->findAll();
        $total = count($afiliaciones);
        if($request->getMethod()=='POST')
        {
            $formulario->bind($request);
            if($formulario->isValid())
            {
                $contrato =1000+$total;
                $afiliacion->setNcontrato($contrato);
                $em->persist($afiliacion);
                $em->flush();
                return $this->render('AdminBundle:Afiliaciones:exito.html.twig');
                
            }
        }
        return $this->render('AdminBundle:Afiliaciones:afiliaciones.html.twig',array('afiliaciones'=>$afiliaciones,'formulario'=>$formulario->createView()));
    }
    
    public function editafiliacionAction($ind)
    {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $afiliacion = $em->getRepository('AdminBundle:Afiliacion')->find($ind);
        $formulario = $this->createForm(new AfiliacionType(),$afiliacion);
        if($request->getMethod()=='POST')
        {
            $formulario->bind($request);
            if($formulario->isValid())
            {
                $em->persist($afiliacion);
                $em->flush();
                return $this->render('AdminBundle:Afiliaciones:exitoedit.html.twig');
            }
        }
        return $this->render('AdminBundle:Afiliaciones:editafiliaciones.html.twig',array('afiliacion'=>$afiliacion,'formulario'=>$formulario->createView()));
    }
    
    public function pretransferirAction($ind)
    {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $afiliacion = $em->getRepository('AdminBundle:Afiliacion')->find($ind);
        $formulario = $this->createForm(new AfiliacionTransfType(),$afiliacion);
        if($request->getMethod()=='POST')
        {
            $formulario->bind($request);
            if($formulario->isValid())
            {
                $em->persist($afiliacion);
                $em->flush();
                return $this->render('AdminBundle:Afiliaciones:exitoedit.html.twig');
            }
        }
        return $this->render('AdminBundle:Afiliaciones:pretransferir.html.twig',array('afiliacion'=>$afiliacion,'formulario'=>$formulario->createView()));
    }
    
    public function transferirAction()
    {
        $request = $this->getRequest();
        $afiliacion = new Afiliacion();
        $formulario = $this->createForm(new AfiliacionTransfType(),$afiliacion);
        $em = $this->getDoctrine()->getEntityManager();
        $ind = $request->request->get('ncontrato');
        //$antiguo = $em->getRepository('AdminBundle:Afiliacion')->findOneBy(array('ncontrato'=>$ind));
        if($request->getMethod()=='POST')
        {
            $formulario->bind($request);
            if($formulario->isValid())
            {
                $afiliacion->setNcontrato($ind);
                $em->persist($afiliacion);
                //$antiguo->setActivo('0');
                //$em->persist($antiguo);
                $em->flush();
                return $this->render('AdminBundle:Afiliaciones:exitotransf.html.twig');
                
            }
        }
        return $this->render('AdminBundle:Afiliaciones:exitoedit.html.twig');
    }
}
