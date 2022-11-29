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
                <h2 class="maintext">Wil je meer informatie of heb je vragen? Neem dan gerust contact met mij op.<br>
                    tel. nr. <a class="contactanchor" href="tel:+31626550415">06-26550415</a> of email: <a
                        class="contactanchor" href="mailto:info@avigaildesign.nl"
                        title="info@avigaildesign.nl">info@avigaildesign.nl</a>
                    Contact opnemen kan ook makkelijk en snel via het onderstaande contactformulier.
                    <br><br>
                    <form action="MAILTO:info@avigaildesign.nl" method="post" enctype="text/plain"
                        onsubmit="concat_form_values()" class="contactform">
                        Naam*<br>
                        <input required id="name" type="text">
                        E-mail adres*<br>
                        <input required id="email" type="text">
                        Opmerkingen*<br>
                        <textarea required id="comment" type="text" size="50" class="comment-field"></textarea>
                        <input id="aggregate" type="hidden" name=" ">
                        <input type="submit" value="Verstuur">
                        <input type="reset" value="Resetten">
                    </form>
                    <script>
                        function concat_form_values() {
                            document.getElementById("aggregate").value = '============================\n' +
                                document.getElementById("name").value + '\n' +
                                document.getElementById("email").value + '\n' +
                                document.getElementById("comment").value
                        }
                    </script>
                </h2>
            </div>
        </div>

    </div>
</body>

</html>
