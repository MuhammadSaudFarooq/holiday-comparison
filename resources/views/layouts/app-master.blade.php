@include('layouts.partials.head')

<body>
    @include('layouts.partials.navbar')
    <main>
        @yield('content')
    </main>
    @include('layouts.partials.footer')
</body>

</html>
