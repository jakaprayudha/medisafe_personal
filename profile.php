<?php

/**
 * =========================================================
 * PROFILE.PHP
 * Medisafe - Clinic Management System
 * =========================================================
 */

session_start();

/*
|--------------------------------------------------------------------------
| DATA USER
|--------------------------------------------------------------------------
| Sementara menggunakan session + fallback dummy.
| Nanti bisa diganti dengan query:
| SELECT * FROM users WHERE id = $_SESSION['user_id']
|--------------------------------------------------------------------------
*/

$userName = $_SESSION['user_name'] ?? 'Administrator';
$userRole = $_SESSION['user_role'] ?? 'Administrator';
$userEmail = $_SESSION['user_email'] ?? 'administrator@medisafe.local';
$userPhone = $_SESSION['user_phone'] ?? '0812-3456-7890';
$userUsername = $_SESSION['username'] ?? 'administrator';
$userStatus = 'Aktif';

$userInitial = strtoupper(substr($userName, 0, 1));

$currentPage = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$currentPage = trim($currentPage, '/');
$currentPage = basename($currentPage);

function menuActive(string|array $pages): string
{
   global $currentPage;

   $pages = is_array($pages) ? $pages : [$pages];

   return in_array($currentPage, $pages, true)
      ? 'active'
      : '';
}
?>

<!DOCTYPE html>
<html lang="id">

<head>

   <meta charset="UTF-8">

   <meta name="viewport"
      content="width=device-width, initial-scale=1.0">

   <title>
      Profil Saya | Medisafe
   </title>


   <!-- =====================================================
         BOOTSTRAP
         ===================================================== -->

   <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet">


   <!-- =====================================================
         FONT AWESOME
         ===================================================== -->

   <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      rel="stylesheet">


   <!-- =====================================================
         GOOGLE FONT
         ===================================================== -->

   <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet">


   <style>
      /* =====================================================
           GLOBAL
           ===================================================== */

      * {
         box-sizing: border-box;
      }


      html,
      body {

         width: 100%;
         height: 100%;

         margin: 0;

         overflow: hidden;

         font-family:
            'Inter',
            -apple-system,
            BlinkMacSystemFont,
            'Segoe UI',
            sans-serif;

         background: #f5f7fb;

         color: #172033;

      }


      /* =====================================================
           APP
           ===================================================== */

      .app {

         width: 100%;
         height: 100vh;

         overflow: hidden;

      }


      /* =====================================================
           SIDEBAR
           ===================================================== */

      .sidebar {

         position: fixed;

         left: 0;
         top: 0;
         bottom: 0;

         width: 270px;
         height: 100vh;

         background: #ffffff;

         border-right: 1px solid #e9edf3;

         z-index: 1000;

         display: flex;

         flex-direction: column;

      }


      /* =====================================================
           BRAND
           ===================================================== */

      .brand {

         height: 72px;
         min-height: 72px;

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

         color: #ffffff;

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


      /* =====================================================
           MENU
           ===================================================== */

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


      /* =====================================================
           MAIN
           ===================================================== */

      .main {

         width: calc(100% - 270px);

         height: 100vh;

         margin-left: 270px;

         display: flex;

         flex-direction: column;

         overflow: hidden;

      }


      /* =====================================================
           TOP HEADER
           ===================================================== */

      .top-header {

         height: 72px;

         min-height: 72px;

         background: #ffffff;

         border-bottom: 1px solid #e9edf3;

         display: flex;

         align-items: center;

         padding: 0 28px;

      }


      .mobile-menu {

         display: none;

         border: 0;

         background: transparent;

         font-size: 20px;

         margin-right: 15px;

      }


      .header-title-wrapper {

         flex: 1;

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


      .header-actions {

         display: flex;

         align-items: center;

         gap: 8px;

      }


      .header-button {

         width: 38px;
         height: 38px;

         border: 0;

         background: transparent;

         border-radius: 10px;

         display: flex;

         align-items: center;

         justify-content: center;

         color: #687386;

         position: relative;

         transition: .2s;

      }


      .header-button:hover {

         background: #f3f6fb;

         color: #0d6efd;

      }


      .notification-dot {

         position: absolute;

         top: 7px;
         right: 7px;

         width: 7px;
         height: 7px;

         background: #dc3545;

         border: 2px solid #ffffff;

         border-radius: 50%;

      }


      .header-divider {

         width: 1px;

         height: 30px;

         background: #e9edf3;

         margin: 0 10px;

      }


      /* =====================================================
           PROFILE HEADER
           ===================================================== */

      .profile {

         position: relative;

      }


      .profile-trigger {

         border: 0;

         background: transparent;

         padding: 5px 0;

         display: flex;

         align-items: center;

         gap: 10px;

         cursor: pointer;

      }


      .profile-trigger:focus {

         outline: none;

         box-shadow: none;

      }


      .profile-avatar {

         width: 38px;
         height: 38px;

         min-width: 38px;

         border-radius: 50%;

         background: #eaf2ff;

         color: #0d6efd;

         display: flex;

         align-items: center;

         justify-content: center;

         font-size: 14px;

         font-weight: 700;

      }


      .profile-info {

         text-align: left;

         min-width: 110px;

      }


      .profile-name {

         font-size: 13px;

         font-weight: 700;

         color: #172033;

      }


      .profile-role {

         font-size: 11px;

         color: #8a94a6;

         margin-top: 2px;

      }


      .profile-arrow {

         font-size: 10px;

         color: #8a94a6;

         transition: transform .2s ease;

      }


      .profile-trigger[aria-expanded="true"] .profile-arrow {

         transform: rotate(180deg);

      }


      /* =====================================================
           PROFILE DROPDOWN
           ===================================================== */

      .profile-menu {

         width: 245px;

         margin-top: 10px !important;

         padding: 8px;

         border: 1px solid #e9edf3;

         border-radius: 14px;

         box-shadow:
            0 12px 35px rgba(23, 32, 51, .12);

      }


      .profile-menu-header {

         display: flex;

         align-items: center;

         gap: 11px;

         padding: 10px;

      }


      .profile-menu-avatar {

         width: 42px;
         height: 42px;

         border-radius: 50%;

         background: #eaf2ff;

         color: #0d6efd;

         display: flex;

         align-items: center;

         justify-content: center;

         font-weight: 700;

      }


      .profile-menu-name {

         font-size: 13px;

         font-weight: 700;

      }


      .profile-menu-role {

         font-size: 11px;

         color: #8a94a6;

         margin-top: 3px;

      }


      .profile-menu .dropdown-item {

         display: flex;

         align-items: center;

         gap: 11px;

         padding: 10px 11px;

         border-radius: 9px;

         font-size: 13px;

         color: #5f697a;

      }


      .profile-menu .dropdown-item i {

         width: 18px;

         text-align: center;

      }


      .profile-menu .dropdown-item:hover {

         background: #f3f6fb;

         color: #0d6efd;

      }


      .profile-menu .logout-item {

         color: #dc3545;

      }


      .profile-menu .logout-item:hover {

         background: #fff1f1;

         color: #dc3545;

      }


      /* =====================================================
           CONTENT
           ===================================================== */

      .content {

         flex: 1;

         min-height: 0;

         overflow-y: auto;

         overflow-x: hidden;

         padding: 30px;

      }


      /* =====================================================
           PAGE HEADER
           ===================================================== */

      .page-header {

         margin-bottom: 24px;

      }


      .page-title {

         font-size: 24px;

         font-weight: 700;

         margin-bottom: 5px;

      }


      .page-description {

         font-size: 13px;

         color: #7d8798;

      }


      /* =====================================================
           PROFILE GRID
           ===================================================== */

      .profile-grid {

         display: grid;

         grid-template-columns: 300px minmax(0, 1fr);

         gap: 22px;

         max-width: 1100px;

      }


      /* =====================================================
           CARD
           ===================================================== */

      .card-custom {

         background: #ffffff;

         border: 1px solid #e9edf3;

         border-radius: 16px;

         box-shadow:
            0 5px 20px rgba(25, 42, 70, .035);

      }


      /* =====================================================
           PROFILE SUMMARY
           ===================================================== */

      .profile-summary {

         padding: 30px 25px;

         text-align: center;

      }


      .profile-large-avatar {

         width: 100px;
         height: 100px;

         border-radius: 50%;

         background: #eaf2ff;

         color: #0d6efd;

         display: flex;

         align-items: center;

         justify-content: center;

         margin: 0 auto 18px;

         font-size: 34px;

         font-weight: 700;

      }


      .profile-summary-name {

         font-size: 18px;

         font-weight: 700;

         color: #172033;

      }


      .profile-summary-role {

         font-size: 12px;

         color: #7e8898;

         margin-top: 5px;

      }


      .status-badge {

         display: inline-flex;

         align-items: center;

         gap: 6px;

         margin-top: 14px;

         padding: 6px 11px;

         border-radius: 20px;

         background: #eaf8f0;

         color: #198754;

         font-size: 11px;

         font-weight: 600;

      }


      .status-dot {

         width: 6px;
         height: 6px;

         background: #198754;

         border-radius: 50%;

      }


      .summary-divider {

         height: 1px;

         background: #edf0f4;

         margin: 24px 0;

      }


      .summary-item {

         display: flex;

         align-items: center;

         gap: 12px;

         text-align: left;

         margin-bottom: 17px;

      }


      .summary-item:last-child {

         margin-bottom: 0;

      }


      .summary-icon {

         width: 34px;
         height: 34px;

         border-radius: 9px;

         background: #f3f6fb;

         color: #697588;

         display: flex;

         align-items: center;

         justify-content: center;

         font-size: 13px;

      }


      .summary-label {

         font-size: 10px;

         color: #939cab;

         margin-bottom: 2px;

      }


      .summary-value {

         font-size: 12px;

         color: #394456;

         font-weight: 500;

         word-break: break-word;

      }


      /* =====================================================
           INFORMATION CARD
           ===================================================== */

      .info-card {

         padding: 25px;

      }


      .card-header-custom {

         display: flex;

         align-items: center;

         justify-content: space-between;

         padding-bottom: 18px;

         margin-bottom: 20px;

         border-bottom: 1px solid #edf0f4;

      }


      .card-title {

         font-size: 15px;

         font-weight: 700;

         color: #172033;

      }


      .card-subtitle {

         font-size: 11px;

         color: #9099a8;

         margin-top: 3px;

      }


      .btn-edit {

         display: inline-flex;

         align-items: center;

         gap: 7px;

         border: 1px solid #dce5f2;

         background: #ffffff;

         color: #0d6efd;

         border-radius: 9px;

         padding: 8px 12px;

         font-size: 12px;

         font-weight: 600;

         text-decoration: none;

         transition: .2s;

      }


      .btn-edit:hover {

         background: #eaf2ff;

         color: #0d6efd;

      }


      /* =====================================================
           INFO ROW
           ===================================================== */

      .info-grid {

         display: grid;

         grid-template-columns: repeat(2, minmax(0, 1fr));

         gap: 20px;

      }


      .info-item {

         padding: 14px;

         background: #f8f9fb;

         border: 1px solid #edf0f4;

         border-radius: 11px;

      }


      .info-label {

         font-size: 10px;

         color: #8d96a6;

         margin-bottom: 6px;

      }


      .info-value {

         font-size: 13px;

         font-weight: 600;

         color: #394456;

         word-break: break-word;

      }


      /* =====================================================
           SECURITY CARD
           ===================================================== */

      .security-card {

         margin-top: 22px;

         padding: 25px;

      }


      .security-item {

         display: flex;

         align-items: center;

         justify-content: space-between;

         padding: 15px 0;

         border-bottom: 1px solid #edf0f4;

      }


      .security-item:first-child {

         padding-top: 0;

      }


      .security-item:last-child {

         border-bottom: 0;

         padding-bottom: 0;

      }


      .security-left {

         display: flex;

         align-items: center;

         gap: 13px;

      }


      .security-icon {

         width: 38px;
         height: 38px;

         border-radius: 10px;

         background: #f3f6fb;

         color: #647187;

         display: flex;

         align-items: center;

         justify-content: center;

      }


      .security-title {

         font-size: 13px;

         font-weight: 600;

         color: #394456;

      }


      .security-description {

         font-size: 11px;

         color: #8d96a6;

         margin-top: 3px;

      }


      .security-link {

         font-size: 12px;

         font-weight: 600;

         color: #0d6efd;

         text-decoration: none;

         padding: 7px 10px;

         border-radius: 8px;

      }


      .security-link:hover {

         background: #eaf2ff;

      }


      /* =====================================================
           FOOTER
           ===================================================== */

      .footer {

         height: 55px;

         min-height: 55px;

         flex: 0 0 55px;

         background: #ffffff;

         border-top: 1px solid #e9edf3;

         display: flex;

         align-items: center;

         justify-content: space-between;

         padding: 0 28px;

         font-size: 12px;

         color: #8a94a6;

      }


      /* =====================================================
           RESPONSIVE
           ===================================================== */

      @media (max-width: 992px) {

         .profile-grid {

            grid-template-columns: 1fr;

         }

      }


      @media (max-width: 768px) {

         .sidebar {

            transform: translateX(-100%);

            transition: transform .25s ease;

         }


         .sidebar.show {

            transform: translateX(0);

         }


         .main {

            width: 100%;

            margin-left: 0;

         }


         .mobile-menu {

            display: block;

         }


         .profile-info,
         .profile-arrow {

            display: none;

         }


         .content {

            padding: 20px;

         }


         .info-grid {

            grid-template-columns: 1fr;

         }


         .footer {

            padding: 0 20px;

         }

      }


      @media (max-width: 576px) {

         .top-header {

            padding: 0 18px;

         }


         .header-button {

            display: none;

         }


         .header-divider {

            display: none;

         }


         .profile-grid {

            gap: 15px;

         }


         .page-title {

            font-size: 21px;

         }

      }
   </style>

</head>


<body>


   <div class="app">


      <!-- =====================================================
         SIDEBAR
         ===================================================== -->

      <aside class="sidebar" id="sidebar">


         <!-- BRAND -->

         <div class="brand">

            <div class="brand-icon">

               <i class="fa-solid fa-heart-pulse"></i>

            </div>


            <div>

               <div class="brand-title">
                  Medisafe
               </div>

               <div class="brand-subtitle">
                  Clinic Management System
               </div>

            </div>

         </div>


         <!-- MENU -->

         <div class="menu">


            <!-- MAIN -->

            <div class="menu-label">
               Main
            </div>


            <a
               href="/medisafe_personal/dashboard"
               class="<?= menuActive('dashboard') ?>">

               <i class="fa-solid fa-chart-pie"></i>

               <span>
                  Dashboard
               </span>

            </a>


            <!-- MASTER -->

            <div class="menu-label">
               Master
            </div>


            <a
               href="/medisafe_personal/master-clinic"
               class="<?= menuActive('master-clinic') ?>">

               <i class="fa-solid fa-hospital"></i>

               <span>
                  Klinik
               </span>

            </a>


            <a
               href="/medisafe_personal/master-doctor"
               class="<?= menuActive('master-doctor') ?>">

               <i class="fa-solid fa-user-doctor"></i>

               <span>
                  Dokter
               </span>

            </a>


            <a
               href="/medisafe_personal/master-poli"
               class="<?= menuActive('master-poli') ?>">

               <i class="fa-solid fa-stethoscope"></i>

               <span>
                  Poli
               </span>

            </a>


            <a
               href="/medisafe_personal/master-medicine"
               class="<?= menuActive('master-medicine') ?>">

               <i class="fa-solid fa-pills"></i>

               <span>
                  Obat
               </span>

            </a>


            <!-- PELAYANAN -->

            <div class="menu-label">
               Pelayanan
            </div>


            <a
               href="/medisafe_personal/registration"
               class="<?= menuActive('registration') ?>">

               <i class="fa-solid fa-clipboard-list"></i>

               <span>
                  Pendaftaran
               </span>

            </a>


            <a
               href="/medisafe_personal/patients"
               class="<?= menuActive('patients') ?>">

               <i class="fa-solid fa-users"></i>

               <span>
                  Pasien
               </span>

            </a>


            <a
               href="/medisafe_personal/rme"
               class="<?= menuActive('rme') ?>">

               <i class="fa-solid fa-file-medical"></i>

               <span>
                  RME
               </span>

            </a>


            <!-- FARMASI -->

            <div class="menu-label">
               Farmasi
            </div>


            <a
               href="/medisafe_personal/pharmacy-request"
               class="<?= menuActive('pharmacy-request') ?>">

               <i class="fa-solid fa-prescription-bottle-medical"></i>

               <span>
                  Permintaan
               </span>

            </a>


            <a
               href="/medisafe_personal/pharmacy-dispensing"
               class="<?= menuActive('pharmacy-dispensing') ?>">

               <i class="fa-solid fa-box-open"></i>

               <span>
                  Dispensing
               </span>

            </a>


            <a
               href="/medisafe_personal/pharmacy-stock"
               class="<?= menuActive('pharmacy-stock') ?>">

               <i class="fa-solid fa-boxes-stacked"></i>

               <span>
                  Stok Obat
               </span>

            </a>


            <!-- KASIR -->

            <div class="menu-label">
               Kasir
            </div>


            <a
               href="/medisafe_personal/cashier"
               class="<?= menuActive('cashier') ?>">

               <i class="fa-solid fa-cash-register"></i>

               <span>
                  Kasir
               </span>

            </a>


            <a
               href="/medisafe_personal/payment"
               class="<?= menuActive('payment') ?>">

               <i class="fa-solid fa-money-bill-wave"></i>

               <span>
                  Pembayaran
               </span>

            </a>


            <a
               href="/medisafe_personal/payment-history"
               class="<?= menuActive('payment-history') ?>">

               <i class="fa-solid fa-clock-rotate-left"></i>

               <span>
                  Riwayat Pembayaran
               </span>

            </a>


            <!-- LAPORAN -->

            <div class="menu-label">
               Laporan
            </div>


            <a
               href="/medisafe_personal/report-rme"
               class="<?= menuActive('report-rme') ?>">

               <i class="fa-solid fa-file-medical"></i>

               <span>
                  Laporan RME
               </span>

            </a>


            <a
               href="/medisafe_personal/report-pharmacy"
               class="<?= menuActive('report-pharmacy') ?>">

               <i class="fa-solid fa-pills"></i>

               <span>
                  Laporan Farmasi
               </span>

            </a>


            <a
               href="/medisafe_personal/report-cashier"
               class="<?= menuActive('report-cashier') ?>">

               <i class="fa-solid fa-cash-register"></i>

               <span>
                  Laporan Kasir
               </span>

            </a>


            <a
               href="/medisafe_personal/report-income"
               class="<?= menuActive('report-income') ?>">

               <i class="fa-solid fa-chart-line"></i>

               <span>
                  Laporan Pendapatan
               </span>

            </a>


            <!-- SYSTEM -->

            <div class="menu-label">
               System
            </div>


            <a
               href="/medisafe_personal/profile"
               class="<?= menuActive('profile') ?>">

               <i class="fa-regular fa-user"></i>

               <span>
                  Profil Saya
               </span>

            </a>


            <a href="/medisafe_personal/logout">

               <i class="fa-solid fa-right-from-bracket"></i>

               <span>
                  Logout
               </span>

            </a>


         </div>

      </aside>


      <!-- =====================================================
         MAIN
         ===================================================== -->

      <main class="main">


         <!-- =================================================
             HEADER
             ================================================= -->

         <header class="top-header">


            <!-- Mobile -->

            <button
               type="button"
               class="mobile-menu"
               id="mobileMenu">

               <i class="fa-solid fa-bars"></i>

            </button>


            <!-- TITLE -->

            <div class="header-title-wrapper">

               <div class="header-title">
                  Profil Saya
               </div>

               <div class="header-subtitle">
                  Informasi akun dan profil pengguna
               </div>

            </div>


            <!-- ACTIONS -->

            <div class="header-actions">


               <!-- SEARCH -->

               <button
                  type="button"
                  class="header-button"
                  title="Pencarian">

                  <i class="fa-solid fa-magnifying-glass"></i>

               </button>


               <!-- NOTIFICATION -->

               <button
                  type="button"
                  class="header-button"
                  title="Notifikasi">

                  <i class="fa-regular fa-bell"></i>

                  <span class="notification-dot"></span>

               </button>


               <div class="header-divider"></div>


               <!-- PROFILE -->

               <div class="profile dropdown">


                  <button
                     type="button"
                     class="profile-trigger"
                     data-bs-toggle="dropdown"
                     aria-expanded="false">


                     <div class="profile-avatar">
                        <?= htmlspecialchars($userInitial) ?>
                     </div>


                     <div class="profile-info">

                        <div class="profile-name">
                           <?= htmlspecialchars($userName) ?>
                        </div>

                        <div class="profile-role">
                           <?= htmlspecialchars($userRole) ?>
                        </div>

                     </div>


                     <i class="fa-solid fa-chevron-down profile-arrow"></i>


                  </button>


                  <!-- PROFILE DROPDOWN -->

                  <div class="dropdown-menu dropdown-menu-end profile-menu">


                     <div class="profile-menu-header">

                        <div class="profile-menu-avatar">
                           <?= htmlspecialchars($userInitial) ?>
                        </div>


                        <div>

                           <div class="profile-menu-name">
                              <?= htmlspecialchars($userName) ?>
                           </div>

                           <div class="profile-menu-role">
                              <?= htmlspecialchars($userRole) ?>
                           </div>

                        </div>

                     </div>


                     <div class="dropdown-divider"></div>


                     <a
                        href="/medisafe_personal/profile"
                        class="dropdown-item">

                        <i class="fa-regular fa-user"></i>

                        <span>
                           Profil Saya
                        </span>

                     </a>


                     <a
                        href="/medisafe_personal/change-password"
                        class="dropdown-item">

                        <i class="fa-solid fa-key"></i>

                        <span>
                           Ubah Password
                        </span>

                     </a>


                     <div class="dropdown-divider"></div>


                     <a
                        href="/medisafe_personal/logout"
                        class="dropdown-item logout-item">

                        <i class="fa-solid fa-right-from-bracket"></i>

                        <span>
                           Logout
                        </span>

                     </a>


                  </div>

               </div>

            </div>

         </header>


         <!-- =================================================
             CONTENT
             ================================================= -->

         <section class="content">


            <!-- PAGE HEADER -->

            <div class="page-header">

               <div class="page-title">
                  Profil Saya
               </div>

               <div class="page-description">
                  Kelola informasi akun dan keamanan pengguna Anda.
               </div>

            </div>


            <!-- PROFILE GRID -->

            <div class="profile-grid">


               <!-- =============================================
                     LEFT PROFILE SUMMARY
                     ============================================= -->

               <div class="card-custom profile-summary">


                  <div class="profile-large-avatar">
                     <?= htmlspecialchars($userInitial) ?>
                  </div>


                  <div class="profile-summary-name">

                     <?= htmlspecialchars($userName) ?>

                  </div>


                  <div class="profile-summary-role">

                     <?= htmlspecialchars($userRole) ?>

                  </div>


                  <div class="status-badge">

                     <span class="status-dot"></span>

                     <?= htmlspecialchars($userStatus) ?>

                  </div>


                  <div class="summary-divider"></div>


                  <!-- Username -->

                  <div class="summary-item">

                     <div class="summary-icon">

                        <i class="fa-solid fa-at"></i>

                     </div>


                     <div>

                        <div class="summary-label">
                           Username
                        </div>

                        <div class="summary-value">
                           <?= htmlspecialchars($userUsername) ?>
                        </div>

                     </div>

                  </div>


                  <!-- Email -->

                  <div class="summary-item">

                     <div class="summary-icon">

                        <i class="fa-regular fa-envelope"></i>

                     </div>


                     <div>

                        <div class="summary-label">
                           Email
                        </div>

                        <div class="summary-value">
                           <?= htmlspecialchars($userEmail) ?>
                        </div>

                     </div>

                  </div>


                  <!-- Phone -->

                  <div class="summary-item">

                     <div class="summary-icon">

                        <i class="fa-solid fa-phone"></i>

                     </div>


                     <div>

                        <div class="summary-label">
                           Nomor Telepon
                        </div>

                        <div class="summary-value">
                           <?= htmlspecialchars($userPhone) ?>
                        </div>

                     </div>

                  </div>


               </div>


               <!-- =============================================
                     RIGHT CONTENT
                     ============================================= -->

               <div>


                  <!-- =========================================
                         ACCOUNT INFORMATION
                         ========================================= -->

                  <div class="card-custom info-card">


                     <div class="card-header-custom">

                        <div>

                           <div class="card-title">
                              Informasi Akun
                           </div>

                           <div class="card-subtitle">
                              Informasi dasar akun pengguna
                           </div>

                        </div>


                        <a
                           href="#"
                           class="btn-edit"
                           data-bs-toggle="modal"
                           data-bs-target="#editProfileModal">

                           <i class="fa-solid fa-pen"></i>

                           Edit Profil

                        </a>

                     </div>


                     <div class="info-grid">


                        <!-- Nama -->

                        <div class="info-item">

                           <div class="info-label">
                              Nama Lengkap
                           </div>

                           <div class="info-value">
                              <?= htmlspecialchars($userName) ?>
                           </div>

                        </div>


                        <!-- Username -->

                        <div class="info-item">

                           <div class="info-label">
                              Username
                           </div>

                           <div class="info-value">
                              <?= htmlspecialchars($userUsername) ?>
                           </div>

                        </div>


                        <!-- Email -->

                        <div class="info-item">

                           <div class="info-label">
                              Email
                           </div>

                           <div class="info-value">
                              <?= htmlspecialchars($userEmail) ?>
                           </div>

                        </div>


                        <!-- Phone -->

                        <div class="info-item">

                           <div class="info-label">
                              Nomor Telepon
                           </div>

                           <div class="info-value">
                              <?= htmlspecialchars($userPhone) ?>
                           </div>

                        </div>


                        <!-- Role -->

                        <div class="info-item">

                           <div class="info-label">
                              Role / Hak Akses
                           </div>

                           <div class="info-value">
                              <?= htmlspecialchars($userRole) ?>
                           </div>

                        </div>


                        <!-- Status -->

                        <div class="info-item">

                           <div class="info-label">
                              Status Akun
                           </div>

                           <div class="info-value"
                              style="color:#198754;">

                              <i class="fa-solid fa-circle"
                                 style="font-size:7px;margin-right:5px;"></i>

                              <?= htmlspecialchars($userStatus) ?>

                           </div>

                        </div>


                     </div>

                  </div>


                  <!-- =========================================
                         SECURITY
                         ========================================= -->

                  <div class="card-custom security-card">


                     <div class="card-header-custom">

                        <div>

                           <div class="card-title">
                              Keamanan Akun
                           </div>

                           <div class="card-subtitle">
                              Kelola keamanan dan akses akun
                           </div>

                        </div>

                     </div>


                     <!-- PASSWORD -->

                     <div class="security-item">


                        <div class="security-left">

                           <div class="security-icon">

                              <i class="fa-solid fa-key"></i>

                           </div>


                           <div>

                              <div class="security-title">
                                 Password
                              </div>

                              <div class="security-description">
                                 Ubah password secara berkala untuk menjaga keamanan akun.
                              </div>

                           </div>

                        </div>


                        <a
                           href="/medisafe_personal/change-password"
                           class="security-link">

                           Ubah Password

                        </a>


                     </div>


                     <!-- SESSION -->

                     <div class="security-item">


                        <div class="security-left">

                           <div class="security-icon">

                              <i class="fa-solid fa-shield-halved"></i>

                           </div>


                           <div>

                              <div class="security-title">
                                 Status Session
                              </div>

                              <div class="security-description">
                                 Akun sedang digunakan pada session aktif.
                              </div>

                           </div>

                        </div>


                        <span
                           style="
                                    font-size:11px;
                                    font-weight:600;
                                    color:#198754;
                                ">

                           <i class="fa-solid fa-circle"
                              style="font-size:6px;margin-right:5px;"></i>

                           Aktif

                        </span>


                     </div>


                     <!-- LOGOUT -->

                     <div class="security-item">


                        <div class="security-left">

                           <div
                              class="security-icon"
                              style="
                                        background:#fff1f1;
                                        color:#dc3545;
                                    ">

                              <i class="fa-solid fa-right-from-bracket"></i>

                           </div>


                           <div>

                              <div class="security-title">
                                 Keluar dari Sistem
                              </div>

                              <div class="security-description">
                                 Akhiri session dan keluar dari akun Medisafe.
                              </div>

                           </div>

                        </div>


                        <a
                           href="/medisafe_personal/logout"
                           class="security-link"
                           style="color:#dc3545;">

                           Logout

                        </a>


                     </div>


                  </div>

               </div>

            </div>


         </section>


         <!-- =================================================
             FOOTER
             ================================================= -->

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


   <!-- =========================================================
     EDIT PROFILE MODAL
     ========================================================= -->

   <div
      class="modal fade"
      id="editProfileModal"
      tabindex="-1"
      aria-hidden="true">


      <div class="modal-dialog modal-dialog-centered">

         <div class="modal-content"
            style="
                border:0;
                border-radius:16px;
                overflow:hidden;
             ">


            <div class="modal-header">

               <div>

                  <h5
                     class="modal-title"
                     style="
                            font-size:16px;
                            font-weight:700;
                        ">

                     Edit Profil

                  </h5>

                  <div
                     style="
                            font-size:11px;
                            color:#8a94a6;
                            margin-top:3px;
                        ">

                     Perbarui informasi profil Anda.

                  </div>

               </div>


               <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal">
               </button>

            </div>


            <form
               method="POST"
               action="#">


               <div class="modal-body">


                  <!-- NAME -->

                  <div class="mb-3">

                     <label
                        class="form-label"
                        style="font-size:12px;font-weight:600;">

                        Nama Lengkap

                     </label>


                     <input
                        type="text"
                        name="name"
                        class="form-control"
                        value="<?= htmlspecialchars($userName) ?>"
                        required>

                  </div>


                  <!-- EMAIL -->

                  <div class="mb-3">

                     <label
                        class="form-label"
                        style="font-size:12px;font-weight:600;">

                        Email

                     </label>


                     <input
                        type="email"
                        name="email"
                        class="form-control"
                        value="<?= htmlspecialchars($userEmail) ?>"
                        required>

                  </div>


                  <!-- PHONE -->

                  <div class="mb-3">

                     <label
                        class="form-label"
                        style="font-size:12px;font-weight:600;">

                        Nomor Telepon

                     </label>


                     <input
                        type="text"
                        name="phone"
                        class="form-control"
                        value="<?= htmlspecialchars($userPhone) ?>">

                  </div>


                  <!-- USERNAME READONLY -->

                  <div>

                     <label
                        class="form-label"
                        style="font-size:12px;font-weight:600;">

                        Username

                     </label>


                     <input
                        type="text"
                        class="form-control"
                        value="<?= htmlspecialchars($userUsername) ?>"
                        readonly>

                  </div>


               </div>


               <div class="modal-footer">

                  <button
                     type="button"
                     class="btn btn-light border"
                     data-bs-dismiss="modal">

                     Batal

                  </button>


                  <button
                     type="submit"
                     class="btn btn-primary">

                     <i class="fa-solid fa-floppy-disk me-1"></i>

                     Simpan Perubahan

                  </button>

               </div>


            </form>

         </div>

      </div>

   </div>


   <!-- =========================================================
     BOOTSTRAP JS
     ========================================================= -->

   <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
   </script>


   <script>
      /* =========================================================
       MOBILE SIDEBAR
       ========================================================= */

      const mobileMenu =
         document.getElementById('mobileMenu');

      const sidebar =
         document.getElementById('sidebar');


      if (mobileMenu && sidebar) {

         mobileMenu.addEventListener('click', function() {

            sidebar.classList.toggle('show');

         });

      }
   </script>


</body>

</html>