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
        $__internal_169a8d44342e22407b0bc0b216e588f6216d4c685b669fe7a848aa3b3934f046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_169a8d44342e22407b0bc0b216e588f6216d4c685b669fe7a848aa3b3934f046->enter($__internal_169a8d44342e22407b0bc0b216e588f6216d4c685b669fe7a848aa3b3934f046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_169a8d44342e22407b0bc0b216e588f6216d4c685b669fe7a848aa3b3934f046->leave($__internal_169a8d44342e22407b0bc0b216e588f6216d4c685b669fe7a848aa3b3934f046_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_74d9d103acad03c3ed4d40f749c243fe18c6c87149b1bb056fd8849c570bbb67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d9d103acad03c3ed4d40f749c243fe18c6c87149b1bb056fd8849c570bbb67->enter($__internal_74d9d103acad03c3ed4d40f749c243fe18c6c87149b1bb056fd8849c570bbb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_74d9d103acad03c3ed4d40f749c243fe18c6c87149b1bb056fd8849c570bbb67->leave($__internal_74d9d103acad03c3ed4d40f749c243fe18c6c87149b1bb056fd8849c570bbb67_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b83705990a495f8d14fc66959177c82f893c82660f0c1df12268466fcd0d18e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b83705990a495f8d14fc66959177c82f893c82660f0c1df12268466fcd0d18e->enter($__internal_3b83705990a495f8d14fc66959177c82f893c82660f0c1df12268466fcd0d18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3b83705990a495f8d14fc66959177c82f893c82660f0c1df12268466fcd0d18e->leave($__internal_3b83705990a495f8d14fc66959177c82f893c82660f0c1df12268466fcd0d18e_prof);

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
