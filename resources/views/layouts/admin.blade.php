<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'Dashboard Admin')</title>
  
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  
  <!-- Bootstrap CSS untuk komponen form -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <style>
    /* Override Bootstrap dengan Tailwind */
    .container-fluid { @apply w-full px-4; }
    .row { @apply flex flex-wrap; }
    .col-md-8 { @apply w-full md:w-2/3; }
    .col-md-4 { @apply w-full md:w-1/3; }
    .col-md-6 { @apply w-full md:w-1/2; }
    .col-md-12 { @apply w-full; }
    
    .card { 
      @apply bg-white rounded-lg shadow-md border-0;
    }
    .card-header { 
      @apply bg-gray-50 px-6 py-4 border-b border-gray-200 rounded-t-lg;
    }
    .card-body { 
      @apply p-6;
    }
    .card-title {
      @apply text-lg font-semibold text-gray-800 mb-0;
    }
    
    .form-control {
      @apply w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent;
    }
    .form-select {
      @apply w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent;
    }
    .form-label {
      @apply block text-sm font-medium text-gray-700 mb-1;
    }
    .form-text {
      @apply text-sm text-gray-500 mt-1;
    }
    .form-check-input {
      @apply w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500;
    }
    .form-check-label {
      @apply ml-2 text-sm font-medium text-gray-700;
    }
    
    .btn {
      @apply px-4 py-2 rounded-md font-medium transition-all duration-200 inline-flex items-center gap-2;
    }
    .btn-primary {
      @apply bg-blue-600 text-white hover:bg-blue-700 hover:shadow-lg;
    }
    .btn-secondary {
      @apply bg-gray-600 text-white hover:bg-gray-700;
    }
    
    .text-primary { @apply text-blue-600; }
    .text-muted { @apply text-gray-500; }
    .text-danger { @apply text-red-600; }
    .text-warning { @apply text-yellow-600; }
    
    .mb-3 { @apply mb-3; }
    .mb-4 { @apply mb-4; }
    .d-flex { @apply flex; }
    .justify-content-between { @apply justify-between; }
    .align-items-center { @apply items-center; }
    .gap-2 { @apply gap-2; }
    
    .is-invalid {
      @apply border-red-500 focus:ring-red-500;
    }
    .invalid-feedback {
      @apply text-red-600 text-sm mt-1;
    }
    
    .form-section {
      @apply bg-gray-50 p-5 rounded-lg mb-5 border border-gray-200;
    }
    
    .preview-image {
      @apply max-w-[150px] max-h-[150px] rounded-lg mt-2 shadow-md;
    }
    
    .rating-preview {
      @apply text-2xl text-yellow-500 mt-2;
    }
    
    /* Custom scrollbar */
    ::-webkit-scrollbar {
      width: 6px;
    }
    ::-webkit-scrollbar-track {
      @apply bg-gray-100;
    }
    ::-webkit-scrollbar-thumb {
      @apply bg-gray-400 rounded-full;
    }
    ::-webkit-scrollbar-thumb:hover {
      @apply bg-gray-500;
    }
  </style>
  
  <!-- Page specific styles -->
  @stack('styles')
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen">
  <!-- Navigation -->
  <nav class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4">
      <div class="flex justify-between items-center">
        <div class="flex items-center space-x-4">
          <h1 class="text-2xl font-bold text-gray-800">
            <i class="fas fa-graduation-cap text-blue-600 mr-2"></i>
            Admin Panel
          </h1>
          
          <!-- Breadcrumb -->
          <div class="hidden md:flex items-center space-x-2 text-sm text-gray-500">
            <i class="fas fa-home"></i>
            <span>/</span>
            <span>@yield('breadcrumb', 'Dashboard')</span>
          </div>
        </div>
        
        <!-- User Menu -->
        <div class="flex items-center space-x-4">
          <div class="relative">
            <button class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 transition-colors">
              <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                <i class="fas fa-user text-white text-sm"></i>
              </div>
              <span class="hidden md:block font-medium">Admin</span>
              <i class="fas fa-chevron-down text-xs"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mx-auto px-4 py-6">
    <!-- Flash Messages -->
    @if(session('success'))
      <div class="bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg mb-6 flex items-center">
        <i class="fas fa-check-circle mr-2"></i>
        {{ session('success') }}
      </div>
    @endif

    @if(session('error'))
      <div class="bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg mb-6 flex items-center">
        <i class="fas fa-exclamation-circle mr-2"></i>
        {{ session('error') }}
      </div>
    @endif

    @if($errors->any())
      <div class="bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg mb-6">
        <div class="flex items-center mb-2">
          <i class="fas fa-exclamation-triangle mr-2"></i>
          <span class="font-medium">Terdapat kesalahan:</span>
        </div>
        <ul class="list-disc list-inside space-y-1 text-sm">
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <!-- Page Content -->
    @yield('content')
  </div>

  {{-- <!-- Footer -->
  <footer class="bg-white border-t border-gray-200 mt-12">
    <div class="container mx-auto px-4 py-6">
      <div class="text-center text-gray-500 text-sm">
        <p>&copy; {{ date('Y') }} Admin Panel. All rights reserved.</p>
      </div>
    </div>
  </footer> --}}

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- Page specific scripts -->
  @stack('scripts')
</body>
</html>