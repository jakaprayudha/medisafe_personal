<!DOCTYPE html>
<html lang="id">

<head>

   <meta charset="UTF-8">

   <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0">

   <meta
      name="description"
      content="Dashboard Klinik Management System">

   <title>
      Dashboard | Klinik Management System
   </title>


   <!-- =========================================================
        GOOGLE FONT
   ========================================================== -->

   <link
      rel="preconnect"
      href="https://fonts.googleapis.com">

   <link
      rel="preconnect"
      href="https://fonts.gstatic.com"
      crossorigin>

   <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet">


   <!-- =========================================================
        BOOTSTRAP
   ========================================================== -->

   <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet">


   <!-- =========================================================
        FONT AWESOME
   ========================================================== -->

   <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


   <!-- =========================================================
        CHART JS
   ========================================================== -->

   <script
      src="https://cdn.jsdelivr.net/npm/chart.js">
   </script>

   <link
      href="assets/css/style.css"
      rel="stylesheet">



</head>


<body>


   <div class="app">


      <!-- =========================================================
        SIDEBAR
   ========================================================== -->
      <?php require 'components/sidebar.php' ?>
      <!-- =========================================================
        MAIN
   ========================================================== -->

      <div class="main">


         <!-- =====================================================
           HEADER
      ====================================================== -->

         <?php require 'components/header.php' ?>


         <!-- =====================================================
           CONTENT
      ====================================================== -->

         <main class="content">


            <!-- PAGE HEADING -->

            <div class="page-heading">


               <div>

                  <h1 class="page-title">

                     Dashboard

                  </h1>


                  <p class="page-description">

                     Selamat datang kembali.
                     Berikut ringkasan aktivitas klinik hari ini.

                  </p>

               </div>


               <div class="date-info">

                  <i class="fa-regular fa-calendar"></i>

                  Jumat, 04 September 2026

               </div>


            </div>


            <!-- =================================================
              STATISTICS
         ================================================== -->

            <div class="stat-grid">


               <!-- TOTAL PASIEN -->

               <div class="stat-card">


                  <div class="stat-top">

                     <div class="stat-icon blue">

                        <i class="fa-solid fa-users"></i>

                     </div>

                  </div>


                  <div class="stat-label">

                     Total Pasien

                  </div>


                  <div class="stat-value">

                     1,284

                  </div>


                  <div class="stat-change up">

                     <i class="fa-solid fa-arrow-up"></i>

                     8.4% dari bulan lalu

                  </div>


               </div>


               <!-- KUNJUNGAN -->

               <div class="stat-card">


                  <div class="stat-top">

                     <div class="stat-icon green">

                        <i class="fa-solid fa-user-injured"></i>

                     </div>

                  </div>


                  <div class="stat-label">

                     Kunjungan Hari Ini

                  </div>


                  <div class="stat-value">

                     86

                  </div>


                  <div class="stat-change up">

                     <i class="fa-solid fa-arrow-up"></i>

                     12.5% dari kemarin

                  </div>


               </div>


               <!-- FARMASI -->

               <div class="stat-card">


                  <div class="stat-top">

                     <div class="stat-icon orange">

                        <i class="fa-solid fa-pills"></i>

                     </div>

                  </div>


                  <div class="stat-label">

                     Transaksi Farmasi

                  </div>


                  <div class="stat-value">

                     54

                  </div>


                  <div class="stat-change neutral">

                     Hari ini

                  </div>


               </div>


               <!-- PENDAPATAN -->

               <div class="stat-card">


                  <div class="stat-top">

                     <div class="stat-icon purple">

                        <i class="fa-solid fa-money-bill-wave"></i>

                     </div>

                  </div>


                  <div class="stat-label">

                     Pendapatan Hari Ini

                  </div>


                  <div class="stat-value">

                     Rp 8,4 Jt

                  </div>


                  <div class="stat-change up">

                     <i class="fa-solid fa-arrow-up"></i>

                     14.8% dari kemarin

                  </div>


               </div>


            </div>


            <!-- =================================================
              CHART + ACTIVITY
         ================================================== -->

            <div class="dashboard-grid">


               <!-- KUNJUNGAN CHART -->

               <div class="dashboard-card">


                  <div class="card-header-custom">


                     <div>

                        <div class="card-title">

                           Statistik Kunjungan

                        </div>


                        <div class="card-subtitle">

                           Jumlah kunjungan pasien selama 7 hari terakhir

                        </div>

                     </div>


                     <a
                        href="#"
                        class="card-link">

                        Lihat Laporan

                     </a>


                  </div>


                  <div class="chart-wrapper">

                     <canvas
                        id="visitChart">
                     </canvas>

                  </div>


               </div>


               <!-- AKTIVITAS -->

               <div class="dashboard-card">


                  <div class="card-header-custom">


                     <div>

                        <div class="card-title">

                           Aktivitas Terbaru

                        </div>


                        <div class="card-subtitle">

                           Aktivitas sistem

                        </div>

                     </div>


                     <a
                        href="#"
                        class="card-link">

                        Semua

                     </a>


                  </div>


                  <div class="activity-list">


                     <!-- Activity -->

                     <div class="activity-item">


                        <div class="activity-icon">

                           <i class="fa-solid fa-user-plus"></i>

                        </div>


                        <div class="activity-content">


                           <div class="activity-title">

                              Pasien baru didaftarkan

                           </div>


                           <div class="activity-detail">

                              RM-0001284

                           </div>


                           <div class="activity-time">

                              5 menit yang lalu

                           </div>

                        </div>


                     </div>


                     <div class="activity-item">


                        <div class="activity-icon">

                           <i class="fa-solid fa-file-medical"></i>

                        </div>


                        <div class="activity-content">


                           <div class="activity-title">

                              RME pasien diperbarui

                           </div>


                           <div class="activity-detail">

                              Poli Umum

                           </div>


                           <div class="activity-time">

                              18 menit yang lalu

                           </div>

                        </div>


                     </div>


                     <div class="activity-item">


                        <div class="activity-icon">

                           <i class="fa-solid fa-pills"></i>

                        </div>


                        <div class="activity-content">


                           <div class="activity-title">

                              Resep masuk ke farmasi

                           </div>


                           <div class="activity-detail">

                              RX-000452

                           </div>


                           <div class="activity-time">

                              27 menit yang lalu

                           </div>

                        </div>


                     </div>


                     <div class="activity-item">


                        <div class="activity-icon">

                           <i class="fa-solid fa-cash-register"></i>

                        </div>


                        <div class="activity-content">


                           <div class="activity-title">

                              Pembayaran berhasil

                           </div>


                           <div class="activity-detail">

                              INV-000921

                           </div>


                           <div class="activity-time">

                              42 menit yang lalu

                           </div>

                        </div>


                     </div>


                     <div class="activity-item">


                        <div class="activity-icon">

                           <i class="fa-solid fa-user-doctor"></i>

                        </div>


                        <div class="activity-content">


                           <div class="activity-title">

                              Pemeriksaan selesai

                           </div>


                           <div class="activity-detail">

                              Poli Umum

                           </div>


                           <div class="activity-time">

                              1 jam yang lalu

                           </div>

                        </div>


                     </div>


                  </div>


               </div>


            </div>


            <!-- =================================================
              QUICK ACCESS
         ================================================== -->

            <div class="quick-menu">


               <a
                  href="#"
                  class="quick-item">


                  <div class="quick-icon">

                     <i class="fa-solid fa-user-plus"></i>

                  </div>


                  <div class="quick-text">

                     Registrasi Pasien

                  </div>


               </a>


               <a
                  href="#"
                  class="quick-item">


                  <div class="quick-icon">

                     <i class="fa-solid fa-users"></i>

                  </div>


                  <div class="quick-text">

                     Data Pasien

                  </div>


               </a>


               <a
                  href="#"
                  class="quick-item">


                  <div class="quick-icon">

                     <i class="fa-solid fa-file-medical"></i>

                  </div>


                  <div class="quick-text">

                     Pengisian RME

                  </div>


               </a>


               <a
                  href="#"
                  class="quick-item">


                  <div class="quick-icon">

                     <i class="fa-solid fa-chart-column"></i>

                  </div>


                  <div class="quick-text">

                     Laporan

                  </div>


               </a>


            </div>


         </main>


         <!-- =====================================================
           FOOTER
      ====================================================== -->

         <?php require 'components/footer.php' ?>

      </div>

   </div>


   <!-- =========================================================
     JAVASCRIPT
========================================================== -->

   <script>
      document.addEventListener(
         'DOMContentLoaded',
         function() {


            /* =====================================================
               SIDEBAR MOBILE
            ====================================================== */

            const sidebar =
               document.getElementById('sidebar');

            const sidebarOverlay =
               document.getElementById('sidebarOverlay');

            const mobileMenu =
               document.getElementById('mobileMenu');

            const sidebarClose =
               document.getElementById('sidebarClose');


            function openSidebar() {

               sidebar.classList.add('show');

               sidebarOverlay.classList.add('show');

               document.body.style.overflow = 'hidden';

            }


            function closeSidebar() {

               sidebar.classList.remove('show');

               sidebarOverlay.classList.remove('show');

               document.body.style.overflow = '';

            }


            mobileMenu.addEventListener(
               'click',
               openSidebar
            );


            sidebarClose.addEventListener(
               'click',
               closeSidebar
            );


            sidebarOverlay.addEventListener(
               'click',
               closeSidebar
            );


            /* =====================================================
               CLOSE MOBILE SIDEBAR AFTER MENU CLICK
            ====================================================== */

            document
               .querySelectorAll('.menu-item')
               .forEach(
                  function(item) {

                     item.addEventListener(
                        'click',
                        function() {

                           if (
                              window.innerWidth <= 991
                           ) {

                              closeSidebar();

                           }

                        }
                     );

                  }
               );


            /* =====================================================
               VISIT CHART
            ====================================================== */

            const chartElement =
               document.getElementById(
                  'visitChart'
               );


            if (chartElement) {


               new Chart(
                  chartElement, {

                     type: 'line',

                     data: {

                        labels: [
                           'Sen',
                           'Sel',
                           'Rab',
                           'Kam',
                           'Jum',
                           'Sab',
                           'Min'
                        ],

                        datasets: [

                           {

                              label: 'Kunjungan',

                              data: [
                                 42,
                                 55,
                                 48,
                                 67,
                                 61,
                                 73,
                                 38
                              ],

                              borderWidth: 2,

                              tension: 0.4,

                              fill: true,

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

                           }

                        },

                        scales: {

                           y: {

                              beginAtZero: true,

                              grid: {

                                 color: 'rgba(226,232,240,.7)'

                              },

                              ticks: {

                                 font: {

                                    size: 9

                                 }

                              }

                           },


                           x: {

                              grid: {

                                 display: false

                              },

                              ticks: {

                                 font: {

                                    size: 9

                                 }

                              }

                           }

                        }

                     }

                  }
               );

            }


         }
      );
   </script>


</body>

</html>