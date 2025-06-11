<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>As'adiyah Belawa Baru</title>
      @vite(['resources/css/app.css','resources/js/app.js'])
      <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
      <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
      <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
      <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>  


</head>
<body class="bg-gray-50">

     @include('partials.navbar')

<!-- Konten utama -->
<div>
    @yield('content')
</div>
@include('partials.footer')

<!-- Navbar Scroll Effect -->
<script>
    window.addEventListener('scroll', () => {
        const nav = document.querySelector('nav');
        if(window.scrollY > 50){
            nav.classList.add('bg-green-700','shadow-lg');
            nav.classList.remove('bg-transparent');
        } else {
            nav.classList.remove('bg-green-700','shadow-lg');
            nav.classList.add('bg-transparent');
        }
    });
</script>


</body>
</html>
