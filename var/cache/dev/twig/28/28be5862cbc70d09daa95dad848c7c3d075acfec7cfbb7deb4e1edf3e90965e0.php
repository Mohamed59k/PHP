<?php

/* episode/index.html.twig */
class __TwigTemplate_b3c8381f35f852a1eec5575dc76f04990d5981fa2fd5e5fad97bbcf4244942ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "episode/index.html.twig", 1);
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
        $__internal_7df28934212500a7ddb4ab37f4bc33ab7f136f91b763830d72a48d1803516480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7df28934212500a7ddb4ab37f4bc33ab7f136f91b763830d72a48d1803516480->enter($__internal_7df28934212500a7ddb4ab37f4bc33ab7f136f91b763830d72a48d1803516480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/index.html.twig"));

        $__internal_f7dee833cf613d92023e3d4c6295ac7ac93172841ecb8a6aded90573c3a93860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7dee833cf613d92023e3d4c6295ac7ac93172841ecb8a6aded90573c3a93860->enter($__internal_f7dee833cf613d92023e3d4c6295ac7ac93172841ecb8a6aded90573c3a93860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7df28934212500a7ddb4ab37f4bc33ab7f136f91b763830d72a48d1803516480->leave($__internal_7df28934212500a7ddb4ab37f4bc33ab7f136f91b763830d72a48d1803516480_prof);

        
        $__internal_f7dee833cf613d92023e3d4c6295ac7ac93172841ecb8a6aded90573c3a93860->leave($__internal_f7dee833cf613d92023e3d4c6295ac7ac93172841ecb8a6aded90573c3a93860_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d95506950d302055093f8e3594ce09b4eb7e2c038a2f81bc0a16bf63ce180613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d95506950d302055093f8e3594ce09b4eb7e2c038a2f81bc0a16bf63ce180613->enter($__internal_d95506950d302055093f8e3594ce09b4eb7e2c038a2f81bc0a16bf63ce180613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f785f406bedbafc304d912c6ceb9bbcaa3d67b199280522480a240ff676f723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f785f406bedbafc304d912c6ceb9bbcaa3d67b199280522480a240ff676f723->enter($__internal_2f785f406bedbafc304d912c6ceb9bbcaa3d67b199280522480a240ff676f723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tv"] ?? $this->getContext($context, "tv")), "name", array()), "html", null, true);
        echo " Episode list</h1>
    <table>
        <thead>
        <tr>
            ";
        // line 9
        echo "            <th>Name</th>
            <th>EpisodeNumber</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 16
            echo "            <tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_userEpisodeNew", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "episodeNumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "description", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </tbody>
    </table>
    ";
        // line 25
        echo "    <div class=\"navigation\">
        ";
        // line 26
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["episodes"] ?? $this->getContext($context, "episodes")));
        echo "
    </div>
";
        
        $__internal_2f785f406bedbafc304d912c6ceb9bbcaa3d67b199280522480a240ff676f723->leave($__internal_2f785f406bedbafc304d912c6ceb9bbcaa3d67b199280522480a240ff676f723_prof);

        
        $__internal_d95506950d302055093f8e3594ce09b4eb7e2c038a2f81bc0a16bf63ce180613->leave($__internal_d95506950d302055093f8e3594ce09b4eb7e2c038a2f81bc0a16bf63ce180613_prof);

    }

    public function getTemplateName()
    {
        return "episode/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 26,  120 => 25,  116 => 22,  99 => 19,  95 => 18,  89 => 17,  82 => 16,  65 => 15,  57 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>{{ tv.name }} Episode list</h1>
    <table>
        <thead>
        <tr>
            {# sorting of properties based on query components #}
            <th>Name</th>
            <th>EpisodeNumber</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        {% for e in episodes %}
            <tr {% if loop.index is odd %}class=\"color\"{% endif %}>
                <td><a href=\"{{ path('_userEpisodeNew', { 'id': e.id }) }}\">{{ e.name }}</a></td>
                <td>{{ e.episodeNumber }}</td>
                <td>{{ e.description }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    {# display navigation #}
    <div class=\"navigation\">
        {{ knp_pagination_render(episodes) }}
    </div>
{% endblock %}", "episode/index.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/episode/index.html.twig");
    }
}
