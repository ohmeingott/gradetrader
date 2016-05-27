<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b4080f3fc6c43345a9293a9f7ff88eaf7c0f68dcae7bf5f30eacaeb38fd569ec extends Twig_Template
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
        $__internal_17c67fe71f00d2e4ddbfb5c565385bea7cdfbc6f337ff5da01056d6ca79167a9 = $this->env->getExtension("native_profiler");
        $__internal_17c67fe71f00d2e4ddbfb5c565385bea7cdfbc6f337ff5da01056d6ca79167a9->enter($__internal_17c67fe71f00d2e4ddbfb5c565385bea7cdfbc6f337ff5da01056d6ca79167a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17c67fe71f00d2e4ddbfb5c565385bea7cdfbc6f337ff5da01056d6ca79167a9->leave($__internal_17c67fe71f00d2e4ddbfb5c565385bea7cdfbc6f337ff5da01056d6ca79167a9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_04d42809f1f8cec0330208f71c0e147bc6655edff2c31c56e9596e4564e42165 = $this->env->getExtension("native_profiler");
        $__internal_04d42809f1f8cec0330208f71c0e147bc6655edff2c31c56e9596e4564e42165->enter($__internal_04d42809f1f8cec0330208f71c0e147bc6655edff2c31c56e9596e4564e42165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_04d42809f1f8cec0330208f71c0e147bc6655edff2c31c56e9596e4564e42165->leave($__internal_04d42809f1f8cec0330208f71c0e147bc6655edff2c31c56e9596e4564e42165_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d33416d7b31ad6c89076dc4812cfc1ff67aa2d409bdd35321badbf5aeb6f3c9b = $this->env->getExtension("native_profiler");
        $__internal_d33416d7b31ad6c89076dc4812cfc1ff67aa2d409bdd35321badbf5aeb6f3c9b->enter($__internal_d33416d7b31ad6c89076dc4812cfc1ff67aa2d409bdd35321badbf5aeb6f3c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d33416d7b31ad6c89076dc4812cfc1ff67aa2d409bdd35321badbf5aeb6f3c9b->leave($__internal_d33416d7b31ad6c89076dc4812cfc1ff67aa2d409bdd35321badbf5aeb6f3c9b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbcd0c1e5549892a01962f7b164207a26692a71f821db15ba7baf6bc72c4129c = $this->env->getExtension("native_profiler");
        $__internal_dbcd0c1e5549892a01962f7b164207a26692a71f821db15ba7baf6bc72c4129c->enter($__internal_dbcd0c1e5549892a01962f7b164207a26692a71f821db15ba7baf6bc72c4129c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_dbcd0c1e5549892a01962f7b164207a26692a71f821db15ba7baf6bc72c4129c->leave($__internal_dbcd0c1e5549892a01962f7b164207a26692a71f821db15ba7baf6bc72c4129c_prof);

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
