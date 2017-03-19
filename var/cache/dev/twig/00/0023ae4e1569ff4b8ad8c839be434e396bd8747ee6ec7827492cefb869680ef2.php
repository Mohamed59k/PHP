<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_9943f3086378597037d8cef70d4976e1936622dc5e4b98a72a8baa1ed88515b9 extends Twig_Template
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
        $__internal_80b882e39c19e1869a67ef000a3398ef63ed9f7e59de5b09cfa3ccb2d3de7cd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b882e39c19e1869a67ef000a3398ef63ed9f7e59de5b09cfa3ccb2d3de7cd9->enter($__internal_80b882e39c19e1869a67ef000a3398ef63ed9f7e59de5b09cfa3ccb2d3de7cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        $__internal_40f7af4b99b87df2dfb63ef9f58c9c93f2d8939270e08ba28b21e21605ff3a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f7af4b99b87df2dfb63ef9f58c9c93f2d8939270e08ba28b21e21605ff3a95->enter($__internal_40f7af4b99b87df2dfb63ef9f58c9c93f2d8939270e08ba28b21e21605ff3a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_80b882e39c19e1869a67ef000a3398ef63ed9f7e59de5b09cfa3ccb2d3de7cd9->leave($__internal_80b882e39c19e1869a67ef000a3398ef63ed9f7e59de5b09cfa3ccb2d3de7cd9_prof);

        
        $__internal_40f7af4b99b87df2dfb63ef9f58c9c93f2d8939270e08ba28b21e21605ff3a95->leave($__internal_40f7af4b99b87df2dfb63ef9f58c9c93f2d8939270e08ba28b21e21605ff3a95_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", "KnpPaginatorBundle:Pagination:sortable_link.html.twig", "/Users/pro/Desktop/test/tvseries/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
