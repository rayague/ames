<x-guest-layout>
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Connexion</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div class="mb-4">
            <label class="block text-sm text-gray-700">Email</label>
            <input
                type="email"
                name="email"
                required
                autofocus
                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-green-400"
            />
        </div>

        <!-- Mot de passe -->
        <div class="mb-6">
            <label class="block text-sm text-gray-700">Mot de passe</label>
            <input
                type="password"
                name="password"
                required
                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-green-400"
            />
        </div>

        <!-- Bouton -->
        <button
            type="submit"
            class="w-full bg-green-500 text-white py-2 rounded-md hover:bg-green-600 transition"
        >
            Se connecter
        </button>
    </form>
</x-guest-layout>
