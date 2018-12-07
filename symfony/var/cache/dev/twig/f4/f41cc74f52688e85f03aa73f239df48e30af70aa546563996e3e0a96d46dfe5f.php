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
        $__internal_ef0b5cde12d7eaee3ea3b63f958ff9a6aa8c80296583af0d6e1ce0ac3e4ef589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0b5cde12d7eaee3ea3b63f958ff9a6aa8c80296583af0d6e1ce0ac3e4ef589->enter($__internal_ef0b5cde12d7eaee3ea3b63f958ff9a6aa8c80296583af0d6e1ce0ac3e4ef589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef0b5cde12d7eaee3ea3b63f958ff9a6aa8c80296583af0d6e1ce0ac3e4ef589->leave($__internal_ef0b5cde12d7eaee3ea3b63f958ff9a6aa8c80296583af0d6e1ce0ac3e4ef589_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c28358f49eee45e04c7feaaac154e2f1c6f7adaef656a18e85df54c79a57c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c28358f49eee45e04c7feaaac154e2f1c6f7adaef656a18e85df54c79a57c3f->enter($__internal_0c28358f49eee45e04c7feaaac154e2f1c6f7adaef656a18e85df54c79a57c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0c28358f49eee45e04c7feaaac154e2f1c6f7adaef656a18e85df54c79a57c3f->leave($__internal_0c28358f49eee45e04c7feaaac154e2f1c6f7adaef656a18e85df54c79a57c3f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_48c482747caa97a807f04a5ee3f708e9634b196bd8a40b787e5e7129c4d78394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c482747caa97a807f04a5ee3f708e9634b196bd8a40b787e5e7129c4d78394->enter($__internal_48c482747caa97a807f04a5ee3f708e9634b196bd8a40b787e5e7129c4d78394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_48c482747caa97a807f04a5ee3f708e9634b196bd8a40b787e5e7129c4d78394->leave($__internal_48c482747caa97a807f04a5ee3f708e9634b196bd8a40b787e5e7129c4d78394_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_657e6ff8cc2c6cef66b0030bc671e71452ee33cd822e8508ecf49531db44aa35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_657e6ff8cc2c6cef66b0030bc671e71452ee33cd822e8508ecf49531db44aa35->enter($__internal_657e6ff8cc2c6cef66b0030bc671e71452ee33cd822e8508ecf49531db44aa35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_657e6ff8cc2c6cef66b0030bc671e71452ee33cd822e8508ecf49531db44aa35->leave($__internal_657e6ff8cc2c6cef66b0030bc671e71452ee33cd822e8508ecf49531db44aa35_prof);

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
