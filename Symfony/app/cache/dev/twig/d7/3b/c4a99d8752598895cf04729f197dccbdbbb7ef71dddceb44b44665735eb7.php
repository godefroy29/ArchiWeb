<?php

/* firstBundle:Default:register.html.twig */
class __TwigTemplate_d73bc4a99d8752598895cf04729f197dccbdbbb7ef71dddceb44b44665735eb7 extends Twig_Template
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
        echo "  <title>Inscription</title>
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
  <div class=\"bs-docs-section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-header\">
          <h1 id=\"forms\">Inscription tournoi League of Legends</h1>
        </div>
      </div>
    </div>

        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"well bs-component\">
              
              <form class=\"form-horizontal\">
                <fieldset>

                <div class=\"form-group\">
                  <label for=\"inputPseudo\" class=\"col-lg-2 control-label\">Pseudo (identique au pseudo de votre compte League of Legends)</label>
                  <div class=\"col-lg-10\">
                    <input type=\"text\" class=\"form-control\" id=\"inputPseudo\" placeholder=\"Pseudo\">
                  </div>
                </div>
                  
                <div class=\"form-group\">
                  <label for=\"inputPassword\" class=\"col-lg-2 control-label\">Prenom</label>
                  <div class=\"col-lg-10\">
                    <input type=\"text\" class=\"form-control\" id=\"inputPrenom\" placeholder=\"Prenom\">
                  </div>
                </div>

                <div class=\"form-group\">
                  <label for=\"inputPassword\" class=\"col-lg-2 control-label\">Nom</label>
                  <div class=\"col-lg-10\">
                    <input type=\"text\" class=\"form-control\" id=\"inputNom\" placeholder=\"Nom\">
                  </div>
                </div>

                <div class=\"form-group\">
                  <label for=\"inputPassword\" class=\"col-lg-2 control-label\">Password</label>
                  <div class=\"col-lg-10\">
                    <input type=\"password\" class=\"form-control\" id=\"inputPassword\" placeholder=\"Password\">
                  </div>
                </div>

                <div class=\"form-group\">
                  <label for=\"textArea\" class=\"col-lg-2 control-label\">Textarea</label>
                  <div class=\"col-lg-10\">
                    <textarea class=\"form-control\" rows=\"3\" id=\"textArea\"></textarea>
                  <span class=\"help-block\">Commentaire relatif à votre inscription</span>
                </div>
              </div>

            </fieldset>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    // line 79
    public function block_footer($context, array $blocks = array())
    {
        // line 80
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "firstBundle:Default:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 80,  134 => 79,  69 => 16,  66 => 15,  60 => 12,  57 => 11,  51 => 8,  48 => 7,  43 => 4,  40 => 3,  11 => 1,);
    }
}
