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
        $__internal_4987a603b74ce60e0633ecc1306c9f02fa2f9b854a19e8653afba5d2304b8830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4987a603b74ce60e0633ecc1306c9f02fa2f9b854a19e8653afba5d2304b8830->enter($__internal_4987a603b74ce60e0633ecc1306c9f02fa2f9b854a19e8653afba5d2304b8830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4987a603b74ce60e0633ecc1306c9f02fa2f9b854a19e8653afba5d2304b8830->leave($__internal_4987a603b74ce60e0633ecc1306c9f02fa2f9b854a19e8653afba5d2304b8830_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f7e309e6eba049a6cf987337b5b2e8a3d8bfdbb5e25050c90586d995b9a37fda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e309e6eba049a6cf987337b5b2e8a3d8bfdbb5e25050c90586d995b9a37fda->enter($__internal_f7e309e6eba049a6cf987337b5b2e8a3d8bfdbb5e25050c90586d995b9a37fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f7e309e6eba049a6cf987337b5b2e8a3d8bfdbb5e25050c90586d995b9a37fda->leave($__internal_f7e309e6eba049a6cf987337b5b2e8a3d8bfdbb5e25050c90586d995b9a37fda_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_275978083f7932bcb2a184b54b82295f1847d9a2a3f13f3a68d68bcbb825ea26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275978083f7932bcb2a184b54b82295f1847d9a2a3f13f3a68d68bcbb825ea26->enter($__internal_275978083f7932bcb2a184b54b82295f1847d9a2a3f13f3a68d68bcbb825ea26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_275978083f7932bcb2a184b54b82295f1847d9a2a3f13f3a68d68bcbb825ea26->leave($__internal_275978083f7932bcb2a184b54b82295f1847d9a2a3f13f3a68d68bcbb825ea26_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed9e68cd4ac671fcdcffe7f8ab35e7b75e637c920fab3f2ac7d0f38b00a1e6d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed9e68cd4ac671fcdcffe7f8ab35e7b75e637c920fab3f2ac7d0f38b00a1e6d4->enter($__internal_ed9e68cd4ac671fcdcffe7f8ab35e7b75e637c920fab3f2ac7d0f38b00a1e6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ed9e68cd4ac671fcdcffe7f8ab35e7b75e637c920fab3f2ac7d0f38b00a1e6d4->leave($__internal_ed9e68cd4ac671fcdcffe7f8ab35e7b75e637c920fab3f2ac7d0f38b00a1e6d4_prof);

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
