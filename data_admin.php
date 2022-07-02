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
        $username        = "";
        $email       = "";
        $password   = "";
        $sukses     = "";
        $error      = "";
        
        if (isset($_GET['op'])) {
            $op = $_GET['op'];
        } else {
            $op = "";
        }
        if($op == 'delete'){
            $id         = $_GET['id'];
            $sql1       = "delete from users where id = '$id'";
            $q1         = mysqli_query($conn,$sql1);
            if($q1){
                $sukses = "Berhasil hapus data";
            }else{
                $error  = "Gagal melakukan delete data";
            }
        }
        if ($op == 'edit') {
            $id         = $_GET['id'];
            $sql1       = "select * from users where id = '$id'";
            $q1         = mysqli_query($conn, $sql1);
            $r1         = mysqli_fetch_array($q1);
            $username   = $r1['username'];
            $email       = $r1['email'];
            $password   = $r1['password'];
        
            if ($username == '') {
                $error = "Data tidak ditemukan";
            }
        }
        if (isset($_POST['simpan'])) { //untuk create
            $username        = $_POST['username'];
            $email       = $_POST['email'];
            $password   = md5($_POST['password']);
        
            if ($username && $email && $password) {
                if ($op == 'edit') { //untuk update
                    $sql1       = "update users set username = '$username',email='$email',password='$password' where id = '$id'";
                    $q1         = mysqli_query($conn, $sql1);
                    if ($q1) {
                        $sukses = "Data berhasil diupdate";
                    } else {
                        $error  = "Data gagal diupdate";
                    }
                } else { //untuk insert
                    $sql1   = "insert into users (username,email,password) values ('$username','$email','$password')";
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
                    header("refresh:5;url=data_admin.php");//5 : detik
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                    header("refresh:5;url=data_admin.php");
                }
                ?>
            <form class="p-3" method="POST">
                <div class="form-group row mb-4">
                    <label for="username" class="form-label col-sm-3">Username</label>
                    <div class="col-sm-9">
                        <input type="text" id="username" class="form-control" name="username" value="<?php echo $username ?>"/> 
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="email" class="form-label col-sm-3">Email Address</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" class="form-control" name="email" value="<?php echo $email ?>"/> 
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="password" class="form-label col-sm-3">Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" class="form-control" name="password" value="<?php echo $password ?>"/> 
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
            <div class="col-lg-12 text-center">
              <div class ="table-responsive">
                <table class="table text-center table-striped table-hover">
                    <thead class="table-secondary">
      <th scope="col">No</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
  </thead>
    </tr>
  <tbody class="align-middle">
  <?php
                        $sql2   = "select * from users order by id desc";
                        $q2     = mysqli_query($conn, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id         = $r2['id'];
                            $username   = $r2['username'];
                            $email       = $r2['email'];
                            $password     = $r2['password'];
                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $username ?></td>
                                <td scope="row"><?php echo $email ?></td>
                                <td scope="row"><?php echo $password ?></td>
                                <td scope="row">
                                <a href="data_admin.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">
                                <i class="fas fa-user-edit "></i>
                                </button></a>
                                
                                <a href="data_admin.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger ">
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