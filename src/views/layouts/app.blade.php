{{-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }} - Learning PHP</title>
    {{-- Bootstrap v5.0.2 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Select2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-container {
            display: block;
        }
    </style>
</head>

<body>
    <main class="container py-3">
        <div class="row">
            <div class="col-3">
                @include('layouts.sidebar')
            </div>

            <div class="col-9">
                @yield('content')
            </div>
        </div>
    </main>
    {{-- Jquery v3.7.1 --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    {{-- Bootstrap v5.0.2 --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"
        integrity="sha512-a6ctI6w1kg3J4dSjknHj3aWLEbjitAXAjLDRUxo2wyYmDFRcz2RJuQr5M3Kt8O/TtUSp8n2rAyaXYy1sjoKmrQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- tinymce v7.6.0 --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.6.0/tinymce.min.js"></script>
    {{-- Select 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {{-- Custom --}}
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.js-select').select2({
                dropdownParent: $('#users-modal .modal-content'),
                placeholder: "Chọn các tùy chọn",
                allowClear: true
            });
        });
    </script>
</body>

</html>
