<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function declare(){
        return view('user.declare');
    }
    public function show($id)
    {
        // Récupérer l'utilisateur par son identifiant
        $user = User::findOrFail($id);

        // Passer les données de l'utilisateur à la vue
        return view('profil', compact('user'));
    }
    
    
}
