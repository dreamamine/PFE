<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a1a6e880132039843d91bd03a7eaa3edf58bfec8db2da523932faab4f41bde1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26e3a7c8333b7fef6c47c9665aeb3a2f5d2ebfc478ffd16e1a8b1648c8f7c178 = $this->env->getExtension("native_profiler");
        $__internal_26e3a7c8333b7fef6c47c9665aeb3a2f5d2ebfc478ffd16e1a8b1648c8f7c178->enter($__internal_26e3a7c8333b7fef6c47c9665aeb3a2f5d2ebfc478ffd16e1a8b1648c8f7c178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26e3a7c8333b7fef6c47c9665aeb3a2f5d2ebfc478ffd16e1a8b1648c8f7c178->leave($__internal_26e3a7c8333b7fef6c47c9665aeb3a2f5d2ebfc478ffd16e1a8b1648c8f7c178_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_690f3c038b3654b595d80968db036f13abb6a4564bc376fdb1760f2a6d545922 = $this->env->getExtension("native_profiler");
        $__internal_690f3c038b3654b595d80968db036f13abb6a4564bc376fdb1760f2a6d545922->enter($__internal_690f3c038b3654b595d80968db036f13abb6a4564bc376fdb1760f2a6d545922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_690f3c038b3654b595d80968db036f13abb6a4564bc376fdb1760f2a6d545922->leave($__internal_690f3c038b3654b595d80968db036f13abb6a4564bc376fdb1760f2a6d545922_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f658c919fedf68e6967a4e4cfad5a23e5c3913e50fc3a8bc47207296c56ad666 = $this->env->getExtension("native_profiler");
        $__internal_f658c919fedf68e6967a4e4cfad5a23e5c3913e50fc3a8bc47207296c56ad666->enter($__internal_f658c919fedf68e6967a4e4cfad5a23e5c3913e50fc3a8bc47207296c56ad666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f658c919fedf68e6967a4e4cfad5a23e5c3913e50fc3a8bc47207296c56ad666->leave($__internal_f658c919fedf68e6967a4e4cfad5a23e5c3913e50fc3a8bc47207296c56ad666_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a0d9bf6975abb34b40265a77aba9c033e9750029df20b33c49d7aab4196d5f28 = $this->env->getExtension("native_profiler");
        $__internal_a0d9bf6975abb34b40265a77aba9c033e9750029df20b33c49d7aab4196d5f28->enter($__internal_a0d9bf6975abb34b40265a77aba9c033e9750029df20b33c49d7aab4196d5f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a0d9bf6975abb34b40265a77aba9c033e9750029df20b33c49d7aab4196d5f28->leave($__internal_a0d9bf6975abb34b40265a77aba9c033e9750029df20b33c49d7aab4196d5f28_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
