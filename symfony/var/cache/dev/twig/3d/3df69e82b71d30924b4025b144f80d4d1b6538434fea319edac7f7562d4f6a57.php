<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4637bdf881b03616502cff663e952e1de11fb13ee777e5412be7d6c409e8894f extends Twig_Template
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
        $__internal_e5e9883ea87be7fd0d0d489043b0f1d6056cc68ee0070e3097417ef7fc6ec7ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e9883ea87be7fd0d0d489043b0f1d6056cc68ee0070e3097417ef7fc6ec7ab->enter($__internal_e5e9883ea87be7fd0d0d489043b0f1d6056cc68ee0070e3097417ef7fc6ec7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_e5e9883ea87be7fd0d0d489043b0f1d6056cc68ee0070e3097417ef7fc6ec7ab->leave($__internal_e5e9883ea87be7fd0d0d489043b0f1d6056cc68ee0070e3097417ef7fc6ec7ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/mathias/Bureau/ISEN/PHP/Projet/Symfony_Angular/project_git/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
