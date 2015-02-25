<?php

/* firstBundle:Default:base.html.twig */
class __TwigTemplate_3c1687434b416bdeee113aa533cc2d0bdff443d81ddfa804e435e56e87d88d14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('navbar', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('footer', $context, $blocks);
        // line 90
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
      ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "\t    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

\t";
        // line 13
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
        echo "  ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2c43aec_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2c43aec_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/2c43aec_bootstrap_1.js");
            // line 17
            echo "      <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" async defer />
  ";
        } else {
            // asset "2c43aec"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2c43aec") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/2c43aec.js");
            echo "      <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" async defer />
  ";
        }
        unset($context["asset_url"]);
        // line 19
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
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "\t    <title>Projet L3 SPI - 2014/2015 - Université du Maine</title>
      ";
    }

    // line 42
    public function block_navbar($context, array $blocks = array())
    {
        // line 43
        echo "    <div class=\"container\">
      <div class=\"bs-docs-section clearfix\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <div class=\"page-header\">
              <h1 id=\"navbar\">Projet L3 SPI</h1>
            </div>
            <div class=\"bs-component\">
              <nav class=\"navbar navbar-inverse\">
                <div class=\"container-fluid\">
                  <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-2\">
                      <span class=\"sr-only\"></span>
                      <span class=\"icon-bar\"></span>
                      <span class=\"icon-bar\"></span>
                      <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"/\">Accueil</a>
                  </div>
                  <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-2\">
                    <ul class=\"nav navbar-nav\">
                      <li><a href=\"event\">Evenement</a></li>
                      <li><a href=\"contact\">Contact</a></li>
                      <li><a href=\"infos\">Infos</a></li>
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

    // line 78
    public function block_body($context, array $blocks = array())
    {
    }

    // line 81
    public function block_footer($context, array $blocks = array())
    {
        // line 82
        echo "<hr>
\t<div class=\"container\" id=\"footer\">
\t      <footer>
        
\t\t      &copy; Godefroy Poirier & Kévin Demaret
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
        return array (  190 => 82,  187 => 81,  182 => 78,  145 => 43,  142 => 42,  137 => 8,  134 => 7,  109 => 19,  95 => 17,  90 => 16,  76 => 14,  72 => 13,  67 => 10,  65 => 7,  61 => 5,  58 => 4,  46 => 90,  44 => 81,  41 => 80,  39 => 78,  36 => 77,  34 => 42,  31 => 41,  29 => 4,  24 => 1,);
    }
}
