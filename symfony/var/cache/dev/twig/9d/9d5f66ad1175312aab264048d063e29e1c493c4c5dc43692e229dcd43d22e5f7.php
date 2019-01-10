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
        $__internal_9fde4d54d33f3c2f11debfdeb13927577f222b4bc103f7c8c67b783106b41e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fde4d54d33f3c2f11debfdeb13927577f222b4bc103f7c8c67b783106b41e33->enter($__internal_9fde4d54d33f3c2f11debfdeb13927577f222b4bc103f7c8c67b783106b41e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9fde4d54d33f3c2f11debfdeb13927577f222b4bc103f7c8c67b783106b41e33->leave($__internal_9fde4d54d33f3c2f11debfdeb13927577f222b4bc103f7c8c67b783106b41e33_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_99fa9f1c5a51b0cb4ed39312fd347fccaa5cb541a0e39ff8867e0ee131c3c0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99fa9f1c5a51b0cb4ed39312fd347fccaa5cb541a0e39ff8867e0ee131c3c0e4->enter($__internal_99fa9f1c5a51b0cb4ed39312fd347fccaa5cb541a0e39ff8867e0ee131c3c0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_99fa9f1c5a51b0cb4ed39312fd347fccaa5cb541a0e39ff8867e0ee131c3c0e4->leave($__internal_99fa9f1c5a51b0cb4ed39312fd347fccaa5cb541a0e39ff8867e0ee131c3c0e4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c1d5fe883ece4d66887ea6fbd10ffab63eded19d856d7150a1950ca0cbcdcca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c1d5fe883ece4d66887ea6fbd10ffab63eded19d856d7150a1950ca0cbcdcca->enter($__internal_8c1d5fe883ece4d66887ea6fbd10ffab63eded19d856d7150a1950ca0cbcdcca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8c1d5fe883ece4d66887ea6fbd10ffab63eded19d856d7150a1950ca0cbcdcca->leave($__internal_8c1d5fe883ece4d66887ea6fbd10ffab63eded19d856d7150a1950ca0cbcdcca_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d355e850cc8f9523fa3de1561ef26c964dfc52308d47a73cf3dcc78c51206ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d355e850cc8f9523fa3de1561ef26c964dfc52308d47a73cf3dcc78c51206ec->enter($__internal_4d355e850cc8f9523fa3de1561ef26c964dfc52308d47a73cf3dcc78c51206ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4d355e850cc8f9523fa3de1561ef26c964dfc52308d47a73cf3dcc78c51206ec->leave($__internal_4d355e850cc8f9523fa3de1561ef26c964dfc52308d47a73cf3dcc78c51206ec_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2dbbe6b3b06d7e543c99010a3b9dc3f47f5be7b935dfa0469134e9fc4046604a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dbbe6b3b06d7e543c99010a3b9dc3f47f5be7b935dfa0469134e9fc4046604a->enter($__internal_2dbbe6b3b06d7e543c99010a3b9dc3f47f5be7b935dfa0469134e9fc4046604a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2dbbe6b3b06d7e543c99010a3b9dc3f47f5be7b935dfa0469134e9fc4046604a->leave($__internal_2dbbe6b3b06d7e543c99010a3b9dc3f47f5be7b935dfa0469134e9fc4046604a_prof);

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
