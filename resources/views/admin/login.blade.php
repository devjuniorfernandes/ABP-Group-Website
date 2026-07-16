<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sessão | Painel Administrativo</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@600;700;800&display=swap" rel="stylesheet">
    
    <!-- Vite CSS/JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#1a2c42] flex items-center justify-center min-h-screen p-6 relative overflow-hidden">

    <!-- Background Orbs -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden z-0">
        <div class="absolute left-[-10%] top-[-10%] w-[500px] h-[500px] bg-white/5 rounded-full blur-[100px]"></div>
        <div class="absolute right-[-10%] bottom-[-10%] w-[500px] h-[500px] bg-[#e51718]/10 rounded-full blur-[120px]"></div>
    </div>

    <!-- Login Box -->
    <div class="w-full max-w-md bg-white p-8 relative z-10 shadow-2xl border-t-4 border-[#e51718]">
        <!-- Brand Header -->
        <div class="text-center mb-8">
            <h1 class="font-primary text-3xl font-extrabold uppercase tracking-widest text-[#1a2c42]">
                ABP <span class="text-[#e51718]">Group</span>
            </h1>
            <p class="font-secondary text-xs text-gray-400 mt-2 uppercase tracking-wider">Gestão de Conteúdos</p>
        </div>

        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf

            <!-- Email field -->
            <div class="mb-5">
                <label for="email" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">E-mail Corporativo</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" 
                       class="w-full px-4 py-3 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] transition-all text-sm text-gray-800" 
                       placeholder="ex: admin@abpgroup.co.ao" required autofocus>
                @error('email')
                    <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password field -->
            <div class="mb-6">
                <label for="password" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Palavra-passe</label>
                <input type="password" id="password" name="password" 
                       class="w-full px-4 py-3 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] transition-all text-sm text-gray-800" 
                       placeholder="••••••••" required>
                @error('password')
                    <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mb-8">
                <label class="flex items-center gap-2 cursor-pointer select-none">
                    <input type="checkbox" name="remember" class="w-4 h-4 text-[#e51718] border-gray-300 focus:ring-[#e51718]">
                    <span class="text-xs text-gray-500 font-medium">Lembrar-me</span>
                </label>
            </div>

            <!-- Submit Button -->
            <button type="submit" 
                    class="w-full bg-[#1a2c42] hover:bg-[#e51718] text-white py-3.5 px-4 font-primary text-sm font-bold uppercase tracking-wider transition-colors shadow-md">
                Iniciar Sessão
            </button>
        </form>
    </div>

</body>
</html>
