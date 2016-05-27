<?php

/* gt/play.html.twig */
class __TwigTemplate_f45e775dced3f3e66be57569dc8a22435824771b8fb624d5cc4d10cc08191f91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "gt/play.html.twig", 1);
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
        $__internal_9eeb13877981e337c028e610d52c1b7673c1d77b88800adf57ee0d49858e6c03 = $this->env->getExtension("native_profiler");
        $__internal_9eeb13877981e337c028e610d52c1b7673c1d77b88800adf57ee0d49858e6c03->enter($__internal_9eeb13877981e337c028e610d52c1b7673c1d77b88800adf57ee0d49858e6c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gt/play.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9eeb13877981e337c028e610d52c1b7673c1d77b88800adf57ee0d49858e6c03->leave($__internal_9eeb13877981e337c028e610d52c1b7673c1d77b88800adf57ee0d49858e6c03_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8800294ebc93cbed1ba8cbc935711b0a41f07815de57742bd4a71372387eb8b8 = $this->env->getExtension("native_profiler");
        $__internal_8800294ebc93cbed1ba8cbc935711b0a41f07815de57742bd4a71372387eb8b8->enter($__internal_8800294ebc93cbed1ba8cbc935711b0a41f07815de57742bd4a71372387eb8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

";
        
        $__internal_8800294ebc93cbed1ba8cbc935711b0a41f07815de57742bd4a71372387eb8b8->leave($__internal_8800294ebc93cbed1ba8cbc935711b0a41f07815de57742bd4a71372387eb8b8_prof);

    }

    public function getTemplateName()
    {
        return "gt/play.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* {% endblock %}*/
