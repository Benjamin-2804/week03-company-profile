@extends('layouts.app')

@section('title', 'Home — NovaTech')

@section('content')

    {{-- Hero Banner --}}
    <section class="bg-primary-900 text-white py-24 px-4">
        <div class="max-w-6xl mx-auto text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                Innovating the Future, Today
            </h1>
            <p class="text-lg md:text-xl text-primary-200 mb-10 max-w-2xl mx-auto leading-relaxed">
                We build powerful digital solutions that help businesses grow smarter and faster.
            </p>
            <a href="{{ route('services') }}"
               class="inline-block bg-white text-primary-700 font-semibold px-8 py-3 rounded-lg hover:bg-primary-50 transition-colors duration-150 text-lg">
                Explore Our Services
            </a>
        </div>
    </section>

    {{-- Company Introduction --}}
    <section class="py-20 px-4 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-neutral-900 mb-4">Who We Are</h2>
                    <p class="text-neutral-700 text-base leading-relaxed mb-4">
                        NovaTech is a forward-thinking technology company founded with a mission to make cutting-edge digital solutions accessible to businesses of all sizes.
                    </p>
                    <p class="text-neutral-700 text-base leading-relaxed">
                        With a team of passionate engineers, designers, and strategists, we partner with our clients to deliver products that are not only functional but transformative.
                    </p>
                </div>
                <div class="bg-primary-50 rounded-2xl p-10 text-center">
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <p class="text-4xl font-bold text-primary-600">8+</p>
                            <p class="text-neutral-700 text-sm mt-1">Years Experience</p>
                        </div>
                        <div>
                            <p class="text-4xl font-bold text-primary-600">200+</p>
                            <p class="text-neutral-700 text-sm mt-1">Projects Delivered</p>
                        </div>
                        <div>
                            <p class="text-4xl font-bold text-primary-600">50+</p>
                            <p class="text-neutral-700 text-sm mt-1">Team Members</p>
                        </div>
                        <div>
                            <p class="text-4xl font-bold text-primary-600">98%</p>
                            <p class="text-neutral-700 text-sm mt-1">Client Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Featured Services --}}
    <section class="py-20 px-4 bg-neutral-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-neutral-900 mb-3">What We Do</h2>
                <p class="text-neutral-700 max-w-xl mx-auto leading-relaxed">
                    From concept to deployment, we cover the full spectrum of digital services.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-sm border border-neutral-100 hover:shadow-md transition-shadow duration-150">
                    <div class="text-4xl mb-4">🌐</div>
                    <h3 class="text-lg font-semibold text-neutral-900 mb-2">Web Development</h3>
                    <p class="text-neutral-700 text-sm leading-relaxed">
                        Fast, scalable web applications built with modern frameworks tailored to your needs.
                    </p>
                </div>
                <div class="bg-white rounded-xl p-8 shadow-sm border border-neutral-100 hover:shadow-md transition-shadow duration-150">
                    <div class="text-4xl mb-4">📱</div>
                    <h3 class="text-lg font-semibold text-neutral-900 mb-2">Mobile Development</h3>
                    <p class="text-neutral-700 text-sm leading-relaxed">
                        Intuitive iOS and Android apps that keep your customers engaged on the go.
                    </p>
                </div>
                <div class="bg-white rounded-xl p-8 shadow-sm border border-neutral-100 hover:shadow-md transition-shadow duration-150">
                    <div class="text-4xl mb-4">🎨</div>
                    <h3 class="text-lg font-semibold text-neutral-900 mb-2">UI/UX Design</h3>
                    <p class="text-neutral-700 text-sm leading-relaxed">
                        Beautiful, user-centric interfaces that blend aesthetics with functionality.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-20 px-4 bg-primary-600 text-white text-center">
        <div class="max-w-2xl mx-auto">
            <h2 class="text-3xl font-bold mb-4">Ready to Start Your Project?</h2>
            <p class="text-primary-100 text-lg mb-8 leading-relaxed">
                Let's talk about how NovaTech can help bring your vision to life.
            </p>
            <a href="{{ route('contact') }}"
               class="inline-block bg-white text-primary-700 font-semibold px-8 py-3 rounded-lg hover:bg-primary-50 transition-colors duration-150 text-lg">
                Get In Touch
            </a>
        </div>
    </section>

@endsection
