<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Consultation Management</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" />

    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#136dec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101822",
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
            font-family: 'Manrope', sans-serif;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display">
    <div class="relative flex min-h-screen w-full flex-col">
        <!-- Top App Bar -->
        <header class="sticky top-0 z-10 flex items-center justify-between bg-background-light/80 px-4 py-3 backdrop-blur-sm dark:bg-background-dark/80">
            <button class="flex h-10 w-10 items-center justify-center text-slate-800 dark:text-white">
                <span class="material-symbols-outlined text-2xl">menu</span>
            </button>
            <h1 class="text-lg font-bold text-slate-900 dark:text-white">Consultation Management</h1>
            <div class="flex items-center justify-center">
                <button 
                    class="flex size-10 shrink-0 items-center justify-center rounded-full text-slate-800 dark:text-white dark:hover:text-gray-400">
                    <span class="material-symbols-outlined text-2xl">notifications</span>
                </button>
                <button 
                    class="flex size-10 shrink-0 items-center justify-center rounded-full text-slate-800 dark:text-white dark:hover:text-gray-400">
                    <span class="material-symbols-outlined text-2xl">account_circle</span>
                </button>
                <button
                    onclick="location.href='/logout'"
                    class="flex size-10 shrink-0 items-center justify-center rounded-full text-red-600 dark:text-red-800 dark:hover:text-red-400">
                    <span class="material-symbols-outlined text-2xl">logout</span>
                </button>
            </div>
        </header>
        <main class="flex-1 pb-24">
            <?= $this->renderSection('content') ?>
        </main>
        <div class="fixed bottom-6 right-6">
            <button class="flex h-14 w-14 items-center justify-center rounded-full bg-primary text-white shadow-lg transition-transform hover:scale-105 active:scale-95">
                <span class="material-symbols-outlined text-3xl">add</span>
            </button>
        </div>
    </div>
</body>

</html>