<?php

/* base.html.twig */
class __TwigTemplate_858ef060ba8e7d8b69c987e2b26cac1e055318260e237a092e08b3a56bbedcd3 extends Twig_Template
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
        $__internal_4c447ce1e444f5a8ccf5e3a0b9c73a6bfb1027f25a6eddf05a94c5e20f02b8e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c447ce1e444f5a8ccf5e3a0b9c73a6bfb1027f25a6eddf05a94c5e20f02b8e3->enter($__internal_4c447ce1e444f5a8ccf5e3a0b9c73a6bfb1027f25a6eddf05a94c5e20f02b8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f9e2ad20a4d4b7c99e111e721ab4e80033822a7a8615272cce87004702018979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e2ad20a4d4b7c99e111e721ab4e80033822a7a8615272cce87004702018979->enter($__internal_f9e2ad20a4d4b7c99e111e721ab4e80033822a7a8615272cce87004702018979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div>
            <a href = \"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_index");
        echo "\">Index</a> |
            ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "                <a href=\"";
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
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 22
        echo "        </div>
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
        
        $__internal_4c447ce1e444f5a8ccf5e3a0b9c73a6bfb1027f25a6eddf05a94c5e20f02b8e3->leave($__internal_4c447ce1e444f5a8ccf5e3a0b9c73a6bfb1027f25a6eddf05a94c5e20f02b8e3_prof);

        
        $__internal_f9e2ad20a4d4b7c99e111e721ab4e80033822a7a8615272cce87004702018979->leave($__internal_f9e2ad20a4d4b7c99e111e721ab4e80033822a7a8615272cce87004702018979_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_482b975aef4aaf3a7496c52f13be406fb0fb8f8dc0af1cbaf054fd793df17d0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_482b975aef4aaf3a7496c52f13be406fb0fb8f8dc0af1cbaf054fd793df17d0c->enter($__internal_482b975aef4aaf3a7496c52f13be406fb0fb8f8dc0af1cbaf054fd793df17d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_79de4a61bf5debcd13b149a3774cf3cb356d73b41b8b0b3cabc6a72a2912fcd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79de4a61bf5debcd13b149a3774cf3cb356d73b41b8b0b3cabc6a72a2912fcd5->enter($__internal_79de4a61bf5debcd13b149a3774cf3cb356d73b41b8b0b3cabc6a72a2912fcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TvSeries";
        
        $__internal_79de4a61bf5debcd13b149a3774cf3cb356d73b41b8b0b3cabc6a72a2912fcd5->leave($__internal_79de4a61bf5debcd13b149a3774cf3cb356d73b41b8b0b3cabc6a72a2912fcd5_prof);

        
        $__internal_482b975aef4aaf3a7496c52f13be406fb0fb8f8dc0af1cbaf054fd793df17d0c->leave($__internal_482b975aef4aaf3a7496c52f13be406fb0fb8f8dc0af1cbaf054fd793df17d0c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1ae915309063d59ebff67c4e3d57b8d18ef1a03236a13187a9d4d9de1de19d2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae915309063d59ebff67c4e3d57b8d18ef1a03236a13187a9d4d9de1de19d2c->enter($__internal_1ae915309063d59ebff67c4e3d57b8d18ef1a03236a13187a9d4d9de1de19d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5bcf590b68537d1f27938d08955a9b5332a96b9e6ce2f28e2b1e73442a1d3394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bcf590b68537d1f27938d08955a9b5332a96b9e6ce2f28e2b1e73442a1d3394->enter($__internal_5bcf590b68537d1f27938d08955a9b5332a96b9e6ce2f28e2b1e73442a1d3394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5bcf590b68537d1f27938d08955a9b5332a96b9e6ce2f28e2b1e73442a1d3394->leave($__internal_5bcf590b68537d1f27938d08955a9b5332a96b9e6ce2f28e2b1e73442a1d3394_prof);

        
        $__internal_1ae915309063d59ebff67c4e3d57b8d18ef1a03236a13187a9d4d9de1de19d2c->leave($__internal_1ae915309063d59ebff67c4e3d57b8d18ef1a03236a13187a9d4d9de1de19d2c_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_aadb18f56cfba1d1897223bffea476be6f27e6fca5e72d694b0dbb7e20aafa4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aadb18f56cfba1d1897223bffea476be6f27e6fca5e72d694b0dbb7e20aafa4a->enter($__internal_aadb18f56cfba1d1897223bffea476be6f27e6fca5e72d694b0dbb7e20aafa4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7dd3546bbd45bde68fa717cf15641c7adc35310e6f9beb0563994a105682e3ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd3546bbd45bde68fa717cf15641c7adc35310e6f9beb0563994a105682e3ed->enter($__internal_7dd3546bbd45bde68fa717cf15641c7adc35310e6f9beb0563994a105682e3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7dd3546bbd45bde68fa717cf15641c7adc35310e6f9beb0563994a105682e3ed->leave($__internal_7dd3546bbd45bde68fa717cf15641c7adc35310e6f9beb0563994a105682e3ed_prof);

        
        $__internal_aadb18f56cfba1d1897223bffea476be6f27e6fca5e72d694b0dbb7e20aafa4a->leave($__internal_aadb18f56cfba1d1897223bffea476be6f27e6fca5e72d694b0dbb7e20aafa4a_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_01833b005d597c8699ac7d1daf18351c565bc4907aaa791e95e6eb9447f3f662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01833b005d597c8699ac7d1daf18351c565bc4907aaa791e95e6eb9447f3f662->enter($__internal_01833b005d597c8699ac7d1daf18351c565bc4907aaa791e95e6eb9447f3f662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b14445912dd6bd01f13e6b6b05573b2b4abaadf7df7320c93b9fcc0c79ee84fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14445912dd6bd01f13e6b6b05573b2b4abaadf7df7320c93b9fcc0c79ee84fc->enter($__internal_b14445912dd6bd01f13e6b6b05573b2b4abaadf7df7320c93b9fcc0c79ee84fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b14445912dd6bd01f13e6b6b05573b2b4abaadf7df7320c93b9fcc0c79ee84fc->leave($__internal_b14445912dd6bd01f13e6b6b05573b2b4abaadf7df7320c93b9fcc0c79ee84fc_prof);

        
        $__internal_01833b005d597c8699ac7d1daf18351c565bc4907aaa791e95e6eb9447f3f662->leave($__internal_01833b005d597c8699ac7d1daf18351c565bc4907aaa791e95e6eb9447f3f662_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 24,  138 => 23,  121 => 6,  103 => 5,  91 => 25,  88 => 24,  86 => 23,  83 => 22,  75 => 20,  69 => 17,  65 => 16,  60 => 14,  55 => 13,  53 => 12,  49 => 11,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
            <a href = \"{{ path('_index') }}\">Index</a> |
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
", "base.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/base.html.twig");
    }
}
