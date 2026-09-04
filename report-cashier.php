<?php

/**
 * report-cashier.php
 * Laporan Kasir
 */
?>
<!DOCTYPE html>
<html lang="id">

<head>

   <meta charset="UTF-8">

   <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0">

   <title>
      Laporan Kasir - Klinik Management System
   </title>

   <!-- Bootstrap -->
   <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet">

   <!-- Font Awesome -->
   <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

   <!-- Inter -->
   <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet">

   <!-- Chart JS -->
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
           STAT
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
           PAYMENT METHOD
        ===================================================== */

      .payment-method-list {

         padding: 8px 20px 18px;

      }


      .payment-method-row {

         display: flex;

         align-items: center;

         justify-content: space-between;

         padding: 12px 0;

         border-bottom: 1px solid #f1f5f9;

      }


      .payment-method-row:last-child {

         border-bottom: 0;

      }


      .payment-method-left {

         display: flex;

         align-items: center;

         gap: 10px;

      }


      .payment-icon {

         width: 34px;
         height: 34px;

         border-radius: 9px;

         background: #eff6ff;

         color: #2563eb;

         display: flex;

         align-items: center;

         justify-content: center;

         font-size: 13px;

      }


      .payment-name {

         font-size: 11px;

         font-weight: 700;

         color: #334155;

      }


      .payment-count {

         font-size: 9px;

         color: #94a3b8;

         margin-top: 2px;

      }


      .payment-amount {

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


      .badge-danger {

         background: #fef2f2;

         color: #dc2626;

      }


      .badge-info {

         background: #eff6ff;

         color: #2563eb;

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


      .invoice-number {

         color: #2563eb;

         font-weight: 800;

      }


      .rm-number {

         color: #64748b;

         font-weight: 700;

      }


      .patient-name {

         color: #1e293b;

         font-weight: 700;

      }


      .amount {

         font-weight: 800;

         color: #334155;

      }


      .paid-amount {

         color: #059669;

         font-weight: 800;

      }


      .outstanding {

         color: #dc2626;

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


      .invoice-summary {

         background: #f8fafc;

         border: 1px solid #eef2f7;

         border-radius: 10px;

         padding: 14px;

         margin-top: 8px;

      }


      .summary-row {

         display: flex;

         justify-content: space-between;

         padding: 6px 0;

         font-size: 11px;

         color: #64748b;

      }


      .summary-row.total {

         margin-top: 6px;

         padding-top: 10px;

         border-top: 1px solid #e2e8f0;

         color: #172033;

         font-weight: 800;

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

                  <span>
                     Data Klinik
                  </span>

               </a>


               <a
                  href="master-doctor"
                  class="menu-item">

                  <i class="fa-solid fa-user-doctor"></i>

                  <span>
                     Data Dokter
                  </span>

               </a>


               <a
                  href="master-medical-staff"
                  class="menu-item">

                  <i class="fa-solid fa-user-nurse"></i>

                  <span>
                     Tenaga Medis
                  </span>

               </a>


               <a
                  href="master-poli"
                  class="menu-item">

                  <i class="fa-solid fa-stethoscope"></i>

                  <span>
                     Poli / Layanan
                  </span>

               </a>


               <a
                  href="master-medicine"
                  class="menu-item">

                  <i class="fa-solid fa-pills"></i>

                  <span>
                     Data Obat
                  </span>

               </a>


               <a
                  href="master-action"
                  class="menu-item">

                  <i class="fa-solid fa-syringe"></i>

                  <span>
                     Data Tindakan
                  </span>

               </a>


               <a
                  href="master-tariff"
                  class="menu-item">

                  <i class="fa-solid fa-tags"></i>

                  <span>
                     Tarif
                  </span>

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

                  <span>
                     Registrasi Pasien
                  </span>

               </a>


               <a
                  href="patients"
                  class="menu-item">

                  <i class="fa-solid fa-users"></i>

                  <span>
                     Data Pasien
                  </span>

               </a>


               <a
                  href="rme"
                  class="menu-item">

                  <i class="fa-solid fa-file-medical"></i>

                  <span>
                     Pengisian RME
                  </span>

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

                  <span>
                     Permintaan Obat
                  </span>

               </a>


               <a
                  href="pharmacy-dispensing"
                  class="menu-item">

                  <i class="fa-solid fa-mortar-pestle"></i>

                  <span>
                     Dispensing
                  </span>

               </a>


               <a
                  href="pharmacy-stock"
                  class="menu-item">

                  <i class="fa-solid fa-boxes-stacked"></i>

                  <span>
                     Stok Obat
                  </span>

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

                  <span>
                     Transaksi
                  </span>

               </a>


               <a
                  href="payment"
                  class="menu-item">

                  <i class="fa-solid fa-money-check-dollar"></i>

                  <span>
                     Pembayaran
                  </span>

               </a>


               <a
                  href="payment-history"
                  class="menu-item">

                  <i class="fa-solid fa-clock-rotate-left"></i>

                  <span>
                     Riwayat Pembayaran
                  </span>

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

                  <span>
                     Laporan Registrasi
                  </span>

               </a>


               <a
                  href="report-visit"
                  class="menu-item">

                  <i class="fa-solid fa-chart-line"></i>

                  <span>
                     Laporan Kunjungan
                  </span>

               </a>


               <a
                  href="report-rme"
                  class="menu-item">

                  <i class="fa-solid fa-file-medical"></i>

                  <span>
                     Laporan RME
                  </span>

               </a>


               <a
                  href="report-pharmacy"
                  class="menu-item">

                  <i class="fa-solid fa-pills"></i>

                  <span>
                     Laporan Farmasi
                  </span>

               </a>


               <a
                  href="report-cashier"
                  class="menu-item active">

                  <i class="fa-solid fa-cash-register"></i>

                  <span>
                     Laporan Kasir
                  </span>

               </a>


               <a
                  href="report-income"
                  class="menu-item">

                  <i class="fa-solid fa-money-bill-trend-up"></i>

                  <span>
                     Laporan Pendapatan
                  </span>

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
                  Laporan Kasir
               </h1>

               <div class="page-subtitle">
                  Rekap invoice, pembayaran dan transaksi kasir
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

                  Filter Laporan Kasir

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


                  <div class="col-md-2">

                     <label class="form-label">
                        Metode Pembayaran
                     </label>

                     <select
                        id="filterMethod"
                        class="form-select">

                        <option value="">
                           Semua Metode
                        </option>

                        <option value="Tunai">
                           Tunai
                        </option>

                        <option value="QRIS">
                           QRIS
                        </option>

                        <option value="Debit">
                           Debit
                        </option>

                        <option value="Transfer">
                           Transfer
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

                        <option value="Lunas">
                           Lunas
                        </option>

                        <option value="Sebagian">
                           Sebagian
                        </option>

                        <option value="Belum Lunas">
                           Belum Lunas
                        </option>

                        <option value="Void">
                           Void
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


               <!-- TOTAL INVOICE -->

               <div class="col-xl-3 col-md-6">

                  <div class="stat-card">


                     <div class="stat-top">


                        <div>

                           <div class="stat-label">
                              Total Invoice
                           </div>

                           <div class="stat-value">
                              1.286
                           </div>

                        </div>


                        <div class="stat-icon icon-blue">

                           <i class="fa-solid fa-file-invoice-dollar"></i>

                        </div>

                     </div>


                     <div class="stat-note">
                        Invoice pada periode terpilih
                     </div>

                  </div>

               </div>


               <!-- LUNAS -->

               <div class="col-xl-3 col-md-6">

                  <div class="stat-card">


                     <div class="stat-top">


                        <div>

                           <div class="stat-label">
                              Invoice Lunas
                           </div>

                           <div class="stat-value">
                              1.104
                           </div>

                        </div>


                        <div class="stat-icon icon-green">

                           <i class="fa-solid fa-circle-check"></i>

                        </div>

                     </div>


                     <div class="stat-note">
                        Invoice telah dibayar penuh
                     </div>

                  </div>

               </div>


               <!-- OUTSTANDING -->

               <div class="col-xl-3 col-md-6">

                  <div class="stat-card">


                     <div class="stat-top">


                        <div>

                           <div class="stat-label">
                              Outstanding
                           </div>

                           <div
                              class="stat-value"
                              style="font-size:21px;">
                              Rp 18,4 Jt
                           </div>

                        </div>


                        <div class="stat-icon icon-orange">

                           <i class="fa-solid fa-clock"></i>

                        </div>

                     </div>


                     <div class="stat-note">
                        Tagihan yang belum terbayar
                     </div>

                  </div>

               </div>


               <!-- TOTAL PEMBAYARAN -->

               <div class="col-xl-3 col-md-6">

                  <div class="stat-card">


                     <div class="stat-top">


                        <div>

                           <div class="stat-label">
                              Total Pembayaran
                           </div>

                           <div
                              class="stat-value"
                              style="font-size:21px;">
                              Rp 286,7 Jt
                           </div>

                        </div>


                        <div class="stat-icon icon-purple">

                           <i class="fa-solid fa-money-bill-wave"></i>

                        </div>

                     </div>


                     <div class="stat-note">
                        Total pembayaran berhasil
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
                              Trend Pendapatan Kasir
                           </div>

                           <div class="card-subtitle">
                              Total pembayaran per hari
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
                           id="incomeChart"></canvas>

                     </div>

                  </div>

               </div>


               <!-- METODE -->

               <div class="col-xl-4">

                  <div class="card-box">


                     <div class="card-header-custom">

                        <div>

                           <div class="card-title">
                              Metode Pembayaran
                           </div>

                           <div class="card-subtitle">
                              Distribusi pembayaran
                           </div>

                        </div>

                     </div>


                     <div class="payment-method-list">


                        <!-- TUNAI -->

                        <div class="payment-method-row">


                           <div class="payment-method-left">


                              <div class="payment-icon">

                                 <i class="fa-solid fa-money-bill"></i>

                              </div>


                              <div>

                                 <div class="payment-name">
                                    Tunai
                                 </div>

                                 <div class="payment-count">
                                    482 transaksi
                                 </div>

                              </div>

                           </div>


                           <div class="payment-amount">
                              Rp 98,4 Jt
                           </div>

                        </div>


                        <!-- QRIS -->

                        <div class="payment-method-row">


                           <div class="payment-method-left">


                              <div class="payment-icon">

                                 <i class="fa-solid fa-qrcode"></i>

                              </div>


                              <div>

                                 <div class="payment-name">
                                    QRIS
                                 </div>

                                 <div class="payment-count">
                                    366 transaksi
                                 </div>

                              </div>

                           </div>


                           <div class="payment-amount">
                              Rp 82,7 Jt
                           </div>

                        </div>


                        <!-- DEBIT -->

                        <div class="payment-method-row">


                           <div class="payment-method-left">


                              <div class="payment-icon">

                                 <i class="fa-solid fa-credit-card"></i>

                              </div>


                              <div>

                                 <div class="payment-name">
                                    Debit
                                 </div>

                                 <div class="payment-count">
                                    254 transaksi
                                 </div>

                              </div>

                           </div>


                           <div class="payment-amount">
                              Rp 61,8 Jt
                           </div>

                        </div>


                        <!-- TRANSFER -->

                        <div class="payment-method-row">


                           <div class="payment-method-left">


                              <div class="payment-icon">

                                 <i class="fa-solid fa-building-columns"></i>

                              </div>


                              <div>

                                 <div class="payment-name">
                                    Transfer
                                 </div>

                                 <div class="payment-count">
                                    184 transaksi
                                 </div>

                              </div>

                           </div>


                           <div class="payment-amount">
                              Rp 43,8 Jt
                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>


            <!-- =================================================
                 POLI + STATUS
            ================================================== -->

            <div class="row g-3 mb-4">


               <!-- POLI -->

               <div class="col-xl-7">

                  <div class="card-box">


                     <div class="card-header-custom">


                        <div>

                           <div class="card-title">
                              Pendapatan per Poli
                           </div>

                           <div class="card-subtitle">
                              Nilai pembayaran berdasarkan layanan
                           </div>

                        </div>

                     </div>


                     <div class="chart-wrap">

                        <canvas
                           id="poliIncomeChart"></canvas>

                     </div>

                  </div>

               </div>


               <!-- STATUS -->

               <div class="col-xl-5">

                  <div class="card-box">


                     <div class="card-header-custom">


                        <div>

                           <div class="card-title">
                              Status Pembayaran
                           </div>

                           <div class="card-subtitle">
                              Kondisi tagihan pasien
                           </div>

                        </div>

                     </div>


                     <div class="chart-wrap">

                        <canvas
                           id="paymentStatusChart"></canvas>

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
                        Detail Transaksi Kasir
                     </div>

                     <div class="card-subtitle">
                        Daftar invoice dan pembayaran
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
                     id="cashierTable">


                     <thead>

                        <tr>

                           <th>
                              No
                           </th>

                           <th>
                              Invoice
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
                              Total
                           </th>

                           <th>
                              Dibayar
                           </th>

                           <th>
                              Outstanding
                           </th>

                           <th>
                              Metode
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
                           data-method="Tunai"
                           data-status="Lunas">

                           <td>
                              1
                           </td>

                           <td class="invoice-number">
                              INV-260904-001
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

                           <td class="amount">
                              Rp 185.000
                           </td>

                           <td class="paid-amount">
                              Rp 185.000
                           </td>

                           <td>
                              Rp 0
                           </td>

                           <td>
                              Tunai
                           </td>

                           <td>

                              <span class="badge-status badge-success">
                                 Lunas
                              </span>

                           </td>

                           <td class="action-column">

                              <button
                                 type="button"
                                 class="action-btn"
                                 onclick="showDetail(this)">

                                 <i class="fa-solid fa-eye"></i>

                              </button>

                           </td>

                        </tr>


                        <!-- ROW 2 -->

                        <tr
                           data-poli="Gigi"
                           data-method="QRIS"
                           data-status="Lunas">

                           <td>
                              2
                           </td>

                           <td class="invoice-number">
                              INV-260904-002
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

                           <td class="amount">
                              Rp 275.000
                           </td>

                           <td class="paid-amount">
                              Rp 275.000
                           </td>

                           <td>
                              Rp 0
                           </td>

                           <td>
                              QRIS
                           </td>

                           <td>

                              <span class="badge-status badge-success">
                                 Lunas
                              </span>

                           </td>

                           <td class="action-column">

                              <button
                                 type="button"
                                 class="action-btn"
                                 onclick="showDetail(this)">

                                 <i class="fa-solid fa-eye"></i>

                              </button>

                           </td>

                        </tr>


                        <!-- ROW 3 -->

                        <tr
                           data-poli="KIA"
                           data-method="Debit"
                           data-status="Sebagian">

                           <td>
                              3
                           </td>

                           <td class="invoice-number">
                              INV-260904-003
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

                           <td class="amount">
                              Rp 425.000
                           </td>

                           <td class="paid-amount">
                              Rp 250.000
                           </td>

                           <td class="outstanding">
                              Rp 175.000
                           </td>

                           <td>
                              Debit
                           </td>

                           <td>

                              <span class="badge-status badge-warning">
                                 Sebagian
                              </span>

                           </td>

                           <td class="action-column">

                              <button
                                 type="button"
                                 class="action-btn"
                                 onclick="showDetail(this)">

                                 <i class="fa-solid fa-eye"></i>

                              </button>

                           </td>

                        </tr>


                        <!-- ROW 4 -->

                        <tr
                           data-poli="Umum"
                           data-method="Transfer"
                           data-status="Lunas">

                           <td>
                              4
                           </td>

                           <td class="invoice-number">
                              INV-260904-004
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

                           <td class="amount">
                              Rp 350.000
                           </td>

                           <td class="paid-amount">
                              Rp 350.000
                           </td>

                           <td>
                              Rp 0
                           </td>

                           <td>
                              Transfer
                           </td>

                           <td>

                              <span class="badge-status badge-success">
                                 Lunas
                              </span>

                           </td>

                           <td class="action-column">

                              <button
                                 type="button"
                                 class="action-btn"
                                 onclick="showDetail(this)">

                                 <i class="fa-solid fa-eye"></i>

                              </button>

                           </td>

                        </tr>


                        <!-- ROW 5 -->

                        <tr
                           data-poli="Umum"
                           data-method="Tunai"
                           data-status="Belum Lunas">

                           <td>
                              5
                           </td>

                           <td class="invoice-number">
                              INV-260904-005
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

                           <td class="amount">
                              Rp 210.000
                           </td>

                           <td class="paid-amount">
                              Rp 0
                           </td>

                           <td class="outstanding">
                              Rp 210.000
                           </td>

                           <td>
                              -
                           </td>

                           <td>

                              <span class="badge-status badge-danger">
                                 Belum Lunas
                              </span>

                           </td>

                           <td class="action-column">

                              <button
                                 type="button"
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
                     1.286 invoice

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
               Laporan Kasir
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
                     Detail Transaksi
                  </h5>

                  <div
                     class="text-muted"
                     style="font-size:10px;">
                     Detail invoice dan pembayaran pasien
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
                           Invoice
                        </div>

                        <div
                           class="detail-value"
                           id="detailInvoice">
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
                           Metode Pembayaran
                        </div>

                        <div
                           class="detail-value"
                           id="detailMethod">
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


               <!-- SUMMARY -->

               <div class="invoice-summary">


                  <div class="summary-row">

                     <span>
                        Total Invoice
                     </span>

                     <strong id="detailTotal">
                        Rp 0
                     </strong>

                  </div>


                  <div class="summary-row">

                     <span>
                        Total Dibayar
                     </span>

                     <strong
                        id="detailPaid"
                        class="text-success">
                        Rp 0
                     </strong>

                  </div>


                  <div class="summary-row">

                     <span>
                        Outstanding
                     </span>

                     <strong
                        id="detailOutstanding"
                        class="text-danger">
                        Rp 0
                     </strong>

                  </div>


                  <div class="summary-row total">

                     <span>
                        Status Pembayaran
                     </span>

                     <strong id="detailPaymentStatus">
                        -
                     </strong>

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
   TREND PENDAPATAN
========================================================= */

      const incomeCtx =
         document
         .getElementById('incomeChart')
         .getContext('2d');


      new Chart(
         incomeCtx, {

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

                     label: 'Pembayaran',

                     data: [

                        11800000,
                        13200000,
                        14700000,
                        12600000,
                        15400000,
                        16800000,
                        14200000

                     ],

                     borderWidth: 2,

                     tension: .35,

                     fill: false,

                     pointRadius: 3,

                     pointHoverRadius: 5

                  }

               ]

            },


            options: {

               responsive: true,

               maintainAspectRatio: false,

               plugins: {

                  legend: {

                     display: false

                  },

                  tooltip: {

                     callbacks: {

                        label: function(context) {

                           return 'Rp ' +
                              context.raw
                              .toLocaleString('id-ID');

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

                        color: '#94a3b8',

                        callback: function(value) {

                           return 'Rp ' +
                              (value / 1000000)
                              .toFixed(0) +
                              ' Jt';

                        }

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

         }
      );


      /* =========================================================
         PENDAPATAN PER POLI
      ========================================================= */

      const poliIncomeCtx =
         document
         .getElementById('poliIncomeChart')
         .getContext('2d');


      new Chart(
         poliIncomeCtx, {

            type: 'bar',

            data: {

               labels: [

                  'Poli Umum',
                  'Poli Gigi',
                  'KIA'

               ],

               datasets: [

                  {

                     label: 'Pendapatan',

                     data: [

                        148700000,
                        82400000,
                        55600000

                     ],

                     borderWidth: 1,

                     borderRadius: 6

                  }

               ]

            },


            options: {

               responsive: true,

               maintainAspectRatio: false,

               plugins: {

                  legend: {

                     display: false

                  },

                  tooltip: {

                     callbacks: {

                        label: function(context) {

                           return 'Rp ' +
                              context.raw
                              .toLocaleString('id-ID');

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

                        color: '#94a3b8',

                        callback: function(value) {

                           return 'Rp ' +
                              (value / 1000000)
                              .toFixed(0) +
                              ' Jt';

                        }

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

         }
      );


      /* =========================================================
         STATUS PEMBAYARAN
      ========================================================= */

      const statusCtx =
         document
         .getElementById('paymentStatusChart')
         .getContext('2d');


      new Chart(
         statusCtx, {

            type: 'doughnut',

            data: {

               labels: [

                  'Lunas',
                  'Sebagian',
                  'Belum Lunas',
                  'Void'

               ],

               datasets: [

                  {

                     data: [

                        1104,
                        76,
                        91,
                        15

                     ],

                     borderWidth: 2

                  }

               ]

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

         }
      );


      /* =========================================================
         FILTER
      ========================================================= */

      function applyFilter() {

         const poli =
            document
            .getElementById('filterPoli')
            .value;


         const method =
            document
            .getElementById('filterMethod')
            .value;


         const status =
            document
            .getElementById('filterStatus')
            .value;


         const rows =
            document.querySelectorAll(
               '#cashierTable tbody tr'
            );


         let visible = 0;


         rows.forEach(
            row => {

               const rowPoli =
                  row.dataset.poli;


               const rowMethod =
                  row.dataset.method;


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
                  method &&
                  rowMethod !== method
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

            }
         );


         console.log(
            'Filter laporan kasir:', {
               poli,
               method,
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
            .getElementById('detailInvoice')
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
            .getElementById('detailTotal')
            .textContent =
            cells[6]
            .textContent
            .trim();


         document
            .getElementById('detailPaid')
            .textContent =
            cells[7]
            .textContent
            .trim();


         document
            .getElementById('detailOutstanding')
            .textContent =
            cells[8]
            .textContent
            .trim();


         document
            .getElementById('detailMethod')
            .textContent =
            cells[9]
            .textContent
            .trim();


         document
            .getElementById('detailStatus')
            .textContent =
            cells[10]
            .textContent
            .trim();


         document
            .getElementById('detailPaymentStatus')
            .textContent =
            cells[10]
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
               'cashierTable'
            );


         let csv = [];


         const rows =
            table.querySelectorAll('tr');


         rows.forEach(
            row => {

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
                      * Skip kolom aksi
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

            }
         );


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
            'laporan-kasir-' +
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
               'incomeChart'
            );


         const link =
            document.createElement('a');


         link.download =
            'trend-pendapatan-kasir-' +
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