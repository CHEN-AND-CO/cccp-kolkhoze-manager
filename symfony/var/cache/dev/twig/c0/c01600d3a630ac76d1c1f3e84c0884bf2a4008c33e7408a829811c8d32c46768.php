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
        $__internal_39ad3ae0ce26e8efc94fef25cec53d228aa4498c6b93b721524174f4ac145e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ad3ae0ce26e8efc94fef25cec53d228aa4498c6b93b721524174f4ac145e41->enter($__internal_39ad3ae0ce26e8efc94fef25cec53d228aa4498c6b93b721524174f4ac145e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39ad3ae0ce26e8efc94fef25cec53d228aa4498c6b93b721524174f4ac145e41->leave($__internal_39ad3ae0ce26e8efc94fef25cec53d228aa4498c6b93b721524174f4ac145e41_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a4463c084d221629a68ab2ab3339401644b1be2a479f9d557ee2fb54bace62b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4463c084d221629a68ab2ab3339401644b1be2a479f9d557ee2fb54bace62b->enter($__internal_8a4463c084d221629a68ab2ab3339401644b1be2a479f9d557ee2fb54bace62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8a4463c084d221629a68ab2ab3339401644b1be2a479f9d557ee2fb54bace62b->leave($__internal_8a4463c084d221629a68ab2ab3339401644b1be2a479f9d557ee2fb54bace62b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4240f6138b02bda679636680eb3a8ff63a8596ae81d7506033a18fc6e4e2518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4240f6138b02bda679636680eb3a8ff63a8596ae81d7506033a18fc6e4e2518->enter($__internal_a4240f6138b02bda679636680eb3a8ff63a8596ae81d7506033a18fc6e4e2518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a4240f6138b02bda679636680eb3a8ff63a8596ae81d7506033a18fc6e4e2518->leave($__internal_a4240f6138b02bda679636680eb3a8ff63a8596ae81d7506033a18fc6e4e2518_prof);

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
