<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_37e2f6ade06a88b91b33702a0ac70329f730a0c814d92730dc5e602ff4579e8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9884bc18dbbd3dd88ebb28ef024f5883556933cf5e737e6d809b637658265dc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9884bc18dbbd3dd88ebb28ef024f5883556933cf5e737e6d809b637658265dc6->enter($__internal_9884bc18dbbd3dd88ebb28ef024f5883556933cf5e737e6d809b637658265dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_ccf9cc81eb1ec09d3c79205546c94a42d26ef0837a06242723f8fdc4d06371da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccf9cc81eb1ec09d3c79205546c94a42d26ef0837a06242723f8fdc4d06371da->enter($__internal_ccf9cc81eb1ec09d3c79205546c94a42d26ef0837a06242723f8fdc4d06371da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9884bc18dbbd3dd88ebb28ef024f5883556933cf5e737e6d809b637658265dc6->leave($__internal_9884bc18dbbd3dd88ebb28ef024f5883556933cf5e737e6d809b637658265dc6_prof);

        
        $__internal_ccf9cc81eb1ec09d3c79205546c94a42d26ef0837a06242723f8fdc4d06371da->leave($__internal_ccf9cc81eb1ec09d3c79205546c94a42d26ef0837a06242723f8fdc4d06371da_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d6cb8ea9545bb54209783a50137cdbbaab112506042130542e02698a62ab132a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6cb8ea9545bb54209783a50137cdbbaab112506042130542e02698a62ab132a->enter($__internal_d6cb8ea9545bb54209783a50137cdbbaab112506042130542e02698a62ab132a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2da1a490a4a35466b06f251ebb47a3ff45294e00a62ccfc7cd27d82cdf8e1058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da1a490a4a35466b06f251ebb47a3ff45294e00a62ccfc7cd27d82cdf8e1058->enter($__internal_2da1a490a4a35466b06f251ebb47a3ff45294e00a62ccfc7cd27d82cdf8e1058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">register</a>
    ";
        // line 4
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_2da1a490a4a35466b06f251ebb47a3ff45294e00a62ccfc7cd27d82cdf8e1058->leave($__internal_2da1a490a4a35466b06f251ebb47a3ff45294e00a62ccfc7cd27d82cdf8e1058_prof);

        
        $__internal_d6cb8ea9545bb54209783a50137cdbbaab112506042130542e02698a62ab132a->leave($__internal_d6cb8ea9545bb54209783a50137cdbbaab112506042130542e02698a62ab132a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}
{% block fos_user_content %}
    <a href=\"{{ path('fos_user_registration_register') }}\">register</a>
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}", "@FOSUser/Security/login.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
