<?php

/* backend/tvseries/show.html.twig */
class __TwigTemplate_6490bd6956e40e49f8fa6d1633727351926e9be48640a230e1e0d41d51121b21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "backend/tvseries/show.html.twig", 1);
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
        $__internal_0d0eebdc11bed21173ebb530e7b3b9715ec5e2e2b16965f09bbc9e2993622696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d0eebdc11bed21173ebb530e7b3b9715ec5e2e2b16965f09bbc9e2993622696->enter($__internal_0d0eebdc11bed21173ebb530e7b3b9715ec5e2e2b16965f09bbc9e2993622696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/tvseries/show.html.twig"));

        $__internal_716467fff0fb804ac8d994c2aa436a92c2cfd6e76e29280e817904feb40a727a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716467fff0fb804ac8d994c2aa436a92c2cfd6e76e29280e817904feb40a727a->enter($__internal_716467fff0fb804ac8d994c2aa436a92c2cfd6e76e29280e817904feb40a727a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/tvseries/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d0eebdc11bed21173ebb530e7b3b9715ec5e2e2b16965f09bbc9e2993622696->leave($__internal_0d0eebdc11bed21173ebb530e7b3b9715ec5e2e2b16965f09bbc9e2993622696_prof);

        
        $__internal_716467fff0fb804ac8d994c2aa436a92c2cfd6e76e29280e817904feb40a727a->leave($__internal_716467fff0fb804ac8d994c2aa436a92c2cfd6e76e29280e817904feb40a727a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7781a3a13b30cb7958ebe402f49229d64a3934c7bfe37b472d2af7eef619d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7781a3a13b30cb7958ebe402f49229d64a3934c7bfe37b472d2af7eef619d32->enter($__internal_a7781a3a13b30cb7958ebe402f49229d64a3934c7bfe37b472d2af7eef619d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_21b2a2bc55c5c8ae45c156661617edd833c9b6e15926f6a63b372f71f35a5f77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b2a2bc55c5c8ae45c156661617edd833c9b6e15926f6a63b372f71f35a5f77->enter($__internal_21b2a2bc55c5c8ae45c156661617edd833c9b6e15926f6a63b372f71f35a5f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tvseries</h1>

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
                <th>Author</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "author", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Releasedat</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "releasedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "releasedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "image", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_adminIndex");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_edit", array("id" => $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_21b2a2bc55c5c8ae45c156661617edd833c9b6e15926f6a63b372f71f35a5f77->leave($__internal_21b2a2bc55c5c8ae45c156661617edd833c9b6e15926f6a63b372f71f35a5f77_prof);

        
        $__internal_a7781a3a13b30cb7958ebe402f49229d64a3934c7bfe37b472d2af7eef619d32->leave($__internal_a7781a3a13b30cb7958ebe402f49229d64a3934c7bfe37b472d2af7eef619d32_prof);

    }

    public function getTemplateName()
    {
        return "backend/tvseries/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 45,  116 => 43,  110 => 40,  104 => 37,  94 => 30,  87 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tvseries</h1>

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
                <th>Author</th>
                <td>{{ tvSeries.author }}</td>
            </tr>
            <tr>
                <th>Releasedat</th>
                <td>{% if tvSeries.releasedAt %}{{ tvSeries.releasedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
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
            <a href=\"{{ path('_adminIndex') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('_edit', { 'id': tvSeries.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "backend/tvseries/show.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/backend/tvseries/show.html.twig");
    }
}
