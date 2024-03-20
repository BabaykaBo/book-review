@extends('layouts.app')

@section('content')
    <h1 class="mb-10 text-2x1">Add Review for "{{ $book->title }}"</h1>

    <form method="POST" action="{{ route('books.reviews.store', ['book' => $book]) }}">
        @csrf
        <label for="review">
            Review
        </label>
        <textarea class="input mb-4" name="review" required id="review" cols="30" rows="10"></textarea>
        <label for="rating">
            Rating
        </label>
        <select class="input mb-4" name="rating" id="rating">
            <option value="">Select a Rating</option>
            @for ($i = 1; $i <= 5; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
        <button class="btn" type="submit">Save</button>
    </form>
@endsection
