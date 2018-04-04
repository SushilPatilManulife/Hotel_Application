<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c23e70cfbf7102f384e5e06ec512a098e7f56aa05e108e9939e8c3d1202d1cb6 extends Twig_Template
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
        $__internal_202959ede214a0569aa85cfab6e977eaa1ef0ee692b8c0a55dc9e51d67a31606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_202959ede214a0569aa85cfab6e977eaa1ef0ee692b8c0a55dc9e51d67a31606->enter($__internal_202959ede214a0569aa85cfab6e977eaa1ef0ee692b8c0a55dc9e51d67a31606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_d66365c9ceabd421857318a3dbe559c09ceedb4e9a411972ba83d048fe5333dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66365c9ceabd421857318a3dbe559c09ceedb4e9a411972ba83d048fe5333dc->enter($__internal_d66365c9ceabd421857318a3dbe559c09ceedb4e9a411972ba83d048fe5333dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_202959ede214a0569aa85cfab6e977eaa1ef0ee692b8c0a55dc9e51d67a31606->leave($__internal_202959ede214a0569aa85cfab6e977eaa1ef0ee692b8c0a55dc9e51d67a31606_prof);

        
        $__internal_d66365c9ceabd421857318a3dbe559c09ceedb4e9a411972ba83d048fe5333dc->leave($__internal_d66365c9ceabd421857318a3dbe559c09ceedb4e9a411972ba83d048fe5333dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
