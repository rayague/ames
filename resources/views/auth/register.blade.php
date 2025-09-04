<x-guest-layout>
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
        Créer un compte
    </h2>

    <form method="POST" action="{{ route('register') }}" class="space-y-6">
        @csrf

        <!-- Nom -->
        <div>
            <x-input-label
                for="name"
                :value="__('Nom')"
                class="text-gray-700"
            />
            <x-text-input
                id="name"
                name="name"
                type="text"
                :value="old('name')"
                required
                autofocus
                autocomplete="name"
                class="w-full px-4 py-2 border rounded-md mt-1 focus:outline-none focus:ring-2 focus:ring-green-400"
            />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Adresse Email -->
        <div>
            <x-input-label
                for="email"
                :value="__('Email')"
                class="text-gray-700"
            />
            <x-text-input
                id="email"
                name="email"
                type="email"
                :value="old('email')"
                required
                autocomplete="email"
                class="w-full px-4 py-2 border rounded-md mt-1 focus:outline-none focus:ring-2 focus:ring-green-400"
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Mot de passe -->
        <div>
            <x-input-label
                for="password"
                :value="__('Mot de passe')"
                class="text-gray-700"
            />
            <x-text-input
                id="password"
                name="password"
                type="password"
                required
                autocomplete="new-password"
                class="w-full px-4 py-2 border rounded-md mt-1 focus:outline-none focus:ring-2 focus:ring-green-400"
            />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirmation mot de passe -->
        <div>
            <x-input-label
                for="password_confirmation"
                :value="__('Confirmer le mot de passe')"
                class="text-gray-700"
            />
            <x-text-input
                id="password_confirmation"
                name="password_confirmation"
                type="password"
                required
                autocomplete="new-password"
                class="w-full px-4 py-2 border rounded-md mt-1 focus:outline-none focus:ring-2 focus:ring-green-400"
            />
            <x-input-error
                :messages="$errors->get('password_confirmation')"
                class="mt-2"
            />
        </div>

        <!-- Bouton -->
        <div>
            <x-primary-button class="w-full bg-green-500 hover:bg-green-600">
                {{ __('S’inscrire') }}
            </x-primary-button>
        </div>

        <!-- Lien vers la connexion -->
        <div class="text-center text-sm mt-4">
            <a
                href="{{ route('login') }}"
                class="text-green-600 hover:underline"
            >
                {{ __('Déjà inscrit ? Se connecter') }}
            </a>
        </div>
    </form>
</x-guest-layout>
