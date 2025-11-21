<!DOCTYPE html>
<html lang="id" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Logic - Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-mono { font-family: 'JetBrains Mono', monospace; }
        
        /* Custom Scrollbar */
        .custom-scrollbar::-webkit-scrollbar { width: 8px; }
        .custom-scrollbar::-webkit-scrollbar-track { background-color: #111827; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background-color: #374151; border-radius: 4px; }
        
        /* Kedip kursor */
        .blink { animation: blinker 1s linear infinite; }
        @keyframes blinker { 50% { opacity: 0; } }

        /* --- PERBAIKAN ANIMASI INFINITE SCROLL --- */
        /* KITA PAKAI CSS MANUAL AGAR ANTI-GAGAL */
        @keyframes scroll-left {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); } /* Bergerak setengah karena ada 2 set duplikat */
        }
        
        .tech-scroll-wrapper {
            display: flex;             /* KUNCI: Wajib Flex agar menyamping */
            width: max-content;        /* KUNCI: Lebar mengikuti konten, bukan layar */
            animation: scroll-left 30s linear infinite;
        }
        
        .tech-scroll-wrapper:hover {
            animation-play-state: paused;
        }
    </style>
</head>
<body class="bg-black text-gray-300 antialiased selection:bg-green-500 selection:text-black">

    <div class="fixed w-full z-50 top-6 px-4 flex justify-center fade-element">
        <nav class="w-full max-w-3xl bg-gray-900/80 backdrop-blur-md border border-gray-700/50 rounded-full shadow-[0_8px_30px_rgb(0,0,0,0.5)] transition-all duration-300 hover:border-green-500/50">
            <div class="px-6 py-3 flex justify-between items-center">
                <a href="#" class="flex items-center gap-2 group">
                    <span class="w-3 h-3 rounded-full bg-green-500 group-hover:animate-ping"></span>
                    <span class="text-lg font-bold font-mono text-white tracking-wider group-hover:text-green-400 transition-colors">
                        &lt;Logic/&gt;
                    </span>
                </a>

                <div class="hidden md:flex items-center gap-1 bg-black/20 p-1 rounded-full border border-white/5">
                    <a href="#projects" class="px-4 py-1.5 text-sm font-medium text-gray-300 rounded-full hover:bg-green-600 hover:text-white transition-all duration-300">Projects</a>
                    <a href="#team" class="px-4 py-1.5 text-sm font-medium text-gray-300 rounded-full hover:bg-green-600 hover:text-white transition-all duration-300">Team</a>
                    <a href="#terminal" class="px-4 py-1.5 text-sm font-medium text-gray-300 rounded-full hover:bg-green-600 hover:text-white transition-all duration-300">Log</a>
                </div>

                <button class="md:hidden text-gray-300 hover:text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>
        </nav>
    </div>

    <header class="relative min-h-screen flex items-center justify-center border-b border-gray-800 overflow-hidden pt-20">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full max-w-4xl bg-green-500/10 blur-[100px] rounded-full pointer-events-none"></div>

        <div class="container relative mx-auto px-6 text-center z-10">
            <div class="inline-block mb-6 px-3 py-1 rounded-full border border-green-800 bg-green-900/20 text-green-400 text-xs font-mono animate-fade-in-down">
                Available for Hire
            </div>
            
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 tracking-tight min-h-[1.2em]">
                We Build 
                <span id="typewriter" class="text-transparent bg-clip-text bg-linear-to-r from-green-400 to-green-600"></span>
                <span class="animate-pulse text-green-500">_</span>
            </h1>
            
            <p class="text-xl text-gray-400 max-w-2xl mx-auto mb-8 font-light">
                Programmer yang menyatukan kreativitas dan kode. Spesialisasi dalam website developer <span class="text-white font-semibold"></span>.
            </p>

            <div class="flex justify-center gap-4">
                <a href="{{ route('projects.archive') }}" class="px-8 py-3 bg-green-600 hover:bg-green-500 text-black font-bold rounded-lg transition-all shadow-[0_0_20px_rgba(22,163,74,0.3)] hover:shadow-[0_0_30px_rgba(22,163,74,0.5)]">
                    Lihat Semua Proyek
                </a>
                <a href="#terminal" class="px-8 py-3 border border-gray-700 hover:border-green-500 text-white rounded-lg transition-all">
                    Tinggalkan Pesan
                </a>
            </div>
        </div>
    </header>

    <div class="w-full py-10 bg-black border-b border-gray-800 overflow-hidden">
        <div class="container mx-auto px-6 mb-6 text-center">
            <p class="text-sm font-mono text-gray-500 uppercase tracking-widest">Technologies we use</p>
        </div>

        <div class="relative w-full overflow-hidden mask-[linear-gradient(to_right,transparent_0,black_128px,black_calc(100%-128px),transparent_100%)]">
            
            <div class="tech-scroll-wrapper">
                
                <div class="flex items-center gap-16 mx-8 shrink-0">
                    <div class="text-gray-500 hover:text-green-500 transition-colors duration-300">
                        <svg class="h-12 w-auto fill-current" viewBox="0 0 24 24"><path d="M11.4 2.062a1.487 1.487 0 0 0-2.822.044L.23 20.125a1.312 1.312 0 0 0 1.242 1.813h21.031a1.312 1.312 0 0 0 1.266-1.844L11.4 2.062ZM3.063 19.688l7.78-16.531 4.313 9.313H10.81l-2.656 5.718h6.313l1.75 3.75H3.063Z"/></svg>
                    </div>
                    <div class="text-gray-500 hover:text-green-500 transition-colors duration-300">
                        <svg class="h-12 w-auto fill-current" viewBox="0 0 24 24"><path d="M12.83 4.9c-2.44-.16-3.25 1.02-3.56 2.03l-1.78 5.69H5.63l1.2-3.93c.34-1.12 1-3.35 3.9-3.66 2.9-.3 4.34 1.62 4.63 2.78l.59 2.38h1.87l-.68-2.63c-.5-1.9-2.22-4.1-6.7-3.73l2.39-1.05zm-1.32 8.9l-.5 2.38c-.28 1.28-.93 2.47-3.43 2.47-2.03 0-2.53-1.16-2.7-1.97l-.55-2.9H2.47l.59 3.04c.28 1.4 1.3 3.43 4.4 3.43 3.66 0 5.07-2.12 5.63-4.47l.53-2.68h-2.1zm5.75-7.28l-1.37 4.38h-1.82l1.35-4.35c.28-.93.84-1.56 1.82-1.56.72 0 1.2.37 1.1 1.25l1.56-.44c.3-1.43-.66-2.4-2.38-2.4-1.8 0-3.1.83-3.75 2.8l-1.57 5.04-1.03 3.3h2.35l.78-2.53h2.4l-.37 2.53h2.32l1.2-6.35c.28-1.5.2-1.6-1.6-1.6zm.63 3.1h-1.1l.55-1.77c.06-.2.22-.32.44-.32.2 0 .3.1.25.35l-.13 1.74z"/></svg>
                    </div>
                    <div class="text-gray-500 hover:text-green-500 transition-colors duration-300">
                        <svg class="h-8 w-auto fill-current" viewBox="0 0 24 24"><path d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z"/></svg>
                    </div>
                    <div class="text-gray-500 hover:text-green-500 transition-colors duration-300">
                        <svg class="h-10 w-auto fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-1.17.675-2.085.72-5.356.013-2.01.008-4.224.008-4.224z"/></svg>
                    </div>
                    <div class="text-gray-500 hover:text-green-500 transition-colors duration-300">
                        <svg class="h-10 w-auto fill-current" viewBox="0 0 24 24"><path d="M23.546 10.93L13.067.452c-.604-.603-1.582-.603-2.188 0L8.708 2.627l2.76 2.76c.645-.215 1.379-.07 1.889.441.516.515.658 1.258.438 1.9l2.658 2.66c.645-.223 1.387-.07 1.9.435.721.72.721 1.884 0 2.604-.719.719-1.881.719-2.604 0-.539-.541-.674-1.337-.404-1.996L12.86 8.955v6.525c.176.086.342.203.488.348.713.721.713 1.883 0 2.606-.719.721-1.889.721-2.609 0-.719-.719-.719-1.889 0-2.609.442-.44.793-.615 1.29-.719V8.226c-.251-.157-.471-.367-.645-.618L8.335 4.646l-4.372 4.371c-.604.602-.604 1.58 0 2.184l10.48 10.477c.604.604 1.582.604 2.186 0l10.48-10.477c.606-.602.606-1.584.002-2.186l-.465-.465z"/></svg>
                    </div>
                    <div class="text-gray-500 hover:text-green-500 transition-colors duration-300">
                         <svg class="h-12 w-auto fill-current" viewBox="0 0 24 24"><path d="M4.76 15.828c-.018.013-.03.021-.04.034l.04-.034zm8.286 2.334c3.826-.16 6.084-2.274 6.546-5.07.31-1.873-.403-3.446-1.79-4.546-.92-.73-2.12-1.182-3.42-1.377-.567-.085-1.142-.12-1.72-.106-1.084.026-2.15.223-3.152.56-.686.232-1.352.526-1.98.875-.173.096-.343.194-.51.3 1.104.17 2.145.63 2.97 1.335.68.58 1.173 1.32 1.427 2.122.034.108.063.217.086.326.004.02.012.04.016.06.06.327.08.66.06 1-.075 1.3-.687 2.49-1.724 3.353-1.038.863-2.346 1.273-3.775 1.184-.857-.053-1.69-.28-2.467-.652-.134-.064-.266-.132-.396-.204 1.215 1.46 2.96 2.372 4.932 2.443.364.013.73-.004 1.093-.043.057-.007.114-.012.17-.02.266-.03.53-.07.79-.118zM1.095 15.55c.07.047.14.093.212.138l-.212-.138zm1.855 1.693c.044.017.088.035.133.05.024.01.048.017.072.025l-.205-.075zm20.168-8.99c-.05-.135-.103-.268-.16-.4 1.145 1.94 1.078 4.394-.488 6.26-.955 1.138-2.307 1.792-3.844 1.86-1.234.054-2.373-.3-3.345-.963-.065-.044-.128-.09-.19-.136 1.75.726 3.71.617 5.348-.4 1.637-1.016 2.616-2.842 2.678-5.02v-.01c.006-.217-.01-.432-.047-.645-.02-.114-.045-.227-.073-.34-.02-.075-.04-.148-.064-.222.383-.008.76.007 1.133.045.013 0 .027-.004.04-.004h.02zM2.94 15.098c.94 1.07 2.287 1.702 3.788 1.78 1.052.055 2.02-.198 2.865-.696.066-.04.13-.08.195-.124-.075.038-.15.074-.228.11-1.104.496-2.352.558-3.562.176-.89-.28-1.693-.803-2.305-1.5-.012-.014-.024-.036-.04l-.3-.346c-.14-.165-.27-.338-.392-.516-.013-.02-.025-.04-.037-.06-.09-.134-.176-.27-.254-.41-.426-.76-.66-1.646-.642-2.58.032-1.64.798-3.154 2.108-4.16.946-.726 2.087-1.098 3.304-1.08.397.006.788.04 1.17.103 0 0 .003 0 .004 0 .522.088 1.022.25 1.488.477.085.04.167.085.25.128-1.47-1.193-3.392-1.624-5.3-1.077-2.08.596-3.69 2.24-4.234 4.312-.435 1.657-.075 3.346.85 4.714.05.075.103.147.156.22.06.08.123.16.186.238.064.08.128.157.194.233z"/></svg>
                     </div>
                </div>
                
                <div class="flex items-center gap-16 mx-8 shrink-0">
                    <div class="text-gray-500 hover:text-green-500 transition-colors duration-300"><svg class="h-12 w-auto fill-current" viewBox="0 0 24 24"><path d="M11.4 2.062a1.487 1.487 0 0 0-2.822.044L.23 20.125a1.312 1.312 0 0 0 1.242 1.813h21.031a1.312 1.312 0 0 0 1.266-1.844L11.4 2.062ZM3.063 19.688l7.78-16.531 4.313 9.313H10.81l-2.656 5.718h6.313l1.75 3.75H3.063Z"/></svg></div>
                    <div class="text-gray-500 hover:text-green-500 transition-colors duration-300"><svg class="h-12 w-auto fill-current" viewBox="0 0 24 24"><path d="M12.83 4.9c-2.44-.16-3.25 1.02-3.56 2.03l-1.78 5.69H5.63l1.2-3.93c.34-1.12 1-3.35 3.9-3.66 2.9-.3 4.34 1.62 4.63 2.78l.59 2.38h1.87l-.68-2.63c-.5-1.9-2.22-4.1-6.7-3.73l2.39-1.05zm-1.32 8.9l-.5 2.38c-.28 1.28-.93 2.47-3.43 2.47-2.03 0-2.53-1.16-2.7-1.97l-.55-2.9H2.47l.59 3.04c.28 1.4 1.3 3.43 4.4 3.43 3.66 0 5.07-2.12 5.63-4.47l.53-2.68h-2.1zm5.75-7.28l-1.37 4.38h-1.82l1.35-4.35c.28-.93.84-1.56 1.82-1.56.72 0 1.2.37 1.1 1.25l1.56-.44c.3-1.43-.66-2.4-2.38-2.4-1.8 0-3.1.83-3.75 2.8l-1.57 5.04-1.03 3.3h2.35l.78-2.53h2.4l-.37 2.53h2.32l1.2-6.35c.28-1.5.2-1.6-1.6-1.6zm.63 3.1h-1.1l.55-1.77c.06-.2.22-.32.44-.32.2 0 .3.1.25.35l-.13 1.74z"/></svg></div>
                    <div class="text-gray-500 hover:text-green-500 transition-colors duration-300"><svg class="h-8 w-auto fill-current" viewBox="0 0 24 24"><path d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z"/></svg></div>
                    <div class="text-gray-500 hover:text-green-500 transition-colors duration-300"><svg class="h-10 w-auto fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-1.17.675-2.085.72-5.356.013-2.01.008-4.224.008-4.224z"/></svg></div>
                    <div class="text-gray-500 hover:text-green-500 transition-colors duration-300"><svg class="h-10 w-auto fill-current" viewBox="0 0 24 24"><path d="M23.546 10.93L13.067.452c-.604-.603-1.582-.603-2.188 0L8.708 2.627l2.76 2.76c.645-.215 1.379-.07 1.889.441.516.515.658 1.258.438 1.9l2.658 2.66c.645-.223 1.387-.07 1.9.435.721.72.721 1.884 0 2.604-.719.719-1.881.719-2.604 0-.539-.541-.674-1.337-.404-1.996L12.86 8.955v6.525c.176.086.342.203.488.348.713.721.713 1.883 0 2.606-.719.721-1.889.721-2.609 0-.719-.719-.719-1.889 0-2.609.442-.44.793-.615 1.29-.719V8.226c-.251-.157-.471-.367-.645-.618L8.335 4.646l-4.372 4.371c-.604.602-.604 1.58 0 2.184l10.48 10.477c.604.604 1.582.604 2.186 0l10.48-10.477c.606-.602.606-1.584.002-2.186l-.465-.465z"/></svg></div>
                    <div class="text-gray-500 hover:text-green-500 transition-colors duration-300"><svg class="h-12 w-auto fill-current" viewBox="0 0 24 24"><path d="M4.76 15.828c-.018.013-.03.021-.04.034l.04-.034zm8.286 2.334c3.826-.16 6.084-2.274 6.546-5.07.31-1.873-.403-3.446-1.79-4.546-.92-.73-2.12-1.182-3.42-1.377-.567-.085-1.142-.12-1.72-.106-1.084.026-2.15.223-3.152.56-.686.232-1.352.526-1.98.875-.173.096-.343.194-.51.3 1.104.17 2.145.63 2.97 1.335.68.58 1.173 1.32 1.427 2.122.034.108.063.217.086.326.004.02.012.04.016.06.06.327.08.66.06 1-.075 1.3-.687 2.49-1.724 3.353-1.038.863-2.346 1.273-3.775 1.184-.857-.053-1.69-.28-2.467-.652-.134-.064-.266-.132-.396-.204 1.215 1.46 2.96 2.372 4.932 2.443.364.013.73-.004 1.093-.043.057-.007.114-.012.17-.02.266-.03.53-.07.79-.118zM1.095 15.55c.07.047.14.093.212.138l-.212-.138zm1.855 1.693c.044.017.088.035.133.05.024.01.048.017.072.025l-.205-.075zm20.168-8.99c-.05-.135-.103-.268-.16-.4 1.145 1.94 1.078 4.394-.488 6.26-.955 1.138-2.307 1.792-3.844 1.86-1.234.054-2.373-.3-3.345-.963-.065-.044-.128-.09-.19-.136 1.75.726 3.71.617 5.348-.4 1.637-1.016 2.616-2.842 2.678-5.02v-.01c.006-.217-.01-.432-.047-.645-.02-.114-.045-.227-.073-.34-.02-.075-.04-.148-.064-.222.383-.008.76.007 1.133.045.013 0 .027-.004.04-.004h.02zM2.94 15.098c.94 1.07 2.287 1.702 3.788 1.78 1.052.055 2.02-.198 2.865-.696.066-.04.13-.08.195-.124-.075.038-.15.074-.228.11-1.104.496-2.352.558-3.562.176-.89-.28-1.693-.803-2.305-1.5-.012-.014-.024-.036-.04l-.3-.346c-.14-.165-.27-.338-.392-.516-.013-.02-.025-.04-.037-.06-.09-.134-.176-.27-.254-.41-.426-.76-.66-1.646-.642-2.58.032-1.64.798-3.154 2.108-4.16.946-.726 2.087-1.098 3.304-1.08.397.006.788.04 1.17.103 0 0 .003 0 .004 0 .522.088 1.022.25 1.488.477.085.04.167.085.25.128-1.47-1.193-3.392-1.624-5.3-1.077-2.08.596-3.69 2.24-4.234 4.312-.435 1.657-.075 3.346.85 4.714.05.075.103.147.156.22.06.08.123.16.186.238.064.08.128.157.194.233z"/></svg>
                     </div>
                </div>

            </div>
        </div>
    </div>

    @if(isset($quote) && $quote)
    <div class="w-full bg-gray-900 border-b border-gray-800 py-12">
        <div class="container mx-auto px-6 flex flex-col items-center text-center">
            
            <div class="mb-4 text-green-500 opacity-50">
                <svg class="w-10 h-10 mx-auto" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H15.017C14.4647 8 14.017 8.44772 14.017 9V11C14.017 11.5523 13.5693 12 13.017 12H12.017V5H22.017V15C22.017 18.3137 19.3307 21 16.017 21H14.017ZM5.0166 21L5.0166 18C5.0166 16.8954 5.91203 16 7.0166 16H10.0166C10.5689 16 11.0166 15.5523 11.0166 15V9C11.0166 8.44772 10.5689 8 10.0166 8H6.0166C5.46432 8 5.0166 8.44772 5.0166 9V11C5.0166 11.5523 4.56889 12 4.0166 12H3.0166V5H13.0166V15C13.0166 18.3137 10.3303 21 7.0166 21H5.0166Z"></path></svg>
            </div>

            <div class="max-w-3xl relative group cursor-default">
                <div class="absolute -inset-1 bg-linear-to-r from-green-600 to-blue-600 rounded-lg blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
                
                <div class="relative bg-black border border-gray-700 rounded-lg p-8">
                    <p class="text-xl md:text-2xl font-mono text-gray-300 italic leading-relaxed">
                        <span class="text-green-500 not-italic font-bold mr-2">//</span>
                        "{{ $quote->content }}"
                    </p>
                    
                    <div class="mt-6 flex items-center justify-center gap-2">
                        <div class="h-px w-8 bg-gray-600"></div>
                        <p class="text-sm font-bold text-green-400 uppercase tracking-widest">
                            {{ $quote->author ?? 'Anonymous Dev' }}
                        </p>
                        <div class="h-px w-8 bg-gray-600"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endif

    <main id="projects" class="container mx-auto px-6 py-24">
        <div class="flex items-center justify-between mb-12 fade-element">
            <h2 class="text-3xl font-bold text-white border-l-4 border-green-500 pl-4">Selected Projects</h2>
            <a href="{{ route('projects.archive') }}" class="text-green-500 text-sm font-mono hover:underline flex items-center gap-1">
                View Archive &rarr;
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
            <div class="group relative bg-gray-900 rounded-xl border border-gray-800 hover:border-green-500/50 transition-all duration-300 hover:-translate-y-2 flex flex-col h-full overflow-hidden fade-element">
                
                <div class="h-52 overflow-hidden bg-gray-800 relative">
                    @if($project->thumbnail)
                        <img src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->title }}" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                    @else
                        <div class="flex items-center justify-center h-full text-gray-600 font-mono text-sm border-b border-gray-700">[NO_IMAGE]</div>
                    @endif
                    
                    <div class="absolute top-3 right-3 bg-black/80 backdrop-blur text-green-400 border border-green-900 text-xs px-3 py-1 rounded font-mono">
                        {{ $project->user->name }}
                    </div>
                </div>

                <div class="p-6 flex flex-col grow">
                    <div class="flex flex-wrap gap-2 mb-4">
                        @if($project->tech_stack)
                            @foreach($project->tech_stack as $tech)
                                <span class="text-[10px] font-mono uppercase text-green-300 bg-green-900/20 border border-green-900/50 px-2 py-1 rounded">
                                    {{ $tech }}
                                </span>
                            @endforeach
                        @endif
                    </div>

                    <h3 class="text-xl font-bold mb-2 text-white group-hover:text-green-400 transition-colors">
                        <a href="{{ route('project.show', $project->slug) }}">{{ $project->title }}</a>
                        <a href="{{ route('project.show', $project->slug) }}" class="absolute inset-0 z-10"></a>
                    </h3>
                    
                    <p class="text-gray-400 text-sm mb-6 line-clamp-3 grow">
                        {{ $project->description }}
                    </p>

                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-gray-800 relative z-20">
                         @if($project->url)
                            <a href="{{ $project->url }}" target="_blank" class="text-sm font-medium text-green-500 hover:text-green-300 flex items-center gap-2 transition-colors">
                                <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span> Live Demo
                            </a>
                        @else
                             <span class="text-gray-600 text-xs font-mono cursor-not-allowed">OFFLINE</span>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>

    <section id="team" class="bg-gray-900/50 py-24 border-t border-gray-800">
        <div class="container mx-auto px-6 text-center fade-element">
            
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">The <span class="text-green-500">Brains</span> Behind.</h2>
            <p class="text-gray-400 mb-12 max-w-xl mx-auto">
                Kenalan dengan para developer dari tim ini.
            </p>

            <div class="flex flex-wrap justify-center gap-8">
                @foreach($team as $member)
                <div class="w-full md:w-1/3 lg:w-1/4 bg-black border border-gray-800 rounded-2xl p-8 hover:border-green-500 transition-all duration-300 hover:-translate-y-2 group fade-element">
                    
                    <div class="w-32 h-32 mx-auto mb-6 rounded-full border-2 border-gray-700 group-hover:border-green-500 p-1 transition-colors relative">
                        @if($member->avatar)
                            <img src="{{ asset('storage/' . $member->avatar) }}" alt="{{ $member->name }}" class="w-full h-full rounded-full object-cover">
                        @else
                            <div class="w-full h-full rounded-full bg-gray-800 flex items-center justify-center text-2xl text-gray-500 font-bold">
                                {{ substr($member->name, 0, 1) }}
                            </div>
                        @endif
                    </div>

                    <h3 class="text-xl font-bold text-white mb-1">{{ $member->name }}</h3>
                    <p class="text-green-500 text-sm font-mono mb-4">{{ $member->role ?? 'Web Developer' }}</p>
                    
                    <p class="text-gray-500 text-sm mb-6 leading-relaxed">
                        "{{ $member->bio ?? 'Coding with passion.' }}"
                    </p>

                    <div class="flex justify-center gap-4">
                        @if($member->linkedin)
                            <a href="https://linkedin.com/in/{{ $member->linkedin }}" target="_blank" class="text-gray-400 hover:text-white transition-colors">IN</a>
                        @endif
                        @if($member->instagram)
                            <a href="https://instagram.com/{{ $member->instagram }}" target="_blank" class="text-gray-400 hover:text-white transition-colors">IG</a>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="terminal" class="bg-black py-24 border-t border-gray-800">
        <div class="container mx-auto px-6 max-w-4xl fade-element">
            
            <h2 class="text-3xl font-bold text-white mb-8 text-center font-mono">
                System Log <span class="text-green-500 blink">_</span>
            </h2>

            @if(session('success'))
                <div class="mb-4 bg-green-900/30 border border-green-500 text-green-400 px-4 py-3 rounded font-mono text-sm">
                    [SUCCESS] {{ session('success') }}
                </div>
            @endif

            <div class="bg-gray-900 rounded-lg border border-gray-700 p-6 shadow-2xl font-mono text-sm relative overflow-hidden">
                <div class="absolute inset-0 bg-linear-to-b from-transparent to-black/10 pointer-events-none opacity-50" style="background-size: 100% 4px;"></div>
                
                <div class="flex gap-2 mb-4 border-b border-gray-700 pb-4">
                    <div class="w-3 h-3 rounded-full bg-red-500"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                    <div class="w-3 h-3 rounded-full bg-green-500"></div>
                    <span class="ml-2 text-gray-500 text-xs">bash -- visitor_log.sh</span>
                </div>

                <div class="space-y-3 mb-8 max-h-64 overflow-y-auto custom-scrollbar pr-2">
                    @if(isset($messages) && $messages->count() > 0)
                        @foreach($messages as $msg)
                        <div class="text-gray-300 border-l-2 border-gray-700 pl-3 py-1 hover:border-green-500 hover:bg-white/5 transition-all">
                            <div class="flex flex-wrap gap-2 items-center">
                                <span class="text-green-500 font-bold">root@guest:~$</span> 
                                <span class="text-blue-400 font-bold">[{{ $msg->name }}]</span> 
                                <span class="text-gray-500 text-xs">[{{ $msg->created_at->diffForHumans() }}]</span>
                            </div>
                            <div class="text-gray-300 mt-1">"{{ $msg->message }}"</div>
                        </div>
                        @endforeach
                    @else
                        <div class="text-gray-500 italic">System log is empty. Be the first to execute command.</div>
                    @endif
                </div>

                <form action="{{ route('guestbook.store') }}" method="POST" class="border-t border-gray-700 pt-4">
                    @csrf
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex items-center bg-black border border-gray-600 rounded px-3 py-2 md:w-1/3 focus-within:border-green-500 transition-colors">
                            <span class="text-green-500 mr-2">user:</span>
                            <input type="text" name="name" placeholder="identify_yourself" required class="bg-transparent text-white w-full focus:outline-none placeholder-gray-700 font-mono">
                        </div>

                        <div class="flex items-center bg-black border border-gray-600 rounded px-3 py-2 grow focus-within:border-green-500 transition-colors">
                            <span class="text-green-500 mr-2">msg:</span>
                            <input type="text" name="message" placeholder="write_message_here..." required class="bg-transparent text-white w-full focus:outline-none placeholder-gray-700 font-mono">
                        </div>

                        <button type="submit" class="bg-green-600 hover:bg-green-500 text-black font-bold px-6 py-2 rounded transition-colors font-mono">
                            ENTER
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </section>

    <div class="relative w-full flex justify-end container mx-auto px-6 pointer-events-none z-40" style="margin-bottom: -8px;">
        <img id="pixel-pet" 
     src="{{ asset('images/cat.gif') }}" 
     alt="Pixel Cat" 
     class="w-20 h-auto pointer-events-auto cursor-pointer transition-transform hover:scale-110">
        <div id="pet-bubble" class="absolute bottom-16 right-10 bg-white text-black text-xs font-mono py-1 px-3 rounded opacity-0 transition-opacity duration-300">
            Zzz... 😴
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const pet = document.getElementById('pixel-pet');
            const bubble = document.getElementById('pet-bubble');
            
            // Link Gambar (Bisa kamu ganti sendiri nanti)
            const sleepGif = "https://raw.githubusercontent.com/gist/ManzDev/56d99339443af7847643313a9499fb31/raw/e647e99959e6a708a47044752643f46403645077/cat-sleep.gif";
            const awakeGif = "https://media.tenor.com/GfSX-u7_NSAAAAAi/cat-nyan-cat.gif"; // Contoh kucing lari/bangun

            // Saat Mouse Masuk (Bangun)
            pet.addEventListener('mouseenter', () => {
                // pet.src = awakeGif; // Aktifkan baris ini kalau punya GIF versi bangun
                bubble.textContent = "Welcome master! 😺";
                bubble.classList.remove('opacity-0');
            });

            // Saat Mouse Keluar (Tidur lagi)
            pet.addEventListener('mouseleave', () => {
                // pet.src = sleepGif; 
                bubble.textContent = "Zzz... 😴";
                setTimeout(() => {
                    bubble.classList.add('opacity-0');
                }, 1000);
            });

            // Saat Diklik (Suara Meow - Opsional)
            pet.addEventListener('click', () => {
                bubble.textContent = "Meow! 🐟";
                bubble.classList.remove('opacity-0');
                // Efek loncat dikit
                pet.classList.add('-translate-y-4');
                setTimeout(() => pet.classList.remove('-translate-y-4'), 200);
            });
        });
    </script>

    <div class="fixed bottom-6 left-6 z-50 flex items-center gap-3 p-3 bg-black/80 backdrop-blur-md border border-green-500/30 rounded-full shadow-[0_0_15px_rgba(74,222,128,0.1)] transition-all duration-300 hover:border-green-500 hover:shadow-[0_0_20px_rgba(74,222,128,0.3)] group">
        
        <button id="music-toggle" class="w-10 h-10 flex items-center justify-center bg-green-900/20 rounded-full text-green-500 hover:bg-green-500 hover:text-black transition-all">
            <svg id="icon-play" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
            <svg id="icon-pause" class="w-4 h-4 hidden" fill="currentColor" viewBox="0 0 24 24"><path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/></svg>
        </button>

        <div class="flex flex-col justify-center h-full pr-2">
            <span class="text-[10px] font-mono text-gray-400 uppercase tracking-wider">System Audio</span>
            
            <div class="flex items-end gap-0.5 h-3 mt-1">
                <div class="w-1 bg-green-500/50 rounded-t-sm animate-music-bar" style="animation-delay: 0s; height: 40%;"></div>
                <div class="w-1 bg-green-500/50 rounded-t-sm animate-music-bar" style="animation-delay: 0.1s; height: 100%;"></div>
                <div class="w-1 bg-green-500/50 rounded-t-sm animate-music-bar" style="animation-delay: 0.3s; height: 60%;"></div>
                <div class="w-1 bg-green-500/50 rounded-t-sm animate-music-bar" style="animation-delay: 0.2s; height: 80%;"></div>
            </div>
        </div>
        <audio id="bg-music" loop>
    <source src="https://cdn.pixabay.com/download/audio/2022/05/27/audio_1808fbf07a.mp3" type="audio/mp3">
</audio>

    </div>

    <style>
        @keyframes music-bar {
            0%, 100% { height: 20%; }
            50% { height: 100%; }
        }
        .animate-music-bar {
            animation: music-bar 0.8s ease-in-out infinite;
            animation-play-state: paused; /* Default diam */
        }
        .playing .animate-music-bar {
            animation-play-state: running; /* Gerak kalau play */
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const musicToggle = document.getElementById('music-toggle');
            const bgMusic = document.getElementById('bg-music');
            const iconPlay = document.getElementById('icon-play');
            const iconPause = document.getElementById('icon-pause');
            const visualizer = document.querySelector('.flex.items-end'); // Container bar

            // Set Volume rendah biar ga kaget
            bgMusic.volume = 0.3; 

            musicToggle.addEventListener('click', () => {
                if (bgMusic.paused) {
                    bgMusic.play();
                    iconPlay.classList.add('hidden');
                    iconPause.classList.remove('hidden');
                    visualizer.classList.add('playing'); // Mulai animasi
                } else {
                    bgMusic.pause();
                    iconPlay.classList.remove('hidden');
                    iconPause.classList.add('hidden');
                    visualizer.classList.remove('playing'); // Stop animasi
                }
            });
        });
    </script>

    <footer class="bg-black border-t border-gray-900 py-12">
        <div class="container mx-auto px-6 text-center">
            <p class="text-gray-600 text-sm font-mono">
                &lt;/&gt; make a dream and take the risk by <span class="text-green-600">Our Team</span>.
            </p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            // 1. SCRIPT ANIMASI TYPEWRITER
            const textElement = document.getElementById('typewriter');
            const texts = [
                "Digital Logic.", 
                "Laravel Apps.", 
                "Web Systems.", 
                "Secure Code."
            ];
            
            let textIndex = 0;
            let charIndex = 0;
            let isDeleting = false;
            let typeSpeed = 100; 

            function type() {
                const currentText = texts[textIndex];
                
                if (isDeleting) {
                    textElement.textContent = currentText.substring(0, charIndex - 1);
                    charIndex--;
                    typeSpeed = 50;
                } else {
                    textElement.textContent = currentText.substring(0, charIndex + 1);
                    charIndex++;
                    typeSpeed = 150;
                }

                if (!isDeleting && charIndex === currentText.length) {
                    isDeleting = true;
                    typeSpeed = 2000; 
                } else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    textIndex = (textIndex + 1) % texts.length;
                    typeSpeed = 500; 
                }

                setTimeout(type, typeSpeed);
            }
            // Jalankan Typewriter
            if(textElement) type();


            // 2. SCRIPT SCROLL ANIMATION (FADE IN)
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove('opacity-0', 'translate-y-10');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.fade-element').forEach(el => {
                el.classList.add('opacity-0', 'translate-y-10', 'transition-all', 'duration-700', 'ease-out');
                observer.observe(el);
            });


            // 3. SCRIPT TITLE CAPER (Browser Tab)
            let docTitle = document.title;
            window.addEventListener("blur", () => {
                document.title = "Come back here! 😭"; 
            });
            window.addEventListener("focus", () => {
                document.title = docTitle; 
            });

        });
    </script>
</body>
</html>