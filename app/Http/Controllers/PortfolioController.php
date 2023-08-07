<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Symfony\Component\HttpFoundation\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('index', compact('projects'));
    }

    public function send()
    {
  

        $data = file_get_contents('php://input');
        $email = explode('&', $data, 2)[0];

        //Préparer le mail
        $destinataire = 'levi.krken@gmail.com'; //admin
        $expediteur = 'levi.krken@gmail.com'; // à récupérer en fonction de l'identifiant de session
        $objet = 'Contact via le site gkwn-site';
        // Objet du message
        $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
        $headers .= 'Reply-To: '.$expediteur."\n"; // Mail de reponse
        $headers .= 'From: "Nom_de_expediteur"<'.$expediteur.'>'."\n"; // Expediteur
        $headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire

        $message = $email;

        $projects = Project::all();
        

        if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
        {
            $alertMsg = 'Email envoyé';
            return view('index', compact('projects', 'alertMsg'));

        }else{ 
            $alertMsg = 'Erreur, mail non envoyé';
            return view('index', compact('projects', 'alertMsg'));

        }

    }

}