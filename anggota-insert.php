<?php
            if (isset($_POST['save'])) {
                $nis            = $_POST['nis'];
                $nama           = $_POST['nama'];
                $kelas          = $_POST['kelas'];
                $jurusan        = $_POST['jurusan'];
                $tempat_lahir   = $_POST['tempat_lahir'];
                $tanggal_lahir  = $_POST['tgl_lahir'];
                $no_telepon     = $_POST['no_telepon'];
                $alamat         = $_POST['alamat'];
                $jenis_kelamin  = $_POST['jk'];
                $query_insert = mysqli_query($koneksi,"INSERT INTO anggota VALUES('','$nis','$nama','$kelas','$jurusan','$tempat_lahir','$tanggal_lahir','$no_telepon','$alamat','$jenis_kelamin')");
        
        
        
            }if ($query_insert){
            header('refresh:1  URL=http://localhost/16_mywebsite_12RPL2/admin.php?page=anggota-insert');
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            BERHASIL DITAMBAHKAN
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
        }else{
            echo "Data Gagal Disimpan";
            }
        
            ?> 