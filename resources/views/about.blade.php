@extends('layouts.frontend')

@section('content')
<section class="py-40 relative overflow-hidden">
    <!-- Header -->
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10 pt-40">
        <div class="grid lg:grid-cols-2 gap-24 items-center mb-40 section-reveal">
            <div>
                <div class="text-[var(--color-accent-blue)] font-black uppercase tracking-[0.5em] text-[10px] mb-8">Executive Summary</div>
                <h1 class="text-5xl lg:text-7xl font-black text-white mb-12 tracking-tighter leading-[0.95] italic uppercase">
                    ABOUT <span class="text-gradient">US.</span>
                </h1>
                <p class="text-2xl text-[var(--text-secondary)] font-medium leading-relaxed max-w-xl">
                    Freiocea is a leading global logistics provider specializing in efficient and reliable supply chain solutions. Founded on the principles of operational excellence and technological innovation.
                </p>
            </div>
            <div class="relative group section-reveal" style="transition-delay: 200ms;">
                <div class="absolute inset-0 bg-[var(--color-accent-blue)] opacity-10 blur-[100px] rounded-full"></div>
                <img src="{{ asset('images/ops-detail.png') }}" alt="Operations Detail" class="rounded-[4rem] group-hover:scale-105 transition-transform duration-1000 grayscale opacity-80 group-hover:grayscale-0 group-hover:opacity-100 shadow-2xl">
            </div>
        </div>

        <!-- Strategy Grid -->
        <div class="grid md:grid-cols-3 gap-10 mb-60">
            @foreach([
                ['icon' => 'hub', 'title' => 'Reliable Infrastructure', 'desc' => 'Every shipment is monitored through multiple tracking systems and real-time validation layers.'],
                ['icon' => 'query_stats', 'title' => 'Data-Driven Optimization', 'desc' => 'We leverage high-density data to preempt delays and optimize routing across the global grid.'],
                ['icon' => 'shield', 'title' => 'Secure Transportation', 'desc' => 'End-to-end security for digital assets and industry-standard protocols for physical freight.']
            ] as $core)
            <div class="industrial-card glass-morphism p-14 rounded-[3.5rem] border-white/5 section-reveal" style="transition-delay: {{ $loop->index * 150 }}ms;">
                <div class="w-20 h-20 rounded-2xl bg-white/5 flex items-center justify-center mb-10 text-[var(--color-accent-blue)]">
                    <span class="material-symbols-outlined text-4xl">{{ $core['icon'] }}</span>
                </div>
                <h4 class="text-2xl font-black text-white mb-6 italic uppercase tracking-tighter">{{ $core['title'] }}</h4>
                <p class="text-[var(--text-secondary)] leading-relaxed font-medium">{{ $core['desc'] }}</p>
            </div>
            @endforeach
        </div>

        <!-- Milestones -->
        <div class="text-center section-reveal">
            <h2 class="text-4xl lg:text-6xl font-black text-white italic tracking-tighter mb-24 uppercase">OPTIMIZED SINCE 2004.</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-20">
                @foreach([
                    ['p' => '2004', 's' => 'Founded'],
                    ['p' => '2010', 's' => 'Global Expansion'],
                    ['p' => '2018', 's' => 'Automated Systems'],
                    ['p' => '2024', 's' => 'Next-Gen Routing']
                ] as $m)
                <div>
                    <div class="text-5xl font-black text-white mb-4 italic">{{ $m['p'] }}</div>
                    <div class="text-[10px] font-black text-[var(--color-accent-gold)] uppercase tracking-[0.4em]">{{ $m['s'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
