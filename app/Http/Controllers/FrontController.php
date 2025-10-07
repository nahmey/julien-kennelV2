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
                'nom' => 'Éspèces exotiques envahissantes en Grand Est',
                'url' => 'https://eee-grandest.fr/',
                'image' => 'images/realisations/eee.png',
                'description' => "Site Web des EEE en Grand Est"
            ],
            [
                'nom' => 'Kuntz ramonage',
                'url' => 'https://kuntz-ramonage.fr/',
                'image' => 'images/realisations/kuntz_ramonage.JPG',
                'description' => "Site Web pour Cyril Kuntz, ramoneur sur le secteur de Saverne"
            ],
            [
                'nom' => 'Gorna',
                'url' => 'https://gorna.fr/',
                'image' => 'images/realisations/gorna.png',
                'description' => "Site Web du GORNA, centre de soins agréé pour la faune sauvage"
            ],
            [
                'nom' => 'Site du pôle gestion des milieux naturels en Grand Est',
                'url' => 'https://gestion-milieux-grandest.fr/',
                'image' => 'images/realisations/pole_gestion.png',
                'description' => "Site internet et boîte à outils du pôle gestion des milieux naturels en Grand Est"
            ],
            [
                'nom' => 'Site du Conservatoire d\'espaces naturels de Lorraine',
                'url' => 'https://cen-lorraine.fr',
                'image' => 'images/realisations/cenl.png',
                'description' => "Site Web du Conservatoire d'espaces naturels de Lorraine"
            ],
            [
                'nom' => 'Menelec',
                'url' => 'https://menelec67.fr/',
                'image' => 'images/realisations/menelec.PNG',
                'description' => "Site Web pour Anthony Defraiteur, électricien à Petersbach, secteur Bas-rhin et Moselle"
            ],
            [
                'nom' => 'PRAM Grand Est',
                'url' => 'https://app.pram-grandest.fr/',
                'image' => 'images/realisations/site_pram.JPG',
                'description' => "Application cartographique du PRAM Grand Est"
            ],
            [
                'nom' => 'F J Rénovation',
                'url' => 'https://f-j-renovation.fr',
                'image' => 'images/realisations/fjrenovation.png',
                'description' => "Site Web pour Frédéric Jung, entrepreneur dans le batiment"
            ],
            [
                'nom' => 'Marine ostéopathe',
                'url' => 'https://marine-osteopathe.fr',
                'image' => 'images/realisations/marine.png',
                'description' => "Site internet pour Marine Robert, ostéopathe à Weyersheim"
            ],
            [
                'nom' => 'AJS Saverne',
                'url' => 'https://ajs-saverne.fr',
                'image' => 'images/realisations/ajs.png',
                'description' => "Site Web pour l'association des jeunes séniors de Saverne"
            ]
        ];

        $applications = [
            [
                'nom' => 'Intranet - CENL',
                // 'image' => 'images/realisations/intranet_cen.JPG',
                'image' => 'images/realisations/intranet.PNG',
                'description' => "Intranet du CEN Lorraine : annuaire, agenda partagé, chat, et accès aux diverses applications internes à l'association."
            ],
            [
                'nom' => 'Suivi des devis et factures - CENL',
                'image' => 'images/realisations/devis_factures.JPG',
                'description' => "Enregistrement, suivi, validation et édition (drag and drop de date, signature etc...) des devis et factures."
            ],
            [
                'nom' => 'Application de congés - CENL',
                'image' => 'images/realisations/conges_cen.JPG',
                'description' => "Logiciel de demandes, suivi et gestion des congés, avec système de validation hiérarchique."
            ],
            [
                'nom' => 'Suivi de projet et suivi du temps de travail - CENL',
                'image' => 'images/realisations/tps_cen.JPG',
                'description' => "Logiciel de programmation de projet, et suivi du temps de travail des salariès."
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
                "src" => "/images/site_cenl/site_cenl_1.JPG",
                "titre" => "Site internet du CEN Lorraine",
                "sous_titre" => "sous_titre",
                "lien" => "lien"
            ],
            [
                "id" => 2,
                "src" => "/images/site_pole_gestion/site_pole_gestion_1.JPG",
                "titre" => "Site internet du Pôle gestion",
                "sous_titre" => "sous_titre",
                "lien" => "lien"
            ],
            [
                "id" => 3,
                "src" => "/images/site_kuntz_ramonage/site_kuntz_ramonage_1.JPG",
                "titre" => "Site internet Kuntz Ramonage",
                "sous_titre" => "sous_titre",
                "lien" => "lien"
            ],
            [
                "id" => 4,
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
