<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') ?? "Project Pemrograman Web" }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-gray-800 font-sans">
  <!-- components/navigation -->
  <x-navigation 
    :title="'My Product'" 
    :description="'It is never too late to be what you might have been. - George Eliot'" 
    :nav-items="[
      ['label' => 'Features', 'href' => '#features'],
      ['label' => 'Pricing', 'href' => '#pricing'],
      ['label' => 'Contact', 'href' => '#contact']
    ]"
  />
  <main>
      @yield('content')
  </main>
  <!-- components/footer -->
  <x-footer title="My Products Custom"/>
</body>
</html>