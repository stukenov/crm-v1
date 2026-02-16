    @extends('layouts.app')

    @section('content')
    <h1>Node Details</h1>

    <p><strong>Author Bio:</strong> {{ $node->getXField('author_bio') }}</p>
    <p><strong>Related Link:</strong> <a href="{{ $node->getXField('related_link') }}">{{ $node->getXField('related_link') }}</a></p>

    <p><a href="{{ url('/') }}">Back to Home</a></p>
    @endsection