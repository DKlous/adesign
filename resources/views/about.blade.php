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

                .aboutImage {
                    border-top-left-radius: 10px;
                    margin-top: 24px;
                    max-width: 300px;
                    max-height: 300px;
                }
            </style>
            <div class="textwrapper">
                <div class="empty">
                    <img src="{{ asset('img/about_me/photography57870578_10216569341100264_1334853793824636928_n-1.jpg')}}"
                        alt="demo image" class="aboutImage">
                </div>
                <h2 class="maintext">Al ruim 30 jaar in het vak en dus ongeveer alles al eens meegemaakt, maakt dat ik
                    snel zie wat nodig is om je boodschap te verbeelden. Als een zeer ervaren grafisch ontwerper luister
                    ik naar uw wensen, denk met u mee, en zoek naar het beste mogelijkheden voor u, vanaf de eerste
                    schets van een eerste concept tot en met het eindproduct.
                    Ik ben creatief met oog voor detail. U bent verzekerd van een vriendelijk, persoonlijk en deskundig
                    advies! Uw bedrijf krijgt een boost en wordt voorzien van een duidelijke beeldende identiteit. De
                    juiste kneepjes van het grafische vak én de liefde voor beeld en illustraties, maken dat er weinig
                    geschakeld hoeft te worden met andere leveranciers. Ik vertaal uw boodschap in beeld en verpak dit
                    met de juiste grafische ondersteuning.
                    Handig om te weten dat ik in 3 talen kan werken: Nederlands, Engels en Hebreeuws. Veel middelen
                    moeten omgezet worden in een andere taal en daar draai ik mijn hand niet voor om!
                </h2>
            </div>
        </div>

    </div>
</body>

</html>
