<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2860e5c2f8c997d9d0dcb582a6c488d9a51615957c5bde6e68a1c68889f2393e extends Twig_Template
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
        $__internal_2f40ba4641ec66fbbc0e6b3c486ddd272ea8160af2c6479ee9a1b1a21c438a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f40ba4641ec66fbbc0e6b3c486ddd272ea8160af2c6479ee9a1b1a21c438a2b->enter($__internal_2f40ba4641ec66fbbc0e6b3c486ddd272ea8160af2c6479ee9a1b1a21c438a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2f40ba4641ec66fbbc0e6b3c486ddd272ea8160af2c6479ee9a1b1a21c438a2b->leave($__internal_2f40ba4641ec66fbbc0e6b3c486ddd272ea8160af2c6479ee9a1b1a21c438a2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/mathias/Bureau/ISEN/PHP/Projet/Symfony_Angular/project_git/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
