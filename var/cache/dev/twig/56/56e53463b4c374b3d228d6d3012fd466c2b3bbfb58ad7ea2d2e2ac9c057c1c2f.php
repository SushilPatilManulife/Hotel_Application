<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_fbb982b511b6e713863021d8fe6157e26a8a862a23abb077931328908cf6bddf extends Twig_Template
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
        $__internal_3ccf10c7960b8d8dfb58e4a78c71f2e66c439e5a5a95b1a18018da5071cdd116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ccf10c7960b8d8dfb58e4a78c71f2e66c439e5a5a95b1a18018da5071cdd116->enter($__internal_3ccf10c7960b8d8dfb58e4a78c71f2e66c439e5a5a95b1a18018da5071cdd116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_963a2696486edf1d7e563c151db664e702fc085d0a87964472d702b2fb745f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963a2696486edf1d7e563c151db664e702fc085d0a87964472d702b2fb745f43->enter($__internal_963a2696486edf1d7e563c151db664e702fc085d0a87964472d702b2fb745f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_3ccf10c7960b8d8dfb58e4a78c71f2e66c439e5a5a95b1a18018da5071cdd116->leave($__internal_3ccf10c7960b8d8dfb58e4a78c71f2e66c439e5a5a95b1a18018da5071cdd116_prof);

        
        $__internal_963a2696486edf1d7e563c151db664e702fc085d0a87964472d702b2fb745f43->leave($__internal_963a2696486edf1d7e563c151db664e702fc085d0a87964472d702b2fb745f43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
