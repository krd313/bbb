@include('partials.head')

<body>
    <div class="wrapper">
        @include('partials.navside')

        @include('partials.navtop')

        <div class="page-wrapper">
            <div class="page-content">

                @yield('content')

            </div>
        </div>

        @include('partials.script')

        @include('partials.footer')

    </div>
</body>

</html>