<?php

namespace App\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\AdminBundle\Entity\Empleado;
use App\AdminBundle\Form\EmpleadoType;
use App\AdminBundle\Entity\Perfil;
use App\AdminBundle\Form\PerfilType;

class EmpleadosController extends Controller
{
    public function adminEmpleadosAction()
    {
        return $this->render('AdminBundle:Empleados:adminEmpleados.html.twig');
    }
    
    public function addempleadoAction()
    {
        $request = $this->getRequest();
        $empleado = new Empleado();
        $formulario = $this->createForm(new EmpleadoType(),$empleado);
        $em = $this->getDoctrine()->getManager();
        $empleados = $em->getRepository('AdminBundle:Empleado')->findAll();
        if($request->getMethod()=='POST')
        {
            $formulario->bind($request);
            if ($formulario->isValid())
            {
                $em->persist($empleado);
                $em->flush();
                $empleados = $em->getRepository('AdminBundle:Empleado')->findAll();
                return $this->render('AdminBundle:Empleados:addempleado.html.twig',array('empleados'=>$empleados,'formulario'=>$formulario->createView()));
            }
        }
        return $this->render('AdminBundle:Empleados:addempleado.html.twig',array('empleados'=>$empleados,'formulario'=>$formulario->createView()));
    }
    
    public function addperfilAction()
    {
        $request = $this->getRequest();
        $perfil = new Perfil();
        $formulario = $this->createForm(new PerfilType(),$perfil);
        $em = $this->getDoctrine()->getManager();
        $perfiles = $em->getRepository('AdminBundle:Perfil')->findAll();
        if ($request->getMethod()=='POST')
        {
            $formulario->bind($request);
            if ($formulario->isValid())
            {
                $em->persist($perfil);
                $em->flush();
                $perfiles = $em->getRepository('AdminBundle:Perfil')->findAll();
                return $this->render('AdminBundle:Empleados:addperfil.html.twig',array('perfiles'=>$perfiles,'formulario'=>$formulario->createView()));
            }    
        }
        return $this->render('AdminBundle:Empleados:addperfil.html.twig',array('perfiles'=>$perfiles,'formulario'=>$formulario->createView()));
    }
    
    public function editempleadoAction($ind)
    {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $empleado = $em->getRepository('AdminBundle:Empleado')->find($ind);
        $formulario = $this->createForm(new EmpleadoType(),$empleado);
        if($request->getMethod()=='POST')
        {
            $formulario->bind($request);
            if($formulario->isValid())
            {   
                $em->persist($empleado);
                $em->flush();
                return $this->render('AdminBundle:Empleados:exito.html.twig');
            }
        }
        return $this->render('AdminBundle:Empleados:editempleado.html.twig',array('empleado'=>$empleado,'formulario'=>$formulario->createView()));
    }
}
