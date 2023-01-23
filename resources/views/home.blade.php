@extends('layouts.app', ['title' => 'Homepage'])

@section('content')

    {{-- Anonymous Components--}}
    <x-alert>
        <x-slot name="title">
            Header Component with <strong>strong</strong> tag
        </x-slot>
        Ini adalah children
        @slot('footer')
            Footer
        @endslot
    </x-alert>
    <p>
        Ini adalah halaman beranda
    </p>

@endsection
