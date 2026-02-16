<div>
    <h1>Create New Node</h1>

    @if(session('status'))
        <p style="color: green;">{{ session('status') }}</p>
    @endif

    <form wire:submit.prevent="submit">
        <div>
            <label for="author_bio">Author Bio:</label>
            <input type="text" id="author_bio" wire:model="author_bio" required>
            @error('author_bio') <span style="color: red;">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="related_link">Related Link:</label>
            <input type="url" id="related_link" wire:model="related_link" required>
            @error('related_link') <span style="color: red;">{{ $message }}</span> @enderror
        </div>
        <div>
            <button type="submit">Create Node</button>
        </div>
    </form>
</div>
