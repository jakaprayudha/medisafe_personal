<?php

/**
 * ============================================================
 * MASTER ACTION
 * ============================================================
 * File : master-action.php
 * Deskripsi : Master Data Tindakan / Layanan Medis
 * ============================================================
 */

/*
|--------------------------------------------------------------------------
| Dummy Data
|--------------------------------------------------------------------------
| Nanti bisa diganti query database.
*/
$actions = [
   [
      'id' => 1,
      'kode' => 'ACT-001',
      'nama' => 'Pemeriksaan Umum',
      'kategori' => 'Pemeriksaan',
      'jenis' => 'Medis',
      'satuan' => 'Kali',
      'tarif' => 75000,
      'durasi' => 15,
      'status' => 'Aktif',
      'keterangan' => 'Pemeriksaan umum oleh dokter.',
   ],
   [
      'id' => 2,
      'kode' => 'ACT-002',
      'nama' => 'Konsultasi Dokter',
      'kategori' => 'Konsultasi',
      'jenis' => 'Medis',
      'satuan' => 'Kali',
      'tarif' => 100000,
      'durasi' => 20,
      'status' => 'Aktif',
      'keterangan' => 'Konsultasi dan evaluasi kondisi pasien.',
   ],
   [
      'id' => 3,
      'kode' => 'ACT-003',
      'nama' => 'Tindakan Jahit Luka',
      'kategori' => 'Tindakan',
      'jenis' => 'Medis',
      'satuan' => 'Kali',
      'tarif' => 150000,
      'durasi' => 30,
      'status' => 'Aktif',
      'keterangan' => 'Tindakan penjahitan luka sederhana.',
   ],
   [
      'id' => 4,
      'kode' => 'ACT-004',
      'nama' => 'Perawatan Luka',
      'kategori' => 'Perawatan',
      'jenis' => 'Medis',
      'satuan' => 'Kali',
      'tarif' => 85000,
      'durasi' => 20,
      'status' => 'Aktif',
      'keterangan' => 'Perawatan luka dan penggantian balutan.',
   ],
   [
      'id' => 5,
      'kode' => 'ACT-005',
      'nama' => 'Injeksi Intramuskular',
      'kategori' => 'Injeksi',
      'jenis' => 'Keperawatan',
      'satuan' => 'Kali',
      'tarif' => 35000,
      'durasi' => 10,
      'status' => 'Aktif',
      'keterangan' => 'Pemberian obat melalui injeksi intramuskular.',
   ],
   [
      'id' => 6,
      'kode' => 'ACT-006',
      'nama' => 'Injeksi Intravena',
      'kategori' => 'Injeksi',
      'jenis' => 'Keperawatan',
      'satuan' => 'Kali',
      'tarif' => 45000,
      'durasi' => 15,
      'status' => 'Aktif',
      'keterangan' => 'Pemberian obat melalui intravena.',
   ],
   [
      'id' => 7,
      'kode' => 'ACT-007',
      'nama' => 'Nebulizer',
      'kategori' => 'Terapi',
      'jenis' => 'Medis',
      'satuan' => 'Kali',
      'tarif' => 75000,
      'durasi' => 20,
      'status' => 'Aktif',
      'keterangan' => 'Terapi inhalasi menggunakan nebulizer.',
   ],
   [
      'id' => 8,
      'kode' => 'ACT-008',
      'nama' => 'Cek Gula Darah',
      'kategori' => 'Laboratorium',
      'jenis' => 'Laboratorium',
      'satuan' => 'Kali',
      'tarif' => 30000,
      'durasi' => 10,
      'status' => 'Aktif',
      'keterangan' => 'Pemeriksaan gula darah sewaktu.',
   ],
   [
      'id' => 9,
      'kode' => 'ACT-009',
      'nama' => 'Cek Asam Urat',
      'kategori' => 'Laboratorium',
      'jenis' => 'Laboratorium',
      'satuan' => 'Kali',
      'tarif' => 35000,
      'durasi' => 10,
      'status' => 'Aktif',
      'keterangan' => 'Pemeriksaan kadar asam urat.',
   ],
   [
      'id' => 10,
      'kode' => 'ACT-010',
      'nama' => 'Cek Kolesterol',
      'kategori' => 'Laboratorium',
      'jenis' => 'Laboratorium',
      'satuan' => 'Kali',
      'tarif' => 40000,
      'durasi' => 10,
      'status' => 'Nonaktif',
      'keterangan' => 'Pemeriksaan kadar kolesterol total.',
   ],
];

/*
|--------------------------------------------------------------------------
| Helper
|--------------------------------------------------------------------------
*/
function formatRupiah($value)
{
   return 'Rp ' . number_format($value, 0, ',', '.');
}

function statusBadge($status)
{
   if ($status === 'Aktif') {
      return '<span class="badge-status active">
                    <i class="fa-solid fa-circle-check"></i> Aktif
                </span>';
   }

   return '<span class="badge-status inactive">
                <i class="fa-solid fa-circle-xmark"></i> Nonaktif
            </span>';
}

function jenisBadge($jenis)
{
   $map = [
      'Medis' => 'primary',
      'Keperawatan' => 'success',
      'Laboratorium' => 'warning',
      'Administratif' => 'secondary',
   ];

   $class = $map[$jenis] ?? 'secondary';

   return '<span class="type-badge ' . $class . '">' . htmlspecialchars($jenis) . '</span>';
}

/*
|--------------------------------------------------------------------------
| Statistics
|--------------------------------------------------------------------------
*/
$totalActions = count($actions);

$activeActions = count(
   array_filter($actions, fn($item) => $item['status'] === 'Aktif')
);

$inactiveActions = count(
   array_filter($actions, fn($item) => $item['status'] === 'Nonaktif')
);

$totalCategories = count(
   array_unique(array_column($actions, 'kategori'))
);
?>

<!DOCTYPE html>
<html lang="id">

<head>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Master Tindakan - Klinik Management System</title>

   <!-- Google Font -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

   <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
      rel="stylesheet">

   <!-- Bootstrap -->
   <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet">

   <!-- Font Awesome -->
   <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      rel="stylesheet">

   <!-- Main CSS -->
   <link rel="stylesheet" href="assets/css/style.css">

   <style>
      /* =====================================================
           PAGE
        ===================================================== */

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


      /* =====================================================
           STAT CARD
        ===================================================== */

      .stat-grid {
         display: grid;
         grid-template-columns: repeat(4, 1fr);
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


      /* =====================================================
           FILTER
        ===================================================== */

      .filter-card {
         background: #fff;
         border: 1px solid #e9edf4;
         border-radius: 14px;
         padding: 18px;
         margin-bottom: 20px;
      }

      .filter-row {
         display: grid;
         grid-template-columns: 2fr 1fr 1fr auto;
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
         box-shadow: 0 0 0 3px rgba(37, 99, 235, .10);
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


      /* =====================================================
           TABLE
        ===================================================== */

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
         min-width: 1000px;
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

      .action-name {
         font-weight: 600;
         color: #172033;
         margin-bottom: 3px;
      }

      .action-code {
         font-size: 11px;
         color: #8b94a5;
      }

      .category-text {
         color: #586174;
         font-weight: 500;
      }

      .tariff {
         font-weight: 700;
         color: #172033;
      }

      .duration {
         color: #687286;
         white-space: nowrap;
      }


      /* =====================================================
           BADGES
        ===================================================== */

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

      .type-badge {
         display: inline-block;
         padding: 5px 9px;
         border-radius: 6px;
         font-size: 11px;
         font-weight: 600;
      }

      .type-badge.primary {
         background: #eaf2ff;
         color: #2563eb;
      }

      .type-badge.success {
         background: #eafaf1;
         color: #15803d;
      }

      .type-badge.warning {
         background: #fff5e8;
         color: #b86b00;
      }

      .type-badge.secondary {
         background: #f1f3f5;
         color: #667085;
      }


      /* =====================================================
           ACTION BUTTON
        ===================================================== */

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

      .btn-icon.edit:hover {
         color: #2563eb;
      }

      .btn-icon.delete:hover {
         color: #dc2626;
      }


      /* =====================================================
           MODAL
        ===================================================== */

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
         margin-bottom: 16px;
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


      /* =====================================================
           RESPONSIVE
        ===================================================== */

      @media (max-width: 1100px) {

         .stat-grid {
            grid-template-columns: repeat(2, 1fr);
         }

         .filter-row {
            grid-template-columns: 1fr 1fr;
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

      <!-- SIDEBAR -->
      <?php require 'components/sidebar.php'; ?>


      <!-- MAIN -->
      <div class="main">

         <!-- HEADER -->
         <?php require 'components/header.php'; ?>


         <!-- CONTENT -->
         <main class="content">

            <div class="container-fluid py-4 px-4">

               <!-- =================================================
                     PAGE HEADER
                ================================================== -->

               <div class="page-header">

                  <div>

                     <h1 class="page-title">
                        Master Tindakan
                     </h1>

                     <div class="page-subtitle">
                        Kelola data tindakan medis, layanan, dan tarif klinik
                     </div>

                  </div>

                  <button
                     class="btn-primary-custom"
                     onclick="openAddModal()">

                     <i class="fa-solid fa-plus me-2"></i>
                     Tambah Tindakan

                  </button>

               </div>


               <!-- =================================================
                     STATISTICS
                ================================================== -->

               <div class="stat-grid">

                  <!-- Total -->
                  <div class="stat-card">

                     <div class="stat-icon blue">
                        <i class="fa-solid fa-stethoscope"></i>
                     </div>

                     <div>

                        <div class="stat-label">
                           Total Tindakan
                        </div>

                        <div class="stat-value">
                           <?= $totalActions ?>
                        </div>

                     </div>

                  </div>


                  <!-- Active -->
                  <div class="stat-card">

                     <div class="stat-icon green">
                        <i class="fa-solid fa-circle-check"></i>
                     </div>

                     <div>

                        <div class="stat-label">
                           Tindakan Aktif
                        </div>

                        <div class="stat-value">
                           <?= $activeActions ?>
                        </div>

                     </div>

                  </div>


                  <!-- Inactive -->
                  <div class="stat-card">

                     <div class="stat-icon orange">
                        <i class="fa-solid fa-circle-xmark"></i>
                     </div>

                     <div>

                        <div class="stat-label">
                           Tindakan Nonaktif
                        </div>

                        <div class="stat-value">
                           <?= $inactiveActions ?>
                        </div>

                     </div>

                  </div>


                  <!-- Category -->
                  <div class="stat-card">

                     <div class="stat-icon purple">
                        <i class="fa-solid fa-layer-group"></i>
                     </div>

                     <div>

                        <div class="stat-label">
                           Kategori
                        </div>

                        <div class="stat-value">
                           <?= $totalCategories ?>
                        </div>

                     </div>

                  </div>

               </div>


               <!-- =================================================
                     FILTER
                ================================================== -->

               <div class="filter-card">

                  <div class="filter-row">

                     <!-- Search -->
                     <div class="search-wrapper">

                        <i class="fa-solid fa-magnifying-glass"></i>

                        <input
                           type="text"
                           id="searchInput"
                           class="form-control"
                           placeholder="Cari kode atau nama tindakan..."
                           onkeyup="filterActions()">

                     </div>


                     <!-- Category -->
                     <select
                        id="categoryFilter"
                        class="form-select"
                        onchange="filterActions()">

                        <option value="">
                           Semua Kategori
                        </option>

                        <option value="Pemeriksaan">
                           Pemeriksaan
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


                     <!-- Status -->
                     <select
                        id="statusFilter"
                        class="form-select"
                        onchange="filterActions()">

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


                     <!-- Reset -->
                     <button
                        class="btn-reset"
                        onclick="resetFilter()">

                        <i class="fa-solid fa-rotate-left me-1"></i>
                        Reset

                     </button>

                  </div>

               </div>


               <!-- =================================================
                     TABLE
                ================================================== -->

               <div class="table-card">

                  <div class="table-card-header">

                     <div>

                        <h5 class="table-title">
                           Daftar Tindakan
                        </h5>

                     </div>

                     <div
                        class="table-count"
                        id="tableCount">

                        <?= $totalActions ?> tindakan

                     </div>

                  </div>


                  <div class="table-responsive">

                     <table class="table">

                        <thead>

                           <tr>

                              <th width="22%">
                                 TINDAKAN
                              </th>

                              <th width="12%">
                                 KATEGORI
                              </th>

                              <th width="13%">
                                 JENIS
                              </th>

                              <th width="14%">
                                 TARIF
                              </th>

                              <th width="10%">
                                 DURASI
                              </th>

                              <th width="11%">
                                 SATUAN
                              </th>

                              <th width="10%">
                                 STATUS
                              </th>

                              <th width="8%">
                                 AKSI
                              </th>

                           </tr>

                        </thead>


                        <tbody id="actionTableBody">

                           <?php foreach ($actions as $action): ?>

                              <tr
                                 data-name="<?= strtolower(htmlspecialchars($action['nama'])) ?>"
                                 data-code="<?= strtolower(htmlspecialchars($action['kode'])) ?>"
                                 data-category="<?= htmlspecialchars($action['kategori']) ?>"
                                 data-status="<?= htmlspecialchars($action['status']) ?>">

                                 <td>

                                    <div class="action-name">
                                       <?= htmlspecialchars($action['nama']) ?>
                                    </div>

                                    <div class="action-code">
                                       <?= htmlspecialchars($action['kode']) ?>
                                    </div>

                                 </td>


                                 <td>

                                    <span class="category-text">
                                       <?= htmlspecialchars($action['kategori']) ?>
                                    </span>

                                 </td>


                                 <td>

                                    <?= jenisBadge($action['jenis']) ?>

                                 </td>


                                 <td>

                                    <span class="tariff">
                                       <?= formatRupiah($action['tarif']) ?>
                                    </span>

                                 </td>


                                 <td>

                                    <span class="duration">

                                       <i class="fa-regular fa-clock me-1"></i>

                                       <?= $action['durasi'] ?> menit

                                    </span>

                                 </td>


                                 <td>

                                    <?= htmlspecialchars($action['satuan']) ?>

                                 </td>


                                 <td>

                                    <?= statusBadge($action['status']) ?>

                                 </td>


                                 <td>

                                    <div class="action-buttons">

                                       <button
                                          class="btn-icon"
                                          title="Detail"
                                          onclick="showDetail(<?= $action['id'] ?>)">

                                          <i class="fa-regular fa-eye"></i>

                                       </button>


                                       <button
                                          class="btn-icon edit"
                                          title="Edit"
                                          onclick="editAction(<?= $action['id'] ?>)">

                                          <i class="fa-solid fa-pen"></i>

                                       </button>


                                       <button
                                          class="btn-icon delete"
                                          title="Hapus"
                                          onclick="deleteAction(<?= $action['id'] ?>)">

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
      id="actionModal"
      tabindex="-1">

      <div class="modal-dialog modal-lg modal-dialog-centered">

         <div class="modal-content">

            <div class="modal-header">

               <h5
                  class="modal-title"
                  id="actionModalTitle">

                  Tambah Tindakan

               </h5>

               <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal">
               </button>

            </div>


            <div class="modal-body">

               <form id="actionForm">

                  <input
                     type="hidden"
                     id="actionId">


                  <div class="row g-3">

                     <!-- Kode -->
                     <div class="col-md-4">

                        <label class="form-label">
                           Kode Tindakan
                           <span class="required">*</span>
                        </label>

                        <input
                           type="text"
                           id="actionCode"
                           class="form-control"
                           placeholder="Contoh: ACT-011">

                     </div>


                     <!-- Nama -->
                     <div class="col-md-8">

                        <label class="form-label">
                           Nama Tindakan
                           <span class="required">*</span>
                        </label>

                        <input
                           type="text"
                           id="actionName"
                           class="form-control"
                           placeholder="Nama tindakan">

                     </div>


                     <!-- Kategori -->
                     <div class="col-md-4">

                        <label class="form-label">
                           Kategori
                           <span class="required">*</span>
                        </label>

                        <select
                           id="actionCategory"
                           class="form-select">

                           <option value="">
                              Pilih Kategori
                           </option>

                           <option value="Pemeriksaan">
                              Pemeriksaan
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


                     <!-- Jenis -->
                     <div class="col-md-4">

                        <label class="form-label">
                           Jenis
                           <span class="required">*</span>
                        </label>

                        <select
                           id="actionType"
                           class="form-select">

                           <option value="">
                              Pilih Jenis
                           </option>

                           <option value="Medis">
                              Medis
                           </option>

                           <option value="Keperawatan">
                              Keperawatan
                           </option>

                           <option value="Laboratorium">
                              Laboratorium
                           </option>

                           <option value="Administratif">
                              Administratif
                           </option>

                        </select>

                     </div>


                     <!-- Satuan -->
                     <div class="col-md-4">

                        <label class="form-label">
                           Satuan
                        </label>

                        <select
                           id="actionUnit"
                           class="form-select">

                           <option value="Kali">
                              Kali
                           </option>

                           <option value="Paket">
                              Paket
                           </option>

                           <option value="Botol">
                              Botol
                           </option>

                           <option value="Lembar">
                              Lembar
                           </option>

                        </select>

                     </div>


                     <!-- Tarif -->
                     <div class="col-md-5">

                        <label class="form-label">
                           Tarif
                           <span class="required">*</span>
                        </label>

                        <div class="input-group">

                           <span class="input-group-text">
                              Rp
                           </span>

                           <input
                              type="number"
                              id="actionTariff"
                              class="form-control"
                              placeholder="0"
                              min="0">

                        </div>

                     </div>


                     <!-- Durasi -->
                     <div class="col-md-3">

                        <label class="form-label">
                           Durasi
                        </label>

                        <div class="input-group">

                           <input
                              type="number"
                              id="actionDuration"
                              class="form-control"
                              placeholder="15"
                              min="1">

                           <span class="input-group-text">
                              menit
                           </span>

                        </div>

                     </div>


                     <!-- Status -->
                     <div class="col-md-4">

                        <label class="form-label">
                           Status
                        </label>

                        <select
                           id="actionStatus"
                           class="form-select">

                           <option value="Aktif">
                              Aktif
                           </option>

                           <option value="Nonaktif">
                              Nonaktif
                           </option>

                        </select>

                     </div>


                     <!-- Keterangan -->
                     <div class="col-12">

                        <label class="form-label">
                           Keterangan
                        </label>

                        <textarea
                           id="actionDescription"
                           class="form-control"
                           rows="3"
                           placeholder="Keterangan tindakan..."></textarea>

                     </div>


                     <!-- Info -->
                     <div class="col-12">

                        <div class="info-box">

                           <i class="fa-solid fa-circle-info me-1"></i>

                           Tarif tindakan dapat digunakan pada transaksi
                           pelayanan, RME, billing, dan laporan pendapatan.

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
                  onclick="saveAction()">

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
                  Detail Tindakan
               </h5>

               <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal">
               </button>

            </div>


            <div class="modal-body">

               <div class="row">

                  <div class="col-6">
                     <div class="detail-item">
                        <div class="detail-label">
                           KODE TINDAKAN
                        </div>

                        <div
                           class="detail-value"
                           id="detailCode">
                        </div>
                     </div>
                  </div>


                  <div class="col-6">
                     <div class="detail-item">
                        <div class="detail-label">
                           STATUS
                        </div>

                        <div
                           class="detail-value"
                           id="detailStatus">
                        </div>
                     </div>
                  </div>


                  <div class="col-12">
                     <div class="detail-item">
                        <div class="detail-label">
                           NAMA TINDAKAN
                        </div>

                        <div
                           class="detail-value"
                           id="detailName">
                        </div>
                     </div>
                  </div>


                  <div class="col-6">
                     <div class="detail-item">
                        <div class="detail-label">
                           KATEGORI
                        </div>

                        <div
                           class="detail-value"
                           id="detailCategory">
                        </div>
                     </div>
                  </div>


                  <div class="col-6">
                     <div class="detail-item">
                        <div class="detail-label">
                           JENIS
                        </div>

                        <div
                           class="detail-value"
                           id="detailType">
                        </div>
                     </div>
                  </div>


                  <div class="col-6">
                     <div class="detail-item">
                        <div class="detail-label">
                           TARIF
                        </div>

                        <div
                           class="detail-value"
                           id="detailTariff">
                        </div>
                     </div>
                  </div>


                  <div class="col-6">
                     <div class="detail-item">
                        <div class="detail-label">
                           DURASI
                        </div>

                        <div
                           class="detail-value"
                           id="detailDuration">
                        </div>
                     </div>
                  </div>


                  <div class="col-6">
                     <div class="detail-item">
                        <div class="detail-label">
                           SATUAN
                        </div>

                        <div
                           class="detail-value"
                           id="detailUnit">
                        </div>
                     </div>
                  </div>


                  <div class="col-12">

                     <div class="detail-item">

                        <div class="detail-label">
                           KETERANGAN
                        </div>

                        <div
                           class="detail-value"
                           id="detailDescription">
                        </div>

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
                  Hapus Tindakan?
               </h5>

               <p
                  class="text-muted small mb-4">

                  Data tindakan akan dihapus dari master.
                  Pastikan tindakan tersebut tidak sedang
                  digunakan pada transaksi.

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


   <!-- Bootstrap -->
   <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
   </script>


   <script>
      /* ============================================================
   DATA
============================================================ */

      const actions = <?= json_encode($actions, JSON_UNESCAPED_UNICODE); ?>;

      let selectedActionId = null;


      /* ============================================================
         ADD
      ============================================================ */

      function openAddModal() {
         document.getElementById('actionForm').reset();

         document.getElementById('actionId').value = '';

         document.getElementById('actionStatus').value = 'Aktif';

         document.getElementById('actionModalTitle').innerText =
            'Tambah Tindakan';

         const modal = new bootstrap.Modal(
            document.getElementById('actionModal')
         );

         modal.show();
      }


      /* ============================================================
         EDIT
      ============================================================ */

      function editAction(id) {
         const action = actions.find(
            item => item.id == id
         );

         if (!action) return;

         document.getElementById('actionId').value =
            action.id;

         document.getElementById('actionCode').value =
            action.kode;

         document.getElementById('actionName').value =
            action.nama;

         document.getElementById('actionCategory').value =
            action.kategori;

         document.getElementById('actionType').value =
            action.jenis;

         document.getElementById('actionUnit').value =
            action.satuan;

         document.getElementById('actionTariff').value =
            action.tarif;

         document.getElementById('actionDuration').value =
            action.durasi;

         document.getElementById('actionStatus').value =
            action.status;

         document.getElementById('actionDescription').value =
            action.keterangan;

         document.getElementById('actionModalTitle').innerText =
            'Edit Tindakan';

         const modal = new bootstrap.Modal(
            document.getElementById('actionModal')
         );

         modal.show();
      }


      /* ============================================================
         SAVE
      ============================================================ */

      function saveAction() {
         const code =
            document.getElementById('actionCode').value.trim();

         const name =
            document.getElementById('actionName').value.trim();

         const category =
            document.getElementById('actionCategory').value;

         const type =
            document.getElementById('actionType').value;

         const tariff =
            document.getElementById('actionTariff').value;


         if (!code || !name || !category || !type || !tariff) {
            alert('Mohon lengkapi field yang wajib diisi.');
            return;
         }


         alert(
            'Data tindakan berhasil disimpan.\n\n' +
            'Pada tahap production, data akan disimpan ke database.'
         );


         bootstrap.Modal
            .getInstance(
               document.getElementById('actionModal')
            )
            .hide();
      }


      /* ============================================================
         DETAIL
      ============================================================ */

      function showDetail(id) {
         const action = actions.find(
            item => item.id == id
         );

         if (!action) return;


         document.getElementById('detailCode').innerText =
            action.kode;

         document.getElementById('detailName').innerText =
            action.nama;

         document.getElementById('detailCategory').innerText =
            action.kategori;

         document.getElementById('detailType').innerText =
            action.jenis;

         document.getElementById('detailTariff').innerText =
            formatRupiah(action.tarif);

         document.getElementById('detailDuration').innerText =
            action.durasi + ' menit';

         document.getElementById('detailUnit').innerText =
            action.satuan;

         document.getElementById('detailDescription').innerText =
            action.keterangan || '-';

         document.getElementById('detailStatus').innerHTML =
            action.status === 'Aktif' ?
            '<span class="badge-status active"><i class="fa-solid fa-circle-check"></i> Aktif</span>' :
            '<span class="badge-status inactive"><i class="fa-solid fa-circle-xmark"></i> Nonaktif</span>';


         const modal = new bootstrap.Modal(
            document.getElementById('detailModal')
         );

         modal.show();
      }


      /* ============================================================
         DELETE
      ============================================================ */

      function deleteAction(id) {
         selectedActionId = id;

         const modal = new bootstrap.Modal(
            document.getElementById('deleteModal')
         );

         modal.show();
      }


      function confirmDelete() {
         if (!selectedActionId)
            return;


         alert(
            'Tindakan dengan ID ' +
            selectedActionId +
            ' akan dihapus dari database.'
         );


         bootstrap.Modal
            .getInstance(
               document.getElementById('deleteModal')
            )
            .hide();

         selectedActionId = null;
      }


      /* ============================================================
         FILTER
      ============================================================ */

      function filterActions() {
         const search =
            document.getElementById('searchInput')
            .value
            .toLowerCase()
            .trim();

         const category =
            document.getElementById('categoryFilter')
            .value;

         const status =
            document.getElementById('statusFilter')
            .value;


         const rows =
            document.querySelectorAll(
               '#actionTableBody tr'
            );


         let visible = 0;


         rows.forEach(row => {

            const name =
               row.dataset.name || '';

            const code =
               row.dataset.code || '';

            const rowCategory =
               row.dataset.category || '';

            const rowStatus =
               row.dataset.status || '';


            const matchSearch = !search ||
               name.includes(search) ||
               code.includes(search);

            const matchCategory = !category ||
               rowCategory === category;

            const matchStatus = !status ||
               rowStatus === status;


            const show =
               matchSearch &&
               matchCategory &&
               matchStatus;


            row.style.display =
               show ? '' : 'none';


            if (show)
               visible++;

         });


         document.getElementById('tableCount').innerText =
            visible + ' tindakan';
      }


      /* ============================================================
         RESET FILTER
      ============================================================ */

      function resetFilter() {
         document.getElementById('searchInput').value = '';

         document.getElementById('categoryFilter').value = '';

         document.getElementById('statusFilter').value = '';

         filterActions();
      }


      /* ============================================================
         RUPIAH
      ============================================================ */

      function formatRupiah(value) {
         return 'Rp ' +
            new Intl.NumberFormat('id-ID')
            .format(value);
      }
   </script>

</body>

</html>