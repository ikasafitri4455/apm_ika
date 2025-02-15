<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Aplikasi Pengelolaan Pengaduan Masyarakat</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />

    <link
      rel="icon"
      href="{{ asset('assets/img/logo.png') }}   "
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="{{ asset('') }}assetss/js/plugin/webfont/webfont.min.js"></script>

    <script>
        var publicPath = "{{ asset('assetss/css/fonts.min.css') }}";
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: [publicPath],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
      function previewImage() {
        const input = document.getElementById('foto');
        const preview = document.getElementById('preview');

        const file = input.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    }
    </script>


    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('assetss/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assetss/css/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assetss/css/kaiadmin.min.css')}}" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{asset('assetss/css/demo.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

