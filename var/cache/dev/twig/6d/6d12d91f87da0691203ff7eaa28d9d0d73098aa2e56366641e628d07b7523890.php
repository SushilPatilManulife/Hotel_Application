<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_29b4e57361ba5018a993461564b6994a78a3c88f753dbb02f82a94100b19bd61 extends Twig_Template
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
        $__internal_9865684af3f359a075c174b1c679c4f49fba56a6ff9221ed9f2b092bb34c91e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9865684af3f359a075c174b1c679c4f49fba56a6ff9221ed9f2b092bb34c91e1->enter($__internal_9865684af3f359a075c174b1c679c4f49fba56a6ff9221ed9f2b092bb34c91e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_a07d206863ec80c9f2f7d920068356e726b91f7f11fbc6e3d2cd3430376be2ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a07d206863ec80c9f2f7d920068356e726b91f7f11fbc6e3d2cd3430376be2ad->enter($__internal_a07d206863ec80c9f2f7d920068356e726b91f7f11fbc6e3d2cd3430376be2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_9865684af3f359a075c174b1c679c4f49fba56a6ff9221ed9f2b092bb34c91e1->leave($__internal_9865684af3f359a075c174b1c679c4f49fba56a6ff9221ed9f2b092bb34c91e1_prof);

        
        $__internal_a07d206863ec80c9f2f7d920068356e726b91f7f11fbc6e3d2cd3430376be2ad->leave($__internal_a07d206863ec80c9f2f7d920068356e726b91f7f11fbc6e3d2cd3430376be2ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
