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
        $__internal_977fd5b1d97fae8a3a4581c5932396f2bd2c301eb143c446606bfce68420221c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977fd5b1d97fae8a3a4581c5932396f2bd2c301eb143c446606bfce68420221c->enter($__internal_977fd5b1d97fae8a3a4581c5932396f2bd2c301eb143c446606bfce68420221c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_977fd5b1d97fae8a3a4581c5932396f2bd2c301eb143c446606bfce68420221c->leave($__internal_977fd5b1d97fae8a3a4581c5932396f2bd2c301eb143c446606bfce68420221c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2dceeeb09ebc031d6121ae66f2394858b56b834e7e4c0eef0c1bf9a5ab43f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2dceeeb09ebc031d6121ae66f2394858b56b834e7e4c0eef0c1bf9a5ab43f9a->enter($__internal_d2dceeeb09ebc031d6121ae66f2394858b56b834e7e4c0eef0c1bf9a5ab43f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d2dceeeb09ebc031d6121ae66f2394858b56b834e7e4c0eef0c1bf9a5ab43f9a->leave($__internal_d2dceeeb09ebc031d6121ae66f2394858b56b834e7e4c0eef0c1bf9a5ab43f9a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ec00bd0be35e9c5365e074b65441a352099715e723c678d430d2ad7230c450e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec00bd0be35e9c5365e074b65441a352099715e723c678d430d2ad7230c450e7->enter($__internal_ec00bd0be35e9c5365e074b65441a352099715e723c678d430d2ad7230c450e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ec00bd0be35e9c5365e074b65441a352099715e723c678d430d2ad7230c450e7->leave($__internal_ec00bd0be35e9c5365e074b65441a352099715e723c678d430d2ad7230c450e7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1e3fd6f15a72475c5e112790e73407789d931b769c591270fa756fd54881d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e3fd6f15a72475c5e112790e73407789d931b769c591270fa756fd54881d86->enter($__internal_f1e3fd6f15a72475c5e112790e73407789d931b769c591270fa756fd54881d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f1e3fd6f15a72475c5e112790e73407789d931b769c591270fa756fd54881d86->leave($__internal_f1e3fd6f15a72475c5e112790e73407789d931b769c591270fa756fd54881d86_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_af491b736c9910a0587058df2095e769c79e250986d2b8df442ca18f05e7ea00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af491b736c9910a0587058df2095e769c79e250986d2b8df442ca18f05e7ea00->enter($__internal_af491b736c9910a0587058df2095e769c79e250986d2b8df442ca18f05e7ea00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_af491b736c9910a0587058df2095e769c79e250986d2b8df442ca18f05e7ea00->leave($__internal_af491b736c9910a0587058df2095e769c79e250986d2b8df442ca18f05e7ea00_prof);

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
