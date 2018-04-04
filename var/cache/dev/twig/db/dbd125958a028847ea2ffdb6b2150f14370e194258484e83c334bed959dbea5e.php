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
        $__internal_44b9dab9026fc976e42a3c5f1ccc89fd599182a5c549df65c6309b9ccb0649d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44b9dab9026fc976e42a3c5f1ccc89fd599182a5c549df65c6309b9ccb0649d8->enter($__internal_44b9dab9026fc976e42a3c5f1ccc89fd599182a5c549df65c6309b9ccb0649d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_8a893c3015bf48af2061b80cfb91e807f6c986bb8c8b46796d1af43e8ef41fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a893c3015bf48af2061b80cfb91e807f6c986bb8c8b46796d1af43e8ef41fa6->enter($__internal_8a893c3015bf48af2061b80cfb91e807f6c986bb8c8b46796d1af43e8ef41fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_44b9dab9026fc976e42a3c5f1ccc89fd599182a5c549df65c6309b9ccb0649d8->leave($__internal_44b9dab9026fc976e42a3c5f1ccc89fd599182a5c549df65c6309b9ccb0649d8_prof);

        
        $__internal_8a893c3015bf48af2061b80cfb91e807f6c986bb8c8b46796d1af43e8ef41fa6->leave($__internal_8a893c3015bf48af2061b80cfb91e807f6c986bb8c8b46796d1af43e8ef41fa6_prof);

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
