<?php

/**
 * report-rme.php
 * Laporan Rekam Medis Elektronik (RME)
 */
?>
<!DOCTYPE html>
<html lang="id">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Laporan RME - Klinik Management System</title>

   <!-- Bootstrap -->
   <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet">

   <!-- Font Awesome -->
   <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

   <!-- Google Font -->
   <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet">

   <!-- Chart.js -->
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

   <style>
      * {
         box-sizing: border-box;
      }

      html,
      body {
         width: 100%;
         height: 100%;
         margin: 0;
         overflow: hidden;
         font-family: 'Inter', sans-serif;
         background: #f5f7fb;
         color: #1e293b;
      }

      .app {
         width: 100%;
         height: 100vh;
         overflow: hidden;
      }

      /* =====================================================
           SIDEBAR
        ===================================================== */

      .sidebar {
         position: fixed;
         top: 0;
         left: 0;
         bottom: 0;

         width: 270px;
         height: 100vh;

         background: #ffffff;

         border-right: 1px solid #e5e7eb;

         z-index: 1000;

         overflow-y: auto;
      }

      .sidebar-brand {
         height: 72px;

         display: flex;
         align-items: center;

         gap: 12px;

         padding: 0 22px;

         border-bottom: 1px solid #eef0f3;
      }

      .brand-icon {
         width: 40px;
         height: 40px;

         border-radius: 12px;

         display: flex;
         align-items: center;
         justify-content: center;

         background: #2563eb;

         color: #ffffff;

         font-size: 19px;
      }

      .brand-title {
         font-size: 15px;

         font-weight: 800;

         color: #172033;
      }

      .brand-subtitle {
         font-size: 10px;

         color: #94a3b8;

         margin-top: 1px;
      }

      .sidebar-menu {
         padding: 18px 13px 30px;
      }

      .menu-section {
         margin-bottom: 20px;
      }

      .menu-label {
         padding: 0 11px 8px;

         font-size: 10px;

         font-weight: 800;

         color: #94a3b8;

         letter-spacing: .08em;
      }

      .menu-item {
         height: 43px;

         display: flex;
         align-items: center;

         gap: 12px;

         padding: 0 13px;

         margin-bottom: 4px;

         border-radius: 10px;

         color: #64748b;

         text-decoration: none;

         font-size: 13px;

         font-weight: 500;

         transition: .2s;
      }

      .menu-item i {
         width: 19px;

         text-align: center;

         font-size: 15px;
      }

      .menu-item:hover {
         background: #f1f5f9;

         color: #2563eb;
      }

      .menu-item.active {
         background: #eff6ff;

         color: #2563eb;

         font-weight: 700;
      }

      /* =====================================================
           MAIN
        ===================================================== */

      .main {
         width: calc(100% - 270px);

         height: 100vh;

         margin-left: 270px;

         display: flex;
         flex-direction: column;

         overflow: hidden;
      }

      /* =====================================================
           HEADER
        ===================================================== */

      .header {
         height: 72px;
         min-height: 72px;

         flex: 0 0 72px;

         background: #ffffff;

         border-bottom: 1px solid #e5e7eb;

         display: flex;

         align-items: center;

         justify-content: space-between;

         padding: 0 28px;
      }

      .page-title {
         font-size: 18px;

         font-weight: 800;

         color: #172033;

         margin: 0;
      }

      .page-subtitle {
         font-size: 12px;

         color: #94a3b8;

         margin-top: 3px;
      }

      .header-right {
         display: flex;

         align-items: center;

         gap: 15px;
      }

      .header-date {
         font-size: 12px;

         color: #64748b;
      }

      .user-profile {
         display: flex;

         align-items: center;

         gap: 10px;

         padding-left: 15px;

         border-left: 1px solid #e5e7eb;
      }

      .user-avatar {
         width: 37px;
         height: 37px;

         border-radius: 50%;

         background: #dbeafe;

         color: #2563eb;

         display: flex;

         align-items: center;

         justify-content: center;

         font-weight: 800;

         font-size: 13px;
      }

      .user-name {
         font-size: 12px;

         font-weight: 700;

         color: #334155;
      }

      .user-role {
         font-size: 10px;

         color: #94a3b8;
      }

      /* =====================================================
           CONTENT
        ===================================================== */

      .content {
         flex: 1;

         min-height: 0;

         overflow-y: auto;

         overflow-x: hidden;

         padding: 25px 28px 30px;
      }

      /* =====================================================
           FILTER
        ===================================================== */

      .filter-card {
         background: #ffffff;

         border: 1px solid #e8ebf0;

         border-radius: 14px;

         padding: 20px;

         margin-bottom: 20px;
      }

      .filter-title {
         font-size: 14px;

         font-weight: 800;

         margin-bottom: 17px;

         color: #172033;
      }

      .form-label {
         font-size: 11px;

         font-weight: 700;

         color: #64748b;

         margin-bottom: 6px;
      }

      .form-control,
      .form-select {
         height: 40px;

         border-color: #e2e8f0;

         border-radius: 8px;

         font-size: 12px;

         color: #334155;

         box-shadow: none !important;
      }

      .form-control:focus,
      .form-select:focus {
         border-color: #93c5fd;
      }

      .btn-filter {
         height: 40px;

         border-radius: 8px;

         font-size: 12px;

         font-weight: 700;

         padding: 0 18px;
      }

      /* =====================================================
           STAT CARD
        ===================================================== */

      .stat-card {
         background: #ffffff;

         border: 1px solid #e8ebf0;

         border-radius: 14px;

         padding: 18px;

         height: 100%;
      }

      .stat-top {
         display: flex;

         align-items: flex-start;

         justify-content: space-between;
      }

      .stat-label {
         font-size: 11px;

         color: #94a3b8;

         font-weight: 600;
      }

      .stat-value {
         font-size: 25px;

         font-weight: 800;

         color: #172033;

         margin-top: 5px;
      }

      .stat-icon {
         width: 43px;
         height: 43px;

         border-radius: 11px;

         display: flex;

         align-items: center;

         justify-content: center;

         font-size: 17px;
      }

      .icon-blue {
         background: #eff6ff;

         color: #2563eb;
      }

      .icon-green {
         background: #ecfdf5;

         color: #059669;
      }

      .icon-orange {
         background: #fff7ed;

         color: #ea580c;
      }

      .icon-purple {
         background: #f5f3ff;

         color: #7c3aed;
      }

      .stat-note {
         font-size: 10px;

         color: #94a3b8;

         margin-top: 8px;
      }

      /* =====================================================
           CARD
        ===================================================== */

      .card-box {
         background: #ffffff;

         border: 1px solid #e8ebf0;

         border-radius: 14px;

         overflow: hidden;
      }

      .card-header-custom {
         min-height: 62px;

         padding: 15px 20px;

         display: flex;

         align-items: center;

         justify-content: space-between;

         border-bottom: 1px solid #eef0f3;
      }

      .card-title {
         font-size: 13px;

         font-weight: 800;

         color: #172033;

         margin: 0;
      }

      .card-subtitle {
         font-size: 10px;

         color: #94a3b8;

         margin-top: 3px;
      }

      .btn-outline {
         height: 35px;

         padding: 0 13px;

         border: 1px solid #e2e8f0;

         border-radius: 8px;

         background: #ffffff;

         color: #475569;

         font-size: 11px;

         font-weight: 700;
      }

      .btn-outline:hover {
         background: #f8fafc;
      }

      /* =====================================================
           CHART
        ===================================================== */

      .chart-wrap {
         padding: 20px;

         height: 300px;
      }

      /* =====================================================
           COMPLETENESS
        ===================================================== */

      .completion-box {
         padding: 20px;
      }

      .completion-item {
         margin-bottom: 20px;
      }

      .completion-item:last-child {
         margin-bottom: 0;
      }

      .completion-header {
         display: flex;

         justify-content: space-between;

         margin-bottom: 7px;
      }

      .completion-label {
         font-size: 11px;

         font-weight: 700;

         color: #475569;
      }

      .completion-value {
         font-size: 11px;

         font-weight: 800;

         color: #2563eb;
      }

      .progress {
         height: 7px;

         background: #f1f5f9;

         border-radius: 20px;
      }

      .progress-bar {
         border-radius: 20px;
      }

      /* =====================================================
           TABLE
        ===================================================== */

      .table-responsive {
         overflow-x: auto;
      }

      .table {
         margin: 0;

         white-space: nowrap;
      }

      .table thead th {
         background: #f8fafc;

         border-bottom: 1px solid #e5e7eb;

         color: #64748b;

         font-size: 10px;

         font-weight: 800;

         padding: 12px 14px;

         text-transform: uppercase;

         letter-spacing: .02em;
      }

      .table tbody td {
         border-bottom: 1px solid #f1f5f9;

         padding: 13px 14px;

         font-size: 11px;

         color: #475569;

         vertical-align: middle;
      }

      .table tbody tr:hover {
         background: #fafcff;
      }

      .patient-name {
         color: #1e293b;

         font-weight: 700;
      }

      .rm-number {
         color: #2563eb;

         font-weight: 700;
      }

      .rme-number {
         color: #334155;

         font-weight: 700;
      }

      .badge-status {
         display: inline-flex;

         align-items: center;

         padding: 5px 9px;

         border-radius: 20px;

         font-size: 9px;

         font-weight: 800;
      }

      .badge-success {
         background: #ecfdf5;

         color: #059669;
      }

      .badge-warning {
         background: #fffbeb;

         color: #d97706;
      }

      .badge-info {
         background: #eff6ff;

         color: #2563eb;
      }

      .badge-danger {
         background: #fef2f2;

         color: #dc2626;
      }

      .badge-secondary {
         background: #f1f5f9;

         color: #64748b;
      }

      .completion-badge {
         font-size: 10px;

         font-weight: 800;
      }

      .action-btn {
         width: 30px;
         height: 30px;

         border: 1px solid #e2e8f0;

         background: #ffffff;

         color: #64748b;

         border-radius: 7px;

         font-size: 11px;
      }

      .action-btn:hover {
         background: #f8fafc;

         color: #2563eb;
      }

      /* =====================================================
           PAGINATION
        ===================================================== */

      .pagination-wrap {
         padding: 14px 20px;

         display: flex;

         align-items: center;

         justify-content: space-between;
      }

      .pagination-info {
         font-size: 10px;

         color: #94a3b8;
      }

      .pagination .page-link {
         font-size: 10px;

         color: #64748b;

         border-color: #e2e8f0;
      }

      .pagination .active .page-link {
         background: #2563eb;

         border-color: #2563eb;

         color: #ffffff;
      }

      /* =====================================================
           MODAL
        ===================================================== */

      .modal-content {
         border: 0;

         border-radius: 14px;

         overflow: hidden;
      }

      .modal-header {
         border-bottom: 1px solid #eef0f3;

         padding: 18px 20px;
      }

      .modal-title {
         font-size: 14px;

         font-weight: 800;
      }

      .modal-body {
         padding: 20px;
      }

      .detail-item {
         margin-bottom: 15px;
      }

      .detail-label {
         font-size: 10px;

         color: #94a3b8;

         margin-bottom: 4px;
      }

      .detail-value {
         font-size: 12px;

         color: #334155;

         font-weight: 700;
      }

      .rme-section {
         background: #f8fafc;

         border: 1px solid #eef2f7;

         border-radius: 10px;

         padding: 14px;

         margin-bottom: 12px;
      }

      .rme-section-title {
         font-size: 11px;

         font-weight: 800;

         color: #334155;

         margin-bottom: 10px;
      }

      .check-item {
         display: flex;

         align-items: center;

         gap: 8px;

         font-size: 11px;

         color: #64748b;

         margin-bottom: 7px;
      }

      .check-item i {
         font-size: 11px;
      }

      /* =====================================================
           FOOTER
        ===================================================== */

      .footer {
         height: 55px;

         min-height: 55px;

         flex: 0 0 55px;

         background: #ffffff;

         border-top: 1px solid #e5e7eb;

         display: flex;

         align-items: center;

         justify-content: space-between;

         padding: 0 28px;

         font-size: 10px;

         color: #94a3b8;
      }

      /* =====================================================
           PRINT
        ===================================================== */

      @media print {

         html,
         body {
            overflow: visible;

            background: #ffffff;
         }

         .sidebar,
         .header,
         .footer,
         .filter-card,
         .no-print,
         .action-column {
            display: none !important;
         }

         .main {
            width: 100%;

            margin: 0;

            height: auto;
         }

         .content {
            overflow: visible;

            padding: 0;
         }

         .card-box,
         .stat-card {
            border: 1px solid #ddd;
         }
      }

      @media (max-width: 1100px) {

         .sidebar {
            width: 230px;
         }

         .main {
            width: calc(100% - 230px);

            margin-left: 230px;
         }

      }
   </style>
</head>


<body>

   <div class="app">


      <!-- =====================================================
         SIDEBAR
    ===================================================== -->

      <aside class="sidebar">


         <div class="sidebar-brand">

            <div class="brand-icon">
               <i class="fa-solid fa-house-medical"></i>
            </div>

            <div>

               <div class="brand-title">
                  Klinik System
               </div>

               <div class="brand-subtitle">
                  Management System
               </div>

            </div>

         </div>


         <div class="sidebar-menu">


            <!-- UTAMA -->

            <div class="menu-section">

               <div class="menu-label">
                  UTAMA
               </div>

               <a
                  href="dashboard"
                  class="menu-item">

                  <i class="fa-solid fa-chart-pie"></i>

                  <span>
                     Dashboard
                  </span>

               </a>

            </div>


            <!-- MASTER DATA -->

            <div class="menu-section">

               <div class="menu-label">
                  MASTER DATA
               </div>

               <a
                  href="master-clinic"
                  class="menu-item">
                  <i class="fa-solid fa-hospital"></i>
                  <span>Data Klinik</span>
               </a>

               <a
                  href="master-doctor"
                  class="menu-item">
                  <i class="fa-solid fa-user-doctor"></i>
                  <span>Data Dokter</span>
               </a>

               <a
                  href="master-medical-staff"
                  class="menu-item">
                  <i class="fa-solid fa-user-nurse"></i>
                  <span>Tenaga Medis</span>
               </a>

               <a
                  href="master-poli"
                  class="menu-item">
                  <i class="fa-solid fa-stethoscope"></i>
                  <span>Poli / Layanan</span>
               </a>

               <a
                  href="master-medicine"
                  class="menu-item">
                  <i class="fa-solid fa-pills"></i>
                  <span>Data Obat</span>
               </a>

               <a
                  href="master-action"
                  class="menu-item">
                  <i class="fa-solid fa-syringe"></i>
                  <span>Data Tindakan</span>
               </a>

               <a
                  href="master-tariff"
                  class="menu-item">
                  <i class="fa-solid fa-tags"></i>
                  <span>Tarif</span>
               </a>

            </div>


            <!-- PELAYANAN -->

            <div class="menu-section">

               <div class="menu-label">
                  PELAYANAN
               </div>

               <a
                  href="registration"
                  class="menu-item">
                  <i class="fa-solid fa-user-plus"></i>
                  <span>Registrasi Pasien</span>
               </a>

               <a
                  href="patients"
                  class="menu-item">
                  <i class="fa-solid fa-users"></i>
                  <span>Data Pasien</span>
               </a>

               <a
                  href="rme"
                  class="menu-item">
                  <i class="fa-solid fa-file-medical"></i>
                  <span>Pengisian RME</span>
               </a>

            </div>


            <!-- FARMASI -->

            <div class="menu-section">

               <div class="menu-label">
                  FARMASI
               </div>

               <a
                  href="pharmacy-request"
                  class="menu-item">
                  <i class="fa-solid fa-file-prescription"></i>
                  <span>Permintaan Obat</span>
               </a>

               <a
                  href="pharmacy-dispensing"
                  class="menu-item">
                  <i class="fa-solid fa-mortar-pestle"></i>
                  <span>Dispensing</span>
               </a>

               <a
                  href="pharmacy-stock"
                  class="menu-item">
                  <i class="fa-solid fa-boxes-stacked"></i>
                  <span>Stok Obat</span>
               </a>

            </div>


            <!-- KASIR -->

            <div class="menu-section">

               <div class="menu-label">
                  KASIR
               </div>

               <a
                  href="cashier"
                  class="menu-item">
                  <i class="fa-solid fa-cash-register"></i>
                  <span>Transaksi</span>
               </a>

               <a
                  href="payment"
                  class="menu-item">
                  <i class="fa-solid fa-money-check-dollar"></i>
                  <span>Pembayaran</span>
               </a>

               <a
                  href="payment-history"
                  class="menu-item">
                  <i class="fa-solid fa-clock-rotate-left"></i>
                  <span>Riwayat Pembayaran</span>
               </a>

            </div>


            <!-- LAPORAN -->

            <div class="menu-section">

               <div class="menu-label">
                  LAPORAN
               </div>

               <a
                  href="report-registration"
                  class="menu-item">
                  <i class="fa-solid fa-clipboard-list"></i>
                  <span>Laporan Registrasi</span>
               </a>

               <a
                  href="report-visit"
                  class="menu-item">
                  <i class="fa-solid fa-chart-line"></i>
                  <span>Laporan Kunjungan</span>
               </a>

               <a
                  href="report-rme"
                  class="menu-item active">
                  <i class="fa-solid fa-file-medical"></i>
                  <span>Laporan RME</span>
               </a>

               <a
                  href="report-pharmacy"
                  class="menu-item">
                  <i class="fa-solid fa-pills"></i>
                  <span>Laporan Farmasi</span>
               </a>

               <a
                  href="report-cashier"
                  class="menu-item">
                  <i class="fa-solid fa-cash-register"></i>
                  <span>Laporan Kasir</span>
               </a>

               <a
                  href="report-income"
                  class="menu-item">
                  <i class="fa-solid fa-money-bill-trend-up"></i>
                  <span>Laporan Pendapatan</span>
               </a>

            </div>


            <!-- LOGOUT -->

            <div class="menu-section">

               <a
                  href="logout"
                  class="menu-item">

                  <i class="fa-solid fa-right-from-bracket"></i>

                  <span>
                     Logout
                  </span>

               </a>

            </div>

         </div>

      </aside>


      <!-- =====================================================
         MAIN
    ===================================================== -->

      <main class="main">


         <!-- HEADER -->

         <header class="header">

            <div>

               <h1 class="page-title">
                  Laporan RME
               </h1>

               <div class="page-subtitle">
                  Monitoring aktivitas dan kelengkapan Rekam Medis Elektronik
               </div>

            </div>


            <div class="header-right">

               <div class="header-date">

                  <i class="fa-regular fa-calendar me-1"></i>

                  <?= date('d F Y'); ?>

               </div>


               <div class="user-profile">

                  <div class="user-avatar">
                     AD
                  </div>

                  <div>

                     <div class="user-name">
                        Administrator
                     </div>

                     <div class="user-role">
                        Administrator
                     </div>

                  </div>

               </div>

            </div>

         </header>


         <!-- =================================================
             CONTENT
        ================================================== -->

         <div class="content">


            <!-- FILTER -->

            <div class="filter-card">


               <div class="filter-title">

                  <i class="fa-solid fa-filter me-2 text-primary"></i>

                  Filter Laporan RME

               </div>


               <div class="row g-3 align-items-end">


                  <!-- DATE START -->

                  <div class="col-md-2">

                     <label class="form-label">
                        Tanggal Mulai
                     </label>

                     <input
                        type="date"
                        id="dateStart"
                        class="form-control"
                        value="<?= date('Y-m-01'); ?>">

                  </div>


                  <!-- DATE END -->

                  <div class="col-md-2">

                     <label class="form-label">
                        Tanggal Akhir
                     </label>

                     <input
                        type="date"
                        id="dateEnd"
                        class="form-control"
                        value="<?= date('Y-m-d'); ?>">

                  </div>


                  <!-- POLI -->

                  <div class="col-md-2">

                     <label class="form-label">
                        Poli / Layanan
                     </label>

                     <select
                        id="filterPoli"
                        class="form-select">

                        <option value="">
                           Semua Poli
                        </option>

                        <option value="Umum">
                           Poli Umum
                        </option>

                        <option value="Gigi">
                           Poli Gigi
                        </option>

                        <option value="KIA">
                           KIA
                        </option>

                     </select>

                  </div>


                  <!-- DOKTER -->

                  <div class="col-md-2">

                     <label class="form-label">
                        Dokter
                     </label>

                     <select
                        id="filterDoctor"
                        class="form-select">

                        <option value="">
                           Semua Dokter
                        </option>

                        <option value="dr. Andi">
                           dr. Andi Pratama
                        </option>

                        <option value="dr. Sinta">
                           dr. Sinta Maharani
                        </option>

                        <option value="dr. Budi">
                           dr. Budi Santoso
                        </option>

                     </select>

                  </div>


                  <!-- STATUS -->

                  <div class="col-md-2">

                     <label class="form-label">
                        Status RME
                     </label>

                     <select
                        id="filterStatus"
                        class="form-select">

                        <option value="">
                           Semua Status
                        </option>

                        <option value="Selesai">
                           Selesai
                        </option>

                        <option value="Draft">
                           Draft
                        </option>

                        <option value="Belum Lengkap">
                           Belum Lengkap
                        </option>

                     </select>

                  </div>


                  <!-- BUTTON -->

                  <div class="col-md-2">

                     <button
                        type="button"
                        class="btn btn-primary btn-filter w-100"
                        onclick="applyFilter()">

                        <i class="fa-solid fa-filter me-1"></i>

                        Tampilkan

                     </button>

                  </div>

               </div>

            </div>


            <!-- =================================================
                 STATISTICS
            ================================================== -->

            <div class="row g-3 mb-4">


               <!-- TOTAL RME -->

               <div class="col-xl-3 col-md-6">

                  <div class="stat-card">

                     <div class="stat-top">

                        <div>

                           <div class="stat-label">
                              Total RME
                           </div>

                           <div
                              class="stat-value"
                              id="statTotal">
                              1.142
                           </div>

                        </div>


                        <div class="stat-icon icon-blue">

                           <i class="fa-solid fa-file-medical"></i>

                        </div>

                     </div>


                     <div class="stat-note">
                        Total rekam medis pada periode terpilih
                     </div>

                  </div>

               </div>


               <!-- SELESAI -->

               <div class="col-xl-3 col-md-6">

                  <div class="stat-card">

                     <div class="stat-top">

                        <div>

                           <div class="stat-label">
                              RME Selesai
                           </div>

                           <div
                              class="stat-value"
                              id="statCompleted">
                              1.021
                           </div>

                        </div>


                        <div class="stat-icon icon-green">

                           <i class="fa-solid fa-circle-check"></i>

                        </div>

                     </div>


                     <div class="stat-note">
                        RME telah selesai dan difinalisasi
                     </div>

                  </div>

               </div>


               <!-- BELUM LENGKAP -->

               <div class="col-xl-3 col-md-6">

                  <div class="stat-card">

                     <div class="stat-top">

                        <div>

                           <div class="stat-label">
                              Belum Lengkap
                           </div>

                           <div
                              class="stat-value"
                              id="statIncomplete">
                              86
                           </div>

                        </div>


                        <div class="stat-icon icon-orange">

                           <i class="fa-solid fa-triangle-exclamation"></i>

                        </div>

                     </div>


                     <div class="stat-note">
                        RME masih membutuhkan pengisian
                     </div>

                  </div>

               </div>


               <!-- KELENGKAPAN -->

               <div class="col-xl-3 col-md-6">

                  <div class="stat-card">

                     <div class="stat-top">

                        <div>

                           <div class="stat-label">
                              Kelengkapan RME
                           </div>

                           <div
                              class="stat-value"
                              id="statCompletion">
                              89,4%
                           </div>

                        </div>


                        <div class="stat-icon icon-purple">

                           <i class="fa-solid fa-clipboard-check"></i>

                        </div>

                     </div>


                     <div class="stat-note">
                        Persentase RME lengkap
                     </div>

                  </div>

               </div>

            </div>


            <!-- =================================================
                 CHART ROW
            ================================================== -->

            <div class="row g-3 mb-4">


               <!-- TREND -->

               <div class="col-xl-8">

                  <div class="card-box">


                     <div class="card-header-custom">

                        <div>

                           <div class="card-title">
                              Trend Pengisian RME
                           </div>

                           <div class="card-subtitle">
                              Aktivitas RME berdasarkan tanggal
                           </div>

                        </div>


                        <button
                           type="button"
                           class="btn-outline"
                           onclick="downloadTrendChart()">

                           <i class="fa-solid fa-download me-1"></i>

                           Export

                        </button>

                     </div>


                     <div class="chart-wrap">

                        <canvas
                           id="rmeTrendChart"></canvas>

                     </div>

                  </div>

               </div>


               <!-- STATUS -->

               <div class="col-xl-4">

                  <div class="card-box">


                     <div class="card-header-custom">

                        <div>

                           <div class="card-title">
                              Status RME
                           </div>

                           <div class="card-subtitle">
                              Distribusi status pengisian
                           </div>

                        </div>

                     </div>


                     <div class="chart-wrap">

                        <canvas
                           id="rmeStatusChart"></canvas>

                     </div>

                  </div>

               </div>

            </div>


            <!-- =================================================
                 COMPLETENESS + DOCTOR
            ================================================== -->

            <div class="row g-3 mb-4">


               <!-- KELENGKAPAN -->

               <div class="col-xl-5">

                  <div class="card-box">

                     <div class="card-header-custom">

                        <div>

                           <div class="card-title">
                              Kelengkapan RME
                           </div>

                           <div class="card-subtitle">
                              Kelengkapan komponen rekam medis
                           </div>

                        </div>

                     </div>


                     <div class="completion-box">


                        <!-- ANAMNESIS -->

                        <div class="completion-item">

                           <div class="completion-header">

                              <div class="completion-label">
                                 Anamnesis
                              </div>

                              <div class="completion-value">
                                 96%
                              </div>

                           </div>

                           <div class="progress">

                              <div
                                 class="progress-bar bg-success"
                                 style="width:96%"></div>

                           </div>

                        </div>


                        <!-- VITAL -->

                        <div class="completion-item">

                           <div class="completion-header">

                              <div class="completion-label">
                                 Tanda Vital
                              </div>

                              <div class="completion-value">
                                 94%
                              </div>

                           </div>

                           <div class="progress">

                              <div
                                 class="progress-bar bg-success"
                                 style="width:94%"></div>

                           </div>

                        </div>


                        <!-- PEMERIKSAAN -->

                        <div class="completion-item">

                           <div class="completion-header">

                              <div class="completion-label">
                                 Pemeriksaan Fisik
                              </div>

                              <div class="completion-value">
                                 91%
                              </div>

                           </div>

                           <div class="progress">

                              <div
                                 class="progress-bar bg-info"
                                 style="width:91%"></div>

                           </div>

                        </div>


                        <!-- DIAGNOSIS -->

                        <div class="completion-item">

                           <div class="completion-header">

                              <div class="completion-label">
                                 Diagnosis
                              </div>

                              <div class="completion-value">
                                 98%
                              </div>

                           </div>

                           <div class="progress">

                              <div
                                 class="progress-bar bg-success"
                                 style="width:98%"></div>

                           </div>

                        </div>


                        <!-- TINDAKAN -->

                        <div class="completion-item">

                           <div class="completion-header">

                              <div class="completion-label">
                                 Tindakan
                              </div>

                              <div class="completion-value">
                                 87%
                              </div>

                           </div>

                           <div class="progress">

                              <div
                                 class="progress-bar bg-warning"
                                 style="width:87%"></div>

                           </div>

                        </div>


                        <!-- PLAN -->

                        <div class="completion-item">

                           <div class="completion-header">

                              <div class="completion-label">
                                 Assessment & Plan
                              </div>

                              <div class="completion-value">
                                 89%
                              </div>

                           </div>

                           <div class="progress">

                              <div
                                 class="progress-bar bg-warning"
                                 style="width:89%"></div>

                           </div>

                        </div>


                     </div>

                  </div>

               </div>


               <!-- DOKTER -->

               <div class="col-xl-7">

                  <div class="card-box">


                     <div class="card-header-custom">

                        <div>

                           <div class="card-title">
                              Aktivitas RME per Dokter
                           </div>

                           <div class="card-subtitle">
                              Jumlah RME yang dibuat oleh dokter
                           </div>

                        </div>

                     </div>


                     <div class="chart-wrap">

                        <canvas
                           id="doctorRmeChart"></canvas>

                     </div>

                  </div>

               </div>

            </div>


            <!-- =================================================
                 TABLE
            ================================================== -->

            <div class="card-box">


               <div class="card-header-custom">

                  <div>

                     <div class="card-title">
                        Detail Rekam Medis Elektronik
                     </div>

                     <div class="card-subtitle">
                        Daftar RME berdasarkan periode dan filter
                     </div>

                  </div>


                  <div class="d-flex gap-2 no-print">


                     <button
                        type="button"
                        class="btn-outline"
                        onclick="exportCSV()">

                        <i class="fa-solid fa-file-csv me-1"></i>

                        Excel

                     </button>


                     <button
                        type="button"
                        class="btn-outline"
                        onclick="window.print()">

                        <i class="fa-solid fa-print me-1"></i>

                        Cetak

                     </button>

                  </div>

               </div>


               <div class="table-responsive">


                  <table
                     class="table"
                     id="rmeTable">


                     <thead>

                        <tr>

                           <th>
                              No
                           </th>

                           <th>
                              No. RME
                           </th>

                           <th>
                              No. RM
                           </th>

                           <th>
                              Nama Pasien
                           </th>

                           <th>
                              Tanggal
                           </th>

                           <th>
                              Poli
                           </th>

                           <th>
                              Dokter
                           </th>

                           <th>
                              Diagnosis
                           </th>

                           <th>
                              Kelengkapan
                           </th>

                           <th>
                              Status
                           </th>

                           <th class="action-column">
                              Aksi
                           </th>

                        </tr>

                     </thead>


                     <tbody>


                        <!-- ROW 1 -->

                        <tr
                           data-poli="Umum"
                           data-doctor="dr. Andi"
                           data-status="Selesai">

                           <td>
                              1
                           </td>

                           <td class="rme-number">
                              RME-260904-001
                           </td>

                           <td class="rm-number">
                              RM-000128
                           </td>

                           <td class="patient-name">
                              Ahmad Fauzi
                           </td>

                           <td>
                              04 Sep 2026
                           </td>

                           <td>
                              Poli Umum
                           </td>

                           <td>
                              dr. Andi Pratama
                           </td>

                           <td>
                              ISPA
                           </td>

                           <td>

                              <span
                                 class="completion-badge text-success">
                                 100%
                              </span>

                           </td>

                           <td>

                              <span
                                 class="badge-status badge-success">
                                 Selesai
                              </span>

                           </td>

                           <td class="action-column">

                              <button
                                 class="action-btn"
                                 onclick="showDetail(this)"
                                 title="Detail RME">

                                 <i class="fa-solid fa-eye"></i>

                              </button>

                           </td>

                        </tr>


                        <!-- ROW 2 -->

                        <tr
                           data-poli="Gigi"
                           data-doctor="dr. Sinta"
                           data-status="Selesai">

                           <td>
                              2
                           </td>

                           <td class="rme-number">
                              RME-260904-002
                           </td>

                           <td class="rm-number">
                              RM-000214
                           </td>

                           <td class="patient-name">
                              Siti Rahma
                           </td>

                           <td>
                              04 Sep 2026
                           </td>

                           <td>
                              Poli Gigi
                           </td>

                           <td>
                              dr. Sinta Maharani
                           </td>

                           <td>
                              Karies Gigi
                           </td>

                           <td>

                              <span
                                 class="completion-badge text-success">
                                 98%
                              </span>

                           </td>

                           <td>

                              <span
                                 class="badge-status badge-success">
                                 Selesai
                              </span>

                           </td>

                           <td class="action-column">

                              <button
                                 class="action-btn"
                                 onclick="showDetail(this)">

                                 <i class="fa-solid fa-eye"></i>

                              </button>

                           </td>

                        </tr>


                        <!-- ROW 3 -->

                        <tr
                           data-poli="KIA"
                           data-doctor="dr. Sinta"
                           data-status="Draft">

                           <td>
                              3
                           </td>

                           <td class="rme-number">
                              RME-260904-003
                           </td>

                           <td class="rm-number">
                              RM-000326
                           </td>

                           <td class="patient-name">
                              Dewi Lestari
                           </td>

                           <td>
                              04 Sep 2026
                           </td>

                           <td>
                              KIA
                           </td>

                           <td>
                              dr. Sinta Maharani
                           </td>

                           <td>
                              Kehamilan Normal
                           </td>

                           <td>

                              <span
                                 class="completion-badge text-warning">
                                 76%
                              </span>

                           </td>

                           <td>

                              <span
                                 class="badge-status badge-warning">
                                 Draft
                              </span>

                           </td>

                           <td class="action-column">

                              <button
                                 class="action-btn"
                                 onclick="showDetail(this)">

                                 <i class="fa-solid fa-eye"></i>

                              </button>

                           </td>

                        </tr>


                        <!-- ROW 4 -->

                        <tr
                           data-poli="Umum"
                           data-doctor="dr. Budi"
                           data-status="Selesai">

                           <td>
                              4
                           </td>

                           <td class="rme-number">
                              RME-260904-004
                           </td>

                           <td class="rm-number">
                              RM-000421
                           </td>

                           <td class="patient-name">
                              Budi Hartono
                           </td>

                           <td>
                              04 Sep 2026
                           </td>

                           <td>
                              Poli Umum
                           </td>

                           <td>
                              dr. Budi Santoso
                           </td>

                           <td>
                              Hipertensi
                           </td>

                           <td>

                              <span
                                 class="completion-badge text-success">
                                 96%
                              </span>

                           </td>

                           <td>

                              <span
                                 class="badge-status badge-success">
                                 Selesai
                              </span>

                           </td>

                           <td class="action-column">

                              <button
                                 class="action-btn"
                                 onclick="showDetail(this)">

                                 <i class="fa-solid fa-eye"></i>

                              </button>

                           </td>

                        </tr>


                        <!-- ROW 5 -->

                        <tr
                           data-poli="Umum"
                           data-doctor="dr. Andi"
                           data-status="Belum Lengkap">

                           <td>
                              5
                           </td>

                           <td class="rme-number">
                              RME-260904-005
                           </td>

                           <td class="rm-number">
                              RM-000517
                           </td>

                           <td class="patient-name">
                              Rina Wulandari
                           </td>

                           <td>
                              04 Sep 2026
                           </td>

                           <td>
                              Poli Umum
                           </td>

                           <td>
                              dr. Andi Pratama
                           </td>

                           <td>
                              Gastritis
                           </td>

                           <td>

                              <span
                                 class="completion-badge text-danger">
                                 61%
                              </span>

                           </td>

                           <td>

                              <span
                                 class="badge-status badge-danger">
                                 Belum Lengkap
                              </span>

                           </td>

                           <td class="action-column">

                              <button
                                 class="action-btn"
                                 onclick="showDetail(this)">

                                 <i class="fa-solid fa-eye"></i>

                              </button>

                           </td>

                        </tr>


                     </tbody>

                  </table>

               </div>


               <!-- PAGINATION -->

               <div class="pagination-wrap">


                  <div class="pagination-info">

                     Menampilkan 1 - 5 dari
                     1.142 RME

                  </div>


                  <nav>

                     <ul class="pagination pagination-sm mb-0">


                        <li class="page-item disabled">

                           <a
                              class="page-link"
                              href="#">

                              <i class="fa-solid fa-chevron-left"></i>

                           </a>

                        </li>


                        <li class="page-item active">

                           <a
                              class="page-link"
                              href="#">
                              1
                           </a>

                        </li>


                        <li class="page-item">

                           <a
                              class="page-link"
                              href="#">
                              2
                           </a>

                        </li>


                        <li class="page-item">

                           <a
                              class="page-link"
                              href="#">
                              3
                           </a>

                        </li>


                        <li class="page-item">

                           <a
                              class="page-link"
                              href="#">
                              ...
                           </a>

                        </li>


                        <li class="page-item">

                           <a
                              class="page-link"
                              href="#">

                              <i class="fa-solid fa-chevron-right"></i>

                           </a>

                        </li>

                     </ul>

                  </nav>

               </div>

            </div>

         </div>


         <!-- =================================================
             FOOTER
        ================================================== -->

         <footer class="footer">

            <div>
               © <?= date('Y'); ?> Klinik Management System
            </div>

            <div>
               Laporan RME
            </div>

         </footer>

      </main>

   </div>


   <!-- =========================================================
     DETAIL MODAL
========================================================= -->

   <div
      class="modal fade"
      id="detailModal"
      tabindex="-1">

      <div class="modal-dialog modal-lg modal-dialog-centered">

         <div class="modal-content">


            <div class="modal-header">

               <div>

                  <h5 class="modal-title">
                     Detail Rekam Medis Elektronik
                  </h5>

                  <div
                     class="text-muted"
                     style="font-size:10px;">
                     Informasi aktivitas dan kelengkapan RME
                  </div>

               </div>


               <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"></button>

            </div>


            <div class="modal-body">


               <div class="row">


                  <div class="col-md-6">


                     <div class="detail-item">

                        <div class="detail-label">
                           No. RME
                        </div>

                        <div
                           class="detail-value"
                           id="detailRME">
                           -
                        </div>

                     </div>


                     <div class="detail-item">

                        <div class="detail-label">
                           No. Rekam Medis
                        </div>

                        <div
                           class="detail-value"
                           id="detailRM">
                           -
                        </div>

                     </div>


                     <div class="detail-item">

                        <div class="detail-label">
                           Nama Pasien
                        </div>

                        <div
                           class="detail-value"
                           id="detailPatient">
                           -
                        </div>

                     </div>


                     <div class="detail-item">

                        <div class="detail-label">
                           Tanggal
                        </div>

                        <div
                           class="detail-value"
                           id="detailDate">
                           -
                        </div>

                     </div>

                  </div>


                  <div class="col-md-6">


                     <div class="detail-item">

                        <div class="detail-label">
                           Poli
                        </div>

                        <div
                           class="detail-value"
                           id="detailPoli">
                           -
                        </div>

                     </div>


                     <div class="detail-item">

                        <div class="detail-label">
                           Dokter
                        </div>

                        <div
                           class="detail-value"
                           id="detailDoctor">
                           -
                        </div>

                     </div>


                     <div class="detail-item">

                        <div class="detail-label">
                           Diagnosis
                        </div>

                        <div
                           class="detail-value"
                           id="detailDiagnosis">
                           -
                        </div>

                     </div>


                     <div class="detail-item">

                        <div class="detail-label">
                           Kelengkapan
                        </div>

                        <div
                           class="detail-value"
                           id="detailCompletion">
                           -
                        </div>

                     </div>


                     <div class="detail-item">

                        <div class="detail-label">
                           Status
                        </div>

                        <div
                           class="detail-value"
                           id="detailStatus">
                           -
                        </div>

                     </div>

                  </div>

               </div>


               <!-- KOMPONEN RME -->

               <div class="rme-section">

                  <div class="rme-section-title">

                     <i class="fa-solid fa-clipboard-check me-1"></i>

                     Kelengkapan Komponen RME

                  </div>


                  <div class="row">


                     <div class="col-md-6">

                        <div class="check-item">

                           <i class="fa-solid fa-circle-check text-success"></i>

                           Anamnesis

                        </div>


                        <div class="check-item">

                           <i class="fa-solid fa-circle-check text-success"></i>

                           Tanda Vital

                        </div>


                        <div class="check-item">

                           <i class="fa-solid fa-circle-check text-success"></i>

                           Pemeriksaan Fisik

                        </div>

                     </div>


                     <div class="col-md-6">

                        <div class="check-item">

                           <i class="fa-solid fa-circle-check text-success"></i>

                           Diagnosis

                        </div>


                        <div class="check-item">

                           <i class="fa-solid fa-circle-check text-success"></i>

                           Tindakan

                        </div>


                        <div class="check-item">

                           <i class="fa-solid fa-circle-check text-success"></i>

                           Assessment & Plan

                        </div>

                     </div>

                  </div>

               </div>

            </div>


            <div class="modal-footer">

               <button
                  type="button"
                  class="btn btn-light btn-sm"
                  data-bs-dismiss="modal">
                  Tutup
               </button>


               <button
                  type="button"
                  class="btn btn-primary btn-sm"
                  onclick="window.print()">

                  <i class="fa-solid fa-print me-1"></i>

                  Cetak

               </button>

            </div>

         </div>

      </div>

   </div>


   <!-- Bootstrap -->

   <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


   <script>
      /* =========================================================
   TREND RME
========================================================= */

      const trendCtx =
         document
         .getElementById('rmeTrendChart')
         .getContext('2d');


      new Chart(trendCtx, {

         type: 'line',

         data: {

            labels: [
               '29 Agu',
               '30 Agu',
               '31 Agu',
               '01 Sep',
               '02 Sep',
               '03 Sep',
               '04 Sep'
            ],

            datasets: [

               {

                  label: 'RME Selesai',

                  data: [
                     39,
                     44,
                     48,
                     42,
                     51,
                     55,
                     47
                  ],

                  borderWidth: 2,

                  tension: .35,

                  fill: false,

                  pointRadius: 3

               },

               {

                  label: 'RME Draft',

                  data: [
                     5,
                     7,
                     6,
                     8,
                     5,
                     6,
                     4
                  ],

                  borderWidth: 2,

                  tension: .35,

                  fill: false,

                  pointRadius: 3

               }

            ]

         },

         options: {

            responsive: true,

            maintainAspectRatio: false,

            plugins: {

               legend: {

                  position: 'top',

                  labels: {

                     boxWidth: 10,

                     font: {
                        size: 10
                     }

                  }

               }

            },

            scales: {

               y: {

                  beginAtZero: true,

                  grid: {
                     color: '#f1f5f9'
                  },

                  ticks: {

                     font: {
                        size: 10
                     },

                     color: '#94a3b8'

                  }

               },

               x: {

                  grid: {
                     display: false
                  },

                  ticks: {

                     font: {
                        size: 10
                     },

                     color: '#94a3b8'

                  }

               }

            }

         }

      });


      /* =========================================================
         STATUS RME
      ========================================================= */

      const statusCtx =
         document
         .getElementById('rmeStatusChart')
         .getContext('2d');


      new Chart(statusCtx, {

         type: 'doughnut',

         data: {

            labels: [
               'Selesai',
               'Draft',
               'Belum Lengkap'
            ],

            datasets: [{

               data: [
                  1021,
                  35,
                  86
               ],

               borderWidth: 2

            }]

         },

         options: {

            responsive: true,

            maintainAspectRatio: false,

            cutout: '65%',

            plugins: {

               legend: {

                  position: 'bottom',

                  labels: {

                     boxWidth: 10,

                     padding: 12,

                     font: {
                        size: 10
                     }

                  }

               }

            }

         }

      });


      /* =========================================================
         DOKTER RME
      ========================================================= */

      const doctorCtx =
         document
         .getElementById('doctorRmeChart')
         .getContext('2d');


      new Chart(doctorCtx, {

         type: 'bar',

         data: {

            labels: [

               'dr. Andi Pratama',

               'dr. Sinta Maharani',

               'dr. Budi Santoso'

            ],

            datasets: [{

               label: 'RME',

               data: [
                  426,
                  388,
                  328
               ],

               borderWidth: 1,

               borderRadius: 6

            }]

         },

         options: {

            responsive: true,

            maintainAspectRatio: false,

            plugins: {

               legend: {
                  display: false
               }

            },

            scales: {

               y: {

                  beginAtZero: true,

                  grid: {
                     color: '#f1f5f9'
                  },

                  ticks: {

                     font: {
                        size: 10
                     },

                     color: '#94a3b8'

                  }

               },

               x: {

                  grid: {
                     display: false
                  },

                  ticks: {

                     font: {
                        size: 10
                     },

                     color: '#94a3b8'

                  }

               }

            }

         }

      });


      /* =========================================================
         FILTER
      ========================================================= */

      function applyFilter() {
         const poli =
            document
            .getElementById('filterPoli')
            .value;


         const doctor =
            document
            .getElementById('filterDoctor')
            .value;


         const status =
            document
            .getElementById('filterStatus')
            .value;


         const rows =
            document.querySelectorAll(
               '#rmeTable tbody tr'
            );


         let visible = 0;


         rows.forEach(row => {


            const rowPoli =
               row.dataset.poli;


            const rowDoctor =
               row.dataset.doctor;


            const rowStatus =
               row.dataset.status;


            let show = true;


            if (
               poli &&
               rowPoli !== poli
            ) {

               show = false;

            }


            if (
               doctor &&
               rowDoctor !== doctor
            ) {

               show = false;

            }


            if (
               status &&
               rowStatus !== status
            ) {

               show = false;

            }


            row.style.display =
               show ? '' : 'none';


            if (show) {

               visible++;

            }

         });


         console.log(
            'Filter RME:', {
               poli,
               doctor,
               status,
               visible
            }
         );
      }


      /* =========================================================
         DETAIL RME
      ========================================================= */

      function showDetail(button) {

         const row =
            button.closest('tr');


         const cells =
            row.querySelectorAll('td');


         document
            .getElementById('detailRME')
            .textContent =
            cells[1]
            .textContent
            .trim();


         document
            .getElementById('detailRM')
            .textContent =
            cells[2]
            .textContent
            .trim();


         document
            .getElementById('detailPatient')
            .textContent =
            cells[3]
            .textContent
            .trim();


         document
            .getElementById('detailDate')
            .textContent =
            cells[4]
            .textContent
            .trim();


         document
            .getElementById('detailPoli')
            .textContent =
            cells[5]
            .textContent
            .trim();


         document
            .getElementById('detailDoctor')
            .textContent =
            cells[6]
            .textContent
            .trim();


         document
            .getElementById('detailDiagnosis')
            .textContent =
            cells[7]
            .textContent
            .trim();


         document
            .getElementById('detailCompletion')
            .textContent =
            cells[8]
            .textContent
            .trim();


         document
            .getElementById('detailStatus')
            .textContent =
            cells[9]
            .textContent
            .trim();


         const modal =
            new bootstrap.Modal(
               document.getElementById(
                  'detailModal'
               )
            );


         modal.show();
      }


      /* =========================================================
         EXPORT CSV
      ========================================================= */

      function exportCSV() {

         const table =
            document.getElementById(
               'rmeTable'
            );


         let csv = [];


         const rows =
            table.querySelectorAll('tr');


         rows.forEach(row => {


            if (
               row.style.display === 'none'
            ) {

               return;

            }


            const cols =
               row.querySelectorAll(
                  'th, td'
               );


            let rowData = [];


            cols.forEach(
               (col, index) => {


                  /*
                   * Skip aksi
                   */

                  if (
                     index ===
                     cols.length - 1
                  ) {

                     return;

                  }


                  let value =
                     col.innerText
                     .replace(/\n/g, ' ')
                     .replace(/"/g, '""')
                     .trim();


                  rowData.push(
                     '"' + value + '"'
                  );

               }
            );


            csv.push(
               rowData.join(',')
            );

         });


         const blob =
            new Blob(
               [csv.join('\n')], {
                  type: 'text/csv;charset=utf-8;'
               }
            );


         const url =
            URL.createObjectURL(blob);


         const link =
            document.createElement('a');


         link.href = url;


         link.download =
            'laporan-rme-' +
            new Date()
            .toISOString()
            .slice(0, 10) +
            '.csv';


         link.click();


         URL.revokeObjectURL(url);
      }


      /* =========================================================
         DOWNLOAD CHART
      ========================================================= */

      function downloadTrendChart() {

         const canvas =
            document.getElementById(
               'rmeTrendChart'
            );


         const link =
            document.createElement('a');


         link.download =
            'trend-rme-' +
            new Date()
            .toISOString()
            .slice(0, 10) +
            '.png';


         link.href =
            canvas.toDataURL(
               'image/png'
            );


         link.click();
      }
   </script>

</body>

</html>