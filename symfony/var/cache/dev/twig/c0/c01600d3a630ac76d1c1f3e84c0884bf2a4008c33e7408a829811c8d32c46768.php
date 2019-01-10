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
        $__internal_d076e6161ba8c56fb8108fe7b7585cd5b5f5f8e0cc0fc854d865ef8da53ce5c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d076e6161ba8c56fb8108fe7b7585cd5b5f5f8e0cc0fc854d865ef8da53ce5c9->enter($__internal_d076e6161ba8c56fb8108fe7b7585cd5b5f5f8e0cc0fc854d865ef8da53ce5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d076e6161ba8c56fb8108fe7b7585cd5b5f5f8e0cc0fc854d865ef8da53ce5c9->leave($__internal_d076e6161ba8c56fb8108fe7b7585cd5b5f5f8e0cc0fc854d865ef8da53ce5c9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_79d33312555e7758a2cf606a08073e88de151e8ce270b9da5024346f92990a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d33312555e7758a2cf606a08073e88de151e8ce270b9da5024346f92990a6f->enter($__internal_79d33312555e7758a2cf606a08073e88de151e8ce270b9da5024346f92990a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_79d33312555e7758a2cf606a08073e88de151e8ce270b9da5024346f92990a6f->leave($__internal_79d33312555e7758a2cf606a08073e88de151e8ce270b9da5024346f92990a6f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_529646339afc75af4e6dac1f4cd431a6f583cd80c1f41d487bc9cd8d9d2d1f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529646339afc75af4e6dac1f4cd431a6f583cd80c1f41d487bc9cd8d9d2d1f62->enter($__internal_529646339afc75af4e6dac1f4cd431a6f583cd80c1f41d487bc9cd8d9d2d1f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_529646339afc75af4e6dac1f4cd431a6f583cd80c1f41d487bc9cd8d9d2d1f62->leave($__internal_529646339afc75af4e6dac1f4cd431a6f583cd80c1f41d487bc9cd8d9d2d1f62_prof);

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
