<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($testimonial) ? 'Edit Testimonial' : 'Add Testimonial' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl">
                <div class="p-8">
                    <form action="{{ isset($testimonial) ? route('admin.testimonials.update', $testimonial) : route('admin.testimonials.store') }}" method="POST">
                        @csrf
                        @if(isset($testimonial)) @method('PATCH') @endif

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase tracking-widest mb-2">Client Name</label>
                                <input type="text" name="client_name" value="{{ old('client_name', $testimonial->client_name ?? '') }}" class="w-full border-gray-200 rounded-xl focus:ring-blue-500" required>
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase tracking-widest mb-2">Company</label>
                                <input type="text" name="company" value="{{ old('company', $testimonial->company ?? '') }}" class="w-full border-gray-200 rounded-xl focus:ring-blue-500" required>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-xs font-bold text-gray-500 uppercase tracking-widest mb-2">Rating (1-5)</label>
                            <select name="rating" class="w-full border-gray-200 rounded-xl focus:ring-blue-500">
                                @for($i=1; $i<=5; $i++)
                                    <option value="{{ $i }}" {{ (old('rating', $testimonial->rating ?? 5) == $i) ? 'selected' : '' }}>{{ $i }} Stars</option>
                                @endfor
                            </select>
                        </div>

                        <div class="mb-6">
                            <label class="block text-xs font-bold text-gray-500 uppercase tracking-widest mb-2">Message</label>
                            <textarea name="content" class="w-full border-gray-200 rounded-xl focus:ring-blue-500 h-32" required>{{ old('content', $testimonial->content ?? '') }}</textarea>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="bg-[#00263f] text-white px-8 py-3 rounded-xl font-bold uppercase tracking-widest hover:bg-blue-900 transition-all shadow-lg">
                                {{ isset($testimonial) ? 'Update' : 'Save' }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
