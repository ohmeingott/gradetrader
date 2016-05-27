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
        $__internal_2a1f1b3b56361807bd0bec9945a58611b13dce725da864c38fa4c82d4074aa29 = $this->env->getExtension("native_profiler");
        $__internal_2a1f1b3b56361807bd0bec9945a58611b13dce725da864c38fa4c82d4074aa29->enter($__internal_2a1f1b3b56361807bd0bec9945a58611b13dce725da864c38fa4c82d4074aa29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gt/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a1f1b3b56361807bd0bec9945a58611b13dce725da864c38fa4c82d4074aa29->leave($__internal_2a1f1b3b56361807bd0bec9945a58611b13dce725da864c38fa4c82d4074aa29_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_96c8aa0bf5bf103ede9ac8cbea6244e91858b367b5a6ea29302febb9ce386d31 = $this->env->getExtension("native_profiler");
        $__internal_96c8aa0bf5bf103ede9ac8cbea6244e91858b367b5a6ea29302febb9ce386d31->enter($__internal_96c8aa0bf5bf103ede9ac8cbea6244e91858b367b5a6ea29302febb9ce386d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <p><a class=\"btn btn-primary btn-lg\" href=\"/tester/2\" role=\"button\">Julian & Paul & Justin</a></p>
        </div>
        <div class=\"col-xs-6 col-md-4\"></div>
    </div>


";
        
        $__internal_96c8aa0bf5bf103ede9ac8cbea6244e91858b367b5a6ea29302febb9ce386d31->leave($__internal_96c8aa0bf5bf103ede9ac8cbea6244e91858b367b5a6ea29302febb9ce386d31_prof);

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
/*             <p><a class="btn btn-primary btn-lg" href="/tester/2" role="button">Julian & Paul & Justin</a></p>*/
/*         </div>*/
/*         <div class="col-xs-6 col-md-4"></div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
