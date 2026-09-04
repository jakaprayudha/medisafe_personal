<!-- =========================================================
     TOP HEADER
     ========================================================= -->

<header class="top-header">

   <!-- Mobile Menu -->
   <button
      type="button"
      class="mobile-menu"
      id="mobileMenu"
      aria-label="Buka menu">

      <i class="fa-solid fa-bars"></i>

   </button>


   <!-- Title -->
   <div class="header-title-wrapper">

      <div class="header-title">
         Dashboard
      </div>

      <div class="header-subtitle">
         Overview operasional klinik
      </div>

   </div>


   <!-- Actions -->
   <div class="header-actions">


      <!-- Search -->
      <button
         type="button"
         class="header-button"
         title="Pencarian">

         <i class="fa-solid fa-magnifying-glass"></i>

      </button>


      <!-- Notification -->
      <button
         type="button"
         class="header-button"
         title="Notifikasi">

         <i class="fa-regular fa-bell"></i>

         <span class="notification-dot"></span>

      </button>


      <!-- Divider -->
      <div class="header-divider"></div>


      <!-- =================================================
             PROFILE
             ================================================= -->

      <div class="profile dropdown">

         <!-- Profile Trigger -->
         <button
            type="button"
            class="profile-trigger"
            data-bs-toggle="dropdown"
            aria-expanded="false">

            <!-- Avatar -->
            <div class="profile-avatar">
               A
            </div>


            <!-- Information -->
            <div class="profile-info">

               <div class="profile-name">
                  Administrator
               </div>

               <div class="profile-role">
                  Administrator
               </div>

            </div>


            <!-- Arrow -->
            <i class="fa-solid fa-chevron-down profile-arrow"></i>

         </button>


         <!-- =================================================
                 DROPDOWN MENU
                 ================================================= -->

         <div class="dropdown-menu dropdown-menu-end profile-menu">


            <!-- Profile Header -->
            <div class="profile-menu-header">

               <div class="profile-menu-avatar">
                  A
               </div>


               <div class="profile-menu-user">

                  <div class="profile-menu-name">
                     Administrator
                  </div>

                  <div class="profile-menu-role">
                     Administrator
                  </div>

               </div>

            </div>


            <div class="dropdown-divider"></div>


            <!-- Profile -->
            <a
               href="../profile"
               class="dropdown-item">

               <i class="fa-regular fa-user"></i>

               <span>
                  Profil Saya
               </span>

            </a>


            <!-- Change Password -->
            <a
               href="../change-password"
               class="dropdown-item">

               <i class="fa-solid fa-key"></i>

               <span>
                  Ubah Password
               </span>

            </a>


            <div class="dropdown-divider"></div>


            <!-- Logout -->
            <a
               href="/medisafe_personal/logout"
               class="dropdown-item logout-item">

               <i class="fa-solid fa-right-from-bracket"></i>

               <span>
                  Logout
               </span>

            </a>

         </div>

      </div>

   </div>

</header>


<!-- =========================================================
     PROFILE DROPDOWN CSS
     ========================================================= -->

<style>
   /* =========================================================
   PROFILE
   ========================================================= */

   .profile {
      position: relative;
   }


   /* =========================================================
   PROFILE TRIGGER
   ========================================================= */

   .profile-trigger {

      border: 0;

      background: transparent;

      padding: 5px 0;

      display: flex;

      align-items: center;

      gap: 10px;

      cursor: pointer;

      color: inherit;

      outline: none;
   }


   .profile-trigger:hover {
      background: transparent;
   }


   .profile-trigger:focus {
      outline: none;

      box-shadow: none;
   }


   /* =========================================================
   PROFILE AVATAR
   ========================================================= */

   .profile-avatar {

      width: 38px;

      height: 38px;

      min-width: 38px;

      border-radius: 50%;

      background: #eaf2ff;

      color: #0d6efd;

      display: flex;

      align-items: center;

      justify-content: center;

      font-size: 14px;

      font-weight: 700;
   }


   /* =========================================================
   PROFILE INFORMATION
   ========================================================= */

   .profile-info {

      text-align: left;

      min-width: 110px;
   }


   .profile-name {

      font-size: 13px;

      font-weight: 700;

      color: #172033;

      line-height: 1.3;
   }


   .profile-role {

      font-size: 11px;

      color: #8a94a6;

      margin-top: 2px;
   }


   /* =========================================================
   PROFILE ARROW
   ========================================================= */

   .profile-arrow {

      font-size: 10px;

      color: #8a94a6;

      transition: transform .2s ease;
   }


   .profile-trigger[aria-expanded="true"] .profile-arrow {

      transform: rotate(180deg);

   }


   /* =========================================================
   DROPDOWN
   ========================================================= */

   .profile-menu {

      width: 245px;

      margin-top: 10px !important;

      padding: 8px;

      border: 1px solid #e9edf3;

      border-radius: 14px;

      background: #ffffff;

      box-shadow:
         0 12px 35px rgba(23, 32, 51, .12);

   }


   /* =========================================================
   PROFILE MENU HEADER
   ========================================================= */

   .profile-menu-header {

      display: flex;

      align-items: center;

      gap: 11px;

      padding: 10px;
   }


   .profile-menu-avatar {

      width: 42px;

      height: 42px;

      min-width: 42px;

      border-radius: 50%;

      background: #eaf2ff;

      color: #0d6efd;

      display: flex;

      align-items: center;

      justify-content: center;

      font-size: 15px;

      font-weight: 700;
   }


   .profile-menu-name {

      font-size: 13px;

      font-weight: 700;

      color: #172033;
   }


   .profile-menu-role {

      font-size: 11px;

      color: #8a94a6;

      margin-top: 3px;
   }


   /* =========================================================
   DROPDOWN ITEM
   ========================================================= */

   .profile-menu .dropdown-item {

      display: flex;

      align-items: center;

      gap: 11px;

      padding: 10px 11px;

      border-radius: 9px;

      font-size: 13px;

      color: #5f697a;

      transition:
         background .15s ease,
         color .15s ease;
   }


   .profile-menu .dropdown-item i {

      width: 18px;

      text-align: center;

      color: #7c8798;

   }


   .profile-menu .dropdown-item:hover {

      background: #f3f6fb;

      color: #0d6efd;

   }


   .profile-menu .dropdown-item:hover i {

      color: #0d6efd;

   }


   /* =========================================================
   LOGOUT
   ========================================================= */

   .profile-menu .logout-item {

      color: #dc3545;

   }


   .profile-menu .logout-item i {

      color: #dc3545;

   }


   .profile-menu .logout-item:hover {

      background: #fff1f1;

      color: #dc3545;

   }


   .profile-menu .logout-item:hover i {

      color: #dc3545;

   }


   /* =========================================================
   DIVIDER
   ========================================================= */

   .profile-menu .dropdown-divider {

      margin: 7px 3px;

      border-color: #edf0f4;

   }


   /* =========================================================
   MOBILE
   ========================================================= */

   @media (max-width: 768px) {

      .profile-info,
      .profile-arrow {

         display: none;

      }

      .profile-menu {

         width: 230px;

      }

   }
</style>


<!-- =========================================================
     BOOTSTRAP JS
     Pastikan hanya dipanggil sekali dalam halaman
     ========================================================= -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>