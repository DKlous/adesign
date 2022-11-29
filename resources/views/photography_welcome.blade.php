<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" id="html">

<head>
    @include('head/html_head_components')
    <title>{{ 'Avigail Design' }}</title>
    <meta name="description" content="Grafisch Ontwerp, Fotografie, Fine Art">
</head>

<body class="body antialiased bg-gray-100 dark:bg-gray-900">
    <div class="containerHeader">
        @include('nav/navigation') {{-- Navigation with logo --}}

        <div class="container">
            <style scoped>
                .textwrapper {
                    display: flex;
                    justify-content: center;
                    align-items: flex-start;
                    flex-direction: row;
                }
            </style>
            <div class="textwrapper">
                <nav class="submenu">
                    <ul>
                        <li>
                            <a href="/photography" <?php if ($_SERVER['REQUEST_URI'] == "/photography" || $_SERVER['REQUEST_URI'] == "/photography/") { echo 'class="active"'; }?>>FOTOGRAFIE</a>
                        </li>
                        <li>
                            <a href="/photography/nature" <?php if ($_SERVER['REQUEST_URI'] == "/photography/nature") { echo 'class="active"'; }?>>NATUUR</a>
                        </li>
                        <li>
                            <a href="/photography/portraits" <?php if ($_SERVER['REQUEST_URI'] == "/photography/portraits") { echo 'class="active"'; }?>>PORTRETTEN</a>
                        </li>
                        <li>
                            <a href="/photography/products" <?php if ($_SERVER['REQUEST_URI'] == "/photography/products") { echo 'class="active"'; }?>>PRODUCTEN</a>
                        </li>
                        <li>
                            <a href="/photography/diverse" <?php if ($_SERVER['REQUEST_URI'] == "/photography/diverse") { echo 'class="active"'; }?>>DIVERSEN</a>
                        </li>
                    </ul>
                </nav>
                <h2 class="maintext">
                    Een beeld zegt meer dan 1000 woorden! En beelden zijn onmisbaar in het overbrengen van je boodschap. Mijn foto’s worden vaak gebruikt in het grafische werk dat ik doe voor klanten, maar ook losse fotografie-opdrachten worden aan mij gevraagd. Ik fotografeer het liefst in de natuur, maak portretten of schiet nét die ene plaat die nodig is van een product om te gebruiken in een uiting van je bedrijf. Heb jij nou zo’n uitdaging, neem gerust contact op en wellicht kan ik je helpen.
                </h2>
            </div>
        </div>
    </div>
</body>

</html>
