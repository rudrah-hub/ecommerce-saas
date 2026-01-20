@extends('layouts.base')

@section('content')
    <div>
        <div>
            @include('auth.header')

            <div>
                @yield('page')
            </div>

            @include('auth.footer')
        </div>
    </div>
@endsection
