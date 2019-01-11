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
        $__internal_b7f908d22bb9064ba3b30ec1fe1e72ca2d6e68a8013619c190fec444f9cda513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7f908d22bb9064ba3b30ec1fe1e72ca2d6e68a8013619c190fec444f9cda513->enter($__internal_b7f908d22bb9064ba3b30ec1fe1e72ca2d6e68a8013619c190fec444f9cda513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b7f908d22bb9064ba3b30ec1fe1e72ca2d6e68a8013619c190fec444f9cda513->leave($__internal_b7f908d22bb9064ba3b30ec1fe1e72ca2d6e68a8013619c190fec444f9cda513_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb929c6b88a5b1b8a4377cbd6264c32e02c75951514b0b425eeb09751f45ddcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb929c6b88a5b1b8a4377cbd6264c32e02c75951514b0b425eeb09751f45ddcc->enter($__internal_bb929c6b88a5b1b8a4377cbd6264c32e02c75951514b0b425eeb09751f45ddcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bb929c6b88a5b1b8a4377cbd6264c32e02c75951514b0b425eeb09751f45ddcc->leave($__internal_bb929c6b88a5b1b8a4377cbd6264c32e02c75951514b0b425eeb09751f45ddcc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4fdf2f242699051e28f561acaed002a9fee293da63b18e25672284f89c12d293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fdf2f242699051e28f561acaed002a9fee293da63b18e25672284f89c12d293->enter($__internal_4fdf2f242699051e28f561acaed002a9fee293da63b18e25672284f89c12d293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4fdf2f242699051e28f561acaed002a9fee293da63b18e25672284f89c12d293->leave($__internal_4fdf2f242699051e28f561acaed002a9fee293da63b18e25672284f89c12d293_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_729fdd7748f50922f95d22d6267a291b7b8dfe71d7f4019d6e7b116afafd91c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729fdd7748f50922f95d22d6267a291b7b8dfe71d7f4019d6e7b116afafd91c5->enter($__internal_729fdd7748f50922f95d22d6267a291b7b8dfe71d7f4019d6e7b116afafd91c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_729fdd7748f50922f95d22d6267a291b7b8dfe71d7f4019d6e7b116afafd91c5->leave($__internal_729fdd7748f50922f95d22d6267a291b7b8dfe71d7f4019d6e7b116afafd91c5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_679997cd56396cdea142b0fe5be3d379337116361b8eeb20f05f0604c9814177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_679997cd56396cdea142b0fe5be3d379337116361b8eeb20f05f0604c9814177->enter($__internal_679997cd56396cdea142b0fe5be3d379337116361b8eeb20f05f0604c9814177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_679997cd56396cdea142b0fe5be3d379337116361b8eeb20f05f0604c9814177->leave($__internal_679997cd56396cdea142b0fe5be3d379337116361b8eeb20f05f0604c9814177_prof);

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
