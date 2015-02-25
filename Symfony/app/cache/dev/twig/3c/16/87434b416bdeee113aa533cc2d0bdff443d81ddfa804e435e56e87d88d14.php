<?php

/* firstBundle:Default:base.html.twig */
class __TwigTemplate_3c1687434b416bdeee113aa533cc2d0bdff443d81ddfa804e435e56e87d88d14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        <title>
        \t";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "        </title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    </head>
    <body>
        <div id=\"page\">
            <div id=\"header\">
\t\t<ul id=\"menu\">
\t\t    <li>p1</li>
\t\t    <li>p2</a></li>
\t\t    <li>p3</li>                    
\t\t</ul>
            </div>

            <div id=\"content\">
                ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "            </div>
            <div id=\"footer\">
                <p>Tous droits réservés © 2015</p>
            </div>
        </div>
    </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "        \t\tFilmothèque
        \t";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "firstBundle:Default:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  65 => 21,  60 => 5,  57 => 4,  46 => 24,  44 => 21,  28 => 7,  26 => 4,  21 => 1,);
    }
}
