<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a0163a06b691f7b452bb29db454b0f8d95b9ba86b79271d964411f3731e1656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a0163a06b691f7b452bb29db454b0f8d95b9ba86b79271d964411f3731e1656->enter($__internal_0a0163a06b691f7b452bb29db454b0f8d95b9ba86b79271d964411f3731e1656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a0163a06b691f7b452bb29db454b0f8d95b9ba86b79271d964411f3731e1656->leave($__internal_0a0163a06b691f7b452bb29db454b0f8d95b9ba86b79271d964411f3731e1656_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b5da4ba8f4440ebe2bc94e2459aa6fb61e87f59744c9dac7bef26cee545fd3c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5da4ba8f4440ebe2bc94e2459aa6fb61e87f59744c9dac7bef26cee545fd3c4->enter($__internal_b5da4ba8f4440ebe2bc94e2459aa6fb61e87f59744c9dac7bef26cee545fd3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b5da4ba8f4440ebe2bc94e2459aa6fb61e87f59744c9dac7bef26cee545fd3c4->leave($__internal_b5da4ba8f4440ebe2bc94e2459aa6fb61e87f59744c9dac7bef26cee545fd3c4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_88322ccd9ccf6e0f4add875837ff2f0c492d3a1d2613e0ac6805b33fee2e5890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88322ccd9ccf6e0f4add875837ff2f0c492d3a1d2613e0ac6805b33fee2e5890->enter($__internal_88322ccd9ccf6e0f4add875837ff2f0c492d3a1d2613e0ac6805b33fee2e5890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_88322ccd9ccf6e0f4add875837ff2f0c492d3a1d2613e0ac6805b33fee2e5890->leave($__internal_88322ccd9ccf6e0f4add875837ff2f0c492d3a1d2613e0ac6805b33fee2e5890_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d28342911c94c2215400c56d8f648aa8f573eb33ba3fa4ca9410d714308e1410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28342911c94c2215400c56d8f648aa8f573eb33ba3fa4ca9410d714308e1410->enter($__internal_d28342911c94c2215400c56d8f648aa8f573eb33ba3fa4ca9410d714308e1410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d28342911c94c2215400c56d8f648aa8f573eb33ba3fa4ca9410d714308e1410->leave($__internal_d28342911c94c2215400c56d8f648aa8f573eb33ba3fa4ca9410d714308e1410_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/mathias/Bureau/ISEN/PHP/Projet/Symfony_Angular/project_git/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
