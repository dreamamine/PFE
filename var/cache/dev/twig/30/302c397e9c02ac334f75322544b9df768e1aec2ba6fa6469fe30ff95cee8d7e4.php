<?php

/* LgmBundle::layout.html.twig */
class __TwigTemplate_c771b52b70a5b407e257a83ff8da95e7ed3bb569fe4764be25975ab81bcd8e64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "LgmBundle::layout.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24bd680c6dba1eb011950f9644b189fb8956f34d82ed5571a2019d4c66eea5aa = $this->env->getExtension("native_profiler");
        $__internal_24bd680c6dba1eb011950f9644b189fb8956f34d82ed5571a2019d4c66eea5aa->enter($__internal_24bd680c6dba1eb011950f9644b189fb8956f34d82ed5571a2019d4c66eea5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LgmBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24bd680c6dba1eb011950f9644b189fb8956f34d82ed5571a2019d4c66eea5aa->leave($__internal_24bd680c6dba1eb011950f9644b189fb8956f34d82ed5571a2019d4c66eea5aa_prof);

    }

    public function getTemplateName()
    {
        return "LgmBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
