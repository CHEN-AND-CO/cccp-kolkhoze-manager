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
        $__internal_0b9321ff4787c19ae2ab47715ac1bab6d07c34990058fb9db53422df0b92c187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b9321ff4787c19ae2ab47715ac1bab6d07c34990058fb9db53422df0b92c187->enter($__internal_0b9321ff4787c19ae2ab47715ac1bab6d07c34990058fb9db53422df0b92c187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0b9321ff4787c19ae2ab47715ac1bab6d07c34990058fb9db53422df0b92c187->leave($__internal_0b9321ff4787c19ae2ab47715ac1bab6d07c34990058fb9db53422df0b92c187_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0465a7aa85a4f2a89975a07a3f83a8aafca5e34bbc85800de1c63aea22172904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0465a7aa85a4f2a89975a07a3f83a8aafca5e34bbc85800de1c63aea22172904->enter($__internal_0465a7aa85a4f2a89975a07a3f83a8aafca5e34bbc85800de1c63aea22172904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0465a7aa85a4f2a89975a07a3f83a8aafca5e34bbc85800de1c63aea22172904->leave($__internal_0465a7aa85a4f2a89975a07a3f83a8aafca5e34bbc85800de1c63aea22172904_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f499a68defafdb7e85368934d6e180075763e103bb19c600e70061db136f9156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f499a68defafdb7e85368934d6e180075763e103bb19c600e70061db136f9156->enter($__internal_f499a68defafdb7e85368934d6e180075763e103bb19c600e70061db136f9156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f499a68defafdb7e85368934d6e180075763e103bb19c600e70061db136f9156->leave($__internal_f499a68defafdb7e85368934d6e180075763e103bb19c600e70061db136f9156_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_088766fd4e1066fc310b78f9a1827b83783aa4e11d52605e2ed798d37efdfa08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_088766fd4e1066fc310b78f9a1827b83783aa4e11d52605e2ed798d37efdfa08->enter($__internal_088766fd4e1066fc310b78f9a1827b83783aa4e11d52605e2ed798d37efdfa08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_088766fd4e1066fc310b78f9a1827b83783aa4e11d52605e2ed798d37efdfa08->leave($__internal_088766fd4e1066fc310b78f9a1827b83783aa4e11d52605e2ed798d37efdfa08_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_197e1f0400f5ea5ba33a5619f30a51dce615c17894349949f79075368cc46aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197e1f0400f5ea5ba33a5619f30a51dce615c17894349949f79075368cc46aa9->enter($__internal_197e1f0400f5ea5ba33a5619f30a51dce615c17894349949f79075368cc46aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_197e1f0400f5ea5ba33a5619f30a51dce615c17894349949f79075368cc46aa9->leave($__internal_197e1f0400f5ea5ba33a5619f30a51dce615c17894349949f79075368cc46aa9_prof);

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
