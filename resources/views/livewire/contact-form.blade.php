<form wire:submit.prevent="submit" >
    @csrf
    <div class="flex-col flex gap-4 p-5">
        <input type="text" placeholder="Name" name="name" id="name" wire:model="name">
        @error('name') <span class="error">{{ $message }}</span> @enderror
        <input type="email" placeholder="Email" name="email" id="email" wire:model="email">
        @error('email') <span class="error">{{ $message }}</span> @enderror
        <textarea placeholder="Text" name="text" id="text" wire:model="text"></textarea>
        @error('text') <span class="error">{{ $message }}</span> @enderror
        <button type="submit">Send</button>
    </div>


</form>
