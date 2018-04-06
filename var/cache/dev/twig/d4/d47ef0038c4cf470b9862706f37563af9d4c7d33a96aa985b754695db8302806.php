<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_632f9f88fc2145d97c17c0c07658eb07e73ac0d3b4780be9b40dedf3ed13f378 extends Twig_Template
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
        $__internal_e1ae3e227baf18ed31dbaed0d6fb41f0229cbfe66bc3f560a843b6d16dfe185e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1ae3e227baf18ed31dbaed0d6fb41f0229cbfe66bc3f560a843b6d16dfe185e->enter($__internal_e1ae3e227baf18ed31dbaed0d6fb41f0229cbfe66bc3f560a843b6d16dfe185e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_de85a440781b299e9d80c83c7e249af0b4eb75b55ae8200ca652e32c4f1bbcaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de85a440781b299e9d80c83c7e249af0b4eb75b55ae8200ca652e32c4f1bbcaf->enter($__internal_de85a440781b299e9d80c83c7e249af0b4eb75b55ae8200ca652e32c4f1bbcaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e1ae3e227baf18ed31dbaed0d6fb41f0229cbfe66bc3f560a843b6d16dfe185e->leave($__internal_e1ae3e227baf18ed31dbaed0d6fb41f0229cbfe66bc3f560a843b6d16dfe185e_prof);

        
        $__internal_de85a440781b299e9d80c83c7e249af0b4eb75b55ae8200ca652e32c4f1bbcaf->leave($__internal_de85a440781b299e9d80c83c7e249af0b4eb75b55ae8200ca652e32c4f1bbcaf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
