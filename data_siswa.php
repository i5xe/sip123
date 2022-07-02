<?php
require_once "function.php";
check_login();
?>

<div class="row">
  <div class="col-md-12 "> <?php require "navbar.php"; ?>
</div>
</div>

  <div class="row">
    <div class="col-lg-3 bg-black" > <?php require "sidebar.php"; ?>
</div>
    <div class="col-lg-9">
        <div class="row mt-5 py-5">
         <div class="col-md-1">
            <!-- gap -->
        </div>
        <div class="col-md-10 px-5">
            <form method="POST">
                <div class="form-group row mb-4">
                    <label for="nis" class="form-label col-sm-3">NIS</label>
                    <div class="col-sm-9">
                        <input type="text" id="nis" class="form-control" name="nis" value="" placeholder="Masukkan NIS" />    
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="nama" class="form-label col-sm-3">Nama Siswa</label>
                    <div class="col-sm-9">
                        <input type="text" id="nama" class="form-control" name="nama" value="" placeholder="Masukkan Nama Siswa" />    
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="kelas" class="form-label col-sm-3">Kelas</label>
                    <div class="col-sm-9">
                        <select name="kelas" id="kelas" class="form-control">
                            <option>-- Pilih Jurusan --</option>
                        </select>    
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="ttl" class="form-label col-sm-3">Tempat Tanggal Lahir</label>
                    <div class="col-sm-9">
                        <input type="date" id="ttl" class="form-control" name="ttl" value=""/> 
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <div class="row">
                        <legend class="col-form-label col-sm-3 pt-0">Jenis Kelamin</legend>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="rb-pria" value="pria">
                                <label class="form-check-label" for="rb-pria">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="rb-wanita" value="wanita">
                                <label class="form-check-label" for="rb-wanita">Laki-laki</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="nama_ortu" class="form-label col-sm-3">Nama Orantua</label>
                    <div class="col-sm-9">
                        <input type="text" id="nama_ortu" class="form-control" name="nama_ortu" value=""/> 
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="no_telp" class="form-label col-sm-3">Nomer Telepon</label>
                    <div class="col-sm-9">
                        <input type="text" id="no_telp" class="form-control" name="no_telp" value=""/> 
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ">Simpan</button>
                <button type="submit" class="btn btn-primary ">Clear</button>
                <button type="submit" class="btn btn-primary ">Delete</button>
                <button type="submit" class="btn btn-primary ">Edit</button>
            </form>
        </div>
        <div class="col-md-1">
            <!-- gap -->
        </div>   
        </div>
    <main>
        <div class="container">
            <div class="col-lg-12 text-center p-3">
                <table class="table table-striped text-center">
                    <thread>
                        <tr>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">TTL</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Nama Orang Tua</th>
                            <th scope="col">No.Telp</th>
                        </tr>
                    </thread>
                    </tbody>
                </table>
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