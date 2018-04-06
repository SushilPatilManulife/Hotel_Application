<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c23e70cfbf7102f384e5e06ec512a098e7f56aa05e108e9939e8c3d1202d1cb6 extends Twig_Template
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
        $__internal_3fa83922c88acf2c146fc8d2a7cb85cda20ab227d05c6706eb81772b41527719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fa83922c88acf2c146fc8d2a7cb85cda20ab227d05c6706eb81772b41527719->enter($__internal_3fa83922c88acf2c146fc8d2a7cb85cda20ab227d05c6706eb81772b41527719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_03d50aa6d2c7a42d17e564843ef5222b8605be3dfa90580c33e54be45f6b9734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d50aa6d2c7a42d17e564843ef5222b8605be3dfa90580c33e54be45f6b9734->enter($__internal_03d50aa6d2c7a42d17e564843ef5222b8605be3dfa90580c33e54be45f6b9734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3fa83922c88acf2c146fc8d2a7cb85cda20ab227d05c6706eb81772b41527719->leave($__internal_3fa83922c88acf2c146fc8d2a7cb85cda20ab227d05c6706eb81772b41527719_prof);

        
        $__internal_03d50aa6d2c7a42d17e564843ef5222b8605be3dfa90580c33e54be45f6b9734->leave($__internal_03d50aa6d2c7a42d17e564843ef5222b8605be3dfa90580c33e54be45f6b9734_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
