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
                    <input type="text" id="kode_pembayaran" class="form-control" />
                    <label for="kode_pembayaran" class="form-label">Kode Pembayaran</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="text" id="jenis_pembayaran" class="form-control" />
                    <label for="jenis_pembayaran" class="form-label">Jenis Pembayaran</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="text" id="tipe" class="form-control" />
                    <label for="tipe" class="form-label">Tipe</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="text" id="nominal" class="form-control" />
                    <label for="nominal" class="form-label">Nominal</label>
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
                            <th scope="col">Kode Pembayaran</th>
                            <th scope="col">Jenis Pembayaran</th>
                            <th scope="col">Tipe</th>
                            <th scope="col">Nominal</th>
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