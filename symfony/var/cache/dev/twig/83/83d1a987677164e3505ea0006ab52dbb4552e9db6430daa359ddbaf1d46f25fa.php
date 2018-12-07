<?php

/* FrontOfficeBundle:Default:index.html.twig */
class __TwigTemplate_49a4ea83cd9929f096bd921d0dd89c07a2dbacd5e100f04cceaf96110aced5f7 extends Twig_Template
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
        $__internal_57cc9416f4692ee27985d00f44fe7133499b38ccf3c0edd38ccc9cd698063977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57cc9416f4692ee27985d00f44fe7133499b38ccf3c0edd38ccc9cd698063977->enter($__internal_57cc9416f4692ee27985d00f44fe7133499b38ccf3c0edd38ccc9cd698063977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_57cc9416f4692ee27985d00f44fe7133499b38ccf3c0edd38ccc9cd698063977->leave($__internal_57cc9416f4692ee27985d00f44fe7133499b38ccf3c0edd38ccc9cd698063977_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Default:index.html.twig";
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
", "FrontOfficeBundle:Default:index.html.twig", "/home/mathias/Bureau/ISEN/PHP/Projet/Symfony_Angular/project_git/symfony/src/FrontOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
