<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'Dashboard Admin - Mug & Plate Store' }}</title>

  {{-- CSS utama layout --}}
  <link rel="stylesheet" href="{{ asset('css/admin/layout.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin/das.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin/orders.css')}}">
  <link rel="stylesheet" href="{{ asset('css/admin/products.css')}}">
  <link rel="stylesheet" href="{{ asset('css/admin/users.css')}}">

  {{-- CSS tambahan dari halaman --}}
  {{ $styles ?? '' }}

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
  <div class="container">
    <!-- Header -->
    <header class="header">
      <h1>Mug & Plate Store - Admin Dashboard</h1>
      <div class="user-info">
        <span>Welcome, Admin</span>
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit" class="logout-btn">Logout</button>
        </form>
      </div>
    </header>

    <!-- Sidebar -->
    <nav class="sidebar">
      <ul class="nav-menu">
        <li><a href="{{ route('admin.index2') }}"><span class="icon">📊</span> Dashboard</a></li>
        <li><a href="{{ route('admin.products') }}"><span class="icon">🛍</span> Products</a></li>
        <li><a href="{{ route('admin.orders') }}"><span class="icon">📦</span> Orders</a></li>
        <li><a href="{{ route('admin.users') }}"><span class="icon">👥</span> Users</a></li>
      </ul>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
      {{ $slot }}
    </main>
  </div>

  {{-- Script tambahan dari halaman --}}
  {{ $scripts ?? '' }}
</body>

</html>
