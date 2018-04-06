<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_82738a94dc215c25282effa7666cc57e9630aef5960aeab1ef4cfa3307015cd6 extends Twig_Template
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
        $__internal_84108b27e08edca5f9fff3a491db6146a44f44649ab6e14400fa7c65daca56a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84108b27e08edca5f9fff3a491db6146a44f44649ab6e14400fa7c65daca56a4->enter($__internal_84108b27e08edca5f9fff3a491db6146a44f44649ab6e14400fa7c65daca56a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_f785a3fd2f22b621dba993f3ebc2459718fffad1d7bb6e55b4d07dad18166628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f785a3fd2f22b621dba993f3ebc2459718fffad1d7bb6e55b4d07dad18166628->enter($__internal_f785a3fd2f22b621dba993f3ebc2459718fffad1d7bb6e55b4d07dad18166628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_84108b27e08edca5f9fff3a491db6146a44f44649ab6e14400fa7c65daca56a4->leave($__internal_84108b27e08edca5f9fff3a491db6146a44f44649ab6e14400fa7c65daca56a4_prof);

        
        $__internal_f785a3fd2f22b621dba993f3ebc2459718fffad1d7bb6e55b4d07dad18166628->leave($__internal_f785a3fd2f22b621dba993f3ebc2459718fffad1d7bb6e55b4d07dad18166628_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
