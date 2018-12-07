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
        $__internal_d5c5469e62e353e92b424a6671f373971a8065d82e3c52d1ba583c6918bfdecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c5469e62e353e92b424a6671f373971a8065d82e3c52d1ba583c6918bfdecb->enter($__internal_d5c5469e62e353e92b424a6671f373971a8065d82e3c52d1ba583c6918bfdecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5c5469e62e353e92b424a6671f373971a8065d82e3c52d1ba583c6918bfdecb->leave($__internal_d5c5469e62e353e92b424a6671f373971a8065d82e3c52d1ba583c6918bfdecb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d66f0b257dfc5c841240198f0a95b12ec04d7a925964d634e59c69908be01ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66f0b257dfc5c841240198f0a95b12ec04d7a925964d634e59c69908be01ee8->enter($__internal_d66f0b257dfc5c841240198f0a95b12ec04d7a925964d634e59c69908be01ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d66f0b257dfc5c841240198f0a95b12ec04d7a925964d634e59c69908be01ee8->leave($__internal_d66f0b257dfc5c841240198f0a95b12ec04d7a925964d634e59c69908be01ee8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac795b2fd3eee59108adbb0ad8ae4f80da36a02eb2bd6f670438cd3757c7bd55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac795b2fd3eee59108adbb0ad8ae4f80da36a02eb2bd6f670438cd3757c7bd55->enter($__internal_ac795b2fd3eee59108adbb0ad8ae4f80da36a02eb2bd6f670438cd3757c7bd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ac795b2fd3eee59108adbb0ad8ae4f80da36a02eb2bd6f670438cd3757c7bd55->leave($__internal_ac795b2fd3eee59108adbb0ad8ae4f80da36a02eb2bd6f670438cd3757c7bd55_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbff04d2eee8c9d5aad958749af881b1df491e7ead133b2904cd8fdf14e8d9f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbff04d2eee8c9d5aad958749af881b1df491e7ead133b2904cd8fdf14e8d9f6->enter($__internal_bbff04d2eee8c9d5aad958749af881b1df491e7ead133b2904cd8fdf14e8d9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_bbff04d2eee8c9d5aad958749af881b1df491e7ead133b2904cd8fdf14e8d9f6->leave($__internal_bbff04d2eee8c9d5aad958749af881b1df491e7ead133b2904cd8fdf14e8d9f6_prof);

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
