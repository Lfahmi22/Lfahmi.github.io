<?php
include('koneksi.php');

if (isset($_GET['tag'])) {
    $tag = $_GET['tag'];

    date_default_timezone_set('Asia/Jakarta');
    $jam = date('H:i:s');
    $tanggal = date('d-m-Y');
    $tanggalSekarang = strtotime($tanggal);

    $cek = mysqli_query($koneksi, "SELECT * FROM anggota WHERE tag='$tag'");
    $num = mysqli_num_rows($cek);

    if ($num > 0) {
        $data       = mysqli_fetch_array($cek);
        $id        = $data['id'];
        $nama       = $data['nama'];
        $nim        = $data['nim'];
        $jabatan    = $data['jabatan'];

        $jadwal     = mysqli_query($koneksi, "SELECT * FROM jadwal");
        $row_jadwal = mysqli_fetch_array($jadwal);
        $tanggal1   = strtotime($row_jadwal['tanggal1']);
        $tanggal2   = strtotime($row_jadwal['tanggal2']);

        if (($tanggalSekarang >= $tanggal) && ($tanggalSekarang <= $tanggal2)) {
            $input = mysqli_query($koneksi, "INSERT INTO log (tanggal, jam, id, tag, nama, jabatan) VALUE ('$tanggal','$jam','$id','$tag','$nama','$jabatan')");
            if ($input == TRUE) {
                $id_dosen   = $row_jadwal['id_dosen'];
                $cek_dosen  = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id='$id_dosen'");
                $row_dosen  = mysqli_fetch_array($cek_dosen);
                $nohape     = $row_dosen['nohape'];
                $config = array(
                    'status' => 'Sukses', 'nama' => $nama, 'nim' => $nim, 'tanggal' => $tanggal, 'jam' => $jam, 'nohape' => $nohape
                );
                echo json_encode($config);
            } else {
                $config = array(
                    'Gagal Input' => 'Sukses', 'nama' => '', 'nim' => '', 'tanggal' => '$tangga', 'jam' => '', 'nohape' => ''
                );
                echo json_encode($config);
            }
        } else {
            $config = array(
                'Tidak Ada Jadwal Pada Tanggal Ini' => 'Sukses', 'nama' => '', 'nim' => '', 'tanggal' => '$tangga', 'jam' => '', 'nohape' => ''
            );
            echo json_encode($config);
        }
    } else {
		$inputTag = mysqli_query($koneksi, "INSERT INTO tag (tag) VALUES ('$tag') ");
        $config = array(
            'status' => 'Belum Terdaftar', 'nama' => '', 'nim' => '', 'tanggal' => '$tangga', 'jam' => '', 'nohape' => ''
        );
        echo json_encode($config);
    }
} else {
    $config = array(
        'status' => 'null', 'nama' => '', 'nim' => '', 'tanggal' => '$tangga', 'jam' => '', 'nohape' => ''
    );
    echo json_encode($config);
}
