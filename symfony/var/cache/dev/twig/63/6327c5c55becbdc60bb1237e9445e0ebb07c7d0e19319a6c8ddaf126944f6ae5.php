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
        $__internal_eb68523c7193d984d0650febebc61ab426fb9caf94332c8345e118b2e07e6a2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb68523c7193d984d0650febebc61ab426fb9caf94332c8345e118b2e07e6a2a->enter($__internal_eb68523c7193d984d0650febebc61ab426fb9caf94332c8345e118b2e07e6a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_eb68523c7193d984d0650febebc61ab426fb9caf94332c8345e118b2e07e6a2a->leave($__internal_eb68523c7193d984d0650febebc61ab426fb9caf94332c8345e118b2e07e6a2a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bce959a761fe959b38bcf42bb9e43a5a2873be111eb65b2323991d89ae6f8c64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce959a761fe959b38bcf42bb9e43a5a2873be111eb65b2323991d89ae6f8c64->enter($__internal_bce959a761fe959b38bcf42bb9e43a5a2873be111eb65b2323991d89ae6f8c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_bce959a761fe959b38bcf42bb9e43a5a2873be111eb65b2323991d89ae6f8c64->leave($__internal_bce959a761fe959b38bcf42bb9e43a5a2873be111eb65b2323991d89ae6f8c64_prof);

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
