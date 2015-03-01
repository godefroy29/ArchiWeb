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
\t\t\t<h2 id=\"pagination\">Réglement<h5>En 21 arcticles</h5></h2>
\t\t\t<div class=\"bs-component\">
\t            <ul class=\"pagination\">
\t\t            <li><a href=\"#1\" data-toggle=\"tab\">1</a></li>
\t\t            <li><a href=\"#2\" data-toggle=\"tab\">2</a></li>
\t\t            <li><a href=\"#3\" data-toggle=\"tab\">3</a></li>
\t            </ul>
\t\t\t</div>
\t\t\t<div id=\"myTabContent\" class=\"tab-content\">
                <div class=\"tab-pane fade active in\" id=\"1\">
                  \t<h2>Article 1</h2>
\t\t\t\t\tL'utilisation de tout système audio (enceintes, caisson de basses, etc ...) est interdite, seuls les casques d'écoute sont autorisés.
\t\t\t\t\t
\t\t\t\t\t<h2>Article 2</h2>
\t\t\t\t\tToute personne désireuse de s'inscrire à l’AsiLoL doit formellement indiquer lors de son inscription si elle est sujette aux crises d'épilepsie, ou pertes de connaissance due à la stimulation visuelle de certains effets stroboscopiques ou lumineux. De plus, elle certifie que les données entrées sur le site lors de l'inscription sont correctes et authentiques.
\t\t\t\t\t
\t\t\t\t\t<h2>Article 3</h2>
\t\t\t\t\tLes organisateurs ne pourront en aucun cas être tenus responsables quant aux agissements des participants en dehors de l'enceinte de la manifestation.
\t\t\t\t\t
\t\t\t\t\t<h2>Article 4</h2>
\t\t\t\t\tEn cas de dégradation, de casse ou de vol du matériel des participants, l’organisation ne pourra être tenue responsable. Toutes dégradations de matériels causées à un tiers devront être réparées financièrement par l’auteur des faits.
\t\t\t\t\t
\t\t\t\t\t<h2>Article 5</h2>
\t\t\t\t\tEn aucun cas, l’organisation ne pourra être tenue pour responsable des dommages, pertes, ou vols, qui concerneraient les biens apportés par les participants, ainsi que d'éventuels dommages qui pourraient être occasionnés aux autres participants; ainsi en cas de contrôle anti-piratage.
\t\t\t\t\t
\t\t\t\t\t<h2>Article 6</h2>
\t\t\t\t\tL’organisation se réserve le droit de se retourner contre un joueur ayant causé des dégradations au bâtiment ou au mobilier lors de l'événement.
\t\t\t\t\t
\t\t\t\t\t<h2>Article 7</h2>
\t\t\t\t\tLes animaux ne sont pas autorisés.
                </div>
                <div class=\"tab-pane fade\" id=\"2\">
                \t<h2>Article 8</h2>
\t\t\t\t\tLes bouteilles en verre sont interdites dans le bâtiment, toute bouteille trouvée sera confisquée et détruite. L’organisation se garde aussi le droit d'exclure le joueur de la manifestation.
\t\t\t\t\t
\t\t\t\t\t<h2>Article 9</h2>
\t\t\t\t\tIl est strictement interdit d'utiliser des appareils électriques autres que votre PC (onduleur, ventilateur,...)
\t\t\t\t\t
\t\t\t\t\t<h2>Article 10</h2>
\t\t\t\t\tToute manipulation électrique ou sur le réseau est interdite, en cas de problème demander l'aide d'un organisateur.
\t\t\t\t\t
\t\t\t\t\t<h2>Article 11</h2>
\t\t\t\t\tIl est interdit d'avoir des propos racistes et injurieux envers les autres participants et les organisateurs.
\t\t\t\t\t
\t\t\t\t\t<h2>Article 12</h2>
\t\t\t\t\tLes mineurs seront acceptés sous la responsabilité de leurs parents.
\t\t\t\t\t
\t\t\t\t\t<h2>Article 13</h2>
\t\t\t\t\tToute tentative de saturation du réseau, de piratage, de vol ainsi que tout comportement déplacé entraînera l'expulsion de la ou les personnes concernées.
\t\t\t\t\t
\t\t\t\t\t<h2>Article 14</h2>
\t\t\t\t\tEn participant, vous vous engagez à ne pas participer au piratage informatique sous toutes ses formes. Vous êtes responsable du contenu numérique de vos disques et de votre matériel.
                </div>
                <div class=\"tab-pane fade\" id=\"3\">
                \t<h2>Article 15</h2>
\t\t\t\t\tL'association organisatrice se réserve le droit de modifier, ou d'annuler purement et simplement la lan, en raison de tout évènement indépendant de sa volonté, ainsi que de modifier le montant des différents prize pool, au prorata du nombre de joueurs.
\t\t\t\t\t
\t\t\t\t\t<h2>Article 16</h2>
\t\t\t\t\tLa vente ou l’échange de logiciels, d'œuvres musicales, protégées sont interdits.
\t\t\t\t\t
\t\t\t\t\t<h2>Article 17</h2>
\t\t\t\t\tChaque joueur doit posséder les licences de tous les jeux et logiciels ainsi que du système d'exploitation installés sur le pc. Nous vous rappelons que le piratage est un acte répréhensible par la loi.
\t\t\t\t\t
\t\t\t\t\t<h2>Article 18</h2>
\t\t\t\t\tIl est strictement interdit de fumer dans la salle et de consommer toute sorte de drogue. La consommation d'alcool est formellement interdite. Toute personne en état d'ébriété, ou sous l'action de produits stupéfiants, qui perturbe le bon déroulement de la manifestation sera immédiatement expulsée de la lan.
\t\t\t\t\t
\t\t\t\t\t<h2>Article 19</h2>
\t\t\t\t\tCette LAN est de type BYOC : bring your own computer. Cela signifie que chaque joueur participant doit rapporter l’intégralité de son matériel de jeu. Si ce n’est pas le cas, les organisateurs se réservent le droit d’annuler la participation aux tournois.
\t\t\t\t\t
\t\t\t\t\t<h2>Article 20</h2>
\t\t\t\t\tLes places s’achètent en ligne, au local et sur place si pas de possibilité de s’inscrire autrement. Une fois achetées, elles ne sont ni échangeables, ni remboursables. Les places visiteurs achetées sur place ne sont ni échangeables, ni remboursables.
\t\t\t\t\t
\t\t\t\t\t<h2>Article 21</h2>
\t\t\t\t\tLes organisateurs se réservent le droit d'expulser toutes personnes ne respectant pas ce règlement.
                </div>
            </div>
\t\t</div>
\t</div>
</div>
";
    }

    // line 100
    public function block_footer($context, array $blocks = array())
    {
        // line 101
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
        return array (  158 => 101,  155 => 100,  69 => 16,  66 => 15,  60 => 12,  57 => 11,  51 => 8,  48 => 7,  43 => 4,  40 => 3,  11 => 1,);
    }
}
