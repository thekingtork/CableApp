<?php

namespace App\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\AdminBundle\Entity\Mantenimiento;
use App\AdminBundle\Form\MantenimientoType;
use App\AdminBundle\Form\MantenimientoSolType;
use App\AdminBundle\Entity\TipoProblema;
use App\AdminBundle\Form\TipoProblemaType;
use App\AdminBundle\Form\FacturaType;
use App\AdminBundle\Entity\OrdenCorte;
use App\AdminBundle\Form\OrdenCorteType;
use App\AdminBundle\Entity\OrdenReconexion;
use App\AdminBundle\Form\OrdenReconexionType;

class ServiciosController extends Controller
{
    public function mantAction()
    {
        $request = $this->getRequest();
        $problema = new TipoProblema();
        $formulario = $this->createForm(new TipoProblemaType(),$problema);
        $em = $this->getDoctrine()->getManager();
        $problemas = $em->getRepository('AdminBundle:TipoProblema')->findAll();
        if($request->getMethod()=='POST')
        {
            $formulario->bind($request);
            if ($formulario->isValid())
            {
                $em->persist($problema);
                $em->flush();
                $problemas = $em->getRepository('AdminBundle:TipoProblema')->findAll();
                return $this->render('AdminBundle:Servicios:mant.html.twig',array('problemas'=>$problemas,'formulario'=>$formulario->createView()));
            }
        }
        return $this->render('AdminBundle:Servicios:inicioMant.html.twig',array('problemas'=>$problemas,'formulario'=>$formulario->createView()));
    }
    
    public function buscarmantAction()
    {
        $request = $this->getRequest();
        $mantenimiento = new Mantenimiento();
        $em = $this->getDoctrine()->getManager();
        $dato = $request->request->get('mydato');
        $afiliacion = $em->getRepository('AdminBundle:Afiliacion')->findOneBy(array('documento'=>$dato));
        $reg= $em->getRepository('AdminBundle:Mantenimiento')->findAll();
        $numero = count($reg);
        $nroMantenimiento = 100+$numero;
        $mantenimiento->setNroMantenimiento($nroMantenimiento);
        $mantenimiento->setAfiliacion($afiliacion);
        $formulario = $this->createForm(new MantenimientoType(),$mantenimiento);
        $mantenimientos = $em->getRepository('AdminBundle:Mantenimiento')->findDatosMantenimiento();
        if($request->getMethod()=='POST' and $dato)
        {
            return $this->render('AdminBundle:Servicios:generarOrdenMant.html.twig',array('afiliacion'=>$afiliacion,'mantenimientos'=>$mantenimientos,'formulario'=>$formulario->createView()));            
        }
        if($request->getMethod()=='POST')
        {
            $formulario->bind($request);
            if($formulario->isValid())
            {
                $hoy= new \DateTime();
                $manana = $hoy->modify('+1 day');
                $mantenimiento->setFechaReg(new \DateTime());
                $mantenimiento->setFechaSolucion($manana);
                $mantenimiento->setSolucion(false);
                $em->persist($mantenimiento);
                $em->flush();
                return $this->render('AdminBundle:Servicios:exito.html.twig');
            }
        }
    }
    
    public function adminMantAction()
    {
        $em = $this->getDoctrine()->getManager();
        $mantenimientos = $em->getRepository('AdminBundle:Mantenimiento')->findMantenimientos();
        return $this->render('AdminBundle:Servicios:listaMant.html.twig',array('mantenimientos'=>$mantenimientos));
    }
    
    public function regSolAction($ind)
    {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $mantenimiento = $em->getRepository('AdminBundle:Mantenimiento')->findMantenimiento($ind);
        $formulario = $this->createForm(new MantenimientoSolType(),$mantenimiento);
        if($request->getMethod()=='POST')
        {
            $formulario->bind($request);
            if($formulario->isValid())
            {
                $em->persist($mantenimiento);
                $em->flush();
                $mantenimientos = $em->getRepository('AdminBundle:Mantenimiento')->findMantenimientos();
                return $this->render('AdminBundle:Servicios:listaMant.html.twig',array('mantenimientos'=>$mantenimientos));
            }
        }
        return $this->render('AdminBundle:Servicios:regSol.html.twig',array('mantenimiento'=>$mantenimiento,'formulario'=>$formulario->createView()));
    }
    
    public function ordenCorteAction($ind,$afiliacion)
    {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $orden = new OrdenCorte();
        $factura = $em->getRepository('AdminBundle:Factura')->find($ind);
        $orden->setFecha(new \DateTime());
        $reg= $em->getRepository('AdminBundle:Afiliacion')->find($afiliacion);
        $orden->setAfiliacion($reg);
        $cortes = $em->getRepository('AdminBundle:OrdenCorte')->findAll();
        $formulario = $this->createForm(new OrdenCorteType(),$orden);
        if($request->getMethod()=='POST')
        {
            $formulario->bind($request);
            if($formulario->isValid())
            {
                $orden->setActiva(true);
                $em->persist($orden);
                $em->flush();
                $facturas = $em->getRepository('AdminBundle:Factura')->findDatosFactura();
                return $this->render('AdminBundle:Facturacion:adminFacturas.html.twig',array('facturas'=>$facturas));
            }
        }
        return $this->render('AdminBundle:Servicios:ordenCorte.html.twig',array('cortes'=>$cortes,'factura'=>$factura,'formulario'=>$formulario->createView()));
    }
    
    public function adminCortesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $cortes = $em->getRepository('AdminBundle:OrdenCorte')->findAll();
        return $this->render('AdminBundle:Servicios:listaCortes.html.twig',array('cortes'=>$cortes));
    }
    
    public function ordenReconexionAction($ind,$afiliacion)
    {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $orden = new OrdenReconexion();
        $factura = $em->getRepository('AdminBundle:OrdenCorte')->find($ind);
        $orden->setFecha(new \DateTime());
        $reg= $em->getRepository('AdminBundle:Afiliacion')->find($afiliacion);
        $orden->setAfiliacion($reg);
        $reconexion = $em->getRepository('AdminBundle:OrdenReconexion')->findAll();
        $formulario = $this->createForm(new OrdenReconexionType(),$orden);
        if($request->getMethod()=='POST')
        {
            $formulario->bind($request);
            if($formulario->isValid())
            {
                $orden->setActivo(true);
                $em->persist($orden);
                $em->flush();
                $cortes = $em->getRepository('AdminBundle:OrdenCorte')->findAll();
                return $this->render('AdminBundle:Servicios:listaCortes.html.twig',array('cortes'=>$cortes));
            }
        }
        return $this->render('AdminBundle:Servicios:ordenReconexion.html.twig',array('reconexion'=>$reconexion,'factura'=>$factura,'formulario'=>$formulario->createView()));
    }
    
    
    

}
