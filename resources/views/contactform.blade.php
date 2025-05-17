@extends('layouts.contact')

{{-- Section for contact form --}}
@section('contact-section')
<main class="flex items-center justify-center min-h-screen p-4 bg-gray-50">
  <div class="bg-white shadow-lg rounded-2xl w-full max-w-3xl p-8 space-y-6">
    <h2 class="text-3xl font-semibold text-center text-blue-600">Contact Form</h2>
    <form method="POST" action="" enctype="multipart/form-data" class="space-y-6">
      @csrf

      {{-- Name Fields --}}
      <div class="grid md:grid-cols-3 gap-4">
        <div>
          <label class="block text-sm font-medium mb-1">First Name *</label>
          <input type="text" name="first_name"  class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
        </div>
        <div>
          <label class="block text-sm font-medium mb-1">Second Name (Optional)</label>
          <input type="text" name="second_name" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
        </div>
        <div>
          <label class="block text-sm font-medium mb-1">Last Name *</label>
          <input type="text" name="last_name"  class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
        </div>
      </div>

      {{-- Address --}}
      <div>
        <label class="block text-sm font-medium mb-1">Address *</label>
        <input type="text" name="address"  class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
      </div>

      {{-- Gender & DOB --}}
      <div class="grid md:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium mb-1">Gender *</label>
          <select name="gender"  class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
            <option disabled selected>Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div>
          <label class="block text-sm font-medium mb-1">Date of Birth *</label>
          <input type="date" name="dob"  class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
        </div>
      </div>

      {{-- Photo Upload --}}
      <div>
        <label class="block text-sm font-medium mb-1">Upload Photo *</label>
        <input type="file" name="photo" accept="image/*"  class="w-full file:px-4 file:py-2 file:border-0 file:bg-blue-600 file:text-white file:rounded-lg hover:file:bg-blue-700">
        <p class="text-xs text-gray-500 mt-1">Allowed size: 5KB - 20KB</p>
      </div>

      {{-- Qualification --}}
      <div>
        <label class="block text-sm font-medium mb-1">Academic Qualification *</label>
        <select name="qualification"  class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
          <option disabled selected>Select Qualification</option>
          <option value="SEE">SEE</option>
          <option value="SLC">SLC</option>
          <option value="Bachelor">Bachelor</option>
          <option value="Master">Master</option>
          <option value="PhD">PhD</option>
          <option value="No Qualification">No Qualification</option>
        </select>
      </div>

      {{-- Country --}}
      <div>
        <label class="block text-sm font-medium mb-1">Country *</label>
        <select name="country" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
          <option disabled selected>Select Country</option>
          <option value="Nepal">Nepal</option>
          <option value="India">India</option>
          <option value="China">China</option>
          <option value="Japan">Japan</option>
        </select>
      </div>

      {{-- Contact Number --}}
      <div>
        <label class="block text-sm font-medium mb-1">Contact Number *</label>
        <input type="tel" name="contact"  pattern="[0-9]{7,15}" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300" placeholder="e.g., 9800000000">
      </div>

      {{-- Submit Button --}}
      <div class="text-center">
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition font-semibold">
          Submit Form
        </button>
      </div>
    </form>
  </div>
</main>
@endsection
