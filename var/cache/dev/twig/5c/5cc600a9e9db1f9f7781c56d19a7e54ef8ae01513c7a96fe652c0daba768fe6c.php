<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_aece97d57c6cb2a6236aedd77646cac60942da4b83acd73642846f6c2067d6ac extends Twig_Template
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
        $__internal_b6a14f9ac582733ec87bac0e41ad9d8e323d8f842cdc82abb9223f94f0a1cea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6a14f9ac582733ec87bac0e41ad9d8e323d8f842cdc82abb9223f94f0a1cea0->enter($__internal_b6a14f9ac582733ec87bac0e41ad9d8e323d8f842cdc82abb9223f94f0a1cea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_c335785f7a1bb09067e422767473abb0821726edee6245c2385e3b961927e8fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c335785f7a1bb09067e422767473abb0821726edee6245c2385e3b961927e8fa->enter($__internal_c335785f7a1bb09067e422767473abb0821726edee6245c2385e3b961927e8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b6a14f9ac582733ec87bac0e41ad9d8e323d8f842cdc82abb9223f94f0a1cea0->leave($__internal_b6a14f9ac582733ec87bac0e41ad9d8e323d8f842cdc82abb9223f94f0a1cea0_prof);

        
        $__internal_c335785f7a1bb09067e422767473abb0821726edee6245c2385e3b961927e8fa->leave($__internal_c335785f7a1bb09067e422767473abb0821726edee6245c2385e3b961927e8fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
