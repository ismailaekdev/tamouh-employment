{{-- filepath: resources/views/front/services.blade.php --}}
@extends('layouts.app')

@section('title', __('Services'))

@section('content')
<div class="container py-5">
    <h1 class="mb-4">{{ __('Our Services') }}</h1>
    <ul>
        <li>{{ __('Temporary Staffing') }}</li>
        <li>{{ __('Permanent Recruitment') }}</li>
        <li>{{ __('HR Consultancy') }}</li>
        <li>{{ __('Payroll Management') }}</li>
    </ul>
</div>
@endsection
