<?php

/**
 * pharmacy-dispensing.php
 * Dispensing Obat Farmasi
 * Demo UI - siap dikembangkan ke database
 */

$dispensing = [
   [
      'id' => 1,
      'dispensing_no' => 'DSP-20260904-001',
      'request_no' => 'REQ-20260904-001',
      'time' => '09:02',
      'rm' => 'RM-000129',
      'patient' => 'Siti Rahma',
      'age' => 41,
      'gender' => 'P',
      'doctor' => 'dr. Budi Santoso',
      'poli' => 'Poli Umum',
      'payer' => 'BPJS',
      'priority' => 'Normal',
      'status' => 'Menunggu',
      'items' => [
         [
            'medicine' => 'Paracetamol 500 mg',
            'requested' => 10,
            'dispensed' => 10,
            'unit' => 'Tablet',
            'batch' => 'PCM260701',
            'expiry' => '2028-07-31',
            'stock' => 125,
            'dosage' => '1 tablet',
            'frequency' => '3 x sehari',
            'instruction' => 'Sesudah makan'
         ],
         [
            'medicine' => 'Cetirizine 10 mg',
            'requested' => 10,
            'dispensed' => 10,
            'unit' => 'Tablet',
            'batch' => 'CTZ260502',
            'expiry' => '2028-05-31',
            'stock' => 80,
            'dosage' => '1 tablet',
            'frequency' => '1 x sehari',
            'instruction' => 'Malam hari'
         ]
      ],
      'note' => 'Demam dan batuk.'
   ],
   [
      'id' => 2,
      'dispensing_no' => 'DSP-20260904-002',
      'request_no' => 'REQ-20260904-002',
      'time' => '09:18',
      'rm' => 'RM-000130',
      'patient' => 'Muhammad Rizky',
      'age' => 46,
      'gender' => 'L',
      'doctor' => 'dr. Budi Santoso',
      'poli' => 'Poli Umum',
      'payer' => 'BPJS',
      'priority' => 'Normal',
      'status' => 'Diproses',
      'items' => [
         [
            'medicine' => 'Amlodipine 10 mg',
            'requested' => 30,
            'dispensed' => 30,
            'unit' => 'Tablet',
            'batch' => 'AML260301',
            'expiry' => '2028-03-31',
            'stock' => 64,
            'dosage' => '1 tablet',
            'frequency' => '1 x sehari',
            'instruction' => 'Pagi hari'
         ],
         [
            'medicine' => 'Captopril 25 mg',
            'requested' => 20,
            'dispensed' => 20,
            'unit' => 'Tablet',
            'batch' => 'CAP260601',
            'expiry' => '2028-06-30',
            'stock' => 45,
            'dosage' => '1 tablet',
            'frequency' => '2 x sehari',
            'instruction' => 'Sebelum makan'
         ]
      ],
      'note' => 'Kontrol hipertensi.'
   ],
   [
      'id' => 3,
      'dispensing_no' => 'DSP-20260904-003',
      'request_no' => 'REQ-20260904-003',
      'time' => '09:31',
      'rm' => 'RM-000128',
      'patient' => 'Andi Pratama',
      'age' => 36,
      'gender' => 'L',
      'doctor' => 'dr. Budi Santoso',
      'poli' => 'Poli Umum',
      'payer' => 'Umum',
      'priority' => 'Prioritas',
      'status' => 'Menunggu',
      'items' => [
         [
            'medicine' => 'Amoxicillin 500 mg',
            'requested' => 15,
            'dispensed' => 15,
            'unit' => 'Kapsul',
            'batch' => 'AMX260401',
            'expiry' => '2028-04-30',
            'stock' => 50,
            'dosage' => '1 kapsul',
            'frequency' => '3 x sehari',
            'instruction' => 'Sesudah makan'
         ],
         [
            'medicine' => 'Paracetamol 500 mg',
            'requested' => 10,
            'dispensed' => 10,
            'unit' => 'Tablet',
            'batch' => 'PCM260701',
            'expiry' => '2028-07-31',
            'stock' => 125,
            'dosage' => '1 tablet',
            'frequency' => '3 x sehari',
            'instruction' => 'Jika demam'
         ]
      ],
      'note' => 'ISPA dengan demam.'
   ],
   [
      'id' => 4,
      'dispensing_no' => 'DSP-20260904-004',
      'request_no' => 'REQ-20260904-004',
      'time' => '09:44',
      'rm' => 'RM-000131',
      'patient' => 'Dewi Lestari',
      'age' => 33,
      'gender' => 'P',
      'doctor' => 'drg. Maya Putri',
      'poli' => 'Poli Gigi',
      'payer' => 'Umum',
      'priority' => 'Normal',
      'status' => 'Selesai',
      'items' => [
         [
            'medicine' => 'Mefenamic Acid 500 mg',
            'requested' => 10,
            'dispensed' => 10,
            'unit' => 'Tablet',
            'batch' => 'MFA260201',
            'expiry' => '2028-02-28',
            'stock' => 70,
            'dosage' => '1 tablet',
            'frequency' => '3 x sehari',
            'instruction' => 'Sesudah makan'
         ]
      ],
      'note' => 'Pasca tindakan gigi.'
   ],
   [
      'id' => 5,
      'dispensing_no' => 'DSP-20260904-005',
      'request_no' => 'REQ-20260904-005',
      'time' => '10:02',
      'rm' => 'RM-000132',
      'patient' => 'Rina Wulandari',
      'age' => 50,
      'gender' => 'P',
      'doctor' => 'dr. Budi Santoso',
      'poli' => 'Poli Umum',
      'payer' => 'BPJS',
      'priority' => 'Normal',
      'status' => 'Menunggu',
      'items' => [
         [
            'medicine' => 'Omeprazole 20 mg',
            'requested' => 14,
            'dispensed' => 14,
            'unit' => 'Kapsul',
            'batch' => 'OMP260501',
            'expiry' => '2028-05-31',
            'stock' => 36,
            'dosage' => '1 kapsul',
            'frequency' => '1 x sehari',
            'instruction' => 'Sebelum makan'
         ]
      ],
      'note' => 'Keluhan gastritis.'
   ]
];

$totalDispensing = count($dispensing);

$totalWaiting = count(array_filter($dispensing, function ($item) {
   return $item['status'] === 'Menunggu';
}));

$totalProcess = count(array_filter($dispensing, function ($item) {
   return $item['status'] === 'Diproses';
}));

$totalDone = count(array_filter($dispensing, function ($item) {
   return $item['status'] === 'Selesai';
}));

$totalItems = 0;

foreach ($dispensing as $row) {
   $totalItems += count($row['items']);
}
?>

<!DOCTYPE html>
<html lang="id">

<head>

   <meta charset="UTF-8">

   <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0">

   <title>Dispensing Obat - Farmasi</title>

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

      .icon-purple {
         background: #f2ecff;
         color: #7547d8;
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

      .dispensing-number {
         font-size: 11px;
         font-weight: 700;
         color: #0d6efd;
      }

      .patient-name {
         font-size: 12px;
         font-weight: 700;
         color: #273244;
      }

      .patient-meta {
         font-size: 10px;
         color: #8b95a5;
         margin-top: 2px;
      }

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

      .status-waiting {
         background: #fff5dc;
         color: #a66a00;
      }

      .status-process {
         background: #e9f2ff;
         color: #1264d6;
      }

      .status-done {
         background: #e8f8ef;
         color: #198754;
      }

      .priority-badge {
         display: inline-flex;
         padding: 4px 8px;
         border-radius: 20px;
         font-size: 10px;
         font-weight: 600;
      }

      .priority-normal {
         background: #f0f2f5;
         color: #667085;
      }

      .priority-high {
         background: #fff0f0;
         color: #d63939;
      }

      .medicine-count {
         display: inline-flex;
         align-items: center;
         gap: 5px;
         color: #495467;
         font-size: 11px;
      }

      .stock-ok {
         color: #198754;
         font-weight: 700;
      }

      .stock-low {
         color: #d97706;
         font-weight: 700;
      }

      .expiry-ok {
         color: #198754;
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

      .medicine-item {
         border: 1px solid #e6eaf0;
         border-radius: 10px;
         padding: 13px;
         margin-bottom: 10px;
      }

      .medicine-name {
         font-size: 12px;
         font-weight: 700;
         color: #263143;
      }

      .medicine-detail {
         color: #7c8797;
         font-size: 10px;
         margin-top: 4px;
      }

      .batch-box {
         background: #f8f9fb;
         border: 1px solid #e5e9ef;
         border-radius: 9px;
         padding: 10px;
         margin-top: 10px;
      }

      .note-box {
         background: #fffaf0;
         border: 1px solid #f4e5bd;
         border-radius: 10px;
         padding: 12px;
         color: #735d2b;
         font-size: 11px;
      }

      .verification-box {
         background: #f8faff;
         border: 1px solid #dfeafa;
         border-radius: 11px;
         padding: 14px;
      }

      .verification-item {
         display: flex;
         align-items: center;
         gap: 8px;
         font-size: 11px;
         color: #596476;
         margin-bottom: 8px;
      }

      .verification-item:last-child {
         margin-bottom: 0;
      }

      .verification-item i {
         color: #198754;
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
                        Dispensing Obat
                     </div>

                     <div class="page-subtitle">
                        Verifikasi resep, pengambilan obat, dan penyerahan obat kepada pasien
                     </div>

                  </div>

                  <div class="d-flex gap-2">

                     <button
                        class="btn btn-outline-primary"
                        onclick="location.reload()">

                        <i class="fa-solid fa-arrows-rotate me-1"></i>
                        Refresh

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
                           <i class="fa-solid fa-prescription-bottle-medical"></i>
                        </div>

                        <div class="stat-label">
                           Total Dispensing
                        </div>

                        <div class="stat-value">
                           <?= $totalDispensing ?>
                        </div>

                     </div>

                  </div>


                  <div class="col-xl-3 col-md-6">

                     <div class="stat-card">

                        <div class="stat-icon icon-yellow">
                           <i class="fa-solid fa-hourglass-half"></i>
                        </div>

                        <div class="stat-label">
                           Menunggu
                        </div>

                        <div class="stat-value">
                           <?= $totalWaiting ?>
                        </div>

                     </div>

                  </div>


                  <div class="col-xl-3 col-md-6">

                     <div class="stat-card">

                        <div class="stat-icon icon-purple">
                           <i class="fa-solid fa-box-open"></i>
                        </div>

                        <div class="stat-label">
                           Sedang Diproses
                        </div>

                        <div class="stat-value">
                           <?= $totalProcess ?>
                        </div>

                     </div>

                  </div>


                  <div class="col-xl-3 col-md-6">

                     <div class="stat-card">

                        <div class="stat-icon icon-green">
                           <i class="fa-solid fa-circle-check"></i>
                        </div>

                        <div class="stat-label">
                           Selesai
                        </div>

                        <div class="stat-value">
                           <?= $totalDone ?>
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
                           Cari Dispensing
                        </label>

                        <div class="input-group">

                           <span class="input-group-text bg-white">
                              <i class="fa-solid fa-search text-muted"></i>
                           </span>

                           <input
                              type="text"
                              id="searchDispensing"
                              class="form-control"
                              placeholder="No. dispensing, RM, atau nama pasien...">

                        </div>

                     </div>


                     <div class="col-lg-2">

                        <label class="form-label">
                           Status
                        </label>

                        <select
                           id="filterStatus"
                           class="form-select">

                           <option value="">
                              Semua Status
                           </option>

                           <option value="Menunggu">
                              Menunggu
                           </option>

                           <option value="Diproses">
                              Diproses
                           </option>

                           <option value="Selesai">
                              Selesai
                           </option>

                        </select>

                     </div>


                     <div class="col-lg-2">

                        <label class="form-label">
                           Prioritas
                        </label>

                        <select
                           id="filterPriority"
                           class="form-select">

                           <option value="">
                              Semua Prioritas
                           </option>

                           <option value="Normal">
                              Normal
                           </option>

                           <option value="Prioritas">
                              Prioritas
                           </option>

                        </select>

                     </div>


                     <div class="col-lg-2">

                        <label class="form-label">
                           Poli
                        </label>

                        <select
                           id="filterPoli"
                           class="form-select">

                           <option value="">
                              Semua Poli
                           </option>

                           <option>
                              Poli Umum
                           </option>

                           <option>
                              Poli Gigi
                           </option>

                           <option>
                              Poli KIA
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
               <!-- TABLE -->
               <!-- ========================= -->

               <div class="card">

                  <div class="card-header">

                     <div class="d-flex justify-content-between align-items-center">

                        <div>

                           <h6 class="card-title">
                              Antrian Dispensing
                           </h6>

                           <div
                              class="text-muted mt-1"
                              style="font-size:10px;">

                              Daftar resep yang perlu diverifikasi dan disiapkan

                           </div>

                        </div>

                        <span
                           class="badge bg-light text-secondary border"
                           id="totalDisplay">

                           <?= $totalDispensing ?> dispensing

                        </span>

                     </div>

                  </div>


                  <div class="table-responsive">

                     <table class="table">

                        <thead>

                           <tr>

                              <th>
                                 No. Dispensing
                              </th>

                              <th>
                                 Pasien
                              </th>

                              <th>
                                 Dokter / Poli
                              </th>

                              <th>
                                 Obat
                              </th>

                              <th>
                                 Prioritas
                              </th>

                              <th>
                                 Waktu
                              </th>

                              <th>
                                 Status
                              </th>

                              <th class="text-end">
                                 Aksi
                              </th>

                           </tr>

                        </thead>

                        <tbody id="dispensingTable">

                           <?php foreach ($dispensing as $row): ?>

                              <?php

                              $statusClass = 'status-waiting';
                              $statusIcon = 'fa-hourglass-half';

                              if ($row['status'] === 'Diproses') {
                                 $statusClass = 'status-process';
                                 $statusIcon = 'fa-spinner';
                              }

                              if ($row['status'] === 'Selesai') {
                                 $statusClass = 'status-done';
                                 $statusIcon = 'fa-check';
                              }

                              $priorityClass =
                                 $row['priority'] === 'Prioritas'
                                 ? 'priority-high'
                                 : 'priority-normal';

                              ?>

                              <tr
                                 data-search="<?= strtolower(
                                                   $row['dispensing_no'] . ' ' .
                                                      $row['request_no'] . ' ' .
                                                      $row['rm'] . ' ' .
                                                      $row['patient']
                                                ) ?>"
                                 data-status="<?= $row['status'] ?>"
                                 data-priority="<?= $row['priority'] ?>"
                                 data-poli="<?= $row['poli'] ?>">

                                 <td>

                                    <div class="dispensing-number">
                                       <?= $row['dispensing_no'] ?>
                                    </div>

                                    <div class="patient-meta">
                                       <?= $row['request_no'] ?>
                                    </div>

                                 </td>


                                 <td>

                                    <div class="patient-name">
                                       <?= htmlspecialchars($row['patient']) ?>
                                    </div>

                                    <div class="patient-meta">

                                       <?= $row['rm'] ?>
                                       •
                                       <?= $row['age'] ?> tahun
                                       •
                                       <?= $row['gender'] === 'L' ? 'L' : 'P' ?>

                                    </div>

                                 </td>


                                 <td>

                                    <div
                                       style="font-size:11px;font-weight:600;color:#3c4759;">

                                       <?= htmlspecialchars($row['doctor']) ?>

                                    </div>

                                    <div class="patient-meta">
                                       <?= htmlspecialchars($row['poli']) ?>
                                    </div>

                                 </td>


                                 <td>

                                    <span class="medicine-count">

                                       <i class="fa-solid fa-pills text-primary"></i>

                                       <?= count($row['items']) ?> item

                                    </span>

                                 </td>


                                 <td>

                                    <span
                                       class="priority-badge <?= $priorityClass ?>">

                                       <?php if ($row['priority'] === 'Prioritas'): ?>

                                          <i class="fa-solid fa-bolt me-1"></i>

                                       <?php endif; ?>

                                       <?= $row['priority'] ?>

                                    </span>

                                 </td>


                                 <td>

                                    <span
                                       style="font-size:11px;font-weight:600;">

                                       <?= $row['time'] ?>

                                    </span>

                                 </td>


                                 <td>

                                    <span
                                       class="status-badge <?= $statusClass ?>">

                                       <i class="fa-solid <?= $statusIcon ?>"></i>

                                       <?= $row['status'] ?>

                                    </span>

                                 </td>


                                 <td class="text-end">

                                    <div
                                       class="d-flex justify-content-end gap-1">

                                       <button
                                          class="action-btn"
                                          title="Detail"
                                          onclick="showDispensing(<?= $row['id'] ?>)">

                                          <i class="fa-regular fa-eye"></i>

                                       </button>


                                       <?php if ($row['status'] === 'Menunggu'): ?>

                                          <button
                                             class="action-btn"
                                             title="Mulai Dispensing"
                                             onclick="startDispensing(<?= $row['id'] ?>)">

                                             <i class="fa-solid fa-play"></i>

                                          </button>

                                       <?php endif; ?>


                                       <?php if ($row['status'] === 'Diproses'): ?>

                                          <button
                                             class="action-btn"
                                             title="Selesaikan"
                                             onclick="completeDispensing(<?= $row['id'] ?>)">

                                             <i class="fa-solid fa-check"></i>

                                          </button>

                                       <?php endif; ?>

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

                     <i class="fa-solid fa-box-open d-block"></i>

                     <div
                        style="font-size:13px;font-weight:600;color:#596476;">

                        Tidak ada data dispensing

                     </div>

                     <div
                        style="font-size:11px;margin-top:4px;">

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
   <!-- MODAL DISPENSING -->
   <!-- ===================================================== -->

   <div
      class="modal fade"
      id="dispensingModal"
      tabindex="-1">

      <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">

         <div class="modal-content">

            <div class="modal-header">

               <div>

                  <h5 class="modal-title">
                     Proses Dispensing Obat
                  </h5>

                  <div
                     id="modalDispensingNo"
                     class="text-primary mt-1"
                     style="font-size:10px;font-weight:600;">
                  </div>

               </div>

               <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal">
               </button>

            </div>


            <div class="modal-body">

               <!-- ========================= -->
               <!-- PATIENT INFO -->
               <!-- ========================= -->

               <div class="row g-2 mb-3">

                  <div class="col-md-3">

                     <div class="detail-box">

                        <div class="detail-label">
                           Pasien
                        </div>

                        <div
                           class="detail-value"
                           id="modalPatient">
                        </div>

                     </div>

                  </div>


                  <div class="col-md-3">

                     <div class="detail-box">

                        <div class="detail-label">
                           No. Rekam Medis
                        </div>

                        <div
                           class="detail-value"
                           id="modalRM">
                        </div>

                     </div>

                  </div>


                  <div class="col-md-3">

                     <div class="detail-box">

                        <div class="detail-label">
                           Dokter
                        </div>

                        <div
                           class="detail-value"
                           id="modalDoctor">
                        </div>

                     </div>

                  </div>


                  <div class="col-md-3">

                     <div class="detail-box">

                        <div class="detail-label">
                           Penjamin
                        </div>

                        <div
                           class="detail-value"
                           id="modalPayer">
                        </div>

                     </div>

                  </div>

               </div>


               <!-- ========================= -->
               <!-- VERIFICATION -->
               <!-- ========================= -->

               <div class="verification-box mb-4">

                  <div
                     style="
                            font-size:12px;
                            font-weight:700;
                            color:#273244;
                            margin-bottom:10px;
                        ">

                     <i class="fa-solid fa-shield-halved text-primary me-1"></i>

                     Verifikasi Resep

                  </div>


                  <div class="row">

                     <div class="col-md-4">

                        <div class="verification-item">

                           <i class="fa-solid fa-circle-check"></i>

                           Pasien sesuai

                        </div>

                     </div>


                     <div class="col-md-4">

                        <div class="verification-item">

                           <i class="fa-solid fa-circle-check"></i>

                           Dokter sesuai

                        </div>

                     </div>


                     <div class="col-md-4">

                        <div class="verification-item">

                           <i class="fa-solid fa-circle-check"></i>

                           Resep telah diverifikasi

                        </div>

                     </div>

                  </div>

               </div>


               <!-- ========================= -->
               <!-- MEDICINE -->
               <!-- ========================= -->

               <div class="d-flex justify-content-between align-items-center mb-3">

                  <div
                     style="
                            font-size:13px;
                            font-weight:700;
                            color:#293346;
                        ">

                     <i class="fa-solid fa-pills text-primary me-1"></i>

                     Daftar Obat

                  </div>

                  <span
                     id="modalStatus"
                     class="status-badge status-waiting">
                  </span>

               </div>


               <div id="modalMedicineList">
               </div>


               <!-- ========================= -->
               <!-- NOTE -->
               <!-- ========================= -->

               <div class="note-box mt-3">

                  <div
                     style="
                            font-weight:700;
                            margin-bottom:4px;
                        ">

                     <i class="fa-solid fa-note-sticky me-1"></i>

                     Catatan Dokter

                  </div>

                  <div id="modalNote">
                  </div>

               </div>


               <!-- ========================= -->
               <!-- DISPENSING NOTE -->
               <!-- ========================= -->

               <div class="mt-4">

                  <label class="form-label">
                     Catatan Petugas Farmasi
                  </label>

                  <textarea
                     id="dispensingNote"
                     class="form-control"
                     rows="3"
                     placeholder="Masukkan catatan jika diperlukan..."></textarea>

               </div>

            </div>


            <div class="modal-footer">

               <button
                  type="button"
                  class="btn btn-light border"
                  data-bs-dismiss="modal">

                  Tutup

               </button>

               <button
                  type="button"
                  id="startButton"
                  class="btn btn-primary">

                  <i class="fa-solid fa-box-open me-1"></i>

                  Mulai Dispensing

               </button>

            </div>

         </div>

      </div>

   </div>


   <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
   </script>


   <script>
      const dispensing =
         <?= json_encode(
            $dispensing,
            JSON_UNESCAPED_UNICODE |
               JSON_UNESCAPED_SLASHES
         ); ?>;


      /* =====================================================
         FILTER
      ===================================================== */

      const searchInput =
         document.getElementById('searchDispensing');

      const statusFilter =
         document.getElementById('filterStatus');

      const priorityFilter =
         document.getElementById('filterPriority');

      const poliFilter =
         document.getElementById('filterPoli');


      function filterDispensing() {
         const keyword =
            searchInput.value.toLowerCase().trim();

         const status =
            statusFilter.value;

         const priority =
            priorityFilter.value;

         const poli =
            poliFilter.value;

         const rows =
            document.querySelectorAll('#dispensingTable tr');

         let visible = 0;

         rows.forEach(row => {
            const search =
               row.dataset.search || '';

            const rowStatus =
               row.dataset.status || '';

            const rowPriority =
               row.dataset.priority || '';

            const rowPoli =
               row.dataset.poli || '';

            const matchKeyword = !keyword ||
               search.includes(keyword);

            const matchStatus = !status ||
               rowStatus === status;

            const matchPriority = !priority ||
               rowPriority === priority;

            const matchPoli = !poli ||
               rowPoli === poli;

            const show =
               matchKeyword &&
               matchStatus &&
               matchPriority &&
               matchPoli;

            row.style.display =
               show ? '' : 'none';

            if (show) {
               visible++;
            }
         });

         document.getElementById('totalDisplay')
            .textContent =
            visible + ' dispensing';

         document.getElementById('emptyState')
            .classList.toggle(
               'd-none',
               visible !== 0
            );
      }


      searchInput.addEventListener(
         'input',
         filterDispensing
      );

      statusFilter.addEventListener(
         'change',
         filterDispensing
      );

      priorityFilter.addEventListener(
         'change',
         filterDispensing
      );

      poliFilter.addEventListener(
         'change',
         filterDispensing
      );


      /* =====================================================
         RESET
      ===================================================== */

      function resetFilter() {
         searchInput.value = '';
         statusFilter.value = '';
         priorityFilter.value = '';
         poliFilter.value = '';

         filterDispensing();
      }


      /* =====================================================
         SHOW DISPENSING
      ===================================================== */

      function showDispensing(id) {
         const row =
            dispensing.find(item => item.id === id);

         if (!row) {
            return;
         }

         document.getElementById('modalDispensingNo')
            .textContent =
            row.dispensing_no +
            ' • ' +
            row.request_no;

         document.getElementById('modalPatient')
            .textContent =
            row.patient;

         document.getElementById('modalRM')
            .textContent =
            row.rm;

         document.getElementById('modalDoctor')
            .textContent =
            row.doctor +
            ' • ' +
            row.poli;

         document.getElementById('modalPayer')
            .textContent =
            row.payer;


         /* STATUS */

         const statusElement =
            document.getElementById('modalStatus');

         let statusClass =
            'status-waiting';

         let icon =
            'fa-hourglass-half';

         if (row.status === 'Diproses') {
            statusClass = 'status-process';
            icon = 'fa-spinner';
         }

         if (row.status === 'Selesai') {
            statusClass = 'status-done';
            icon = 'fa-check';
         }

         statusElement.className =
            'status-badge ' + statusClass;

         statusElement.innerHTML =
            `<i class="fa-solid ${icon}"></i>
         ${row.status}`;


         /* MEDICINE LIST */

         const medicineList =
            document.getElementById('modalMedicineList');

         medicineList.innerHTML = '';

         row.items.forEach((item, index) => {
            const medicine =
               document.createElement('div');

            medicine.className =
               'medicine-item';

            medicine.innerHTML = `

            <div class="d-flex justify-content-between align-items-start">

                <div>

                    <div class="medicine-name">

                        ${item.medicine}

                    </div>

                    <div class="medicine-detail">

                        ${item.dosage}
                        •
                        ${item.frequency}
                        •
                        ${item.instruction}

                    </div>

                </div>

                <div class="text-end">

                    <div
                        style="
                            font-size:13px;
                            font-weight:800;
                            color:#0d6efd;
                        ">

                        ${item.requested}

                    </div>

                    <div
                        style="
                            font-size:9px;
                            color:#8993a3;
                        ">

                        ${item.unit}

                    </div>

                </div>

            </div>


            <div class="batch-box">

                <div class="row g-2 align-items-end">

                    <div class="col-md-4">

                        <label class="form-label">
                            Batch
                        </label>

                        <select class="form-select">

                            <option>
                                ${item.batch}
                            </option>

                        </select>

                    </div>


                    <div class="col-md-3">

                        <label class="form-label">
                            Expired
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            value="${item.expiry}"
                            readonly>

                    </div>


                    <div class="col-md-2">

                        <label class="form-label">
                            Stok
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            value="${item.stock} ${item.unit}"
                            readonly>

                    </div>


                    <div class="col-md-3">

                        <label class="form-label">
                            Jumlah Diserahkan
                        </label>

                        <input
                            type="number"
                            min="0"
                            max="${item.stock}"
                            class="form-control"
                            value="${item.dispensed}">

                    </div>

                </div>

            </div>

        `;

            medicineList.appendChild(medicine);
         });


         document.getElementById('modalNote')
            .textContent =
            row.note;


         /* BUTTON */

         const button =
            document.getElementById('startButton');

         if (row.status === 'Menunggu') {

            button.style.display = '';

            button.innerHTML =
               '<i class="fa-solid fa-box-open me-1"></i>' +
               ' Mulai Dispensing';

            button.onclick =
               function() {
                  startDispensing(row.id);
               };

         } else if (row.status === 'Diproses') {

            button.style.display = '';

            button.innerHTML =
               '<i class="fa-solid fa-check me-1"></i>' +
               ' Selesaikan Dispensing';

            button.onclick =
               function() {
                  completeDispensing(row.id);
               };

         } else {

            button.style.display = 'none';

         }


         const modal =
            new bootstrap.Modal(
               document.getElementById('dispensingModal')
            );

         modal.show();
      }


      /* =====================================================
         START DISPENSING
      ===================================================== */

      function startDispensing(id) {
         const row =
            dispensing.find(item => item.id === id);

         if (!row) {
            return;
         }

         const confirmed =
            confirm(
               'Mulai proses dispensing untuk:\n\n' +
               row.patient +
               '\n' +
               row.dispensing_no +
               '\n\n' +
               'Pastikan pasien, resep, obat, dosis, dan jumlah sudah sesuai.'
            );

         if (!confirmed) {
            return;
         }

         alert(
            'Dispensing berhasil dimulai.\n\n' +
            'Status akan berubah menjadi "Diproses" ketika terhubung dengan database.'
         );
      }


      /* =====================================================
         COMPLETE DISPENSING
      ===================================================== */

      function completeDispensing(id) {
         const row =
            dispensing.find(item => item.id === id);

         if (!row) {
            return;
         }

         const confirmed =
            confirm(
               'Selesaikan dispensing untuk:\n\n' +
               row.patient +
               '\n' +
               row.dispensing_no +
               '\n\n' +
               'Pastikan seluruh obat telah disiapkan dan diserahkan.'
            );

         if (!confirmed) {
            return;
         }

         alert(
            'Dispensing berhasil diselesaikan.\n\n' +
            'Pada sistem database, stok obat akan dikurangi dan transaksi dispensing dicatat.'
         );
      }
   </script>

</body>

</html>