    @extends('layouts.app')

    @section('content')
    <div>
        <h1>Create New Node</h1>

        @if(session('status'))
            <p style="color: green;">{{ session('status') }}</p>
        @endif

        <form action="{{ route('nodes.store') }}" method="POST">
            @csrf
            <div>
                <label for="author_bio">Author Bio:</label>
                <input type="text" id="author_bio" name="author_bio" value="{{ old('author_bio') }}" required>
                @error('author_bio') <span style="color: red;">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="related_link">Related Link:</label>
                <input type="url" id="related_link" name="related_link" value="{{ old('related_link') }}" required>
                @error('related_link') <span style="color: red;">{{ $message }}</span> @enderror
            </div>
            <div>
                <button type="submit">Create Node</button>
            </div>
        </form>

        <p><a href="{{ url('/') }}">Back to Home</a></p>
    </div>
    @endsection