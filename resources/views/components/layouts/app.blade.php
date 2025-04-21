<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'Westside' }}</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Livewire Styles -->
  @livewireStyles
</head>

<body class="bg-slate-200 dark:bg-slate-700">

  @livewire('partials.navbar')

  <main>
    {{ $slot }}
  </main>

  @livewire('partials.footer')

  <!-- Livewire Scripts -->
  @livewireScripts

  <!-- SweetAlert2 (sudah di-import di app.js juga, jadi bisa dihapus kalau ganda) -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Filament App JS (pastikan file ini ada) -->
  <script src="{{ asset('js/filament/filament/app.js') }}"></script>

  <!-- jQuery & Materialize -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <!-- Preline UI -->
  <script src="https://unpkg.com/preline@latest/dist/preline.js"></script>

  <!-- Inisialisasi Materialize -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      if (typeof M !== 'undefined' && M.AutoInit) {
        M.AutoInit();
      } else {
        console.warn('Materialize is not loaded.');
      }
    });
  </script>

  <!-- Inisialisasi Preline setelah navigasi Livewire -->
  <script>
    document.addEventListener('livewire:navigated', () => {
      if (window.HSStaticMethods && typeof window.HSStaticMethods.autoInit === 'function') {
        window.HSStaticMethods.autoInit();
      } else {
        console.warn('Preline autoInit not available.');
      }
    });
  </script>

  @stack('scripts')
</body>

</html>
