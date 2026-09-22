@extends('layouts.app')

@section('title', '# Register')

@section('metadescription', 'Register Page')

@section('content')
    <div class="bg-gray-900 max-w-7xl mx-auto px-4 py-8 flex flex-col gap-20 items-center lg:min-h-[90-dvh]">
        <div class="bg-gray-800 w-1/2 p-8 rounded-lg flex flex-col items-center">
            <h1 class="text-3xl text-white mb-8 font-bold italic">Register Now</h1>
            <form method="POST" action="{{ route('register.store') }}" class="flex flex-col items-center mb-10">
                @csrf

                <div>
                    <x-form.label for="name">Name</x-form.label>
                    <x-form.input name="name" type="text" :value="old('name')" required autofocus placeholder="Papa Richard Stallman"/>
                    <x-form.error name="name"/>
                </div>

                <div>
                    <x-form.label  for="email">Email</x-form.label>
                    <x-form.input name="email" type="email" :value="old('email')" required placeholder="example@mail.com"/>
                    <x-form.error name="email"/>
                </div>

                <div>
                    <x-form.label for="password">Password</x-form.label>
                    <x-form.input name="password" type="password" required placeholder="●●●●●●●●●●"/>
                    <x-form.error name="password"/>
                </div>

                <div>
                    <x-form.label for="password_confirmation">Confirm Password</x-form.label>
                    <x-form.input name="password_confirmation" type="password" required placeholder="●●●●●●●●●●"/>
                    <x-form.error name="password_confirmation"/>
                </div>

                <x-button type="submit">Register</x-button>
            </form>
        </div>
    </div>
@endsection
