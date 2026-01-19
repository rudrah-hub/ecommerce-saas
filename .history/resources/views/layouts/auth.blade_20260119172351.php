@extends('layouts.base')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="w-full max-w-md">
            @include('auth.header')

            <div class="bg-white shadow rounded p-6">
                @yield('page')
            </div>

            @include('auth.footer')
        </div>
    </div>
@endsection
