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
        $__internal_227ac7a4a1469beacb18cc9922eaff75268b4a143ac3c2ceef406ccbab5486b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_227ac7a4a1469beacb18cc9922eaff75268b4a143ac3c2ceef406ccbab5486b8->enter($__internal_227ac7a4a1469beacb18cc9922eaff75268b4a143ac3c2ceef406ccbab5486b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_ee7ea96cff5c2d3ec2f16931c5d433de190b9b51ffc72052afa72dda24e64b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7ea96cff5c2d3ec2f16931c5d433de190b9b51ffc72052afa72dda24e64b24->enter($__internal_ee7ea96cff5c2d3ec2f16931c5d433de190b9b51ffc72052afa72dda24e64b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_227ac7a4a1469beacb18cc9922eaff75268b4a143ac3c2ceef406ccbab5486b8->leave($__internal_227ac7a4a1469beacb18cc9922eaff75268b4a143ac3c2ceef406ccbab5486b8_prof);

        
        $__internal_ee7ea96cff5c2d3ec2f16931c5d433de190b9b51ffc72052afa72dda24e64b24->leave($__internal_ee7ea96cff5c2d3ec2f16931c5d433de190b9b51ffc72052afa72dda24e64b24_prof);

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
