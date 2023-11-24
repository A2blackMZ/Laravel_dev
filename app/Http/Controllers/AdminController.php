<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function create() {
        return view('admins.adminregister');
    }

    public function adminloginform() {
        return view('admins.adminloginform');
    }

    public function admindashboard()
    {
        // Logique de la méthode admin dashboard
        return view('admins.admindashboard');
    }

    public function connexion(Request $request) {
        // Validation des données du formulaire
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $admin = Admin::where('email', $request->input('email'))->first();

        if ($admin) {
            if (Hash::check($request->input('password'), $admin->password)) {
                $request->session()->put('client', $admin);
                return redirect()->route('admin.admindashboard');
            } else {
                return ('status \'Identifiants incorrects');
            }
        } else {
            return ('Désolé vous n\'avez pas de compte avec cet email');
        }
    }

    public function store(Request $request) {
        $data = $request->validate([
            'hotel_name' => 'required|string|max:100|min:3',
            'lastname' => 'required|string|max:100|min:3',
            'username' => 'required|string|max:100|min:3',
            'email' => 'required|email|unique:admins,email',
            'tel' => 'required|numeric',
            'poste' => 'required|string',
            'adresse' => 'required|string|max:50|min:5',
            'ville' => 'required|string|max:50|min:5',
            'password' => 'required|string|max:12|min:6|confirmed'
        ]);

        // Hashage du mot de passe après la validation
        $data['password'] = Hash::make($data['password']);

        $newadmin = Admin::create($data);

        return redirect(route('admin.adminloginform'));
    }
}
