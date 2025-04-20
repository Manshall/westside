<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>{{ $title ?? 'Warung Mae' }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- ✅ Materialize CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- ✅ Livewire Styles -->
  @livewireStyles
</head>

<body class="bg-slate-200 dark:bg-slate-700">
  @livewire('partials.navbar')

  <main>
    {{ $slot }}
  </main>

  @livewire('partials.footer')

  <!-- ✅ Livewire Scripts -->
  @livewireScripts

  <!-- ✅ SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- ✅ Filament JS -->
  <script src="{{ asset('js/filament/filament/app.js') }}"></script>

  <!-- ✅ jQuery & Materialize JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <!-- ✅ Materialize Init -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      if (typeof M !== 'undefined' && M.AutoInit) {
        M.AutoInit();
      } else {
        console.error('Materialize did not load properly.');
      }
    });
  </script>

  @stack('scripts')
</body>

</html>
