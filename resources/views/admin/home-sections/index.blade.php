<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home Page Sections') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="px-6 py-4 font-bold text-sm text-gray-600 uppercase">Section Key</th>
                                    <th class="px-6 py-4 font-bold text-sm text-gray-600 uppercase">Status</th>
                                    <th class="px-6 py-4 font-bold text-sm text-gray-600 uppercase">Last Updated</th>
                                    <th class="px-6 py-4 font-bold text-sm text-gray-600 uppercase flex justify-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @foreach($sections as $section)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 font-medium text-gray-900">{{ ucfirst(str_replace('_', ' ', $section->section_key)) }}</td>
                                    <td class="px-6 py-4">
                                        @if($section->is_visible)
                                            <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-bold">Visible</span>
                                        @else
                                            <span class="px-3 py-1 rounded-full bg-gray-100 text-gray-500 text-xs font-bold">Hidden</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ $section->updated_at->diffForHumans() }}</td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="{{ route('admin.home-sections.edit', $section) }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-lg font-bold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 transition-all">
                                            Edit Content
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
