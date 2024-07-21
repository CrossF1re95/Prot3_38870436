<?php
namespace app\Controllers;
use CodeIgniter\Controller;

class panel_controller extends Controller
{
    public function index()
    {
        $session = session();
        $nombre = $session->get('user');
        $perfil = $session->get('profile_id');

            $data['profile_id'] = $perfil;

        $dato['title']='Panel de usuario';
        echo view('front/headview', $dato);
        echo view('front/navbarview');
        echo view('back/usuario/logged_user', $data);
        echo view('front/footerview');

    }
}
