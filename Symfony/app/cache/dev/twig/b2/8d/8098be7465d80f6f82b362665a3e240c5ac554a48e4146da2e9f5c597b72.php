<?php

/* firstBundle:Default:contact.html.twig */
class __TwigTemplate_b28d8098be7465d80f6f82b362665a3e240c5ac554a48e4146da2e9f5c597b72 extends Twig_Template
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
        echo "\t<title>Contact</title>
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

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "    <div class=\"container\">
        <h2>Contact</h2>

    \t<h3>Par mail</h3>
        <div class=\"bs-docs-section\">
            <form class=\"form-horizontal\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
\t                    <div class=\"form-group\">
\t                    \t<label for=\"title\" class=\"required\">Votre email *</label>
\t                        <input type=\"email\" class=\"form-control\" id=\"title\" placeholder=\"Votre email\" required>
\t                    </div>
                    </div>
                    <div class=\"col-md-1\">
                    </div>
                    <div class=\"col-md-7\">
                      \t<div class=\"form-group\">
\t                        <label for=\"subject\" class=\"required\">Sujet *</label>
\t                        <input type=\"text\" class=\"form-control\" id=\"subject\" placeholder=\"Sujet du message\" required>
                      \t</div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"form-group\">
                          \t<label for=\"body\" class=\"required\">Message *</label>
                          \t<textarea class=\"form-control\" rows=\"3\" id=\"body\" placeholder=\"Message\" required></textarea>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-10 col-lg-offset-2\">
                    <button type=\"reset\" class=\"btn btn-default\">Cancel</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                </div>
            </form>
        </div>
        </br>

        <hr style=\"border: 1px dashed;\">
    \t<h3>Par courrier</h2>
        <div class=\"bs-docs-section\">
            <h4>Adresse 72000 le Mans - association Asimov</h4>
        </div>

        <hr style=\"border: 1px dashed;\">
        <h3>Au local d'ASIMOV</h3>
        <div class=\"bs-docs-section\">
        \t<h4>Salle Association</h4>
        \t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2668.7630777031422!2d0.16095100000000997!3d48.01828699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e2861f2aac5551%3A0x9c9c1ad436c888d7!2sD%C3%A9partement+Informatique!5e0!3m2!1sfr!2sfr!4v1424986811675\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\">
        \t</iframe>
    \t</div>
    </div>
";
    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        // line 73
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "firstBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 73,  125 => 72,  69 => 18,  66 => 17,  60 => 12,  57 => 11,  51 => 8,  48 => 7,  43 => 4,  40 => 3,  11 => 1,);
    }
}
