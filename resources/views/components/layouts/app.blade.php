<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Test Materialize</title>

  <!-- ✅ Materialize CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>

  <!-- Tes tombol materialize -->
  <a class="waves-effect waves-light btn">Button</a>

  <!-- ✅ jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- ✅ Materialize JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <!-- ✅ Inisialisasi -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      if (typeof M !== 'undefined' && M.AutoInit) {
        M.AutoInit();
        console.log('Materialize loaded!');
      } else {
        console.error('Materialize did not load properly.');
      }
    });
  </script>
</body>
</html>
