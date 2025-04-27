<?php
require_once __DIR__ . '/../models/UserModel.php';
require_once 'Controller.php';

class UserController extends Controller {
    private $model;

    public function __construct() {
        $this->model = new UserModel();
    }

    public function index() {
        $users = $this->model->getAll();
        $this->view('user/index', ['users' => $users]);
    }

    public function create() {
        $this->view('user/create');
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'Nama' => $_POST['Nama'],
                'Alamat' => $_POST['Alamat'],
                'Kontak' => $_POST['Kontak']
            ];
            
            if ($this->model->create($data)) {
                header('Location: index.php?controller=user&action=index');
            } else {
                echo "Gagal menambahkan pengguna";
            }
        }
    }

    public function edit($id) {
        $user = $this->model->getById($id);
        $this->view('user/edit', ['user' => $user]);
    }

    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'Nama' => $_POST['Nama'],
                'Alamat' => $_POST['Alamat'],
                'Kontak' => $_POST['Kontak']
            ];
            
            if ($this->model->update($id, $data)) {
                header('Location: index.php?controller=user&action=index');
            } else {
                echo "Gagal mengupdate pengguna";
            }
        }
    }

    public function destroy($id) {
        if ($this->model->delete($id)) {
            header('Location: index.php?controller=user&action=index');
        } else {
            echo "Gagal menghapus pengguna";
        }
    }
}
?>