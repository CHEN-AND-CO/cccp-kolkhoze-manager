<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d7dbf3db3bb7bed2a3f4feef7501c2394c961991fa14539e0d0c8dba0b6de77c extends Twig_Template
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
        $__internal_407eeb771b3be1818278737ffbc1bb1b52ff321a1436c9c0f4fae28ceb06f41b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407eeb771b3be1818278737ffbc1bb1b52ff321a1436c9c0f4fae28ceb06f41b->enter($__internal_407eeb771b3be1818278737ffbc1bb1b52ff321a1436c9c0f4fae28ceb06f41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_407eeb771b3be1818278737ffbc1bb1b52ff321a1436c9c0f4fae28ceb06f41b->leave($__internal_407eeb771b3be1818278737ffbc1bb1b52ff321a1436c9c0f4fae28ceb06f41b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/mathias/Bureau/ISEN/PHP/Projet/Symfony_Angular/project_git/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
