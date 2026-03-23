<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($service) ? 'Edit Service' : 'Add New Service' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl">
                <div class="p-8">
                    <form action="{{ isset($service) ? route('admin.services.update', $service) : route('admin.services.store') }}" method="POST">
                        @csrf
                        @if(isset($service)) @method('PATCH') @endif

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase tracking-widest mb-2">Title</label>
                                <input type="text" name="title" value="{{ old('title', $service->title ?? '') }}" class="w-full border-gray-200 rounded-xl focus:ring-blue-500" required>
                                @error('title') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase tracking-widest mb-2">Slug</label>
                                <input type="text" name="slug" value="{{ old('slug', $service->slug ?? '') }}" class="w-full border-gray-200 rounded-xl focus:ring-blue-500" required>
                                @error('slug') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-xs font-bold text-gray-500 uppercase tracking-widest mb-2">Icon (Material Symbols name)</label>
                            <input type="text" name="icon" value="{{ old('icon', $service->icon ?? '') }}" class="w-full border-gray-200 rounded-xl focus:ring-blue-500">
                            @error('icon') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div class="mb-6">
                            <label class="block text-xs font-bold text-gray-500 uppercase tracking-widest mb-2">Description</label>
                            <textarea name="description" class="w-full border-gray-200 rounded-xl focus:ring-blue-500 h-32" required>{{ old('description', $service->description ?? '') }}</textarea>
                            @error('description') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                            <!-- Benefits Repeater -->
                            <div x-data="{ items: {{ json_encode(old('benefits', $service->benefits ?? [])) }} }">
                                <label class="block text-xs font-bold text-gray-500 uppercase tracking-widest mb-4">Core Benefits</label>
                                <div class="space-y-3">
                                    <template x-for="(item, index) in items" :key="index">
                                        <div class="flex gap-2">
                                            <input type="text" :name="'benefits[' + index + ']'" x-model="items[index]" class="flex-1 border-gray-200 rounded-xl focus:ring-blue-500 text-sm" placeholder="Ente benefit...">
                                            <button type="button" @click="items.splice(index, 1)" class="text-red-400 hover:text-red-600">
                                                <span class="material-symbols-outlined">delete</span>
                                            </button>
                                        </div>
                                    </template>
                                </div>
                                <button type="button" @click="items.push('')" class="mt-4 flex items-center gap-2 text-sm font-bold text-blue-600 hover:text-blue-800 transition-colors">
                                    <span class="material-symbols-outlined text-sm">add_circle</span> Add Benefit
                                </button>
                                @error('benefits') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>

                            <!-- Use Cases Repeater -->
                            <div x-data="{ items: {{ json_encode(old('use_cases', $service->use_cases ?? [])) }} }">
                                <label class="block text-xs font-bold text-gray-500 uppercase tracking-widest mb-4">Common Use Cases</label>
                                <div class="space-y-3">
                                    <template x-for="(item, index) in items" :key="index">
                                        <div class="flex gap-2">
                                            <input type="text" :name="'use_cases[' + index + ']'" x-model="items[index]" class="flex-1 border-gray-200 rounded-xl focus:ring-blue-500 text-sm" placeholder="Enter use case...">
                                            <button type="button" @click="items.splice(index, 1)" class="text-red-400 hover:text-red-600">
                                                <span class="material-symbols-outlined">delete</span>
                                            </button>
                                        </div>
                                    </template>
                                </div>
                                <button type="button" @click="items.push('')" class="mt-4 flex items-center gap-2 text-sm font-bold text-blue-600 hover:text-blue-800 transition-colors">
                                    <span class="material-symbols-outlined text-sm">add_circle</span> Add Use Case
                                </button>
                                @error('use_cases') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="bg-[#00263f] text-white px-8 py-3 rounded-xl font-bold uppercase tracking-widest hover:bg-blue-900 transition-all shadow-lg">
                                {{ isset($service) ? 'Update Service' : 'Create Service' }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
