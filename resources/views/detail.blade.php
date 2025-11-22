@extends('layouts.app')

@section('content')
    <span id="BackgroundGrey" class="bg-bookies-grey-light h-[206px] absolute top-0 left-0 w-full"></span>
    <nav class="flex items-center justify-between relative">
        <a href="{{ route('home') }}">
            <div
                class="size-[35px] shrink-0 rounded-full bg-white flex justify-center items-center hover:bg-bookies-hover-grey-light transition-all duration-300">
                <img src="{{ asset('assets/images/icons/back.svg') }}" alt="icon" class="size-4">
            </div>
        </a>
        <button type="button" class="cursor-pointer">
            <div
                class="size-[35px] shrink-0 rounded-full bg-white flex justify-center items-center hover:bg-bookies-hover-grey-light transition-all duration-300">
                <img src="{{ asset('assets/images/icons/love.svg') }}" alt="icon" class="size-4">
            </div>
        </button>
    </nav>
    <header class="mt-[30px] relative">
        <div class="p-[6px] mx-auto rounded-[19.5px] w-[150px] h-[195px] bg-white shrink-0">
            <div class="flex items-center justify-center rounded-[19.5px] overflow-hidden">
                <img src="{{ asset('storage/' . $book->cover) }}" alt="thumbnails" class="w-full h-full object-cover">
            </div>
        </div>
        <h1 class="mt-5 text-center font-medium text-[22px] leading-[33px]">
            {{ $book->title }}
        </h1>
        <p class="text-center text-bookies-grey mt-1">
            {{ $book->category->name }}
        </p>
        <p class="tracking-[0.57em] text-bookies-grey text-center mt-[10px]">•••</p>
        <h3 class="text-center mt-[10px] font-medium">by {{ $book->author }}</h3>
    </header>
    <section id="Sinopsis" class="mt-[30px] flex flex-col gap-2">
        <h2 class="text-bookies-grey">Sinopsis</h2>
        <p class="leading-[28px] text-bookies-black">
            {{ $book->synopsis }}
        </p>
    </section>
@endsection
