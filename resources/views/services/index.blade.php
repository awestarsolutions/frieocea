@extends('layouts.frontend')

@section('content')
<section class="py-40 relative overflow-hidden">
    <!-- Background Decor -->
    <div class="absolute top-0 right-0 w-1/3 h-full opacity-10 pointer-events-none mesh-gradient"></div>
    
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="mb-32 section-reveal">
            <div class="text-[var(--color-accent-blue)] font-black uppercase tracking-[0.6em] text-[10px] mb-8">Strategic Capabilities</div>
            <h1 class="text-5xl lg:text-7xl font-black text-white mb-10 tracking-tighter leading-none italic uppercase">
                OUR <span class="text-gradient">SERVICES.</span>
            </h1>
            <p class="text-2xl text-[var(--text-secondary)] max-w-2xl font-medium leading-relaxed">
                Global transit architecture engineered for the modern enterprise. Explore our high-fidelity logistics nodes.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-10">
            @foreach($services as $service)
            <a href="{{ route('services.show', $service->slug) }}" class="industrial-card glass-morphism p-14 lg:p-20 rounded-[4rem] group block relative overflow-hidden h-full section-reveal" style="transition-delay: {{ $loop->index * 100 }}ms;">
                <div class="relative z-10 h-full flex flex-col">
                    <div class="w-24 h-24 rounded-3xl glass-morphism flex items-center justify-center mb-16 group-hover:bg-[var(--color-accent-blue)] group-hover:text-black transition-all duration-700 border-white/5 shadow-2xl">
                        <span class="material-symbols-outlined text-4xl group-hover:scale-110 transition-transform">{{ $service->icon }}</span>
                    </div>
                    
                    <div class="flex-grow">
                        <div class="flex items-center gap-4 mb-6">
                            <span class="text-[var(--color-accent-blue)] font-black text-[10px] uppercase tracking-widest">Active Service</span>
                            <div class="h-[1px] w-8 bg-white/10"></div>
                        </div>
                        <h3 class="text-4xl font-black text-white mb-8 tracking-tighter italic group-hover:translate-x-3 transition-transform duration-700">{{ $service->title }}</h3>
                        <p class="text-[var(--text-secondary)] mb-16 line-clamp-3 leading-relaxed text-lg font-medium">{{ $service->description }}</p>
                    </div>

                    <div class="inline-flex items-center text-[var(--color-accent-blue)] font-black text-[10px] uppercase tracking-[0.4em] gap-5 group/link">
                        LEARN MORE
                        <div class="w-12 h-12 rounded-full border border-[var(--color-accent-blue)] flex items-center justify-center group-hover/link:bg-[var(--color-accent-blue)] group-hover/link:text-black transition-all">
                            <span class="material-symbols-outlined text-sm">east</span>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

<!-- Stats Break -->
<section class="py-40 bg-[var(--color-obsidian-lighter)] relative overflow-hidden border-y border-white/5">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center section-reveal">
        <h2 class="text-3xl lg:text-5xl font-black text-white mb-16 tracking-tighter italic leading-tight uppercase">Global Logistics <br>Managed by Freiocea.</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-16">
            @foreach([
                ['v' => '1.2B', 'l' => 'Data Points/Day'],
                ['v' => '99.9%', 'l' => 'Reliability'],
                ['v' => '50k', 'l' => 'Active Routes'],
                ['v' => '24/7', 'l' => 'Expert Support']
            ] as $s)
            <div class="space-y-4">
                <div class="text-5xl font-black text-white tracking-tighter">{{ $s['v'] }}</div>
                <div class="text-[10px] font-black text-[var(--color-accent-blue)] uppercase tracking-[0.4em]">{{ $s['l'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Bottom CTA -->
<section class="py-40 relative section-reveal">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-black text-white mb-12 tracking-tighter italic uppercase">Ready to Get Started?</h2>
        <p class="text-xl text-[var(--text-secondary)] mb-16 font-medium">Join our network of elite industrial partners today.</p>
        <a href="{{ route('contact') }}" class="bg-[var(--color-accent-gold)] text-black px-12 py-5 rounded-2xl font-black text-xs uppercase tracking-widest hover:scale-105 active:scale-95 transition-all shadow-2xl">
            Request a Consultation / Quote
        </a>
    </div>
</section>
@endsection
