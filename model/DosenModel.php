<?php

namespace model;

use m\Model;

class DosenModel extends Model
{
    public function __construct()
    {
        parent::__construct('dosen');
    }

    public function getData()
    {
        $sql = "SELECT * FROM dosen";

        $records = $this->executeReadSQL($sql);

        return $records;
    }

    public function addData($nip, $nama, $alamat, $prodi, $jurusan, $no_telepon)
    {
        $sql = "INSERT INTO {$this->tableName} (Nip, Nama, Alamat, Prodi, Jurusan, No_Telepon) VALUES ('$nip','$nama','$alamat','$prodi','$jurusan','$no_telepon')";

        $this->executeWriteSQL($sql);
    }
}
