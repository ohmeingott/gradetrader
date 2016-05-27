<?php

/* gt/index.html.twig */
class __TwigTemplate_ac2491e9eb9c0b21775a18dbac87c3f70df9cbd8afcd6cb87762c59963376ace extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "gt/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8992b8a0a834ec4828596f43c02b6097f6fed1132aa7638b75b9f0cb7a2a9b32 = $this->env->getExtension("native_profiler");
        $__internal_8992b8a0a834ec4828596f43c02b6097f6fed1132aa7638b75b9f0cb7a2a9b32->enter($__internal_8992b8a0a834ec4828596f43c02b6097f6fed1132aa7638b75b9f0cb7a2a9b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gt/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8992b8a0a834ec4828596f43c02b6097f6fed1132aa7638b75b9f0cb7a2a9b32->leave($__internal_8992b8a0a834ec4828596f43c02b6097f6fed1132aa7638b75b9f0cb7a2a9b32_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ae818cae483cf4ee03981fc9e4568ce85715431a093642cac25c43fd4057958 = $this->env->getExtension("native_profiler");
        $__internal_1ae818cae483cf4ee03981fc9e4568ce85715431a093642cac25c43fd4057958->enter($__internal_1ae818cae483cf4ee03981fc9e4568ce85715431a093642cac25c43fd4057958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

    <div class=\"row\">
        <div class=\"col-xs-12 col-md-8\"></div>
        <div class=\"col-xs-6 col-md-4\"></div>
    </div>

    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
    <div class=\"row\">
        <div class=\"col-xs-6 col-md-4\"></div>
        <div class=\"col-xs-6 col-md-4\">
            <h1>Welcome to GradeTrader</h1>
            <p>We hope to make your stay as much educational and fun as possible</p>
            <p><a class=\"btn btn-primary btn-lg\" href=\"/gt/play\" role=\"button\">Start GrateTrader</a></p>
            <p><a class=\"btn btn-primary btn-lg\" href=\"/tester\" role=\"button\">Test GradeTrader</a></p>
        </div>
        <div class=\"col-xs-6 col-md-4\"></div>
    </div>


";
        
        $__internal_1ae818cae483cf4ee03981fc9e4568ce85715431a093642cac25c43fd4057958->leave($__internal_1ae818cae483cf4ee03981fc9e4568ce85715431a093642cac25c43fd4057958_prof);

    }

    public function getTemplateName()
    {
        return "gt/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* */
/* */
/*     <div class="row">*/
/*         <div class="col-xs-12 col-md-8"></div>*/
/*         <div class="col-xs-6 col-md-4"></div>*/
/*     </div>*/
/* */
/*     <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->*/
/*     <div class="row">*/
/*         <div class="col-xs-6 col-md-4"></div>*/
/*         <div class="col-xs-6 col-md-4">*/
/*             <h1>Welcome to GradeTrader</h1>*/
/*             <p>We hope to make your stay as much educational and fun as possible</p>*/
/*             <p><a class="btn btn-primary btn-lg" href="/gt/play" role="button">Start GrateTrader</a></p>*/
/*             <p><a class="btn btn-primary btn-lg" href="/tester" role="button">Test GradeTrader</a></p>*/
/*         </div>*/
/*         <div class="col-xs-6 col-md-4"></div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
