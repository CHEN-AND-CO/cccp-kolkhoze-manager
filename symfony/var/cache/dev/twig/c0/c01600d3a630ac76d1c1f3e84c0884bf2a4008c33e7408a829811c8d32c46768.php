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
        $__internal_d83fb498ee2e48cd29d4d7aac6fbf1dc33cd1ec17a07384dfeb843a20209daef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d83fb498ee2e48cd29d4d7aac6fbf1dc33cd1ec17a07384dfeb843a20209daef->enter($__internal_d83fb498ee2e48cd29d4d7aac6fbf1dc33cd1ec17a07384dfeb843a20209daef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d83fb498ee2e48cd29d4d7aac6fbf1dc33cd1ec17a07384dfeb843a20209daef->leave($__internal_d83fb498ee2e48cd29d4d7aac6fbf1dc33cd1ec17a07384dfeb843a20209daef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2753049cbbd764e0d8c8e785c062dbadc2449ee4eea31c27342aeb4b3a8438e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2753049cbbd764e0d8c8e785c062dbadc2449ee4eea31c27342aeb4b3a8438e4->enter($__internal_2753049cbbd764e0d8c8e785c062dbadc2449ee4eea31c27342aeb4b3a8438e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2753049cbbd764e0d8c8e785c062dbadc2449ee4eea31c27342aeb4b3a8438e4->leave($__internal_2753049cbbd764e0d8c8e785c062dbadc2449ee4eea31c27342aeb4b3a8438e4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7570e5d814d5d51d845ffa4bbbfd1fcf1e4f915cb8bdf097c052c40229057966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7570e5d814d5d51d845ffa4bbbfd1fcf1e4f915cb8bdf097c052c40229057966->enter($__internal_7570e5d814d5d51d845ffa4bbbfd1fcf1e4f915cb8bdf097c052c40229057966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7570e5d814d5d51d845ffa4bbbfd1fcf1e4f915cb8bdf097c052c40229057966->leave($__internal_7570e5d814d5d51d845ffa4bbbfd1fcf1e4f915cb8bdf097c052c40229057966_prof);

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
