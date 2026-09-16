@extends('layouts.app')

@section('title', '# Start')

@section('meta_description', 'Start Page')

@section('content')
    <style>
        .sq {
            position: absolute;
            top: 0;
            left: 0;
            width: 10rem;   /* 128px = w-32 */
            height: 10rem;
            border-radius: 6px;
            animation: moveIn 700ms cubic-bezier(0.2, 1, 0.2, 1) both;
            animation-delay: var(--d, 0ms);
            will-change: transform, opacity;
        }

        @keyframes moveIn {
            0%   { transform: translate(var(--x), calc(50% - 90px)) scale(1); opacity: 1; }
            100% { transform: translate(var(--fx), calc(50% - 90px)) scale(1);  opacity: 1; }
        }

        .icon-pop {
            opacity: 0;
            transform: scale(0) rotate(-180deg);
            animation: iconPop 500ms cubic-bezier(0.2, 1, 0.2, 1) both;
            animation-delay: 1000ms;
        }

        @keyframes iconPop {
            0%   { opacity: 0; transform: scale(0) rotate(0deg); }
            100% { opacity: 1; transform: scale(1) rotate(0deg); }
        }

        @media (prefers-reduced-motion: reduce) {
            .sq, .icon-pop {
                animation: none !important;
                opacity: 1 !important;
                transform: none !important;
            }
        }
    </style>

    <div class="bg-gray-900 max-w-7xl mx-auto px-4 py-8 flex flex-col gap-20 lg:flex-row min-h-[90-dvh]">
        <div class="bg-amber-300 w-full max-w-md p-8 rounded-lg overflow-hidden">
            <div class="bg-gray-900 w-max-1/3 px-8 py-8 rounded-2xl">
                <h1 class="text-amber-300 text-6xl font-bold">Break Your Hashes!</h1>
            </div>

            {{-- Animation --}}
            <div class="mt-8 flex items-center justify-center h-[20rem]">
                <div class="relative w-full h-32">
                    <span class="bg-gray-900 sq" style="--d:0ms; --x:-400px; --fx:calc(50% + 60px);"></span>
                    <span class="bg-amber-300 sq" style="--d:300ms; --x:-400px; --fx:calc(50% + 55px);"></span>
                    <span class="bg-gray-900 sq" style="--d:450ms; --x:-400px; --fx:calc(50% + 50px);"></span>
                    <span class="bg-amber-300 sq" style="--d:525ms; --x:-400px; --fx:calc(50% + 45px);"></span>
                    <span class="bg-gray-900 sq" style="--d:600ms;   --x:-400px; --fx:calc(50% + 40px);"></span>

                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                        <i class="fa-solid fa-hashtag icon-pop text-8xl text-amber-300"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-20">
            <p class="mt-9 text-2xl text-gray-400">
                Register and start independent processes for breaking hashes lists.
            </p>

            <x-button class="text-4xl max-w-md py-10" href="{{ route('register') }}">
                Register ->
            </x-button>

            <x-button class="text-4xl max-w-md py-10" href="{{ route('login') }}" variant="secondary">
                Log in ->
            </x-button>
        </div>
    </div>

@endsection
