<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Lead Detail: {{ $contact->name }}
            </h2>
            <a href="{{ route('admin.leads.index') }}" class="text-sm font-bold text-gray-500 hover:text-gray-700 transition-colors">
                &larr; Back to Leads
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl">
                <div class="p-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">Sender Name</label>
                            <p class="text-xl font-bold text-gray-900">{{ $contact->name }}</p>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">Email Address</label>
                            <p class="text-lg text-blue-600 hover:underline"><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></p>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">Phone Number</label>
                            <p class="text-lg text-gray-900">{{ $contact->phone ?? 'N/A' }}</p>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">Received On</label>
                            <p class="text-lg text-gray-900">{{ $contact->created_at->format('F d, Y @ H:i') }}</p>
                        </div>
                    </div>

                    <div class="bg-gray-50 p-8 rounded-3xl border border-gray-100">
                        <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-4">Message Content</label>
                        <p class="text-gray-700 leading-relaxed whitespace-pre-wrap">{{ $contact->message }}</p>
                    </div>

                    <div class="mt-10 flex justify-end">
                        <form action="{{ route('admin.leads.destroy', $contact) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 font-bold hover:text-red-700 transition-colors uppercase text-sm tracking-widest" onclick="return confirm('Are you sure you want to delete this lead?')">
                                Delete Permanently
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
