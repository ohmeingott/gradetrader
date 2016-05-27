<?php

/* base.html.twig */
class __TwigTemplate_869c7bfa4dce5ba33a588100a6a79bfcc7ab0091e2a12b63f07f8145bdcf26ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54ad09f735a35cbc56682d40f4aa35bbbd95c13a48ffe0b292cc430e31891bf4 = $this->env->getExtension("native_profiler");
        $__internal_54ad09f735a35cbc56682d40f4aa35bbbd95c13a48ffe0b292cc430e31891bf4->enter($__internal_54ad09f735a35cbc56682d40f4aa35bbbd95c13a48ffe0b292cc430e31891bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"css/freelancer.css\" rel=\"stylesheet\">
    <link href=\"font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"details.css\" type=\"text/css\" />
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    ";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "


</head>

<body>

    <div class=\"navbar-wrapper\">
        <nav class=\"navbar navbar-inverse navbar-static-top\">
            <div class=\"container\">
                <form class=\"form-inline\">
                    <div class=\"form-group\">
                        <label class=\"sr-only\" for=\"exampleInputEmail3\">Email address</label>
                        <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail3\" placeholder=\"Email\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"sr-only\" for=\"exampleInputPassword3\">Password</label>
                        <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword3\" placeholder=\"Password\">
                    </div>
                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\"> Remember me
                        </label>
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\">Sign in</button>
                </form>
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                            data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"/\"><span class=\"glyphicon glyphicon-education\" aria-hidden=\"true\">
                        </span> GradeTrader</a>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <a class=\"navbar-brand\" href=\"/gt/play\"><span class=\"glyphicon glyphicon-knight\" aria-hidden=\"true\"></span>Spielen</a>
                        <a class=\"navbar-brand\" href=\"/gt/login/2\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>Profil</a>
                        <a class=\"navbar-brand\" href=\"/\"><span class=\"glyphicon glyphicon-indent-left\" aria-hidden=\"true\"></span>Statistik</a>
                </div>


            </div>

        </nav>

    </div>
    <header>

            ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "



    </header>

    </div>



    </div>
";
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "</body>
</html>
";
        
        $__internal_54ad09f735a35cbc56682d40f4aa35bbbd95c13a48ffe0b292cc430e31891bf4->leave($__internal_54ad09f735a35cbc56682d40f4aa35bbbd95c13a48ffe0b292cc430e31891bf4_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8514d038dc8bc96e2f1402d0ff412e002b21d4edaa655952128efc2000c4bb5 = $this->env->getExtension("native_profiler");
        $__internal_a8514d038dc8bc96e2f1402d0ff412e002b21d4edaa655952128efc2000c4bb5->enter($__internal_a8514d038dc8bc96e2f1402d0ff412e002b21d4edaa655952128efc2000c4bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GradeTrader!";
        
        $__internal_a8514d038dc8bc96e2f1402d0ff412e002b21d4edaa655952128efc2000c4bb5->leave($__internal_a8514d038dc8bc96e2f1402d0ff412e002b21d4edaa655952128efc2000c4bb5_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d76e0cccf9c09d28f9e92409c06909f1ce1e5a1019df3afb4e2e603e61438347 = $this->env->getExtension("native_profiler");
        $__internal_d76e0cccf9c09d28f9e92409c06909f1ce1e5a1019df3afb4e2e603e61438347->enter($__internal_d76e0cccf9c09d28f9e92409c06909f1ce1e5a1019df3afb4e2e603e61438347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        
        $__internal_d76e0cccf9c09d28f9e92409c06909f1ce1e5a1019df3afb4e2e603e61438347->leave($__internal_d76e0cccf9c09d28f9e92409c06909f1ce1e5a1019df3afb4e2e603e61438347_prof);

    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        $__internal_064d19532dfef8d69cb0d4fc6856fca5a9b49302b16a008e534f087c602c0d00 = $this->env->getExtension("native_profiler");
        $__internal_064d19532dfef8d69cb0d4fc6856fca5a9b49302b16a008e534f087c602c0d00->enter($__internal_064d19532dfef8d69cb0d4fc6856fca5a9b49302b16a008e534f087c602c0d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_064d19532dfef8d69cb0d4fc6856fca5a9b49302b16a008e534f087c602c0d00->leave($__internal_064d19532dfef8d69cb0d4fc6856fca5a9b49302b16a008e534f087c602c0d00_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_22877df5aaa17bc974c3ad01047fa69901c620ec7fe7cc41bdb0cdb49378fb14 = $this->env->getExtension("native_profiler");
        $__internal_22877df5aaa17bc974c3ad01047fa69901c620ec7fe7cc41bdb0cdb49378fb14->enter($__internal_22877df5aaa17bc974c3ad01047fa69901c620ec7fe7cc41bdb0cdb49378fb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_22877df5aaa17bc974c3ad01047fa69901c620ec7fe7cc41bdb0cdb49378fb14->leave($__internal_22877df5aaa17bc974c3ad01047fa69901c620ec7fe7cc41bdb0cdb49378fb14_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 88,  162 => 76,  150 => 23,  138 => 13,  129 => 89,  127 => 88,  114 => 77,  112 => 76,  58 => 24,  56 => 23,  52 => 22,  40 => 13,  26 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <link rel="icon" href="../../favicon.ico">*/
/* */
/*     <title>{% block title %}GradeTrader!{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">*/
/*     <link href="css/freelancer.css" rel="stylesheet">*/
/*     <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">*/
/*     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">*/
/*     <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">*/
/*     <link rel="stylesheet" href="details.css" type="text/css" />*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     {% block stylesheets %} {% endblock %}*/
/* */
/* */
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/*     <div class="navbar-wrapper">*/
/*         <nav class="navbar navbar-inverse navbar-static-top">*/
/*             <div class="container">*/
/*                 <form class="form-inline">*/
/*                     <div class="form-group">*/
/*                         <label class="sr-only" for="exampleInputEmail3">Email address</label>*/
/*                         <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="sr-only" for="exampleInputPassword3">Password</label>*/
/*                         <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">*/
/*                     </div>*/
/*                     <div class="checkbox">*/
/*                         <label>*/
/*                             <input type="checkbox"> Remember me*/
/*                         </label>*/
/*                     </div>*/
/*                     <button type="submit" class="btn btn-default">Sign in</button>*/
/*                 </form>*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"*/
/*                             data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-education" aria-hidden="true">*/
/*                         </span> GradeTrader</a>*/
/*                 </div>*/
/*                 <div id="navbar" class="navbar-collapse collapse">*/
/*                     <ul class="nav navbar-nav">*/
/*                         <a class="navbar-brand" href="/gt/play"><span class="glyphicon glyphicon-knight" aria-hidden="true"></span>Spielen</a>*/
/*                         <a class="navbar-brand" href="/gt/login/2"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Profil</a>*/
/*                         <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-indent-left" aria-hidden="true"></span>Statistik</a>*/
/*                 </div>*/
/* */
/* */
/*             </div>*/
/* */
/*         </nav>*/
/* */
/*     </div>*/
/*     <header>*/
/* */
/*             {% block body %}{% endblock %}*/
/* */
/* */
/* */
/* */
/*     </header>*/
/* */
/*     </div>*/
/* */
/* */
/* */
/*     </div>*/
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
