<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Incoming Leads / Quotes') }}
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
                                    <th class="px-6 py-4 font-bold text-sm text-gray-600 uppercase">Received</th>
                                    <th class="px-6 py-4 font-bold text-sm text-gray-600 uppercase">Name</th>
                                    <th class="px-6 py-4 font-bold text-sm text-gray-600 uppercase">Email</th>
                                    <th class="px-6 py-4 font-bold text-sm text-gray-600 uppercase">Status</th>
                                    <th class="px-6 py-4 font-bold text-sm text-gray-600 uppercase flex justify-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @forelse($leads as $lead)
                                <tr class="hover:bg-gray-50 transition-colors {{ $lead->status === 'unread' ? 'bg-blue-50/30 font-bold' : '' }}">
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ $lead->created_at->format('M d, Y H:i') }}</td>
                                    <td class="px-6 py-4 text-gray-900">{{ $lead->name }}</td>
                                    <td class="px-6 py-4 text-gray-600">{{ $lead->email }}</td>
                                    <td class="px-6 py-4">
                                        @if($lead->status === 'unread')
                                            <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs font-bold">New</span>
                                        @else
                                            <span class="px-3 py-1 rounded-full bg-gray-100 text-gray-500 text-xs font-bold">Read</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-right space-x-2">
                                        <a href="{{ route('admin.leads.show', $lead) }}" class="text-blue-600 hover:text-blue-900 font-bold text-xs uppercase tracking-widest">View</a>
                                        <form action="{{ route('admin.leads.destroy', $lead) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900 font-bold text-xs uppercase tracking-widest" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-10 text-center text-gray-500">No leads yet.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-6">
                        {{ $leads->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
