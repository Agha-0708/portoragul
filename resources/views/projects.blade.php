<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Proyek - Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-mono { font-family: 'JetBrains Mono', monospace; }
    </style>
</head>
<body class="bg-black text-gray-300 antialiased">

    <nav class="border-b border-gray-800 py-6 bg-black/50 backdrop-blur fixed w-full z-50 top-0">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-green-500 font-bold text-xl font-mono">
                &lt;/&gt;
            </a>
            <a href="{{ route('home') }}" class="text-sm text-gray-400 hover:text-white transition-colors">
                Kembali ke Home
            </a>
        </div>
    </nav>

    <main class="container mx-auto px-6 py-32">
        
        <div class="text-center mb-16">
            <h1 class="text-4xl font-bold text-white mb-4">Semua Proyek</h1>
            <p class="text-gray-400">Arsip lengkap karya dan eksperimen koding kami.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
            <div class="group relative bg-gray-900 rounded-xl border border-gray-800 hover:border-green-500/50 transition-all duration-300 hover:-translate-y-1 flex flex-col h-full overflow-hidden">
                
                <div class="h-52 overflow-hidden bg-gray-800 relative">
                    @if($project->thumbnail)
                        <img src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->title }}" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                    @else
                        <div class="flex items-center justify-center h-full text-gray-600 font-mono text-sm">[NO IMAGE]</div>
                    @endif
                    
                    <div class="absolute top-3 right-3 bg-black/80 backdrop-blur text-green-400 border border-green-900 text-xs px-3 py-1 rounded font-mono">
                        {{ $project->user->name }}
                    </div>
                </div>

                <div class="p-6 flex flex-col grow">
                    <div class="flex flex-wrap gap-2 mb-4">
                        @if($project->tech_stack)
                            @foreach($project->tech_stack as $tech)
                                <span class="text-[10px] font-mono uppercase text-green-300 bg-green-900/20 border border-green-900/50 px-2 py-1 rounded">{{ $tech }}</span>
                            @endforeach
                        @endif
                    </div>

                    <h3 class="text-xl font-bold mb-2 text-white group-hover:text-green-400 transition-colors">
                        <a href="{{ route('project.show', $project->slug) }}">{{ $project->title }}</a>
                        <a href="{{ route('project.show', $project->slug) }}" class="absolute inset-0 z-10"></a>
                    </h3>
                    
                    <p class="text-gray-400 text-sm mb-6 line-clamp-3">{{ $project->description }}</p>
                </div>
            </div>
            @endforeach
        </div>

    </main>

    <footer class="border-t border-gray-900 py-8 text-center text-gray-600 text-sm">
        &copy; {{ date('Y') }} Our Portfolio.
    </footer>

</body>
</html>