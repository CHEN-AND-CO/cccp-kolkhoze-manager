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
        $__internal_5ebf77bd585fc5825181f95d75f12d2eed9e4715d6496190e8db182c4f65e807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ebf77bd585fc5825181f95d75f12d2eed9e4715d6496190e8db182c4f65e807->enter($__internal_5ebf77bd585fc5825181f95d75f12d2eed9e4715d6496190e8db182c4f65e807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5ebf77bd585fc5825181f95d75f12d2eed9e4715d6496190e8db182c4f65e807->leave($__internal_5ebf77bd585fc5825181f95d75f12d2eed9e4715d6496190e8db182c4f65e807_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_38e928085f53ace7b564ca54f8784302351cf5ab7bdc20cacb582c6e1662cba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e928085f53ace7b564ca54f8784302351cf5ab7bdc20cacb582c6e1662cba7->enter($__internal_38e928085f53ace7b564ca54f8784302351cf5ab7bdc20cacb582c6e1662cba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_38e928085f53ace7b564ca54f8784302351cf5ab7bdc20cacb582c6e1662cba7->leave($__internal_38e928085f53ace7b564ca54f8784302351cf5ab7bdc20cacb582c6e1662cba7_prof);

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
