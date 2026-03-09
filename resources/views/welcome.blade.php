<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Hardware Shop') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen antialiased">
    <main class="mx-auto flex min-h-screen max-w-6xl items-center px-6 py-16">
        <section class="grid w-full gap-8 rounded-[2rem] border border-white/60 bg-white/55 p-8 shadow-[0_30px_80px_rgba(120,53,15,0.12)] backdrop-blur md:grid-cols-[1.2fr_0.8fr] md:p-12">
            <div class="space-y-6">
                <p class="inline-flex items-center rounded-full border border-amber-800/15 bg-amber-50 px-4 py-1 text-sm font-medium tracking-wide text-amber-900">
                    Hardware Shop Management
                </p>
                <div class="space-y-4">
                    <h1 class="max-w-2xl text-4xl font-black tracking-tight text-stone-900 md:text-6xl">
                        Giao dien Laravel da san sang dung Tailwind CSS.
                    </h1>
                    <p class="max-w-xl text-base leading-7 text-stone-700 md:text-lg">
                        Vite va Tailwind da duoc noi vao Blade. Tu gio ban co the viet class tien ich truc tiep trong view de dung dashboard, form va trang quan tri.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3 text-sm font-semibold">
                    <span class="rounded-full bg-stone-900 px-4 py-2 text-white">Laravel 12</span>
                    <span class="rounded-full bg-amber-700 px-4 py-2 text-white">Tailwind CSS</span>
                    <span class="rounded-full bg-emerald-700 px-4 py-2 text-white">Vite</span>
                </div>
            </div>

            <div class="grid gap-4">
                <div class="rounded-[1.5rem] bg-stone-900 p-6 text-stone-100 shadow-lg">
                    <p class="text-sm uppercase tracking-[0.3em] text-stone-400">Vi du nhanh</p>
                    <pre class="mt-4 overflow-x-auto text-sm leading-6 text-emerald-300"><code>&lt;button class="rounded-xl bg-amber-700 px-4 py-2 text-white"&gt;
    Luu san pham
&lt;/button&gt;</code></pre>
                </div>
                <div class="rounded-[1.5rem] border border-stone-200 bg-[var(--panel)] p-6">
                    <p class="text-sm font-semibold text-stone-500">Diem bat dau</p>
                    <ul class="mt-4 space-y-3 text-sm leading-6 text-stone-700">
                        <li>Dung <span class="font-mono text-stone-950">resources/views/welcome.blade.php</span> de thu class Tailwind.</li>
                        <li>Chay <span class="font-mono text-stone-950">npm run dev</span> khi phat trien.</li>
                        <li>Chay <span class="font-mono text-stone-950">npm run build</span> truoc khi deploy.</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
