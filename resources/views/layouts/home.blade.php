<!DOCTYPE html>
<html lang="fr">

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />  
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>


<body>
<main role="main">
        @yield('content')
</main>
</body>

</html>
