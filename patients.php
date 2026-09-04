<?php

/**
 * ============================================================
 * PATIENTS
 * ============================================================
 * File : patients.php
 * Deskripsi : Master Data Pasien
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
      'tempat_lahir' => 'Medan',
      'tgl_lahir' => '1988-05-12',
      'jenis_kelamin' => 'L',
      'gol_darah' => 'O',
      'telepon' => '081234567890',
      'email' => 'ahmad@email.com',
      'alamat' => 'Jl. Merdeka No. 10',
      'kelurahan' => 'Kesawan',
      'kecamatan' => 'Medan Barat',
      'kota' => 'Medan',
      'provinsi' => 'Sumatera Utara',
      'pekerjaan' => 'Wiraswasta',
      'status_perkawinan' => 'Menikah',
      'penjamin' => 'Umum',
      'tanggal_daftar' => '2025-01-10',
      'kunjungan_terakhir' => '2026-09-04',
      'total_kunjungan' => 18,
      'status' => 'Aktif',
   ],

   [
      'id' => 2,
      'rm' => 'RM-000002',
      'nik' => '1271010202020002',
      'nama' => 'Siti Rahma',
      'tempat_lahir' => 'Medan',
      'tgl_lahir' => '1992-08-21',
      'jenis_kelamin' => 'P',
      'gol_darah' => 'A',
      'telepon' => '081298765432',
      'email' => 'siti@email.com',
      'alamat' => 'Jl. Sudirman No. 20',
      'kelurahan' => 'Petisah Tengah',
      'kecamatan' => 'Medan Petisah',
      'kota' => 'Medan',
      'provinsi' => 'Sumatera Utara',
      'pekerjaan' => 'Guru',
      'status_perkawinan' => 'Menikah',
      'penjamin' => 'BPJS',
      'tanggal_daftar' => '2025-02-15',
      'kunjungan_terakhir' => '2026-09-04',
      'total_kunjungan' => 24,
      'status' => 'Aktif',
   ],

   [
      'id' => 3,
      'rm' => 'RM-000003',
      'nik' => '1271010303030003',
      'nama' => 'Budi Santoso',
      'tempat_lahir' => 'Binjai',
      'tgl_lahir' => '1979-02-14',
      'jenis_kelamin' => 'L',
      'gol_darah' => 'B',
      'telepon' => '082112345678',
      'email' => 'budi@email.com',
      'alamat' => 'Jl. Diponegoro No. 15',
      'kelurahan' => 'Petisah Hulu',
      'kecamatan' => 'Medan Baru',
      'kota' => 'Medan',
      'provinsi' => 'Sumatera Utara',
      'pekerjaan' => 'Karyawan Swasta',
      'status_perkawinan' => 'Menikah',
      'penjamin' => 'Umum',
      'tanggal_daftar' => '2025-03-02',
      'kunjungan_terakhir' => '2026-09-04',
      'total_kunjungan' => 31,
      'status' => 'Aktif',
   ],

   [
      'id' => 4,
      'rm' => 'RM-000004',
      'nik' => '1271010404040004',
      'nama' => 'Dewi Lestari',
      'tempat_lahir' => 'Medan',
      'tgl_lahir' => '1996-11-03',
      'jenis_kelamin' => 'P',
      'gol_darah' => 'AB',
      'telepon' => '082198765432',
      'email' => 'dewi@email.com',
      'alamat' => 'Jl. Gatot Subroto No. 8',
      'kelurahan' => 'Sei Putih',
      'kecamatan' => 'Medan Petisah',
      'kota' => 'Medan',
      'provinsi' => 'Sumatera Utara',
      'pekerjaan' => 'Karyawan Swasta',
      'status_perkawinan' => 'Belum Menikah',
      'penjamin' => 'BPJS',
      'tanggal_daftar' => '2025-04-18',
      'kunjungan_terakhir' => '2026-09-04',
      'total_kunjungan' => 12,
      'status' => 'Aktif',
   ],

   [
      'id' => 5,
      'rm' => 'RM-000005',
      'nik' => '1271010505050005',
      'nama' => 'Rizky Pratama',
      'tempat_lahir' => 'Medan',
      'tgl_lahir' => '2001-06-18',
      'jenis_kelamin' => 'L',
      'gol_darah' => 'O',
      'telepon' => '085212345678',
      'email' => 'rizky@email.com',
      'alamat' => 'Jl. Ahmad Yani No. 5',
      'kelurahan' => 'Kesawan',
      'kecamatan' => 'Medan Barat',
      'kota' => 'Medan',
      'provinsi' => 'Sumatera Utara',
      'pekerjaan' => 'Mahasiswa',
      'status_perkawinan' => 'Belum Menikah',
      'penjamin' => 'Asuransi',
      'tanggal_daftar' => '2025-06-05',
      'kunjungan_terakhir' => '2026-09-04',
      'total_kunjungan' => 7,
      'status' => 'Aktif',
   ],

   [
      'id' => 6,
      'rm' => 'RM-000006',
      'nik' => '1271010606060006',
      'nama' => 'Nur Aisyah',
      'tempat_lahir' => 'Medan',
      'tgl_lahir' => '1985-09-28',
      'jenis_kelamin' => 'P',
      'gol_darah' => 'A',
      'telepon' => '081376543210',
      'email' => '',
      'alamat' => 'Jl. Karya No. 12',
      'kelurahan' => 'Karang Berombak',
      'kecamatan' => 'Medan Barat',
      'kota' => 'Medan',
      'provinsi' => 'Sumatera Utara',
      'pekerjaan' => 'Ibu Rumah Tangga',
      'status_perkawinan' => 'Menikah',
      'penjamin' => 'Umum',
      'tanggal_daftar' => '2025-07-20',
      'kunjungan_terakhir' => '2026-08-20',
      'total_kunjungan' => 9,
      'status' => 'Aktif',
   ],

   [
      'id' => 7,
      'rm' => 'RM-000007',
      'nik' => '1271010707070007',
      'nama' => 'Andi Saputra',
      'tempat_lahir' => 'Deli Serdang',
      'tgl_lahir' => '1990-04-17',
      'jenis_kelamin' => 'L',
      'gol_darah' => 'B',
      'telepon' => '082167890123',
      'email' => '',
      'alamat' => 'Jl. Kapten Muslim No. 7',
      'kelurahan' => 'Dwikora',
      'kecamatan' => 'Medan Helvetia',
      'kota' => 'Medan',
      'provinsi' => 'Sumatera Utara',
      'pekerjaan' => 'Karyawan Swasta',
      'status_perkawinan' => 'Menikah',
      'penjamin' => 'BPJS',
      'tanggal_daftar' => '2025-09-01',
      'kunjungan_terakhir' => '2026-08-15',
      'total_kunjungan' => 15,
      'status' => 'Aktif',
   ],

   [
      'id' => 8,
      'rm' => 'RM-000008',
      'nik' => '1271010808080008',
      'nama' => 'Maya Sari',
      'tempat_lahir' => 'Medan',
      'tgl_lahir' => '1994-12-10',
      'jenis_kelamin' => 'P',
      'gol_darah' => 'O',
      'telepon' => '085312345678',
      'email' => 'maya@email.com',
      'alamat' => 'Jl. Pancing No. 25',
      'kelurahan' => 'Sidorejo',
      'kecamatan' => 'Medan Tembung',
      'kota' => 'Medan',
      'provinsi' => 'Sumatera Utara',
      'pekerjaan' => 'Pegawai Negeri',
      'status_perkawinan' => 'Belum Menikah',
      'penjamin' => 'BPJS',
      'tanggal_daftar' => '2025-10-12',
      'kunjungan_terakhir' => '2026-07-22',
      'total_kunjungan' => 11,
      'status' => 'Aktif',
   ],

   [
      'id' => 9,
      'rm' => 'RM-000009',
      'nik' => '1271010909090009',
      'nama' => 'Hendra Wijaya',
      'tempat_lahir' => 'Medan',
      'tgl_lahir' => '1975-03-09',
      'jenis_kelamin' => 'L',
      'gol_darah' => 'AB',
      'telepon' => '081267891234',
      'email' => '',
      'alamat' => 'Jl. Sisingamangaraja No. 18',
      'kelurahan' => 'Teladan Barat',
      'kecamatan' => 'Medan Kota',
      'kota' => 'Medan',
      'provinsi' => 'Sumatera Utara',
      'pekerjaan' => 'Pengusaha',
      'status_perkawinan' => 'Menikah',
      'penjamin' => 'Umum',
      'tanggal_daftar' => '2025-11-03',
      'kunjungan_terakhir' => '2026-06-10',
      'total_kunjungan' => 5,
      'status' => 'Aktif',
   ],

   [
      'id' => 10,
      'rm' => 'RM-000010',
      'nik' => '1271011010100010',
      'nama' => 'Lina Marlina',
      'tempat_lahir' => 'Medan',
      'tgl_lahir' => '1982-07-26',
      'jenis_kelamin' => 'P',
      'gol_darah' => 'A',
      'telepon' => '081298761111',
      'email' => '',
      'alamat' => 'Jl. Denai No. 11',
      'kelurahan' => 'Tegal Sari',
      'kecamatan' => 'Medan Area',
      'kota' => 'Medan',
      'provinsi' => 'Sumatera Utara',
      'pekerjaan' => 'Pedagang',
      'status_perkawinan' => 'Menikah',
      'penjamin' => 'Umum',
      'tanggal_daftar' => '2025-12-01',
      'kunjungan_terakhir' => '2026-05-14',
      'total_kunjungan' => 8,
      'status' => 'Nonaktif',
   ],

];


/*
|--------------------------------------------------------------------------
| Helper
|--------------------------------------------------------------------------
*/

function formatTanggal($date)
{
   if (!$date) {
      return '-';
   }

   return date('d/m/Y', strtotime($date));
}


function genderBadge($gender)
{
   if ($gender === 'L') {

      return '
            <span class="gender-badge male">
                <i class="fa-solid fa-mars"></i>
                Laki-laki
            </span>
        ';
   }

   return '
        <span class="gender-badge female">
            <i class="fa-solid fa-venus"></i>
            Perempuan
        </span>
    ';
}


function patientStatusBadge($status)
{
   if ($status === 'Aktif') {

      return '
            <span class="status-badge active">
                <i class="fa-solid fa-circle-check"></i>
                Aktif
            </span>
        ';
   }

   return '
        <span class="status-badge inactive">
            <i class="fa-solid fa-circle-xmark"></i>
            Nonaktif
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

$totalPatients = count($patients);

$activePatients = count(
   array_filter(
      $patients,
      fn($item) => $item['status'] === 'Aktif'
   )
);

$malePatients = count(
   array_filter(
      $patients,
      fn($item) => $item['jenis_kelamin'] === 'L'
   )
);

$femalePatients = count(
   array_filter(
      $patients,
      fn($item) => $item['jenis_kelamin'] === 'P'
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
      Data Pasien - Klinik Management System
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


      /* ====================================================
           STATISTICS
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


      .stat-icon.green {

         background: #eafaf1;

         color: #16a34a;

      }


      .stat-icon.orange {

         background: #fff5e8;

         color: #ea8a00;

      }


      .stat-icon.purple {

         background: #f3edff;

         color: #7c3aed;

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
           FILTER
        ==================================================== */

      .filter-card {

         background: #fff;

         border: 1px solid #e9edf4;

         border-radius: 14px;

         padding: 18px;

         margin-bottom: 20px;

      }


      .filter-row {

         display: grid;

         grid-template-columns:
            2fr 1fr 1fr auto;

         gap: 12px;

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


      .btn-reset {

         height: 42px;

         padding: 0 16px;

         border-radius: 9px;

         border: 1px solid #dfe4ec;

         background: #fff;

         color: #5f6878;

         font-size: 13px;

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

      }


      .table-title {

         margin: 0;

         font-size: 16px;

         font-weight: 700;

         color: #172033;

      }


      .table-count {

         color: #8992a3;

         font-size: 12px;

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


      /* ====================================================
           PATIENT
        ==================================================== */

      .patient-name {

         font-weight: 600;

         color: #172033;

         font-size: 13px;

      }


      .patient-rm {

         color: #2563eb;

         font-size: 10px;

         font-weight: 600;

         margin-top: 3px;

      }


      .patient-nik {

         color: #8992a3;

         font-size: 10px;

         margin-top: 2px;

      }


      .birth-info {

         color: #596273;

      }


      .phone {

         color: #596273;

         white-space: nowrap;

      }


      .visit-info {

         color: #596273;

      }


      .visit-count {

         font-weight: 700;

         color: #172033;

      }


      /* ====================================================
           BADGES
        ==================================================== */

      .gender-badge {

         display: inline-flex;

         align-items: center;

         gap: 5px;

         padding: 5px 8px;

         border-radius: 7px;

         font-size: 10px;

         font-weight: 600;

      }


      .gender-badge.male {

         background: #eaf2ff;

         color: #2563eb;

      }


      .gender-badge.female {

         background: #f3edff;

         color: #7c3aed;

      }


      .status-badge {

         display: inline-flex;

         align-items: center;

         gap: 5px;

         padding: 5px 9px;

         border-radius: 20px;

         font-size: 10px;

         font-weight: 600;

      }


      .status-badge.active {

         background: #eafaf1;

         color: #15803d;

      }


      .status-badge.inactive {

         background: #f1f3f5;

         color: #6b7280;

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


      .form-label {

         font-size: 12px;

         font-weight: 600;

         color: #475467;

         margin-bottom: 7px;

      }


      .required {

         color: #dc2626;

      }


      .detail-box {

         background: #f8fafc;

         border: 1px solid #edf0f5;

         border-radius: 10px;

         padding: 13px;

         height: 100%;

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


      .patient-profile {

         background: #f7faff;

         border: 1px solid #dce8ff;

         border-radius: 12px;

         padding: 16px;

         margin-bottom: 18px;

      }


      .profile-avatar {

         width: 52px;

         height: 52px;

         border-radius: 50%;

         background: #eaf2ff;

         color: #2563eb;

         display: flex;

         align-items: center;

         justify-content: center;

         font-size: 17px;

         font-weight: 700;

      }


      .profile-name {

         font-size: 16px;

         font-weight: 700;

         color: #172033;

      }


      .profile-rm {

         font-size: 11px;

         color: #2563eb;

         font-weight: 600;

         margin-top: 3px;

      }


      /* ====================================================
           RESPONSIVE
        ==================================================== */

      @media (max-width: 1100px) {

         .stat-grid {

            grid-template-columns:
               repeat(2, 1fr);

         }


         .filter-row {

            grid-template-columns:
               1fr 1fr;

         }

      }


      @media (max-width: 700px) {

         .page-header {

            flex-direction: column;

            align-items: flex-start;

         }


         .stat-grid {

            grid-template-columns: 1fr;

         }


         .filter-row {

            grid-template-columns: 1fr;

         }


         .btn-primary-custom {

            width: 100%;

         }

      }
   </style>

</head>


<body>


   <div class="app">


      <!-- SIDEBAR -->

      <?php require 'components/sidebar.php'; ?>


      <!-- MAIN -->

      <div class="main">


         <!-- HEADER -->

         <?php require 'components/header.php'; ?>


         <!-- CONTENT -->

         <main class="content">


            <div class="container-fluid py-4 px-4">


               <!-- ==================================================
                     PAGE HEADER
                =================================================== -->

               <div class="page-header">


                  <div>

                     <h1 class="page-title">

                        Data Pasien

                     </h1>


                     <div class="page-subtitle">

                        Kelola data identitas dan informasi pasien klinik

                     </div>

                  </div>


                  <button
                     class="btn-primary-custom"
                     onclick="openAddModal()">

                     <i class="fa-solid fa-user-plus me-2"></i>

                     Tambah Pasien

                  </button>


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

                           Total Pasien

                        </div>


                        <div class="stat-value">

                           <?= $totalPatients ?>

                        </div>

                     </div>

                  </div>


                  <div class="stat-card">

                     <div class="stat-icon green">

                        <i class="fa-solid fa-user-check"></i>

                     </div>


                     <div>

                        <div class="stat-label">

                           Pasien Aktif

                        </div>


                        <div class="stat-value">

                           <?= $activePatients ?>

                        </div>

                     </div>

                  </div>


                  <div class="stat-card">

                     <div class="stat-icon blue">

                        <i class="fa-solid fa-mars"></i>

                     </div>


                     <div>

                        <div class="stat-label">

                           Laki-laki

                        </div>


                        <div class="stat-value">

                           <?= $malePatients ?>

                        </div>

                     </div>

                  </div>


                  <div class="stat-card">

                     <div class="stat-icon purple">

                        <i class="fa-solid fa-venus"></i>

                     </div>


                     <div>

                        <div class="stat-label">

                           Perempuan

                        </div>


                        <div class="stat-value">

                           <?= $femalePatients ?>

                        </div>

                     </div>

                  </div>

               </div>


               <!-- ==================================================
                     FILTER
                =================================================== -->

               <div class="filter-card">


                  <div class="filter-row">


                     <div class="search-wrapper">

                        <i class="fa-solid fa-magnifying-glass"></i>


                        <input
                           type="text"
                           id="searchInput"
                           class="form-control"
                           placeholder="Cari No. RM, NIK, nama, atau telepon..."
                           onkeyup="filterPatients()">

                     </div>


                     <select
                        id="genderFilter"
                        class="form-select"
                        onchange="filterPatients()">

                        <option value="">
                           Semua Jenis Kelamin
                        </option>

                        <option value="L">
                           Laki-laki
                        </option>

                        <option value="P">
                           Perempuan
                        </option>

                     </select>


                     <select
                        id="statusFilter"
                        class="form-select"
                        onchange="filterPatients()">

                        <option value="">
                           Semua Status
                        </option>

                        <option value="Aktif">
                           Aktif
                        </option>

                        <option value="Nonaktif">
                           Nonaktif
                        </option>

                     </select>


                     <button
                        class="btn-reset"
                        onclick="resetFilter()">

                        <i class="fa-solid fa-rotate-left me-1"></i>

                        Reset

                     </button>


                  </div>

               </div>


               <!-- ==================================================
                     TABLE
                =================================================== -->

               <div class="table-card">


                  <div class="table-card-header">


                     <h5 class="table-title">

                        Daftar Pasien

                     </h5>


                     <div
                        class="table-count"
                        id="tableCount">

                        <?= $totalPatients ?> pasien

                     </div>


                  </div>


                  <div class="table-responsive">


                     <table class="table">


                        <thead>

                           <tr>

                              <th width="18%">
                                 PASIEN
                              </th>

                              <th width="14%">
                                 NIK
                              </th>

                              <th width="13%">
                                 TGL. LAHIR
                              </th>

                              <th width="13%">
                                 JENIS KELAMIN
                              </th>

                              <th width="13%">
                                 TELEPON
                              </th>

                              <th width="10%">
                                 PENJAMIN
                              </th>

                              <th width="10%">
                                 KUNJUNGAN
                              </th>

                              <th width="10%">
                                 STATUS
                              </th>

                              <th width="8%">
                                 AKSI
                              </th>

                           </tr>

                        </thead>


                        <tbody id="patientTableBody">


                           <?php foreach ($patients as $patient): ?>


                              <tr
                                 data-search="<?= strtolower(
                                                   htmlspecialchars(
                                                      $patient['rm'] .
                                                         ' ' .
                                                         $patient['nik'] .
                                                         ' ' .
                                                         $patient['nama'] .
                                                         ' ' .
                                                         $patient['telepon']
                                                   )
                                                ) ?>"
                                 data-gender="<?= htmlspecialchars(
                                                   $patient['jenis_kelamin']
                                                ) ?>"
                                 data-status="<?= htmlspecialchars(
                                                   $patient['status']
                                                ) ?>">


                                 <!-- PATIENT -->

                                 <td>

                                    <div class="patient-name">

                                       <?= htmlspecialchars(
                                          $patient['nama']
                                       ) ?>

                                    </div>


                                    <div class="patient-rm">

                                       <?= htmlspecialchars(
                                          $patient['rm']
                                       ) ?>

                                    </div>


                                    <div class="patient-nik">

                                       <?= htmlspecialchars(
                                          $patient['nik']
                                       ) ?>

                                    </div>

                                 </td>


                                 <!-- NIK -->

                                 <td>

                                    <span class="birth-info">

                                       <?= htmlspecialchars(
                                          $patient['nik']
                                       ) ?>

                                    </span>

                                 </td>


                                 <!-- BIRTH -->

                                 <td>

                                    <div class="birth-info">

                                       <?= formatTanggal(
                                          $patient['tgl_lahir']
                                       ) ?>

                                    </div>


                                    <div
                                       style="
                                                font-size:10px;
                                                color:#8992a3;
                                                margin-top:3px;
                                            ">

                                       <?= htmlspecialchars(
                                          $patient['tempat_lahir']
                                       ) ?>

                                    </div>

                                 </td>


                                 <!-- GENDER -->

                                 <td>

                                    <?= genderBadge(
                                       $patient['jenis_kelamin']
                                    ) ?>

                                 </td>


                                 <!-- PHONE -->

                                 <td>

                                    <span class="phone">

                                       <i class="fa-solid fa-phone me-1"
                                          style="font-size:10px;">
                                       </i>

                                       <?= htmlspecialchars(
                                          $patient['telepon']
                                       ) ?>

                                    </span>

                                 </td>


                                 <!-- PAYER -->

                                 <td>

                                    <?= payerBadge(
                                       $patient['penjamin']
                                    ) ?>

                                 </td>


                                 <!-- VISIT -->

                                 <td>

                                    <div class="visit-count">

                                       <?= $patient['total_kunjungan'] ?>

                                       kali

                                    </div>


                                    <div
                                       style="
                                                font-size:10px;
                                                color:#8992a3;
                                                margin-top:3px;
                                            ">

                                       Terakhir
                                       <?= formatTanggal(
                                          $patient['kunjungan_terakhir']
                                       ) ?>

                                    </div>

                                 </td>


                                 <!-- STATUS -->

                                 <td>

                                    <?= patientStatusBadge(
                                       $patient['status']
                                    ) ?>

                                 </td>


                                 <!-- ACTION -->

                                 <td>

                                    <div class="action-buttons">


                                       <button
                                          class="btn-icon"
                                          title="Detail"
                                          onclick="showDetail(
                                                    <?= $patient['id'] ?>
                                                )">

                                          <i class="fa-regular fa-eye"></i>

                                       </button>


                                       <button
                                          class="btn-icon"
                                          title="Edit"
                                          onclick="editPatient(
                                                    <?= $patient['id'] ?>
                                                )">

                                          <i class="fa-solid fa-pen"></i>

                                       </button>


                                       <button
                                          class="btn-icon delete"
                                          title="Nonaktifkan"
                                          onclick="deletePatient(
                                                    <?= $patient['id'] ?>
                                                )">

                                          <i class="fa-solid fa-user-slash"></i>

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
     ADD / EDIT PATIENT MODAL
============================================================ -->

   <div
      class="modal fade"
      id="patientModal"
      tabindex="-1">

      <div class="modal-dialog modal-xl modal-dialog-centered">

         <div class="modal-content">


            <div class="modal-header">

               <h5
                  class="modal-title"
                  id="patientModalTitle">

                  Tambah Pasien

               </h5>


               <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"></button>

            </div>


            <div class="modal-body">


               <form id="patientForm">


                  <input
                     type="hidden"
                     id="patientId">


                  <!-- IDENTITAS -->

                  <div class="mb-3">

                     <div
                        class="fw-bold"
                        style="
                                font-size:14px;
                                color:#172033;
                            ">

                        <i class="fa-solid fa-id-card me-1"></i>

                        Identitas Pasien

                     </div>

                  </div>


                  <div class="row g-3">


                     <div class="col-md-4">

                        <label class="form-label">

                           No. Rekam Medis

                        </label>


                        <input
                           type="text"
                           id="patientRM"
                           class="form-control"
                           placeholder="Otomatis"
                           readonly>

                     </div>


                     <div class="col-md-4">

                        <label class="form-label">

                           NIK
                           <span class="required">*</span>

                        </label>


                        <input
                           type="text"
                           id="patientNIK"
                           class="form-control"
                           maxlength="16"
                           placeholder="16 digit NIK">

                     </div>


                     <div class="col-md-4">

                        <label class="form-label">

                           Status

                        </label>


                        <select
                           id="patientStatus"
                           class="form-select">

                           <option value="Aktif">
                              Aktif
                           </option>

                           <option value="Nonaktif">
                              Nonaktif
                           </option>

                        </select>

                     </div>


                     <div class="col-md-8">

                        <label class="form-label">

                           Nama Lengkap
                           <span class="required">*</span>

                        </label>


                        <input
                           type="text"
                           id="patientName"
                           class="form-control"
                           placeholder="Nama lengkap sesuai identitas">

                     </div>


                     <div class="col-md-4">

                        <label class="form-label">

                           Jenis Kelamin
                           <span class="required">*</span>

                        </label>


                        <select
                           id="patientGender"
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

                           Tempat Lahir

                        </label>


                        <input
                           type="text"
                           id="patientBirthPlace"
                           class="form-control"
                           placeholder="Kota tempat lahir">

                     </div>


                     <div class="col-md-4">

                        <label class="form-label">

                           Tanggal Lahir
                           <span class="required">*</span>

                        </label>


                        <input
                           type="date"
                           id="patientBirthDate"
                           class="form-control">

                     </div>


                     <div class="col-md-4">

                        <label class="form-label">

                           Golongan Darah

                        </label>


                        <select
                           id="patientBlood"
                           class="form-select">

                           <option value="">
                              Tidak diketahui
                           </option>

                           <option value="A">
                              A
                           </option>

                           <option value="B">
                              B
                           </option>

                           <option value="AB">
                              AB
                           </option>

                           <option value="O">
                              O
                           </option>

                        </select>

                     </div>


                  </div>


                  <!-- KONTAK -->

                  <div
                     class="mt-4 mb-3"
                     style="
                            font-size:14px;
                            font-weight:700;
                            color:#172033;
                        ">

                     <i class="fa-solid fa-address-book me-1"></i>

                     Kontak & Alamat

                  </div>


                  <div class="row g-3">


                     <div class="col-md-4">

                        <label class="form-label">

                           No. Telepon
                           <span class="required">*</span>

                        </label>


                        <input
                           type="text"
                           id="patientPhone"
                           class="form-control"
                           placeholder="08xxxxxxxxxx">

                     </div>


                     <div class="col-md-4">

                        <label class="form-label">

                           Email

                        </label>


                        <input
                           type="email"
                           id="patientEmail"
                           class="form-control"
                           placeholder="email pasien">

                     </div>


                     <div class="col-md-4">

                        <label class="form-label">

                           Pekerjaan

                        </label>


                        <input
                           type="text"
                           id="patientJob"
                           class="form-control"
                           placeholder="Pekerjaan">

                     </div>


                     <div class="col-md-8">

                        <label class="form-label">

                           Alamat
                           <span class="required">*</span>

                        </label>


                        <textarea
                           id="patientAddress"
                           class="form-control"
                           rows="2"
                           placeholder="Alamat lengkap"></textarea>

                     </div>


                     <div class="col-md-4">

                        <label class="form-label">

                           Status Perkawinan

                        </label>


                        <select
                           id="patientMarital"
                           class="form-select">

                           <option value="Belum Menikah">
                              Belum Menikah
                           </option>

                           <option value="Menikah">
                              Menikah
                           </option>

                           <option value="Cerai Hidup">
                              Cerai Hidup
                           </option>

                           <option value="Cerai Mati">
                              Cerai Mati
                           </option>

                        </select>

                     </div>


                  </div>


                  <!-- PENJAMIN -->

                  <div
                     class="mt-4 mb-3"
                     style="
                            font-size:14px;
                            font-weight:700;
                            color:#172033;
                        ">

                     <i class="fa-solid fa-shield-halved me-1"></i>

                     Penjamin

                  </div>


                  <div class="row g-3">


                     <div class="col-md-4">

                        <label class="form-label">

                           Penjamin Utama

                        </label>


                        <select
                           id="patientPayer"
                           class="form-select">

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


                  </div>


               </form>

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
                  onclick="savePatient()">

                  <i class="fa-solid fa-floppy-disk me-1"></i>

                  Simpan Pasien

               </button>


            </div>

         </div>

      </div>

   </div>


   <!-- ============================================================
     DETAIL MODAL
============================================================ -->

   <div
      class="modal fade"
      id="detailModal"
      tabindex="-1">

      <div class="modal-dialog modal-lg modal-dialog-centered">

         <div class="modal-content">


            <div class="modal-header">

               <h5 class="modal-title">

                  Detail Pasien

               </h5>


               <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"></button>

            </div>


            <div class="modal-body">


               <div class="patient-profile">


                  <div class="d-flex align-items-center gap-3">


                     <div
                        class="profile-avatar"
                        id="detailAvatar">

                        AF

                     </div>


                     <div class="flex-grow-1">


                        <div
                           class="profile-name"
                           id="detailName">

                           Ahmad Fauzi

                        </div>


                        <div
                           class="profile-rm"
                           id="detailRM">

                           RM-000001

                        </div>

                     </div>


                     <div
                        id="detailStatus"></div>


                  </div>

               </div>


               <div class="row g-3">


                  <div class="col-md-6">

                     <div class="detail-box">

                        <div class="detail-label">
                           NIK
                        </div>

                        <div
                           class="detail-value"
                           id="detailNIK"></div>

                     </div>

                  </div>


                  <div class="col-md-6">

                     <div class="detail-box">

                        <div class="detail-label">
                           JENIS KELAMIN
                        </div>

                        <div
                           class="detail-value"
                           id="detailGender"></div>

                     </div>

                  </div>


                  <div class="col-md-4">

                     <div class="detail-box">

                        <div class="detail-label">
                           TEMPAT / TANGGAL LAHIR
                        </div>

                        <div
                           class="detail-value"
                           id="detailBirth"></div>

                     </div>

                  </div>


                  <div class="col-md-4">

                     <div class="detail-box">

                        <div class="detail-label">
                           GOLONGAN DARAH
                        </div>

                        <div
                           class="detail-value"
                           id="detailBlood"></div>

                     </div>

                  </div>


                  <div class="col-md-4">

                     <div class="detail-box">

                        <div class="detail-label">
                           STATUS PERKAWINAN
                        </div>

                        <div
                           class="detail-value"
                           id="detailMarital"></div>

                     </div>

                  </div>


                  <div class="col-md-6">

                     <div class="detail-box">

                        <div class="detail-label">
                           TELEPON
                        </div>

                        <div
                           class="detail-value"
                           id="detailPhone"></div>

                     </div>

                  </div>


                  <div class="col-md-6">

                     <div class="detail-box">

                        <div class="detail-label">
                           EMAIL
                        </div>

                        <div
                           class="detail-value"
                           id="detailEmail"></div>

                     </div>

                  </div>


                  <div class="col-12">

                     <div class="detail-box">

                        <div class="detail-label">
                           ALAMAT
                        </div>

                        <div
                           class="detail-value"
                           id="detailAddress"></div>

                     </div>

                  </div>


                  <div class="col-md-4">

                     <div class="detail-box">

                        <div class="detail-label">
                           PEKERJAAN
                        </div>

                        <div
                           class="detail-value"
                           id="detailJob"></div>

                     </div>

                  </div>


                  <div class="col-md-4">

                     <div class="detail-box">

                        <div class="detail-label">
                           PENJAMIN
                        </div>

                        <div
                           class="detail-value"
                           id="detailPayer"></div>

                     </div>

                  </div>


                  <div class="col-md-4">

                     <div class="detail-box">

                        <div class="detail-label">
                           TOTAL KUNJUNGAN
                        </div>

                        <div
                           class="detail-value"
                           id="detailVisits"></div>

                     </div>

                  </div>


                  <div class="col-md-6">

                     <div class="detail-box">

                        <div class="detail-label">
                           TANGGAL TERDAFTAR
                        </div>

                        <div
                           class="detail-value"
                           id="detailRegistered"></div>

                     </div>

                  </div>


                  <div class="col-md-6">

                     <div class="detail-box">

                        <div class="detail-label">
                           KUNJUNGAN TERAKHIR
                        </div>

                        <div
                           class="detail-value"
                           id="detailLastVisit"></div>

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
     DELETE / DEACTIVATE MODAL
============================================================ -->

   <div
      class="modal fade"
      id="deleteModal"
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

                  <i class="fa-solid fa-user-slash"></i>

               </div>


               <h5 class="fw-bold">

                  Nonaktifkan Pasien?

               </h5>


               <p class="text-muted small">

                  Pasien tidak akan dihapus secara permanen.
                  Status pasien akan diubah menjadi nonaktif.

               </p>


               <div class="d-flex gap-2">


                  <button
                     class="btn btn-light w-50"
                     data-bs-dismiss="modal">

                     Batal

                  </button>


                  <button
                     class="btn btn-danger w-50"
                     onclick="confirmDelete()">

                     Nonaktifkan

                  </button>


               </div>

            </div>

         </div>

      </div>

   </div>


   <!-- BOOTSTRAP -->

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


      let selectedPatientId = null;


      /* ============================================================
         ADD
      ============================================================ */

      function openAddModal() {

         document
            .getElementById('patientForm')
            .reset();


         document
            .getElementById('patientId')
            .value = '';


         document
            .getElementById('patientRM')
            .value = 'Otomatis';


         document
            .getElementById('patientStatus')
            .value = 'Aktif';


         document
            .getElementById('patientModalTitle')
            .innerText =
            'Tambah Pasien';


         const modal =
            new bootstrap.Modal(
               document.getElementById(
                  'patientModal'
               )
            );


         modal.show();

      }


      /* ============================================================
         EDIT
      ============================================================ */

      function editPatient(id) {

         const patient =
            patients.find(
               item => item.id == id
            );


         if (!patient)
            return;


         document
            .getElementById('patientId')
            .value =
            patient.id;


         document
            .getElementById('patientRM')
            .value =
            patient.rm;


         document
            .getElementById('patientNIK')
            .value =
            patient.nik;


         document
            .getElementById('patientName')
            .value =
            patient.nama;


         document
            .getElementById('patientGender')
            .value =
            patient.jenis_kelamin;


         document
            .getElementById('patientBirthPlace')
            .value =
            patient.tempat_lahir;


         document
            .getElementById('patientBirthDate')
            .value =
            patient.tgl_lahir;


         document
            .getElementById('patientBlood')
            .value =
            patient.gol_darah;


         document
            .getElementById('patientPhone')
            .value =
            patient.telepon;


         document
            .getElementById('patientEmail')
            .value =
            patient.email;


         document
            .getElementById('patientJob')
            .value =
            patient.pekerjaan;


         document
            .getElementById('patientAddress')
            .value =
            patient.alamat;


         document
            .getElementById('patientMarital')
            .value =
            patient.status_perkawinan;


         document
            .getElementById('patientPayer')
            .value =
            patient.penjamin;


         document
            .getElementById('patientStatus')
            .value =
            patient.status;


         document
            .getElementById('patientModalTitle')
            .innerText =
            'Edit Data Pasien';


         const modal =
            new bootstrap.Modal(
               document.getElementById(
                  'patientModal'
               )
            );


         modal.show();

      }


      /* ============================================================
         SAVE
      ============================================================ */

      function savePatient() {

         const nik =
            document
            .getElementById('patientNIK')
            .value
            .trim();


         const name =
            document
            .getElementById('patientName')
            .value
            .trim();


         const birth =
            document
            .getElementById('patientBirthDate')
            .value;


         const phone =
            document
            .getElementById('patientPhone')
            .value
            .trim();


         const address =
            document
            .getElementById('patientAddress')
            .value
            .trim();


         if (
            !nik ||
            !name ||
            !birth ||
            !phone ||
            !address
         ) {

            alert(
               'Mohon lengkapi data pasien yang wajib diisi.'
            );

            return;

         }


         if (nik.length !== 16) {

            alert(
               'NIK harus terdiri dari 16 digit.'
            );

            return;

         }


         alert(
            'Data pasien berhasil disimpan.\n\n' +
            'Pada tahap production, data akan disimpan ke database.'
         );


         bootstrap.Modal
            .getInstance(
               document.getElementById(
                  'patientModal'
               )
            )
            .hide();

      }


      /* ============================================================
         DETAIL
      ============================================================ */

      function showDetail(id) {

         const patient =
            patients.find(
               item => item.id == id
            );


         if (!patient)
            return;


         document
            .getElementById('detailName')
            .innerText =
            patient.nama;


         document
            .getElementById('detailRM')
            .innerText =
            patient.rm;


         document
            .getElementById('detailNIK')
            .innerText =
            patient.nik;


         document
            .getElementById('detailGender')
            .innerHTML =
            genderBadge(
               patient.jenis_kelamin
            );


         document
            .getElementById('detailBirth')
            .innerText =
            patient.tempat_lahir +
            ', ' +
            formatDate(
               patient.tgl_lahir
            );


         document
            .getElementById('detailBlood')
            .innerText =
            patient.gol_darah || '-';


         document
            .getElementById('detailMarital')
            .innerText =
            patient.status_perkawinan;


         document
            .getElementById('detailPhone')
            .innerText =
            patient.telepon;


         document
            .getElementById('detailEmail')
            .innerText =
            patient.email || '-';


         document
            .getElementById('detailAddress')
            .innerText =
            patient.alamat +
            ', ' +
            patient.kelurahan +
            ', ' +
            patient.kecamatan +
            ', ' +
            patient.kota;


         document
            .getElementById('detailJob')
            .innerText =
            patient.pekerjaan || '-';


         document
            .getElementById('detailPayer')
            .innerHTML =
            payerBadge(
               patient.penjamin
            );


         document
            .getElementById('detailVisits')
            .innerText =
            patient.total_kunjungan +
            ' kali';


         document
            .getElementById('detailRegistered')
            .innerText =
            formatDate(
               patient.tanggal_daftar
            );


         document
            .getElementById('detailLastVisit')
            .innerText =
            formatDate(
               patient.kunjungan_terakhir
            );


         document
            .getElementById('detailStatus')
            .innerHTML =
            patientStatusBadge(
               patient.status
            );


         document
            .getElementById('detailAvatar')
            .innerText =
            patient.nama
            .split(' ')
            .slice(0, 2)
            .map(
               word =>
               word
               .charAt(0)
               .toUpperCase()
            )
            .join('');


         const modal =
            new bootstrap.Modal(
               document.getElementById(
                  'detailModal'
               )
            );


         modal.show();

      }


      /* ============================================================
         DELETE
      ============================================================ */

      function deletePatient(id) {

         selectedPatientId = id;


         const modal =
            new bootstrap.Modal(
               document.getElementById(
                  'deleteModal'
               )
            );


         modal.show();

      }


      function confirmDelete() {

         if (!selectedPatientId)
            return;


         const patient =
            patients.find(
               item =>
               item.id ==
               selectedPatientId
            );


         if (!patient)
            return;


         alert(
            'Pasien ' +
            patient.nama +
            ' berhasil dinonaktifkan.'
         );


         bootstrap.Modal
            .getInstance(
               document.getElementById(
                  'deleteModal'
               )
            )
            .hide();


         selectedPatientId = null;

      }


      /* ============================================================
         FILTER
      ============================================================ */

      function filterPatients() {

         const search =
            document
            .getElementById('searchInput')
            .value
            .toLowerCase()
            .trim();


         const gender =
            document
            .getElementById('genderFilter')
            .value;


         const status =
            document
            .getElementById('statusFilter')
            .value;


         const rows =
            document.querySelectorAll(
               '#patientTableBody tr'
            );


         let visible = 0;


         rows.forEach(row => {

            const text =
               row.dataset.search || '';


            const rowGender =
               row.dataset.gender || '';


            const rowStatus =
               row.dataset.status || '';


            const matchSearch = !search ||
               text.includes(search);


            const matchGender = !gender ||
               rowGender === gender;


            const matchStatus = !status ||
               rowStatus === status;


            const show =
               matchSearch &&
               matchGender &&
               matchStatus;


            row.style.display =
               show ? '' : 'none';


            if (show)
               visible++;

         });


         document
            .getElementById('tableCount')
            .innerText =
            visible +
            ' pasien';

      }


      /* ============================================================
         RESET FILTER
      ============================================================ */

      function resetFilter() {

         document
            .getElementById('searchInput')
            .value = '';


         document
            .getElementById('genderFilter')
            .value = '';


         document
            .getElementById('statusFilter')
            .value = '';


         filterPatients();

      }


      /* ============================================================
         DATE
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


      /* ============================================================
         BADGE
      ============================================================ */

      function genderBadge(gender) {

         if (gender === 'L') {

            return `
            <span class="gender-badge male">
                <i class="fa-solid fa-mars"></i>
                Laki-laki
            </span>
        `;

         }


         return `
        <span class="gender-badge female">
            <i class="fa-solid fa-venus"></i>
            Perempuan
        </span>
    `;

      }


      function patientStatusBadge(status) {

         if (status === 'Aktif') {

            return `
            <span class="status-badge active">
                <i class="fa-solid fa-circle-check"></i>
                Aktif
            </span>
        `;

         }


         return `
        <span class="status-badge inactive">
            <i class="fa-solid fa-circle-xmark"></i>
            Nonaktif
        </span>
    `;

      }


      function payerBadge(payer) {

         let className = 'blue';


         if (payer === 'BPJS')
            className = 'green';

         if (payer === 'Asuransi')
            className = 'purple';

         if (payer === 'Perusahaan')
            className = 'orange';


         return `
        <span class="payer-badge ${className}">
            ${payer}
        </span>
    `;

      }
   </script>


</body>

</html>