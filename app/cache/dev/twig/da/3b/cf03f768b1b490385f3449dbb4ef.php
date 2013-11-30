<?php

/* AdminBundle:Empleados:addempleado.html.twig */
class __TwigTemplate_da3bcf03f768b1b490385f3449dbb4ef extends Twig_Template
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
        echo "    <h1>Empleados registrados</h1>
    <table class=\"table table-hover\"><!--Inicio Tabla-->
        <tr>
            <td>Nombres</td>
            <td>Apellidos</td>
            <td>Identificacion</td>
            <td>Telefono</td>
            <td>Nombres</td>
            <td>Salario</td>
            <td>Estado</td>
        </tr>
    ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "empleados"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "        <tr>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "nombres"), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "apellidos"), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "identificacion"), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "telefono"), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "perfil"), "html", null, true);
            echo "</td>
            <td>\$ ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "salario"), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 23
            if (($this->getAttribute($this->getContext($context, "item"), "activo") == 1)) {
                // line 24
                echo "                    <span class=\"glyphicon glyphicon-ok\"></span>
                ";
            } else {
                // line 26
                echo "                    <span class=\"glyphicon glyphicon-remove\"></span>
                ";
            }
            // line 28
            echo "            </td>
            <td><span class=\"glyphicon glyphicon-pencil\"></span> Editar</td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "        <p class=\"alert alert-danger\">No hay empleados registrados actualmente</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </table><!--*******************Fin Tabla**************-->
    <button class=\"btn btn-info activar\">Nuevo Empleado <span class=\"glyphicon glyphicon-plus\"></span></button>
    <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("adminempleados");
        echo "\" class=\"btn btn-info ajaxsimple\">Atr&aacute;s</a>
    <div class=\"elemento\" style=\"display: none;\">
        <h1>Registrar Nuevo empleado</h1>
        <form action=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("addempleado");
        echo "\" method=\"post\" class=\"ajaxdatos\">
            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formulario"), 'widget');
        echo "
            <br />
            <button class=\"btn btn-info\">Registrar</button>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Empleados:addempleado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 40,  110 => 39,  104 => 36,  100 => 34,  93 => 32,  85 => 28,  81 => 26,  77 => 24,  75 => 23,  70 => 21,  66 => 20,  62 => 19,  58 => 18,  54 => 17,  50 => 16,  47 => 15,  42 => 14,  29 => 3,  26 => 2,);
    }
}
