<?php

/**
 * ============================================================
 * PAYMENT HISTORY
 * Klinik Management System
 * ============================================================
 */

$pageTitle = 'Riwayat Pembayaran';

/*
|--------------------------------------------------------------------------
| DUMMY PAYMENT HISTORY
|--------------------------------------------------------------------------
*/

$payments = [

   [
      'id' => 1,
      'payment_no' => 'PAY-20260904-0001',
      'invoice_no' => 'INV-20260904-0001',
      'visit_no' => 'REG-20260904-001',

      'rm' => 'RM-000123',
      'patient' => 'Andi Pratama',

      'doctor' => 'dr. Budi Santoso',
      'poli' => 'Poli Umum',

      'date' => '04 Sep 2026',
      'time' => '08:35',

      'method' => 'Tunai',

      'amount' => 125000,
      'change' => 0,

      'reference' => '-',

      'cashier' => 'Admin Kasir',

      'status' => 'Berhasil',

      'note' => 'Pembayaran lunas.',

      'invoice_total' => 125000,

      'items' => [
         [
            'name' => 'Pendaftaran',
            'qty' => 1,
            'price' => 25000,
            'total' => 25000
         ],
         [
            'name' => 'Konsultasi Dokter',
            'qty' => 1,
            'price' => 50000,
            'total' => 50000
         ],
         [
            'name' => 'Paracetamol 500mg',
            'qty' => 10,
            'price' => 5000,
            'total' => 50000
         ]
      ]
   ],


   [
      'id' => 2,
      'payment_no' => 'PAY-20260904-0002',
      'invoice_no' => 'INV-20260904-0003',
      'visit_no' => 'REG-20260904-003',

      'rm' => 'RM-000125',
      'patient' => 'Rizky Maulana',

      'doctor' => 'dr. Budi Santoso',
      'poli' => 'Poli Umum',

      'date' => '04 Sep 2026',
      'time' => '09:42',

      'method' => 'QRIS',

      'amount' => 250000,
      'change' => 0,

      'reference' => 'QR-839201882',

      'cashier' => 'Admin Kasir',

      'status' => 'Berhasil',

      'note' => 'Pembayaran melalui QRIS.',

      'invoice_total' => 250000,

      'items' => [
         [
            'name' => 'Pendaftaran',
            'qty' => 1,
            'price' => 25000,
            'total' => 25000
         ],
         [
            'name' => 'Konsultasi Dokter',
            'qty' => 1,
            'price' => 75000,
            'total' => 75000
         ],
         [
            'name' => 'Laboratorium',
            'qty' => 1,
            'price' => 150000,
            'total' => 150000
         ]
      ]
   ],


   [
      'id' => 3,
      'payment_no' => 'PAY-20260904-0003',
      'invoice_no' => 'INV-20260904-0004',
      'visit_no' => 'REG-20260904-004',

      'rm' => 'RM-000126',
      'patient' => 'Dewi Lestari',

      'doctor' => 'dr. Siti Aminah',
      'poli' => 'Poli KIA',

      'date' => '04 Sep 2026',
      'time' => '10:20',

      'method' => 'Debit',

      'amount' => 300000,
      'change' => 0,

      'reference' => 'EDC-98273821',

      'cashier' => 'Admin Kasir',

      'status' => 'Berhasil',

      'note' => 'Pembayaran debit BCA.',

      'invoice_total' => 300000,

      'items' => [
         [
            'name' => 'Pendaftaran',
            'qty' => 1,
            'price' => 25000,
            'total' => 25000
         ],
         [
            'name' => 'Konsultasi KIA',
            'qty' => 1,
            'price' => 100000,
            'total' => 100000
         ],
         [
            'name' => 'USG',
            'qty' => 1,
            'price' => 200000,
            'total' => 200000
         ]
      ]
   ],


   [
      'id' => 4,
      'payment_no' => 'PAY-20260904-0004',
      'invoice_no' => 'INV-20260904-0006',
      'visit_no' => 'REG-20260904-006',

      'rm' => 'RM-000128',
      'patient' => 'Nur Aisyah',

      'doctor' => 'dr. Siti Aminah',
      'poli' => 'Poli KIA',

      'date' => '04 Sep 2026',
      'time' => '11:22',

      'method' => 'Transfer',

      'amount' => 200000,
      'change' => 0,

      'reference' => 'TRF-928371882',

      'cashier' => 'Admin Kasir',

      'status' => 'Berhasil',

      'note' => 'Transfer Bank BRI.',

      'invoice_total' => 200000,

      'items' => [
         [
            'name' => 'Pendaftaran',
            'qty' => 1,
            'price' => 25000,
            'total' => 25000
         ],
         [
            'name' => 'Konsultasi KIA',
            'qty' => 1,
            'price' => 90000,
            'total' => 90000
         ],
         [
            'name' => 'Vitamin',
            'qty' => 2,
            'price' => 50000,
            'total' => 100000
         ]
      ]
   ],


   [
      'id' => 5,
      'payment_no' => 'PAY-20260904-0005',
      'invoice_no' => 'INV-20260904-0009',
      'visit_no' => 'REG-20260904-009',

      'rm' => 'RM-000131',
      'patient' => 'Rina Marlina',

      'doctor' => 'dr. Budi Santoso',
      'poli' => 'Poli Umum',

      'date' => '04 Sep 2026',
      'time' => '14:15',

      'method' => 'Tunai',

      'amount' => 100000,
      'change' => 0,

      'reference' => '-',

      'cashier' => 'Admin Kasir',

      'status' => 'Berhasil',

      'note' => 'Pembayaran sebagian.',

      'invoice_total' => 200000,

      'items' => [
         [
            'name' => 'Pendaftaran',
            'qty' => 1,
            'price' => 25000,
            'total' => 25000
         ],
         [
            'name' => 'Konsultasi Dokter',
            'qty' => 1,
            'price' => 75000,
            'total' => 75000
         ],
         [
            'name' => 'Laboratorium',
            'qty' => 1,
            'price' => 120000,
            'total' => 120000
         ]
      ]
   ],


   [
      'id' => 6,
      'payment_no' => 'PAY-20260904-0006',
      'invoice_no' => 'INV-20260904-0010',
      'visit_no' => 'REG-20260904-010',

      'rm' => 'RM-000132',
      'patient' => 'Dimas Saputra',

      'doctor' => 'dr. Budi Santoso',
      'poli' => 'Poli Umum',

      'date' => '04 Sep 2026',
      'time' => '14:40',

      'method' => 'QRIS',

      'amount' => 150000,
      'change' => 0,

      'reference' => 'QR-928371991',

      'cashier' => 'Admin Kasir',

      'status' => 'Berhasil',

      'note' => 'Pembayaran lunas.',

      'invoice_total' => 150000,

      'items' => [
         [
            'name' => 'Pendaftaran',
            'qty' => 1,
            'price' => 25000,
            'total' => 25000
         ],
         [
            'name' => 'Konsultasi Dokter',
            'qty' => 1,
            'price' => 75000,
            'total' => 75000
         ],
         [
            'name' => 'Obat',
            'qty' => 1,
            'price' => 50000,
            'total' => 50000
         ]
      ]
   ],


   [
      'id' => 7,
      'payment_no' => 'PAY-20260904-0007',
      'invoice_no' => 'INV-20260904-0011',
      'visit_no' => 'REG-20260904-011',

      'rm' => 'RM-000133',
      'patient' => 'Putri Amelia',

      'doctor' => 'dr. Siti Aminah',
      'poli' => 'Poli KIA',

      'date' => '04 Sep 2026',
      'time' => '15:05',

      'method' => 'Tunai',

      'amount' => 175000,
      'change' => 25000,

      'reference' => '-',

      'cashier' => 'Admin Kasir',

      'status' => 'Berhasil',

      'note' => 'Pembayaran tunai.',

      'invoice_total' => 150000,

      'items' => [
         [
            'name' => 'Pendaftaran',
            'qty' => 1,
            'price' => 25000,
            'total' => 25000
         ],
         [
            'name' => 'Konsultasi KIA',
            'qty' => 1,
            'price' => 75000,
            'total' => 75000
         ],
         [
            'name' => 'Obat',
            'qty' => 1,
            'price' => 50000,
            'total' => 50000
         ]
      ]
   ]

];


/*
|--------------------------------------------------------------------------
| HELPER
|--------------------------------------------------------------------------
*/

function rupiah($value): string
{
   return 'Rp ' . number_format(
      $value,
      0,
      ',',
      '.'
   );
}


function paymentStatusBadge($status): string
{
   return match ($status) {

      'Berhasil' =>
      '<span class="badge-status success">
                <i class="fa-solid fa-circle-check"></i>
                Berhasil
            </span>',

      'Void' =>
      '<span class="badge-status danger">
                <i class="fa-solid fa-ban"></i>
                Void
            </span>',

      'Pending' =>
      '<span class="badge-status warning">
                <i class="fa-solid fa-clock"></i>
                Pending
            </span>',

      default =>
      '<span class="badge-status secondary">
                ' . htmlspecialchars($status) . '
            </span>'
   };
}


function paymentMethodIcon($method): string
{
   return match ($method) {

      'Tunai' =>
      '<i class="fa-solid fa-money-bill-wave"></i>',

      'QRIS' =>
      '<i class="fa-solid fa-qrcode"></i>',

      'Debit' =>
      '<i class="fa-solid fa-credit-card"></i>',

      'Transfer' =>
      '<i class="fa-solid fa-building-columns"></i>',

      default =>
      '<i class="fa-solid fa-wallet"></i>'
   };
}


/*
|--------------------------------------------------------------------------
| SUMMARY
|--------------------------------------------------------------------------
*/

$totalTransactions = count($payments);

$totalAmount = 0;

$totalCash = 0;

$totalNonCash = 0;

$totalVoid = 0;


foreach ($payments as $payment) {

   if ($payment['status'] === 'Void') {

      $totalVoid++;

      continue;
   }


   $totalAmount += $payment['amount'];


   if ($payment['method'] === 'Tunai') {

      $totalCash += $payment['amount'];
   } else {

      $totalNonCash += $payment['amount'];
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


   <title>
      <?= htmlspecialchars($pageTitle) ?> | Klinik
   </title>


   <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet">


   <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      rel="stylesheet">


   <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
      rel="stylesheet">


   <link
      rel="stylesheet"
      href="assets/css/style.css">


   <style>
      /* =========================================================
           PAGE
        ========================================================= */

      .history-page {
         padding: 24px;
      }


      .page-header {
         display: flex;
         align-items: center;
         justify-content: space-between;

         margin-bottom: 24px;
      }


      .page-title {
         margin: 0;

         color: #172033;

         font-size: 22px;
         font-weight: 700;
      }


      .page-subtitle {
         margin: 5px 0 0;

         color: #7a8499;

         font-size: 13px;
      }


      /* =========================================================
           STAT
        ========================================================= */

      .stat-card {
         height: 100%;

         padding: 18px;

         background: #fff;

         border: 1px solid #e9edf4;
         border-radius: 14px;
      }


      .stat-icon {
         width: 42px;
         height: 42px;

         display: flex;
         align-items: center;
         justify-content: center;

         margin-bottom: 14px;

         border-radius: 11px;
      }


      .stat-icon.blue {
         background: #eff6ff;
         color: #2563eb;
      }


      .stat-icon.green {
         background: #ecfdf5;
         color: #059669;
      }


      .stat-icon.orange {
         background: #fff7ed;
         color: #ea580c;
      }


      .stat-icon.red {
         background: #fef2f2;
         color: #dc2626;
      }


      .stat-label {
         color: #7a8499;

         font-size: 12px;

         margin-bottom: 5px;
      }


      .stat-value {
         color: #172033;

         font-size: 20px;

         font-weight: 700;
      }


      .stat-description {
         color: #98a2b3;

         font-size: 11px;

         margin-top: 5px;
      }


      /* =========================================================
           FILTER
        ========================================================= */

      .filter-card {
         margin-top: 22px;

         padding: 16px;

         background: #fff;

         border: 1px solid #e9edf4;
         border-radius: 14px;
      }


      .filter-label {
         display: block;

         color: #7a8499;

         font-size: 11px;
         font-weight: 600;

         margin-bottom: 5px;
      }


      .form-control,
      .form-select {
         min-height: 40px;

         border-color: #e2e7ef;
         border-radius: 9px;

         font-size: 13px;
      }


      .form-control:focus,
      .form-select:focus {

         border-color: #93c5fd;

         box-shadow:
            0 0 0 3px rgba(37, 99, 235, .08);

      }


      /* =========================================================
           TABLE
        ========================================================= */

      .table-card {
         margin-top: 16px;

         overflow: hidden;

         background: #fff;

         border: 1px solid #e9edf4;
         border-radius: 14px;
      }


      .table-card-header {

         display: flex;

         align-items: center;

         justify-content: space-between;

         padding: 17px 18px;

         border-bottom: 1px solid #edf0f5;

      }


      .table-card-title {

         color: #172033;

         font-size: 14px;

         font-weight: 700;

      }


      .table-card-subtitle {

         margin-top: 3px;

         color: #98a2b3;

         font-size: 11px;

      }


      .table {

         margin: 0;

         font-size: 12px;

      }


      .table thead th {

         padding: 12px 14px;

         background: #f8fafc;

         border-bottom: 1px solid #e9edf4;

         color: #667085;

         font-size: 10px;

         font-weight: 700;

         text-transform: uppercase;

         letter-spacing: .3px;

         white-space: nowrap;

      }


      .table tbody td {

         padding: 13px 14px;

         border-color: #f0f2f6;

         vertical-align: middle;

      }


      .payment-number {

         color: #2563eb;

         font-size: 12px;

         font-weight: 700;

      }


      .invoice-number {

         color: #667085;

         font-size: 10px;

         margin-top: 3px;

      }


      .patient-name {

         color: #273449;

         font-weight: 600;

      }


      .patient-meta {

         margin-top: 2px;

         color: #98a2b3;

         font-size: 10px;

      }


      .amount {

         color: #172033;

         font-size: 12px;

         font-weight: 700;

      }


      .method {

         display: flex;

         align-items: center;

         gap: 7px;

         color: #475467;

         font-size: 11px;

      }


      .method i {

         width: 22px;

         color: #2563eb;

         text-align: center;

      }


      /* =========================================================
           BADGE
        ========================================================= */

      .badge-status {

         display: inline-flex;

         align-items: center;

         gap: 5px;

         padding: 5px 9px;

         border-radius: 20px;

         font-size: 10px;

         font-weight: 600;

         white-space: nowrap;

      }


      .badge-status.success {

         background: #ecfdf3;

         color: #027a48;

      }


      .badge-status.danger {

         background: #fef3f2;

         color: #b42318;

      }


      .badge-status.warning {

         background: #fffaeb;

         color: #b54708;

      }


      .badge-status.secondary {

         background: #f2f4f7;

         color: #667085;

      }


      /* =========================================================
           ACTION
        ========================================================= */

      .action-buttons {

         display: flex;

         gap: 5px;

      }


      .btn-action {

         width: 31px;

         height: 31px;

         display: inline-flex;

         align-items: center;

         justify-content: center;

         background: #fff;

         border: 1px solid #e4e7ec;

         border-radius: 8px;

         color: #667085;

         cursor: pointer;

      }


      .btn-action:hover {

         background: #f8fafc;

         color: #2563eb;

      }


      .btn-action.print:hover {

         color: #7c3aed;

      }


      .btn-action.danger:hover {

         color: #dc2626;

      }


      /* =========================================================
           MODAL
        ========================================================= */

      .modal-content {

         overflow: hidden;

         border: 0;

         border-radius: 16px;

      }


      .modal-header {

         padding: 17px 20px;

         border-bottom: 1px solid #edf0f5;

      }


      .modal-title {

         font-size: 15px;

         font-weight: 700;

      }


      .modal-body {

         padding: 20px;

      }


      .patient-banner {

         padding: 15px;

         background: #f8fafc;

         border: 1px solid #edf0f5;

         border-radius: 12px;

      }


      .patient-avatar {

         width: 44px;

         height: 44px;

         display: flex;

         align-items: center;

         justify-content: center;

         background: #eff6ff;

         border-radius: 12px;

         color: #2563eb;

      }


      .patient-banner-name {

         color: #172033;

         font-size: 14px;

         font-weight: 700;

      }


      .patient-banner-meta {

         margin-top: 3px;

         color: #667085;

         font-size: 11px;

      }


      /* =========================================================
           PAYMENT DETAIL
        ========================================================= */

      .detail-grid {

         margin-top: 15px;

         padding: 14px;

         background: #fff;

         border: 1px solid #edf0f5;

         border-radius: 12px;

      }


      .detail-item {

         margin-bottom: 12px;

      }


      .detail-item:last-child {

         margin-bottom: 0;

      }


      .detail-label {

         color: #98a2b3;

         font-size: 10px;

         margin-bottom: 3px;

      }


      .detail-value {

         color: #344054;

         font-size: 12px;

         font-weight: 600;

      }


      .payment-total-box {

         display: flex;

         align-items: center;

         justify-content: space-between;

         margin-top: 15px;

         padding: 15px;

         background: #eff6ff;

         border-radius: 12px;

      }


      .payment-total-label {

         color: #475467;

         font-size: 11px;

      }


      .payment-total-value {

         color: #2563eb;

         font-size: 18px;

         font-weight: 700;

      }


      .invoice-items {

         margin-top: 15px;

         overflow: hidden;

         border: 1px solid #edf0f5;

         border-radius: 11px;

      }


      .invoice-items table {

         margin: 0;

         font-size: 11px;

      }


      .invoice-items td {

         padding: 9px 12px;

         border-color: #f0f2f6;

      }


      @media(max-width: 992px) {

         .history-page {

            padding: 16px;

         }

         .page-header {

            align-items: flex-start;

            flex-direction: column;

         }

      }
   </style>


</head>


<body>


   <div class="app">


      <?php require 'components/sidebar.php'; ?>


      <main class="main">


         <?php require 'components/header.php'; ?>


         <div class="content">


            <div class="history-page">


               <!-- =================================================
                     HEADER
                ================================================== -->

               <div class="page-header">

                  <div>

                     <h1 class="page-title">

                        <i class="fa-solid fa-clock-rotate-left text-primary me-2"></i>

                        Riwayat Pembayaran

                     </h1>


                     <p class="page-subtitle">

                        Histori seluruh transaksi pembayaran pasien.

                     </p>

                  </div>

               </div>


               <!-- =================================================
                     STAT
                ================================================== -->

               <div class="row g-3">


                  <div class="col-xl-3 col-md-6">

                     <div class="stat-card">

                        <div class="stat-icon blue">

                           <i class="fa-solid fa-receipt"></i>

                        </div>


                        <div class="stat-label">

                           Total Transaksi

                        </div>


                        <div class="stat-value">

                           <?= $totalTransactions ?>

                        </div>


                        <div class="stat-description">

                           Pembayaran tercatat hari ini

                        </div>

                     </div>

                  </div>


                  <div class="col-xl-3 col-md-6">

                     <div class="stat-card">

                        <div class="stat-icon green">

                           <i class="fa-solid fa-money-bill-wave"></i>

                        </div>


                        <div class="stat-label">

                           Total Pembayaran

                        </div>


                        <div class="stat-value">

                           <?= rupiah($totalAmount) ?>

                        </div>


                        <div class="stat-description">

                           Transaksi berhasil

                        </div>

                     </div>

                  </div>


                  <div class="col-xl-3 col-md-6">

                     <div class="stat-card">

                        <div class="stat-icon orange">

                           <i class="fa-solid fa-wallet"></i>

                        </div>


                        <div class="stat-label">

                           Pembayaran Tunai

                        </div>


                        <div class="stat-value">

                           <?= rupiah($totalCash) ?>

                        </div>


                        <div class="stat-description">

                           Cash payment

                        </div>

                     </div>

                  </div>


                  <div class="col-xl-3 col-md-6">

                     <div class="stat-card">

                        <div class="stat-icon red">

                           <i class="fa-solid fa-credit-card"></i>

                        </div>


                        <div class="stat-label">

                           Non Tunai

                        </div>


                        <div class="stat-value">

                           <?= rupiah($totalNonCash) ?>

                        </div>


                        <div class="stat-description">

                           QRIS, debit dan transfer

                        </div>

                     </div>

                  </div>

               </div>


               <!-- =================================================
                     FILTER
                ================================================== -->

               <div class="filter-card">


                  <div class="row g-3 align-items-end">


                     <div class="col-lg-4">

                        <label class="filter-label">

                           Cari Pembayaran

                        </label>


                        <div class="input-group">

                           <span class="input-group-text bg-white border-end-0">

                              <i class="fa-solid fa-search text-muted"></i>

                           </span>


                           <input
                              type="text"
                              id="searchHistory"
                              class="form-control border-start-0"
                              placeholder="Payment, invoice, No RM, nama..."
                              onkeyup="filterHistory()">

                        </div>

                     </div>


                     <div class="col-lg-2">

                        <label class="filter-label">

                           Metode

                        </label>


                        <select
                           id="filterMethod"
                           class="form-select"
                           onchange="filterHistory()">

                           <option value="">
                              Semua
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


                     <div class="col-lg-2">

                        <label class="filter-label">

                           Status

                        </label>


                        <select
                           id="filterStatus"
                           class="form-select"
                           onchange="filterHistory()">

                           <option value="">
                              Semua
                           </option>

                           <option value="Berhasil">
                              Berhasil
                           </option>

                           <option value="Void">
                              Void
                           </option>

                           <option value="Pending">
                              Pending
                           </option>

                        </select>

                     </div>


                     <div class="col-lg-2">

                        <label class="filter-label">

                           Tanggal

                        </label>


                        <input
                           type="date"
                           id="filterDate"
                           class="form-control"
                           value="2026-09-04"
                           onchange="filterHistory()">

                     </div>


                     <div class="col-lg-2">

                        <button
                           class="btn btn-light border w-100"
                           style="height:40px;border-radius:9px;"
                           onclick="resetFilter()">

                           <i class="fa-solid fa-rotate-right me-1"></i>

                           Reset

                        </button>

                     </div>

                  </div>

               </div>


               <!-- =================================================
                     TABLE
                ================================================== -->

               <div class="table-card">


                  <div class="table-card-header">


                     <div>

                        <div class="table-card-title">

                           Histori Transaksi

                        </div>


                        <div class="table-card-subtitle">

                           Semua pembayaran yang sudah tercatat

                        </div>

                     </div>


                     <div class="small text-muted">

                        <i class="fa-regular fa-calendar me-1"></i>

                        04 September 2026

                     </div>

                  </div>


                  <div class="table-responsive">


                     <table
                        class="table"
                        id="historyTable">


                        <thead>

                           <tr>

                              <th>
                                 Payment
                              </th>

                              <th>
                                 Pasien
                              </th>

                              <th>
                                 Invoice
                              </th>

                              <th>
                                 Metode
                              </th>

                              <th>
                                 Nominal
                              </th>

                              <th>
                                 Waktu
                              </th>

                              <th>
                                 Status
                              </th>

                              <th>
                                 Aksi
                              </th>

                           </tr>

                        </thead>


                        <tbody>


                           <?php foreach ($payments as $payment): ?>


                              <tr

                                 data-search="<?= strtolower(
                                                   $payment['payment_no']
                                                      . ' '
                                                      . $payment['invoice_no']
                                                      . ' '
                                                      . $payment['rm']
                                                      . ' '
                                                      . $payment['patient']
                                                ) ?>"

                                 data-method="<?= htmlspecialchars(
                                                   $payment['method']
                                                ) ?>"

                                 data-status="<?= htmlspecialchars(
                                                   $payment['status']
                                                ) ?>"

                                 data-date="2026-09-04">


                                 <td>

                                    <div class="payment-number">

                                       <?= htmlspecialchars(
                                          $payment['payment_no']
                                       ) ?>

                                    </div>


                                    <div class="patient-meta">

                                       <?= htmlspecialchars(
                                          $payment['cashier']
                                       ) ?>

                                    </div>

                                 </td>


                                 <td>

                                    <div class="patient-name">

                                       <?= htmlspecialchars(
                                          $payment['patient']
                                       ) ?>

                                    </div>


                                    <div class="patient-meta">

                                       <?= htmlspecialchars(
                                          $payment['rm']
                                       ) ?>

                                       ·

                                       <?= htmlspecialchars(
                                          $payment['poli']
                                       ) ?>

                                    </div>

                                 </td>


                                 <td>

                                    <div class="invoice-number">

                                       <?= htmlspecialchars(
                                          $payment['invoice_no']
                                       ) ?>

                                    </div>


                                    <div class="invoice-number">

                                       <?= htmlspecialchars(
                                          $payment['visit_no']
                                       ) ?>

                                    </div>

                                 </td>


                                 <td>

                                    <div class="method">

                                       <?= paymentMethodIcon(
                                          $payment['method']
                                       ) ?>

                                       <span>

                                          <?= htmlspecialchars(
                                             $payment['method']
                                          ) ?>

                                       </span>

                                    </div>

                                 </td>


                                 <td>

                                    <div class="amount">

                                       <?= rupiah(
                                          $payment['amount']
                                       ) ?>

                                    </div>


                                    <?php if (
                                       $payment['change'] > 0
                                    ): ?>

                                       <div class="patient-meta">

                                          Kembali:
                                          <?= rupiah(
                                             $payment['change']
                                          ) ?>

                                       </div>

                                    <?php endif; ?>

                                 </td>


                                 <td>

                                    <div class="patient-name">

                                       <?= htmlspecialchars(
                                          $payment['time']
                                       ) ?>

                                    </div>


                                    <div class="patient-meta">

                                       <?= htmlspecialchars(
                                          $payment['date']
                                       ) ?>

                                    </div>

                                 </td>


                                 <td>

                                    <?= paymentStatusBadge(
                                       $payment['status']
                                    ) ?>

                                 </td>


                                 <td>

                                    <div class="action-buttons">


                                       <button
                                          class="btn-action"
                                          title="Detail pembayaran"
                                          onclick="showPayment(<?= $payment['id'] ?>)">

                                          <i class="fa-solid fa-eye"></i>

                                       </button>


                                       <button
                                          class="btn-action print"
                                          title="Cetak bukti"
                                          onclick="printPayment('<?= htmlspecialchars($payment['payment_no']) ?>')">

                                          <i class="fa-solid fa-print"></i>

                                       </button>


                                       <?php if (
                                          $payment['status'] === 'Berhasil'
                                       ): ?>

                                          <button
                                             class="btn-action danger"
                                             title="Void pembayaran"
                                             onclick="voidPayment(<?= $payment['id'] ?>)">

                                             <i class="fa-solid fa-ban"></i>

                                          </button>

                                       <?php endif; ?>


                                    </div>

                                 </td>

                              </tr>


                           <?php endforeach; ?>


                        </tbody>


                     </table>

                  </div>

               </div>


            </div>

         </div>


         <?php require 'components/footer.php'; ?>


      </main>

   </div>


   <!-- =============================================================
     DETAIL PAYMENT MODAL
============================================================== -->

   <div
      class="modal fade"
      id="paymentDetailModal"
      tabindex="-1">


      <div class="modal-dialog modal-lg modal-dialog-centered">


         <div class="modal-content">


            <div class="modal-header">


               <h5 class="modal-title">

                  <i class="fa-solid fa-receipt text-primary me-2"></i>

                  Detail Pembayaran

               </h5>


               <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"></button>


            </div>


            <div
               class="modal-body"
               id="paymentDetailContent"></div>


         </div>


      </div>


   </div>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


   <script>
      /*
|--------------------------------------------------------------------------
| DATA
|--------------------------------------------------------------------------
*/

      const payments = <?= json_encode(
                           $payments,
                           JSON_UNESCAPED_UNICODE |
                              JSON_UNESCAPED_SLASHES
                        ) ?>;


      /*
      |--------------------------------------------------------------------------
      | RUPIAH
      |--------------------------------------------------------------------------
      */

      function rupiah(value) {

         return new Intl.NumberFormat(
            'id-ID', {
               style: 'currency',
               currency: 'IDR',
               minimumFractionDigits: 0
            }
         ).format(value);

      }


      /*
      |--------------------------------------------------------------------------
      | GET PAYMENT
      |--------------------------------------------------------------------------
      */

      function getPayment(id) {

         return payments.find(
            payment =>
            Number(payment.id) === Number(id)
         );

      }


      /*
      |--------------------------------------------------------------------------
      | FILTER
      |--------------------------------------------------------------------------
      */

      function filterHistory() {

         const search =
            document
            .getElementById('searchHistory')
            .value
            .toLowerCase();


         const method =
            document
            .getElementById('filterMethod')
            .value;


         const status =
            document
            .getElementById('filterStatus')
            .value;


         const date =
            document
            .getElementById('filterDate')
            .value;


         document
            .querySelectorAll(
               '#historyTable tbody tr'
            )
            .forEach(row => {

               const rowSearch =
                  row.dataset.search || '';

               const rowMethod =
                  row.dataset.method || '';

               const rowStatus =
                  row.dataset.status || '';

               const rowDate =
                  row.dataset.date || '';


               const matchSearch = !search ||
                  rowSearch.includes(search);


               const matchMethod = !method ||
                  rowMethod === method;


               const matchStatus = !status ||
                  rowStatus === status;


               const matchDate = !date ||
                  rowDate === date;


               row.style.display =
                  matchSearch &&
                  matchMethod &&
                  matchStatus &&
                  matchDate ?
                  '' :
                  'none';

            });

      }


      /*
      |--------------------------------------------------------------------------
      | RESET
      |--------------------------------------------------------------------------
      */

      function resetFilter() {

         document.getElementById(
            'searchHistory'
         ).value = '';


         document.getElementById(
            'filterMethod'
         ).value = '';


         document.getElementById(
            'filterStatus'
         ).value = '';


         document.getElementById(
            'filterDate'
         ).value = '2026-09-04';


         filterHistory();

      }


      /*
      |--------------------------------------------------------------------------
      | DETAIL
      |--------------------------------------------------------------------------
      */

      function showPayment(id) {

         const payment =
            getPayment(id);


         if (!payment) return;


         let items = '';


         payment.items.forEach(item => {

            items += `

            <tr>

                <td>

                    <div class="fw-semibold">

                        ${item.name}

                    </div>

                </td>


                <td class="text-center">

                    ${item.qty}

                </td>


                <td class="text-end">

                    ${rupiah(item.price)}

                </td>


                <td class="text-end fw-semibold">

                    ${rupiah(item.total)}

                </td>

            </tr>

        `;

         });


         document.getElementById(
            'paymentDetailContent'
         ).innerHTML = `


        <!-- PATIENT -->

        <div class="patient-banner">

            <div class="d-flex align-items-center gap-3">


                <div class="patient-avatar">

                    <i class="fa-solid fa-user"></i>

                </div>


                <div>


                    <div class="patient-banner-name">

                        ${payment.patient}

                    </div>


                    <div class="patient-banner-meta">

                        ${payment.rm}

                        ·

                        ${payment.poli}

                        ·

                        ${payment.doctor}

                    </div>


                </div>


            </div>

        </div>


        <!-- DETAIL -->

        <div class="detail-grid">


            <div class="row g-3">


                <div class="col-md-4">

                    <div class="detail-item">

                        <div class="detail-label">

                            Payment Number

                        </div>

                        <div class="detail-value">

                            ${payment.payment_no}

                        </div>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="detail-item">

                        <div class="detail-label">

                            Invoice

                        </div>

                        <div class="detail-value">

                            ${payment.invoice_no}

                        </div>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="detail-item">

                        <div class="detail-label">

                            Status

                        </div>

                        <div class="detail-value">

                            ${payment.status}

                        </div>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="detail-item">

                        <div class="detail-label">

                            Tanggal

                        </div>

                        <div class="detail-value">

                            ${payment.date}

                        </div>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="detail-item">

                        <div class="detail-label">

                            Waktu

                        </div>

                        <div class="detail-value">

                            ${payment.time}

                        </div>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="detail-item">

                        <div class="detail-label">

                            Kasir

                        </div>

                        <div class="detail-value">

                            ${payment.cashier}

                        </div>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="detail-item">

                        <div class="detail-label">

                            Metode

                        </div>

                        <div class="detail-value">

                            ${payment.method}

                        </div>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="detail-item">

                        <div class="detail-label">

                            Referensi

                        </div>

                        <div class="detail-value">

                            ${payment.reference}

                        </div>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="detail-item">

                        <div class="detail-label">

                            Nominal

                        </div>

                        <div class="detail-value">

                            ${rupiah(payment.amount)}

                        </div>

                    </div>

                </div>


            </div>


        </div>


        <!-- TOTAL -->

        <div class="payment-total-box">

            <div>

                <div class="payment-total-label">

                    Nominal Pembayaran

                </div>

                <div
                    class="small text-muted mt-1"
                >

                    ${payment.method}

                </div>

            </div>


            <div class="payment-total-value">

                ${rupiah(payment.amount)}

            </div>

        </div>


        <!-- ITEMS -->

        <div class="invoice-items">


            <table class="table">


                <thead>

                    <tr>

                        <th>
                            Item
                        </th>

                        <th class="text-center">
                            Qty
                        </th>

                        <th class="text-end">
                            Harga
                        </th>

                        <th class="text-end">
                            Total
                        </th>

                    </tr>

                </thead>


                <tbody>

                    ${items}

                </tbody>


            </table>


        </div>


        <!-- NOTE -->

        <div class="mt-3">


            <div class="detail-label">

                Catatan

            </div>


            <div class="detail-value">

                ${payment.note || '-'}

            </div>


        </div>


        <div class="d-flex justify-content-end gap-2 mt-4">


            <button
                type="button"
                class="btn btn-light border"
                data-bs-dismiss="modal"
            >

                Tutup

            </button>


            <button
                type="button"
                class="btn btn-primary"
                onclick="printPayment('${payment.payment_no}')"
            >

                <i class="fa-solid fa-print me-1"></i>

                Cetak Bukti

            </button>


        </div>

    `;


         bootstrap.Modal
            .getOrCreateInstance(
               document.getElementById(
                  'paymentDetailModal'
               )
            )
            .show();

      }


      /*
      |--------------------------------------------------------------------------
      | PRINT
      |--------------------------------------------------------------------------
      */

      function printPayment(paymentNo) {

         alert(
            'Mencetak bukti pembayaran: ' +
            paymentNo
         );

      }


      /*
      |--------------------------------------------------------------------------
      | VOID
      |--------------------------------------------------------------------------
      */

      function voidPayment(id) {

         const payment =
            getPayment(id);


         if (!payment) return;


         const reason =
            prompt(
               'Masukkan alasan VOID pembayaran ' +
               payment.payment_no
            );


         if (!reason || !reason.trim()) {

            return;

         }


         const confirmVoid =
            confirm(

               'Anda akan melakukan VOID pembayaran.\n\n' +

               'Payment : ' +
               payment.payment_no +

               '\nPasien : ' +
               payment.patient +

               '\nNominal : ' +
               rupiah(payment.amount) +

               '\n\nAlasan : ' +
               reason +

               '\n\nLanjutkan?'

            );


         if (!confirmVoid) {

            return;

         }


         alert(

            'Pembayaran berhasil ditandai VOID.\n\n' +

            'Pada implementasi database, sistem juga harus:\n' +

            '- menyimpan alasan VOID\n' +

            '- mencatat user yang melakukan VOID\n' +

            '- mencatat waktu VOID\n' +

            '- mengembalikan saldo invoice\n' +

            '- mencatat audit trail'

         );

      }
   </script>


</body>

</html>