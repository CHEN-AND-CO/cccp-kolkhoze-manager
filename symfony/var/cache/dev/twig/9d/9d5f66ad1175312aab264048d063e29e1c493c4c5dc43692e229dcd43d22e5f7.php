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
        $__internal_6d1ae4c7e3a80d15c2003de39ea47bd2e70d16b5d4b30ec604479bfd643d0395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1ae4c7e3a80d15c2003de39ea47bd2e70d16b5d4b30ec604479bfd643d0395->enter($__internal_6d1ae4c7e3a80d15c2003de39ea47bd2e70d16b5d4b30ec604479bfd643d0395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_6d1ae4c7e3a80d15c2003de39ea47bd2e70d16b5d4b30ec604479bfd643d0395->leave($__internal_6d1ae4c7e3a80d15c2003de39ea47bd2e70d16b5d4b30ec604479bfd643d0395_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a5a2626988042de0ab7e4ce071e76ce8dbf1a5a06a81d25ba4245cf32d75c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5a2626988042de0ab7e4ce071e76ce8dbf1a5a06a81d25ba4245cf32d75c0b->enter($__internal_9a5a2626988042de0ab7e4ce071e76ce8dbf1a5a06a81d25ba4245cf32d75c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9a5a2626988042de0ab7e4ce071e76ce8dbf1a5a06a81d25ba4245cf32d75c0b->leave($__internal_9a5a2626988042de0ab7e4ce071e76ce8dbf1a5a06a81d25ba4245cf32d75c0b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e04735ba965a2b25937b9ac7b4eb03a04d8e9065b1f6dd98afe635f39c13b70b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04735ba965a2b25937b9ac7b4eb03a04d8e9065b1f6dd98afe635f39c13b70b->enter($__internal_e04735ba965a2b25937b9ac7b4eb03a04d8e9065b1f6dd98afe635f39c13b70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e04735ba965a2b25937b9ac7b4eb03a04d8e9065b1f6dd98afe635f39c13b70b->leave($__internal_e04735ba965a2b25937b9ac7b4eb03a04d8e9065b1f6dd98afe635f39c13b70b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4786519a51180bd5ade6137e55985ec442946df98e4d9beaba676659a83b26ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4786519a51180bd5ade6137e55985ec442946df98e4d9beaba676659a83b26ad->enter($__internal_4786519a51180bd5ade6137e55985ec442946df98e4d9beaba676659a83b26ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4786519a51180bd5ade6137e55985ec442946df98e4d9beaba676659a83b26ad->leave($__internal_4786519a51180bd5ade6137e55985ec442946df98e4d9beaba676659a83b26ad_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_44f311331d7f58c095ad9f54b39738e1e0ede791aa8f1657e2f569464abb6c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f311331d7f58c095ad9f54b39738e1e0ede791aa8f1657e2f569464abb6c68->enter($__internal_44f311331d7f58c095ad9f54b39738e1e0ede791aa8f1657e2f569464abb6c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_44f311331d7f58c095ad9f54b39738e1e0ede791aa8f1657e2f569464abb6c68->leave($__internal_44f311331d7f58c095ad9f54b39738e1e0ede791aa8f1657e2f569464abb6c68_prof);

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
