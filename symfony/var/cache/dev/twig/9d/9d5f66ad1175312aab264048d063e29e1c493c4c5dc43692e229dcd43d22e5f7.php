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
        $__internal_c8e4abb681e88a32973f26a956e9d25cb2ecb1d77ea0df90e5d8d1322fbdb679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e4abb681e88a32973f26a956e9d25cb2ecb1d77ea0df90e5d8d1322fbdb679->enter($__internal_c8e4abb681e88a32973f26a956e9d25cb2ecb1d77ea0df90e5d8d1322fbdb679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c8e4abb681e88a32973f26a956e9d25cb2ecb1d77ea0df90e5d8d1322fbdb679->leave($__internal_c8e4abb681e88a32973f26a956e9d25cb2ecb1d77ea0df90e5d8d1322fbdb679_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_728899868a9ed663c968e0a6bc0c7e2ca96a1e6bc18b95c98d74c03319534d3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_728899868a9ed663c968e0a6bc0c7e2ca96a1e6bc18b95c98d74c03319534d3f->enter($__internal_728899868a9ed663c968e0a6bc0c7e2ca96a1e6bc18b95c98d74c03319534d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_728899868a9ed663c968e0a6bc0c7e2ca96a1e6bc18b95c98d74c03319534d3f->leave($__internal_728899868a9ed663c968e0a6bc0c7e2ca96a1e6bc18b95c98d74c03319534d3f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_201c918162f9eac0c0b2160d259130062ab7fab71c314a493f21929da0378c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201c918162f9eac0c0b2160d259130062ab7fab71c314a493f21929da0378c3e->enter($__internal_201c918162f9eac0c0b2160d259130062ab7fab71c314a493f21929da0378c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_201c918162f9eac0c0b2160d259130062ab7fab71c314a493f21929da0378c3e->leave($__internal_201c918162f9eac0c0b2160d259130062ab7fab71c314a493f21929da0378c3e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3c0b837f10e6f60b0345fae6b3183d2ab325b194f86fc83bbfc1cf5cfb210c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c0b837f10e6f60b0345fae6b3183d2ab325b194f86fc83bbfc1cf5cfb210c4->enter($__internal_a3c0b837f10e6f60b0345fae6b3183d2ab325b194f86fc83bbfc1cf5cfb210c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a3c0b837f10e6f60b0345fae6b3183d2ab325b194f86fc83bbfc1cf5cfb210c4->leave($__internal_a3c0b837f10e6f60b0345fae6b3183d2ab325b194f86fc83bbfc1cf5cfb210c4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_38869e5e9c927b6aac0f05ea623a21721bc0c09a5fe2b160ecfd6593dd9291d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38869e5e9c927b6aac0f05ea623a21721bc0c09a5fe2b160ecfd6593dd9291d1->enter($__internal_38869e5e9c927b6aac0f05ea623a21721bc0c09a5fe2b160ecfd6593dd9291d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_38869e5e9c927b6aac0f05ea623a21721bc0c09a5fe2b160ecfd6593dd9291d1->leave($__internal_38869e5e9c927b6aac0f05ea623a21721bc0c09a5fe2b160ecfd6593dd9291d1_prof);

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
