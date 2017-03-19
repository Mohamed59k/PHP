<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_80985ad1391bf096a9342c7fd39999a2735e62492755825a45ed4fa75fc390ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_608e405ef7472434abe0d8b92c3ab71ca71c5151701f3b930162e8d248ce2024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_608e405ef7472434abe0d8b92c3ab71ca71c5151701f3b930162e8d248ce2024->enter($__internal_608e405ef7472434abe0d8b92c3ab71ca71c5151701f3b930162e8d248ce2024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6e071019e13d113625a8d0c0adf4b3b0ffdc59eb3efb6485f53f1de8df572293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e071019e13d113625a8d0c0adf4b3b0ffdc59eb3efb6485f53f1de8df572293->enter($__internal_6e071019e13d113625a8d0c0adf4b3b0ffdc59eb3efb6485f53f1de8df572293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_608e405ef7472434abe0d8b92c3ab71ca71c5151701f3b930162e8d248ce2024->leave($__internal_608e405ef7472434abe0d8b92c3ab71ca71c5151701f3b930162e8d248ce2024_prof);

        
        $__internal_6e071019e13d113625a8d0c0adf4b3b0ffdc59eb3efb6485f53f1de8df572293->leave($__internal_6e071019e13d113625a8d0c0adf4b3b0ffdc59eb3efb6485f53f1de8df572293_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4fb26c14a2374880259adcc8372013c0e1a07996bfaaedfab8321683ac5a20f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fb26c14a2374880259adcc8372013c0e1a07996bfaaedfab8321683ac5a20f7->enter($__internal_4fb26c14a2374880259adcc8372013c0e1a07996bfaaedfab8321683ac5a20f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aa75889611bddeefbbb4695859a9a0d4e2e76f2942dd0267047d26122500fd25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa75889611bddeefbbb4695859a9a0d4e2e76f2942dd0267047d26122500fd25->enter($__internal_aa75889611bddeefbbb4695859a9a0d4e2e76f2942dd0267047d26122500fd25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_aa75889611bddeefbbb4695859a9a0d4e2e76f2942dd0267047d26122500fd25->leave($__internal_aa75889611bddeefbbb4695859a9a0d4e2e76f2942dd0267047d26122500fd25_prof);

        
        $__internal_4fb26c14a2374880259adcc8372013c0e1a07996bfaaedfab8321683ac5a20f7->leave($__internal_4fb26c14a2374880259adcc8372013c0e1a07996bfaaedfab8321683ac5a20f7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4150609ac9ffefecd92e300c8a0ce8b0adee055bea1226e2334778381070dbe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4150609ac9ffefecd92e300c8a0ce8b0adee055bea1226e2334778381070dbe7->enter($__internal_4150609ac9ffefecd92e300c8a0ce8b0adee055bea1226e2334778381070dbe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8469fc35e64600268831d9568e19cf0129caba71476d645f746f0cbb9607e2f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8469fc35e64600268831d9568e19cf0129caba71476d645f746f0cbb9607e2f0->enter($__internal_8469fc35e64600268831d9568e19cf0129caba71476d645f746f0cbb9607e2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8469fc35e64600268831d9568e19cf0129caba71476d645f746f0cbb9607e2f0->leave($__internal_8469fc35e64600268831d9568e19cf0129caba71476d645f746f0cbb9607e2f0_prof);

        
        $__internal_4150609ac9ffefecd92e300c8a0ce8b0adee055bea1226e2334778381070dbe7->leave($__internal_4150609ac9ffefecd92e300c8a0ce8b0adee055bea1226e2334778381070dbe7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b66529fd529280aca48a330f43f98a001b2e1fc331d264e51cb98ec88e059c18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b66529fd529280aca48a330f43f98a001b2e1fc331d264e51cb98ec88e059c18->enter($__internal_b66529fd529280aca48a330f43f98a001b2e1fc331d264e51cb98ec88e059c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e43a13ad15d34d8cebd178210f23f470c7e6b2ceb399ed70fe254c97658f2665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e43a13ad15d34d8cebd178210f23f470c7e6b2ceb399ed70fe254c97658f2665->enter($__internal_e43a13ad15d34d8cebd178210f23f470c7e6b2ceb399ed70fe254c97658f2665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e43a13ad15d34d8cebd178210f23f470c7e6b2ceb399ed70fe254c97658f2665->leave($__internal_e43a13ad15d34d8cebd178210f23f470c7e6b2ceb399ed70fe254c97658f2665_prof);

        
        $__internal_b66529fd529280aca48a330f43f98a001b2e1fc331d264e51cb98ec88e059c18->leave($__internal_b66529fd529280aca48a330f43f98a001b2e1fc331d264e51cb98ec88e059c18_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/pro/Desktop/test/tvseries/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
