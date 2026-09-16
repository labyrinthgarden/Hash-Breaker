@extends('layouts.app')

@section('title', '# Log in')

@section('metadescription', 'Log in Page')

@section('content')
    <div class="bg-gray-900 max-w-7xl mx-auto px-4 py-8 flex flex-col gap-20 items-center lg:min-h-[90-dvh]">
        <div class="bg-gray-800 w-1/2 p-8 rounded-lg flex flex-col items-center">
            <h1 class="text-3xl text-white mb-8 font-bold italic">Log in</h1>
            <form method="POST" action="{{ route('register') }}" class="flex flex-col items-center mb-10">
                @csrf

                <div>
                    <x-form.label for="email">Email</x-form.label>
                    <x-form.input name="email" type="email" :value="old('email')" required placeholder="myEmail@mail.com"/>
                    <x-form.error name="email"/>
                </div>

                <div>
                    <x-form.label name="password">Password</x-form.label>
                    <x-form.input name="password" type="password" required placeholder="●●●●●●●●●●"/>
                    <x-form.error name="password"/>
                </div>

                <x-button type="submit">Log in</x-button>
            </form>
        </div>
    </div>
@endsection
