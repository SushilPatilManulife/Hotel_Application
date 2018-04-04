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
        $__internal_325ccbc1fe037b3759c84bc6dc84bc1f7a07746460c427b632a0ce5455670a44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_325ccbc1fe037b3759c84bc6dc84bc1f7a07746460c427b632a0ce5455670a44->enter($__internal_325ccbc1fe037b3759c84bc6dc84bc1f7a07746460c427b632a0ce5455670a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_dcd44e5c72edbacc5349671bb7396637ae42b4beaae6e30db72eb101cb195dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd44e5c72edbacc5349671bb7396637ae42b4beaae6e30db72eb101cb195dcb->enter($__internal_dcd44e5c72edbacc5349671bb7396637ae42b4beaae6e30db72eb101cb195dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_325ccbc1fe037b3759c84bc6dc84bc1f7a07746460c427b632a0ce5455670a44->leave($__internal_325ccbc1fe037b3759c84bc6dc84bc1f7a07746460c427b632a0ce5455670a44_prof);

        
        $__internal_dcd44e5c72edbacc5349671bb7396637ae42b4beaae6e30db72eb101cb195dcb->leave($__internal_dcd44e5c72edbacc5349671bb7396637ae42b4beaae6e30db72eb101cb195dcb_prof);

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
