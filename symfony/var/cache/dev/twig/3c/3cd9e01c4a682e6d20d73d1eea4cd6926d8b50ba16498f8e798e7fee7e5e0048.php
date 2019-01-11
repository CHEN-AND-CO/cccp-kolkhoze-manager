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
        $__internal_2202cb71bdd0978a987d36478a2a1c4a0c57f3230aeb7697cc00671c4d67df0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2202cb71bdd0978a987d36478a2a1c4a0c57f3230aeb7697cc00671c4d67df0e->enter($__internal_2202cb71bdd0978a987d36478a2a1c4a0c57f3230aeb7697cc00671c4d67df0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2202cb71bdd0978a987d36478a2a1c4a0c57f3230aeb7697cc00671c4d67df0e->leave($__internal_2202cb71bdd0978a987d36478a2a1c4a0c57f3230aeb7697cc00671c4d67df0e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6e424f77ee2f9212a94ecd3b2ab8e5a2ec9890b1db12b72e398171f9678d9545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e424f77ee2f9212a94ecd3b2ab8e5a2ec9890b1db12b72e398171f9678d9545->enter($__internal_6e424f77ee2f9212a94ecd3b2ab8e5a2ec9890b1db12b72e398171f9678d9545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6e424f77ee2f9212a94ecd3b2ab8e5a2ec9890b1db12b72e398171f9678d9545->leave($__internal_6e424f77ee2f9212a94ecd3b2ab8e5a2ec9890b1db12b72e398171f9678d9545_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c5d1e3f6ac463a1c2c24d086fdf309f3d59bf782f99f6525413425599e0ef462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d1e3f6ac463a1c2c24d086fdf309f3d59bf782f99f6525413425599e0ef462->enter($__internal_c5d1e3f6ac463a1c2c24d086fdf309f3d59bf782f99f6525413425599e0ef462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c5d1e3f6ac463a1c2c24d086fdf309f3d59bf782f99f6525413425599e0ef462->leave($__internal_c5d1e3f6ac463a1c2c24d086fdf309f3d59bf782f99f6525413425599e0ef462_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_47b16eda8fff5b8768ae2ef9cb5e792e26f8c57800a39290415cc7559bce9c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47b16eda8fff5b8768ae2ef9cb5e792e26f8c57800a39290415cc7559bce9c41->enter($__internal_47b16eda8fff5b8768ae2ef9cb5e792e26f8c57800a39290415cc7559bce9c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_47b16eda8fff5b8768ae2ef9cb5e792e26f8c57800a39290415cc7559bce9c41->leave($__internal_47b16eda8fff5b8768ae2ef9cb5e792e26f8c57800a39290415cc7559bce9c41_prof);

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
