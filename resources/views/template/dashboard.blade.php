<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Green Club</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            margin: 0;
        }

        .sidebar {
            background-color: #91dfa2;
            color: white;
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .sidebar h3 {
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            padding: 15px 0;
            border-bottom: 1px solid white;
        }

        .sidebar img {
            display: block;
            margin: 20px auto 10px auto;
            width: 100px;
            height: auto;
            border-radius: 50%;
        }

        .sidebar .nav-link {
            color: white;
            font-weight: 500;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: white;
            color: #218838;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
            overflow-y: auto;
            height: 100vh;
        }

        .main-content h2 {
            color: #28a745;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .main-content {
                margin-left: 200px;
            }
        }
    </style>
</head>

<body>
    <div>
        <!-- Sidebar -->
        <nav class="sidebar">
            <!-- Logo -->
            <img src="{{ asset('images/logo.png') }}" alt="Green Club Logo">
            <ul class="mt-4 nav flex-column">
                <li class="p-1 nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">Dashboard</a>
                </li>
                <li class="p-1 nav-item">
                    <a href="{{ route('article.index') }}"
                        class="nav-link {{ request()->is('dashboard/article*') ? 'active' : '' }}">Artikel</a>
                </li>
                <li class="p-1 nav-item">
                    {{-- <a href="/logout" class="nav-link text-danger">Logout</a> --}}
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="nav-link text-danger"
                            style="border: none; background: none;">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="main-content">
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    @include('components.toast')
</body>

</html>
