@extends('layout.app')
@section('title')
    <div class="flex items-center w-12 ml-6">
        {!!$icons[$category->id-1]!!}
    </div>
    {{$category->category}}
@endsection

@section('content')
    @if ($books->isEmpty())
        <div class="text-gray-300 text-md px-4">
            No book data
        </div>
    @else  
        <div class="grid gap-4 grid-cols-3">
            @foreach ($books as $book)
                <div class="rounded-lg hover:bg-gray-700 hover:text-white text-gray-300 bg-gray-800 px-6 py-5 shadow-sm flex items-center space-x-6">
                    <div class="flex-shrink-0 text-2xl">
                        {!!$icons[$book->category_id-1]!!}
                    </div>
                    <div class="flex-1 min-w-0">
                        <a href="/book/{{$book->id}}">
                            <p class="text-md font-bold max-w-xs truncate">
                                {{$book->title}}
                            </p>
                            <p class="text-sm text-gray-400 truncate">
                                {{$book->detail->author}}
                            </p>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection