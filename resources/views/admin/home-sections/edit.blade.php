<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit Section: {{ ucfirst(str_replace('_', ' ', $homeSection->section_key)) }}
            </h2>
            <a href="{{ route('admin.home-sections.index') }}" class="text-sm font-bold text-gray-500 hover:text-gray-700 transition-colors">
                &larr; Back to List
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl">
                <div class="p-8">
                    <form action="{{ route('admin.home-sections.update', $homeSection) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="mb-8">
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="hidden" name="is_visible" value="0">
                                <input type="checkbox" name="is_visible" value="1" class="sr-only peer" {{ $homeSection->is_visible ? 'checked' : '' }}>
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none ring-0 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                <span class="ms-3 text-sm font-bold text-gray-700 uppercase tracking-wider">Visible on Website</span>
                            </label>
                        </div>

                        <div class="space-y-6">
                            @foreach($homeSection->content as $key => $value)
                                @if(is_array($value))
                                    @php 
                                        $isList = isset($value[0]); 
                                    @endphp
                                    <div class="p-8 bg-gray-50 rounded-[2rem] border border-gray-100" 
                                         x-data="{ items: {{ json_encode($value) }} }">
                                        <h4 class="font-bold text-[#00263f] mb-6 uppercase text-xs tracking-[0.2em]">{{ str_replace('_', ' ', $key) }}</h4>
                                        
                                        <div class="space-y-4">
                                            <template x-for="(item, index) in items" :key="index">
                                                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                                                    <div class="flex justify-between items-start mb-4">
                                                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest" x-text="'Item #' + (index + 1)"></span>
                                                        <button type="button" @click="items.splice(index, 1)" class="text-red-400 hover:text-red-600 transition-colors">
                                                            <span class="material-symbols-outlined text-sm">delete</span>
                                                        </button>
                                                    </div>
                                                    
                                                    <div class="grid gap-4">
                                                        <template x-if="typeof item === 'object'">
                                                            <div class="space-y-4">
                                                                <template x-for="(fieldVal, fieldKey) in item" :key="fieldKey">
                                                                    <div>
                                                                        <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1" x-text="fieldKey.replace('_', ' ')"></label>
                                                                        <textarea :name="'content[' + '{{ $key }}' + '][' + index + '][' + fieldKey + ']'" 
                                                                                  x-model="items[index][fieldKey]"
                                                                                  class="w-full border-gray-100 rounded-xl focus:ring-[#00263f] text-sm resize-none"
                                                                                  rows="2"></textarea>
                                                                    </div>
                                                                </template>
                                                            </div>
                                                        </template>
                                                        <template x-if="typeof item !== 'object'">
                                                            <textarea :name="'content[' + '{{ $key }}' + '][' + index + ']'" 
                                                                      x-model="items[index]"
                                                                      class="w-full border-gray-100 rounded-xl focus:ring-[#00263f] text-sm resize-none"
                                                                      rows="2"></textarea>
                                                        </template>
                                                    </div>
                                                </div>
                                            </template>
                                        </div>

                                        <button type="button" @click="items.push(typeof items[0] === 'object' ? JSON.parse(JSON.stringify(items[0])) : '')" 
                                                class="mt-6 flex items-center gap-2 text-xs font-bold text-[#00263f] hover:opacity-70 transition-all">
                                            <span class="material-symbols-outlined text-sm">add_circle</span> Add New {{ str_replace('_', ' ', \Illuminate\Support\Str::singular($key)) }}
                                        </button>
                                    </div>
                                @else
                                    <div>
                                        <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-2">{{ str_replace('_', ' ', $key) }}</label>
                                        <textarea 
                                            name="content[{{ $key }}]" 
                                            class="w-full bg-white border-gray-100 rounded-xl focus:ring-[#00263f] {{ strlen($value) > 100 ? 'h-32' : 'h-14' }} text-sm"
                                        >{{ $value }}</textarea>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                        <div class="mt-10 flex justify-end">
                            <button type="submit" class="inline-flex items-center px-8 py-3 bg-[#00263f] border border-transparent rounded-xl font-bold text-sm text-white uppercase tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 transition-all shadow-lg hover:shadow-xl">
                                Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
