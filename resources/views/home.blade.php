<x-layouts.public
    :title="__('home.meta_title')"
    :description="__('home.meta_description')"
>

    @include('partials.public-header')

    <main>

        {{-- =========================================================
             01 — HERO
             ========================================================= --}}
        <section class="relative overflow-hidden bg-[#F4F0E9]">

            <div
                class="pointer-events-none absolute right-[-4vw] top-1/2 -translate-y-1/2 select-none font-serif text-[55vw] leading-[0.7] tracking-[-0.10em] text-[#64283A]/[0.04] lg:text-[39vw]"
                aria-hidden="true"
            >
                GT
            </div>

            <div class="relative mx-auto flex min-h-[calc(100svh-84px)] max-w-[1440px] flex-col px-5 sm:px-8 lg:px-12">

                <div class="grid flex-1 items-center gap-14 py-20 lg:grid-cols-[1.55fr_0.55fr] lg:gap-24 lg:py-28">

                    <div>

                        <div class="mb-8 flex items-center gap-4 text-[11px] font-semibold uppercase tracking-[0.16em] text-[#64283A]">
                            <span class="h-px w-10 bg-[#64283A]"></span>
                            {{ __('home.hero.eyebrow') }}
                        </div>

                        <h1 class="max-w-[980px] text-[clamp(58px,8vw,126px)] font-medium leading-[0.88] tracking-[-0.065em] text-[#181216]">
                            {{ __('home.hero.title_before') }}

                            <em class="block font-serif font-normal tracking-[-0.035em] text-[#64283A]">
                                {{ __('home.hero.title_emphasis') }}
                            </em>
                        </h1>

                    </div>


                    <div class="self-end pb-[8%] lg:pb-[12%]">

                        <p class="max-w-[390px] text-[17px] leading-8 tracking-[-0.02em] text-[#181216]/55 lg:text-xl">
                            {{ __('home.hero.subtitle') }}
                        </p>

                        <div class="mt-9 flex flex-col items-start gap-6">

                            <a
                                href="#products"
                                class="inline-flex min-w-[225px] items-center justify-between bg-[#64283A] px-5 py-4 text-sm font-medium text-[#F4F0E9] transition hover:-translate-y-0.5 hover:bg-[#181216]"
                            >
                                {{ __('home.hero.cta_products') }}
                                <span>↘</span>
                            </a>

                            <a
                                href="#company"
                                class="inline-flex items-center gap-4 border-b border-[#181216]/30 pb-1.5 text-sm font-medium text-[#181216]"
                            >
                                {{ __('home.hero.cta_company') }}
                                <span>→</span>
                            </a>

                        </div>

                    </div>

                </div>


                <div class="flex h-[76px] items-center justify-between border-t border-[#181216]/10">

                    <div class="flex gap-6 text-[9px] uppercase tracking-[0.14em] text-[#181216]/50">
                        <span class="font-semibold text-[#64283A]">01</span>
                        <span>GASTRONOMIA TECH</span>
                    </div>

                    <a
                        href="#intro"
                        class="flex items-center gap-4 text-[10px] uppercase tracking-[0.12em] text-[#181216]/50"
                    >
                        {{ __('home.hero.scroll') }}

                        <span class="h-px w-14 bg-[#64283A]/40"></span>
                    </a>

                </div>

            </div>

        </section>


        {{-- =========================================================
             02 — INTRO
             ========================================================= --}}
        <section id="intro" class="bg-[#181216] py-28 text-[#F4F0E9] sm:py-36 lg:py-48">

            <div class="mx-auto grid max-w-[1440px] gap-14 px-5 sm:px-8 lg:grid-cols-[0.35fr_1fr] lg:gap-28 lg:px-12">

                <div class="flex flex-col gap-3 pt-3 text-[10px] uppercase tracking-[0.16em] text-[#F4F0E9]/40">
                    <span class="text-[#B86B5C]">02</span>
                    <span>{{ __('home.intro.eyebrow') }}</span>
                </div>

                <div>

                    <h2 class="max-w-[1000px] text-[clamp(52px,6vw,100px)] font-medium leading-[0.93] tracking-[-0.055em]">
                        {{ __('home.intro.title_before') }}

                        <em class="block font-serif font-normal tracking-[-0.02em] text-[#B86B5C]">
                            {{ __('home.intro.title_emphasis') }}
                        </em>
                    </h2>

                    <p class="ml-auto mt-12 max-w-[650px] text-[17px] leading-8 text-[#F4F0E9]/60 lg:mr-[8%] lg:mt-16 lg:text-xl">
                        {{ __('home.intro.text') }}
                    </p>

                </div>

            </div>

        </section>


        {{-- =========================================================
             03 — PRODUCTS
             ========================================================= --}}
        <section id="products" class="bg-[#F4F0E9] py-28 sm:py-36 lg:py-48">

            <div class="mx-auto max-w-[1440px] px-5 sm:px-8 lg:px-12">

                <div class="mb-24 grid gap-14 lg:grid-cols-[0.35fr_1fr] lg:gap-28">

                    <div class="flex flex-col gap-3 pt-3 text-[10px] uppercase tracking-[0.16em] text-[#181216]/45">
                        <span class="text-[#64283A]">03</span>
                        <span>{{ __('home.products.eyebrow') }}</span>
                    </div>

                    <div>

                        <h2 class="max-w-[1050px] text-[clamp(52px,6.5vw,108px)] font-medium leading-[0.92] tracking-[-0.06em] text-[#181216]">
                            {{ __('home.products.title_before') }}

                            <em class="block font-serif font-normal tracking-[-0.025em] text-[#64283A]">
                                {{ __('home.products.title_emphasis') }}
                            </em>
                        </h2>

                        <p class="ml-auto mt-12 max-w-[570px] text-lg leading-8 text-[#181216]/55">
                            {{ __('home.products.intro') }}
                        </p>

                    </div>

                </div>


                <div class="flex flex-col gap-6">

                    {{-- GASTRONOMIA --}}
                    <article class="grid min-h-[720px] overflow-hidden border border-[#173447]/10 bg-[#EDF3F5] text-[#173447] lg:grid-cols-[0.72fr_1.28fr]">

                        <div class="flex min-h-[500px] flex-col p-7 sm:p-10 lg:p-[clamp(40px,5vw,78px)]">

                            <div class="flex justify-between gap-5 border-b border-[#173447]/35 pb-6 text-[9px] uppercase tracking-[0.14em] opacity-60">
                                <span>01</span>
                                <span>{{ __('home.products.gastronomia.type') }}</span>
                            </div>

                            <img
                                src="{{ asset('images/products/gastronomia-logo.png') }}"
                                alt="GastronomIA"
                                class="mt-16 h-auto w-[clamp(220px,20vw,340px)] object-contain"
                            >

                            <div class="mt-auto">

                                <p class="max-w-[440px] text-[17px] leading-8 lg:text-xl">
                                    {{ __('home.products.gastronomia.description') }}
                                </p>

                                <a
                                    href="https://gastronomia.ai"
                                    target="_blank"
                                    rel="noopener"
                                    class="mt-9 inline-flex items-center gap-6 border-b border-current pb-2 text-sm font-medium"
                                >
                                    {{ __('home.products.gastronomia.cta') }}
                                    <span>↗</span>
                                </a>

                            </div>

                        </div>


                        <div class="relative min-h-[570px] overflow-hidden bg-gradient-to-br from-[#DCE8ED] via-[#EDF3F5] to-[#F4F0E9] lg:min-h-[720px]">

                            <div class="absolute left-1/2 top-1/2 h-[min(75vw,720px)] w-[min(75vw,720px)] -translate-x-[46%] -translate-y-1/2 rounded-full border border-[#173447]/10"></div>

                            <div class="absolute left-[39%] top-1/2 z-20 aspect-[0.49] w-[clamp(210px,22vw,330px)] -translate-x-1/2 -translate-y-1/2 -rotate-[4deg] overflow-hidden rounded-[42px] border-[8px] border-[#17222A] bg-white shadow-2xl">
                                <img
                                    src="{{ asset('images/products/gastronomia-app-home.jpg') }}"
                                    alt="GastronomIA application"
                                    class="h-full w-full object-cover"
                                >
                            </div>

                            <div class="absolute left-[67%] top-[53%] z-10 aspect-[0.49] w-[clamp(175px,18vw,280px)] -translate-x-1/2 -translate-y-1/2 rotate-[6deg] overflow-hidden rounded-[38px] border-[8px] border-[#17222A] bg-white opacity-80 shadow-xl">
                                <img
                                    src="{{ asset('images/products/gastronomia-app-planning.jpg') }}"
                                    alt="GastronomIA planning"
                                    class="h-full w-full object-cover"
                                >
                            </div>

                        </div>

                    </article>


                    {{-- QALDO --}}
                    <article class="grid min-h-[720px] overflow-hidden border border-white/10 bg-[#0F1115] text-[#F5F6F7] lg:grid-cols-[0.72fr_1.28fr]">

                        <div class="flex min-h-[500px] flex-col p-7 sm:p-10 lg:p-[clamp(40px,5vw,78px)]">

                            <div class="flex justify-between gap-5 border-b border-white/25 pb-6 text-[9px] uppercase tracking-[0.14em] text-white/50">
                                <span>02</span>
                                <span>{{ __('home.products.qaldo.type') }}</span>
                            </div>

                            <img
                                src="{{ asset('images/products/qaldo-logo.png') }}"
                                alt="QALDO"
                                class="mt-16 h-auto w-[clamp(240px,24vw,390px)] object-contain"
                            >

                            <div class="mt-auto">

                                <p class="max-w-[440px] text-[17px] leading-8 text-white/60 lg:text-xl">
                                    {{ __('home.products.qaldo.description') }}
                                </p>

                                <a
                                    href="https://qaldo.io"
                                    target="_blank"
                                    rel="noopener"
                                    class="mt-9 inline-flex items-center gap-6 border-b border-current pb-2 text-sm font-medium"
                                >
                                    {{ __('home.products.qaldo.cta') }}
                                    <span>↗</span>
                                </a>

                            </div>

                        </div>


                        <div class="relative min-h-[570px] overflow-hidden bg-[#13161B] lg:min-h-[720px]">

                            <div class="absolute left-[8%] top-1/2 w-[92%] -translate-y-1/2 overflow-hidden rounded-[14px] border border-white/10 bg-white shadow-2xl">
                                <img
                                    src="{{ asset('images/products/qaldo-desktop-agenda.png') }}"
                                    alt="QALDO desktop workspace"
                                    class="block w-full"
                                >
                            </div>

                            <div class="absolute bottom-[-7%] right-[4%] z-20 w-[clamp(145px,13vw,205px)] rotate-[3deg] overflow-hidden rounded-[28px] border-[6px] border-[#16181C] shadow-2xl">
                                <img
                                    src="{{ asset('images/products/qaldo-mobile-agenda.jpg') }}"
                                    alt="QALDO mobile application"
                                    class="block w-full"
                                >
                            </div>

                        </div>

                    </article>

                </div>


                <div class="mt-6 grid min-h-[100px] grid-cols-[auto_1fr_auto] items-center gap-6 border border-[#181216]/10 px-6 text-[10px] uppercase tracking-[0.14em] text-[#181216]/45 sm:px-10">
                    <span class="text-[#64283A]">03</span>
                    <span>{{ __('home.products.future') }}</span>
                    <span class="text-2xl font-light">＋</span>
                </div>

            </div>

        </section>


        {{-- =========================================================
             04 — INDUSTRY
             ========================================================= --}}
        <section id="company" class="overflow-hidden bg-[#181216] py-28 text-[#F4F0E9] sm:py-36 lg:py-48">

            <div class="mx-auto max-w-[1440px] px-5 sm:px-8 lg:px-12">

                <div class="mb-24 grid gap-14 lg:grid-cols-[0.35fr_1fr] lg:gap-28">

                    <div class="flex flex-col gap-3 pt-3 text-[10px] uppercase tracking-[0.16em] text-white/40">
                        <span class="text-[#B86B5C]">04</span>
                        <span>{{ __('home.industry.eyebrow') }}</span>
                    </div>

                    <h2 class="max-w-[1050px] text-[clamp(52px,6vw,104px)] font-medium leading-[0.94] tracking-[-0.055em]">
                        {{ __('home.industry.title_before') }}

                        <em class="block font-serif font-normal text-[#B86B5C]">
                            {{ __('home.industry.title_emphasis') }}
                        </em>
                    </h2>

                </div>


                <div class="grid border-y border-white/10 lg:grid-cols-[1.05fr_0.95fr]">

                    <div class="relative flex min-h-[480px] items-center justify-center overflow-hidden border-b border-white/10 lg:min-h-[600px] lg:border-b-0 lg:border-r">

                        <div class="absolute font-serif text-[clamp(250px,26vw,470px)] leading-[0.7] tracking-[-0.11em] text-[#B86B5C]/10">
                            GT
                        </div>

                        <div class="relative z-10 flex items-center gap-8 font-serif text-[clamp(38px,4vw,70px)] italic">
                            {{ __('home.industry.visual_gastronomy') }}
                            <span class="font-sans text-[0.5em] not-italic text-[#B86B5C]">×</span>
                            {{ __('home.industry.visual_technology') }}
                        </div>

                    </div>


                    <div>

                        <div class="grid gap-7 p-8 sm:grid-cols-[60px_1fr] sm:p-12 lg:p-16">
                            <span class="text-[10px] tracking-[0.15em] text-[#B86B5C]">01</span>

                            <p class="m-0 text-lg leading-8 text-white/65 lg:text-[22px]">
                                {{ __('home.industry.text_1') }}
                            </p>
                        </div>

                        <div class="grid gap-7 border-t border-white/10 p-8 sm:grid-cols-[60px_1fr] sm:p-12 lg:p-16">
                            <span class="text-[10px] tracking-[0.15em] text-[#B86B5C]">02</span>

                            <p class="m-0 text-lg leading-8 text-white/65 lg:text-[22px]">
                                {{ __('home.industry.text_2') }}
                            </p>
                        </div>

                    </div>

                </div>


                <blockquote class="ml-auto mt-24 max-w-[1050px] font-serif text-[clamp(42px,5vw,80px)] italic leading-[1.05] tracking-[-0.025em]">
                    {{ __('home.industry.quote') }}
                </blockquote>

            </div>

        </section>


        {{-- =========================================================
             05 — APPROACH
             ========================================================= --}}
        <section class="bg-[#F4F0E9] py-28 sm:py-36 lg:py-48">

            <div class="mx-auto max-w-[1440px] px-5 sm:px-8 lg:px-12">

                <div class="mb-24 grid gap-14 lg:grid-cols-[0.35fr_1fr] lg:gap-28">

                    <div class="flex flex-col gap-3 pt-3 text-[10px] uppercase tracking-[0.16em] text-[#181216]/45">
                        <span class="text-[#64283A]">05</span>
                        <span>{{ __('home.approach.eyebrow') }}</span>
                    </div>

                    <div>

                        <h2 class="max-w-[950px] text-[clamp(52px,6vw,104px)] font-medium leading-[0.94] tracking-[-0.055em]">
                            {{ __('home.approach.title_before') }}

                            <em class="block font-serif font-normal text-[#64283A]">
                                {{ __('home.approach.title_emphasis') }}
                            </em>
                        </h2>

                        <p class="ml-auto mt-12 max-w-[600px] text-lg leading-8 text-[#181216]/55">
                            {{ __('home.approach.intro') }}
                        </p>

                    </div>

                </div>


                <div class="border-t border-[#181216]/15">

                    @foreach (__('home.approach.items') as $item)

                        <article class="group grid gap-4 border-b border-[#181216]/15 py-8 transition lg:grid-cols-[80px_0.65fr_1fr_40px] lg:items-center lg:gap-12 lg:py-10">

                            <div class="text-[10px] tracking-[0.15em] text-[#64283A]">
                                {{ $item['number'] }}
                            </div>

                            <h3 class="font-serif text-4xl font-normal lg:text-5xl">
                                {{ $item['title'] }}
                            </h3>

                            <p class="max-w-[600px] text-[15px] leading-7 text-[#181216]/55">
                                {{ $item['text'] }}
                            </p>

                            <span class="hidden text-xl text-[#181216]/30 transition group-hover:translate-x-1 group-hover:text-[#64283A] lg:block">
                                ↗
                            </span>

                        </article>

                    @endforeach

                </div>

            </div>

        </section>


        {{-- =========================================================
             06 — COMPANY
             ========================================================= --}}
        <section class="bg-white py-28 sm:py-36 lg:py-48">

            <div class="mx-auto max-w-[1440px] px-5 sm:px-8 lg:px-12">

                <div class="grid gap-14 lg:grid-cols-[0.35fr_1fr] lg:gap-28">

                    <div class="flex flex-col gap-3 pt-3 text-[10px] uppercase tracking-[0.16em] text-[#181216]/45">
                        <span class="text-[#64283A]">06</span>
                        <span>{{ __('home.company.eyebrow') }}</span>
                    </div>

                    <div>

                        <h2 class="max-w-[1000px] text-[clamp(52px,6vw,104px)] font-medium leading-[0.94] tracking-[-0.055em]">
                            {{ __('home.company.title_before') }}

                            <em class="block font-serif font-normal text-[#64283A]">
                                {{ __('home.company.title_emphasis') }}
                            </em>
                        </h2>


                        <div class="mt-16 grid gap-10 border-t border-[#181216]/10 pt-12 md:grid-cols-2">

                            <p class="font-serif text-3xl leading-tight text-[#181216] lg:text-4xl">
                                {{ __('home.company.intro') }}
                            </p>

                            <div>

                                <p class="text-lg leading-8 text-[#181216]/55">
                                    {{ __('home.company.body') }}
                                </p>

                                <a
                                    href="#vision"
                                    class="mt-8 inline-flex items-center gap-5 border-b border-[#181216]/30 pb-2 text-sm font-medium"
                                >
                                    {{ __('home.company.cta') }}
                                    <span>→</span>
                                </a>

                            </div>

                        </div>

                    </div>

                </div>


                <div class="mt-24 grid border-l border-t border-[#181216]/10 sm:grid-cols-2 lg:grid-cols-4">

                    @foreach (__('home.company.stats') as $stat)

                        <div class="min-h-[175px] border-b border-r border-[#181216]/10 p-8">

                            <div class="font-serif text-5xl text-[#64283A]">
                                {{ $stat['value'] }}
                            </div>

                            <div class="mt-5 text-sm leading-6 text-[#181216]/50">
                                {{ $stat['label'] }}
                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

          {{-- =========================================================
     TEAM
     ========================================================= --}}
@php
    $teamImages = collect(
        glob(public_path('images/team/*.{png,jpg,jpeg,webp}'), GLOB_BRACE)
    )->values();

    $normalizeAssetName = function ($value) {
        return str($value)
            ->lower()
            ->ascii()
            ->replace([' ', '-', '_', '.', "'"], '')
            ->toString();
    };

    $findTeamImage = function ($memberName) use ($teamImages, $normalizeAssetName) {

        $parts = collect(preg_split('/\s+/', $memberName))
            ->filter()
            ->map(fn ($part) => $normalizeAssetName($part))
            ->filter(fn ($part) => mb_strlen($part) >= 3);

        return $teamImages->first(function ($file) use ($parts, $normalizeAssetName) {

            $filename = $normalizeAssetName(
                pathinfo($file, PATHINFO_FILENAME)
            );

            return $parts->contains(
                fn ($part) => str_contains($filename, $part)
            );
        });
    };
@endphp


<div class="mt-28 border-t border-[#181216]/10 pt-20 lg:mt-36 lg:pt-24">

    {{-- INNER MARGINS --}}
    <div class="px-5 sm:px-8 lg:px-12">

        <div class="grid gap-16 lg:grid-cols-[0.82fr_1fr_1fr] lg:gap-14 xl:gap-20">

            {{-- INTRO --}}
            <div class="max-w-[330px]">

                <div class="flex items-center gap-4 text-[10px] font-semibold uppercase tracking-[0.18em] text-[#64283A]">
                    <span class="h-px w-8 bg-[#64283A]/50"></span>

                    {{ __('home.company.team_label') }}
                </div>

                <h3 class="mt-9 font-serif text-[clamp(40px,3.3vw,58px)] font-normal leading-[0.98] tracking-[-0.035em] text-[#181216]">
                    {{ __('home.company.team_title') }}
                </h3>

            </div>


            {{-- MEMBERS --}}
            @foreach (__('home.company.team') as $member)

                @php
                    $memberImage = $findTeamImage($member['name']);
                @endphp

                <article class="grid grid-cols-[160px_1fr] gap-8 xl:grid-cols-[185px_1fr] xl:gap-10">

                    {{-- PHOTO --}}
                    <div>

                        <div class="aspect-square overflow-hidden rounded-full bg-[#D8D1C8]">

                            @if ($memberImage)

                                <img
                                    src="{{ asset('images/team/' . basename($memberImage)) }}"
                                    alt="{{ $member['name'] }}"
                                    class="h-full w-full object-cover grayscale"
                                >

                            @else

                                <div class="flex h-full w-full items-center justify-center font-serif text-6xl text-[#64283A]/25">
                                    {{ mb_substr($member['name'], 0, 1) }}
                                </div>

                            @endif

                        </div>

                    </div>


                    {{-- CONTENT --}}
                    <div class="pt-2">

                        <h4 class="font-serif text-[34px] font-normal leading-[1] tracking-[-0.03em] text-[#181216]">
                            {{ $member['name'] }}
                        </h4>

                        <span class="mt-4 block text-[10px] font-semibold uppercase tracking-[0.18em] text-[#64283A]">
                            {{ $member['role'] }}
                        </span>

                        <div class="my-8 h-px w-16 bg-[#181216]/20"></div>

                        <p class="max-w-[300px] text-[15px] leading-[1.75] text-[#181216]/55">
                            {{ $member['bio'] }}
                        </p>

                    </div>

                </article>

            @endforeach

        </div>

    </div>

</div>

        </section>


       {{-- =========================================================
     07 — PARTNERS
     ========================================================= --}}
<section id="partners" class="bg-[#F4F0E9] py-28 sm:py-36 lg:py-48">

    @php
        $partnerFiles = collect(
            glob(public_path('images/partners/*.{png,jpg,jpeg,webp,svg}'), GLOB_BRACE)
        )->sort()->values();
    @endphp

    <div class="mx-auto max-w-[1440px] px-5 sm:px-8 lg:px-12">

        <div class="grid gap-14 lg:grid-cols-[0.35fr_1fr] lg:gap-28">

            <div class="flex flex-col gap-3 pt-3 text-[10px] uppercase tracking-[0.16em] text-[#181216]/45">
                <span class="text-[#64283A]">07</span>
                <span>{{ __('home.partners.eyebrow') }}</span>
            </div>


            <div>

                <h2 class="max-w-[980px] text-[clamp(52px,5.8vw,100px)] font-medium leading-[0.94] tracking-[-0.055em] text-[#181216]">
                    {{ __('home.partners.title_before') }}

                    <em class="block font-serif font-normal italic text-[#64283A]">
                        {{ __('home.partners.title_emphasis') }}
                    </em>
                </h2>

                <p class="ml-auto mt-12 max-w-[580px] text-lg leading-8 text-[#181216]/55">
                    {{ __('home.partners.intro') }}
                </p>

            </div>

        </div>


        @if ($partnerFiles->isNotEmpty())

            <div class="mt-20 grid border-l border-t border-[#181216]/10 sm:grid-cols-2 lg:mt-28 lg:grid-cols-4">

                @foreach ($partnerFiles as $partnerFile)

                    @php
                        $filename = basename($partnerFile);

                        $partnerName = str($filename)
                            ->beforeLast('.')
                            ->replace(['-', '_'], ' ')
                            ->title();
                    @endphp

                    <div class="flex min-h-[170px] items-center justify-center border-b border-r border-[#181216]/10 p-8 sm:min-h-[190px] lg:p-10">

                        <img
                            src="{{ asset('images/partners/' . $filename) }}"
                            alt="{{ $partnerName }}"
                            class="max-h-[74px] max-w-[180px] object-contain grayscale opacity-70 transition duration-300 hover:grayscale-0 hover:opacity-100"
                        >

                    </div>

                @endforeach

            </div>

        @endif

    </div>

</section>


    {{-- =========================================================
     08 — MEDIA
     ========================================================= --}}
@php
    $mediaImages = collect(
        glob(public_path('images/media/*.{png,jpg,jpeg,webp,svg}'), GLOB_BRACE)
    )->values();

    $mediaLogoMap = [
        'Kanal9' => 'kanal9.png',
        'Neuchâtel Economie' => 'investneuchatel.png',
        'GastroNeuchâtel' => 'gastroneuchatel.png',
    ];

    $normalizeMediaName = function ($value) {
        return str($value)
            ->lower()
            ->ascii()
            ->replace([' ', '-', '_', '.', "'"], '')
            ->toString();
    };

    $findMediaLogo = function ($mediaName) use (
        $mediaImages,
        $mediaLogoMap,
        $normalizeMediaName
    ) {

        if (isset($mediaLogoMap[$mediaName])) {

            $mappedFile = public_path(
                'images/media/' . $mediaLogoMap[$mediaName]
            );

            if (file_exists($mappedFile)) {
                return $mappedFile;
            }
        }

        $needle = $normalizeMediaName($mediaName);

        return $mediaImages->first(function ($file) use (
            $needle,
            $normalizeMediaName
        ) {

            $filename = $normalizeMediaName(
                pathinfo($file, PATHINFO_FILENAME)
            );

            return
                str_contains($filename, $needle)
                || str_contains($needle, $filename);
        });
    };
@endphp


<section id="media" class="bg-white py-28 sm:py-36 lg:py-48">

    <div class="mx-auto max-w-[1440px] px-5 sm:px-8 lg:px-12">

        {{-- HEADING --}}
        <div class="grid gap-14 lg:grid-cols-[0.35fr_1fr] lg:gap-28">

            <div class="flex flex-col gap-3 pt-3 text-[10px] uppercase tracking-[0.16em] text-[#181216]/45">
                <span class="text-[#64283A]">08</span>
                <span>{{ __('home.media.eyebrow') }}</span>
            </div>


            <div>

                <h2 class="max-w-[980px] text-[clamp(52px,5.8vw,100px)] font-medium leading-[0.94] tracking-[-0.055em] text-[#181216]">
                    {{ __('home.media.title_before') }}

                    <em class="block font-serif font-normal italic text-[#64283A]">
                        {{ __('home.media.title_emphasis') }}
                    </em>
                </h2>

                <p class="ml-auto mt-12 max-w-[580px] text-lg leading-8 text-[#181216]/55">
                    {{ __('home.media.intro') }}
                </p>

            </div>

        </div>


        {{-- ARTICLES --}}
        <div class="mt-20 border-t border-[#181216]/12 lg:mt-28">

            @foreach (__('home.media.items') as $item)

                @php
                    $mediaLogo = $findMediaLogo($item['media']);
                @endphp


                <a
                    href="{{ $item['url'] ?? '#' }}"

                    @if (!empty($item['url']) && $item['url'] !== '#')
                        target="_blank"
                        rel="noopener"
                    @endif

                    class="group grid gap-7 border-b border-[#181216]/12 py-8 transition md:grid-cols-[210px_1fr_45px] md:items-center lg:py-11"
                >

                    {{-- SOURCE --}}
                    <div class="flex items-center gap-5">

                        <div class="flex h-[58px] w-[92px] shrink-0 items-center justify-center">

                            @if ($mediaLogo)

                                <img
                                    src="{{ asset('images/media/' . basename($mediaLogo)) }}"
                                    alt="{{ $item['media'] }}"
                                    class="max-h-[48px] max-w-[92px] object-contain grayscale opacity-65 transition duration-300 group-hover:grayscale-0 group-hover:opacity-100"
                                >

                            @else

                                <span class="text-[10px] font-semibold uppercase tracking-[0.12em] text-[#181216]/35">
                                    {{ $item['media'] }}
                                </span>

                            @endif

                        </div>


                        <div class="min-w-0">

                            <span class="block text-[10px] font-semibold uppercase tracking-[0.13em] text-[#181216]">
                                {{ $item['media'] }}
                            </span>

                            <span class="mt-1 block text-[10px] tracking-[0.08em] text-[#181216]/40">
                                {{ $item['date'] }}
                            </span>

                        </div>

                    </div>


                    {{-- TITLE --}}
                    <h3 class="max-w-[850px] font-serif text-[27px] leading-[1.15] tracking-[-0.025em] text-[#181216] transition duration-300 group-hover:text-[#64283A] sm:text-[34px]">
                        {{ $item['title'] }}
                    </h3>


                    {{-- ARROW --}}
                    <div class="hidden justify-end md:flex">

                        <span class="text-xl text-[#181216]/25 transition duration-300 group-hover:-translate-y-1 group-hover:translate-x-1 group-hover:text-[#64283A]">
                            ↗
                        </span>

                    </div>

                </a>

            @endforeach

        </div>

    </div>

</section>


        {{-- =========================================================
             09 — VISION
             ========================================================= --}}
        <section id="vision" class="relative overflow-hidden bg-[#64283A] py-28 text-[#F4F0E9] sm:py-36 lg:py-48">

            <div
                class="pointer-events-none absolute bottom-[-15%] right-[-4%] font-serif text-[40vw] leading-none tracking-[-0.10em] text-white/[0.035]"
                aria-hidden="true"
            >
                GT
            </div>

            <div class="relative mx-auto grid max-w-[1440px] gap-14 px-5 sm:px-8 lg:grid-cols-[0.35fr_1fr] lg:gap-28 lg:px-12">

                <div class="flex flex-col gap-3 pt-3 text-[10px] uppercase tracking-[0.16em] text-white/45">
                    <span class="text-[#D8D1C8]">09</span>
                    <span>{{ __('home.vision.eyebrow') }}</span>
                </div>

                <div>

                    <h2 class="max-w-[1050px] text-[clamp(52px,6.5vw,110px)] font-medium leading-[0.92] tracking-[-0.06em]">
                        {{ __('home.vision.title_before') }}

                        <em class="block font-serif font-normal italic text-[#D8D1C8]">
                            {{ __('home.vision.title_emphasis') }}
                        </em>
                    </h2>

                    <div class="mt-16 grid gap-10 border-t border-white/15 pt-10 md:grid-cols-[1fr_auto] md:items-end">

                        <p class="max-w-[650px] text-lg leading-8 text-white/60">
                            {{ __('home.vision.text') }}
                        </p>

                        <a
                            href="{{ route('contact', ['locale' => app()->getLocale()]) }}"
                            class="inline-flex items-center gap-5 border-b border-white/30 pb-2 text-sm font-medium"
                        >
                            {{ __('home.vision.cta') }}
                            <span>↗</span>
                        </a>

                    </div>

                </div>

            </div>

        </section>


        {{-- =========================================================
             10 — CTA
             ========================================================= --}}
        <section class="bg-[#F4F0E9] py-28 sm:py-36 lg:py-44">

            <div class="mx-auto grid max-w-[1440px] gap-14 px-5 sm:px-8 lg:grid-cols-[0.35fr_1fr] lg:gap-28 lg:px-12">

                <div class="flex flex-col gap-3 pt-3 text-[10px] uppercase tracking-[0.16em] text-[#181216]/45">
                    <span class="text-[#64283A]">10</span>
                    <span>{{ __('home.cta.eyebrow') }}</span>
                </div>

                <div>

                    <h2 class="max-w-[1050px] text-[clamp(52px,6vw,104px)] font-medium leading-[0.94] tracking-[-0.055em]">
                        {{ __('home.cta.title_before') }}

                        <em class="block font-serif font-normal italic text-[#64283A]">
                            {{ __('home.cta.title_emphasis') }}
                        </em>
                    </h2>

                    <div class="mt-14 grid gap-10 border-t border-[#181216]/10 pt-10 md:grid-cols-[1fr_auto] md:items-end">

                        <p class="max-w-[620px] text-lg leading-8 text-[#181216]/55">
                            {{ __('home.cta.text') }}
                        </p>

                        <a
                            href="{{ route('contact', ['locale' => app()->getLocale()]) }}"
                            class="inline-flex min-w-[210px] items-center justify-between bg-[#181216] px-5 py-4 text-sm font-medium text-[#F4F0E9] transition hover:bg-[#64283A]"
                        >
                            {{ __('home.cta.button') }}
                            <span>↗</span>
                        </a>

                    </div>

                </div>

            </div>

        </section>

    </main>

    @include('partials.public-footer')

</x-layouts.public>