<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_7f6346e085aff589da08052b3741a617b9cecd465388e5e1d750c0c0866acee4 extends Twig_Template
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
        $__internal_19204c7a3f1a99103381d33ee8cce9332bf9c1b7dcbdf74bcfcb28e7a7bc085e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19204c7a3f1a99103381d33ee8cce9332bf9c1b7dcbdf74bcfcb28e7a7bc085e->enter($__internal_19204c7a3f1a99103381d33ee8cce9332bf9c1b7dcbdf74bcfcb28e7a7bc085e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_f4861d9dc2031c4917c9fbb2e72a5d76d69e18c1b1eb9d33c16de8e239759ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4861d9dc2031c4917c9fbb2e72a5d76d69e18c1b1eb9d33c16de8e239759ac7->enter($__internal_f4861d9dc2031c4917c9fbb2e72a5d76d69e18c1b1eb9d33c16de8e239759ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_19204c7a3f1a99103381d33ee8cce9332bf9c1b7dcbdf74bcfcb28e7a7bc085e->leave($__internal_19204c7a3f1a99103381d33ee8cce9332bf9c1b7dcbdf74bcfcb28e7a7bc085e_prof);

        
        $__internal_f4861d9dc2031c4917c9fbb2e72a5d76d69e18c1b1eb9d33c16de8e239759ac7->leave($__internal_f4861d9dc2031c4917c9fbb2e72a5d76d69e18c1b1eb9d33c16de8e239759ac7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
