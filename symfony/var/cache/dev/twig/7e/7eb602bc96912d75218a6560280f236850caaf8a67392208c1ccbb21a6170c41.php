<?php

/* WebServiceBundle:Default:index.html.twig */
class __TwigTemplate_ed9e7645ebce1d71f9d6e0268c87135ef65ac39ab589916abcac68862bc0f460 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3ca2cf5ebd335eb8b28ca4a5f32b00b9f5c60eea8b43fadb83bf6eaf3938c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ca2cf5ebd335eb8b28ca4a5f32b00b9f5c60eea8b43fadb83bf6eaf3938c32->enter($__internal_b3ca2cf5ebd335eb8b28ca4a5f32b00b9f5c60eea8b43fadb83bf6eaf3938c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebServiceBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_b3ca2cf5ebd335eb8b28ca4a5f32b00b9f5c60eea8b43fadb83bf6eaf3938c32->leave($__internal_b3ca2cf5ebd335eb8b28ca4a5f32b00b9f5c60eea8b43fadb83bf6eaf3938c32_prof);

    }

    public function getTemplateName()
    {
        return "WebServiceBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "WebServiceBundle:Default:index.html.twig", "/home/mathias/Bureau/ISEN/PHP/Projet/Symfony_Angular/project_git/symfony/src/WebServiceBundle/Resources/views/Default/index.html.twig");
    }
}
