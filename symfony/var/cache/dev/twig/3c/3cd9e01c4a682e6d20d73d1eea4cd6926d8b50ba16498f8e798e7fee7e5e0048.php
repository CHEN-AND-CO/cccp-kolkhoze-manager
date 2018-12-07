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
        $__internal_ed9f195622fb3b08cd7ede31f30b4e359bafda61d8912246d59e5ad113623da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed9f195622fb3b08cd7ede31f30b4e359bafda61d8912246d59e5ad113623da6->enter($__internal_ed9f195622fb3b08cd7ede31f30b4e359bafda61d8912246d59e5ad113623da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed9f195622fb3b08cd7ede31f30b4e359bafda61d8912246d59e5ad113623da6->leave($__internal_ed9f195622fb3b08cd7ede31f30b4e359bafda61d8912246d59e5ad113623da6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_58367245a60588aae1abdc874bcc6a897f0a94625623f1157329728dd1813b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58367245a60588aae1abdc874bcc6a897f0a94625623f1157329728dd1813b7c->enter($__internal_58367245a60588aae1abdc874bcc6a897f0a94625623f1157329728dd1813b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_58367245a60588aae1abdc874bcc6a897f0a94625623f1157329728dd1813b7c->leave($__internal_58367245a60588aae1abdc874bcc6a897f0a94625623f1157329728dd1813b7c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aba71d5857e6f5355729a1d0a06fc138b517347672692cce8051d1c8f1374992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba71d5857e6f5355729a1d0a06fc138b517347672692cce8051d1c8f1374992->enter($__internal_aba71d5857e6f5355729a1d0a06fc138b517347672692cce8051d1c8f1374992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aba71d5857e6f5355729a1d0a06fc138b517347672692cce8051d1c8f1374992->leave($__internal_aba71d5857e6f5355729a1d0a06fc138b517347672692cce8051d1c8f1374992_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2afb9674c6bb64fca048192c6f41420fa3f158a1935749bd06c43aa8abb5494e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2afb9674c6bb64fca048192c6f41420fa3f158a1935749bd06c43aa8abb5494e->enter($__internal_2afb9674c6bb64fca048192c6f41420fa3f158a1935749bd06c43aa8abb5494e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2afb9674c6bb64fca048192c6f41420fa3f158a1935749bd06c43aa8abb5494e->leave($__internal_2afb9674c6bb64fca048192c6f41420fa3f158a1935749bd06c43aa8abb5494e_prof);

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
