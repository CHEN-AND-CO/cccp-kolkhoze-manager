<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f5a4e4e47a61dbc596b8a5cf6c4251cf9809cbaa7fe0192c935bf3aa4bd7f2e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c10ab97e02d4870ae31667758715eaa1f3b0be25053cf4ef753dad052703829c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10ab97e02d4870ae31667758715eaa1f3b0be25053cf4ef753dad052703829c->enter($__internal_c10ab97e02d4870ae31667758715eaa1f3b0be25053cf4ef753dad052703829c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c10ab97e02d4870ae31667758715eaa1f3b0be25053cf4ef753dad052703829c->leave($__internal_c10ab97e02d4870ae31667758715eaa1f3b0be25053cf4ef753dad052703829c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6c50024c9bea3a2612228fd74db4b0d0e3e935dc568b582d22240ac1cd6145c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c50024c9bea3a2612228fd74db4b0d0e3e935dc568b582d22240ac1cd6145c8->enter($__internal_6c50024c9bea3a2612228fd74db4b0d0e3e935dc568b582d22240ac1cd6145c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6c50024c9bea3a2612228fd74db4b0d0e3e935dc568b582d22240ac1cd6145c8->leave($__internal_6c50024c9bea3a2612228fd74db4b0d0e3e935dc568b582d22240ac1cd6145c8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_192f233f55c3c258ab8de6739a2385b0f7175f5d105cb3d21cfd4ae742ab3877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192f233f55c3c258ab8de6739a2385b0f7175f5d105cb3d21cfd4ae742ab3877->enter($__internal_192f233f55c3c258ab8de6739a2385b0f7175f5d105cb3d21cfd4ae742ab3877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_192f233f55c3c258ab8de6739a2385b0f7175f5d105cb3d21cfd4ae742ab3877->leave($__internal_192f233f55c3c258ab8de6739a2385b0f7175f5d105cb3d21cfd4ae742ab3877_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_83464af9b13284ed039f2b61c11e7aae889a5c20614aa2455195fbd1915e13f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83464af9b13284ed039f2b61c11e7aae889a5c20614aa2455195fbd1915e13f0->enter($__internal_83464af9b13284ed039f2b61c11e7aae889a5c20614aa2455195fbd1915e13f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_83464af9b13284ed039f2b61c11e7aae889a5c20614aa2455195fbd1915e13f0->leave($__internal_83464af9b13284ed039f2b61c11e7aae889a5c20614aa2455195fbd1915e13f0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/mathias/Bureau/ISEN/PHP/Projet/Symfony_Angular/project_git/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
