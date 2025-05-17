@extends('layouts.contact')

{{-- Section for contact form --}}
@section('contact-section')
<main class="flex items-center justify-center min-h-screen p-4 bg-gray-50">
  <div class="bg-white shadow-lg rounded-2xl w-full max-w-3xl p-8 space-y-6">
    <h2 class="text-3xl font-semibold text-center text-blue-600">Contact Form</h2>

    {{-- Flash Messages --}}
    @if(session('status'))
      <div 
        x-data="{ show: true }" 
        x-show="show" 
        x-init="setTimeout(() => show = false, 8000)" 
        class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
        role="alert"
      >
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('status') }}</span>
      </div>
    @endif

    @if(session('error'))
      <div 
        x-data="{ show: true }" 
        x-show="show" 
        x-init="setTimeout(() => show = false, 8000)" 
        class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
        role="alert"
      >
        <strong class="font-bold">Error!</strong>
        <span class="block sm:inline">{{ session('error') }}</span>
      </div>
    @endif

    <form method="POST" action="{{ route('contact.store') }}" enctype="multipart/form-data" class="space-y-6">
      @csrf

      {{-- Name Fields --}}
      <div class="grid md:grid-cols-3 gap-4">
        <div>
          <label class="block text-sm font-medium mb-1">First Name *</label>
          <input type="text" name="first_name" value="{{ old('first_name') }}" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
          <x-input-error field="first_name" />
        </div>
        <div>
          <label class="block text-sm font-medium mb-1">Second Name (Optional)</label>
          <input type="text" name="second_name" value="{{ old('second_name') }}" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
          <x-input-error field="second_name" />
        </div>
        <div>
          <label class="block text-sm font-medium mb-1">Last Name *</label>
          <input type="text" name="last_name" value="{{ old('last_name') }}" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
          <x-input-error field="last_name" />
        </div>
      </div>

      {{-- Address --}}
      <div>
        <label class="block text-sm font-medium mb-1">Address *</label>
        <input type="text" name="address" value="{{ old('address') }}" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
        <x-input-error field="address" />
      </div>

      {{-- Gender & DOB --}}
      <div class="grid md:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium mb-1">Gender *</label>
          <select name="gender" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
            <option disabled {{ old('gender') ? '' : 'selected' }}>Select Gender</option>
            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
            <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
          </select>
          <x-input-error field="gender" />
        </div>
        <div>
          <label class="block text-sm font-medium mb-1">Date of Birth *</label>
          <input type="date" name="dob" value="{{ old('dob') }}" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
          <x-input-error field="dob" />
        </div>
      </div>

      {{-- Qualification --}}
      <div>
        <label class="block text-sm font-medium mb-1">Academic Qualification *</label>
        <select name="qualification" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
          <option disabled {{ old('qualification') ? '' : 'selected' }}>Select Qualification</option>
          @foreach(['SEE', 'SLC', 'Bachelor', 'Master', 'PhD', 'No Qualification'] as $q)
            <option value="{{ $q }}" {{ old('qualification') == $q ? 'selected' : '' }}>{{ $q }}</option>
          @endforeach
        </select>
        <x-input-error field="qualification" />
      </div>

      {{-- Country --}}
      <div>
        <label class="block text-sm font-medium mb-1">Country *</label>
        <select name="country" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
          <option disabled {{ old('country') ? '' : 'selected' }}>Select Country</option>
          @foreach(['Nepal', 'India', 'China', 'Japan'] as $c)
            <option value="{{ $c }}" {{ old('country') == $c ? 'selected' : '' }}>{{ $c }}</option>
          @endforeach
        </select>
        <x-input-error field="country" />
      </div>

      {{-- Contact Number --}}
      <div>
        <label class="block text-sm font-medium mb-1">Contact Number *</label>
        <input type="tel" name="contact" pattern="[0-9]{7,15}" value="{{ old('contact') }}" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300" placeholder="e.g., 9800000000">
        <x-input-error field="contact" />
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
