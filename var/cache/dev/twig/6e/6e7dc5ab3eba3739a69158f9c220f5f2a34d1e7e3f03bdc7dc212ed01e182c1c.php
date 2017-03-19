<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b58aee06e0d86d510349a64c2042269d7e94dc81fa8d7af14ad62538f4f7bb04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a33997ccf9efddf4cec4105f392edf1307dc9fbcaea9d55a64af326d18202d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a33997ccf9efddf4cec4105f392edf1307dc9fbcaea9d55a64af326d18202d7->enter($__internal_9a33997ccf9efddf4cec4105f392edf1307dc9fbcaea9d55a64af326d18202d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b17048a0eabe2e94208d1fd11ab746930a35d1f3997ffe2c7f0067ab9b0b3154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b17048a0eabe2e94208d1fd11ab746930a35d1f3997ffe2c7f0067ab9b0b3154->enter($__internal_b17048a0eabe2e94208d1fd11ab746930a35d1f3997ffe2c7f0067ab9b0b3154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a33997ccf9efddf4cec4105f392edf1307dc9fbcaea9d55a64af326d18202d7->leave($__internal_9a33997ccf9efddf4cec4105f392edf1307dc9fbcaea9d55a64af326d18202d7_prof);

        
        $__internal_b17048a0eabe2e94208d1fd11ab746930a35d1f3997ffe2c7f0067ab9b0b3154->leave($__internal_b17048a0eabe2e94208d1fd11ab746930a35d1f3997ffe2c7f0067ab9b0b3154_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4bf6403135252a3df3db43723d7553152c04f3ef919306c25ce562a37f1d1524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf6403135252a3df3db43723d7553152c04f3ef919306c25ce562a37f1d1524->enter($__internal_4bf6403135252a3df3db43723d7553152c04f3ef919306c25ce562a37f1d1524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_059d9957f4fe83d25612d8c93d8eb2e830bb9fabfa720c5ff02759ab3e5c0196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_059d9957f4fe83d25612d8c93d8eb2e830bb9fabfa720c5ff02759ab3e5c0196->enter($__internal_059d9957f4fe83d25612d8c93d8eb2e830bb9fabfa720c5ff02759ab3e5c0196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_059d9957f4fe83d25612d8c93d8eb2e830bb9fabfa720c5ff02759ab3e5c0196->leave($__internal_059d9957f4fe83d25612d8c93d8eb2e830bb9fabfa720c5ff02759ab3e5c0196_prof);

        
        $__internal_4bf6403135252a3df3db43723d7553152c04f3ef919306c25ce562a37f1d1524->leave($__internal_4bf6403135252a3df3db43723d7553152c04f3ef919306c25ce562a37f1d1524_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_74e1cf31f0eab8fa9fa039eaaffe5c5bd9c2ec6369b3e3a5033cb002cbfb399c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74e1cf31f0eab8fa9fa039eaaffe5c5bd9c2ec6369b3e3a5033cb002cbfb399c->enter($__internal_74e1cf31f0eab8fa9fa039eaaffe5c5bd9c2ec6369b3e3a5033cb002cbfb399c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9e60e0b9e681a620ae8d1aa29be065fbdfdcdcf3bb4a05b0465905532c3a5edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e60e0b9e681a620ae8d1aa29be065fbdfdcdcf3bb4a05b0465905532c3a5edb->enter($__internal_9e60e0b9e681a620ae8d1aa29be065fbdfdcdcf3bb4a05b0465905532c3a5edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9e60e0b9e681a620ae8d1aa29be065fbdfdcdcf3bb4a05b0465905532c3a5edb->leave($__internal_9e60e0b9e681a620ae8d1aa29be065fbdfdcdcf3bb4a05b0465905532c3a5edb_prof);

        
        $__internal_74e1cf31f0eab8fa9fa039eaaffe5c5bd9c2ec6369b3e3a5033cb002cbfb399c->leave($__internal_74e1cf31f0eab8fa9fa039eaaffe5c5bd9c2ec6369b3e3a5033cb002cbfb399c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_048da74a384b43381f8de60187c57d7bcbc839df5e8f0347a114530ff22b85ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_048da74a384b43381f8de60187c57d7bcbc839df5e8f0347a114530ff22b85ad->enter($__internal_048da74a384b43381f8de60187c57d7bcbc839df5e8f0347a114530ff22b85ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_acd9c229ed2ca48930b6aa68272f8405c33a3ea8090eb8204c81f537ca961d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd9c229ed2ca48930b6aa68272f8405c33a3ea8090eb8204c81f537ca961d79->enter($__internal_acd9c229ed2ca48930b6aa68272f8405c33a3ea8090eb8204c81f537ca961d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_acd9c229ed2ca48930b6aa68272f8405c33a3ea8090eb8204c81f537ca961d79->leave($__internal_acd9c229ed2ca48930b6aa68272f8405c33a3ea8090eb8204c81f537ca961d79_prof);

        
        $__internal_048da74a384b43381f8de60187c57d7bcbc839df5e8f0347a114530ff22b85ad->leave($__internal_048da74a384b43381f8de60187c57d7bcbc839df5e8f0347a114530ff22b85ad_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/pro/Desktop/test/tvseries/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
