<?php

/* BackOfficeBundle:Default:index.html.twig */
class __TwigTemplate_55bbe5b74f6ae64b97001c4b1a3daf18a726ba68c15cf7c46d3807b446b31a21 extends Twig_Template
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
        $__internal_c829023761013d9c7abf02f62421961b7d02c3054fd4c230a2a8db4b2de2ee41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c829023761013d9c7abf02f62421961b7d02c3054fd4c230a2a8db4b2de2ee41->enter($__internal_c829023761013d9c7abf02f62421961b7d02c3054fd4c230a2a8db4b2de2ee41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_c829023761013d9c7abf02f62421961b7d02c3054fd4c230a2a8db4b2de2ee41->leave($__internal_c829023761013d9c7abf02f62421961b7d02c3054fd4c230a2a8db4b2de2ee41_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:index.html.twig";
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
", "BackOfficeBundle:Default:index.html.twig", "/home/mathias/Bureau/ISEN/PHP/Projet/Symfony_Angular/project_git/symfony/src/BackOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
