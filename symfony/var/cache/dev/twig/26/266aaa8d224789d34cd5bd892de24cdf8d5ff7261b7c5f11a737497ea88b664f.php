<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_928c700f1bd55e7d3ce8c237ede9f16eb961626e4bf9ade239529ad63438dae4 extends Twig_Template
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
        $__internal_39d02a9961fcd5f1d8041d572d8b1b54f9b38a415aa48033a8c7f29e291b2f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d02a9961fcd5f1d8041d572d8b1b54f9b38a415aa48033a8c7f29e291b2f7b->enter($__internal_39d02a9961fcd5f1d8041d572d8b1b54f9b38a415aa48033a8c7f29e291b2f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_39d02a9961fcd5f1d8041d572d8b1b54f9b38a415aa48033a8c7f29e291b2f7b->leave($__internal_39d02a9961fcd5f1d8041d572d8b1b54f9b38a415aa48033a8c7f29e291b2f7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/mathias/Bureau/ISEN/PHP/Projet/Symfony_Angular/project_git/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
