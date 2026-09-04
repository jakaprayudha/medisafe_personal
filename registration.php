<?php

/**
 * ============================================================
 * REGISTRATION
 * ============================================================
 * File : registration.php
 * Deskripsi : Registrasi / Pendaftaran Pasien
 * ============================================================
 */


/*
|--------------------------------------------------------------------------
| Dummy Data Pasien
|--------------------------------------------------------------------------
*/

$patients = [

   [
      'id' => 1,
      'rm' => 'RM-000001',
      'nik' => '1271010101010001',
      'nama' => 'Ahmad Fauzi',
      'tgl_lahir' => '1988-05-12',
      'jenis_kelamin' => 'L',
      'telepon' => '081234567890',
      'alamat' => 'Jl. Merdeka No. 10',
   ],

   [
      'id' => 2,
      'rm' => 'RM-000002',
      'nik' => '1271010202020002',
      'nama' => 'Siti Rahma',
      'tgl_lahir' => '1992-08-21',
      'jenis_kelamin' => 'P',
      'telepon' => '081298765432',
      'alamat' => 'Jl. Sudirman No. 20',
   ],

   [
      'id' => 3,
      'rm' => 'RM-000003',
      'nik' => '1271010303030003',
      'nama' => 'Budi Santoso',
      'tgl_lahir' => '1979-02-14',
      'jenis_kelamin' => 'L',
      'telepon' => '082112345678',
      'alamat' => 'Jl. Diponegoro No. 15',
   ],

   [
      'id' => 4,
      'rm' => 'RM-000004',
      'nik' => '1271010404040004',
      'nama' => 'Dewi Lestari',
      'tgl_lahir' => '1996-11-03',
      'jenis_kelamin' => 'P',
      'telepon' => '082198765432',
      'alamat' => 'Jl. Gatot Subroto No. 8',
   ],

   [
      'id' => 5,
      'rm' => 'RM-000005',
      'nik' => '1271010505050005',
      'nama' => 'Rizky Pratama',
      'tgl_lahir' => '2001-06-18',
      'jenis_kelamin' => 'L',
      'telepon' => '085212345678',
      'alamat' => 'Jl. Ahmad Yani No. 5',
   ],

];


/*
|--------------------------------------------------------------------------
| Dummy Poli
|--------------------------------------------------------------------------
*/

$polis = [

   [
      'id' => 1,
      'kode' => 'POL-001',
      'nama' => 'Poli Umum',
      'dokter' => 'dr. Andi Wijaya',
      'antrian' => 12,
   ],

   [
      'id' => 2,
      'kode' => 'POL-002',
      'nama' => 'Poli Gigi',
      'dokter' => 'drg. Maya Sari',
      'antrian' => 7,
   ],

   [
      'id' => 3,
      'kode' => 'POL-003',
      'nama' => 'Poli Anak',
      'dokter' => 'dr. Rina Kusuma',
      'antrian' => 8,
   ],

   [
      'id' => 4,
      'kode' => 'POL-004',
      'nama' => 'Poli Penyakit Dalam',
      'dokter' => 'dr. Budi Hartono',
      'antrian' => 5,
   ],

];


/*
|--------------------------------------------------------------------------
| Dummy Dokter
|--------------------------------------------------------------------------
*/

$doctors = [

   [
      'id' => 1,
      'nama' => 'dr. Andi Wijaya',
      'poli' => 'Poli Umum',
      'status' => 'Hadir',
   ],

   [
      'id' => 2,
      'nama' => 'drg. Maya Sari',
      'poli' => 'Poli Gigi',
      'status' => 'Hadir',
   ],

   [
      'id' => 3,
      'nama' => 'dr. Rina Kusuma',
      'poli' => 'Poli Anak',
      'status' => 'Hadir',
   ],

   [
      'id' => 4,
      'nama' => 'dr. Budi Hartono',
      'poli' => 'Poli Penyakit Dalam',
      'status' => 'Tidak Hadir',
   ],

];


/*
|--------------------------------------------------------------------------
| Dummy Registrasi Hari Ini
|--------------------------------------------------------------------------
*/

$registrations = [

   [
      'id' => 1,
      'no_reg' => 'REG-20260904-001',
      'no_rm' => 'RM-000001',
      'nama' => 'Ahmad Fauzi',
      'poli' => 'Poli Umum',
      'dokter' => 'dr. Andi Wijaya',
      'jenis' => 'Rawat Jalan',
      'penjamin' => 'Umum',
      'antrian' => 'A-001',
      'jam' => '08:12',
      'status' => 'Menunggu',
   ],

   [
      'id' => 2,
      'no_reg' => 'REG-20260904-002',
      'no_rm' => 'RM-000002',
      'nama' => 'Siti Rahma',
      'poli' => 'Poli Gigi',
      'dokter' => 'drg. Maya Sari',
      'jenis' => 'Rawat Jalan',
      'penjamin' => 'BPJS',
      'antrian' => 'B-001',
      'jam' => '08:20',
      'status' => 'Dipanggil',
   ],

   [
      'id' => 3,
      'no_reg' => 'REG-20260904-003',
      'no_rm' => 'RM-000003',
      'nama' => 'Budi Santoso',
      'poli' => 'Poli Umum',
      'dokter' => 'dr. Andi Wijaya',
      'jenis' => 'Rawat Jalan',
      'penjamin' => 'Umum',
      'antrian' => 'A-002',
      'jam' => '08:31',
      'status' => 'Dalam Pelayanan',
   ],

   [
      'id' => 4,
      'no_reg' => 'REG-20260904-004',
      'no_rm' => 'RM-000004',
      'nama' => 'Dewi Lestari',
      'poli' => 'Poli Anak',
      'dokter' => 'dr. Rina Kusuma',
      'jenis' => 'Rawat Jalan',
      'penjamin' => 'BPJS',
      'antrian' => 'C-001',
      'jam' => '08:45',
      'status' => 'Selesai',
   ],

   [
      'id' => 5,
      'no_reg' => 'REG-20260904-005',
      'no_rm' => 'RM-000005',
      'nama' => 'Rizky Pratama',
      'poli' => 'Poli Umum',
      'dokter' => 'dr. Andi Wijaya',
      'jenis' => 'Rawat Jalan',
      'penjamin' => 'Asuransi',
      'antrian' => 'A-003',
      'jam' => '09:02',
      'status' => 'Menunggu',
   ],

];


/*
|--------------------------------------------------------------------------
| Helper
|--------------------------------------------------------------------------
*/

function registrationStatusBadge($status)
{
   $map = [

      'Menunggu' => [
         'class' => 'waiting',
         'icon' => 'fa-clock',
      ],

      'Dipanggil' => [
         'class' => 'called',
         'icon' => 'fa-bullhorn',
      ],

      'Dalam Pelayanan' => [
         'class' => 'process',
         'icon' => 'fa-user-doctor',
      ],

      'Selesai' => [
         'class' => 'done',
         'icon' => 'fa-circle-check',
      ],

      'Batal' => [
         'class' => 'cancel',
         'icon' => 'fa-circle-xmark',
      ],

   ];

   $item = $map[$status] ?? [
      'class' => 'waiting',
      'icon' => 'fa-clock',
   ];

   return '
        <span class="registration-status ' . $item['class'] . '">
            <i class="fa-solid ' . $item['icon'] . '"></i>
            ' . htmlspecialchars($status) . '
        </span>
    ';
}


function payerBadge($payer)
{
   $class = match ($payer) {

      'BPJS' => 'green',

      'Asuransi' => 'purple',

      'Perusahaan' => 'orange',

      default => 'blue',
   };

   return '
        <span class="payer-badge ' . $class . '">
            ' . htmlspecialchars($payer) . '
        </span>
    ';
}


/*
|--------------------------------------------------------------------------
| Statistics
|--------------------------------------------------------------------------
*/

$totalRegistrations = count($registrations);

$waitingRegistrations = count(
   array_filter(
      $registrations,
      fn($item) => $item['status'] === 'Menunggu'
   )
);

$processRegistrations = count(
   array_filter(
      $registrations,
      fn($item) => $item['status'] === 'Dalam Pelayanan'
   )
);

$completedRegistrations = count(
   array_filter(
      $registrations,
      fn($item) => $item['status'] === 'Selesai'
   )
);

?>

<!DOCTYPE html>

<html lang="id">

<head>

   <meta charset="UTF-8">

   <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0">

   <title>
      Registrasi Pasien - Klinik Management System
   </title>


   <!-- FONT -->

   <link
      rel="preconnect"
      href="https://fonts.googleapis.com">

   <link
      rel="preconnect"
      href="https://fonts.googleapis.com"
      crossorigin>

   <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
      rel="stylesheet">


   <!-- BOOTSTRAP -->

   <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet">


   <!-- FONT AWESOME -->

   <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      rel="stylesheet">


   <!-- MAIN CSS -->

   <link
      rel="stylesheet"
      href="assets/css/style.css">


   <style>
      /* ====================================================
           PAGE HEADER
        ==================================================== */

      .page-header {

         display: flex;

         justify-content: space-between;

         align-items: center;

         gap: 20px;

         margin-bottom: 24px;

      }


      .page-title {

         margin: 0;

         font-size: 24px;

         font-weight: 700;

         color: #172033;

      }


      .page-subtitle {

         margin-top: 6px;

         color: #7b8497;

         font-size: 14px;

      }


      .date-display {

         display: flex;

         align-items: center;

         gap: 8px;

         background: #fff;

         border: 1px solid #e9edf4;

         border-radius: 10px;

         padding: 10px 14px;

         color: #596273;

         font-size: 13px;

         font-weight: 500;

      }


      /* ====================================================
           STAT
        ==================================================== */

      .stat-grid {

         display: grid;

         grid-template-columns:
            repeat(4, 1fr);

         gap: 18px;

         margin-bottom: 24px;

      }


      .stat-card {

         background: #fff;

         border: 1px solid #e9edf4;

         border-radius: 14px;

         padding: 20px;

         display: flex;

         align-items: center;

         gap: 15px;

      }


      .stat-icon {

         width: 48px;

         height: 48px;

         border-radius: 12px;

         display: flex;

         align-items: center;

         justify-content: center;

         font-size: 19px;

      }


      .stat-icon.blue {

         background: #eaf2ff;

         color: #2563eb;

      }


      .stat-icon.orange {

         background: #fff5e8;

         color: #ea8a00;

      }


      .stat-icon.purple {

         background: #f3edff;

         color: #7c3aed;

      }


      .stat-icon.green {

         background: #eafaf1;

         color: #16a34a;

      }


      .stat-label {

         color: #7b8497;

         font-size: 13px;

         margin-bottom: 3px;

      }


      .stat-value {

         font-size: 22px;

         font-weight: 700;

         color: #172033;

      }


      /* ====================================================
           REGISTRATION CARD
        ==================================================== */

      .registration-card {

         background: #fff;

         border: 1px solid #e9edf4;

         border-radius: 14px;

         margin-bottom: 24px;

         overflow: hidden;

      }


      .registration-card-header {

         padding: 18px 20px;

         border-bottom: 1px solid #edf0f5;

         display: flex;

         justify-content: space-between;

         align-items: center;

      }


      .section-title {

         margin: 0;

         font-size: 16px;

         font-weight: 700;

         color: #172033;

      }


      .section-subtitle {

         font-size: 12px;

         color: #8992a3;

         margin-top: 3px;

      }


      .registration-card-body {

         padding: 20px;

      }


      /* ====================================================
           PATIENT SEARCH
        ==================================================== */

      .patient-search-box {

         background: #f8fafc;

         border: 1px solid #e6eaf0;

         border-radius: 12px;

         padding: 16px;

         margin-bottom: 20px;

      }


      .search-title {

         font-size: 13px;

         font-weight: 700;

         color: #344054;

         margin-bottom: 10px;

      }


      .search-wrapper {

         position: relative;

      }


      .search-wrapper i {

         position: absolute;

         left: 14px;

         top: 13px;

         color: #98a1b2;

      }


      .search-wrapper input {

         padding-left: 38px;

      }


      .patient-result {

         display: none;

         margin-top: 10px;

         background: #fff;

         border: 1px solid #dfe5ed;

         border-radius: 10px;

         overflow: hidden;

      }


      .patient-result-item {

         padding: 12px 14px;

         border-bottom: 1px solid #edf0f5;

         cursor: pointer;

      }


      .patient-result-item:last-child {

         border-bottom: none;

      }


      .patient-result-item:hover {

         background: #f8fbff;

      }


      .patient-result-name {

         font-weight: 600;

         font-size: 13px;

         color: #172033;

      }


      .patient-result-meta {

         font-size: 11px;

         color: #8992a3;

         margin-top: 3px;

      }


      /* ====================================================
           SELECTED PATIENT
        ==================================================== */

      .selected-patient {

         display: none;

         background: #f7faff;

         border: 1px solid #dce8ff;

         border-radius: 12px;

         padding: 15px;

         margin-bottom: 20px;

      }


      .patient-avatar {

         width: 42px;

         height: 42px;

         border-radius: 50%;

         background: #eaf2ff;

         color: #2563eb;

         display: flex;

         align-items: center;

         justify-content: center;

         font-weight: 700;

         font-size: 15px;

      }


      .patient-name {

         font-size: 14px;

         font-weight: 700;

         color: #172033;

      }


      .patient-info {

         font-size: 11px;

         color: #6b7280;

         margin-top: 3px;

      }


      .patient-rm {

         font-size: 12px;

         color: #2563eb;

         font-weight: 700;

      }


      /* ====================================================
           FORM
        ==================================================== */

      .form-label {

         font-size: 13px;

         font-weight: 600;

         color: #475467;

         margin-bottom: 7px;

      }


      .required {

         color: #dc2626;

      }


      .form-control,
      .form-select {

         min-height: 42px;

         border-radius: 9px;

         border-color: #dfe4ec;

         font-size: 13px;

      }


      .form-control:focus,
      .form-select:focus {

         border-color: #2563eb;

         box-shadow:
            0 0 0 3px rgba(37, 99, 235, .10);

      }


      textarea.form-control {

         min-height: 90px;

      }


      /* ====================================================
           QUEUE INFO
        ==================================================== */

      .queue-preview {

         background: #f7faff;

         border: 1px solid #dce8ff;

         border-radius: 12px;

         padding: 16px;

         height: 100%;

      }


      .queue-preview-label {

         color: #718096;

         font-size: 12px;

         margin-bottom: 4px;

      }


      .queue-number {

         font-size: 32px;

         line-height: 1;

         font-weight: 700;

         color: #2563eb;

         margin: 8px 0;

      }


      .queue-detail {

         font-size: 12px;

         color: #667085;

      }


      /* ====================================================
           BUTTON
        ==================================================== */

      .btn-primary-custom {

         background: #2563eb;

         border: none;

         color: #fff;

         padding: 11px 18px;

         border-radius: 10px;

         font-size: 13px;

         font-weight: 600;

      }


      .btn-primary-custom:hover {

         background: #1d4ed8;

         color: #fff;

      }


      .btn-secondary-custom {

         background: #fff;

         border: 1px solid #dfe4ec;

         color: #596273;

         padding: 10px 16px;

         border-radius: 10px;

         font-size: 13px;

         font-weight: 600;

      }


      /* ====================================================
           TABLE
        ==================================================== */

      .table-card {

         background: #fff;

         border: 1px solid #e9edf4;

         border-radius: 14px;

         overflow: hidden;

      }


      .table-card-header {

         padding: 18px 20px;

         border-bottom: 1px solid #edf0f5;

         display: flex;

         justify-content: space-between;

         align-items: center;

         gap: 15px;

      }


      .table-title {

         margin: 0;

         font-size: 16px;

         font-weight: 700;

         color: #172033;

      }


      .table-count {

         color: #8992a3;

         font-size: 13px;

      }


      .table-responsive {

         overflow-x: auto;

      }


      .table {

         margin-bottom: 0;

         min-width: 1150px;

      }


      .table thead th {

         background: #f8fafc;

         border-bottom: 1px solid #e9edf4;

         color: #687286;

         font-size: 11px;

         font-weight: 600;

         padding: 13px 16px;

         white-space: nowrap;

      }


      .table tbody td {

         padding: 14px 16px;

         border-bottom: 1px solid #f0f2f6;

         vertical-align: middle;

         color: #3d4657;

         font-size: 12px;

      }


      .table tbody tr:last-child td {

         border-bottom: none;

      }


      .table tbody tr:hover {

         background: #fafcff;

      }


      .registration-number {

         font-weight: 700;

         color: #2563eb;

         font-size: 12px;

      }


      .patient-table-name {

         font-weight: 600;

         color: #172033;

      }


      .patient-table-rm {

         color: #8992a3;

         font-size: 10px;

         margin-top: 3px;

      }


      .doctor-name {

         font-weight: 600;

         color: #344054;

      }


      .doctor-poli {

         color: #8992a3;

         font-size: 10px;

         margin-top: 3px;

      }


      .queue-badge {

         display: inline-flex;

         align-items: center;

         justify-content: center;

         min-width: 44px;

         padding: 6px 9px;

         background: #eaf2ff;

         color: #2563eb;

         border-radius: 7px;

         font-weight: 700;

         font-size: 11px;

      }


      .payer-badge {

         display: inline-flex;

         align-items: center;

         padding: 5px 9px;

         border-radius: 7px;

         font-size: 10px;

         font-weight: 600;

      }


      .payer-badge.blue {

         background: #eaf2ff;

         color: #2563eb;

      }


      .payer-badge.green {

         background: #eafaf1;

         color: #15803d;

      }


      .payer-badge.purple {

         background: #f3edff;

         color: #7c3aed;

      }


      .payer-badge.orange {

         background: #fff5e8;

         color: #b86b00;

      }


      /* ====================================================
           STATUS
        ==================================================== */

      .registration-status {

         display: inline-flex;

         align-items: center;

         gap: 5px;

         padding: 5px 9px;

         border-radius: 20px;

         font-size: 10px;

         font-weight: 600;

         white-space: nowrap;

      }


      .registration-status.waiting {

         background: #fff5e8;

         color: #b86b00;

      }


      .registration-status.called {

         background: #eaf2ff;

         color: #2563eb;

      }


      .registration-status.process {

         background: #f3edff;

         color: #7c3aed;

      }


      .registration-status.done {

         background: #eafaf1;

         color: #15803d;

      }


      .registration-status.cancel {

         background: #fff1f2;

         color: #dc2626;

      }


      /* ====================================================
           ACTION
        ==================================================== */

      .action-buttons {

         display: flex;

         gap: 5px;

      }


      .btn-icon {

         width: 31px;

         height: 31px;

         border: 1px solid #e4e8ef;

         background: #fff;

         border-radius: 8px;

         display: inline-flex;

         align-items: center;

         justify-content: center;

         color: #687286;

      }


      .btn-icon:hover {

         background: #f5f7fa;

         color: #2563eb;

      }


      .btn-icon.delete:hover {

         color: #dc2626;

      }


      /* ====================================================
           MODAL
        ==================================================== */

      .modal-content {

         border: none;

         border-radius: 15px;

         overflow: hidden;

      }


      .modal-header {

         border-bottom: 1px solid #edf0f5;

         padding: 18px 20px;

      }


      .modal-title {

         font-size: 17px;

         font-weight: 700;

         color: #172033;

      }


      .modal-body {

         padding: 20px;

      }


      .modal-footer {

         border-top: 1px solid #edf0f5;

         padding: 15px 20px;

      }


      /* ====================================================
           RESPONSIVE
        ==================================================== */

      @media (max-width: 1100px) {

         .stat-grid {

            grid-template-columns:
               repeat(2, 1fr);

         }

      }


      @media (max-width: 700px) {

         .page-header {

            align-items: flex-start;

            flex-direction: column;

         }


         .stat-grid {

            grid-template-columns: 1fr;

         }


         .date-display {

            width: 100%;

         }

      }
   </style>

</head>


<body>


   <div class="app">


      <!-- ======================================================
         SIDEBAR
    ======================================================= -->

      <?php require 'components/sidebar.php'; ?>


      <!-- ======================================================
         MAIN
    ======================================================= -->

      <div class="main">


         <!-- HEADER -->

         <?php require 'components/header.php'; ?>


         <!-- ==================================================
             CONTENT
        =================================================== -->

         <main class="content">

            <div class="container-fluid py-4 px-4">


               <!-- ==================================================
                     PAGE HEADER
                =================================================== -->

               <div class="page-header">

                  <div>

                     <h1 class="page-title">

                        Registrasi Pasien

                     </h1>


                     <div class="page-subtitle">

                        Pendaftaran kunjungan pasien dan manajemen antrean

                     </div>

                  </div>


                  <div class="date-display">

                     <i class="fa-regular fa-calendar"></i>

                     <?= date('d F Y') ?>

                  </div>

               </div>


               <!-- ==================================================
                     STATISTICS
                =================================================== -->

               <div class="stat-grid">


                  <div class="stat-card">

                     <div class="stat-icon blue">

                        <i class="fa-solid fa-users"></i>

                     </div>


                     <div>

                        <div class="stat-label">

                           Registrasi Hari Ini

                        </div>


                        <div class="stat-value">

                           <?= $totalRegistrations ?>

                        </div>

                     </div>

                  </div>


                  <div class="stat-card">

                     <div class="stat-icon orange">

                        <i class="fa-solid fa-clock"></i>

                     </div>


                     <div>

                        <div class="stat-label">

                           Menunggu

                        </div>


                        <div class="stat-value">

                           <?= $waitingRegistrations ?>

                        </div>

                     </div>

                  </div>


                  <div class="stat-card">

                     <div class="stat-icon purple">

                        <i class="fa-solid fa-user-doctor"></i>

                     </div>


                     <div>

                        <div class="stat-label">

                           Dalam Pelayanan

                        </div>


                        <div class="stat-value">

                           <?= $processRegistrations ?>

                        </div>

                     </div>

                  </div>


                  <div class="stat-card">

                     <div class="stat-icon green">

                        <i class="fa-solid fa-circle-check"></i>

                     </div>


                     <div>

                        <div class="stat-label">

                           Selesai

                        </div>


                        <div class="stat-value">

                           <?= $completedRegistrations ?>

                        </div>

                     </div>

                  </div>

               </div>


               <!-- ==================================================
                     REGISTRATION FORM
                =================================================== -->

               <div class="registration-card">


                  <div class="registration-card-header">

                     <div>

                        <h5 class="section-title">

                           Registrasi Kunjungan

                        </h5>


                        <div class="section-subtitle">

                           Cari pasien lama atau daftarkan pasien baru

                        </div>

                     </div>


                     <span class="badge bg-primary-subtle text-primary">

                        <i class="fa-solid fa-plus me-1"></i>

                        Pendaftaran Baru

                     </span>

                  </div>


                  <div class="registration-card-body">


                     <!-- PATIENT SEARCH -->

                     <div class="patient-search-box">


                        <div class="search-title">

                           <i class="fa-solid fa-user me-1"></i>

                           Cari Pasien

                        </div>


                        <div class="row g-2">


                           <div class="col-md-10">

                              <div class="search-wrapper">

                                 <i class="fa-solid fa-magnifying-glass"></i>


                                 <input
                                    type="text"
                                    id="patientSearch"
                                    class="form-control"
                                    placeholder="Masukkan No. RM, NIK, atau nama pasien..."
                                    onkeyup="searchPatient()">

                              </div>


                              <div
                                 class="patient-result"
                                 id="patientResult"></div>

                           </div>


                           <div class="col-md-2">

                              <button
                                 type="button"
                                 class="btn btn-primary w-100"
                                 style="height:42px;"
                                 onclick="openNewPatient()">

                                 <i class="fa-solid fa-user-plus me-1"></i>

                                 Pasien Baru

                              </button>

                           </div>

                        </div>

                     </div>


                     <!-- SELECTED PATIENT -->

                     <div
                        class="selected-patient"
                        id="selectedPatient">

                        <div class="d-flex align-items-center gap-3">


                           <div
                              class="patient-avatar"
                              id="patientAvatar">

                              AF

                           </div>


                           <div class="flex-grow-1">

                              <div
                                 class="patient-name"
                                 id="selectedPatientName">

                                 Ahmad Fauzi

                              </div>


                              <div
                                 class="patient-info"
                                 id="selectedPatientInfo">

                                 Laki-laki • 12/05/1988 • 081234567890

                              </div>

                           </div>


                           <div class="text-end">

                              <div class="patient-rm">

                                 RM-000001

                              </div>


                              <button
                                 type="button"
                                 class="btn btn-sm btn-link p-0"
                                 onclick="clearPatient()">

                                 Ganti pasien

                              </button>

                           </div>

                        </div>

                     </div>


                     <!-- FORM -->

                     <form id="registrationForm">


                        <div class="row g-3">


                           <!-- POLI -->

                           <div class="col-md-4">

                              <label class="form-label">

                                 Poli / Layanan
                                 <span class="required">*</span>

                              </label>


                              <select
                                 class="form-select"
                                 id="poli"
                                 onchange="updateDoctor()">

                                 <option value="">

                                    Pilih Poli

                                 </option>


                                 <?php foreach ($polis as $poli): ?>

                                    <option
                                       value="<?= $poli['id'] ?>">

                                       <?= htmlspecialchars($poli['nama']) ?>

                                    </option>

                                 <?php endforeach; ?>

                              </select>

                           </div>


                           <!-- DOKTER -->

                           <div class="col-md-4">

                              <label class="form-label">

                                 Dokter
                                 <span class="required">*</span>

                              </label>


                              <select
                                 class="form-select"
                                 id="doctor">

                                 <option value="">

                                    Pilih Dokter

                                 </option>

                              </select>

                           </div>


                           <!-- JENIS KUNJUNGAN -->

                           <div class="col-md-4">

                              <label class="form-label">

                                 Jenis Kunjungan
                                 <span class="required">*</span>

                              </label>


                              <select
                                 class="form-select"
                                 id="visitType">

                                 <option value="Rawat Jalan">

                                    Rawat Jalan

                                 </option>

                                 <option value="Kontrol">

                                    Kontrol

                                 </option>

                                 <option value="Rujukan">

                                    Rujukan

                                 </option>

                                 <option value="Medical Check Up">

                                    Medical Check Up

                                 </option>

                              </select>

                           </div>


                           <!-- PENJAMIN -->

                           <div class="col-md-4">

                              <label class="form-label">

                                 Penjamin
                                 <span class="required">*</span>

                              </label>


                              <select
                                 class="form-select"
                                 id="payer">

                                 <option value="Umum">

                                    Umum

                                 </option>

                                 <option value="BPJS">

                                    BPJS

                                 </option>

                                 <option value="Asuransi">

                                    Asuransi

                                 </option>

                                 <option value="Perusahaan">

                                    Perusahaan

                                 </option>

                              </select>

                           </div>


                           <!-- NO RUJUKAN -->

                           <div class="col-md-4">

                              <label class="form-label">

                                 No. Rujukan

                              </label>


                              <input
                                 type="text"
                                 id="referralNumber"
                                 class="form-control"
                                 placeholder="Opsional">

                           </div>


                           <!-- NO BPJS -->

                           <div class="col-md-4">

                              <label class="form-label">

                                 No. Kartu / Identitas Penjamin

                              </label>


                              <input
                                 type="text"
                                 id="payerNumber"
                                 class="form-control"
                                 placeholder="Nomor kartu / peserta">

                           </div>


                           <!-- KELUHAN -->

                           <div class="col-md-8">

                              <label class="form-label">

                                 Keluhan Utama

                              </label>


                              <textarea
                                 id="complaint"
                                 class="form-control"
                                 placeholder="Tuliskan keluhan utama pasien..."></textarea>

                           </div>


                           <!-- QUEUE -->

                           <div class="col-md-4">

                              <div class="queue-preview">


                                 <div class="queue-preview-label">

                                    NOMOR ANTREAN BERIKUTNYA

                                 </div>


                                 <div
                                    class="queue-number"
                                    id="queueNumber">

                                    -

                                 </div>


                                 <div
                                    class="queue-detail"
                                    id="queueDetail">

                                    Pilih poli untuk melihat antrean

                                 </div>


                              </div>

                           </div>


                        </div>


                     </form>


                     <!-- BUTTON -->

                     <div
                        class="d-flex justify-content-end gap-2 mt-4 pt-3"
                        style="border-top:1px solid #edf0f5;">

                        <button
                           type="button"
                           class="btn-secondary-custom"
                           onclick="resetRegistration()">

                           <i class="fa-solid fa-rotate-left me-1"></i>

                           Reset

                        </button>


                        <button
                           type="button"
                           class="btn-primary-custom"
                           onclick="saveRegistration()">

                           <i class="fa-solid fa-check me-1"></i>

                           Daftarkan Pasien

                        </button>

                     </div>


                  </div>

               </div>


               <!-- ==================================================
                     REGISTRATION TABLE
                =================================================== -->

               <div class="table-card">


                  <div class="table-card-header">


                     <div>

                        <h5 class="table-title">

                           Registrasi Hari Ini

                        </h5>

                     </div>


                     <div class="d-flex align-items-center gap-3">


                        <div class="search-wrapper">

                           <i class="fa-solid fa-magnifying-glass"></i>


                           <input
                              type="text"
                              id="tableSearch"
                              class="form-control"
                              style="min-width:250px;"
                              placeholder="Cari pasien / No. RM..."
                              onkeyup="filterRegistration()">

                        </div>


                        <div
                           class="table-count"
                           id="tableCount">

                           <?= $totalRegistrations ?> registrasi

                        </div>

                     </div>

                  </div>


                  <div class="table-responsive">


                     <table class="table">


                        <thead>

                           <tr>

                              <th>
                                 REGISTRASI
                              </th>

                              <th>
                                 PASIEN
                              </th>

                              <th>
                                 POLI
                              </th>

                              <th>
                                 DOKTER
                              </th>

                              <th>
                                 KUNJUNGAN
                              </th>

                              <th>
                                 PENJAMIN
                              </th>

                              <th>
                                 ANTREAN
                              </th>

                              <th>
                                 JAM
                              </th>

                              <th>
                                 STATUS
                              </th>

                              <th>
                                 AKSI
                              </th>

                           </tr>

                        </thead>


                        <tbody id="registrationTableBody">


                           <?php foreach ($registrations as $registration): ?>


                              <tr
                                 data-search="<?= strtolower(
                                                   htmlspecialchars(
                                                      $registration['no_reg'] .
                                                         ' ' .
                                                         $registration['no_rm'] .
                                                         ' ' .
                                                         $registration['nama']
                                                   )
                                                ) ?>">


                                 <td>

                                    <div class="registration-number">

                                       <?= htmlspecialchars(
                                          $registration['no_reg']
                                       ) ?>

                                    </div>


                                    <div
                                       style="
                                                font-size:10px;
                                                color:#98a1b2;
                                                margin-top:3px;
                                            ">

                                       <?= htmlspecialchars(
                                          $registration['jam']
                                       ) ?>

                                    </div>

                                 </td>


                                 <td>

                                    <div class="patient-table-name">

                                       <?= htmlspecialchars(
                                          $registration['nama']
                                       ) ?>

                                    </div>


                                    <div class="patient-table-rm">

                                       <?= htmlspecialchars(
                                          $registration['no_rm']
                                       ) ?>

                                    </div>

                                 </td>


                                 <td>

                                    <?= htmlspecialchars(
                                       $registration['poli']
                                    ) ?>

                                 </td>


                                 <td>

                                    <div class="doctor-name">

                                       <?= htmlspecialchars(
                                          $registration['dokter']
                                       ) ?>

                                    </div>


                                    <div class="doctor-poli">

                                       Dokter

                                    </div>

                                 </td>


                                 <td>

                                    <?= htmlspecialchars(
                                       $registration['jenis']
                                    ) ?>

                                 </td>


                                 <td>

                                    <?= payerBadge(
                                       $registration['penjamin']
                                    ) ?>

                                 </td>


                                 <td>

                                    <span class="queue-badge">

                                       <?= htmlspecialchars(
                                          $registration['antrian']
                                       ) ?>

                                    </span>

                                 </td>


                                 <td>

                                    <?= htmlspecialchars(
                                       $registration['jam']
                                    ) ?>

                                 </td>


                                 <td>

                                    <?= registrationStatusBadge(
                                       $registration['status']
                                    ) ?>

                                 </td>


                                 <td>

                                    <div class="action-buttons">


                                       <button
                                          class="btn-icon"
                                          title="Detail"
                                          onclick="showRegistrationDetail(
                                                    <?= $registration['id'] ?>
                                                )">

                                          <i class="fa-regular fa-eye"></i>

                                       </button>


                                       <button
                                          class="btn-icon"
                                          title="Edit"
                                          onclick="editRegistration(
                                                    <?= $registration['id'] ?>
                                                )">

                                          <i class="fa-solid fa-pen"></i>

                                       </button>


                                       <button
                                          class="btn-icon delete"
                                          title="Batalkan"
                                          onclick="cancelRegistration(
                                                    <?= $registration['id'] ?>
                                                )">

                                          <i class="fa-solid fa-ban"></i>

                                       </button>


                                    </div>

                                 </td>


                              </tr>


                           <?php endforeach; ?>


                        </tbody>

                     </table>

                  </div>

               </div>


            </div>

         </main>


         <!-- FOOTER -->

         <?php require 'components/footer.php'; ?>


      </div>

   </div>


   <!-- ============================================================
     NEW PATIENT MODAL
============================================================ -->

   <div
      class="modal fade"
      id="newPatientModal"
      tabindex="-1">

      <div class="modal-dialog modal-lg modal-dialog-centered">

         <div class="modal-content">


            <div class="modal-header">

               <h5 class="modal-title">

                  Registrasi Pasien Baru

               </h5>


               <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"></button>

            </div>


            <div class="modal-body">


               <div class="row g-3">


                  <div class="col-md-4">

                     <label class="form-label">

                        NIK
                        <span class="required">*</span>

                     </label>


                     <input
                        type="text"
                        id="newNik"
                        class="form-control"
                        maxlength="16"
                        placeholder="16 digit NIK">

                  </div>


                  <div class="col-md-8">

                     <label class="form-label">

                        Nama Lengkap
                        <span class="required">*</span>

                     </label>


                     <input
                        type="text"
                        id="newName"
                        class="form-control"
                        placeholder="Nama lengkap pasien">

                  </div>


                  <div class="col-md-4">

                     <label class="form-label">

                        Tanggal Lahir
                        <span class="required">*</span>

                     </label>


                     <input
                        type="date"
                        id="newBirth"
                        class="form-control">

                  </div>


                  <div class="col-md-4">

                     <label class="form-label">

                        Jenis Kelamin
                        <span class="required">*</span>

                     </label>


                     <select
                        id="newGender"
                        class="form-select">

                        <option value="L">
                           Laki-laki
                        </option>

                        <option value="P">
                           Perempuan
                        </option>

                     </select>

                  </div>


                  <div class="col-md-4">

                     <label class="form-label">

                        No. Telepon

                     </label>


                     <input
                        type="text"
                        id="newPhone"
                        class="form-control"
                        placeholder="08xxxxxxxxxx">

                  </div>


                  <div class="col-12">

                     <label class="form-label">

                        Alamat
                        <span class="required">*</span>

                     </label>


                     <textarea
                        id="newAddress"
                        class="form-control"
                        rows="3"
                        placeholder="Alamat lengkap pasien"></textarea>

                  </div>


               </div>

            </div>


            <div class="modal-footer">


               <button
                  type="button"
                  class="btn btn-light"
                  data-bs-dismiss="modal">

                  Batal

               </button>


               <button
                  type="button"
                  class="btn btn-primary"
                  onclick="saveNewPatient()">

                  <i class="fa-solid fa-user-plus me-1"></i>

                  Simpan & Pilih Pasien

               </button>


            </div>

         </div>

      </div>

   </div>


   <!-- ============================================================
     DETAIL REGISTRATION MODAL
============================================================ -->

   <div
      class="modal fade"
      id="detailModal"
      tabindex="-1">

      <div class="modal-dialog modal-lg modal-dialog-centered">

         <div class="modal-content">


            <div class="modal-header">

               <h5 class="modal-title">

                  Detail Registrasi

               </h5>


               <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"></button>

            </div>


            <div class="modal-body">


               <div class="row g-3">


                  <div class="col-md-6">

                     <div class="detail-box">

                        <div class="detail-label">
                           NO. REGISTRASI
                        </div>

                        <div
                           class="detail-value"
                           id="detailReg"></div>

                     </div>

                  </div>


                  <div class="col-md-6">

                     <div class="detail-box">

                        <div class="detail-label">
                           NO. RM
                        </div>

                        <div
                           class="detail-value"
                           id="detailRM"></div>

                     </div>

                  </div>


                  <div class="col-md-6">

                     <div class="detail-box">

                        <div class="detail-label">
                           PASIEN
                        </div>

                        <div
                           class="detail-value"
                           id="detailPatient"></div>

                     </div>

                  </div>


                  <div class="col-md-6">

                     <div class="detail-box">

                        <div class="detail-label">
                           POLI
                        </div>

                        <div
                           class="detail-value"
                           id="detailPoli"></div>

                     </div>

                  </div>


                  <div class="col-md-6">

                     <div class="detail-box">

                        <div class="detail-label">
                           DOKTER
                        </div>

                        <div
                           class="detail-value"
                           id="detailDoctor"></div>

                     </div>

                  </div>


                  <div class="col-md-6">

                     <div class="detail-box">

                        <div class="detail-label">
                           PENJAMIN
                        </div>

                        <div
                           class="detail-value"
                           id="detailPayer"></div>

                     </div>

                  </div>


                  <div class="col-md-6">

                     <div class="detail-box">

                        <div class="detail-label">
                           ANTREAN
                        </div>

                        <div
                           class="detail-value"
                           id="detailQueue"></div>

                     </div>

                  </div>


                  <div class="col-md-6">

                     <div class="detail-box">

                        <div class="detail-label">
                           STATUS
                        </div>

                        <div
                           class="detail-value"
                           id="detailStatus"></div>

                     </div>

                  </div>


               </div>


            </div>


            <div class="modal-footer">

               <button
                  type="button"
                  class="btn btn-light"
                  data-bs-dismiss="modal">

                  Tutup

               </button>

            </div>

         </div>

      </div>

   </div>


   <!-- ============================================================
     CANCEL MODAL
============================================================ -->

   <div
      class="modal fade"
      id="cancelModal"
      tabindex="-1">

      <div class="modal-dialog modal-sm modal-dialog-centered">

         <div class="modal-content">


            <div class="modal-body text-center p-4">


               <div
                  class="mx-auto mb-3"
                  style="
                        width:55px;
                        height:55px;
                        border-radius:50%;
                        background:#fff1f2;
                        color:#dc2626;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        font-size:21px;
                    ">

                  <i class="fa-solid fa-ban"></i>

               </div>


               <h5 class="fw-bold">

                  Batalkan Registrasi?

               </h5>


               <p class="text-muted small">

                  Registrasi ini akan dibatalkan
                  dan nomor antrean tidak dapat
                  digunakan kembali.

               </p>


               <div class="d-flex gap-2">


                  <button
                     class="btn btn-light w-50"
                     data-bs-dismiss="modal">

                     Tidak

                  </button>


                  <button
                     class="btn btn-danger w-50"
                     onclick="confirmCancel()">

                     Batalkan

                  </button>


               </div>

            </div>

         </div>

      </div>

   </div>


   <!-- ============================================================
     BOOTSTRAP
============================================================ -->

   <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


   <script>
      /* ============================================================
   DATA
============================================================ */

      const patients =
         <?= json_encode(
            $patients,
            JSON_UNESCAPED_UNICODE
         ); ?>;


      const polis =
         <?= json_encode(
            $polis,
            JSON_UNESCAPED_UNICODE
         ); ?>;


      const doctors =
         <?= json_encode(
            $doctors,
            JSON_UNESCAPED_UNICODE
         ); ?>;


      const registrations =
         <?= json_encode(
            $registrations,
            JSON_UNESCAPED_UNICODE
         ); ?>;


      let selectedPatient = null;

      let selectedRegistrationId = null;


      /* ============================================================
         SEARCH PATIENT
      ============================================================ */

      function searchPatient() {

         const keyword =
            document
            .getElementById('patientSearch')
            .value
            .toLowerCase()
            .trim();


         const result =
            document.getElementById(
               'patientResult'
            );


         if (!keyword) {

            result.style.display = 'none';

            result.innerHTML = '';

            return;

         }


         const matches =
            patients.filter(patient =>

               patient.rm
               .toLowerCase()
               .includes(keyword)

               ||

               patient.nik
               .toLowerCase()
               .includes(keyword)

               ||

               patient.nama
               .toLowerCase()
               .includes(keyword)

            );


         if (!matches.length) {

            result.innerHTML = `
            <div class="patient-result-item">
                <div class="patient-result-name">
                    Pasien tidak ditemukan
                </div>
                <div class="patient-result-meta">
                    Silakan daftarkan sebagai pasien baru.
                </div>
            </div>
        `;

            result.style.display = 'block';

            return;

         }


         result.innerHTML =
            matches.map(patient => `

            <div
                class="patient-result-item"
                onclick="selectPatient(${patient.id})"
            >

                <div class="patient-result-name">

                    ${patient.nama}

                </div>

                <div class="patient-result-meta">

                    ${patient.rm}
                    &nbsp; • &nbsp;
                    ${patient.nik}
                    &nbsp; • &nbsp;
                    ${patient.telepon}

                </div>

            </div>

        `).join('');


         result.style.display = 'block';

      }


      /* ============================================================
         SELECT PATIENT
      ============================================================ */

      function selectPatient(id) {

         const patient =
            patients.find(
               item => item.id == id
            );


         if (!patient)
            return;


         selectedPatient = patient;


         document
            .getElementById('patientResult')
            .style.display = 'none';


         document
            .getElementById('patientSearch')
            .value = '';


         document
            .getElementById('selectedPatient')
            .style.display = 'block';


         document
            .getElementById('selectedPatientName')
            .innerText =
            patient.nama;


         document
            .getElementById('selectedPatientInfo')
            .innerText =
            (
               patient.jenis_kelamin === 'L' ?
               'Laki-laki' :
               'Perempuan'
            ) +
            ' • ' +
            formatDate(patient.tgl_lahir) +
            ' • ' +
            patient.telepon;


         document
            .getElementById('patientAvatar')
            .innerText =
            patient.nama
            .split(' ')
            .slice(0, 2)
            .map(
               word =>
               word.charAt(0)
               .toUpperCase()
            )
            .join('');


         document
            .querySelector('.patient-rm')
            .innerText =
            patient.rm;

      }


      /* ============================================================
         CLEAR PATIENT
      ============================================================ */

      function clearPatient() {

         selectedPatient = null;


         document
            .getElementById('selectedPatient')
            .style.display = 'none';

      }


      /* ============================================================
         NEW PATIENT
      ============================================================ */

      function openNewPatient() {

         document
            .getElementById('newNik')
            .value = '';

         document
            .getElementById('newName')
            .value = '';

         document
            .getElementById('newBirth')
            .value = '';

         document
            .getElementById('newPhone')
            .value = '';

         document
            .getElementById('newAddress')
            .value = '';


         const modal =
            new bootstrap.Modal(
               document.getElementById(
                  'newPatientModal'
               )
            );


         modal.show();

      }


      function saveNewPatient() {

         const nik =
            document
            .getElementById('newNik')
            .value
            .trim();


         const name =
            document
            .getElementById('newName')
            .value
            .trim();


         const birth =
            document
            .getElementById('newBirth')
            .value;


         const gender =
            document
            .getElementById('newGender')
            .value;


         const phone =
            document
            .getElementById('newPhone')
            .value
            .trim();


         const address =
            document
            .getElementById('newAddress')
            .value
            .trim();


         if (
            !nik ||
            !name ||
            !birth ||
            !address
         ) {

            alert(
               'Mohon lengkapi data pasien.'
            );

            return;

         }


         const newPatient = {

            id: Date.now(),

            rm: 'RM-000006',

            nik: nik,

            nama: name,

            tgl_lahir: birth,

            jenis_kelamin: gender,

            telepon: phone,

            alamat: address

         };


         patients.push(newPatient);


         selectPatient(
            newPatient.id
         );


         bootstrap.Modal
            .getInstance(
               document.getElementById(
                  'newPatientModal'
               )
            )
            .hide();


         alert(
            'Pasien baru berhasil dibuat.\n\n' +
            'No. RM: ' +
            newPatient.rm
         );

      }


      /* ============================================================
         UPDATE DOCTOR
      ============================================================ */

      function updateDoctor() {

         const poliId =
            document
            .getElementById('poli')
            .value;


         const doctorSelect =
            document
            .getElementById('doctor');


         doctorSelect.innerHTML = `

        <option value="">
            Pilih Dokter
        </option>

    `;


         if (!poliId) {

            updateQueue();

            return;

         }


         const poli =
            polis.find(
               item => item.id == poliId
            );


         if (!poli)
            return;


         const matchedDoctors =
            doctors.filter(
               doctor =>
               doctor.poli === poli.nama &&
               doctor.status === 'Hadir'
            );


         matchedDoctors.forEach(
            doctor => {

               const option =
                  document.createElement(
                     'option'
                  );


               option.value =
                  doctor.id;


               option.textContent =
                  doctor.nama;


               doctorSelect.appendChild(
                  option
               );

            }
         );


         updateQueue();

      }


      /* ============================================================
         QUEUE
      ============================================================ */

      function updateQueue() {

         const poliId =
            document
            .getElementById('poli')
            .value;


         const queue =
            document
            .getElementById('queueNumber');


         const detail =
            document
            .getElementById('queueDetail');


         if (!poliId) {

            queue.innerText = '-';

            detail.innerText =
               'Pilih poli untuk melihat antrean';

            return;

         }


         const poli =
            polis.find(
               item => item.id == poliId
            );


         if (!poli)
            return;


         const prefix =
            poli.id === 1 ?
            'A' :
            poli.id === 2 ?
            'B' :
            poli.id === 3 ?
            'C' :
            'D';


         const next =
            poli.antrian + 1;


         queue.innerText =
            prefix +
            '-' +
            String(next).padStart(3, '0');


         detail.innerText =
            poli.nama +
            ' • ' +
            poli.antrian +
            ' pasien sedang terdaftar';

      }


      /* ============================================================
         SAVE REGISTRATION
      ============================================================ */

      function saveRegistration() {

         if (!selectedPatient) {

            alert(
               'Silakan pilih pasien terlebih dahulu.'
            );

            return;

         }


         const poli =
            document
            .getElementById('poli')
            .value;


         const doctor =
            document
            .getElementById('doctor')
            .value;


         const payer =
            document
            .getElementById('payer')
            .value;


         if (!poli || !doctor || !payer) {

            alert(
               'Mohon lengkapi data registrasi.'
            );

            return;

         }


         const selectedPoli =
            polis.find(
               item => item.id == poli
            );


         const selectedDoctor =
            doctors.find(
               item => item.id == doctor
            );


         const prefix =
            selectedPoli.id === 1 ?
            'A' :
            selectedPoli.id === 2 ?
            'B' :
            selectedPoli.id === 3 ?
            'C' :
            'D';


         const queue =
            prefix +
            '-' +
            String(
               selectedPoli.antrian + 1
            ).padStart(3, '0');


         alert(
            'Registrasi berhasil dibuat!\n\n' +
            'Pasien : ' +
            selectedPatient.nama +
            '\n' +
            'No. RM : ' +
            selectedPatient.rm +
            '\n' +
            'Poli : ' +
            selectedPoli.nama +
            '\n' +
            'Dokter : ' +
            selectedDoctor.nama +
            '\n' +
            'Antrean : ' +
            queue
         );


         resetRegistration();

      }


      /* ============================================================
         RESET
      ============================================================ */

      function resetRegistration() {

         document
            .getElementById('registrationForm')
            .reset();


         clearPatient();


         document
            .getElementById('doctor')
            .innerHTML = `

            <option value="">
                Pilih Dokter
            </option>

        `;


         document
            .getElementById('queueNumber')
            .innerText = '-';


         document
            .getElementById('queueDetail')
            .innerText =
            'Pilih poli untuk melihat antrean';

      }


      /* ============================================================
         TABLE SEARCH
      ============================================================ */

      function filterRegistration() {

         const keyword =
            document
            .getElementById('tableSearch')
            .value
            .toLowerCase()
            .trim();


         const rows =
            document.querySelectorAll(
               '#registrationTableBody tr'
            );


         let visible = 0;


         rows.forEach(row => {

            const text =
               row.dataset.search || '';


            const show = !keyword ||
               text.includes(keyword);


            row.style.display =
               show ? '' : 'none';


            if (show)
               visible++;

         });


         document
            .getElementById('tableCount')
            .innerText =
            visible +
            ' registrasi';

      }


      /* ============================================================
         DETAIL
      ============================================================ */

      function showRegistrationDetail(id) {

         const registration =
            registrations.find(
               item => item.id == id
            );


         if (!registration)
            return;


         document
            .getElementById('detailReg')
            .innerText =
            registration.no_reg;


         document
            .getElementById('detailRM')
            .innerText =
            registration.no_rm;


         document
            .getElementById('detailPatient')
            .innerText =
            registration.nama;


         document
            .getElementById('detailPoli')
            .innerText =
            registration.poli;


         document
            .getElementById('detailDoctor')
            .innerText =
            registration.dokter;


         document
            .getElementById('detailPayer')
            .innerHTML =
            payerBadge(
               registration.penjamin
            );


         document
            .getElementById('detailQueue')
            .innerText =
            registration.antrian;


         document
            .getElementById('detailStatus')
            .innerHTML =
            registrationStatusBadge(
               registration.status
            );


         const modal =
            new bootstrap.Modal(
               document.getElementById(
                  'detailModal'
               )
            );


         modal.show();

      }


      /* ============================================================
         EDIT
      ============================================================ */

      function editRegistration(id) {

         const registration =
            registrations.find(
               item => item.id == id
            );


         if (!registration)
            return;


         alert(
            'Edit registrasi ' +
            registration.no_reg +
            '\n\n' +
            'Pada tahap production, halaman ini akan membuka form edit registrasi.'
         );

      }


      /* ============================================================
         CANCEL
      ============================================================ */

      function cancelRegistration(id) {

         selectedRegistrationId = id;


         const modal =
            new bootstrap.Modal(
               document.getElementById(
                  'cancelModal'
               )
            );


         modal.show();

      }


      function confirmCancel() {

         if (!selectedRegistrationId)
            return;


         const registration =
            registrations.find(
               item =>
               item.id ==
               selectedRegistrationId
            );


         if (!registration)
            return;


         alert(
            'Registrasi ' +
            registration.no_reg +
            ' berhasil dibatalkan.'
         );


         bootstrap.Modal
            .getInstance(
               document.getElementById(
                  'cancelModal'
               )
            )
            .hide();


         selectedRegistrationId = null;

      }


      /* ============================================================
         DATE FORMAT
      ============================================================ */

      function formatDate(date) {

         if (!date)
            return '-';


         const parts =
            date.split('-');


         if (parts.length !== 3)
            return date;


         return (
            parts[2] +
            '/' +
            parts[1] +
            '/' +
            parts[0]
         );

      }
   </script>


   <style>
      /* ============================================================
   DETAIL MODAL
============================================================ */

      .detail-box {

         background: #f8fafc;

         border: 1px solid #edf0f5;

         border-radius: 10px;

         padding: 13px;

      }


      .detail-label {

         font-size: 10px;

         color: #8992a3;

         margin-bottom: 5px;

      }


      .detail-value {

         font-size: 13px;

         font-weight: 600;

         color: #172033;

      }
   </style>


</body>

</html>