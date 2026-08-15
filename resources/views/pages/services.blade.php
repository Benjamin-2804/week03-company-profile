@extends('layouts.app')

@section('title', 'Services — NovaTech')

@section('content')

    {{-- Page Hero --}}
    <section class="bg-primary-900 text-white py-16 px-4">
        <div class="max-w-6xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Services</h1>
            <p class="text-primary-200 text-lg max-w-2xl mx-auto leading-relaxed">
                End-to-end technology solutions designed to help your business thrive in the digital age.
            </p>
        </div>
    </section>

    {{-- Services Grid --}}
    <section class="py-20 px-4 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($services as $service)
                    <div data-service-card
                         class="bg-white rounded-2xl p-8 shadow-sm border border-neutral-100 hover:shadow-md hover:border-primary-200 transition-all duration-150 flex flex-col">
                        <div class="text-5xl mb-5">{{ $service['icon'] }}</div>
                        <h3 class="text-xl font-semibold text-neutral-900 mb-3">
                            {{ $service['title'] }}
                        </h3>
                        <p class="text-neutral-700 text-sm leading-relaxed flex-1">
                            {{ $service['description'] }}
                        </p>
                        <div class="mt-6">
                            <a href="{{ route('contact') }}"
                               class="inline-block text-primary-600 font-semibold text-sm hover:text-primary-700 transition-colors duration-150">
                                Learn more →
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Why Choose Us --}}
    <section class="py-20 px-4 bg-neutral-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-neutral-900 mb-3">Why Choose NovaTech?</h2>
                <p class="text-neutral-700 max-w-xl mx-auto leading-relaxed">
                    We don't just deliver projects — we build partnerships that last.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="text-4xl mb-4">🚀</div>
                    <h3 class="text-lg font-semibold text-neutral-900 mb-2">Fast Delivery</h3>
                    <p class="text-neutral-700 text-sm leading-relaxed">
                        Agile processes and experienced teams mean your project ships on time, every time.
                    </p>
                </div>
                <div class="text-center p-6">
                    <div class="text-4xl mb-4">🛡️</div>
                    <h3 class="text-lg font-semibold text-neutral-900 mb-2">Secure by Default</h3>
                    <p class="text-neutral-700 text-sm leading-relaxed">
                        Security is baked into every layer of our work, not bolted on at the end.
                    </p>
                </div>
                <div class="text-center p-6">
                    <div class="text-4xl mb-4">📞</div>
                    <h3 class="text-lg font-semibold text-neutral-900 mb-2">Ongoing Support</h3>
                    <p class="text-neutral-700 text-sm leading-relaxed">
                        We stay with you after launch — monitoring, maintaining, and improving your solution.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-20 px-4 bg-primary-600 text-white text-center">
        <div class="max-w-2xl mx-auto">
            <h2 class="text-3xl font-bold mb-4">Have a Project in Mind?</h2>
            <p class="text-primary-100 text-lg mb-8 leading-relaxed">
                Tell us about it and we'll put together the right team and approach for you.
            </p>
            <a href="{{ route('contact') }}"
               class="inline-block bg-white text-primary-700 font-semibold px-8 py-3 rounded-lg hover:bg-primary-50 transition-colors duration-150 text-lg">
                Start a Conversation
            </a>
        </div>
    </section>

@endsection
