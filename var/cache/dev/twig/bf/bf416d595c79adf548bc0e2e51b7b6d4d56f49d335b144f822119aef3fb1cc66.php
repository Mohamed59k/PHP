<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_217b543953c537a4d3d2a170fdb4490c2f7f964cf2ca5c19027856f998752faa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_43af646c166db0d3f884212e37cbebab821bb589ab51a0f79f2535dd9c6cd285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43af646c166db0d3f884212e37cbebab821bb589ab51a0f79f2535dd9c6cd285->enter($__internal_43af646c166db0d3f884212e37cbebab821bb589ab51a0f79f2535dd9c6cd285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_11a10162318f9ab63e4c2982aa128a0113591d0862854ac67bc492493a6603c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a10162318f9ab63e4c2982aa128a0113591d0862854ac67bc492493a6603c2->enter($__internal_11a10162318f9ab63e4c2982aa128a0113591d0862854ac67bc492493a6603c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43af646c166db0d3f884212e37cbebab821bb589ab51a0f79f2535dd9c6cd285->leave($__internal_43af646c166db0d3f884212e37cbebab821bb589ab51a0f79f2535dd9c6cd285_prof);

        
        $__internal_11a10162318f9ab63e4c2982aa128a0113591d0862854ac67bc492493a6603c2->leave($__internal_11a10162318f9ab63e4c2982aa128a0113591d0862854ac67bc492493a6603c2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_98b71e3bd5814d952c820b79b857a223390019a0725c46f74eb67ad4d7843467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98b71e3bd5814d952c820b79b857a223390019a0725c46f74eb67ad4d7843467->enter($__internal_98b71e3bd5814d952c820b79b857a223390019a0725c46f74eb67ad4d7843467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_926b340e7db0ca1698bf1c0e08491ce2e62fefdb66ec081d7ac40b4cc60c6f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926b340e7db0ca1698bf1c0e08491ce2e62fefdb66ec081d7ac40b4cc60c6f5b->enter($__internal_926b340e7db0ca1698bf1c0e08491ce2e62fefdb66ec081d7ac40b4cc60c6f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_926b340e7db0ca1698bf1c0e08491ce2e62fefdb66ec081d7ac40b4cc60c6f5b->leave($__internal_926b340e7db0ca1698bf1c0e08491ce2e62fefdb66ec081d7ac40b4cc60c6f5b_prof);

        
        $__internal_98b71e3bd5814d952c820b79b857a223390019a0725c46f74eb67ad4d7843467->leave($__internal_98b71e3bd5814d952c820b79b857a223390019a0725c46f74eb67ad4d7843467_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_65936e7cace2100b0e0b358daf8de3f01765f1644b540b3808d98bd66997ba13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65936e7cace2100b0e0b358daf8de3f01765f1644b540b3808d98bd66997ba13->enter($__internal_65936e7cace2100b0e0b358daf8de3f01765f1644b540b3808d98bd66997ba13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_72f0cd42757d9da8cb3e40d2cdcc12f9db446639f4a7911eef1245e5c58a7281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f0cd42757d9da8cb3e40d2cdcc12f9db446639f4a7911eef1245e5c58a7281->enter($__internal_72f0cd42757d9da8cb3e40d2cdcc12f9db446639f4a7911eef1245e5c58a7281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_72f0cd42757d9da8cb3e40d2cdcc12f9db446639f4a7911eef1245e5c58a7281->leave($__internal_72f0cd42757d9da8cb3e40d2cdcc12f9db446639f4a7911eef1245e5c58a7281_prof);

        
        $__internal_65936e7cace2100b0e0b358daf8de3f01765f1644b540b3808d98bd66997ba13->leave($__internal_65936e7cace2100b0e0b358daf8de3f01765f1644b540b3808d98bd66997ba13_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f41d7fa3359a20beb12102aa980d39b90db716a311d09705ed92488617607ad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f41d7fa3359a20beb12102aa980d39b90db716a311d09705ed92488617607ad2->enter($__internal_f41d7fa3359a20beb12102aa980d39b90db716a311d09705ed92488617607ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ea911f3d775966da2f6541170fb428dbdb0d9c03e6e3a957b4dc1784df329b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea911f3d775966da2f6541170fb428dbdb0d9c03e6e3a957b4dc1784df329b10->enter($__internal_ea911f3d775966da2f6541170fb428dbdb0d9c03e6e3a957b4dc1784df329b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ea911f3d775966da2f6541170fb428dbdb0d9c03e6e3a957b4dc1784df329b10->leave($__internal_ea911f3d775966da2f6541170fb428dbdb0d9c03e6e3a957b4dc1784df329b10_prof);

        
        $__internal_f41d7fa3359a20beb12102aa980d39b90db716a311d09705ed92488617607ad2->leave($__internal_f41d7fa3359a20beb12102aa980d39b90db716a311d09705ed92488617607ad2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/pro/Desktop/test/tvseries/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
