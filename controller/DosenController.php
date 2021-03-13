<?php


namespace controller;

use m\Application;
use m\Controller;

use model\DosenModel;

class DosenController extends Controller
{
    private $_mDosen;

    public function __construct(Application $application)
    {
        parent::__construct($application);

        $this->_mDosen = new DosenModel();
    }

    public function index()
    {
        $dosen = $this->_mDosen->getData();

        $data = array(
            'all_dosen' => $dosen
        );

        $this->view->setData($data);
        $this->view->setContentTemplate('/dosen/index_dosen.php');
        $this->view->render();
    }

    public function addDosen()
    {
        if (isset($_POST['submit'])) {
            $this->saveDosenData();

            $this->redirect('/list-dosen');
        }

        $this->view->setContentTemplate('/dosen/add_dosen.php');
        $this->view->render();
    }

    public function saveDosenData()
    {
        $nip        = $_POST['nip'];
        $nama       = $_POST['name'];
        $alamat     = $_POST['address'];
        $prodi      = $_POST['prodi'];
        $jurusan    = $_POST['jurusan'];
        $no_telepon = $_POST['phone_number'];

        $this->_mDosen->addData($nip, $nama, $alamat, $prodi, $jurusan, $no_telepon);
    }
}
