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
        $__internal_8ac381e650f329ef5507f0ec40d158cb4e0f15c76067fbcb9f71bb49ab84c83d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac381e650f329ef5507f0ec40d158cb4e0f15c76067fbcb9f71bb49ab84c83d->enter($__internal_8ac381e650f329ef5507f0ec40d158cb4e0f15c76067fbcb9f71bb49ab84c83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ac381e650f329ef5507f0ec40d158cb4e0f15c76067fbcb9f71bb49ab84c83d->leave($__internal_8ac381e650f329ef5507f0ec40d158cb4e0f15c76067fbcb9f71bb49ab84c83d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bfcecded45fb657a82f8478a017612817a2f3a43f685bc3a3b7890f91fde69e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfcecded45fb657a82f8478a017612817a2f3a43f685bc3a3b7890f91fde69e5->enter($__internal_bfcecded45fb657a82f8478a017612817a2f3a43f685bc3a3b7890f91fde69e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bfcecded45fb657a82f8478a017612817a2f3a43f685bc3a3b7890f91fde69e5->leave($__internal_bfcecded45fb657a82f8478a017612817a2f3a43f685bc3a3b7890f91fde69e5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f852ae1047432201b4e511f9030f2ef753f840fef2d7bef1d30350157088b2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f852ae1047432201b4e511f9030f2ef753f840fef2d7bef1d30350157088b2f7->enter($__internal_f852ae1047432201b4e511f9030f2ef753f840fef2d7bef1d30350157088b2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f852ae1047432201b4e511f9030f2ef753f840fef2d7bef1d30350157088b2f7->leave($__internal_f852ae1047432201b4e511f9030f2ef753f840fef2d7bef1d30350157088b2f7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fd0adb5ef8629beda00e95c1e85e9f468761ec9c85b29912b328e4cbb094055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd0adb5ef8629beda00e95c1e85e9f468761ec9c85b29912b328e4cbb094055->enter($__internal_0fd0adb5ef8629beda00e95c1e85e9f468761ec9c85b29912b328e4cbb094055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0fd0adb5ef8629beda00e95c1e85e9f468761ec9c85b29912b328e4cbb094055->leave($__internal_0fd0adb5ef8629beda00e95c1e85e9f468761ec9c85b29912b328e4cbb094055_prof);

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
