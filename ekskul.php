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
                <div class="form-outline mb-4">
                    <input type="text" id="kode_eks" class="form-control" />
                    <label for="kode_eks" class="form-label">Kode ekstrakurikuler</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="text" id="eks" class="form-control" />
                    <label for="eks" class="form-label">Nama Kegiatan Ekstrakurikuler</label>
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
            <div class="col-sm-12 text-center p-3">
                <table class="table table-striped text-center">
                    <thread>
                        <tr>
                            <th scope="col">Kode Ekstrakurikuler</th>
                            <th scope="col">Nama Kegiatan Ekstrakurikuler</th>
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