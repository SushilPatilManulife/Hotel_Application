<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_e3fcb496d78d6ad74a08e9824ae51d83e460b3ac5828e4dcc72e379a43e8e9bb extends Twig_Template
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
        $__internal_e93efd048dc61f1aab2e6a913821ba63eb4b1b60675244a30639a09f22439d58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e93efd048dc61f1aab2e6a913821ba63eb4b1b60675244a30639a09f22439d58->enter($__internal_e93efd048dc61f1aab2e6a913821ba63eb4b1b60675244a30639a09f22439d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_c4dfefcef919929a2cfd447d1e7010ec0c7bd12982f2e4393465a0afa14c9606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4dfefcef919929a2cfd447d1e7010ec0c7bd12982f2e4393465a0afa14c9606->enter($__internal_c4dfefcef919929a2cfd447d1e7010ec0c7bd12982f2e4393465a0afa14c9606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e93efd048dc61f1aab2e6a913821ba63eb4b1b60675244a30639a09f22439d58->leave($__internal_e93efd048dc61f1aab2e6a913821ba63eb4b1b60675244a30639a09f22439d58_prof);

        
        $__internal_c4dfefcef919929a2cfd447d1e7010ec0c7bd12982f2e4393465a0afa14c9606->leave($__internal_c4dfefcef919929a2cfd447d1e7010ec0c7bd12982f2e4393465a0afa14c9606_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
