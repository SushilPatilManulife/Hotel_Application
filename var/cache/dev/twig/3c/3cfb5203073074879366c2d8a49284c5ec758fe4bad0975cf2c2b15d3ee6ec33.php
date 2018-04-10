<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_72fd6300b4ddef4f6b4d0df648249a09444246f6b3e22c4be1227202c37bf0cf extends Twig_Template
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
        $__internal_c33e4ab59cbfe443486fd65df7eed816910e76ccff426836b4c3a3e5c979d11f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c33e4ab59cbfe443486fd65df7eed816910e76ccff426836b4c3a3e5c979d11f->enter($__internal_c33e4ab59cbfe443486fd65df7eed816910e76ccff426836b4c3a3e5c979d11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_227823a8ca8c1caa32d6184425602cd2e2f725ca15307e51c38011ba1b2a7517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_227823a8ca8c1caa32d6184425602cd2e2f725ca15307e51c38011ba1b2a7517->enter($__internal_227823a8ca8c1caa32d6184425602cd2e2f725ca15307e51c38011ba1b2a7517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c33e4ab59cbfe443486fd65df7eed816910e76ccff426836b4c3a3e5c979d11f->leave($__internal_c33e4ab59cbfe443486fd65df7eed816910e76ccff426836b4c3a3e5c979d11f_prof);

        
        $__internal_227823a8ca8c1caa32d6184425602cd2e2f725ca15307e51c38011ba1b2a7517->leave($__internal_227823a8ca8c1caa32d6184425602cd2e2f725ca15307e51c38011ba1b2a7517_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
