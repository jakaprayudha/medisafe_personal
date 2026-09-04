<?php
http_response_code(403);

$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
?>
<!DOCTYPE html>
<html lang="id">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>403 - Akses Ditolak | Medisafe</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

   <style>
      * {
         box-sizing: border-box;
      }

      html,
      body {
         width: 100%;
         height: 100%;
         margin: 0;
         overflow: hidden;
         font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
         background: #f5f7fb;
      }

      .app {
         width: 100%;
         height: 100vh;
         display: flex;
         overflow: hidden;
      }

      /* SIDEBAR */
      .sidebar {
         position: fixed;
         left: 0;
         top: 0;
         bottom: 0;
         width: 270px;
         background: #fff;
         border-right: 1px solid #e9edf3;
         z-index: 1000;
         display: flex;
         flex-direction: column;
      }

      .brand {
         height: 72px;
         padding: 0 24px;
         display: flex;
         align-items: center;
         border-bottom: 1px solid #edf0f5;
      }

      .brand-icon {
         width: 40px;
         height: 40px;
         border-radius: 12px;
         background: #0d6efd;
         color: #fff;
         display: flex;
         align-items: center;
         justify-content: center;
         margin-right: 11px;
      }

      .brand-title {
         font-size: 18px;
         font-weight: 700;
         color: #172033;
         line-height: 1;
      }

      .brand-subtitle {
         font-size: 11px;
         color: #8b95a7;
         margin-top: 4px;
      }

      .menu {
         padding: 18px 14px;
         overflow-y: auto;
         flex: 1;
      }

      .menu-label {
         font-size: 10px;
         font-weight: 700;
         color: #a0a8b7;
         text-transform: uppercase;
         letter-spacing: .8px;
         padding: 12px 12px 7px;
      }

      .menu a {
         text-decoration: none;
         color: #626c7d;
         display: flex;
         align-items: center;
         gap: 12px;
         padding: 11px 13px;
         border-radius: 10px;
         margin-bottom: 3px;
         font-size: 14px;
         transition: .2s;
      }

      .menu a:hover {
         background: #f2f6ff;
         color: #0d6efd;
      }

      .menu a.active {
         background: #eaf2ff;
         color: #0d6efd;
         font-weight: 600;
      }

      .menu a i {
         width: 18px;
         text-align: center;
      }

      /* MAIN */
      .main {
         width: calc(100% - 270px);
         height: 100vh;
         margin-left: 270px;
         display: flex;
         flex-direction: column;
         overflow: hidden;
      }

      /* HEADER */
      .header {
         height: 72px;
         min-height: 72px;
         background: #fff;
         border-bottom: 1px solid #e9edf3;
         display: flex;
         align-items: center;
         justify-content: space-between;
         padding: 0 28px;
      }

      .header-title {
         font-size: 18px;
         font-weight: 700;
         color: #172033;
      }

      .header-subtitle {
         font-size: 12px;
         color: #8a94a6;
         margin-top: 2px;
      }

      .user-box {
         display: flex;
         align-items: center;
         gap: 10px;
      }

      .avatar {
         width: 38px;
         height: 38px;
         border-radius: 50%;
         background: #eaf2ff;
         color: #0d6efd;
         display: flex;
         align-items: center;
         justify-content: center;
      }

      .content {
         flex: 1;
         min-height: 0;
         overflow-y: auto;
         padding: 30px;
         display: flex;
         align-items: center;
         justify-content: center;
      }

      /* ERROR */
      .error-wrapper {
         width: 100%;
         max-width: 650px;
      }

      .error-card {
         background: #fff;
         border: 1px solid #e9edf3;
         border-radius: 20px;
         padding: 50px 40px;
         text-align: center;
         box-shadow: 0 10px 35px rgba(25, 42, 70, .06);
      }

      .error-icon {
         width: 100px;
         height: 100px;
         margin: 0 auto 24px;
         border-radius: 50%;
         background: #fff4e5;
         color: #f59f00;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 42px;
      }

      .error-code {
         font-size: 72px;
         line-height: 1;
         font-weight: 800;
         color: #172033;
         margin-bottom: 12px;
      }

      .error-title {
         font-size: 24px;
         font-weight: 700;
         color: #172033;
         margin-bottom: 10px;
      }

      .error-description {
         color: #7b8495;
         font-size: 14px;
         line-height: 1.7;
         max-width: 500px;
         margin: 0 auto 25px;
      }

      .url-box {
         background: #f7f8fa;
         border: 1px solid #edf0f4;
         border-radius: 10px;
         padding: 11px 14px;
         font-size: 12px;
         color: #737d8e;
         word-break: break-all;
         margin-bottom: 25px;
      }

      /* FOOTER */
      .footer {
         height: 55px;
         min-height: 55px;
         flex: 0 0 55px;
         background: #fff;
         border-top: 1px solid #e9edf3;
         display: flex;
         align-items: center;
         justify-content: space-between;
         padding: 0 28px;
         font-size: 12px;
         color: #8a94a6;
      }

      @media(max-width: 768px) {
         .sidebar {
            width: 220px;
         }

         .main {
            width: calc(100% - 220px);
            margin-left: 220px;
         }

         .content {
            padding: 20px;
         }

         .error-card {
            padding: 35px 20px;
         }

         .error-code {
            font-size: 58px;
         }
      }
   </style>
</head>

<body>

   <div class="app">

      <!-- SIDEBAR -->
      <aside class="sidebar">

         <div class="brand">
            <div class="brand-icon">
               <i class="fa-solid fa-heart-pulse"></i>
            </div>

            <div>
               <div class="brand-title">Medisafe</div>
               <div class="brand-subtitle">Clinic Management System</div>
            </div>
         </div>

         <div class="menu">

            <div class="menu-label">Main</div>

            <a href="/medisafe_personal/dashboard">
               <i class="fa-solid fa-chart-pie"></i>
               Dashboard
            </a>

            <div class="menu-label">Master</div>

            <a href="/medisafe_personal/master-clinic">
               <i class="fa-solid fa-hospital"></i>
               Klinik
            </a>

            <a href="/medisafe_personal/master-doctor">
               <i class="fa-solid fa-user-doctor"></i>
               Dokter
            </a>

            <a href="/medisafe_personal/master-poli">
               <i class="fa-solid fa-stethoscope"></i>
               Poli
            </a>

            <a href="/medisafe_personal/master-medicine">
               <i class="fa-solid fa-pills"></i>
               Obat
            </a>

            <div class="menu-label">Pelayanan</div>

            <a href="/medisafe_personal/registration">
               <i class="fa-solid fa-clipboard-list"></i>
               Pendaftaran
            </a>

            <a href="/medisafe_personal/patients">
               <i class="fa-solid fa-users"></i>
               Pasien
            </a>

            <a href="/medisafe_personal/rme">
               <i class="fa-solid fa-file-medical"></i>
               RME
            </a>

            <div class="menu-label">Farmasi</div>

            <a href="/medisafe_personal/pharmacy-request">
               <i class="fa-solid fa-prescription-bottle-medical"></i>
               Permintaan
            </a>

            <a href="/medisafe_personal/pharmacy-dispensing">
               <i class="fa-solid fa-box-open"></i>
               Dispensing
            </a>

            <a href="/medisafe_personal/pharmacy-stock">
               <i class="fa-solid fa-boxes-stacked"></i>
               Stok Obat
            </a>

            <div class="menu-label">Kasir</div>

            <a href="/medisafe_personal/cashier">
               <i class="fa-solid fa-cash-register"></i>
               Kasir
            </a>

            <a href="/medisafe_personal/payment">
               <i class="fa-solid fa-money-bill-wave"></i>
               Pembayaran
            </a>

            <a href="/medisafe_personal/payment-history">
               <i class="fa-solid fa-clock-rotate-left"></i>
               Riwayat Pembayaran
            </a>

            <div class="menu-label">Laporan</div>

            <a href="/medisafe_personal/report-rme">
               <i class="fa-solid fa-file-medical"></i>
               Laporan RME
            </a>

            <a href="/medisafe_personal/report-pharmacy">
               <i class="fa-solid fa-pills"></i>
               Laporan Farmasi
            </a>

            <a href="/medisafe_personal/report-cashier">
               <i class="fa-solid fa-cash-register"></i>
               Laporan Kasir
            </a>

            <a href="/medisafe_personal/report-income">
               <i class="fa-solid fa-chart-line"></i>
               Laporan Pendapatan
            </a>

            <div class="menu-label">System</div>

            <a href="/medisafe_personal/logout">
               <i class="fa-solid fa-right-from-bracket"></i>
               Logout
            </a>

         </div>

      </aside>


      <!-- MAIN -->
      <main class="main">

         <!-- HEADER -->
         <header class="header">

            <div>
               <div class="header-title">
                  Akses Ditolak
               </div>

               <div class="header-subtitle">
                  Medisafe Clinic Management System
               </div>
            </div>

            <div class="user-box">

               <div class="text-end d-none d-sm-block">
                  <div style="font-size:13px;font-weight:600;color:#172033;">
                     Administrator
                  </div>

                  <div style="font-size:11px;color:#8a94a6;">
                     System
                  </div>
               </div>

               <div class="avatar">
                  <i class="fa-solid fa-user-shield"></i>
               </div>

            </div>

         </header>


         <!-- CONTENT -->
         <section class="content">

            <div class="error-wrapper">

               <div class="error-card">

                  <div class="error-icon">
                     <i class="fa-solid fa-lock"></i>
                  </div>

                  <div class="error-code">
                     403
                  </div>

                  <div class="error-title">
                     Akses Ditolak
                  </div>

                  <div class="error-description">
                     Anda tidak memiliki izin untuk mengakses halaman
                     atau resource yang diminta.
                     Silakan kembali ke dashboard atau hubungi administrator
                     jika Anda membutuhkan akses.
                  </div>

                  <div class="url-box">
                     <i class="fa-solid fa-link me-2"></i>
                     <?= htmlspecialchars($requestUri, ENT_QUOTES, 'UTF-8') ?>
                  </div>

                  <div class="d-flex justify-content-center gap-2">

                     <a href="/medisafe_personal/dashboard"
                        class="btn btn-primary px-4">
                        <i class="fa-solid fa-house me-2"></i>
                        Dashboard
                     </a>

                     <button onclick="history.back()"
                        class="btn btn-light border px-4">
                        <i class="fa-solid fa-arrow-left me-2"></i>
                        Kembali
                     </button>

                  </div>

               </div>

            </div>

         </section>


         <!-- FOOTER -->
         <footer class="footer">

            <div>
               © <?= date('Y') ?> Medisafe
            </div>

            <div>
               Clinic Management System
            </div>

         </footer>

      </main>

   </div>

</body>

</html>