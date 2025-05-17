<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-Form</title>
     <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- include header -->
    @include('layouts.header')

    <!-- Yield section 'contact' -->
    @yield('contact-section')
    <!-- include footer -->
    @include('layouts.footer')
</body>
</html>