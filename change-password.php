<?php

/**
 * =========================================================
 * CHANGE-PASSWORD.PHP
 * Medisafe - Clinic Management System
 * =========================================================
 */

session_start();

/*
|--------------------------------------------------------------------------
| AUTHENTICATION
|--------------------------------------------------------------------------
| Pastikan user sudah login.
|--------------------------------------------------------------------------
*/

if (!isset($_SESSION['user_id'])) {
   header('Location: /medisafe_personal/login');
   exit;
}


/*
|--------------------------------------------------------------------------
| USER DATA
|--------------------------------------------------------------------------
*/

$userName = $_SESSION['user_name'] ?? 'Administrator';
$userRole = $_SESSION['user_role'] ?? 'Administrator';

$userInitial = strtoupper(substr($userName, 0, 1));


/*
|--------------------------------------------------------------------------
| PAGE DATA
|--------------------------------------------------------------------------
*/

$pageTitle = 'Ubah Password';
$pageSubtitle = 'Kelola keamanan akun dan password pengguna';


/*
|--------------------------------------------------------------------------
| MESSAGE
|--------------------------------------------------------------------------
*/

$successMessage = '';
$errorMessage = '';


/*
|--------------------------------------------------------------------------
| HANDLE FORM
|--------------------------------------------------------------------------
|
| CATATAN:
| Bagian database di bawah sengaja dibuat sebagai placeholder.
| Hubungkan dengan koneksi database Medisafe Anda.
|
|--------------------------------------------------------------------------
*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

   $currentPassword = $_POST['current_password'] ?? '';
   $newPassword = $_POST['new_password'] ?? '';
   $confirmPassword = $_POST['confirm_password'] ?? '';


   /*
    |--------------------------------------------------------------------------
    | VALIDASI DASAR
    |--------------------------------------------------------------------------
    */

   if (
      $currentPassword === '' ||
      $newPassword === '' ||
      $confirmPassword === ''
   ) {

      $errorMessage = 'Semua field password wajib diisi.';
   }


   /*
    |--------------------------------------------------------------------------
    | PASSWORD BARU
    |--------------------------------------------------------------------------
    */ elseif (strlen($newPassword) < 8) {

      $errorMessage =
         'Password baru minimal terdiri dari 8 karakter.';
   }


   /*
    |--------------------------------------------------------------------------
    | PASSWORD CONFIRMATION
    |--------------------------------------------------------------------------
    */ elseif ($newPassword !== $confirmPassword) {

      $errorMessage =
         'Konfirmasi password tidak sama dengan password baru.';
   }


   /*
    |--------------------------------------------------------------------------
    | PASSWORD LAMA DAN BARU
    |--------------------------------------------------------------------------
    */ elseif ($currentPassword === $newPassword) {

      $errorMessage =
         'Password baru tidak boleh sama dengan password lama.';
   }


   /*
    |--------------------------------------------------------------------------
    | DATABASE
    |--------------------------------------------------------------------------
    |
    | Contoh implementasi production:
    |
    | require_once __DIR__ . '/config/database.php';
    |
    | $stmt = $pdo->prepare("
    |     SELECT password
    |     FROM users
    |     WHERE id = ?
    |     LIMIT 1
    | ");
    |
    | $stmt->execute([$_SESSION['user_id']]);
    |
    | $user = $stmt->fetch(PDO::FETCH_ASSOC);
    |
    | if (!$user || !password_verify($currentPassword, $user['password'])) {
    |     $errorMessage = 'Password saat ini tidak benar.';
    | }
    |
    | $passwordHash = password_hash(
    |     $newPassword,
    |     PASSWORD_DEFAULT
    | );
    |
    | UPDATE users SET password = ? WHERE id = ?
    |
    |--------------------------------------------------------------------------
    */ else {

      /*
        |--------------------------------------------------------------------------
        | DEMO MODE
        |--------------------------------------------------------------------------
        |
        | Untuk sekarang kita anggap proses berhasil.
        | Nanti bagian ini diganti dengan query database.
        |
        */

      $successMessage =
         'Password berhasil diperbarui.';
   }
}


/*
|--------------------------------------------------------------------------
| CURRENT PAGE
|--------------------------------------------------------------------------
*/

$currentPage = basename(
   parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

$currentPage = trim($currentPage, '/');

$currentPage = basename($currentPage);


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

<!DOCTYPE html>
<html lang="id">

<head>

   <meta charset="UTF-8">

   <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0">

   <title>
      Ubah Password | Medisafe
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
           HEADER
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
           PROFILE
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
           DROPDOWN
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
           PASSWORD LAYOUT
           ===================================================== */

      .password-layout {

         max-width: 950px;

         display: grid;

         grid-template-columns: 1.25fr .75fr;

         gap: 22px;

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
           PASSWORD CARD
           ===================================================== */

      .password-card {

         padding: 28px;

      }


      .card-title {

         font-size: 15px;

         font-weight: 700;

         color: #172033;

      }


      .card-description {

         font-size: 11px;

         color: #8b95a5;

         margin-top: 4px;

         margin-bottom: 24px;

      }


      /* =====================================================
           FORM
           ===================================================== */

      .form-group {

         margin-bottom: 20px;

      }


      .form-label-custom {

         display: block;

         font-size: 12px;

         font-weight: 600;

         color: #394456;

         margin-bottom: 7px;

      }


      .password-wrapper {

         position: relative;

      }


      .password-input {

         height: 45px;

         border: 1px solid #dfe4eb;

         border-radius: 10px;

         padding: 0 45px 0 13px;

         font-size: 13px;

         color: #394456;

         width: 100%;

         outline: none;

         transition: .2s;

      }


      .password-input:focus {

         border-color: #86b7fe;

         box-shadow:
            0 0 0 3px rgba(13, 110, 253, .08);

      }


      .password-toggle {

         position: absolute;

         top: 50%;
         right: 13px;

         transform: translateY(-50%);

         border: 0;

         background: transparent;

         color: #8993a3;

         cursor: pointer;

         padding: 4px;

      }


      .password-toggle:hover {

         color: #0d6efd;

      }


      .password-help {

         font-size: 10px;

         color: #929baa;

         margin-top: 6px;

      }


      /* =====================================================
           STRENGTH
           ===================================================== */

      .strength-container {

         margin-top: 9px;

      }


      .strength-bars {

         display: flex;

         gap: 4px;

      }


      .strength-bar {

         height: 4px;

         flex: 1;

         background: #e9edf3;

         border-radius: 5px;

         transition: .2s;

      }


      .strength-label {

         font-size: 10px;

         color: #8d96a6;

         margin-top: 5px;

      }


      /* =====================================================
           REQUIREMENTS
           ===================================================== */

      .password-requirements {

         background: #f8f9fb;

         border: 1px solid #edf0f4;

         border-radius: 11px;

         padding: 14px;

         margin-top: 5px;

         margin-bottom: 22px;

      }


      .requirements-title {

         font-size: 11px;

         font-weight: 700;

         color: #566174;

         margin-bottom: 9px;

      }


      .requirement {

         display: flex;

         align-items: center;

         gap: 7px;

         font-size: 10px;

         color: #8b95a5;

         margin-bottom: 6px;

      }


      .requirement:last-child {

         margin-bottom: 0;

      }


      .requirement i {

         font-size: 9px;

      }


      .requirement.valid {

         color: #198754;

      }


      .requirement.valid i {

         color: #198754;

      }


      /* =====================================================
           BUTTON
           ===================================================== */

      .form-actions {

         display: flex;

         align-items: center;

         justify-content: flex-end;

         gap: 8px;

         padding-top: 5px;

      }


      .btn-custom {

         border-radius: 9px;

         font-size: 12px;

         font-weight: 600;

         padding: 9px 15px;

      }


      /* =====================================================
           SECURITY INFO
           ===================================================== */

      .security-card {

         padding: 25px;

         height: fit-content;

      }


      .security-header {

         display: flex;

         align-items: center;

         gap: 11px;

         margin-bottom: 22px;

      }


      .security-main-icon {

         width: 40px;
         height: 40px;

         border-radius: 11px;

         background: #eaf2ff;

         color: #0d6efd;

         display: flex;

         align-items: center;

         justify-content: center;

      }


      .security-info-title {

         font-size: 14px;

         font-weight: 700;

         color: #172033;

      }


      .security-info-subtitle {

         font-size: 10px;

         color: #8d96a6;

         margin-top: 2px;

      }


      .security-tip {

         display: flex;

         gap: 10px;

         padding: 12px 0;

         border-bottom: 1px solid #edf0f4;

      }


      .security-tip:last-child {

         border-bottom: 0;

      }


      .security-tip-icon {

         width: 30px;
         height: 30px;

         min-width: 30px;

         border-radius: 8px;

         background: #f5f7fa;

         color: #687386;

         display: flex;

         align-items: center;

         justify-content: center;

         font-size: 11px;

      }


      .security-tip-title {

         font-size: 11px;

         font-weight: 600;

         color: #4b5668;

      }


      .security-tip-text {

         font-size: 10px;

         line-height: 1.6;

         color: #929baa;

         margin-top: 2px;

      }


      /* =====================================================
           ALERT
           ===================================================== */

      .custom-alert {

         max-width: 950px;

         border-radius: 11px;

         border: 1px solid;

         padding: 12px 15px;

         display: flex;

         align-items: center;

         gap: 10px;

         font-size: 12px;

         margin-bottom: 20px;

      }


      .custom-alert.success {

         background: #effaf4;

         border-color: #c9eedb;

         color: #198754;

      }


      .custom-alert.error {

         background: #fff2f2;

         border-color: #f4cccc;

         color: #dc3545;

      }


      .custom-alert i {

         font-size: 15px;

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

         .password-layout {

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


         .password-card,
         .security-card {

            padding: 20px;

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

      <aside
         class="sidebar"
         id="sidebar">


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


            <a
               href="/medisafe_personal/change-password"
               class="<?= menuActive('change-password') ?>">

               <i class="fa-solid fa-key"></i>

               <span>
                  Ubah Password
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


            <!-- MOBILE -->

            <button
               type="button"
               class="mobile-menu"
               id="mobileMenu">

               <i class="fa-solid fa-bars"></i>

            </button>


            <!-- TITLE -->

            <div class="header-title-wrapper">

               <div class="header-title">
                  Ubah Password
               </div>

               <div class="header-subtitle">
                  Kelola keamanan akun Anda
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


                  <!-- DROPDOWN -->

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
                  Ubah Password
               </div>

               <div class="page-description">
                  Perbarui password akun untuk menjaga keamanan akses Medisafe.
               </div>

            </div>


            <!-- =================================================
                 ALERT SUCCESS
                 ================================================= -->

            <?php if ($successMessage): ?>

               <div class="custom-alert success">

                  <i class="fa-solid fa-circle-check"></i>

                  <div>
                     <?= htmlspecialchars($successMessage) ?>
                  </div>

               </div>

            <?php endif; ?>


            <!-- =================================================
                 ALERT ERROR
                 ================================================= -->

            <?php if ($errorMessage): ?>

               <div class="custom-alert error">

                  <i class="fa-solid fa-circle-exclamation"></i>

                  <div>
                     <?= htmlspecialchars($errorMessage) ?>
                  </div>

               </div>

            <?php endif; ?>


            <!-- =================================================
                 PASSWORD LAYOUT
                 ================================================= -->

            <div class="password-layout">


               <!-- =================================================
                     PASSWORD FORM
                     ================================================= -->

               <div class="card-custom password-card">


                  <div class="card-title">
                     Perbarui Password
                  </div>


                  <div class="card-description">
                     Masukkan password saat ini dan password baru Anda.
                  </div>


                  <form
                     method="POST"
                     action=""
                     autocomplete="off"
                     id="changePasswordForm">


                     <!-- =========================================
                             CURRENT PASSWORD
                             ========================================= -->

                     <div class="form-group">

                        <label
                           for="currentPassword"
                           class="form-label-custom">

                           Password Saat Ini

                        </label>


                        <div class="password-wrapper">

                           <input
                              type="password"
                              id="currentPassword"
                              name="current_password"
                              class="password-input"
                              placeholder="Masukkan password saat ini"
                              autocomplete="current-password"
                              required>


                           <button
                              type="button"
                              class="password-toggle"
                              data-target="currentPassword"
                              title="Tampilkan password">

                              <i class="fa-regular fa-eye"></i>

                           </button>

                        </div>


                        <div class="password-help">

                           Masukkan password yang sedang digunakan.

                        </div>

                     </div>


                     <!-- =========================================
                             NEW PASSWORD
                             ========================================= -->

                     <div class="form-group">

                        <label
                           for="newPassword"
                           class="form-label-custom">

                           Password Baru

                        </label>


                        <div class="password-wrapper">

                           <input
                              type="password"
                              id="newPassword"
                              name="new_password"
                              class="password-input"
                              placeholder="Masukkan password baru"
                              autocomplete="new-password"
                              required>


                           <button
                              type="button"
                              class="password-toggle"
                              data-target="newPassword"
                              title="Tampilkan password">

                              <i class="fa-regular fa-eye"></i>

                           </button>

                        </div>


                        <!-- STRENGTH -->

                        <div class="strength-container">

                           <div class="strength-bars">

                              <div
                                 class="strength-bar"
                                 id="strength1"></div>

                              <div
                                 class="strength-bar"
                                 id="strength2"></div>

                              <div
                                 class="strength-bar"
                                 id="strength3"></div>

                              <div
                                 class="strength-bar"
                                 id="strength4"></div>

                           </div>


                           <div
                              class="strength-label"
                              id="strengthLabel">

                              Masukkan password baru

                           </div>

                        </div>

                     </div>


                     <!-- =========================================
                             CONFIRM PASSWORD
                             ========================================= -->

                     <div class="form-group">

                        <label
                           for="confirmPassword"
                           class="form-label-custom">

                           Konfirmasi Password Baru

                        </label>


                        <div class="password-wrapper">

                           <input
                              type="password"
                              id="confirmPassword"
                              name="confirm_password"
                              class="password-input"
                              placeholder="Ulangi password baru"
                              autocomplete="new-password"
                              required>


                           <button
                              type="button"
                              class="password-toggle"
                              data-target="confirmPassword"
                              title="Tampilkan password">

                              <i class="fa-regular fa-eye"></i>

                           </button>

                        </div>


                        <div
                           class="password-help"
                           id="matchMessage">

                           Ulangi password baru dengan benar.

                        </div>

                     </div>


                     <!-- =========================================
                             REQUIREMENTS
                             ========================================= -->

                     <div class="password-requirements">


                        <div class="requirements-title">

                           Persyaratan Password

                        </div>


                        <div
                           class="requirement"
                           id="reqLength">

                           <i class="fa-solid fa-circle"></i>

                           Minimal 8 karakter

                        </div>


                        <div
                           class="requirement"
                           id="reqUpper">

                           <i class="fa-solid fa-circle"></i>

                           Minimal 1 huruf besar

                        </div>


                        <div
                           class="requirement"
                           id="reqLower">

                           <i class="fa-solid fa-circle"></i>

                           Minimal 1 huruf kecil

                        </div>


                        <div
                           class="requirement"
                           id="reqNumber">

                           <i class="fa-solid fa-circle"></i>

                           Minimal 1 angka

                        </div>


                     </div>


                     <!-- =========================================
                             ACTION
                             ========================================= -->

                     <div class="form-actions">


                        <a
                           href="/medisafe_personal/profile"
                           class="btn btn-light border btn-custom">

                           Batal

                        </a>


                        <button
                           type="submit"
                           class="btn btn-primary btn-custom">

                           <i class="fa-solid fa-key me-1"></i>

                           Ubah Password

                        </button>


                     </div>


                  </form>

               </div>


               <!-- =================================================
                     SECURITY INFORMATION
                     ================================================= -->

               <div class="card-custom security-card">


                  <div class="security-header">


                     <div class="security-main-icon">

                        <i class="fa-solid fa-shield-halved"></i>

                     </div>


                     <div>

                        <div class="security-info-title">

                           Keamanan Akun

                        </div>


                        <div class="security-info-subtitle">

                           Tips menjaga akun tetap aman

                        </div>

                     </div>


                  </div>


                  <!-- TIP 1 -->

                  <div class="security-tip">


                     <div class="security-tip-icon">

                        <i class="fa-solid fa-key"></i>

                     </div>


                     <div>

                        <div class="security-tip-title">

                           Gunakan password kuat

                        </div>


                        <div class="security-tip-text">

                           Gunakan kombinasi huruf besar,
                           huruf kecil, angka, dan karakter
                           khusus.

                        </div>

                     </div>


                  </div>


                  <!-- TIP 2 -->

                  <div class="security-tip">


                     <div class="security-tip-icon">

                        <i class="fa-solid fa-user-shield"></i>

                     </div>


                     <div>

                        <div class="security-tip-title">

                           Jangan berbagi password

                        </div>


                        <div class="security-tip-text">

                           Password merupakan informasi pribadi
                           dan tidak boleh diberikan kepada
                           pengguna lain.

                        </div>

                     </div>


                  </div>


                  <!-- TIP 3 -->

                  <div class="security-tip">


                     <div class="security-tip-icon">

                        <i class="fa-solid fa-rotate"></i>

                     </div>


                     <div>

                        <div class="security-tip-title">

                           Ganti secara berkala

                        </div>


                        <div class="security-tip-text">

                           Perbarui password secara berkala,
                           terutama jika terdapat indikasi
                           akses yang tidak dikenal.

                        </div>

                     </div>


                  </div>


                  <!-- TIP 4 -->

                  <div class="security-tip">


                     <div class="security-tip-icon">

                        <i class="fa-solid fa-right-from-bracket"></i>

                     </div>


                     <div>

                        <div class="security-tip-title">

                           Logout setelah selesai

                        </div>


                        <div class="security-tip-text">

                           Selalu logout terutama ketika
                           menggunakan komputer bersama.

                        </div>

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
     BOOTSTRAP JS
     ========================================================= -->

   <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
   </script>


   <script>
      /*
|--------------------------------------------------------------------------
| MOBILE MENU
|--------------------------------------------------------------------------
*/

      const mobileMenu =
         document.getElementById('mobileMenu');

      const sidebar =
         document.getElementById('sidebar');


      if (mobileMenu && sidebar) {

         mobileMenu.addEventListener(
            'click',
            function() {

               sidebar.classList.toggle('show');

            }
         );

      }


      /*
      |--------------------------------------------------------------------------
      | SHOW / HIDE PASSWORD
      |--------------------------------------------------------------------------
      */

      document
         .querySelectorAll('.password-toggle')
         .forEach(function(button) {

            button.addEventListener(
               'click',
               function() {

                  const targetId =
                     this.getAttribute('data-target');

                  const input =
                     document.getElementById(targetId);

                  const icon =
                     this.querySelector('i');


                  if (input.type === 'password') {

                     input.type = 'text';

                     icon.classList.remove(
                        'fa-eye'
                     );

                     icon.classList.add(
                        'fa-eye-slash'
                     );

                     this.title =
                        'Sembunyikan password';

                  } else {

                     input.type = 'password';

                     icon.classList.remove(
                        'fa-eye-slash'
                     );

                     icon.classList.add(
                        'fa-eye'
                     );

                     this.title =
                        'Tampilkan password';

                  }

               }
            );

         });


      /*
      |--------------------------------------------------------------------------
      | PASSWORD STRENGTH
      |--------------------------------------------------------------------------
      */

      const newPassword =
         document.getElementById('newPassword');

      const strengthBars = [

         document.getElementById('strength1'),

         document.getElementById('strength2'),

         document.getElementById('strength3'),

         document.getElementById('strength4')

      ];

      const strengthLabel =
         document.getElementById('strengthLabel');


      function updateStrength(password) {

         let score = 0;


         if (password.length >= 8) {
            score++;
         }


         if (/[A-Z]/.test(password)) {
            score++;
         }


         if (/[a-z]/.test(password)) {
            score++;
         }


         if (/[0-9]/.test(password)) {
            score++;
         }


         if (/[^A-Za-z0-9]/.test(password)) {
            score++;
         }


         strengthBars.forEach(function(bar) {

            bar.style.background =
               '#e9edf3';

         });


         if (!password) {

            strengthLabel.textContent =
               'Masukkan password baru';

            return;

         }


         if (score <= 2) {

            for (let i = 0; i < 1; i++) {

               strengthBars[i].style.background =
                  '#dc3545';

            }

            strengthLabel.textContent =
               'Password lemah';

         } else if (score === 3) {

            for (let i = 0; i < 2; i++) {

               strengthBars[i].style.background =
                  '#ffc107';

            }

            strengthLabel.textContent =
               'Password cukup';

         } else if (score === 4) {

            for (let i = 0; i < 3; i++) {

               strengthBars[i].style.background =
                  '#0d6efd';

            }

            strengthLabel.textContent =
               'Password kuat';

         } else {

            for (let i = 0; i < 4; i++) {

               strengthBars[i].style.background =
                  '#198754';

            }

            strengthLabel.textContent =
               'Password sangat kuat';

         }

      }


      /*
      |--------------------------------------------------------------------------
      | PASSWORD REQUIREMENTS
      |--------------------------------------------------------------------------
      */

      function updateRequirement(
         elementId,
         valid
      ) {

         const element =
            document.getElementById(elementId);

         if (!element) {
            return;
         }


         const icon =
            element.querySelector('i');


         if (valid) {

            element.classList.add('valid');

            icon.classList.remove(
               'fa-circle'
            );

            icon.classList.add(
               'fa-circle-check'
            );

         } else {

            element.classList.remove('valid');

            icon.classList.remove(
               'fa-circle-check'
            );

            icon.classList.add(
               'fa-circle'
            );

         }

      }


      function validatePassword(password) {

         updateRequirement(
            'reqLength',
            password.length >= 8
         );


         updateRequirement(
            'reqUpper',
            /[A-Z]/.test(password)
         );


         updateRequirement(
            'reqLower',
            /[a-z]/.test(password)
         );


         updateRequirement(
            'reqNumber',
            /[0-9]/.test(password)
         );

      }


      /*
      |--------------------------------------------------------------------------
      | PASSWORD INPUT EVENT
      |--------------------------------------------------------------------------
      */

      if (newPassword) {

         newPassword.addEventListener(
            'input',
            function() {

               updateStrength(
                  this.value
               );

               validatePassword(
                  this.value
               );

               checkPasswordMatch();

            }
         );

      }


      /*
      |--------------------------------------------------------------------------
      | PASSWORD MATCH
      |--------------------------------------------------------------------------
      */

      const confirmPassword =
         document.getElementById('confirmPassword');

      const matchMessage =
         document.getElementById('matchMessage');


      function checkPasswordMatch() {

         if (!confirmPassword.value) {

            matchMessage.textContent =
               'Ulangi password baru dengan benar.';

            matchMessage.style.color =
               '#929baa';

            return false;

         }


         if (
            newPassword.value ===
            confirmPassword.value
         ) {

            matchMessage.innerHTML =
               '<i class="fa-solid fa-circle-check me-1"></i>' +
               'Password cocok.';

            matchMessage.style.color =
               '#198754';

            return true;

         }


         matchMessage.innerHTML =
            '<i class="fa-solid fa-circle-xmark me-1"></i>' +
            'Password tidak cocok.';

         matchMessage.style.color =
            '#dc3545';

         return false;

      }


      if (confirmPassword) {

         confirmPassword.addEventListener(
            'input',
            checkPasswordMatch
         );

      }


      /*
      |--------------------------------------------------------------------------
      | FORM VALIDATION
      |--------------------------------------------------------------------------
      */

      const form =
         document.getElementById(
            'changePasswordForm'
         );


      if (form) {

         form.addEventListener(
            'submit',
            function(event) {

               const password =
                  newPassword.value;

               const confirmation =
                  confirmPassword.value;


               if (password.length < 8) {

                  event.preventDefault();

                  alert(
                     'Password baru minimal 8 karakter.'
                  );

                  newPassword.focus();

                  return;

               }


               if (!/[A-Z]/.test(password)) {

                  event.preventDefault();

                  alert(
                     'Password harus memiliki minimal 1 huruf besar.'
                  );

                  newPassword.focus();

                  return;

               }


               if (!/[a-z]/.test(password)) {

                  event.preventDefault();

                  alert(
                     'Password harus memiliki minimal 1 huruf kecil.'
                  );

                  newPassword.focus();

                  return;

               }


               if (!/[0-9]/.test(password)) {

                  event.preventDefault();

                  alert(
                     'Password harus memiliki minimal 1 angka.'
                  );

                  newPassword.focus();

                  return;

               }


               if (password !== confirmation) {

                  event.preventDefault();

                  alert(
                     'Konfirmasi password tidak sama.'
                  );

                  confirmPassword.focus();

                  return;

               }

            }
         );

      }
   </script>


</body>

</html>