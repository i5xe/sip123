<?php
require_once "function.php";
require_once "koneksi.php";
check_login();
?>

<div class="row">
  <div class="col-lg-12 "> <?php require "navbar.php"; ?>
</div>
</div>

  <div class="row">
    <div class="col-lg-3 bg-black" > <?php require "sidebar.php"; ?>
</div>
    <div class="col-lg-9 ">
        <div class="row mt-5 py-5">
         <div class="col-md-1">
            <!-- gap -->
        </div>
        <div class="col-md-10 px-5">
  
        <?php
        $kelas        = "";
        $wali_kelas   = "";
        $sukses     = "";
        $error      = "";
        
        if (isset($_GET['op'])) {
            $op = $_GET['op'];
        } else {
            $op = "";
        }
        if($op == 'delete'){
            $id         = $_GET['id'];
            $sql1       = "delete from data_kelas where id = '$id'";
            $q1         = mysqli_query($conn,$sql1);
            if($q1){
                $sukses = "Berhasil hapus data";
            }else{
                $error  = "Gagal melakukan delete data";
            }
        }
        if ($op == 'edit') {
            $id         = $_GET['id'];
            $sql1       = "select * from data_kelas where id = '$id'";
            $q1         = mysqli_query($conn, $sql1);
            $r1         = mysqli_fetch_array($q1);
            $kelas   = $r1['kelas'];
            $wali_kelas       = $r1['wali_kelas'];
        
            if ($kelas == '') {
                $error = "Data tidak ditemukan";
            }
        }
        if (isset($_POST['simpan'])) { //untuk create
            $kelas        = $_POST['kelas'];
            $wali_kelas       = $_POST['wali_kelas'];
        
            if ($kelas && $wali_kelas) {
                if ($op == 'edit') { //untuk update
                    $sql1       = "update data_kelas set kelas = '$kelas',wali_kelas='$wali_kelas' where id = '$id'";
                    $q1         = mysqli_query($conn, $sql1);
                    if ($q1) {
                        $sukses = "Data berhasil diupdate";
                    } else {
                        $error  = "Data gagal diupdate";
                    }
                } else { //untuk insert
                    $sql1   = "insert into data_kelas (kelas,wali_kelas) values ('$kelas','$wali_kelas')";
                    $q1     = mysqli_query($conn, $sql1);
                    if ($q1) {
                        $sukses     = "Berhasil memasukkan data baru";
                    } else {
                        $error      = "Gagal memasukkan data";
                    }
                }
            } else {
                $error = "Silakan masukkan semua data";
            }
        }
        ?>
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                    header("refresh:5;url=http://localhost/spp_web/data_kelas.php ");//5 : detik
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                    header("refresh:5;url=http://localhost/spp_web/data_kelas.php");
                }
                ?>
            <form class="p-3" method="POST">
                <div class="form-group row mb-4">
                    <label for="kelas" class="form-label col-sm-3">Kelas</label>
                    <div class="col-sm-9">
                        <input type="text" id="kelas" class="form-control" name="kelas" value="<?php echo $kelas ?>"/> 
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="wali_kelas" class="form-label col-sm-3">Wali_kelas</label>
                    <div class="col-sm-9">
                        <input type="text" id="wali_kelas" class="form-control" name="wali_kelas" value="<?php echo $wali_kelas ?>"/> 
                    </div>
                </div>
                
                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary"/>
                
            </form>
        </div>
        <div class="col-md-1">
            <!-- gap -->
        </div>   
        </div>
        
    <main>
        <div class="container">
            <div class="col-sm-12 text-center p-12">
              <div class ="table-responsive">
                <table class="table text-center table-striped table-hover">
                    <thead class="table-secondary">
      <th scope="col">No</th>
      <th scope="col">Kelas</th>
      <th scope="col">Wali Kelas</th>
      <th scope="col">Action</th>
  </thead>
    </tr>
  <tbody class="align-middle">
  <?php
                        $sql2   = "select * from data_kelas order by id desc";
                        $q2     = mysqli_query($conn, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id         = $r2['id'];
                            $kelas   = $r2['kelas'];
                            $wali_kelas       = $r2['wali_kelas'];
                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $kelas ?></td>
                                <td scope="row"><?php echo $wali_kelas ?></td>
                                <td scope="row">
                                <a href="data_kelas.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">
                                <i class="fas fa-user-edit"></i>
                                </button></a>
                                
                                <a href="data_kelas.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">
                                <i class="fas fa-trash" style="padding-left: 2px ; padding-right: 2px;"></i>
                                </button></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
  </tbody>
</table>
</div>
            </div>
        </div>
    </main>


</div>
</div>
<!--Main layout-->
    <!-- MDB -->
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>
</body>
</html>