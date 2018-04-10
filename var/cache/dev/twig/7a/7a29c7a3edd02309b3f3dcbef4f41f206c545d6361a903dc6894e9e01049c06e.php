<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7384cc65981bb52535bf7e3b0fd2b4fae26712ad6aacaa920111860c1320c99f extends Twig_Template
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
        $__internal_a05aaf2e4c1d548c9e69d97f1f58f336d6be76bf1e63fa421b6ca9dff313e3f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a05aaf2e4c1d548c9e69d97f1f58f336d6be76bf1e63fa421b6ca9dff313e3f9->enter($__internal_a05aaf2e4c1d548c9e69d97f1f58f336d6be76bf1e63fa421b6ca9dff313e3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_30bf937dbfdb485318181ab1fcb6ffad36512f964b81fb0c1f87c7ff7013c818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30bf937dbfdb485318181ab1fcb6ffad36512f964b81fb0c1f87c7ff7013c818->enter($__internal_30bf937dbfdb485318181ab1fcb6ffad36512f964b81fb0c1f87c7ff7013c818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a05aaf2e4c1d548c9e69d97f1f58f336d6be76bf1e63fa421b6ca9dff313e3f9->leave($__internal_a05aaf2e4c1d548c9e69d97f1f58f336d6be76bf1e63fa421b6ca9dff313e3f9_prof);

        
        $__internal_30bf937dbfdb485318181ab1fcb6ffad36512f964b81fb0c1f87c7ff7013c818->leave($__internal_30bf937dbfdb485318181ab1fcb6ffad36512f964b81fb0c1f87c7ff7013c818_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
