<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="../css/client.css" rel="stylesheet">

</head>

<body class="font-[Poppins]">
    <header class="bg-white">
        <header class="bg-white">
                <nav class="flex justify-between items-center w-[92%]  mx-auto p-4">
                    <div>
                        <img class="w-16 cursor-pointer" src="../source/logomarva.png" alt="...">
                    </div>
                    <div
                        class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
                        <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                            <li>
                                <a class="relative text-xl w-fit block after:block after:content-[''] after:absolute after:h-[3px] after:bg-black after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center" href="<?php echo e(route('welcome')); ?>">Home</a>
                            </li>
                            <li>
                                <a class="relative text-xl w-fit block after:block after:content-[''] after:absolute after:h-[3px] after:bg-black after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center" href="<?php echo e(route('aboutus')); ?>">About</a>
                            </li>
                            <li>
                                <a class="relative text-xl w-fit block after:block after:content-[''] after:absolute after:h-[3px] after:bg-black after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center" href="<?php echo e(route('product')); ?>">Product</a>
                            </li>
                            <li>
                                <a class="relative text-xl w-fit block after:block after:content-[''] after:absolute after:h-[3px] after:bg-black after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center" href="<?php echo e(route('client')); ?>">Client</a>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="flex items-center gap-6"> -->
                        <!-- <button class="bg-black text-white px-5 py-2 rounded-full">Sign in</button> -->
                        <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
                    <!-- </div> -->
                    </nav>
            </header>

    <div class="grid sm:grid-cols-1 m-20 mt-8">
        <div class="min-h-[120px] sm:min-h-[200px] sm:rounded-lg sm:shadow">
            <img class="min-h-[120px] sm:min-h-[200px] sm:rounded-lg" src="../source/image.png" alt="">
        </div>
    </div>

    <div class="w-50 bg-[#D9D9D9] rounded-tl-2xl rounded-br-2xl m-2 sm:p-[5px] sm:w-[99%] sm:rounded-tl-[40px] sm:rounded-br-[40px]">
        <h1 align="center" class="font-bold text-red-600 text-[20px] sm:text-[40px]">CLIENT KAMI</h1>
    </div>

    <div class="w-5 h-[5px] sm:h-[10px]">.</div>

<div class="logo-container">
    <div class="logo" id="logo">
        <img src="../source/logos/0064.-PT-Perfetti-Van-Melle-Indonesia.png" alt="">
        <img src="../source/logos/akhasa.jpeg" alt="">
        <img src="../source/logos/brin.png" alt="">
        <img src="../source/logos/chemindo.jpeg" alt="">
        <img src="../source/logos/garudafood.png" alt="">
        <img src="../source/logos/ikp.png" alt="">
        <img src="../source/logos/irc.jpg" alt="">
        <img src="../source/logos/lasale.jpeg" alt="">
        <img src="../source/logos/lipi.png" alt="">
        <img src="../source/logos/nittoh.png" alt="">
        <img src="../source/logos/sanso.png" alt="">
        <img src="../source/logos/tjokro.jpg" alt="">
    </div>
</div><br>

<div class="w-5 h-[160px] sm:h-[20px]">.</div>

<footer class="bg-[#D9D9D9]">
    <img src="../source/cipta 3.png" alt="" class="w-32 sm:w-80">
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
                    <h2>Telepon : 0877-7182-0303 / 0813-2456-6066</h2>
                </td>
            </tr>
            <tr>
                <td><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#000000" class="h-9 w-9 m-3">
                        <path
                            d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z" />
                    </svg></td>
                <td>
                    <h2>Email : marvacipta@yahoo.co.id</h2>
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
    <p align="center" class="text-[8px] pb-5 sm:text-sm">Copyright2024 Marva Cipta Indonesia.All right reserved</p>
</footer>
</body>
<script>
    const navLinks = document.querySelector('.nav-links')
            function onToggleMenu(e){
                e.name = e.name === 'menu' ? 'close' : 'menu'
                navLinks.classList.toggle('top-[9%]')
            }

    const logo = document.querySelector(".logo").cloneNode(true);
    document.querySelector('.logo-container').appendChild(logo);
</script>

</html>
<?php /**PATH C:\xamppa\htdocs\profile-company\resources\views\client.blade.php ENDPATH**/ ?>