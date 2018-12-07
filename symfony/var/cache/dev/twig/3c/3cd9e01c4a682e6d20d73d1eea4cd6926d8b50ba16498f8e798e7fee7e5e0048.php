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
        $__internal_5a2ce5447ca88accd6f288e7aa6434c34140464d021dd3a0ed34b73544444f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a2ce5447ca88accd6f288e7aa6434c34140464d021dd3a0ed34b73544444f5b->enter($__internal_5a2ce5447ca88accd6f288e7aa6434c34140464d021dd3a0ed34b73544444f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a2ce5447ca88accd6f288e7aa6434c34140464d021dd3a0ed34b73544444f5b->leave($__internal_5a2ce5447ca88accd6f288e7aa6434c34140464d021dd3a0ed34b73544444f5b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8ef84862adf4559082c39e0346a3c568ce0b4c147c00bb3084b47499dcd384af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ef84862adf4559082c39e0346a3c568ce0b4c147c00bb3084b47499dcd384af->enter($__internal_8ef84862adf4559082c39e0346a3c568ce0b4c147c00bb3084b47499dcd384af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8ef84862adf4559082c39e0346a3c568ce0b4c147c00bb3084b47499dcd384af->leave($__internal_8ef84862adf4559082c39e0346a3c568ce0b4c147c00bb3084b47499dcd384af_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aa460cb2196957a685aae5ff0a37b11a75eac9a01996e9faa94a9e00ded264b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa460cb2196957a685aae5ff0a37b11a75eac9a01996e9faa94a9e00ded264b3->enter($__internal_aa460cb2196957a685aae5ff0a37b11a75eac9a01996e9faa94a9e00ded264b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aa460cb2196957a685aae5ff0a37b11a75eac9a01996e9faa94a9e00ded264b3->leave($__internal_aa460cb2196957a685aae5ff0a37b11a75eac9a01996e9faa94a9e00ded264b3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7728eed1405a5c37f508f1d5b4aebaa8957de6a5d2713e6488b826033b31d14a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7728eed1405a5c37f508f1d5b4aebaa8957de6a5d2713e6488b826033b31d14a->enter($__internal_7728eed1405a5c37f508f1d5b4aebaa8957de6a5d2713e6488b826033b31d14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7728eed1405a5c37f508f1d5b4aebaa8957de6a5d2713e6488b826033b31d14a->leave($__internal_7728eed1405a5c37f508f1d5b4aebaa8957de6a5d2713e6488b826033b31d14a_prof);

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
