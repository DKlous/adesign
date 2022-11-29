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
                    display: flex;
                    justify-content: center;
                    align-items: flex-start;
                    flex-direction: row;
                }
            </style>
            <div class="textwrapper">
                <div class="empty"></div>
                <h2 class="maintext">
                    <div class="portfolio">
                        <h2>Portfolio</h2>
                        <div class="portfoliolink">
                            <a href="/graphic_design">
                                <img src="{{ asset('img/portfolio/graphic_design.png') }}" alt="demo image">
                                <!-- Grafisch Ontwerp -->
                            </a>
                        </div>
                        <div class="portfoliolink">
                            <a href="/photography">
                                <img src="{{ asset('img/portfolio/photography.png') }}" alt="demo image">
                                <!-- Fotografie -->
                            </a>
                        </div>
                        <div class="portfoliolink">
                            <a href="/fine_art">
                                <img src="{{ asset('img/portfolio/fine_art.png') }}" alt="demo image">
                                <!-- Fine Art -->
                            </a>
                        </div>
                    </div>
                </h2>
            </div>
        </div>

    </div>
</body>

</html>
