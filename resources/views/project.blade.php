<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->title }} - Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-mono { font-family: 'JetBrains Mono', monospace; }
        /* Style khusus untuk konten rich text dari Filament */
        .prose h2 { color: white; font-weight: 700; margin-top: 2rem; margin-bottom: 1rem; font-size: 1.5rem; }
        .prose h3 { color: #4ade80; font-weight: 600; margin-top: 1.5rem; margin-bottom: 0.5rem; font-size: 1.25rem; }
        .prose p { margin-bottom: 1.2rem; line-height: 1.8; color: #d1d5db; }
        .prose ul { list-style-type: disc; padding-left: 1.5rem; margin-bottom: 1.5rem; color: #d1d5db; }
        .prose img { border-radius: 0.75rem; margin-top: 2rem; margin-bottom: 2rem; border: 1px solid #374151; }
        .prose strong { color: #4ade80; font-weight: 700; }
    </style>
</head>
<body class="bg-black text-gray-300 antialiased">

    <nav class="border-b border-gray-800 py-6">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-green-500 font-mono hover:text-green-400 flex items-center gap-2">
                &larr; Back to Home
            </a>
        </div>
    </nav>

    <main class="container mx-auto px-6 py-16 max-w-4xl">
        <div class="mb-12 border-b border-gray-800 pb-12">
            <div class="flex flex-wrap gap-2 mb-6">
                @if($project->tech_stack)
                    @foreach($project->tech_stack as $tech)
                        <span class="text-sm font-mono text-green-400 border border-green-900 bg-green-900/20 px-3 py-1 rounded-full">
                            {{ $tech }}
                        </span>
                    @endforeach
                @endif
            </div>

            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
                {{ $project->title }}
            </h1>

            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-gray-800 border border-green-500/50 flex items-center justify-center text-green-500 font-bold text-lg">
                        {{ substr($project->user->name, 0, 1) }}
                    </div>
                    <div>
                        <p class="text-white font-medium">{{ $project->user->name }}</p>
                        <p class="text-xs text-gray-500">{{ $project->created_at->format('d M, Y') }}</p>
                    </div>
                </div>
                
                @if($project->url)
                <a href="{{ $project->url }}" target="_blank" class="bg-green-600 hover:bg-green-500 text-black font-bold px-6 py-3 rounded-lg transition-all flex items-center gap-2">
                    Visit Live Site &nearr;
                </a>
                @endif
            </div>
        </div>

        @if($project->thumbnail)
            <div class="rounded-2xl overflow-hidden border border-gray-800 mb-12">
                <img src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->title }}" class="w-full h-auto">
            </div>
        @endif

        <article class="prose prose-invert max-w-none text-lg">
            {!! $project->content !!}
        </article>

    </main>

    <footer class="border-t border-gray-900 py-12 mt-12 text-center">
        <p class="text-gray-600">&copy; {{ date('Y') }} Created by Us.</p>
    </footer>

</body>
</html>