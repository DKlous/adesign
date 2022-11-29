<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" id="html">

<head>
    @include('head/html_head_components')
    <title>{{ 'Avigail Design' }}</title>
    <meta name="description" content="Grafisch Ontwerp, Fotografie, Fine Art">
</head>

<body class="body antialiased bg-gray-100 dark:bg-gray-900">
    <div class="containerHeader">
        @include('nav/navigation') {{-- Navigation with logo on the left side --}}

        <div class="container">
            <style scoped>
                .textwrapper {
                    justify-content: center;
                    align-items: flex-start;
                }
            </style>
            <div class="textwrapper">
                <div class="empty"></div>
                <h2 class="maintext">
                    Beeld is emotie en emotie helpt je om je boodschap over te brengen.
                    <br>Of dat nu voor de verkoop van een product is, of een dienst, het verbeelden van iets dat nog
                    niet bestaat of iemand die je dierbaar is, AvigailDesign is gespecialiseerd in het verbeelden van
                    jouw verhaal.
                    <br>In grafisch design, fotografie of fine art.
                </h2>
            </div>
        </div>

    </div>
</body>

</html>
