

{{--@extends('components.layout')--}}

{{--@section('content')--}}

<x-layout>
    <div class="max-w-md mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-6">Sign in</h1>

        @if ($errors->any())
            <div class="p-3 mb-4 rounded bg-red-100 text-red-800">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login.store') }}" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium">Email</label>
                <input name="email" type="email" value="{{ old('email') }}" required class="w-full border rounded p-2">
            </div>
            <div>
                <label class="block text-sm font-medium">Password</label>
                <input name="password" type="password" required class="w-full border rounded p-2">
            </div>
            <button class="px-4 py-2 rounded bg-black text-white">Login</button>
        </form>
    </div>
</x-layout>
{{--@endsection--}}

