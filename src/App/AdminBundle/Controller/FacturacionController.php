<?php

namespace App\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\AdminBundle\Entity\Factura;
use App\AdminBundle\Form\FacturaType;


class FacturacionController extends Controller
{
    public function facturacionAction()
    {
        return $this->render('AdminBundle:Facturacion:facturacion.html.twig');
    }
    
    public function buscarfactAction()
    {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $nroFactura=$em->getRepository('AdminBundle:Factura')->findAll();
        $dato = $request->request->get('mydato');
        $afiliacion = $em->getRepository('AdminBundle:Afiliacion')->findOneBy(array('documento'=>$dato));
        $factura = new Factura();
        $reg = count($nroFactura);
        $total = 10000+$reg;
        $factura->setNroFactura($total);
        $factura->setDiasfacturados(30);
        $factura->setFechaExp(new \DateTime());
        $dd= new \DateTime();
        $dd->modify('+7 day');
        $factura->setFechaCorte($dd);
        $factura->setAfiliacion($afiliacion);
        $factura->setPago(false);
        $formulario = $this->createForm(new FacturaType(),$factura);
        if($request->getMethod()=='POST' and $dato)
        {   
            return $this->render('AdminBundle:Facturacion:facturar.html.twig',array('afiliacion'=>$afiliacion,'formulario'=>$formulario->createView()));            
        }
        if($request->getMethod()=='POST')
        {
            $formulario->bind($request);
            if($formulario->isValid())
            {
                $em->persist($factura);
                $em->flush();
                return $this->render('AdminBundle:Facturacion:exito.html.twig');
            }
        }
    }
    
}
