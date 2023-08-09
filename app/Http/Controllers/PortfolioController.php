<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skills;
use Symfony\Component\HttpFoundation\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $skills = Skills::all();
        return view('index', compact('projects', 'skills'));

    }

    public function contact(Request $request)
    {

        //Préparer le mail
        $destinataire = 'levi.krken@gmail.com'; //admin
        $expediteur = $request->email; // à récupérer en fonction de l'identifiant de session
        $objet = 'Contact via le site gkwn-site';
        // Objet du message
        $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
        $headers .= 'Reply-To: '.$expediteur."\n"; // Mail de reponse
        $headers .= 'From: "Nom_de_expediteur"<'.$expediteur.'>'."\n"; // Expediteur
        $headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire

        $projects = Project::all();
        $skills = Skills::all();
        
        if (mail($destinataire, $objet, $request->email, $headers)) // Envoi du message
        {
            $alert = [
                'body' => "Email envoyé",
                'color' => "green",
            ];
            return redirect()
                        ->route('portfolio.index',compact('projects', 'skills'))
                        ->with('alert', $alert);

        }else{ 
            $alert = [
                'body' => "Email non envoyé",
                'color' => "red",
            ];
            return redirect()
                        ->route('portfolio.index',compact('projects', 'skills'))
                        ->with('alert', $alert);
        }

    }

}