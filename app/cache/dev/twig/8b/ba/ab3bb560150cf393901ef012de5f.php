<?php

/* AdminBundle:Empleados:adminEmpleados.html.twig */
class __TwigTemplate_8bbaab3bb560150cf393901ef012de5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'dinamico' => array($this, 'block_dinamico'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest")) ? ("::base_ajax.html.twig") : ("::base.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_dinamico($context, array $blocks = array())
    {
        // line 3
        echo "\t<h1>Administrar empleados</h1>
    <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("addempleado");
        echo "\" class=\"btn btn-info ajaxsimple\">Empleados</a>
    <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("addperfil");
        echo "\" class=\"btn btn-info ajaxsimple\">Agregar perfil</a>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Empleados:adminEmpleados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  32 => 4,  29 => 3,  26 => 2,);
    }
}
