<x-layouts.app :title="'Dashboard'">
    <main class="mx-auto max-w-6xl px-6 py-10">
        <section class="rounded-[2rem] border border-white/60 bg-white/70 p-8 shadow-[0_30px_80px_rgba(120,53,15,0.12)] backdrop-blur md:p-10">
            <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
                <div class="space-y-2">
                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-stone-500">Dashboard</p>
                    <h1 class="text-3xl font-black tracking-tight text-stone-900 md:text-4xl">
                        Xin chao, {{ $user->name }}.
                    </h1>
                    <p class="text-sm text-stone-600">
                        Ban da dang nhap thanh cong va co the dung trang nay de test ket noi auth/session/database.
                    </p>
                </div>

                <form method="POST" action="{{ route('logout.perform') }}">
                    @csrf
                    <button type="submit" class="rounded-xl bg-stone-900 px-4 py-3 font-semibold text-white transition hover:bg-stone-800">
                        Dang xuat
                    </button>
                </form>
            </div>

            <div class="mt-8 grid gap-4 md:grid-cols-3">
                <article class="rounded-[1.5rem] border border-stone-200 bg-white p-6">
                    <p class="text-sm font-semibold text-stone-500">Trang thai dang nhap</p>
                    <p class="mt-3 text-2xl font-bold text-emerald-700">Authenticated</p>
                    <p class="mt-2 text-sm text-stone-600">Guard web dang giu session hop le.</p>
                </article>

                <article class="rounded-[1.5rem] border border-stone-200 bg-white p-6">
                    <p class="text-sm font-semibold text-stone-500">User hien tai</p>
                    <p class="mt-3 text-lg font-bold text-stone-900">{{ $user->email }}</p>
                    <p class="mt-2 text-sm text-stone-600">ID: {{ $user->id }}</p>
                </article>

                <article class="rounded-[1.5rem] border border-stone-200 bg-white p-6">
                    <p class="text-sm font-semibold text-stone-500">Ket noi database</p>
                    <p class="mt-3 text-2xl font-bold {{ $databaseStatus === 'Connected' ? 'text-emerald-700' : 'text-red-700' }}">
                        {{ $databaseStatus }}
                    </p>
                    <p class="mt-2 text-sm text-stone-600">Database: {{ config('database.connections.mysql.database') }}</p>
                </article>
            </div>

            @if ($databaseError)
                <div class="mt-6 rounded-2xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                    {{ $databaseError }}
                </div>
            @endif
        </section>
    </main>
</x-layouts.app>
