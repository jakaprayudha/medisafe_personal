<?php

/**
 * ============================================================
 * MASTER TARIFF
 * ============================================================
 * File : master-tariff.php
 * Deskripsi : Master Tarif Pelayanan Klinik
 * ============================================================
 */


/*
|--------------------------------------------------------------------------
| Dummy Data
|--------------------------------------------------------------------------
| Nanti diganti dengan query database.
*/

$tariffs = [

   [
      'id' => 1,
      'kode' => 'TRF-001',
      'kode_tindakan' => 'ACT-001',
      'tindakan' => 'Pemeriksaan Umum',
      'jenis_tarif' => 'Umum',
      'kategori' => 'Pelayanan Medis',
      'nominal' => 75000,
      'berlaku_mulai' => '2026-01-01',
      'status' => 'Aktif',
      'keterangan' => 'Tarif pemeriksaan umum pasien umum.'
   ],

   [
      'id' => 2,
      'kode' => 'TRF-002',
      'kode_tindakan' => 'ACT-001',
      'tindakan' => 'Pemeriksaan Umum',
      'jenis_tarif' => 'BPJS',
      'kategori' => 'Pelayanan Medis',
      'nominal' => 50000,
      'berlaku_mulai' => '2026-01-01',
      'status' => 'Aktif',
      'keterangan' => 'Tarif pelayanan sesuai ketentuan kerja sama.'
   ],

   [
      'id' => 3,
      'kode' => 'TRF-003',
      'kode_tindakan' => 'ACT-002',
      'tindakan' => 'Konsultasi Dokter',
      'jenis_tarif' => 'Umum',
      'kategori' => 'Konsultasi',
      'nominal' => 100000,
      'berlaku_mulai' => '2026-01-01',
      'status' => 'Aktif',
      'keterangan' => 'Tarif konsultasi dokter pasien umum.'
   ],

   [
      'id' => 4,
      'kode' => 'TRF-004',
      'kode_tindakan' => 'ACT-002',
      'tindakan' => 'Konsultasi Dokter',
      'jenis_tarif' => 'BPJS',
      'kategori' => 'Konsultasi',
      'nominal' => 75000,
      'berlaku_mulai' => '2026-01-01',
      'status' => 'Aktif',
      'keterangan' => 'Tarif konsultasi untuk pasien BPJS.'
   ],

   [
      'id' => 5,
      'kode' => 'TRF-005',
      'kode_tindakan' => 'ACT-003',
      'tindakan' => 'Tindakan Jahit Luka',
      'jenis_tarif' => 'Umum',
      'kategori' => 'Tindakan',
      'nominal' => 150000,
      'berlaku_mulai' => '2026-01-01',
      'status' => 'Aktif',
      'keterangan' => 'Tarif jahit luka sederhana.'
   ],

   [
      'id' => 6,
      'kode' => 'TRF-006',
      'kode_tindakan' => 'ACT-004',
      'tindakan' => 'Perawatan Luka',
      'jenis_tarif' => 'Umum',
      'kategori' => 'Perawatan',
      'nominal' => 85000,
      'berlaku_mulai' => '2026-01-01',
      'status' => 'Aktif',
      'keterangan' => 'Tarif perawatan luka.'
   ],

   [
      'id' => 7,
      'kode' => 'TRF-007',
      'kode_tindakan' => 'ACT-005',
      'tindakan' => 'Injeksi Intramuskular',
      'jenis_tarif' => 'Umum',
      'kategori' => 'Injeksi',
      'nominal' => 35000,
      'berlaku_mulai' => '2026-01-01',
      'status' => 'Aktif',
      'keterangan' => 'Tarif tindakan injeksi intramuskular.'
   ],

   [
      'id' => 8,
      'kode' => 'TRF-008',
      'kode_tindakan' => 'ACT-006',
      'tindakan' => 'Injeksi Intravena',
      'jenis_tarif' => 'Umum',
      'kategori' => 'Injeksi',
      'nominal' => 45000,
      'berlaku_mulai' => '2026-01-01',
      'status' => 'Aktif',
      'keterangan' => 'Tarif tindakan injeksi intravena.'
   ],

   [
      'id' => 9,
      'kode' => 'TRF-009',
      'kode_tindakan' => 'ACT-008',
      'tindakan' => 'Cek Gula Darah',
      'jenis_tarif' => 'Umum',
      'kategori' => 'Laboratorium',
      'nominal' => 30000,
      'berlaku_mulai' => '2026-01-01',
      'status' => 'Aktif',
      'keterangan' => 'Tarif pemeriksaan gula darah.'
   ],

   [
      'id' => 10,
      'kode' => 'TRF-010',
      'kode_tindakan' => 'ACT-010',
      'tindakan' => 'Cek Kolesterol',
      'jenis_tarif' => 'Umum',
      'kategori' => 'Laboratorium',
      'nominal' => 40000,
      'berlaku_mulai' => '2025-01-01',
      'status' => 'Nonaktif',
      'keterangan' => 'Tarif lama pemeriksaan kolesterol.'
   ],

   [
      'id' => 11,
      'kode' => 'TRF-011',
      'kode_tindakan' => 'ACT-003',
      'tindakan' => 'Tindakan Jahit Luka',
      'jenis_tarif' => 'Asuransi',
      'kategori' => 'Tindakan',
      'nominal' => 175000,
      'berlaku_mulai' => '2026-02-01',
      'status' => 'Aktif',
      'keterangan' => 'Tarif kerja sama asuransi.'
   ],

   [
      'id' => 12,
      'kode' => 'TRF-012',
      'kode_tindakan' => 'ACT-007',
      'tindakan' => 'Nebulizer',
      'jenis_tarif' => 'Umum',
      'kategori' => 'Terapi',
      'nominal' => 75000,
      'berlaku_mulai' => '2026-01-01',
      'status' => 'Aktif',
      'keterangan' => 'Tarif terapi nebulizer.'
   ],

];


/*
|--------------------------------------------------------------------------
| Helper
|--------------------------------------------------------------------------
*/

function formatRupiah($value)
{
   return 'Rp ' . number_format(
      $value,
      0,
      ',',
      '.'
   );
}


function statusBadge($status)
{
   if ($status === 'Aktif') {

      return '
            <span class="badge-status active">
                <i class="fa-solid fa-circle-check"></i>
                Aktif
            </span>
        ';
   }

   return '
        <span class="badge-status inactive">
            <i class="fa-solid fa-circle-xmark"></i>
            Nonaktif
        </span>
    ';
}


function payerBadge($type)
{
   $classes = [

      'Umum' => 'blue',
      'BPJS' => 'green',
      'Asuransi' => 'purple',
      'Perusahaan' => 'orange',

   ];

   $class = $classes[$type] ?? 'gray';

   return '
        <span class="payer-badge ' . $class . '">
            ' . htmlspecialchars($type) . '
        </span>
    ';
}


function formatTanggal($date)
{
   return date(
      'd/m/Y',
      strtotime($date)
   );
}


/*
|--------------------------------------------------------------------------
| Statistics
|--------------------------------------------------------------------------
*/

$totalTariffs = count($tariffs);

$activeTariffs = count(
   array_filter(
      $tariffs,
      fn($item) => $item['status'] === 'Aktif'
   )
);

$inactiveTariffs = count(
   array_filter(
      $tariffs,
      fn($item) => $item['status'] === 'Nonaktif'
   )
);

$totalPayers = count(
   array_unique(
      array_column(
         $tariffs,
         'jenis_tarif'
      )
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
      Master Tarif - Klinik Management System
   </title>


   <!-- ======================================================
         FONT
    ======================================================= -->

   <link
      rel="preconnect"
      href="https://fonts.googleapis.com">

   <link
      rel="preconnect"
      href="https://fonts.gstatic.com"
      crossorigin>

   <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
      rel="stylesheet">


   <!-- ======================================================
         BOOTSTRAP
    ======================================================= -->

   <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet">


   <!-- ======================================================
         FONT AWESOME
    ======================================================= -->

   <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      rel="stylesheet">


   <!-- ======================================================
         MAIN CSS
    ======================================================= -->

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

         font-size: 14px;

         font-weight: 600;

         transition: .2s;

      }


      .btn-primary-custom:hover {

         background: #1d4ed8;

         color: #fff;

         transform: translateY(-1px);

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


      .form-control,
      .form-select {

         min-height: 42px;

         border-radius: 9px;

         border-color: #dfe4ec;

         font-size: 14px;

      }


      .form-control:focus,
      .form-select:focus {

         border-color: #2563eb;

         box-shadow:
            0 0 0 3px rgba(37, 99, 235, .10);

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


      .btn-reset {

         height: 42px;

         padding: 0 16px;

         border-radius: 9px;

         border: 1px solid #dfe4ec;

         background: #fff;

         color: #5f6878;

         font-size: 14px;

      }


      .btn-reset:hover {

         background: #f7f8fa;

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

         font-size: 13px;

      }


      .table-responsive {

         overflow-x: auto;

      }


      .table {

         margin-bottom: 0;

         min-width: 1050px;

      }


      .table thead th {

         background: #f8fafc;

         border-bottom: 1px solid #e9edf4;

         color: #687286;

         font-size: 12px;

         font-weight: 600;

         padding: 13px 16px;

         white-space: nowrap;

      }


      .table tbody td {

         padding: 15px 16px;

         border-bottom: 1px solid #f0f2f6;

         vertical-align: middle;

         color: #3d4657;

         font-size: 13px;

      }


      .table tbody tr:last-child td {

         border-bottom: none;

      }


      .table tbody tr:hover {

         background: #fafcff;

      }


      /* ====================================================
           TARIFF INFO
        ==================================================== */

      .tariff-name {

         font-weight: 600;

         color: #172033;

         margin-bottom: 3px;

      }


      .tariff-code {

         font-size: 11px;

         color: #8b94a5;

      }


      .action-name {

         font-weight: 600;

         color: #344054;

      }


      .action-code {

         font-size: 11px;

         color: #98a1b2;

         margin-top: 3px;

      }


      .tariff-value {

         font-size: 14px;

         font-weight: 700;

         color: #172033;

         white-space: nowrap;

      }


      .effective-date {

         color: #596273;

         white-space: nowrap;

      }


      /* ====================================================
           PAYER BADGE
        ==================================================== */

      .payer-badge {

         display: inline-flex;

         align-items: center;

         padding: 5px 10px;

         border-radius: 7px;

         font-size: 11px;

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


      .payer-badge.gray {

         background: #f1f3f5;

         color: #667085;

      }


      /* ====================================================
           STATUS
        ==================================================== */

      .badge-status {

         display: inline-flex;

         align-items: center;

         gap: 5px;

         padding: 5px 9px;

         border-radius: 20px;

         font-size: 11px;

         font-weight: 600;

      }


      .badge-status.active {

         background: #eafaf1;

         color: #15803d;

      }


      .badge-status.inactive {

         background: #f1f3f5;

         color: #6b7280;

      }


      /* ====================================================
           ACTION BUTTON
        ==================================================== */

      .action-buttons {

         display: flex;

         gap: 5px;

      }


      .btn-icon {

         width: 32px;

         height: 32px;

         border: 1px solid #e4e8ef;

         background: #fff;

         border-radius: 8px;

         display: inline-flex;

         align-items: center;

         justify-content: center;

         color: #687286;

         transition: .2s;

      }


      .btn-icon:hover {

         background: #f5f7fa;

         color: #2563eb;

         border-color: #d5def0;

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

         font-size: 13px;

         font-weight: 600;

         color: #475467;

         margin-bottom: 7px;

      }


      .required {

         color: #dc2626;

      }


      .detail-item {

         margin-bottom: 17px;

      }


      .detail-label {

         font-size: 11px;

         color: #8992a3;

         margin-bottom: 4px;

      }


      .detail-value {

         font-size: 14px;

         font-weight: 600;

         color: #172033;

      }


      .info-box {

         background: #f7faff;

         border: 1px solid #dce8ff;

         border-radius: 10px;

         padding: 12px 14px;

         color: #506078;

         font-size: 12px;

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

            align-items: flex-start;

            flex-direction: column;

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

                        Master Tarif

                     </h1>


                     <div class="page-subtitle">

                        Kelola tarif pelayanan dan harga tindakan klinik

                     </div>

                  </div>


                  <button
                     class="btn-primary-custom"
                     onclick="openAddModal()">

                     <i class="fa-solid fa-plus me-2"></i>

                     Tambah Tarif

                  </button>

               </div>


               <!-- ==================================================
                     STATISTICS
                =================================================== -->

               <div class="stat-grid">


                  <!-- TOTAL -->

                  <div class="stat-card">

                     <div class="stat-icon blue">

                        <i class="fa-solid fa-tags"></i>

                     </div>


                     <div>

                        <div class="stat-label">

                           Total Tarif

                        </div>


                        <div class="stat-value">

                           <?= $totalTariffs ?>

                        </div>

                     </div>

                  </div>


                  <!-- ACTIVE -->

                  <div class="stat-card">

                     <div class="stat-icon green">

                        <i class="fa-solid fa-circle-check"></i>

                     </div>


                     <div>

                        <div class="stat-label">

                           Tarif Aktif

                        </div>


                        <div class="stat-value">

                           <?= $activeTariffs ?>

                        </div>

                     </div>

                  </div>


                  <!-- INACTIVE -->

                  <div class="stat-card">

                     <div class="stat-icon orange">

                        <i class="fa-solid fa-circle-xmark"></i>

                     </div>


                     <div>

                        <div class="stat-label">

                           Tarif Nonaktif

                        </div>


                        <div class="stat-value">

                           <?= $inactiveTariffs ?>

                        </div>

                     </div>

                  </div>


                  <!-- PAYER -->

                  <div class="stat-card">

                     <div class="stat-icon purple">

                        <i class="fa-solid fa-wallet"></i>

                     </div>


                     <div>

                        <div class="stat-label">

                           Jenis Tarif

                        </div>


                        <div class="stat-value">

                           <?= $totalPayers ?>

                        </div>

                     </div>

                  </div>

               </div>


               <!-- ==================================================
                     FILTER
                =================================================== -->

               <div class="filter-card">


                  <div class="filter-row">


                     <!-- SEARCH -->

                     <div class="search-wrapper">

                        <i class="fa-solid fa-magnifying-glass"></i>


                        <input
                           type="text"
                           id="searchInput"
                           class="form-control"
                           placeholder="Cari kode tarif atau nama tindakan..."
                           onkeyup="filterTariffs()">

                     </div>


                     <!-- JENIS TARIF -->

                     <select
                        id="payerFilter"
                        class="form-select"
                        onchange="filterTariffs()">

                        <option value="">
                           Semua Jenis Tarif
                        </option>

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


                     <!-- STATUS -->

                     <select
                        id="statusFilter"
                        class="form-select"
                        onchange="filterTariffs()">

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


                     <!-- RESET -->

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

                        Daftar Tarif

                     </h5>


                     <div
                        class="table-count"
                        id="tableCount">

                        <?= $totalTariffs ?> tarif

                     </div>

                  </div>


                  <div class="table-responsive">

                     <table class="table">


                        <thead>

                           <tr>

                              <th width="18%">
                                 KODE TARIF
                              </th>

                              <th width="23%">
                                 TINDAKAN
                              </th>

                              <th width="12%">
                                 JENIS TARIF
                              </th>

                              <th width="15%">
                                 KATEGORI
                              </th>

                              <th width="14%">
                                 NOMINAL
                              </th>

                              <th width="10%">
                                 BERLAKU
                              </th>

                              <th width="10%">
                                 STATUS
                              </th>

                              <th width="8%">
                                 AKSI
                              </th>

                           </tr>

                        </thead>


                        <tbody id="tariffTableBody">


                           <?php foreach ($tariffs as $tariff): ?>


                              <tr
                                 data-code="<?= strtolower(htmlspecialchars($tariff['kode'])) ?>"
                                 data-action="<?= strtolower(htmlspecialchars($tariff['tindakan'])) ?>"
                                 data-payer="<?= htmlspecialchars($tariff['jenis_tarif']) ?>"
                                 data-status="<?= htmlspecialchars($tariff['status']) ?>">


                                 <!-- CODE -->

                                 <td>

                                    <div class="tariff-name">

                                       <?= htmlspecialchars($tariff['kode']) ?>

                                    </div>


                                    <div class="tariff-code">

                                       <?= htmlspecialchars($tariff['kode_tindakan']) ?>

                                    </div>

                                 </td>


                                 <!-- ACTION -->

                                 <td>

                                    <div class="action-name">

                                       <?= htmlspecialchars($tariff['tindakan']) ?>

                                    </div>


                                    <div class="action-code">

                                       <?= htmlspecialchars($tariff['kode_tindakan']) ?>

                                    </div>

                                 </td>


                                 <!-- PAYER -->

                                 <td>

                                    <?= payerBadge($tariff['jenis_tarif']) ?>

                                 </td>


                                 <!-- CATEGORY -->

                                 <td>

                                    <?= htmlspecialchars($tariff['kategori']) ?>

                                 </td>


                                 <!-- NOMINAL -->

                                 <td>

                                    <span class="tariff-value">

                                       <?= formatRupiah($tariff['nominal']) ?>

                                    </span>

                                 </td>


                                 <!-- EFFECTIVE DATE -->

                                 <td>

                                    <span class="effective-date">

                                       <i class="fa-regular fa-calendar me-1"></i>

                                       <?= formatTanggal($tariff['berlaku_mulai']) ?>

                                    </span>

                                 </td>


                                 <!-- STATUS -->

                                 <td>

                                    <?= statusBadge($tariff['status']) ?>

                                 </td>


                                 <!-- ACTION -->

                                 <td>

                                    <div class="action-buttons">


                                       <button
                                          class="btn-icon"
                                          title="Detail"
                                          onclick="showDetail(<?= $tariff['id'] ?>)">

                                          <i class="fa-regular fa-eye"></i>

                                       </button>


                                       <button
                                          class="btn-icon"
                                          title="Edit"
                                          onclick="editTariff(<?= $tariff['id'] ?>)">

                                          <i class="fa-solid fa-pen"></i>

                                       </button>


                                       <button
                                          class="btn-icon delete"
                                          title="Hapus"
                                          onclick="deleteTariff(<?= $tariff['id'] ?>)">

                                          <i class="fa-regular fa-trash-can"></i>

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
     ADD / EDIT MODAL
============================================================ -->

   <div
      class="modal fade"
      id="tariffModal"
      tabindex="-1">

      <div class="modal-dialog modal-lg modal-dialog-centered">

         <div class="modal-content">


            <div class="modal-header">

               <h5
                  class="modal-title"
                  id="tariffModalTitle">

                  Tambah Tarif

               </h5>


               <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"></button>

            </div>


            <div class="modal-body">


               <form id="tariffForm">


                  <input
                     type="hidden"
                     id="tariffId">


                  <div class="row g-3">


                     <!-- KODE TARIF -->

                     <div class="col-md-4">

                        <label class="form-label">

                           Kode Tarif
                           <span class="required">*</span>

                        </label>


                        <input
                           type="text"
                           id="tariffCode"
                           class="form-control"
                           placeholder="Contoh: TRF-013">

                     </div>


                     <!-- TINDAKAN -->

                     <div class="col-md-8">

                        <label class="form-label">

                           Tindakan
                           <span class="required">*</span>

                        </label>


                        <select
                           id="tariffAction"
                           class="form-select">

                           <option value="">
                              Pilih Tindakan
                           </option>

                           <option value="ACT-001">
                              ACT-001 - Pemeriksaan Umum
                           </option>

                           <option value="ACT-002">
                              ACT-002 - Konsultasi Dokter
                           </option>

                           <option value="ACT-003">
                              ACT-003 - Tindakan Jahit Luka
                           </option>

                           <option value="ACT-004">
                              ACT-004 - Perawatan Luka
                           </option>

                           <option value="ACT-005">
                              ACT-005 - Injeksi Intramuskular
                           </option>

                           <option value="ACT-006">
                              ACT-006 - Injeksi Intravena
                           </option>

                           <option value="ACT-007">
                              ACT-007 - Nebulizer
                           </option>

                           <option value="ACT-008">
                              ACT-008 - Cek Gula Darah
                           </option>

                           <option value="ACT-009">
                              ACT-009 - Cek Asam Urat
                           </option>

                           <option value="ACT-010">
                              ACT-010 - Cek Kolesterol
                           </option>

                        </select>

                     </div>


                     <!-- JENIS TARIF -->

                     <div class="col-md-4">

                        <label class="form-label">

                           Jenis Tarif
                           <span class="required">*</span>

                        </label>


                        <select
                           id="tariffPayer"
                           class="form-select">

                           <option value="">
                              Pilih Jenis Tarif
                           </option>

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


                     <!-- KATEGORI -->

                     <div class="col-md-4">

                        <label class="form-label">

                           Kategori
                           <span class="required">*</span>

                        </label>


                        <select
                           id="tariffCategory"
                           class="form-select">

                           <option value="">
                              Pilih Kategori
                           </option>

                           <option value="Pelayanan Medis">
                              Pelayanan Medis
                           </option>

                           <option value="Konsultasi">
                              Konsultasi
                           </option>

                           <option value="Tindakan">
                              Tindakan
                           </option>

                           <option value="Perawatan">
                              Perawatan
                           </option>

                           <option value="Injeksi">
                              Injeksi
                           </option>

                           <option value="Terapi">
                              Terapi
                           </option>

                           <option value="Laboratorium">
                              Laboratorium
                           </option>

                        </select>

                     </div>


                     <!-- STATUS -->

                     <div class="col-md-4">

                        <label class="form-label">

                           Status

                        </label>


                        <select
                           id="tariffStatus"
                           class="form-select">

                           <option value="Aktif">
                              Aktif
                           </option>

                           <option value="Nonaktif">
                              Nonaktif
                           </option>

                        </select>

                     </div>


                     <!-- NOMINAL -->

                     <div class="col-md-6">

                        <label class="form-label">

                           Nominal Tarif
                           <span class="required">*</span>

                        </label>


                        <div class="input-group">

                           <span class="input-group-text">

                              Rp

                           </span>


                           <input
                              type="number"
                              id="tariffNominal"
                              class="form-control"
                              placeholder="0"
                              min="0">

                        </div>

                     </div>


                     <!-- BERLAKU -->

                     <div class="col-md-6">

                        <label class="form-label">

                           Berlaku Mulai
                           <span class="required">*</span>

                        </label>


                        <input
                           type="date"
                           id="tariffEffective"
                           class="form-control">

                     </div>


                     <!-- KETERANGAN -->

                     <div class="col-12">

                        <label class="form-label">

                           Keterangan

                        </label>


                        <textarea
                           id="tariffDescription"
                           class="form-control"
                           rows="3"
                           placeholder="Keterangan tarif..."></textarea>

                     </div>


                     <!-- INFO -->

                     <div class="col-12">

                        <div class="info-box">

                           <i class="fa-solid fa-circle-info me-1"></i>

                           Tarif akan digunakan pada proses pelayanan,
                           billing, transaksi kasir, laporan pendapatan,
                           dan perhitungan biaya pasien.

                        </div>

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
                  onclick="saveTariff()">

                  <i class="fa-solid fa-floppy-disk me-1"></i>

                  Simpan

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

      <div class="modal-dialog modal-md modal-dialog-centered">

         <div class="modal-content">


            <div class="modal-header">

               <h5 class="modal-title">

                  Detail Tarif

               </h5>


               <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"></button>

            </div>


            <div class="modal-body">


               <div class="row">


                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">

                           KODE TARIF

                        </div>


                        <div
                           class="detail-value"
                           id="detailCode"></div>

                     </div>

                  </div>


                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">

                           JENIS TARIF

                        </div>


                        <div
                           class="detail-value"
                           id="detailPayer"></div>

                     </div>

                  </div>


                  <div class="col-12">

                     <div class="detail-item">

                        <div class="detail-label">

                           TINDAKAN

                        </div>


                        <div
                           class="detail-value"
                           id="detailAction"></div>

                     </div>

                  </div>


                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">

                           KATEGORI

                        </div>


                        <div
                           class="detail-value"
                           id="detailCategory"></div>

                     </div>

                  </div>


                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">

                           STATUS

                        </div>


                        <div
                           class="detail-value"
                           id="detailStatus"></div>

                     </div>

                  </div>


                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">

                           NOMINAL

                        </div>


                        <div
                           class="detail-value"
                           id="detailNominal"></div>

                     </div>

                  </div>


                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">

                           BERLAKU MULAI

                        </div>


                        <div
                           class="detail-value"
                           id="detailEffective"></div>

                     </div>

                  </div>


                  <div class="col-12">

                     <div class="detail-item">

                        <div class="detail-label">

                           KETERANGAN

                        </div>


                        <div
                           class="detail-value"
                           id="detailDescription"></div>

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
     DELETE MODAL
============================================================ -->

   <div
      class="modal fade"
      id="deleteModal"
      tabindex="-1">

      <div class="modal-dialog modal-sm modal-dialog-centered">

         <div class="modal-content">


            <div class="modal-body text-center p-4">


               <div
                  class="mb-3 mx-auto"
                  style="
                        width:55px;
                        height:55px;
                        border-radius:50%;
                        background:#fff1f2;
                        color:#dc2626;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        font-size:22px;
                    ">

                  <i class="fa-solid fa-trash"></i>

               </div>


               <h5 class="fw-bold mb-2">

                  Hapus Tarif?

               </h5>


               <p class="text-muted small mb-4">

                  Data tarif akan dihapus dari master.
                  Pastikan tarif tidak sedang digunakan
                  pada transaksi pelayanan.

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

                     Hapus

                  </button>


               </div>

            </div>

         </div>

      </div>

   </div>


   <!-- ============================================================
     BOOTSTRAP JS
============================================================ -->

   <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


   <script>
      /* ============================================================
   DATA
============================================================ */

      const tariffs = <?= json_encode(
                           $tariffs,
                           JSON_UNESCAPED_UNICODE
                        ); ?>;


      let selectedTariffId = null;


      /* ============================================================
         ADD
      ============================================================ */

      function openAddModal() {

         document
            .getElementById('tariffForm')
            .reset();


         document
            .getElementById('tariffId')
            .value = '';


         document
            .getElementById('tariffStatus')
            .value = 'Aktif';


         document
            .getElementById('tariffEffective')
            .value =
            new Date()
            .toISOString()
            .split('T')[0];


         document
            .getElementById('tariffModalTitle')
            .innerText =
            'Tambah Tarif';


         const modal =
            new bootstrap.Modal(
               document.getElementById(
                  'tariffModal'
               )
            );


         modal.show();

      }


      /* ============================================================
         EDIT
      ============================================================ */

      function editTariff(id) {

         const tariff =
            tariffs.find(
               item => item.id == id
            );


         if (!tariff)
            return;


         document
            .getElementById('tariffId')
            .value =
            tariff.id;


         document
            .getElementById('tariffCode')
            .value =
            tariff.kode;


         document
            .getElementById('tariffAction')
            .value =
            tariff.kode_tindakan;


         document
            .getElementById('tariffPayer')
            .value =
            tariff.jenis_tarif;


         document
            .getElementById('tariffCategory')
            .value =
            tariff.kategori;


         document
            .getElementById('tariffNominal')
            .value =
            tariff.nominal;


         document
            .getElementById('tariffEffective')
            .value =
            tariff.berlaku_mulai;


         document
            .getElementById('tariffStatus')
            .value =
            tariff.status;


         document
            .getElementById('tariffDescription')
            .value =
            tariff.keterangan;


         document
            .getElementById('tariffModalTitle')
            .innerText =
            'Edit Tarif';


         const modal =
            new bootstrap.Modal(
               document.getElementById(
                  'tariffModal'
               )
            );


         modal.show();

      }


      /* ============================================================
         SAVE
      ============================================================ */

      function saveTariff() {

         const code =
            document
            .getElementById('tariffCode')
            .value
            .trim();


         const action =
            document
            .getElementById('tariffAction')
            .value;


         const payer =
            document
            .getElementById('tariffPayer')
            .value;


         const category =
            document
            .getElementById('tariffCategory')
            .value;


         const nominal =
            document
            .getElementById('tariffNominal')
            .value;


         const effective =
            document
            .getElementById('tariffEffective')
            .value;


         if (
            !code ||
            !action ||
            !payer ||
            !category ||
            !nominal ||
            !effective
         ) {

            alert(
               'Mohon lengkapi field yang wajib diisi.'
            );

            return;

         }


         alert(
            'Data tarif berhasil disimpan.\n\n' +
            'Pada tahap production, data akan disimpan ke database.'
         );


         bootstrap.Modal
            .getInstance(
               document.getElementById(
                  'tariffModal'
               )
            )
            .hide();

      }


      /* ============================================================
         DETAIL
      ============================================================ */

      function showDetail(id) {

         const tariff =
            tariffs.find(
               item => item.id == id
            );


         if (!tariff)
            return;


         document
            .getElementById('detailCode')
            .innerText =
            tariff.kode;


         document
            .getElementById('detailAction')
            .innerText =
            tariff.tindakan +
            ' (' +
            tariff.kode_tindakan +
            ')';


         document
            .getElementById('detailPayer')
            .innerHTML =
            payerBadge(
               tariff.jenis_tarif
            );


         document
            .getElementById('detailCategory')
            .innerText =
            tariff.kategori;


         document
            .getElementById('detailNominal')
            .innerText =
            formatRupiah(
               tariff.nominal
            );


         document
            .getElementById('detailEffective')
            .innerText =
            formatTanggal(
               tariff.berlaku_mulai
            );


         document
            .getElementById('detailStatus')
            .innerHTML =
            tariff.status === 'Aktif'

            ?
            `
                    <span class="badge-status active">
                        <i class="fa-solid fa-circle-check"></i>
                        Aktif
                    </span>
                  `

            :
            `
                    <span class="badge-status inactive">
                        <i class="fa-solid fa-circle-xmark"></i>
                        Nonaktif
                    </span>
                  `;


         document
            .getElementById('detailDescription')
            .innerText =
            tariff.keterangan || '-';


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

      function deleteTariff(id) {

         selectedTariffId = id;


         const modal =
            new bootstrap.Modal(
               document.getElementById(
                  'deleteModal'
               )
            );


         modal.show();

      }


      function confirmDelete() {

         if (!selectedTariffId)
            return;


         alert(
            'Tarif dengan ID ' +
            selectedTariffId +
            ' akan dihapus dari database.'
         );


         bootstrap.Modal
            .getInstance(
               document.getElementById(
                  'deleteModal'
               )
            )
            .hide();


         selectedTariffId = null;

      }


      /* ============================================================
         FILTER
      ============================================================ */

      function filterTariffs() {

         const search =
            document
            .getElementById('searchInput')
            .value
            .toLowerCase()
            .trim();


         const payer =
            document
            .getElementById('payerFilter')
            .value;


         const status =
            document
            .getElementById('statusFilter')
            .value;


         const rows =
            document.querySelectorAll(
               '#tariffTableBody tr'
            );


         let visible = 0;


         rows.forEach(row => {

            const code =
               row.dataset.code || '';


            const action =
               row.dataset.action || '';


            const rowPayer =
               row.dataset.payer || '';


            const rowStatus =
               row.dataset.status || '';


            const matchSearch = !search ||
               code.includes(search) ||
               action.includes(search);


            const matchPayer = !payer ||
               rowPayer === payer;


            const matchStatus = !status ||
               rowStatus === status;


            const show =
               matchSearch &&
               matchPayer &&
               matchStatus;


            row.style.display =
               show ? '' : 'none';


            if (show)
               visible++;

         });


         document
            .getElementById('tableCount')
            .innerText =
            visible + ' tarif';

      }


      /* ============================================================
         RESET
      ============================================================ */

      function resetFilter() {

         document
            .getElementById('searchInput')
            .value = '';


         document
            .getElementById('payerFilter')
            .value = '';


         document
            .getElementById('statusFilter')
            .value = '';


         filterTariffs();

      }


      /* ============================================================
         RUPIAH
      ============================================================ */

      function formatRupiah(value) {

         return 'Rp ' +
            new Intl.NumberFormat(
               'id-ID'
            ).format(value);

      }


      /* ============================================================
         DATE
      ============================================================ */

      function formatTanggal(date) {

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


</body>

</html>