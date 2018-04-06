<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_44a2dfd45b22be3df9f8433a5129c4c25de8fde3295e5e4fc1a35ff78aa89cd2 extends Twig_Template
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
        $__internal_4a02b9484e89b3a182d94c247a4e774d5c6c0e04dd304cf3bb98104e9a22f9dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a02b9484e89b3a182d94c247a4e774d5c6c0e04dd304cf3bb98104e9a22f9dd->enter($__internal_4a02b9484e89b3a182d94c247a4e774d5c6c0e04dd304cf3bb98104e9a22f9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_ce16530b4c510804713c61ee7c919a97ac0b3cf94738beec6810c7fb309fc32d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce16530b4c510804713c61ee7c919a97ac0b3cf94738beec6810c7fb309fc32d->enter($__internal_ce16530b4c510804713c61ee7c919a97ac0b3cf94738beec6810c7fb309fc32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4a02b9484e89b3a182d94c247a4e774d5c6c0e04dd304cf3bb98104e9a22f9dd->leave($__internal_4a02b9484e89b3a182d94c247a4e774d5c6c0e04dd304cf3bb98104e9a22f9dd_prof);

        
        $__internal_ce16530b4c510804713c61ee7c919a97ac0b3cf94738beec6810c7fb309fc32d->leave($__internal_ce16530b4c510804713c61ee7c919a97ac0b3cf94738beec6810c7fb309fc32d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
