<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_7431e024b2747fc2255f44fff69cb872022d366d1139592eeccf736f3b9b1cc8 extends Twig_Template
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
        $__internal_a556a7021106169e32b78584bb1906407db78b10b961c4e7e513fab9cd8171b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a556a7021106169e32b78584bb1906407db78b10b961c4e7e513fab9cd8171b3->enter($__internal_a556a7021106169e32b78584bb1906407db78b10b961c4e7e513fab9cd8171b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_b8c16f9d01016d4dff7d9ce90c225a8ccffe6ed8d8ce41cd9281674227658e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c16f9d01016d4dff7d9ce90c225a8ccffe6ed8d8ce41cd9281674227658e64->enter($__internal_b8c16f9d01016d4dff7d9ce90c225a8ccffe6ed8d8ce41cd9281674227658e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a556a7021106169e32b78584bb1906407db78b10b961c4e7e513fab9cd8171b3->leave($__internal_a556a7021106169e32b78584bb1906407db78b10b961c4e7e513fab9cd8171b3_prof);

        
        $__internal_b8c16f9d01016d4dff7d9ce90c225a8ccffe6ed8d8ce41cd9281674227658e64->leave($__internal_b8c16f9d01016d4dff7d9ce90c225a8ccffe6ed8d8ce41cd9281674227658e64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
