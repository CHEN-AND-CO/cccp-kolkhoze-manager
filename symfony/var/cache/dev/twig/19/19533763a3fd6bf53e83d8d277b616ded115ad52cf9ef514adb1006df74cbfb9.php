<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_95d7afa5dccedf33d5c5855dd7cff6cece12ad2c9179c95e5f380d3d7bc24e66 extends Twig_Template
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
        $__internal_cb322a6e6e68c79d605e6caf14a8a22b509b01fbe33d5785c329a1b9ef850001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb322a6e6e68c79d605e6caf14a8a22b509b01fbe33d5785c329a1b9ef850001->enter($__internal_cb322a6e6e68c79d605e6caf14a8a22b509b01fbe33d5785c329a1b9ef850001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_cb322a6e6e68c79d605e6caf14a8a22b509b01fbe33d5785c329a1b9ef850001->leave($__internal_cb322a6e6e68c79d605e6caf14a8a22b509b01fbe33d5785c329a1b9ef850001_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/mathias/Bureau/ISEN/PHP/Projet/Symfony_Angular/project_git/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
