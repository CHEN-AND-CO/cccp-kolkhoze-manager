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
        $__internal_1c68f62f8121fd4f6faf32f8cad5454f9debb3d60963875fea36f130a6b6a16f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c68f62f8121fd4f6faf32f8cad5454f9debb3d60963875fea36f130a6b6a16f->enter($__internal_1c68f62f8121fd4f6faf32f8cad5454f9debb3d60963875fea36f130a6b6a16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1c68f62f8121fd4f6faf32f8cad5454f9debb3d60963875fea36f130a6b6a16f->leave($__internal_1c68f62f8121fd4f6faf32f8cad5454f9debb3d60963875fea36f130a6b6a16f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf8d4a209a3a80a5a6e0029a704e54dc8750e9688641e6f0490abe8cfd825748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf8d4a209a3a80a5a6e0029a704e54dc8750e9688641e6f0490abe8cfd825748->enter($__internal_cf8d4a209a3a80a5a6e0029a704e54dc8750e9688641e6f0490abe8cfd825748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cf8d4a209a3a80a5a6e0029a704e54dc8750e9688641e6f0490abe8cfd825748->leave($__internal_cf8d4a209a3a80a5a6e0029a704e54dc8750e9688641e6f0490abe8cfd825748_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d5f0acbf8a7c9c3f91ed9503346f23982146f9620e0164cf5d786d7fecbd221d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f0acbf8a7c9c3f91ed9503346f23982146f9620e0164cf5d786d7fecbd221d->enter($__internal_d5f0acbf8a7c9c3f91ed9503346f23982146f9620e0164cf5d786d7fecbd221d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d5f0acbf8a7c9c3f91ed9503346f23982146f9620e0164cf5d786d7fecbd221d->leave($__internal_d5f0acbf8a7c9c3f91ed9503346f23982146f9620e0164cf5d786d7fecbd221d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_25ef478db85f8ffecd99f598159f1235f05b3382698cf00860ee11e8458beec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ef478db85f8ffecd99f598159f1235f05b3382698cf00860ee11e8458beec9->enter($__internal_25ef478db85f8ffecd99f598159f1235f05b3382698cf00860ee11e8458beec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_25ef478db85f8ffecd99f598159f1235f05b3382698cf00860ee11e8458beec9->leave($__internal_25ef478db85f8ffecd99f598159f1235f05b3382698cf00860ee11e8458beec9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9f1a8d53d440a538b466fe7261aa27b62559e4f4c261e15307b2390f414a6b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1a8d53d440a538b466fe7261aa27b62559e4f4c261e15307b2390f414a6b9d->enter($__internal_9f1a8d53d440a538b466fe7261aa27b62559e4f4c261e15307b2390f414a6b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9f1a8d53d440a538b466fe7261aa27b62559e4f4c261e15307b2390f414a6b9d->leave($__internal_9f1a8d53d440a538b466fe7261aa27b62559e4f4c261e15307b2390f414a6b9d_prof);

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
