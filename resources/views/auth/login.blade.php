<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Kasir</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body{
            background: linear-gradient(135deg,#0f172a,#1e3a8a,#2563eb);
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center">

<div class="w-full max-w-5xl bg-white rounded-3xl shadow-2xl overflow-hidden grid md:grid-cols-2">

    <!-- Kiri -->
    <div class="hidden md:flex flex-col justify-center bg-blue-600 text-white p-12">

            <h2 class="text-5xl font-bold leading-tight">

                Welcome to
                <br>
                <span class="text-yellow-400">Komi Caffe</span>
            </h2>
            </h2>

        <p class="text-blue-100 leading-relaxed">
            Selamat datang kembali di Komi Caffe!
        </p>

    </div>

    <!-- Kanan -->
    <div class="p-10">

        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800">
                Komi Caffe
            </h2>

            <p class="text-gray-500 mt-2">
                Silakan login untuk melanjutkan
            </p>
        </div>

        @if(session('success'))
            <div class="mb-4 bg-green-100 text-green-700 p-3 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="mb-4 bg-red-100 text-red-700 p-3 rounded-lg">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="space-y-6">

            @csrf

            <div>
                <label class="block mb-2 text-gray-700 font-medium">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="email@example.com">
            </div>

            <div>
                <label class="block mb-2 text-gray-700 font-medium">
                    Password
                </label>

                <input
                    type="password"
                    name="password"
                    required
                    class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="••••••••">
            </div>

            <div class="flex items-center justify-between">

                <label class="flex items-center gap-2">
                    <input type="checkbox" name="remember">
                    <span class="text-sm text-gray-600">
                        Ingat Saya
                    </span>
                </label>

                <a href="#" class="text-blue-600 hover:underline text-sm">
                    Lupa Password?
                </a>

            </div>

            <button
                type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-xl font-semibold transition">

                Login

            </button>

        </form>

        <div class="mt-10 text-center text-gray-500 text-sm">
            © {{ date('Y') }} Sistem Kasir
        </div>

    </div>

</div>

</body>
</html>