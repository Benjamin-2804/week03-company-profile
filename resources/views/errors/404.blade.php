@extends('layouts.app')

@section('title', '404 — Page Not Found')

@section('content')

    <section class="min-h-screen bg-neutral-50 flex items-center justify-center px-4">
        <div class="text-center max-w-md mx-auto">
            <div class="text-8xl font-bold text-primary-600 mb-4">404</div>
            <h1 class="text-3xl font-bold text-neutral-900 mb-4">Page Not Found</h1>
            <p class="text-neutral-700 text-base leading-relaxed mb-8">
                The page you're looking for doesn't exist or has been moved.
            </p>
            <a href="{{ route('home') }}"
               class="inline-block bg-primary-600 text-white font-semibold px-8 py-3 rounded-lg hover:bg-primary-700 transition-colors duration-150">
                Back to Home
            </a>
        </div>
    </section>

@endsection
