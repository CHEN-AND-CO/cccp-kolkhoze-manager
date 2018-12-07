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
        $__internal_548f870a61f4e72ca9737c1deffc0910babec15c2f629edafb1c5dec81a52781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548f870a61f4e72ca9737c1deffc0910babec15c2f629edafb1c5dec81a52781->enter($__internal_548f870a61f4e72ca9737c1deffc0910babec15c2f629edafb1c5dec81a52781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_548f870a61f4e72ca9737c1deffc0910babec15c2f629edafb1c5dec81a52781->leave($__internal_548f870a61f4e72ca9737c1deffc0910babec15c2f629edafb1c5dec81a52781_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1be2d57df96e748fd86af543364ae69236a25cedd1b43e8d8bb94ce462ef9a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be2d57df96e748fd86af543364ae69236a25cedd1b43e8d8bb94ce462ef9a39->enter($__internal_1be2d57df96e748fd86af543364ae69236a25cedd1b43e8d8bb94ce462ef9a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1be2d57df96e748fd86af543364ae69236a25cedd1b43e8d8bb94ce462ef9a39->leave($__internal_1be2d57df96e748fd86af543364ae69236a25cedd1b43e8d8bb94ce462ef9a39_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9086c951fa016e967532dda8cba34e5d38e82fcacf9fd0f5ea66f7e5c63ede54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9086c951fa016e967532dda8cba34e5d38e82fcacf9fd0f5ea66f7e5c63ede54->enter($__internal_9086c951fa016e967532dda8cba34e5d38e82fcacf9fd0f5ea66f7e5c63ede54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9086c951fa016e967532dda8cba34e5d38e82fcacf9fd0f5ea66f7e5c63ede54->leave($__internal_9086c951fa016e967532dda8cba34e5d38e82fcacf9fd0f5ea66f7e5c63ede54_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_90718b72bf2268be739c85eb42112dc5fde339b6bf80ad0550a17bdbaa49d9fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90718b72bf2268be739c85eb42112dc5fde339b6bf80ad0550a17bdbaa49d9fa->enter($__internal_90718b72bf2268be739c85eb42112dc5fde339b6bf80ad0550a17bdbaa49d9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_90718b72bf2268be739c85eb42112dc5fde339b6bf80ad0550a17bdbaa49d9fa->leave($__internal_90718b72bf2268be739c85eb42112dc5fde339b6bf80ad0550a17bdbaa49d9fa_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_08861b4d269f1f5e30f5eb736e7632186b31a0077ac3915530b1e2c578b1c811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08861b4d269f1f5e30f5eb736e7632186b31a0077ac3915530b1e2c578b1c811->enter($__internal_08861b4d269f1f5e30f5eb736e7632186b31a0077ac3915530b1e2c578b1c811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_08861b4d269f1f5e30f5eb736e7632186b31a0077ac3915530b1e2c578b1c811->leave($__internal_08861b4d269f1f5e30f5eb736e7632186b31a0077ac3915530b1e2c578b1c811_prof);

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
