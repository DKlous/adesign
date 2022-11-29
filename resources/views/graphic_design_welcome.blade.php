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
                            <a href="/graphic_design" <?php if ($_SERVER['REQUEST_URI'] == '/graphic_design' || $_SERVER['REQUEST_URI'] == '/graphic_design/') {
                                echo 'class="active"';
                            } ?>>GRAFISCH ONTWERP</a>
                        </li>
                        <li>
                            <a href="/graphic_design/projects" <?php if ($_SERVER['REQUEST_URI'] == '/graphic_design/projects') {
                                echo 'class="active"';
                            } ?>>PROJECTEN</a>
                        </li>
                        <li>
                            <a href="/graphic_design/logos_and_corporate_identity" <?php if ($_SERVER['REQUEST_URI'] == '/graphic_design/logos_and_corporate_identity') {
                                echo 'class="active"';
                            } ?>>LOGO'S EN
                                HUISSTIJL</a>
                        </li>
                        <li>
                            <a href="/graphic_design/folders_and_flyers" <?php if ($_SERVER['REQUEST_URI'] == '/graphic_design/folders_and_flyers') {
                                echo 'class="active"';
                            } ?>>FOLDERS/FLYERS</a>
                        </li>
                        <li>
                            <a href="/graphic_design/magazines_and_brochures"
                                <?php if ($_SERVER['REQUEST_URI'] == '/graphic_design/magazines_and_brochures') {
                                    echo 'class="active"';
                                } ?>>TIJDSCHRIFTEN/BROCHURES</a>
                        </li>
                        <li>
                            <a href="/graphic_design/packaging" <?php if ($_SERVER['REQUEST_URI'] == '/graphic_design/packaging') {
                                echo 'class="active"';
                            } ?>>VERPAKKINGEN</a>
                        </li>
                        <li>
                            <a href="/graphic_design/illustrations" <?php if ($_SERVER['REQUEST_URI'] == '/graphic_design/illustrations') {
                                echo 'class="active"';
                            } ?>>ILLUSTRATIES</a>
                        </li>
                        <li>
                            <a href="/graphic_design/diverse" <?php if ($_SERVER['REQUEST_URI'] == '/graphic_design/diverse') {
                                echo 'class="active"';
                            } ?>>DIVERSE</a>
                        </li>
                    </ul>
                </nav>
                <h2 class="maintext">
                    Als grafisch ontwerper/ DTP-er vertaal ik uw boodschap in een ontwerp. En dat kan in vele vormen. Zo ben ik gespecialiseerd in tijdschriften en huisstijlen en het consequent doorvoeren ervan in allerlei middelen die variëren van brochures en folder, tot banners en exposities. Niet alleen grafisch sterk, maar door de combinatie van fotografie of fine-art, bent u verzekerd van een ontwerpt voorzien van de juiste beelden. Scroll maar eens door de gallery voor een greep uit mijn veelzijdige werk en laat je inspireren. Neem gerust contact met me op voor een offerte of een kennismaking.
                </h2>
            </div>
        </div>
    </div>
</body>

</html>
