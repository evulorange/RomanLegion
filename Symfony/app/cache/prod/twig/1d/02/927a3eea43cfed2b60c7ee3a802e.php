<?php

/* RomanLegionGameBundle::layout.html.twig */
class __TwigTemplate_1d02927a3eea43cfed2b60c7ee3a802e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'extra_styles' => array($this, 'block_extra_styles'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'extra_scripts' => array($this, 'block_extra_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
    <!-- Le styles -->
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/css/custom-theme/jquery-ui-1.10.0.custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!--[if IE 7]>
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/assets/css/font-awesome-ie7.min.css"), "html", null, true);
        echo "\">
    <![endif]-->
    <!--[if lt IE 9]>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/css/custom-theme/jquery.ui.1.10.0.ie.css"), "html", null, true);
        echo "\"/>
    <![endif]-->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/assets/css/docs.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/assets/js/google-code-prettify/prettify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/assets/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/assets/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/assets/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/assets/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/assets/ico/favicon.png"), "html", null, true);
        echo "\">
    
    ";
        // line 31
        $this->displayBlock('extra_styles', $context, $blocks);
        // line 32
        echo "</head>
<body data-spy=\"scroll\" data-target=\".bs-docs-sidebar\" data-twttr-rendered=\"true\">

";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 75
        $this->displayBlock('footer', $context, $blocks);
        // line 102
        echo "
</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Roman Legion";
    }

    // line 31
    public function block_extra_styles($context, array $blocks = array())
    {
        echo "";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "    <div class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"brand\" href=\"#\">The Roman Legion</a>
                <div class=\"nav-collapse collapse\">
                    <ul class=\"nav\">
                        <li class=\"active\">
                            <a href=\"#\">Home</a>
                        </li>
                        <li><a href=\"#\">LOGIN</a></li>
                        <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("_census_list");
        echo "\">Census</a></li>
                        <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("_senatus_list");
        echo "\">Senatus</a></li>
                        <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("_garrison_mapUnits");
        echo "\">Garrison</a></li>
                        <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("_market_available");
        echo "\">Market</a></li>
                        <li><a href=\"#\">Religion</a></li>
                        <li><a href=\"#\">Treasury</a></li>
                        <li><a href=\"#\">Resources</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 64
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "
";
    }

    // line 64
    public function block_content($context, array $blocks = array())
    {
        // line 65
        echo "    <!-- Subhead
    ================================================== -->
    <header class=\"jumbotron subhead\" id=\"overview\">
        <div class=\"container\">
            <h1>The Roman Online Gaming Society</h1>
        </div>
    </header>
    ";
    }

    // line 75
    public function block_footer($context, array $blocks = array())
    {
        // line 76
        echo "    <!-- Footer
    ================================================== -->
    <footer class=\"footer\">
        <div class=\"container\">
            <p>
                The Roman Legion &copy; The Roman Online Gaming Society, 2013.
            </p>
            <ul class=\"footer-links\">
                <li><a href=\"#\">FAQ</a></li>
                <li class=\"muted\">&middot;</li>
                <li><a href=\"#\">Contact</a></li>
            </ul>
        </div>
    </footer>
    
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/assets/js/jquery-1.9.0.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/assets/js/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/assets/js/google-code-prettify/prettify.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/assets/js/docs.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/third-party/jqGrid/js/i18n/grid.locale-en.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/third-party/jqGrid/js/jquery.jqGrid.min.js"), "html", null, true);
        echo "\"></script> 
    
    ";
        // line 100
        $this->displayBlock('extra_scripts', $context, $blocks);
    }

    public function block_extra_scripts($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "RomanLegionGameBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 100,  236 => 98,  232 => 97,  228 => 96,  224 => 95,  220 => 94,  216 => 93,  212 => 92,  194 => 76,  191 => 75,  180 => 65,  177 => 64,  172 => 73,  170 => 64,  157 => 54,  153 => 53,  149 => 52,  145 => 51,  128 => 36,  125 => 35,  119 => 31,  113 => 4,  107 => 102,  105 => 75,  103 => 35,  98 => 32,  96 => 31,  91 => 29,  87 => 28,  83 => 27,  79 => 26,  75 => 25,  64 => 17,  60 => 16,  55 => 14,  49 => 11,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,  38 => 6,  35 => 5,  29 => 3,);
    }
}
