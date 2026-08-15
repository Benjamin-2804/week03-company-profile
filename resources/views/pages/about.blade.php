@extends('layouts.app')

@section('title', 'About — TechCore')

@section('content')

    {{-- Page Hero --}}
    <section class="bg-primary-900 text-white py-16 px-4">
        <div class="max-w-6xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">About TechCore</h1>
            <p class="text-primary-200 text-lg max-w-2xl mx-auto leading-relaxed">
                Learn who we are, what drives us, and the people behind the work.
            </p>
        </div>
    </section>

    {{-- Company History --}}
    <section class="py-20 px-4 bg-white">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-neutral-900 mb-6">Our History</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div>
                    <p class="text-neutral-700 text-base leading-relaxed mb-4">
                        TechCore was founded in 2016 by a group of Filipino software engineers who believed that great technology should be within reach for every business — not just large enterprises.
                    </p>
                    <p class="text-neutral-700 text-base leading-relaxed">
                        What started as a small web development studio in a Makati co-working space has grown into a full-service technology company with over 50 professionals serving clients across the Philippines and Southeast Asia.
                    </p>
                </div>
                <div class="bg-primary-50 rounded-2xl p-8">
                    <div class="space-y-4">
                        <div class="flex items-start gap-4">
                            <span class="text-primary-600 font-bold text-sm w-12 shrink-0">2016</span>
                            <p class="text-neutral-700 text-sm">Founded with a team of 5 engineers in Makati, Manila.</p>
                        </div>
                        <div class="flex items-start gap-4">
                            <span class="text-primary-600 font-bold text-sm w-12 shrink-0">2018</span>
                            <p class="text-neutral-700 text-sm">Expanded to mobile development and UI/UX services.</p>
                        </div>
                        <div class="flex items-start gap-4">
                            <span class="text-primary-600 font-bold text-sm w-12 shrink-0">2021</span>
                            <p class="text-neutral-700 text-sm">Launched cloud and cybersecurity practice areas.</p>
                        </div>
                        <div class="flex items-start gap-4">
                            <span class="text-primary-600 font-bold text-sm w-12 shrink-0">2024</span>
                            <p class="text-neutral-700 text-sm">Reached 200+ projects delivered across the Philippines and Southeast Asia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Mission & Vision --}}
    <section class="py-20 px-4 bg-neutral-50">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-2xl p-10 shadow-sm border border-neutral-100">
                <div class="text-4xl mb-4">🎯</div>
                <h2 class="text-2xl font-bold text-neutral-900 mb-4">Our Mission</h2>
                <p class="text-neutral-700 text-base leading-relaxed">
                    To empower businesses of every size with innovative, reliable, and accessible technology solutions that drive real growth and create lasting impact in the digital world.
                </p>
            </div>
            <div class="bg-white rounded-2xl p-10 shadow-sm border border-neutral-100">
                <div class="text-4xl mb-4">🔭</div>
                <h2 class="text-2xl font-bold text-neutral-900 mb-4">Our Vision</h2>
                <p class="text-neutral-700 text-base leading-relaxed">
                    To be the most trusted technology partner for growing businesses worldwide — recognized for our integrity, craftsmanship, and commitment to delivering solutions that stand the test of time.
                </p>
            </div>
        </div>
    </section>

    {{-- Core Values --}}
    <section class="py-20 px-4 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-neutral-900 mb-3">Our Core Values</h2>
                <p class="text-neutral-700 max-w-xl mx-auto leading-relaxed">
                    These principles guide every decision we make and every line of code we write.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-primary-50 rounded-xl p-6 text-center">
                    <div class="text-3xl mb-3">🤝</div>
                    <h3 class="text-lg font-semibold text-neutral-900 mb-2">Integrity</h3>
                    <p class="text-neutral-700 text-sm leading-relaxed">
                        We are honest and transparent in everything we do, building trust with every interaction.
                    </p>
                </div>
                <div class="bg-primary-50 rounded-xl p-6 text-center">
                    <div class="text-3xl mb-3">💡</div>
                    <h3 class="text-lg font-semibold text-neutral-900 mb-2">Innovation</h3>
                    <p class="text-neutral-700 text-sm leading-relaxed">
                        We continuously explore new ideas and technologies to deliver smarter, better solutions.
                    </p>
                </div>
                <div class="bg-primary-50 rounded-xl p-6 text-center">
                    <div class="text-3xl mb-3">⭐</div>
                    <h3 class="text-lg font-semibold text-neutral-900 mb-2">Excellence</h3>
                    <p class="text-neutral-700 text-sm leading-relaxed">
                        We hold ourselves to the highest standards of quality in every project we deliver.
                    </p>
                </div>
                <div class="bg-primary-50 rounded-xl p-6 text-center">
                    <div class="text-3xl mb-3">🌍</div>
                    <h3 class="text-lg font-semibold text-neutral-900 mb-2">Impact</h3>
                    <p class="text-neutral-700 text-sm leading-relaxed">
                        We measure success by the meaningful difference our work makes for clients and communities.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Team Introduction --}}
    <section class="py-20 px-4 bg-neutral-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-neutral-900 mb-3">Meet the Team</h2>
                <p class="text-neutral-700 max-w-xl mx-auto leading-relaxed">
                    The talented people who make TechCore what it is.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                {{-- Team Member 1 --}}
                <div class="bg-white rounded-2xl p-8 text-center shadow-sm border border-neutral-100">
                    <div class="w-24 h-24 rounded-full bg-primary-100 mx-auto mb-4 flex items-center justify-center">
                        <span class="text-4xl">👨‍💻</span>
                    </div>
                    <h3 class="text-lg font-semibold text-neutral-900">Marcus Reid</h3>
                    <p class="text-primary-600 text-sm font-medium mt-1">Chief Executive Officer</p>
                    <p class="text-neutral-700 text-sm mt-3 leading-relaxed">
                        Visionary leader with 15+ years in tech, driving TechCore's strategy and growth across the Philippines.
                    </p>
                </div>

                {{-- Team Member 2 --}}
                <div class="bg-white rounded-2xl p-8 text-center shadow-sm border border-neutral-100">
                    <div class="w-24 h-24 rounded-full bg-primary-100 mx-auto mb-4 flex items-center justify-center">
                        <span class="text-4xl">👩‍🎨</span>
                    </div>
                    <h3 class="text-lg font-semibold text-neutral-900">Sofia Alvarez</h3>
                    <p class="text-primary-600 text-sm font-medium mt-1">Head of Design</p>
                    <p class="text-neutral-700 text-sm mt-3 leading-relaxed">
                        Award-winning designer passionate about creating experiences users love.
                    </p>
                </div>

                {{-- Team Member 3 --}}
                <div class="bg-white rounded-2xl p-8 text-center shadow-sm border border-neutral-100">
                    <div class="w-24 h-24 rounded-full bg-primary-100 mx-auto mb-4 flex items-center justify-center">
                        <span class="text-4xl">👨‍🔬</span>
                    </div>
                    <h3 class="text-lg font-semibold text-neutral-900">James Okafor</h3>
                    <p class="text-primary-600 text-sm font-medium mt-1">Lead Engineer</p>
                    <p class="text-neutral-700 text-sm mt-3 leading-relaxed">
                        Full-stack expert who architects robust, scalable systems for complex problems.
                    </p>
                </div>

            </div>
        </div>
    </section>

@endsection
