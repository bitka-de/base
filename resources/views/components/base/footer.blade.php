<footer class="bg-stone-800 text-white py-4" role="contentinfo">
    <div class="container mx-auto text-xs flex flex-col md:flex-row justify-between items-center gap-2">
        
        <div class="text-white/60">
            <span aria-label="Copyright">&copy;</span> {{ date('Y') }} {{ config('app.name', 'BitBase') }}. Alle Rechte vorbehalten.
        </div>

        <nav aria-label="Footer">
            <ul class="flex md:flex-row space-x-4 space-y-2">
                <li>
                    <a href="/privacy" class="hover:underline focus:outline-none focus:ring-2 focus:ring-white" tabindex="0">
                        Datenschutz
                    </a>
                </li>
                <li>
                    <a href="/impressum" class="hover:underline focus:outline-none focus:ring-2 focus:ring-white" tabindex="0">
                        Impressum
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</footer>