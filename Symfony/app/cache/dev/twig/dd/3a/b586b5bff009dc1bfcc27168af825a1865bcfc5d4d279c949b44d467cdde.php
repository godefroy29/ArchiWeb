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
                <li><a href=\"#inscription\" data-toggle=\"tab\">Inscription</a></li>
              </ul>
              <div id=\"myTabContent\" class=\"tab-content\">
                <div class=\"tab-pane fade active in\" id=\"quezako\">
                  <h3>Générales</h3>

                    <h4>Qu'est-ce qu'une LAN-Party ?</h4>
                      <p>Une LAN-Party est le lieu de réunion de tous les joueurs de jeux vidéos. Tous ces joueurs viennent se mesurer les uns aux autres dans le but de prouver qui est le meilleur tout en gardant un esprit sportif et convivial.</p>
                      <p>Contrairement aux compétitions en ligne, le réseau permet aux coéquipiers de se rencontrer en chair et en os pour préparer les matchs au mieux ainsi que de rencontrer leurs adversaires.</p>
                      <p>L'organisation est tournée autour du joueur pour lui assurer le meilleur événement et les meilleurs performances possibles. Nous parlons ici de restauration, support technique, administrateurs présents pour discuter du problème qu'un joueur pourrait rencontrer pendant l'événement.</p>

                    <h4>Les joueurs en présence</h4>
                      <p>L'AsiLoL rassemble des joueurs presque essentiellement étudiants entre 16 et 30 ans. Ils sont passionnés d'informatique et de nouvelles technologies et surtout passionnés par les jeux vidéos!</p>
                      <p>Les jeux principaux proposés pendant le tournoi sont League of Legends, Starcraft II et Counter-Strike Global Offensive. Ces jeux étant les pilliers de l'eSport aujourd'hui. D'autres jeux sont bien évidements proposés pour jouer dans le fun et la convivialité et se remémorer les émotions d'autrefois sur des jeux mythiques. Des consoles sont aussi à disposition des participants pour jouer aux jeux next-gen comme oldschool.</p>
                      <p>Les tournois sont gérés uniquement par l'équipe d'administrateurs présents toujours pour permettre aux joueurs de garder un focus sur leur jeu et bien sûr de respecter l'équité entre les participants.</p>
                      <p>Nous rediffusons également le tournoi sur internet pour permettre à d'autres joueurs de profiter du fun de l'événement et de l'intensité des matchs depuis leur chez-soi.</p>
                      <p>La LAN, cette année, devrait rassembler entre 80 et 100 joueurs.</p>

                  <h3>Horaires</h3>
                    <p>L'AsiLoL se déroulera du Vendredi 6 Mars à 19H00 jusqu'au Samedi 7 Mars à 17H00</p>

                  <h3>Repas et Boissons</h3>
                    <p>L'association tiendra un stand de boissons non-alcoolisées, avec le café offert.</p>

                  <h3>Tarifs</h3>
                    <p>Adhérent ASIMOV : 5 euros</br>
                    Non adhérent : 8 euros</br>
                    Visiteurs : gratuit</p>
                 
                  <h3>Ce que vous devez apporter</h3>
                    <p>Un câble réseau droit RJ45 (entre 2 et 10m)</br>
                    Un casque audio (enceintes interdites)</br>
                    Une multiprise avec fil (2m conseillé)</br>
                    Votre PC avec système d'exploitation, jeux, antivirus et drivers à jour</br>
                    Votre écran, clavier et souris</br>
                    Tout autre périphérique que vous utilisez habituellement</br>
                    Tout participant mineur doit apporter une autorisation parentale signée par son responsable légal</p>
                </div>
                <div class=\"tab-pane fade\" id=\"lot\">
                  <p>Des Riot Points et des goodies !! Plus d'infos prochainement.</p>
                </div>
                <div class=\"tab-pane fade\" id=\"inscription\">
                  <p>Cliquer <a href=\"http://goo.gl/forms/MR4aYMGdFv\">ici</a> pour accéder au formulaire d'inscription.</br>
                    Le remplir vous assure une place pour le tournoi.</br>
                    Le payement se fera à l'entrée.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

";
    }

    // line 80
    public function block_footer($context, array $blocks = array())
    {
        // line 81
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
        return array (  138 => 81,  135 => 80,  69 => 16,  66 => 15,  60 => 12,  57 => 11,  51 => 8,  48 => 7,  43 => 4,  40 => 3,  11 => 1,);
    }
}
