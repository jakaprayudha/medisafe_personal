<?php

/**
 * ============================================================
 * MASTER MEDICAL STAFF
 * ============================================================
 * File        : master-medical-staff.php
 * Description : Master Data Tenaga Medis
 * ============================================================
 */

/* ============================================================
   DUMMY DATA
   ============================================================ */

$medicalStaff = [

   [
      'id'            => 1,
      'kode'          => 'N001',
      'nama'          => 'Ns. Ahmad Fauzi, S.Kep',
      'profesi'       => 'Perawat',
      'spesialisasi'  => 'Keperawatan Umum',
      'sip'           => 'SIP-100001',
      'str'           => 'STR-200001',
      'telepon'       => '081234567801',
      'email'         => 'ahmad@klinik.com',
      'unit'          => 'Nurse Station',
      'jadwal'        => 'Senin - Jumat',
      'jam'           => '08:00 - 16:00',
      'status'        => 'Aktif',
   ],

   [
      'id'            => 2,
      'kode'          => 'N002',
      'nama'          => 'Ns. Siti Aminah, S.Kep',
      'profesi'       => 'Perawat',
      'spesialisasi'  => 'Keperawatan Umum',
      'sip'           => 'SIP-100002',
      'str'           => 'STR-200002',
      'telepon'       => '081234567802',
      'email'         => 'siti@klinik.com',
      'unit'          => 'Nurse Station',
      'jadwal'        => 'Selasa - Sabtu',
      'jam'           => '08:00 - 16:00',
      'status'        => 'Aktif',
   ],

   [
      'id'            => 3,
      'kode'          => 'B001',
      'nama'          => 'Bdn. Rina Amelia, S.Keb',
      'profesi'       => 'Bidan',
      'spesialisasi'  => 'Kebidanan',
      'sip'           => 'SIP-100003',
      'str'           => 'STR-200003',
      'telepon'       => '081234567803',
      'email'         => 'rina@klinik.com',
      'unit'          => 'Ruang Kebidanan',
      'jadwal'        => 'Senin - Kamis',
      'jam'           => '09:00 - 15:00',
      'status'        => 'Aktif',
   ],

   [
      'id'            => 4,
      'kode'          => 'A001',
      'nama'          => 'Apt. Budi Santoso, S.Farm',
      'profesi'       => 'Apoteker',
      'spesialisasi'  => 'Farmasi',
      'sip'           => 'SIP-100004',
      'str'           => 'STR-200004',
      'telepon'       => '081234567804',
      'email'         => 'budi@klinik.com',
      'unit'          => 'Farmasi',
      'jadwal'        => 'Senin - Jumat',
      'jam'           => '08:00 - 16:00',
      'status'        => 'Aktif',
   ],

   [
      'id'            => 5,
      'kode'          => 'AA001',
      'nama'          => 'Dewi Lestari, A.Md.Farm',
      'profesi'       => 'Asisten Apoteker',
      'spesialisasi'  => 'Farmasi',
      'sip'           => '-',
      'str'           => 'STR-200005',
      'telepon'       => '081234567805',
      'email'         => 'dewi@klinik.com',
      'unit'          => 'Farmasi',
      'jadwal'        => 'Senin - Sabtu',
      'jam'           => '09:00 - 17:00',
      'status'        => 'Aktif',
   ],

   [
      'id'            => 6,
      'kode'          => 'LAB001',
      'nama'          => 'Andi Saputra, A.Md.AK',
      'profesi'       => 'Analis Laboratorium',
      'spesialisasi'  => 'Laboratorium Medik',
      'sip'           => 'SIP-100006',
      'str'           => 'STR-200006',
      'telepon'       => '081234567806',
      'email'         => 'andi.lab@klinik.com',
      'unit'          => 'Laboratorium',
      'jadwal'        => 'Senin - Jumat',
      'jam'           => '08:00 - 15:00',
      'status'        => 'Aktif',
   ],

   [
      'id'            => 7,
      'kode'          => 'N003',
      'nama'          => 'Ns. Fitri Handayani, S.Kep',
      'profesi'       => 'Perawat',
      'spesialisasi'  => 'Keperawatan Umum',
      'sip'           => 'SIP-100007',
      'str'           => 'STR-200007',
      'telepon'       => '081234567807',
      'email'         => 'fitri@klinik.com',
      'unit'          => 'Nurse Station',
      'jadwal'        => 'Senin - Rabu',
      'jam'           => '08:00 - 14:00',
      'status'        => 'Nonaktif',
   ],

];


/* ============================================================
   STATISTICS
   ============================================================ */

$totalStaff = count($medicalStaff);

$activeStaff = count(
   array_filter($medicalStaff, function ($staff) {
      return $staff['status'] === 'Aktif';
   })
);

$inactiveStaff = $totalStaff - $activeStaff;

$professionCount = [];

foreach ($medicalStaff as $staff) {

   $profession = $staff['profesi'];

   if (!isset($professionCount[$profession])) {
      $professionCount[$profession] = 0;
   }

   $professionCount[$profession]++;
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

   <meta charset="UTF-8">

   <meta name="viewport"
      content="width=device-width, initial-scale=1.0">

   <title>
      Medical Staff - Klinik Management System
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

      .staff-stat {
         background: #ffffff;
         border: 1px solid #e5e7eb;
         border-radius: 14px;
         padding: 18px;
         height: 100%;
      }

      .staff-stat-icon {
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

      .staff-stat-label {
         font-size: 12px;
         color: #6b7280;
         margin-bottom: 4px;
      }

      .staff-stat-value {
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

      .staff-table {
         margin-bottom: 0;
      }

      .staff-table thead th {
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

      .staff-table tbody td {
         padding: 14px 16px;
         vertical-align: middle;
         border-bottom: 1px solid #f1f5f9;
         font-size: 13px;
         color: #374151;
      }

      .staff-table tbody tr:hover {
         background: #f8fafc;
      }


      /* =====================================================
           STAFF AVATAR
           ===================================================== */

      .staff-avatar {
         width: 38px;
         height: 38px;
         border-radius: 10px;
         background: #eff6ff;
         color: #2563eb;
         display: flex;
         align-items: center;
         justify-content: center;
         font-weight: 700;
         font-size: 12px;
         flex-shrink: 0;
      }

      .staff-name {
         font-weight: 600;
         color: #111827;
         margin-bottom: 2px;
      }

      .staff-code {
         color: #9ca3af;
         font-size: 11px;
      }

      .profession {
         font-weight: 600;
         color: #374151;
      }

      .secondary-text {
         color: #9ca3af;
         font-size: 11px;
      }


      /* =====================================================
           PROFESSION BADGE
           ===================================================== */

      .profession-badge {
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

      .detail-avatar {
         width: 58px;
         height: 58px;
         border-radius: 14px;
         background: #dbeafe;
         color: #2563eb;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 17px;
         font-weight: 700;
      }

      .detail-name {
         font-size: 17px;
         font-weight: 700;
         color: #111827;
      }

      .detail-profession {
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

         .staff-table {
            min-width: 1000px;
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

                           Tenaga Medis

                        </div>

                        <div class="page-subtitle">

                           Kelola data perawat, bidan, apoteker,
                           analis laboratorium, dan tenaga kesehatan lainnya.

                        </div>

                     </div>


                     <button type="button"
                        class="btn btn-primary-custom"
                        onclick="openStaffModal()">

                        <i class="fa-solid fa-plus me-2"></i>

                        Tambah Tenaga Medis

                     </button>

                  </div>

               </div>


               <!-- ==================================================
                     STATISTICS
                     ================================================== -->

               <div class="row g-3 mb-4">


                  <!-- TOTAL -->

                  <div class="col-12 col-md-4">

                     <div class="staff-stat">

                        <div class="d-flex align-items-center gap-3">

                           <div class="staff-stat-icon">

                              <i class="fa-solid fa-users"></i>

                           </div>

                           <div>

                              <div class="staff-stat-label">

                                 Total Tenaga Medis

                              </div>

                              <div class="staff-stat-value">

                                 <?= $totalStaff ?>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>


                  <!-- ACTIVE -->

                  <div class="col-12 col-md-4">

                     <div class="staff-stat">

                        <div class="d-flex align-items-center gap-3">

                           <div class="staff-stat-icon"
                              style="background:#ecfdf5;color:#059669;">

                              <i class="fa-solid fa-user-check"></i>

                           </div>

                           <div>

                              <div class="staff-stat-label">

                                 Tenaga Medis Aktif

                              </div>

                              <div class="staff-stat-value">

                                 <?= $activeStaff ?>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>


                  <!-- INACTIVE -->

                  <div class="col-12 col-md-4">

                     <div class="staff-stat">

                        <div class="d-flex align-items-center gap-3">

                           <div class="staff-stat-icon"
                              style="background:#f3f4f6;color:#6b7280;">

                              <i class="fa-solid fa-user-xmark"></i>

                           </div>

                           <div>

                              <div class="staff-stat-label">

                                 Tenaga Medis Nonaktif

                              </div>

                              <div class="staff-stat-value">

                                 <?= $inactiveStaff ?>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>


               <!-- ==================================================
                     DATA TABLE
                     ================================================== -->

               <div class="main-card">


                  <!-- CARD HEADER -->

                  <div class="main-card-header">

                     <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

                        <div>

                           <div class="main-card-title">

                              Daftar Tenaga Medis

                           </div>

                           <div class="main-card-subtitle">

                              Data tenaga kesehatan yang terdaftar
                              dan memberikan pelayanan di klinik.

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

                              Cari Tenaga Medis

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
                                 id="searchStaff"
                                 class="form-control ps-5"
                                 placeholder="Cari nama, kode, SIP, STR..."
                                 onkeyup="filterStaff()">

                           </div>

                        </div>


                        <!-- PROFESSION -->

                        <div class="col-12 col-md-3">

                           <label class="form-label-custom">

                              Profesi

                           </label>

                           <select class="form-select"
                              id="filterProfession"
                              onchange="filterStaff()">

                              <option value="">
                                 Semua Profesi
                              </option>

                              <option value="Perawat">
                                 Perawat
                              </option>

                              <option value="Bidan">
                                 Bidan
                              </option>

                              <option value="Apoteker">
                                 Apoteker
                              </option>

                              <option value="Asisten Apoteker">
                                 Asisten Apoteker
                              </option>

                              <option value="Analis Laboratorium">
                                 Analis Laboratorium
                              </option>

                              <option value="Nutrisionis">
                                 Nutrisionis
                              </option>

                              <option value="Tenaga Kesehatan Lainnya">
                                 Tenaga Kesehatan Lainnya
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
                              onchange="filterStaff()">

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

                     <table class="table staff-table">

                        <thead>

                           <tr>

                              <th style="width:280px;">
                                 Tenaga Medis
                              </th>

                              <th>
                                 Profesi
                              </th>

                              <th>
                                 SIP / STR
                              </th>

                              <th>
                                 Unit
                              </th>

                              <th>
                                 Jadwal
                              </th>

                              <th>
                                 Status
                              </th>

                              <th class="text-end">
                                 Aksi
                              </th>

                           </tr>

                        </thead>


                        <tbody id="staffTableBody">


                           <?php foreach ($medicalStaff as $staff): ?>


                              <?php

                              $nameParts =
                                 explode(
                                    ' ',
                                    trim($staff['nama'])
                                 );

                              $initials = '';

                              foreach (
                                 array_slice(
                                    $nameParts,
                                    0,
                                    2
                                 ) as $part
                              ) {

                                 $initials .=
                                    strtoupper(
                                       substr(
                                          preg_replace(
                                             '/[^A-Za-z]/',
                                             '',
                                             $part
                                          ),
                                          0,
                                          1
                                       )
                                    );
                              }

                              ?>


                              <tr

                                 data-name="<?= strtolower(htmlspecialchars($staff['nama'])) ?>"

                                 data-code="<?= strtolower(htmlspecialchars($staff['kode'])) ?>"

                                 data-profession="<?= htmlspecialchars($staff['profesi']) ?>"

                                 data-speciality="<?= strtolower(htmlspecialchars($staff['spesialisasi'])) ?>"

                                 data-sip="<?= strtolower(htmlspecialchars($staff['sip'])) ?>"

                                 data-str="<?= strtolower(htmlspecialchars($staff['str'])) ?>"

                                 data-unit="<?= htmlspecialchars($staff['unit']) ?>"

                                 data-status="<?= htmlspecialchars($staff['status']) ?>">


                                 <!-- TENAGA MEDIS -->

                                 <td>

                                    <div class="d-flex align-items-center gap-3">

                                       <div class="staff-avatar">

                                          <?= $initials ?>

                                       </div>


                                       <div>

                                          <div class="staff-name">

                                             <?= htmlspecialchars($staff['nama']) ?>

                                          </div>

                                          <div class="staff-code">

                                             <?= htmlspecialchars($staff['kode']) ?>

                                          </div>

                                       </div>

                                    </div>

                                 </td>


                                 <!-- PROFESSION -->

                                 <td>

                                    <div class="profession">

                                       <?= htmlspecialchars($staff['profesi']) ?>

                                    </div>

                                    <div class="secondary-text">

                                       <?= htmlspecialchars($staff['spesialisasi']) ?>

                                    </div>

                                 </td>


                                 <!-- SIP STR -->

                                 <td>

                                    <div>

                                       <?= htmlspecialchars($staff['sip']) ?>

                                    </div>

                                    <div class="secondary-text">

                                       <?= htmlspecialchars($staff['str']) ?>

                                    </div>

                                 </td>


                                 <!-- UNIT -->

                                 <td>

                                    <?= htmlspecialchars($staff['unit']) ?>

                                 </td>


                                 <!-- JADWAL -->

                                 <td>

                                    <div>

                                       <?= htmlspecialchars($staff['jadwal']) ?>

                                    </div>

                                    <div class="secondary-text">

                                       <?= htmlspecialchars($staff['jam']) ?>

                                    </div>

                                 </td>


                                 <!-- STATUS -->

                                 <td>

                                    <?php if ($staff['status'] === 'Aktif'): ?>

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
                                          onclick='showStaffDetail(<?= json_encode($staff) ?>)'>

                                          <i class="fa-regular fa-eye"></i>

                                       </button>


                                       <!-- EDIT -->

                                       <button type="button"
                                          class="action-btn"
                                          title="Edit"
                                          onclick='editStaff(<?= json_encode($staff) ?>)'>

                                          <i class="fa-regular fa-pen-to-square"></i>

                                       </button>


                                       <!-- DELETE -->

                                       <button type="button"
                                          class="action-btn"
                                          title="Hapus"
                                          onclick="deleteStaff(
                                                        '<?= $staff['id'] ?>',
                                                        '<?= htmlspecialchars($staff['nama'], ENT_QUOTES) ?>'
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


                  <!-- ==================================================
                         EMPTY STATE
                         ================================================== -->

                  <div id="emptyState"
                     class="empty-state d-none">

                     <i class="fa-solid fa-users"></i>

                     <div class="fw-semibold text-dark">

                        Data tenaga medis tidak ditemukan

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
     MODAL TAMBAH / EDIT
     ========================================================== -->

   <div class="modal fade"
      id="staffModal"
      tabindex="-1"
      aria-hidden="true">

      <div class="modal-dialog modal-lg modal-dialog-centered">

         <div class="modal-content">


            <!-- HEADER -->

            <div class="modal-header">

               <div>

                  <div class="modal-title"
                     id="staffModalTitle">

                     Tambah Tenaga Medis

                  </div>

                  <div class="text-muted small mt-1">

                     Lengkapi informasi tenaga medis.

                  </div>

               </div>


               <button type="button"
                  class="btn-close"
                  data-bs-dismiss="modal">
               </button>

            </div>


            <!-- FORM -->

            <form id="staffForm"
               onsubmit="saveStaff(event)">

               <div class="modal-body">


                  <input type="hidden"
                     id="staffId"
                     value="">


                  <!-- ==================================================
                         IDENTITAS
                         ================================================== -->

                  <div class="mb-3">

                     <div class="fw-semibold mb-3"
                        style="font-size:13px;">

                        Informasi Tenaga Medis

                     </div>


                     <div class="row g-3">


                        <!-- KODE -->

                        <div class="col-md-4">

                           <label class="form-label-custom">

                              Kode

                           </label>

                           <input type="text"
                              class="form-control"
                              id="staffCode"
                              placeholder="Contoh: N001"
                              required>

                        </div>


                        <!-- NAMA -->

                        <div class="col-md-8">

                           <label class="form-label-custom">

                              Nama Lengkap

                           </label>

                           <input type="text"
                              class="form-control"
                              id="staffName"
                              placeholder="Nama lengkap tenaga medis"
                              required>

                        </div>


                        <!-- PROFESI -->

                        <div class="col-md-6">

                           <label class="form-label-custom">

                              Profesi

                           </label>

                           <select class="form-select"
                              id="staffProfession"
                              required>

                              <option value="">
                                 Pilih Profesi
                              </option>

                              <option value="Perawat">
                                 Perawat
                              </option>

                              <option value="Bidan">
                                 Bidan
                              </option>

                              <option value="Apoteker">
                                 Apoteker
                              </option>

                              <option value="Asisten Apoteker">
                                 Asisten Apoteker
                              </option>

                              <option value="Analis Laboratorium">
                                 Analis Laboratorium
                              </option>

                              <option value="Nutrisionis">
                                 Nutrisionis
                              </option>

                              <option value="Tenaga Kesehatan Lainnya">
                                 Tenaga Kesehatan Lainnya
                              </option>

                           </select>

                        </div>


                        <!-- SPESIALISASI -->

                        <div class="col-md-6">

                           <label class="form-label-custom">

                              Spesialisasi / Kompetensi

                           </label>

                           <input type="text"
                              class="form-control"
                              id="staffSpeciality"
                              placeholder="Contoh: Keperawatan Umum">

                        </div>


                     </div>

                  </div>


                  <hr class="my-4">


                  <!-- ==================================================
                         LEGALITAS
                         ================================================== -->

                  <div class="mb-3">

                     <div class="fw-semibold mb-3"
                        style="font-size:13px;">

                        Legalitas & Registrasi

                     </div>


                     <div class="row g-3">


                        <!-- SIP -->

                        <div class="col-md-6">

                           <label class="form-label-custom">

                              Nomor SIP

                           </label>

                           <input type="text"
                              class="form-control"
                              id="staffSip"
                              placeholder="Nomor SIP">

                        </div>


                        <!-- STR -->

                        <div class="col-md-6">

                           <label class="form-label-custom">

                              Nomor STR

                           </label>

                           <input type="text"
                              class="form-control"
                              id="staffStr"
                              placeholder="Nomor STR">

                        </div>


                     </div>

                  </div>


                  <hr class="my-4">


                  <!-- ==================================================
                         KONTAK
                         ================================================== -->

                  <div class="mb-3">

                     <div class="fw-semibold mb-3"
                        style="font-size:13px;">

                        Informasi Kontak

                     </div>


                     <div class="row g-3">


                        <!-- TELEPON -->

                        <div class="col-md-6">

                           <label class="form-label-custom">

                              Nomor Telepon

                           </label>

                           <input type="text"
                              class="form-control"
                              id="staffPhone"
                              placeholder="08xxxxxxxxxx">

                        </div>


                        <!-- EMAIL -->

                        <div class="col-md-6">

                           <label class="form-label-custom">

                              Email

                           </label>

                           <input type="email"
                              class="form-control"
                              id="staffEmail"
                              placeholder="tenagamedis@klinik.com">

                        </div>


                     </div>

                  </div>


                  <hr class="my-4">


                  <!-- ==================================================
                         PENEMPATAN & JADWAL
                         ================================================== -->

                  <div>

                     <div class="fw-semibold mb-3"
                        style="font-size:13px;">

                        Penempatan & Jadwal

                     </div>


                     <div class="row g-3">


                        <!-- UNIT -->

                        <div class="col-md-6">

                           <label class="form-label-custom">

                              Unit / Layanan

                           </label>

                           <select class="form-select"
                              id="staffUnit">

                              <option value="">
                                 Pilih Unit
                              </option>

                              <option value="Nurse Station">
                                 Nurse Station
                              </option>

                              <option value="Ruang Kebidanan">
                                 Ruang Kebidanan
                              </option>

                              <option value="Farmasi">
                                 Farmasi
                              </option>

                              <option value="Laboratorium">
                                 Laboratorium
                              </option>

                              <option value="Poli Umum">
                                 Poli Umum
                              </option>

                              <option value="Administrasi">
                                 Administrasi
                              </option>

                           </select>

                        </div>


                        <!-- STATUS -->

                        <div class="col-md-6">

                           <label class="form-label-custom">

                              Status

                           </label>

                           <select class="form-select"
                              id="staffStatus">

                              <option value="Aktif">
                                 Aktif
                              </option>

                              <option value="Nonaktif">
                                 Nonaktif
                              </option>

                           </select>

                        </div>


                        <!-- HARI -->

                        <div class="col-md-6">

                           <label class="form-label-custom">

                              Hari Praktik / Shift

                           </label>

                           <input type="text"
                              class="form-control"
                              id="staffSchedule"
                              placeholder="Senin - Jumat">

                        </div>


                        <!-- JAM -->

                        <div class="col-md-6">

                           <label class="form-label-custom">

                              Jam Praktik / Shift

                           </label>

                           <input type="text"
                              class="form-control"
                              id="staffTime"
                              placeholder="08:00 - 16:00">

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

                     Simpan Tenaga Medis

                  </button>

               </div>


            </form>


         </div>

      </div>

   </div>


   <!-- ==========================================================
     MODAL DETAIL
     ========================================================== -->

   <div class="modal fade"
      id="staffDetailModal"
      tabindex="-1"
      aria-hidden="true">

      <div class="modal-dialog modal-md modal-dialog-centered">

         <div class="modal-content">


            <!-- HEADER -->

            <div class="modal-header">

               <div class="modal-title">

                  Detail Tenaga Medis

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


                  <div class="detail-avatar"
                     id="detailAvatar">

                     ST

                  </div>


                  <div>

                     <div class="detail-name"
                        id="detailName">

                        -

                     </div>


                     <div class="detail-profession"
                        id="detailProfession">

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

                           Kode

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


                  <!-- PROFESSION -->

                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">

                           Profesi

                        </div>

                        <div class="detail-value"
                           id="detailProfessionValue">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- SPECIALITY -->

                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">

                           Spesialisasi

                        </div>

                        <div class="detail-value"
                           id="detailSpeciality">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- SIP -->

                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">

                           SIP

                        </div>

                        <div class="detail-value"
                           id="detailSip">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- STR -->

                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">

                           STR

                        </div>

                        <div class="detail-value"
                           id="detailStr">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- PHONE -->

                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">

                           Telepon

                        </div>

                        <div class="detail-value"
                           id="detailPhone">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- EMAIL -->

                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">

                           Email

                        </div>

                        <div class="detail-value"
                           id="detailEmail">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- UNIT -->

                  <div class="col-12">

                     <div class="detail-item">

                        <div class="detail-label">

                           Unit / Layanan

                        </div>

                        <div class="detail-value"
                           id="detailUnit">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- SCHEDULE -->

                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">

                           Hari / Shift

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

                           Jam

                        </div>

                        <div class="detail-value"
                           id="detailTime">

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

      let staffModal;
      let staffDetailModal;


      document.addEventListener(
         'DOMContentLoaded',
         function() {

            staffModal =
               new bootstrap.Modal(
                  document.getElementById(
                     'staffModal'
                  )
               );


            staffDetailModal =
               new bootstrap.Modal(
                  document.getElementById(
                     'staffDetailModal'
                  )
               );

         }
      );


      /* ============================================================
         OPEN ADD MODAL
         ============================================================ */

      function openStaffModal() {

         document
            .getElementById('staffForm')
            .reset();


         document
            .getElementById('staffId')
            .value = '';


         document
            .getElementById('staffModalTitle')
            .innerText =
            'Tambah Tenaga Medis';


         staffModal.show();

      }


      /* ============================================================
         EDIT STAFF
         ============================================================ */

      function editStaff(staff) {


         document
            .getElementById('staffId')
            .value =
            staff.id;


         document
            .getElementById('staffCode')
            .value =
            staff.kode;


         document
            .getElementById('staffName')
            .value =
            staff.nama;


         document
            .getElementById('staffProfession')
            .value =
            staff.profesi;


         document
            .getElementById('staffSpeciality')
            .value =
            staff.spesialisasi;


         document
            .getElementById('staffSip')
            .value =
            staff.sip;


         document
            .getElementById('staffStr')
            .value =
            staff.str;


         document
            .getElementById('staffPhone')
            .value =
            staff.telepon;


         document
            .getElementById('staffEmail')
            .value =
            staff.email;


         document
            .getElementById('staffUnit')
            .value =
            staff.unit;


         document
            .getElementById('staffSchedule')
            .value =
            staff.jadwal;


         document
            .getElementById('staffTime')
            .value =
            staff.jam;


         document
            .getElementById('staffStatus')
            .value =
            staff.status;


         document
            .getElementById('staffModalTitle')
            .innerText =
            'Edit Tenaga Medis';


         staffModal.show();

      }


      /* ============================================================
         SAVE STAFF
         ============================================================ */

      function saveStaff(event) {

         event.preventDefault();


         const id =
            document
            .getElementById('staffId')
            .value;


         if (id) {

            alert(
               'Data tenaga medis berhasil diperbarui.\n\n' +
               'Mode demo — selanjutnya hubungkan ke database.'
            );

         } else {

            alert(
               'Data tenaga medis berhasil ditambahkan.\n\n' +
               'Mode demo — selanjutnya hubungkan ke database.'
            );

         }


         staffModal.hide();

      }


      /* ============================================================
         SHOW DETAIL
         ============================================================ */

      function showStaffDetail(staff) {


         const nameParts =
            staff.nama
            .trim()
            .split(/\s+/);


         let initials = '';


         nameParts
            .slice(0, 2)
            .forEach(function(part) {

               const clean =
                  part.replace(
                     /[^A-Za-z]/g,
                     ''
                  );


               if (clean.length > 0) {

                  initials +=
                     clean
                     .substring(0, 1)
                     .toUpperCase();

               }

            });


         document
            .getElementById('detailAvatar')
            .innerText =
            initials || 'ST';


         document
            .getElementById('detailName')
            .innerText =
            staff.nama;


         document
            .getElementById('detailProfession')
            .innerText =
            staff.profesi;


         document
            .getElementById('detailCode')
            .innerText =
            staff.kode;


         document
            .getElementById('detailProfessionValue')
            .innerText =
            staff.profesi;


         document
            .getElementById('detailSpeciality')
            .innerText =
            staff.spesialisasi || '-';


         document
            .getElementById('detailSip')
            .innerText =
            staff.sip || '-';


         document
            .getElementById('detailStr')
            .innerText =
            staff.str || '-';


         document
            .getElementById('detailPhone')
            .innerText =
            staff.telepon || '-';


         document
            .getElementById('detailEmail')
            .innerText =
            staff.email || '-';


         document
            .getElementById('detailUnit')
            .innerText =
            staff.unit || '-';


         document
            .getElementById('detailSchedule')
            .innerText =
            staff.jadwal || '-';


         document
            .getElementById('detailTime')
            .innerText =
            staff.jam || '-';


         document
            .getElementById('detailStatus')
            .innerHTML =

            staff.status === 'Aktif'

            ?
            '<span class="status-badge status-active">Aktif</span>'

            :
            '<span class="status-badge status-inactive">Nonaktif</span>';


         staffDetailModal.show();

      }


      /* ============================================================
         DELETE
         ============================================================ */

      function deleteStaff(id, name) {


         const confirmDelete =
            confirm(
               'Apakah Anda yakin ingin menghapus tenaga medis "' +
               name +
               '"?'
            );


         if (!confirmDelete) {

            return;

         }


         alert(
            'Tenaga medis "' +
            name +
            '" berhasil dihapus.\n\n' +
            'Mode demo — selanjutnya hubungkan ke database.'
         );

      }


      /* ============================================================
         FILTER
         ============================================================ */

      function filterStaff() {


         const search =
            document
            .getElementById(
               'searchStaff'
            )
            .value
            .toLowerCase()
            .trim();


         const profession =
            document
            .getElementById(
               'filterProfession'
            )
            .value;


         const status =
            document
            .getElementById(
               'filterStatus'
            )
            .value;


         const rows =
            document.querySelectorAll(
               '#staffTableBody tr'
            );


         let visibleCount = 0;


         rows.forEach(
            function(row) {


               const name =
                  row.dataset.name || '';


               const code =
                  row.dataset.code || '';


               const speciality =
                  row.dataset.speciality || '';


               const sip =
                  row.dataset.sip || '';


               const str =
                  row.dataset.str || '';


               const rowProfession =
                  row.dataset.profession || '';


               const rowStatus =
                  row.dataset.status || '';


               const searchMatch =

                  name.includes(search) ||

                  code.includes(search) ||

                  speciality.includes(search) ||

                  sip.includes(search) ||

                  str.includes(search);


               const professionMatch =

                  !profession ||

                  rowProfession === profession;


               const statusMatch =

                  !status ||

                  rowStatus === status;


               if (

                  searchMatch &&

                  professionMatch &&

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
            .getElementById(
               'searchStaff'
            )
            .value = '';


         document
            .getElementById(
               'filterProfession'
            )
            .value = '';


         document
            .getElementById(
               'filterStatus'
            )
            .value = '';


         filterStaff();

      }
   </script>


</body>

</html>