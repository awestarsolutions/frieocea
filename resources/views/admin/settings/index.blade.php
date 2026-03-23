<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Site Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl">
                <div class="p-8">
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-200 text-green-700 px-4 py-3 rounded-xl mb-6 font-bold">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="space-y-8">
                            <div>
                                <h3 class="font-bold text-[#00263f] mb-6 border-b border-gray-100 pb-2 uppercase text-xs tracking-[0.2em]">Contact Information</h3>
                                <div class="grid grid-cols-1 gap-6">
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase mb-2">Support Email</label>
                                        <input type="email" name="settings[email]" value="{{ $settings['email'] ?? '' }}" class="w-full border-gray-200 rounded-xl focus:ring-[#00263f] text-gray-900">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase mb-2">Display Phone</label>
                                        <input type="text" name="settings[phone]" value="{{ $settings['phone'] ?? '' }}" class="w-full border-gray-200 rounded-xl focus:ring-[#00263f] text-gray-900">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase mb-2">Office Address</label>
                                        <textarea name="settings[address]" class="w-full border-gray-200 rounded-xl focus:ring-[#00263f] h-24 text-gray-900">{{ $settings['address'] ?? '' }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h3 class="font-bold text-[#00263f] mb-6 border-b border-gray-100 pb-2 uppercase text-xs tracking-[0.2em]">SEO & Identity</h3>
                                <div class="grid grid-cols-1 gap-6">
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase mb-2">Site Name</label>
                                        <input type="text" name="settings[site_name]" value="{{ $settings['site_name'] ?? 'Freiocea Logistics' }}" class="w-full border-gray-200 rounded-xl focus:ring-[#00263f] text-gray-900">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase mb-2">Meta Description</label>
                                        <textarea name="settings[meta_description]" class="w-full border-gray-200 rounded-xl focus:ring-[#00263f] h-24 text-gray-900">{{ $settings['meta_description'] ?? '' }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h3 class="font-bold text-[#00263f] mb-6 border-b border-gray-100 pb-2 uppercase text-xs tracking-[0.2em]">Brand Identity</h3>
                                <div class="grid grid-cols-1 gap-6">
                                    <div class="space-y-4">
                                        <label class="block text-xs font-bold text-gray-500 uppercase mb-2">Website Logo</label>
                                        @if(isset($settings['logo']))
                                            <div class="mb-4 p-4 border border-gray-100 rounded-xl bg-gray-50 inline-block">
                                                <img src="{{ asset('storage/' . $settings['logo']) }}" alt="Current Logo" class="h-12 w-auto object-contain">
                                                <p class="text-[10px] text-gray-400 mt-2 font-medium">Current active logo</p>
                                            </div>
                                        @endif
                                        <div class="relative group">
                                            <input type="file" name="logo" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" id="logo-input" onchange="updateFileName(this)">
                                            <div class="border-2 border-dashed border-gray-200 rounded-2xl p-8 text-center group-hover:border-[#00263f] transition-all">
                                                <span class="material-symbols-outlined text-4xl text-gray-300 mb-2">cloud_upload</span>
                                                <p id="file-name" class="text-xs font-bold text-gray-500 uppercase tracking-widest">Click to upload or drag & drop</p>
                                                <p class="text-[10px] text-gray-400 mt-1">PNG, SVG or JPEG (Max 2MB)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            function updateFileName(input) {
                                const fileName = input.files[0]?.name || 'Click to upload or drag & drop';
                                document.getElementById('file-name').textContent = fileName;
                            }
                        </script>

                        <div class="mt-12 flex justify-end">
                            <button type="submit" class="bg-[#00263f] text-white px-10 py-4 rounded-xl font-bold uppercase tracking-widest hover:bg-black transition-all shadow-xl">
                                Update Settings
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
