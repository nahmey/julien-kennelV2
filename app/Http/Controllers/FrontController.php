<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Inertia\Inertia;
use Inertia\Response;

use Avatar;

class FrontController extends Controller
{
    public function accueil()
    {
        return Inertia::render('Accueil');
    }

    public function realisations()
    {
        $sites = [
            [
                'id' => 1,
                'nom' => 'Éspèces exotiques envahissantes en Grand Est',
                'url' => 'https://eee-grandest.fr/',
                'image' => 'images/realisations/eee.png',
                'description' => "Site Web des EEE en Grand Est",
                'type' => 'site'
            ],
            [
                'id' => 2,
                'nom' => 'Kuntz ramonage',
                'url' => 'https://kuntz-ramonage.fr/',
                'image' => 'images/realisations/kuntz_ramonage.JPG',
                'description' => "Site Web pour Cyril Kuntz, ramoneur sur le secteur de Saverne",
                'type' => 'site'
            ],
            [
                'id' => 4,
                'nom' => 'Gorna',
                'url' => 'https://gorna.fr/',
                'image' => 'images/realisations/gorna.png',
                'description' => "Site Web du GORNA, centre de soins agréé pour la faune sauvage",
                'type' => 'site'
            ],
            [
                'id' => 5,
                'nom' => 'Site du pôle gestion des milieux naturels en Grand Est',
                'url' => 'https://gestion-milieux-grandest.fr/',
                'image' => 'images/realisations/pole_gestion.png',
                'description' => "Site internet et boîte à outils du pôle gestion des milieux naturels en Grand Est",
                'type' => 'site'
            ],
            [
                'id' => 6,
                'nom' => 'Site du Conservatoire d\'espaces naturels de Lorraine',
                'url' => 'https://cen-lorraine.fr',
                'image' => 'images/realisations/cenl.png',
                'description' => "Site Web du Conservatoire d'espaces naturels de Lorraine",
                'type' => 'site'
            ],
            [
                'id' => 7,
                'nom' => 'Menelec',
                'url' => 'https://menelec67.fr/',
                'image' => 'images/realisations/menelec.PNG',
                'description' => "Site Web pour Anthony Defraiteur, électricien à Petersbach, secteur Bas-rhin et Moselle",
                'type' => 'site'
            ],
            [
                'id' => 9,
                'nom' => 'PRAM Grand Est',
                'url' => 'https://app.pram-grandest.fr/',
                'image' => 'images/realisations/site_pram.JPG',
                'description' => "Application cartographique du PRAM Grand Est",
                'type' => 'site'
            ],
            [
                'id' => 12,
                'nom' => 'F J Rénovation',
                'url' => 'https://f-j-renovation.fr',
                'image' => 'images/realisations/fjrenovation.png',
                'description' => "Site Web pour Frédéric Jung, entrepreneur dans le batiment",
                'type' => 'site'
            ],
            [
                'id' => 13,
                'nom' => 'Marine ostéopathe',
                'url' => 'https://marine-osteopathe.fr',
                'image' => 'images/realisations/marine.png',
                'description' => "Site internet pour Marine Robert, ostéopathe à Weyersheim",
                'type' => 'site'
            ],
            [
                'id' => 15,
                'nom' => 'AJS Saverne',
                'url' => 'https://ajs-saverne.fr',
                'image' => 'images/realisations/ajs.png',
                'description' => "Site Web pour l'association des jeunes séniors de Saverne",
                'type' => 'site'
            ]
        ];

        $applications = [
            [
                'id' => 3,
                'type' => 'application',
                'nom' => 'Extranet - CENL',
                'nom_interne' => 'intranet',
                'image' => 'images/realisations/intranet.PNG',
                'images' => ['images/realisations/intranet.PNG', 'images/realisations/intranet_4.png', 'images/realisations/intranet_2.png', 'images/realisations/intranet_3.png'],
                'description' => "Extranet du CEN Lorraine : annuaire, agenda partagé, chat, et accès aux diverses applications internes à l'association.",
                'description_complete' => "<p>L’extranet est la porte d’entrée unique vers les différentes applications de l’entreprise.
                Il permet aux salariés de se connecter facilement pour accéder à leur agenda personnel, consulter ceux de leurs collègues, organiser leur emploi du temps de manière collaborative, ou encore consulter l'annuaire de tous les salariés de l'entreprise.</p><p>Un agenda dédié à la <b>réservation du matériel</b> est également intégré, simplifiant la gestion et la disponibilité des ressources.</p><p>L’extranet propose en outre un <b>fil d’actualité interne</b>, favorisant la communication au sein de l’entreprise : chacun peut y publier des informations, annonces ou événements pour les partager avec l’ensemble de l’équipe.</p><p>Enfin, <b>un système de rôles et de permissions</b> assure une gestion fine des accès, permettant d’adapter les droits selon les responsabilités de chacun — qu’il s’agisse de la création d’utilisateurs, de la gestion du matériel ou d’autres fonctionnalités administratives.</p>"
            ],
            [
                'id' => 8,
                'type' => 'application',
                'nom' => 'Suivi des devis et factures - CENL',
                'nom_interne' => 'devis_facture',
                'image' => 'images/realisations/facture_2.png',
                'images' => ['images/realisations/facture_2.png','images/realisations/facture_3.png', 'images/realisations/facture_4.png'],
                'description' => "Enregistrement, suivi, validation et édition (drag and drop de date, signature etc...) des devis et factures.",
                'description_complete' => "<p>Cette application permet de suivre <b>précisément l’avancement des devis, bons de commande et factures, grâce à un système de validation hiérarchique</b>.</p><p>Un utilisateur peut déposer un devis, qui sera ensuite validé — ou refusé — par le service comptable, puis par la direction.</p><p>Chaque devis, bon de livraison ou bon de commande peut être associé à une ou plusieurs factures, offrant ainsi une <b>vision détaillée et centralisée des dépenses de la structure</b>.</p><p>L’application intègre également une <b>fonction de glisser-déposer (drag & drop)</b>, facilitant l’ajout d’éléments directement sur les documents PDF : signature, date, mention spécifique, etc.</p><p>Un <b>système de visualisation et d’export</b> permet d’obtenir une <b>vue globale et en temps réel</b> des dépenses — qu’elles soient en attente, validées ou passées — pour un meilleur suivi budgétaire et une prise de décision facilitée.</p><p>Enfin, un <b>système de gestion des droits</b> permet de définir précisément les accès et actions possibles pour chaque utilisateur, selon son rôle dans l’organisation.</p>"
            ],
            [
                'id' => 11,
                'type' => 'application',
                'nom' => 'Programmation - CENL',
                'nom_interne' => 'programmation',
                'image' => 'images/realisations/prog_1.png',
                'images' => ['images/realisations/prog_1.png','images/realisations/prog_2.png','images/realisations/prog_3.png','images/realisations/prog_4.png',],
                'description' => "Logiciel de programmation du temps de travail et d’évaluation financière, un tableau de type 'Excel' sur mesure",
                'description_complete' => "<p>Ce logiciel permet à la structure de <b>programmer le temps de travail</b>, de <b>définir les prestataires nécessaires</b> et de <b>renseigner diverses informations associées</b>, afin d’évaluer le coût financier prévisionnel de l’année à venir.</p><p>Conçu comme un <b>tableur de type “Excel” sur mesure</b>, il offre une grande souplesse d’utilisation : <b>ajout et modification de données, recalcul automatique des totaux, filtres dynamiques</b>, et une interface pensée pour s’adapter parfaitement à l’activité et à l’organisation de l’entreprise.</p><p>L’outil permet également <b>l’import de fichiers Excel</b> préparés en amont, afin de <b>centraliser les informations de toutes les équipes</b> en un seul espace.</p><p>La direction peut ensuite <b>définir les règles financières propres à chaque financeur</b>, ce qui permet de <b>calculer automatiquement le coût global</b> et la <b>répartition du financement</b> pour chaque projet.</p><p>Enfin, un <b>module statistique complet</b> facilite la création de <b>bilans prévisionnels</b> et l’analyse fine des ressources, des dépenses et de leur impact financier.</p>"
            ],
            [
                'id' => 10,
                'type' => 'application',
                'nom' => 'Application de congés - CENL',
                'nom_interne' => 'conges',
                'image' => 'images/realisations/cp_1.png',
                'images' => ['images/realisations/cp_1.png', 'images/realisations/cp_2.png', 'images/realisations/cp_3.png'],
                'description' => "Logiciel de demandes, suivi et gestion des congés, avec système de validation hiérarchique.",
                'description_complete' => "<p>Cette application simplifie le <b>suivi et la gestion des congés, RTT et comptes épargne-temps (CET)</b> des salariés.</p><p>Chaque employé peut effectuer une <b>demande de congé en ligne</b>, qui est automatiquement transmise à son responsable hiérarchique pour validation. Une fois la demande approuvée, l’information est <b>directement communiquée au service RH</b>, permettant une mise à jour instantanée du planning et des absences.</p><p>L’application offre une <b>vue en temps réel des soldes restants</b> pour chaque collaborateur, tout en gérant les <b>congés exceptionnels, les CET et les arrêts maladie</b> — transmis automatiquement aux ressources humaines.</p><p>En automatisant ces échanges, l’outil représente un <b>gain de temps considérable pour l’ensemble du personnel</b>, et en particulier pour les <b>équipes RH</b>, qui bénéficient d’une <b>vision centralisée, claire et toujours à jour</b> des absences et disponibilités au sein de l’entreprise.</p>"
            ],
            [
                'id' => 14,
                'type' => 'application',
                'nom' => 'Suivi du temps de travail - CENL',
                'nom_interne' => 'temps_travail',
                'image' => 'images/realisations/tps_1.png',
                'images' => ['images/realisations/tps_1.png', 'images/realisations/tps_2.png', 'images/realisations/tps_3.png'],
                'description' => "Logiciel de suivi du temps de travail des salariès.",
                'description_complete' => "<p>Intégré à l’intranet, ce module permet aux salariés de <b>saisir leur temps de travail quotidien</b> de manière simple et centralisée.</p> <p>Relié à l’application de programmation, chaque utilisateur peut <b>sélectionner les projets qui lui sont attribués</b>, indiquer <b>le temps passé</b> et renseigner <b>toutes les informations associées</b>.</p><p>L’outil offre également un <b>suivi en temps réel de la consommation de temps par projet</b>, grâce à des vues de visualisation dynamiques et la possibilité d’exporter les données au format Excel.</p><p>Cela simplifie le suivi pour les salariés et permet aux responsables de <b>produire rapidement des bilans fiables</b>, générant ainsi un gain de temps significatif pour toute l’équipe.</p>"
            ]
        ];

        return Inertia::render('Realisations', compact('sites', 'applications'));
    }

    public function technologies()
    {
        return Inertia::render('Technologies');
    }

    public function apropos()
    {
        return Inertia::render('Apropos');
    }

    public function tarifs()
    {
        return Inertia::render('Tarifs');
    }

    public function contacts()
    {
        return Inertia::render('Contacts');
    }

    public function getAvisGoogle()
    {
        return $avis = [
            [
                'id' => 1,
                'nom' => 'GORNA',
                'prenom' => 'Centre de soins',
                'avatar' => Avatar::create('GC')->toBase64(),
                'note' => '5',
                'avis' => "Nous recommandons à 100% Mr KENNEL. Professionnel, à l'écoute, pédagogue, nous sommes très satisfait d'avoir fait appel à ses compétences !"
            ],
            [
                'id' => 2,
                'nom' => 'DEFRAITEUR',
                'prenom' => 'Anthony',
                'avatar' => Avatar::create('AD')->toBase64(),
                'note' => '5',
                'avis' => "Concepteur de site rapide et efficace. Bon conseil et en plus super sympathique. Je lui ai confié la création de mon site Web sans regret je recommande."
            ],

            [
                'id' => 3,
                'nom' => 'HORNBERGER',
                'prenom' => 'Nicole',
                'avatar' => Avatar::create('NH')->toBase64(),
                'note' => '5',
                'avis' => "Monsieur Kennel est très sérieux et très a l'écoute. Il est très performant. Je ne peux que le recommander. Il a réalisé le site de notre association qui est très facile à utiliser."
            ],

            [
                'id' => 4,
                'nom' => 'JUNG',
                'prenom' => 'Marine',
                'avatar' => Avatar::create('MJ')->toBase64(),
                'note' => '5',
                'avis' => "Vous pouvez compter sur M. Kennel pour la création d'un site internet ! Je suis très satisfaite de son travail, il est toujours disponible, à l'écoute et de bon conseil pour améliorer et modifier mon site."
            ],
            [
                'id' => 5,
                'nom' => 'KUNTZ',
                'prenom' => 'Cyril',
                'avatar' => Avatar::create('CK')->toBase64(),
                'note' => '5',
                'avis' => "J’ai sollicité Julien pour la création de mon site web professionnel. Il a su répondre à ma demande très rapidement pour me produire un site de qualité. Je recommande."
            ],
            [
                'id' => 6,
                'nom' => 'G.',
                'prenom' => 'Camille',
                'avatar' => Avatar::create('CG')->toBase64(),
                'note' => '5',
                'avis' => "Merci pour la réalisation d'une application de création d'exercices pour des élèves. Pratique, ludique et efficace, les corrections n'ont jamais été aussi rapides. Je recommande vivement pour tous vos projets !"
            ],
            [
                'id' => 7,
                'nom' => 'OBERLING',
                'prenom' => 'Zoé',
                'avatar' => Avatar::create('ZO')->toBase64(),
                'note' => '5',
                'avis' => "Si vous cherchez quelqu’un pour de la création web n’hésitez pas à le contacter !"
            ],
        ];
    }


    public function accueilRealisations()
    {
        $data = [
            [
                "id" => 1,
                "src" => "/images/realisations/gorna.png",
                "titre" => "Gorna",
                "sous_titre" => "sous_titre",
                "lien" => "lien"
            ],
            [
                'id'=> 2,
                'src' => '/images/realisations/eee.png',
                'titre' => 'EEE Grand Est',
                "sous_titre" => "sous_titre",
                "lien" => "https://eee-grandest.fr/"
            ],
            [
                "id" => 3,
                "src" => "/images/site_cenl/site_cenl_1.JPG",
                "titre" => "Site internet du CEN Lorraine",
                "sous_titre" => "sous_titre",
                "lien" => "lien"
            ],
            [
                "id" => 4,
                "src" => "/images/site_kuntz_ramonage/site_kuntz_ramonage_1.JPG",
                "titre" => "Site internet Kuntz Ramonage",
                "sous_titre" => "sous_titre",
                "lien" => "lien"
            ],
            [
                "id" => 5,
                "src" => "/images/site_pram/1.JPG",
                "titre" => "Site internet du PRAM",
                "sous_titre" => "sous_titre",
                "lien" => "lien"
            ],
        ];

        return response()->json($data);
    }

    public function mentionsLegales()
    {
        return Inertia::render('MentionsLegales');
    }
}
