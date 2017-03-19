<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_acd4ebb8703dff168af3054453d1744e2e87e1e45af11983d7e9a82bf0d508d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a6ec5172cab14bd94ef771f1b4cdcb4b4cdec870c50f708f47639b3f0133cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a6ec5172cab14bd94ef771f1b4cdcb4b4cdec870c50f708f47639b3f0133cd2->enter($__internal_9a6ec5172cab14bd94ef771f1b4cdcb4b4cdec870c50f708f47639b3f0133cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_deca72d6bfa70d99420e88529bb8b363265ec419bc78abb23d3d559df7a5be28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deca72d6bfa70d99420e88529bb8b363265ec419bc78abb23d3d559df7a5be28->enter($__internal_deca72d6bfa70d99420e88529bb8b363265ec419bc78abb23d3d559df7a5be28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a6ec5172cab14bd94ef771f1b4cdcb4b4cdec870c50f708f47639b3f0133cd2->leave($__internal_9a6ec5172cab14bd94ef771f1b4cdcb4b4cdec870c50f708f47639b3f0133cd2_prof);

        
        $__internal_deca72d6bfa70d99420e88529bb8b363265ec419bc78abb23d3d559df7a5be28->leave($__internal_deca72d6bfa70d99420e88529bb8b363265ec419bc78abb23d3d559df7a5be28_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_afd62d88275ad523bd741fce0cb7deae75cbcc54f931d4c9f21289650ac0546d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afd62d88275ad523bd741fce0cb7deae75cbcc54f931d4c9f21289650ac0546d->enter($__internal_afd62d88275ad523bd741fce0cb7deae75cbcc54f931d4c9f21289650ac0546d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2af81d584a6e5d8a6d220428927c9bb1b4af2dc14bc124d6e1140e0e8e057a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af81d584a6e5d8a6d220428927c9bb1b4af2dc14bc124d6e1140e0e8e057a8d->enter($__internal_2af81d584a6e5d8a6d220428927c9bb1b4af2dc14bc124d6e1140e0e8e057a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_2af81d584a6e5d8a6d220428927c9bb1b4af2dc14bc124d6e1140e0e8e057a8d->leave($__internal_2af81d584a6e5d8a6d220428927c9bb1b4af2dc14bc124d6e1140e0e8e057a8d_prof);

        
        $__internal_afd62d88275ad523bd741fce0cb7deae75cbcc54f931d4c9f21289650ac0546d->leave($__internal_afd62d88275ad523bd741fce0cb7deae75cbcc54f931d4c9f21289650ac0546d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/pro/Desktop/test/tvseries/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
