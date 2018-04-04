<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_6cc923912a417f46fc32244461387fffac268674a115bde3f2282ce2df08c6fc extends Twig_Template
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
        $__internal_cf72eb4373617852e0d6ad34f85f66667e5ba365df8b11a6d6e3d6ea1e541644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf72eb4373617852e0d6ad34f85f66667e5ba365df8b11a6d6e3d6ea1e541644->enter($__internal_cf72eb4373617852e0d6ad34f85f66667e5ba365df8b11a6d6e3d6ea1e541644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_f604513899ea0f687eae0cb52be3e2d9e3025a78d2864f702c89bfe2a2a505fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f604513899ea0f687eae0cb52be3e2d9e3025a78d2864f702c89bfe2a2a505fb->enter($__internal_f604513899ea0f687eae0cb52be3e2d9e3025a78d2864f702c89bfe2a2a505fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_cf72eb4373617852e0d6ad34f85f66667e5ba365df8b11a6d6e3d6ea1e541644->leave($__internal_cf72eb4373617852e0d6ad34f85f66667e5ba365df8b11a6d6e3d6ea1e541644_prof);

        
        $__internal_f604513899ea0f687eae0cb52be3e2d9e3025a78d2864f702c89bfe2a2a505fb->leave($__internal_f604513899ea0f687eae0cb52be3e2d9e3025a78d2864f702c89bfe2a2a505fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
