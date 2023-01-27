<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>

                <ul class="p-6 list-disc ml-5">
                    @foreach(($users = App\Models\User::get()) as $user)
                        <li>
                            <span>{{$user->id}} [{{$user->tenant_id}}]</span>
                            <span>{{ $user->name }}</span>
                            <span>{{ $user->email }}</span>
                        </li>

                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
