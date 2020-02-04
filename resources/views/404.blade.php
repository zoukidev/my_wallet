@extends('layouts.app2')

@section('content')
    <!-- 404 Error Text -->
    <div class="text-center">
        <div class="error mx-auto" data-text="404">404</div>
        <p class="lead text-gray-800 mb-5">Page Not Found</p>
        <a href="{{ url('/') }}">&larr; Back to Dashboard</a>
    </div>
@endsection
