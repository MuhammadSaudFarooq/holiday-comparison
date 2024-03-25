@include('layouts.partials.head')

<body class="auth-page">
    @include('layouts.partials.navbar')
    <main class="form-signin">
        @yield('content')
    </main>
    @include('layouts.partials.footer')
</body>

</html>
