<?php

/* ::base_ajax.html.twig */
class __TwigTemplate_b5ebcf8a1239b2d847926e9ccff5b44e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'dinamico' => array($this, 'block_dinamico'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('dinamico', $context, $blocks);
    }

    public function block_dinamico($context, array $blocks = array())
    {
        // line 2
        echo "    <h1>Contenido ajax</h1>
";
    }

    public function getTemplateName()
    {
        return "::base_ajax.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  36 => 5,  32 => 4,  29 => 3,  26 => 2,);
    }
}
