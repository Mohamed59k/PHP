<?php

/* userEpisode/index.html.twig */
class __TwigTemplate_1c29f2cfb314a6f833194433851f6de41c703415e42be6f5e21799805702178e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "userEpisode/index.html.twig", 1);
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
        $__internal_7118ec405129d46f7b532c48ba09ab281d7e90ca6bdc65fb8d319a396ad4b396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7118ec405129d46f7b532c48ba09ab281d7e90ca6bdc65fb8d319a396ad4b396->enter($__internal_7118ec405129d46f7b532c48ba09ab281d7e90ca6bdc65fb8d319a396ad4b396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userEpisode/index.html.twig"));

        $__internal_ef3546f9a213f6456ca675e20bcfc0ad5ba2faae05e2027f5036f0c30291c5bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef3546f9a213f6456ca675e20bcfc0ad5ba2faae05e2027f5036f0c30291c5bb->enter($__internal_ef3546f9a213f6456ca675e20bcfc0ad5ba2faae05e2027f5036f0c30291c5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userEpisode/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7118ec405129d46f7b532c48ba09ab281d7e90ca6bdc65fb8d319a396ad4b396->leave($__internal_7118ec405129d46f7b532c48ba09ab281d7e90ca6bdc65fb8d319a396ad4b396_prof);

        
        $__internal_ef3546f9a213f6456ca675e20bcfc0ad5ba2faae05e2027f5036f0c30291c5bb->leave($__internal_ef3546f9a213f6456ca675e20bcfc0ad5ba2faae05e2027f5036f0c30291c5bb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_36e1aa9feee949a5d13c5afa05492346213e13997015dccc45a14ad3cddc9e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36e1aa9feee949a5d13c5afa05492346213e13997015dccc45a14ad3cddc9e71->enter($__internal_36e1aa9feee949a5d13c5afa05492346213e13997015dccc45a14ad3cddc9e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e45fd8e0511f725aac55f212d5d496d9823f06ab96139be261de94199e27034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e45fd8e0511f725aac55f212d5d496d9823f06ab96139be261de94199e27034->enter($__internal_4e45fd8e0511f725aac55f212d5d496d9823f06ab96139be261de94199e27034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>History</h1>

    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>EpisodeNumber</th>
            <th>Description</th>
            <th>watchedAt</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["userEpisodes"] ?? $this->getContext($context, "userEpisodes")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_userEpisodeNew", array("id" => $this->getAttribute($context["e"], "episode_id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "episodeNumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "watched", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_userEpisodeDelete", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\">delete</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>
";
        
        $__internal_4e45fd8e0511f725aac55f212d5d496d9823f06ab96139be261de94199e27034->leave($__internal_4e45fd8e0511f725aac55f212d5d496d9823f06ab96139be261de94199e27034_prof);

        
        $__internal_36e1aa9feee949a5d13c5afa05492346213e13997015dccc45a14ad3cddc9e71->leave($__internal_36e1aa9feee949a5d13c5afa05492346213e13997015dccc45a14ad3cddc9e71_prof);

    }

    public function getTemplateName()
    {
        return "userEpisode/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 31,  91 => 25,  84 => 21,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>History</h1>

    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>EpisodeNumber</th>
            <th>Description</th>
            <th>watchedAt</th>
        </tr>
        </thead>
        <tbody>
        {% for e in userEpisodes %}
            <tr>
                <td><a href=\"{{ path('_userEpisodeNew', { 'id': e.episode_id }) }}\">{{ e.name }}</a></td>
                <td>{{ e.episodeNumber }}</td>
                <td>{{ e.description }}</td>
                <td>{{ e.watched }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('_userEpisodeDelete', { 'id': e.id }) }}\">delete</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}", "userEpisode/index.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/userEpisode/index.html.twig");
    }
}
