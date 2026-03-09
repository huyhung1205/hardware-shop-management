<x-layouts.app :title="'Tao tai khoan'">
    <main class="mx-auto flex min-h-screen max-w-6xl items-center px-6 py-16">
        <section class="grid w-full gap-8 rounded-[2rem] border border-white/60 bg-white/70 p-8 shadow-[0_30px_80px_rgba(120,53,15,0.12)] backdrop-blur md:grid-cols-[0.95fr_1.05fr] md:p-12">
            <div class="rounded-[1.75rem] border border-stone-200 bg-white p-6 shadow-sm md:p-8">
                <form method="POST" action="{{ route('register.store') }}" class="space-y-5">
                    @csrf
                    <div>
                        <h1 class="text-2xl font-bold text-stone-900">Tao tai khoan test</h1>
                        <p class="mt-1 text-sm text-stone-500">Tai khoan tao xong se duoc dang nhap ngay.</p>
                    </div>

                    @if ($errors->any())
                        <div class="rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <label class="block space-y-2">
                        <span class="text-sm font-semibold text-stone-700">Ho ten</span>
                        <input type="text" name="name" value="{{ old('name') }}" required class="w-full rounded-xl border border-stone-300 px-4 py-3 outline-none transition focus:border-amber-700">
                    </label>

                    <label class="block space-y-2">
                        <span class="text-sm font-semibold text-stone-700">Email</span>
                        <input type="email" name="email" value="{{ old('email') }}" required class="w-full rounded-xl border border-stone-300 px-4 py-3 outline-none transition focus:border-amber-700">
                    </label>

                    <label class="block space-y-2">
                        <span class="text-sm font-semibold text-stone-700">Mat khau</span>
                        <input type="password" name="password" required class="w-full rounded-xl border border-stone-300 px-4 py-3 outline-none transition focus:border-amber-700">
                    </label>

                    <label class="block space-y-2">
                        <span class="text-sm font-semibold text-stone-700">Xac nhan mat khau</span>
                        <input type="password" name="password_confirmation" required class="w-full rounded-xl border border-stone-300 px-4 py-3 outline-none transition focus:border-amber-700">
                    </label>

                    <button type="submit" class="w-full rounded-xl bg-amber-700 px-4 py-3 font-semibold text-white transition hover:bg-amber-800">
                        Tao tai khoan
                    </button>
                </form>
            </div>

            <div class="space-y-5">
                <p class="inline-flex rounded-full border border-emerald-800/15 bg-emerald-50 px-4 py-1 text-sm font-semibold text-emerald-900">
                    Luong auth de test nhanh
                </p>
                <h2 class="text-4xl font-black tracking-tight text-stone-900 md:text-5xl">
                    Dang ky, vao dashboard, roi test cac ket noi.
                </h2>
                <p class="max-w-xl text-base leading-7 text-stone-700">
                    Form nay tao ban ghi trong bang <span class="font-mono text-stone-950">users</span>, mo session dang nhap va chuyen sang trang dashboard de xac nhan he thong dang chay dung.
                </p>
                <div class="rounded-[1.5rem] bg-stone-900 p-6 text-sm leading-7 text-stone-200">
                    <p class="font-semibold text-white">Da co tai khoan?</p>
                    <a href="{{ route('login') }}" class="mt-4 inline-flex rounded-xl bg-white px-4 py-2 font-semibold text-stone-900 transition hover:bg-stone-100">
                        Quay lai dang nhap
                    </a>
                </div>
            </div>
        </section>
    </main>
</x-layouts.app>
