<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f9efb80e3e40c92c1aad02e8609e13dbb097d1f37f071f075dd4a951173f3107 extends Twig_Template
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
        $__internal_cc9426935a6e0ee3544533feb7a64c73a092aef1f5e006b5aaea3ce0b03c847b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc9426935a6e0ee3544533feb7a64c73a092aef1f5e006b5aaea3ce0b03c847b->enter($__internal_cc9426935a6e0ee3544533feb7a64c73a092aef1f5e006b5aaea3ce0b03c847b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_52b5086d926819f54c4b4906c648196e1d0f342308f5e0dd30ffabb448c83513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b5086d926819f54c4b4906c648196e1d0f342308f5e0dd30ffabb448c83513->enter($__internal_52b5086d926819f54c4b4906c648196e1d0f342308f5e0dd30ffabb448c83513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_cc9426935a6e0ee3544533feb7a64c73a092aef1f5e006b5aaea3ce0b03c847b->leave($__internal_cc9426935a6e0ee3544533feb7a64c73a092aef1f5e006b5aaea3ce0b03c847b_prof);

        
        $__internal_52b5086d926819f54c4b4906c648196e1d0f342308f5e0dd30ffabb448c83513->leave($__internal_52b5086d926819f54c4b4906c648196e1d0f342308f5e0dd30ffabb448c83513_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
