<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('OrderItem.update', $OrderItem) }}">
            @csrf
            @method('patch')
            <label class="text-gray-400 text-sm">Name
                <input type="text" name="name" value="{{ old('name', $OrderItem->name) }}"
                    placeholder="{{ __('Name the OrderItem') }}"
                    class="text-gray-900 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </label>
            <label class="mt-2 text-gray-400 text-sm">Base Price (cents)
            <input type="number" name="basePrice_cents" value="{{ old('basePrice_cents', $OrderItem->basePrice_cents) }}"
                placeholder="{{ __('Base price in cents') }}"
                class="text-gray-900 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('basePrice_cents')" class="mt-2" />
            </label>
            <label class="mt-2 text-gray-400 text-sm">Duration (minutes)
            <input type="number" name="duration_minutes"
                value="{{ old('duration_minutes', $OrderItem->duration_minutes) }}"
                placeholder="{{ __('OrderItem duration in minutes') }}"
                class="text-gray-900 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('duration_minutes')" class="mt-2" />
            </label>
            <label class="mt-2 text-gray-400 text-sm">Description
            <textarea name="description" placeholder="{{ __('Add a description for the OrderItem.') }}"
                class="text-gray-900 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('description', $OrderItem->description) }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </label>
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('OrderItem.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>