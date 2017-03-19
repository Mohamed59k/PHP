<?php

/* backend.html.twig */
class __TwigTemplate_dd26b694e59905a4ba45c9f1382a20dd25087f7b54c6019a494dd7a5f621d1b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3698991813ee4e67262134a976db6d86caafe726f268935143d94726afef2ed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3698991813ee4e67262134a976db6d86caafe726f268935143d94726afef2ed7->enter($__internal_3698991813ee4e67262134a976db6d86caafe726f268935143d94726afef2ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend.html.twig"));

        $__internal_a18c95017547a3298a2448c7906ed586bfa2200dc0fccb43194aab51e3998dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18c95017547a3298a2448c7906ed586bfa2200dc0fccb43194aab51e3998dad->enter($__internal_a18c95017547a3298a2448c7906ed586bfa2200dc0fccb43194aab51e3998dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
<div>
    <a href = \"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_adminIndex");
        echo "\">Index</a> |
    ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_userEpisodeIndex");
            echo "\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "
        </a> |
        <a href=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 20
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
        // line 22
        echo "</div>
";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "</body>
</html>
";
        
        $__internal_3698991813ee4e67262134a976db6d86caafe726f268935143d94726afef2ed7->leave($__internal_3698991813ee4e67262134a976db6d86caafe726f268935143d94726afef2ed7_prof);

        
        $__internal_a18c95017547a3298a2448c7906ed586bfa2200dc0fccb43194aab51e3998dad->leave($__internal_a18c95017547a3298a2448c7906ed586bfa2200dc0fccb43194aab51e3998dad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0281fd5041282b80d1027ffac37db7d48575ef37beec0de187c3ba771498a8c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0281fd5041282b80d1027ffac37db7d48575ef37beec0de187c3ba771498a8c8->enter($__internal_0281fd5041282b80d1027ffac37db7d48575ef37beec0de187c3ba771498a8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4a2bdf700d65987a2501ab10856760dc35e14fd46e5b0e15e30e97f8b68faacf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2bdf700d65987a2501ab10856760dc35e14fd46e5b0e15e30e97f8b68faacf->enter($__internal_4a2bdf700d65987a2501ab10856760dc35e14fd46e5b0e15e30e97f8b68faacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TvSeries";
        
        $__internal_4a2bdf700d65987a2501ab10856760dc35e14fd46e5b0e15e30e97f8b68faacf->leave($__internal_4a2bdf700d65987a2501ab10856760dc35e14fd46e5b0e15e30e97f8b68faacf_prof);

        
        $__internal_0281fd5041282b80d1027ffac37db7d48575ef37beec0de187c3ba771498a8c8->leave($__internal_0281fd5041282b80d1027ffac37db7d48575ef37beec0de187c3ba771498a8c8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_016a9d7776168921ef43e9edacbc87a387ff4b37cd5e15489b1ee2a26352d6b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_016a9d7776168921ef43e9edacbc87a387ff4b37cd5e15489b1ee2a26352d6b8->enter($__internal_016a9d7776168921ef43e9edacbc87a387ff4b37cd5e15489b1ee2a26352d6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ed5324702e184c1e11ccf3e9fc2f4705e7957f358d585128c567b7bc8ccca79d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5324702e184c1e11ccf3e9fc2f4705e7957f358d585128c567b7bc8ccca79d->enter($__internal_ed5324702e184c1e11ccf3e9fc2f4705e7957f358d585128c567b7bc8ccca79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ed5324702e184c1e11ccf3e9fc2f4705e7957f358d585128c567b7bc8ccca79d->leave($__internal_ed5324702e184c1e11ccf3e9fc2f4705e7957f358d585128c567b7bc8ccca79d_prof);

        
        $__internal_016a9d7776168921ef43e9edacbc87a387ff4b37cd5e15489b1ee2a26352d6b8->leave($__internal_016a9d7776168921ef43e9edacbc87a387ff4b37cd5e15489b1ee2a26352d6b8_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_7718c6fa2469269c2da87e23ac465454827aef0162bcb760ca9b2733670fc762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7718c6fa2469269c2da87e23ac465454827aef0162bcb760ca9b2733670fc762->enter($__internal_7718c6fa2469269c2da87e23ac465454827aef0162bcb760ca9b2733670fc762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_450156966a169c1b5f592780ff81936e12e02269bb15164c1f065e58b1e92798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450156966a169c1b5f592780ff81936e12e02269bb15164c1f065e58b1e92798->enter($__internal_450156966a169c1b5f592780ff81936e12e02269bb15164c1f065e58b1e92798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_450156966a169c1b5f592780ff81936e12e02269bb15164c1f065e58b1e92798->leave($__internal_450156966a169c1b5f592780ff81936e12e02269bb15164c1f065e58b1e92798_prof);

        
        $__internal_7718c6fa2469269c2da87e23ac465454827aef0162bcb760ca9b2733670fc762->leave($__internal_7718c6fa2469269c2da87e23ac465454827aef0162bcb760ca9b2733670fc762_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4eab3546f80b61bd77158931a72e3bfd825d30502a3d0154e7628ffda59c2c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eab3546f80b61bd77158931a72e3bfd825d30502a3d0154e7628ffda59c2c09->enter($__internal_4eab3546f80b61bd77158931a72e3bfd825d30502a3d0154e7628ffda59c2c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_873bdefa55d1e75d219ae0d58c718b0c7a2b0ce35218017ed64b93abe3955df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873bdefa55d1e75d219ae0d58c718b0c7a2b0ce35218017ed64b93abe3955df6->enter($__internal_873bdefa55d1e75d219ae0d58c718b0c7a2b0ce35218017ed64b93abe3955df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_873bdefa55d1e75d219ae0d58c718b0c7a2b0ce35218017ed64b93abe3955df6->leave($__internal_873bdefa55d1e75d219ae0d58c718b0c7a2b0ce35218017ed64b93abe3955df6_prof);

        
        $__internal_4eab3546f80b61bd77158931a72e3bfd825d30502a3d0154e7628ffda59c2c09->leave($__internal_4eab3546f80b61bd77158931a72e3bfd825d30502a3d0154e7628ffda59c2c09_prof);

    }

    public function getTemplateName()
    {
        return "backend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 24,  137 => 23,  120 => 6,  102 => 5,  90 => 25,  88 => 24,  86 => 23,  83 => 22,  75 => 20,  69 => 17,  65 => 16,  60 => 14,  55 => 13,  53 => 12,  49 => 11,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}TvSeries{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
<div>
    <a href = \"{{ path('_adminIndex') }}\">Index</a> |
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        <a href=\"{{ path('_userEpisodeIndex')}}\">
            {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }}
        </a> |
        <a href=\"{{ path('fos_user_security_logout') }}\">
            {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
        </a>
    {% else %}
        <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
    {% endif %}
</div>
{% block body %}{% endblock %}
{% block javascripts %}{% endblock %}
</body>
</html>
", "backend.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/backend.html.twig");
    }
}
