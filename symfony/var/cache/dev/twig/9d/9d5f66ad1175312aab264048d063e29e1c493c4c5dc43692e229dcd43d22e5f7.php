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
        $__internal_365defef5555079e93707bf3c76898f33eb9b13a2d16032651e7f786838ab4a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365defef5555079e93707bf3c76898f33eb9b13a2d16032651e7f786838ab4a3->enter($__internal_365defef5555079e93707bf3c76898f33eb9b13a2d16032651e7f786838ab4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_365defef5555079e93707bf3c76898f33eb9b13a2d16032651e7f786838ab4a3->leave($__internal_365defef5555079e93707bf3c76898f33eb9b13a2d16032651e7f786838ab4a3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d6ee4edb5bea593c0b15a8d6fc51e3c0115a8b2c54beb700a2e808fc6af3851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6ee4edb5bea593c0b15a8d6fc51e3c0115a8b2c54beb700a2e808fc6af3851->enter($__internal_4d6ee4edb5bea593c0b15a8d6fc51e3c0115a8b2c54beb700a2e808fc6af3851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4d6ee4edb5bea593c0b15a8d6fc51e3c0115a8b2c54beb700a2e808fc6af3851->leave($__internal_4d6ee4edb5bea593c0b15a8d6fc51e3c0115a8b2c54beb700a2e808fc6af3851_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_449a85d75e6c28af26ff06ce826f9c7c74ec9dfe1ae3ae1aed634d7eb77df839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449a85d75e6c28af26ff06ce826f9c7c74ec9dfe1ae3ae1aed634d7eb77df839->enter($__internal_449a85d75e6c28af26ff06ce826f9c7c74ec9dfe1ae3ae1aed634d7eb77df839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_449a85d75e6c28af26ff06ce826f9c7c74ec9dfe1ae3ae1aed634d7eb77df839->leave($__internal_449a85d75e6c28af26ff06ce826f9c7c74ec9dfe1ae3ae1aed634d7eb77df839_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_023ac4731514b1226f41752added1d006eaa0ff72f844fee9d55f38d2e06cdbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023ac4731514b1226f41752added1d006eaa0ff72f844fee9d55f38d2e06cdbe->enter($__internal_023ac4731514b1226f41752added1d006eaa0ff72f844fee9d55f38d2e06cdbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_023ac4731514b1226f41752added1d006eaa0ff72f844fee9d55f38d2e06cdbe->leave($__internal_023ac4731514b1226f41752added1d006eaa0ff72f844fee9d55f38d2e06cdbe_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b9edf7279c089683184636b206f506817d6b72dcb98fc878a6f569e900632948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9edf7279c089683184636b206f506817d6b72dcb98fc878a6f569e900632948->enter($__internal_b9edf7279c089683184636b206f506817d6b72dcb98fc878a6f569e900632948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b9edf7279c089683184636b206f506817d6b72dcb98fc878a6f569e900632948->leave($__internal_b9edf7279c089683184636b206f506817d6b72dcb98fc878a6f569e900632948_prof);

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
