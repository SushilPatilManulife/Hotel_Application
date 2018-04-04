<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_af3ce4d7ff39540adbb581429121ccf8f8b91b8497507213eb8c7fb5765e931f extends Twig_Template
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
        $__internal_783e13c8b930d393225c36a3f4d46ee25347090d3b4e64655216ab2727c83f1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_783e13c8b930d393225c36a3f4d46ee25347090d3b4e64655216ab2727c83f1e->enter($__internal_783e13c8b930d393225c36a3f4d46ee25347090d3b4e64655216ab2727c83f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_b729087f2b428871693b1b659cbeb7dac50475f268c802b983227be9a4b0fa10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b729087f2b428871693b1b659cbeb7dac50475f268c802b983227be9a4b0fa10->enter($__internal_b729087f2b428871693b1b659cbeb7dac50475f268c802b983227be9a4b0fa10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_783e13c8b930d393225c36a3f4d46ee25347090d3b4e64655216ab2727c83f1e->leave($__internal_783e13c8b930d393225c36a3f4d46ee25347090d3b4e64655216ab2727c83f1e_prof);

        
        $__internal_b729087f2b428871693b1b659cbeb7dac50475f268c802b983227be9a4b0fa10->leave($__internal_b729087f2b428871693b1b659cbeb7dac50475f268c802b983227be9a4b0fa10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
