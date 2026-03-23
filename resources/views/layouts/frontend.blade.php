<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ theme: localStorage.getItem('theme') || 'dark' }" :data-theme="theme" :class="{ 'dark': theme === 'dark' }">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Freiocea') }} | Elite Global Logistics</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700;800;900&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body { transition: background-color 0.4s ease, color 0.4s ease; }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-[var(--color-obsidian)] text-[var(--text-primary)] font-sans antialiased overflow-x-hidden selection:bg-blue-500/30 noise-bg">
    <div class="min-h-screen relative flex flex-col">
        <!-- Ambient Background Element -->
        <div class="fixed top-0 left-0 w-full h-full -z-50 opacity-10 pointer-events-none mesh-gradient"></div>

        <!-- Navigation -->
        <nav class="sticky top-0 z-50 transition-all duration-500" 
             x-data="{ open: false, scrolled: false }" 
             @scroll.window="scrolled = (window.pageYOffset > 10)"
             :class="scrolled ? 'py-4' : 'py-6'">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="glass-morphism rounded-2xl px-6 lg:px-10 transition-all duration-500"
                     :class="scrolled ? 'bg-black/60 shadow-2xl scale-[0.98]' : 'bg-white/5'">
                    <div class="flex justify-between h-20">
                        <div class="flex items-center">
                            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                                @if(isset($site_settings['logo']))
                                    <img src="{{ asset('storage/' . $site_settings['logo']) }}" alt="{{ config('app.name') }}" class="h-10 w-auto object-contain transition-transform group-hover:scale-105">
                                @else
                                    <span class="text-2xl font-black tracking-tighter text-gradient uppercase italic">
                                        FREIOCEA<span class="text-[var(--color-accent-blue)] group-hover:rotate-12 transition-transform inline-block">.</span>
                                    </span>
                                @endif
                            </a>
                        </div>

                        <!-- Desktop Nav -->
                        <div class="hidden md:flex items-center space-x-12">
                            <div class="flex items-center space-x-8">
                                <a href="{{ route('services.index') }}" class="text-[10px] font-black uppercase tracking-[0.3em] text-[var(--text-secondary)] hover:text-[var(--color-accent-blue)] transition-colors">Services</a>
                                <a href="{{ route('about') }}" class="text-[10px] font-black uppercase tracking-[0.3em] text-[var(--text-secondary)] hover:text-[var(--color-accent-blue)] transition-colors">About Us</a>
                                <a href="{{ route('contact') }}" class="text-[10px] font-black uppercase tracking-[0.3em] text-[var(--text-secondary)] hover:text-[var(--color-accent-blue)] transition-colors">Contact Us</a>
                            </div>
                            
                            <div class="h-8 w-[1px] bg-white/10 mx-4"></div>

                            <!-- Theme Toggle -->
                            <button @click="theme = (theme === 'dark' ? 'light' : 'dark'); localStorage.setItem('theme', theme)" 
                                    class="p-2.5 rounded-xl glass-morphism hover:bg-white/10 transition-all text-[var(--color-accent-blue)] hover:scale-110 active:scale-95">
                                <span class="material-symbols-outlined text-[20px]" x-show="theme === 'light'">dark_mode</span>
                                <span class="material-symbols-outlined text-[20px]" x-show="theme === 'dark'">light_mode</span>
                            </button>

                            <a href="{{ route('contact') }}" class="bg-[var(--color-accent-blue)] text-black px-8 py-3.5 rounded-xl font-black hover:brightness-110 hover:shadow-[0_0_30px_rgba(0,210,255,0.4)] transition-all active:scale-95 text-[10px] uppercase tracking-widest">
                                GET A QUOTE
                            </a>
                        </div>

                        <!-- Mobile menu button -->
                        <div class="md:hidden flex items-center gap-4">
                            <button @click="open = !open" class="text-[var(--color-accent-blue)] p-2 rounded-xl glass-morphism">
                                <span class="material-symbols-outlined text-3xl" x-show="!open">menu</span>
                                <span class="material-symbols-outlined text-3xl" x-show="open">close</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Nav -->
            <div class="md:hidden px-6 pt-4" x-show="open" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-10" x-transition:enter-end="opacity-100 translate-y-0">
                <div class="glass-morphism rounded-2xl p-8 space-y-8 bg-black/90">
                    <a href="{{ route('services.index') }}" class="block text-sm font-black uppercase tracking-[0.2em] text-[var(--text-primary)]">Services</a>
                    <a href="{{ route('about') }}" class="block text-sm font-black uppercase tracking-[0.2em] text-[var(--text-primary)]">About Us</a>
                    <a href="{{ route('contact') }}" class="block text-sm font-black uppercase tracking-[0.2em] text-[var(--text-primary)]">Contact Us</a>
                    <div class="pt-4">
                        <a href="{{ route('contact') }}" class="block bg-[var(--color-accent-blue)] text-black text-center py-5 rounded-xl font-black uppercase tracking-widest text-xs">Get a Quote</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main class="flex-grow">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-[#010304] border-t border-[var(--glass-border)] pt-40 pb-20 relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-[var(--color-accent-blue)] to-transparent opacity-30"></div>
            
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-20">
                    <div class="md:col-span-5">
                        <div class="mb-10">
                            @if(isset($site_settings['logo']))
                                <img src="{{ asset('storage/' . $site_settings['logo']) }}" alt="{{ config('app.name') }}" class="h-12 w-auto object-contain opacity-90 hover:opacity-100 transition-opacity">
                            @else
                                <div class="text-4xl font-black text-gradient tracking-tighter italic uppercase">FREIOCEA<span class="text-[var(--color-accent-blue)]">.</span></div>
                            @endif
                        </div>
                        <p class="text-[var(--text-secondary)] max-w-sm mb-12 leading-relaxed font-medium">Providing reliable and efficient global logistics solutions. Professional shipping, tracking, and supply chain management.</p>
                        <div class="flex space-x-5">
                            <a href="#" class="w-14 h-14 rounded-2xl glass-morphism flex items-center justify-center hover:bg-[var(--color-accent-blue)] hover:text-black transition-all group border-white/5 relative">
                                <span class="material-symbols-outlined text-2xl group-hover:scale-110 transition-transform relative z-10">hub</span>
                            </a>
                            <a href="#" class="w-14 h-14 rounded-2xl glass-morphism flex items-center justify-center hover:bg-[var(--color-accent-blue)] hover:text-black transition-all group border-white/5 relative">
                                <span class="material-symbols-outlined text-2xl group-hover:scale-110 transition-transform relative z-10">storage</span>
                            </a>
                            <a href="#" class="w-14 h-14 rounded-2xl glass-morphism flex items-center justify-center hover:bg-[var(--color-accent-blue)] hover:text-black transition-all group border-white/5 relative">
                                <span class="material-symbols-outlined text-2xl group-hover:scale-110 transition-transform relative z-10">lan</span>
                            </a>
                        </div>
                    </div>
                    
                    <div class="md:col-span-7 grid grid-cols-2 md:grid-cols-3 gap-12">
                        <div>
                            <h4 class="text-[10px] font-black uppercase tracking-[0.4em] text-white mb-10">Core Services</h4>
                            <ul class="space-y-6">
                                <li><a href="{{ route('services.index') }}" class="text-sm font-bold text-[var(--text-secondary)] hover:text-white transition-colors">Global Freight</a></li>
                                <li><a href="#" class="text-sm font-bold text-[var(--text-secondary)] hover:text-white transition-colors">Last-Mile Delivery</a></li>
                                <li><a href="#" class="text-sm font-bold text-[var(--text-secondary)] hover:text-white transition-colors">Cold Chain Logistics</a></li>
                                <li><a href="#" class="text-sm font-bold text-[var(--text-secondary)] hover:text-white transition-colors">Secure Transport</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-[10px] font-black uppercase tracking-[0.4em] text-white mb-10">Technology</h4>
                            <ul class="space-y-6">
                                <li><a href="#" class="text-sm font-bold text-[var(--text-secondary)] hover:text-white transition-colors">Route Optimization</a></li>
                                <li><a href="#" class="text-sm font-bold text-[var(--text-secondary)] hover:text-white transition-colors">Customer Portal</a></li>
                                <li><a href="#" class="text-sm font-bold text-[var(--text-secondary)] hover:text-white transition-colors">API Documents</a></li>
                            </ul>
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <h4 class="text-[10px] font-black uppercase tracking-[0.4em] text-white mb-10">Global HQ</h4>
                            <p class="text-sm font-bold text-[var(--text-secondary)] leading-loose">
                                110 Elite Industrial Park<br>
                                Logistics Way, ST 90210<br>
                                <span class="text-white mt-4 block">ops@freiocea.com</span>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-40 pt-10 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-10">
                    <p class="text-[var(--text-secondary)] text-[10px] font-black uppercase tracking-[0.3em]">
                        © {{ date('Y') }} Freiocea Systems. All Rights Reserved.
                    </p>
                    <div class="flex gap-10">
                        <a href="#" class="text-[10px] font-black uppercase tracking-[0.3em] text-[var(--text-secondary)] hover:text-white transition-colors">Privacy Policy</a>
                        <a href="#" class="text-[10px] font-black uppercase tracking-[0.3em] text-[var(--text-secondary)] hover:text-white transition-colors">Terms of Service</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Scroll Animation Observer -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                    }
                });
            }, { 
                threshold: 0.1,
                rootMargin: '0px 0px -100px 0px'
            });

            document.querySelectorAll('.section-reveal').forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>
