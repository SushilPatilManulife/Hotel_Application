<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_1b2c0339cf4efe5c9f34697c00d35736bde5e1d0ca692668997c71cf77a7c1a0 extends Twig_Template
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
        $__internal_6b015f058bd4172b9940811dba59e6133ab0cf60e369594b6344343bc47eabf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b015f058bd4172b9940811dba59e6133ab0cf60e369594b6344343bc47eabf6->enter($__internal_6b015f058bd4172b9940811dba59e6133ab0cf60e369594b6344343bc47eabf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_ab0fe5e274f07062f7959256e9c0bffe52410c17730e2e5d572431d6b40da2c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0fe5e274f07062f7959256e9c0bffe52410c17730e2e5d572431d6b40da2c7->enter($__internal_ab0fe5e274f07062f7959256e9c0bffe52410c17730e2e5d572431d6b40da2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_6b015f058bd4172b9940811dba59e6133ab0cf60e369594b6344343bc47eabf6->leave($__internal_6b015f058bd4172b9940811dba59e6133ab0cf60e369594b6344343bc47eabf6_prof);

        
        $__internal_ab0fe5e274f07062f7959256e9c0bffe52410c17730e2e5d572431d6b40da2c7->leave($__internal_ab0fe5e274f07062f7959256e9c0bffe52410c17730e2e5d572431d6b40da2c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
