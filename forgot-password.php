<!DOCTYPE html>
<html lang="id">

<head>

   <meta charset="UTF-8">

   <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0">

   <meta
      name="description"
      content="Reset Password - Klinik Management System">

   <title>Reset Password | Klinik Management System</title>


   <!-- =========================================================
        GOOGLE FONT
   ========================================================== -->

   <link
      rel="preconnect"
      href="https://fonts.googleapis.com">

   <link
      rel="preconnect"
      href="https://fonts.gstatic.com"
      crossorigin>

   <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet">


   <!-- =========================================================
        BOOTSTRAP
   ========================================================== -->

   <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet">


   <!-- =========================================================
        FONT AWESOME
   ========================================================== -->

   <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


   <!-- =========================================================
        CUSTOM CSS
   ========================================================== -->

   <style>
      /* =====================================================
           ROOT
      ====================================================== */

      :root {

         --primary: #2563eb;
         --primary-dark: #1d4ed8;
         --primary-soft: #eff6ff;

         --dark: #0f172a;
         --dark-soft: #1e293b;

         --text: #334155;
         --muted: #64748b;

         --border: #e2e8f0;
         --background: #f8fafc;
         --white: #ffffff;

         --success: #16a34a;
         --danger: #dc2626;

         --radius-lg: 28px;
         --radius-md: 14px;

         --shadow:
            0 25px 60px rgba(15, 23, 42, 0.10);

      }


      /* =====================================================
           RESET
      ====================================================== */

      * {

         margin: 0;
         padding: 0;

         box-sizing: border-box;

      }


      html {

         scroll-behavior: smooth;

      }


      body {

         min-height: 100vh;

         font-family:
            'Inter',
            -apple-system,
            BlinkMacSystemFont,
            'Segoe UI',
            sans-serif;

         background:

            radial-gradient(circle at 10% 20%,
               rgba(37, 99, 235, 0.08),
               transparent 30%),

            radial-gradient(circle at 90% 80%,
               rgba(14, 165, 233, 0.07),
               transparent 30%),

            var(--background);

         color: var(--text);

         -webkit-font-smoothing: antialiased;

      }


      /* =====================================================
           PAGE
      ====================================================== */

      .login-page {

         min-height: 100vh;

         display: flex;

         align-items: center;

         justify-content: center;

         padding: 30px;

      }


      /* =====================================================
           LOGIN CARD
      ====================================================== */

      .login-card {

         width: 100%;

         max-width: 1180px;

         min-height: 680px;

         display: grid;

         grid-template-columns: 1.05fr 0.95fr;

         background: var(--white);

         border-radius: var(--radius-lg);

         overflow: hidden;

         box-shadow: var(--shadow);

         border:
            1px solid rgba(226, 232, 240, 0.8);

         animation:
            cardEnter 0.7s ease forwards;

      }


      @keyframes cardEnter {

         from {

            opacity: 0;

            transform:
               translateY(20px) scale(0.98);

         }

         to {

            opacity: 1;

            transform:
               translateY(0) scale(1);

         }

      }


      /* =====================================================
           LEFT PANEL
      ====================================================== */

      .brand-panel {

         position: relative;

         overflow: hidden;

         padding: 55px;

         color: var(--white);

         background:

            radial-gradient(circle at 15% 15%,
               rgba(255, 255, 255, 0.14),
               transparent 28%),

            radial-gradient(circle at 85% 85%,
               rgba(255, 255, 255, 0.10),
               transparent 30%),

            linear-gradient(145deg,
               #1d4ed8 0%,
               #2563eb 48%,
               #0ea5e9 100%);

         display: flex;

         flex-direction: column;

         justify-content: space-between;

      }


      /* =====================================================
           DECORATIVE CIRCLES
      ====================================================== */

      .circle {

         position: absolute;

         border-radius: 50%;

         pointer-events: none;

      }


      .circle-one {

         width: 330px;

         height: 330px;

         right: -170px;

         top: -150px;

         border:
            1px solid rgba(255, 255, 255, 0.15);

      }


      .circle-two {

         width: 500px;

         height: 500px;

         left: -300px;

         bottom: -300px;

         border:
            1px solid rgba(255, 255, 255, 0.10);

      }


      .circle-three {

         width: 180px;

         height: 180px;

         right: 80px;

         bottom: 70px;

         background:
            rgba(255, 255, 255, 0.04);

      }


      .brand-content {

         position: relative;

         z-index: 2;

      }


      /* =====================================================
           LOGO
      ====================================================== */

      .brand-logo {

         width: 68px;

         height: 68px;

         display: flex;

         align-items: center;

         justify-content: center;

         border-radius: 18px;

         background:
            rgba(255, 255, 255, 0.14);

         border:
            1px solid rgba(255, 255, 255, 0.20);

         backdrop-filter: blur(10px);

         -webkit-backdrop-filter: blur(10px);

         font-size: 28px;

         margin-bottom: 32px;

         box-shadow:
            0 10px 30px rgba(0, 0, 0, 0.10);

      }


      .brand-title {

         font-size: 38px;

         line-height: 1.15;

         font-weight: 800;

         letter-spacing: -1.2px;

         max-width: 480px;

         margin-bottom: 20px;

      }


      .brand-description {

         max-width: 470px;

         color:
            rgba(255, 255, 255, 0.80);

         font-size: 15px;

         line-height: 1.8;

      }


      /* =====================================================
           FEATURES
      ====================================================== */

      .feature-list {

         margin-top: 38px;

         display: flex;

         flex-direction: column;

         gap: 15px;

      }


      .feature-item {

         display: flex;

         align-items: center;

         gap: 13px;

         color:
            rgba(255, 255, 255, 0.90);

         font-size: 14px;

      }


      .feature-icon {

         width: 34px;

         height: 34px;

         flex: 0 0 34px;

         display: flex;

         align-items: center;

         justify-content: center;

         border-radius: 10px;

         background:
            rgba(255, 255, 255, 0.12);

         font-size: 13px;

      }


      /* =====================================================
           BRAND FOOTER
      ====================================================== */

      .brand-footer {

         position: relative;

         z-index: 2;

         display: flex;

         align-items: center;

         justify-content: space-between;

         gap: 20px;

         padding-top: 30px;

         border-top:
            1px solid rgba(255, 255, 255, 0.12);

      }


      .security-info {

         display: flex;

         align-items: center;

         gap: 9px;

         font-size: 12px;

         color:
            rgba(255, 255, 255, 0.70);

      }


      .version {

         font-size: 11px;

         color:
            rgba(255, 255, 255, 0.50);

      }


      /* =====================================================
           RIGHT PANEL
      ====================================================== */

      .form-panel {

         display: flex;

         align-items: center;

         justify-content: center;

         padding: 60px;

         background: var(--white);

      }


      .login-form {

         width: 100%;

         max-width: 400px;

      }


      /* =====================================================
           FORM HEADER
      ====================================================== */

      .form-header {

         margin-bottom: 38px;

      }


      .welcome-label {

         display: inline-flex;

         align-items: center;

         gap: 8px;

         color: var(--primary);

         background: var(--primary-soft);

         border-radius: 50px;

         padding: 7px 12px;

         font-size: 11px;

         font-weight: 700;

         text-transform: uppercase;

         letter-spacing: 0.7px;

         margin-bottom: 17px;

      }


      .welcome-label i {

         font-size: 9px;

      }


      .form-title {

         color: var(--dark);

         font-size: 29px;

         line-height: 1.2;

         font-weight: 800;

         letter-spacing: -0.8px;

         margin-bottom: 10px;

      }


      .form-subtitle {

         color: var(--muted);

         font-size: 14px;

         line-height: 1.7;

      }


      /* =====================================================
           FORM GROUP
      ====================================================== */

      .form-group {

         margin-bottom: 25px;

      }


      .form-label {

         display: block;

         margin-bottom: 9px;

         color: var(--dark-soft);

         font-size: 13px;

         font-weight: 600;

      }


      .input-wrapper {

         position: relative;

      }


      .input-icon {

         position: absolute;

         left: 16px;

         top: 50%;

         transform: translateY(-50%);

         color: #94a3b8;

         font-size: 14px;

         pointer-events: none;

         transition: 0.2s ease;

         z-index: 2;

      }


      .form-control-custom {

         width: 100%;

         height: 52px;

         border:
            1px solid var(--border);

         border-radius: 12px;

         padding:
            0 45px;

         outline: none;

         background: #ffffff;

         color: var(--dark);

         font-size: 14px;

         transition:
            border-color 0.2s ease,
            box-shadow 0.2s ease;

      }


      .form-control-custom::placeholder {

         color: #94a3b8;

      }


      .form-control-custom:hover {

         border-color: #cbd5e1;

      }


      .form-control-custom:focus {

         border-color: var(--primary);

         box-shadow:
            0 0 0 4px rgba(37, 99, 235, 0.08);

      }


      .input-wrapper:focus-within .input-icon {

         color: var(--primary);

      }


      /* =====================================================
           RESET BUTTON
      ====================================================== */

      .login-button {

         width: 100%;

         height: 52px;

         display: flex;

         align-items: center;

         justify-content: center;

         gap: 10px;

         border: 0;

         border-radius: 12px;

         background:
            linear-gradient(135deg,
               var(--primary),
               #3b82f6);

         color: #ffffff;

         font-size: 14px;

         font-weight: 700;

         cursor: pointer;

         box-shadow:
            0 10px 25px rgba(37, 99, 235, 0.20);

         transition:
            transform 0.2s ease,
            box-shadow 0.2s ease;

      }


      .login-button:hover {

         transform: translateY(-1px);

         box-shadow:
            0 14px 30px rgba(37, 99, 235, 0.26);

      }


      .login-button:active {

         transform: translateY(0);

      }


      .login-button.loading {

         pointer-events: none;

         opacity: 0.85;

      }


      .login-button .spinner {

         display: none;

      }


      .login-button.loading .spinner {

         display: inline-block;

      }


      .login-button.loading .button-icon {

         display: none;

      }


      /* =====================================================
           BACK LOGIN
      ====================================================== */

      .back-login {

         display: flex;

         align-items: center;

         justify-content: center;

         gap: 7px;

         margin-top: 20px;

         color: var(--muted);

         font-size: 12px;

         text-decoration: none;

         transition: 0.2s ease;

      }


      .back-login:hover {

         color: var(--primary);

      }


      .back-login i {

         font-size: 11px;

      }


      /* =====================================================
           DIVIDER
      ====================================================== */

      .divider {

         display: flex;

         align-items: center;

         gap: 15px;

         margin: 30px 0 25px;

         color: #94a3b8;

         font-size: 11px;

      }


      .divider::before,
      .divider::after {

         content: "";

         height: 1px;

         flex: 1;

         background: var(--border);

      }


      /* =====================================================
           SUPPORT
      ====================================================== */

      .support-box {

         display: flex;

         align-items: center;

         gap: 13px;

         padding: 15px;

         border:
            1px solid var(--border);

         background: #f8fafc;

         border-radius: 12px;

      }


      .support-icon {

         width: 38px;

         height: 38px;

         flex: 0 0 38px;

         display: flex;

         align-items: center;

         justify-content: center;

         border-radius: 10px;

         background: #ffffff;

         color: var(--primary);

         border:
            1px solid var(--border);

      }


      .support-content {

         min-width: 0;

      }


      .support-title {

         color: var(--dark);

         font-size: 12px;

         font-weight: 700;

         margin-bottom: 3px;

      }


      .support-text {

         color: var(--muted);

         font-size: 11px;

         line-height: 1.5;

      }


      /* =====================================================
           COPYRIGHT
      ====================================================== */

      .copyright {

         margin-top: 30px;

         text-align: center;

         color: #94a3b8;

         font-size: 10px;

      }


      /* =====================================================
           TABLET
      ====================================================== */

      @media (max-width: 991.98px) {

         .login-page {

            padding: 20px;

         }


         .login-card {

            max-width: 760px;

            min-height: auto;

            grid-template-columns: 1fr;

         }


         .brand-panel {

            min-height: 330px;

            padding: 40px;

         }


         .brand-title {

            font-size: 32px;

         }


         .brand-description {

            max-width: 650px;

         }


         .feature-list {

            display: grid;

            grid-template-columns:
               repeat(3, 1fr);

            gap: 12px;

         }


         .feature-item {

            font-size: 12px;

         }


         .brand-footer {

            margin-top: 35px;

         }


         .form-panel {

            padding: 50px 40px;

         }

      }


      /* =====================================================
           MOBILE
      ====================================================== */

      @media (max-width: 575.98px) {

         body {

            background: #ffffff;

         }


         .login-page {

            min-height: 100vh;

            padding: 0;

            align-items: stretch;

         }


         .login-card {

            min-height: 100vh;

            border-radius: 0;

            border: 0;

            box-shadow: none;

         }


         .brand-panel {

            min-height: auto;

            padding: 35px 25px 30px;

         }


         .brand-logo {

            width: 56px;

            height: 56px;

            border-radius: 15px;

            font-size: 23px;

            margin-bottom: 22px;

         }


         .brand-title {

            font-size: 26px;

            letter-spacing: -0.7px;

            margin-bottom: 12px;

         }


         .brand-description {

            font-size: 13px;

            line-height: 1.7;

         }


         .feature-list {

            display: none;

         }


         .brand-footer {

            margin-top: 28px;

            padding-top: 20px;

         }


         .security-info {

            font-size: 10px;

         }


         .version {

            display: none;

         }


         .form-panel {

            padding: 35px 25px 30px;

            align-items: flex-start;

         }


         .form-header {

            margin-bottom: 30px;

         }


         .welcome-label {

            font-size: 10px;

            margin-bottom: 14px;

         }


         .form-title {

            font-size: 25px;

         }


         .form-subtitle {

            font-size: 13px;

         }


         .form-control-custom,
         .login-button {

            height: 50px;

         }


         .support-box {

            padding: 13px;

         }

      }


      /* =====================================================
           SMALL MOBILE
      ====================================================== */

      @media (max-width: 360px) {

         .brand-panel {

            padding: 28px 20px 25px;

         }


         .form-panel {

            padding: 30px 20px;

         }


         .form-title {

            font-size: 23px;

         }

      }


      /* =====================================================
           REDUCED MOTION
      ====================================================== */

      @media (prefers-reduced-motion: reduce) {

         *,
         *::before,
         *::after {

            animation-duration: 0.01ms !important;

            animation-iteration-count: 1 !important;

            transition-duration: 0.01ms !important;

            scroll-behavior: auto !important;

         }

      }
   </style>

</head>


<body>


   <div class="login-page">

      <div class="login-card">


         <!-- =====================================================
              BRAND PANEL
         ====================================================== -->

         <section class="brand-panel">


            <!-- Decorative circles -->

            <div class="circle circle-one"></div>

            <div class="circle circle-two"></div>

            <div class="circle circle-three"></div>


            <div class="brand-content">


               <!-- Logo -->

               <div class="brand-logo">

                  <i class="fa-solid fa-house-medical"></i>

               </div>


               <!-- Title -->

               <h1 class="brand-title">

                  Klinik Management System

               </h1>


               <!-- Description -->

               <p class="brand-description">

                  Platform manajemen klinik yang membantu
                  mengelola pelayanan, pasien, rekam medis,
                  transaksi, dan operasional klinik secara
                  terintegrasi.

               </p>


               <!-- Features -->

               <div class="feature-list">


                  <div class="feature-item">

                     <div class="feature-icon">

                        <i class="fa-solid fa-user-injured"></i>

                     </div>

                     <span>

                        Manajemen Pasien

                     </span>

                  </div>


                  <div class="feature-item">

                     <div class="feature-icon">

                        <i class="fa-solid fa-notes-medical"></i>

                     </div>

                     <span>

                        Rekam Medis

                     </span>

                  </div>


                  <div class="feature-item">

                     <div class="feature-icon">

                        <i class="fa-solid fa-chart-line"></i>

                     </div>

                     <span>

                        Laporan Klinik

                     </span>

                  </div>


               </div>

            </div>


            <!-- Footer -->

            <div class="brand-footer">


               <div class="security-info">

                  <i class="fa-solid fa-shield-halved"></i>

                  <span>

                     Sistem aman & terenkripsi

                  </span>

               </div>


               <div class="version">

                  v1.0.0

               </div>


            </div>


         </section>


         <!-- =====================================================
              FORM PANEL
         ====================================================== -->

         <section class="form-panel">


            <div class="login-form">


               <!-- Header -->

               <div class="form-header">


                  <div class="welcome-label">

                     <i class="fa-solid fa-circle"></i>

                     Account Recovery

                  </div>


                  <h2 class="form-title">

                     Reset Password 🔐

                  </h2>


                  <p class="form-subtitle">

                     Masukkan email yang terdaftar pada akun Anda.
                     Kami akan mengirimkan link untuk mengatur
                     ulang password.

                  </p>


               </div>


               <!-- =================================================
                    RESET PASSWORD FORM
               ================================================== -->

               <form
                  id="resetForm"
                  method="POST"
                  action=""
                  autocomplete="on">


                  <!-- Email -->

                  <div class="form-group">


                     <label
                        for="email"
                        class="form-label">

                        Email

                     </label>


                     <div class="input-wrapper">


                        <i
                           class="fa-solid fa-envelope input-icon"></i>


                        <input
                           type="email"
                           id="email"
                           name="email"
                           class="form-control-custom"
                           placeholder="Masukkan email Anda"
                           autocomplete="email"
                           required>


                     </div>


                  </div>


                  <!-- Button -->

                  <button
                     type="submit"
                     class="login-button"
                     id="resetButton">


                     <i
                        class="fa-solid fa-paper-plane button-icon"></i>


                     <i
                        class="fa-solid fa-spinner fa-spin spinner"></i>


                     <span id="buttonText">

                        Kirim Link Reset Password

                     </span>


                  </button>


               </form>


               <!-- Back Login -->

               <a
                  href="index"
                  class="back-login">

                  <i class="fa-solid fa-arrow-left"></i>

                  Kembali ke halaman login

               </a>


               <!-- Divider -->

               <div class="divider">

                  <span>

                     BUTUH BANTUAN?

                  </span>

               </div>


               <!-- Support -->

               <div class="support-box">


                  <div class="support-icon">

                     <i class="fa-solid fa-headset"></i>

                  </div>


                  <div class="support-content">


                     <div class="support-title">

                        Hubungi Administrator

                     </div>


                     <div class="support-text">

                        Jika mengalami kendala saat
                        melakukan reset password,
                        silakan hubungi administrator sistem.

                     </div>


                  </div>


               </div>


               <!-- Copyright -->

               <div class="copyright">

                  &copy;

                  <?= date('Y') ?>

                  Klinik Management System.

                  All rights reserved.

               </div>


            </div>


         </section>


      </div>

   </div>


   <!-- =========================================================
        JAVASCRIPT
   ========================================================== -->

   <script>
      document.addEventListener(
         'DOMContentLoaded',
         function() {


            const resetForm =
               document.getElementById('resetForm');

            const resetButton =
               document.getElementById('resetButton');

            const buttonText =
               document.getElementById('buttonText');


            if (resetForm) {

               resetForm.addEventListener(
                  'submit',
                  function() {


                     if (
                        !resetForm.checkValidity()
                     ) {

                        return;

                     }


                     resetButton.classList.add(
                        'loading'
                     );


                     buttonText.textContent =
                        'Mengirim...';

                  }
               );

            }


         }
      );
   </script>


</body>

</html>