<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_db5c037b811ba966ab5c051201723dc6321674472cefe89952fe3f41bcb71c1b extends Twig_Template
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
        $__internal_7c0afef5d5b84b0d120fb1cd0acf2bd97f84b03fe773dcd06f6298e8e1fad0f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c0afef5d5b84b0d120fb1cd0acf2bd97f84b03fe773dcd06f6298e8e1fad0f3->enter($__internal_7c0afef5d5b84b0d120fb1cd0acf2bd97f84b03fe773dcd06f6298e8e1fad0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_16d4c750afceaa44fa93089cbda57ec2438ecbb617317415c1c770d7336b3f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d4c750afceaa44fa93089cbda57ec2438ecbb617317415c1c770d7336b3f76->enter($__internal_16d4c750afceaa44fa93089cbda57ec2438ecbb617317415c1c770d7336b3f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_7c0afef5d5b84b0d120fb1cd0acf2bd97f84b03fe773dcd06f6298e8e1fad0f3->leave($__internal_7c0afef5d5b84b0d120fb1cd0acf2bd97f84b03fe773dcd06f6298e8e1fad0f3_prof);

        
        $__internal_16d4c750afceaa44fa93089cbda57ec2438ecbb617317415c1c770d7336b3f76->leave($__internal_16d4c750afceaa44fa93089cbda57ec2438ecbb617317415c1c770d7336b3f76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
