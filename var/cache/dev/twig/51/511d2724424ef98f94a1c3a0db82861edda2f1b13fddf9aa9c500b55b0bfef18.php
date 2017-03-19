<?php

/* backend/tvseries/new.html.twig */
class __TwigTemplate_e9c2c3743daa4c5a90e2c8e07831aace84e865b4391c95348156c2f09bf3a2c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "backend/tvseries/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6b39b95ca08f2e737e2c6e77b02d053de31e7f747b1c240549fe0b24023adb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6b39b95ca08f2e737e2c6e77b02d053de31e7f747b1c240549fe0b24023adb6->enter($__internal_c6b39b95ca08f2e737e2c6e77b02d053de31e7f747b1c240549fe0b24023adb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/tvseries/new.html.twig"));

        $__internal_6297d61cef7fab47c46c0c229011ed53d7f04aa55caef6004d7aacd55eebaa22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6297d61cef7fab47c46c0c229011ed53d7f04aa55caef6004d7aacd55eebaa22->enter($__internal_6297d61cef7fab47c46c0c229011ed53d7f04aa55caef6004d7aacd55eebaa22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/tvseries/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6b39b95ca08f2e737e2c6e77b02d053de31e7f747b1c240549fe0b24023adb6->leave($__internal_c6b39b95ca08f2e737e2c6e77b02d053de31e7f747b1c240549fe0b24023adb6_prof);

        
        $__internal_6297d61cef7fab47c46c0c229011ed53d7f04aa55caef6004d7aacd55eebaa22->leave($__internal_6297d61cef7fab47c46c0c229011ed53d7f04aa55caef6004d7aacd55eebaa22_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_98e34927a10f49473e69d8194c0a76b9eb8f1d0b9ac4cc5bff099b593611eb47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e34927a10f49473e69d8194c0a76b9eb8f1d0b9ac4cc5bff099b593611eb47->enter($__internal_98e34927a10f49473e69d8194c0a76b9eb8f1d0b9ac4cc5bff099b593611eb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eaf13fb65aa1134480a1fa260886e51c079023fcb5b0415260e157e3cb9056a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf13fb65aa1134480a1fa260886e51c079023fcb5b0415260e157e3cb9056a7->enter($__internal_eaf13fb65aa1134480a1fa260886e51c079023fcb5b0415260e157e3cb9056a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tvseries creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_adminIndex");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_eaf13fb65aa1134480a1fa260886e51c079023fcb5b0415260e157e3cb9056a7->leave($__internal_eaf13fb65aa1134480a1fa260886e51c079023fcb5b0415260e157e3cb9056a7_prof);

        
        $__internal_98e34927a10f49473e69d8194c0a76b9eb8f1d0b9ac4cc5bff099b593611eb47->leave($__internal_98e34927a10f49473e69d8194c0a76b9eb8f1d0b9ac4cc5bff099b593611eb47_prof);

    }

    public function getTemplateName()
    {
        return "backend/tvseries/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backend.html.twig' %}

{% block body %}
    <h1>Tvseries creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('_adminIndex') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "backend/tvseries/new.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/backend/tvseries/new.html.twig");
    }
}
