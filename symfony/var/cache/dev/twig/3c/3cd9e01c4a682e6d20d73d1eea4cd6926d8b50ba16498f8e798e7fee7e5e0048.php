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
        $__internal_5cff61df2a97142ba3d36b0fecbd87cb3035ca23a34e041eb0f408045a9ddfef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cff61df2a97142ba3d36b0fecbd87cb3035ca23a34e041eb0f408045a9ddfef->enter($__internal_5cff61df2a97142ba3d36b0fecbd87cb3035ca23a34e041eb0f408045a9ddfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cff61df2a97142ba3d36b0fecbd87cb3035ca23a34e041eb0f408045a9ddfef->leave($__internal_5cff61df2a97142ba3d36b0fecbd87cb3035ca23a34e041eb0f408045a9ddfef_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bbde9ec17df1a34b4c08f5f947ff59457e23ef1aa7e1af6baeaae09f8642b74b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbde9ec17df1a34b4c08f5f947ff59457e23ef1aa7e1af6baeaae09f8642b74b->enter($__internal_bbde9ec17df1a34b4c08f5f947ff59457e23ef1aa7e1af6baeaae09f8642b74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bbde9ec17df1a34b4c08f5f947ff59457e23ef1aa7e1af6baeaae09f8642b74b->leave($__internal_bbde9ec17df1a34b4c08f5f947ff59457e23ef1aa7e1af6baeaae09f8642b74b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d2008aad9f6116832b7e8053bbe0bde281153282647bfae9670e54d61b5fd1b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2008aad9f6116832b7e8053bbe0bde281153282647bfae9670e54d61b5fd1b6->enter($__internal_d2008aad9f6116832b7e8053bbe0bde281153282647bfae9670e54d61b5fd1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d2008aad9f6116832b7e8053bbe0bde281153282647bfae9670e54d61b5fd1b6->leave($__internal_d2008aad9f6116832b7e8053bbe0bde281153282647bfae9670e54d61b5fd1b6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6624c8f2e8efc8114f63a2f4676a022e8f725d166da5f40ad61a18a4add07f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6624c8f2e8efc8114f63a2f4676a022e8f725d166da5f40ad61a18a4add07f09->enter($__internal_6624c8f2e8efc8114f63a2f4676a022e8f725d166da5f40ad61a18a4add07f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6624c8f2e8efc8114f63a2f4676a022e8f725d166da5f40ad61a18a4add07f09->leave($__internal_6624c8f2e8efc8114f63a2f4676a022e8f725d166da5f40ad61a18a4add07f09_prof);

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
