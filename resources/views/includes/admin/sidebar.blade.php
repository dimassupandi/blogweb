 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
         <div class="sidebar-brand-text mx-3">
             BlogWeb Admin
         </div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
         <a class="nav-link" href="{{route('dashboard')}}">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>

    <hr class="sidebar-divider">
    <li class="nav-item active">
         <a class="nav-link" href="">
             <i class="fas fa-fw fa-newspaper"></i>
             <span>Berita Sella Sello</span></a>
     </li>

    <hr class="sidebar-divider">
    <li class="nav-item active">
         <a class="nav-link" href="{{route('gallery.index')}}">
             <i class="fas fa-fw fa-images"></i>
             <span>Galeri Sella Sello</span></a>
     </li>

    <hr class="sidebar-divider">
    <li class="nav-item active">
         <a class="nav-link" href="{{route('member.index')}}">
             <i class="fas fa-fw fa-users"></i>
             <span>Anggota Kece</span></a>
     </li>

    <hr class="sidebar-divider">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>



 </ul>
 <!-- End of Sidebar -->