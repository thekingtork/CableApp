<?php

namespace App\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ServiciosController extends Controller
{
    public function mantAction()
    {
        return $this->render('AdminBundle:Servicios:mant.html.twig');
    }
    
    public function buscarmantAction()
    {
        $request = $this->getRequest();
        if($request->getMethod()=='POST')
        {
            $em = $this->getDoctrine()->getManager();
            $dato = $request->request->get('mydato');
            $usuario = $em->getRepository('AdminBundle:Afiliacion')->findOneBy(array('documento'=>$dato));
            return $this->render('AdminBundle:Servicios:buscarmant.html.twig',array('usuario'=>$usuario));            
        }
    }
}
