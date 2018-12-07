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
        $__internal_0d9c32d4ce62cfab8116c8af3516df0edfe37570e27991681f77df624fd0e33b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9c32d4ce62cfab8116c8af3516df0edfe37570e27991681f77df624fd0e33b->enter($__internal_0d9c32d4ce62cfab8116c8af3516df0edfe37570e27991681f77df624fd0e33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0d9c32d4ce62cfab8116c8af3516df0edfe37570e27991681f77df624fd0e33b->leave($__internal_0d9c32d4ce62cfab8116c8af3516df0edfe37570e27991681f77df624fd0e33b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc0e1f7027745e5543b56679a643e57894b49906df855cf407b282f830846fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0e1f7027745e5543b56679a643e57894b49906df855cf407b282f830846fb7->enter($__internal_cc0e1f7027745e5543b56679a643e57894b49906df855cf407b282f830846fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cc0e1f7027745e5543b56679a643e57894b49906df855cf407b282f830846fb7->leave($__internal_cc0e1f7027745e5543b56679a643e57894b49906df855cf407b282f830846fb7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e44d1b9eda84e9948cae9d5060a6bfd929500788156256f56334c5cfca82b6cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44d1b9eda84e9948cae9d5060a6bfd929500788156256f56334c5cfca82b6cd->enter($__internal_e44d1b9eda84e9948cae9d5060a6bfd929500788156256f56334c5cfca82b6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e44d1b9eda84e9948cae9d5060a6bfd929500788156256f56334c5cfca82b6cd->leave($__internal_e44d1b9eda84e9948cae9d5060a6bfd929500788156256f56334c5cfca82b6cd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_70fd68b0025bade89a7ebd739ccb18bb4ed79b84ce29c346c24daf51a4c47a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70fd68b0025bade89a7ebd739ccb18bb4ed79b84ce29c346c24daf51a4c47a10->enter($__internal_70fd68b0025bade89a7ebd739ccb18bb4ed79b84ce29c346c24daf51a4c47a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_70fd68b0025bade89a7ebd739ccb18bb4ed79b84ce29c346c24daf51a4c47a10->leave($__internal_70fd68b0025bade89a7ebd739ccb18bb4ed79b84ce29c346c24daf51a4c47a10_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_64d56007a59c567155362f50d8d2857efd32f82c9afcf490e8b13de1fc701a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d56007a59c567155362f50d8d2857efd32f82c9afcf490e8b13de1fc701a2d->enter($__internal_64d56007a59c567155362f50d8d2857efd32f82c9afcf490e8b13de1fc701a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_64d56007a59c567155362f50d8d2857efd32f82c9afcf490e8b13de1fc701a2d->leave($__internal_64d56007a59c567155362f50d8d2857efd32f82c9afcf490e8b13de1fc701a2d_prof);

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
