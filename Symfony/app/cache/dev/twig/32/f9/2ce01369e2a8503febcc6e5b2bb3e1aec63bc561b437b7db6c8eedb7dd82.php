<?php

/* firstBundle:Default:page1.html.twig */
class __TwigTemplate_32f92ce01369e2a8503febcc6e5b2bb3e1aec63bc561b437b7db6c8eedb7dd82 extends Twig_Template
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_navbar($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "        <div class=\"container\">
        <h2>Contact</h1>
    \t<h3>Par mail</h2>
\t        <div class=\"bs-docs-section\">
\t            <form class=\"form-horizontal\">

\t                <div class=\"row\">
\t                    <div class=\"col-md-4\">
\t                      <div class=\"form-group\">

\t                        <label for=\"title\" class=\"required\">Votre email</label>
\t                        <input type=\"email\" class=\"form-control\" id=\"title\" placeholder=\"Votre email\" required>

\t                      </div>
\t                    </div>
\t                    <div class=\"col-md-1\">
\t                    </div>
\t                    <div class=\"col-md-7\">
\t                      <div class=\"form-group\">

\t                        <label for=\"subject\" class=\"required\">Sujet</label>
\t                        <input type=\"text\" class=\"form-control\" id=\"subject\" placeholder=\"Sujet du message\" required>

\t                      </div>
\t                    </div>
\t                </div>

\t                <div class=\"row\">
\t                    <div class=\"col-md-12\">
\t                        <div class=\"form-group\">

\t                          <label for=\"body\" class=\"required\">Message</label>
\t                          <textarea class=\"form-control\" rows=\"3\" id=\"body\" placeholder=\"Message\" required></textarea>

\t                        </div>
\t                    </div>
\t                </div>

\t                <div class=\"col-lg-4 col-lg-offset-2\">
                      <button type=\"reset\" class=\"btn btn-default\">Cancel</button>
                      <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                    </div>

\t            </form>
\t        </div>
        </div>
";
    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        // line 63
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "firstBundle:Default:page1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 63,  110 => 62,  60 => 14,  57 => 13,  51 => 8,  48 => 7,  42 => 4,  39 => 3,  11 => 1,);
    }
}
