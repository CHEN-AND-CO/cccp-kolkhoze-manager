<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_c68e8f3556d491c6a7920c412510dd2829b44d6b0957808f7a1412d0e2a0a883 extends Twig_Template
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
        $__internal_7fe4b7ab7aa736d83de749724bb66f6bfd46d235e903b6fdb73c0ad3b84b16dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe4b7ab7aa736d83de749724bb66f6bfd46d235e903b6fdb73c0ad3b84b16dc->enter($__internal_7fe4b7ab7aa736d83de749724bb66f6bfd46d235e903b6fdb73c0ad3b84b16dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7fe4b7ab7aa736d83de749724bb66f6bfd46d235e903b6fdb73c0ad3b84b16dc->leave($__internal_7fe4b7ab7aa736d83de749724bb66f6bfd46d235e903b6fdb73c0ad3b84b16dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/mathias/Bureau/ISEN/PHP/Projet/Symfony_Angular/project_git/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
