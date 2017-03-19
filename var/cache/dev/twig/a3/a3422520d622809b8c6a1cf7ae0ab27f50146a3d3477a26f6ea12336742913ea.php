<?php

/* tvseries/index.html.twig */
class __TwigTemplate_61a29572b0dff3b6149c75fec03a9a19a20db523c74b417957bcfe948215cc07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tvseries/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1aea51e81cc8ec7babe6ad91844a7c6d9137a9f0b17799ad028e4591cce9f36d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aea51e81cc8ec7babe6ad91844a7c6d9137a9f0b17799ad028e4591cce9f36d->enter($__internal_1aea51e81cc8ec7babe6ad91844a7c6d9137a9f0b17799ad028e4591cce9f36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tvseries/index.html.twig"));

        $__internal_29363e2203513a33dbb2f56cd40e6dade7e214b47bd669f1c51ebe34cfc382b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29363e2203513a33dbb2f56cd40e6dade7e214b47bd669f1c51ebe34cfc382b5->enter($__internal_29363e2203513a33dbb2f56cd40e6dade7e214b47bd669f1c51ebe34cfc382b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tvseries/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1aea51e81cc8ec7babe6ad91844a7c6d9137a9f0b17799ad028e4591cce9f36d->leave($__internal_1aea51e81cc8ec7babe6ad91844a7c6d9137a9f0b17799ad028e4591cce9f36d_prof);

        
        $__internal_29363e2203513a33dbb2f56cd40e6dade7e214b47bd669f1c51ebe34cfc382b5->leave($__internal_29363e2203513a33dbb2f56cd40e6dade7e214b47bd669f1c51ebe34cfc382b5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5153d6b5289b43a4e6590ac09ba01bf3f8d6982aaddb9f20ef1fff4929f00db6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5153d6b5289b43a4e6590ac09ba01bf3f8d6982aaddb9f20ef1fff4929f00db6->enter($__internal_5153d6b5289b43a4e6590ac09ba01bf3f8d6982aaddb9f20ef1fff4929f00db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ffac7da7b848e1a43d8adcb5e993c155291da61a30689b7ba67af1ac67b98ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffac7da7b848e1a43d8adcb5e993c155291da61a30689b7ba67af1ac67b98ed4->enter($__internal_ffac7da7b848e1a43d8adcb5e993c155291da61a30689b7ba67af1ac67b98ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div>
        <h1>Tvseries list</h1>
    </div>

    <table>
        <thead>
        <tr>
            <th>";
        // line 10
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "Name", "tv.id");
        echo "</th>
            <th>Author</th>
            <th>Releasedat</th>
            <th>Description</th>
            <th>Image</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["tvSeries"]);
        foreach ($context['_seq'] as $context["_key"] => $context["tvSeries"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_episodeIndex", array("id" => $this->getAttribute($context["tvSeries"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tvSeries"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["tvSeries"], "author", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["tvSeries"], "releasedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tvSeries"], "releasedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["tvSeries"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["tvSeries"], "image", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tvSeries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>
    <div class=\"navigation\">
        ";
        // line 30
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["tvSeries"] ?? $this->getContext($context, "tvSeries")));
        echo "
    </div>
";
        
        $__internal_ffac7da7b848e1a43d8adcb5e993c155291da61a30689b7ba67af1ac67b98ed4->leave($__internal_ffac7da7b848e1a43d8adcb5e993c155291da61a30689b7ba67af1ac67b98ed4_prof);

        
        $__internal_5153d6b5289b43a4e6590ac09ba01bf3f8d6982aaddb9f20ef1fff4929f00db6->leave($__internal_5153d6b5289b43a4e6590ac09ba01bf3f8d6982aaddb9f20ef1fff4929f00db6_prof);

    }

    public function getTemplateName()
    {
        return "tvseries/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 30,  105 => 27,  96 => 24,  92 => 23,  86 => 22,  82 => 21,  76 => 20,  73 => 19,  69 => 18,  58 => 10,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div>
        <h1>Tvseries list</h1>
    </div>

    <table>
        <thead>
        <tr>
            <th>{{ knp_pagination_sortable(tvSeries, 'Name', 'tv.id') }}</th>
            <th>Author</th>
            <th>Releasedat</th>
            <th>Description</th>
            <th>Image</th>
        </tr>
        </thead>
        <tbody>
        {% for tvSeries in tvSeries %}
            <tr>
                <td><a href=\"{{ path('_episodeIndex', { 'id': tvSeries.id }) }}\">{{ tvSeries.name }}</a></td>
                <td>{{ tvSeries.author }}</td>
                <td>{% if tvSeries.releasedAt %}{{ tvSeries.releasedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ tvSeries.description }}</td>
                <td>{{ tvSeries.image }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <div class=\"navigation\">
        {{ knp_pagination_render(tvSeries) }}
    </div>
{% endblock %}


", "tvseries/index.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/tvseries/index.html.twig");
    }
}
