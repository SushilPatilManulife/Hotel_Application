<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_dd80b7cc68abb463b9179ed701ef54ded99f06ebc591077b7e4ea52f8146ae57 extends Twig_Template
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
        $__internal_5c780dd9f8ca17b568d505706d2984f2925ece33b058e3626580479479daf53c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c780dd9f8ca17b568d505706d2984f2925ece33b058e3626580479479daf53c->enter($__internal_5c780dd9f8ca17b568d505706d2984f2925ece33b058e3626580479479daf53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_b165d01edeef167ef14943134dd9ea6aa03b08f012d31ceafb99a7070516c42e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b165d01edeef167ef14943134dd9ea6aa03b08f012d31ceafb99a7070516c42e->enter($__internal_b165d01edeef167ef14943134dd9ea6aa03b08f012d31ceafb99a7070516c42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_5c780dd9f8ca17b568d505706d2984f2925ece33b058e3626580479479daf53c->leave($__internal_5c780dd9f8ca17b568d505706d2984f2925ece33b058e3626580479479daf53c_prof);

        
        $__internal_b165d01edeef167ef14943134dd9ea6aa03b08f012d31ceafb99a7070516c42e->leave($__internal_b165d01edeef167ef14943134dd9ea6aa03b08f012d31ceafb99a7070516c42e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
