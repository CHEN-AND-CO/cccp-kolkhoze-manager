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
        $__internal_9d8721bee8b4733aa59d7522b71da41db2821664ac3eaf6b9082365d6c3439bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8721bee8b4733aa59d7522b71da41db2821664ac3eaf6b9082365d6c3439bf->enter($__internal_9d8721bee8b4733aa59d7522b71da41db2821664ac3eaf6b9082365d6c3439bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d8721bee8b4733aa59d7522b71da41db2821664ac3eaf6b9082365d6c3439bf->leave($__internal_9d8721bee8b4733aa59d7522b71da41db2821664ac3eaf6b9082365d6c3439bf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9c6a5810712f50755b59ad71fb25f85ff3e1f9ff705ba4f8dca49f6305955fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6a5810712f50755b59ad71fb25f85ff3e1f9ff705ba4f8dca49f6305955fe8->enter($__internal_9c6a5810712f50755b59ad71fb25f85ff3e1f9ff705ba4f8dca49f6305955fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9c6a5810712f50755b59ad71fb25f85ff3e1f9ff705ba4f8dca49f6305955fe8->leave($__internal_9c6a5810712f50755b59ad71fb25f85ff3e1f9ff705ba4f8dca49f6305955fe8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_555206db793fdf4b1039fea2eda9f2e408cf82f7ef5cdba3dcd8f648824c93f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_555206db793fdf4b1039fea2eda9f2e408cf82f7ef5cdba3dcd8f648824c93f5->enter($__internal_555206db793fdf4b1039fea2eda9f2e408cf82f7ef5cdba3dcd8f648824c93f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_555206db793fdf4b1039fea2eda9f2e408cf82f7ef5cdba3dcd8f648824c93f5->leave($__internal_555206db793fdf4b1039fea2eda9f2e408cf82f7ef5cdba3dcd8f648824c93f5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4c4550a1f3eebfe74495237b4c426f48ae159f85772a31d6195117b9bae5cb78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c4550a1f3eebfe74495237b4c426f48ae159f85772a31d6195117b9bae5cb78->enter($__internal_4c4550a1f3eebfe74495237b4c426f48ae159f85772a31d6195117b9bae5cb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4c4550a1f3eebfe74495237b4c426f48ae159f85772a31d6195117b9bae5cb78->leave($__internal_4c4550a1f3eebfe74495237b4c426f48ae159f85772a31d6195117b9bae5cb78_prof);

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
