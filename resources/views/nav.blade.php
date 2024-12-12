<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <style>
        @tailwind base;
        @tailwind components;
        @tailwind utilities;
    </style>
</head>

<body class="font-[Poppins]">
    <nav class="flex justify-between items-center w-[92%]  mx-auto">
        <div>
            <img class="w-16 cursor-pointer" src="../source/logo.png" alt="...">
        </div>
        <div
            class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
            <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                <li>
                    <a class="relative text-xl w-fit block after:block after:content-[''] after:absolute after:h-[3px] after:bg-black after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center"
                        href="{{ route('welcome') }}">Home</a>
                </li>
                <li>
                    <a class="relative text-xl w-fit block after:block after:content-[''] after:absolute after:h-[3px] after:bg-black after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center"
                        href="{{ route('aboutus') }}">About</a>
                </li>
                <li>
                    <a class="relative text-xl w-fit block after:block after:content-[''] after:absolute after:h-[3px] after:bg-black after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center"
                        href="{{ route('product') }}">Product</a>
                </li>
                <li>
                    <a class="relative text-xl w-fit block after:block after:content-[''] after:absolute after:h-[3px] after:bg-black after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center"
                        href="{{ route('client') }}">Client</a>
                </li>
            </ul>
        </div>
        <!-- <div class="flex items-center gap-6"> -->
        <!-- <button class="bg-black text-white px-5 py-2 rounded-full">Sign in</button> -->
        <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
        <!-- </div> -->
    </nav>
    <!-- Mobile Menu -->
    <div id="mobile-menu"
        class="md:hidden static flex flex-col absolute w-full space-y-4 px-4 py-2 bg-[#EDEFFF] hidden">
        <br><br><br>
        <a href="#">home</a>
        <a href="#">about us</a>
        <a href="#">product</a>
        <a href="#">client</a>
    </div>


    <br><br><br><br>
    <div class="grid sm:grid-cols-1">
        <div class="rounded-lg shadow">
            <img class="rounded-lg w-full h-full sm:h-screen sm:w-screen object-cover"
                src="https://s3-alpha-sig.figma.com/img/c196/ee2a/4a4e6d0f04d9a959791fa0e40e218f9a?Expires=1724025600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=iF-jaZoOI924ZwSckupyIyEczru1-l6wcrPZhwBEC7-Mu7a6O2niwR6B4kDbcB-MBsZzd-Px3pn5lDu6W2FmJi0bPHYzApF6pLPqygiK3g9kXmDLKXEsYxqBFVFJC0uOSKaB35jje1wFJdcR4t9AOvUNghuH5Uuof-3HM3rkH5jWhlkHMSQKijIyOPmWvAG1OOC2M7ajHeHnX72b8VyjdWm~pqk0ffxj-9YACBXWApUP5-JHmY5Tk0JAJCEgiHyReivnvwhzKNAnauAZJckrE~Ro2VT16Z~fBKcRnZ2-0jRwH-wJKWKPc1uzbWuhWdzY-PP10uArkJC99~5qxKb7GQ__"
                alt="">
        </div>
    </div>


    <div class="flex flex-col m-22 mt-[170px] h-[500px] min-h-[200px] bg-[#EDEFFF] hidden sm:block">
        <div class="min-h-[200px] bg-[#EDEFFF] flex flex-col items-center">
            <h2 class="text-2xl font-bold mt-4">Our Product</h2>
            <button type="button"
                class="text-white bg-black border border-gray-300 focus:outline-none focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 mt-3">
                View All Product
            </button>

            <!-- Flex container for horizontal scrolling -->
            <div class="mt-6 flex gap-[90px]">
                <div class="flex-shrink-0 group">
                    <img class="rounded-md transform transition-transform duration-300 ease-in-out group-hover:scale-105"
                        src="https://s3-alpha-sig.figma.com/img/27dc/b271/cda2abe265faf22ad12f0b6e1714975e?Expires=1724025600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=X5t~JrdYQZVY1hQp~jqZSS5JRdIgW9Gt9FtpQOazSmHXJtzrqRNn-YoHncRPh9AoYpX~3D02eYZV5n~alkvSvVti7ixR-oYQpVY6OW4sNjkR-IArnT1HsXs1cMseVKTDs9DQ941S8MEPwMPz0cihZs1W04by9H-~I88egS3KWWrh~AwgxjO1pSAbeKZBPj76fN8KgUrIoCNLfhWXmS79JXQQygx2Apr737yD6SNWF5XZCA-A2tLnpf2-SLM67nfn0SLN-xJMGw5knUDhUSbZPsd4n8Y1Ewp0kmoN8qCTo6E1yttiZGAJxEx~1C4~i551I9Uh9tz6sh6G1Sqdk-8PRg__"
                        alt="">
                    <h2>Handwash Station</h2>
                </div>
                <div class="flex-shrink-0 group">
                    <img class="rounded-md transform transition-transform duration-300 ease-in-out group-hover:scale-105"
                        src="https://s3-alpha-sig.figma.com/img/27dc/b271/cda2abe265faf22ad12f0b6e1714975e?Expires=1724025600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=X5t~JrdYQZVY1hQp~jqZSS5JRdIgW9Gt9FtpQOazSmHXJtzrqRNn-YoHncRPh9AoYpX~3D02eYZV5n~alkvSvVti7ixR-oYQpVY6OW4sNjkR-IArnT1HsXs1cMseVKTDs9DQ941S8MEPwMPz0cihZs1W04by9H-~I88egS3KWWrh~AwgxjO1pSAbeKZBPj76fN8KgUrIoCNLfhWXmS79JXQQygx2Apr737yD6SNWF5XZCA-A2tLnpf2-SLM67nfn0SLN-xJMGw5knUDhUSbZPsd4n8Y1Ewp0kmoN8qCTo6E1yttiZGAJxEx~1C4~i551I9Uh9tz6sh6G1Sqdk-8PRg__"
                        alt="">
                    <h2>Handwash Station</h2>
                </div>
                <div class="flex-shrink-0 group">
                    <img class="rounded-md transform transition-transform duration-300 ease-in-out group-hover:scale-105"
                        src="https://s3-alpha-sig.figma.com/img/27dc/b271/cda2abe265faf22ad12f0b6e1714975e?Expires=1724025600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=X5t~JrdYQZVY1hQp~jqZSS5JRdIgW9Gt9FtpQOazSmHXJtzrqRNn-YoHncRPh9AoYpX~3D02eYZV5n~alkvSvVti7ixR-oYQpVY6OW4sNjkR-IArnT1HsXs1cMseVKTDs9DQ941S8MEPwMPz0cihZs1W04by9H-~I88egS3KWWrh~AwgxjO1pSAbeKZBPj76fN8KgUrIoCNLfhWXmS79JXQQygx2Apr737yD6SNWF5XZCA-A2tLnpf2-SLM67nfn0SLN-xJMGw5knUDhUSbZPsd4n8Y1Ewp0kmoN8qCTo6E1yttiZGAJxEx~1C4~i551I9Uh9tz6sh6G1Sqdk-8PRg__"
                        alt="">
                    <h2>Handwash Station</h2>
                </div>
                <div class="flex-shrink-0 group">
                    <img class="rounded-md transform transition-transform duration-300 ease-in-out group-hover:scale-105"
                        src="https://s3-alpha-sig.figma.com/img/27dc/b271/cda2abe265faf22ad12f0b6e1714975e?Expires=1724025600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=X5t~JrdYQZVY1hQp~jqZSS5JRdIgW9Gt9FtpQOazSmHXJtzrqRNn-YoHncRPh9AoYpX~3D02eYZV5n~alkvSvVti7ixR-oYQpVY6OW4sNjkR-IArnT1HsXs1cMseVKTDs9DQ941S8MEPwMPz0cihZs1W04by9H-~I88egS3KWWrh~AwgxjO1pSAbeKZBPj76fN8KgUrIoCNLfhWXmS79JXQQygx2Apr737yD6SNWF5XZCA-A2tLnpf2-SLM67nfn0SLN-xJMGw5knUDhUSbZPsd4n8Y1Ewp0kmoN8qCTo6E1yttiZGAJxEx~1C4~i551I9Uh9tz6sh6G1Sqdk-8PRg__"
                        alt="">
                    <h2>Handwash Station</h2>
                </div>
                <div class="flex-shrink-0 group">
                    <img class="rounded-md transform transition-transform duration-300 ease-in-out group-hover:scale-105"
                        src="https://s3-alpha-sig.figma.com/img/27dc/b271/cda2abe265faf22ad12f0b6e1714975e?Expires=1724025600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=X5t~JrdYQZVY1hQp~jqZSS5JRdIgW9Gt9FtpQOazSmHXJtzrqRNn-YoHncRPh9AoYpX~3D02eYZV5n~alkvSvVti7ixR-oYQpVY6OW4sNjkR-IArnT1HsXs1cMseVKTDs9DQ941S8MEPwMPz0cihZs1W04by9H-~I88egS3KWWrh~AwgxjO1pSAbeKZBPj76fN8KgUrIoCNLfhWXmS79JXQQygx2Apr737yD6SNWF5XZCA-A2tLnpf2-SLM67nfn0SLN-xJMGw5knUDhUSbZPsd4n8Y1Ewp0kmoN8qCTo6E1yttiZGAJxEx~1C4~i551I9Uh9tz6sh6G1Sqdk-8PRg__"
                        alt="">
                    <h2>Handwash Station</h2>
                </div>
            </div>

        </div>
    </div>

    <div class="flex flex-col m-22 mt-8 h-[500px] min-h-[200px] bg-[#EDEFFF] lg:hidden">
        <div class="min-h-[200px] bg-[#EDEFFF] flex flex-col items-center">
            <h2 class="text-2xl font-bold mt-4">Our Product</h2>
            <button type="button"
                class="text-white bg-black border border-gray-300 focus:outline-none focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 mt-3">
                View All Product
            </button>

            <!-- Flex container for horizontal scrolling -->
            <div class="flex gap-[90px] overflow-x-auto">
                <div class="mt-6">
                    <div class="flex-shrink-0">
                        <img class="rounded-md"
                            src="https://s3-alpha-sig.figma.com/img/27dc/b271/cda2abe265faf22ad12f0b6e1714975e?Expires=1724025600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=X5t~JrdYQZVY1hQp~jqZSS5JRdIgW9Gt9FtpQOazSmHXJtzrqRNn-YoHncRPh9AoYpX~3D02eYZV5n~alkvSvVti7ixR-oYQpVY6OW4sNjkR-IArnT1HsXs1cMseVKTDs9DQ941S8MEPwMPz0cihZs1W04by9H-~I88egS3KWWrh~AwgxjO1pSAbeKZBPj76fN8KgUrIoCNLfhWXmS79JXQQygx2Apr737yD6SNWF5XZCA-A2tLnpf2-SLM67nfn0SLN-xJMGw5knUDhUSbZPsd4n8Y1Ewp0kmoN8qCTo6E1yttiZGAJxEx~1C4~i551I9Uh9tz6sh6G1Sqdk-8PRg__"
                            alt="">
                        <h2>Handwash Station</h2>
                    </div>
                    <div class="flex-shrink-0">
                        <img class="rounded-md"
                            src="https://s3-alpha-sig.figma.com/img/27dc/b271/cda2abe265faf22ad12f0b6e1714975e?Expires=1724025600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=X5t~JrdYQZVY1hQp~jqZSS5JRdIgW9Gt9FtpQOazSmHXJtzrqRNn-YoHncRPh9AoYpX~3D02eYZV5n~alkvSvVti7ixR-oYQpVY6OW4sNjkR-IArnT1HsXs1cMseVKTDs9DQ941S8MEPwMPz0cihZs1W04by9H-~I88egS3KWWrh~AwgxjO1pSAbeKZBPj76fN8KgUrIoCNLfhWXmS79JXQQygx2Apr737yD6SNWF5XZCA-A2tLnpf2-SLM67nfn0SLN-xJMGw5knUDhUSbZPsd4n8Y1Ewp0kmoN8qCTo6E1yttiZGAJxEx~1C4~i551I9Uh9tz6sh6G1Sqdk-8PRg__"
                            alt="">
                        <h2>Handwash Station</h2>
                    </div>
                    <div class="flex-shrink-0">
                        <img class="rounded-md"
                            src="https://s3-alpha-sig.figma.com/img/27dc/b271/cda2abe265faf22ad12f0b6e1714975e?Expires=1724025600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=X5t~JrdYQZVY1hQp~jqZSS5JRdIgW9Gt9FtpQOazSmHXJtzrqRNn-YoHncRPh9AoYpX~3D02eYZV5n~alkvSvVti7ixR-oYQpVY6OW4sNjkR-IArnT1HsXs1cMseVKTDs9DQ941S8MEPwMPz0cihZs1W04by9H-~I88egS3KWWrh~AwgxjO1pSAbeKZBPj76fN8KgUrIoCNLfhWXmS79JXQQygx2Apr737yD6SNWF5XZCA-A2tLnpf2-SLM67nfn0SLN-xJMGw5knUDhUSbZPsd4n8Y1Ewp0kmoN8qCTo6E1yttiZGAJxEx~1C4~i551I9Uh9tz6sh6G1Sqdk-8PRg__"
                            alt="">
                        <h2>Handwash Station</h2>
                    </div>
                    <div class="flex-shrink-0">
                        <img class="rounded-md"
                            src="https://s3-alpha-sig.figma.com/img/27dc/b271/cda2abe265faf22ad12f0b6e1714975e?Expires=1724025600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=X5t~JrdYQZVY1hQp~jqZSS5JRdIgW9Gt9FtpQOazSmHXJtzrqRNn-YoHncRPh9AoYpX~3D02eYZV5n~alkvSvVti7ixR-oYQpVY6OW4sNjkR-IArnT1HsXs1cMseVKTDs9DQ941S8MEPwMPz0cihZs1W04by9H-~I88egS3KWWrh~AwgxjO1pSAbeKZBPj76fN8KgUrIoCNLfhWXmS79JXQQygx2Apr737yD6SNWF5XZCA-A2tLnpf2-SLM67nfn0SLN-xJMGw5knUDhUSbZPsd4n8Y1Ewp0kmoN8qCTo6E1yttiZGAJxEx~1C4~i551I9Uh9tz6sh6G1Sqdk-8PRg__"
                            alt="">
                        <h2>Handwash Station</h2>
                    </div>
                    <div class="flex-shrink-0">
                        <img class="rounded-md"
                            src="https://s3-alpha-sig.figma.com/img/27dc/b271/cda2abe265faf22ad12f0b6e1714975e?Expires=1724025600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=X5t~JrdYQZVY1hQp~jqZSS5JRdIgW9Gt9FtpQOazSmHXJtzrqRNn-YoHncRPh9AoYpX~3D02eYZV5n~alkvSvVti7ixR-oYQpVY6OW4sNjkR-IArnT1HsXs1cMseVKTDs9DQ941S8MEPwMPz0cihZs1W04by9H-~I88egS3KWWrh~AwgxjO1pSAbeKZBPj76fN8KgUrIoCNLfhWXmS79JXQQygx2Apr737yD6SNWF5XZCA-A2tLnpf2-SLM67nfn0SLN-xJMGw5knUDhUSbZPsd4n8Y1Ewp0kmoN8qCTo6E1yttiZGAJxEx~1C4~i551I9Uh9tz6sh6G1Sqdk-8PRg__"
                            alt="">
                        <h2>Handwash Station</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="flex flex-col items-center justify-center min-h-screen bg-white">
        <div class="flex items-center justify-between w-full max-w-5xl p-8">
            <div class="max-w-lg">
                <h1 class="text-4xl font-bold mb-4 text-center md:text-left">About Us</h1>
                <p class="text-lg">
                    Marva Cipta Indonesia (MCI) adalah perusahaan yang berdiri sejak tahun 2014 dimana sebelumnya
                    bernama Marva Engineering yang sampai sekarang masih tetap eksis dalam bidang otomasi yang didukung
                    dengan sistem informasi sehingga bisa diintegrasikan dengan sistem produksi di lapangan. Dalam
                    perkembangannya kami memberikan solusi sistem Informasi secara menyeluruh khususnya pada industri
                    manufaktur di Indonesia.
                </p>
            </div>
            <div>
                <img src="https://s3-alpha-sig.figma.com/img/5e54/d588/ef1d4da04f9905d7733ae5c0b26faf3d?Expires=1724025600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=LZikeZPwSnVf2L8pxcjqLfStQ4hLpq~lMpXAIJGyXIJr5jWGJpYbw0MMlS00r8-zcIPvgNu772q7ZjIEJr0VxVST4ES9WugMxFnewIobLk21fbYq401NhwiyT5fa8ONGW92kXQ4LTQPQTKXFYtYoYCmKq1SeM79hntmOa1xxMZB9RHJG3fMqs6hNSSMcRLwe9u1LjhKAkg9kAPuVY0kbs-wqwCll8g3TF7y8h~1R9nNs5YUvKUQXj-KL4mfgCR-5-qrMBd9DK-Q2ID6FtTpg-tIh8PPRI2Zmkb65EkItQ58PrpSKErT54YkQ0bAL4w01u4TYutX226jMbjkfISQklA__"
                    alt="Company Image" class="w-96 h-auto hidden sm:block">
            </div>
        </div>
    </div>
    <footer class="bg-[#D9D9D9]">
        <img src="../source/cipta 3.png" alt="" class="w-80">
        <div class="flex justify-between">
            <table class="h-6 m-5">
                <tr>
                    <td colspan="2">
                        <h2 class="font-bold m-3 text-xl">Kontak Kami</h2>
                    </td>
                </tr>
                <tr>
                    <td><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            fill="#000000" version="1.1" id="Layer_1" viewBox="0 0 308 308" xml:space="preserve"
                            class="h-9 w-9 m-3">
                            <g id="XMLID_468_">
                                <path id="XMLID_469_"
                                    d="M227.904,176.981c-0.6-0.288-23.054-11.345-27.044-12.781c-1.629-0.585-3.374-1.156-5.23-1.156   c-3.032,0-5.579,1.511-7.563,4.479c-2.243,3.334-9.033,11.271-11.131,13.642c-0.274,0.313-0.648,0.687-0.872,0.687   c-0.201,0-3.676-1.431-4.728-1.888c-24.087-10.463-42.37-35.624-44.877-39.867c-0.358-0.61-0.373-0.887-0.376-0.887   c0.088-0.323,0.898-1.135,1.316-1.554c1.223-1.21,2.548-2.805,3.83-4.348c0.607-0.731,1.215-1.463,1.812-2.153   c1.86-2.164,2.688-3.844,3.648-5.79l0.503-1.011c2.344-4.657,0.342-8.587-0.305-9.856c-0.531-1.062-10.012-23.944-11.02-26.348   c-2.424-5.801-5.627-8.502-10.078-8.502c-0.413,0,0,0-1.732,0.073c-2.109,0.089-13.594,1.601-18.672,4.802   c-5.385,3.395-14.495,14.217-14.495,33.249c0,17.129,10.87,33.302,15.537,39.453c0.116,0.155,0.329,0.47,0.638,0.922   c17.873,26.102,40.154,45.446,62.741,54.469c21.745,8.686,32.042,9.69,37.896,9.69c0.001,0,0.001,0,0.001,0   c2.46,0,4.429-0.193,6.166-0.364l1.102-0.105c7.512-0.666,24.02-9.22,27.775-19.655c2.958-8.219,3.738-17.199,1.77-20.458   C233.168,179.508,230.845,178.393,227.904,176.981z" />
                                <path id="XMLID_470_"
                                    d="M156.734,0C73.318,0,5.454,67.354,5.454,150.143c0,26.777,7.166,52.988,20.741,75.928L0.212,302.716   c-0.484,1.429-0.124,3.009,0.933,4.085C1.908,307.58,2.943,308,4,308c0.405,0,0.813-0.061,1.211-0.188l79.92-25.396   c21.87,11.685,46.588,17.853,71.604,17.853C240.143,300.27,308,232.923,308,150.143C308,67.354,240.143,0,156.734,0z    M156.734,268.994c-23.539,0-46.338-6.797-65.936-19.657c-0.659-0.433-1.424-0.655-2.194-0.655c-0.407,0-0.815,0.062-1.212,0.188   l-40.035,12.726l12.924-38.129c0.418-1.234,0.209-2.595-0.561-3.647c-14.924-20.392-22.813-44.485-22.813-69.677   c0-65.543,53.754-118.867,119.826-118.867c66.064,0,119.812,53.324,119.812,118.867   C276.546,215.678,222.799,268.994,156.734,268.994z" />
                            </g>
                        </svg></td>
                    <td>
                        <h2>Telepon : </h2>
                    </td>
                </tr>
                <tr>
                    <td><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                            width="24px" fill="#000000" class="h-9 w-9 m-3">
                            <path
                                d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z" />
                        </svg></td>
                    <td>
                        <h2>Email :</h2>
                    </td>
                </tr>
            </table>
            <table class="h-6 m-5">
                <tr>
                    <td colspan="3">
                        <h2 class="font-bold m-3 text-xl">Address</h2>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2">
                        Komplek Perumahan Puri Alam Kencana 2 <br>BLOK R 2 NO. 13, Bogor 16810, Indonesia
                    </td>
                </tr>
            </table>
        </div>
        <p align="center" class="text-xs pb-5">Copyright2024 Marva Cipta Indonesia.All right reserved</p>
    </footer>
    <script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("contactForm");
            const submitBtn = document.getElementById("submitBtn");

            form.addEventListener("input", function() {
                const allFilled = Array.from(form.elements)
                    .filter(input => input.type !== 'submit')
                    .every(input => input.value.trim() !== "");
                submitBtn.classList.toggle('hidden', !allFilled);
            });
        });
    </script>
</body>
</html>
