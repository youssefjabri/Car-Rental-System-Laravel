<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Register</title>
</head>

<body class="bg-[#eee]">
    <section>
        <div class="flex items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded shadow-md border md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                        Créer un compte
                    </h1>
                    <form action="{{ route('register.save') }}" method="POST" class="space-y-4 md:space-y-6">
                        @csrf
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">
                                Votre nom d'utilisateur:<span class="text-red-400">*</span>
                            </label>
                            <input name="name" type="text"
                                class="bg-gray-100 border border-gray-300 text-gray-900 sm:text-sm rounded focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 @error('name') is-invalid @enderror"
                                id="name">
                            @error('name')
                                <span class="text-red-600 font-medium text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">
                                Votre email:<span class="text-red-400">*</span>
                            </label>
                            <input name="email" type="email"
                                class="bg-gray-100 border border-gray-300 text-gray-900 sm:text-sm rounded focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 @error('email') is-invalid @enderror"
                                id="email">
                            @error('email')
                                <span class="text-red-600 font-medium text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">
                                Mot de passe:<span class="text-red-400">*</span>
                            </label>
                            <input name="password" type="password"
                                class="bg-gray-100 border border-gray-300 text-gray-900 sm:text-sm rounded focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 @error('password') is-invalid @enderror"
                                id="password">
                            @error('password')
                                <span class="text-red-600 font-medium text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900">
                                Confirmez le mot de passe:<span class="text-red-400">*</span>
                            </label>
                            <input name="password_confirmation" type="password"
                                class="bg-gray-100 border border-gray-300 text-gray-900 sm:text-sm rounded focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 @error('password_confirmation') is-invalid @enderror"
                                id="password_confirmation">
                            @error('password_confirmation')
                                <span class="text-red-600 font-medium text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm px-5 py-2.5 text-center text-white">
                            Créer un compte
                        </button>
                    </form>
                    <p class="text-sm font-light text-gray-500">
                        Vous avez déjà un compte? <a href="{{ route('login') }}"
                            class="font-medium text-blue-600 hover:underline">Connectez-vous ici</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
