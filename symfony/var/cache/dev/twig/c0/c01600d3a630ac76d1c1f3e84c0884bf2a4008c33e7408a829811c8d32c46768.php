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
        $__internal_26e0875e95e35119538d465ac5f5a86aff80aadafb3f7b61532667bed270bee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e0875e95e35119538d465ac5f5a86aff80aadafb3f7b61532667bed270bee0->enter($__internal_26e0875e95e35119538d465ac5f5a86aff80aadafb3f7b61532667bed270bee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26e0875e95e35119538d465ac5f5a86aff80aadafb3f7b61532667bed270bee0->leave($__internal_26e0875e95e35119538d465ac5f5a86aff80aadafb3f7b61532667bed270bee0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_87b73a1255e2e0b0c07bb0f18c8049ce832005e7a1d51f0a8e8c90bd8f583842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b73a1255e2e0b0c07bb0f18c8049ce832005e7a1d51f0a8e8c90bd8f583842->enter($__internal_87b73a1255e2e0b0c07bb0f18c8049ce832005e7a1d51f0a8e8c90bd8f583842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_87b73a1255e2e0b0c07bb0f18c8049ce832005e7a1d51f0a8e8c90bd8f583842->leave($__internal_87b73a1255e2e0b0c07bb0f18c8049ce832005e7a1d51f0a8e8c90bd8f583842_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_40f02b206646be9a57df2db0ed5fb1b6fac24414db6ab12172c78883d525e4a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f02b206646be9a57df2db0ed5fb1b6fac24414db6ab12172c78883d525e4a3->enter($__internal_40f02b206646be9a57df2db0ed5fb1b6fac24414db6ab12172c78883d525e4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_40f02b206646be9a57df2db0ed5fb1b6fac24414db6ab12172c78883d525e4a3->leave($__internal_40f02b206646be9a57df2db0ed5fb1b6fac24414db6ab12172c78883d525e4a3_prof);

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
