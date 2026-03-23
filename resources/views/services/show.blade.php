@extends('layouts.frontend')

@section('content')
<section class="py-40 relative overflow-hidden">
    <!-- Hero Header -->
    <div class="absolute top-0 left-0 w-full h-[600px] z-0 opacity-40">
        <img src="{{ asset('images/global-ship.png') }}" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-[var(--color-obsidian)] to-transparent"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10 pt-60">
        <div class="grid lg:grid-cols-12 gap-20 items-end mb-32 section-reveal">
            <div class="lg:col-span-8">
                <div class="text-[var(--color-accent-blue)] font-black uppercase tracking-[0.5em] text-[10px] mb-8">Service Capabilities</div>
                <h1 class="text-4xl lg:text-6xl font-black text-white mb-10 tracking-tighter leading-none italic uppercase">{{ $service->title }}</h1>
                <p class="text-2xl text-[var(--text-secondary)] font-medium leading-relaxed max-w-2xl">
                    {{ $service->description }}
                </p>
            </div>
            <div class="lg:col-span-4 lg:pb-4 flex justify-end">
                <div class="glass-morphism px-8 py-5 rounded-2xl border-white/5 flex items-center gap-5">
                    <span class="material-symbols-outlined text-[var(--color-accent-blue)] text-3xl font-black">{{ $service->icon }}</span>
                    <div>
                        <div class="text-[8px] font-black text-[var(--text-secondary)] uppercase tracking-widest mb-1">Status</div>
                        <div class="text-xs font-black text-white uppercase tracking-widest flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                            Operational
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid lg:grid-cols-2 gap-20 section-reveal" style="transition-delay: 200ms;">
            <!-- Benefits -->
            <div class="space-y-12">
                <div class="flex items-center gap-5">
                    <div class="h-[1px] w-12 bg-[var(--color-accent-blue)]"></div>
                    <h2 class="text-3xl font-black text-white italic uppercase tracking-tighter">Performance Indicators.</h2>
                </div>
                <div class="grid gap-8">
                    @foreach($service->benefits ?? [] as $benefit)
                    <div class="industrial-card glass-morphism p-10 rounded-[2.5rem] border-white/5 group">
                        <div class="flex gap-8 items-center">
                            <div class="shrink-0 w-16 h-16 rounded-2xl bg-white/5 flex items-center justify-center group-hover:bg-[var(--color-accent-blue)] group-hover:text-black transition-all">
                                <span class="material-symbols-outlined">trending_up</span>
                            </div>
                            <h4 class="text-xl font-black text-white italic">{{ $benefit }}</h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Use Cases -->
            <div class="space-y-12 section-reveal" style="transition-delay: 400ms;">
                <div class="flex items-center gap-5">
                    <div class="h-[1px] w-12 bg-[var(--color-accent-gold)]"></div>
                    <h2 class="text-3xl font-black text-white italic uppercase tracking-tighter">Service Applications.</h2>
                </div>
                <div class="grid gap-8">
                    @foreach($service->use_cases ?? [] as $use_case)
                    <div class="industrial-card glass-morphism p-10 rounded-[2.5rem] border-white/5 flex items-center justify-between group">
                        <span class="text-lg font-bold text-white group-hover:translate-x-3 transition-transform">{{ $use_case }}</span>
                        <span class="material-symbols-outlined text-[var(--color-accent-gold)]">arrow_outward</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Integration Call -->
        <div class="mt-40 section-reveal" style="transition-delay: 500ms;">
            <div class="glass-morphism p-20 lg:p-32 rounded-[4rem] text-center border-white/5 relative overflow-hidden group">
                <div class="absolute -top-32 -right-32 w-96 h-96 bg-[var(--color-accent-blue)] opacity-5 rounded-full blur-[100px]"></div>
                <h2 class="text-3xl lg:text-5xl font-black text-white mb-12 tracking-tighter italic leading-none uppercase">Optimize Your <br>Logistics Network.</h2>
                <div class="flex flex-col sm:flex-row gap-8 justify-center items-center">
                    <a href="{{ route('contact') }}" class="bg-[var(--color-accent-blue)] text-black px-16 py-7 rounded-2xl font-black text-sm uppercase tracking-widest hover:scale-105 active:scale-95 transition-all w-full sm:w-auto">
                        Get a Quote
                    </a>
                    <a href="{{ route('services.index') }}" class="glass-morphism text-white px-16 py-7 rounded-2xl font-black text-sm uppercase tracking-widest hover:bg-white/5 transition-all w-full sm:w-auto">
                        Back to Services
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
