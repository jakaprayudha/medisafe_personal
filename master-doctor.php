<?php

/**
 * ============================================================
 * MASTER DOCTOR
 * ============================================================
 * File : master-doctor.php
 * Description : Master Data Dokter
 * ============================================================
 */

/* ============================================================
   DUMMY DATA
   Nanti bisa diganti query database
   ============================================================ */

$doctors = [
   [
      'id'            => 1,
      'kode'          => 'D001',
      'nama'          => 'dr. Andi Pratama',
      'spesialisasi'  => 'Dokter Umum',
      'sip'           => 'SIP-123456789',
      'str'           => 'STR-987654321',
      'telepon'       => '081234567890',
      'email'         => 'andi@klinik.com',
      'poli'          => 'Poli Umum',
      'jadwal'        => 'Senin - Jumat',
      'jam'           => '08:00 - 14:00',
      'status'        => 'Aktif',
   ],
   [
      'id'            => 2,
      'kode'          => 'D002',
      'nama'          => 'dr. Siti Rahma',
      'spesialisasi'  => 'Dokter Umum',
      'sip'           => 'SIP-223344556',
      'str'           => 'STR-665544332',
      'telepon'       => '081298765432',
      'email'         => 'siti@klinik.com',
      'poli'          => 'Poli Umum',
      'jadwal'        => 'Senin - Kamis',
      'jam'           => '09:00 - 15:00',
      'status'        => 'Aktif',
   ],
   [
      'id'            => 3,
      'kode'          => 'D003',
      'nama'          => 'drg. Budi Santoso',
      'spesialisasi'  => 'Dokter Gigi',
      'sip'           => 'SIP-445566778',
      'str'           => 'STR-112233445',
      'telepon'       => '081376543210',
      'email'         => 'budi@klinik.com',
      'poli'          => 'Poli Gigi',
      'jadwal'        => 'Selasa - Sabtu',
      'jam'           => '10:00 - 16:00',
      'status'        => 'Aktif',
   ],
   [
      'id'            => 4,
      'kode'          => 'D004',
      'nama'          => 'dr. Rina Amelia',
      'spesialisasi'  => 'Dokter Umum',
      'sip'           => 'SIP-778899001',
      'str'           => 'STR-556677889',
      'telepon'       => '081255667788',
      'email'         => 'rina@klinik.com',
      'poli'          => 'Poli Umum',
      'jadwal'        => 'Senin - Rabu',
      'jam'           => '08:00 - 13:00',
      'status'        => 'Nonaktif',
   ],
];

$totalDoctors = count($doctors);
$activeDoctors = count(array_filter($doctors, function ($doctor) {
   return $doctor['status'] === 'Aktif';
}));
$inactiveDoctors = $totalDoctors - $activeDoctors;

?>

<!DOCTYPE html>
<html lang="id">

<head>

   <meta charset="UTF-8">

   <meta name="viewport"
      content="width=device-width, initial-scale=1.0">

   <title>Master Doctor - Klinik Management System</title>

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
           PAGE
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

      .doctor-stat {
         background: #ffffff;
         border: 1px solid #e5e7eb;
         border-radius: 14px;
         padding: 18px;
         height: 100%;
      }

      .doctor-stat-icon {
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

      .doctor-stat-label {
         font-size: 12px;
         color: #6b7280;
         margin-bottom: 4px;
      }

      .doctor-stat-value {
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

      .doctor-table {
         margin-bottom: 0;
      }

      .doctor-table thead th {
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

      .doctor-table tbody td {
         padding: 14px 16px;
         vertical-align: middle;
         border-bottom: 1px solid #f1f5f9;
         font-size: 13px;
         color: #374151;
      }

      .doctor-table tbody tr:hover {
         background: #f8fafc;
      }

      .doctor-avatar {
         width: 38px;
         height: 38px;
         border-radius: 10px;
         background: #eff6ff;
         color: #2563eb;
         display: flex;
         align-items: center;
         justify-content: center;
         font-weight: 700;
         font-size: 13px;
         flex-shrink: 0;
      }

      .doctor-name {
         font-weight: 600;
         color: #111827;
         margin-bottom: 2px;
      }

      .doctor-code {
         color: #9ca3af;
         font-size: 11px;
      }

      .speciality {
         font-weight: 500;
         color: #374151;
      }

      .secondary-text {
         color: #9ca3af;
         font-size: 11px;
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
           BUTTON
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
         font-size: 18px;
         font-weight: 700;
      }

      .detail-name {
         font-size: 17px;
         font-weight: 700;
         color: #111827;
      }

      .detail-speciality {
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
           EMPTY
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

         .doctor-table {
            min-width: 900px;
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
                           Master Doctor
                        </div>

                        <div class="page-subtitle">
                           Kelola data dokter dan tenaga medis yang memberikan pelayanan di klinik.
                        </div>

                     </div>

                     <button type="button"
                        class="btn btn-primary-custom"
                        onclick="openDoctorModal()">

                        <i class="fa-solid fa-plus me-2"></i>

                        Tambah Dokter

                     </button>

                  </div>

               </div>


               <!-- ==================================================
                     STATISTICS
                     ================================================== -->

               <div class="row g-3 mb-4">

                  <!-- TOTAL -->
                  <div class="col-12 col-md-4">

                     <div class="doctor-stat">

                        <div class="d-flex align-items-center gap-3">

                           <div class="doctor-stat-icon">

                              <i class="fa-solid fa-user-doctor"></i>

                           </div>

                           <div>

                              <div class="doctor-stat-label">
                                 Total Dokter
                              </div>

                              <div class="doctor-stat-value">
                                 <?= $totalDoctors ?>
                              </div>

                           </div>

                        </div>

                     </div>

                  </div>


                  <!-- ACTIVE -->
                  <div class="col-12 col-md-4">

                     <div class="doctor-stat">

                        <div class="d-flex align-items-center gap-3">

                           <div class="doctor-stat-icon"
                              style="background:#ecfdf5;color:#059669;">

                              <i class="fa-solid fa-user-check"></i>

                           </div>

                           <div>

                              <div class="doctor-stat-label">
                                 Dokter Aktif
                              </div>

                              <div class="doctor-stat-value">
                                 <?= $activeDoctors ?>
                              </div>

                           </div>

                        </div>

                     </div>

                  </div>


                  <!-- INACTIVE -->
                  <div class="col-12 col-md-4">

                     <div class="doctor-stat">

                        <div class="d-flex align-items-center gap-3">

                           <div class="doctor-stat-icon"
                              style="background:#f3f4f6;color:#6b7280;">

                              <i class="fa-solid fa-user-xmark"></i>

                           </div>

                           <div>

                              <div class="doctor-stat-label">
                                 Dokter Nonaktif
                              </div>

                              <div class="doctor-stat-value">
                                 <?= $inactiveDoctors ?>
                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>


               <!-- ==================================================
                     DOCTOR TABLE
                     ================================================== -->

               <div class="main-card">

                  <!-- HEADER -->

                  <div class="main-card-header">

                     <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

                        <div>

                           <div class="main-card-title">
                              Daftar Dokter
                           </div>

                           <div class="main-card-subtitle">
                              Data dokter yang terdaftar pada sistem klinik.
                           </div>

                        </div>

                     </div>

                  </div>


                  <!-- FILTER -->

                  <div class="filter-box">

                     <div class="row g-2">

                        <div class="col-12 col-md-6">

                           <label class="form-label-custom">
                              Cari Dokter
                           </label>

                           <div class="position-relative">

                              <i class="fa-solid fa-magnifying-glass position-absolute"
                                 style="left:13px;top:13px;color:#9ca3af;font-size:12px;"></i>

                              <input type="text"
                                 id="searchDoctor"
                                 class="form-control ps-5"
                                 placeholder="Cari nama, kode, SIP atau spesialisasi..."
                                 onkeyup="filterDoctors()">

                           </div>

                        </div>


                        <div class="col-12 col-md-3">

                           <label class="form-label-custom">
                              Poli / Layanan
                           </label>

                           <select class="form-select"
                              id="filterPoli"
                              onchange="filterDoctors()">

                              <option value="">Semua Poli</option>
                              <option value="Poli Umum">Poli Umum</option>
                              <option value="Poli Gigi">Poli Gigi</option>

                           </select>

                        </div>


                        <div class="col-12 col-md-3">

                           <label class="form-label-custom">
                              Status
                           </label>

                           <select class="form-select"
                              id="filterStatus"
                              onchange="filterDoctors()">

                              <option value="">Semua Status</option>
                              <option value="Aktif">Aktif</option>
                              <option value="Nonaktif">Nonaktif</option>

                           </select>

                        </div>

                     </div>

                  </div>


                  <!-- TABLE -->

                  <div class="table-responsive">

                     <table class="table doctor-table">

                        <thead>

                           <tr>

                              <th style="width:280px;">
                                 Dokter
                              </th>

                              <th>
                                 Spesialisasi
                              </th>

                              <th>
                                 SIP / STR
                              </th>

                              <th>
                                 Poli
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

                        <tbody id="doctorTableBody">

                           <?php foreach ($doctors as $doctor): ?>

                              <?php

                              $nameParts = explode(' ', trim($doctor['nama']));

                              $initials = '';

                              foreach (array_slice($nameParts, 0, 2) as $part) {
                                 $initials .= strtoupper(substr($part, 0, 1));
                              }

                              ?>

                              <tr
                                 data-name="<?= strtolower(htmlspecialchars($doctor['nama'])) ?>"
                                 data-code="<?= strtolower(htmlspecialchars($doctor['kode'])) ?>"
                                 data-speciality="<?= strtolower(htmlspecialchars($doctor['spesialisasi'])) ?>"
                                 data-sip="<?= strtolower(htmlspecialchars($doctor['sip'])) ?>"
                                 data-poli="<?= htmlspecialchars($doctor['poli']) ?>"
                                 data-status="<?= htmlspecialchars($doctor['status']) ?>">

                                 <!-- DOKTER -->

                                 <td>

                                    <div class="d-flex align-items-center gap-3">

                                       <div class="doctor-avatar">

                                          <?= $initials ?>

                                       </div>

                                       <div>

                                          <div class="doctor-name">

                                             <?= htmlspecialchars($doctor['nama']) ?>

                                          </div>

                                          <div class="doctor-code">

                                             <?= htmlspecialchars($doctor['kode']) ?>

                                          </div>

                                       </div>

                                    </div>

                                 </td>


                                 <!-- SPECIALITY -->

                                 <td>

                                    <div class="speciality">

                                       <?= htmlspecialchars($doctor['spesialisasi']) ?>

                                    </div>

                                 </td>


                                 <!-- SIP STR -->

                                 <td>

                                    <div>
                                       <?= htmlspecialchars($doctor['sip']) ?>
                                    </div>

                                    <div class="secondary-text">

                                       <?= htmlspecialchars($doctor['str']) ?>

                                    </div>

                                 </td>


                                 <!-- POLI -->

                                 <td>

                                    <?= htmlspecialchars($doctor['poli']) ?>

                                 </td>


                                 <!-- JADWAL -->

                                 <td>

                                    <div>
                                       <?= htmlspecialchars($doctor['jadwal']) ?>
                                    </div>

                                    <div class="secondary-text">

                                       <?= htmlspecialchars($doctor['jam']) ?>

                                    </div>

                                 </td>


                                 <!-- STATUS -->

                                 <td>

                                    <?php if ($doctor['status'] === 'Aktif'): ?>

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

                                       <button type="button"
                                          class="action-btn"
                                          title="Detail"
                                          onclick='showDoctorDetail(<?= json_encode($doctor) ?>)'>

                                          <i class="fa-regular fa-eye"></i>

                                       </button>


                                       <button type="button"
                                          class="action-btn"
                                          title="Edit"
                                          onclick='editDoctor(<?= json_encode($doctor) ?>)'>

                                          <i class="fa-regular fa-pen-to-square"></i>

                                       </button>


                                       <button type="button"
                                          class="action-btn"
                                          title="Hapus"
                                          onclick="deleteDoctor('<?= $doctor['id'] ?>','<?= htmlspecialchars($doctor['nama'], ENT_QUOTES) ?>')">

                                          <i class="fa-regular fa-trash-can"></i>

                                       </button>

                                    </div>

                                 </td>

                              </tr>

                           <?php endforeach; ?>

                        </tbody>

                     </table>

                  </div>


                  <!-- EMPTY STATE -->

                  <div id="emptyState"
                     class="empty-state d-none">

                     <i class="fa-solid fa-user-doctor"></i>

                     <div class="fw-semibold text-dark">
                        Data dokter tidak ditemukan
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
     MODAL TAMBAH / EDIT DOKTER
     ========================================================== -->

   <div class="modal fade"
      id="doctorModal"
      tabindex="-1"
      aria-hidden="true">

      <div class="modal-dialog modal-lg modal-dialog-centered">

         <div class="modal-content">

            <div class="modal-header">

               <div>

                  <div class="modal-title"
                     id="doctorModalTitle">

                     Tambah Dokter

                  </div>

                  <div class="text-muted small mt-1">

                     Lengkapi informasi dokter dan layanan.

                  </div>

               </div>

               <button type="button"
                  class="btn-close"
                  data-bs-dismiss="modal">
               </button>

            </div>


            <form id="doctorForm"
               onsubmit="saveDoctor(event)">

               <div class="modal-body">

                  <input type="hidden"
                     id="doctorId"
                     value="">


                  <!-- IDENTITAS -->

                  <div class="mb-3">

                     <div class="fw-semibold mb-3"
                        style="font-size:13px;">

                        Informasi Dokter

                     </div>

                     <div class="row g-3">

                        <div class="col-md-4">

                           <label class="form-label-custom">
                              Kode Dokter
                           </label>

                           <input type="text"
                              class="form-control"
                              id="doctorCode"
                              placeholder="Contoh: D005"
                              required>

                        </div>


                        <div class="col-md-8">

                           <label class="form-label-custom">
                              Nama Dokter
                           </label>

                           <input type="text"
                              class="form-control"
                              id="doctorName"
                              placeholder="Contoh: dr. Ahmad Fauzi"
                              required>

                        </div>


                        <div class="col-md-6">

                           <label class="form-label-custom">
                              Spesialisasi
                           </label>

                           <select class="form-select"
                              id="doctorSpeciality"
                              required>

                              <option value="">
                                 Pilih Spesialisasi
                              </option>

                              <option value="Dokter Umum">
                                 Dokter Umum
                              </option>

                              <option value="Dokter Gigi">
                                 Dokter Gigi
                              </option>

                              <option value="Dokter Spesialis">
                                 Dokter Spesialis
                              </option>

                           </select>

                        </div>


                        <div class="col-md-6">

                           <label class="form-label-custom">
                              Poli / Layanan
                           </label>

                           <select class="form-select"
                              id="doctorPoli"
                              required>

                              <option value="">
                                 Pilih Poli
                              </option>

                              <option value="Poli Umum">
                                 Poli Umum
                              </option>

                              <option value="Poli Gigi">
                                 Poli Gigi
                              </option>

                           </select>

                        </div>

                     </div>

                  </div>


                  <hr class="my-4">


                  <!-- LEGALITAS -->

                  <div class="mb-3">

                     <div class="fw-semibold mb-3"
                        style="font-size:13px;">

                        Legalitas

                     </div>

                     <div class="row g-3">

                        <div class="col-md-6">

                           <label class="form-label-custom">
                              Nomor SIP
                           </label>

                           <input type="text"
                              class="form-control"
                              id="doctorSip"
                              placeholder="Nomor SIP">

                        </div>


                        <div class="col-md-6">

                           <label class="form-label-custom">
                              Nomor STR
                           </label>

                           <input type="text"
                              class="form-control"
                              id="doctorStr"
                              placeholder="Nomor STR">

                        </div>

                     </div>

                  </div>


                  <hr class="my-4">


                  <!-- KONTAK -->

                  <div class="mb-3">

                     <div class="fw-semibold mb-3"
                        style="font-size:13px;">

                        Kontak

                     </div>

                     <div class="row g-3">

                        <div class="col-md-6">

                           <label class="form-label-custom">
                              Nomor Telepon
                           </label>

                           <input type="text"
                              class="form-control"
                              id="doctorPhone"
                              placeholder="08xxxxxxxxxx">

                        </div>


                        <div class="col-md-6">

                           <label class="form-label-custom">
                              Email
                           </label>

                           <input type="email"
                              class="form-control"
                              id="doctorEmail"
                              placeholder="dokter@klinik.com">

                        </div>

                     </div>

                  </div>


                  <hr class="my-4">


                  <!-- JADWAL -->

                  <div>

                     <div class="fw-semibold mb-3"
                        style="font-size:13px;">

                        Jadwal Praktik

                     </div>

                     <div class="row g-3">

                        <div class="col-md-6">

                           <label class="form-label-custom">
                              Hari Praktik
                           </label>

                           <input type="text"
                              class="form-control"
                              id="doctorSchedule"
                              placeholder="Senin - Jumat">

                        </div>


                        <div class="col-md-6">

                           <label class="form-label-custom">
                              Jam Praktik
                           </label>

                           <input type="text"
                              class="form-control"
                              id="doctorTime"
                              placeholder="08:00 - 14:00">

                        </div>


                        <div class="col-md-6">

                           <label class="form-label-custom">
                              Status
                           </label>

                           <select class="form-select"
                              id="doctorStatus">

                              <option value="Aktif">
                                 Aktif
                              </option>

                              <option value="Nonaktif">
                                 Nonaktif
                              </option>

                           </select>

                        </div>

                     </div>

                  </div>

               </div>


               <div class="modal-footer">

                  <button type="button"
                     class="btn btn-light"
                     data-bs-dismiss="modal">

                     Batal

                  </button>

                  <button type="submit"
                     class="btn btn-primary-custom">

                     <i class="fa-solid fa-floppy-disk me-2"></i>

                     Simpan Dokter

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
      id="doctorDetailModal"
      tabindex="-1"
      aria-hidden="true">

      <div class="modal-dialog modal-md modal-dialog-centered">

         <div class="modal-content">

            <div class="modal-header">

               <div class="modal-title">
                  Detail Dokter
               </div>

               <button type="button"
                  class="btn-close"
                  data-bs-dismiss="modal">
               </button>

            </div>


            <div class="modal-body">

               <div class="detail-profile">

                  <div class="detail-avatar"
                     id="detailAvatar">
                     DR
                  </div>

                  <div>

                     <div class="detail-name"
                        id="detailName">
                        -
                     </div>

                     <div class="detail-speciality"
                        id="detailSpeciality">
                        -
                     </div>

                  </div>

               </div>


               <div class="row">

                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">
                           Kode Dokter
                        </div>

                        <div class="detail-value"
                           id="detailCode">
                           -
                        </div>

                     </div>

                  </div>


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


                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">
                           Poli
                        </div>

                        <div class="detail-value"
                           id="detailPoli">
                           -
                        </div>

                     </div>

                  </div>


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


                  <div class="col-12">

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


                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">
                           Hari Praktik
                        </div>

                        <div class="detail-value"
                           id="detailSchedule">
                           -
                        </div>

                     </div>

                  </div>


                  <div class="col-6">

                     <div class="detail-item">

                        <div class="detail-label">
                           Jam Praktik
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

      let doctorModal;
      let doctorDetailModal;

      document.addEventListener('DOMContentLoaded', function() {

         doctorModal = new bootstrap.Modal(
            document.getElementById('doctorModal')
         );

         doctorDetailModal = new bootstrap.Modal(
            document.getElementById('doctorDetailModal')
         );

      });


      /* ============================================================
         OPEN ADD MODAL
         ============================================================ */

      function openDoctorModal() {

         document.getElementById('doctorForm').reset();

         document.getElementById('doctorId').value = '';

         document.getElementById('doctorModalTitle').innerText =
            'Tambah Dokter';

         doctorModal.show();

      }


      /* ============================================================
         EDIT DOCTOR
         ============================================================ */

      function editDoctor(doctor) {

         document.getElementById('doctorId').value =
            doctor.id;

         document.getElementById('doctorCode').value =
            doctor.kode;

         document.getElementById('doctorName').value =
            doctor.nama;

         document.getElementById('doctorSpeciality').value =
            doctor.spesialisasi;

         document.getElementById('doctorPoli').value =
            doctor.poli;

         document.getElementById('doctorSip').value =
            doctor.sip;

         document.getElementById('doctorStr').value =
            doctor.str;

         document.getElementById('doctorPhone').value =
            doctor.telepon;

         document.getElementById('doctorEmail').value =
            doctor.email;

         document.getElementById('doctorSchedule').value =
            doctor.jadwal;

         document.getElementById('doctorTime').value =
            doctor.jam;

         document.getElementById('doctorStatus').value =
            doctor.status;

         document.getElementById('doctorModalTitle').innerText =
            'Edit Dokter';

         doctorModal.show();

      }


      /* ============================================================
         SAVE DOCTOR
         ============================================================ */

      function saveDoctor(event) {

         event.preventDefault();

         const id =
            document.getElementById('doctorId').value;

         if (id) {

            alert(
               'Data dokter berhasil diperbarui.\n\n' +
               'Mode demo — selanjutnya hubungkan ke API / database.'
            );

         } else {

            alert(
               'Data dokter berhasil ditambahkan.\n\n' +
               'Mode demo — selanjutnya hubungkan ke API / database.'
            );

         }

         doctorModal.hide();

      }


      /* ============================================================
         DETAIL DOCTOR
         ============================================================ */

      function showDoctorDetail(doctor) {

         const nameParts =
            doctor.nama.trim().split(/\s+/);

         let initials = '';

         nameParts.slice(0, 2).forEach(function(part) {

            initials +=
               part.substring(0, 1).toUpperCase();

         });

         document.getElementById('detailAvatar').innerText =
            initials;

         document.getElementById('detailName').innerText =
            doctor.nama;

         document.getElementById('detailSpeciality').innerText =
            doctor.spesialisasi;

         document.getElementById('detailCode').innerText =
            doctor.kode;

         document.getElementById('detailStatus').innerHTML =
            doctor.status === 'Aktif' ?
            '<span class="status-badge status-active">Aktif</span>' :
            '<span class="status-badge status-inactive">Nonaktif</span>';

         document.getElementById('detailSip').innerText =
            doctor.sip || '-';

         document.getElementById('detailStr').innerText =
            doctor.str || '-';

         document.getElementById('detailPoli').innerText =
            doctor.poli || '-';

         document.getElementById('detailPhone').innerText =
            doctor.telepon || '-';

         document.getElementById('detailEmail').innerText =
            doctor.email || '-';

         document.getElementById('detailSchedule').innerText =
            doctor.jadwal || '-';

         document.getElementById('detailTime').innerText =
            doctor.jam || '-';

         doctorDetailModal.show();

      }


      /* ============================================================
         DELETE DOCTOR
         ============================================================ */

      function deleteDoctor(id, name) {

         const confirmDelete =
            confirm(
               'Apakah Anda yakin ingin menghapus dokter "' +
               name +
               '"?'
            );

         if (!confirmDelete) {
            return;
         }

         alert(
            'Dokter "' +
            name +
            '" berhasil dihapus.\n\n' +
            'Mode demo — selanjutnya hubungkan ke API / database.'
         );

      }


      /* ============================================================
         FILTER DOCTORS
         ============================================================ */

      function filterDoctors() {

         const search =
            document
            .getElementById('searchDoctor')
            .value
            .toLowerCase()
            .trim();

         const poli =
            document
            .getElementById('filterPoli')
            .value;

         const status =
            document
            .getElementById('filterStatus')
            .value;

         const rows =
            document.querySelectorAll(
               '#doctorTableBody tr'
            );

         let visibleCount = 0;

         rows.forEach(function(row) {

            const name =
               row.dataset.name || '';

            const code =
               row.dataset.code || '';

            const speciality =
               row.dataset.speciality || '';

            const sip =
               row.dataset.sip || '';

            const rowPoli =
               row.dataset.poli || '';

            const rowStatus =
               row.dataset.status || '';

            const searchMatch =
               name.includes(search) ||
               code.includes(search) ||
               speciality.includes(search) ||
               sip.includes(search);

            const poliMatch = !poli ||
               rowPoli === poli;

            const statusMatch = !status ||
               rowStatus === status;

            if (
               searchMatch &&
               poliMatch &&
               statusMatch
            ) {

               row.style.display = '';

               visibleCount++;

            } else {

               row.style.display = 'none';

            }

         });


         const emptyState =
            document.getElementById('emptyState');

         if (visibleCount === 0) {

            emptyState.classList.remove('d-none');

         } else {

            emptyState.classList.add('d-none');

         }

      }
   </script>


</body>

</html>