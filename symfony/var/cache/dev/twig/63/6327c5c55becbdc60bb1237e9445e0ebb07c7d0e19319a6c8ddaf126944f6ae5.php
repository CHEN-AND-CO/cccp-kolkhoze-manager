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
        $__internal_d1127520ba8ced5af26deda748e79238ed4378063a2a4c7efc948369efe16a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1127520ba8ced5af26deda748e79238ed4378063a2a4c7efc948369efe16a42->enter($__internal_d1127520ba8ced5af26deda748e79238ed4378063a2a4c7efc948369efe16a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d1127520ba8ced5af26deda748e79238ed4378063a2a4c7efc948369efe16a42->leave($__internal_d1127520ba8ced5af26deda748e79238ed4378063a2a4c7efc948369efe16a42_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8aa62265ae757bda7ca4f3471e8f704f9ac996a77ea5440ffb06ba87c2b33b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aa62265ae757bda7ca4f3471e8f704f9ac996a77ea5440ffb06ba87c2b33b1c->enter($__internal_8aa62265ae757bda7ca4f3471e8f704f9ac996a77ea5440ffb06ba87c2b33b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8aa62265ae757bda7ca4f3471e8f704f9ac996a77ea5440ffb06ba87c2b33b1c->leave($__internal_8aa62265ae757bda7ca4f3471e8f704f9ac996a77ea5440ffb06ba87c2b33b1c_prof);

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
