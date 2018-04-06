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
        $__internal_7ad6a152c80e6a6bb1da85598f8f173a86bfd0ef2edda22a63944c974327540f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ad6a152c80e6a6bb1da85598f8f173a86bfd0ef2edda22a63944c974327540f->enter($__internal_7ad6a152c80e6a6bb1da85598f8f173a86bfd0ef2edda22a63944c974327540f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_37b760a2968fd5ebf73b075792e48efc912a746f65b026b7b279dd09ea8d73e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b760a2968fd5ebf73b075792e48efc912a746f65b026b7b279dd09ea8d73e3->enter($__internal_37b760a2968fd5ebf73b075792e48efc912a746f65b026b7b279dd09ea8d73e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_7ad6a152c80e6a6bb1da85598f8f173a86bfd0ef2edda22a63944c974327540f->leave($__internal_7ad6a152c80e6a6bb1da85598f8f173a86bfd0ef2edda22a63944c974327540f_prof);

        
        $__internal_37b760a2968fd5ebf73b075792e48efc912a746f65b026b7b279dd09ea8d73e3->leave($__internal_37b760a2968fd5ebf73b075792e48efc912a746f65b026b7b279dd09ea8d73e3_prof);

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
