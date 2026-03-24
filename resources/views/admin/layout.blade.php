<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Admin Dashboard')</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

  <!-- Top Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-indigo shadow-sm">
    <div class="container-fluid">
      <button id="sidebarToggle" class="btn btn-outline-light me-3">☰</button>

      <a class="navbar-brand fw-bold" href="{{route('profile')}}">Profile Admin</a>

      <!-- زرار Home page في أقصى اليمين -->
      <a class="btn btn-outline-light ms-auto" href="{{route('index')}}">Home page</a>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row min-vh-100">

      <!-- Sidebar -->
      <aside id="sidebar" class="col-md-3 col-lg-2 d-flex flex-column bg-navy text-white shadow-sm p-3 transition-all">
        <div>
          <ul class="nav flex-column gap-5">
            <li class="nav-item">
              <a href="{{ route('show') }}" class="nav-link @if(request()->routeIs('mealsList')) active @endif text-white fw-semibold rounded px-3 py-2 bg-indigo">
                <span class="sidebar-text">Manage Users</span>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('mealsList') }}" class="nav-link @if(request()->routeIs('mealsList')) active @endif text-white fw-semibold rounded px-3 py-2 bg-indigo">
                <span class="sidebar-text">Manage Meals</span>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('contactsList') }}" class="nav-link @if(request()->routeIs('contactsList')) active @endif text-white fw-semibold rounded px-3 py-2 bg-indigo">
                <span class="sidebar-text">Manage Contacts</span>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('admin.orders') }}" class="nav-link @if(request()->routeIs('admin.orders')) active @endif text-white fw-semibold rounded px-3 py-2 bg-indigo">
                <span class="sidebar-text">Manage Orders</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="mt-auto pt-3 border-top border-secondary">
          <button class="btn btn-crimson w-100 fw-bold shadow-sm"><a href="{{route('logout')}}" >   <span class="sidebar-text">Logout</span></a></button>
        </div>
      </aside>

      <!-- Main Content -->
      <main class="col-md-9 col-lg-10 px-md-5 py-5">
        @yield('content') <!-- Each page will inject its content here -->
      </main>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    const toggleBtn = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');
    const textElements = document.querySelectorAll('.sidebar-text');
 
    toggleBtn.addEventListener('click', () => {
      sidebar.classList.toggle('collapsed');
      textElements.forEach(el => el.classList.toggle('d-none'));
    });
  </script>

  <style>
    .bg-indigo { background-color: #d2b48c!important; color:black; }
    .btn-indigo { background-color: #deb887; border:none; color:black; }
    .btn-indigo:hover { background-color: #c19a6b;color: black }
    .bg-navy { background-color:#c19a6b !important;color: black }
    .btn-crimson { background-color: #dc2626; color: black; }
    .btn-crimson:hover { background-color: #b91c1c; }

    #sidebar { transition: all 0.3s ease; }
    #sidebar.collapsed { width: 70px !important; }
    #sidebar.collapsed .nav-link { justify-content: center; text-align: center; }
    .hover-link:hover { background-color: rgba(255, 255, 255, 0.15); transition: 0.2s ease; }
  </style>

</body>
</html>
