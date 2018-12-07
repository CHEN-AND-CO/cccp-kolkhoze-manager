<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_5c39970d0f62eebec53d6d8a047872f68deb9b53c68121b1736044beb2a3c477 extends Twig_Template
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
        $__internal_881e5c6dd7a12ac6dc1b36b62ded591b58be2c4b57c47b6b1bcab4c62f73f22c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_881e5c6dd7a12ac6dc1b36b62ded591b58be2c4b57c47b6b1bcab4c62f73f22c->enter($__internal_881e5c6dd7a12ac6dc1b36b62ded591b58be2c4b57c47b6b1bcab4c62f73f22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_881e5c6dd7a12ac6dc1b36b62ded591b58be2c4b57c47b6b1bcab4c62f73f22c->leave($__internal_881e5c6dd7a12ac6dc1b36b62ded591b58be2c4b57c47b6b1bcab4c62f73f22c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/mathias/Bureau/ISEN/PHP/Projet/Symfony_Angular/project_git/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
