<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f5a4e4e47a61dbc596b8a5cf6c4251cf9809cbaa7fe0192c935bf3aa4bd7f2e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33652075a152ad3e8fd16e44b34f15a8fff3c07943da3a0355b566b9bad91baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33652075a152ad3e8fd16e44b34f15a8fff3c07943da3a0355b566b9bad91baa->enter($__internal_33652075a152ad3e8fd16e44b34f15a8fff3c07943da3a0355b566b9bad91baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33652075a152ad3e8fd16e44b34f15a8fff3c07943da3a0355b566b9bad91baa->leave($__internal_33652075a152ad3e8fd16e44b34f15a8fff3c07943da3a0355b566b9bad91baa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4ec1366411324be779450597201328a8eea832d10815a1a07616f78209f4b14e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec1366411324be779450597201328a8eea832d10815a1a07616f78209f4b14e->enter($__internal_4ec1366411324be779450597201328a8eea832d10815a1a07616f78209f4b14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4ec1366411324be779450597201328a8eea832d10815a1a07616f78209f4b14e->leave($__internal_4ec1366411324be779450597201328a8eea832d10815a1a07616f78209f4b14e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff93a2d0a8b9a7b063ae56dca4a989f6378ad6ee8215bac2f6f790a82ac71e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff93a2d0a8b9a7b063ae56dca4a989f6378ad6ee8215bac2f6f790a82ac71e9c->enter($__internal_ff93a2d0a8b9a7b063ae56dca4a989f6378ad6ee8215bac2f6f790a82ac71e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ff93a2d0a8b9a7b063ae56dca4a989f6378ad6ee8215bac2f6f790a82ac71e9c->leave($__internal_ff93a2d0a8b9a7b063ae56dca4a989f6378ad6ee8215bac2f6f790a82ac71e9c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_89ca58dd0c147ebe0b41d73cb4f0f084fb5e027e92d1a98238cb5af72f570ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ca58dd0c147ebe0b41d73cb4f0f084fb5e027e92d1a98238cb5af72f570ea5->enter($__internal_89ca58dd0c147ebe0b41d73cb4f0f084fb5e027e92d1a98238cb5af72f570ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_89ca58dd0c147ebe0b41d73cb4f0f084fb5e027e92d1a98238cb5af72f570ea5->leave($__internal_89ca58dd0c147ebe0b41d73cb4f0f084fb5e027e92d1a98238cb5af72f570ea5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/mathias/Bureau/ISEN/PHP/Projet/Symfony_Angular/project_git/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
