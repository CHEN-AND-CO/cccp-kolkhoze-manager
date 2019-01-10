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
        $__internal_e9284186397d036d32d536d7a4542ede4ba1f5e52da4a76a28b23be8d19ecbbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9284186397d036d32d536d7a4542ede4ba1f5e52da4a76a28b23be8d19ecbbd->enter($__internal_e9284186397d036d32d536d7a4542ede4ba1f5e52da4a76a28b23be8d19ecbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9284186397d036d32d536d7a4542ede4ba1f5e52da4a76a28b23be8d19ecbbd->leave($__internal_e9284186397d036d32d536d7a4542ede4ba1f5e52da4a76a28b23be8d19ecbbd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6442892bf22bb9eedbaf0b76033b8a43c3e837eb1ce58934b662281872a4f536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6442892bf22bb9eedbaf0b76033b8a43c3e837eb1ce58934b662281872a4f536->enter($__internal_6442892bf22bb9eedbaf0b76033b8a43c3e837eb1ce58934b662281872a4f536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6442892bf22bb9eedbaf0b76033b8a43c3e837eb1ce58934b662281872a4f536->leave($__internal_6442892bf22bb9eedbaf0b76033b8a43c3e837eb1ce58934b662281872a4f536_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c8d4c358bfe547faa4b4899a95b5c1f7f5f9c0644a3cf245b7b0384ee17096e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c8d4c358bfe547faa4b4899a95b5c1f7f5f9c0644a3cf245b7b0384ee17096e->enter($__internal_3c8d4c358bfe547faa4b4899a95b5c1f7f5f9c0644a3cf245b7b0384ee17096e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3c8d4c358bfe547faa4b4899a95b5c1f7f5f9c0644a3cf245b7b0384ee17096e->leave($__internal_3c8d4c358bfe547faa4b4899a95b5c1f7f5f9c0644a3cf245b7b0384ee17096e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_814d5e6606d76dbdd8fc1231e1ae000b6895ef56b0cd8a9df2651eba54d14a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814d5e6606d76dbdd8fc1231e1ae000b6895ef56b0cd8a9df2651eba54d14a8b->enter($__internal_814d5e6606d76dbdd8fc1231e1ae000b6895ef56b0cd8a9df2651eba54d14a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_814d5e6606d76dbdd8fc1231e1ae000b6895ef56b0cd8a9df2651eba54d14a8b->leave($__internal_814d5e6606d76dbdd8fc1231e1ae000b6895ef56b0cd8a9df2651eba54d14a8b_prof);

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
