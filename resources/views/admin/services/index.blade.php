<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Services') }}
            </h2>
            <a href="{{ route('admin.services.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-lg font-bold text-xs text-white uppercase tracking-widest hover:bg-blue-700 transition-all">
                Add New Service
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="px-6 py-4 font-bold text-sm text-gray-600 uppercase">Service</th>
                                    <th class="px-6 py-4 font-bold text-sm text-gray-600 uppercase">Slug</th>
                                    <th class="px-6 py-4 font-bold text-sm text-gray-600 uppercase flex justify-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @forelse($services as $service)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <span class="material-symbols-outlined mr-3 text-gray-400">{{ $service->icon }}</span>
                                            <span class="font-medium text-gray-900">{{ $service->title }}</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ $service->slug }}</td>
                                    <td class="px-6 py-4 text-right space-x-2">
                                        <a href="{{ route('admin.services.edit', $service) }}" class="text-blue-600 hover:text-blue-900 font-bold text-xs uppercase tracking-widest">Edit</a>
                                        <form action="{{ route('admin.services.destroy', $service) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900 font-bold text-xs uppercase tracking-widest" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3" class="px-6 py-10 text-center text-gray-500">No services found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
