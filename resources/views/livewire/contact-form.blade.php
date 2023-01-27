<div class="bg-blue-50">
    <div class="mx-auto max-w-7xl px-6 pb-8 pt-16 sm:pt-24 lg:px-8 lg:pt-32">

            <form wire:submit.prevent="submit" >
                <div class="flex-col flex gap-4 p-5">
                <input type="text" placeholder="Name" name="name" id="name" wire:model="name">
                @error('name') <span class="error">{{ $message }}</span> @enderror
                <input type="email" placeholder="Email" name="email" id="email" wire:model="email">
                @error('email') <span class="error">{{ $message }}</span> @enderror
                <textarea placeholder="Text" name="text" id="text" wire:model="text"></textarea>
                @error('text') <span class="error">{{ $message }}</span> @enderror
                <button type="submit" class="bg-blue-500 text-blue-50 rounded-lg">Send</button>
            </div>
        </form>
    </div>
</div>
