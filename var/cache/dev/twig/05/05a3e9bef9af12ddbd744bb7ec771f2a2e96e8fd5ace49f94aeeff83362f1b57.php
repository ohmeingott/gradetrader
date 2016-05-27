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
        $__internal_79b016617382baa283a150027f86b03fa7bb98a8e14f2bccd51af3c4b001c146 = $this->env->getExtension("native_profiler");
        $__internal_79b016617382baa283a150027f86b03fa7bb98a8e14f2bccd51af3c4b001c146->enter($__internal_79b016617382baa283a150027f86b03fa7bb98a8e14f2bccd51af3c4b001c146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gt/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79b016617382baa283a150027f86b03fa7bb98a8e14f2bccd51af3c4b001c146->leave($__internal_79b016617382baa283a150027f86b03fa7bb98a8e14f2bccd51af3c4b001c146_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ee522da98403be5948d7237de7b51a43f168749a3e64ec054fe74a0fa558cd9 = $this->env->getExtension("native_profiler");
        $__internal_1ee522da98403be5948d7237de7b51a43f168749a3e64ec054fe74a0fa558cd9->enter($__internal_1ee522da98403be5948d7237de7b51a43f168749a3e64ec054fe74a0fa558cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <p><a class=\"btn btn-primary btn-lg\" href=\"/gt/play\" role=\"button\">Its me Mario!</a></p>
            <p><a class=\"btn btn-primary btn-lg\" href=\"/tester/2\" role=\"button\">Julian & Paul & Justin</a></p>
        </div>
        <div class=\"col-xs-6 col-md-4\"></div>
    </div>


";
        
        $__internal_1ee522da98403be5948d7237de7b51a43f168749a3e64ec054fe74a0fa558cd9->leave($__internal_1ee522da98403be5948d7237de7b51a43f168749a3e64ec054fe74a0fa558cd9_prof);

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
/*             <p><a class="btn btn-primary btn-lg" href="/gt/play" role="button">Its me Mario!</a></p>*/
/*             <p><a class="btn btn-primary btn-lg" href="/tester/2" role="button">Julian & Paul & Justin</a></p>*/
/*         </div>*/
/*         <div class="col-xs-6 col-md-4"></div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
