{{-- Banbury Madni Masjid Footer Component --}}
{{-- Save as: resources/views/components/footer.blade.php --}}
{{-- Usage: <x-footer /> or @include('components.footer') --}}

<footer class="relative w-full overflow-hidden">

    {{-- Background with overlay --}}
    <div class="relative bg-slate-900">

        {{-- Subtle geometric overlay pattern --}}
        <div class="absolute inset-0 opacity-10"
             style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
        </div>

        {{-- Main Footer Content --}}
        <div class="relative">

            {{-- Top Section: Branding + Donation CTA --}}
            <div class="border-b border-white/10">
                <div class="max-w-7xl mx-auto px-6 py-8">
                    <div class="flex flex-col md:flex-row items-center justify-between gap-6">

                        {{-- Logo & Socials --}}
                        <div class="flex flex-col items-center md:items-start gap-4">
                            <div class="flex items-center gap-3">
                                {{-- Mosque Icon SVG --}}
                                <svg class="w-12 h-12 text-white" viewBox="0 0 60 60" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M30 2 C30 2 26 8 26 12 C26 14.2 27.8 16 30 16 C32.2 16 34 14.2 34 12 C34 8 30 2 30 2Z"/>
                                    <rect x="27" y="16" width="6" height="4" rx="1"/>
                                    <path d="M10 32 C10 24 18 20 30 20 C42 20 50 24 50 32"/>
                                    <rect x="6" y="32" width="48" height="4" rx="2"/>
                                    <rect x="10" y="36" width="8" height="16" rx="1"/>
                                    <rect x="26" y="36" width="8" height="20" rx="1"/>
                                    <rect x="42" y="36" width="8" height="16" rx="1"/>
                                    <rect x="4" y="52" width="52" height="4" rx="2"/>
                                    <rect x="2" y="56" width="56" height="4" rx="2"/>
                                </svg>
                                <div>
                                    <div class="text-white font-black text-xl tracking-widest uppercase leading-tight">Banbury</div>
                                    <div class="text-blue-300 font-semibold text-xs tracking-[0.3em] uppercase">Madni Masjid</div>
                                </div>
                            </div>

                            {{-- Social Icons --}}
                            <div class="flex items-center gap-3">
                                {{-- Facebook --}}
                                <a href="#" class="w-8 h-8 rounded-full bg-blue-600 flex items-center justify-center hover:bg-blue-500 transition-colors duration-200" aria-label="Facebook">
                                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                                </a>
                                {{-- Instagram --}}
                                <a href="#" class="w-8 h-8 rounded-full bg-gradient-to-br from-pink-500 via-red-500 to-yellow-400 flex items-center justify-center hover:opacity-80 transition-opacity duration-200" aria-label="Instagram">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                                </a>
                                {{-- X / Twitter --}}
                                <a href="#" class="w-8 h-8 rounded-full bg-black border border-white/30 flex items-center justify-center hover:bg-white/10 transition-colors duration-200" aria-label="X (Twitter)">
                                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                                </a>
                                {{-- YouTube --}}
                                <a href="#" class="w-8 h-8 rounded-full bg-red-600 flex items-center justify-center hover:bg-red-500 transition-colors duration-200" aria-label="YouTube">
                                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 0 0-1.95 1.96A29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58A2.78 2.78 0 0 0 3.41 19.6C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.95A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="white"/></svg>
                                </a>
                                {{-- LinkedIn --}}
                                <a href="#" class="w-8 h-8 rounded-full bg-blue-700 flex items-center justify-center hover:bg-blue-600 transition-colors duration-200" aria-label="LinkedIn">
                                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                                </a>
                            </div>
                        </div>

                        {{-- Donation CTA --}}
                        <div class="text-center md:text-right">
                            <p class="text-white text-lg font-semibold mb-3">Your Support Can Transform Lives!</p>
                            <div class="flex items-center bg-white rounded-lg overflow-hidden shadow-lg shadow-black/30">
                                <span class="px-5 py-3 text-slate-700 font-medium text-sm whitespace-nowrap">Giving Hope, Changing Lives.</span>
                                <a href="#donate"
                                   class="px-6 py-3 bg-blue-600 hover:bg-blue-500 text-white font-bold text-sm uppercase tracking-wide transition-colors duration-200 whitespace-nowrap">
                                    Donate Now
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- Middle Section: Navigation Links --}}
            <div class="max-w-7xl mx-auto px-6 py-10">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">

                    {{-- Quick Links --}}
                    <div>
                        <h3 class="text-white font-bold text-base mb-4 pb-2 border-b border-blue-500/50 inline-block">
                            Quick Links
                        </h3>
                        <ul class="space-y-2">
                            @foreach([
                                ['label' => 'Home',             'href' => '/'],
                                ['label' => 'About Us',         'href' => '/about'],
                                ['label' => 'Our Events',       'href' => '/events'],
                                ['label' => 'Prayer Timetable', 'href' => '/prayer-timetable'],
                                ['label' => 'Blogs',            'href' => '/blogs'],
                                ['label' => 'Contact Us',       'href' => '/contact'],
                            ] as $link)
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-blue-400 flex-shrink-0"></span>
                                    <a href="{{ $link['href'] }}"
                                       class="text-slate-300 hover:text-white text-sm transition-colors duration-200">
                                        {{ $link['label'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- Appeals --}}
                    <div>
                        <h3 class="text-white font-bold text-base mb-4 pb-2 border-b border-blue-500/50 inline-block">
                            Appeals
                        </h3>
                        <ul class="space-y-2">
                            @foreach([
                                ['label' => 'Food Pack',        'href' => '/appeals/food-pack'],
                                ['label' => 'Zakat',            'href' => '/appeals/zakat'],
                                ['label' => 'Sadqah',           'href' => '/appeals/sadqah'],
                                ['label' => 'Zakat Calculator', 'href' => '/appeals/zakat-calculator'],
                                ['label' => 'Al-Aqsa Masjid',  'href' => '/appeals/al-aqsa'],
                            ] as $link)
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-blue-400 flex-shrink-0"></span>
                                    <a href="{{ $link['href'] }}"
                                       class="text-slate-300 hover:text-white text-sm transition-colors duration-200">
                                        {{ $link['label'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- Our Services --}}
                    <div>
                        <h3 class="text-white font-bold text-base mb-4 pb-2 border-b border-blue-500/50 inline-block">
                            Our Services
                        </h3>
                        <ul class="space-y-2">
                            @foreach([
                                ['label' => 'Nikah Services',        'href' => '/services/nikah'],
                                ['label' => 'Aqiqah Services',       'href' => '/services/aqiqah'],
                                ['label' => 'Educational Programs',  'href' => '/services/education'],
                                ['label' => 'Gyarvi Sharif',         'href' => '/services/gyarvi-sharif'],
                                ['label' => 'Library Service',       'href' => '/services/library'],
                            ] as $link)
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-blue-400 flex-shrink-0"></span>
                                    <a href="{{ $link['href'] }}"
                                       class="text-slate-300 hover:text-white text-sm transition-colors duration-200">
                                        {{ $link['label'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- Resources --}}
                    <div>
                        <h3 class="text-white font-bold text-base mb-4 pb-2 border-b border-blue-500/50 inline-block">
                            Resources
                        </h3>
                        <ul class="space-y-2">
                            @foreach([
                                ['label' => 'Our Courses',                        'href' => '/resources/courses'],
                                ['label' => 'Banbury Community Fridge',           'href' => '/resources/community-fridge'],
                                ['label' => 'Educational Programs',               'href' => '/resources/education'],
                                ['label' => "As'Sunnah Academy – Madni Masjid",  'href' => '/resources/academy-madni'],
                                ['label' => "As'Sunnah Academy – Makkah Masjid", 'href' => '/resources/academy-makkah'],
                            ] as $link)
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-blue-400 flex-shrink-0"></span>
                                    <a href="{{ $link['href'] }}"
                                       class="text-slate-300 hover:text-white text-sm transition-colors duration-200">
                                        {{ $link['label'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>

            {{-- Contact Info Section --}}
            <div class="border-t border-white/10">
                <div class="max-w-7xl mx-auto px-6 py-8">
                    <h3 class="text-center text-white font-bold text-lg mb-6">Contact Info</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                        {{-- Phone --}}
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full border-2 border-blue-400/50 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.62 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.76a16 16 0 0 0 6.29 6.29l.92-.92a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-white font-semibold text-sm">Phone No:</p>
                                <a href="tel:+441295276662" class="text-slate-300 hover:text-white text-sm transition-colors">+44 1295 276662</a>
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full border-2 border-blue-400/50 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                    <polyline points="22,6 12,13 2,6"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-white font-semibold text-sm">Email Address:</p>
                                <a href="mailto:Info@Banburymosque.Com" class="text-slate-300 hover:text-white text-sm transition-colors">Info@Banburymosque.Com</a>
                            </div>
                        </div>

                        {{-- Address --}}
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full border-2 border-blue-400/50 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-white font-semibold text-sm">Merton St, Banbury OX16</p>
                                <p class="text-slate-300 text-sm">4RX, United Kingdom</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- Charity Number Bar --}}
            <div class="bg-slate-800/60 border-t border-white/10">
                <div class="max-w-7xl mx-auto px-6 py-4 text-center">
                    <p class="text-white font-bold text-sm tracking-wide">
                        Registered Charity Number : 900047
                    </p>
                </div>
            </div>

            {{-- Copyright Bar --}}
            <div class="bg-slate-950/70 border-t border-white/10">
                <div class="max-w-7xl mx-auto px-6 py-4">
                    <div class="flex flex-col md:flex-row items-center justify-between gap-3 text-xs text-slate-400">
                        <span>Copyright &copy;Banbury {{ date('Y') }}. All Right Reserved.</span>
                        <div class="flex items-center gap-4">
                            <a href="/terms" class="hover:text-white transition-colors">Terms And Condition</a>
                            <span class="text-slate-600">|</span>
                            <a href="/privacy" class="hover:text-white transition-colors">Privacy Policy</a>
                        </div>
                        <span>Site By <a href="#" class="text-blue-400 font-semibold hover:text-blue-300 transition-colors">Techno Serve LTD</a></span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>