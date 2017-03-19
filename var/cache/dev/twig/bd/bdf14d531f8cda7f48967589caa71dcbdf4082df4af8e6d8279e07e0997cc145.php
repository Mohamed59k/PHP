<?php

/* backend/tvseries/edit.html.twig */
class __TwigTemplate_989c349793e00e1f8d590492e2394953b4d080b1cee6a08da75d74a88ed10f1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "backend/tvseries/edit.html.twig", 1);
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
        $__internal_9fec5101cc5822d7430e549d5b8c13d6a67eb1114fc5b69fc868985bb4f86e91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fec5101cc5822d7430e549d5b8c13d6a67eb1114fc5b69fc868985bb4f86e91->enter($__internal_9fec5101cc5822d7430e549d5b8c13d6a67eb1114fc5b69fc868985bb4f86e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/tvseries/edit.html.twig"));

        $__internal_3ebc59e64ad5203e7e6254764afbeea79e73dcb13fcade012a7c5d07ae8898d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ebc59e64ad5203e7e6254764afbeea79e73dcb13fcade012a7c5d07ae8898d4->enter($__internal_3ebc59e64ad5203e7e6254764afbeea79e73dcb13fcade012a7c5d07ae8898d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/tvseries/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fec5101cc5822d7430e549d5b8c13d6a67eb1114fc5b69fc868985bb4f86e91->leave($__internal_9fec5101cc5822d7430e549d5b8c13d6a67eb1114fc5b69fc868985bb4f86e91_prof);

        
        $__internal_3ebc59e64ad5203e7e6254764afbeea79e73dcb13fcade012a7c5d07ae8898d4->leave($__internal_3ebc59e64ad5203e7e6254764afbeea79e73dcb13fcade012a7c5d07ae8898d4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7b480e42155999e56868668e0ca98185e1b04b39c5c3254ce33b91f23c85221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7b480e42155999e56868668e0ca98185e1b04b39c5c3254ce33b91f23c85221->enter($__internal_c7b480e42155999e56868668e0ca98185e1b04b39c5c3254ce33b91f23c85221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5504671d519f5c13c69bbfff14a3b81cee0d2d2c015e5181933b1b99e06e9d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5504671d519f5c13c69bbfff14a3b81cee0d2d2c015e5181933b1b99e06e9d29->enter($__internal_5504671d519f5c13c69bbfff14a3b81cee0d2d2c015e5181933b1b99e06e9d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tvseries edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_adminIndex");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_5504671d519f5c13c69bbfff14a3b81cee0d2d2c015e5181933b1b99e06e9d29->leave($__internal_5504671d519f5c13c69bbfff14a3b81cee0d2d2c015e5181933b1b99e06e9d29_prof);

        
        $__internal_c7b480e42155999e56868668e0ca98185e1b04b39c5c3254ce33b91f23c85221->leave($__internal_c7b480e42155999e56868668e0ca98185e1b04b39c5c3254ce33b91f23c85221_prof);

    }

    public function getTemplateName()
    {
        return "backend/tvseries/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tvseries edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('_adminIndex') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "backend/tvseries/edit.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/backend/tvseries/edit.html.twig");
    }
}
