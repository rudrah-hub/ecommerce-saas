@extends('layouts.base')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="w-full max-w-md">
            @include('layouts.auth.header')

            <div class="bg-white shadow rounded p-6">
                @yield('page')
            </div>

            @include('layouts.auth.footer')
        </div>
    </div>
@endsection
