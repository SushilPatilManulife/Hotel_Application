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
        $__internal_05dc6c674337792297b65f59de9dc0211c179dcab40e8b44f37cda0d7a3e0f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05dc6c674337792297b65f59de9dc0211c179dcab40e8b44f37cda0d7a3e0f6f->enter($__internal_05dc6c674337792297b65f59de9dc0211c179dcab40e8b44f37cda0d7a3e0f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_c56054cd95907e51043a3564a9d21f0b22b9ef643fa317a8cf3f69df605555f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56054cd95907e51043a3564a9d21f0b22b9ef643fa317a8cf3f69df605555f5->enter($__internal_c56054cd95907e51043a3564a9d21f0b22b9ef643fa317a8cf3f69df605555f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_05dc6c674337792297b65f59de9dc0211c179dcab40e8b44f37cda0d7a3e0f6f->leave($__internal_05dc6c674337792297b65f59de9dc0211c179dcab40e8b44f37cda0d7a3e0f6f_prof);

        
        $__internal_c56054cd95907e51043a3564a9d21f0b22b9ef643fa317a8cf3f69df605555f5->leave($__internal_c56054cd95907e51043a3564a9d21f0b22b9ef643fa317a8cf3f69df605555f5_prof);

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
