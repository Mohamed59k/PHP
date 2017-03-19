<?php

/* backend/episode/new.html.twig */
class __TwigTemplate_75edf5d3e09bac9fd098000ae166125fb217df16c0b3195c069dda36b72c6c7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "backend/episode/new.html.twig", 1);
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
        $__internal_abd8712a8d202186c00d73f72ec884bf89b4e93f285c89342c831b86f92914fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd8712a8d202186c00d73f72ec884bf89b4e93f285c89342c831b86f92914fc->enter($__internal_abd8712a8d202186c00d73f72ec884bf89b4e93f285c89342c831b86f92914fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/episode/new.html.twig"));

        $__internal_c8bee357b717350611530527e7c6dbb83ff800635a61b1310a58fc665d39829c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8bee357b717350611530527e7c6dbb83ff800635a61b1310a58fc665d39829c->enter($__internal_c8bee357b717350611530527e7c6dbb83ff800635a61b1310a58fc665d39829c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/episode/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abd8712a8d202186c00d73f72ec884bf89b4e93f285c89342c831b86f92914fc->leave($__internal_abd8712a8d202186c00d73f72ec884bf89b4e93f285c89342c831b86f92914fc_prof);

        
        $__internal_c8bee357b717350611530527e7c6dbb83ff800635a61b1310a58fc665d39829c->leave($__internal_c8bee357b717350611530527e7c6dbb83ff800635a61b1310a58fc665d39829c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a34a8d697f50e9ff4406840c1a0d1a3dacdd3dc7c7df02f75e3350b222b7de2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a34a8d697f50e9ff4406840c1a0d1a3dacdd3dc7c7df02f75e3350b222b7de2f->enter($__internal_a34a8d697f50e9ff4406840c1a0d1a3dacdd3dc7c7df02f75e3350b222b7de2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f2229881e0c9af501e648a0ffd77a9e296a04c4e19a8ca5fa94bc80e477345a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2229881e0c9af501e648a0ffd77a9e296a04c4e19a8ca5fa94bc80e477345a5->enter($__internal_f2229881e0c9af501e648a0ffd77a9e296a04c4e19a8ca5fa94bc80e477345a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Episode creation</h1>

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


";
        
        $__internal_f2229881e0c9af501e648a0ffd77a9e296a04c4e19a8ca5fa94bc80e477345a5->leave($__internal_f2229881e0c9af501e648a0ffd77a9e296a04c4e19a8ca5fa94bc80e477345a5_prof);

        
        $__internal_a34a8d697f50e9ff4406840c1a0d1a3dacdd3dc7c7df02f75e3350b222b7de2f->leave($__internal_a34a8d697f50e9ff4406840c1a0d1a3dacdd3dc7c7df02f75e3350b222b7de2f_prof);

    }

    public function getTemplateName()
    {
        return "backend/episode/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Episode creation</h1>

    {{ form_start(form) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}


{% endblock %}
", "backend/episode/new.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/backend/episode/new.html.twig");
    }
}
