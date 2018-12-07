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
        $__internal_5003f79e71d68ef170d9c541f576eab4d1f6aad120027f0bca373cb0b801c415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5003f79e71d68ef170d9c541f576eab4d1f6aad120027f0bca373cb0b801c415->enter($__internal_5003f79e71d68ef170d9c541f576eab4d1f6aad120027f0bca373cb0b801c415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_5003f79e71d68ef170d9c541f576eab4d1f6aad120027f0bca373cb0b801c415->leave($__internal_5003f79e71d68ef170d9c541f576eab4d1f6aad120027f0bca373cb0b801c415_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_77bee47e5f3ca897f10fe5aa75b19cd61d6b15550982195dda96e06e61769a02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77bee47e5f3ca897f10fe5aa75b19cd61d6b15550982195dda96e06e61769a02->enter($__internal_77bee47e5f3ca897f10fe5aa75b19cd61d6b15550982195dda96e06e61769a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_77bee47e5f3ca897f10fe5aa75b19cd61d6b15550982195dda96e06e61769a02->leave($__internal_77bee47e5f3ca897f10fe5aa75b19cd61d6b15550982195dda96e06e61769a02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d8ca6f321faaceb74295d7ff045bb9ec69a2d15633aff9049c6e67ad2d6071c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ca6f321faaceb74295d7ff045bb9ec69a2d15633aff9049c6e67ad2d6071c5->enter($__internal_d8ca6f321faaceb74295d7ff045bb9ec69a2d15633aff9049c6e67ad2d6071c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d8ca6f321faaceb74295d7ff045bb9ec69a2d15633aff9049c6e67ad2d6071c5->leave($__internal_d8ca6f321faaceb74295d7ff045bb9ec69a2d15633aff9049c6e67ad2d6071c5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_86c61210a00cf87dcbac253f5f1388595a25c0a1c9e123a8706b2972c6ea4ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c61210a00cf87dcbac253f5f1388595a25c0a1c9e123a8706b2972c6ea4ebd->enter($__internal_86c61210a00cf87dcbac253f5f1388595a25c0a1c9e123a8706b2972c6ea4ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_86c61210a00cf87dcbac253f5f1388595a25c0a1c9e123a8706b2972c6ea4ebd->leave($__internal_86c61210a00cf87dcbac253f5f1388595a25c0a1c9e123a8706b2972c6ea4ebd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b5142ee5ddc988f22c9fe89c624606ec94dfe9cdb86d7619b018a20a4fd0220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b5142ee5ddc988f22c9fe89c624606ec94dfe9cdb86d7619b018a20a4fd0220->enter($__internal_4b5142ee5ddc988f22c9fe89c624606ec94dfe9cdb86d7619b018a20a4fd0220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4b5142ee5ddc988f22c9fe89c624606ec94dfe9cdb86d7619b018a20a4fd0220->leave($__internal_4b5142ee5ddc988f22c9fe89c624606ec94dfe9cdb86d7619b018a20a4fd0220_prof);

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
