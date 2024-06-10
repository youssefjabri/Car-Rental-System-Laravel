<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="https://seeklogo.com/images/L/laravel-logo-9B01588B1F-seeklogo.com.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300..700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Signika Negative", sans-serif;
        }
    </style>
</head>

<body id="page-top">
    <div class="bg-[#eee] h-screen">
        @include('layouts.sidebar')
        <div class="p-4 sm:ml-64">
            <div class="p-4 rounded shadow bg-[#fff] mt-14  ">
                <div class="py-4">
                    <div class="mx-auto text-center my-8">
                        <h1 class="text-4xl font-bold text-gray-800">Bienvenue à la Gestion de Location de Voitures</h1>
                        <p class="text-lg text-gray-600 mt-4">Une solution complète pour gérer les utilisateurs, les
                            voitures en location, et les nouvelles inscriptions</p>
                    </div>
                    <hr>
                </div>
                @yield('contents')
            </div>
        </div>
    </div>
</body>

</html>
