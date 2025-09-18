@php
    // -------- Helpers robustos (evitan notices si faltan llaves) --------
    $brandLogo = $_img['brand']['logo_h']['large']
        ?? $_img['brand']['logo_h']['medium']
        ?? $_img['brand']['logo']['large']
        ?? $_img['brand']['logo']['medium']
        ?? null;

    $pageTitle   = $_seo['title'] ?? ($_brand['name'] ?? 'Próximamente');
    $pageDesc    = $_seo['description'] ?? 'Estamos trabajando en algo increíble.';

    // Contacto: acepta distintos esquemas (string o arrays)
    $contactInfo = $_contact['info'] ?? [];
    $phones      = collect((array)($contactInfo['phones'] ?? $contactInfo['phone'] ?? []))
                    ->filter()->values()->all();
    $emails      = collect((array)($contactInfo['emails'] ?? $contactInfo['email'] ?? []))
                    ->filter()->values()->all();
    $mainPhone   = $phones[0] ?? null;
    $mainEmail   = $emails[0] ?? null;

    // WhatsApp: prioriza chat float configurado; fallback a social.whatsapp
    $waUrl = ($_chat['provider'] ?? null) === 'whatsapp'
        ? ($_chat['config']['wa_url'] ?? null)
        : null;
    if (!$waUrl && !empty($_social['whatsapp']['url'] ?? null)) {
        $waUrl = $_social['whatsapp']['url'];
    }

    // Fondo del template (puedes cambiar por setting/asset del sitio)
    $bgUrl = asset('vendor/koneko/layout-sm-tpl/img/bg-coming-soon.png');
@endphp

<section
    class="relative min-h-screen w-full grid place-items-center px-6 py-12"
    style="background-image:url('{{ $bgUrl }}'); background-size:cover; background-position:center;"
    aria-labelledby="coming-soon-title"
>
    {{-- Overlay con gradiente y blur sutil para legibilidad --}}
    <div class="absolute inset-0 bg-gray-900/70 backdrop-blur-[2px]"></div>

    <div class="relative z-10 w-full max-w-3xl">
        <div class="rounded-3xl bg-white/10 ring-1 ring-white/10 shadow-2xl text-white p-8 md:p-10">
            {{-- Logo --}}
            @if($brandLogo)
                <div class="flex justify-center mb-6">
                    <img
                        src="{{ $brandLogo }}"
                        alt="{{ $_brand['name'] ?? 'Brand' }}"
                        class="h-10 md:h-12 w-auto drop-shadow"
                        loading="lazy"
                        decoding="async"
                    />
                </div>
            @endif

            {{-- Título / subtítulo --}}
            <div class="text-center space-y-3">
                <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs tracking-wide ring-1 ring-white/15">
                    <span class="i ti ti-rocket"></span>
                    <span>{{ $_brand['slogan'] ?? 'Muy pronto' }}</span>
                </span>

                <h1 id="coming-soon-title" class="text-4xl md:text-5xl font-extrabold leading-tight">
                    ¡Ya casi <span class="underline decoration-white/40">estamos listos</span>!
                </h1>

                <p class="text-white/80 text-base md:text-lg">
                    {{ $pageDesc }}
                </p>
            </div>

            {{-- CTA principales: WhatsApp / Teléfono / Email --}}
            <div class="mt-8 flex flex-wrap items-center justify-center gap-3">
                @if($waUrl)
                    <a href="{{ $waUrl }}" target="_blank" rel="noopener"
                       class="group inline-flex items-center gap-2 rounded-full bg-emerald-400/90 hover:bg-emerald-400 text-gray-900 px-5 py-2.5 font-semibold shadow-lg shadow-emerald-950/10 focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-300">
                        <i class="fab fa-whatsapp text-lg"></i>
                        <span>Escríbenos por WhatsApp</span>
                        <i class="ti ti-arrow-right group-hover:translate-x-0.5 transition-transform"></i>
                    </a>
                @endif

                @if($mainPhone)
                    <a href="tel:{{ preg_replace('/\s+/', '', $mainPhone) }}"
                       class="inline-flex items-center gap-2 rounded-full bg-white text-gray-900 px-4 py-2.5 font-semibold shadow-md hover:shadow-lg focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60">
                        <i class="ti ti-phone"></i>
                        <span>{{ $mainPhone }}</span>
                    </a>
                @endif

                @if($mainEmail)
                    <a href="mailto:{{ $mainEmail }}"
                       class="inline-flex items-center gap-2 rounded-full bg-white/80 hover:bg-white text-gray-900 px-4 py-2.5 font-semibold shadow-md focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60">
                        <i class="ti ti-mail"></i>
                        <span>{{ $mainEmail }}</span>
                    </a>
                @endif
            </div>

            {{-- Redes sociales dinámicas --}}
            @if(!empty($_social))
                <div class="mt-8">
                    <ul class="flex flex-wrap items-center justify-center gap-3">
                        @foreach($_social as $s)
                            <li>
                                <a  href="{{ $s['url'] }}"
                                    class="inline-flex h-11 w-11 items-center justify-center rounded-full bg-white text-gray-900 shadow-md transition-colors"
                                    style="--tw-hover-bg: {{ $s['color'] }};"
                                    onmouseover="this.style.backgroundColor='{{ $s['color'] }}'; this.style.color='#fff';"
                                    onmouseout="this.style.backgroundColor='white'; this.style.color='rgb(17,24,39)';">
                                    <i class="{{ $s['icon_fa'] }} text-lg"></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Línea divisoria y microcopy --}}
            <div class="mt-8 border-t border-white/10 pt-6 text-center text-sm text-white/70">
                <p>
                    @if ($_brand['copyright'] ?? false)
                        {{ $_brand['copyright'] }}
                    @else
                        {{ config('app.name') }} &middot;
                        <span>{{ now()->format('Y') }}</span>
                    @endif
                </p>
            </div>
        </div>

        {{-- Mini footer informativo opcional --}}
        <div class="mt-6 text-center text-xs text-white/60">
            <p>¿Eres parte del equipo? <a href="{{ url('/admin') }}" class="underline hover:text-white">Ingresar al panel</a></p>
        </div>
    </div>
</section>
