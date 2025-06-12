<?php

namespace App\Http\Controllers;
use App\Models\Participation;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function adminDashboard(){
        return view('admin.index');
    }

      public function adminOrganisateur(){
        return view('admin.pages.organisateur.organisateur');
    }

    public function adminEvenement(){
        return view('admin.pages.evenement.evenement');
    }

    public function adminSite(){
        return view('admin.pages.site-touristique.site');
    }

    public function adminReservation(){
        return view('admin.pages.reservation.reservation');
    }


    public function adminParticipation()
    {
        // Récupérer toutes les participations avec leurs relations éventuelles (ex: utilisateur, événement)
        $participations = Participation::with(['touriste', 'evenement'])->get();
    
        // Passer les participations à la vue
        return view('admin.pages.participation.participation', compact('participations'));
    }
    
  
}
