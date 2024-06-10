<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-[#eee]">
    <section>
        <div class="flex items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded shadow border md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                        Connectez-vous à votre compte
                    </h1>
                    <form action="{{ route('login.action') }}" method="POST" class="space-y-4 md:space-y-6">
                        @csrf
                        @if ($errors->any())
                            <div class="border font-medium text-red-600 text-center border-red-500 bg-red-300 rounded p-2.5">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">
                                Votre email
                            </label>
                            <input name="email" type="email"
                                class="bg-gray-100 border border-gray-300 text-gray-900 sm:text-sm rounded focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                                id="email" aria-describedby="emailHelp">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">
                                Mot de passe
                            </label>
                            <input name="password" type="password"
                                class="bg-gray-100 border border-gray-300 text-gray-900 sm:text-sm rounded focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                                id="password">
                        </div>
                        <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm px-5 py-2.5 text-white">
                            Se connecter
                        </button>
                    </form>
                    <div class="text-sm font-light text-gray-500">
                        <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:underline">
                            Créer un compte!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
