<?php

namespace App\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\AdminBundle\Form\AfiliacionTransfType;

class FacturacionController extends Controller
{
    public function facturacionAction()
    {
        return $this->render('AdminBundle:Facturacion:facturacion.html.twig');
    }
    
    public function buscarfactAction()
    {
        $request = $this->getRequest();
        
        if($request->getMethod()=='POST')
        {
            $em = $this->getDoctrine()->getManager();
            $dato = $request->request->get('mydato');
            $factura = $em->getRepository('AdminBundle:Afiliacion')->findOneBy(array('documento'=>$dato));
            $formulario = $this->createForm(new AfiliacionTransfType(),$factura);
            return $this->render('AdminBundle:Facturacion:facturar.html.twig',array('factura'=>$factura,'formulario'=>$formulario->createView()));            
        }
    }
    
}
