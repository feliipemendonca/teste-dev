<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @livewireStyles
    @vite(['resources/scss/app.scss'])

</head>

<body>
    <header class="container">
        <nav class="navbar pt-4">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="https://libresolucoes.com.br/wp-content/uploads/2021/12/Logo-Libre-e1646349180966-768x320.png"
                    alt="Logo" width="120" height="50" class="d-inline-block align-text-top">
            </a>
        </nav>
    </header>

    {{ $content }}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"
        integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @vite(['resources/js/app.js'])
    @livewireScripts

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        @if (session('success'))
            Swal.fire(
                'Sucesso',
                '{!! session('success') !!}',
                'success'
            )
        @endif
        @if (session('status'))
            Swal.fire(
                'Sucesso',
                '{!! session('status') !!}',
                'success'
            )
        @endif
        @if (session('error'))
            Swal.fire(
                'Erro!',
                '{!! session('error') !!}',
                'error',
            )
        @endif
        @if (session('warning'))
            Swal.fire(
                'Atenção!',
                '{!! session('warning') !!}',
                'warning',
            )
        @endif
    </script>
</body>

</html>
