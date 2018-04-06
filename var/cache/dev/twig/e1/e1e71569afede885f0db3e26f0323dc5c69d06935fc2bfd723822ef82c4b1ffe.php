<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_3141ba5f00fffe9d038a8a43edae70ef24b42c17e84e999b7ad3fac89908eb97 extends Twig_Template
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
        $__internal_cd839484aad98b3e512bf5dca48d28657dafaa0ce85c7c9eb3d7a3a1e1d1e760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd839484aad98b3e512bf5dca48d28657dafaa0ce85c7c9eb3d7a3a1e1d1e760->enter($__internal_cd839484aad98b3e512bf5dca48d28657dafaa0ce85c7c9eb3d7a3a1e1d1e760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_0809918338844fd35a2714b8d1864dbf752f4b7fc81f9a9669a610d9815ecf31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0809918338844fd35a2714b8d1864dbf752f4b7fc81f9a9669a610d9815ecf31->enter($__internal_0809918338844fd35a2714b8d1864dbf752f4b7fc81f9a9669a610d9815ecf31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_cd839484aad98b3e512bf5dca48d28657dafaa0ce85c7c9eb3d7a3a1e1d1e760->leave($__internal_cd839484aad98b3e512bf5dca48d28657dafaa0ce85c7c9eb3d7a3a1e1d1e760_prof);

        
        $__internal_0809918338844fd35a2714b8d1864dbf752f4b7fc81f9a9669a610d9815ecf31->leave($__internal_0809918338844fd35a2714b8d1864dbf752f4b7fc81f9a9669a610d9815ecf31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
