<?php

/* FrontOfficeBundle:Default:index.html.twig */
class __TwigTemplate_0e4586d2296233ad5be4be28b8162055a1c5b422ea829721c31cdb28c35f9c95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83aadc0bce82dcad02e2b2a16e736db5152127a52fc5501d330308717cf21112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83aadc0bce82dcad02e2b2a16e736db5152127a52fc5501d330308717cf21112->enter($__internal_83aadc0bce82dcad02e2b2a16e736db5152127a52fc5501d330308717cf21112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_83aadc0bce82dcad02e2b2a16e736db5152127a52fc5501d330308717cf21112->leave($__internal_83aadc0bce82dcad02e2b2a16e736db5152127a52fc5501d330308717cf21112_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "FrontOfficeBundle:Default:index.html.twig", "/home/mathias/Bureau/ISEN/PHP/Projet/Symfony_Angular/project_git/symfony/src/FrontOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
