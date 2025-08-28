<!--
2. Problembeschreibung & Nutzenversprechen

🔑 Features in diesem Beispiel:
Problem direkt ansprechen („Kennst du dieses Problem?“) → Identifikation
Lösung prominent hervorheben in farblich abgesetztem Block
Bulletpoints mit Check-Icons → schnelle Scannbarkeit
Bild rechts → unterstützt visuell die Story
Weißraum & Struktur → Lesbarkeit, Klarheit
 -->

<section class="py-20">
    <div class="boxed grid items-center gap-12 px-6 lg:grid-cols-2 lg:px-8">
        <!-- Problem & Lösung -->
        <div class="space-y-6">
            <!-- Problembeschreibung -->
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Kennst du dieses Problem?</h2>
            <p class="text-lg text-gray-600">Deine Website sieht zwar schön aus, bringt dir aber kaum Anfragen oder neue
                Kunden? Du investierst Zeit und Geld – doch der Erfolg bleibt aus.</p>

            <!-- Nutzenversprechen -->
            <div class="rounded-2xl bg-indigo-50 p-6 shadow-sm">
                <h3 class="text-xl font-semibold text-indigo-900">Die Lösung:</h3>
                <p class="mt-2 text-gray-700">Wir entwickeln Webseiten, die für dich arbeiten: optimiert für
                    Sichtbarkeit, Vertrauen und mehr Anfragen von deinen Wunschkunden.</p>
            </div>

            <!-- Vorteile in Stichpunkten -->
            <ul class="mt-6 space-y-3">
                <li class="flex items-start gap-3">
                    <span class="inline-flex h-6 w-6 items-center justify-center rounded-full bg-indigo-600 text-white">
                        ✓ </span>
                    <span class="text-gray-700">Klarer Fokus auf deine Zielgruppe</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="inline-flex h-6 w-6 items-center justify-center rounded-full bg-indigo-600 text-white">
                        ✓ </span>
                    <span class="text-gray-700">Strategisches Design mit messbarem Erfolg</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="inline-flex h-6 w-6 items-center justify-center rounded-full bg-indigo-600 text-white">
                        ✓ </span>
                    <span class="text-gray-700">Mehr Sichtbarkeit & Vertrauen bei neuen Kunden</span>
                </li>
            </ul>
        </div>

        <!-- Visuelles Element -->
        <div>
            <img src="https://placehold.co/600x400" alt="Illustration Problem & Lösung"
                class="w-full rounded-2xl shadow-lg" />
        </div>
    </div>
</section>
