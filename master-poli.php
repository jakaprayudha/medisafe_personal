<?php

/**
 * ============================================================
 * MASTER POLI / LAYANAN
 * ============================================================
 * File        : master-poli.php
 * Description : Master Data Poli / Layanan Klinik
 * ============================================================
 */


/* ============================================================
   DUMMY DATA
   ============================================================ */

$polis = [

   [
      'id'            => 1,
      'kode'          => 'POL001',
      'nama'          => 'Poli Umum',
      'jenis'         => 'Poli Klinik',
      'lantai'        => 'Lantai 1',
      'ruangan'       => 'Ruang 01',
      'penanggungjawab' => 'dr. Andi Pratama',
      'dokter'        => 2,
      'staff'         => 3,
      'jadwal'        => 'Senin - Jumat',
      'jam'           => '08:00 - 16:00',
      'antrian'       => 'Aktif',
      'status'        => 'Aktif',
      'keterangan'    => 'Pelayanan pemeriksaan umum dan konsultasi kesehatan.',
   ],

   [
      'id'            => 2,
      'kode'          => 'POL002',
      'nama'          => 'Poli Gigi',
      'jenis'         => 'Poli Klinik',
      'lantai'        => 'Lantai 1',
      'ruangan'       => 'Ruang 02',
      'penanggungjawab' => 'drg. Budi Santoso',
      'dokter'        => 1,
      'staff'         => 2,
      'jadwal'        => 'Selasa - Sabtu',
      'jam'           => '09:00 - 16:00',
      'antrian'       => 'Aktif',
      'status'        => 'Aktif',
      'keterangan'    => 'Pelayanan pemeriksaan dan perawatan gigi.',
   ],

   [
      'id'            => 3,
      'kode'          => 'POL003',
      'nama'          => 'KIA / Kebidanan',
      'jenis'         => 'Kebidanan',
      'lantai'        => 'Lantai 1',
      'ruangan'       => 'Ruang 03',
      'penanggungjawab' => 'Bdn. Rina Amelia',
      'dokter'        => 0,
      'staff'         => 2,
      'jadwal'        => 'Senin - Kamis',
      'jam'           => '08:00 - 15:00',
      'antrian'       => 'Aktif',
      'status'        => 'Aktif',
      'keterangan'    => 'Pelayanan kesehatan ibu dan anak serta kebidanan.',
   ],

   [
      'id'            => 4,
      'kode'          => 'POL004',
      'nama'          => 'Laboratorium',
      'jenis'         => 'Laboratorium',
      'lantai'        => 'Lantai 1',
      'ruangan'       => 'Ruang Lab',
      'penanggungjawab' => 'Andi Saputra, A.Md.AK',
      'dokter'        => 0,
      'staff'         => 2,
      'jadwal'        => 'Senin - Sabtu',
      'jam'           => '07:30 - 15:00',
      'antrian'       => 'Aktif',
      'status'        => 'Aktif',
      'keterangan'    => 'Pelayanan pemeriksaan laboratorium klinik.',
   ],

   [
      'id'            => 5,
      'kode'          => 'POL005',
      'nama'          => 'Konsultasi Gizi',
      'jenis'         => 'Konsultasi',
      'lantai'        => 'Lantai 1',
      'ruangan'       => 'Ruang 04',
      'penanggungjawab' => 'Dewi Lestari',
      'dokter'        => 0,
      'staff'         => 1,
      'jadwal'        => 'Senin - Jumat',
      'jam'           => '09:00 - 14:00',
      'antrian'       => 'Aktif',
      'status'        => 'Aktif',
      'keterangan'    => 'Pelayanan konsultasi dan edukasi gizi.',
   ],

   [
      'id'            => 6,
      'kode'          => 'POL006',
      'nama'           => 'Fisioterapi',
      'jenis'          => 'Rehabilitasi',
      'lantai'         => 'Lantai 2',
      'ruangan'        => 'Ruang Rehab',
      'penanggungjawab' => 'Fisioterapis Klinik',
      'dokter'         => 0,
      'staff'          => 1,
      'jadwal'         => 'Senin - Rabu',
      'jam'            => '09:00 - 15:00',
      'antrian'        => 'Nonaktif',
      'status'         => 'Nonaktif',
      'keterangan'     => 'Pelayanan fisioterapi dan rehabilitasi.',
   ],

];


/* ============================================================
   STATISTICS
   ============================================================ */

$totalPoli = count($polis);

$activePoli = count(
   array_filter($polis, function ($poli) {
      return $poli['status'] === 'Aktif';
   })
);

$inactivePoli = $totalPoli - $activePoli;

$activeQueue = count(
   array_filter($polis, function ($poli) {
      return $poli['antrian'] === 'Aktif';
   })
);

?>

<!DOCTYPE html>
<html lang="id">

<head>

   <meta charset="UTF-8">

   <meta name="viewport"
      content="width=device-width, initial-scale=1.0">

   <title>
      Master Poli / Layanan - Klinik Management System
   </title>


   <!-- ======================================================
         GOOGLE FONT
         ====================================================== -->

   <link rel="preconnect"
      href="https://fonts.googleapis.com">

   <link rel="preconnect"
      href="https://fonts.gstatic.com"
      crossorigin>

   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet">


   <!-- ======================================================
         BOOTSTRAP
         ====================================================== -->

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet">


   <!-- ======================================================
         FONT AWESOME
         ====================================================== -->

   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      rel="stylesheet">


   <!-- ======================================================
         MAIN CSS
         ====================================================== -->

   <link rel="stylesheet"
      href="assets/css/style.css">


   <style>
      /* =====================================================
           PAGE HEADER
           ===================================================== */

      .page-header {
         margin-bottom: 24px;
      }

      .page-title {
         font-size: 24px;
         font-weight: 700;
         color: #111827;
         margin-bottom: 5px;
      }

      .page-subtitle {
         color: #6b7280;
         font-size: 14px;
      }


      /* =====================================================
           STAT CARD
           ===================================================== */

      .poli-stat {
         background: #ffffff;
         border: 1px solid #e5e7eb;
         border-radius: 14px;
         padding: 18px;
         height: 100%;
      }

      .poli-stat-icon {
         width: 44px;
         height: 44px;
         border-radius: 12px;
         display: flex;
         align-items: center;
         justify-content: center;
         background: #eff6ff;
         color: #2563eb;
         font-size: 18px;
      }

      .poli-stat-label {
         font-size: 12px;
         color: #6b7280;
         margin-bottom: 4px;
      }

      .poli-stat-value {
         font-size: 24px;
         font-weight: 700;
         color: #111827;
      }


      /* =====================================================
           MAIN CARD
           ===================================================== */

      .main-card {
         background: #ffffff;
         border: 1px solid #e5e7eb;
         border-radius: 14px;
         overflow: hidden;
      }

      .main-card-header {
         padding: 18px 20px;
         border-bottom: 1px solid #e5e7eb;
      }

      .main-card-title {
         font-size: 16px;
         font-weight: 700;
         color: #111827;
         margin-bottom: 3px;
      }

      .main-card-subtitle {
         font-size: 12px;
         color: #6b7280;
      }


      /* =====================================================
           FILTER
           ===================================================== */

      .filter-box {
         padding: 16px 20px;
         border-bottom: 1px solid #e5e7eb;
         background: #fafafa;
      }

      .form-label-custom {
         font-size: 12px;
         font-weight: 600;
         color: #374151;
         margin-bottom: 6px;
      }

      .form-control,
      .form-select {
         min-height: 40px;
         border-color: #d1d5db;
         border-radius: 8px;
         font-size: 13px;
      }

      .form-control:focus,
      .form-select:focus {
         border-color: #2563eb;
         box-shadow: 0 0 0 3px rgba(37, 99, 235, .10);
      }


      /* =====================================================
           TABLE
           ===================================================== */

      .poli-table {
         margin-bottom: 0;
      }

      .poli-table thead th {
         background: #f9fafb;
         color: #6b7280;
         font-size: 11px;
         font-weight: 700;
         text-transform: uppercase;
         letter-spacing: .3px;
         padding: 13px 16px;
         border-bottom: 1px solid #e5e7eb;
         white-space: nowrap;
      }

      .poli-table tbody td {
         padding: 14px 16px;
         vertical-align: middle;
         border-bottom: 1px solid #f1f5f9;
         font-size: 13px;
         color: #374151;
      }

      .poli-table tbody tr:hover {
         background: #f8fafc;
      }


      /* =====================================================
           POLI ICON
           ===================================================== */

      .poli-icon {
         width: 40px;
         height: 40px;
         border-radius: 10px;
         background: #eff6ff;
         color: #2563eb;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 15px;
         flex-shrink: 0;
      }

      .poli-name {
         font-weight: 600;
         color: #111827;
         margin-bottom: 2px;
      }

      .poli-code {
         color: #9ca3af;
         font-size: 11px;
      }

      .secondary-text {
         color: #9ca3af;
         font-size: 11px;
      }


      /* =====================================================
           TYPE BADGE
           ===================================================== */

      .type-badge {
         display: inline-flex;
         align-items: center;
         padding: 5px 9px;
         border-radius: 7px;
         background: #f3f4f6;
         color: #374151;
         font-size: 11px;
         font-weight: 600;
      }


      /* =====================================================
           STATUS
           ===================================================== */

      .status-badge {
         display: inline-flex;
         align-items: center;
         gap: 6px;
         padding: 5px 9px;
         border-radius: 20px;
         font-size: 11px;
         font-weight: 600;
      }

      .status-badge::before {
         content: "";
         width: 6px;
         height: 6px;
         border-radius: 50%;
         background: currentColor;
      }

      .status-active {
         background: #ecfdf5;
         color: #059669;
      }

      .status-inactive {
         background: #f3f4f6;
         color: #6b7280;
      }


      /* =====================================================
           QUEUE STATUS
           ===================================================== */

      .queue-active {
         color: #059669;
         font-size: 12px;
         font-weight: 600;
      }

      .queue-inactive {
         color: #9ca3af;
         font-size: 12px;
         font-weight: 500;
      }


      /* =====================================================
           ACTION
           ===================================================== */

      .action-btn {
         width: 32px;
         height: 32px;
         border-radius: 8px;
         border: 1px solid #e5e7eb;
         background: #ffffff;
         color: #6b7280;
         display: inline-flex;
         align-items: center;
         justify-content: center;
         transition: .2s;
      }

      .action-btn:hover {
         background: #f3f4f6;
         color: #2563eb;
         border-color: #bfdbfe;
      }


      /* =====================================================
           PRIMARY BUTTON
           ===================================================== */

      .btn-primary-custom {
         background: #2563eb;
         border: 1px solid #2563eb;
         color: #ffffff;
         border-radius: 8px;
         padding: 9px 14px;
         font-size: 13px;
         font-weight: 600;
      }

      .btn-primary-custom:hover {
         background: #1d4ed8;
         border-color: #1d4ed8;
         color: #ffffff;
      }


      /* =====================================================
           MODAL
           ===================================================== */

      .modal-content {
         border: 0;
         border-radius: 16px;
         overflow: hidden;
      }

      .modal-header {
         padding: 18px 20px;
         border-bottom: 1px solid #e5e7eb;
      }

      .modal-title {
         font-size: 16px;
         font-weight: 700;
      }

      .modal-body {
         padding: 20px;
      }

      .modal-footer {
         padding: 14px 20px;
         border-top: 1px solid #e5e7eb;
      }


      /* =====================================================
           DETAIL
           ===================================================== */

      .detail-profile {
         display: flex;
         align-items: center;
         gap: 14px;
         padding: 16px;
         background: #f8fafc;
         border-radius: 12px;
         margin-bottom: 20px;
      }

      .detail-icon {
         width: 58px;
         height: 58px;
         border-radius: 14px;
         background: #dbeafe;
         color: #2563eb;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 20px;
      }

      .detail-name {
         font-size: 17px;
         font-weight: 700;
         color: #111827;
      }

      .detail-type {
         color: #6b7280;
         font-size: 12px;
         margin-top: 3px;
      }

      .detail-item {
         margin-bottom: 16px;
      }

      .detail-label {
         color: #9ca3af;
         font-size: 11px;
         margin-bottom: 4px;
      }

      .detail-value {
         color: #374151;
         font-size: 13px;
         font-weight: 500;
      }

      .detail-description {
         padding: 12px;
         border-radius: 10px;
         background: #f9fafb;
         color: #6b7280;
         font-size: 12px;
         line-height: 1.6;
      }


      /* =====================================================
           EMPTY STATE
           ===================================================== */

      .empty-state {
         padding: 50px 20px;
         text-align: center;
         color: #9ca3af;
      }

      .empty-state i {
         font-size: 35px;
         margin-bottom: 12px;
      }


      /* =====================================================
           RESPONSIVE
           ===================================================== */

      @media (max-width: 768px) {

         .page-title {
            font-size: 20px;
         }

         .poli-table {
            min-width: 1100px;
         }

         .table-responsive {
            overflow-x: auto;
         }

      }
   </style>

</head>


<body>


   <div class="app">


      <!-- ======================================================
         SIDEBAR
         ====================================================== -->

      <?php require 'components/sidebar.php'; ?>


      <!-- ======================================================
         MAIN
         ====================================================== -->

      <div class="main">


         <!-- ==================================================
             HEADER
             ================================================== -->

         <?php require 'components/header.php'; ?>


         <!-- ==================================================
             CONTENT
             ================================================== -->

         <main class="content">

            <div class="container-fluid py-4">


               <!-- ==================================================
                     PAGE HEADER
                     ================================================== -->

               <div class="page-header">

                  <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

                     <div>

                        <div class="page-title">

                           Poli / Layanan

                        </div>

                        <div class="page-subtitle">

                           Kelola unit pelayanan, poli, ruangan,
                           jadwal, dan layanan klinik.

                        </div>

                     </div>


                     <button type="button"
                        class="btn btn-primary-custom"
                        onclick="openPoliModal()">

                        <i class="fa-solid fa-plus me-2"></i>

                        Tambah Poli

                     </button>

                  </div>

               </div>


               <!-- ==================================================
                     STATISTICS
                     ================================================== -->

               <div class="row g-3 mb-4">


                  <!-- TOTAL -->

                  <div class="col-12 col-md-3">

                     <div class="poli-stat">

                        <div class="d-flex align-items-center gap-3">

                           <div class="poli-stat-icon">

                              <i class="fa-solid fa-hospital"></i>

                           </div>

                           <div>

                              <div class="poli-stat-label">

                                 Total Poli

                              </div>

                              <div class="poli-stat-value">

                                 <?= $totalPoli ?>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>


                  <!-- ACTIVE -->

                  <div class="col-12 col-md-3">

                     <div class="poli-stat">

                        <div class="d-flex align-items-center gap-3">

                           <div class="poli-stat-icon"
                              style="background:#ecfdf5;color:#059669;">

                              <i class="fa-solid fa-circle-check"></i>

                           </div>

                           <div>

                              <div class="poli-stat-label">

                                 Poli Aktif

                              </div>

                              <div class="poli-stat-value">

                                 <?= $activePoli ?>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>


                  <!-- INACTIVE -->

                  <div class="col-12 col-md-3">

                     <div class="poli-stat">

                        <div class="d-flex align-items-center gap-3">

                           <div class="poli-stat-icon"
                              style="background:#f3f4f6;color:#6b7280;">

                              <i class="fa-solid fa-circle-xmark"></i>

                           </div>

                           <div>

                              <div class="poli-stat-label">

                                 Poli Nonaktif

                              </div>

                              <div class="poli-stat-value">

                                 <?= $inactivePoli ?>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>


                  <!-- QUEUE -->

                  <div class="col-12 col-md-3">

                     <div class="poli-stat">

                        <div class="d-flex align-items-center gap-3">

                           <div class="poli-stat-icon"
                              style="background:#eff6ff;color:#2563eb;">

                              <i class="fa-solid fa-list-ol"></i>

                           </div>

                           <div>

                              <div class="poli-stat-label">

                                 Antrian Aktif

                              </div>

                              <div class="poli-stat-value">

                                 <?= $activeQueue ?>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>


               <!-- ==================================================
                     MAIN TABLE
                     ================================================== -->

               <div class="main-card">


                  <!-- HEADER -->

                  <div class="main-card-header">

                     <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

                        <div>

                           <div class="main-card-title">

                              Daftar Poli / Layanan

                           </div>

                           <div class="main-card-subtitle">

                              Daftar unit pelayanan yang tersedia
                              pada klinik.

                           </div>

                        </div>

                     </div>

                  </div>


                  <!-- ==================================================
                         FILTER
                         ================================================== -->

                  <div class="filter-box">

                     <div class="row g-2">


                        <!-- SEARCH -->

                        <div class="col-12 col-md-5">

                           <label class="form-label-custom">

                              Cari Poli

                           </label>

                           <div class="position-relative">

                              <i class="fa-solid fa-magnifying-glass position-absolute"
                                 style="
                                            left:13px;
                                            top:13px;
                                            color:#9ca3af;
                                            font-size:12px;
                                       "></i>

                              <input type="text"
                                 id="searchPoli"
                                 class="form-control ps-5"
                                 placeholder="Cari nama poli, kode, ruangan..."
                                 onkeyup="filterPoli()">

                           </div>

                        </div>


                        <!-- TYPE -->

                        <div class="col-12 col-md-3">

                           <label class="form-label-custom">

                              Jenis Layanan

                           </label>

                           <select class="form-select"
                              id="filterType"
                              onchange="filterPoli()">

                              <option value="">
                                 Semua Jenis
                              </option>

                              <option value="Poli Klinik">
                                 Poli Klinik
                              </option>

                              <option value="Kebidanan">
                                 Kebidanan
                              </option>

                              <option value="Laboratorium">
                                 Laboratorium
                              </option>

                              <option value="Konsultasi">
                                 Konsultasi
                              </option>

                              <option value="Rehabilitasi">
                                 Rehabilitasi
                              </option>

                           </select>

                        </div>


                        <!-- STATUS -->

                        <div class="col-12 col-md-2">

                           <label class="form-label-custom">

                              Status

                           </label>

                           <select class="form-select"
                              id="filterStatus"
                              onchange="filterPoli()">

                              <option value="">
                                 Semua
                              </option>

                              <option value="Aktif">
                                 Aktif
                              </option>

                              <option value="Nonaktif">
                                 Nonaktif
                              </option>

                           </select>

                        </div>


                        <!-- RESET -->

                        <div class="col-12 col-md-2 d-flex align-items-end">

                           <button type="button"
                              class="btn btn-light border w-100"
                              style="
                                            min-height:40px;
                                            font-size:13px;
                                        "
                              onclick="resetFilter()">

                              <i class="fa-solid fa-rotate-left me-1"></i>

                              Reset

                           </button>

                        </div>

                     </div>

                  </div>


                  <!-- ==================================================
                         TABLE
                         ================================================== -->

                  <div class="table-responsive">

                     <table class="table poli-table">

                        <thead>

                           <tr>

                              <th style="width:260px;">
                                 Poli / Layanan
                              </th>

                              <th>
                                 Jenis
                              </th>

                              <th>
                                 Ruangan
                              </th>

                              <th>
                                 Penanggung Jawab
                              </th>

                              <th>
                                 Jadwal
                              </th>

                              <th>
                                 Antrian
                              </th>

                              <th>
                                 Status
                              </th>

                              <th class="text-end">
                                 Aksi
                              </th>

                           </tr>

                        </thead>


                        <tbody id="poliTableBody">


                           <?php foreach ($polis as $poli): ?>


                              <tr

                                 data-name="<?= strtolower(htmlspecialchars($poli['nama'])) ?>"

                                 data-code="<?= strtolower(htmlspecialchars($poli['kode'])) ?>"

                                 data-type="<?= htmlspecialchars($poli['jenis']) ?>"

                                 data-room="<?= strtolower(htmlspecialchars($poli['ruangan'])) ?>"

                                 data-status="<?= htmlspecialchars($poli['status']) ?>">


                                 <!-- POLI -->

                                 <td>

                                    <div class="d-flex align-items-center gap-3">

                                       <div class="poli-icon">

                                          <i class="fa-solid fa-hospital-user"></i>

                                       </div>


                                       <div>

                                          <div class="poli-name">

                                             <?= htmlspecialchars($poli['nama']) ?>

                                          </div>

                                          <div class="poli-code">

                                             <?= htmlspecialchars($poli['kode']) ?>

                                          </div>

                                       </div>

                                    </div>

                                 </td>


                                 <!-- TYPE -->

                                 <td>

                                    <span class="type-badge">

                                       <?= htmlspecialchars($poli['jenis']) ?>

                                    </span>

                                 </td>


                                 <!-- ROOM -->

                                 <td>

                                    <div>

                                       <?= htmlspecialchars($poli['ruangan']) ?>

                                    </div>

                                    <div class="secondary-text">

                                       <?= htmlspecialchars($poli['lantai']) ?>

                                    </div>

                                 </td>


                                 <!-- PERSON IN CHARGE -->

                                 <td>

                                    <div>

                                       <?= htmlspecialchars($poli['penanggungjawab']) ?>

                                    </div>

                                    <div class="secondary-text">

                                       <?= $poli['dokter'] ?>
                                       dokter ·
                                       <?= $poli['staff'] ?>
                                       staff

                                    </div>

                                 </td>


                                 <!-- SCHEDULE -->

                                 <td>

                                    <div>

                                       <?= htmlspecialchars($poli['jadwal']) ?>

                                    </div>

                                    <div class="secondary-text">

                                       <?= htmlspecialchars($poli['jam']) ?>

                                    </div>

                                 </td>


                                 <!-- QUEUE -->

                                 <td>

                                    <?php if ($poli['antrian'] === 'Aktif'): ?>

                                       <span class="queue-active">

                                          <i class="fa-solid fa-circle-check me-1"></i>

                                          Aktif

                                       </span>

                                    <?php else: ?>

                                       <span class="queue-inactive">

                                          <i class="fa-solid fa-circle-minus me-1"></i>

                                          Nonaktif

                                       </span>

                                    <?php endif; ?>

                                 </td>


                                 <!-- STATUS -->

                                 <td>

                                    <?php if ($poli['status'] === 'Aktif'): ?>

                                       <span class="status-badge status-active">

                                          Aktif

                                       </span>

                                    <?php else: ?>

                                       <span class="status-badge status-inactive">

                                          Nonaktif

                                       </span>

                                    <?php endif; ?>

                                 </td>


                                 <!-- ACTION -->

                                 <td class="text-end">

                                    <div class="d-flex justify-content-end gap-1">


                                       <!-- DETAIL -->

                                       <button type="button"
                                          class="action-btn"
                                          title="Detail"
                                          onclick='showPoliDetail(<?= json_encode($poli) ?>)'>

                                          <i class="fa-regular fa-eye"></i>

                                       </button>


                                       <!-- EDIT -->

                                       <button type="button"
                                          class="action-btn"
                                          title="Edit"
                                          onclick='editPoli(<?= json_encode($poli) ?>)'>

                                          <i class="fa-regular fa-pen-to-square"></i>

                                       </button>


                                       <!-- DELETE -->

                                       <button type="button"
                                          class="action-btn"
                                          title="Hapus"
                                          onclick="deletePoli(
                                                        '<?= $poli['id'] ?>',
                                                        '<?= htmlspecialchars($poli['nama'], ENT_QUOTES) ?>'
                                                    )">

                                          <i class="fa-regular fa-trash-can"></i>

                                       </button>


                                    </div>

                                 </td>

                              </tr>


                           <?php endforeach; ?>


                        </tbody>

                     </table>

                  </div>


                  <!-- EMPTY -->

                  <div id="emptyState"
                     class="empty-state d-none">

                     <i class="fa-solid fa-hospital"></i>

                     <div class="fw-semibold text-dark">

                        Poli / layanan tidak ditemukan

                     </div>

                     <div class="small mt-1">

                        Silakan ubah kata kunci atau filter pencarian.

                     </div>

                  </div>


               </div>

            </div>

         </main>


         <!-- ==================================================
             FOOTER
             ================================================== -->

         <?php require 'components/footer.php'; ?>


      </div>

   </div>


   <!-- ==========================================================
     MODAL TAMBAH / EDIT POLI
     ========================================================== -->

   <div class="modal fade"
      id="poliModal"
      tabindex="-1"
      aria-hidden="true">

      <div class="modal-dialog modal-lg modal-dialog-centered">

         <div class="modal-content">


            <!-- HEADER -->

            <div class="modal-header">

               <div>

                  <div class="modal-title"
                     id="poliModalTitle">

                     Tambah Poli

                  </div>

                  <div class="text-muted small mt-1">

                     Lengkapi informasi poli atau layanan klinik.

                  </div>

               </div>


               <button type="button"
                  class="btn-close"
                  data-bs-dismiss="modal">
               </button>

            </div>


            <!-- FORM -->

            <form id="poliForm"
               onsubmit="savePoli(event)">

               <div class="modal-body">


                  <input type="hidden"
                     id="poliId"
                     value="">


                  <!-- ==================================================
                         INFORMASI POLI
                         ================================================== -->

                  <div class="mb-3">

                     <div class="fw-semibold mb-3"
                        style="font-size:13px;">

                        Informasi Poli / Layanan

                     </div>


                     <div class="row g-3">


                        <!-- KODE -->

                        <div class="col-md-4">

                           <label class="form-label-custom">

                              Kode Poli

                           </label>

                           <input type="text"
                              class="form-control"
                              id="poliCode"
                              placeholder="Contoh: POL007"
                              required>

                        </div>


                        <!-- NAMA -->

                        <div class="col-md-8">

                           <label class="form-label-custom">

                              Nama Poli / Layanan

                           </label>

                           <input type="text"
                              class="form-control"
                              id="poliName"
                              placeholder="Contoh: Poli Umum"
                              required>

                        </div>


                        <!-- JENIS -->

                        <div class="col-md-6">

                           <label class="form-label-custom">

                              Jenis Layanan

                           </label>

                           <select class="form-select"
                              id="poliType"
                              required>

                              <option value="">
                                 Pilih Jenis
                              </option>

                              <option value="Poli Klinik">
                                 Poli Klinik
                              </option>

                              <option value="Kebidanan">
                                 Kebidanan
                              </option>

                              <option value="Laboratorium">
                                 Laboratorium
                              </option>

                              <option value="Konsultasi">
                                 Konsultasi
                              </option>

                              <option value="Rehabilitasi">
                                 Rehabilitasi
                              </option>

                           </select>

                        </div>


                        <!-- RUANGAN -->

                        <div class="col-md-6">

                           <label class="form-label-custom">

                              Ruangan

                           </label>

                           <input type="text"
                              class="form-control"
                              id="poliRoom"
                              placeholder="Contoh: Ruang 01">

                        </div>


                        <!-- LANTAI -->

                        <div class="col-md-6">

                           <label class="form-label-custom">

                              Lantai

                           </label>

                           <select class="form-select"
                              id="poliFloor">

                              <option value="Lantai 1">
                                 Lantai 1
                              </option>

                              <option value="Lantai 2">
                                 Lantai 2
                              </option>

                              <option value="Lantai 3">
                                 Lantai 3
                              </option>

                           </select>

                        </div>


                        <!-- PJ -->

                        <div class="col-md-6">

                           <label class="form-label-custom">

                              Penanggung Jawab

                           </label>

                           <input type="text"
                              class="form-control"
                              id="poliPic"
                              placeholder="Nama penanggung jawab">

                        </div>


                     </div>

                  </div>


                  <hr class="my-4">


                  <!-- ==================================================
                         JADWAL
                         ================================================== -->

                  <div class="mb-3">

                     <div class="fw-semibold mb-3"
                        style="font-size:13px;">

                        Jadwal Layanan

                     </div>


                     <div class="row g-3">


                        <!-- HARI -->

                        <div class="col-md-6">

                           <label class="form-label-custom">

                              Hari Operasional

                           </label>

                           <input type="text"
                              class="form-control"
                              id="poliSchedule"
                              placeholder="Contoh: Senin - Jumat">

                        </div>


                        <!-- JAM -->

                        <div class="col-md-6">

                           <label class="form-label-custom">

                              Jam Operasional

                           </label>

                           <input type="text"
                              class="form-control"
                              id="poliTime"
                              placeholder="Contoh: 08:00 - 16:00">

                        </div>


                     </div>

                  </div>


                  <hr class="my-4">


                  <!-- ==================================================
                         ANTRIAN & STATUS
                         ================================================== -->

                  <div class="mb-3">

                     <div class="fw-semibold mb-3"
                        style="font-size:13px;">

                        Pengaturan Layanan

                     </div>


                     <div class="row g-3">


                        <!-- ANTRIAN -->

                        <div class="col-md-6">

                           <label class="form-label-custom">

                              Sistem Antrian

                           </label>

                           <select class="form-select"
                              id="poliQueue">

                              <option value="Aktif">
                                 Aktif
                              </option>

                              <option value="Nonaktif">
                                 Nonaktif
                              </option>

                           </select>

                        </div>


                        <!-- STATUS -->

                        <div class="col-md-6">

                           <label class="form-label-custom">

                              Status Poli

                           </label>

                           <select class="form-select"
                              id="poliStatus">

                              <option value="Aktif">
                                 Aktif
                              </option>

                              <option value="Nonaktif">
                                 Nonaktif
                              </option>

                           </select>

                        </div>


                        <!-- KETERANGAN -->

                        <div class="col-12">

                           <label class="form-label-custom">

                              Keterangan

                           </label>

                           <textarea class="form-control"
                              id="poliDescription"
                              rows="3"
                              placeholder="Deskripsi layanan poli"></textarea>

                        </div>


                     </div>

                  </div>


               </div>


               <!-- FOOTER -->

               <div class="modal-footer">

                  <button type="button"
                     class="btn btn-light"
                     data-bs-dismiss="modal">

                     Batal

                  </button>


                  <button type="submit"
                     class="btn btn-primary-custom">

                     <i class="fa-solid fa-floppy-disk me-2"></i>

                     Simpan Poli

                  </button>

               </div>


            </form>


         </div>

      </div>

   </div>


   <!-- ==========================================================
     MODAL DETAIL POLI
     ========================================================== -->

   <div class="modal fade"
      id="poliDetailModal"
      tabindex="-1"
      aria-hidden="true">

      <div class="modal-dialog modal-md modal-dialog-centered">

         <div class="modal-content">


            <!-- HEADER -->

            <div class="modal-header">

               <div class="modal-title">

                  Detail Poli / Layanan

               </div>

               <button type="button"
                  class="btn-close"
                  data-bs-dismiss="modal">
               </button>

            </div>


            <!-- BODY -->

            <div class="modal-body">


               <!-- PROFILE -->

               <div class="detail-profile">


                  <div class="detail-icon">

                     <i class="fa-solid fa-hospital-user"></i>

                  </div>


                  <div>

                     <div class="detail-name"
                        id="detailName">

                        -

                     </div>


                     <div class="detail-type"
                        id="detailType">

                        -

                     </div>

                  </div>


               </div>


               <!-- DETAILS -->

               <div class="row">


                  <!-- KODE -->

                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">

                           Kode Poli

                        </div>

                        <div class="detail-value"
                           id="detailCode">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- STATUS -->

                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">

                           Status

                        </div>

                        <div class="detail-value"
                           id="detailStatus">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- TYPE -->

                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">

                           Jenis Layanan

                        </div>

                        <div class="detail-value"
                           id="detailTypeValue">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- ROOM -->

                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">

                           Ruangan

                        </div>

                        <div class="detail-value"
                           id="detailRoom">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- FLOOR -->

                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">

                           Lantai

                        </div>

                        <div class="detail-value"
                           id="detailFloor">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- PIC -->

                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">

                           Penanggung Jawab

                        </div>

                        <div class="detail-value"
                           id="detailPic">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- DOCTOR -->

                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">

                           Dokter

                        </div>

                        <div class="detail-value"
                           id="detailDoctor">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- STAFF -->

                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">

                           Tenaga Medis

                        </div>

                        <div class="detail-value"
                           id="detailStaff">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- SCHEDULE -->

                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">

                           Hari Operasional

                        </div>

                        <div class="detail-value"
                           id="detailSchedule">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- TIME -->

                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">

                           Jam Operasional

                        </div>

                        <div class="detail-value"
                           id="detailTime">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- QUEUE -->

                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">

                           Sistem Antrian

                        </div>

                        <div class="detail-value"
                           id="detailQueue">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- DESCRIPTION -->

                  <div class="col-12">

                     <div class="detail-item">

                        <div class="detail-label">

                           Keterangan

                        </div>

                        <div class="detail-description"
                           id="detailDescription">

                           -

                        </div>

                     </div>

                  </div>


               </div>

            </div>


         </div>

      </div>

   </div>


   <!-- ==========================================================
     BOOTSTRAP JS
     ========================================================== -->

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


   <script>
      /* ============================================================
   MODAL INSTANCE
   ============================================================ */

      let poliModal;

      let poliDetailModal;


      document.addEventListener(
         'DOMContentLoaded',
         function() {


            poliModal =
               new bootstrap.Modal(
                  document.getElementById(
                     'poliModal'
                  )
               );


            poliDetailModal =
               new bootstrap.Modal(
                  document.getElementById(
                     'poliDetailModal'
                  )
               );

         }
      );


      /* ============================================================
         OPEN ADD MODAL
         ============================================================ */

      function openPoliModal() {


         document
            .getElementById('poliForm')
            .reset();


         document
            .getElementById('poliId')
            .value = '';


         document
            .getElementById('poliModalTitle')
            .innerText =
            'Tambah Poli';


         poliModal.show();

      }


      /* ============================================================
         EDIT POLI
         ============================================================ */

      function editPoli(poli) {


         document
            .getElementById('poliId')
            .value =
            poli.id;


         document
            .getElementById('poliCode')
            .value =
            poli.kode;


         document
            .getElementById('poliName')
            .value =
            poli.nama;


         document
            .getElementById('poliType')
            .value =
            poli.jenis;


         document
            .getElementById('poliRoom')
            .value =
            poli.ruangan;


         document
            .getElementById('poliFloor')
            .value =
            poli.lantai;


         document
            .getElementById('poliPic')
            .value =
            poli.penanggungjawab;


         document
            .getElementById('poliSchedule')
            .value =
            poli.jadwal;


         document
            .getElementById('poliTime')
            .value =
            poli.jam;


         document
            .getElementById('poliQueue')
            .value =
            poli.antrian;


         document
            .getElementById('poliStatus')
            .value =
            poli.status;


         document
            .getElementById('poliDescription')
            .value =
            poli.keterangan;


         document
            .getElementById('poliModalTitle')
            .innerText =
            'Edit Poli';


         poliModal.show();

      }


      /* ============================================================
         SAVE POLI
         ============================================================ */

      function savePoli(event) {


         event.preventDefault();


         const id =
            document
            .getElementById('poliId')
            .value;


         if (id) {

            alert(
               'Data poli berhasil diperbarui.\n\n' +
               'Mode demo — selanjutnya hubungkan ke database.'
            );

         } else {

            alert(
               'Data poli berhasil ditambahkan.\n\n' +
               'Mode demo — selanjutnya hubungkan ke database.'
            );

         }


         poliModal.hide();

      }


      /* ============================================================
         SHOW DETAIL
         ============================================================ */

      function showPoliDetail(poli) {


         document
            .getElementById('detailName')
            .innerText =
            poli.nama;


         document
            .getElementById('detailType')
            .innerText =
            poli.jenis;


         document
            .getElementById('detailCode')
            .innerText =
            poli.kode;


         document
            .getElementById('detailStatus')
            .innerHTML =

            poli.status === 'Aktif'

            ?
            '<span class="status-badge status-active">Aktif</span>'

            :
            '<span class="status-badge status-inactive">Nonaktif</span>';


         document
            .getElementById('detailTypeValue')
            .innerText =
            poli.jenis;


         document
            .getElementById('detailRoom')
            .innerText =
            poli.ruangan || '-';


         document
            .getElementById('detailFloor')
            .innerText =
            poli.lantai || '-';


         document
            .getElementById('detailPic')
            .innerText =
            poli.penanggungjawab || '-';


         document
            .getElementById('detailDoctor')
            .innerText =
            poli.dokter + ' dokter';


         document
            .getElementById('detailStaff')
            .innerText =
            poli.staff + ' tenaga medis';


         document
            .getElementById('detailSchedule')
            .innerText =
            poli.jadwal || '-';


         document
            .getElementById('detailTime')
            .innerText =
            poli.jam || '-';


         document
            .getElementById('detailQueue')
            .innerHTML =

            poli.antrian === 'Aktif'

            ?
            '<span class="queue-active">Aktif</span>'

            :
            '<span class="queue-inactive">Nonaktif</span>';


         document
            .getElementById('detailDescription')
            .innerText =
            poli.keterangan || '-';


         poliDetailModal.show();

      }


      /* ============================================================
         DELETE POLI
         ============================================================ */

      function deletePoli(id, name) {


         const confirmDelete =
            confirm(
               'Apakah Anda yakin ingin menghapus poli "' +
               name +
               '"?'
            );


         if (!confirmDelete) {

            return;

         }


         alert(
            'Poli "' +
            name +
            '" berhasil dihapus.\n\n' +
            'Mode demo — selanjutnya hubungkan ke database.'
         );

      }


      /* ============================================================
         FILTER POLI
         ============================================================ */

      function filterPoli() {


         const search =
            document
            .getElementById('searchPoli')
            .value
            .toLowerCase()
            .trim();


         const type =
            document
            .getElementById('filterType')
            .value;


         const status =
            document
            .getElementById('filterStatus')
            .value;


         const rows =
            document.querySelectorAll(
               '#poliTableBody tr'
            );


         let visibleCount = 0;


         rows.forEach(
            function(row) {


               const name =
                  row.dataset.name || '';


               const code =
                  row.dataset.code || '';


               const room =
                  row.dataset.room || '';


               const rowType =
                  row.dataset.type || '';


               const rowStatus =
                  row.dataset.status || '';


               const searchMatch =

                  name.includes(search) ||

                  code.includes(search) ||

                  room.includes(search);


               const typeMatch =

                  !type ||

                  rowType === type;


               const statusMatch =

                  !status ||

                  rowStatus === status;


               if (

                  searchMatch &&

                  typeMatch &&

                  statusMatch

               ) {

                  row.style.display = '';

                  visibleCount++;

               } else {

                  row.style.display = 'none';

               }

            }
         );


         const emptyState =
            document.getElementById(
               'emptyState'
            );


         if (visibleCount === 0) {

            emptyState.classList.remove(
               'd-none'
            );

         } else {

            emptyState.classList.add(
               'd-none'
            );

         }

      }


      /* ============================================================
         RESET FILTER
         ============================================================ */

      function resetFilter() {


         document
            .getElementById('searchPoli')
            .value = '';


         document
            .getElementById('filterType')
            .value = '';


         document
            .getElementById('filterStatus')
            .value = '';


         filterPoli();

      }
   </script>


</body>

</html>