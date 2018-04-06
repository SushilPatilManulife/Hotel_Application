<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7384cc65981bb52535bf7e3b0fd2b4fae26712ad6aacaa920111860c1320c99f extends Twig_Template
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
        $__internal_371fb5f59217dafdb9cad464bc6ba1f482ba6b89422d59a77ea8e33303c1c403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_371fb5f59217dafdb9cad464bc6ba1f482ba6b89422d59a77ea8e33303c1c403->enter($__internal_371fb5f59217dafdb9cad464bc6ba1f482ba6b89422d59a77ea8e33303c1c403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_409e93890b1a148446e4ba25eb1182ef4d3af4b149bb8abcac5bde80f453c4be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_409e93890b1a148446e4ba25eb1182ef4d3af4b149bb8abcac5bde80f453c4be->enter($__internal_409e93890b1a148446e4ba25eb1182ef4d3af4b149bb8abcac5bde80f453c4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_371fb5f59217dafdb9cad464bc6ba1f482ba6b89422d59a77ea8e33303c1c403->leave($__internal_371fb5f59217dafdb9cad464bc6ba1f482ba6b89422d59a77ea8e33303c1c403_prof);

        
        $__internal_409e93890b1a148446e4ba25eb1182ef4d3af4b149bb8abcac5bde80f453c4be->leave($__internal_409e93890b1a148446e4ba25eb1182ef4d3af4b149bb8abcac5bde80f453c4be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
