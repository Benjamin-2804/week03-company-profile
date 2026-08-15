@extends('layouts.app')

@section('title', 'Contact — TechCore')

@section('content')

    {{-- Page Hero --}}
    <section class="bg-primary-900 text-white py-16 px-4">
        <div class="max-w-6xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Get In Touch</h1>
            <p class="text-primary-200 text-lg max-w-2xl mx-auto leading-relaxed">
                Have a question or a project in mind? We'd love to hear from you.
            </p>
        </div>
    </section>

    {{-- Contact Section --}}
    <section class="py-20 px-4 bg-white">
        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12">

            {{-- Contact Form --}}
            <div>
                <h2 class="text-2xl font-bold text-neutral-900 mb-6">Send Us a Message</h2>
                <form action="#" method="post" class="space-y-5">
                    @csrf

                    <div>
                        <label for="name" class="block text-sm font-medium text-neutral-700 mb-1">
                            Full Name <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            maxlength="100"
                            required
                            placeholder="John Doe"
                            class="w-full px-4 py-3 border border-neutral-100 rounded-lg text-neutral-900 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-150 bg-neutral-50">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-neutral-700 mb-1">
                            Email Address <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            maxlength="150"
                            required
                            placeholder="john@example.com"
                            class="w-full px-4 py-3 border border-neutral-100 rounded-lg text-neutral-900 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-150 bg-neutral-50">
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-neutral-700 mb-1">
                            Subject <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="text"
                            id="subject"
                            name="subject"
                            maxlength="150"
                            required
                            placeholder="How can we help?"
                            class="w-full px-4 py-3 border border-neutral-100 rounded-lg text-neutral-900 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-150 bg-neutral-50">
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-neutral-700 mb-1">
                            Message <span class="text-red-500">*</span>
                        </label>
                        <textarea
                            id="message"
                            name="message"
                            maxlength="1000"
                            required
                            rows="5"
                            placeholder="Tell us about your project..."
                            class="w-full px-4 py-3 border border-neutral-100 rounded-lg text-neutral-900 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-150 bg-neutral-50 resize-y"></textarea>
                    </div>

                    <button
                        type="submit"
                        class="w-full bg-primary-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-primary-700 transition-colors duration-150 text-base">
                        Send Message
                    </button>
                </form>
            </div>

            {{-- Contact Info & Map --}}
            <div class="space-y-8">

                {{-- Contact Details --}}
                <div>
                    <h2 class="text-2xl font-bold text-neutral-900 mb-6">Contact Information</h2>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-primary-50 rounded-lg flex items-center justify-center shrink-0">
                                <span class="text-lg">📍</span>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-neutral-900">Address</p>
                                <p class="text-neutral-700 text-sm">12F BGC One Tower, 32nd Street, Bonifacio Global City, Taguig, Metro Manila</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-primary-50 rounded-lg flex items-center justify-center shrink-0">
                                <span class="text-lg">✉️</span>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-neutral-900">Email</p>
                                <p class="text-neutral-700 text-sm">hello@techcore.ph</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-primary-50 rounded-lg flex items-center justify-center shrink-0">
                                <span class="text-lg">📞</span>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-neutral-900">Phone</p>
                                <p class="text-neutral-700 text-sm">+63 (2) 8888-1234</p>
                            </div>
                        </li>
                    </ul>
                </div>

                {{-- Social Links --}}
                <div>
                    <h3 class="text-lg font-semibold text-neutral-900 mb-4">Follow Us</h3>
                    <div class="flex gap-4">
                        <a href="https://linkedin.com/company/techcore-ph"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="w-10 h-10 bg-primary-50 rounded-lg flex items-center justify-center text-primary-600 hover:bg-primary-100 transition-colors duration-150"
                           aria-label="LinkedIn">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452H17.21v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.985V9h3.102v1.561h.046c.432-.818 1.487-1.681 3.061-1.681 3.274 0 3.878 2.155 3.878 4.958v6.614zM5.337 7.433a1.8 1.8 0 1 1 0-3.601 1.8 1.8 0 0 1 0 3.601zM6.919 20.452H3.752V9h3.167v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="https://twitter.com/techcore_ph"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="w-10 h-10 bg-primary-50 rounded-lg flex items-center justify-center text-primary-600 hover:bg-primary-100 transition-colors duration-150"
                           aria-label="Twitter / X">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </a>
                        <a href="https://instagram.com/techcore_ph"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="w-10 h-10 bg-primary-50 rounded-lg flex items-center justify-center text-primary-600 hover:bg-primary-100 transition-colors duration-150"
                           aria-label="Instagram">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Map Embed --}}
                <div>
                    <h3 class="text-lg font-semibold text-neutral-900 mb-4">Find Us</h3>
                    <div class="rounded-xl overflow-hidden border border-neutral-100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.5993777988!2d121.0437!3d14.5507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c90264a84a1b%3A0xce4c7bc1c2b30b0c!2sBonifacio%20Global%20City%2C%20Taguig%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1700000000000!5m2!1sen!2sph"
                            width="100%"
                            height="300"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="TechCore Office — BGC, Taguig, Metro Manila">
                        </iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
