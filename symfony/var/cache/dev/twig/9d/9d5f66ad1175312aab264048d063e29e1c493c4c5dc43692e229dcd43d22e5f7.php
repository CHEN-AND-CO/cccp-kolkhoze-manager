<?php

/* base.html.twig */
class __TwigTemplate_d81bae7d5325a7f23ba92e849144467ab8ed2421c201cbf1d70c17582ad76de7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0a549b017d991a460def7b06a3a4c77050ba52326b4d800971d16551ddc3070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a549b017d991a460def7b06a3a4c77050ba52326b4d800971d16551ddc3070->enter($__internal_f0a549b017d991a460def7b06a3a4c77050ba52326b4d800971d16551ddc3070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f0a549b017d991a460def7b06a3a4c77050ba52326b4d800971d16551ddc3070->leave($__internal_f0a549b017d991a460def7b06a3a4c77050ba52326b4d800971d16551ddc3070_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5ae5492d36b88562324c103dfc56fa90826c68cfc2ed945bbb986d0bd6faa27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ae5492d36b88562324c103dfc56fa90826c68cfc2ed945bbb986d0bd6faa27->enter($__internal_f5ae5492d36b88562324c103dfc56fa90826c68cfc2ed945bbb986d0bd6faa27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f5ae5492d36b88562324c103dfc56fa90826c68cfc2ed945bbb986d0bd6faa27->leave($__internal_f5ae5492d36b88562324c103dfc56fa90826c68cfc2ed945bbb986d0bd6faa27_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_85f5b455bdb716ec507ccc78801a4d45f2960d6fc7f69a42a9631866a8da2e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f5b455bdb716ec507ccc78801a4d45f2960d6fc7f69a42a9631866a8da2e0a->enter($__internal_85f5b455bdb716ec507ccc78801a4d45f2960d6fc7f69a42a9631866a8da2e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_85f5b455bdb716ec507ccc78801a4d45f2960d6fc7f69a42a9631866a8da2e0a->leave($__internal_85f5b455bdb716ec507ccc78801a4d45f2960d6fc7f69a42a9631866a8da2e0a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0142df519942a2af9f43bb4c7dd02cb0b091c57d204fd707b72c3b1924d773e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0142df519942a2af9f43bb4c7dd02cb0b091c57d204fd707b72c3b1924d773e0->enter($__internal_0142df519942a2af9f43bb4c7dd02cb0b091c57d204fd707b72c3b1924d773e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0142df519942a2af9f43bb4c7dd02cb0b091c57d204fd707b72c3b1924d773e0->leave($__internal_0142df519942a2af9f43bb4c7dd02cb0b091c57d204fd707b72c3b1924d773e0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_103c1dbf7e69163df48b5aa1c16e70eac468629bdcf654d61a899b03b745db23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103c1dbf7e69163df48b5aa1c16e70eac468629bdcf654d61a899b03b745db23->enter($__internal_103c1dbf7e69163df48b5aa1c16e70eac468629bdcf654d61a899b03b745db23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_103c1dbf7e69163df48b5aa1c16e70eac468629bdcf654d61a899b03b745db23->leave($__internal_103c1dbf7e69163df48b5aa1c16e70eac468629bdcf654d61a899b03b745db23_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/mathias/Bureau/ISEN/PHP/Projet/Symfony_Angular/project_git/symfony/app/Resources/views/base.html.twig");
    }
}
