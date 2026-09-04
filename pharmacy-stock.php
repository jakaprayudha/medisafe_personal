<?php

/**
 * pharmacy-stock.php
 * Manajemen Stok Obat Farmasi
 * Demo UI - siap dikembangkan ke database
 */

$medicines = [
   [
      'id' => 1,
      'code' => 'OBT-0001',
      'name' => 'Paracetamol 500 mg',
      'generic' => 'Paracetamol',
      'form' => 'Tablet',
      'unit' => 'Tablet',
      'category' => 'Analgesik & Antipiretik',
      'min_stock' => 50,
      'total_stock' => 245,
      'batches' => [
         [
            'batch' => 'PCM260701',
            'expiry' => '2028-07-31',
            'stock' => 125,
            'purchase_price' => 350,
            'selling_price' => 500,
            'location' => 'Rak A-01'
         ],
         [
            'batch' => 'PCM260301',
            'expiry' => '2027-03-31',
            'stock' => 80,
            'purchase_price' => 340,
            'selling_price' => 500,
            'location' => 'Rak A-01'
         ],
         [
            'batch' => 'PCM251201',
            'expiry' => '2026-12-31',
            'stock' => 40,
            'purchase_price' => 330,
            'selling_price' => 500,
            'location' => 'Rak A-01'
         ]
      ]
   ],
   [
      'id' => 2,
      'code' => 'OBT-0002',
      'name' => 'Amoxicillin 500 mg',
      'generic' => 'Amoxicillin',
      'form' => 'Kapsul',
      'unit' => 'Kapsul',
      'category' => 'Antibiotik',
      'min_stock' => 40,
      'total_stock' => 50,
      'batches' => [
         [
            'batch' => 'AMX260401',
            'expiry' => '2028-04-30',
            'stock' => 50,
            'purchase_price' => 800,
            'selling_price' => 1200,
            'location' => 'Rak A-02'
         ]
      ]
   ],
   [
      'id' => 3,
      'code' => 'OBT-0003',
      'name' => 'Cetirizine 10 mg',
      'generic' => 'Cetirizine',
      'form' => 'Tablet',
      'unit' => 'Tablet',
      'category' => 'Antihistamin',
      'min_stock' => 50,
      'total_stock' => 80,
      'batches' => [
         [
            'batch' => 'CTZ260502',
            'expiry' => '2028-05-31',
            'stock' => 80,
            'purchase_price' => 450,
            'selling_price' => 700,
            'location' => 'Rak A-03'
         ]
      ]
   ],
   [
      'id' => 4,
      'code' => 'OBT-0004',
      'name' => 'Amlodipine 10 mg',
      'generic' => 'Amlodipine',
      'form' => 'Tablet',
      'unit' => 'Tablet',
      'category' => 'Antihipertensi',
      'min_stock' => 75,
      'total_stock' => 64,
      'batches' => [
         [
            'batch' => 'AML260301',
            'expiry' => '2028-03-31',
            'stock' => 64,
            'purchase_price' => 500,
            'selling_price' => 800,
            'location' => 'Rak B-01'
         ]
      ]
   ],
   [
      'id' => 5,
      'code' => 'OBT-0005',
      'name' => 'Captopril 25 mg',
      'generic' => 'Captopril',
      'form' => 'Tablet',
      'unit' => 'Tablet',
      'category' => 'Antihipertensi',
      'min_stock' => 50,
      'total_stock' => 45,
      'batches' => [
         [
            'batch' => 'CAP260601',
            'expiry' => '2028-06-30',
            'stock' => 45,
            'purchase_price' => 300,
            'selling_price' => 500,
            'location' => 'Rak B-01'
         ]
      ]
   ],
   [
      'id' => 6,
      'code' => 'OBT-0006',
      'name' => 'Omeprazole 20 mg',
      'generic' => 'Omeprazole',
      'form' => 'Kapsul',
      'unit' => 'Kapsul',
      'category' => 'Gastrointestinal',
      'min_stock' => 40,
      'total_stock' => 36,
      'batches' => [
         [
            'batch' => 'OMP260501',
            'expiry' => '2028-05-31',
            'stock' => 36,
            'purchase_price' => 600,
            'selling_price' => 900,
            'location' => 'Rak C-01'
         ]
      ]
   ],
   [
      'id' => 7,
      'code' => 'OBT-0007',
      'name' => 'Mefenamic Acid 500 mg',
      'generic' => 'Mefenamic Acid',
      'form' => 'Tablet',
      'unit' => 'Tablet',
      'category' => 'Analgesik',
      'min_stock' => 30,
      'total_stock' => 70,
      'batches' => [
         [
            'batch' => 'MFA260201',
            'expiry' => '2028-02-28',
            'stock' => 70,
            'purchase_price' => 400,
            'selling_price' => 650,
            'location' => 'Rak A-04'
         ]
      ]
   ],
   [
      'id' => 8,
      'code' => 'OBT-0008',
      'name' => 'Salbutamol 2 mg',
      'generic' => 'Salbutamol',
      'form' => 'Tablet',
      'unit' => 'Tablet',
      'category' => 'Respirasi',
      'min_stock' => 40,
      'total_stock' => 18,
      'batches' => [
         [
            'batch' => 'SLB251001',
            'expiry' => '2026-10-31',
            'stock' => 18,
            'purchase_price' => 300,
            'selling_price' => 500,
            'location' => 'Rak C-02'
         ]
      ]
   ],
   [
      'id' => 9,
      'code' => 'OBT-0009',
      'name' => 'Metformin 500 mg',
      'generic' => 'Metformin',
      'form' => 'Tablet',
      'unit' => 'Tablet',
      'category' => 'Antidiabetes',
      'min_stock' => 60,
      'total_stock' => 120,
      'batches' => [
         [
            'batch' => 'MET260101',
            'expiry' => '2027-01-31',
            'stock' => 70,
            'purchase_price' => 350,
            'selling_price' => 550,
            'location' => 'Rak B-03'
         ],
         [
            'batch' => 'MET260601',
            'expiry' => '2028-06-30',
            'stock' => 50,
            'purchase_price' => 370,
            'selling_price' => 550,
            'location' => 'Rak B-03'
         ]
      ]
   ],
   [
      'id' => 10,
      'code' => 'OBT-0010',
      'name' => 'Azithromycin 500 mg',
      'generic' => 'Azithromycin',
      'form' => 'Tablet',
      'unit' => 'Tablet',
      'category' => 'Antibiotik',
      'min_stock' => 20,
      'total_stock' => 12,
      'batches' => [
         [
            'batch' => 'AZM251101',
            'expiry' => '2026-11-30',
            'stock' => 12,
            'purchase_price' => 1800,
            'selling_price' => 2500,
            'location' => 'Rak A-05'
         ]
      ]
   ]
];


/*
|--------------------------------------------------------------------------
| Statistik
|--------------------------------------------------------------------------
*/

$totalMedicine = count($medicines);

$totalStock = 0;

$lowStock = 0;
$expired = 0;
$nearExpiry = 0;
$totalBatch = 0;

$today = new DateTime();

foreach ($medicines as $medicine) {

   $totalStock += $medicine['total_stock'];

   $totalBatch += count($medicine['batches']);

   if ($medicine['total_stock'] <= $medicine['min_stock']) {
      $lowStock++;
   }

   foreach ($medicine['batches'] as $batch) {

      $expiryDate = new DateTime($batch['expiry']);

      $diff = $today->diff($expiryDate);

      if ($expiryDate < $today) {
         $expired++;
      } elseif ($diff->days <= 90) {
         $nearExpiry++;
      }
   }
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

   <meta charset="UTF-8">

   <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0">

   <title>Stok Obat - Farmasi</title>

   <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet">

   <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

   <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet">

   <link
      rel="stylesheet"
      href="assets/css/style.css">

   <style>
      body {
         font-family: 'Inter', sans-serif;
         background: #f5f7fb;
      }

      .page-wrapper {
         padding: 24px;
      }

      .page-title {
         font-size: 23px;
         font-weight: 700;
         color: #172033;
         margin-bottom: 5px;
      }

      .page-subtitle {
         color: #7b8494;
         font-size: 13px;
      }

      /* ==========================
           STAT CARD
        ========================== */

      .stat-card {
         background: #fff;
         border: 1px solid #e7eaf0;
         border-radius: 14px;
         padding: 17px;
         height: 100%;
         box-shadow: 0 2px 8px rgba(20, 30, 50, .03);
      }

      .stat-icon {
         width: 42px;
         height: 42px;
         border-radius: 11px;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 17px;
         margin-bottom: 12px;
      }

      .icon-blue {
         background: #eaf3ff;
         color: #0d6efd;
      }

      .icon-yellow {
         background: #fff6df;
         color: #b77900;
      }

      .icon-red {
         background: #ffeded;
         color: #d63939;
      }

      .icon-green {
         background: #e9f8ef;
         color: #198754;
      }

      .stat-label {
         color: #858fa0;
         font-size: 11px;
         margin-bottom: 4px;
      }

      .stat-value {
         color: #1c2738;
         font-size: 22px;
         font-weight: 800;
      }

      /* ==========================
           CARD
        ========================== */

      .card {
         border: 1px solid #e7eaf0;
         border-radius: 14px;
         box-shadow: 0 2px 8px rgba(20, 30, 50, .03);
      }

      .card-header {
         background: #fff;
         border-bottom: 1px solid #edf0f4;
         padding: 16px 18px;
         border-radius: 14px 14px 0 0 !important;
      }

      .card-title {
         font-size: 14px;
         font-weight: 700;
         color: #202938;
         margin: 0;
      }

      /* ==========================
           FILTER
        ========================== */

      .filter-area {
         background: #fff;
         border: 1px solid #e7eaf0;
         border-radius: 14px;
         padding: 15px;
         margin-bottom: 16px;
      }

      .form-label {
         font-size: 11px;
         font-weight: 600;
         color: #596476;
         margin-bottom: 5px;
      }

      .form-control,
      .form-select {
         border-radius: 9px;
         border-color: #dfe4ec;
         font-size: 12px;
         min-height: 39px;
      }

      .form-control:focus,
      .form-select:focus {
         border-color: #86b7fe;
         box-shadow: 0 0 0 .15rem rgba(13, 110, 253, .08);
      }

      /* ==========================
           TABLE
        ========================== */

      .table {
         margin-bottom: 0;
      }

      .table thead th {
         background: #f8f9fb;
         color: #7a8494;
         font-size: 10px;
         font-weight: 700;
         text-transform: uppercase;
         letter-spacing: .3px;
         border-bottom: 1px solid #e7ebf0;
         padding: 12px;
         white-space: nowrap;
      }

      .table tbody td {
         color: #364153;
         font-size: 11px;
         vertical-align: middle;
         padding: 13px 12px;
         border-bottom: 1px solid #edf0f4;
      }

      .table tbody tr:hover {
         background: #fafcff;
      }

      .medicine-name {
         font-size: 12px;
         font-weight: 700;
         color: #273244;
      }

      .medicine-meta {
         font-size: 10px;
         color: #8b95a5;
         margin-top: 3px;
      }

      .medicine-code {
         font-size: 10px;
         color: #0d6efd;
         font-weight: 600;
      }

      .stock-value {
         font-size: 13px;
         font-weight: 800;
         color: #263143;
      }

      .stock-unit {
         font-size: 9px;
         color: #8993a3;
      }

      /* ==========================
           STATUS
        ========================== */

      .status-badge {
         display: inline-flex;
         align-items: center;
         gap: 4px;
         border-radius: 20px;
         padding: 5px 9px;
         font-size: 10px;
         font-weight: 600;
         white-space: nowrap;
      }

      .status-normal {
         background: #e8f8ef;
         color: #198754;
      }

      .status-low {
         background: #fff5dc;
         color: #a66a00;
      }

      .status-empty {
         background: #ffebee;
         color: #c62828;
      }

      .status-expired {
         background: #ffebee;
         color: #c62828;
      }

      .status-near {
         background: #fff5dc;
         color: #a66a00;
      }

      .batch-count {
         display: inline-flex;
         align-items: center;
         gap: 5px;
         padding: 5px 8px;
         background: #f4f6f9;
         color: #5f6979;
         border-radius: 7px;
         font-size: 10px;
         font-weight: 600;
      }

      .action-btn {
         width: 30px;
         height: 30px;
         border-radius: 8px;
         display: inline-flex;
         align-items: center;
         justify-content: center;
         border: 1px solid #e0e5ec;
         background: #fff;
         color: #657083;
         transition: .2s;
      }

      .action-btn:hover {
         background: #f4f7fb;
         color: #0d6efd;
         border-color: #cddcf3;
      }

      .btn {
         border-radius: 9px;
         font-size: 12px;
         font-weight: 600;
      }

      /* ==========================
           MODAL
        ========================== */

      .modal-content {
         border: 0;
         border-radius: 15px;
         box-shadow: 0 15px 50px rgba(20, 30, 50, .15);
      }

      .modal-header {
         border-bottom: 1px solid #edf0f4;
         padding: 17px 20px;
      }

      .modal-title {
         font-size: 15px;
         font-weight: 700;
      }

      .modal-body {
         padding: 20px;
      }

      .detail-box {
         background: #f8faff;
         border: 1px solid #e8edf5;
         border-radius: 11px;
         padding: 13px;
         height: 100%;
      }

      .detail-label {
         color: #8993a3;
         font-size: 10px;
         margin-bottom: 4px;
      }

      .detail-value {
         color: #273244;
         font-size: 12px;
         font-weight: 600;
      }

      /* ==========================
           BATCH
        ========================== */

      .batch-card {
         border: 1px solid #e6eaf0;
         border-radius: 10px;
         padding: 13px;
         margin-bottom: 10px;
      }

      .batch-card.fefo {
         border-left: 3px solid #0d6efd;
         background: #f8fbff;
      }

      .batch-number {
         color: #0d6efd;
         font-size: 12px;
         font-weight: 700;
      }

      .batch-label {
         color: #8993a3;
         font-size: 9px;
         margin-bottom: 3px;
      }

      .batch-value {
         color: #354052;
         font-size: 11px;
         font-weight: 600;
      }

      .fefo-label {
         display: inline-flex;
         align-items: center;
         gap: 4px;
         padding: 4px 7px;
         border-radius: 15px;
         background: #eaf3ff;
         color: #0d6efd;
         font-size: 9px;
         font-weight: 700;
      }

      /* ==========================
           MOVEMENT
        ========================== */

      .movement-item {
         display: flex;
         align-items: center;
         gap: 10px;
         padding: 11px 0;
         border-bottom: 1px solid #edf0f4;
      }

      .movement-item:last-child {
         border-bottom: 0;
      }

      .movement-icon {
         width: 32px;
         height: 32px;
         border-radius: 8px;
         display: flex;
         align-items: center;
         justify-content: center;
      }

      .movement-in {
         background: #e8f8ef;
         color: #198754;
      }

      .movement-out {
         background: #fff0f0;
         color: #d63939;
      }

      .movement-adjust {
         background: #eaf3ff;
         color: #0d6efd;
      }

      .movement-title {
         font-size: 11px;
         font-weight: 700;
         color: #354052;
      }

      .movement-meta {
         font-size: 9px;
         color: #8b95a5;
         margin-top: 2px;
      }

      .movement-qty {
         margin-left: auto;
         font-size: 11px;
         font-weight: 800;
      }

      .qty-in {
         color: #198754;
      }

      .qty-out {
         color: #d63939;
      }

      .qty-adjust {
         color: #0d6efd;
      }

      .empty-state {
         padding: 45px 20px;
         text-align: center;
         color: #8993a3;
      }

      .empty-state i {
         font-size: 35px;
         margin-bottom: 12px;
         color: #c5ccd7;
      }
   </style>

</head>

<body>

   <div class="app">

      <?php require 'components/sidebar.php'; ?>

      <div class="main">

         <?php require 'components/header.php'; ?>

         <div class="content">

            <div class="page-wrapper">

               <!-- ========================= -->
               <!-- HEADER -->
               <!-- ========================= -->

               <div class="d-flex justify-content-between align-items-center mb-4">

                  <div>

                     <div class="page-title">
                        Stok Obat
                     </div>

                     <div class="page-subtitle">
                        Manajemen stok, batch, kedaluwarsa, dan mutasi obat farmasi
                     </div>

                  </div>

                  <div class="d-flex gap-2">

                     <button
                        class="btn btn-outline-primary">

                        <i class="fa-solid fa-file-export me-1"></i>
                        Laporan Stok

                     </button>

                     <button
                        class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#stockInModal">

                        <i class="fa-solid fa-plus me-1"></i>
                        Stok Masuk

                     </button>

                  </div>

               </div>


               <!-- ========================= -->
               <!-- STATISTICS -->
               <!-- ========================= -->

               <div class="row g-3 mb-4">

                  <div class="col-xl-3 col-md-6">

                     <div class="stat-card">

                        <div class="stat-icon icon-blue">
                           <i class="fa-solid fa-pills"></i>
                        </div>

                        <div class="stat-label">
                           Jenis Obat
                        </div>

                        <div class="stat-value">
                           <?= $totalMedicine ?>
                        </div>

                     </div>

                  </div>


                  <div class="col-xl-3 col-md-6">

                     <div class="stat-card">

                        <div class="stat-icon icon-yellow">
                           <i class="fa-solid fa-triangle-exclamation"></i>
                        </div>

                        <div class="stat-label">
                           Stok Menipis
                        </div>

                        <div class="stat-value">
                           <?= $lowStock ?>
                        </div>

                     </div>

                  </div>


                  <div class="col-xl-3 col-md-6">

                     <div class="stat-card">

                        <div class="stat-icon icon-red">
                           <i class="fa-solid fa-calendar-xmark"></i>
                        </div>

                        <div class="stat-label">
                           Mendekati Expired
                        </div>

                        <div class="stat-value">
                           <?= $nearExpiry ?>
                        </div>

                     </div>

                  </div>


                  <div class="col-xl-3 col-md-6">

                     <div class="stat-card">

                        <div class="stat-icon icon-green">
                           <i class="fa-solid fa-boxes-stacked"></i>
                        </div>

                        <div class="stat-label">
                           Total Stok
                        </div>

                        <div class="stat-value">
                           <?= number_format($totalStock) ?>
                        </div>

                     </div>

                  </div>

               </div>


               <!-- ========================= -->
               <!-- FILTER -->
               <!-- ========================= -->

               <div class="filter-area">

                  <div class="row g-2 align-items-end">

                     <div class="col-lg-4">

                        <label class="form-label">
                           Cari Obat
                        </label>

                        <div class="input-group">

                           <span class="input-group-text bg-white">
                              <i class="fa-solid fa-search text-muted"></i>
                           </span>

                           <input
                              type="text"
                              id="searchMedicine"
                              class="form-control"
                              placeholder="Nama obat, kode, atau generik...">

                        </div>

                     </div>


                     <div class="col-lg-2">

                        <label class="form-label">
                           Kategori
                        </label>

                        <select
                           id="filterCategory"
                           class="form-select">

                           <option value="">
                              Semua Kategori
                           </option>

                           <option>
                              Analgesik & Antipiretik
                           </option>

                           <option>
                              Antibiotik
                           </option>

                           <option>
                              Antihistamin
                           </option>

                           <option>
                              Antihipertensi
                           </option>

                           <option>
                              Gastrointestinal
                           </option>

                           <option>
                              Respirasi
                           </option>

                           <option>
                              Antidiabetes
                           </option>

                        </select>

                     </div>


                     <div class="col-lg-2">

                        <label class="form-label">
                           Status Stok
                        </label>

                        <select
                           id="filterStock"
                           class="form-select">

                           <option value="">
                              Semua
                           </option>

                           <option value="normal">
                              Normal
                           </option>

                           <option value="low">
                              Stok Menipis
                           </option>

                           <option value="empty">
                              Habis
                           </option>

                        </select>

                     </div>


                     <div class="col-lg-2">

                        <label class="form-label">
                           Expired
                        </label>

                        <select
                           id="filterExpiry"
                           class="form-select">

                           <option value="">
                              Semua
                           </option>

                           <option value="near">
                              ≤ 90 Hari
                           </option>

                           <option value="expired">
                              Expired
                           </option>

                        </select>

                     </div>


                     <div class="col-lg-2">

                        <button
                           class="btn btn-light border w-100"
                           onclick="resetFilter()">

                           <i class="fa-solid fa-filter-circle-xmark me-1"></i>
                           Reset

                        </button>

                     </div>

                  </div>

               </div>


               <!-- ========================= -->
               <!-- STOCK TABLE -->
               <!-- ========================= -->

               <div class="card">

                  <div class="card-header">

                     <div class="d-flex justify-content-between align-items-center">

                        <div>

                           <h6 class="card-title">
                              Inventory Obat
                           </h6>

                           <div
                              class="text-muted mt-1"
                              style="font-size:10px;">

                              Stok aktif berdasarkan obat dan batch

                           </div>

                        </div>

                        <span
                           class="badge bg-light text-secondary border"
                           id="totalDisplay">

                           <?= $totalMedicine ?> obat

                        </span>

                     </div>

                  </div>


                  <div class="table-responsive">

                     <table class="table">

                        <thead>

                           <tr>

                              <th>
                                 Obat
                              </th>

                              <th>
                                 Kategori
                              </th>

                              <th>
                                 Total Stok
                              </th>

                              <th>
                                 Batch
                              </th>

                              <th>
                                 Expired Terdekat
                              </th>

                              <th>
                                 Lokasi
                              </th>

                              <th>
                                 Status
                              </th>

                              <th class="text-end">
                                 Aksi
                              </th>

                           </tr>

                        </thead>

                        <tbody id="medicineTable">

                           <?php foreach ($medicines as $medicine): ?>

                              <?php

                              $stockStatus = 'normal';
                              $stockText = 'Normal';
                              $stockIcon = 'fa-circle-check';

                              if ($medicine['total_stock'] <= 0) {

                                 $stockStatus = 'empty';
                                 $stockText = 'Habis';
                                 $stockIcon = 'fa-circle-xmark';
                              } elseif ($medicine['total_stock'] <= $medicine['min_stock']) {

                                 $stockStatus = 'low';
                                 $stockText = 'Menipis';
                                 $stockIcon = 'fa-triangle-exclamation';
                              }

                              /*
                                |--------------------------------------------------------------------------
                                | Cari expiry terdekat
                                |--------------------------------------------------------------------------
                                */

                              $nearestExpiry = null;
                              $nearestLocation = '-';

                              foreach ($medicine['batches'] as $batch) {

                                 if (
                                    $nearestExpiry === null ||
                                    $batch['expiry'] < $nearestExpiry
                                 ) {
                                    $nearestExpiry = $batch['expiry'];
                                    $nearestLocation = $batch['location'];
                                 }
                              }

                              ?>

                              <tr
                                 data-search="<?= strtolower(
                                                   $medicine['name'] . ' ' .
                                                      $medicine['generic'] . ' ' .
                                                      $medicine['code']
                                                ) ?>"
                                 data-category="<?= htmlspecialchars($medicine['category']) ?>"
                                 data-stock="<?= $stockStatus ?>"
                                 data-expiry="<?= $nearestExpiry ?>">

                                 <td>

                                    <div class="medicine-name">
                                       <?= htmlspecialchars($medicine['name']) ?>
                                    </div>

                                    <div class="medicine-meta">

                                       <?= htmlspecialchars($medicine['generic']) ?>
                                       •
                                       <?= htmlspecialchars($medicine['form']) ?>

                                    </div>

                                    <div class="medicine-code">
                                       <?= htmlspecialchars($medicine['code']) ?>
                                    </div>

                                 </td>


                                 <td>

                                    <span
                                       style="
                                                font-size:10px;
                                                color:#657083;
                                            ">

                                       <?= htmlspecialchars($medicine['category']) ?>

                                    </span>

                                 </td>


                                 <td>

                                    <div class="stock-value">
                                       <?= number_format($medicine['total_stock']) ?>
                                    </div>

                                    <div class="stock-unit">
                                       <?= $medicine['unit'] ?>
                                    </div>

                                 </td>


                                 <td>

                                    <span class="batch-count">

                                       <i class="fa-solid fa-layer-group"></i>

                                       <?= count($medicine['batches']) ?> batch

                                    </span>

                                 </td>


                                 <td>

                                    <div
                                       style="
                                                font-size:11px;
                                                font-weight:600;
                                            ">

                                       <?= date(
                                          'd M Y',
                                          strtotime($nearestExpiry)
                                       ) ?>

                                    </div>

                                 </td>


                                 <td>

                                    <span
                                       style="
                                                font-size:10px;
                                                color:#657083;
                                            ">

                                       <i class="fa-solid fa-location-dot me-1"></i>

                                       <?= htmlspecialchars($nearestLocation) ?>

                                    </span>

                                 </td>


                                 <td>

                                    <span
                                       class="status-badge
                                            <?= $stockStatus === 'normal'
                                                ? 'status-normal'
                                                : ($stockStatus === 'low'
                                                   ? 'status-low'
                                                   : 'status-empty') ?>">

                                       <i class="fa-solid <?= $stockIcon ?>"></i>

                                       <?= $stockText ?>

                                    </span>

                                 </td>


                                 <td class="text-end">

                                    <div
                                       class="d-flex justify-content-end gap-1">

                                       <button
                                          class="action-btn"
                                          title="Detail Batch"
                                          onclick="showStock(<?= $medicine['id'] ?>)">

                                          <i class="fa-regular fa-eye"></i>

                                       </button>

                                       <button
                                          class="action-btn"
                                          title="Stock Card"
                                          onclick="showStockCard(<?= $medicine['id'] ?>)">

                                          <i class="fa-solid fa-chart-line"></i>

                                       </button>

                                       <button
                                          class="action-btn"
                                          title="Penyesuaian Stok"
                                          onclick="adjustStock(<?= $medicine['id'] ?>)">

                                          <i class="fa-solid fa-sliders"></i>

                                       </button>

                                    </div>

                                 </td>

                              </tr>

                           <?php endforeach; ?>

                        </tbody>

                     </table>

                  </div>


                  <div
                     id="emptyState"
                     class="empty-state d-none">

                     <i class="fa-solid fa-boxes-stacked d-block"></i>

                     <div
                        style="
                                font-size:13px;
                                font-weight:600;
                                color:#596476;
                            ">

                        Data obat tidak ditemukan

                     </div>

                     <div
                        style="
                                font-size:11px;
                                margin-top:4px;
                            ">

                        Coba ubah kata kunci atau filter.

                     </div>

                  </div>

               </div>

            </div>

         </div>

         <?php require 'components/footer.php'; ?>

      </div>

   </div>


   <!-- ===================================================== -->
   <!-- MODAL DETAIL STOCK -->
   <!-- ===================================================== -->

   <div
      class="modal fade"
      id="stockModal"
      tabindex="-1">

      <div
         class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">

         <div class="modal-content">

            <div class="modal-header">

               <div>

                  <h5 class="modal-title">
                     Detail Stok Obat
                  </h5>

                  <div
                     id="modalMedicineCode"
                     class="text-primary mt-1"
                     style="
                            font-size:10px;
                            font-weight:600;
                        ">
                  </div>

               </div>

               <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal">
               </button>

            </div>


            <div class="modal-body">

               <!-- MEDICINE INFO -->

               <div class="row g-2 mb-4">

                  <div class="col-md-4">

                     <div class="detail-box">

                        <div class="detail-label">
                           Nama Obat
                        </div>

                        <div
                           class="detail-value"
                           id="modalMedicineName">
                        </div>

                     </div>

                  </div>


                  <div class="col-md-4">

                     <div class="detail-box">

                        <div class="detail-label">
                           Generik
                        </div>

                        <div
                           class="detail-value"
                           id="modalGeneric">
                        </div>

                     </div>

                  </div>


                  <div class="col-md-4">

                     <div class="detail-box">

                        <div class="detail-label">
                           Total Stok
                        </div>

                        <div
                           class="detail-value"
                           id="modalTotalStock">
                        </div>

                     </div>

                  </div>

               </div>


               <!-- BATCH -->

               <div
                  class="d-flex justify-content-between align-items-center mb-3">

                  <div
                     style="
                            font-size:13px;
                            font-weight:700;
                            color:#293346;
                        ">

                     <i class="fa-solid fa-layer-group text-primary me-1"></i>

                     Batch Obat

                  </div>

                  <span
                     style="
                            font-size:10px;
                            color:#8993a3;
                        ">

                     FEFO: batch expired terdekat digunakan terlebih dahulu

                  </span>

               </div>


               <div id="modalBatchList">
               </div>


               <!-- ACTION -->

               <div class="d-flex justify-content-end gap-2 mt-3">

                  <button
                     class="btn btn-outline-primary"
                     onclick="openStockInFromDetail()">

                     <i class="fa-solid fa-plus me-1"></i>
                     Stok Masuk

                  </button>

                  <button
                     class="btn btn-primary"
                     onclick="openAdjustmentFromDetail()">

                     <i class="fa-solid fa-sliders me-1"></i>
                     Penyesuaian Stok

                  </button>

               </div>

            </div>

         </div>

      </div>

   </div>


   <!-- ===================================================== -->
   <!-- MODAL STOCK IN -->
   <!-- ===================================================== -->

   <div
      class="modal fade"
      id="stockInModal"
      tabindex="-1">

      <div class="modal-dialog modal-lg modal-dialog-centered">

         <div class="modal-content">

            <div class="modal-header">

               <h5 class="modal-title">

                  <i class="fa-solid fa-box-arrow-in-down text-primary me-2"></i>

                  Stok Masuk

               </h5>

               <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal">
               </button>

            </div>


            <div class="modal-body">

               <div class="row g-3">

                  <div class="col-md-8">

                     <label class="form-label">
                        Obat
                     </label>

                     <select class="form-select">

                        <option value="">
                           Pilih obat
                        </option>

                        <?php foreach ($medicines as $medicine): ?>

                           <option>
                              <?= htmlspecialchars($medicine['name']) ?>
                           </option>

                        <?php endforeach; ?>

                     </select>

                  </div>


                  <div class="col-md-4">

                     <label class="form-label">
                        Tanggal Masuk
                     </label>

                     <input
                        type="date"
                        class="form-control"
                        value="<?= date('Y-m-d') ?>">

                  </div>


                  <div class="col-md-4">

                     <label class="form-label">
                        No. Batch
                     </label>

                     <input
                        type="text"
                        class="form-control"
                        placeholder="Contoh: PCM260901">

                  </div>


                  <div class="col-md-4">

                     <label class="form-label">
                        Tanggal Expired
                     </label>

                     <input
                        type="date"
                        class="form-control">

                  </div>


                  <div class="col-md-4">

                     <label class="form-label">
                        Jumlah
                     </label>

                     <input
                        type="number"
                        class="form-control"
                        placeholder="0">

                  </div>


                  <div class="col-md-6">

                     <label class="form-label">
                        Harga Beli
                     </label>

                     <div class="input-group">

                        <span class="input-group-text">
                           Rp
                        </span>

                        <input
                           type="number"
                           class="form-control"
                           placeholder="0">

                     </div>

                  </div>


                  <div class="col-md-6">

                     <label class="form-label">
                        Harga Jual
                     </label>

                     <div class="input-group">

                        <span class="input-group-text">
                           Rp
                        </span>

                        <input
                           type="number"
                           class="form-control"
                           placeholder="0">

                     </div>

                  </div>


                  <div class="col-md-6">

                     <label class="form-label">
                        Supplier
                     </label>

                     <input
                        type="text"
                        class="form-control"
                        placeholder="Nama supplier">

                  </div>


                  <div class="col-md-6">

                     <label class="form-label">
                        Lokasi Penyimpanan
                     </label>

                     <select class="form-select">

                        <option>
                           Rak A-01
                        </option>

                        <option>
                           Rak A-02
                        </option>

                        <option>
                           Rak B-01
                        </option>

                        <option>
                           Rak B-02
                        </option>

                        <option>
                           Rak C-01
                        </option>

                     </select>

                  </div>


                  <div class="col-12">

                     <label class="form-label">
                        Catatan
                     </label>

                     <textarea
                        class="form-control"
                        rows="3"
                        placeholder="Catatan penerimaan obat..."></textarea>

                  </div>

               </div>

            </div>


            <div class="modal-footer">

               <button
                  type="button"
                  class="btn btn-light border"
                  data-bs-dismiss="modal">

                  Batal

               </button>

               <button
                  type="button"
                  class="btn btn-primary"
                  onclick="saveStockIn()">

                  <i class="fa-solid fa-check me-1"></i>

                  Simpan Stok Masuk

               </button>

            </div>

         </div>

      </div>

   </div>


   <!-- ===================================================== -->
   <!-- MODAL STOCK CARD -->
   <!-- ===================================================== -->

   <div
      class="modal fade"
      id="stockCardModal"
      tabindex="-1">

      <div
         class="modal-dialog modal-lg modal-dialog-centered">

         <div class="modal-content">

            <div class="modal-header">

               <div>

                  <h5 class="modal-title">
                     Kartu Stok
                  </h5>

                  <div
                     id="stockCardMedicine"
                     class="text-primary mt-1"
                     style="
                            font-size:10px;
                            font-weight:600;
                        ">
                  </div>

               </div>

               <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal">
               </button>

            </div>


            <div class="modal-body">

               <div id="stockMovementList">

                  <div class="movement-item">

                     <div class="movement-icon movement-in">

                        <i class="fa-solid fa-arrow-down"></i>

                     </div>

                     <div>

                        <div class="movement-title">
                           Stok Masuk
                        </div>

                        <div class="movement-meta">
                           02 September 2026 • Batch PCM260701
                        </div>

                     </div>

                     <div class="movement-qty qty-in">
                        +100
                     </div>

                  </div>


                  <div class="movement-item">

                     <div class="movement-icon movement-out">

                        <i class="fa-solid fa-arrow-up"></i>

                     </div>

                     <div>

                        <div class="movement-title">
                           Dispensing
                        </div>

                        <div class="movement-meta">
                           04 September 2026 • DSP-20260904-001
                        </div>

                     </div>

                     <div class="movement-qty qty-out">
                        -10
                     </div>

                  </div>


                  <div class="movement-item">

                     <div class="movement-icon movement-out">

                        <i class="fa-solid fa-arrow-up"></i>

                     </div>

                     <div>

                        <div class="movement-title">
                           Dispensing
                        </div>

                        <div class="movement-meta">
                           04 September 2026 • DSP-20260904-003
                        </div>

                     </div>

                     <div class="movement-qty qty-out">
                        -10
                     </div>

                  </div>


                  <div class="movement-item">

                     <div class="movement-icon movement-adjust">

                        <i class="fa-solid fa-sliders"></i>

                     </div>

                     <div>

                        <div class="movement-title">
                           Penyesuaian Stok
                        </div>

                        <div class="movement-meta">
                           03 September 2026 • Stock Opname
                        </div>

                     </div>

                     <div class="movement-qty qty-adjust">
                        +5
                     </div>

                  </div>

               </div>

            </div>

         </div>

      </div>

   </div>


   <!-- ===================================================== -->
   <!-- MODAL ADJUSTMENT -->
   <!-- ===================================================== -->

   <div
      class="modal fade"
      id="adjustmentModal"
      tabindex="-1">

      <div class="modal-dialog modal-md modal-dialog-centered">

         <div class="modal-content">

            <div class="modal-header">

               <h5 class="modal-title">
                  Penyesuaian Stok
               </h5>

               <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal">
               </button>

            </div>


            <div class="modal-body">

               <div class="mb-3">

                  <label class="form-label">
                     Obat
                  </label>

                  <input
                     type="text"
                     id="adjustMedicine"
                     class="form-control"
                     readonly>

               </div>


               <div class="mb-3">

                  <label class="form-label">
                     Jenis Penyesuaian
                  </label>

                  <select class="form-select">

                     <option>
                        Tambah Stok
                     </option>

                     <option>
                        Kurangi Stok
                     </option>

                  </select>

               </div>


               <div class="mb-3">

                  <label class="form-label">
                     Jumlah
                  </label>

                  <input
                     type="number"
                     class="form-control"
                     placeholder="Masukkan jumlah">

               </div>


               <div class="mb-3">

                  <label class="form-label">
                     Alasan
                  </label>

                  <select class="form-select">

                     <option>
                        Stock Opname
                     </option>

                     <option>
                        Obat Rusak
                     </option>

                     <option>
                        Obat Expired
                     </option>

                     <option>
                        Koreksi Sistem
                     </option>

                     <option>
                        Lainnya
                     </option>

                  </select>

               </div>


               <div>

                  <label class="form-label">
                     Catatan
                  </label>

                  <textarea
                     class="form-control"
                     rows="3"
                     placeholder="Keterangan penyesuaian..."></textarea>

               </div>

            </div>


            <div class="modal-footer">

               <button
                  type="button"
                  class="btn btn-light border"
                  data-bs-dismiss="modal">

                  Batal

               </button>

               <button
                  type="button"
                  class="btn btn-primary"
                  onclick="saveAdjustment()">

                  <i class="fa-solid fa-check me-1"></i>

                  Simpan Penyesuaian

               </button>

            </div>

         </div>

      </div>

   </div>


   <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
   </script>


   <script>
      /*
|--------------------------------------------------------------------------
| DATA
|--------------------------------------------------------------------------
*/

      const medicines =
         <?= json_encode(
            $medicines,
            JSON_UNESCAPED_UNICODE |
               JSON_UNESCAPED_SLASHES
         ); ?>;


      /*
      |--------------------------------------------------------------------------
      | FILTER
      |--------------------------------------------------------------------------
      */

      const searchMedicine =
         document.getElementById('searchMedicine');

      const filterCategory =
         document.getElementById('filterCategory');

      const filterStock =
         document.getElementById('filterStock');

      const filterExpiry =
         document.getElementById('filterExpiry');


      function filterMedicines() {
         const keyword =
            searchMedicine.value
            .toLowerCase()
            .trim();

         const category =
            filterCategory.value;

         const stock =
            filterStock.value;

         const expiryFilter =
            filterExpiry.value;

         const rows =
            document.querySelectorAll(
               '#medicineTable tr'
            );

         let visible = 0;

         const today =
            new Date();

         rows.forEach(row => {
            const search =
               row.dataset.search || '';

            const rowCategory =
               row.dataset.category || '';

            const rowStock =
               row.dataset.stock || '';

            const expiry =
               row.dataset.expiry;

            const expiryDate =
               new Date(expiry);

            const diff =
               Math.ceil(
                  (
                     expiryDate - today
                  ) /
                  (1000 * 60 * 60 * 24)
               );

            const matchKeyword = !keyword ||
               search.includes(keyword);

            const matchCategory = !category ||
               rowCategory === category;

            const matchStock = !stock ||
               rowStock === stock;

            let matchExpiry = true;

            if (expiryFilter === 'near') {

               matchExpiry =
                  diff >= 0 &&
                  diff <= 90;

            }

            if (expiryFilter === 'expired') {

               matchExpiry =
                  diff < 0;

            }

            const show =
               matchKeyword &&
               matchCategory &&
               matchStock &&
               matchExpiry;

            row.style.display =
               show ? '' : 'none';

            if (show) {
               visible++;
            }
         });

         document.getElementById('totalDisplay')
            .textContent =
            visible + ' obat';

         document.getElementById('emptyState')
            .classList.toggle(
               'd-none',
               visible !== 0
            );
      }


      searchMedicine.addEventListener(
         'input',
         filterMedicines
      );

      filterCategory.addEventListener(
         'change',
         filterMedicines
      );

      filterStock.addEventListener(
         'change',
         filterMedicines
      );

      filterExpiry.addEventListener(
         'change',
         filterMedicines
      );


      /*
      |--------------------------------------------------------------------------
      | RESET FILTER
      |--------------------------------------------------------------------------
      */

      function resetFilter() {
         searchMedicine.value = '';
         filterCategory.value = '';
         filterStock.value = '';
         filterExpiry.value = '';

         filterMedicines();
      }


      /*
      |--------------------------------------------------------------------------
      | DETAIL STOCK
      |--------------------------------------------------------------------------
      */

      let selectedMedicineId = null;


      function showStock(id) {
         const medicine =
            medicines.find(
               item => item.id === id
            );

         if (!medicine) {
            return;
         }

         selectedMedicineId = id;

         document.getElementById(
               'modalMedicineCode'
            ).textContent =
            medicine.code;

         document.getElementById(
               'modalMedicineName'
            ).textContent =
            medicine.name;

         document.getElementById(
               'modalGeneric'
            ).textContent =
            medicine.generic;

         document.getElementById(
               'modalTotalStock'
            ).textContent =
            medicine.total_stock +
            ' ' +
            medicine.unit;


         const batchList =
            document.getElementById(
               'modalBatchList'
            );

         batchList.innerHTML = '';


         /*
         |--------------------------------------------------------------------------
         | Sort FEFO
         |--------------------------------------------------------------------------
         */

         const sortedBatches = [...medicine.batches]
            .sort(
               (a, b) =>
               a.expiry.localeCompare(
                  b.expiry
               )
            );


         sortedBatches.forEach(
            (batch, index) => {

               const div =
                  document.createElement('div');

               div.className =
                  'batch-card ' +
                  (
                     index === 0 ?
                     'fefo' :
                     ''
                  );

               div.innerHTML = `

                <div class="d-flex justify-content-between align-items-center mb-3">

                    <div>

                        <div class="batch-number">
                            ${batch.batch}
                        </div>

                    </div>

                    ${
                        index === 0
                        ?
                        `
                        <span class="fefo-label">

                            <i class="fa-solid fa-star"></i>

                            FEFO Priority

                        </span>
                        `
                        :
                        ''
                    }

                </div>


                <div class="row g-3">

                    <div class="col-md-3">

                        <div class="batch-label">
                            Expired Date
                        </div>

                        <div class="batch-value">
                            ${formatDate(batch.expiry)}
                        </div>

                    </div>


                    <div class="col-md-2">

                        <div class="batch-label">
                            Stok
                        </div>

                        <div
                            class="batch-value"
                            style="color:#0d6efd;">

                            ${batch.stock}
                            ${medicine.unit}

                        </div>

                    </div>


                    <div class="col-md-2">

                        <div class="batch-label">
                            Harga Beli
                        </div>

                        <div class="batch-value">
                            ${formatRupiah(batch.purchase_price)}
                        </div>

                    </div>


                    <div class="col-md-2">

                        <div class="batch-label">
                            Harga Jual
                        </div>

                        <div class="batch-value">
                            ${formatRupiah(batch.selling_price)}
                        </div>

                    </div>


                    <div class="col-md-3">

                        <div class="batch-label">
                            Lokasi
                        </div>

                        <div class="batch-value">

                            <i class="fa-solid fa-location-dot me-1"></i>

                            ${batch.location}

                        </div>

                    </div>

                </div>

            `;

               batchList.appendChild(div);

            }
         );


         const modal =
            new bootstrap.Modal(
               document.getElementById(
                  'stockModal'
               )
            );

         modal.show();
      }


      /*
      |--------------------------------------------------------------------------
      | FORMAT DATE
      |--------------------------------------------------------------------------
      */

      function formatDate(date) {
         const d =
            new Date(date);

         return d.toLocaleDateString(
            'id-ID', {
               day: '2-digit',
               month: 'short',
               year: 'numeric'
            }
         );
      }


      /*
      |--------------------------------------------------------------------------
      | FORMAT RUPIAH
      |--------------------------------------------------------------------------
      */

      function formatRupiah(value) {
         return new Intl.NumberFormat(
            'id-ID', {
               style: 'currency',
               currency: 'IDR',
               maximumFractionDigits: 0
            }
         ).format(value);
      }


      /*
      |--------------------------------------------------------------------------
      | STOCK CARD
      |--------------------------------------------------------------------------
      */

      function showStockCard(id) {
         const medicine =
            medicines.find(
               item => item.id === id
            );

         if (!medicine) {
            return;
         }

         document.getElementById(
               'stockCardMedicine'
            ).textContent =
            medicine.name +
            ' • ' +
            medicine.code;

         const modal =
            new bootstrap.Modal(
               document.getElementById(
                  'stockCardModal'
               )
            );

         modal.show();
      }


      /*
      |--------------------------------------------------------------------------
      | ADJUSTMENT
      |--------------------------------------------------------------------------
      */

      function adjustStock(id) {
         const medicine =
            medicines.find(
               item => item.id === id
            );

         if (!medicine) {
            return;
         }

         document.getElementById(
               'adjustMedicine'
            ).value =
            medicine.name +
            ' (' +
            medicine.total_stock +
            ' ' +
            medicine.unit +
            ')';


         const modal =
            new bootstrap.Modal(
               document.getElementById(
                  'adjustmentModal'
               )
            );

         modal.show();
      }


      /*
      |--------------------------------------------------------------------------
      | SAVE STOCK IN
      |--------------------------------------------------------------------------
      */

      function saveStockIn() {
         alert(
            'Stok masuk berhasil disimpan.\n\n' +
            'Pada implementasi database, sistem akan membuat batch baru dan mencatat transaksi STOCK IN.'
         );

         bootstrap.Modal
            .getInstance(
               document.getElementById(
                  'stockInModal'
               )
            )
            ?.hide();
      }


      /*
      |--------------------------------------------------------------------------
      | SAVE ADJUSTMENT
      |--------------------------------------------------------------------------
      */

      function saveAdjustment() {
         alert(
            'Penyesuaian stok berhasil disimpan.\n\n' +
            'Pada implementasi database, sistem akan mencatat mutasi stok dan audit pengguna.'
         );

         bootstrap.Modal
            .getInstance(
               document.getElementById(
                  'adjustmentModal'
               )
            )
            ?.hide();
      }


      /*
      |--------------------------------------------------------------------------
      | FROM DETAIL
      |--------------------------------------------------------------------------
      */

      function openStockInFromDetail() {
         bootstrap.Modal
            .getInstance(
               document.getElementById(
                  'stockModal'
               )
            )
            ?.hide();

         setTimeout(
            function() {
               new bootstrap.Modal(
                  document.getElementById(
                     'stockInModal'
                  )
               ).show();
            },
            300
         );
      }


      function openAdjustmentFromDetail() {
         const medicine =
            medicines.find(
               item => item.id === selectedMedicineId
            );

         if (medicine) {

            document.getElementById(
                  'adjustMedicine'
               ).value =
               medicine.name +
               ' (' +
               medicine.total_stock +
               ' ' +
               medicine.unit +
               ')';

         }

         bootstrap.Modal
            .getInstance(
               document.getElementById(
                  'stockModal'
               )
            )
            ?.hide();

         setTimeout(
            function() {
               new bootstrap.Modal(
                  document.getElementById(
                     'adjustmentModal'
                  )
               ).show();
            },
            300
         );
      }
   </script>

</body>

</html>