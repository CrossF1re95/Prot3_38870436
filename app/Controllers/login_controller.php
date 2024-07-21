<?php
namespace app\Controllers;
use CodeIgniter\Controller;
use App\Models\user_Model;

class login_controller extends Controller
{
    public function index()
    {
        helper(['form', 'url']);

        $dato['titulo']='Iniciar sesion';
        echo view('front/headview', $dato);
        echo view('front/navbarview');
        echo view('back/usuario/login');
        echo view('front/footerview');
    }

    public function auth()
    {
        $session = session();
        $model = new user_Model();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $model->where('user_email', $email)->first();
        if($data){
            $pass = $data['user_pass'];
            $ba = $data['baja'];
            if($ba == 'SI'){
                $session->setFlashdata('msg', 'Usuario dado de baja');
                return redirect()->to('/login_controller');
            }
            
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id' => $data['user_id'],
                    'user_name' => $data['user_name'],
                    'user_lastname' => $data['user_lastname'],
                    'user_email' => $data['user_email'],
                    'user' => $data['user'],
                    'profile_id' => $data['profile_id'],
                    'logged_in' => TRUE,
                ];
                $session->set($ses_data);

                session()->setFlashdata('msg', 'Bienvenido!');
                return redirect()->to('/panel');
            }else{
                $session->setFlashdata('msg', 'Password incorrecto');
                return redirect()->to('/login_controller');
            }
        }else{
            $session->setFlashdata('msg', 'No existe el email o es incorrecto');
            return redirect()->to('/login_controller');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
