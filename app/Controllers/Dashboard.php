<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = ['pagetitle' => 'Bienvenue'] ;
        // if (!session()->get('connecté')) {
        //     redirect()->to('/');
        // }

        echo view('templates/header', $data);
        echo view('dashboard');
        echo view('templates/footer');
    }
}
