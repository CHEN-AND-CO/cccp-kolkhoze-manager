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
        $__internal_7f0deeff5deef2906c2d3a7c389434b0a023712b4108222cc7b8e2f6aea289cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0deeff5deef2906c2d3a7c389434b0a023712b4108222cc7b8e2f6aea289cf->enter($__internal_7f0deeff5deef2906c2d3a7c389434b0a023712b4108222cc7b8e2f6aea289cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f0deeff5deef2906c2d3a7c389434b0a023712b4108222cc7b8e2f6aea289cf->leave($__internal_7f0deeff5deef2906c2d3a7c389434b0a023712b4108222cc7b8e2f6aea289cf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c7170cf9c29f750c0f4cc660f337da6f28a91d690a3319acd4f78dd2ad6565df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7170cf9c29f750c0f4cc660f337da6f28a91d690a3319acd4f78dd2ad6565df->enter($__internal_c7170cf9c29f750c0f4cc660f337da6f28a91d690a3319acd4f78dd2ad6565df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c7170cf9c29f750c0f4cc660f337da6f28a91d690a3319acd4f78dd2ad6565df->leave($__internal_c7170cf9c29f750c0f4cc660f337da6f28a91d690a3319acd4f78dd2ad6565df_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a1be01c63e316c77b67bb82e28accd662bd8b81efbed32fd069fa743fcb158db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1be01c63e316c77b67bb82e28accd662bd8b81efbed32fd069fa743fcb158db->enter($__internal_a1be01c63e316c77b67bb82e28accd662bd8b81efbed32fd069fa743fcb158db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a1be01c63e316c77b67bb82e28accd662bd8b81efbed32fd069fa743fcb158db->leave($__internal_a1be01c63e316c77b67bb82e28accd662bd8b81efbed32fd069fa743fcb158db_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2dc0a4cbaa428810388664cce391d84108d83acd58addde2750de91fe6f5fc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2dc0a4cbaa428810388664cce391d84108d83acd58addde2750de91fe6f5fc8->enter($__internal_f2dc0a4cbaa428810388664cce391d84108d83acd58addde2750de91fe6f5fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f2dc0a4cbaa428810388664cce391d84108d83acd58addde2750de91fe6f5fc8->leave($__internal_f2dc0a4cbaa428810388664cce391d84108d83acd58addde2750de91fe6f5fc8_prof);

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
