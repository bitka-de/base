@extends('layouts.app')

@section('content')
<!-- 
1. Above the Fold (sofort sichtbarer Bereich)

🔑 Features in diesem Beispiel:

Klarer Claim → groß, fett, kontrastreich
Unterzeile → Nutzenfokus statt Floskeln
Call-to-Action → auffällig, kontrastierend, mobil gut klickbar
Trust-Elemente → direkt sichtbar („Über 500 zufriedene Kunden“)
Hero-Bild → optisch ansprechend, rechts angeordnet (auf Desktop)
 -->

<section class="relative bg-gray-50">
  <div class="mx-auto max-w-7xl px-6 py-20 lg:grid lg:grid-cols-2 lg:items-center lg:gap-12">
    <!-- Textbereich -->
    <div class="space-y-6">
      <!-- Claim / Headline -->
      <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl">Mehr Kunden. Weniger Aufwand.</h1>

      <!-- Unterzeile -->
      <p class="text-lg text-gray-600">Wir entwickeln Webseiten, die nicht nur schön aussehen – sondern dein Geschäft wirklich voranbringen.</p>

      <!-- CTA + Trust-Elemente -->
      <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
        <a href="#kontakt" class="rounded-xl bg-indigo-600 px-6 py-3 font-semibold text-white shadow-lg transition hover:bg-indigo-700"> Jetzt starten </a>
        <span class="text-sm text-gray-500">✓ Über 500 zufriedene Kunden</span>
      </div>
    </div>

    <!-- Hero-Bild -->
    <div class="mt-10 lg:mt-0">
      <img src="https://placehold.co/600x400" alt="Hero Bild" class="w-full rounded-2xl shadow-lg" />
    </div>
  </div>
</section>

<!-- 
2. Problembeschreibung & Nutzenversprechen

🔑 Features in diesem Beispiel:
Problem direkt ansprechen („Kennst du dieses Problem?“) → Identifikation
Lösung prominent hervorheben in farblich abgesetztem Block
Bulletpoints mit Check-Icons → schnelle Scannbarkeit
Bild rechts → unterstützt visuell die Story
Weißraum & Struktur → Lesbarkeit, Klarheit
 -->

<section class="bg-white py-20">
  <div class="mx-auto grid max-w-7xl items-center gap-12 px-6 lg:grid-cols-2 lg:px-8">
    <!-- Problem & Lösung -->
    <div class="space-y-6">
      <!-- Problembeschreibung -->
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Kennst du dieses Problem?</h2>
      <p class="text-lg text-gray-600">Deine Website sieht zwar schön aus, bringt dir aber kaum Anfragen oder neue Kunden? Du investierst Zeit und Geld – doch der Erfolg bleibt aus.</p>

      <!-- Nutzenversprechen -->
      <div class="rounded-2xl bg-indigo-50 p-6 shadow-sm">
        <h3 class="text-xl font-semibold text-indigo-900">Die Lösung:</h3>
        <p class="mt-2 text-gray-700">Wir entwickeln Webseiten, die für dich arbeiten: optimiert für Sichtbarkeit, Vertrauen und mehr Anfragen von deinen Wunschkunden.</p>
      </div>

      <!-- Vorteile in Stichpunkten -->
      <ul class="mt-6 space-y-3">
        <li class="flex items-start gap-3">
          <span class="inline-flex h-6 w-6 items-center justify-center rounded-full bg-indigo-600 text-white"> ✓ </span>
          <span class="text-gray-700">Klarer Fokus auf deine Zielgruppe</span>
        </li>
        <li class="flex items-start gap-3">
          <span class="inline-flex h-6 w-6 items-center justify-center rounded-full bg-indigo-600 text-white"> ✓ </span>
          <span class="text-gray-700">Strategisches Design mit messbarem Erfolg</span>
        </li>
        <li class="flex items-start gap-3">
          <span class="inline-flex h-6 w-6 items-center justify-center rounded-full bg-indigo-600 text-white"> ✓ </span>
          <span class="text-gray-700">Mehr Sichtbarkeit & Vertrauen bei neuen Kunden</span>
        </li>
      </ul>
    </div>

    <!-- Visuelles Element -->
    <div>
      <img src="https://placehold.co/600x400" alt="Illustration Problem & Lösung" class="w-full rounded-2xl shadow-lg" />
    </div>
  </div>
</section>

<!-- 
3. Social Proof / Vertrauen

🔑 Features in diesem Beispiel:
Kundenstimmen (Testimonials) → persönlich + authentisch
Logos/Partner → Vertrauen durch externe Referenzen
Keyfacts (Zahlen, Daten, Fakten) → sofort erfassbar, stärkt Glaubwürdigkeit
Klares Layout (Grid) → mobil und Desktop gut lesbar
 -->

<section class="bg-gray-50 py-20">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <!-- Intro -->
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Warum uns Kunden vertrauen</h2>
      <p class="mt-4 text-lg text-gray-600">Über 500 erfolgreiche Projekte – echte Stimmen von Menschen, die wir begleiten durften.</p>
    </div>

    <!-- Testimonials Grid -->
    <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
      <div class="rounded-2xl bg-white p-6 shadow-md">
        <div class="flex items-center gap-3">
          <img src="https://placehold.co/48x48?text=S" alt="Avatar" class="h-12 w-12 rounded-full object-cover" />
          <div>
            <p class="font-semibold text-gray-900">Sarah M.</p>
            <p class="text-sm text-gray-500">Unternehmerin</p>
          </div>
        </div>
        <p class="mt-4 text-gray-700">„Seit dem Relaunch erhalte ich deutlich mehr Anfragen. Die Zusammenarbeit war unkompliziert und effektiv.“</p>
      </div>

      <div class="rounded-2xl bg-white p-6 shadow-md">
        <div class="flex items-center gap-3">
          <img src="https://placehold.co/48x48?text=T" alt="Avatar" class="h-12 w-12 rounded-full object-cover" />
          <div>
            <p class="font-semibold text-gray-900">Thomas K.</p>
            <p class="text-sm text-gray-500">Handwerksbetrieb</p>
          </div>
        </div>
        <p class="mt-4 text-gray-700">„Unsere neue Website bringt uns laufend Kundenanfragen. Genau so habe ich mir das vorgestellt.“</p>
      </div>

      <div class="rounded-2xl bg-white p-6 shadow-md">
        <div class="flex items-center gap-3">
          <img src="https://placehold.co/48x48?text=T" alt="Avatar" class="h-12 w-12 rounded-full object-cover" />
          <div>
            <p class="font-semibold text-gray-900">Lisa W.</p>
            <p class="text-sm text-gray-500">Coach</p>
          </div>
        </div>
        <p class="mt-4 text-gray-700">„Ich bekomme viel positives Feedback für meinen professionellen Auftritt – das stärkt mein Geschäft enorm.“</p>
      </div>
    </div>

    <!-- Logos / Trust Badges -->
    <div class="mt-16">
      <p class="text-center text-sm font-medium text-gray-500">Bekannt aus / Partner von</p>
      <div class="mt-6 flex justify-center gap-12 opacity-70">
        <img src="https://placehold.co/100x40" alt="Logo 1" class="h-10" />
        <img src="https://placehold.co/100x40" alt="Logo 2" class="h-10" />
        <img src="https://placehold.co/100x40" alt="Logo 3" class="h-10" />
        <img src="https://placehold.co/100x40" alt="Logo 4" class="h-10" />
      </div>
    </div>

    <!-- Keyfacts -->
    <div class="mt-16 grid gap-8 text-center sm:grid-cols-3">
      <div>
        <p class="text-4xl font-extrabold text-indigo-600">500+</p>
        <p class="mt-2 text-gray-600">erfolgreiche Projekte</p>
      </div>
      <div>
        <p class="text-4xl font-extrabold text-indigo-600">20 Jahre</p>
        <p class="mt-2 text-gray-600">Erfahrung</p>
      </div>
      <div>
        <p class="text-4xl font-extrabold text-indigo-600">98 %</p>
        <p class="mt-2 text-gray-600">zufriedene Kunden</p>
      </div>
    </div>
  </div>
</section>

<!-- 
4. Leistungen / Produkte

🔑 Features in diesem Beispiel:
Grid mit Karten → mobil 1-spaltig, Desktop 2–3-spaltig
Icons in farbigen Runden Boxen → sofort erfassbar
Klare Titel & kurze Texte → leicht scanbar
CTA-Link pro Card → Nutzer kann tiefer einsteigen
Hover-Effekt → mehr Interaktivität, modernes Look & Feel
 -->

<section class="bg-white py-20">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <!-- Intro -->
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Unsere Leistungen</h2>
      <p class="mt-4 text-lg text-gray-600">Ob moderne Website, performanter Online-Shop oder individuelle Programmierung – wir bieten dir die passende Lösung.</p>
    </div>

    <!-- Cards -->
    <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
      <!-- Card 1 -->
      <div class="rounded-2xl border border-gray-100 bg-white p-8 shadow-sm transition hover:shadow-lg">
        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-600 text-white">
          <!-- Icon Beispiel: 🌐 -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4c4.418 0 8 3.582 8 8s-3.582 8-8 8-8-3.582-8-8 3.582-8 8-8z" />
          </svg>
        </div>
        <h3 class="mt-6 text-xl font-semibold text-gray-900">Webseiten</h3>
        <p class="mt-3 text-gray-600">Individuell gestaltete Webseiten, die Vertrauen aufbauen und deine Zielgruppe überzeugen.</p>
        <a href="#kontakt" class="mt-6 inline-block font-semibold text-indigo-600 hover:underline"> Mehr erfahren → </a>
      </div>

      <!-- Card 2 -->
      <div class="rounded-2xl border border-gray-100 bg-white p-8 shadow-sm transition hover:shadow-lg">
        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-600 text-white">
          <!-- Icon Beispiel: 🛒 -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.5 7h13L17 13M7 13h10" />
          </svg>
        </div>
        <h3 class="mt-6 text-xl font-semibold text-gray-900">Online-Shops</h3>
        <p class="mt-3 text-gray-600">Performante E-Commerce-Lösungen, die verkaufen – von der Technik bis zur Conversion-Optimierung.</p>
        <a href="#kontakt" class="mt-6 inline-block font-semibold text-indigo-600 hover:underline"> Mehr erfahren → </a>
      </div>

      <!-- Card 3 -->
      <div class="rounded-2xl border border-gray-100 bg-white p-8 shadow-sm transition hover:shadow-lg">
        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-600 text-white">
          <!-- Icon Beispiel: ⚙️ -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2m6 4v-2a2 2 0 00-2-2h-2l-2-2m-4-4h-4l-2 2H6a2 2 0 00-2 2v2" />
          </svg>
        </div>
        <h3 class="mt-6 text-xl font-semibold text-gray-900">Individuelle Lösungen</h3>
        <p class="mt-3 text-gray-600">Maßgeschneiderte Webanwendungen und Integrationen, die exakt zu deinem Business passen.</p>
        <a href="#kontakt" class="mt-6 inline-block font-semibold text-indigo-600 hover:underline"> Mehr erfahren → </a>
      </div>
    </div>
  </div>
</section>

<!-- 
5. Detaillierte Nutzenargumentation

🔑 Features in diesem Beispiel:
3-Step Prozess → sofort klar, wie Zusammenarbeit läuft
Nummerierte Steps → visuelle Führung, simpel & linear
USP-Boxen mit Zahlen → harte Fakten, die Vertrauen aufbauen
Weißraum & Klarheit → hohe Lesbarkeit, mobil & Desktop stark
 -->

<section class="bg-gray-50 py-20">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <!-- Intro -->
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">So läuft unsere Zusammenarbeit ab</h2>
      <p class="mt-4 text-lg text-gray-600">Klar strukturiert, transparent und auf Augenhöhe – damit du jederzeit weißt, wo wir stehen.</p>
    </div>

    <!-- Schritte -->
    <div class="mt-16 grid gap-12 lg:grid-cols-3">
      <!-- Step 1 -->
      <div class="relative rounded-2xl bg-white p-8 shadow-sm">
        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-indigo-600 font-bold text-white">1</div>
        <h3 class="mt-6 text-xl font-semibold text-gray-900">Analyse & Beratung</h3>
        <p class="mt-3 text-gray-600">Wir hören zu, analysieren dein Business und erarbeiten mit dir die beste Strategie für deine Website.</p>
      </div>

      <!-- Step 2 -->
      <div class="relative rounded-2xl bg-white p-8 shadow-sm">
        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-indigo-600 font-bold text-white">2</div>
        <h3 class="mt-6 text-xl font-semibold text-gray-900">Design & Umsetzung</h3>
        <p class="mt-3 text-gray-600">Dein Auftritt wird modern, nutzerfreundlich und auf Conversions optimiert umgesetzt – 100 % individuell.</p>
      </div>

      <!-- Step 3 -->
      <div class="relative rounded-2xl bg-white p-8 shadow-sm">
        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-indigo-600 font-bold text-white">3</div>
        <h3 class="mt-6 text-xl font-semibold text-gray-900">Launch & Betreuung</h3>
        <p class="mt-3 text-gray-600">Nach dem Go-Live lassen wir dich nicht allein – wir betreuen, optimieren und entwickeln weiter.</p>
      </div>
    </div>

    <!-- USP Boxen -->
    <div class="mt-20 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
      <div class="rounded-xl bg-white p-6 text-center shadow-sm">
        <p class="text-2xl font-extrabold text-indigo-600">20+</p>
        <p class="mt-2 text-gray-700">Jahre Erfahrung</p>
      </div>
      <div class="rounded-xl bg-white p-6 text-center shadow-sm">
        <p class="text-2xl font-extrabold text-indigo-600">500+</p>
        <p class="mt-2 text-gray-700">Projekte umgesetzt</p>
      </div>
      <div class="rounded-xl bg-white p-6 text-center shadow-sm">
        <p class="text-2xl font-extrabold text-indigo-600">98 %</p>
        <p class="mt-2 text-gray-700">Kundenzufriedenheit</p>
      </div>
      <div class="rounded-xl bg-white p-6 text-center shadow-sm">
        <p class="text-2xl font-extrabold text-indigo-600">100 %</p>
        <p class="mt-2 text-gray-700">individuelle Lösungen</p>
      </div>
    </div>
  </div>
</section>

<!-- 
6. Über mich / Über uns

🔑 Features in diesem Beispiel:
Portrait / Bild → persönlicher Bezug, Vertrauen
Einleitung in Ich-Form → Nähe & Authentizität
Werte-Karten → Mission sichtbar machen
CTA → direkt zu Kontakt/Kennenlernen
 -->

<section class="bg-white py-20">
  <div class="mx-auto grid max-w-7xl items-center gap-12 px-6 lg:grid-cols-2 lg:px-8">
    <!-- Bild -->
    <div class="relative">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgL_YRQwc7uiLiA0zNWFZodz8DB9rZ_KNJ15EAg3YYaRCbVDosv6VVPiye7EovSpj4_aE&usqp=CAU" alt="Portrait" class="w-full rounded-2xl object-cover shadow-lg" />
      <!-- kleiner Akzent-Frame -->
      <div class="absolute -bottom-6 -left-6 h-48 w-48 rounded-2xl border-4 border-indigo-600 opacity-20"></div>
    </div>

    <!-- Content -->
    <div class="space-y-6">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Wer hinter [Unternehmensname] steckt</h2>
      <p class="text-lg text-gray-600">Hallo, ich bin <span class="font-semibold text-gray-900">Jan Behrens</span> – Webentwickler mit über 20 Jahren Erfahrung. Ich helfe kleinen und mittleren Unternehmen dabei, mit einer klaren Online-Präsenz sichtbar zu werden und echte Kunden zu gewinnen.</p>

      <!-- Werte / Mission -->
      <div class="grid gap-6 sm:grid-cols-2">
        <div class="rounded-xl bg-gray-50 p-5 shadow-sm">
          <h3 class="text-lg font-semibold text-indigo-700">Nähe & Vertrauen</h3>
          <p class="mt-2 text-sm text-gray-600">Zusammenarbeit auf Augenhöhe – mit ehrlicher Beratung statt leeren Versprechen.</p>
        </div>
        <div class="rounded-xl bg-gray-50 p-5 shadow-sm">
          <h3 class="text-lg font-semibold text-indigo-700">Qualität & Klarheit</h3>
          <p class="mt-2 text-sm text-gray-600">Jede Website ist individuell, nutzerfreundlich und nachhaltig gedacht.</p>
        </div>
      </div>

      <!-- Call-to-Action -->
      <div>
        <a href="#kontakt" class="inline-block rounded-xl bg-indigo-600 px-6 py-3 font-semibold text-white shadow transition hover:bg-indigo-700"> Lass uns kennenlernen </a>
      </div>
    </div>
  </div>
</section>

<!-- 
7. Call-to-Action (wiederholen!)

🔑 Features in diesem Beispiel:
Full-Width Farbblock (Indigo) → hebt sich vom restlichen Content ab
Kurze Headline + Unterzeile → klarer Nutzen + Handlungsaufforderung
2 Buttons → Haupt-CTA (weiß, auffällig) + Sekundär-CTA (transparent mit Border)
Zentriert, mobil optimiert → Buttons stapeln sich auf Mobile, nebeneinander auf Desktop
 -->

<section class="relative bg-indigo-600 py-16">
  <div class="mx-auto max-w-4xl px-6 text-center">
    <!-- Headline -->
    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Bereit, den nächsten Schritt zu gehen?</h2>
    <p class="mt-4 text-lg text-indigo-100">Lass uns gemeinsam deine Website zum Kundenmagneten machen – starte jetzt mit einem unverbindlichen Gespräch.</p>

    <!-- CTA Buttons -->
    <div class="mt-8 flex flex-col justify-center gap-4 sm:flex-row">
      <a href="#kontakt" class="rounded-xl bg-white px-6 py-3 font-semibold text-indigo-600 shadow transition hover:bg-gray-100"> Jetzt Termin sichern </a>
      <a href="#leistungen" class="rounded-xl border border-white px-6 py-3 font-semibold text-white transition hover:bg-indigo-500"> Mehr erfahren </a>
    </div>
  </div>
</section>

<!-- 
8. FAQ-Sektion

🔑 Features in diesem Beispiel:
Accordion mit <details>/<summary> → keine JS nötig, super simpel
Klarer Aufbau (Frage fett, Antwort normal) → leicht lesbar
Responsive & minimalistisch → passt sich an jedes Layout an
Drehender Pfeil (▼) → visuelles Feedback beim Aufklappen
 -->

<section class="bg-white py-20">
  <div class="mx-auto max-w-4xl px-6">
    <!-- Intro -->
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Häufig gestellte Fragen</h2>
      <p class="mt-4 text-lg text-gray-600">Hier findest du Antworten auf die Fragen, die uns am meisten gestellt werden.</p>
    </div>

    <!-- Accordion -->
    <div class="mt-12 space-y-4">
      <!-- Item 1 -->
      <details class="group rounded-xl border border-gray-200 bg-gray-50 p-6">
        <summary class="flex cursor-pointer items-center justify-between text-lg font-semibold text-gray-900">
          Wie lange dauert es, bis meine neue Website online ist?
          <span class="ml-4 shrink-0 transition-transform group-open:rotate-180"> ▼ </span>
        </summary>
        <p class="mt-4 text-gray-600">In der Regel zwischen 4 und 8 Wochen – abhängig von Umfang, Designwünschen und deiner Zuarbeit.</p>
      </details>

      <!-- Item 2 -->
      <details class="group rounded-xl border border-gray-200 bg-gray-50 p-6">
        <summary class="flex cursor-pointer items-center justify-between text-lg font-semibold text-gray-900">
          Was kostet eine Website bei euch?
          <span class="ml-4 shrink-0 transition-transform group-open:rotate-180"> ▼ </span>
        </summary>
        <p class="mt-4 text-gray-600">Das hängt vom Projekt ab. Kleine Webseiten starten bei ca. 2.000 €, komplexere Shops oder individuelle Lösungen entsprechend höher. Wir erstellen dir ein klares, transparentes Angebot.</p>
      </details>

      <!-- Item 3 -->
      <details class="group rounded-xl border border-gray-200 bg-gray-50 p-6">
        <summary class="flex cursor-pointer items-center justify-between text-lg font-semibold text-gray-900">
          Kann ich meine Website später selbst pflegen?
          <span class="ml-4 shrink-0 transition-transform group-open:rotate-180"> ▼ </span>
        </summary>
        <p class="mt-4 text-gray-600">Ja! Wir setzen auf nutzerfreundliche Systeme wie WordPress oder individuelle Lösungen, die du ohne Programmierkenntnisse bedienen kannst.</p>
      </details>

      <!-- Item 4 -->
      <details class="group rounded-xl border border-gray-200 bg-gray-50 p-6">
        <summary class="flex cursor-pointer items-center justify-between text-lg font-semibold text-gray-900">
          Bietet ihr auch laufende Betreuung an?
          <span class="ml-4 shrink-0 transition-transform group-open:rotate-180"> ▼ </span>
        </summary>
        <p class="mt-4 text-gray-600">Absolut – auf Wunsch übernehmen wir Updates, Backups und Optimierungen, damit du dich voll auf dein Business konzentrieren kannst.</p>
      </details>
    </div>
  </div>
</section>

<!-- 
9. Kontakt & Footer

🔑 Features:
Kontaktformular
- Mobil und Desktop optimiert (Grid-Layout)
- Fokus-Ring für Inputs → bessere UX
- Großes, auffälliges Submit-Button
Footer
- Drei Spalten: Info, Navigation, Social → klare Struktur
- Dezente Farben → Fokus bleibt auf Content
- Responsive → unter Mobile wird alles gestapelt
- Abschlusszeile mit Copyright → professioneller Eindruck
 -->

<section class="bg-gray-50 py-20">
  <div class="mx-auto max-w-4xl px-6">
    <!-- Kontakt-Intro -->
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Lass uns loslegen</h2>
      <p class="mt-4 text-lg text-gray-600">Schick uns eine Nachricht – wir melden uns innerhalb von 24 Stunden zurück.</p>
    </div>

    <!-- Kontaktformular -->
    <form action="#" method="POST" class="mt-12 grid grid-cols-1 gap-6 sm:grid-cols-2">
      <input type="text" name="name" placeholder="Dein Name" class="col-span-1 rounded-lg border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-indigo-500 focus:outline-none sm:col-span-2" required />
      <input type="email" name="email" placeholder="Deine E-Mail" class="rounded-lg border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-indigo-500 focus:outline-none" required />
      <input type="text" name="betreff" placeholder="Betreff" class="rounded-lg border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-indigo-500 focus:outline-none sm:col-span-2" required />
      <textarea name="nachricht" placeholder="Deine Nachricht" rows="5" class="rounded-lg border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-indigo-500 focus:outline-none sm:col-span-2" required></textarea>
      <button type="submit" class="rounded-lg bg-indigo-600 px-6 py-3 font-semibold text-white shadow transition hover:bg-indigo-500 sm:col-span-2">Nachricht senden</button>
    </form>
  </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 text-gray-300">
  <div class="mx-auto grid max-w-6xl grid-cols-1 gap-8 px-6 py-12 sm:grid-cols-3">
    <!-- Firmeninfo -->
    <div>
      <h3 class="mb-4 text-lg font-bold text-white">MeinUnternehmen</h3>
      <p class="text-gray-400">Wir erstellen Websites, die verkaufen. Adresse, Stadt, PLZ</p>
      <p class="mt-2 text-gray-400">Telefon: 0123 456789</p>
      <p class="text-gray-400">E-Mail: info@meinefirma.de</p>
    </div>

    <!-- Navigation -->
    <div>
      <h3 class="mb-4 text-lg font-bold text-white">Schnellzugriff</h3>
      <ul class="space-y-2">
        <li><a href="#leistungen" class="transition hover:text-white">Leistungen</a></li>
        <li><a href="#projekte" class="transition hover:text-white">Projekte</a></li>
        <li><a href="#team" class="transition hover:text-white">Über uns</a></li>
        <li><a href="#kontakt" class="transition hover:text-white">Kontakt</a></li>
      </ul>
    </div>

    <!-- Social Media -->
    <div>
      <h3 class="mb-4 text-lg font-bold text-white">Folge uns</h3>
      <div class="flex space-x-4">
        <a href="#" class="transition hover:text-white">Facebook</a>
        <a href="#" class="transition hover:text-white">Instagram</a>
        <a href="#" class="transition hover:text-white">LinkedIn</a>
        <a href="#" class="transition hover:text-white">X</a>
      </div>
    </div>
  </div>

  <div class="border-t border-gray-800 py-6 text-center text-sm text-gray-500">© 2025 MeinUnternehmen. Alle Rechte vorbehalten.</div>
</footer>

@endsection
