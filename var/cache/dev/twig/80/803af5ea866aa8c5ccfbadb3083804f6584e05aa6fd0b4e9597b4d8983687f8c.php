<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_11bdffa249d3815b497fe6e02b5b07e0847d7add83de6b4e1e7420a9f20b80c3 extends Twig_Template
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
        $__internal_51ecd3a09abce9d5ee3ac69e73880873c19092be1491c1bc4d667a96e630098f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51ecd3a09abce9d5ee3ac69e73880873c19092be1491c1bc4d667a96e630098f->enter($__internal_51ecd3a09abce9d5ee3ac69e73880873c19092be1491c1bc4d667a96e630098f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_0252692621977051e72755540f8ff526bd80facf1caad0ef145f6b3212434aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0252692621977051e72755540f8ff526bd80facf1caad0ef145f6b3212434aa5->enter($__internal_0252692621977051e72755540f8ff526bd80facf1caad0ef145f6b3212434aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_51ecd3a09abce9d5ee3ac69e73880873c19092be1491c1bc4d667a96e630098f->leave($__internal_51ecd3a09abce9d5ee3ac69e73880873c19092be1491c1bc4d667a96e630098f_prof);

        
        $__internal_0252692621977051e72755540f8ff526bd80facf1caad0ef145f6b3212434aa5->leave($__internal_0252692621977051e72755540f8ff526bd80facf1caad0ef145f6b3212434aa5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/pro/Desktop/test/tvseries/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
