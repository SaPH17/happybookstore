@extends('layout.app')
@section('title')
    <div class="flex items-center w-12 ml-6">
        {!!$icons[$book->category_id-1]!!}
    </div>
    {{$book->title}}
@endsection

@section('content')
    <div class="flex flex-col text-gray-300 px-5 py-4">
        <div class="grid grid-cols-3">
            <div>
                <div class="font-bold leading-6 text-white ">
                    Publisher
                </div>
                <div>
                    {{$book->detail->publisher}}
                </div>
            </div>
            <div>
                <div class="font-bold leading-6 text-white">
                    Author
                </div>
                <div>
                    {{$book->detail->author}}
                </div>
            </div>
            <div>
                <div class="font-bold leading-6 text-white">
                    Year
                </div>
                <div>
                    {{$book->detail->year}}
                </div>
            </div>
        </div>
        <div>
            <div class="font-bold leading-6 text-white mt-6">
                Description
            </div>
            <div>
                {{$book->detail->description}}
            </div>
        </div>
    </div>
@endsection