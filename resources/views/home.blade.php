@extends('layouts.frontend')

@section('content')
    <!-- High-Impact Hero Section -->
    <section class="relative min-h-screen flex items-center overflow-hidden pt-20">
        <!-- Background Asset -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/hero-truck.png') }}" alt="Cinematic Logistics" class="w-full h-full object-cover brightness-[0.4] scale-105 animate-pulse-slow">
            <div class="absolute inset-0 bg-gradient-to-t from-[var(--color-obsidian)] via-transparent to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-[var(--color-obsidian)] via-transparent to-transparent opacity-80"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full relative z-10">
            <div class="grid lg:grid-cols-12 gap-20 items-center">
                <div class="lg:col-span-7 section-reveal">
                    <div class="inline-flex items-center gap-3 px-5 py-2 rounded-full border border-white/10 bg-white/5 text-[var(--color-accent-blue)] text-[10px] font-black tracking-[0.4em] mb-12 uppercase backdrop-blur-md">
                        <span class="w-2 h-2 rounded-full bg-[var(--color-accent-blue)] animate-ping"></span>
                        Est. 2004 • Global Operations Active
                    </div>
                    <h1 class="text-5xl lg:text-7xl font-black leading-[0.95] tracking-tighter mb-12 text-white italic uppercase">
                        GLOBAL LOGISTICS <br><span class="text-gradient">EXCELLENCE.</span>
                    </h1>
                    <p class="text-xl text-[var(--text-secondary)] leading-relaxed max-w-2xl mb-16 font-medium">
                        Providing industry-leading logistics and supply chain solutions worldwide. We don't just move freight; we optimize your global operations.
                    </p>
                    
                    <div class="flex flex-wrap gap-8 items-center">
                        <a href="{{ route('services.index') }}" class="group bg-[var(--color-accent-blue)] text-black px-12 py-5 rounded-2xl font-black text-xs uppercase tracking-widest hover:scale-105 active:scale-95 transition-all shadow-2xl flex items-center gap-4">
                            VIEW SERVICES
                            <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">east</span>
                        </a>
                        
                        <div class="flex -space-x-3 items-center">
                            @foreach([1, 2, 3, 4] as $i)
                            <div class="w-10 h-10 rounded-full border-2 border-[var(--color-obsidian)] bg-zinc-800 ring-2 ring-white/5 overflow-hidden">
                                <img src="https://i.pravatar.cc/100?u=logi{{ $i }}" alt="Expert">
                            </div>
                            @endforeach
                            <div class="ps-6">
                                <div class="flex items-center gap-1 text-[var(--color-accent-gold)]">
                                    @for($j=0; $j<5; $j++)
                                    <span class="material-symbols-outlined text-xs filled">star</span>
                                    @endfor
                                </div>
                                <div class="text-[var(--text-secondary)] font-black text-[10px] uppercase tracking-widest">4.9/5 Customer Satisfaction</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Audit Form -->
                <div class="lg:col-span-5 section-reveal" style="transition-delay: 200ms;">
                    <div class="glass-morphism p-10 lg:p-14 rounded-[3.5rem] border-white/5 relative overflow-hidden group">
                        <div class="relative z-10">
                            <h3 class="text-4xl font-black text-white mb-8 tracking-tighter italic uppercase">GET A <br><span class="text-gradient">QUOTE.</span></h3>
                            <p class="text-[var(--text-secondary)] mb-12 font-medium leading-relaxed">Request a professional logistics consultation and quote in minutes.</p>
                            
                            <form action="#" class="space-y-6">
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black text-white/40 uppercase tracking-widest ml-2">Shipping Method</label>
                                    <select class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white focus:ring-2 focus:ring-[var(--color-accent-blue)] outline-none appearance-none transition-all">
                                        <option class="bg-[var(--color-obsidian)]">International Freight</option>
                                        <option class="bg-[var(--color-obsidian)]">Domestic Trucking</option>
                                        <option class="bg-[var(--color-obsidian)]">Expedited Delivery</option>
                                    </select>
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="space-y-2">
                                        <label class="text-[10px] font-black text-white/40 uppercase tracking-widest ml-2">Origin</label>
                                        <input type="text" placeholder="Port/Zip" class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white placeholder-white/10 focus:ring-2 focus:ring-[var(--color-accent-blue)] outline-none transition-all">
                                    </div>
                                    <div class="space-y-2">
                                        <label class="text-[10px] font-black text-white/40 uppercase tracking-widest ml-2">Destination</label>
                                        <input type="text" placeholder="Port/Zip" class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white placeholder-white/10 focus:ring-2 focus:ring-[var(--color-accent-blue)] outline-none transition-all">
                                    </div>
                                </div>
                                <button class="w-full bg-white/10 hover:bg-[var(--color-accent-blue)] hover:text-black py-5 rounded-2xl font-black text-[10px] uppercase tracking-[0.3em] transition-all active:scale-95 shadow-xl mt-4">
                                    SUBMIT QUOTE REQUEST
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bottom Stats Bar -->
        <div class="absolute bottom-0 left-0 w-full glass-morphism border-t border-white/5 py-10 z-20 hidden lg:block">
            <div class="max-w-7xl mx-auto px-8 flex justify-between items-center">
                @foreach([
                    ['label' => 'On-Time Accuracy', 'value' => '99.8%'],
                    ['label' => 'Global Nodes', 'value' => '412+'],
                    ['label' => 'Tons Moved/Year', 'value' => '2.4M'],
                    ['label' => 'SLA Response', 'value' => '< 12min']
                ] as $stat)
                <div class="flex items-center gap-5">
                    <div class="w-[1px] h-8 bg-white/10"></div>
                    <div>
                        <div class="text-2xl font-black text-white tracking-tighter">{{ $stat['value'] }}</div>
                        <div class="text-[8px] font-black text-[var(--text-secondary)] uppercase tracking-[0.3em]">{{ $stat['label'] }}</div>
                    </div>
                </div>
                @endforeach
                <div class="w-[1px] h-8 bg-white/10"></div>
            </div>
        </div>
    </section>

    <!-- Our Global Logistics Solutions Section -->
    <section class="py-40 relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-24 section-reveal">
                <div class="text-[var(--color-accent-blue)] font-black uppercase tracking-[0.5em] text-[10px] mb-8">Service Portfolio</div>
                <h2 class="text-4xl lg:text-6xl font-black text-white mb-10 tracking-tighter italic uppercase">
                    OUR GLOBAL <br><span class="text-gradient">SHIPPING SOLUTIONS.</span>
                </h2>
                <p class="text-2xl text-[var(--text-secondary)] max-w-3xl mx-auto font-medium leading-relaxed">
                    Reliable, efficient, and cost-effective logistics services tailored to the complex demands of modern global commerce.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-12">
                <!-- Card 1: Global Freight Coordination -->
                <div class="industrial-card glass-morphism rounded-[3rem] overflow-hidden border-white/5 flex flex-col h-full section-reveal" style="transition-delay: 100ms;">
                    <div class="aspect-[4/3] overflow-hidden">
                        <img src="{{ asset('images/solutions-freight.png') }}" alt="Global Freight" class="w-full h-full object-cover grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all duration-700">
                    </div>
                    <div class="p-12 flex flex-col flex-grow">
                        <h3 class="text-xl font-black text-white mb-4 italic uppercase tracking-tighter">INTERNATIONAL FREIGHT <br>COORDINATION</h3>
                        <p class="text-[var(--text-secondary)] text-sm mb-8 leading-relaxed font-medium">Expert management of international shipments across air, sea, and land, ensuring regulatory compliance and efficient routing.</p>
                        <div class="h-[1px] w-full bg-white/5 mb-10"></div>
                        <a href="{{ route('services.index') }}" class="inline-flex items-center gap-4 text-[10px] font-black text-[var(--color-accent-blue)] uppercase tracking-widest group">
                            LEARN MORE
                            <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">east</span>
                        </a>
                    </div>
                </div>

                <!-- Card 2: Carrier & Broker Network -->
                <div class="industrial-card glass-morphism rounded-[3rem] overflow-hidden border-white/5 flex flex-col h-full section-reveal" style="transition-delay: 200ms;">
                    <div class="aspect-[4/3] overflow-hidden">
                        <img src="{{ asset('images/solutions-carrier.png') }}" alt="Carrier Network" class="w-full h-full object-cover grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all duration-700">
                    </div>
                    <div class="p-12 flex flex-col flex-grow">
                        <h3 class="text-2xl font-black text-white mb-6 italic uppercase tracking-tighter">Carrier & Broker Network</h3>
                        <p class="text-[var(--text-secondary)] leading-relaxed font-medium mb-10 flex-grow">
                            Access to a massive network of vetted carriers and licensed freight brokers for reliable and cost-effective transportation services across the grid.
                        </p>
                        <div class="h-[1px] w-full bg-white/5 mb-10"></div>
                        <a href="{{ route('services.index') }}" class="text-[var(--color-accent-blue)] font-black text-[10px] uppercase tracking-widest flex items-center gap-4 hover:translate-x-2 transition-transform">
                            View Infrastructure <span class="material-symbols-outlined text-sm">east</span>
                        </a>
                    </div>
                </div>

                <!-- Card 3: Supply Chain Consulting -->
                <div class="industrial-card glass-morphism rounded-[3rem] overflow-hidden border-white/5 flex flex-col h-full section-reveal" style="transition-delay: 300ms;">
                    <div class="aspect-[4/3] overflow-hidden">
                        <img src="{{ asset('images/solutions-consulting.png') }}" alt="Supply Chain Consulting" class="w-full h-full object-cover grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all duration-700">
                    </div>
                    <div class="p-12 flex flex-col flex-grow">
                        <h3 class="text-2xl font-black text-white mb-6 italic uppercase tracking-tighter">Supply Chain Consulting</h3>
                        <p class="text-[var(--text-secondary)] leading-relaxed font-medium mb-10 flex-grow">
                            Strategic analysis and optimization of logistic processes to enhance supply chain resilience and reduce overall operational costs through data insight.
                        </p>
                        <div class="h-[1px] w-full bg-white/5 mb-10"></div>
                        <a href="{{ route('services.index') }}" class="text-[var(--color-accent-blue)] font-black text-[10px] uppercase tracking-widest flex items-center gap-4 hover:translate-x-2 transition-transform">
                            Initiate Audit <span class="material-symbols-outlined text-sm">east</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Authority Grid: Global Reach -->
    <section class="py-40 relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-32 items-center">
                <div class="section-reveal">
                    <div class="text-[var(--color-accent-blue)] font-black uppercase tracking-[0.5em] text-[10px] mb-8">Capabilities</div>
                    <h2 class="text-4xl lg:text-6xl font-black text-white mb-12 tracking-tighter leading-none italic uppercase">
                        Global Scale. <br><span class="text-[var(--color-accent-blue)]">Reliable Delivery.</span>
                    </h2>
                    <p class="text-xl text-[var(--text-secondary)] mb-16 leading-relaxed font-medium">
                        Our infrastructure is built for reliability. We manage a vast network of shipping routes with absolute precision and real-time oversight.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-10">
                        <div class="industrial-card p-10 rounded-[2.5rem] glass-morphism border-white/5">
                            <span class="material-symbols-outlined text-[var(--color-accent-blue)] text-4xl mb-6">shipping</span>
                            <h4 class="text-lg font-black text-white mb-3 italic">Ocean Freight</h4>
                            <p class="text-xs text-[var(--text-secondary)] leading-relaxed uppercase tracking-widest font-bold">24 Nodes Active</p>
                        </div>
                        <div class="industrial-card p-10 rounded-[2.5rem] glass-morphism border-white/5">
                            <span class="material-symbols-outlined text-[var(--color-accent-gold)] text-4xl mb-6">local_shipping</span>
                            <h4 class="text-lg font-black text-white mb-3 italic">Autonomous Land</h4>
                            <p class="text-xs text-[var(--text-secondary)] leading-relaxed uppercase tracking-widest font-bold">500+ Fleet Grid</p>
                        </div>
                    </div>
                </div>
                
                <div class="section-reveal" style="transition-delay: 200ms;">
                    <div class="relative rounded-[4rem] overflow-hidden group">
                        <img src="{{ asset('images/global-ship.png') }}" alt="Ocean Logistics" class="w-full aspect-[4/5] object-cover rounded-[4rem] transition-transform duration-1000 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[var(--color-obsidian)] via-transparent to-transparent opacity-60"></div>
                        <div class="absolute bottom-10 left-10 glass-morphism p-6 rounded-2xl border-white/5 flex items-center gap-6">
                            <div class="w-12 h-12 rounded-full bg-green-500/20 flex items-center justify-center">
                                <span class="w-3 h-3 rounded-full bg-green-500 animate-pulse"></span>
                            </div>
                            <div>
                                <div class="text-[8px] font-black text-[var(--text-secondary)] uppercase tracking-widest">Operational Status</div>
                                <div class="text-xs font-black text-white uppercase tracking-widest">ACTIVE PORT NETWORK</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Operational Excellence -->
    <section class="py-40 bg-[var(--color-obsidian-lighter)] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full opacity-20 pointer-events-none">
            <div class="h-full w-full mesh-gradient rotate-180"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="flex flex-col md:flex-row items-end justify-between mb-32 gap-10">
                <div class="section-reveal">
                    <div class="text-[var(--color-accent-blue)] font-black uppercase tracking-[0.5em] text-[10px] mb-8">Operational Excellence</div>
                    <h2 class="text-4xl lg:text-6xl font-black text-white tracking-tighter leading-none italic uppercase">EXPERTISE <br>IN MOTION.</h2>
                </div>
                <div class="section-reveal lg:pb-4 text-right">
                    <p class="text-[var(--text-secondary)] max-w-sm ml-auto font-medium italic">Precision is our only metric. We leverage the intersection of human strategy and high-fidelity tech.</p>
                </div>
            </div>

            <div class="grid lg:grid-cols-12 gap-10">
                <div class="lg:col-span-8 section-reveal">
                    <div class="rounded-[4rem] overflow-hidden relative industrial-card h-[600px]">
                        <img src="{{ asset('images/ops-detail.png') }}" alt="Operations" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                        <div class="absolute inset-0 bg-gradient-to-t from-[var(--color-obsidian)] to-transparent opacity-70"></div>
                        <div class="absolute bottom-12 left-12 right-12">
                            <h3 class="text-xl font-black text-white mb-4 italic uppercase tracking-tighter">Real-Time Tracking Control</h3>
                            <p class="text-[var(--text-secondary)] text-sm mb-10 leading-relaxed font-medium">Full visibility into your supply chain with our proprietary logistics tracking dashboard.</p>
                            <div class="flex items-center gap-6">
                                <div class="h-[px] flex-grow bg-white/5"></div>
                                <span class="text-[10px] font-black text-[var(--color-accent-blue)] uppercase tracking-widest">Service Reliability: 99.9%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-4 space-y-10 section-reveal" style="transition-delay: 300ms;">
                    <div class="glass-morphism p-12 rounded-[3.5rem] border-white/5 h-full flex flex-col justify-center">
                        <div class="text-9xl font-black text-white mb-8 tracking-tighter">99<span class="text-[var(--color-accent-blue)]">.9</span>%</div>
                        <h4 class="text-xl font-black text-white mb-6 uppercase tracking-wider italic">SLA Compliance</h4>
                        <p class="text-[var(--text-secondary)] leading-relaxed mb-10 font-medium">Our uptime isn't just a number—it's a contractual guarantee backed by 20 years of architectural stability.</p>
                        <hr class="border-white/5 mb-10">
                        <ul class="space-y-6">
                            @foreach(['Predictive AI Routing', 'End-to-End Encryption', '24/7 Rapid Response'] as $feat)
                            <li class="flex items-center gap-4">
                                <span class="material-symbols-outlined text-[var(--color-accent-blue)] text-sm font-bold">check_circle</span>
                                <span class="text-[10px] font-black text-white uppercase tracking-widest">{{ $feat }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-40 relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-32 section-reveal">
                <div class="text-[var(--color-accent-blue)] font-black uppercase tracking-[0.5em] text-[10px] mb-8">Verified Excellence</div>
                <h2 class="text-4xl lg:text-6xl font-black text-white tracking-tighter leading-none italic uppercase">WHAT OUR <br><span class="text-gradient">CLIENTS SAY.</span></h2>
            </div>
            
            <div class="grid md:grid-cols-3 gap-12">
                @foreach($testimonials as $testimonial)
                <div class="industrial-card glass-morphism p-12 lg:p-16 rounded-[4rem] group flex flex-col border-white/5 h-full section-reveal" style="transition-delay: {{ $loop->index * 150 }}ms;">
                    <div class="flex text-[var(--color-accent-gold)] mb-12 gap-1.5 grayscale opacity-50 group-hover:grayscale-0 group-hover:opacity-100 transition-all">
                        @for($i=0; $i<$testimonial->rating; $i++)
                            <span class="material-symbols-outlined filled text-sm font-bold">star</span>
                        @endfor
                    </div>
                    <blockquote class="text-[var(--text-primary)] text-xl font-medium mb-16 leading-relaxed flex-grow italic">
                        "{{ $testimonial->content }}"
                    </blockquote>
                    <div class="flex items-center gap-6 pt-12 border-t border-white/5">
                        <div class="w-14 h-14 rounded-2xl glass-morphism flex items-center justify-center font-black text-[var(--color-accent-blue)] text-xl border-white/5 uppercase tracking-tighter">
                            {{ substr($testimonial->client_name, 0, 1) }}
                        </div>
                        <div>
                            <h4 class="font-black text-white text-lg tracking-tight uppercase">{{ $testimonial->client_name }}</h4>
                            <p class="text-[9px] text-[var(--color-accent-blue)] font-black uppercase tracking-[0.2em]">{{ $testimonial->company }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- High-Fidelity CTA -->
    <section class="py-60 relative overflow-hidden section-reveal">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-t from-[var(--color-obsidian)] via-transparent to-[var(--color-obsidian)] z-10"></div>
            <img src="{{ asset('images/network-iso.png') }}" class="w-full h-full object-cover opacity-10 grayscale scale-110">
        </div>

        <div class="max-w-5xl mx-auto px-6 lg:px-8 relative z-20 text-center">
            <h2 class="text-5xl lg:text-7xl font-black text-white mb-16 tracking-tighter leading-[0.95] italic uppercase">
                READY TO <br><span class="text-gradient">GET STARTED?</span>
            </h2>
            <p class="text-2xl text-[var(--text-secondary)] mb-20 max-w-2xl mx-auto font-medium leading-relaxed">
                Connect with our team today and experience the difference of professional logistics management.
            </p>
            <div class="flex flex-col sm:flex-row gap-8 justify-center items-center">
                <a href="{{ route('contact') }}" class="bg-[var(--color-accent-blue)] text-black px-16 py-7 rounded-2xl font-black text-sm uppercase tracking-widest hover:scale-105 active:scale-95 transition-all w-full sm:w-auto shadow-2xl">
                    Contact Us
                </a>
                <a href="{{ route('services.index') }}" class="glass-morphism text-white px-16 py-7 rounded-2xl font-black text-sm uppercase tracking-[0.2em] hover:bg-white/5 transition-all active:scale-95 w-full sm:w-auto">
                    View Systems
                </a>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    @keyframes pulse-slow {
        0%, 100% { opacity: 0.4; transform: scale(1.05); }
        50% { opacity: 0.6; transform: scale(1.1); }
    }
    .animate-pulse-slow {
        animation: pulse-slow 15s infinite ease-in-out;
    }
    .material-symbols-outlined.filled {
        font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }
</style>
@endpush
