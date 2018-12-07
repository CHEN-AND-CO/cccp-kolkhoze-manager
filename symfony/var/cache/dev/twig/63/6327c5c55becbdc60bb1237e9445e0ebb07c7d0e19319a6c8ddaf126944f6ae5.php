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
        $__internal_e2bbc26d6da33c726c2dbb6e588262248f2979ab0e7b2f34a5a8b44eb7f4cf55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2bbc26d6da33c726c2dbb6e588262248f2979ab0e7b2f34a5a8b44eb7f4cf55->enter($__internal_e2bbc26d6da33c726c2dbb6e588262248f2979ab0e7b2f34a5a8b44eb7f4cf55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e2bbc26d6da33c726c2dbb6e588262248f2979ab0e7b2f34a5a8b44eb7f4cf55->leave($__internal_e2bbc26d6da33c726c2dbb6e588262248f2979ab0e7b2f34a5a8b44eb7f4cf55_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_998e9db6f655bbfe8ce8359611f352d3dcb95883a9417a02b214e534e3367e9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_998e9db6f655bbfe8ce8359611f352d3dcb95883a9417a02b214e534e3367e9d->enter($__internal_998e9db6f655bbfe8ce8359611f352d3dcb95883a9417a02b214e534e3367e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_998e9db6f655bbfe8ce8359611f352d3dcb95883a9417a02b214e534e3367e9d->leave($__internal_998e9db6f655bbfe8ce8359611f352d3dcb95883a9417a02b214e534e3367e9d_prof);

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
