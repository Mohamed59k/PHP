<?php

/* backend/episode/show.html.twig */
class __TwigTemplate_465d42b0d236a83811950a2fd09106bd9ef831f68aad0cedc5c9336a845d30f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "backend/episode/show.html.twig", 1);
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
        $__internal_d8267dc94f67f15b1d0983d11e66475a8ab3eae99372311862f58899724081eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8267dc94f67f15b1d0983d11e66475a8ab3eae99372311862f58899724081eb->enter($__internal_d8267dc94f67f15b1d0983d11e66475a8ab3eae99372311862f58899724081eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/episode/show.html.twig"));

        $__internal_5c5cc192a557d7f0f351738ccdf06f6a6de86bcac862677ca0b2b6ea505a05bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c5cc192a557d7f0f351738ccdf06f6a6de86bcac862677ca0b2b6ea505a05bc->enter($__internal_5c5cc192a557d7f0f351738ccdf06f6a6de86bcac862677ca0b2b6ea505a05bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/episode/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8267dc94f67f15b1d0983d11e66475a8ab3eae99372311862f58899724081eb->leave($__internal_d8267dc94f67f15b1d0983d11e66475a8ab3eae99372311862f58899724081eb_prof);

        
        $__internal_5c5cc192a557d7f0f351738ccdf06f6a6de86bcac862677ca0b2b6ea505a05bc->leave($__internal_5c5cc192a557d7f0f351738ccdf06f6a6de86bcac862677ca0b2b6ea505a05bc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d527038a8675b1404ffb3e9858e50f45ca0869b98a8895b5ed8da0431bba029a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d527038a8675b1404ffb3e9858e50f45ca0869b98a8895b5ed8da0431bba029a->enter($__internal_d527038a8675b1404ffb3e9858e50f45ca0869b98a8895b5ed8da0431bba029a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_11b05cb92661e5af74c0f7d981853d50e97fd4408f86e9c215539a377f092bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11b05cb92661e5af74c0f7d981853d50e97fd4408f86e9c215539a377f092bdb->enter($__internal_11b05cb92661e5af74c0f7d981853d50e97fd4408f86e9c215539a377f092bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "name", array()), "html", null, true);
        echo "</h1>

    <table>
        <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "id", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "name", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "description", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Image</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "image", array()), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AEIndex", array("id" => $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "tvSeriesId", array()))), "html", null, true);
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AEEdit", array("id" => $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_11b05cb92661e5af74c0f7d981853d50e97fd4408f86e9c215539a377f092bdb->leave($__internal_11b05cb92661e5af74c0f7d981853d50e97fd4408f86e9c215539a377f092bdb_prof);

        
        $__internal_d527038a8675b1404ffb3e9858e50f45ca0869b98a8895b5ed8da0431bba029a->leave($__internal_d527038a8675b1404ffb3e9858e50f45ca0869b98a8895b5ed8da0431bba029a_prof);

    }

    public function getTemplateName()
    {
        return "backend/episode/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 37,  102 => 35,  96 => 32,  90 => 29,  80 => 22,  73 => 18,  66 => 14,  59 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>{{ tvSeries.name }}</h1>

    <table>
        <tbody>
        <tr>
            <th>Id</th>
            <td>{{ tvSeries.id }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ tvSeries.name }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ tvSeries.description }}</td>
        </tr>
        <tr>
            <th>Image</th>
            <td>{{ tvSeries.image }}</td>
        </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('_AEIndex',{'id':tvSeries.tvSeriesId}) }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('_AEEdit', { 'id': tvSeries.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
            <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}", "backend/episode/show.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/backend/episode/show.html.twig");
    }
}
