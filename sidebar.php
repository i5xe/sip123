   <?php
      ob_start();
   ?>
  <!-- Sidebar -->
  <nav
       id="sidebarMenu"
       class="collapse d-lg-block sidebar collapse fs-6" style="background: linear-gradient(to bottom, rgb(255, 0, 255) 10%, rgb(50, 101, 201) 70%);"
       >
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
        <a 
          class="list-group-item list-group-item-action py-1 ripple active" aria-current="true">
          <span>Data Master & Proses</span>
        </a>
        <a
           href="data_admin.php"
           class="list-group-item list-group-item-action py-2 ripple">
           <i class="fas fa-user-lock fa-fw me-3"></i>
           <span>Data admin</span>
        </a>
        <a
           href="data_kelas.php"
           class="list-group-item list-group-item-action py-2 ripple">
           <i class="fas fa-clipboard-list fa-fw me-3"></i>
           <span>Data Kelas</span>
        </a>
        <a
           href="data_siswa.php"
           class="list-group-item list-group-item-action py-2 ripple">
           <i class="fas fa-users-cog fa-fw me-3"></i>
           <span>Data Siswa</span>
        </a>
        <a
           href="jenis_pembayaran.php"
           class="list-group-item list-group-item-action py-2 ripple">
          <i class="fas fa-calculator fa-fw me-3"></i>
          <span>Jenis Pembayaran</span>
        </a>
        <a
           href="ekskul.php"
           class="list-group-item list-group-item-action py-2 ripple">
           <i class="fas fa-hiking fa-fw me-3"></i>
           <span>Ekstrakurikuler</span>
        </a>
      
        <a
           href="pembayaran.php"
           class="list-group-item list-group-item-action py-2 ripple">
           <i class="fas fa-briefcase fa-fw me-3"></i>
           <span>Pembayaran</span>
        </a>
        <a
           href="tagihan.php"
           class="list-group-item list-group-item-action py-2 ripple">
           <i class="fas fa-business-time fa-fw me-3"></i>
           <span>Tagihan</span>
        </a>
        <a
           class="list-group-item list-group-item-action py-1 ripple active"
           ><span>Laporan</span>
        </a>
        <a
           href="lap_spp.php"
           class="list-group-item list-group-item-action py-2 ripple">
           <i class="fas fa-print fa-fw me-3"></i>
           <span>Lap. SPP Semester</span>
        </a>
        <a
           href="lap_rekap.php"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-print fa-fw me-3"></i>
           <span>Lap. Rekap Harian</span>
        </a>
        <a
           href="lap_tagihan.php"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-print fa-fw me-3"></i>
           <span>Laporan Tagihan Siswa</span>
        </a>
        <a
           href="lap_data_siswa.php"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-print fa-fw me-3"></i>
           <span>Laporan Data Siswa</span>
        </a>
        <a
           href="lap_ekskul.php"
           class="list-group-item list-group-item-action py-2 ripple rounded-bottom"
           ><i class="fas fa-print fa-fw me-3"></i>
           <span>Laporan Ekstrakurikuler</span>
        </a>
      </div>
    </div>

  </nav>
