<?php

/* backend/tvseries/index.html.twig */
class __TwigTemplate_dedf44cc317eaafd60d5f89b254f442d4a29a652422a6b2d9fc5f70a26602413 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "backend/tvseries/index.html.twig", 1);
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
        $__internal_1f4c9b20f564708d9b42b273bcacbe26d44ccd67da87ec4a6935fbcf988c2b08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f4c9b20f564708d9b42b273bcacbe26d44ccd67da87ec4a6935fbcf988c2b08->enter($__internal_1f4c9b20f564708d9b42b273bcacbe26d44ccd67da87ec4a6935fbcf988c2b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/tvseries/index.html.twig"));

        $__internal_74e9042dbbbcc98d27ee7c960afa827945301a12963ad16074cc1fe434bf2013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e9042dbbbcc98d27ee7c960afa827945301a12963ad16074cc1fe434bf2013->enter($__internal_74e9042dbbbcc98d27ee7c960afa827945301a12963ad16074cc1fe434bf2013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/tvseries/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f4c9b20f564708d9b42b273bcacbe26d44ccd67da87ec4a6935fbcf988c2b08->leave($__internal_1f4c9b20f564708d9b42b273bcacbe26d44ccd67da87ec4a6935fbcf988c2b08_prof);

        
        $__internal_74e9042dbbbcc98d27ee7c960afa827945301a12963ad16074cc1fe434bf2013->leave($__internal_74e9042dbbbcc98d27ee7c960afa827945301a12963ad16074cc1fe434bf2013_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbeb1b949fb60de5a4421718863cec7e88c0be88ecd3907e534e502c47e0fda3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbeb1b949fb60de5a4421718863cec7e88c0be88ecd3907e534e502c47e0fda3->enter($__internal_fbeb1b949fb60de5a4421718863cec7e88c0be88ecd3907e534e502c47e0fda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d79317eb8e476c072033f61fee3586074e33bbfca4e14ab801e16bc13bce5da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d79317eb8e476c072033f61fee3586074e33bbfca4e14ab801e16bc13bce5da->enter($__internal_6d79317eb8e476c072033f61fee3586074e33bbfca4e14ab801e16bc13bce5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["tvSeries"]);
        foreach ($context['_seq'] as $context["_key"] => $context["tvSeries"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AEIndex", array("id" => $this->getAttribute($context["tvSeries"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tvSeries"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["tvSeries"], "author", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["tvSeries"], "releasedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tvSeries"], "releasedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["tvSeries"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["tvSeries"], "image", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_show", array("id" => $this->getAttribute($context["tvSeries"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tvSeries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>
    <ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_new");
        echo "\">Create a new tvSeries</a>
        </li>
    </ul>
    <div class=\"navigation\">
        ";
        // line 43
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["tvSeries"] ?? $this->getContext($context, "tvSeries")));
        echo "
    </div>
";
        
        $__internal_6d79317eb8e476c072033f61fee3586074e33bbfca4e14ab801e16bc13bce5da->leave($__internal_6d79317eb8e476c072033f61fee3586074e33bbfca4e14ab801e16bc13bce5da_prof);

        
        $__internal_fbeb1b949fb60de5a4421718863cec7e88c0be88ecd3907e534e502c47e0fda3->leave($__internal_fbeb1b949fb60de5a4421718863cec7e88c0be88ecd3907e534e502c47e0fda3_prof);

    }

    public function getTemplateName()
    {
        return "backend/tvseries/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 43,  122 => 39,  116 => 35,  104 => 29,  97 => 25,  93 => 24,  87 => 23,  83 => 22,  77 => 21,  74 => 20,  70 => 19,  58 => 10,  49 => 3,  40 => 2,  11 => 1,);
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
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for tvSeries in tvSeries %}
            <tr>
                <td><a href=\"{{ path('_AEIndex', { 'id': tvSeries.id }) }}\">{{ tvSeries.name }}</a></td>
                <td>{{ tvSeries.author }}</td>
                <td>{% if tvSeries.releasedAt %}{{ tvSeries.releasedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ tvSeries.description }}</td>
                <td>{{ tvSeries.image }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('_show', { 'id': tvSeries.id }) }}\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <ul>
        <li>
            <a href=\"{{ path('_new') }}\">Create a new tvSeries</a>
        </li>
    </ul>
    <div class=\"navigation\">
        {{ knp_pagination_render(tvSeries) }}
    </div>
{% endblock %}", "backend/tvseries/index.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/backend/tvseries/index.html.twig");
    }
}
