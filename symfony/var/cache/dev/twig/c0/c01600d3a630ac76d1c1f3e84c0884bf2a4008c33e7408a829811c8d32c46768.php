<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d9ffae65641b2646830901a5f86c06bf780d0129aa15524b0693f8abf9d9bfc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91abe5c6be951e2bb573d0648763fff5b45b1980670d81efb1cf0ea96ebdc617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91abe5c6be951e2bb573d0648763fff5b45b1980670d81efb1cf0ea96ebdc617->enter($__internal_91abe5c6be951e2bb573d0648763fff5b45b1980670d81efb1cf0ea96ebdc617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91abe5c6be951e2bb573d0648763fff5b45b1980670d81efb1cf0ea96ebdc617->leave($__internal_91abe5c6be951e2bb573d0648763fff5b45b1980670d81efb1cf0ea96ebdc617_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a7b0ffcd28518d0c96f923a81298867f586e6edc2a5c0ca2b13f2cdda947df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a7b0ffcd28518d0c96f923a81298867f586e6edc2a5c0ca2b13f2cdda947df9->enter($__internal_8a7b0ffcd28518d0c96f923a81298867f586e6edc2a5c0ca2b13f2cdda947df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8a7b0ffcd28518d0c96f923a81298867f586e6edc2a5c0ca2b13f2cdda947df9->leave($__internal_8a7b0ffcd28518d0c96f923a81298867f586e6edc2a5c0ca2b13f2cdda947df9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f1be8acbf7ab9fda8db4802c02427b7aab9e1daffee1bb0caa111df01f1abab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1be8acbf7ab9fda8db4802c02427b7aab9e1daffee1bb0caa111df01f1abab->enter($__internal_6f1be8acbf7ab9fda8db4802c02427b7aab9e1daffee1bb0caa111df01f1abab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6f1be8acbf7ab9fda8db4802c02427b7aab9e1daffee1bb0caa111df01f1abab->leave($__internal_6f1be8acbf7ab9fda8db4802c02427b7aab9e1daffee1bb0caa111df01f1abab_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/mathias/Bureau/ISEN/PHP/Projet/Symfony_Angular/project_git/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
