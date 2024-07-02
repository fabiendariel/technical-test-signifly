<!DOCTYPE html>
<html>
<head>
    <title>Signifly Team Builder</title>
    @vite(['resources/js/app.js','resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>
<body>
      
{{-- Navbar --}}
<nav class="bg-white border-gray-200">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <svg width="82" height="32" viewBox="0 0 82 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="menu__logo" data-v-9014f880=""><path d="M9.92114 8.64235C10.7388 8.96902 11.4202 9.40458 11.9517 9.93542C12.4832 10.4663 12.892 11.0788 13.151 11.7457C13.4099 12.4263 13.5462 13.0932 13.5462 13.7602H10.2891C10.2891 13.0252 10.0029 12.4127 9.4169 11.9091C8.8309 11.419 8.02685 11.174 6.99113 11.174C6.56866 11.174 6.1462 11.2149 5.75099 11.2965C5.34215 11.3782 4.98782 11.5007 4.67438 11.664C4.36094 11.8274 4.11564 12.0316 3.93847 12.2766C3.76131 12.5216 3.66592 12.8074 3.66592 13.1341C3.66592 13.7193 3.96573 14.1685 4.56536 14.4544C5.16499 14.7402 6.11894 15.0124 7.44085 15.2846C8.46295 15.4888 9.37602 15.7066 10.1937 15.9652C11.0114 16.2238 11.7064 16.5505 12.2788 16.9452C12.8511 17.3399 13.3009 17.8299 13.6143 18.4288C13.9277 19.0141 14.0777 19.7491 14.0777 20.6203C14.0777 21.4369 13.9141 22.1855 13.587 22.8525C13.26 23.5195 12.783 24.0911 12.1697 24.5539C11.5565 25.0167 10.807 25.3706 9.93476 25.6292C9.06258 25.8742 8.08137 25.9967 7.00476 25.9967C6.15983 25.9967 5.32852 25.8742 4.48359 25.6292C3.63866 25.3978 2.88912 25.0167 2.22135 24.5267C1.55358 24.0367 1.02209 23.4106 0.613257 22.6619C0.204419 21.9133 0 21.015 0 19.9805H3.24345C3.24345 20.4978 3.3661 20.9333 3.58415 21.3008C3.81582 21.6683 4.11564 21.9814 4.46996 22.2264C4.82429 22.4714 5.23313 22.6619 5.68285 22.7844C6.13257 22.9069 6.56866 22.975 6.99113 22.975C7.45448 22.975 7.91783 22.9342 8.36755 22.8525C8.8309 22.7708 9.23974 22.6347 9.60769 22.4442C9.97565 22.2536 10.2618 22.0222 10.4799 21.7364C10.6979 21.4505 10.807 21.0967 10.807 20.6883C10.807 20.4297 10.7524 20.1847 10.6162 19.9533C10.4935 19.7219 10.2755 19.5177 9.96202 19.3272C9.64858 19.1366 9.22611 18.9597 8.72188 18.7963C8.20402 18.633 7.54988 18.4697 6.75946 18.3336C5.96904 18.1838 5.19224 18.0069 4.42908 17.7755C3.66591 17.5577 2.98452 17.2447 2.39852 16.8635C1.79889 16.4824 1.32191 15.9924 0.953955 15.3935C0.586001 14.7946 0.39521 14.046 0.39521 13.1205C0.39521 12.3854 0.545118 11.7049 0.85856 11.106C1.172 10.5071 1.6081 9.97625 2.1941 9.54069C2.76647 9.10513 3.4615 8.76485 4.26554 8.51985C5.06959 8.27484 5.98266 8.15234 6.9775 8.15234C8.12225 8.15234 9.10346 8.32929 9.92114 8.64235Z" fill="currentColor" data-v-9014f880=""></path><path d="M19.3791 13.1074H16.1221V25.7931H19.3791V13.1074Z" fill="currentColor" data-v-9014f880=""></path><path d="M34.1923 25.1406C34.1923 26.1886 34.0424 27.1414 33.7426 27.9853C33.4427 28.8292 33.0066 29.5506 32.4343 30.1495C31.8619 30.7348 31.1805 31.1976 30.3628 31.5242C29.5452 31.8373 28.6321 32.0006 27.61 32.0006C26.8604 32.0006 26.1382 31.8917 25.4431 31.6876C24.7481 31.4698 24.1349 31.1703 23.5761 30.7892C23.031 30.4081 22.554 29.9317 22.1861 29.4009C21.8045 28.87 21.5592 28.2575 21.4502 27.577H25.0207C25.1161 27.822 25.2796 28.0398 25.4704 28.2167C25.6748 28.3937 25.9065 28.5434 26.1382 28.6659C26.3835 28.7748 26.6288 28.87 26.8741 28.9109C27.133 28.9653 27.3647 28.9789 27.5964 28.9789C28.7547 28.9789 29.586 28.6387 30.1175 27.9445C30.6626 27.2503 30.9216 26.3384 30.9216 25.2086V24.5961C30.431 25.0725 29.8586 25.44 29.2317 25.6986C28.6048 25.9572 27.9098 26.0797 27.1739 26.0797C26.3562 26.0797 25.5658 25.9164 24.8435 25.5761C24.1076 25.2358 23.4671 24.7731 22.922 24.1878C22.3769 23.5889 21.9408 22.8947 21.6137 22.0916C21.3003 21.2886 21.1367 20.4175 21.1367 19.4783C21.1367 18.5391 21.3003 17.668 21.6137 16.8513C21.9408 16.0346 22.3769 15.3269 22.922 14.7416C23.4807 14.1563 24.1212 13.6935 24.8435 13.3532C25.5794 13.0129 26.3562 12.8496 27.1739 12.8496C27.9643 12.8496 28.673 12.9857 29.3271 13.2716C29.9812 13.5574 30.5536 13.9521 31.0715 14.483V13.1218H34.1786V25.1406H34.1923ZM30.6899 18.0491C30.5127 17.6135 30.2811 17.2188 29.9812 16.8922C29.6814 16.5655 29.3407 16.3069 28.9455 16.1163C28.5503 15.9258 28.1278 15.8305 27.6781 15.8305C27.2284 15.8305 26.8059 15.9258 26.4107 16.1163C26.0155 16.3069 25.6612 16.5519 25.375 16.8785C25.0752 17.1916 24.8435 17.5863 24.6664 18.0355C24.5028 18.4847 24.4074 18.9611 24.4074 19.4647C24.4074 19.9683 24.4892 20.4447 24.6664 20.8802C24.8435 21.3158 25.0752 21.6833 25.375 22.01C25.6748 22.3366 26.0155 22.5816 26.4107 22.7586C26.8059 22.9355 27.2284 23.0308 27.6781 23.0308C28.1278 23.0308 28.5503 22.9355 28.9455 22.745C29.3407 22.5544 29.6814 22.3094 29.9812 21.9828C30.2811 21.6697 30.5127 21.2886 30.6899 20.853C30.8671 20.4175 30.9488 19.9547 30.9488 19.4647C30.9488 18.9611 30.8534 18.4847 30.6899 18.0491Z" fill="currentColor" data-v-9014f880=""></path><path d="M48.0523 25.7938H44.7952V18.3757C44.7952 18.1987 44.768 17.9537 44.7135 17.6679C44.6589 17.382 44.5636 17.0962 44.4136 16.8376C44.2637 16.5654 44.0184 16.334 43.7186 16.1434C43.4052 15.9529 42.9691 15.8576 42.4376 15.8576C41.7017 15.8576 41.1021 16.089 40.6523 16.5654C40.2026 17.0418 39.9709 17.6407 39.9709 18.3621V25.7802H36.7139V13.1489H39.821V14.374C40.2299 13.8976 40.7068 13.5164 41.252 13.2442C41.7971 12.972 42.4103 12.8223 43.1054 12.8223C43.8413 12.8223 44.5227 12.9584 45.1359 13.2306C45.7492 13.5028 46.267 13.8703 46.7031 14.3603C47.1256 14.8367 47.4663 15.422 47.698 16.1162C47.9433 16.8104 48.0523 17.559 48.0523 18.4029V25.7938Z" fill="currentColor" data-v-9014f880=""></path><path d="M53.5989 13.1074H50.3418V25.7931H53.5989V13.1074Z" fill="currentColor" data-v-9014f880=""></path><path d="M62.1842 13.1481V16.0337H59.8947V25.793H56.6377V16.0337H55.1113V13.1481H56.6377C56.6513 12.3314 56.7876 11.5692 57.0329 10.875C57.2782 10.1809 57.6461 9.58196 58.1367 9.10557C58.6137 8.61556 59.2133 8.26167 59.9084 8.03028C60.6034 7.79889 61.4074 7.73083 62.3205 7.83972V10.8886C61.5301 10.8206 60.9305 10.9567 60.5216 11.3106C60.1128 11.6509 59.9084 12.277 59.9084 13.1617H62.1842V13.1481Z" fill="currentColor" data-v-9014f880=""></path><path d="M67.3352 25.7943H64.0781V7.67773H67.3352V25.7943Z" fill="currentColor" data-v-9014f880=""></path><path d="M76.0844 28.107C75.7709 28.9237 75.4166 29.577 75.0214 30.0807C74.6262 30.5707 74.1901 30.9518 73.6995 31.2104C73.2089 31.4554 72.6774 31.6187 72.0914 31.6732C71.5054 31.7276 70.8921 31.7276 70.2244 31.6868V28.7331C70.6332 28.7604 70.9875 28.7604 71.301 28.7059C71.6008 28.6651 71.8733 28.5698 72.105 28.4337C72.3367 28.2976 72.5411 28.1206 72.7046 27.8756C72.8818 27.6442 73.0317 27.3448 73.168 26.9773L73.5359 26.0109L68.6299 13.1074H72.0777L75.1849 22.2678L78.2239 13.1074H81.6991L76.0844 28.107Z" fill="currentColor" data-v-9014f880=""></path><path d="M53.844 1.91918C53.844 2.98086 52.9855 3.83837 51.9225 3.83837C50.8595 3.83837 50.001 2.98086 50.001 1.91918C50.001 0.857507 50.8595 0 51.9225 0C52.9855 0 53.844 0.857507 53.844 1.91918Z" fill="currentColor" data-v-9014f880=""></path></svg>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">
        <li>
          <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0">Work</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Services</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Team</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Insights</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Careers</a>
        </li>        
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Français</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Contact</a>
        </li>       

      </ul>
    </div>
  </div>
</nav>
{{-- Header --}}
<div
    class="bg-gradient-to-r from-gray-100 via-gray-200 to-gray-100 py-8 md:py-16">
    <div class="flex flex-col gap-3">

        <h1 class="text-3xl font-bold text-center text-black-900">
            Team Builder
        </h1>

        <p class="text-center text-gray-900">
            Build your perfect team for your project based on your need
        </p>

        <div class="flex justify-center max-w-sm gap-2 mx-auto">

            <a href="https://github.com/fabiendariel">
                <img src="https://tailwindflex.com/public/images/icons/github.svg" class="object-cover w-6 h-6  m-auto" title="github">
            </a>

            <a href="https://www.linkedin.com/in/fabien-dariel-5915903b/">
                <img src="https://tailwindflex.com/public/images/icons/linkedin.png" class="object-cover w-6 h-6  m-auto" title="linkedin">
            </a>


        </div>
    </div>
</div>

<div class="bg-white border-gray-200 w-full">
    @yield('content')
</div>
      
</body>
</html>