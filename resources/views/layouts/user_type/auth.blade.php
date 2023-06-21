@extends('layouts.app_dashboard_admin')

@section('aside')
 vvvv
@include('layouts.navbars.authe.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
    @include('layouts.navbars.authe.nav')
    <div class="container-fluid py-4">
        @yield('content')
        @include('layouts.footers.authe.footer')
    </div>
</main>
{{--
        @if (\Request::is('dashboard'))
            @include('layouts.navbars.authe.sidebar')
            <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
                @include('layouts.navbars.authe.nav')
                <div class="container-fluid py-4">
                    @yield('content')
                    @include('layouts.footers.authe.footer')
                </div>
            </main>

        @elseif (\Request::is('profil'))
            @include('layouts.navbars.authe.sidebar')
            <div class="main-content position-relative bg-gray- max-height-vh-100 h-100">
                @include('layouts.navbars.authe.nav')
                @yield('content')
            </div>

        @elseif (\Request::is('clt'))
            @include('layouts.navbars.authe.sidebar')
            <div class="main-content position-relative  max-height-vh-100 h-100">
                @include('layouts.navbars.authe.nav')
                <div class="main-content mt-3 border-radius-lg">
                @yield('content')
                </div>
                @include('layouts.footers.authe.footer')
            </div>


         @elseif (\Request::is('posts'))
            @include('layouts.navbars.authe.nav')
            <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
                @include('layouts.navbars.authe.sidebar')
                <div class="main-content mt-4 border-radius-lg">
                    @yield('content')
                    @include('layouts.footers.authe.footer')
                </div>
          </main>


        @endif --}}

@endsection
