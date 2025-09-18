@php
    // -------- Helpers robustos --------
    $brandLogo = $_img['brand']['logo_h']['large']
        ?? $_img['brand']['logo_h']['medium']
        ?? $_img['brand']['logo']['large']
        ?? $_img['brand']['logo']['medium']
        ?? null;

    $pageTitle = $_seo['title'] ?? ($_brand['name'] ?? 'Mantenimiento');
    $pageDesc  = $_seo['description'] ?? 'Estamos realizando tareas de mantenimiento para mejorar tu experiencia.';

    // Datos opcionales de ventana/ETA desde settings de contacto (puedes mapearlos donde te convenga)
    $contactInfo = $_contact['info'] ?? [];
    $maintenance = (array)($contactInfo['maintenance'] ?? []); // p.ej.: ['eta' => '2025-09-18T03:00:00-06:00', 'window' => '02:00–03:00 AM', 'ticket' => 'RC-OPS-2312', 'status_url' => 'https://status.tu-dominio.com']
    $etaIso      = $maintenance['eta'] ?? null;        // ISO 8601 → mostrará countdown
    $windowTxt   = $maintenance['window'] ?? null;     // texto de ventana
    $ticketId    = $maintenance['ticket'] ?? null;
    $statusUrl   = $maintenance['status_url'] ?? null;

    // Contacto: acepta distintos esquemas (string o arrays)
    $phones    = collect((array)($contactInfo['phones'] ?? $contactInfo['phone'] ?? []))->filter()->values()->all();
    $emails    = collect((array)($contactInfo['emails'] ?? $contactInfo['email'] ?? []))->filter()->values()->all();
    $mainPhone = $phones[0] ?? null;
    $mainEmail = $emails[0] ?? null;

    // WhatsApp: prioriza chat; fallback a social.whatsapp
    $waUrl = ($_chat['provider'] ?? null) === 'whatsapp'
        ? ($_chat['config']['wa_url'] ?? null)
        : null;
    if (!$waUrl && !empty($_social['whatsapp']['url'] ?? null)) {
        $waUrl = $_social['whatsapp']['url'];
    }

    // Redes sociales normalizadas (con 'color' del enum)
    $socials = collect($_social ?? [])
        ->filter(fn($s) => !empty($s['url'] ?? null))
        ->map(function($s, $k) {
            $label = $s['label'] ?? ucfirst(str_replace('_',' ', $k));
            $fa    = $s['icon_fa'] ?? null;
            $ti    = $s['icon_ti'] ?? null;
            return [
                'url'        => $s['url'],
                'icon_class' => $fa ?: $ti ?: 'ti ti-share',
                'label'      => $label,
                'color'      => $s['color'] ?? '#111827', // fallback gris
            ];
        })
        ->all();

    // Fondo (puedes apuntar a otro asset en tu paquete)
    $bgUrl = asset('vendor/koneko/layout-sm-tpl/img/bg-maintenance.mp4');
@endphp

<section
    class="relative min-h-screen w-full grid place-items-center px-6 py-12 overflow-hidden"
    aria-labelledby="maintenance-title"
>
    {{-- Video de fondo --}}
    <video
        autoplay
        muted
        loop
        playsinline
        poster="{{ asset('vendor/koneko/layout-sm-tpl/img/bg-coming-soon.png') }}"
        class="absolute inset-0 w-full h-full object-cover"
    >
        <source src="{{ asset('vendor/koneko/layout-sm-tpl/img/bg-maintenance.webm') }}" type="video/webm">
        <source src="{{ asset('vendor/koneko/layout-sm-tpl/img/bg-maintenance.mp4') }}" type="video/mp4">
        {{-- fallback imagen si no soporta video --}}
        Tu navegador no soporta video en HTML5.
    </video>

    {{-- Overlay --}}
    <div class="absolute inset-0 bg-gray-900/75 backdrop-blur-[2px]"></div>

    <div class="relative z-10 w-full max-w-4xl">
        <div class="rounded-3xl bg-white/10 ring-1 ring-white/10 shadow-2xl text-white p-8 md:p-10">
            {{-- Logo --}}
            @if($brandLogo)
                <div class="flex justify-center mb-6">
                    <img
                        src="{{ $brandLogo }}"
                        alt="{{ $_brand['name'] ?? 'Brand' }}"
                        class="h-10 md:h-12 w-auto drop-shadow"
                        loading="lazy" decoding="async"
                    />
                </div>
            @endif

            {{-- Top: título + ilustración --}}
            <div class="grid md:grid-cols-5 gap-6 items-center">
                <div class="md:col-span-3 text-center md:text-left space-y-3">
                    <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs tracking-wide ring-1 ring-white/15">
                        <i class="ti ti-tools"></i>
                        <span>Mantenimiento en curso</span>
                    </span>

                    <h1 id="maintenance-title" class="text-4xl md:text-5xl font-extrabold leading-tight">
                        Estamos <span class="underline decoration-white/40">haciendo mejoras</span>
                    </h1>

                    <p class="text-white/80 text-base md:text-lg">
                        {{ $pageDesc }}
                    </p>

                    {{-- Ventana / ETA / Ticket --}}
                    <div class="mt-4 flex flex-wrap items-center gap-3 text-sm">
                        @if($windowTxt)
                            <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 ring-1 ring-white/15">
                                <i class="ti ti-clock"></i>
                                <span>Ventana: {{ $windowTxt }}</span>
                            </span>
                        @endif

                        @if($etaIso)
                            <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 ring-1 ring-white/15">
                                <i class="ti ti-hourglass"></i>
                                <span>ETA: <span x-text="etaLocal"></span></span>
                            </span>
                        @endif

                        @if($ticketId)
                            <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 ring-1 ring-white/15">
                                <i class="ti ti-ticket"></i>
                                <span>Ticket: {{ $ticketId }}</span>
                            </span>
                        @endif

                        @if($statusUrl)
                            <a href="{{ $statusUrl }}" target="_blank" rel="noopener"
                               class="inline-flex items-center gap-2 rounded-full bg-white text-gray-900 px-3 py-1 font-medium shadow hover:shadow-lg">
                                <i class="ti ti-activity"></i>
                                <span>Estado del servicio</span>
                            </a>
                        @endif
                    </div>
                </div>

                {{-- Ilustración (SVG liviano) --}}
                <div class="md:col-span-2">
                    <div class="mx-auto h-40 md:h-48 w-full max-w-[280px]">
                        <svg viewBox="0 0 360 300" class="w-full h-full opacity-90">
                            <defs>
                                <linearGradient id="g1" x1="0" x2="1" y1="0" y2="1">
                                    <stop offset="0%" stop-color="white" stop-opacity=".9"/>
                                    <stop offset="100%" stop-color="white" stop-opacity=".2"/>
                                </linearGradient>
                            </defs>
                            <g fill="none" stroke="url(#g1)" stroke-width="3">
                                <rect x="30" y="60" rx="14" ry="14" width="300" height="180" />
                                <path d="M60 110h240M60 140h180M60 170h210M60 200h120" />
                            </g>
                            <g transform="translate(260, 40)">
                                <circle cx="0" cy="0" r="18" fill="white" fill-opacity=".15"/>
                                <path d="M-8 0 L8 0M0 -8 L0 8" stroke="white" stroke-width="3" stroke-linecap="round" />
                            </g>
                            <g transform="translate(100, 230)" fill="white" fill-opacity=".9">
                                <rect x="-18" y="-6" width="36" height="12" rx="6"/>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>

            {{-- Countdown + barra de progreso (opcional; requiere ETA) --}}
            @if($etaIso)
                <div class="mt-6">
                    <div class="flex items-center justify-center gap-4 text-sm text-white/80" x-show="remainingMs > 0">
                        <div class="text-center">
                            <div class="text-2xl font-bold" x-text="dd"></div>
                            <div class="opacity-70">d</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold" x-text="hh"></div>
                            <div class="opacity-70">h</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold" x-text="mm"></div>
                            <div class="opacity-70">m</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold" x-text="ss"></div>
                            <div class="opacity-70">s</div>
                        </div>
                    </div>

                    <div class="mt-3 h-2 w-full overflow-hidden rounded-full bg-white/15">
                        <div class="h-full bg-white/70 transition-all" :style="`width:${progressPct}%`"></div>
                    </div>
                </div>
            @endif

            {{-- CTAs principales --}}
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

            {{-- Redes sociales con hover brand color --}}
            @if(!empty($socials))
                <div class="mt-8">
                    <ul class="flex flex-wrap items-center justify-center gap-3">
                        @foreach($socials as $s)
                            <li>
                                <a href="{{ $s['url'] }}" target="_blank" rel="noopener"
                                   class="inline-flex h-11 w-11 items-center justify-center rounded-full bg-white text-gray-900 shadow-md transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60"
                                   style="--social-color: {{ $s['color'] }};"
                                   onmouseover="this.style.backgroundColor='var(--social-color)'; this.style.color='#fff';"
                                   onmouseout="this.style.backgroundColor='white'; this.style.color='rgb(17,24,39)';"
                                   aria-label="{{ $s['label'] }}">
                                    <i class="{{ $s['icon_class'] }} text-lg"></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Footer microcopy --}}
            <div class="mt-8 border-t border-white/10 pt-6 text-center text-sm text-white/70">
                <p>
                    {{ $_brand['name'] ?? config('app.name') }}
                    @if(isset($_brand['slogan'])) &middot; {{ $_brand['slogan'] }} @endif
                    &middot; <span>{{ now()->format('Y') }}</span>
                </p>
            </div>
        </div>

        {{-- Mini footer --}}
        <div class="mt-6 text-center text-xs text-white/60">
            <p>¿Eres parte del equipo?
                <a href="{{ url('/admin') }}" class="underline hover:text-white">Ingresar al panel</a>
            </p>
        </div>
    </div>

    {{-- Alpine: countdown opcional (si hay ETA ISO) --}}
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('maintenanceCountdown', ({ target }) => ({
                target, // ISO string
                etaLocal: '',
                remainingMs: 0,
                dd: '0', hh: '00', mm: '00', ss: '00',
                progressPct: 0,
                startMs: Date.now(),
                init() {
                    if (!this.target) return;
                    const eta = new Date(this.target);
                    if (isNaN(eta)) return;

                    this.etaLocal = eta.toLocaleString();
                    const tick = () => {
                        const now = new Date();
                        this.remainingMs = Math.max(0, eta - now);
                        const total = Math.max(1, eta - this.startMs);
                        this.progressPct = Math.min(100, Math.round(100 - (this.remainingMs / total) * 100));

                        const secs = Math.floor(this.remainingMs / 1000);
                        const d = Math.floor(secs / 86400);
                        const h = Math.floor((secs % 86400) / 3600);
                        const m = Math.floor((secs % 3600) / 60);
                        const s = secs % 60;

                        this.dd = String(d);
                        this.hh = String(h).padStart(2, '0');
                        this.mm = String(m).padStart(2, '0');
                        this.ss = String(s).padStart(2, '0');

                        if (this.remainingMs > 0) {
                            requestAnimationFrame(tick);
                        } else {
                            this.progressPct = 100;
                        }
                    };
                    tick();
                }
            }))
        })
    </script>
</section>
