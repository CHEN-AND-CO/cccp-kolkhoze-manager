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
        $__internal_87ac55b84c70da39be09a94c25fb737b587cd990e4af1037bf9d97dc0bb6262b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ac55b84c70da39be09a94c25fb737b587cd990e4af1037bf9d97dc0bb6262b->enter($__internal_87ac55b84c70da39be09a94c25fb737b587cd990e4af1037bf9d97dc0bb6262b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87ac55b84c70da39be09a94c25fb737b587cd990e4af1037bf9d97dc0bb6262b->leave($__internal_87ac55b84c70da39be09a94c25fb737b587cd990e4af1037bf9d97dc0bb6262b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_13e4d61a2fea34d596a4a9dbede342bb8efdab3ef8c972be5f00635884864a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e4d61a2fea34d596a4a9dbede342bb8efdab3ef8c972be5f00635884864a7a->enter($__internal_13e4d61a2fea34d596a4a9dbede342bb8efdab3ef8c972be5f00635884864a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_13e4d61a2fea34d596a4a9dbede342bb8efdab3ef8c972be5f00635884864a7a->leave($__internal_13e4d61a2fea34d596a4a9dbede342bb8efdab3ef8c972be5f00635884864a7a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c6bc9e6ce9f3ad58236289b6acb01d52bee65cc1479f87b003c500201fd375de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6bc9e6ce9f3ad58236289b6acb01d52bee65cc1479f87b003c500201fd375de->enter($__internal_c6bc9e6ce9f3ad58236289b6acb01d52bee65cc1479f87b003c500201fd375de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c6bc9e6ce9f3ad58236289b6acb01d52bee65cc1479f87b003c500201fd375de->leave($__internal_c6bc9e6ce9f3ad58236289b6acb01d52bee65cc1479f87b003c500201fd375de_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_077ece4be7048c7f1649ece006cb9f3d1f9770e0dfcd86aa9324716498fd4a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077ece4be7048c7f1649ece006cb9f3d1f9770e0dfcd86aa9324716498fd4a96->enter($__internal_077ece4be7048c7f1649ece006cb9f3d1f9770e0dfcd86aa9324716498fd4a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_077ece4be7048c7f1649ece006cb9f3d1f9770e0dfcd86aa9324716498fd4a96->leave($__internal_077ece4be7048c7f1649ece006cb9f3d1f9770e0dfcd86aa9324716498fd4a96_prof);

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
