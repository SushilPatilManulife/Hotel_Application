<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_3b17a0a3138b9f6a5d32da5eac6303b282a9ef2cc2f81dc6cd5569f5dba97556 extends Twig_Template
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
        $__internal_a88749549952dce607c106bbbc341ca21ec43cdd5c71942e4cf58643188eb211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a88749549952dce607c106bbbc341ca21ec43cdd5c71942e4cf58643188eb211->enter($__internal_a88749549952dce607c106bbbc341ca21ec43cdd5c71942e4cf58643188eb211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_6a295dc7f1fd49a92c4622df3319be2a74d87198f30beb505ff0705acf72add2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a295dc7f1fd49a92c4622df3319be2a74d87198f30beb505ff0705acf72add2->enter($__internal_6a295dc7f1fd49a92c4622df3319be2a74d87198f30beb505ff0705acf72add2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_a88749549952dce607c106bbbc341ca21ec43cdd5c71942e4cf58643188eb211->leave($__internal_a88749549952dce607c106bbbc341ca21ec43cdd5c71942e4cf58643188eb211_prof);

        
        $__internal_6a295dc7f1fd49a92c4622df3319be2a74d87198f30beb505ff0705acf72add2->leave($__internal_6a295dc7f1fd49a92c4622df3319be2a74d87198f30beb505ff0705acf72add2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
