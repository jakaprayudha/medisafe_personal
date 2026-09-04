<?php

/**
 * 404.php
 * Page Not Found
 */
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="id">

<head>

   <meta charset="UTF-8">

   <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0">

   <title>404 - Halaman Tidak Ditemukan | Klinik Management System</title>

   <!-- Bootstrap -->
   <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet">

   <!-- Font Awesome -->
   <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

   <!-- Inter -->
   <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet">


   <style>
      * {
         box-sizing: border-box;
      }


      html,
      body {

         width: 100%;
         height: 100%;

         margin: 0;

         font-family: 'Inter', sans-serif;

         background: #f5f7fb;

         color: #1e293b;

      }


      body {

         overflow: hidden;

      }


      .app {

         width: 100%;

         height: 100vh;

         display: flex;

      }


      /* =====================================================
           SIDEBAR
        ===================================================== */

      .sidebar {

         width: 270px;

         height: 100vh;

         flex: 0 0 270px;

         background: #ffffff;

         border-right: 1px solid #e5e7eb;

         display: flex;

         flex-direction: column;

      }


      .sidebar-brand {

         height: 72px;

         min-height: 72px;

         display: flex;

         align-items: center;

         gap: 12px;

         padding: 0 22px;

         border-bottom: 1px solid #eef0f3;

      }


      .brand-icon {

         width: 40px;

         height: 40px;

         border-radius: 12px;

         display: flex;

         align-items: center;

         justify-content: center;

         background: #2563eb;

         color: #ffffff;

         font-size: 18px;

      }


      .brand-title {

         font-size: 15px;

         font-weight: 800;

         color: #172033;

      }


      .brand-subtitle {

         font-size: 10px;

         color: #94a3b8;

         margin-top: 2px;

      }


      .sidebar-menu {

         flex: 1;

         overflow-y: auto;

         padding: 18px 13px 25px;

      }


      .menu-section {

         margin-bottom: 20px;

      }


      .menu-label {

         padding: 0 11px 8px;

         font-size: 10px;

         font-weight: 800;

         color: #94a3b8;

         letter-spacing: .08em;

      }


      .menu-item {

         height: 43px;

         display: flex;

         align-items: center;

         gap: 12px;

         padding: 0 13px;

         margin-bottom: 4px;

         border-radius: 10px;

         color: #64748b;

         text-decoration: none;

         font-size: 13px;

         font-weight: 500;

         transition: all .2s ease;

      }


      .menu-item i {

         width: 19px;

         text-align: center;

         font-size: 15px;

      }


      .menu-item:hover {

         background: #f1f5f9;

         color: #2563eb;

      }


      .menu-item.active {

         background: #eff6ff;

         color: #2563eb;

         font-weight: 700;

      }


      /* =====================================================
           MAIN
        ===================================================== */

      .main {

         flex: 1;

         min-width: 0;

         height: 100vh;

         display: flex;

         flex-direction: column;

      }


      /* =====================================================
           HEADER
        ===================================================== */

      .header {

         height: 72px;

         min-height: 72px;

         flex: 0 0 72px;

         background: #ffffff;

         border-bottom: 1px solid #e5e7eb;

         display: flex;

         align-items: center;

         justify-content: space-between;

         padding: 0 28px;

      }


      .page-title {

         font-size: 18px;

         font-weight: 800;

         color: #172033;

         margin: 0;

      }


      .page-subtitle {

         font-size: 12px;

         color: #94a3b8;

         margin-top: 3px;

      }


      .header-right {

         display: flex;

         align-items: center;

         gap: 15px;

      }


      .header-date {

         font-size: 12px;

         color: #64748b;

      }


      .user-profile {

         display: flex;

         align-items: center;

         gap: 10px;

         padding-left: 15px;

         border-left: 1px solid #e5e7eb;

      }


      .user-avatar {

         width: 37px;

         height: 37px;

         border-radius: 50%;

         background: #dbeafe;

         color: #2563eb;

         display: flex;

         align-items: center;

         justify-content: center;

         font-size: 12px;

         font-weight: 800;

      }


      .user-name {

         font-size: 12px;

         font-weight: 700;

         color: #334155;

      }


      .user-role {

         font-size: 10px;

         color: #94a3b8;

      }


      /* =====================================================
           CONTENT
        ===================================================== */

      .content {

         flex: 1;

         min-height: 0;

         overflow: auto;

         display: flex;

         align-items: center;

         justify-content: center;

         padding: 30px;

      }


      /* =====================================================
           404 CARD
        ===================================================== */

      .error-wrapper {

         width: 100%;

         max-width: 650px;

         text-align: center;

      }


      .error-card {

         background: #ffffff;

         border: 1px solid #e8ebf0;

         border-radius: 20px;

         padding: 48px 45px;

         box-shadow:
            0 10px 35px rgba(15, 23, 42, .05);

      }


      .error-icon {

         width: 92px;

         height: 92px;

         margin: 0 auto 25px;

         border-radius: 50%;

         display: flex;

         align-items: center;

         justify-content: center;

         background: #eff6ff;

         color: #2563eb;

         font-size: 38px;

      }


      .error-code {

         font-size: 78px;

         line-height: 1;

         font-weight: 800;

         letter-spacing: -4px;

         color: #2563eb;

         margin-bottom: 10px;

      }


      .error-title {

         font-size: 21px;

         font-weight: 800;

         color: #172033;

         margin-bottom: 10px;

      }


      .error-description {

         max-width: 470px;

         margin: 0 auto;

         font-size: 13px;

         line-height: 1.7;

         color: #64748b;

      }


      .error-actions {

         display: flex;

         justify-content: center;

         gap: 10px;

         margin-top: 28px;

      }


      .btn-home {

         height: 42px;

         padding: 0 20px;

         display: inline-flex;

         align-items: center;

         justify-content: center;

         gap: 8px;

         border-radius: 9px;

         background: #2563eb;

         color: #ffffff;

         border: 1px solid #2563eb;

         text-decoration: none;

         font-size: 12px;

         font-weight: 700;

         transition: .2s;

      }


      .btn-home:hover {

         background: #1d4ed8;

         color: #ffffff;

      }


      .btn-back {

         height: 42px;

         padding: 0 20px;

         display: inline-flex;

         align-items: center;

         justify-content: center;

         gap: 8px;

         border-radius: 9px;

         background: #ffffff;

         color: #475569;

         border: 1px solid #e2e8f0;

         text-decoration: none;

         font-size: 12px;

         font-weight: 700;

         transition: .2s;

      }


      .btn-back:hover {

         background: #f8fafc;

         color: #2563eb;

      }


      .error-url {

         margin-top: 25px;

         padding-top: 18px;

         border-top: 1px solid #f1f5f9;

         font-size: 10px;

         color: #94a3b8;

         word-break: break-all;

      }


      .error-url span {

         color: #64748b;

         font-weight: 600;

      }


      /* =====================================================
           FOOTER
        ===================================================== */

      .footer {

         height: 55px;

         min-height: 55px;

         flex: 0 0 55px;

         background: #ffffff;

         border-top: 1px solid #e5e7eb;

         display: flex;

         align-items: center;

         justify-content: space-between;

         padding: 0 28px;

         font-size: 10px;

         color: #94a3b8;

      }


      /* =====================================================
           RESPONSIVE
        ===================================================== */

      @media (max-width: 1100px) {

         .sidebar {

            width: 230px;

            flex-basis: 230px;

         }

      }


      @media (max-width: 768px) {

         .sidebar {

            display: none;

         }


         .header {

            padding: 0 18px;

         }


         .header-date {

            display: none;

         }


         .content {

            padding: 20px;

         }


         .error-card {

            padding: 38px 25px;

         }


         .error-code {

            font-size: 65px;

         }


         .error-title {

            font-size: 18px;

         }


         .error-actions {

            flex-direction: column;

         }


         .btn-home,
         .btn-back {

            width: 100%;

         }


         .footer {

            padding: 0 18px;

         }

      }
   </style>

</head>


<body>


   <div class="app">


      <!-- =====================================================
         SIDEBAR
    ===================================================== -->

      <aside class="sidebar">


         <div class="sidebar-brand">


            <div class="brand-icon">

               <i class="fa-solid fa-house-medical"></i>

            </div>


            <div>

               <div class="brand-title">
                  Klinik System
               </div>

               <div class="brand-subtitle">
                  Management System
               </div>

            </div>


         </div>


         <div class="sidebar-menu">


            <!-- UTAMA -->

            <div class="menu-section">

               <div class="menu-label">
                  UTAMA
               </div>


               <a
                  href="dashboard"
                  class="menu-item">

                  <i class="fa-solid fa-chart-pie"></i>

                  <span>
                     Dashboard
                  </span>

               </a>

            </div>


            <!-- MASTER -->

            <div class="menu-section">

               <div class="menu-label">
                  MASTER DATA
               </div>


               <a
                  href="master-clinic"
                  class="menu-item">

                  <i class="fa-solid fa-hospital"></i>

                  <span>
                     Data Klinik
                  </span>

               </a>


               <a
                  href="master-doctor"
                  class="menu-item">

                  <i class="fa-solid fa-user-doctor"></i>

                  <span>
                     Data Dokter
                  </span>

               </a>


               <a
                  href="master-medical-staff"
                  class="menu-item">

                  <i class="fa-solid fa-user-nurse"></i>

                  <span>
                     Tenaga Medis
                  </span>

               </a>


               <a
                  href="master-poli"
                  class="menu-item">

                  <i class="fa-solid fa-stethoscope"></i>

                  <span>
                     Poli / Layanan
                  </span>

               </a>


               <a
                  href="master-medicine"
                  class="menu-item">

                  <i class="fa-solid fa-pills"></i>

                  <span>
                     Data Obat
                  </span>

               </a>


               <a
                  href="master-action"
                  class="menu-item">

                  <i class="fa-solid fa-syringe"></i>

                  <span>
                     Data Tindakan
                  </span>

               </a>


               <a
                  href="master-tariff"
                  class="menu-item">

                  <i class="fa-solid fa-tags"></i>

                  <span>
                     Tarif
                  </span>

               </a>

            </div>


            <!-- PELAYANAN -->

            <div class="menu-section">

               <div class="menu-label">
                  PELAYANAN
               </div>


               <a
                  href="registration"
                  class="menu-item">

                  <i class="fa-solid fa-user-plus"></i>

                  <span>
                     Registrasi Pasien
                  </span>

               </a>


               <a
                  href="patients"
                  class="menu-item">

                  <i class="fa-solid fa-users"></i>

                  <span>
                     Data Pasien
                  </span>

               </a>


               <a
                  href="rme"
                  class="menu-item">

                  <i class="fa-solid fa-file-medical"></i>

                  <span>
                     Pengisian RME
                  </span>

               </a>

            </div>


            <!-- FARMASI -->

            <div class="menu-section">

               <div class="menu-label">
                  FARMASI
               </div>


               <a
                  href="pharmacy-request"
                  class="menu-item">

                  <i class="fa-solid fa-file-prescription"></i>

                  <span>
                     Permintaan Obat
                  </span>

               </a>


               <a
                  href="pharmacy-dispensing"
                  class="menu-item">

                  <i class="fa-solid fa-mortar-pestle"></i>

                  <span>
                     Dispensing
                  </span>

               </a>


               <a
                  href="pharmacy-stock"
                  class="menu-item">

                  <i class="fa-solid fa-boxes-stacked"></i>

                  <span>
                     Stok Obat
                  </span>

               </a>

            </div>


            <!-- KASIR -->

            <div class="menu-section">

               <div class="menu-label">
                  KASIR
               </div>


               <a
                  href="cashier"
                  class="menu-item">

                  <i class="fa-solid fa-cash-register"></i>

                  <span>
                     Transaksi
                  </span>

               </a>


               <a
                  href="payment"
                  class="menu-item">

                  <i class="fa-solid fa-money-check-dollar"></i>

                  <span>
                     Pembayaran
                  </span>

               </a>


               <a
                  href="payment-history"
                  class="menu-item">

                  <i class="fa-solid fa-clock-rotate-left"></i>

                  <span>
                     Riwayat Pembayaran
                  </span>

               </a>

            </div>


            <!-- LAPORAN -->

            <div class="menu-section">

               <div class="menu-label">
                  LAPORAN
               </div>


               <a
                  href="report-registration"
                  class="menu-item">

                  <i class="fa-solid fa-clipboard-list"></i>

                  <span>
                     Laporan Registrasi
                  </span>

               </a>


               <a
                  href="report-visit"
                  class="menu-item">

                  <i class="fa-solid fa-chart-line"></i>

                  <span>
                     Laporan Kunjungan
                  </span>

               </a>


               <a
                  href="report-rme"
                  class="menu-item">

                  <i class="fa-solid fa-file-medical"></i>

                  <span>
                     Laporan RME
                  </span>

               </a>


               <a
                  href="report-pharmacy"
                  class="menu-item">

                  <i class="fa-solid fa-pills"></i>

                  <span>
                     Laporan Farmasi
                  </span>

               </a>


               <a
                  href="report-cashier"
                  class="menu-item">

                  <i class="fa-solid fa-cash-register"></i>

                  <span>
                     Laporan Kasir
                  </span>

               </a>


               <a
                  href="report-income"
                  class="menu-item">

                  <i class="fa-solid fa-money-bill-trend-up"></i>

                  <span>
                     Laporan Pendapatan
                  </span>

               </a>

            </div>


            <!-- LOGOUT -->

            <div class="menu-section">

               <a
                  href="logout"
                  class="menu-item">

                  <i class="fa-solid fa-right-from-bracket"></i>

                  <span>
                     Logout
                  </span>

               </a>

            </div>


         </div>

      </aside>


      <!-- =====================================================
         MAIN
    ===================================================== -->

      <main class="main">


         <!-- HEADER -->

         <header class="header">


            <div>

               <h1 class="page-title">
                  Halaman Tidak Ditemukan
               </h1>

               <div class="page-subtitle">
                  Klinik Management System
               </div>

            </div>


            <div class="header-right">


               <div class="header-date">

                  <i class="fa-regular fa-calendar me-1"></i>

                  <?= date('d F Y'); ?>

               </div>


               <div class="user-profile">


                  <div class="user-avatar">
                     AD
                  </div>


                  <div>

                     <div class="user-name">
                        Administrator
                     </div>

                     <div class="user-role">
                        Administrator
                     </div>

                  </div>


               </div>

            </div>

         </header>


         <!-- =================================================
             CONTENT
        ================================================== -->

         <div class="content">


            <div class="error-wrapper">


               <div class="error-card">


                  <div class="error-icon">

                     <i class="fa-solid fa-triangle-exclamation"></i>

                  </div>


                  <div class="error-code">
                     404
                  </div>


                  <div class="error-title">
                     Halaman Tidak Ditemukan
                  </div>


                  <p class="error-description">

                     Maaf, halaman yang Anda cari tidak tersedia
                     atau alamat yang Anda masukkan tidak benar.
                     Silakan kembali ke halaman utama atau
                     gunakan menu yang tersedia.

                  </p>


                  <div class="error-actions">


                     <a
                        href="dashboard"
                        class="btn-home">

                        <i class="fa-solid fa-house"></i>

                        Kembali ke Dashboard

                     </a>


                     <a
                        href="javascript:history.back()"
                        class="btn-back">

                        <i class="fa-solid fa-arrow-left"></i>

                        Halaman Sebelumnya

                     </a>


                  </div>


                  <div class="error-url">

                     URL yang diminta:

                     <span>
                        <?= htmlspecialchars(
                           $_SERVER['REQUEST_URI'] ?? '/',
                           ENT_QUOTES,
                           'UTF-8'
                        ); ?>
                     </span>

                  </div>


               </div>


            </div>


         </div>


         <!-- FOOTER -->

         <footer class="footer">

            <div>
               © <?= date('Y'); ?> Klinik Management System
            </div>

            <div>
               Error 404
            </div>

         </footer>


      </main>


   </div>


</body>

</html>