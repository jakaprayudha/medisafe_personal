<?php

/**
 * ============================================================
 * PAYMENT
 * Klinik Management System
 * ============================================================
 */

/*
|--------------------------------------------------------------------------
| DUMMY DATA
|--------------------------------------------------------------------------
*/

$invoices = [

   [
      'id' => 1,
      'invoice_no' => 'INV-20260904-0002',
      'visit_no' => 'REG-20260904-002',
      'rm' => 'RM-000124',
      'nik' => '1271012300010002',
      'patient' => 'Siti Rahmawati',
      'doctor' => 'dr. Siti Aminah',
      'poli' => 'Poli Umum',
      'date' => '04 Sep 2026',
      'time' => '09:05',
      'subtotal' => 185000,
      'discount' => 10000,
      'total' => 175000,
      'paid' => 0,
      'status' => 'Belum Bayar',

      'items' => [
         [
            'name' => 'Pendaftaran',
            'type' => 'Administrasi',
            'qty' => 1,
            'price' => 25000,
            'total' => 25000
         ],
         [
            'name' => 'Konsultasi Dokter',
            'type' => 'Pelayanan',
            'qty' => 1,
            'price' => 75000,
            'total' => 75000
         ],
         [
            'name' => 'Amoxicillin 500mg',
            'type' => 'Farmasi',
            'qty' => 10,
            'price' => 8500,
            'total' => 85000
         ]
      ],

      'payments' => []
   ],

   [
      'id' => 2,
      'invoice_no' => 'INV-20260904-0005',
      'visit_no' => 'REG-20260904-005',
      'rm' => 'RM-000127',
      'nik' => '1271012300010005',
      'patient' => 'Fajar Hidayat',
      'doctor' => 'dr. Budi Santoso',
      'poli' => 'Poli Umum',
      'date' => '04 Sep 2026',
      'time' => '10:35',
      'subtotal' => 95000,
      'discount' => 0,
      'total' => 95000,
      'paid' => 0,
      'status' => 'Belum Bayar',

      'items' => [
         [
            'name' => 'Pendaftaran',
            'type' => 'Administrasi',
            'qty' => 1,
            'price' => 25000,
            'total' => 25000
         ],
         [
            'name' => 'Konsultasi Dokter',
            'type' => 'Pelayanan',
            'qty' => 1,
            'price' => 70000,
            'total' => 70000
         ]
      ],

      'payments' => []
   ],

   [
      'id' => 3,
      'invoice_no' => 'INV-20260904-0008',
      'visit_no' => 'REG-20260904-008',
      'rm' => 'RM-000130',
      'nik' => '1271012300010008',
      'patient' => 'Maya Sari',
      'doctor' => 'dr. Siti Aminah',
      'poli' => 'Poli KIA',
      'date' => '04 Sep 2026',
      'time' => '13:20',
      'subtotal' => 275000,
      'discount' => 0,
      'total' => 275000,
      'paid' => 0,
      'status' => 'Pending',

      'items' => [
         [
            'name' => 'Pendaftaran',
            'type' => 'Administrasi',
            'qty' => 1,
            'price' => 25000,
            'total' => 25000
         ],
         [
            'name' => 'Konsultasi KIA',
            'type' => 'Pelayanan',
            'qty' => 1,
            'price' => 100000,
            'total' => 100000
         ],
         [
            'name' => 'Laboratorium',
            'type' => 'Laboratorium',
            'qty' => 1,
            'price' => 150000,
            'total' => 150000
         ]
      ],

      'payments' => []
   ],

   [
      'id' => 4,
      'invoice_no' => 'INV-20260904-0009',
      'visit_no' => 'REG-20260904-009',
      'rm' => 'RM-000131',
      'nik' => '1271012300010009',
      'patient' => 'Rina Marlina',
      'doctor' => 'dr. Budi Santoso',
      'poli' => 'Poli Umum',
      'date' => '04 Sep 2026',
      'time' => '14:05',
      'subtotal' => 220000,
      'discount' => 20000,
      'total' => 200000,
      'paid' => 100000,
      'status' => 'Belum Lunas',

      'items' => [
         [
            'name' => 'Pendaftaran',
            'type' => 'Administrasi',
            'qty' => 1,
            'price' => 25000,
            'total' => 25000
         ],
         [
            'name' => 'Konsultasi Dokter',
            'type' => 'Pelayanan',
            'qty' => 1,
            'price' => 75000,
            'total' => 75000
         ],
         [
            'name' => 'Laboratorium',
            'type' => 'Laboratorium',
            'qty' => 1,
            'price' => 120000,
            'total' => 120000
         ]
      ],

      'payments' => [
         [
            'payment_no' => 'PAY-20260904-0001',
            'date' => '04 Sep 2026',
            'time' => '14:15',
            'method' => 'Tunai',
            'amount' => 100000,
            'reference' => '-'
         ]
      ]
   ],

   [
      'id' => 5,
      'invoice_no' => 'INV-20260904-0010',
      'visit_no' => 'REG-20260904-010',
      'rm' => 'RM-000132',
      'nik' => '1271012300010010',
      'patient' => 'Dimas Saputra',
      'doctor' => 'dr. Budi Santoso',
      'poli' => 'Poli Umum',
      'date' => '04 Sep 2026',
      'time' => '14:30',
      'subtotal' => 150000,
      'discount' => 0,
      'total' => 150000,
      'paid' => 150000,
      'status' => 'Lunas',

      'items' => [
         [
            'name' => 'Pendaftaran',
            'type' => 'Administrasi',
            'qty' => 1,
            'price' => 25000,
            'total' => 25000
         ],
         [
            'name' => 'Konsultasi Dokter',
            'type' => 'Pelayanan',
            'qty' => 1,
            'price' => 75000,
            'total' => 75000
         ],
         [
            'name' => 'Obat',
            'type' => 'Farmasi',
            'qty' => 1,
            'price' => 50000,
            'total' => 50000
         ]
      ],

      'payments' => [
         [
            'payment_no' => 'PAY-20260904-0002',
            'date' => '04 Sep 2026',
            'time' => '14:40',
            'method' => 'QRIS',
            'amount' => 150000,
            'reference' => 'QR-839201882'
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


function remaining($invoice): int
{
   return max(
      0,
      $invoice['total'] - $invoice['paid']
   );
}


function statusBadge($status): string
{
   return match ($status) {

      'Lunas' =>
      '<span class="badge-status success">
                <i class="fa-solid fa-circle-check"></i>
                Lunas
            </span>',

      'Belum Bayar' =>
      '<span class="badge-status danger">
                <i class="fa-solid fa-clock"></i>
                Belum Bayar
            </span>',

      'Belum Lunas' =>
      '<span class="badge-status warning">
                <i class="fa-solid fa-coins"></i>
                Belum Lunas
            </span>',

      'Pending' =>
      '<span class="badge-status info">
                <i class="fa-solid fa-hourglass-half"></i>
                Pending
            </span>',

      default =>
      '<span class="badge-status secondary">
                ' . htmlspecialchars($status) . '
            </span>'
   };
}


/*
|--------------------------------------------------------------------------
| SUMMARY
|--------------------------------------------------------------------------
*/

$totalInvoice = count($invoices);

$totalBilling = 0;
$totalPaid = 0;
$totalOutstanding = 0;

foreach ($invoices as $invoice) {

   $totalBilling += $invoice['total'];
   $totalPaid += $invoice['paid'];
   $totalOutstanding += remaining($invoice);
}


$totalLunas = count(
   array_filter(
      $invoices,
      fn($item) => $item['status'] === 'Lunas'
   )
);


$totalBelumLunas = count(
   array_filter(
      $invoices,
      fn($item) =>
      in_array(
         $item['status'],
         [
            'Belum Bayar',
            'Belum Lunas',
            'Pending'
         ],
         true
      )
   )
);

?>

<!DOCTYPE html>
<html lang="id">

<head>

   <meta charset="UTF-8">

   <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0">

   <title>
      Payment | Klinik
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
      .payment-page {
         padding: 24px;
      }


      /* =========================================================
           HEADER
        ========================================================= */

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
           STAT CARD
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
         margin-top: 5px;
         color: #98a2b3;
         font-size: 11px;
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

         margin-bottom: 5px;

         color: #7a8499;

         font-size: 11px;
         font-weight: 600;
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


      .invoice-number {
         color: #2563eb;
         font-size: 12px;
         font-weight: 700;
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
         font-weight: 700;
      }


      .amount.outstanding {
         color: #dc2626;
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


      .badge-status.info {
         background: #eff8ff;
         color: #175cd3;
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


      .btn-action.pay:hover {
         color: #059669;
      }


      .btn-action.print:hover {
         color: #7c3aed;
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


      /* =========================================================
           PATIENT
        ========================================================= */

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

         font-size: 17px;
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
           BILL
        ========================================================= */

      .bill-summary {
         margin-top: 15px;

         overflow: hidden;

         border: 1px solid #edf0f5;
         border-radius: 12px;
      }


      .bill-summary-header {
         padding: 12px 14px;

         background: #f8fafc;

         border-bottom: 1px solid #edf0f5;

         color: #344054;

         font-size: 12px;
         font-weight: 700;
      }


      .bill-summary table {
         margin: 0;

         font-size: 11px;
      }


      .bill-summary table td {
         padding: 9px 12px;

         border-color: #f0f2f6;
      }


      /* =========================================================
           SUMMARY
        ========================================================= */

      .payment-summary {
         margin-top: 15px;

         padding: 14px;

         background: #f8fafc;

         border-radius: 12px;
      }


      .summary-row {
         display: flex;
         align-items: center;
         justify-content: space-between;

         margin-bottom: 8px;

         color: #667085;
         font-size: 12px;
      }


      .summary-row.total {
         padding-top: 11px;
         margin-top: 10px;

         border-top: 1px solid #e4e7ec;

         color: #172033;

         font-size: 15px;
         font-weight: 700;
      }


      .summary-row.outstanding {
         color: #dc2626;
         font-weight: 700;
      }


      /* =========================================================
           PAYMENT METHOD
        ========================================================= */

      .method-card {
         padding: 12px 8px;

         background: #fff;

         border: 1px solid #e4e7ec;
         border-radius: 10px;

         color: #667085;

         text-align: center;

         cursor: pointer;

         font-size: 11px;
      }


      .method-card:hover,
      .method-card.active {
         background: #eff6ff;

         border-color: #2563eb;

         color: #2563eb;
      }


      .method-card i {
         display: block;

         margin-bottom: 6px;

         font-size: 18px;
      }


      .change-box {
         display: flex;
         justify-content: space-between;

         margin-top: 10px;
         padding: 11px 13px;

         background: #ecfdf5;

         border-radius: 10px;

         color: #047857;

         font-size: 12px;
         font-weight: 600;
      }


      /* =========================================================
           HISTORY
        ========================================================= */

      .payment-history {
         margin-top: 15px;

         overflow: hidden;

         border: 1px solid #edf0f5;
         border-radius: 11px;
      }


      .payment-history-title {
         padding: 10px 12px;

         background: #f8fafc;

         border-bottom: 1px solid #edf0f5;

         color: #344054;

         font-size: 11px;
         font-weight: 700;
      }


      .payment-history-row {
         display: flex;
         align-items: center;
         justify-content: space-between;

         padding: 10px 12px;

         border-bottom: 1px solid #f0f2f6;
      }


      .payment-history-row:last-child {
         border-bottom: 0;
      }


      .payment-history-no {
         color: #2563eb;

         font-size: 11px;
         font-weight: 600;
      }


      .payment-history-meta {
         margin-top: 2px;

         color: #98a2b3;

         font-size: 10px;
      }


      .payment-history-amount {
         color: #172033;

         font-size: 12px;
         font-weight: 700;
      }


      @media(max-width: 992px) {

         .payment-page {
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


            <div class="payment-page">


               <!-- =================================================
                     HEADER
                ================================================== -->

               <div class="page-header">

                  <div>

                     <h1 class="page-title">

                        <i class="fa-solid fa-money-check-dollar text-primary me-2"></i>

                        Pembayaran

                     </h1>

                     <p class="page-subtitle">

                        Kelola pembayaran dan pelunasan tagihan pasien.

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

                           <i class="fa-solid fa-file-invoice"></i>

                        </div>

                        <div class="stat-label">
                           Total Invoice
                        </div>

                        <div class="stat-value">
                           <?= $totalInvoice ?>
                        </div>

                        <div class="stat-description">
                           Invoice hari ini
                        </div>

                     </div>

                  </div>


                  <div class="col-xl-3 col-md-6">

                     <div class="stat-card">

                        <div class="stat-icon green">

                           <i class="fa-solid fa-money-bill-transfer"></i>

                        </div>

                        <div class="stat-label">
                           Total Terbayar
                        </div>

                        <div class="stat-value">
                           <?= rupiah($totalPaid) ?>
                        </div>

                        <div class="stat-description">
                           Pembayaran diterima
                        </div>

                     </div>

                  </div>


                  <div class="col-xl-3 col-md-6">

                     <div class="stat-card">

                        <div class="stat-icon orange">

                           <i class="fa-solid fa-clock"></i>

                        </div>

                        <div class="stat-label">
                           Belum Lunas
                        </div>

                        <div class="stat-value">
                           <?= $totalBelumLunas ?>
                        </div>

                        <div class="stat-description">
                           Masih memiliki tagihan
                        </div>

                     </div>

                  </div>


                  <div class="col-xl-3 col-md-6">

                     <div class="stat-card">

                        <div class="stat-icon red">

                           <i class="fa-solid fa-wallet"></i>

                        </div>

                        <div class="stat-label">
                           Outstanding
                        </div>

                        <div class="stat-value">
                           <?= rupiah($totalOutstanding) ?>
                        </div>

                        <div class="stat-description">
                           Sisa seluruh tagihan
                        </div>

                     </div>

                  </div>

               </div>


               <!-- =================================================
                     FILTER
                ================================================== -->

               <div class="filter-card">

                  <div class="row g-3 align-items-end">


                     <div class="col-lg-5">

                        <label class="filter-label">
                           Cari Invoice / Pasien
                        </label>

                        <div class="input-group">

                           <span class="input-group-text bg-white border-end-0">

                              <i class="fa-solid fa-search text-muted"></i>

                           </span>

                           <input
                              type="text"
                              id="searchPayment"
                              class="form-control border-start-0"
                              placeholder="Invoice, No RM, NIK, nama pasien..."
                              onkeyup="filterPayment()">

                        </div>

                     </div>


                     <div class="col-lg-3">

                        <label class="filter-label">
                           Status
                        </label>

                        <select
                           id="filterStatus"
                           class="form-select"
                           onchange="filterPayment()">

                           <option value="">
                              Semua Status
                           </option>

                           <option value="Belum Bayar">
                              Belum Bayar
                           </option>

                           <option value="Belum Lunas">
                              Belum Lunas
                           </option>

                           <option value="Pending">
                              Pending
                           </option>

                           <option value="Lunas">
                              Lunas
                           </option>

                        </select>

                     </div>


                     <div class="col-lg-3">

                        <label class="filter-label">
                           Poli
                        </label>

                        <select
                           id="filterPoli"
                           class="form-select"
                           onchange="filterPayment()">

                           <option value="">
                              Semua Poli
                           </option>

                           <option value="Poli Umum">
                              Poli Umum
                           </option>

                           <option value="Poli KIA">
                              Poli KIA
                           </option>

                        </select>

                     </div>


                     <div class="col-lg-1">

                        <button
                           class="btn btn-light border w-100"
                           style="height:40px;border-radius:9px;"
                           onclick="resetFilter()"
                           title="Reset filter">

                           <i class="fa-solid fa-rotate-right"></i>

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
                           Daftar Tagihan
                        </div>

                        <div class="table-card-subtitle">
                           Tagihan pasien yang dapat diproses oleh kasir
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
                        id="paymentTable">

                        <thead>

                           <tr>

                              <th>Invoice</th>

                              <th>Pasien</th>

                              <th>Dokter / Poli</th>

                              <th>Total</th>

                              <th>Terbayar</th>

                              <th>Sisa</th>

                              <th>Status</th>

                              <th>Aksi</th>

                           </tr>

                        </thead>


                        <tbody>


                           <?php foreach ($invoices as $invoice): ?>


                              <tr
                                 data-search="<?= strtolower(
                                                   $invoice['invoice_no']
                                                      . ' '
                                                      . $invoice['rm']
                                                      . ' '
                                                      . $invoice['nik']
                                                      . ' '
                                                      . $invoice['patient']
                                                ) ?>"
                                 data-status="<?= htmlspecialchars($invoice['status']) ?>"
                                 data-poli="<?= htmlspecialchars($invoice['poli']) ?>">


                                 <td>

                                    <div class="invoice-number">

                                       <?= htmlspecialchars(
                                          $invoice['invoice_no']
                                       ) ?>

                                    </div>

                                    <div class="patient-meta">

                                       <?= htmlspecialchars(
                                          $invoice['visit_no']
                                       ) ?>

                                    </div>

                                 </td>


                                 <td>

                                    <div class="patient-name">

                                       <?= htmlspecialchars(
                                          $invoice['patient']
                                       ) ?>

                                    </div>

                                    <div class="patient-meta">

                                       <?= htmlspecialchars(
                                          $invoice['rm']
                                       ) ?>

                                    </div>

                                 </td>


                                 <td>

                                    <div class="patient-name">

                                       <?= htmlspecialchars(
                                          $invoice['doctor']
                                       ) ?>

                                    </div>

                                    <div class="patient-meta">

                                       <?= htmlspecialchars(
                                          $invoice['poli']
                                       ) ?>

                                    </div>

                                 </td>


                                 <td>

                                    <div class="amount">

                                       <?= rupiah(
                                          $invoice['total']
                                       ) ?>

                                    </div>

                                 </td>


                                 <td>

                                    <div class="amount">

                                       <?= rupiah(
                                          $invoice['paid']
                                       ) ?>

                                    </div>

                                 </td>


                                 <td>

                                    <div class="amount outstanding">

                                       <?= rupiah(
                                          remaining($invoice)
                                       ) ?>

                                    </div>

                                 </td>


                                 <td>

                                    <?= statusBadge(
                                       $invoice['status']
                                    ) ?>

                                 </td>


                                 <td>

                                    <div class="action-buttons">


                                       <button
                                          class="btn-action"
                                          title="Detail tagihan"
                                          onclick="showInvoice(<?= $invoice['id'] ?>)">

                                          <i class="fa-solid fa-eye"></i>

                                       </button>


                                       <?php if (
                                          remaining($invoice) > 0
                                       ): ?>

                                          <button
                                             class="btn-action pay"
                                             title="Proses pembayaran"
                                             onclick="openPayment(<?= $invoice['id'] ?>)">

                                             <i class="fa-solid fa-cash-register"></i>

                                          </button>

                                       <?php endif; ?>


                                       <?php if (
                                          $invoice['paid'] > 0
                                       ): ?>

                                          <button
                                             class="btn-action print"
                                             title="Cetak bukti pembayaran"
                                             onclick="printPayment('<?= htmlspecialchars($invoice['invoice_no']) ?>')">

                                             <i class="fa-solid fa-print"></i>

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
     DETAIL INVOICE MODAL
============================================================== -->

   <div
      class="modal fade"
      id="invoiceModal"
      tabindex="-1">

      <div class="modal-dialog modal-lg modal-dialog-centered">

         <div class="modal-content">


            <div class="modal-header">

               <h5 class="modal-title">

                  <i class="fa-solid fa-file-invoice me-2 text-primary"></i>

                  Detail Tagihan

               </h5>

               <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"></button>

            </div>


            <div
               class="modal-body"
               id="invoiceContent"></div>


         </div>

      </div>

   </div>


   <!-- =============================================================
     PAYMENT MODAL
============================================================== -->

   <div
      class="modal fade"
      id="paymentModal"
      tabindex="-1">

      <div class="modal-dialog modal-lg modal-dialog-centered">

         <div class="modal-content">


            <div class="modal-header">

               <h5 class="modal-title">

                  <i class="fa-solid fa-money-check-dollar me-2 text-primary"></i>

                  Proses Pembayaran

               </h5>

               <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"></button>

            </div>


            <div
               class="modal-body"
               id="paymentContent"></div>


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

      const invoices = <?= json_encode(
                           $invoices,
                           JSON_UNESCAPED_UNICODE |
                              JSON_UNESCAPED_SLASHES
                        ) ?>;


      /*
      |--------------------------------------------------------------------------
      | FORMAT RUPIAH
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
      | FIND INVOICE
      |--------------------------------------------------------------------------
      */

      function getInvoice(id) {
         return invoices.find(
            invoice =>
            Number(invoice.id) === Number(id)
         );
      }


      /*
      |--------------------------------------------------------------------------
      | FILTER
      |--------------------------------------------------------------------------
      */

      function filterPayment() {

         const search =
            document
            .getElementById('searchPayment')
            .value
            .toLowerCase();

         const status =
            document
            .getElementById('filterStatus')
            .value;

         const poli =
            document
            .getElementById('filterPoli')
            .value;


         document
            .querySelectorAll('#paymentTable tbody tr')
            .forEach(row => {

               const rowSearch =
                  row.dataset.search || '';

               const rowStatus =
                  row.dataset.status || '';

               const rowPoli =
                  row.dataset.poli || '';


               const matchSearch = !search ||
                  rowSearch.includes(search);


               const matchStatus = !status ||
                  rowStatus === status;


               const matchPoli = !poli ||
                  rowPoli === poli;


               row.style.display =
                  matchSearch &&
                  matchStatus &&
                  matchPoli ?
                  '' :
                  'none';

            });

      }


      /*
      |--------------------------------------------------------------------------
      | RESET FILTER
      |--------------------------------------------------------------------------
      */

      function resetFilter() {

         document.getElementById(
            'searchPayment'
         ).value = '';

         document.getElementById(
            'filterStatus'
         ).value = '';

         document.getElementById(
            'filterPoli'
         ).value = '';

         filterPayment();

      }


      /*
      |--------------------------------------------------------------------------
      | DETAIL INVOICE
      |--------------------------------------------------------------------------
      */

      function showInvoice(id) {

         const invoice =
            getInvoice(id);

         if (!invoice) return;


         let items = '';


         invoice.items.forEach(item => {

            items += `

            <tr>

                <td>

                    <div class="fw-semibold">
                        ${item.name}
                    </div>

                    <div
                        class="text-muted"
                        style="font-size:10px;"
                    >
                        ${item.type}
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


         const saldo =
            Math.max(
               0,
               invoice.total - invoice.paid
            );


         document.getElementById(
            'invoiceContent'
         ).innerHTML = `

        <div class="patient-banner">

            <div class="d-flex align-items-center gap-3">

                <div class="patient-avatar">

                    <i class="fa-solid fa-user"></i>

                </div>

                <div>

                    <div class="patient-banner-name">

                        ${invoice.patient}

                    </div>

                    <div class="patient-banner-meta">

                        ${invoice.rm}

                        ·

                        ${invoice.nik}

                        ·

                        ${invoice.poli}

                    </div>

                </div>

            </div>

        </div>


        <div class="bill-summary">

            <div class="bill-summary-header">

                <div class="d-flex justify-content-between">

                    <span>
                        ${invoice.invoice_no}
                    </span>

                    <span>
                        ${invoice.date} ${invoice.time}
                    </span>

                </div>

            </div>


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


        <div class="payment-summary">

            <div class="summary-row">

                <span>
                    Subtotal
                </span>

                <span>
                    ${rupiah(invoice.subtotal)}
                </span>

            </div>


            <div class="summary-row">

                <span>
                    Diskon
                </span>

                <span>
                    - ${rupiah(invoice.discount)}
                </span>

            </div>


            <div class="summary-row total">

                <span>
                    Total Tagihan
                </span>

                <span>
                    ${rupiah(invoice.total)}
                </span>

            </div>


            <div class="summary-row">

                <span>
                    Sudah Dibayar
                </span>

                <span>
                    ${rupiah(invoice.paid)}
                </span>

            </div>


            <div class="summary-row outstanding">

                <span>
                    Sisa Tagihan
                </span>

                <span>
                    ${rupiah(saldo)}
                </span>

            </div>

        </div>


        ${
            invoice.payments.length
            ?
            `

                <div class="payment-history">

                    <div class="payment-history-title">

                        Riwayat Pembayaran

                    </div>


                    ${
                        invoice.payments.map(payment => `

                            <div class="payment-history-row">

                                <div>

                                    <div class="payment-history-no">

                                        ${payment.payment_no}

                                    </div>

                                    <div class="payment-history-meta">

                                        ${payment.date}
                                        ${payment.time}

                                        ·

                                        ${payment.method}

                                    </div>

                                </div>


                                <div class="payment-history-amount">

                                    ${rupiah(payment.amount)}

                                </div>

                            </div>

                        `).join('')
                    }

                </div>

            `
            :
            ''
        }

    `;


         bootstrap.Modal
            .getOrCreateInstance(
               document.getElementById(
                  'invoiceModal'
               )
            )
            .show();

      }


      /*
      |--------------------------------------------------------------------------
      | OPEN PAYMENT
      |--------------------------------------------------------------------------
      */

      function openPayment(id) {

         const invoice =
            getInvoice(id);

         if (!invoice) return;


         const saldo =
            Math.max(
               0,
               invoice.total - invoice.paid
            );


         document.getElementById(
            'paymentContent'
         ).innerHTML = `

        <div class="patient-banner">

            <div class="d-flex align-items-center gap-3">

                <div class="patient-avatar">

                    <i class="fa-solid fa-user"></i>

                </div>

                <div>

                    <div class="patient-banner-name">

                        ${invoice.patient}

                    </div>

                    <div class="patient-banner-meta">

                        ${invoice.rm}

                        ·

                        ${invoice.invoice_no}

                        ·

                        ${invoice.poli}

                    </div>

                </div>

            </div>

        </div>


        <div class="payment-summary">

            <div class="summary-row">

                <span>
                    Total Tagihan
                </span>

                <span>
                    ${rupiah(invoice.total)}
                </span>

            </div>


            <div class="summary-row">

                <span>
                    Sudah Dibayar
                </span>

                <span>
                    ${rupiah(invoice.paid)}
                </span>

            </div>


            <div class="summary-row total outstanding">

                <span>
                    Sisa Tagihan
                </span>

                <span>
                    ${rupiah(saldo)}
                </span>

            </div>

        </div>


        <div class="mt-3">

            <label class="filter-label">

                Metode Pembayaran

            </label>


            <div class="row g-2">


                <div class="col-3">

                    <div
                        class="method-card active"
                        onclick="selectMethod(this,'Tunai')"
                    >

                        <i class="fa-solid fa-money-bill-wave"></i>

                        Tunai

                    </div>

                </div>


                <div class="col-3">

                    <div
                        class="method-card"
                        onclick="selectMethod(this,'QRIS')"
                    >

                        <i class="fa-solid fa-qrcode"></i>

                        QRIS

                    </div>

                </div>


                <div class="col-3">

                    <div
                        class="method-card"
                        onclick="selectMethod(this,'Debit')"
                    >

                        <i class="fa-solid fa-credit-card"></i>

                        Debit

                    </div>

                </div>


                <div class="col-3">

                    <div
                        class="method-card"
                        onclick="selectMethod(this,'Transfer')"
                    >

                        <i class="fa-solid fa-building-columns"></i>

                        Transfer

                    </div>

                </div>


            </div>


            <input
                type="hidden"
                id="paymentMethod"
                value="Tunai"
            >

        </div>


        <div class="row g-3 mt-1">


            <div class="col-md-6">

                <label class="filter-label">

                    Jumlah Pembayaran

                </label>

                <input
                    type="number"
                    id="paymentAmount"
                    class="form-control form-control-lg"
                    value="${saldo}"
                    min="1"
                    oninput="calculatePayment(${saldo})"
                >

            </div>


            <div class="col-md-6">

                <label class="filter-label">

                    Nomor Referensi

                </label>

                <input
                    type="text"
                    id="paymentReference"
                    class="form-control"
                    placeholder="No. transaksi / referensi"
                >

            </div>


        </div>


        <div class="change-box">

            <span>
                Kembalian
            </span>

            <span id="changeAmount">

                ${rupiah(0)}

            </span>

        </div>


        <div class="mt-3">

            <label class="filter-label">

                Catatan

            </label>

            <textarea
                id="paymentNote"
                class="form-control"
                rows="2"
                placeholder="Catatan pembayaran..."
            ></textarea>

        </div>


        <div class="d-flex justify-content-end gap-2 mt-4">

            <button
                type="button"
                class="btn btn-light border"
                data-bs-dismiss="modal"
            >

                Batal

            </button>


            <button
                type="button"
                class="btn btn-primary"
                onclick="confirmPayment(${invoice.id})"
            >

                <i class="fa-solid fa-check me-1"></i>

                Simpan Pembayaran

            </button>

        </div>

    `;


         bootstrap.Modal
            .getOrCreateInstance(
               document.getElementById(
                  'paymentModal'
               )
            )
            .show();

      }


      /*
      |--------------------------------------------------------------------------
      | SELECT PAYMENT METHOD
      |--------------------------------------------------------------------------
      */

      function selectMethod(element, method) {

         document
            .querySelectorAll('.method-card')
            .forEach(
               item =>
               item.classList.remove('active')
            );


         element.classList.add('active');


         document.getElementById(
            'paymentMethod'
         ).value = method;

      }


      /*
      |--------------------------------------------------------------------------
      | CALCULATE PAYMENT
      |--------------------------------------------------------------------------
      */

      function calculatePayment(required) {

         const amount =
            parseFloat(
               document.getElementById(
                  'paymentAmount'
               ).value
            ) || 0;


         const change =
            Math.max(
               0,
               amount - required
            );


         document.getElementById(
               'changeAmount'
            ).innerText =
            rupiah(change);

      }


      /*
      |--------------------------------------------------------------------------
      | CONFIRM PAYMENT
      |--------------------------------------------------------------------------
      */

      function confirmPayment(id) {

         const invoice =
            getInvoice(id);

         if (!invoice) return;


         const amount =
            parseFloat(
               document.getElementById(
                  'paymentAmount'
               ).value
            ) || 0;


         const saldo =
            Math.max(
               0,
               invoice.total - invoice.paid
            );


         if (amount <= 0) {

            alert(
               'Jumlah pembayaran harus lebih dari 0.'
            );

            return;

         }


         if (amount < saldo) {

            const partial =
               confirm(
                  'Pembayaran lebih kecil dari sisa tagihan.\n\n' +
                  'Sisa setelah pembayaran: ' +
                  rupiah(saldo - amount) +
                  '\n\n' +
                  'Lanjutkan sebagai pembayaran sebagian?'
               );


            if (!partial) {
               return;
            }

         }


         const method =
            document.getElementById(
               'paymentMethod'
            ).value;


         const reference =
            document.getElementById(
               'paymentReference'
            ).value.trim();


         const change =
            Math.max(
               0,
               amount - saldo
            );


         bootstrap.Modal
            .getOrCreateInstance(
               document.getElementById(
                  'paymentModal'
               )
            )
            .hide();


         setTimeout(() => {

            alert(

               'Pembayaran berhasil disimpan.\n\n' +

               'Payment : PAY-20260904-XXXX\n' +

               'Invoice : ' +
               invoice.invoice_no +

               '\nPasien : ' +
               invoice.patient +

               '\nMetode : ' +
               method +

               '\nJumlah : ' +
               rupiah(amount) +

               '\nKembalian : ' +
               rupiah(change) +

               (
                  reference ?
                  '\nReferensi : ' + reference :
                  ''
               )

            );

         }, 300);

      }


      /*
      |--------------------------------------------------------------------------
      | PRINT PAYMENT
      |--------------------------------------------------------------------------
      */

      function printPayment(invoiceNo) {

         alert(
            'Mencetak bukti pembayaran untuk ' +
            invoiceNo
         );

      }
   </script>


</body>

</html>