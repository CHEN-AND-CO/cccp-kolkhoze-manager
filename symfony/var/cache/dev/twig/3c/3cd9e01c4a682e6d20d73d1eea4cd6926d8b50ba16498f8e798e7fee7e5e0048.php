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
        $__internal_52bd8b588a38b5d6661dadf66ae90e93950a850b57ef7ec8b6212665166cfe89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52bd8b588a38b5d6661dadf66ae90e93950a850b57ef7ec8b6212665166cfe89->enter($__internal_52bd8b588a38b5d6661dadf66ae90e93950a850b57ef7ec8b6212665166cfe89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52bd8b588a38b5d6661dadf66ae90e93950a850b57ef7ec8b6212665166cfe89->leave($__internal_52bd8b588a38b5d6661dadf66ae90e93950a850b57ef7ec8b6212665166cfe89_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7544e05b9d61426cd9f6b50811253d8d2d5751ffcc2c80a1fa69a0b7ba765dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7544e05b9d61426cd9f6b50811253d8d2d5751ffcc2c80a1fa69a0b7ba765dd2->enter($__internal_7544e05b9d61426cd9f6b50811253d8d2d5751ffcc2c80a1fa69a0b7ba765dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7544e05b9d61426cd9f6b50811253d8d2d5751ffcc2c80a1fa69a0b7ba765dd2->leave($__internal_7544e05b9d61426cd9f6b50811253d8d2d5751ffcc2c80a1fa69a0b7ba765dd2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f971924f8756eeeac9e46a1afb7d86db226b014cfb7493106b008210b9952f06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f971924f8756eeeac9e46a1afb7d86db226b014cfb7493106b008210b9952f06->enter($__internal_f971924f8756eeeac9e46a1afb7d86db226b014cfb7493106b008210b9952f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f971924f8756eeeac9e46a1afb7d86db226b014cfb7493106b008210b9952f06->leave($__internal_f971924f8756eeeac9e46a1afb7d86db226b014cfb7493106b008210b9952f06_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aa838ca519aad766220206b3b93625e446126f368889dcc7a7b87a69f1534e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa838ca519aad766220206b3b93625e446126f368889dcc7a7b87a69f1534e3e->enter($__internal_aa838ca519aad766220206b3b93625e446126f368889dcc7a7b87a69f1534e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aa838ca519aad766220206b3b93625e446126f368889dcc7a7b87a69f1534e3e->leave($__internal_aa838ca519aad766220206b3b93625e446126f368889dcc7a7b87a69f1534e3e_prof);

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
