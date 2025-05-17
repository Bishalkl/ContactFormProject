@extends('layouts.master')


@section('welcome-section')
<main class="flex flex-col items-center justify-center min-h-screen bg-gray-100 p-6">
  <h1 class="text-4xl font-bold text-blue-700 mb-4">Welcome to Our Contact website</h1>
  <p class="text-lg text-gray-600 mb-8 text-center max-w-xl">
    We're glad you're here! If you'd like to reach out, feel free to fill out our contact form.
  </p>
  <a href="{{ route('contact.index') }}"
     class="inline-block bg-blue-600 text-white text-lg font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 shadow transition duration-300">
    Go to Contact Form
  </a>
</main>
@endsection