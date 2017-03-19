<?php

/* backend/episode/index.html.twig */
class __TwigTemplate_1bc7b3f94dd13ae59c0ee9f2100750cab1210f1e0945efcf8e1db6162f48e17c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "backend/episode/index.html.twig", 1);
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
        $__internal_cabd248479bdab7d5288e2595bd39f62fd424d085e65c7b9212aed29b425e5e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cabd248479bdab7d5288e2595bd39f62fd424d085e65c7b9212aed29b425e5e7->enter($__internal_cabd248479bdab7d5288e2595bd39f62fd424d085e65c7b9212aed29b425e5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/episode/index.html.twig"));

        $__internal_19d1f2f2986db4630c4c4e986bba0160ebc940479113775d3c8c049e9296cc9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d1f2f2986db4630c4c4e986bba0160ebc940479113775d3c8c049e9296cc9b->enter($__internal_19d1f2f2986db4630c4c4e986bba0160ebc940479113775d3c8c049e9296cc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/episode/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cabd248479bdab7d5288e2595bd39f62fd424d085e65c7b9212aed29b425e5e7->leave($__internal_cabd248479bdab7d5288e2595bd39f62fd424d085e65c7b9212aed29b425e5e7_prof);

        
        $__internal_19d1f2f2986db4630c4c4e986bba0160ebc940479113775d3c8c049e9296cc9b->leave($__internal_19d1f2f2986db4630c4c4e986bba0160ebc940479113775d3c8c049e9296cc9b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_18c17edc0a0af8adc929873b41b50ddc4bb614293f618558e1e9f7c727370b91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18c17edc0a0af8adc929873b41b50ddc4bb614293f618558e1e9f7c727370b91->enter($__internal_18c17edc0a0af8adc929873b41b50ddc4bb614293f618558e1e9f7c727370b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19f13654dae603c36bb2b86bf0a6d7307fce2feadebfc131e0f68da375fde0f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f13654dae603c36bb2b86bf0a6d7307fce2feadebfc131e0f68da375fde0f5->enter($__internal_19f13654dae603c36bb2b86bf0a6d7307fce2feadebfc131e0f68da375fde0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <th>Image</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 16
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
            // line 17
            echo "            <tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "episodeNumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "description", array()), "html", null, true);
            echo "</td>
                <td><a href=";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "image", array()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "image", array()), "html", null, true);
            echo "</a></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AEShow", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                    </ul>
                </td>
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
        // line 31
        echo "        </tbody>
    </table>
    <ul>
        <li>
            <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AENew", array("id" => $this->getAttribute(($context["tv"] ?? $this->getContext($context, "tv")), "id", array()))), "html", null, true);
        echo "\">Create a new Episode</a>
        </li>
    </ul>
    ";
        // line 39
        echo "    <div class=\"navigation\">
        ";
        // line 40
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["episodes"] ?? $this->getContext($context, "episodes")));
        echo "
    </div>
";
        
        $__internal_19f13654dae603c36bb2b86bf0a6d7307fce2feadebfc131e0f68da375fde0f5->leave($__internal_19f13654dae603c36bb2b86bf0a6d7307fce2feadebfc131e0f68da375fde0f5_prof);

        
        $__internal_18c17edc0a0af8adc929873b41b50ddc4bb614293f618558e1e9f7c727370b91->leave($__internal_18c17edc0a0af8adc929873b41b50ddc4bb614293f618558e1e9f7c727370b91_prof);

    }

    public function getTemplateName()
    {
        return "backend/episode/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 40,  143 => 39,  137 => 35,  131 => 31,  111 => 25,  102 => 21,  98 => 20,  94 => 19,  90 => 18,  83 => 17,  66 => 16,  57 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>{{ tv.name }} Episode list</h1>
    <table>
        <thead>
        <tr>
            {# sorting of properties based on query components #}
            <th>Name</th>
            <th>EpisodeNumber</th>
            <th>Description</th>
            <th>Image</th>
        </tr>
        </thead>
        <tbody>
        {% for e in episodes %}
            <tr {% if loop.index is odd %}class=\"color\"{% endif %}>
                <td>{{ e.name }}</td>
                <td>{{ e.episodeNumber }}</td>
                <td>{{ e.description }}</td>
                <td><a href={{ e.image }}>{{ e.image }}</a></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('_AEShow', { 'id': e.id }) }}\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <ul>
        <li>
            <a href=\"{{ path('_AENew',{'id':tv.id})  }}\">Create a new Episode</a>
        </li>
    </ul>
    {# display navigation #}
    <div class=\"navigation\">
        {{ knp_pagination_render(episodes) }}
    </div>
{% endblock %}", "backend/episode/index.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/backend/episode/index.html.twig");
    }
}
