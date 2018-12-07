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
        $__internal_9b4df3169728c778cdd5ff590f205cd0c9201efe83cced613e995f7d1437b894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4df3169728c778cdd5ff590f205cd0c9201efe83cced613e995f7d1437b894->enter($__internal_9b4df3169728c778cdd5ff590f205cd0c9201efe83cced613e995f7d1437b894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b4df3169728c778cdd5ff590f205cd0c9201efe83cced613e995f7d1437b894->leave($__internal_9b4df3169728c778cdd5ff590f205cd0c9201efe83cced613e995f7d1437b894_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d49644427bb063985ec05764a62a03cb3da6874f009814cd2d6c59bedf4f566b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49644427bb063985ec05764a62a03cb3da6874f009814cd2d6c59bedf4f566b->enter($__internal_d49644427bb063985ec05764a62a03cb3da6874f009814cd2d6c59bedf4f566b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d49644427bb063985ec05764a62a03cb3da6874f009814cd2d6c59bedf4f566b->leave($__internal_d49644427bb063985ec05764a62a03cb3da6874f009814cd2d6c59bedf4f566b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_def9a8e8545c769f0ed2639cb4c864e9d26d71b03136670df2e8cca849d23364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_def9a8e8545c769f0ed2639cb4c864e9d26d71b03136670df2e8cca849d23364->enter($__internal_def9a8e8545c769f0ed2639cb4c864e9d26d71b03136670df2e8cca849d23364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_def9a8e8545c769f0ed2639cb4c864e9d26d71b03136670df2e8cca849d23364->leave($__internal_def9a8e8545c769f0ed2639cb4c864e9d26d71b03136670df2e8cca849d23364_prof);

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
