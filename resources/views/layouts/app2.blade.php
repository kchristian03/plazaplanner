<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth w-[100vw] h-[100vh] m-0 p-0">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="keywords" content="{key}">
    <meta name="description" content="{desc}">
    <meta name="author" content="Kevin Christian">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!--CSS-JS for UI/UX - Tailwind-->
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" src="resources/js/components-v2.js"></script>
    <link rel="stylesheet" href="resources/css/components-v2.css">
    <script type="text/javascript" src="resources/js/alpine.js"></script>

    <!--SCC-JS for WhatsApp Floating Button-->
    <link rel="stylesheet" href="/resources/css/floating-wpp.css">
    <script type="text/javascript" src="/resources/js/floating-wpp.js"></script>
    <script type="text/javascript" src="/resources/js/jquery-3.3.1.min.js"></script>
</head>
<body>

<div id="container">
    <div id="header" class="min-h-[100vh] relative">

    </div>
    <div id="main">
        <main>
            <h1>test</h1>
        </main>
    </div>
    <div id="footer">

    </div>
</div>
<div id="myButton"></div>
</body>

<script type="text/javascript">
    $(function () {
        $('#myButton').floatingWhatsApp({
            phone: '6285157227250',
            popupMessage: 'Bisa dibantu?',
            message: "Halo saya dari website anda kevinchr.com/kanjuruhan/ ingin menyampaikan sesuatu ...",
            showPopup: true,
            showOnIE: false,
            headerTitle: 'Kritik dan Saran',
            headerColor: '#128C7E',
            backgroundColor: '#128C7E',
            buttonImage: '<img src="/public/images/whatsapp.svg" />'
        });
    });
</script>

</html>

