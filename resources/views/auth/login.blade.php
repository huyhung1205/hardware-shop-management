<x-layouts.app :title="'Dang nhap'">
    <main class="mx-auto flex min-h-screen max-w-6xl items-center px-6 py-16">
        <section class="grid w-full gap-8 rounded-[2rem] border border-white/60 bg-white/70 p-8 shadow-[0_30px_80px_rgba(120,53,15,0.12)] backdrop-blur md:grid-cols-[1.1fr_0.9fr] md:p-12">
            <div class="space-y-5">
                <p class="inline-flex rounded-full border border-stone-300 bg-stone-50 px-4 py-1 text-sm font-semibold text-stone-700">
                    Kiem tra ket noi he thong
                </p>
                <h1 class="text-4xl font-black tracking-tight text-stone-900 md:text-5xl">
                    Dang nhap de test session va database.
                </h1>
                <p class="max-w-xl text-base leading-7 text-stone-700">
                    Sau khi dang nhap, ban se vao dashboard de kiem tra trang thai ket noi, thong tin user va session dang hoat dong.
                </p>
                <div class="rounded-[1.5rem] bg-stone-900 p-6 text-sm leading-7 text-stone-200">
                    <p class="font-semibold text-white">Chua co tai khoan?</p>
                    <p class="mt-2">Tao tai khoan test trong vai giay, sau do dang nhap va kiem tra luong auth ngay tren web.</p>
                    <a href="{{ route('register') }}" class="mt-4 inline-flex rounded-xl bg-amber-700 px-4 py-2 font-semibold text-white transition hover:bg-amber-800">
                        Tao tai khoan
                    </a>
                </div>
            </div>

            <div class="rounded-[1.75rem] border border-stone-200 bg-white p-6 shadow-sm md:p-8">
                <form method="POST" action="{{ route('login.store') }}" class="space-y-5">
                    @csrf
                    <div>
                        <h2 class="text-2xl font-bold text-stone-900">Dang nhap</h2>
                        <p class="mt-1 text-sm text-stone-500">Nhap tai khoan da tao trong bang users.</p>
                    </div>

                    @if ($errors->any())
                        <div class="rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <label class="block space-y-2">
                        <span class="text-sm font-semibold text-stone-700">Email</span>
                        <input type="email" name="email" value="{{ old('email') }}" required autofocus class="w-full rounded-xl border border-stone-300 px-4 py-3 outline-none transition focus:border-amber-700">
                    </label>

                    <label class="block space-y-2">
                        <span class="text-sm font-semibold text-stone-700">Mat khau</span>
                        <input type="password" name="password" required class="w-full rounded-xl border border-stone-300 px-4 py-3 outline-none transition focus:border-amber-700">
                    </label>

                    <label class="flex items-center gap-3 text-sm text-stone-600">
                        <input type="checkbox" name="remember" value="1" class="size-4 rounded border-stone-300 text-amber-700 focus:ring-amber-700">
                        Ghi nho dang nhap
                    </label>

                    <button type="submit" class="w-full rounded-xl bg-stone-900 px-4 py-3 font-semibold text-white transition hover:bg-stone-800">
                        Dang nhap
                    </button>
                </form>
            </div>
        </section>
    </main>
</x-layouts.app>
