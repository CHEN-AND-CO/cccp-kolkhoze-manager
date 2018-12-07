<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3778406ef85a6637d2a2a0be9d378272396e22464ec59695638d364213c2a4f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_289ce5e165e92887a1182051a0dde64c4097f02f06e5ae366a24ecbe51d6e85e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_289ce5e165e92887a1182051a0dde64c4097f02f06e5ae366a24ecbe51d6e85e->enter($__internal_289ce5e165e92887a1182051a0dde64c4097f02f06e5ae366a24ecbe51d6e85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_289ce5e165e92887a1182051a0dde64c4097f02f06e5ae366a24ecbe51d6e85e->leave($__internal_289ce5e165e92887a1182051a0dde64c4097f02f06e5ae366a24ecbe51d6e85e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6e807a0d779fec7f9fab81937f96c1e644c07a9aa2087eb823b60ce9e7e1377a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e807a0d779fec7f9fab81937f96c1e644c07a9aa2087eb823b60ce9e7e1377a->enter($__internal_6e807a0d779fec7f9fab81937f96c1e644c07a9aa2087eb823b60ce9e7e1377a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6e807a0d779fec7f9fab81937f96c1e644c07a9aa2087eb823b60ce9e7e1377a->leave($__internal_6e807a0d779fec7f9fab81937f96c1e644c07a9aa2087eb823b60ce9e7e1377a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/mathias/Bureau/ISEN/PHP/Projet/Symfony_Angular/project_git/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
