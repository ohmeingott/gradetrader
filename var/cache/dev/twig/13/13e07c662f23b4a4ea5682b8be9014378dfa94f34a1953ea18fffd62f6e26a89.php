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
        $__internal_cf105ed7cf6e5c0d125519947eb1c0456d85fa0814e6fbb2c2957302357573fa = $this->env->getExtension("native_profiler");
        $__internal_cf105ed7cf6e5c0d125519947eb1c0456d85fa0814e6fbb2c2957302357573fa->enter($__internal_cf105ed7cf6e5c0d125519947eb1c0456d85fa0814e6fbb2c2957302357573fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gt/play.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf105ed7cf6e5c0d125519947eb1c0456d85fa0814e6fbb2c2957302357573fa->leave($__internal_cf105ed7cf6e5c0d125519947eb1c0456d85fa0814e6fbb2c2957302357573fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7eaa06328b9e26e45719821b07e6184d6647a62d2a6b7b13aba8a4e830db28c1 = $this->env->getExtension("native_profiler");
        $__internal_7eaa06328b9e26e45719821b07e6184d6647a62d2a6b7b13aba8a4e830db28c1->enter($__internal_7eaa06328b9e26e45719821b07e6184d6647a62d2a6b7b13aba8a4e830db28c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

";
        
        $__internal_7eaa06328b9e26e45719821b07e6184d6647a62d2a6b7b13aba8a4e830db28c1->leave($__internal_7eaa06328b9e26e45719821b07e6184d6647a62d2a6b7b13aba8a4e830db28c1_prof);

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
