<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .glass-effect {
            backdrop-filter: blur(16px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .login-card {
            animation: slideUp 0.6s ease-out;
        }
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .btn-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">
    <div class="login-card glass-effect rounded-2xl p-8 w-full max-w-md shadow-2xl">
        <!-- Header -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-white bg-opacity-20 rounded-full mb-4">
                <i class="fas fa-user-shield text-2xl text-white"></i>
            </div>
            <h1 class="text-2xl font-bold text-white mb-2">Admin Login</h1>
            <p class="text-white text-opacity-80">Masuk ke Dashboard Admin</p>
        </div>

        <!-- Login Form -->
        <form  method="POST" class="space-y-6">
            @csrf
            
            <!-- Email Field -->
            <div>
                <label for="email" class="block text-sm font-medium text-white mb-2">
                    <i class="fas fa-envelope mr-2"></i>Email
                </label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    value="{{ old('email') }}"
                    class="w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-lg text-white placeholder-white placeholder-opacity-60 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50 focus:border-transparent transition duration-200"
                    placeholder="Masukkan email Anda"
                    required
                >
                @error('email')
                    <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password Field -->
            <div>
                <label for="password" class="block text-sm font-medium text-white mb-2">
                    <i class="fas fa-lock mr-2"></i>Password
                </label>
                <div class="relative">
                    <input 
                        type="password" 
                        id="password" 
                        name="password"
                        class="w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-lg text-white placeholder-white placeholder-opacity-60 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50 focus:border-transparent transition duration-200 pr-12"
                        placeholder="Masukkan password Anda"
                        required
                    >
                    <button 
                        type="button" 
                        onclick="togglePassword()"
                        class="absolute right-3 top-1/2 transform -translate-y-1/2 text-white text-opacity-60 hover:text-opacity-100 transition duration-200"
                    >
                        <i id="password-icon" class="fas fa-eye"></i>
                    </button>
                </div>
                @error('password')
                    <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between">
                <label class="flex items-center">
                    <input 
                        type="checkbox" 
                        name="remember" 
                        class="w-4 h-4 text-indigo-600 bg-white bg-opacity-20 rounded border-white border-opacity-30 focus:ring-white focus:ring-opacity-50"
                    >
                    <span class="ml-2 text-sm text-white">Ingat saya</span>
                </label>
                <a href="#" class="text-sm text-white hover:text-opacity-80 transition duration-200">
                    Lupa password?
                </a>
            </div>

            <!-- Submit Button -->
            <button 
                type="submit" 
                class="w-full btn-gradient text-white font-semibold py-3 px-4 rounded-lg transition duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50"
            >
                <i class="fas fa-sign-in-alt mr-2"></i>
                Masuk ke Dashboard
            </button>
        </form>

        <!-- Error Messages -->
        @if($errors->any())
            <div class="mt-4 p-4 bg-red-500 bg-opacity-20 border border-red-500 border-opacity-30 rounded-lg">
                <div class="flex items-center">
                    <i class="fas fa-exclamation-triangle text-red-300 mr-2"></i>
                    <span class="text-red-300 text-sm">Terjadi kesalahan saat login</span>
                </div>
            </div>
        @endif

        <!-- Footer -->
        <div class="mt-8 text-center">
            <p class="text-white text-opacity-60 text-sm">
                © 2024 Admin Dashboard. All rights reserved.
            </p>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const passwordIcon = document.getElementById('password-icon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordIcon.className = 'fas fa-eye-slash';
            } else {
                passwordInput.type = 'password';
                passwordIcon.className = 'fas fa-eye';
            }
        }

        // Auto hide error messages after 5 seconds
        setTimeout(() => {
            const errorDiv = document.querySelector('.bg-red-500');
            if (errorDiv) {
                errorDiv.style.opacity = '0';
                errorDiv.style.transition = 'opacity 0.5s ease-out';
                setTimeout(() => {
                    errorDiv.remove();
                }, 500);
            }
        }, 5000);
    </script>
</body>
</html>