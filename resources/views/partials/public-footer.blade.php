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