<?php

$transactions = [
   [
      'id'              => 1,
      'invoice_no'      => 'INV-20260904-0001',
      'rm'              => 'RM-000123',
      'patient'         => 'Andi Pratama',
      'visit_no'        => 'REG-20260904-001',
      'doctor'          => 'dr. Budi Santoso',
      'poli'            => 'Poli Umum',
      'date'            => '04 Sep 2026',
      'time'            => '08:21',
      'subtotal'        => 125000,
      'discount'        => 0,
      'total'           => 125000,
      'paid'            => 125000,
      'change'          => 0,
      'payment_method'  => 'Tunai',
      'status'          => 'Lunas',
      'items'           => [
         ['name' => 'Pendaftaran', 'qty' => 1, 'price' => 25000, 'total' => 25000],
         ['name' => 'Konsultasi Dokter', 'qty' => 1, 'price' => 50000, 'total' => 50000],
         ['name' => 'Paracetamol 500mg', 'qty' => 10, 'price' => 5000, 'total' => 50000],
      ],
   ],
   [
      'id'              => 2,
      'invoice_no'      => 'INV-20260904-0002',
      'rm'              => 'RM-000124',
      'patient'         => 'Siti Rahmawati',
      'visit_no'        => 'REG-20260904-002',
      'doctor'          => 'dr. Siti Aminah',
      'poli'            => 'Poli Umum',
      'date'            => '04 Sep 2026',
      'time'            => '09:05',
      'subtotal'        => 185000,
      'discount'        => 10000,
      'total'           => 175000,
      'paid'            => 0,
      'change'          => 0,
      'payment_method'  => '-',
      'status'          => 'Belum Bayar',
      'items'           => [
         ['name' => 'Pendaftaran', 'qty' => 1, 'price' => 25000, 'total' => 25000],
         ['name' => 'Konsultasi Dokter', 'qty' => 1, 'price' => 75000, 'total' => 75000],
         ['name' => 'Amoxicillin 500mg', 'qty' => 10, 'price' => 8500, 'total' => 85000],
      ],
   ],
   [
      'id'              => 3,
      'invoice_no'      => 'INV-20260904-0003',
      'rm'              => 'RM-000125',
      'patient'         => 'Rizky Maulana',
      'visit_no'        => 'REG-20260904-003',
      'doctor'          => 'dr. Budi Santoso',
      'poli'            => 'Poli Umum',
      'date'            => '04 Sep 2026',
      'time'            => '09:18',
      'subtotal'        => 250000,
      'discount'        => 0,
      'total'           => 250000,
      'paid'            => 250000,
      'change'          => 50000,
      'payment_method'  => 'QRIS',
      'status'          => 'Lunas',
      'items'           => [
         ['name' => 'Pendaftaran', 'qty' => 1, 'price' => 25000, 'total' => 25000],
         ['name' => 'Konsultasi Dokter', 'qty' => 1, 'price' => 75000, 'total' => 75000],
         ['name' => 'Laboratorium', 'qty' => 1, 'price' => 150000, 'total' => 150000],
      ],
   ],
   [
      'id'              => 4,
      'invoice_no'      => 'INV-20260904-0004',
      'rm'              => 'RM-000126',
      'patient'         => 'Dewi Lestari',
      'visit_no'        => 'REG-20260904-004',
      'doctor'          => 'dr. Siti Aminah',
      'poli'            => 'Poli KIA',
      'date'            => '04 Sep 2026',
      'time'            => '10:02',
      'subtotal'        => 325000,
      'discount'        => 25000,
      'total'           => 300000,
      'paid'            => 300000,
      'change'          => 0,
      'payment_method'  => 'Debit',
      'status'          => 'Lunas',
      'items'           => [
         ['name' => 'Pendaftaran', 'qty' => 1, 'price' => 25000, 'total' => 25000],
         ['name' => 'Konsultasi KIA', 'qty' => 1, 'price' => 100000, 'total' => 100000],
         ['name' => 'USG', 'qty' => 1, 'price' => 200000, 'total' => 200000],
      ],
   ],
   [
      'id'              => 5,
      'invoice_no'      => 'INV-20260904-0005',
      'rm'              => 'RM-000127',
      'patient'         => 'Fajar Hidayat',
      'visit_no'        => 'REG-20260904-005',
      'doctor'          => 'dr. Budi Santoso',
      'poli'            => 'Poli Umum',
      'date'            => '04 Sep 2026',
      'time'            => '10:35',
      'subtotal'        => 95000,
      'discount'        => 0,
      'total'           => 95000,
      'paid'            => 0,
      'change'          => 0,
      'payment_method'  => '-',
      'status'          => 'Belum Bayar',
      'items'           => [
         ['name' => 'Pendaftaran', 'qty' => 1, 'price' => 25000, 'total' => 25000],
         ['name' => 'Konsultasi Dokter', 'qty' => 1, 'price' => 70000, 'total' => 70000],
      ],
   ],
   [
      'id'              => 6,
      'invoice_no'      => 'INV-20260904-0006',
      'rm'              => 'RM-000128',
      'patient'         => 'Nur Aisyah',
      'visit_no'        => 'REG-20260904-006',
      'doctor'          => 'dr. Siti Aminah',
      'poli'            => 'Poli KIA',
      'date'            => '04 Sep 2026',
      'time'            => '11:10',
      'subtotal'        => 215000,
      'discount'        => 15000,
      'total'           => 200000,
      'paid'            => 200000,
      'change'          => 0,
      'payment_method'  => 'Transfer',
      'status'          => 'Lunas',
      'items'           => [
         ['name' => 'Pendaftaran', 'qty' => 1, 'price' => 25000, 'total' => 25000],
         ['name' => 'Konsultasi KIA', 'qty' => 1, 'price' => 90000, 'total' => 90000],
         ['name' => 'Vitamin', 'qty' => 2, 'price' => 50000, 'total' => 100000],
      ],
   ],
   [
      'id'              => 7,
      'invoice_no'      => 'INV-20260904-0007',
      'rm'              => 'RM-000129',
      'patient'         => 'Agus Setiawan',
      'visit_no'        => 'REG-20260904-007',
      'doctor'          => 'dr. Budi Santoso',
      'poli'            => 'Poli Umum',
      'date'            => '04 Sep 2026',
      'time'            => '11:45',
      'subtotal'        => 150000,
      'discount'        => 0,
      'total'           => 150000,
      'paid'            => 150000,
      'change'          => 0,
      'payment_method'  => 'Tunai',
      'status'          => 'Lunas',
      'items'           => [
         ['name' => 'Pendaftaran', 'qty' => 1, 'price' => 25000, 'total' => 25000],
         ['name' => 'Konsultasi Dokter', 'qty' => 1, 'price' => 75000, 'total' => 75000],
         ['name' => 'Obat', 'qty' => 1, 'price' => 50000, 'total' => 50000],
      ],
   ],
   [
      'id'              => 8,
      'invoice_no'      => 'INV-20260904-0008',
      'rm'              => 'RM-000130',
      'patient'         => 'Maya Sari',
      'visit_no'        => 'REG-20260904-008',
      'doctor'          => 'dr. Siti Aminah',
      'poli'            => 'Poli KIA',
      'date'            => '04 Sep 2026',
      'time'            => '13:20',
      'subtotal'        => 275000,
      'discount'        => 0,
      'total'           => 275000,
      'paid'            => 0,
      'change'          => 0,
      'payment_method'  => '-',
      'status'          => 'Pending',
      'items'           => [
         ['name' => 'Pendaftaran', 'qty' => 1, 'price' => 25000, 'total' => 25000],
         ['name' => 'Konsultasi KIA', 'qty' => 1, 'price' => 100000, 'total' => 100000],
         ['name' => 'Laboratorium', 'qty' => 1, 'price' => 150000, 'total' => 150000],
      ],
   ],
];

/*
|--------------------------------------------------------------------------
| SUMMARY
|--------------------------------------------------------------------------
*/

$totalTransactions = count($transactions);

$totalRevenue = 0;
$totalPaid = 0;
$totalOutstanding = 0;
$totalPending = 0;

foreach ($transactions as $trx) {
   $totalRevenue += $trx['total'];
   $totalPaid += $trx['paid'];

   if ($trx['status'] === 'Belum Bayar') {
      $totalOutstanding += ($trx['total'] - $trx['paid']);
   }

   if ($trx['status'] === 'Pending') {
      $totalPending++;
   }
}

$totalLunas = count(array_filter(
   $transactions,
   fn($item) => $item['status'] === 'Lunas'
));

$totalBelumBayar = count(array_filter(
   $transactions,
   fn($item) => $item['status'] === 'Belum Bayar'
));

function rupiah($value): string
{
   return 'Rp ' . number_format($value, 0, ',', '.');
}

function statusBadge(string $status): string
{
   return match ($status) {
      'Lunas' => '<span class="badge-status success">
                        <i class="fa-solid fa-circle-check"></i> Lunas
                    </span>',

      'Belum Bayar' => '<span class="badge-status danger">
                            <i class="fa-solid fa-clock"></i> Belum Bayar
                          </span>',

      'Pending' => '<span class="badge-status warning">
                        <i class="fa-solid fa-hourglass-half"></i> Pending
                      </span>',

      'Void' => '<span class="badge-status secondary">
                    <i class="fa-solid fa-ban"></i> Void
                   </span>',

      default => '<span class="badge-status secondary">' . htmlspecialchars($status) . '</span>',
   };
}
?>

<!DOCTYPE html>
<html lang="id">

<head>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Casier | Klinik</title>

   <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet">

   <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      rel="stylesheet">

   <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
      rel="stylesheet">

   <link rel="stylesheet" href="assets/css/style.css">

   <style>
      .cashier-page {
         padding: 24px;
      }

      .page-header {
         display: flex;
         align-items: center;
         justify-content: space-between;
         gap: 20px;
         margin-bottom: 24px;
      }

      .page-title {
         margin: 0;
         font-size: 22px;
         font-weight: 700;
         color: #172033;
      }

      .page-subtitle {
         margin: 5px 0 0;
         color: #7a8499;
         font-size: 13px;
      }

      .btn-primary-custom {
         border: 0;
         background: #2563eb;
         color: #fff;
         padding: 10px 16px;
         border-radius: 10px;
         font-size: 13px;
         font-weight: 600;
      }

      .btn-primary-custom:hover {
         background: #1d4ed8;
         color: #fff;
      }

      /*
        |--------------------------------------------------------------------------
        | STAT CARDS
        |--------------------------------------------------------------------------
        */

      .stat-card {
         background: #fff;
         border: 1px solid #e9edf4;
         border-radius: 14px;
         padding: 18px;
         height: 100%;
      }

      .stat-icon {
         width: 42px;
         height: 42px;
         border-radius: 11px;
         display: flex;
         align-items: center;
         justify-content: center;
         margin-bottom: 14px;
         font-size: 17px;
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
         font-size: 12px;
         color: #7a8499;
         margin-bottom: 5px;
      }

      .stat-value {
         font-size: 20px;
         font-weight: 700;
         color: #172033;
      }

      .stat-description {
         margin-top: 5px;
         font-size: 11px;
         color: #98a2b3;
      }

      /*
        |--------------------------------------------------------------------------
        | QUICK PAYMENT
        |--------------------------------------------------------------------------
        */

      .payment-summary {
         background: linear-gradient(135deg, #2563eb, #1d4ed8);
         border-radius: 14px;
         padding: 20px;
         color: #fff;
         height: 100%;
      }

      .payment-summary-title {
         font-size: 13px;
         opacity: .85;
         margin-bottom: 7px;
      }

      .payment-summary-value {
         font-size: 25px;
         font-weight: 700;
      }

      .payment-summary-meta {
         font-size: 12px;
         margin-top: 8px;
         opacity: .8;
      }

      /*
        |--------------------------------------------------------------------------
        | FILTER
        |--------------------------------------------------------------------------
        */

      .filter-card {
         background: #fff;
         border: 1px solid #e9edf4;
         border-radius: 14px;
         padding: 16px;
         margin-top: 22px;
      }

      .filter-label {
         font-size: 11px;
         color: #7a8499;
         margin-bottom: 5px;
         font-weight: 600;
      }

      .form-control,
      .form-select {
         border-color: #e2e7ef;
         border-radius: 9px;
         font-size: 13px;
         min-height: 40px;
      }

      .form-control:focus,
      .form-select:focus {
         border-color: #93c5fd;
         box-shadow: 0 0 0 3px rgba(37, 99, 235, .08);
      }

      /*
        |--------------------------------------------------------------------------
        | TABLE
        |--------------------------------------------------------------------------
        */

      .table-card {
         background: #fff;
         border: 1px solid #e9edf4;
         border-radius: 14px;
         margin-top: 16px;
         overflow: hidden;
      }

      .table-card-header {
         padding: 17px 18px;
         border-bottom: 1px solid #edf0f5;
         display: flex;
         justify-content: space-between;
         align-items: center;
      }

      .table-card-title {
         font-size: 14px;
         font-weight: 700;
         color: #172033;
         margin: 0;
      }

      .table-card-subtitle {
         font-size: 11px;
         color: #98a2b3;
         margin-top: 3px;
      }

      .table {
         margin: 0;
         font-size: 12px;
      }

      .table thead th {
         background: #f8fafc;
         color: #667085;
         font-size: 10px;
         text-transform: uppercase;
         letter-spacing: .3px;
         font-weight: 700;
         border-bottom: 1px solid #e9edf4;
         padding: 12px 14px;
         white-space: nowrap;
      }

      .table tbody td {
         padding: 13px 14px;
         vertical-align: middle;
         border-color: #f0f2f6;
      }

      .invoice-number {
         color: #2563eb;
         font-weight: 700;
         font-size: 12px;
      }

      .patient-name {
         font-weight: 600;
         color: #273449;
      }

      .patient-meta {
         font-size: 10px;
         color: #98a2b3;
         margin-top: 2px;
      }

      .amount {
         font-weight: 700;
         color: #172033;
      }

      .badge-status {
         display: inline-flex;
         align-items: center;
         gap: 5px;
         border-radius: 20px;
         padding: 5px 9px;
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

      .payment-method {
         font-size: 11px;
         color: #475467;
      }

      .action-buttons {
         display: flex;
         gap: 5px;
      }

      .btn-action {
         width: 31px;
         height: 31px;
         border: 1px solid #e4e7ec;
         background: #fff;
         border-radius: 8px;
         display: inline-flex;
         align-items: center;
         justify-content: center;
         color: #667085;
         font-size: 12px;
         cursor: pointer;
      }

      .btn-action:hover {
         background: #f8fafc;
         color: #2563eb;
         border-color: #cbd5e1;
      }

      .btn-action.pay:hover {
         color: #059669;
      }

      .btn-action.danger:hover {
         color: #dc2626;
      }

      /*
        |--------------------------------------------------------------------------
        | MODAL
        |--------------------------------------------------------------------------
        */

      .modal-content {
         border: 0;
         border-radius: 16px;
         overflow: hidden;
      }

      .modal-header {
         border-bottom: 1px solid #edf0f5;
         padding: 17px 20px;
      }

      .modal-title {
         font-size: 15px;
         font-weight: 700;
      }

      .modal-body {
         padding: 20px;
      }

      .invoice-header {
         background: #f8fafc;
         border: 1px solid #edf0f5;
         border-radius: 11px;
         padding: 14px;
         margin-bottom: 16px;
      }

      .invoice-label {
         font-size: 10px;
         color: #98a2b3;
         margin-bottom: 3px;
      }

      .invoice-value {
         font-size: 12px;
         font-weight: 600;
         color: #273449;
      }

      .invoice-items {
         border: 1px solid #edf0f5;
         border-radius: 11px;
         overflow: hidden;
      }

      .invoice-items table {
         margin: 0;
      }

      .invoice-total {
         margin-top: 15px;
         background: #f8fafc;
         border-radius: 11px;
         padding: 14px;
      }

      .total-row {
         display: flex;
         justify-content: space-between;
         margin-bottom: 7px;
         font-size: 12px;
         color: #667085;
      }

      .total-row:last-child {
         margin-bottom: 0;
      }

      .total-row.grand {
         padding-top: 9px;
         margin-top: 9px;
         border-top: 1px solid #e4e7ec;
         color: #172033;
         font-size: 15px;
         font-weight: 700;
      }

      .payment-box {
         border: 1px solid #e4e7ec;
         border-radius: 11px;
         padding: 15px;
         margin-top: 15px;
      }

      .payment-box-title {
         font-size: 12px;
         font-weight: 700;
         color: #344054;
         margin-bottom: 12px;
      }

      .payment-method-btn {
         border: 1px solid #e4e7ec;
         background: #fff;
         border-radius: 9px;
         padding: 11px;
         text-align: center;
         cursor: pointer;
         font-size: 11px;
         color: #475467;
      }

      .payment-method-btn:hover,
      .payment-method-btn.active {
         border-color: #2563eb;
         background: #eff6ff;
         color: #2563eb;
      }

      .payment-method-btn i {
         display: block;
         font-size: 16px;
         margin-bottom: 5px;
      }

      .change-box {
         background: #ecfdf5;
         color: #047857;
         border-radius: 10px;
         padding: 11px 13px;
         font-size: 12px;
         font-weight: 600;
         display: flex;
         justify-content: space-between;
         margin-top: 10px;
      }

      /*
        |--------------------------------------------------------------------------
        | RESPONSIVE
        |--------------------------------------------------------------------------
        */

      @media (max-width: 992px) {

         .page-header {
            align-items: flex-start;
            flex-direction: column;
         }

         .cashier-page {
            padding: 16px;
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

            <div class="cashier-page">

               <!-- =====================================================
                     PAGE HEADER
                ====================================================== -->

               <div class="page-header">

                  <div>
                     <h1 class="page-title">
                        <i class="fa-solid fa-cash-register me-2 text-primary"></i>
                        Kasir
                     </h1>

                     <p class="page-subtitle">
                        Kelola transaksi dan pembayaran pasien hari ini.
                     </p>
                  </div>

                  <div>
                     <button
                        class="btn-primary-custom"
                        onclick="openQuickPayment()">
                        <i class="fa-solid fa-money-bill-wave me-1"></i>
                        Pembayaran Baru
                     </button>
                  </div>

               </div>


               <!-- =====================================================
                     STATISTICS
                ====================================================== -->

               <div class="row g-3">

                  <div class="col-xl-3 col-md-6">

                     <div class="stat-card">

                        <div class="stat-icon blue">
                           <i class="fa-solid fa-receipt"></i>
                        </div>

                        <div class="stat-label">
                           Transaksi Hari Ini
                        </div>

                        <div class="stat-value">
                           <?= $totalTransactions ?>
                        </div>

                        <div class="stat-description">
                           Semua invoice hari ini
                        </div>

                     </div>

                  </div>


                  <div class="col-xl-3 col-md-6">

                     <div class="stat-card">

                        <div class="stat-icon green">
                           <i class="fa-solid fa-circle-check"></i>
                        </div>

                        <div class="stat-label">
                           Sudah Dibayar
                        </div>

                        <div class="stat-value">
                           <?= $totalLunas ?>
                        </div>

                        <div class="stat-description">
                           Transaksi berstatus lunas
                        </div>

                     </div>

                  </div>


                  <div class="col-xl-3 col-md-6">

                     <div class="stat-card">

                        <div class="stat-icon orange">
                           <i class="fa-solid fa-clock"></i>
                        </div>

                        <div class="stat-label">
                           Belum Dibayar
                        </div>

                        <div class="stat-value">
                           <?= $totalBelumBayar ?>
                        </div>

                        <div class="stat-description">
                           Menunggu pembayaran
                        </div>

                     </div>

                  </div>


                  <div class="col-xl-3 col-md-6">

                     <div class="stat-card">

                        <div class="stat-icon red">
                           <i class="fa-solid fa-hourglass-half"></i>
                        </div>

                        <div class="stat-label">
                           Pending
                        </div>

                        <div class="stat-value">
                           <?= $totalPending ?>
                        </div>

                        <div class="stat-description">
                           Transaksi perlu diproses
                        </div>

                     </div>

                  </div>

               </div>


               <!-- =====================================================
                     REVENUE SUMMARY
                ====================================================== -->

               <div class="row g-3 mt-1">

                  <div class="col-lg-8">

                     <div class="filter-card h-100">

                        <div class="row g-3 align-items-end">

                           <div class="col-md-5">

                              <label class="filter-label">
                                 Cari transaksi
                              </label>

                              <div class="input-group">

                                 <span class="input-group-text bg-white border-end-0">
                                    <i class="fa-solid fa-search text-muted"></i>
                                 </span>

                                 <input
                                    type="text"
                                    id="searchTransaction"
                                    class="form-control border-start-0"
                                    placeholder="Invoice, No RM, nama pasien..."
                                    onkeyup="filterTransactions()">

                              </div>

                           </div>


                           <div class="col-md-3">

                              <label class="filter-label">
                                 Status
                              </label>

                              <select
                                 id="filterStatus"
                                 class="form-select"
                                 onchange="filterTransactions()">

                                 <option value="">Semua Status</option>
                                 <option value="Lunas">Lunas</option>
                                 <option value="Belum Bayar">Belum Bayar</option>
                                 <option value="Pending">Pending</option>

                              </select>

                           </div>


                           <div class="col-md-3">

                              <label class="filter-label">
                                 Pembayaran
                              </label>

                              <select
                                 id="filterPayment"
                                 class="form-select"
                                 onchange="filterTransactions()">

                                 <option value="">Semua</option>
                                 <option value="Tunai">Tunai</option>
                                 <option value="QRIS">QRIS</option>
                                 <option value="Debit">Debit</option>
                                 <option value="Transfer">Transfer</option>

                              </select>

                           </div>


                           <div class="col-md-1">

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

                  </div>


                  <div class="col-lg-4">

                     <div class="payment-summary">

                        <div class="payment-summary-title">
                           Total Pendapatan Hari Ini
                        </div>

                        <div class="payment-summary-value">
                           <?= rupiah($totalPaid) ?>
                        </div>

                        <div class="payment-summary-meta">
                           Dari <?= $totalLunas ?> transaksi lunas
                        </div>

                     </div>

                  </div>

               </div>


               <!-- =====================================================
                     TRANSACTION TABLE
                ====================================================== -->

               <div class="table-card">

                  <div class="table-card-header">

                     <div>
                        <div class="table-card-title">
                           Transaksi Hari Ini
                        </div>

                        <div class="table-card-subtitle">
                           Daftar tagihan dan pembayaran pasien
                        </div>
                     </div>

                     <div class="small text-muted">
                        <i class="fa-regular fa-calendar me-1"></i>
                        04 September 2026
                     </div>

                  </div>


                  <div class="table-responsive">

                     <table class="table" id="transactionTable">

                        <thead>

                           <tr>

                              <th>Invoice</th>

                              <th>Pasien</th>

                              <th>Dokter / Poli</th>

                              <th>Waktu</th>

                              <th>Total</th>

                              <th>Pembayaran</th>

                              <th>Status</th>

                              <th style="width:120px;">Aksi</th>

                           </tr>

                        </thead>

                        <tbody>

                           <?php foreach ($transactions as $trx): ?>

                              <tr
                                 data-search="<?= strtolower(
                                                   $trx['invoice_no'] . ' ' .
                                                      $trx['rm'] . ' ' .
                                                      $trx['patient']
                                                ) ?>"
                                 data-status="<?= htmlspecialchars($trx['status']) ?>"
                                 data-payment="<?= htmlspecialchars($trx['payment_method']) ?>">

                                 <td>

                                    <div class="invoice-number">
                                       <?= htmlspecialchars($trx['invoice_no']) ?>
                                    </div>

                                    <div class="patient-meta">
                                       <?= htmlspecialchars($trx['visit_no']) ?>
                                    </div>

                                 </td>


                                 <td>

                                    <div class="patient-name">
                                       <?= htmlspecialchars($trx['patient']) ?>
                                    </div>

                                    <div class="patient-meta">
                                       <?= htmlspecialchars($trx['rm']) ?>
                                    </div>

                                 </td>


                                 <td>

                                    <div class="patient-name">
                                       <?= htmlspecialchars($trx['doctor']) ?>
                                    </div>

                                    <div class="patient-meta">
                                       <?= htmlspecialchars($trx['poli']) ?>
                                    </div>

                                 </td>


                                 <td>

                                    <div class="patient-name">
                                       <?= htmlspecialchars($trx['time']) ?>
                                    </div>

                                    <div class="patient-meta">
                                       <?= htmlspecialchars($trx['date']) ?>
                                    </div>

                                 </td>


                                 <td>

                                    <div class="amount">
                                       <?= rupiah($trx['total']) ?>
                                    </div>

                                    <?php if ($trx['discount'] > 0): ?>

                                       <div class="patient-meta">
                                          Diskon <?= rupiah($trx['discount']) ?>
                                       </div>

                                    <?php endif; ?>

                                 </td>


                                 <td>

                                    <div class="payment-method">
                                       <?php if ($trx['payment_method'] !== '-'): ?>

                                          <?php
                                          $icon = match ($trx['payment_method']) {
                                             'Tunai' => 'fa-money-bill-wave',
                                             'QRIS' => 'fa-qrcode',
                                             'Debit' => 'fa-credit-card',
                                             'Transfer' => 'fa-building-columns',
                                             default => 'fa-wallet'
                                          };
                                          ?>

                                          <i class="fa-solid <?= $icon ?> me-1"></i>

                                       <?php endif; ?>

                                       <?= htmlspecialchars($trx['payment_method']) ?>
                                    </div>

                                 </td>


                                 <td>
                                    <?= statusBadge($trx['status']) ?>
                                 </td>


                                 <td>

                                    <div class="action-buttons">

                                       <button
                                          class="btn-action"
                                          title="Detail invoice"
                                          onclick="showInvoice(<?= $trx['id'] ?>)">
                                          <i class="fa-solid fa-eye"></i>
                                       </button>


                                       <?php if ($trx['status'] !== 'Lunas'): ?>

                                          <button
                                             class="btn-action pay"
                                             title="Proses pembayaran"
                                             onclick="openPayment(<?= $trx['id'] ?>)">
                                             <i class="fa-solid fa-cash-register"></i>
                                          </button>

                                       <?php else: ?>

                                          <button
                                             class="btn-action"
                                             title="Cetak struk"
                                             onclick="printReceipt('<?= htmlspecialchars($trx['invoice_no']) ?>')">
                                             <i class="fa-solid fa-print"></i>
                                          </button>

                                       <?php endif; ?>


                                       <button
                                          class="btn-action danger"
                                          title="Menu lainnya"
                                          onclick="showMore('<?= htmlspecialchars($trx['invoice_no']) ?>')">
                                          <i class="fa-solid fa-ellipsis"></i>
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

         </div>


         <?php require 'components/footer.php'; ?>

      </main>

   </div>


   <!-- =============================================================
     INVOICE DETAIL MODAL
============================================================== -->

   <div
      class="modal fade"
      id="invoiceModal"
      tabindex="-1">

      <div class="modal-dialog modal-lg modal-dialog-centered">

         <div class="modal-content">

            <div class="modal-header">

               <h5 class="modal-title">
                  <i class="fa-solid fa-file-invoice-dollar me-2 text-primary"></i>
                  Detail Invoice
               </h5>

               <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"></button>

            </div>

            <div class="modal-body">

               <div id="invoiceContent"></div>

            </div>

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

      <div class="modal-dialog modal-md modal-dialog-centered">

         <div class="modal-content">

            <div class="modal-header">

               <h5 class="modal-title">

                  <i class="fa-solid fa-cash-register me-2 text-primary"></i>

                  Proses Pembayaran

               </h5>

               <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"></button>

            </div>


            <div class="modal-body">

               <div id="paymentContent"></div>

            </div>

         </div>

      </div>

   </div>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


   <script>
      const transactions = <?= json_encode(
                              $transactions,
                              JSON_UNESCAPED_UNICODE |
                                 JSON_UNESCAPED_SLASHES
                           ) ?>;


      /*
      |--------------------------------------------------------------------------
      | FORMAT RUPIAH
      |--------------------------------------------------------------------------
      */

      function rupiah(value) {

         return new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0
         }).format(value);

      }


      /*
      |--------------------------------------------------------------------------
      | FIND TRANSACTION
      |--------------------------------------------------------------------------
      */

      function getTransaction(id) {

         return transactions.find(item => Number(item.id) === Number(id));

      }


      /*
      |--------------------------------------------------------------------------
      | FILTER
      |--------------------------------------------------------------------------
      */

      function filterTransactions() {

         const search = document
            .getElementById('searchTransaction')
            .value
            .toLowerCase();

         const status = document
            .getElementById('filterStatus')
            .value;

         const payment = document
            .getElementById('filterPayment')
            .value;

         const rows = document.querySelectorAll(
            '#transactionTable tbody tr'
         );

         rows.forEach(row => {

            const rowSearch = row.dataset.search || '';
            const rowStatus = row.dataset.status || '';
            const rowPayment = row.dataset.payment || '';

            const matchSearch = !search ||
               rowSearch.includes(search);

            const matchStatus = !status ||
               rowStatus === status;

            const matchPayment = !payment ||
               rowPayment === payment;

            row.style.display =
               matchSearch &&
               matchStatus &&
               matchPayment ?
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

         document.getElementById('searchTransaction').value = '';
         document.getElementById('filterStatus').value = '';
         document.getElementById('filterPayment').value = '';

         filterTransactions();

      }


      /*
      |--------------------------------------------------------------------------
      | SHOW INVOICE
      |--------------------------------------------------------------------------
      */

      function showInvoice(id) {

         const trx = getTransaction(id);

         if (!trx) return;

         let items = '';

         trx.items.forEach(item => {

            items += `
            <tr>

                <td>
                    ${item.name}
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


         document.getElementById('invoiceContent').innerHTML = `

        <div class="invoice-header">

            <div class="row g-3">

                <div class="col-md-6">

                    <div class="invoice-label">
                        Nomor Invoice
                    </div>

                    <div class="invoice-value">
                        ${trx.invoice_no}
                    </div>

                </div>

                <div class="col-md-3">

                    <div class="invoice-label">
                        Tanggal
                    </div>

                    <div class="invoice-value">
                        ${trx.date}
                    </div>

                </div>

                <div class="col-md-3">

                    <div class="invoice-label">
                        Waktu
                    </div>

                    <div class="invoice-value">
                        ${trx.time}
                    </div>

                </div>


                <div class="col-md-6">

                    <div class="invoice-label">
                        Pasien
                    </div>

                    <div class="invoice-value">
                        ${trx.patient}
                    </div>

                </div>

                <div class="col-md-3">

                    <div class="invoice-label">
                        No. RM
                    </div>

                    <div class="invoice-value">
                        ${trx.rm}
                    </div>

                </div>

                <div class="col-md-3">

                    <div class="invoice-label">
                        Poli
                    </div>

                    <div class="invoice-value">
                        ${trx.poli}
                    </div>

                </div>

            </div>

        </div>


        <div class="invoice-items">

            <table class="table">

                <thead>

                    <tr>

                        <th>Item</th>

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


        <div class="invoice-total">

            <div class="total-row">

                <span>
                    Subtotal
                </span>

                <span>
                    ${rupiah(trx.subtotal)}
                </span>

            </div>


            <div class="total-row">

                <span>
                    Diskon
                </span>

                <span>
                    - ${rupiah(trx.discount)}
                </span>

            </div>


            <div class="total-row grand">

                <span>
                    Total Tagihan
                </span>

                <span>
                    ${rupiah(trx.total)}
                </span>

            </div>


            <div class="total-row mt-2">

                <span>
                    Sudah Dibayar
                </span>

                <span>
                    ${rupiah(trx.paid)}
                </span>

            </div>


            <div class="total-row">

                <span>
                    Sisa Tagihan
                </span>

                <span class="text-danger fw-bold">
                    ${rupiah(Math.max(0, trx.total - trx.paid))}
                </span>

            </div>

        </div>

    `;


         bootstrap.Modal
            .getOrCreateInstance(
               document.getElementById('invoiceModal')
            )
            .show();

      }


      /*
      |--------------------------------------------------------------------------
      | OPEN PAYMENT
      |--------------------------------------------------------------------------
      */

      function openPayment(id) {

         const trx = getTransaction(id);

         if (!trx) return;

         const remaining =
            Math.max(0, trx.total - trx.paid);


         document.getElementById('paymentContent').innerHTML = `

        <div class="invoice-header">

            <div class="row g-3">

                <div class="col-8">

                    <div class="invoice-label">
                        Pasien
                    </div>

                    <div class="invoice-value">
                        ${trx.patient}
                    </div>

                    <div class="invoice-label mt-2">
                        ${trx.rm} · ${trx.invoice_no}
                    </div>

                </div>

                <div class="col-4 text-end">

                    <div class="invoice-label">
                        Sisa Tagihan
                    </div>

                    <div
                        class="fw-bold text-danger"
                        style="font-size:18px;"
                    >
                        ${rupiah(remaining)}
                    </div>

                </div>

            </div>

        </div>


        <div class="payment-box">

            <div class="payment-box-title">
                Metode Pembayaran
            </div>

            <div class="row g-2">

                <div class="col-3">

                    <div
                        class="payment-method-btn active"
                        onclick="selectPaymentMethod(this, 'Tunai')"
                    >

                        <i class="fa-solid fa-money-bill-wave"></i>

                        Tunai

                    </div>

                </div>


                <div class="col-3">

                    <div
                        class="payment-method-btn"
                        onclick="selectPaymentMethod(this, 'QRIS')"
                    >

                        <i class="fa-solid fa-qrcode"></i>

                        QRIS

                    </div>

                </div>


                <div class="col-3">

                    <div
                        class="payment-method-btn"
                        onclick="selectPaymentMethod(this, 'Debit')"
                    >

                        <i class="fa-solid fa-credit-card"></i>

                        Debit

                    </div>

                </div>


                <div class="col-3">

                    <div
                        class="payment-method-btn"
                        onclick="selectPaymentMethod(this, 'Transfer')"
                    >

                        <i class="fa-solid fa-building-columns"></i>

                        Transfer

                    </div>

                </div>

            </div>

            <input
                type="hidden"
                id="selectedPaymentMethod"
                value="Tunai"
            >

        </div>


        <div class="mt-3">

            <label class="filter-label">
                Jumlah Dibayar
            </label>

            <input
                type="number"
                id="paymentAmount"
                class="form-control form-control-lg"
                value="${remaining}"
                min="${remaining}"
                oninput="calculateChange(${remaining})"
            >

        </div>


        <div
            id="changeBox"
            class="change-box"
        >

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
                onclick="confirmPayment(${trx.id})"
            >

                <i class="fa-solid fa-check me-1"></i>

                Konfirmasi Pembayaran

            </button>

        </div>

    `;


         bootstrap.Modal
            .getOrCreateInstance(
               document.getElementById('paymentModal')
            )
            .show();

      }


      /*
      |--------------------------------------------------------------------------
      | SELECT PAYMENT METHOD
      |--------------------------------------------------------------------------
      */

      function selectPaymentMethod(element, method) {

         document
            .querySelectorAll('.payment-method-btn')
            .forEach(btn => btn.classList.remove('active'));

         element.classList.add('active');

         document.getElementById(
            'selectedPaymentMethod'
         ).value = method;

      }


      /*
      |--------------------------------------------------------------------------
      | CALCULATE CHANGE
      |--------------------------------------------------------------------------
      */

      function calculateChange(required) {

         const amount =
            parseFloat(
               document.getElementById('paymentAmount').value
            ) || 0;

         const change =
            Math.max(0, amount - required);

         document.getElementById(
            'changeAmount'
         ).innerText = rupiah(change);

      }


      /*
      |--------------------------------------------------------------------------
      | CONFIRM PAYMENT
      |--------------------------------------------------------------------------
      */

      function confirmPayment(id) {

         const trx = getTransaction(id);

         if (!trx) return;

         const amount =
            parseFloat(
               document.getElementById('paymentAmount').value
            ) || 0;

         const required =
            Math.max(0, trx.total - trx.paid);

         if (amount < required) {

            alert(
               'Jumlah pembayaran masih kurang dari total tagihan.'
            );

            return;
         }


         const method =
            document.getElementById(
               'selectedPaymentMethod'
            ).value;


         bootstrap.Modal
            .getOrCreateInstance(
               document.getElementById('paymentModal')
            )
            .hide();


         setTimeout(() => {

            alert(
               'Pembayaran berhasil diproses.\n\n' +
               'Invoice: ' + trx.invoice_no + '\n' +
               'Pasien: ' + trx.patient + '\n' +
               'Metode: ' + method + '\n' +
               'Jumlah: ' + rupiah(amount)
            );

         }, 300);

      }


      /*
      |--------------------------------------------------------------------------
      | QUICK PAYMENT
      |--------------------------------------------------------------------------
      */

      function openQuickPayment() {

         alert(
            'Pembayaran baru.\n\n' +
            'Pada implementasi database, fitur ini dapat digunakan untuk ' +
            'mencari invoice/tagihan pasien yang belum dibayar.'
         );

      }


      /*
      |--------------------------------------------------------------------------
      | PRINT RECEIPT
      |--------------------------------------------------------------------------
      */

      function printReceipt(invoiceNo) {

         alert(
            'Mencetak struk untuk invoice ' +
            invoiceNo
         );

      }


      /*
      |--------------------------------------------------------------------------
      | MORE ACTION
      |--------------------------------------------------------------------------
      */

      function showMore(invoiceNo) {

         const action = confirm(
            'Invoice ' +
            invoiceNo +
            '\n\nKlik OK untuk simulasi VOID transaksi.'
         );

         if (action) {

            alert(
               'Fitur VOID akan meminta alasan pembatalan dan konfirmasi supervisor.'
            );

         }

      }
   </script>

</body>

</html>