<x-layout>
    <section class="flex flex-col items-center justify-center min-h-[80vh] bg-gray-50">
        <div class="w-full max-w-sm text-center">
            <!-- Title -->
            <h1 class="text-4xl font-extrabold text-gray-900 mb-10 tracking-tight">
                Sign in
            </h1>

            <!-- Form -->
            <form method="POST" action="{{ route('login.store') }}" class="space-y-5">
                @csrf

                <div class="text-left">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input name="email" type="email" value="{{ old('email') }}" required
                           class="w-full rounded-md border border-gray-300 focus:border-pink-500 focus:ring-1 focus:ring-pink-500 px-3 py-2 text-gray-900 placeholder-gray-400"
                           placeholder="you@example.com">
                </div>

                <div class="text-left">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input name="password" type="password" required
                           class="w-full rounded-md border border-gray-300 focus:border-pink-500 focus:ring-1 focus:ring-pink-500 px-3 py-2 text-gray-900 placeholder-gray-400"
                           placeholder="••••••••">
                </div>

                <button type="submit"
                        class="w-full bg-pink-500 hover:bg-pink-600 text-white font-medium py-2.5 rounded-md transition duration-200">
                    Login
                </button>
            </form>

            <!-- Footer -->
            <p class="mt-10 text-xs text-gray-400">
                © {{ date('Y') }} StayEasy Network
            </p>
        </div>
    </section>
</x-layout>






{{--
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
--}}

