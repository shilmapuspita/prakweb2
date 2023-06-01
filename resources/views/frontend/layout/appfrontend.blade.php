@include('frontend.layout.navbar')
@include('frontend.layout.header')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
{{-- ini buat naro content atau main --}}
@yield('content')
        </div>
    </main>
</div>
</div>
@include('frontend.layout.footer')