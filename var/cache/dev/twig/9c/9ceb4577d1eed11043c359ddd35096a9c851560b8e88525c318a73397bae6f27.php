<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_79bfd4d65b061e1a85c1b5faedbb195e09a23659d5a738ae4d791ffb99ea70ff extends Twig_Template
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
        $__internal_b621ffd38641bd273c71393354d5e8a3bd2acad0cebbe9c6d9621995dc311561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b621ffd38641bd273c71393354d5e8a3bd2acad0cebbe9c6d9621995dc311561->enter($__internal_b621ffd38641bd273c71393354d5e8a3bd2acad0cebbe9c6d9621995dc311561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_4c28f1d4175d5996372c3c9b0464a0d4e438bea55e4e61742dd340c5a9e9de9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c28f1d4175d5996372c3c9b0464a0d4e438bea55e4e61742dd340c5a9e9de9e->enter($__internal_4c28f1d4175d5996372c3c9b0464a0d4e438bea55e4e61742dd340c5a9e9de9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b621ffd38641bd273c71393354d5e8a3bd2acad0cebbe9c6d9621995dc311561->leave($__internal_b621ffd38641bd273c71393354d5e8a3bd2acad0cebbe9c6d9621995dc311561_prof);

        
        $__internal_4c28f1d4175d5996372c3c9b0464a0d4e438bea55e4e61742dd340c5a9e9de9e->leave($__internal_4c28f1d4175d5996372c3c9b0464a0d4e438bea55e4e61742dd340c5a9e9de9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
