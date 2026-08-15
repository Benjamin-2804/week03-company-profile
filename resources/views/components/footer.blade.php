<footer class="bg-primary-900 text-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            {{-- Brand & About --}}
            <div>
                <h3 class="text-xl font-bold mb-3">TechCore</h3>
                <p class="text-primary-200 text-sm leading-relaxed">
                    Delivering innovative technology solutions that empower Filipino businesses to grow, adapt, and lead in the digital age.
                </p>
            </div>

            {{-- Contact Info --}}
            <div>
                <h4 class="text-base font-semibold mb-3 text-primary-100">Contact</h4>
                <ul class="space-y-2 text-primary-200 text-sm">
                    <li class="flex items-start gap-2">
                        <span>📍</span>
                        <span>12F BGC One Tower, 32nd Street, Bonifacio Global City, Taguig, Metro Manila</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span>✉️</span>
                        <span>hello@techcore.ph</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span>📞</span>
                        <span>+63 (2) 8888-1234</span>
                    </li>
                </ul>
            </div>

            {{-- Social Links --}}
            <div>
                <h4 class="text-base font-semibold mb-3 text-primary-100">Follow Us</h4>
                <div class="flex gap-4">
                    <a href="https://linkedin.com/company/techcore-ph"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="text-primary-200 hover:text-white transition-colors duration-150"
                       aria-label="LinkedIn">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452H17.21v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.985V9h3.102v1.561h.046c.432-.818 1.487-1.681 3.061-1.681 3.274 0 3.878 2.155 3.878 4.958v6.614zM5.337 7.433a1.8 1.8 0 1 1 0-3.601 1.8 1.8 0 0 1 0 3.601zM6.919 20.452H3.752V9h3.167v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a href="https://twitter.com/techcore_ph"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="text-primary-200 hover:text-white transition-colors duration-150"
                       aria-label="Twitter / X">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>
                    <a href="https://instagram.com/techcore_ph"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="text-primary-200 hover:text-white transition-colors duration-150"
                       aria-label="Instagram">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="border-t border-primary-700 mt-10 pt-6 text-center text-primary-300 text-sm">
            &copy; {{ date('Y') }} TechCore. All rights reserved.
        </div>
    </div>
</footer>
