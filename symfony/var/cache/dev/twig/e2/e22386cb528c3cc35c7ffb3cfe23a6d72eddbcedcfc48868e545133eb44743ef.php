<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a3115c01f0f98af2e3fa2fd019f03553964fb6866ffe8d8c011a7e57ec5b13ac extends Twig_Template
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
        $__internal_ac4e2b091883a07dfbe9f95429d174a71845ac98d5ff1a1ac1f353b1f99d4af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac4e2b091883a07dfbe9f95429d174a71845ac98d5ff1a1ac1f353b1f99d4af0->enter($__internal_ac4e2b091883a07dfbe9f95429d174a71845ac98d5ff1a1ac1f353b1f99d4af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ac4e2b091883a07dfbe9f95429d174a71845ac98d5ff1a1ac1f353b1f99d4af0->leave($__internal_ac4e2b091883a07dfbe9f95429d174a71845ac98d5ff1a1ac1f353b1f99d4af0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/mathias/Bureau/ISEN/PHP/Projet/Symfony_Angular/project_git/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
