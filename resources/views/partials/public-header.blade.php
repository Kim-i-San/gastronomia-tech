@php
    $locale = app()->getLocale();

    $segments = request()->segments();

    if (! empty($segments) && in_array($segments[0], ['en', 'fr', 'de', 'it'])) {
        array_shift($segments);
    }

    $localizedPath = implode('/', $segments);
@endphp

<header class="sticky top-0 z-50 border-b border-[#181216]/10 bg-[#F4F0E9]/95 backdrop-blur">

    <div class="mx-auto flex h-[84px] max-w-[1440px] items-center justify-between px-5 sm:px-8 lg:px-12">

     {{-- BRAND --}}
<a
    href="{{ route('home', ['locale' => app()->getLocale()]) }}"
    class="flex shrink-0 items-center gap-3"
    aria-label="Gastronomia Tech"
>
    {{-- LOGO --}}
    <div class="relative flex h-11 w-11 shrink-0 items-center justify-center bg-[#64283A]">

        <div class="relative flex items-center">
            <span class="font-serif text-[28px] leading-none text-[#F4F0E9]">
                G
            </span>

            <span class="-ml-[1px] mt-[10px] font-sans text-[6px] font-semibold leading-none text-[#D8D1C8]">
                ech
            </span>
        </div>

    </div>

    {{-- BRAND NAME --}}
    <div class="leading-tight">
        <div class="text-sm font-semibold text-[#181216]">
            Gastronomia
        </div>

        <div class="text-xs text-[#181216]/45">
            Tech
        </div>
    </div>
</a>


        {{-- DESKTOP NAV --}}
        <nav class="hidden items-center gap-8 lg:flex">

            <a
                href="{{ route('home', ['locale' => $locale]) }}"
                class="text-sm font-semibold text-[#181216]/60 transition hover:text-[#64283A]"
            >
                {{ __('common.nav.home') }}
            </a>

            <a
                href="{{ route('home', ['locale' => $locale]) }}#products"
                class="text-sm font-semibold text-[#181216]/60 transition hover:text-[#64283A]"
            >
                {{ __('common.nav.products') }}
            </a>

            <a
                href="{{ route('home', ['locale' => $locale]) }}#company"
                class="text-sm font-semibold text-[#181216]/60 transition hover:text-[#64283A]"
            >
                {{ __('common.nav.about') }}
            </a>

            <a
                href="{{ route('home', ['locale' => $locale]) }}#partners"
                class="text-sm font-semibold text-[#181216]/60 transition hover:text-[#64283A]"
            >
                {{ __('common.nav.partners') }}
            </a>

            <a
                href="{{ route('home', ['locale' => $locale]) }}#media"
                class="text-sm font-semibold text-[#181216]/60 transition hover:text-[#64283A]"
            >
                {{ __('common.nav.media') }}
            </a>

        </nav>


        {{-- DESKTOP ACTIONS --}}
        <div class="hidden items-center gap-3 lg:flex">

            {{-- LANGUAGE --}}
            <details class="relative">

                <summary
                    class="flex cursor-pointer list-none items-center gap-2 rounded-xl border border-[#181216]/10 px-3 py-2 text-sm font-semibold text-[#181216] [&::-webkit-details-marker]:hidden"
                >
                    {{ strtoupper($locale) }}

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        class="h-4 w-4"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m6 9 6 6 6-6"
                        />
                    </svg>
                </summary>

                <div class="absolute right-0 mt-2 w-24 overflow-hidden rounded-xl border border-[#181216]/10 bg-[#F4F0E9] shadow-lg">

                    @foreach (['en', 'fr', 'de', 'it'] as $switchLocale)

                        <a
                            href="{{ url('/'.$switchLocale.($localizedPath ? '/'.$localizedPath : '')) }}"
                            class="block px-4 py-2.5 text-sm font-semibold transition
                                {{ $locale === $switchLocale
                                    ? 'bg-[#64283A] text-white'
                                    : 'text-[#181216]/70 hover:bg-[#D8D1C8]/35 hover:text-[#181216]'
                                }}"
                        >
                            {{ strtoupper($switchLocale) }}
                        </a>

                    @endforeach

                </div>

            </details>


            {{-- CONTACT --}}
            <a
                href="{{ route('contact', ['locale' => $locale]) }}"
                class="rounded-xl bg-[#64283A] px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-[#181216]"
            >
                {{ __('common.actions.contact') }}
            </a>

        </div>


        {{-- MOBILE MENU --}}
        <details class="relative lg:hidden">

            <summary
                class="flex h-11 w-11 cursor-pointer list-none items-center justify-center rounded-xl border border-[#181216]/10 bg-[#F4F0E9] text-[#181216] [&::-webkit-details-marker]:hidden"
                aria-label="Menu"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    class="h-5 w-5"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4 7h16M4 12h16M4 17h16"
                    />
                </svg>
            </summary>


            <div class="fixed left-0 right-0 top-[84px] border-t border-[#181216]/10 bg-[#F4F0E9] shadow-xl">

                <div class="px-5 pb-6 pt-3 sm:px-8">

                    <nav class="flex flex-col">

                        <a
                            href="{{ route('home', ['locale' => $locale]) }}"
                            class="border-b border-[#181216]/10 py-4 text-sm font-semibold text-[#181216]/75"
                        >
                            {{ __('common.nav.home') }}
                        </a>

                        <a
                            href="{{ route('home', ['locale' => $locale]) }}#products"
                            class="border-b border-[#181216]/10 py-4 text-sm font-semibold text-[#181216]/75"
                        >
                            {{ __('common.nav.products') }}
                        </a>

                        <a
                            href="{{ route('home', ['locale' => $locale]) }}#company"
                            class="border-b border-[#181216]/10 py-4 text-sm font-semibold text-[#181216]/75"
                        >
                            {{ __('common.nav.about') }}
                        </a>

                        <a
                            href="{{ route('home', ['locale' => $locale]) }}#partners"
                            class="border-b border-[#181216]/10 py-4 text-sm font-semibold text-[#181216]/75"
                        >
                            {{ __('common.nav.partners') }}
                        </a>

                        <a
                            href="{{ route('home', ['locale' => $locale]) }}#media"
                            class="border-b border-[#181216]/10 py-4 text-sm font-semibold text-[#181216]/75"
                        >
                            {{ __('common.nav.media') }}
                        </a>

                        <a
                            href="{{ route('contact', ['locale' => $locale]) }}"
                            class="py-4 text-sm font-semibold text-[#64283A]"
                        >
                            {{ __('common.nav.contact') }}
                        </a>

                    </nav>


                    {{-- LANGUAGES --}}
                    <div class="mt-5 flex gap-2">

                        @foreach (['en', 'fr', 'de', 'it'] as $switchLocale)

                            <a
                                href="{{ url('/'.$switchLocale.($localizedPath ? '/'.$localizedPath : '')) }}"
                                class="rounded-xl px-3 py-2 text-sm font-semibold
                                    {{ $locale === $switchLocale
                                        ? 'bg-[#64283A] text-white'
                                        : 'bg-[#D8D1C8]/40 text-[#181216]/65'
                                    }}"
                            >
                                {{ strtoupper($switchLocale) }}
                            </a>

                        @endforeach

                    </div>

                </div>

            </div>

        </details>

    </div>

</header>