<?php

/* firstBundle:Default:base.html.twig */
class __TwigTemplate_59abc88bafb938dd1deb804f198f48ef7e399399356515e4c81ba9694beb34fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'navbar' => array($this, 'block_navbar'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('navbar', $context, $blocks);
        // line 73
        echo "

";
        // line 75
        $this->displayBlock('footer', $context, $blocks);
        // line 82
        echo "


    <script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script>
    <script src=\"../bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>
    <script src=\"../assets/js/bootswatch.js\"></script>

</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "\t  <head>
\t    <meta charset=\"utf-8\">
\t    <title>Bootswatch: Cyborg</title>
\t    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

\t";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a9532be_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a9532be_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/a9532be_bootstrap_1.css");
            // line 14
            echo "\t    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" media=\"screen\">
\t";
        } else {
            // asset "a9532be"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a9532be") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/a9532be.css");
            echo "\t    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" media=\"screen\">
\t";
        }
        unset($context["asset_url"]);
        // line 16
        echo "\t    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t    <!--[if lt IE 9]>
\t      <script src=\"../bower_components/html5shiv/dist/html5shiv.js\"></script>
\t      <script src=\"../bower_components/respond/dest/respond.min.js\"></script>
\t    <![endif]-->
\t    <script>

\t     var _gaq = _gaq || [];
\t      _gaq.push(['_setAccount', 'UA-23019901-1']);
\t      _gaq.push(['_setDomainName', \"bootswatch.com\"]);
\t\t_gaq.push(['_setAllowLinker', true]);
\t      _gaq.push(['_trackPageview']);

\t     (function() {
\t       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
\t       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
\t       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
\t     })();

\t    </script>
\t  </head>
\t";
    }

    // line 39
    public function block_navbar($context, array $blocks = array())
    {
        // line 40
        echo "    <div class=\"container\">
      <div class=\"bs-docs-section clearfix\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <div class=\"page-header\">
              <h1 id=\"navbar\">Menu</h1>
            </div>
            <div class=\"bs-component\">
              <nav class=\"navbar navbar-inverse\">
                <div class=\"container-fluid\">
                  <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-2\">
                      <span class=\"sr-only\">Toggle navigation</span>
                      <span class=\"icon-bar\"></span>
                      <span class=\"icon-bar\"></span>
                      <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Brand</a>
                  </div>
                  <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-2\">
                    <ul class=\"nav navbar-nav\">
                      <li class=\"active\"><a href=\"#\">Link <span class=\"sr-only\">(current)</span></a></li>
                      <li><a href=\"page1\">Plop</a></li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
";
    }

    // line 75
    public function block_footer($context, array $blocks = array())
    {
        // line 76
        echo "\t<div class=\"container\">
\t      <footer>
\t\tfooter
\t      </footer>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "firstBundle:Default:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  148 => 76,  145 => 75,  109 => 40,  106 => 39,  81 => 16,  67 => 14,  63 => 11,  55 => 5,  52 => 4,  40 => 82,  38 => 75,  34 => 73,  32 => 39,  29 => 38,  27 => 4,  22 => 1,);
    }
}
