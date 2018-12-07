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
        $__internal_e9cb7ac8a85d161777366cbf0494856b7916143a278668f5032cf45be04dc56f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9cb7ac8a85d161777366cbf0494856b7916143a278668f5032cf45be04dc56f->enter($__internal_e9cb7ac8a85d161777366cbf0494856b7916143a278668f5032cf45be04dc56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9cb7ac8a85d161777366cbf0494856b7916143a278668f5032cf45be04dc56f->leave($__internal_e9cb7ac8a85d161777366cbf0494856b7916143a278668f5032cf45be04dc56f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fee2edc4490210f95bbd5804d9c78d47afc0b705bcc7b0b01b3e0b62561b051b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee2edc4490210f95bbd5804d9c78d47afc0b705bcc7b0b01b3e0b62561b051b->enter($__internal_fee2edc4490210f95bbd5804d9c78d47afc0b705bcc7b0b01b3e0b62561b051b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fee2edc4490210f95bbd5804d9c78d47afc0b705bcc7b0b01b3e0b62561b051b->leave($__internal_fee2edc4490210f95bbd5804d9c78d47afc0b705bcc7b0b01b3e0b62561b051b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b812fda4474ba0bff419f6741c72274d643b689221a1ee4a30028bb22219c339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b812fda4474ba0bff419f6741c72274d643b689221a1ee4a30028bb22219c339->enter($__internal_b812fda4474ba0bff419f6741c72274d643b689221a1ee4a30028bb22219c339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b812fda4474ba0bff419f6741c72274d643b689221a1ee4a30028bb22219c339->leave($__internal_b812fda4474ba0bff419f6741c72274d643b689221a1ee4a30028bb22219c339_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_953116ce93147ceb6b104f63df16fd9d9d0ec930c89db69d6c6e789dd91143e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953116ce93147ceb6b104f63df16fd9d9d0ec930c89db69d6c6e789dd91143e0->enter($__internal_953116ce93147ceb6b104f63df16fd9d9d0ec930c89db69d6c6e789dd91143e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_953116ce93147ceb6b104f63df16fd9d9d0ec930c89db69d6c6e789dd91143e0->leave($__internal_953116ce93147ceb6b104f63df16fd9d9d0ec930c89db69d6c6e789dd91143e0_prof);

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
