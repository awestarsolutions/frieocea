<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-2xl bg-[#00263f] flex items-center justify-center text-white shadow-lg">
                <span class="material-symbols-outlined">dashboard</span>
            </div>
            <div>
                <h2 class="font-black text-2xl text-[#00263f] tracking-tight">System Overview</h2>
                <p class="text-xs text-gray-500 font-bold uppercase tracking-widest">Real-time Operations Control</p>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <div class="bg-white p-8 rounded-[2rem] shadow-sm border-b-4 border-blue-500 hover:shadow-xl transition-all group">
                    <div class="flex justify-between items-start mb-6">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all">
                            <span class="material-symbols-outlined">home</span>
                        </div>
                        <span class="text-[10px] font-black text-blue-500 uppercase tracking-widest bg-blue-50 px-2 py-1 rounded-lg">Live</span>
                    </div>
                    <div class="text-3xl font-black text-[#00263f] mb-1">{{ $stats['sections'] }}</div>
                    <div class="text-xs font-bold text-gray-400 uppercase tracking-widest">Homepage Modules</div>
                </div>

                <div class="bg-white p-8 rounded-[2rem] shadow-sm border-b-4 border-indigo-500 hover:shadow-xl transition-all group">
                    <div class="flex justify-between items-start mb-6">
                        <div class="w-12 h-12 rounded-xl bg-indigo-50 flex items-center justify-center text-indigo-600 group-hover:bg-indigo-600 group-hover:text-white transition-all">
                            <span class="material-symbols-outlined">local_shipping</span>
                        </div>
                        <span class="text-[10px] font-black text-indigo-500 uppercase tracking-widest bg-indigo-50 px-2 py-1 rounded-lg">Active</span>
                    </div>
                    <div class="text-3xl font-black text-[#00263f] mb-1">{{ $stats['services'] }}</div>
                    <div class="text-xs font-bold text-gray-400 uppercase tracking-widest">Global Services</div>
                </div>

                <div class="bg-white p-8 rounded-[2rem] shadow-sm border-b-4 border-purple-500 hover:shadow-xl transition-all group">
                    <div class="flex justify-between items-start mb-6">
                        <div class="w-12 h-12 rounded-xl bg-purple-50 flex items-center justify-center text-purple-600 group-hover:bg-purple-600 group-hover:text-white transition-all">
                            <span class="material-symbols-outlined">reviews</span>
                        </div>
                        <span class="text-[10px] font-black text-purple-500 uppercase tracking-widest bg-purple-50 px-2 py-1 rounded-lg">Verified</span>
                    </div>
                    <div class="text-3xl font-black text-[#00263f] mb-1">{{ $stats['testimonials'] }}</div>
                    <div class="text-xs font-bold text-gray-400 uppercase tracking-widest">Client Testimonials</div>
                </div>

                <div class="bg-white p-8 rounded-[2rem] shadow-sm border-b-4 border-red-500 hover:shadow-xl transition-all group">
                    <div class="flex justify-between items-start mb-6">
                        <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center text-red-600 group-hover:bg-red-600 group-hover:text-white transition-all">
                            <span class="material-symbols-outlined">mark_email_unread</span>
                        </div>
                        @if($stats['leads'] > 0)
                        <span class="flex h-2 w-2">
                          <span class="animate-ping absolute inline-flex h-2 w-2 rounded-full bg-red-400 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-2 w-2 bg-red-500"></span>
                        </span>
                        @endif
                    </div>
                    <div class="text-3xl font-black text-[#00263f] mb-1">{{ $stats['leads'] }}</div>
                    <div class="text-xs font-bold text-gray-400 uppercase tracking-widest">Pending Inquiries</div>
                </div>
            </div>

            <!-- Management Console -->
            <div class="bg-white overflow-hidden shadow-sm rounded-[2.5rem] border border-gray-100">
                <div class="p-10">
                    <div class="flex items-center justify-between mb-10">
                        <h3 class="text-xl font-black text-[#00263f] tracking-tight">Management Console</h3>
                        <div class="h-1 w-20 bg-gray-100 rounded-full"></div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <a href="{{ route('admin.home-sections.index') }}" class="group flex items-center p-6 border border-gray-100 rounded-3xl hover:bg-gray-50 transition-all hover:border-blue-200">
                            <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center text-blue-500 group-hover:scale-110 transition-transform mr-4">
                                <span class="material-symbols-outlined">aspect_ratio</span>
                            </div>
                            <div>
                                <span class="block font-bold text-[#00263f]">Interface Content</span>
                                <span class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">Home Visuals</span>
                            </div>
                        </a>
                        
                        <a href="{{ route('admin.services.index') }}" class="group flex items-center p-6 border border-gray-100 rounded-3xl hover:bg-gray-50 transition-all hover:border-indigo-200">
                            <div class="w-14 h-14 rounded-2xl bg-indigo-50 flex items-center justify-center text-indigo-500 group-hover:scale-110 transition-transform mr-4">
                                <span class="material-symbols-outlined">layers</span>
                            </div>
                            <div>
                                <span class="block font-bold text-[#00263f]">Service Catalog</span>
                                <span class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">Capabilities</span>
                            </div>
                        </a>

                        <a href="{{ route('admin.leads.index') }}" class="group flex items-center p-6 border border-gray-100 rounded-3xl hover:bg-gray-50 transition-all hover:border-red-200">
                            <div class="w-14 h-14 rounded-2xl bg-red-50 flex items-center justify-center text-red-500 group-hover:scale-110 transition-transform mr-4">
                                <span class="material-symbols-outlined">hub</span>
                            </div>
                            <div>
                                <span class="block font-bold text-[#00263f]">Logistics Pipeline</span>
                                <span class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">Incoming Data</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Quick Tip -->
            <div class="mt-8 bg-[#00263f] rounded-[2rem] p-8 text-white flex items-center justify-between overflow-hidden relative">
                <div class="relative z-10">
                    <p class="text-xs font-bold text-blue-300 uppercase tracking-widest mb-1">Admin Tip</p>
                    <p class="font-medium text-lg">Use the <span class="font-black italic">Testimonials</span> module to keep the trust metrics fresh on the homepage.</p>
                </div>
                <div class="absolute right-0 top-0 h-full w-1/3 bg-blue-500/10 skew-x-12 translate-x-10"></div>
            </div>
        </div>
    </div>
</x-app-layout>
