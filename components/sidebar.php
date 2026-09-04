<?php

/*
|--------------------------------------------------------------------------
| SIDEBAR
|--------------------------------------------------------------------------
| Active menu otomatis berdasarkan URL halaman saat ini.
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Ambil nama halaman
|--------------------------------------------------------------------------
|
| Contoh:
| /dashboard
| -> dashboard
|
| /master-clinic
| -> master-clinic
|
*/

$currentPage = basename(
   parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);


/*
|--------------------------------------------------------------------------
| Bersihkan trailing slash
|--------------------------------------------------------------------------
*/

$currentPage = trim(
   $currentPage,
   '/'
);


/*
|--------------------------------------------------------------------------
| Jika menggunakan subfolder project
|--------------------------------------------------------------------------
|
| Misalnya:
| /klinik-system/master-clinic
|
| hasil akhirnya tetap:
| master-clinic
|
*/

$currentPage = basename($currentPage);


/*
|--------------------------------------------------------------------------
| Fungsi Active Menu
|--------------------------------------------------------------------------
*/

function menuActive(string|array $pages): string
{
   global $currentPage;

   $pages = is_array($pages)
      ? $pages
      : [$pages];

   return in_array(
      $currentPage,
      $pages,
      true
   )
      ? 'active'
      : '';
}

?>


<!-- =========================================================
     SIDEBAR
========================================================== -->

<aside
   class="sidebar"
   id="sidebar">


   <!-- =====================================================
         BRAND
    ====================================================== -->

   <div class="sidebar-brand">


      <div class="sidebar-logo">

         <i class="fa-solid fa-house-medical"></i>

      </div>


      <div class="sidebar-brand-info">

         <div class="sidebar-brand-title">

            Klinik System

         </div>


         <div class="sidebar-brand-subtitle">

            Management System

         </div>

      </div>


      <button
         type="button"
         class="sidebar-close"
         id="sidebarClose">

         <i class="fa-solid fa-xmark"></i>

      </button>


   </div>


   <!-- =====================================================
         CLINIC
    ====================================================== -->

   <div class="clinic-box">


      <div class="clinic-icon">

         <i class="fa-solid fa-hospital"></i>

      </div>


      <div class="clinic-content">


         <div class="clinic-label">

            KLINIK

         </div>


         <div class="clinic-name">

            Klinik Sehat Sentosa

         </div>


      </div>


      <i
         class="fa-solid fa-chevron-right clinic-arrow">
      </i>


   </div>


   <!-- =====================================================
         NAVIGATION
    ====================================================== -->

   <nav class="sidebar-nav">


      <!-- =================================================
             UTAMA
        ================================================== -->

      <div class="menu-section">


         <div class="menu-title">

            UTAMA

         </div>


         <a
            href="dashboard"
            class="menu-item <?= menuActive('dashboard') ?>">


            <span class="menu-icon">

               <i class="fa-solid fa-chart-pie"></i>

            </span>


            <span class="menu-label">

               Dashboard

            </span>


         </a>


      </div>


      <!-- =================================================
             MASTER DATA
        ================================================== -->

      <div class="menu-section">


         <div class="menu-title">

            MASTER DATA

         </div>


         <!-- DATA KLINIK -->

         <a
            href="master-clinic"
            class="menu-item <?= menuActive('master-clinic') ?>">


            <span class="menu-icon">

               <i class="fa-solid fa-hospital"></i>

            </span>


            <span class="menu-label">

               Data Klinik

            </span>


         </a>


         <!-- DOKTER -->

         <a
            href="master-doctor"
            class="menu-item <?= menuActive('master-doctor') ?>">


            <span class="menu-icon">

               <i class="fa-solid fa-user-doctor"></i>

            </span>


            <span class="menu-label">

               Data Dokter

            </span>


         </a>


         <!-- TENAGA MEDIS -->

         <a
            href="master-medical-staff"
            class="menu-item <?= menuActive('master-medical-staff') ?>">


            <span class="menu-icon">

               <i class="fa-solid fa-user-nurse"></i>

            </span>


            <span class="menu-label">

               Tenaga Medis

            </span>


         </a>


         <!-- POLI / LAYANAN -->

         <a
            href="master-poli"
            class="menu-item <?= menuActive('master-poli') ?>">


            <span class="menu-icon">

               <i class="fa-solid fa-stethoscope"></i>

            </span>


            <span class="menu-label">

               Poli / Layanan

            </span>


         </a>


         <!-- OBAT -->

         <a
            href="master-medicine"
            class="menu-item <?= menuActive('master-medicine') ?>">


            <span class="menu-icon">

               <i class="fa-solid fa-pills"></i>

            </span>


            <span class="menu-label">

               Data Obat

            </span>


         </a>


         <!-- TINDAKAN -->

         <a
            href="master-action"
            class="menu-item <?= menuActive('master-action') ?>">


            <span class="menu-icon">

               <i class="fa-solid fa-syringe"></i>

            </span>


            <span class="menu-label">

               Data Tindakan

            </span>


         </a>


         <!-- TARIF -->

         <a
            href="master-tariff"
            class="menu-item <?= menuActive('master-tariff') ?>">


            <span class="menu-icon">

               <i class="fa-solid fa-money-bill-wave"></i>

            </span>


            <span class="menu-label">

               Tarif

            </span>


         </a>


      </div>


      <!-- =================================================
             PELAYANAN
        ================================================== -->

      <div class="menu-section">


         <div class="menu-title">

            PELAYANAN

         </div>


         <!-- REGISTRASI -->

         <a
            href="registration"
            class="menu-item <?= menuActive('registration') ?>">


            <span class="menu-icon">

               <i class="fa-solid fa-user-plus"></i>

            </span>


            <span class="menu-label">

               Registrasi Pasien

            </span>


            <span class="menu-badge">

               12

            </span>


         </a>


         <!-- DATA PASIEN -->

         <a
            href="patients"
            class="menu-item <?= menuActive('patients') ?>">


            <span class="menu-icon">

               <i class="fa-solid fa-users"></i>

            </span>


            <span class="menu-label">

               Data Pasien

            </span>


         </a>


         <!-- RME -->

         <a
            href="rme"
            class="menu-item <?= menuActive('rme') ?>">


            <span class="menu-icon">

               <i class="fa-solid fa-file-medical"></i>

            </span>


            <span class="menu-label">

               Pengisian RME

            </span>


         </a>


      </div>


      <!-- =================================================
             FARMASI
        ================================================== -->

      <div class="menu-section">


         <div class="menu-title">

            FARMASI

         </div>


         <!-- PERMINTAAN OBAT -->

         <a
            href="pharmacy-request"
            class="menu-item <?= menuActive('pharmacy-request') ?>">


            <span class="menu-icon">

               <i class="fa-solid fa-prescription-bottle-medical"></i>

            </span>


            <span class="menu-label">

               Permintaan Obat

            </span>


         </a>


         <!-- DISPENSING -->

         <a
            href="pharmacy-dispensing"
            class="menu-item <?= menuActive('pharmacy-dispensing') ?>">


            <span class="menu-icon">

               <i class="fa-solid fa-capsules"></i>

            </span>


            <span class="menu-label">

               Dispensing

            </span>


         </a>


         <!-- STOK -->

         <a
            href="pharmacy-stock"
            class="menu-item <?= menuActive('pharmacy-stock') ?>">


            <span class="menu-icon">

               <i class="fa-solid fa-boxes-stacked"></i>

            </span>


            <span class="menu-label">

               Stok Obat

            </span>


         </a>


      </div>


      <!-- =================================================
             KASIR
        ================================================== -->

      <div class="menu-section">


         <div class="menu-title">

            KASIR

         </div>


         <!-- TRANSAKSI -->

         <a
            href="cashier"
            class="menu-item <?= menuActive('cashier') ?>">


            <span class="menu-icon">

               <i class="fa-solid fa-cash-register"></i>

            </span>


            <span class="menu-label">

               Transaksi

            </span>


         </a>


         <!-- PEMBAYARAN -->

         <a
            href="payment"
            class="menu-item <?= menuActive('payment') ?>">


            <span class="menu-icon">

               <i class="fa-solid fa-credit-card"></i>

            </span>


            <span class="menu-label">

               Pembayaran

            </span>


         </a>


         <!-- RIWAYAT PEMBAYARAN -->

         <a
            href="payment-history"
            class="menu-item <?= menuActive('payment-history') ?>">


            <span class="menu-icon">

               <i class="fa-solid fa-clock-rotate-left"></i>

            </span>


            <span class="menu-label">

               Riwayat Pembayaran

            </span>


         </a>


      </div>


      <!-- =================================================
             LAPORAN
        ================================================== -->

      <div class="menu-section">


         <div class="menu-title">

            LAPORAN

         </div>


         <!-- LAPORAN REGISTRASI -->

         <a
            href="report-registration"
            class="menu-item <?= menuActive('report-registration') ?>">


            <span class="menu-icon">

               <i class="fa-solid fa-clipboard-list"></i>

            </span>


            <span class="menu-label">

               Laporan Registrasi

            </span>


         </a>


         <!-- LAPORAN KUNJUNGAN -->

         <a
            href="report-visit"
            class="menu-item <?= menuActive('report-visit') ?>">


            <span class="menu-icon">

               <i class="fa-solid fa-chart-line"></i>

            </span>


            <span class="menu-label">

               Laporan Kunjungan

            </span>


         </a>


         <!-- LAPORAN RME -->

         <a
            href="report-rme"
            class="menu-item <?= menuActive('report-rme') ?>">


            <span class="menu-icon">

               <i class="fa-solid fa-file-medical"></i>

            </span>


            <span class="menu-label">

               Laporan RME

            </span>


         </a>


         <!-- LAPORAN FARMASI -->

         <a
            href="report-pharmacy"
            class="menu-item <?= menuActive('report-pharmacy') ?>">


            <span class="menu-icon">

               <i class="fa-solid fa-prescription-bottle"></i>

            </span>


            <span class="menu-label">

               Laporan Farmasi

            </span>


         </a>


         <!-- LAPORAN KASIR -->

         <a
            href="report-cashier"
            class="menu-item <?= menuActive('report-cashier') ?>">


            <span class="menu-icon">

               <i class="fa-solid fa-file-invoice-dollar"></i>

            </span>


            <span class="menu-label">

               Laporan Kasir

            </span>


         </a>


         <!-- LAPORAN PENDAPATAN -->

         <a
            href="report-income"
            class="menu-item <?= menuActive('report-income') ?>">


            <span class="menu-icon">

               <i class="fa-solid fa-chart-column"></i>

            </span>


            <span class="menu-label">

               Laporan Pendapatan

            </span>


         </a>


      </div>


   </nav>


   <!-- =====================================================
         SIDEBAR FOOTER
    ====================================================== -->

   <div class="sidebar-footer">


      <a
         href="logout"
         class="menu-item logout-item">


         <span class="menu-icon">

            <i class="fa-solid fa-right-from-bracket"></i>

         </span>


         <span class="menu-label">

            Keluar

         </span>


      </a>


   </div>


</aside>


<!-- =========================================================
     OVERLAY
========================================================== -->

<div
   class="sidebar-overlay"
   id="sidebarOverlay">
</div>