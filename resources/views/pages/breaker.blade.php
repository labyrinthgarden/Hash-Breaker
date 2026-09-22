@extends('layouts.app')

@section('title', '# Breaker')

@section('meta_description', 'Break your hashes')

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

        @media (prefers-reduced-motion: reduce) {
            .sq, .icon-pop {
                animation: none !important;
                opacity: 1 !important;
                transform: none !important;
            }
        }
    </style>

    <div class="bg-gray-900 max-w-7xl mx-auto px-4 py-8 flex flex-col gap-20 items-center justify-center lg:flex-col min-h-[90-dvh]">
        <div>
            <h1 class="text-white text-3xl">You have no hash jobs currently running. Click the button below to start a new job.</h1>
        </div>

        <div class="flex flex-row items-center justify-center">
            <x-button class="text-4xl max-w-md py-10" href="{{ route('new-job') }}">
                + New Hash Job
            </x-button>
        </div>
    </div>

@endsection
