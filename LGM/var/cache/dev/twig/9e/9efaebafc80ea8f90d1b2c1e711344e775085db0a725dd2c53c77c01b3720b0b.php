<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d9d86d4a587fc8f298261368b1578aa3d5ba9b49c21f7684bb35392f68a5408b extends Twig_Template
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
        $__internal_091b5c2ed1a5d642cd6f8882006bd7e5ba53b249c511587a5a5b458212c60d54 = $this->env->getExtension("native_profiler");
        $__internal_091b5c2ed1a5d642cd6f8882006bd7e5ba53b249c511587a5a5b458212c60d54->enter($__internal_091b5c2ed1a5d642cd6f8882006bd7e5ba53b249c511587a5a5b458212c60d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_091b5c2ed1a5d642cd6f8882006bd7e5ba53b249c511587a5a5b458212c60d54->leave($__internal_091b5c2ed1a5d642cd6f8882006bd7e5ba53b249c511587a5a5b458212c60d54_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5061af98667baded54554bbce64a7022a6bd0fc8ec0e0bdc4393ad05e34a0002 = $this->env->getExtension("native_profiler");
        $__internal_5061af98667baded54554bbce64a7022a6bd0fc8ec0e0bdc4393ad05e34a0002->enter($__internal_5061af98667baded54554bbce64a7022a6bd0fc8ec0e0bdc4393ad05e34a0002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5061af98667baded54554bbce64a7022a6bd0fc8ec0e0bdc4393ad05e34a0002->leave($__internal_5061af98667baded54554bbce64a7022a6bd0fc8ec0e0bdc4393ad05e34a0002_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9ebba8a27c1d1a6d70802e847341b0aa588a0bbe4ab033289758d22a5577808 = $this->env->getExtension("native_profiler");
        $__internal_f9ebba8a27c1d1a6d70802e847341b0aa588a0bbe4ab033289758d22a5577808->enter($__internal_f9ebba8a27c1d1a6d70802e847341b0aa588a0bbe4ab033289758d22a5577808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f9ebba8a27c1d1a6d70802e847341b0aa588a0bbe4ab033289758d22a5577808->leave($__internal_f9ebba8a27c1d1a6d70802e847341b0aa588a0bbe4ab033289758d22a5577808_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fe838ab40fbd440facd9798e63e7979cde325c502bd8ce0307b690399ef5648 = $this->env->getExtension("native_profiler");
        $__internal_6fe838ab40fbd440facd9798e63e7979cde325c502bd8ce0307b690399ef5648->enter($__internal_6fe838ab40fbd440facd9798e63e7979cde325c502bd8ce0307b690399ef5648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6fe838ab40fbd440facd9798e63e7979cde325c502bd8ce0307b690399ef5648->leave($__internal_6fe838ab40fbd440facd9798e63e7979cde325c502bd8ce0307b690399ef5648_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
