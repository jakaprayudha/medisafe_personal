<?php

/**
 * rme.php
 * Rekam Medis Elektronik (RME)
 * Demo UI - siap dikembangkan ke database
 */

$patients = [
   [
      'id' => 1,
      'queue' => 'A-001',
      'rm' => 'RM-000128',
      'nik' => '1271012305900001',
      'name' => 'Andi Pratama',
      'gender' => 'L',
      'age' => 36,
      'poli' => 'Poli Umum',
      'doctor' => 'dr. Budi Santoso',
      'visit_type' => 'Umum',
      'payer' => 'Umum',
      'complaint' => 'Demam sejak 2 hari disertai batuk',
      'status' => 'Menunggu',
      'time' => '08:10',
   ],
   [
      'id' => 2,
      'queue' => 'A-002',
      'rm' => 'RM-000129',
      'nik' => '1271014502850002',
      'name' => 'Siti Rahma',
      'gender' => 'P',
      'age' => 41,
      'poli' => 'Poli Umum',
      'doctor' => 'dr. Budi Santoso',
      'visit_type' => 'Umum',
      'payer' => 'BPJS',
      'complaint' => 'Batuk dan pilek sejak 3 hari',
      'status' => 'Dalam Pemeriksaan',
      'time' => '08:25',
   ],
   [
      'id' => 3,
      'queue' => 'A-003',
      'rm' => 'RM-000130',
      'nik' => '1271015601800003',
      'name' => 'Muhammad Rizky',
      'gender' => 'L',
      'age' => 46,
      'poli' => 'Poli Umum',
      'doctor' => 'dr. Budi Santoso',
      'visit_type' => 'Kontrol',
      'payer' => 'BPJS',
      'complaint' => 'Kontrol tekanan darah',
      'status' => 'Selesai',
      'time' => '08:40',
   ],
   [
      'id' => 4,
      'queue' => 'B-001',
      'rm' => 'RM-000131',
      'nik' => '1271016708920004',
      'name' => 'Dewi Lestari',
      'gender' => 'P',
      'age' => 33,
      'poli' => 'Poli Gigi',
      'doctor' => 'drg. Maya Putri',
      'visit_type' => 'Umum',
      'payer' => 'Umum',
      'complaint' => 'Sakit gigi geraham kanan',
      'status' => 'Menunggu',
      'time' => '09:00',
   ],
   [
      'id' => 5,
      'queue' => 'B-002',
      'rm' => 'RM-000132',
      'nik' => '1271012211750005',
      'name' => 'Rina Wulandari',
      'gender' => 'P',
      'age' => 50,
      'poli' => 'Poli Umum',
      'doctor' => 'dr. Budi Santoso',
      'visit_type' => 'Umum',
      'payer' => 'BPJS',
      'complaint' => 'Nyeri kepala dan badan terasa lemas',
      'status' => 'Menunggu',
      'time' => '09:15',
   ],
];

$history = [
   [
      'date' => '28 Agustus 2026',
      'poli' => 'Poli Umum',
      'doctor' => 'dr. Budi Santoso',
      'diagnosis' => 'Hipertensi',
      'complaint' => 'Kontrol tekanan darah',
      'status' => 'Selesai',
   ],
   [
      'date' => '15 Juli 2026',
      'poli' => 'Poli Umum',
      'doctor' => 'dr. Budi Santoso',
      'diagnosis' => 'ISPA',
      'complaint' => 'Batuk dan pilek',
      'status' => 'Selesai',
   ],
   [
      'date' => '04 Juni 2026',
      'poli' => 'Poli Umum',
      'doctor' => 'dr. Budi Santoso',
      'diagnosis' => 'Gastritis',
      'complaint' => 'Nyeri ulu hati',
      'status' => 'Selesai',
   ],
];

$selectedPatient = $patients[1];

$today = date('d F Y');
?>

<!DOCTYPE html>
<html lang="id">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>RME - Rekam Medis Elektronik</title>

   <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet">

   <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

   <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet">

   <link rel="stylesheet" href="assets/css/style.css">

   <style>
      body {
         font-family: 'Inter', sans-serif;
         background: #f5f7fb;
      }

      .rme-wrapper {
         padding: 24px;
      }

      .page-header {
         margin-bottom: 20px;
      }

      .page-title {
         font-size: 23px;
         font-weight: 700;
         color: #172033;
         margin-bottom: 5px;
      }

      .page-subtitle {
         font-size: 13px;
         color: #7a8496;
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

      .patient-list {
         max-height: calc(100vh - 250px);
         overflow-y: auto;
      }

      .patient-item {
         padding: 15px 16px;
         border-bottom: 1px solid #edf0f4;
         cursor: pointer;
         transition: .2s;
         background: #fff;
      }

      .patient-item:hover {
         background: #f7faff;
      }

      .patient-item.active {
         background: #edf5ff;
         border-left: 3px solid #0d6efd;
      }

      .patient-avatar {
         width: 42px;
         height: 42px;
         min-width: 42px;
         border-radius: 12px;
         display: flex;
         align-items: center;
         justify-content: center;
         background: #eaf3ff;
         color: #0d6efd;
         font-weight: 700;
         font-size: 14px;
      }

      .patient-name {
         font-size: 13px;
         font-weight: 700;
         color: #1d2738;
      }

      .patient-meta {
         font-size: 11px;
         color: #8992a3;
         margin-top: 3px;
      }

      .queue-number {
         font-size: 11px;
         font-weight: 700;
         color: #0d6efd;
      }

      .status-badge {
         display: inline-flex;
         align-items: center;
         padding: 4px 8px;
         border-radius: 20px;
         font-size: 10px;
         font-weight: 600;
      }

      .status-waiting {
         background: #fff5dc;
         color: #a66a00;
      }

      .status-process {
         background: #e8f1ff;
         color: #1264d6;
      }

      .status-done {
         background: #e8f8ef;
         color: #198754;
      }

      .patient-banner {
         background: linear-gradient(135deg, #0d6efd, #3d8bfd);
         color: #fff;
         padding: 20px;
         border-radius: 14px;
         margin-bottom: 18px;
      }

      .patient-banner .avatar {
         width: 58px;
         height: 58px;
         background: rgba(255, 255, 255, .18);
         border-radius: 15px;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 20px;
         font-weight: 700;
      }

      .patient-banner h5 {
         margin: 0 0 5px;
         font-size: 18px;
         font-weight: 700;
      }

      .patient-banner .meta {
         font-size: 12px;
         opacity: .9;
      }

      .info-item {
         margin-bottom: 12px;
      }

      .info-label {
         color: #8a94a6;
         font-size: 11px;
         margin-bottom: 3px;
      }

      .info-value {
         color: #263143;
         font-size: 12px;
         font-weight: 600;
      }

      .form-label {
         font-size: 12px;
         font-weight: 600;
         color: #4c5667;
         margin-bottom: 6px;
      }

      .form-control,
      .form-select {
         font-size: 12px;
         border-radius: 9px;
         border-color: #dfe4ec;
         min-height: 40px;
      }

      textarea.form-control {
         min-height: 90px;
      }

      .form-control:focus,
      .form-select:focus {
         border-color: #86b7fe;
         box-shadow: 0 0 0 .15rem rgba(13, 110, 253, .08);
      }

      .vital-box {
         background: #f8faff;
         border: 1px solid #e8edf5;
         border-radius: 10px;
         padding: 12px;
      }

      .vital-box .form-label {
         margin-bottom: 5px;
      }

      .section-title {
         display: flex;
         align-items: center;
         gap: 8px;
         font-size: 13px;
         font-weight: 700;
         color: #1e293b;
         margin-bottom: 14px;
      }

      .section-title i {
         color: #0d6efd;
      }

      .diagnosis-row,
      .action-row,
      .medicine-row {
         border: 1px solid #e6eaf0;
         border-radius: 10px;
         padding: 12px;
         margin-bottom: 10px;
         background: #fff;
      }

      .history-item {
         border-left: 2px solid #dbe7f7;
         padding-left: 14px;
         margin-bottom: 18px;
         position: relative;
      }

      .history-item::before {
         content: '';
         position: absolute;
         left: -5px;
         top: 2px;
         width: 8px;
         height: 8px;
         background: #0d6efd;
         border-radius: 50%;
      }

      .history-date {
         font-size: 11px;
         color: #8b95a5;
         margin-bottom: 4px;
      }

      .history-diagnosis {
         font-size: 12px;
         font-weight: 700;
         color: #273244;
      }

      .history-detail {
         font-size: 11px;
         color: #7c8798;
         margin-top: 3px;
      }

      .sticky-actions {
         position: sticky;
         bottom: 0;
         background: rgba(255, 255, 255, .96);
         border-top: 1px solid #e5e9ef;
         padding: 12px 0 2px;
         z-index: 5;
      }

      .btn {
         border-radius: 9px;
         font-size: 12px;
         font-weight: 600;
      }

      .btn-sm {
         font-size: 11px;
      }

      .tab-content {
         padding-top: 18px;
      }

      .nav-tabs {
         border-bottom-color: #e5e9ef;
      }

      .nav-tabs .nav-link {
         border: 0;
         color: #7b8595;
         font-size: 12px;
         font-weight: 600;
         padding: 12px 15px;
      }

      .nav-tabs .nav-link.active {
         color: #0d6efd;
         border-bottom: 2px solid #0d6efd;
         background: transparent;
      }

      .rme-content {
         min-height: 0;
      }

      @media (max-width: 992px) {
         .patient-list {
            max-height: 400px;
         }
      }
   </style>
</head>

<body>

   <div class="app">

      <?php require 'components/sidebar.php'; ?>

      <div class="main">

         <?php require 'components/header.php'; ?>

         <div class="content">

            <div class="rme-wrapper">

               <!-- PAGE HEADER -->
               <div class="page-header d-flex justify-content-between align-items-center">
                  <div>
                     <div class="page-title">
                        Rekam Medis Elektronik
                     </div>

                     <div class="page-subtitle">
                        Pengisian dan pengelolaan rekam medis pasien
                     </div>
                  </div>

                  <div class="d-flex align-items-center gap-2">
                     <span class="badge bg-light text-secondary border px-3 py-2">
                        <i class="fa-regular fa-calendar me-1"></i>
                        <?= $today ?>
                     </span>

                     <button class="btn btn-outline-primary">
                        <i class="fa-solid fa-clock-rotate-left me-1"></i>
                        Riwayat
                     </button>
                  </div>
               </div>

               <div class="row g-3">

                  <!-- ========================= -->
                  <!-- LEFT : PATIENT LIST -->
                  <!-- ========================= -->
                  <div class="col-lg-3">

                     <div class="card">

                        <div class="card-header">

                           <div class="d-flex justify-content-between align-items-center mb-3">
                              <h6 class="card-title">
                                 <i class="fa-solid fa-users text-primary me-2"></i>
                                 Pasien Hari Ini
                              </h6>

                              <span class="badge bg-primary">
                                 <?= count($patients) ?>
                              </span>
                           </div>

                           <div class="input-group input-group-sm">

                              <span class="input-group-text bg-white">
                                 <i class="fa-solid fa-search text-muted"></i>
                              </span>

                              <input
                                 type="text"
                                 class="form-control"
                                 id="patientSearch"
                                 placeholder="Cari pasien...">

                           </div>

                        </div>

                        <div class="patient-list" id="patientList">

                           <?php foreach ($patients as $index => $patient): ?>

                              <?php
                              $initial = strtoupper(substr($patient['name'], 0, 1));

                              $statusClass = 'status-waiting';

                              if ($patient['status'] === 'Dalam Pemeriksaan') {
                                 $statusClass = 'status-process';
                              }

                              if ($patient['status'] === 'Selesai') {
                                 $statusClass = 'status-done';
                              }
                              ?>

                              <div
                                 class="patient-item <?= $index === 1 ? 'active' : '' ?>"
                                 data-id="<?= $patient['id'] ?>"
                                 data-name="<?= strtolower($patient['name']) ?>"
                                 onclick="selectPatient(<?= $patient['id'] ?>)">

                                 <div class="d-flex gap-2">

                                    <div class="patient-avatar">
                                       <?= $initial ?>
                                    </div>

                                    <div class="flex-grow-1">

                                       <div class="d-flex justify-content-between">

                                          <div class="patient-name">
                                             <?= htmlspecialchars($patient['name']) ?>
                                          </div>

                                          <div class="queue-number">
                                             <?= $patient['queue'] ?>
                                          </div>

                                       </div>

                                       <div class="patient-meta">
                                          <?= $patient['rm'] ?>
                                          •
                                          <?= $patient['age'] ?> tahun
                                          •
                                          <?= $patient['gender'] === 'L' ? 'L' : 'P' ?>
                                       </div>

                                       <div class="mt-2">

                                          <span class="status-badge <?= $statusClass ?>">
                                             <?= $patient['status'] ?>
                                          </span>

                                       </div>

                                    </div>

                                 </div>

                              </div>

                           <?php endforeach; ?>

                        </div>

                     </div>

                  </div>


                  <!-- ========================= -->
                  <!-- CENTER : RME FORM -->
                  <!-- ========================= -->
                  <div class="col-lg-6">

                     <div class="rme-content">

                        <!-- PATIENT BANNER -->
                        <div class="patient-banner">

                           <div class="d-flex align-items-center gap-3">

                              <div class="avatar" id="bannerAvatar">
                                 S
                              </div>

                              <div class="flex-grow-1">

                                 <h5 id="bannerName">
                                    <?= $selectedPatient['name'] ?>
                                 </h5>

                                 <div class="meta">

                                    <span id="bannerRM">
                                       <?= $selectedPatient['rm'] ?>
                                    </span>

                                    <span class="mx-1">•</span>

                                    <span id="bannerGender">
                                       <?= $selectedPatient['gender'] === 'L' ? 'Laki-laki' : 'Perempuan' ?>
                                    </span>

                                    <span class="mx-1">•</span>

                                    <span id="bannerAge">
                                       <?= $selectedPatient['age'] ?> tahun
                                    </span>

                                 </div>

                                 <div class="meta mt-1">

                                    <i class="fa-solid fa-hospital-user me-1"></i>

                                    <span id="bannerPoli">
                                       <?= $selectedPatient['poli'] ?>
                                    </span>

                                    &nbsp;•&nbsp;

                                    <?= $selectedPatient['doctor'] ?>

                                 </div>

                              </div>

                              <div class="text-end">

                                 <div style="font-size:10px;opacity:.8;">
                                    No. Antrian
                                 </div>

                                 <div
                                    id="bannerQueue"
                                    style="font-size:20px;font-weight:800;">
                                    <?= $selectedPatient['queue'] ?>
                                 </div>

                              </div>

                           </div>

                        </div>


                        <!-- RME TABS -->
                        <div class="card">

                           <div class="card-header p-0">

                              <ul class="nav nav-tabs px-3" id="rmeTabs">

                                 <li class="nav-item">
                                    <button
                                       class="nav-link active"
                                       data-bs-toggle="tab"
                                       data-bs-target="#pemeriksaan">
                                       <i class="fa-solid fa-stethoscope me-1"></i>
                                       Pemeriksaan
                                    </button>
                                 </li>

                                 <li class="nav-item">
                                    <button
                                       class="nav-link"
                                       data-bs-toggle="tab"
                                       data-bs-target="#diagnosis">
                                       <i class="fa-solid fa-notes-medical me-1"></i>
                                       Diagnosis
                                    </button>
                                 </li>

                                 <li class="nav-item">
                                    <button
                                       class="nav-link"
                                       data-bs-toggle="tab"
                                       data-bs-target="#tindakan">
                                       <i class="fa-solid fa-syringe me-1"></i>
                                       Tindakan
                                    </button>
                                 </li>

                                 <li class="nav-item">
                                    <button
                                       class="nav-link"
                                       data-bs-toggle="tab"
                                       data-bs-target="#resep">
                                       <i class="fa-solid fa-pills me-1"></i>
                                       Resep
                                    </button>
                                 </li>

                              </ul>

                           </div>


                           <div class="card-body">

                              <div class="tab-content">

                                 <!-- ================= -->
                                 <!-- PEMERIKSAAN -->
                                 <!-- ================= -->
                                 <div
                                    class="tab-pane fade show active"
                                    id="pemeriksaan">

                                    <div class="section-title">
                                       <i class="fa-solid fa-heart-pulse"></i>
                                       Tanda Vital
                                    </div>

                                    <div class="row g-2 mb-4">

                                       <div class="col-md-3">

                                          <div class="vital-box">

                                             <label class="form-label">
                                                Tekanan Darah
                                             </label>

                                             <div class="input-group input-group-sm">

                                                <input
                                                   type="text"
                                                   class="form-control"
                                                   placeholder="120/80">

                                                <span class="input-group-text">
                                                   mmHg
                                                </span>

                                             </div>

                                          </div>

                                       </div>

                                       <div class="col-md-3">

                                          <div class="vital-box">

                                             <label class="form-label">
                                                Nadi
                                             </label>

                                             <div class="input-group input-group-sm">

                                                <input
                                                   type="number"
                                                   class="form-control"
                                                   placeholder="80">

                                                <span class="input-group-text">
                                                   bpm
                                                </span>

                                             </div>

                                          </div>

                                       </div>

                                       <div class="col-md-3">

                                          <div class="vital-box">

                                             <label class="form-label">
                                                Suhu
                                             </label>

                                             <div class="input-group input-group-sm">

                                                <input
                                                   type="number"
                                                   step="0.1"
                                                   class="form-control"
                                                   placeholder="36.5">

                                                <span class="input-group-text">
                                                   °C
                                                </span>

                                             </div>

                                          </div>

                                       </div>

                                       <div class="col-md-3">

                                          <div class="vital-box">

                                             <label class="form-label">
                                                SpO₂
                                             </label>

                                             <div class="input-group input-group-sm">

                                                <input
                                                   type="number"
                                                   class="form-control"
                                                   placeholder="98">

                                                <span class="input-group-text">
                                                   %
                                                </span>

                                             </div>

                                          </div>

                                       </div>

                                    </div>


                                    <div class="row g-3">

                                       <div class="col-md-6">

                                          <label class="form-label">
                                             Berat Badan
                                          </label>

                                          <div class="input-group">

                                             <input
                                                type="number"
                                                class="form-control"
                                                placeholder="0">

                                             <span class="input-group-text">
                                                kg
                                             </span>

                                          </div>

                                       </div>

                                       <div class="col-md-6">

                                          <label class="form-label">
                                             Tinggi Badan
                                          </label>

                                          <div class="input-group">

                                             <input
                                                type="number"
                                                class="form-control"
                                                placeholder="0">

                                             <span class="input-group-text">
                                                cm
                                             </span>

                                          </div>

                                       </div>

                                       <div class="col-12">

                                          <label class="form-label">
                                             Keluhan Utama
                                          </label>

                                          <textarea
                                             class="form-control"
                                             id="keluhan"
                                             placeholder="Masukkan keluhan utama pasien..."><?= htmlspecialchars($selectedPatient['complaint']) ?></textarea>

                                       </div>

                                       <div class="col-12">

                                          <label class="form-label">
                                             Riwayat Penyakit Sekarang
                                          </label>

                                          <textarea
                                             class="form-control"
                                             placeholder="Anamnesis / riwayat penyakit sekarang..."></textarea>

                                       </div>

                                       <div class="col-md-6">

                                          <label class="form-label">
                                             Riwayat Penyakit Dahulu
                                          </label>

                                          <textarea
                                             class="form-control"
                                             placeholder="Riwayat penyakit dahulu..."></textarea>

                                       </div>

                                       <div class="col-md-6">

                                          <label class="form-label">
                                             Riwayat Alergi
                                          </label>

                                          <textarea
                                             class="form-control"
                                             placeholder="Obat / makanan / lainnya..."></textarea>

                                       </div>

                                    </div>


                                    <hr class="my-4">

                                    <div class="section-title">
                                       <i class="fa-solid fa-user-doctor"></i>
                                       Pemeriksaan Fisik
                                    </div>

                                    <div class="row g-3">

                                       <div class="col-md-6">

                                          <label class="form-label">
                                             Keadaan Umum
                                          </label>

                                          <select class="form-select">

                                             <option>Baik</option>
                                             <option>Sedang</option>
                                             <option>Buruk</option>

                                          </select>

                                       </div>

                                       <div class="col-md-6">

                                          <label class="form-label">
                                             Kesadaran
                                          </label>

                                          <select class="form-select">

                                             <option>Compos Mentis</option>
                                             <option>Somnolen</option>
                                             <option>Sopor</option>
                                             <option>Koma</option>

                                          </select>

                                       </div>

                                       <div class="col-12">

                                          <label class="form-label">
                                             Pemeriksaan Fisik
                                          </label>

                                          <textarea
                                             class="form-control"
                                             style="min-height:120px;"
                                             placeholder="Kepala, mata, THT, thorax, abdomen, ekstremitas, dan pemeriksaan lainnya..."></textarea>

                                       </div>

                                    </div>

                                 </div>


                                 <!-- ================= -->
                                 <!-- DIAGNOSIS -->
                                 <!-- ================= -->
                                 <div
                                    class="tab-pane fade"
                                    id="diagnosis">

                                    <div class="section-title">
                                       <i class="fa-solid fa-notes-medical"></i>
                                       Diagnosis Pasien
                                    </div>

                                    <div id="diagnosisContainer">

                                       <div class="diagnosis-row">

                                          <div class="row g-2 align-items-end">

                                             <div class="col-md-3">

                                                <label class="form-label">
                                                   Jenis
                                                </label>

                                                <select class="form-select">

                                                   <option>Utama</option>
                                                   <option>Sekunder</option>

                                                </select>

                                             </div>

                                             <div class="col-md-7">

                                                <label class="form-label">
                                                   Diagnosis / ICD-10
                                                </label>

                                                <input
                                                   type="text"
                                                   class="form-control"
                                                   placeholder="Cari diagnosis atau kode ICD-10...">

                                             </div>

                                             <div class="col-md-2">

                                                <button
                                                   type="button"
                                                   class="btn btn-outline-danger w-100"
                                                   onclick="removeRow(this)">

                                                   <i class="fa-solid fa-trash"></i>

                                                </button>

                                             </div>

                                          </div>

                                       </div>

                                    </div>

                                    <button
                                       type="button"
                                       class="btn btn-outline-primary btn-sm"
                                       onclick="addDiagnosis()">

                                       <i class="fa-solid fa-plus me-1"></i>
                                       Tambah Diagnosis

                                    </button>

                                    <hr class="my-4">

                                    <div class="section-title">
                                       <i class="fa-solid fa-comment-medical"></i>
                                       Assessment
                                    </div>

                                    <textarea
                                       class="form-control"
                                       style="min-height:120px;"
                                       placeholder="Assessment dokter berdasarkan anamnesis dan pemeriksaan..."></textarea>

                                    <div class="mt-3">

                                       <label class="form-label">
                                          Rencana / Plan
                                       </label>

                                       <textarea
                                          class="form-control"
                                          style="min-height:120px;"
                                          placeholder="Rencana terapi, edukasi, kontrol, pemeriksaan lanjutan, dll..."></textarea>

                                    </div>

                                 </div>


                                 <!-- ================= -->
                                 <!-- TINDAKAN -->
                                 <!-- ================= -->
                                 <div
                                    class="tab-pane fade"
                                    id="tindakan">

                                    <div class="section-title">
                                       <i class="fa-solid fa-syringe"></i>
                                       Tindakan Medis
                                    </div>

                                    <div id="actionContainer">

                                       <div class="action-row">

                                          <div class="row g-2 align-items-end">

                                             <div class="col-md-8">

                                                <label class="form-label">
                                                   Tindakan
                                                </label>

                                                <select class="form-select">

                                                   <option value="">
                                                      Pilih tindakan
                                                   </option>

                                                   <option>
                                                      Pemeriksaan Umum
                                                   </option>

                                                   <option>
                                                      Injeksi
                                                   </option>

                                                   <option>
                                                      Perawatan Luka
                                                   </option>

                                                   <option>
                                                      Nebulisasi
                                                   </option>

                                                   <option>
                                                      Ekstraksi Gigi
                                                   </option>

                                                </select>

                                             </div>

                                             <div class="col-md-2">

                                                <label class="form-label">
                                                   Qty
                                                </label>

                                                <input
                                                   type="number"
                                                   class="form-control"
                                                   value="1">

                                             </div>

                                             <div class="col-md-2">

                                                <button
                                                   type="button"
                                                   class="btn btn-outline-danger w-100"
                                                   onclick="removeRow(this)">

                                                   <i class="fa-solid fa-trash"></i>

                                                </button>

                                             </div>

                                          </div>

                                       </div>

                                    </div>

                                    <button
                                       type="button"
                                       class="btn btn-outline-primary btn-sm"
                                       onclick="addAction()">

                                       <i class="fa-solid fa-plus me-1"></i>
                                       Tambah Tindakan

                                    </button>

                                    <hr class="my-4">

                                    <div class="section-title">
                                       <i class="fa-solid fa-vials"></i>
                                       Pemeriksaan Penunjang
                                    </div>

                                    <div class="row g-3">

                                       <div class="col-md-4">

                                          <label class="form-label">
                                             Jenis
                                          </label>

                                          <select class="form-select">

                                             <option>Laboratorium</option>
                                             <option>Radiologi</option>
                                             <option>Lainnya</option>

                                          </select>

                                       </div>

                                       <div class="col-md-8">

                                          <label class="form-label">
                                             Permintaan Pemeriksaan
                                          </label>

                                          <input
                                             type="text"
                                             class="form-control"
                                             placeholder="Contoh: Darah lengkap, GDS...">

                                       </div>

                                       <div class="col-12">

                                          <label class="form-label">
                                             Catatan Pemeriksaan
                                          </label>

                                          <textarea
                                             class="form-control"
                                             placeholder="Catatan untuk unit laboratorium/radiologi..."></textarea>

                                       </div>

                                    </div>

                                 </div>


                                 <!-- ================= -->
                                 <!-- RESEP -->
                                 <!-- ================= -->
                                 <div
                                    class="tab-pane fade"
                                    id="resep">

                                    <div class="section-title">
                                       <i class="fa-solid fa-pills"></i>
                                       Resep Obat
                                    </div>

                                    <div id="medicineContainer">

                                       <div class="medicine-row">

                                          <div class="row g-2 align-items-end">

                                             <div class="col-md-5">

                                                <label class="form-label">
                                                   Obat
                                                </label>

                                                <select class="form-select">

                                                   <option value="">
                                                      Pilih obat
                                                   </option>

                                                   <option>
                                                      Paracetamol 500 mg
                                                   </option>

                                                   <option>
                                                      Amoxicillin 500 mg
                                                   </option>

                                                   <option>
                                                      Cetirizine 10 mg
                                                   </option>

                                                   <option>
                                                      Omeprazole 20 mg
                                                   </option>

                                                </select>

                                             </div>

                                             <div class="col-md-2">

                                                <label class="form-label">
                                                   Jumlah
                                                </label>

                                                <input
                                                   type="number"
                                                   class="form-control"
                                                   value="10">

                                             </div>

                                             <div class="col-md-2">

                                                <label class="form-label">
                                                   Dosis
                                                </label>

                                                <input
                                                   type="text"
                                                   class="form-control"
                                                   placeholder="1">

                                             </div>

                                             <div class="col-md-2">

                                                <label class="form-label">
                                                   Frekuensi
                                                </label>

                                                <select class="form-select">

                                                   <option>1 x sehari</option>
                                                   <option>2 x sehari</option>
                                                   <option>3 x sehari</option>
                                                   <option>4 x sehari</option>

                                                </select>

                                             </div>

                                             <div class="col-md-1">

                                                <button
                                                   type="button"
                                                   class="btn btn-outline-danger w-100"
                                                   onclick="removeRow(this)">

                                                   <i class="fa-solid fa-trash"></i>

                                                </button>

                                             </div>

                                             <div class="col-12">

                                                <label class="form-label">
                                                   Aturan Pakai
                                                </label>

                                                <input
                                                   type="text"
                                                   class="form-control"
                                                   placeholder="Contoh: Sesudah makan">

                                             </div>

                                          </div>

                                       </div>

                                    </div>

                                    <button
                                       type="button"
                                       class="btn btn-outline-primary btn-sm"
                                       onclick="addMedicine()">

                                       <i class="fa-solid fa-plus me-1"></i>
                                       Tambah Obat

                                    </button>

                                    <hr class="my-4">

                                    <div class="section-title">
                                       <i class="fa-solid fa-file-medical"></i>
                                       Catatan Tambahan
                                    </div>

                                    <textarea
                                       class="form-control"
                                       style="min-height:120px;"
                                       placeholder="Catatan resep atau instruksi tambahan..."></textarea>

                                 </div>

                              </div>

                           </div>

                        </div>


                        <!-- ACTION -->
                        <div class="sticky-actions">

                           <div class="d-flex justify-content-between align-items-center">

                              <div class="text-muted" style="font-size:11px;">

                                 <i class="fa-solid fa-circle-info me-1"></i>

                                 Pastikan seluruh data pemeriksaan telah sesuai.

                              </div>

                              <div class="d-flex gap-2">

                                 <button
                                    type="button"
                                    class="btn btn-outline-secondary"
                                    onclick="saveDraft()">

                                    <i class="fa-regular fa-floppy-disk me-1"></i>
                                    Simpan Draft

                                 </button>

                                 <button
                                    type="button"
                                    class="btn btn-primary"
                                    onclick="finalizeRME()">

                                    <i class="fa-solid fa-check me-1"></i>
                                    Finalisasi RME

                                 </button>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>


                  <!-- ========================= -->
                  <!-- RIGHT : PATIENT INFO -->
                  <!-- ========================= -->
                  <div class="col-lg-3">

                     <!-- INFO PASIEN -->
                     <div class="card mb-3">

                        <div class="card-header">

                           <h6 class="card-title">
                              <i class="fa-solid fa-id-card text-primary me-2"></i>
                              Informasi Pasien
                           </h6>

                        </div>

                        <div class="card-body">

                           <div class="info-item">

                              <div class="info-label">
                                 No. Rekam Medis
                              </div>

                              <div class="info-value" id="infoRM">
                                 <?= $selectedPatient['rm'] ?>
                              </div>

                           </div>

                           <div class="info-item">

                              <div class="info-label">
                                 NIK
                              </div>

                              <div class="info-value" id="infoNIK">
                                 <?= $selectedPatient['nik'] ?>
                              </div>

                           </div>

                           <div class="row">

                              <div class="col-6">

                                 <div class="info-item">

                                    <div class="info-label">
                                       Jenis Kelamin
                                    </div>

                                    <div class="info-value" id="infoGender">
                                       <?= $selectedPatient['gender'] === 'L' ? 'Laki-laki' : 'Perempuan' ?>
                                    </div>

                                 </div>

                              </div>

                              <div class="col-6">

                                 <div class="info-item">

                                    <div class="info-label">
                                       Umur
                                    </div>

                                    <div class="info-value" id="infoAge">
                                       <?= $selectedPatient['age'] ?> tahun
                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="info-item">

                              <div class="info-label">
                                 Jenis Kunjungan
                              </div>

                              <div class="info-value" id="infoVisit">
                                 <?= $selectedPatient['visit_type'] ?>
                              </div>

                           </div>

                           <div class="info-item">

                              <div class="info-label">
                                 Penjamin
                              </div>

                              <div class="info-value">

                                 <span class="badge bg-light text-primary border">
                                    <?= $selectedPatient['payer'] ?>
                                 </span>

                              </div>

                           </div>

                        </div>

                     </div>


                     <!-- RIWAYAT -->
                     <div class="card">

                        <div class="card-header">

                           <div class="d-flex justify-content-between align-items-center">

                              <h6 class="card-title">
                                 <i class="fa-solid fa-clock-rotate-left text-primary me-2"></i>
                                 Riwayat Kunjungan
                              </h6>

                              <span class="badge bg-light text-secondary border">
                                 <?= count($history) ?>
                              </span>

                           </div>

                        </div>

                        <div class="card-body">

                           <?php foreach ($history as $item): ?>

                              <div class="history-item">

                                 <div class="history-date">
                                    <?= $item['date'] ?>
                                 </div>

                                 <div class="history-diagnosis">
                                    <?= htmlspecialchars($item['diagnosis']) ?>
                                 </div>

                                 <div class="history-detail">

                                    <?= htmlspecialchars($item['complaint']) ?>

                                 </div>

                                 <div class="history-detail mt-1">

                                    <i class="fa-solid fa-user-doctor me-1"></i>

                                    <?= htmlspecialchars($item['doctor']) ?>

                                 </div>

                              </div>

                           <?php endforeach; ?>

                           <button
                              type="button"
                              class="btn btn-outline-primary btn-sm w-100">

                              Lihat Semua Riwayat

                           </button>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

         <?php require 'components/footer.php'; ?>

      </div>

   </div>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

   <script>
      const patients = <?= json_encode($patients, JSON_UNESCAPED_UNICODE); ?>;


      /* ==========================
         SELECT PATIENT
      ========================== */

      function selectPatient(id) {
         const patient = patients.find(p => p.id === id);

         if (!patient) return;

         document.querySelectorAll('.patient-item')
            .forEach(item => item.classList.remove('active'));

         const selectedItem = document.querySelector(
            `.patient-item[data-id="${id}"]`
         );

         if (selectedItem) {
            selectedItem.classList.add('active');
         }

         document.getElementById('bannerAvatar').textContent =
            patient.name.charAt(0).toUpperCase();

         document.getElementById('bannerName').textContent =
            patient.name;

         document.getElementById('bannerRM').textContent =
            patient.rm;

         document.getElementById('bannerGender').textContent =
            patient.gender === 'L' ? 'Laki-laki' : 'Perempuan';

         document.getElementById('bannerAge').textContent =
            patient.age + ' tahun';

         document.getElementById('bannerPoli').textContent =
            patient.poli;

         document.getElementById('bannerQueue').textContent =
            patient.queue;

         document.getElementById('infoRM').textContent =
            patient.rm;

         document.getElementById('infoNIK').textContent =
            patient.nik;

         document.getElementById('infoGender').textContent =
            patient.gender === 'L' ? 'Laki-laki' : 'Perempuan';

         document.getElementById('infoAge').textContent =
            patient.age + ' tahun';

         document.getElementById('infoVisit').textContent =
            patient.visit_type;

         document.getElementById('keluhan').value =
            patient.complaint;
      }


      /* ==========================
         SEARCH PATIENT
      ========================== */

      document.getElementById('patientSearch')
         .addEventListener('input', function() {
            const keyword = this.value.toLowerCase().trim();

            document.querySelectorAll('.patient-item')
               .forEach(item => {
                  const name = item.dataset.name;

                  item.style.display =
                     name.includes(keyword) ?
                     '' :
                     'none';
               });
         });


      /* ==========================
         REMOVE ROW
      ========================== */

      function removeRow(button) {
         const row = button.closest(
            '.diagnosis-row, .action-row, .medicine-row'
         );

         if (row) {
            row.remove();
         }
      }


      /* ==========================
         ADD DIAGNOSIS
      ========================== */

      function addDiagnosis() {
         const container =
            document.getElementById('diagnosisContainer');

         const row = document.createElement('div');

         row.className = 'diagnosis-row';

         row.innerHTML = `
        <div class="row g-2 align-items-end">

            <div class="col-md-3">

                <label class="form-label">
                    Jenis
                </label>

                <select class="form-select">
                    <option>Utama</option>
                    <option>Sekunder</option>
                </select>

            </div>

            <div class="col-md-7">

                <label class="form-label">
                    Diagnosis / ICD-10
                </label>

                <input
                    type="text"
                    class="form-control"
                    placeholder="Cari diagnosis atau kode ICD-10...">

            </div>

            <div class="col-md-2">

                <button
                    type="button"
                    class="btn btn-outline-danger w-100"
                    onclick="removeRow(this)">

                    <i class="fa-solid fa-trash"></i>

                </button>

            </div>

        </div>
    `;

         container.appendChild(row);
      }


      /* ==========================
         ADD ACTION
      ========================== */

      function addAction() {
         const container =
            document.getElementById('actionContainer');

         const row = document.createElement('div');

         row.className = 'action-row';

         row.innerHTML = `
        <div class="row g-2 align-items-end">

            <div class="col-md-8">

                <label class="form-label">
                    Tindakan
                </label>

                <select class="form-select">

                    <option value="">
                        Pilih tindakan
                    </option>

                    <option>
                        Pemeriksaan Umum
                    </option>

                    <option>
                        Injeksi
                    </option>

                    <option>
                        Perawatan Luka
                    </option>

                    <option>
                        Nebulisasi
                    </option>

                    <option>
                        Ekstraksi Gigi
                    </option>

                </select>

            </div>

            <div class="col-md-2">

                <label class="form-label">
                    Qty
                </label>

                <input
                    type="number"
                    class="form-control"
                    value="1">

            </div>

            <div class="col-md-2">

                <button
                    type="button"
                    class="btn btn-outline-danger w-100"
                    onclick="removeRow(this)">

                    <i class="fa-solid fa-trash"></i>

                </button>

            </div>

        </div>
    `;

         container.appendChild(row);
      }


      /* ==========================
         ADD MEDICINE
      ========================== */

      function addMedicine() {
         const container =
            document.getElementById('medicineContainer');

         const row = document.createElement('div');

         row.className = 'medicine-row';

         row.innerHTML = `
        <div class="row g-2 align-items-end">

            <div class="col-md-5">

                <label class="form-label">
                    Obat
                </label>

                <select class="form-select">

                    <option value="">
                        Pilih obat
                    </option>

                    <option>
                        Paracetamol 500 mg
                    </option>

                    <option>
                        Amoxicillin 500 mg
                    </option>

                    <option>
                        Cetirizine 10 mg
                    </option>

                    <option>
                        Omeprazole 20 mg
                    </option>

                </select>

            </div>

            <div class="col-md-2">

                <label class="form-label">
                    Jumlah
                </label>

                <input
                    type="number"
                    class="form-control"
                    value="10">

            </div>

            <div class="col-md-2">

                <label class="form-label">
                    Dosis
                </label>

                <input
                    type="text"
                    class="form-control"
                    placeholder="1">

            </div>

            <div class="col-md-2">

                <label class="form-label">
                    Frekuensi
                </label>

                <select class="form-select">

                    <option>1 x sehari</option>
                    <option>2 x sehari</option>
                    <option>3 x sehari</option>
                    <option>4 x sehari</option>

                </select>

            </div>

            <div class="col-md-1">

                <button
                    type="button"
                    class="btn btn-outline-danger w-100"
                    onclick="removeRow(this)">

                    <i class="fa-solid fa-trash"></i>

                </button>

            </div>

            <div class="col-12">

                <label class="form-label">
                    Aturan Pakai
                </label>

                <input
                    type="text"
                    class="form-control"
                    placeholder="Contoh: Sesudah makan">

            </div>

        </div>
    `;

         container.appendChild(row);
      }


      /* ==========================
         SAVE DRAFT
      ========================== */

      function saveDraft() {
         alert(
            'Draft RME berhasil disimpan.\n\n' +
            'Pada tahap berikutnya fungsi ini dapat ' +
            'dihubungkan ke database.'
         );
      }


      /* ==========================
         FINALIZE RME
      ========================== */

      function finalizeRME() {
         const confirmation = confirm(
            'Apakah Anda yakin ingin memfinalisasi RME pasien ini?\n\n' +
            'Setelah difinalisasi, data RME sebaiknya tidak dapat ' +
            'diubah tanpa mekanisme koreksi/amendment.'
         );

         if (!confirmation) {
            return;
         }

         alert(
            'RME berhasil difinalisasi.'
         );
      }
   </script>

</body>

</html>