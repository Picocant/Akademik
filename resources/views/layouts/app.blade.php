<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f5f6f8; color: #222; }
        nav { background: #1f3a5f; padding: 12px 24px; }
        nav a { color: #fff; margin-right: 16px; text-decoration: none; }
        main { max-width: 900px; margin: 24px auto; background: #fff; padding: 24px; border-radius: 6px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background: #e8edf3; }
    </style>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Beranda</a>
        <a href="{{ route('dosen') }}">Dosen</a>
        <a href="{{ route('biodata') }}">Biodata</a>
        <a href="{{ route('prodi') }}">Program Studi</a>
        <a href="{{ route('fakultas') }}">Fakultas</a>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>