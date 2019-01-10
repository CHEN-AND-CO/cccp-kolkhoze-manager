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
        $__internal_13a2768f0c4eda53fdc2b0954f2efeb8dae67fea1adae13efbbae4a535190362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a2768f0c4eda53fdc2b0954f2efeb8dae67fea1adae13efbbae4a535190362->enter($__internal_13a2768f0c4eda53fdc2b0954f2efeb8dae67fea1adae13efbbae4a535190362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13a2768f0c4eda53fdc2b0954f2efeb8dae67fea1adae13efbbae4a535190362->leave($__internal_13a2768f0c4eda53fdc2b0954f2efeb8dae67fea1adae13efbbae4a535190362_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a002c6de49ca523350f3a51af1b40d12ce53e4bf4274fd017eee3cb5ddd08771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a002c6de49ca523350f3a51af1b40d12ce53e4bf4274fd017eee3cb5ddd08771->enter($__internal_a002c6de49ca523350f3a51af1b40d12ce53e4bf4274fd017eee3cb5ddd08771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a002c6de49ca523350f3a51af1b40d12ce53e4bf4274fd017eee3cb5ddd08771->leave($__internal_a002c6de49ca523350f3a51af1b40d12ce53e4bf4274fd017eee3cb5ddd08771_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_da19f4530c49bbcb7a7cb0e596215a77ac0ad194b82ce001db695594ce5d5f92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da19f4530c49bbcb7a7cb0e596215a77ac0ad194b82ce001db695594ce5d5f92->enter($__internal_da19f4530c49bbcb7a7cb0e596215a77ac0ad194b82ce001db695594ce5d5f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_da19f4530c49bbcb7a7cb0e596215a77ac0ad194b82ce001db695594ce5d5f92->leave($__internal_da19f4530c49bbcb7a7cb0e596215a77ac0ad194b82ce001db695594ce5d5f92_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5923b3c05b65443eaaff18dac6fc5e6025c2e27e6ebf9adbac2f124f5df0b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5923b3c05b65443eaaff18dac6fc5e6025c2e27e6ebf9adbac2f124f5df0b5f->enter($__internal_b5923b3c05b65443eaaff18dac6fc5e6025c2e27e6ebf9adbac2f124f5df0b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b5923b3c05b65443eaaff18dac6fc5e6025c2e27e6ebf9adbac2f124f5df0b5f->leave($__internal_b5923b3c05b65443eaaff18dac6fc5e6025c2e27e6ebf9adbac2f124f5df0b5f_prof);

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
