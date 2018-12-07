<?php

/* ::base.html.twig */
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
        $__internal_a31caa0a825f9024dd47afe0a3cfeaede5cf7d84fd9725850d136d77983a4c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31caa0a825f9024dd47afe0a3cfeaede5cf7d84fd9725850d136d77983a4c23->enter($__internal_a31caa0a825f9024dd47afe0a3cfeaede5cf7d84fd9725850d136d77983a4c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a31caa0a825f9024dd47afe0a3cfeaede5cf7d84fd9725850d136d77983a4c23->leave($__internal_a31caa0a825f9024dd47afe0a3cfeaede5cf7d84fd9725850d136d77983a4c23_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c9341201612c7c2078ad51db473221407f71f73b37b7874a20677fde9540093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c9341201612c7c2078ad51db473221407f71f73b37b7874a20677fde9540093->enter($__internal_0c9341201612c7c2078ad51db473221407f71f73b37b7874a20677fde9540093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0c9341201612c7c2078ad51db473221407f71f73b37b7874a20677fde9540093->leave($__internal_0c9341201612c7c2078ad51db473221407f71f73b37b7874a20677fde9540093_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba4acb2799cdf3303fec1e625f3a9e93e4c6592fbb34977a4c313f99ab076a35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4acb2799cdf3303fec1e625f3a9e93e4c6592fbb34977a4c313f99ab076a35->enter($__internal_ba4acb2799cdf3303fec1e625f3a9e93e4c6592fbb34977a4c313f99ab076a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ba4acb2799cdf3303fec1e625f3a9e93e4c6592fbb34977a4c313f99ab076a35->leave($__internal_ba4acb2799cdf3303fec1e625f3a9e93e4c6592fbb34977a4c313f99ab076a35_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5277d09841700b7d0ddb82e7bd334eaf259f2cf89a206457f21bc929e6d2a086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5277d09841700b7d0ddb82e7bd334eaf259f2cf89a206457f21bc929e6d2a086->enter($__internal_5277d09841700b7d0ddb82e7bd334eaf259f2cf89a206457f21bc929e6d2a086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5277d09841700b7d0ddb82e7bd334eaf259f2cf89a206457f21bc929e6d2a086->leave($__internal_5277d09841700b7d0ddb82e7bd334eaf259f2cf89a206457f21bc929e6d2a086_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9fddbab095dbef2ef07d81ef386bc6c64de3150630dc0bf1dc838d0d63e93b00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fddbab095dbef2ef07d81ef386bc6c64de3150630dc0bf1dc838d0d63e93b00->enter($__internal_9fddbab095dbef2ef07d81ef386bc6c64de3150630dc0bf1dc838d0d63e93b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9fddbab095dbef2ef07d81ef386bc6c64de3150630dc0bf1dc838d0d63e93b00->leave($__internal_9fddbab095dbef2ef07d81ef386bc6c64de3150630dc0bf1dc838d0d63e93b00_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "/home/mathias/Bureau/ISEN/PHP/Projet/Symfony_Angular/project_git/symfony/app/Resources/views/base.html.twig");
    }
}
