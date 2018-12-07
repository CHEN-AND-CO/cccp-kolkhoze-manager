<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1a4e254d99350e31e2f1320a6b3258f61bc6876a0452cf5602c2a2eef09494fc extends Twig_Template
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
        $__internal_76ebce4f56188b387d610b40b1cc4e06d7c70ed3888f8ea18332103b3c3d030b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ebce4f56188b387d610b40b1cc4e06d7c70ed3888f8ea18332103b3c3d030b->enter($__internal_76ebce4f56188b387d610b40b1cc4e06d7c70ed3888f8ea18332103b3c3d030b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_76ebce4f56188b387d610b40b1cc4e06d7c70ed3888f8ea18332103b3c3d030b->leave($__internal_76ebce4f56188b387d610b40b1cc4e06d7c70ed3888f8ea18332103b3c3d030b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/home/mathias/Bureau/ISEN/PHP/Projet/Symfony_Angular/project_git/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
