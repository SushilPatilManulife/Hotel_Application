<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_9a56e17b914b6eedf3ca6497a2002c87c9b512e911c6167a478f735b17a28cd4 extends Twig_Template
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
        $__internal_b8169a45656467bd52f4f3bceafbd456d67cd7a34ef787208082d29a26876542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8169a45656467bd52f4f3bceafbd456d67cd7a34ef787208082d29a26876542->enter($__internal_b8169a45656467bd52f4f3bceafbd456d67cd7a34ef787208082d29a26876542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_e0b7fcfd524d9f80dc5a9640ec4005297ac24f95400a7da659143d0a87512c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b7fcfd524d9f80dc5a9640ec4005297ac24f95400a7da659143d0a87512c36->enter($__internal_e0b7fcfd524d9f80dc5a9640ec4005297ac24f95400a7da659143d0a87512c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b8169a45656467bd52f4f3bceafbd456d67cd7a34ef787208082d29a26876542->leave($__internal_b8169a45656467bd52f4f3bceafbd456d67cd7a34ef787208082d29a26876542_prof);

        
        $__internal_e0b7fcfd524d9f80dc5a9640ec4005297ac24f95400a7da659143d0a87512c36->leave($__internal_e0b7fcfd524d9f80dc5a9640ec4005297ac24f95400a7da659143d0a87512c36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
