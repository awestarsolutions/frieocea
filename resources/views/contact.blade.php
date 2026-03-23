@extends('layouts.frontend')

@section('content')
<section class="py-40 relative overflow-hidden">
    <!-- Background Decor -->
    <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>
    <div class="absolute top-0 right-0 w-1/2 h-full opacity-5 pointer-events-none">
        <img src="{{ asset('images/network-iso.png') }}" class="w-full h-full object-cover">
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10 pt-40">
        <div class="grid lg:grid-cols-2 gap-32 items-start">
            <!-- Info Side -->
            <div class="section-reveal">
                <h1 class="text-5xl lg:text-7xl font-black text-white mb-12 tracking-tighter leading-none italic uppercase">
                    CONTACT <br><span class="text-gradient">OUR TEAM.</span>
                </h1>
                <p class="text-2xl text-[var(--text-secondary)] font-medium leading-relaxed mb-20 max-w-xl">
                    Connect with our team to discuss your global logistics and shipping needs. We respond to all inquiries within 24 hours.
                </p>

                <div class="grid gap-12">
                    @foreach([
                        ['icon' => 'lan', 'label' => 'Technical Inquiry', 'value' => 'ops@freiocea.com'],
                        ['icon' => 'support_agent', 'label' => 'Customer Support', 'value' => '+1 (800) FRE-IOCEA'],
                        ['icon' => 'location_on', 'label' => 'Global Offices', 'value' => 'New York • London • Singapore']
                    ] as $contact)
                    <div class="flex items-center gap-8 group">
                        <div class="w-16 h-16 rounded-2xl glass-morphism border-white/5 flex items-center justify-center text-[var(--color-accent-blue)] group-hover:bg-[var(--color-accent-blue)] group-hover:text-black transition-all">
                            <span class="material-symbols-outlined text-3xl">{{ $contact['icon'] }}</span>
                        </div>
                        <div>
                            <div class="text-[9px] font-black text-[var(--color-accent-blue)] uppercase tracking-[0.4em] mb-2">{{ $contact['label'] }}</div>
                            <div class="text-xl font-bold text-white">{{ $contact['value'] }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Form Side -->
            <div class="section-reveal" style="transition-delay: 200ms;">
                <div class="glass-morphism p-12 lg:p-20 rounded-[4rem] border-white/10 relative overflow-hidden shadow-2xl">
                    <div class="absolute -top-32 -right-32 w-80 h-80 bg-[var(--color-accent-gold)] opacity-5 rounded-full blur-[100px]"></div>
                    
                    <form action="#" method="POST" class="space-y-10 relative z-10">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-8">
                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-white/40 uppercase tracking-[0.3em] ml-2">Full Name / Organization</label>
                                <input type="text" name="name" placeholder="Contact Name" class="w-full bg-white/5 border border-white/10 rounded-2xl px-8 py-5 text-white placeholder-white/20 focus:ring-2 focus:ring-[var(--color-accent-blue)] transition-all outline-none" required>
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-white/40 uppercase tracking-[0.3em] ml-2">Email Address</label>
                                <input type="email" name="email" placeholder="email@company.com" class="w-full bg-white/5 border border-white/10 rounded-2xl px-8 py-5 text-white placeholder-white/20 focus:ring-2 focus:ring-[var(--color-accent-blue)] transition-all outline-none" required>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-white/40 uppercase tracking-[0.3em] ml-2">Area of Interest</label>
                            <select name="subject" class="w-full bg-white/5 border border-white/10 rounded-2xl px-8 py-5 text-white focus:ring-2 focus:ring-[var(--color-accent-blue)] transition-all outline-none appearance-none">
                                <option class="bg-[var(--color-obsidian)]">International Shipping</option>
                                <option class="bg-[var(--color-obsidian)]">Fleet Management</option>
                                <option class="bg-[var(--color-obsidian)]">Supply Chain Optimization</option>
                                <option class="bg-[var(--color-obsidian)]">Partnership Inquiry</option>
                            </select>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-white/40 uppercase tracking-[0.3em] ml-2">Message</label>
                            <textarea name="message" rows="5" placeholder="How can we help you?" class="w-full bg-white/5 border border-white/10 rounded-2xl px-8 py-5 text-white placeholder-white/20 focus:ring-2 focus:ring-[var(--color-accent-blue)] transition-all outline-none resize-none" required></textarea>
                        </div>

                        <button type="submit" class="w-full py-7 rounded-2xl bg-[var(--color-accent-blue)] text-black font-black text-xs uppercase tracking-[0.5em] hover:scale-105 hover:shadow-[0_0_50px_rgba(0,210,255,0.4)] transition-all active:scale-95 shadow-2xl">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
