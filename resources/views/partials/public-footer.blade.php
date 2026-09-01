<footer class="border-t border-[#181216]/10 bg-[#F4F0E9]">

    <div class="mx-auto max-w-[1200px] px-5 py-10 sm:px-8 sm:py-12">

        <div class="flex flex-col gap-10 lg:flex-row lg:items-start lg:justify-between">

           {{-- BRAND --}}
<div>
    <a
        href="{{ route('home', ['locale' => app()->getLocale()]) }}"
        class="inline-flex items-center gap-3"
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

    {{-- DESCRIPTION --}}
<p class="mt-5 max-w-[300px] text-sm leading-6 text-[#181216]/50">
    {{ __('common.footer.description') }}
</p>

{{-- SOCIALS --}}
<div class="mt-6 flex items-center gap-4">

    {{-- LINKEDIN --}}
    <a
        href="https://www.linkedin.com/company/gastronomia-ai"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="LinkedIn"
        class="text-[#181216]/35 transition hover:text-[#64283A]"
    >
        <svg
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-5 w-5"
            aria-hidden="true"
        >
            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 1 1 0-4.124 2.062 2.062 0 0 1 0 4.124zM7.119 20.452H3.555V9h3.564v11.452z"/>
        </svg>
    </a>

    {{-- INSTAGRAM --}}
    <a
        href="https://instagram.com/gastronomia.tech"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Instagram"
        class="text-[#181216]/35 transition hover:text-[#64283A]"
    >
        <svg
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-5 w-5"
            aria-hidden="true"
        >
            <path d="M7.75 2h8.5A5.76 5.76 0 0 1 22 7.75v8.5A5.76 5.76 0 0 1 16.25 22h-8.5A5.76 5.76 0 0 1 2 16.25v-8.5A5.76 5.76 0 0 1 7.75 2Zm0 2A3.75 3.75 0 0 0 4 7.75v8.5A3.75 3.75 0 0 0 7.75 20h8.5A3.75 3.75 0 0 0 20 16.25v-8.5A3.75 3.75 0 0 0 16.25 4h-8.5Zm8.75 1.5a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6Z"/>
        </svg>
    </a>

    {{-- YOUTUBE --}}
    <a
        href="https://www.youtube.com/@GastronomIAai"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="YouTube"
        class="text-[#181216]/35 transition hover:text-[#64283A]"
    >
        <svg
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-5 w-5"
            aria-hidden="true"
        >
            <path d="M23.5 6.2a3.02 3.02 0 0 0-2.13-2.14C19.5 3.55 12 3.55 12 3.55s-7.5 0-9.37.51A3.02 3.02 0 0 0 .5 6.2 31.4 31.4 0 0 0 0 12a31.4 31.4 0 0 0 .5 5.8 3.02 3.02 0 0 0 2.13 2.14c1.87.51 9.37.51 9.37.51s7.5 0 9.37-.51a3.02 3.02 0 0 0 2.13-2.14A31.4 31.4 0 0 0 24 12a31.4 31.4 0 0 0-.5-5.8ZM9.6 15.6V8.4l6.24 3.6-6.24 3.6Z"/>
        </svg>
    </a>

</div>
</div>


            {{-- LINKS --}}
            <div class="grid grid-cols-2 gap-x-12 gap-y-8 sm:grid-cols-4 lg:gap-x-14">

                {{-- COMPANY --}}
                <div>

                    <p class="text-sm font-semibold text-[#181216]">
                        {{ __('common.footer.company') }}
                    </p>

                    <nav class="mt-4 flex flex-col gap-2.5">

                        <a
                            href="{{ route('home', ['locale' => app()->getLocale()]) }}#company"
                            class="text-sm text-[#181216]/50 transition hover:text-[#64283A]"
                        >
                            {{ __('common.footer.about') }}
                        </a>

                        <a
                            href="{{ route('home', ['locale' => app()->getLocale()]) }}#partners"
                            class="text-sm text-[#181216]/50 transition hover:text-[#64283A]"
                        >
                            {{ __('common.footer.partners') }}
                        </a>

                        <a
                            href="{{ route('home', ['locale' => app()->getLocale()]) }}#media"
                            class="text-sm text-[#181216]/50 transition hover:text-[#64283A]"
                        >
                            {{ __('common.footer.media') }}
                        </a>

                    </nav>

                </div>

                {{-- PRODUCTS --}}
                <div>

                    <p class="text-sm font-semibold text-[#181216]">
                        {{ __('common.footer.products') }}
                    </p>

                    <nav class="mt-4 flex flex-col gap-2.5">

                        <a
                            href="https://gastronomia.ai"
                            target="_blank"
                            rel="noopener"
                            class="text-sm text-[#181216]/50 transition hover:text-[#64283A]"
                        >
                            GastronomIA
                        </a>

                        <a
                            href="https://qaldo.io"
                            target="_blank"
                            rel="noopener"
                            class="text-sm text-[#181216]/50 transition hover:text-[#64283A]"
                        >
                            QALDO
                        </a>

                    </nav>

                </div>


                {{-- CONTACT --}}
                <div>

                    <p class="text-sm font-semibold text-[#181216]">
                        {{ __('common.footer.contact') }}
                    </p>

                    <nav class="mt-4 flex flex-col gap-2.5">

                        <a
                            href="{{ route('contact', ['locale' => app()->getLocale()]) }}"
                            class="text-sm text-[#181216]/50 transition hover:text-[#64283A]"
                        >
                            {{ __('common.footer.contact') }}
                        </a>

                        <a
                            href="{{ route('legal', ['locale' => app()->getLocale()]) }}"
                            class="text-sm text-[#181216]/50 transition hover:text-[#64283A]"
                        >
                            {{ __('common.footer.legal') }}
                        </a>

                    </nav>

                </div>


                


                {{-- ECOSYSTEM --}}
                <div>
    {{-- Parent / active brand --}}
    <a
    href="{{ route('home', ['locale' => app()->getLocale()]) }}"
    class="text-sm font-semibold text-[#64283A] transition hover:text-[#181216]"
>
    Gastronomia Tech
</a>

    {{-- Products --}}
    <div class="mt-5 border-l border-[#181216]/15 pl-5">

        <a
            href="https://gastronomia.ai"
            target="_blank"
            rel="noopener"
            class="block py-1.5 text-sm text-[#181216]/55 transition hover:text-[#64283A]"
        >
            gastronomia.ai
        </a>

        <a
            href="https://qaldo.io"
            target="_blank"
            rel="noopener"
            class="block py-1.5 text-sm text-[#181216]/55 transition hover:text-[#64283A]"
        >
            qaldo.io
        </a>

    </div>
</div>

            </div>

        </div>


        {{-- BOTTOM --}}
        <div class="mt-10 flex flex-col gap-4 border-t border-[#181216]/10 pt-6 text-xs text-[#181216]/40 sm:flex-row sm:items-center sm:justify-between">

            <p>
                © {{ date('Y') }} Gastronomia Tech Sàrl.
                {{ __('common.footer.copyright') }}
            </p>

            <div class="flex items-center gap-4">

                @foreach (['en', 'fr', 'de', 'it'] as $locale)

                    <a
                        href="{{ url('/'.$locale) }}"
                        class="{{ app()->getLocale() === $locale
                            ? 'font-semibold text-[#64283A]'
                            : 'transition hover:text-[#181216]'
                        }}"
                    >
                        {{ strtoupper($locale) }}
                    </a>

                @endforeach

            </div>

        </div>

    </div>

</footer>