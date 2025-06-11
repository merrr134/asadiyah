<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard - @yield('title')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    .sidebar-gradient {
      background: linear-gradient(135deg, #1a2f3a 0%, #2d5a5f 100%);
    }
    .green-gradient {
      background: linear-gradient(135deg, #48cc6c 0%, #2dd4bf 100%);
    }
    .green-hover {
      background: linear-gradient(135deg, #3fb85f 0%, #25b8a3 100%);
    }
    .card-shadow {
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.08);
    }
    .nav-item {
      position: relative;
      overflow: hidden;
    }
    .nav-item::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
      transition: left 0.5s;
    }
    .nav-item:hover::before {
      left: 100%;
    }
    @keyframes pulse-green {
      0%, 100% { box-shadow: 0 0 0 0 rgba(72, 204, 108, 0.7); }
      50% { box-shadow: 0 0 0 10px rgba(72, 204, 108, 0); }
    }
    .pulse-green {
      animation: pulse-green 2s infinite;
    }
  </style>
</head>
<body class="flex h-screen">
  
  <!-- Sidebar -->
  <div class="sidebar-gradient w-64 h-full shadow-2xl fixed left-0 top-0 z-10">
    <!-- Logo Section -->
    <div class="p-6 border-b border-white/10">
      <div class="flex items-center space-x-3">
        <div class="green-gradient w-10 h-10 rounded-xl flex items-center justify-center pulse-green">
          <i class="fas fa-leaf text-white text-lg"></i>
        </div>
        <div>
          <h2 class="font-bold text-xl text-white">Admin Panel</h2>
          <p class="text-green-200 text-xs">Management System</p>
        </div>
      </div>
    </div>
    
    <nav class="p-4 space-y-2">
      <!-- Home -->
      <div class="nav-item">
        <a href="{{ route('admin.home') }}" 
           class="flex items-center px-4 py-3 text-sm rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-lg
                  {{ request()->routeIs('admin.home') ? 'text-white green-gradient' : 'text-gray-300 hover:bg-white/10 hover:text-white hover:translate-x-1' }}">
          <i class="fas fa-home w-5 mr-3"></i>
          <span class="font-medium">Home</span>
          <i class="fas fa-chevron-right ml-auto text-xs opacity-60"></i>
        </a>
      </div>
      
      <!-- Kelola Program -->
      <div class="nav-item">
        <a href="{{ route('admin.program.index') }}" 
           class="flex items-center px-4 py-3 text-sm rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-lg
                  {{ request()->routeIs('admin.program.*') ? 'text-white green-gradient' : 'text-gray-300 hover:bg-white/10 hover:text-white hover:translate-x-1' }}">
          <i class="fas fa-tasks w-5 mr-3"></i>
          <span class="font-medium">Kelola Program</span>
          <i class="fas fa-chevron-right ml-auto text-xs opacity-60"></i>
        </a>
      </div>
      
      <!-- Alasan -->
      <div class="nav-item">
        <a href="{{ route('admin.reason.index') }}" 
           class="flex items-center px-4 py-3 text-sm rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-lg
                  {{ request()->routeIs('admin.reason.*') ? 'text-white green-gradient' : 'text-gray-300 hover:bg-white/10 hover:text-white hover:translate-x-1' }}">
          <i class="fas fa-question-circle w-5 mr-3"></i>
          <span class="font-medium">Alasan</span>
          <i class="fas fa-chevron-right ml-auto text-xs opacity-60"></i>
        </a>
      </div>
      
      <!-- Berita -->
      <div class="nav-item">
        <a href="{{ route('admin.berita.index') }}" 
           class="flex items-center px-4 py-3 text-sm rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-lg
                  {{ request()->routeIs('admin.berita.*') ? 'text-white green-gradient' : 'text-gray-300 hover:bg-white/10 hover:text-white hover:translate-x-1' }}">
          <i class="fas fa-newspaper w-5 mr-3"></i>
          <span class="font-medium">Berita</span>
          <i class="fas fa-chevron-right ml-auto text-xs opacity-60"></i>
        </a>
      </div>
      
      <!-- Testimonial -->
      <div class="nav-item">
        <a href="{{ route('admin.testimonials.index') }}" 
           class="flex items-center px-4 py-3 text-sm rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-lg
                  {{ request()->routeIs('admin.testimonials.*') ? 'text-white green-gradient' : 'text-gray-300 hover:bg-white/10 hover:text-white hover:translate-x-1' }}">
          <i class="fas fa-star w-5 mr-3"></i>
          <span class="font-medium">Testimonial</span>
          <div class="ml-auto flex items-center">
            <span class="bg-green-500 text-white text-xs px-2 py-1 rounded-full mr-2">5</span>
            <i class="fas fa-chevron-right text-xs opacity-60"></i>
          </div>
        </a>
      </div>
      
      <!-- Contact -->
      <div class="nav-item">
        <a href="{{ route('admin.contacts.index') }}" 
           class="flex items-center px-4 py-3 text-sm rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-lg
                  {{ request()->routeIs('admin.contacts.*') ? 'text-white green-gradient' : 'text-gray-300 hover:bg-white/10 hover:text-white hover:translate-x-1' }}">
          <i class="fas fa-envelope w-5 mr-3"></i>
          <span class="font-medium">Contact</span>
          <i class="fas fa-chevron-right ml-auto text-xs opacity-60"></i>
        </a>
      </div>
      
      <!-- Separator -->
      <div class="border-t border-white/10 my-4"></div>
      
      <!-- User Profile -->
      <div class="px-4 py-3 bg-white/5 rounded-xl">
        <div class="flex items-center space-x-3">
          <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
            <i class="fas fa-user text-white text-sm"></i>
          </div>
          <div class="text-sm">
            <p class="text-white font-medium">Admin User</p>
            <p class="text-green-200 text-xs">Online</p>
          </div>
        </div>
      </div>
      
      <!-- Logout -->
      <div class="nav-item">
        <a href="{{ route('admin.logout') }}" 
           class="flex items-center px-4 py-3 text-sm text-red-300 rounded-xl hover:bg-red-500/10 transition-all duration-300 hover:text-red-200 transform hover:translate-x-1">
          <i class="fas fa-sign-out-alt w-5 mr-3"></i>
          <span class="font-medium">Logout</span>
          <i class="fas fa-chevron-right ml-auto text-xs opacity-60"></i>
        </a>
      </div>
    </nav>
  </div>

  <!-- Content area -->
  <div class="flex-1 flex flex-col ml-64">
    <!-- Header -->
    <header class="bg-white/90 backdrop-blur-sm shadow-lg border-b border-white/20 px-8 py-6">
      <div class="flex items-center justify-between">
        <div>
          <h1 class="text-2xl font-bold text-gray-800">@yield('title', 'Dashboard')</h1>
          <p class="text-gray-500 text-sm mt-1">@yield('subtitle', 'Welcome back, manage your content efficiently')</p>
        </div>
        <div class="flex items-center space-x-4">
          <!-- Notifications -->
          <div class="relative">
            <button class="p-2 rounded-xl bg-green-100 text-green-600 hover:bg-green-200 transition-colors">
              <i class="fas fa-bell"></i>
            </button>
            <span class="absolute -top-1 -right-1 w-3 h-3 bg-red-500 rounded-full"></span>
          </div>
          
          <!-- Search -->
          <div class="relative">
            <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
          </div>
        </div>
      </div>
    </header>

    <!-- Main content -->
    <main class="flex-1 p-8 overflow-auto">
      @yield('content')
    </main>
  </div>

</body>
</html>