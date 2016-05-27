<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3aeb78e5decda9bbf0266b0ea9f682c0cc63d4d65ab1fdef500885143cd9d92f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8613a6ba085220e283a6fbc8903907860889b7e96a049c5626a7995fcb637e81 = $this->env->getExtension("native_profiler");
        $__internal_8613a6ba085220e283a6fbc8903907860889b7e96a049c5626a7995fcb637e81->enter($__internal_8613a6ba085220e283a6fbc8903907860889b7e96a049c5626a7995fcb637e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8613a6ba085220e283a6fbc8903907860889b7e96a049c5626a7995fcb637e81->leave($__internal_8613a6ba085220e283a6fbc8903907860889b7e96a049c5626a7995fcb637e81_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b2a6c6175d7558f31d8fccfc83d0e7ba3652a11b74fdcbcaf4adaaf7fb9b617c = $this->env->getExtension("native_profiler");
        $__internal_b2a6c6175d7558f31d8fccfc83d0e7ba3652a11b74fdcbcaf4adaaf7fb9b617c->enter($__internal_b2a6c6175d7558f31d8fccfc83d0e7ba3652a11b74fdcbcaf4adaaf7fb9b617c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b2a6c6175d7558f31d8fccfc83d0e7ba3652a11b74fdcbcaf4adaaf7fb9b617c->leave($__internal_b2a6c6175d7558f31d8fccfc83d0e7ba3652a11b74fdcbcaf4adaaf7fb9b617c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_62001d75579c491b14915f6d29e7f4ed26e40fd81bdbb43b25b5636a96be1b48 = $this->env->getExtension("native_profiler");
        $__internal_62001d75579c491b14915f6d29e7f4ed26e40fd81bdbb43b25b5636a96be1b48->enter($__internal_62001d75579c491b14915f6d29e7f4ed26e40fd81bdbb43b25b5636a96be1b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_62001d75579c491b14915f6d29e7f4ed26e40fd81bdbb43b25b5636a96be1b48->leave($__internal_62001d75579c491b14915f6d29e7f4ed26e40fd81bdbb43b25b5636a96be1b48_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb23c9e1ed8564be4a522da9170fba6df8e825b8c17d2acd8287c8243503b74c = $this->env->getExtension("native_profiler");
        $__internal_bb23c9e1ed8564be4a522da9170fba6df8e825b8c17d2acd8287c8243503b74c->enter($__internal_bb23c9e1ed8564be4a522da9170fba6df8e825b8c17d2acd8287c8243503b74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_bb23c9e1ed8564be4a522da9170fba6df8e825b8c17d2acd8287c8243503b74c->leave($__internal_bb23c9e1ed8564be4a522da9170fba6df8e825b8c17d2acd8287c8243503b74c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
