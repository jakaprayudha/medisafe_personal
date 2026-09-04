<?php

/**
 * ============================================================
 * MASTER MEDICINE
 * ============================================================
 * File        : master-medicine.php
 * Description : Master Data Obat / Medicine
 * ============================================================
 */


/* ============================================================
   DUMMY DATA
   ============================================================ */

$medicines = [

   [
      'id'            => 1,
      'kode'          => 'OBT001',
      'nama'          => 'Paracetamol 500 mg',
      'generik'       => 'Paracetamol',
      'kategori'      => 'Analgesik & Antipiretik',
      'bentuk'        => 'Tablet',
      'satuan'        => 'Strip',
      'isi'           => '10 tablet',
      'stok'          => 125,
      'stok_minimum'  => 20,
      'harga_beli'    => 8500,
      'harga_jual'    => 12000,
      'supplier'      => 'PT Sehat Farma',
      'batch'         => 'PCM26001',
      'expired'       => '2027-08-15',
      'resep'         => 'Bebas Terbatas',
      'status'        => 'Aktif',
   ],

   [
      'id'            => 2,
      'kode'          => 'OBT002',
      'nama'          => 'Amoxicillin 500 mg',
      'generik'       => 'Amoxicillin',
      'kategori'      => 'Antibiotik',
      'bentuk'        => 'Kapsul',
      'satuan'        => 'Strip',
      'isi'           => '10 kapsul',
      'stok'          => 68,
      'stok_minimum'  => 20,
      'harga_beli'    => 14500,
      'harga_jual'    => 19000,
      'supplier'      => 'PT Sehat Farma',
      'batch'         => 'AMX26003',
      'expired'       => '2027-03-20',
      'resep'         => 'Resep Dokter',
      'status'        => 'Aktif',
   ],

   [
      'id'            => 3,
      'kode'          => 'OBT003',
      'nama'          => 'Cetirizine 10 mg',
      'generik'       => 'Cetirizine',
      'kategori'      => 'Antihistamin',
      'bentuk'        => 'Tablet',
      'satuan'        => 'Strip',
      'isi'           => '10 tablet',
      'stok'          => 15,
      'stok_minimum'  => 20,
      'harga_beli'    => 6000,
      'harga_jual'    => 9000,
      'supplier'      => 'CV Medika Jaya',
      'batch'         => 'CTR26002',
      'expired'       => '2026-12-10',
      'resep'         => 'Bebas Terbatas',
      'status'        => 'Aktif',
   ],

   [
      'id'            => 4,
      'kode'          => 'OBT004',
      'nama'          => 'Omeprazole 20 mg',
      'generik'       => 'Omeprazole',
      'kategori'      => 'Gastrointestinal',
      'bentuk'        => 'Kapsul',
      'satuan'        => 'Strip',
      'isi'           => '10 kapsul',
      'stok'          => 45,
      'stok_minimum'  => 15,
      'harga_beli'    => 11000,
      'harga_jual'    => 15000,
      'supplier'      => 'PT Pharma Sejahtera',
      'batch'         => 'OMP26004',
      'expired'       => '2027-05-12',
      'resep'         => 'Resep Dokter',
      'status'        => 'Aktif',
   ],

   [
      'id'            => 5,
      'kode'          => 'OBT005',
      'nama'          => 'Salbutamol 2 mg',
      'generik'       => 'Salbutamol',
      'kategori'      => 'Respirasi',
      'bentuk'        => 'Tablet',
      'satuan'        => 'Strip',
      'isi'           => '10 tablet',
      'stok'          => 32,
      'stok_minimum'  => 10,
      'harga_beli'    => 7000,
      'harga_jual'    => 10000,
      'supplier'      => 'CV Medika Jaya',
      'batch'         => 'SLB26001',
      'expired'       => '2027-01-25',
      'resep'         => 'Resep Dokter',
      'status'        => 'Aktif',
   ],

   [
      'id'            => 6,
      'kode'          => 'OBT006',
      'nama'          => 'Ringer Lactate 500 ml',
      'generik'       => 'Ringer Lactate',
      'kategori'      => 'Cairan Infus',
      'bentuk'        => 'Infus',
      'satuan'        => 'Botol',
      'isi'           => '500 ml',
      'stok'          => 8,
      'stok_minimum'  => 10,
      'harga_beli'    => 18500,
      'harga_jual'    => 25000,
      'supplier'      => 'PT Pharma Sejahtera',
      'batch'         => 'RL26005',
      'expired'       => '2027-02-18',
      'resep'         => 'Resep Dokter',
      'status'        => 'Aktif',
   ],

   [
      'id'            => 7,
      'kode'          => 'OBT007',
      'nama'          => 'Betadine Solution 30 ml',
      'generik'       => 'Povidone Iodine',
      'kategori'      => 'Antiseptik',
      'bentuk'        => 'Cairan',
      'satuan'        => 'Botol',
      'isi'           => '30 ml',
      'stok'          => 40,
      'stok_minimum'  => 10,
      'harga_beli'    => 12500,
      'harga_jual'    => 17000,
      'supplier'      => 'PT Sehat Farma',
      'batch'         => 'BTD26002',
      'expired'       => '2028-01-10',
      'resep'         => 'Bebas',
      'status'        => 'Aktif',
   ],

   [
      'id'            => 8,
      'kode'          => 'OBT008',
      'nama'          => 'Amlodipine 10 mg',
      'generik'       => 'Amlodipine',
      'kategori'      => 'Kardiovaskular',
      'bentuk'        => 'Tablet',
      'satuan'        => 'Strip',
      'isi'           => '10 tablet',
      'stok'          => 0,
      'stok_minimum'  => 15,
      'harga_beli'    => 9000,
      'harga_jual'    => 13000,
      'supplier'      => 'PT Pharma Sejahtera',
      'batch'         => 'AML25008',
      'expired'       => '2026-10-05',
      'resep'         => 'Resep Dokter',
      'status'        => 'Aktif',
   ],

   [
      'id'            => 9,
      'kode'          => 'OBT009',
      'nama'          => 'Ibuprofen 400 mg',
      'generik'       => 'Ibuprofen',
      'kategori'      => 'Analgesik & Antipiretik',
      'bentuk'        => 'Tablet',
      'satuan'        => 'Strip',
      'isi'           => '10 tablet',
      'stok'          => 22,
      'stok_minimum'  => 10,
      'harga_beli'    => 9500,
      'harga_jual'    => 14000,
      'supplier'      => 'CV Medika Jaya',
      'batch'         => 'IBP26001',
      'expired'       => '2027-06-30',
      'resep'         => 'Bebas Terbatas',
      'status'        => 'Aktif',
   ],

   [
      'id'            => 10,
      'kode'          => 'OBT010',
      'nama'          => 'Vitamin B Complex',
      'generik'       => 'Vitamin B Complex',
      'kategori'      => 'Vitamin & Suplemen',
      'bentuk'        => 'Tablet',
      'satuan'        => 'Botol',
      'isi'           => '100 tablet',
      'stok'          => 12,
      'stok_minimum'  => 10,
      'harga_beli'    => 18000,
      'harga_jual'    => 25000,
      'supplier'      => 'PT Sehat Farma',
      'batch'         => 'VBC26004',
      'expired'       => '2028-04-15',
      'resep'         => 'Bebas',
      'status'        => 'Nonaktif',
   ],

];


/* ============================================================
   STATISTICS
   ============================================================ */

$totalMedicine = count($medicines);

$activeMedicine = count(
   array_filter($medicines, function ($medicine) {
      return $medicine['status'] === 'Aktif';
   })
);

$inactiveMedicine = $totalMedicine - $activeMedicine;


/*
 * Obat stok rendah
 */
$lowStockMedicine = count(
   array_filter($medicines, function ($medicine) {
      return $medicine['stok'] > 0 &&
         $medicine['stok'] <= $medicine['stok_minimum'];
   })
);


/*
 * Obat stok habis
 */
$outOfStockMedicine = count(
   array_filter($medicines, function ($medicine) {
      return $medicine['stok'] <= 0;
   })
);


/* ============================================================
   HELPER
   ============================================================ */

function formatRupiah($number)
{
   return 'Rp ' . number_format(
      $number,
      0,
      ',',
      '.'
   );
}


function stockStatus($stock, $minimum)
{

   if ($stock <= 0) {

      return [
         'class' => 'stock-danger',
         'text'  => 'Habis'
      ];
   }

   if ($stock <= $minimum) {

      return [
         'class' => 'stock-warning',
         'text'  => 'Stok Rendah'
      ];
   }

   return [
      'class' => 'stock-good',
      'text'  => 'Tersedia'
   ];
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

   <meta charset="UTF-8">

   <meta name="viewport"
      content="width=device-width, initial-scale=1.0">

   <title>
      Master Medicine - Klinik Management System
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

      .medicine-stat {
         background: #ffffff;
         border: 1px solid #e5e7eb;
         border-radius: 14px;
         padding: 18px;
         height: 100%;
      }

      .medicine-stat-icon {
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

      .medicine-stat-label {
         font-size: 12px;
         color: #6b7280;
         margin-bottom: 4px;
      }

      .medicine-stat-value {
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

      .medicine-table {
         margin-bottom: 0;
      }

      .medicine-table thead th {
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

      .medicine-table tbody td {
         padding: 14px 16px;
         vertical-align: middle;
         border-bottom: 1px solid #f1f5f9;
         font-size: 13px;
         color: #374151;
      }

      .medicine-table tbody tr:hover {
         background: #f8fafc;
      }


      /* =====================================================
           MEDICINE ICON
           ===================================================== */

      .medicine-icon {
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

      .medicine-name {
         font-weight: 600;
         color: #111827;
         margin-bottom: 2px;
      }

      .medicine-code {
         color: #9ca3af;
         font-size: 11px;
      }

      .secondary-text {
         color: #9ca3af;
         font-size: 11px;
      }


      /* =====================================================
           CATEGORY BADGE
           ===================================================== */

      .category-badge {
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
           STOCK
           ===================================================== */

      .stock-number {
         font-weight: 700;
         color: #111827;
      }

      .stock-good {
         display: inline-flex;
         align-items: center;
         gap: 5px;
         padding: 5px 8px;
         border-radius: 7px;
         background: #ecfdf5;
         color: #059669;
         font-size: 10px;
         font-weight: 600;
      }

      .stock-warning {
         display: inline-flex;
         align-items: center;
         gap: 5px;
         padding: 5px 8px;
         border-radius: 7px;
         background: #fffbeb;
         color: #d97706;
         font-size: 10px;
         font-weight: 600;
      }

      .stock-danger {
         display: inline-flex;
         align-items: center;
         gap: 5px;
         padding: 5px 8px;
         border-radius: 7px;
         background: #fef2f2;
         color: #dc2626;
         font-size: 10px;
         font-weight: 600;
      }


      /* =====================================================
           EXPIRED
           ===================================================== */

      .expired-warning {
         color: #dc2626;
         font-weight: 600;
         font-size: 12px;
      }

      .expired-normal {
         color: #374151;
         font-size: 12px;
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

      .detail-category {
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

         .medicine-table {
            min-width: 1250px;
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

                           Master Medicine

                        </div>

                        <div class="page-subtitle">

                           Kelola data obat, stok minimum,
                           harga, batch, dan masa berlaku obat.

                        </div>

                     </div>


                     <button type="button"
                        class="btn btn-primary-custom"
                        onclick="openMedicineModal()">

                        <i class="fa-solid fa-plus me-2"></i>

                        Tambah Obat

                     </button>

                  </div>

               </div>


               <!-- ==================================================
                     STATISTICS
                     ================================================== -->

               <div class="row g-3 mb-4">


                  <!-- TOTAL -->

                  <div class="col-12 col-md-3">

                     <div class="medicine-stat">

                        <div class="d-flex align-items-center gap-3">

                           <div class="medicine-stat-icon">

                              <i class="fa-solid fa-pills"></i>

                           </div>

                           <div>

                              <div class="medicine-stat-label">

                                 Total Obat

                              </div>

                              <div class="medicine-stat-value">

                                 <?= $totalMedicine ?>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>


                  <!-- ACTIVE -->

                  <div class="col-12 col-md-3">

                     <div class="medicine-stat">

                        <div class="d-flex align-items-center gap-3">

                           <div class="medicine-stat-icon"
                              style="background:#ecfdf5;color:#059669;">

                              <i class="fa-solid fa-circle-check"></i>

                           </div>

                           <div>

                              <div class="medicine-stat-label">

                                 Obat Aktif

                              </div>

                              <div class="medicine-stat-value">

                                 <?= $activeMedicine ?>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>


                  <!-- LOW STOCK -->

                  <div class="col-12 col-md-3">

                     <div class="medicine-stat">

                        <div class="d-flex align-items-center gap-3">

                           <div class="medicine-stat-icon"
                              style="background:#fffbeb;color:#d97706;">

                              <i class="fa-solid fa-triangle-exclamation"></i>

                           </div>

                           <div>

                              <div class="medicine-stat-label">

                                 Stok Rendah

                              </div>

                              <div class="medicine-stat-value">

                                 <?= $lowStockMedicine ?>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>


                  <!-- OUT OF STOCK -->

                  <div class="col-12 col-md-3">

                     <div class="medicine-stat">

                        <div class="d-flex align-items-center gap-3">

                           <div class="medicine-stat-icon"
                              style="background:#fef2f2;color:#dc2626;">

                              <i class="fa-solid fa-box-open"></i>

                           </div>

                           <div>

                              <div class="medicine-stat-label">

                                 Stok Habis

                              </div>

                              <div class="medicine-stat-value">

                                 <?= $outOfStockMedicine ?>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>


               <!-- ==================================================
                     MAIN CARD
                     ================================================== -->

               <div class="main-card">


                  <!-- HEADER -->

                  <div class="main-card-header">

                     <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

                        <div>

                           <div class="main-card-title">

                              Daftar Obat

                           </div>

                           <div class="main-card-subtitle">

                              Master obat yang digunakan
                              dalam pelayanan klinik dan farmasi.

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

                        <div class="col-12 col-md-4">

                           <label class="form-label-custom">

                              Cari Obat

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
                                 id="searchMedicine"
                                 class="form-control ps-5"
                                 placeholder="Nama obat, kode, generik, batch..."
                                 onkeyup="filterMedicine()">

                           </div>

                        </div>


                        <!-- CATEGORY -->

                        <div class="col-12 col-md-3">

                           <label class="form-label-custom">

                              Kategori

                           </label>

                           <select class="form-select"
                              id="filterCategory"
                              onchange="filterMedicine()">

                              <option value="">
                                 Semua Kategori
                              </option>

                              <option value="Analgesik & Antipiretik">
                                 Analgesik & Antipiretik
                              </option>

                              <option value="Antibiotik">
                                 Antibiotik
                              </option>

                              <option value="Antihistamin">
                                 Antihistamin
                              </option>

                              <option value="Gastrointestinal">
                                 Gastrointestinal
                              </option>

                              <option value="Respirasi">
                                 Respirasi
                              </option>

                              <option value="Cairan Infus">
                                 Cairan Infus
                              </option>

                              <option value="Antiseptik">
                                 Antiseptik
                              </option>

                              <option value="Kardiovaskular">
                                 Kardiovaskular
                              </option>

                              <option value="Vitamin & Suplemen">
                                 Vitamin & Suplemen
                              </option>

                           </select>

                        </div>


                        <!-- STOCK -->

                        <div class="col-12 col-md-2">

                           <label class="form-label-custom">

                              Stok

                           </label>

                           <select class="form-select"
                              id="filterStock"
                              onchange="filterMedicine()">

                              <option value="">
                                 Semua
                              </option>

                              <option value="tersedia">
                                 Tersedia
                              </option>

                              <option value="rendah">
                                 Stok Rendah
                              </option>

                              <option value="habis">
                                 Stok Habis
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
                              onchange="filterMedicine()">

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

                        <div class="col-12 col-md-1 d-flex align-items-end">

                           <button type="button"
                              class="btn btn-light border w-100"
                              style="
                                            min-height:40px;
                                            font-size:13px;
                                        "
                              title="Reset"
                              onclick="resetFilter()">

                              <i class="fa-solid fa-rotate-left"></i>

                           </button>

                        </div>

                     </div>

                  </div>


                  <!-- ==================================================
                         TABLE
                         ================================================== -->

                  <div class="table-responsive">

                     <table class="table medicine-table">

                        <thead>

                           <tr>

                              <th style="width:270px;">
                                 Obat
                              </th>

                              <th>
                                 Kategori
                              </th>

                              <th>
                                 Bentuk
                              </th>

                              <th>
                                 Stok
                              </th>

                              <th>
                                 Harga Jual
                              </th>

                              <th>
                                 Batch
                              </th>

                              <th>
                                 Expired
                              </th>

                              <th>
                                 Status
                              </th>

                              <th class="text-end">
                                 Aksi
                              </th>

                           </tr>

                        </thead>


                        <tbody id="medicineTableBody">


                           <?php foreach ($medicines as $medicine): ?>


                              <?php

                              $stock =
                                 stockStatus(
                                    $medicine['stok'],
                                    $medicine['stok_minimum']
                                 );

                              $expiredDate =
                                 strtotime(
                                    $medicine['expired']
                                 );

                              $today =
                                 strtotime(
                                    date('Y-m-d')
                                 );

                              $expiredSoon =
                                 $expiredDate <=
                                 strtotime(
                                    '+90 days'
                                 );

                              $isExpired =
                                 $expiredDate < $today;

                              ?>


                              <tr

                                 data-name="<?= strtolower(htmlspecialchars($medicine['nama'])) ?>"

                                 data-code="<?= strtolower(htmlspecialchars($medicine['kode'])) ?>"

                                 data-generic="<?= strtolower(htmlspecialchars($medicine['generik'])) ?>"

                                 data-category="<?= htmlspecialchars($medicine['kategori']) ?>"

                                 data-batch="<?= strtolower(htmlspecialchars($medicine['batch'])) ?>"

                                 data-stock="<?= $medicine['stok'] ?>"

                                 data-minimum="<?= $medicine['stok_minimum'] ?>"

                                 data-status="<?= htmlspecialchars($medicine['status']) ?>">


                                 <!-- MEDICINE -->

                                 <td>

                                    <div class="d-flex align-items-center gap-3">

                                       <div class="medicine-icon">

                                          <i class="fa-solid fa-pills"></i>

                                       </div>


                                       <div>

                                          <div class="medicine-name">

                                             <?= htmlspecialchars($medicine['nama']) ?>

                                          </div>

                                          <div class="medicine-code">

                                             <?= htmlspecialchars($medicine['kode']) ?>

                                             ·

                                             <?= htmlspecialchars($medicine['generik']) ?>

                                          </div>

                                       </div>

                                    </div>

                                 </td>


                                 <!-- CATEGORY -->

                                 <td>

                                    <span class="category-badge">

                                       <?= htmlspecialchars($medicine['kategori']) ?>

                                    </span>

                                 </td>


                                 <!-- FORM -->

                                 <td>

                                    <div>

                                       <?= htmlspecialchars($medicine['bentuk']) ?>

                                    </div>

                                    <div class="secondary-text">

                                       <?= htmlspecialchars($medicine['satuan']) ?>

                                       ·

                                       <?= htmlspecialchars($medicine['isi']) ?>

                                    </div>

                                 </td>


                                 <!-- STOCK -->

                                 <td>

                                    <div class="stock-number">

                                       <?= number_format($medicine['stok']) ?>

                                    </div>

                                    <div class="secondary-text mb-1">

                                       Min. <?= number_format($medicine['stok_minimum']) ?>

                                    </div>

                                    <span class="<?= $stock['class'] ?>">

                                       <?php if ($medicine['stok'] <= 0): ?>

                                          <i class="fa-solid fa-circle-xmark"></i>

                                       <?php elseif ($medicine['stok'] <= $medicine['stok_minimum']): ?>

                                          <i class="fa-solid fa-triangle-exclamation"></i>

                                       <?php else: ?>

                                          <i class="fa-solid fa-circle-check"></i>

                                       <?php endif; ?>

                                       <?= $stock['text'] ?>

                                    </span>

                                 </td>


                                 <!-- PRICE -->

                                 <td>

                                    <div class="fw-semibold">

                                       <?= formatRupiah($medicine['harga_jual']) ?>

                                    </div>

                                    <div class="secondary-text">

                                       Beli <?= formatRupiah($medicine['harga_beli']) ?>

                                    </div>

                                 </td>


                                 <!-- BATCH -->

                                 <td>

                                    <?= htmlspecialchars($medicine['batch']) ?>

                                 </td>


                                 <!-- EXPIRED -->

                                 <td>

                                    <?php if ($isExpired): ?>

                                       <div class="expired-warning">

                                          <i class="fa-solid fa-circle-exclamation me-1"></i>

                                          <?= date(
                                             'd/m/Y',
                                             $expiredDate
                                          ) ?>

                                       </div>

                                    <?php elseif ($expiredSoon): ?>

                                       <div class="expired-warning">

                                          <i class="fa-solid fa-triangle-exclamation me-1"></i>

                                          <?= date(
                                             'd/m/Y',
                                             $expiredDate
                                          ) ?>

                                       </div>

                                    <?php else: ?>

                                       <div class="expired-normal">

                                          <?= date(
                                             'd/m/Y',
                                             $expiredDate
                                          ) ?>

                                       </div>

                                    <?php endif; ?>

                                 </td>


                                 <!-- STATUS -->

                                 <td>

                                    <?php if ($medicine['status'] === 'Aktif'): ?>

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
                                          onclick='showMedicineDetail(<?= json_encode($medicine) ?>)'>

                                          <i class="fa-regular fa-eye"></i>

                                       </button>


                                       <!-- EDIT -->

                                       <button type="button"
                                          class="action-btn"
                                          title="Edit"
                                          onclick='editMedicine(<?= json_encode($medicine) ?>)'>

                                          <i class="fa-regular fa-pen-to-square"></i>

                                       </button>


                                       <!-- DELETE -->

                                       <button type="button"
                                          class="action-btn"
                                          title="Hapus"
                                          onclick="deleteMedicine(
                                                        '<?= $medicine['id'] ?>',
                                                        '<?= htmlspecialchars($medicine['nama'], ENT_QUOTES) ?>'
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

                     <i class="fa-solid fa-pills"></i>

                     <div class="fw-semibold text-dark">

                        Data obat tidak ditemukan

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
     MODAL TAMBAH / EDIT OBAT
     ========================================================== -->

   <div class="modal fade"
      id="medicineModal"
      tabindex="-1"
      aria-hidden="true">

      <div class="modal-dialog modal-xl modal-dialog-centered">

         <div class="modal-content">


            <!-- HEADER -->

            <div class="modal-header">

               <div>

                  <div class="modal-title"
                     id="medicineModalTitle">

                     Tambah Obat

                  </div>

                  <div class="text-muted small mt-1">

                     Lengkapi informasi master obat.

                  </div>

               </div>


               <button type="button"
                  class="btn-close"
                  data-bs-dismiss="modal">
               </button>

            </div>


            <!-- FORM -->

            <form id="medicineForm"
               onsubmit="saveMedicine(event)">

               <div class="modal-body">


                  <input type="hidden"
                     id="medicineId"
                     value="">


                  <!-- ==================================================
                         INFORMASI OBAT
                         ================================================== -->

                  <div class="mb-3">

                     <div class="fw-semibold mb-3"
                        style="font-size:13px;">

                        Informasi Obat

                     </div>


                     <div class="row g-3">


                        <!-- KODE -->

                        <div class="col-md-3">

                           <label class="form-label-custom">

                              Kode Obat

                           </label>

                           <input type="text"
                              class="form-control"
                              id="medicineCode"
                              placeholder="OBT011"
                              required>

                        </div>


                        <!-- NAMA -->

                        <div class="col-md-5">

                           <label class="form-label-custom">

                              Nama Obat

                           </label>

                           <input type="text"
                              class="form-control"
                              id="medicineName"
                              placeholder="Nama obat"
                              required>

                        </div>


                        <!-- GENERIK -->

                        <div class="col-md-4">

                           <label class="form-label-custom">

                              Nama Generik

                           </label>

                           <input type="text"
                              class="form-control"
                              id="medicineGeneric"
                              placeholder="Nama generik">

                        </div>


                        <!-- CATEGORY -->

                        <div class="col-md-4">

                           <label class="form-label-custom">

                              Kategori

                           </label>

                           <select class="form-select"
                              id="medicineCategory"
                              required>

                              <option value="">
                                 Pilih Kategori
                              </option>

                              <option value="Analgesik & Antipiretik">
                                 Analgesik & Antipiretik
                              </option>

                              <option value="Antibiotik">
                                 Antibiotik
                              </option>

                              <option value="Antihistamin">
                                 Antihistamin
                              </option>

                              <option value="Gastrointestinal">
                                 Gastrointestinal
                              </option>

                              <option value="Respirasi">
                                 Respirasi
                              </option>

                              <option value="Cairan Infus">
                                 Cairan Infus
                              </option>

                              <option value="Antiseptik">
                                 Antiseptik
                              </option>

                              <option value="Kardiovaskular">
                                 Kardiovaskular
                              </option>

                              <option value="Vitamin & Suplemen">
                                 Vitamin & Suplemen
                              </option>

                           </select>

                        </div>


                        <!-- FORM -->

                        <div class="col-md-4">

                           <label class="form-label-custom">

                              Bentuk Sediaan

                           </label>

                           <select class="form-select"
                              id="medicineFormType"
                              required>

                              <option value="">
                                 Pilih Bentuk
                              </option>

                              <option value="Tablet">
                                 Tablet
                              </option>

                              <option value="Kapsul">
                                 Kapsul
                              </option>

                              <option value="Sirup">
                                 Sirup
                              </option>

                              <option value="Cairan">
                                 Cairan
                              </option>

                              <option value="Infus">
                                 Infus
                              </option>

                              <option value="Salep">
                                 Salep
                              </option>

                              <option value="Krim">
                                 Krim
                              </option>

                              <option value="Injeksi">
                                 Injeksi
                              </option>

                              <option value="Suppositoria">
                                 Suppositoria
                              </option>

                           </select>

                        </div>


                        <!-- UNIT -->

                        <div class="col-md-4">

                           <label class="form-label-custom">

                              Satuan

                           </label>

                           <select class="form-select"
                              id="medicineUnit"
                              required>

                              <option value="">
                                 Pilih Satuan
                              </option>

                              <option value="Tablet">
                                 Tablet
                              </option>

                              <option value="Strip">
                                 Strip
                              </option>

                              <option value="Botol">
                                 Botol
                              </option>

                              <option value="Box">
                                 Box
                              </option>

                              <option value="Tube">
                                 Tube
                              </option>

                              <option value="Ampul">
                                 Ampul
                              </option>

                              <option value="Vial">
                                 Vial
                              </option>

                           </select>

                        </div>


                        <!-- CONTENT -->

                        <div class="col-md-4">

                           <label class="form-label-custom">

                              Isi Kemasan

                           </label>

                           <input type="text"
                              class="form-control"
                              id="medicineContent"
                              placeholder="Contoh: 10 tablet">

                        </div>


                        <!-- PRESCRIPTION -->

                        <div class="col-md-4">

                           <label class="form-label-custom">

                              Kategori Resep

                           </label>

                           <select class="form-select"
                              id="medicinePrescription">

                              <option value="Bebas">
                                 Bebas
                              </option>

                              <option value="Bebas Terbatas">
                                 Bebas Terbatas
                              </option>

                              <option value="Resep Dokter">
                                 Resep Dokter
                              </option>

                           </select>

                        </div>


                     </div>

                  </div>


                  <hr class="my-4">


                  <!-- ==================================================
                         STOK & HARGA
                         ================================================== -->

                  <div class="mb-3">

                     <div class="fw-semibold mb-3"
                        style="font-size:13px;">

                        Stok & Harga

                     </div>


                     <div class="row g-3">


                        <!-- STOCK -->

                        <div class="col-md-3">

                           <label class="form-label-custom">

                              Stok Awal

                           </label>

                           <input type="number"
                              class="form-control"
                              id="medicineStock"
                              min="0"
                              value="0">

                        </div>


                        <!-- MINIMUM -->

                        <div class="col-md-3">

                           <label class="form-label-custom">

                              Stok Minimum

                           </label>

                           <input type="number"
                              class="form-control"
                              id="medicineMinimum"
                              min="0"
                              value="10">

                        </div>


                        <!-- BUY -->

                        <div class="col-md-3">

                           <label class="form-label-custom">

                              Harga Beli

                           </label>

                           <div class="input-group">

                              <span class="input-group-text"
                                 style="font-size:12px;">

                                 Rp

                              </span>

                              <input type="number"
                                 class="form-control"
                                 id="medicineBuyPrice"
                                 min="0"
                                 value="0">

                           </div>

                        </div>


                        <!-- SELL -->

                        <div class="col-md-3">

                           <label class="form-label-custom">

                              Harga Jual

                           </label>

                           <div class="input-group">

                              <span class="input-group-text"
                                 style="font-size:12px;">

                                 Rp

                              </span>

                              <input type="number"
                                 class="form-control"
                                 id="medicineSellPrice"
                                 min="0"
                                 value="0">

                           </div>

                        </div>


                     </div>

                  </div>


                  <hr class="my-4">


                  <!-- ==================================================
                         BATCH & EXPIRED
                         ================================================== -->

                  <div class="mb-3">

                     <div class="fw-semibold mb-3"
                        style="font-size:13px;">

                        Batch & Kedaluwarsa

                     </div>


                     <div class="row g-3">


                        <!-- BATCH -->

                        <div class="col-md-4">

                           <label class="form-label-custom">

                              Nomor Batch

                           </label>

                           <input type="text"
                              class="form-control"
                              id="medicineBatch"
                              placeholder="Nomor batch">

                        </div>


                        <!-- EXPIRED -->

                        <div class="col-md-4">

                           <label class="form-label-custom">

                              Tanggal Kedaluwarsa

                           </label>

                           <input type="date"
                              class="form-control"
                              id="medicineExpired">

                        </div>


                        <!-- SUPPLIER -->

                        <div class="col-md-4">

                           <label class="form-label-custom">

                              Supplier

                           </label>

                           <input type="text"
                              class="form-control"
                              id="medicineSupplier"
                              placeholder="Nama supplier">

                        </div>


                     </div>

                  </div>


                  <hr class="my-4">


                  <!-- ==================================================
                         STATUS
                         ================================================== -->

                  <div>

                     <div class="fw-semibold mb-3"
                        style="font-size:13px;">

                        Status

                     </div>


                     <div class="row g-3">


                        <div class="col-md-4">

                           <label class="form-label-custom">

                              Status Obat

                           </label>

                           <select class="form-select"
                              id="medicineStatus">

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

                     Simpan Obat

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
      id="medicineDetailModal"
      tabindex="-1"
      aria-hidden="true">

      <div class="modal-dialog modal-lg modal-dialog-centered">

         <div class="modal-content">


            <!-- HEADER -->

            <div class="modal-header">

               <div class="modal-title">

                  Detail Obat

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

                     <i class="fa-solid fa-pills"></i>

                  </div>


                  <div>

                     <div class="detail-name"
                        id="detailName">

                        -

                     </div>

                     <div class="detail-category"
                        id="detailCategory">

                        -

                     </div>

                  </div>

               </div>


               <!-- DETAILS -->

               <div class="row">


                  <!-- CODE -->

                  <div class="col-md-3">

                     <div class="detail-item">

                        <div class="detail-label">

                           Kode Obat

                        </div>

                        <div class="detail-value"
                           id="detailCode">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- GENERIC -->

                  <div class="col-md-5">

                     <div class="detail-item">

                        <div class="detail-label">

                           Nama Generik

                        </div>

                        <div class="detail-value"
                           id="detailGeneric">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- STATUS -->

                  <div class="col-md-4">

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


                  <!-- CATEGORY -->

                  <div class="col-md-4">

                     <div class="detail-item">

                        <div class="detail-label">

                           Kategori

                        </div>

                        <div class="detail-value"
                           id="detailCategoryValue">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- FORM -->

                  <div class="col-md-4">

                     <div class="detail-item">

                        <div class="detail-label">

                           Bentuk Sediaan

                        </div>

                        <div class="detail-value"
                           id="detailForm">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- UNIT -->

                  <div class="col-md-4">

                     <div class="detail-item">

                        <div class="detail-label">

                           Satuan

                        </div>

                        <div class="detail-value"
                           id="detailUnit">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- CONTENT -->

                  <div class="col-md-4">

                     <div class="detail-item">

                        <div class="detail-label">

                           Isi Kemasan

                        </div>

                        <div class="detail-value"
                           id="detailContent">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- PRESCRIPTION -->

                  <div class="col-md-4">

                     <div class="detail-item">

                        <div class="detail-label">

                           Kategori Resep

                        </div>

                        <div class="detail-value"
                           id="detailPrescription">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- STOCK -->

                  <div class="col-md-4">

                     <div class="detail-item">

                        <div class="detail-label">

                           Stok

                        </div>

                        <div class="detail-value"
                           id="detailStock">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- MINIMUM -->

                  <div class="col-md-4">

                     <div class="detail-item">

                        <div class="detail-label">

                           Stok Minimum

                        </div>

                        <div class="detail-value"
                           id="detailMinimum">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- BUY -->

                  <div class="col-md-4">

                     <div class="detail-item">

                        <div class="detail-label">

                           Harga Beli

                        </div>

                        <div class="detail-value"
                           id="detailBuyPrice">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- SELL -->

                  <div class="col-md-4">

                     <div class="detail-item">

                        <div class="detail-label">

                           Harga Jual

                        </div>

                        <div class="detail-value"
                           id="detailSellPrice">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- BATCH -->

                  <div class="col-md-4">

                     <div class="detail-item">

                        <div class="detail-label">

                           Batch

                        </div>

                        <div class="detail-value"
                           id="detailBatch">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- EXPIRED -->

                  <div class="col-md-4">

                     <div class="detail-item">

                        <div class="detail-label">

                           Kedaluwarsa

                        </div>

                        <div class="detail-value"
                           id="detailExpired">

                           -

                        </div>

                     </div>

                  </div>


                  <!-- SUPPLIER -->

                  <div class="col-md-4">

                     <div class="detail-item">

                        <div class="detail-label">

                           Supplier

                        </div>

                        <div class="detail-value"
                           id="detailSupplier">

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
   MODAL
   ============================================================ */

      let medicineModal;

      let medicineDetailModal;


      document.addEventListener(
         'DOMContentLoaded',
         function() {


            medicineModal =
               new bootstrap.Modal(
                  document.getElementById(
                     'medicineModal'
                  )
               );


            medicineDetailModal =
               new bootstrap.Modal(
                  document.getElementById(
                     'medicineDetailModal'
                  )
               );

         }
      );


      /* ============================================================
         OPEN ADD
         ============================================================ */

      function openMedicineModal() {


         document
            .getElementById('medicineForm')
            .reset();


         document
            .getElementById('medicineId')
            .value = '';


         document
            .getElementById('medicineModalTitle')
            .innerText =
            'Tambah Obat';


         medicineModal.show();

      }


      /* ============================================================
         EDIT
         ============================================================ */

      function editMedicine(medicine) {


         document
            .getElementById('medicineId')
            .value =
            medicine.id;


         document
            .getElementById('medicineCode')
            .value =
            medicine.kode;


         document
            .getElementById('medicineName')
            .value =
            medicine.nama;


         document
            .getElementById('medicineGeneric')
            .value =
            medicine.generik;


         document
            .getElementById('medicineCategory')
            .value =
            medicine.kategori;


         document
            .getElementById('medicineFormType')
            .value =
            medicine.bentuk;


         document
            .getElementById('medicineUnit')
            .value =
            medicine.satuan;


         document
            .getElementById('medicineContent')
            .value =
            medicine.isi;


         document
            .getElementById('medicinePrescription')
            .value =
            medicine.resep;


         document
            .getElementById('medicineStock')
            .value =
            medicine.stok;


         document
            .getElementById('medicineMinimum')
            .value =
            medicine.stok_minimum;


         document
            .getElementById('medicineBuyPrice')
            .value =
            medicine.harga_beli;


         document
            .getElementById('medicineSellPrice')
            .value =
            medicine.harga_jual;


         document
            .getElementById('medicineBatch')
            .value =
            medicine.batch;


         document
            .getElementById('medicineExpired')
            .value =
            medicine.expired;


         document
            .getElementById('medicineSupplier')
            .value =
            medicine.supplier;


         document
            .getElementById('medicineStatus')
            .value =
            medicine.status;


         document
            .getElementById('medicineModalTitle')
            .innerText =
            'Edit Obat';


         medicineModal.show();

      }


      /* ============================================================
         SAVE
         ============================================================ */

      function saveMedicine(event) {


         event.preventDefault();


         const id =
            document
            .getElementById('medicineId')
            .value;


         if (id) {

            alert(
               'Data obat berhasil diperbarui.\n\n' +
               'Mode demo — selanjutnya hubungkan ke database.'
            );

         } else {

            alert(
               'Data obat berhasil ditambahkan.\n\n' +
               'Mode demo — selanjutnya hubungkan ke database.'
            );

         }


         medicineModal.hide();

      }


      /* ============================================================
         DETAIL
         ============================================================ */

      function showMedicineDetail(medicine) {


         document
            .getElementById('detailName')
            .innerText =
            medicine.nama;


         document
            .getElementById('detailCategory')
            .innerText =
            medicine.kategori;


         document
            .getElementById('detailCode')
            .innerText =
            medicine.kode;


         document
            .getElementById('detailGeneric')
            .innerText =
            medicine.generik || '-';


         document
            .getElementById('detailStatus')
            .innerHTML =

            medicine.status === 'Aktif'

            ?
            '<span class="status-badge status-active">Aktif</span>'

            :
            '<span class="status-badge status-inactive">Nonaktif</span>';


         document
            .getElementById('detailCategoryValue')
            .innerText =
            medicine.kategori;


         document
            .getElementById('detailForm')
            .innerText =
            medicine.bentuk;


         document
            .getElementById('detailUnit')
            .innerText =
            medicine.satuan;


         document
            .getElementById('detailContent')
            .innerText =
            medicine.isi || '-';


         document
            .getElementById('detailPrescription')
            .innerText =
            medicine.resep || '-';


         document
            .getElementById('detailStock')
            .innerText =
            medicine.stok;


         document
            .getElementById('detailMinimum')
            .innerText =
            medicine.stok_minimum;


         document
            .getElementById('detailBuyPrice')
            .innerText =
            formatRupiah(
               medicine.harga_beli
            );


         document
            .getElementById('detailSellPrice')
            .innerText =
            formatRupiah(
               medicine.harga_jual
            );


         document
            .getElementById('detailBatch')
            .innerText =
            medicine.batch || '-';


         document
            .getElementById('detailExpired')
            .innerText =
            formatDate(
               medicine.expired
            );


         document
            .getElementById('detailSupplier')
            .innerText =
            medicine.supplier || '-';


         medicineDetailModal.show();

      }


      /* ============================================================
         DELETE
         ============================================================ */

      function deleteMedicine(id, name) {


         const confirmDelete =
            confirm(
               'Apakah Anda yakin ingin menghapus obat "' +
               name +
               '"?'
            );


         if (!confirmDelete) {

            return;

         }


         alert(
            'Obat "' +
            name +
            '" berhasil dihapus.\n\n' +
            'Mode demo — selanjutnya hubungkan ke database.'
         );

      }


      /* ============================================================
         FILTER
         ============================================================ */

      function filterMedicine() {


         const search =
            document
            .getElementById(
               'searchMedicine'
            )
            .value
            .toLowerCase()
            .trim();


         const category =
            document
            .getElementById(
               'filterCategory'
            )
            .value;


         const stockFilter =
            document
            .getElementById(
               'filterStock'
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
               '#medicineTableBody tr'
            );


         let visibleCount = 0;


         rows.forEach(
            function(row) {


               const name =
                  row.dataset.name || '';


               const code =
                  row.dataset.code || '';


               const generic =
                  row.dataset.generic || '';


               const batch =
                  row.dataset.batch || '';


               const rowCategory =
                  row.dataset.category || '';


               const rowStock =
                  Number(
                     row.dataset.stock || 0
                  );


               const minimum =
                  Number(
                     row.dataset.minimum || 0
                  );


               const rowStatus =
                  row.dataset.status || '';


               const searchMatch =

                  name.includes(search) ||

                  code.includes(search) ||

                  generic.includes(search) ||

                  batch.includes(search);


               const categoryMatch =

                  !category ||

                  rowCategory === category;


               let stockMatch = true;


               if (stockFilter === 'tersedia') {

                  stockMatch =
                     rowStock > minimum;

               }


               if (stockFilter === 'rendah') {

                  stockMatch =
                     rowStock > 0 &&
                     rowStock <= minimum;

               }


               if (stockFilter === 'habis') {

                  stockMatch =
                     rowStock <= 0;

               }


               const statusMatch =

                  !status ||

                  rowStatus === status;


               if (

                  searchMatch &&

                  categoryMatch &&

                  stockMatch &&

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
               'searchMedicine'
            )
            .value = '';


         document
            .getElementById(
               'filterCategory'
            )
            .value = '';


         document
            .getElementById(
               'filterStock'
            )
            .value = '';


         document
            .getElementById(
               'filterStatus'
            )
            .value = '';


         filterMedicine();

      }


      /* ============================================================
         FORMAT RUPIAH
         ============================================================ */

      function formatRupiah(number) {


         return 'Rp ' +
            Number(number)
            .toLocaleString(
               'id-ID'
            );

      }


      /* ============================================================
         FORMAT DATE
         ============================================================ */

      function formatDate(dateString) {


         if (!dateString) {

            return '-';

         }


         const date =
            new Date(
               dateString + 'T00:00:00'
            );


         return date.toLocaleDateString(
            'id-ID', {
               day: '2-digit',
               month: '2-digit',
               year: 'numeric'
            }
         );

      }
   </script>


</body>

</html>