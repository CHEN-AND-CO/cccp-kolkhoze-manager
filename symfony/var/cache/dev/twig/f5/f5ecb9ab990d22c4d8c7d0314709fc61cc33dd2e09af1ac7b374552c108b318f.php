<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_11fbc2198b9cff59e44d0de36bc9cd6575455705f2ca6dcc7421f23ea21bc1d0 extends Twig_Template
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
        $__internal_67a6ab6d59c8172f8f3e648f6310ccb23fa04c8e1d1c9ddac574d72042cb8a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a6ab6d59c8172f8f3e648f6310ccb23fa04c8e1d1c9ddac574d72042cb8a4b->enter($__internal_67a6ab6d59c8172f8f3e648f6310ccb23fa04c8e1d1c9ddac574d72042cb8a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_67a6ab6d59c8172f8f3e648f6310ccb23fa04c8e1d1c9ddac574d72042cb8a4b->leave($__internal_67a6ab6d59c8172f8f3e648f6310ccb23fa04c8e1d1c9ddac574d72042cb8a4b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/home/mathias/Bureau/ISEN/PHP/Projet/Symfony_Angular/project_git/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
