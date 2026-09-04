<?php

/**
 * report-pharmacy.php
 * Laporan Farmasi
 */
?>
<!DOCTYPE html>
<html lang="id">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Laporan Farmasi - Klinik Management System</title>

   <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet">

   <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

   <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet">

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

         background: #fff;
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
         color: #fff;

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

         background: #fff;

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
         background: #fff;

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
           STAT
        ===================================================== */

      .stat-card {
         background: #fff;

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
         background: #fff;

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

         background: #fff;

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
           MINI TABLE
        ===================================================== */

      .mini-table {
         padding: 10px 20px 15px;
      }

      .mini-row {
         display: flex;

         align-items: center;

         justify-content: space-between;

         padding: 11px 0;

         border-bottom: 1px solid #f1f5f9;
      }

      .mini-row:last-child {
         border-bottom: 0;
      }

      .medicine-info {
         display: flex;
         align-items: center;
         gap: 10px;
      }

      .medicine-icon {
         width: 32px;
         height: 32px;

         border-radius: 8px;

         background: #eff6ff;

         color: #2563eb;

         display: flex;
         align-items: center;
         justify-content: center;

         font-size: 12px;
      }

      .medicine-name {
         font-size: 11px;
         font-weight: 700;
         color: #334155;
      }

      .medicine-sub {
         font-size: 9px;
         color: #94a3b8;
         margin-top: 2px;
      }

      .medicine-qty {
         font-size: 11px;
         font-weight: 800;
         color: #334155;
      }

      /* =====================================================
           BADGE
        ===================================================== */

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

      .request-number {
         color: #334155;
         font-weight: 700;
      }

      .amount {
         font-weight: 800;
         color: #334155;
      }

      .action-btn {
         width: 30px;
         height: 30px;

         border: 1px solid #e2e8f0;

         background: #fff;

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

         color: #fff;
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

      .medicine-detail {
         border: 1px solid #eef2f7;

         border-radius: 10px;

         padding: 12px;

         margin-bottom: 8px;

         display: flex;

         align-items: center;

         justify-content: space-between;
      }

      .medicine-detail-name {
         font-size: 11px;
         font-weight: 700;
         color: #334155;
      }

      .medicine-detail-dose {
         font-size: 9px;
         color: #94a3b8;
         margin-top: 3px;
      }

      .medicine-detail-qty {
         font-size: 11px;
         font-weight: 800;
         color: #2563eb;
      }

      /* =====================================================
           FOOTER
        ===================================================== */

      .footer {
         height: 55px;

         min-height: 55px;

         flex: 0 0 55px;

         background: #fff;

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
            background: #fff;
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
                  class="menu-item">
                  <i class="fa-solid fa-file-medical"></i>
                  <span>Laporan RME</span>
               </a>

               <a
                  href="report-pharmacy"
                  class="menu-item active">
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
                  Laporan Farmasi
               </h1>

               <div class="page-subtitle">
                  Rekap aktivitas pelayanan, dispensing dan penggunaan obat
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

                  Filter Laporan Farmasi

               </div>


               <div class="row g-3 align-items-end">


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


                  <div class="col-md-2">

                     <label class="form-label">
                        Poli
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


                  <div class="col-md-2">

                     <label class="form-label">
                        Jenis Obat
                     </label>

                     <select
                        id="filterCategory"
                        class="form-select">

                        <option value="">
                           Semua Kategori
                        </option>

                        <option value="Antibiotik">
                           Antibiotik
                        </option>

                        <option value="Analgesik">
                           Analgesik
                        </option>

                        <option value="Antihipertensi">
                           Antihipertensi
                        </option>

                        <option value="Vitamin">
                           Vitamin
                        </option>

                     </select>

                  </div>


                  <div class="col-md-2">

                     <label class="form-label">
                        Status
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

                        <option value="Diproses">
                           Diproses
                        </option>

                        <option value="Menunggu">
                           Menunggu
                        </option>

                        <option value="Batal">
                           Batal
                        </option>

                     </select>

                  </div>


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


               <!-- TOTAL DISPENSING -->

               <div class="col-xl-3 col-md-6">

                  <div class="stat-card">

                     <div class="stat-top">

                        <div>

                           <div class="stat-label">
                              Total Dispensing
                           </div>

                           <div
                              class="stat-value"
                              id="statDispensing">
                              846
                           </div>

                        </div>


                        <div class="stat-icon icon-blue">

                           <i class="fa-solid fa-mortar-pestle"></i>

                        </div>

                     </div>


                     <div class="stat-note">
                        Transaksi obat yang diproses
                     </div>

                  </div>

               </div>


               <!-- ITEM OBAT -->

               <div class="col-xl-3 col-md-6">

                  <div class="stat-card">

                     <div class="stat-top">

                        <div>

                           <div class="stat-label">
                              Item Obat Keluar
                           </div>

                           <div
                              class="stat-value"
                              id="statItem">
                              3.284
                           </div>

                        </div>


                        <div class="stat-icon icon-green">

                           <i class="fa-solid fa-pills"></i>

                        </div>

                     </div>


                     <div class="stat-note">
                        Total quantity obat yang keluar
                     </div>

                  </div>

               </div>


               <!-- PERMINTAAN -->

               <div class="col-xl-3 col-md-6">

                  <div class="stat-card">

                     <div class="stat-top">

                        <div>

                           <div class="stat-label">
                              Permintaan Obat
                           </div>

                           <div
                              class="stat-value"
                              id="statRequest">
                              872
                           </div>

                        </div>


                        <div class="stat-icon icon-orange">

                           <i class="fa-solid fa-file-prescription"></i>

                        </div>

                     </div>


                     <div class="stat-note">
                        Permintaan yang masuk dari pelayanan
                     </div>

                  </div>

               </div>


               <!-- NILAI OBAT -->

               <div class="col-xl-3 col-md-6">

                  <div class="stat-card">

                     <div class="stat-top">

                        <div>

                           <div class="stat-label">
                              Nilai Obat Keluar
                           </div>

                           <div
                              class="stat-value"
                              style="font-size:21px;">
                              Rp 42,8 Jt
                           </div>

                        </div>


                        <div class="stat-icon icon-purple">

                           <i class="fa-solid fa-money-bill-wave"></i>

                        </div>

                     </div>


                     <div class="stat-note">
                        Nilai penjualan obat pada periode
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
                              Trend Pengeluaran Obat
                           </div>

                           <div class="card-subtitle">
                              Jumlah item obat yang keluar per hari
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
                           id="pharmacyTrendChart"></canvas>

                     </div>

                  </div>

               </div>


               <!-- CATEGORY -->

               <div class="col-xl-4">

                  <div class="card-box">


                     <div class="card-header-custom">

                        <div>

                           <div class="card-title">
                              Obat Berdasarkan Kategori
                           </div>

                           <div class="card-subtitle">
                              Distribusi penggunaan obat
                           </div>

                        </div>

                     </div>


                     <div class="chart-wrap">

                        <canvas
                           id="categoryChart"></canvas>

                     </div>

                  </div>

               </div>

            </div>


            <!-- =================================================
                 SECOND CHART
            ================================================== -->

            <div class="row g-3 mb-4">


               <!-- POLI -->

               <div class="col-xl-7">

                  <div class="card-box">


                     <div class="card-header-custom">

                        <div>

                           <div class="card-title">
                              Penggunaan Obat per Poli
                           </div>

                           <div class="card-subtitle">
                              Jumlah item obat berdasarkan sumber pelayanan
                           </div>

                        </div>

                     </div>


                     <div class="chart-wrap">

                        <canvas
                           id="poliPharmacyChart"></canvas>

                     </div>

                  </div>

               </div>


               <!-- TOP MEDICINE -->

               <div class="col-xl-5">

                  <div class="card-box">


                     <div class="card-header-custom">

                        <div>

                           <div class="card-title">
                              Obat Terbanyak Digunakan
                           </div>

                           <div class="card-subtitle">
                              Top 5 berdasarkan quantity
                           </div>

                        </div>

                     </div>


                     <div class="mini-table">


                        <div class="mini-row">

                           <div class="medicine-info">

                              <div class="medicine-icon">
                                 <i class="fa-solid fa-pills"></i>
                              </div>

                              <div>

                                 <div class="medicine-name">
                                    Paracetamol 500 mg
                                 </div>

                                 <div class="medicine-sub">
                                    Analgesik
                                 </div>

                              </div>

                           </div>


                           <div class="medicine-qty">
                              824
                           </div>

                        </div>


                        <div class="mini-row">

                           <div class="medicine-info">

                              <div class="medicine-icon">
                                 <i class="fa-solid fa-pills"></i>
                              </div>

                              <div>

                                 <div class="medicine-name">
                                    Amoxicillin 500 mg
                                 </div>

                                 <div class="medicine-sub">
                                    Antibiotik
                                 </div>

                              </div>

                           </div>


                           <div class="medicine-qty">
                              612
                           </div>

                        </div>


                        <div class="mini-row">

                           <div class="medicine-info">

                              <div class="medicine-icon">
                                 <i class="fa-solid fa-pills"></i>
                              </div>

                              <div>

                                 <div class="medicine-name">
                                    Amlodipine 10 mg
                                 </div>

                                 <div class="medicine-sub">
                                    Antihipertensi
                                 </div>

                              </div>

                           </div>


                           <div class="medicine-qty">
                              486
                           </div>

                        </div>


                        <div class="mini-row">

                           <div class="medicine-info">

                              <div class="medicine-icon">
                                 <i class="fa-solid fa-pills"></i>
                              </div>

                              <div>

                                 <div class="medicine-name">
                                    Omeprazole 20 mg
                                 </div>

                                 <div class="medicine-sub">
                                    Gastrointestinal
                                 </div>

                              </div>

                           </div>


                           <div class="medicine-qty">
                              391
                           </div>

                        </div>


                        <div class="mini-row">

                           <div class="medicine-info">

                              <div class="medicine-icon">
                                 <i class="fa-solid fa-pills"></i>
                              </div>

                              <div>

                                 <div class="medicine-name">
                                    Vitamin B Complex
                                 </div>

                                 <div class="medicine-sub">
                                    Vitamin
                                 </div>

                              </div>

                           </div>


                           <div class="medicine-qty">
                              278
                           </div>

                        </div>


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
                        Detail Pengeluaran Obat
                     </div>

                     <div class="card-subtitle">
                        Daftar dispensing dan obat yang dikeluarkan
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
                     id="pharmacyTable">


                     <thead>

                        <tr>

                           <th>
                              No
                           </th>

                           <th>
                              No. Dispensing
                           </th>

                           <th>
                              No. RM
                           </th>

                           <th>
                              Pasien
                           </th>

                           <th>
                              Tanggal
                           </th>

                           <th>
                              Poli
                           </th>

                           <th>
                              Obat
                           </th>

                           <th>
                              Qty
                           </th>

                           <th>
                              Nilai
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
                           data-category="Analgesik"
                           data-status="Selesai">

                           <td>
                              1
                           </td>

                           <td class="request-number">
                              DSP-260904-001
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
                              Paracetamol 500 mg
                           </td>

                           <td>
                              10
                           </td>

                           <td class="amount">
                              Rp 25.000
                           </td>

                           <td>

                              <span class="badge-status badge-success">
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


                        <!-- ROW 2 -->

                        <tr
                           data-poli="Gigi"
                           data-category="Antibiotik"
                           data-status="Selesai">

                           <td>
                              2
                           </td>

                           <td class="request-number">
                              DSP-260904-002
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
                              Amoxicillin 500 mg
                           </td>

                           <td>
                              15
                           </td>

                           <td class="amount">
                              Rp 37.500
                           </td>

                           <td>

                              <span class="badge-status badge-success">
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
                           data-category="Vitamin"
                           data-status="Diproses">

                           <td>
                              3
                           </td>

                           <td class="request-number">
                              DSP-260904-003
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
                              Vitamin B Complex
                           </td>

                           <td>
                              30
                           </td>

                           <td class="amount">
                              Rp 45.000
                           </td>

                           <td>

                              <span class="badge-status badge-info">
                                 Diproses
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
                           data-category="Antihipertensi"
                           data-status="Selesai">

                           <td>
                              4
                           </td>

                           <td class="request-number">
                              DSP-260904-004
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
                              Amlodipine 10 mg
                           </td>

                           <td>
                              30
                           </td>

                           <td class="amount">
                              Rp 60.000
                           </td>

                           <td>

                              <span class="badge-status badge-success">
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
                           data-category="Gastrointestinal"
                           data-status="Menunggu">

                           <td>
                              5
                           </td>

                           <td class="request-number">
                              DSP-260904-005
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
                              Omeprazole 20 mg
                           </td>

                           <td>
                              14
                           </td>

                           <td class="amount">
                              Rp 42.000
                           </td>

                           <td>

                              <span class="badge-status badge-warning">
                                 Menunggu
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
                     846 dispensing

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
               Laporan Farmasi
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
                     Detail Dispensing
                  </h5>

                  <div
                     class="text-muted"
                     style="font-size:10px;">
                     Detail pengeluaran obat pasien
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
                           No. Dispensing
                        </div>

                        <div
                           class="detail-value"
                           id="detailDispensing">
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
                           Obat
                        </div>

                        <div
                           class="detail-value"
                           id="detailMedicine">
                           -
                        </div>

                     </div>


                     <div class="detail-item">

                        <div class="detail-label">
                           Quantity
                        </div>

                        <div
                           class="detail-value"
                           id="detailQty">
                           -
                        </div>

                     </div>


                     <div class="detail-item">

                        <div class="detail-label">
                           Nilai
                        </div>

                        <div
                           class="detail-value"
                           id="detailAmount">
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


               <div class="mt-2">

                  <div class="detail-label mb-2">
                     Detail Obat
                  </div>


                  <div class="medicine-detail">

                     <div>

                        <div class="medicine-detail-name">
                           Paracetamol 500 mg
                        </div>

                        <div class="medicine-detail-dose">
                           3 x 1 tablet setelah makan
                        </div>

                     </div>

                     <div class="medicine-detail-qty">
                        10 tablet
                     </div>

                  </div>


                  <div class="medicine-detail">

                     <div>

                        <div class="medicine-detail-name">
                           Omeprazole 20 mg
                        </div>

                        <div class="medicine-detail-dose">
                           1 x 1 kapsul sebelum makan
                        </div>

                     </div>

                     <div class="medicine-detail-qty">
                        14 kapsul
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


   <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


   <script>
      /* =========================================================
   TREND PENGELUARAN OBAT
========================================================= */

      const trendCtx =
         document
         .getElementById('pharmacyTrendChart')
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

            datasets: [{

               label: 'Obat Keluar',

               data: [
                  382,
                  425,
                  461,
                  398,
                  487,
                  521,
                  410
               ],

               borderWidth: 2,

               tension: .35,

               fill: false,

               pointRadius: 3,

               pointHoverRadius: 5

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
         CATEGORY CHART
      ========================================================= */

      const categoryCtx =
         document
         .getElementById('categoryChart')
         .getContext('2d');


      new Chart(categoryCtx, {

         type: 'doughnut',

         data: {

            labels: [
               'Analgesik',
               'Antibiotik',
               'Antihipertensi',
               'Vitamin',
               'Lainnya'
            ],

            datasets: [{

               data: [
                  824,
                  612,
                  486,
                  278,
                  1084
               ],

               borderWidth: 2

            }]

         },

         options: {

            responsive: true,

            maintainAspectRatio: false,

            cutout: '63%',

            plugins: {

               legend: {

                  position: 'bottom',

                  labels: {

                     boxWidth: 10,

                     padding: 9,

                     font: {
                        size: 9
                     }

                  }

               }

            }

         }

      });


      /* =========================================================
         POLI CHART
      ========================================================= */

      const poliCtx =
         document
         .getElementById('poliPharmacyChart')
         .getContext('2d');


      new Chart(poliCtx, {

         type: 'bar',

         data: {

            labels: [
               'Poli Umum',
               'Poli Gigi',
               'KIA'
            ],

            datasets: [{

               label: 'Item Obat',

               data: [
                  1682,
                  824,
                  778
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


         const category =
            document
            .getElementById('filterCategory')
            .value;


         const status =
            document
            .getElementById('filterStatus')
            .value;


         const rows =
            document.querySelectorAll(
               '#pharmacyTable tbody tr'
            );


         let visible = 0;


         rows.forEach(row => {


            const rowPoli =
               row.dataset.poli;


            const rowCategory =
               row.dataset.category;


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
               category &&
               rowCategory !== category
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
            'Filter farmasi:', {
               poli,
               category,
               status,
               visible
            }
         );

      }


      /* =========================================================
         DETAIL
      ========================================================= */

      function showDetail(button) {

         const row =
            button.closest('tr');


         const cells =
            row.querySelectorAll('td');


         document
            .getElementById('detailDispensing')
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
            .getElementById('detailMedicine')
            .textContent =
            cells[6]
            .textContent
            .trim();


         document
            .getElementById('detailQty')
            .textContent =
            cells[7]
            .textContent
            .trim();


         document
            .getElementById('detailAmount')
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
               'pharmacyTable'
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
            'laporan-farmasi-' +
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
               'pharmacyTrendChart'
            );


         const link =
            document.createElement('a');


         link.download =
            'trend-farmasi-' +
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