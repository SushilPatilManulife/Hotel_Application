<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5ef5fdcbd8e59e41d8e204de695fae57b99b330299ee5af075e3080585f2d041 extends Twig_Template
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
        $__internal_bb9775aa5ae97b03c64d84e7d9c9ea094f00b52a1f5b041975703c00c6245c2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb9775aa5ae97b03c64d84e7d9c9ea094f00b52a1f5b041975703c00c6245c2f->enter($__internal_bb9775aa5ae97b03c64d84e7d9c9ea094f00b52a1f5b041975703c00c6245c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_33fbc4ef786560ba7f737bf76077e45b812d63cd479a67f542f6e561d7820a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33fbc4ef786560ba7f737bf76077e45b812d63cd479a67f542f6e561d7820a3e->enter($__internal_33fbc4ef786560ba7f737bf76077e45b812d63cd479a67f542f6e561d7820a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bb9775aa5ae97b03c64d84e7d9c9ea094f00b52a1f5b041975703c00c6245c2f->leave($__internal_bb9775aa5ae97b03c64d84e7d9c9ea094f00b52a1f5b041975703c00c6245c2f_prof);

        
        $__internal_33fbc4ef786560ba7f737bf76077e45b812d63cd479a67f542f6e561d7820a3e->leave($__internal_33fbc4ef786560ba7f737bf76077e45b812d63cd479a67f542f6e561d7820a3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
