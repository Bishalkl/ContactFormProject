<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bishal Koirala's First Laravel Project</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-50 to-white text-gray-800">

  <!-- Header -->
   @include('layouts.header')

  <!-- Main Section -->
  <main class="max-w-4xl mx-auto px-6 py-12 text-center">
    <h2 class="text-4xl font-extrabold text-blue-700 mb-4">Welcome to My First Laravel Project</h2>
    <p class="text-lg text-gray-700 mb-6 leading-relaxed">
      My name is <strong>Bishal Koirala</strong>. This is my first project built with Laravel 12 using Blade templating, routes, and controllers. I'm passionate about web development and excited to share this with you!
    </p>
    <img src="https://avatars.githubusercontent.com/u/00000000?v=4" alt="profile" class="w-32 h-32 rounded-full mx-auto shadow-lg mb-4"> <!-- optional avatar -->
  </main>

  <!-- Contact Section -->
  <section id="contact" class="bg-blue-50 py-10">
    <div class="max-w-4xl mx-auto text-center space-y-4">
      <h3 class="text-2xl font-semibold text-blue-800">Contact Information</h3>
      <p>📞 <strong>Phone:</strong> <a href="tel:9811034442" class="text-blue-600 hover:underline">9811034442</a></p>
      <p>✉️ <strong>Email:</strong> <a href="mailto:bishal123koirala@gmail.com" class="text-blue-600 hover:underline">bishal123koirala@gmail.com</a></p>
      <div class="flex justify-center space-x-6 mt-4">
        <a href="https://github.com/Bishalkl" target="_blank" class="text-gray-700 hover:text-black text-lg">GitHub</a>
        <a href="https://www.facebook.com/bishal.koirala.92754" target="_blank" class="text-blue-700 hover:text-blue-900 text-lg">Facebook</a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  @include('layouts.footer')

</body>
</html>
