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
          <h1 id=\"forms\">Inscription League of Legends</h1>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-6\">
        <div class=\"well bs-component\">
              
          <form class=\"form-horizontal\">
            <fieldset>
              <legend>Les données saisies dans ce formulaire ont pour seul but de faciliter l'organisation de l’événement.</legend>
              
              <div class=\"form-group\">
                <label for=\"inputEmail\" class=\"col-lg-2 control-label\">Email</label>
                <div class=\"col-lg-10\">
                  <input type=\"text\" class=\"form-control\" id=\"inputEmail\" placeholder=\"Email\">
                  <span class=\"help-block\">Pour vous contacter en cas de problème et/ou vous fournir des informations supplémentaires sur le déroulement de l'événement.</span>
                </div>
              </div>

              <div class=\"form-group\">
                <label for=\"inputPassword\" class=\"col-lg-2 control-label\">Password</label>
                <div class=\"col-lg-10\">
                  <input type=\"password\" class=\"form-control\" id=\"inputPassword\" placeholder=\"Password\">
                </div>
                <label for=\"inputPassword\" class=\"col-lg-2 control-label\">Repetez votre password</label>
                <div class=\"col-lg-10\">
                  <input type=\"password\" class=\"form-control\" id=\"repeatPassword\" placeholder=\"Password\">
                </div>
              </div>

              <div class=\"form-group\">
                <label for=\"inputPassword\" class=\"col-lg-2 control-label\">Nom</label>
                <div class=\"col-lg-10\">
                  <input type=\"text\" class=\"form-control\" id=\"inputNom\" placeholder=\"Nom\">
                </div>
              </div>

              <div class=\"form-group\">
                <label for=\"inputPassword\" class=\"col-lg-2 control-label\">Prenom</label>
                <div class=\"col-lg-10\">
                  <input type=\"text\" class=\"form-control\" id=\"inputPrenom\" placeholder=\"Prenom\">
                </div>
              </div>
<!--
              <div class=\"form-group\">
                <label for=\"textArea\" class=\"col-lg-2 control-label\">Question ou commentaire ?</label>
                <div class=\"col-lg-10\">
                  <textarea class=\"form-control\" rows=\"3\" id=\"textArea\"></textarea>
                  <span class=\"help-block\">Réponse par mail</span>
                </div>
              </div>
-->
              <div class=\"form-group\">
                <label for=\"inputPseudo\" class=\"col-lg-2 control-label\">Nom de compte d'invocateur avec lequel vous pensez jouer</label>
                <div class=\"col-lg-10\">
                  <input type=\"text\" class=\"form-control\" id=\"inputPseudo\" placeholder=\"Pseudo\">
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-lg-2 control-label\">Avez-vous une équipe ?</label>
                <div class=\"col-lg-10\">
                  <div class=\"radio\">
                    <label>
                      <input type=\"radio\" name=\"optionsEquipe\" id=\"optionsEquipe1\" value=\"oui\" checked=\"\">
                      Oui !
                    </label>
                  </div>
                  <div class=\"radio\">
                    <label>
                      <input type=\"radio\" name=\"optionsEquipe\" id=\"optionsEquipe2\" value=\"non\">
                      Non
                    </label>
                  </div>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-lg-2 control-label\">Etes-vous intéressé par une pizza à des tarifs préférentiels ? (pas d’engagement)</label>
                <div class=\"col-lg-10\">
                  <div class=\"radio\">
                    <label>
                      <input type=\"radio\" name=\"optionsPizza\" id=\"optionsPizza1\" value=\"oui\" checked=\"\">
                      Oui !
                    </label>
                  </div>
                  <div class=\"radio\">
                    <label>
                      <input type=\"radio\" name=\"optionsPizza\" id=\"optionsPizza2\" value=\"non\">
                      Non
                    </label>
                  </div>
                  <span class=\"help-block\">Titre indicatif (5€ ou 6€). Permet de faire une estimation de la demande pour démarcher des fournisseurs. Ces dernières seront commandées et livrées par nos soin aux joueurs le jour de l’événement.</span>
                </div>
              </div>

              <div class=\"form-group\">
                <div class=\"col-lg-10 col-lg-offset-2\">
                  <button type=\"reset\" class=\"btn btn-default\">Reset</button>
                  <button type=\"submit\" name=\"inscription\" class=\"btn btn-primary\">S'inscrire</button>
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

    // line 136
    public function block_footer($context, array $blocks = array())
    {
        // line 137
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
        return array (  194 => 137,  191 => 136,  69 => 16,  66 => 15,  60 => 12,  57 => 11,  51 => 8,  48 => 7,  43 => 4,  40 => 3,  11 => 1,);
    }
}
