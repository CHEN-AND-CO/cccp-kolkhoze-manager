<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8a72aa64d0b831e00b010149ab4ce976eb1e3850427d11304701fa2c6628539c extends Twig_Template
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
        $__internal_037f4fb5d58c2cd3a064e3409925b3c354350bba4d07f59fcf7c4098b13408eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037f4fb5d58c2cd3a064e3409925b3c354350bba4d07f59fcf7c4098b13408eb->enter($__internal_037f4fb5d58c2cd3a064e3409925b3c354350bba4d07f59fcf7c4098b13408eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_037f4fb5d58c2cd3a064e3409925b3c354350bba4d07f59fcf7c4098b13408eb->leave($__internal_037f4fb5d58c2cd3a064e3409925b3c354350bba4d07f59fcf7c4098b13408eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/mathias/Bureau/ISEN/PHP/Projet/Symfony_Angular/project_git/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
