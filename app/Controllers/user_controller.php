<?php
namespace App\Controllers;
use App\Models\User_Model;
use CodeIgniter\Controller;

class User_Controller extends Controller {
    public function __construct() {
        helper(['form', 'url']);
    }

    public function create() {
        $data['titulo'] = 'Registro';
        echo view('front/headview', $data);
        echo view('front/navbarview');
        echo view('back/usuario/register');
        echo view('front/footerview');
    }

    public function formValidation() {
        $validation = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email' => 'required|min_length[3]|max_length[100]|valid_email|is_unique[usuarios.user_email]',
            'password' => 'required|min_length[3]|max_length[10]',
            'confirm_password' => 'matches[password]'
        ]);

        $formModel = new User_Model();
        if (!$validation) {
            $data['titulo'] = 'Registro';
            echo view('front/headview', $data);
            echo view('front/navbarview');
            echo view('back/usuario/register', ['validation' => $this->validator]);
            echo view('front/footerview');
        } else {
            $formModel->save([
                'user_name' => $this->request->getVar('nombre'),
                'user_lastname' => $this->request->getVar('apellido'),
                'user' => $this->request->getVar('usuario'),
                'user_email' => $this->request->getVar('email'),
                'user_pass' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ]);
            session()->setFlashdata('success', 'Usuario registrado con éxito');
            return $this->response->redirect('/Primer_proyecto/login');
        }
    }
}
