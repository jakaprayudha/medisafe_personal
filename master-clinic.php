<?php

/*
|--------------------------------------------------------------------------
| MASTER CLINIC
|--------------------------------------------------------------------------
| Halaman pengaturan profil klinik.
| Untuk tahap awal masih menggunakan data dummy.
|--------------------------------------------------------------------------
*/

$clinic = [
   'kode'       => 'KLINIK-001',
   'nama'       => 'Klinik Sehat Sentosa',
   'jenis'      => 'Klinik Pratama',
   'pimpinan'   => 'dr. Budi Santoso',
   'alamat'     => 'Jl. Kesehatan No. 10',
   'kelurahan'  => 'Medan Baru',
   'kecamatan'  => 'Medan Baru',
   'kota'       => 'Medan',
   'provinsi'   => 'Sumatera Utara',
   'kode_pos'   => '20154',
   'telepon'    => '061-123456',
   'whatsapp'   => '081234567890',
   'email'      => 'admin@kliniksehat.id',
   'website'    => 'www.kliniksehat.id',
   'status'     => 'Aktif',
];

?>
<!DOCTYPE html>
<html lang="id">

<head>

   <meta charset="UTF-8">

   <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0">

   <meta
      name="description"
      content="Master Clinic - Klinik Management System">

   <title>
      Master Clinic | Klinik Management System
   </title>


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
         DASHBOARD STYLE
    ========================================================== -->

   <link
      href="assets/css/style.css"
      rel="stylesheet">


   <style>
      /* =====================================================
           MASTER CLINIC
        ====================================================== */

      .clinic-page {

         max-width: 1400px;

         margin: 0 auto;

      }


      /* =====================================================
           PROFILE HEADER
        ====================================================== */

      .clinic-profile-card {

         display: flex;

         align-items: center;

         justify-content: space-between;

         gap: 20px;

         padding: 22px;

         margin-bottom: 20px;

         background: var(--white);

         border:
            1px solid var(--border);

         border-radius: 15px;

      }


      .clinic-profile-left {

         display: flex;

         align-items: center;

         gap: 16px;

         min-width: 0;

      }


      .clinic-logo-large {

         width: 72px;

         height: 72px;

         flex: 0 0 72px;

         display: flex;

         align-items: center;

         justify-content: center;

         border-radius: 16px;

         background:
            linear-gradient(135deg,
               #1d4ed8,
               #2563eb,
               #0ea5e9);

         color: var(--white);

         font-size: 26px;

         box-shadow:
            0 8px 20px rgba(37, 99, 235, .18);

      }


      .clinic-profile-info {

         min-width: 0;

      }


      .clinic-profile-name {

         color: var(--dark);

         font-size: 18px;

         font-weight: 800;

         line-height: 1.3;

      }


      .clinic-profile-code {

         margin-top: 5px;

         color: var(--muted);

         font-size: 10px;

      }


      .clinic-status {

         display: inline-flex;

         align-items: center;

         gap: 6px;

         margin-top: 8px;

         padding:
            5px 9px;

         border-radius: 50px;

         background: #f0fdf4;

         color: #15803d;

         font-size: 9px;

         font-weight: 700;

      }


      .clinic-status-dot {

         width: 6px;

         height: 6px;

         border-radius: 50%;

         background: #22c55e;

      }


      .clinic-profile-action {

         flex-shrink: 0;

      }


      .btn-primary-custom {

         display: inline-flex;

         align-items: center;

         justify-content: center;

         gap: 8px;

         min-height: 40px;

         padding:
            0 15px;

         border: 0;

         border-radius: 10px;

         background: var(--primary);

         color: var(--white);

         font-size: 10px;

         font-weight: 700;

         transition: .2s ease;

      }


      .btn-primary-custom:hover {

         background: var(--primary-dark);

         color: var(--white);

         transform:
            translateY(-1px);

      }


      /* =====================================================
           GRID
        ====================================================== */

      .clinic-grid {

         display: grid;

         grid-template-columns:
            minmax(0, 1.4fr) minmax(300px, .6fr);

         gap: 20px;

      }


      /* =====================================================
           CARD
        ====================================================== */

      .form-card {

         background: var(--white);

         border:
            1px solid var(--border);

         border-radius: 15px;

         overflow: hidden;

      }


      .form-card-header {

         min-height: 65px;

         display: flex;

         align-items: center;

         justify-content: space-between;

         padding:
            0 20px;

         border-bottom:
            1px solid var(--border);

      }


      .form-card-header-left {

         display: flex;

         align-items: center;

         gap: 11px;

      }


      .form-card-header-icon {

         width: 34px;

         height: 34px;

         display: flex;

         align-items: center;

         justify-content: center;

         border-radius: 9px;

         background: var(--primary-soft);

         color: var(--primary);

         font-size: 12px;

      }


      .form-card-title {

         color: var(--dark);

         font-size: 13px;

         font-weight: 700;

      }


      .form-card-subtitle {

         margin-top: 3px;

         color: var(--muted);

         font-size: 9px;

      }


      .form-card-body {

         padding: 22px;

      }


      /* =====================================================
           FORM
        ====================================================== */

      .form-row {

         display: grid;

         grid-template-columns:
            repeat(2, 1fr);

         gap: 16px;

         margin-bottom: 17px;

      }


      .form-row:last-child {

         margin-bottom: 0;

      }


      .form-group {

         min-width: 0;

      }


      .form-label-custom {

         display: block;

         margin-bottom: 7px;

         color: var(--dark);

         font-size: 10px;

         font-weight: 600;

      }


      .form-label-custom .required {

         color: var(--danger);

      }


      .form-control-custom,
      .form-select-custom {

         width: 100%;

         height: 43px;

         padding:
            0 12px;

         border:
            1px solid var(--border);

         border-radius: 9px;

         outline: none;

         background: var(--white);

         color: var(--dark);

         font-family: inherit;

         font-size: 10px;

         transition:
            border-color .2s ease,
            box-shadow .2s ease;

      }


      .form-control-custom:focus,
      .form-select-custom:focus {

         border-color:
            #93c5fd;

         box-shadow:
            0 0 0 3px rgba(37, 99, 235, .08);

      }


      textarea.form-control-custom {

         height: 90px;

         padding:
            11px 12px;

         resize: vertical;

      }


      .form-help {

         margin-top: 5px;

         color: #94a3b8;

         font-size: 8px;

      }


      /* =====================================================
           FULL WIDTH
        ====================================================== */

      .form-full {

         grid-column:
            1 / -1;

      }


      /* =====================================================
           INFORMATION CARD
        ====================================================== */

      .info-list {

         padding:
            8px 20px 15px;

      }


      .info-item {

         display: flex;

         align-items: flex-start;

         gap: 12px;

         padding:
            14px 0;

         border-bottom:
            1px solid #f1f5f9;

      }


      .info-item:last-child {

         border-bottom: 0;

      }


      .info-icon {

         width: 34px;

         height: 34px;

         flex: 0 0 34px;

         display: flex;

         align-items: center;

         justify-content: center;

         border-radius: 9px;

         background: #f8fafc;

         color: var(--primary);

         font-size: 11px;

      }


      .info-content {

         flex: 1;

         min-width: 0;

      }


      .info-label {

         color: #94a3b8;

         font-size: 8px;

         font-weight: 600;

         text-transform: uppercase;

         letter-spacing: .4px;

      }


      .info-value {

         margin-top: 4px;

         color: var(--dark);

         font-size: 10px;

         font-weight: 600;

         line-height: 1.5;

         word-break: break-word;

      }


      /* =====================================================
           SYSTEM INFO
        ====================================================== */

      .system-info {

         margin-top: 20px;

         padding: 18px;

         border:
            1px solid #dbeafe;

         border-radius: 12px;

         background:
            linear-gradient(135deg,
               #eff6ff,
               #f8fbff);

      }


      .system-info-title {

         display: flex;

         align-items: center;

         gap: 8px;

         color: var(--primary);

         font-size: 11px;

         font-weight: 700;

      }


      .system-info-text {

         margin-top: 7px;

         color: var(--muted);

         font-size: 9px;

         line-height: 1.7;

      }


      /* =====================================================
           FORM FOOTER
        ====================================================== */

      .form-footer {

         display: flex;

         align-items: center;

         justify-content: flex-end;

         gap: 8px;

         padding:
            15px 22px;

         border-top:
            1px solid var(--border);

         background: #fafcff;

      }


      .btn-secondary-custom {

         display: inline-flex;

         align-items: center;

         justify-content: center;

         gap: 7px;

         min-height: 40px;

         padding:
            0 15px;

         border:
            1px solid var(--border);

         border-radius: 10px;

         background: var(--white);

         color: var(--muted);

         font-size: 10px;

         font-weight: 600;

         cursor: pointer;

      }


      .btn-secondary-custom:hover {

         background: #f8fafc;

         color: var(--dark);

      }


      /* =====================================================
           RESPONSIVE
        ====================================================== */

      @media (max-width: 1199.98px) {

         .clinic-grid {

            grid-template-columns: 1fr;

         }

      }


      @media (max-width: 767.98px) {

         .clinic-profile-card {

            align-items: flex-start;

            flex-direction: column;

         }


         .clinic-profile-action {

            width: 100%;

         }


         .clinic-profile-action .btn-primary-custom {

            width: 100%;

         }


         .form-row {

            grid-template-columns: 1fr;

            gap: 15px;

         }


         .form-full {

            grid-column: auto;

         }

      }


      @media (max-width: 575.98px) {

         .clinic-profile-card {

            padding: 17px;

         }


         .clinic-logo-large {

            width: 58px;

            height: 58px;

            flex-basis: 58px;

            font-size: 21px;

         }


         .clinic-profile-name {

            font-size: 15px;

         }


         .form-card-body {

            padding: 17px;

         }


         .form-card-header {

            padding:
               0 17px;

         }


         .form-footer {

            padding:
               13px 17px;

         }

      }
   </style>

</head>


<body>


   <div class="app">


      <!-- =====================================================
         SIDEBAR
    ====================================================== -->

      <?php require 'components/sidebar.php'; ?>


      <!-- =====================================================
         MAIN
    ====================================================== -->

      <div class="main">


         <!-- =================================================
             HEADER
        ================================================== -->

         <?php require 'components/header.php'; ?>


         <!-- =================================================
             CONTENT
        ================================================== -->

         <main class="content">


            <div class="clinic-page">


               <!-- =================================================
                     PAGE HEADING
                ================================================== -->

               <div class="page-heading">

                  <div>

                     <h1 class="page-title">

                        Master Clinic

                     </h1>


                     <p class="page-description">

                        Kelola informasi dan identitas klinik.

                     </p>

                  </div>


                  <div class="date-info">

                     <i class="fa-regular fa-calendar"></i>

                     Jumat, 04 September 2026

                  </div>

               </div>


               <!-- =================================================
                     CLINIC PROFILE
                ================================================== -->

               <div class="clinic-profile-card">


                  <div class="clinic-profile-left">


                     <div class="clinic-logo-large">

                        <i class="fa-solid fa-house-medical"></i>

                     </div>


                     <div class="clinic-profile-info">


                        <div class="clinic-profile-name">

                           <?= htmlspecialchars(
                              $clinic['nama']
                           ) ?>

                        </div>


                        <div class="clinic-profile-code">

                           Kode Klinik :
                           <?= htmlspecialchars(
                              $clinic['kode']
                           ) ?>

                           &nbsp; • &nbsp;

                           <?= htmlspecialchars(
                              $clinic['jenis']
                           ) ?>

                        </div>


                        <div class="clinic-status">

                           <span
                              class="clinic-status-dot">
                           </span>

                           <?= htmlspecialchars(
                              $clinic['status']
                           ) ?>

                        </div>


                     </div>


                  </div>


                  <div class="clinic-profile-action">

                     <button
                        type="button"
                        class="btn-primary-custom"
                        onclick="enableEdit()">

                        <i
                           class="fa-solid fa-pen">
                        </i>

                        Edit Data Klinik

                     </button>

                  </div>


               </div>


               <!-- =================================================
                     CONTENT GRID
                ================================================== -->

               <div class="clinic-grid">


                  <!-- =============================================
                         DATA KLINIK
                    ============================================== -->

                  <div class="form-card">


                     <div class="form-card-header">


                        <div class="form-card-header-left">


                           <div
                              class="form-card-header-icon">

                              <i
                                 class="fa-solid fa-hospital">
                              </i>

                           </div>


                           <div>

                              <div class="form-card-title">

                                 Informasi Klinik

                              </div>


                              <div class="form-card-subtitle">

                                 Informasi dasar dan identitas klinik

                              </div>

                           </div>


                        </div>


                     </div>


                     <div class="form-card-body">


                        <!-- BARIS 1 -->

                        <div class="form-row">


                           <div class="form-group">

                              <label
                                 class="form-label-custom">

                                 Kode Klinik
                                 <span class="required">*</span>

                              </label>


                              <input
                                 type="text"
                                 class="form-control-custom"
                                 id="kode"
                                 value="<?= htmlspecialchars(
                                             $clinic['kode']
                                          ) ?>"
                                 disabled>


                              <div class="form-help">

                                 Kode unik identitas klinik.

                              </div>

                           </div>


                           <div class="form-group">

                              <label
                                 class="form-label-custom">

                                 Nama Klinik
                                 <span class="required">*</span>

                              </label>


                              <input
                                 type="text"
                                 class="form-control-custom"
                                 id="nama"
                                 value="<?= htmlspecialchars(
                                             $clinic['nama']
                                          ) ?>"
                                 disabled>

                           </div>


                        </div>


                        <!-- BARIS 2 -->

                        <div class="form-row">


                           <div class="form-group">

                              <label
                                 class="form-label-custom">

                                 Jenis Klinik
                                 <span class="required">*</span>

                              </label>


                              <select
                                 class="form-select-custom"
                                 id="jenis"
                                 disabled>

                                 <option
                                    value="Klinik Pratama"
                                    <?= $clinic['jenis'] === 'Klinik Pratama'
                                       ? 'selected'
                                       : '' ?>>

                                    Klinik Pratama

                                 </option>


                                 <option
                                    value="Klinik Utama"
                                    <?= $clinic['jenis'] === 'Klinik Utama'
                                       ? 'selected'
                                       : '' ?>>

                                    Klinik Utama

                                 </option>

                              </select>

                           </div>


                           <div class="form-group">

                              <label
                                 class="form-label-custom">

                                 Pimpinan / Penanggung Jawab
                                 <span class="required">*</span>

                              </label>


                              <input
                                 type="text"
                                 class="form-control-custom"
                                 id="pimpinan"
                                 value="<?= htmlspecialchars(
                                             $clinic['pimpinan']
                                          ) ?>"
                                 disabled>

                           </div>


                        </div>


                        <!-- BARIS 3 -->

                        <div class="form-row">


                           <div
                              class="form-group form-full">

                              <label
                                 class="form-label-custom">

                                 Alamat Klinik
                                 <span class="required">*</span>

                              </label>


                              <textarea
                                 class="form-control-custom"
                                 id="alamat"
                                 disabled><?= htmlspecialchars(
                                             $clinic['alamat']
                                          ) ?></textarea>

                           </div>


                        </div>


                        <!-- BARIS 4 -->

                        <div class="form-row">


                           <div class="form-group">

                              <label
                                 class="form-label-custom">

                                 Kelurahan

                              </label>


                              <input
                                 type="text"
                                 class="form-control-custom"
                                 id="kelurahan"
                                 value="<?= htmlspecialchars(
                                             $clinic['kelurahan']
                                          ) ?>"
                                 disabled>

                           </div>


                           <div class="form-group">

                              <label
                                 class="form-label-custom">

                                 Kecamatan

                              </label>


                              <input
                                 type="text"
                                 class="form-control-custom"
                                 id="kecamatan"
                                 value="<?= htmlspecialchars(
                                             $clinic['kecamatan']
                                          ) ?>"
                                 disabled>

                           </div>


                        </div>


                        <!-- BARIS 5 -->

                        <div class="form-row">


                           <div class="form-group">

                              <label
                                 class="form-label-custom">

                                 Kabupaten / Kota

                              </label>


                              <input
                                 type="text"
                                 class="form-control-custom"
                                 id="kota"
                                 value="<?= htmlspecialchars(
                                             $clinic['kota']
                                          ) ?>"
                                 disabled>

                           </div>


                           <div class="form-group">

                              <label
                                 class="form-label-custom">

                                 Provinsi

                              </label>


                              <input
                                 type="text"
                                 class="form-control-custom"
                                 id="provinsi"
                                 value="<?= htmlspecialchars(
                                             $clinic['provinsi']
                                          ) ?>"
                                 disabled>

                           </div>


                        </div>


                        <!-- BARIS 6 -->

                        <div class="form-row">


                           <div class="form-group">

                              <label
                                 class="form-label-custom">

                                 Kode Pos

                              </label>


                              <input
                                 type="text"
                                 class="form-control-custom"
                                 id="kode_pos"
                                 value="<?= htmlspecialchars(
                                             $clinic['kode_pos']
                                          ) ?>"
                                 disabled>

                           </div>


                           <div class="form-group">

                              <label
                                 class="form-label-custom">

                                 Telepon

                              </label>


                              <input
                                 type="text"
                                 class="form-control-custom"
                                 id="telepon"
                                 value="<?= htmlspecialchars(
                                             $clinic['telepon']
                                          ) ?>"
                                 disabled>

                           </div>


                        </div>


                        <!-- BARIS 7 -->

                        <div class="form-row">


                           <div class="form-group">

                              <label
                                 class="form-label-custom">

                                 WhatsApp

                              </label>


                              <input
                                 type="text"
                                 class="form-control-custom"
                                 id="whatsapp"
                                 value="<?= htmlspecialchars(
                                             $clinic['whatsapp']
                                          ) ?>"
                                 disabled>

                           </div>


                           <div class="form-group">

                              <label
                                 class="form-label-custom">

                                 Email

                              </label>


                              <input
                                 type="email"
                                 class="form-control-custom"
                                 id="email"
                                 value="<?= htmlspecialchars(
                                             $clinic['email']
                                          ) ?>"
                                 disabled>

                           </div>


                        </div>


                        <!-- BARIS 8 -->

                        <div class="form-row">


                           <div class="form-group">

                              <label
                                 class="form-label-custom">

                                 Website

                              </label>


                              <input
                                 type="text"
                                 class="form-control-custom"
                                 id="website"
                                 value="<?= htmlspecialchars(
                                             $clinic['website']
                                          ) ?>"
                                 disabled>

                           </div>


                           <div class="form-group">

                              <label
                                 class="form-label-custom">

                                 Status Klinik

                              </label>


                              <select
                                 class="form-select-custom"
                                 id="status"
                                 disabled>

                                 <option
                                    value="Aktif"
                                    selected>

                                    Aktif

                                 </option>


                                 <option
                                    value="Tidak Aktif">

                                    Tidak Aktif

                                 </option>

                              </select>

                           </div>


                        </div>


                     </div>


                     <!-- FORM FOOTER -->

                     <div
                        class="form-footer"
                        id="formFooter"
                        style="display:none;">


                        <button
                           type="button"
                           class="btn-secondary-custom"
                           onclick="cancelEdit()">

                           <i
                              class="fa-solid fa-xmark">
                           </i>

                           Batal

                        </button>


                        <button
                           type="button"
                           class="btn-primary-custom"
                           onclick="saveClinic()">

                           <i
                              class="fa-solid fa-floppy-disk">
                           </i>

                           Simpan Perubahan

                        </button>


                     </div>


                  </div>


                  <!-- =============================================
                         INFORMASI KONTAK
                    ============================================== -->

                  <div>


                     <div class="form-card">


                        <div class="form-card-header">


                           <div
                              class="form-card-header-left">


                              <div
                                 class="form-card-header-icon">

                                 <i
                                    class="fa-solid fa-address-card">
                                 </i>

                              </div>


                              <div>

                                 <div class="form-card-title">

                                    Informasi Kontak

                                 </div>


                                 <div
                                    class="form-card-subtitle">

                                    Kontak resmi klinik

                                 </div>

                              </div>


                           </div>


                        </div>


                        <div class="info-list">


                           <!-- PIMPINAN -->

                           <div class="info-item">


                              <div class="info-icon">

                                 <i
                                    class="fa-solid fa-user-doctor">
                                 </i>

                              </div>


                              <div class="info-content">

                                 <div class="info-label">

                                    Penanggung Jawab

                                 </div>


                                 <div class="info-value">

                                    <?= htmlspecialchars(
                                       $clinic['pimpinan']
                                    ) ?>

                                 </div>

                              </div>


                           </div>


                           <!-- TELEPON -->

                           <div class="info-item">


                              <div class="info-icon">

                                 <i
                                    class="fa-solid fa-phone">
                                 </i>

                              </div>


                              <div class="info-content">

                                 <div class="info-label">

                                    Telepon

                                 </div>


                                 <div class="info-value">

                                    <?= htmlspecialchars(
                                       $clinic['telepon']
                                    ) ?>

                                 </div>

                              </div>


                           </div>


                           <!-- WHATSAPP -->

                           <div class="info-item">


                              <div class="info-icon">

                                 <i
                                    class="fa-brands fa-whatsapp">
                                 </i>

                              </div>


                              <div class="info-content">

                                 <div class="info-label">

                                    WhatsApp

                                 </div>


                                 <div class="info-value">

                                    <?= htmlspecialchars(
                                       $clinic['whatsapp']
                                    ) ?>

                                 </div>

                              </div>


                           </div>


                           <!-- EMAIL -->

                           <div class="info-item">


                              <div class="info-icon">

                                 <i
                                    class="fa-solid fa-envelope">
                                 </i>

                              </div>


                              <div class="info-content">

                                 <div class="info-label">

                                    Email

                                 </div>


                                 <div class="info-value">

                                    <?= htmlspecialchars(
                                       $clinic['email']
                                    ) ?>

                                 </div>

                              </div>


                           </div>


                           <!-- WEBSITE -->

                           <div class="info-item">


                              <div class="info-icon">

                                 <i
                                    class="fa-solid fa-globe">
                                 </i>

                              </div>


                              <div class="info-content">

                                 <div class="info-label">

                                    Website

                                 </div>


                                 <div class="info-value">

                                    <?= htmlspecialchars(
                                       $clinic['website']
                                    ) ?>

                                 </div>

                              </div>


                           </div>


                        </div>


                     </div>


                     <!-- SYSTEM INFO -->

                     <div class="system-info">


                        <div class="system-info-title">

                           <i
                              class="fa-solid fa-shield-halved">
                           </i>

                           Informasi Sistem

                        </div>


                        <div class="system-info-text">

                           Data klinik digunakan sebagai identitas
                           utama dalam seluruh proses pelayanan,
                           transaksi, laporan, dan data pasien.

                        </div>


                     </div>


                  </div>


               </div>


            </div>


         </main>


         <!-- =================================================
             FOOTER
        ================================================== -->

         <?php require 'components/footer.php'; ?>


      </div>

   </div>


   <!-- =========================================================
     JAVASCRIPT
========================================================== -->

   <script>
      document.addEventListener(
         'DOMContentLoaded',
         function() {


            /*
            |--------------------------------------------------------------------------
            | SIDEBAR MOBILE
            |--------------------------------------------------------------------------
            */

            const sidebar =
               document.getElementById('sidebar');

            const sidebarOverlay =
               document.getElementById('sidebarOverlay');

            const mobileMenu =
               document.getElementById('mobileMenu');

            const sidebarClose =
               document.getElementById('sidebarClose');


            function openSidebar() {

               if (sidebar) {

                  sidebar.classList.add('show');

               }

               if (sidebarOverlay) {

                  sidebarOverlay.classList.add('show');

               }

               document.body.style.overflow =
                  'hidden';

            }


            function closeSidebar() {

               if (sidebar) {

                  sidebar.classList.remove('show');

               }

               if (sidebarOverlay) {

                  sidebarOverlay.classList.remove('show');

               }

               document.body.style.overflow =
                  '';

            }


            if (mobileMenu) {

               mobileMenu.addEventListener(
                  'click',
                  openSidebar
               );

            }


            if (sidebarClose) {

               sidebarClose.addEventListener(
                  'click',
                  closeSidebar
               );

            }


            if (sidebarOverlay) {

               sidebarOverlay.addEventListener(
                  'click',
                  closeSidebar
               );

            }


            /*
            |--------------------------------------------------------------------------
            | MOBILE MENU
            |--------------------------------------------------------------------------
            */

            document
               .querySelectorAll('.menu-item')
               .forEach(
                  function(item) {

                     item.addEventListener(
                        'click',
                        function() {

                           if (
                              window.innerWidth <= 991
                           ) {

                              closeSidebar();

                           }

                        }
                     );

                  }
               );

         }
      );


      /*
      |--------------------------------------------------------------------------
      | ENABLE EDIT
      |--------------------------------------------------------------------------
      */

      function enableEdit() {

         const fields =
            document.querySelectorAll(
               '.form-control-custom, .form-select-custom'
            );


         fields.forEach(
            function(field) {

               field.disabled = false;

            }
         );


         const footer =
            document.getElementById(
               'formFooter'
            );


         if (footer) {

            footer.style.display =
               'flex';

         }


         const button =
            document.querySelector(
               '.clinic-profile-action .btn-primary-custom'
            );


         if (button) {

            button.style.display =
               'none';

         }

      }


      /*
      |--------------------------------------------------------------------------
      | CANCEL EDIT
      |--------------------------------------------------------------------------
      */

      function cancelEdit() {

         window.location.reload();

      }


      /*
      |--------------------------------------------------------------------------
      | SAVE CLINIC
      |--------------------------------------------------------------------------
      */

      function saveClinic() {

         /*
         |--------------------------------------------------------------------------
         | Untuk sementara hanya simulasi.
         | Nanti bagian ini diganti AJAX/PHP API.
         |--------------------------------------------------------------------------
         */

         const nama =
            document.getElementById(
               'nama'
            ).value.trim();


         const pimpinan =
            document.getElementById(
               'pimpinan'
            ).value.trim();


         const alamat =
            document.getElementById(
               'alamat'
            ).value.trim();


         if (!nama) {

            alert(
               'Nama klinik wajib diisi.'
            );

            return;

         }


         if (!pimpinan) {

            alert(
               'Pimpinan / penanggung jawab wajib diisi.'
            );

            return;

         }


         if (!alamat) {

            alert(
               'Alamat klinik wajib diisi.'
            );

            return;

         }


         /*
         |--------------------------------------------------------------------------
         | SIMULASI BERHASIL
         |--------------------------------------------------------------------------
         */

         alert(
            'Data klinik berhasil disimpan.'
         );


         /*
         |--------------------------------------------------------------------------
         | Nanti:
         |
         | fetch('api/clinic.php', {
         |     method: 'POST',
         |     body: ...
         | });
         |--------------------------------------------------------------------------
         */


         window.location.reload();

      }
   </script>


</body>

</html>