<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Programming</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-between align-items-center">
                <h3 class="py-3 fw-bold">
                    <a href="{{ route('dashboard') }}" class = 'text-decoration-none'>FinAlly.</a>
                </h3>
                <div class="d-flex align-items-center">
                <div class="user-info d-flex flex-column text-start me-3">
                <div class="name fw-bold fs-4 text-primary">{{ Auth::user()->nama }}</div>
                <div class="role fs-6 text-primary">{{ Auth::user()->role }}</div>
            </div>
                    <form method="POST" action="{{ route('logout') }}" class="m-0">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col">@yield('content')</div>
            </div>
        </div>
</body>

<script src="{{ asset('js/boostrap.bundle.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

@stack('script')

</html>
