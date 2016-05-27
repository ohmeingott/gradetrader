<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e73bf87ceaefaf7a9d3c7ea5d525c137f24f306f0cf5f5a6e1f608053dbc7562 extends Twig_Template
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
        $__internal_2cf4da2ec4a6fa1d18ca52eab94ad37ddc3ca76be713c0cc04d477876881c83d = $this->env->getExtension("native_profiler");
        $__internal_2cf4da2ec4a6fa1d18ca52eab94ad37ddc3ca76be713c0cc04d477876881c83d->enter($__internal_2cf4da2ec4a6fa1d18ca52eab94ad37ddc3ca76be713c0cc04d477876881c83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cf4da2ec4a6fa1d18ca52eab94ad37ddc3ca76be713c0cc04d477876881c83d->leave($__internal_2cf4da2ec4a6fa1d18ca52eab94ad37ddc3ca76be713c0cc04d477876881c83d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c3245480eea3c3947a2185e6be661780b3b0d7a39c18c8ac09391a0af2fe8c50 = $this->env->getExtension("native_profiler");
        $__internal_c3245480eea3c3947a2185e6be661780b3b0d7a39c18c8ac09391a0af2fe8c50->enter($__internal_c3245480eea3c3947a2185e6be661780b3b0d7a39c18c8ac09391a0af2fe8c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c3245480eea3c3947a2185e6be661780b3b0d7a39c18c8ac09391a0af2fe8c50->leave($__internal_c3245480eea3c3947a2185e6be661780b3b0d7a39c18c8ac09391a0af2fe8c50_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ece920ca853d14ba87d8e62b7af123da3f0b478ccae871e3a6e8c40264b155f1 = $this->env->getExtension("native_profiler");
        $__internal_ece920ca853d14ba87d8e62b7af123da3f0b478ccae871e3a6e8c40264b155f1->enter($__internal_ece920ca853d14ba87d8e62b7af123da3f0b478ccae871e3a6e8c40264b155f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ece920ca853d14ba87d8e62b7af123da3f0b478ccae871e3a6e8c40264b155f1->leave($__internal_ece920ca853d14ba87d8e62b7af123da3f0b478ccae871e3a6e8c40264b155f1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3cbc4547ece9a271ac1029f2342439bdf6fa56d5c94339d00cfe5ef4a9f75dbd = $this->env->getExtension("native_profiler");
        $__internal_3cbc4547ece9a271ac1029f2342439bdf6fa56d5c94339d00cfe5ef4a9f75dbd->enter($__internal_3cbc4547ece9a271ac1029f2342439bdf6fa56d5c94339d00cfe5ef4a9f75dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3cbc4547ece9a271ac1029f2342439bdf6fa56d5c94339d00cfe5ef4a9f75dbd->leave($__internal_3cbc4547ece9a271ac1029f2342439bdf6fa56d5c94339d00cfe5ef4a9f75dbd_prof);

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
