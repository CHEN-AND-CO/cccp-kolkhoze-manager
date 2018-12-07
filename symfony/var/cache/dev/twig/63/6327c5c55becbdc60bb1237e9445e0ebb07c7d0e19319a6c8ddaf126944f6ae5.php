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
        $__internal_18a774c4e790050265ee22abb624790b802f42747bf771713341c4cb752f43ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a774c4e790050265ee22abb624790b802f42747bf771713341c4cb752f43ed->enter($__internal_18a774c4e790050265ee22abb624790b802f42747bf771713341c4cb752f43ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_18a774c4e790050265ee22abb624790b802f42747bf771713341c4cb752f43ed->leave($__internal_18a774c4e790050265ee22abb624790b802f42747bf771713341c4cb752f43ed_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_64d38a52f1a18cc93e558b6599d540871ff0854a8c2b09f0614957f22e29592f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d38a52f1a18cc93e558b6599d540871ff0854a8c2b09f0614957f22e29592f->enter($__internal_64d38a52f1a18cc93e558b6599d540871ff0854a8c2b09f0614957f22e29592f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_64d38a52f1a18cc93e558b6599d540871ff0854a8c2b09f0614957f22e29592f->leave($__internal_64d38a52f1a18cc93e558b6599d540871ff0854a8c2b09f0614957f22e29592f_prof);

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
