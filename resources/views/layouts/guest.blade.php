<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') ?? "Project Pemrograman Web" }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-gray-800 font-sans mx-auto">
  <header class="sticky top-0 left-0 w-full z-100 shadow-md transition-all duration-300">
    <x-header />
    <x-navbar />
  </header>
  
  <!-- components/navigation -->
  <main>
      @yield('content')
  </main>
  <!-- components/footer -->
  <x-footer title="My Products Custom"/>
</body>
</html>