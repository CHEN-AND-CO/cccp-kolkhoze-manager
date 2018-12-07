<?php

/* FrontOfficeBundle:Default:index.html.twig */
class __TwigTemplate_49a4ea83cd9929f096bd921d0dd89c07a2dbacd5e100f04cceaf96110aced5f7 extends Twig_Template
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
        $__internal_d0eec154c36be3f45bf527d2fbb6b7f72805af56965fe1aa9860a1f09796c0c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0eec154c36be3f45bf527d2fbb6b7f72805af56965fe1aa9860a1f09796c0c7->enter($__internal_d0eec154c36be3f45bf527d2fbb6b7f72805af56965fe1aa9860a1f09796c0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_d0eec154c36be3f45bf527d2fbb6b7f72805af56965fe1aa9860a1f09796c0c7->leave($__internal_d0eec154c36be3f45bf527d2fbb6b7f72805af56965fe1aa9860a1f09796c0c7_prof);

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
