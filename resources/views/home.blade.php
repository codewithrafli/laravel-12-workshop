@extends('layouts.app')

@section('content')
    <section id="MostPopular" class="flex flex-col gap-3 px-4">
        <h2 class="text-xl leading-[30px] text-bookies-black font-medium">Most Popular</h2>
        <div class="flex flex-col gap-4">
            @foreach ($books as $book)
                <a href="{{ route('books.show', $book->id) }}">
                    <div
                        class="card rounded-[25px] p-4 flex items-end justify-between bg-bookies-grey-light hover:bg-bookies-hover-grey-light transition-all duration-300">
                        <div class="flex items-center gap-4">
                            <div class="p-1 rounded-[13px] w-[100px] h-[130px] bg-white shrink-0">
                                <div class="flex items-center justify-center rounded-[13px] overflow-hidden">
                                    <img src="{{ asset('storage/' . $book->cover) }}" alt="thumbnails"
                                        class="w-full h-full object-cover">
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-medium text-bookies-black">{{ $book->title }}</h3>
                                <p class="text-sm leading-[21px] text-bookies-grey">{{ $book->category->name }}</p>
                            </div>
                        </div>
                        <button type="button" class="cursor-pointer">
                            <div class="size-[35px] shrink-0 rounded-full bg-white flex justify-center items-center">
                                <img src="{{ asset('assets/images/icons/love.svg') }}" alt="icon" class="size-4">
                            </div>
                        </button>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection
