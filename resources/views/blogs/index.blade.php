<x-app-layout>
    <div class="mx-auto">
        @forelse($blogs as $blog)
            <x-blog-component :blog="$blog"/>
        @empty
            No blogs yet!
        @endforelse
    </div>
</x-app-layout>
