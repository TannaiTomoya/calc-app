<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Calc App</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gray-50 text-gray-900">
        <main class="min-h-screen flex items-center justify-center p-8">
            <section class="max-w-xl w-full bg-white shadow rounded-lg p-8 space-y-6">
                <header>
                    <h1 class="text-3xl font-semibold text-center">Calc App</h1>
                    <p class="text-sm text-center text-gray-500 mt-2">
                        URLパラメータで指定した四則演算の結果を表示します。
                    </p>
                </header>
                <div>
                    {{ $slot }}
                </div>
            </section>
        </main>
    </body>
</html>

