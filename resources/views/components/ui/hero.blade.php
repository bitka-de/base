@props([
    'headline' => 'Profi Webseite für Handwerker ab nur 299 €*',
    'subline' =>
        'Ihre professionelle Webseite zum Festpreis – speziell für Handwerker, damit Sie online neue Kunden gewinnen und Ihr Geschäft stärken.',
    'ctaText' => 'Jetzt starten',
    'ctaLink' => '#kontakt',
    'trustText' => '✓ Über 500 zufriedene Kunden',
    'imageUrl' => asset('img/hero/craftman.png'),
    'imageAlt' => 'Hero Bild',
])

<div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white text-center md:pt-32 py-12 min-h-[70vh] clip1 flex">
    <div class="boxed h-auto self-stretch grid grid-cols-1 md:grid-cols-2">
        <section class="flex flex-col justify-center items-start p-8 text-left">


            <h1 class="text-4xl font-bold mb-4 text-balance">{{ $headline }}</h1>
            <p class="text-lg mb-6 text-balance">{{ $subline }}</p>

            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-start mb-6 gap-3">
                <div class="flex -space-x-3">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Avatar 1"
                        class="w-10 h-10 rounded-full border-2 border-white shadow">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Avatar 2"
                        class="w-10 h-10 rounded-full border-2 border-white shadow">
                    <img src="https://randomuser.me/api/portraits/men/65.jpg" alt="Avatar 3"
                        class="w-10 h-10 rounded-full border-2 border-white shadow">
                    <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Avatar 4"
                        class="w-10 h-10 rounded-full border-2 border-white shadow">
                </div>
                <span class="sm:ml-4 text-gray-200 text-base font-medium text-center sm:text-left">
                    <span class="font-bold text-white">{{ $trustText }}</span>
                </span>
            </div>
            <div class="flex gap-4">
                <a href="{{ $ctaLink }}"
                    class="inline-block bg-blue-600 text-white font-semibold px-6 py-3 rounded shadow hover:bg-blue-600 transition border-b-2 border-blue-500">
                    {{ $ctaText }}
                </a>
                <a href="#leistungen"
                    class="inline-block text-white font-semibold px-6 py-3 rounded shadow hover:bg-white/30 transition backdrop-blur-sm border-b border-white/30">
                    Mehr erfahren
                </a>
            </div>
            <span class="text-sm text-gray-300 mt-4">
                * zzgl. 29 €/mtl für Support und Hosting
            </span>

        </section>

        <section class="flex justify-center items-center p-8 sm:h-96 max-w-[85vw] mx-auto sm:mt-48">
            <img src="{{ asset('img/hero/craftman.png') }}" alt="Hero Image" class="w-full h-auto max-w-lg">
        </section>
    </div>
</div>
