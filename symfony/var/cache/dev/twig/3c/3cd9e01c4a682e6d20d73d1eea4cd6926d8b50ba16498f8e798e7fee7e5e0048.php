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
        $__internal_f893fbbed53f0938eb18b4303cab4dfd93a95c8ba33385aaf0620bbe80525f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f893fbbed53f0938eb18b4303cab4dfd93a95c8ba33385aaf0620bbe80525f55->enter($__internal_f893fbbed53f0938eb18b4303cab4dfd93a95c8ba33385aaf0620bbe80525f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f893fbbed53f0938eb18b4303cab4dfd93a95c8ba33385aaf0620bbe80525f55->leave($__internal_f893fbbed53f0938eb18b4303cab4dfd93a95c8ba33385aaf0620bbe80525f55_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3c0e3c26a1f819d1c2935d4d54ab5d1cb0fd535b714712f145aaa59b0f9bfa93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0e3c26a1f819d1c2935d4d54ab5d1cb0fd535b714712f145aaa59b0f9bfa93->enter($__internal_3c0e3c26a1f819d1c2935d4d54ab5d1cb0fd535b714712f145aaa59b0f9bfa93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3c0e3c26a1f819d1c2935d4d54ab5d1cb0fd535b714712f145aaa59b0f9bfa93->leave($__internal_3c0e3c26a1f819d1c2935d4d54ab5d1cb0fd535b714712f145aaa59b0f9bfa93_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d712c8ce54f6c369673f571d9648d25ea0923a01b9370a40f109c1dd489506ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d712c8ce54f6c369673f571d9648d25ea0923a01b9370a40f109c1dd489506ce->enter($__internal_d712c8ce54f6c369673f571d9648d25ea0923a01b9370a40f109c1dd489506ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d712c8ce54f6c369673f571d9648d25ea0923a01b9370a40f109c1dd489506ce->leave($__internal_d712c8ce54f6c369673f571d9648d25ea0923a01b9370a40f109c1dd489506ce_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_efbebca3f5e8f595aba7fe8b64df5deaa5839c5c7d94062023d675bc7f965f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efbebca3f5e8f595aba7fe8b64df5deaa5839c5c7d94062023d675bc7f965f6c->enter($__internal_efbebca3f5e8f595aba7fe8b64df5deaa5839c5c7d94062023d675bc7f965f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_efbebca3f5e8f595aba7fe8b64df5deaa5839c5c7d94062023d675bc7f965f6c->leave($__internal_efbebca3f5e8f595aba7fe8b64df5deaa5839c5c7d94062023d675bc7f965f6c_prof);

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
