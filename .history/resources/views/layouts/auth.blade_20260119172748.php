@extends('layouts.base')

@section('content')
    <div>
        <div>
            @include('auth.header')

            <div class="bg-white shadow rounded p-6">
                @yield('page')
            </div>

            @include('auth.footer')
        </div>
    </div>
@endsection
