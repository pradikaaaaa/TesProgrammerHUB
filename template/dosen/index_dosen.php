<h2>Data Mahasiswa</h2>
<a href="<?php echo $this->homeAddress('/add-new-dosen'); ?>">Tambah Dosen Baru</a>
<br />
<br />
<table class="data-table">
    <thead class="data-table-th">
        <td class="data-table-td">ID</td>
        <td class="data-table-td">NIP</td>
        <td class="data-table-td">Nama</td>
        <td class="data-table-td">Alamat</td>
        <td class="data-table-td">Prodi</td>
        <td class="data-table-td">Jurusan</td>
        <td class="data-table-td">No. Telepon</td>
    </thead>
    <tbody>
        <?php foreach ($this->data('all_dosen') as $dosen) { ?>
            <tr class="data-table-tr">
                <td class="data-table-td"><?php echo $dosen['Id'] ?></td>
                <td class="data-table-td"><?php echo $dosen['Nip'] ?></td>
                <td class="data-table-td"><?php echo $dosen['Nama'] ?></td>
                <td class="data-table-td"><?php echo $dosen['Alamat'] ?></td>
                <td class="data-table-td"><?php echo $dosen['Prodi'] ?></td>
                <td class="data-table-td"><?php echo $dosen['Jurusan'] ?></td>
                <td class="data-table-td"><?php echo $dosen['No_Telepon'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>