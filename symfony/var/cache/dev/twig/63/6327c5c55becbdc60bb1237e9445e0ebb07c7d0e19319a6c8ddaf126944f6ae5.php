<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3778406ef85a6637d2a2a0be9d378272396e22464ec59695638d364213c2a4f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3105280b4210ccc7555d5ddda6fca651e5c8c94fcbff9d8a481efe6298f51e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3105280b4210ccc7555d5ddda6fca651e5c8c94fcbff9d8a481efe6298f51e12->enter($__internal_3105280b4210ccc7555d5ddda6fca651e5c8c94fcbff9d8a481efe6298f51e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3105280b4210ccc7555d5ddda6fca651e5c8c94fcbff9d8a481efe6298f51e12->leave($__internal_3105280b4210ccc7555d5ddda6fca651e5c8c94fcbff9d8a481efe6298f51e12_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9bf19bbe5eae6e9bf209b7bfc713c9e6e488a6ff912430724724a7c647ca6d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf19bbe5eae6e9bf209b7bfc713c9e6e488a6ff912430724724a7c647ca6d18->enter($__internal_9bf19bbe5eae6e9bf209b7bfc713c9e6e488a6ff912430724724a7c647ca6d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9bf19bbe5eae6e9bf209b7bfc713c9e6e488a6ff912430724724a7c647ca6d18->leave($__internal_9bf19bbe5eae6e9bf209b7bfc713c9e6e488a6ff912430724724a7c647ca6d18_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/mathias/Bureau/ISEN/PHP/Projet/Symfony_Angular/project_git/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
