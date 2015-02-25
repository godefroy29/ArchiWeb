<?php

/* firstBundle:Default:rules.html.twig */
class __TwigTemplate_f96aec42bff3cad917bcdc8b39fedc9134d16b17db811e54d358cc0e47b81013 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("firstBundle:Default:base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "firstBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\t<title>Réglement</title>
";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_navbar($context, array $blocks = array())
    {
        // line 12
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-lg-4\">
\t\t\t<h2 id=\"pagination\">Réglement</h2>
\t\t\t<div id=\"myTabContent\" class=\"tab-content\">
                <div class=\"tab-pane fade active in\" id=\"1\">
                  <p>L'AsiLoL est un tournoi universitaire de League Of Legends organisé dans la ville du Mans.</p>
                </div>
                <div class=\"tab-pane fade\" id=\"2\">
                  <p>Cooming soon !</p>
                </div>
                <div class=\"tab-pane fade\" id=\"3\">
                  <p>http://goo.gl/forms/MR4aYMGdFv</p>
                </div>
            </div>
            <div class=\"bs-component\">
\t            <ul class=\"pagination\">
\t\t            <li><a href=\"#1\" data-toggle=\"tab\">1</a></li>
\t\t            <li><a href=\"#2\" data-toggle=\"tab\">2</a></li>
\t\t            <li><a href=\"#3\" data-toggle=\"tab\">3</a></li>
\t            </ul>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        // line 44
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "firstBundle:Default:rules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 44,  98 => 43,  69 => 16,  66 => 15,  60 => 12,  57 => 11,  51 => 8,  48 => 7,  43 => 4,  40 => 3,  11 => 1,);
    }
}
