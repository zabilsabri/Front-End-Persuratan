<div class="main-sidebar sidebar-style-2">
   <aside id="sidebar-wrapper">
       <div class="sidebar-brand mb-4">
           <a href="{{ route('dashboard-admin') }}">
               <img src="{{ asset('image/Logo.png') }}" alt="">
           </a>
       </div>
       <div class="sidebar-brand sidebar-brand-sm">
           <a href="index.html">
               <img src="{{ asset('image/icon.png') }}" alt="">
           </a>
       </div>
       <ul class="sidebar-menu">
           <li class="menu-header">Home</li>
           <li class="nav-item dropdown">
               <a href="#" class="nav-link has-dropdown"><i
                       class="fas fa-th-large"></i><span>Dashboard</span></a>
               <ul class="dropdown-menu">
                   <li>
                       <a class="nav-link" href="{{ route('surat-masuk-admin') }} ">Surat Masuk</a>
                   </li>
                   <li>
                       <a class="nav-link" href="{{ route('surat-keluar-admin') }} ">Surat Keluar</a>
                   </li>
                   <li>
                       <a class="nav-link" href="{{ route('berita-admin') }} ">Berita</a>
                   </li>
                   <li>
                       <a class="nav-link" href="#">Arsip Surat</a>
                   </li>
                   <li>
                       <a class="nav-link" href="#">Hasil Disposisi</a>
                   </li>
                   <li>
                       <a class="nav-link" href="{{ route('verifikasi') }} ">Data Warga</a>
                   </li>
               </ul>
           </li>
       </ul>
   </aside>
</div>