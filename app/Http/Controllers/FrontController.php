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
        return Inertia::render('Realisations');
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
                'nom' => 'ROBERT',
                'prenom' => 'Marine',
                'avatar' => Avatar::create('MR')->toBase64(),
                'note' => '5',
                'avis' => "Vous pouvez compter sur M. Kennel pour la création d'un site internet ! Je suis très satisfaite de son travail, il est toujours disponible, à l'écoute et de bon conseil pour améliorer et modifier mon site."
            ],
            [
                'id' => 2,
                'nom' => 'KUNTZ',
                'prenom' => 'Cyril',
                'avatar' => Avatar::create('CK')->toBase64(),
                'note' => '5',
                'avis' => "J’ai sollicité Julien pour la création de mon site web professionnel. Il a su répondre à ma demande très rapidement pour me produire un site de qualité. Je recommande."
            ],
            [
                'id' => 3,
                'nom' => 'G.',
                'prenom' => 'Camille',
                'avatar' => Avatar::create('CG')->toBase64(),
                'note' => '5',
                'avis' => "Merci pour la réalisation d'une application de création d'exercices pour des élèves. Pratique, ludique et efficace, les corrections n'ont jamais été aussi rapides. Je recommande vivement pour tous vos projets !"
            ],
            [
                'id' => 4,
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
