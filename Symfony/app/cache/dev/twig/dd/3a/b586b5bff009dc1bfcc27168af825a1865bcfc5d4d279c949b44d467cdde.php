<?php

/* firstBundle:Default:event.html.twig */
class __TwigTemplate_dd3ab586b5bff009dc1bfcc27168af825a1865bcfc5d4d279c949b44d467cdde extends Twig_Template
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
        echo "\t<title>Evenement</title>
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
        echo "<div class=\"bs-docs-section\">
\t<div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-4\">
            <h2 id=\"nav-tabs\">AsiLoL</h2>
            <div class=\"bs-component\">
              <ul class=\"nav nav-tabs\">
                <li class=\"active\"><a href=\"#quezako\" data-toggle=\"tab\">Quezako ?</a></li>
                <li><a href=\"#lot\" data-toggle=\"tab\">Les lots à gagner !</a></li>
                <li class=\"disabled\"><a>Inscription</a></li>
                <!--<li class=\"disabled\"><a href=\"#linscription\" data-toggle=\"tab\">Inscription</a></li>-->
              </ul>
              <div id=\"myTabContent\" class=\"tab-content\">
                <div class=\"tab-pane fade active in\" id=\"quezako\">
                  <p>L'AsiLoL est un tournoi universitaire de League Of Legends organisé dans la ville du Mans.</p>
                </div>
                <div class=\"tab-pane fade\" id=\"lot\">
                  <p>Cooming soon !</p>
                </div>
                <div class=\"tab-pane fade\" id=\"inscription\">
                  <p>http://goo.gl/forms/MR4aYMGdFv</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

";
    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        // line 48
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "firstBundle:Default:event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 48,  102 => 47,  69 => 16,  66 => 15,  60 => 12,  57 => 11,  51 => 8,  48 => 7,  43 => 4,  40 => 3,  11 => 1,);
    }
}
