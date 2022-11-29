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
                    <div class="pagecontainer">
                        <div class="gallery scrollbar" id="style-1">
                            <div class="force-overflow"></div>

                            <div class="rows" id="rows">
                                <?php
                                $row_length = 4;
                                $amount_of_rows = ceil(count($active_pictures) / $row_length);
                                
                                for ($i = 0; $i <= $amount_of_rows * 4; $i++) {
                                    $column = $i + 1;
                                    $row = (int) ($column / $row_length + 1);
                                    $row_and_column = 'r' . $row . 'c' . $column;
                                    if ($i >= count($active_pictures) && $i % $row_length == 0) {
                                        echo '</div>';
                                    }
                                    if ($i < count($active_pictures)) {
                                        if ($i % $row_length == 0 && $i == 0) {
                                            echo "<div class='row16'>";
                                            } elseif ($i % $row_length == 0) {
                                                echo "</div><div class='row16'>";
                                                }
                                            }
                                            if ($i < count($active_pictures)) {
                                                $image = "img/gallery_images/" . $active_pictures[$i]->path;
                                                ?>
                                <div class="box gallerybox16 <?= $row_and_column ?>">
                                    <img class="galleryItem" draggable="false" src={{ asset($image) }}
                                        alt="gallery_image" onclick="showImgOnClick(this);" data-id="<?= $i ?>"
                                        data-src={{ asset($image) }}>
                                </div>
                                <?php
                                    } else {
                                        echo "<div class='box gallerybox16 $row_and_column'></div>"; 
                                    }
                                    if ($i >= count($active_pictures)) {
                                        echo '';
                                    }
                                }
                                ?>
                                <script>
                                    function showImgOnClick(showImgOnClick) {
                                        let expandImg = document.getElementById("expandedImg");
                                        expandImg.setAttribute('src', showImgOnClick.src);
                                        expandImg.setAttribute('data-id', showImgOnClick.getAttribute('data-id'));
                                        expandImg.setAttribute('alt', 'gallery_image');
                                        expandImg.parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
                                            "block";
                                    }

                                    function next() {
                                        const expandImg = document.getElementById("expandedImg");
                                        const imgs = document.querySelectorAll(".galleryItem");
                                        const element = document.getElementById("expandedImg");
                                        for (i = 0; i < imgs.length; i++) {
                                            var maxId = i;
                                        }
                                        if (element.getAttribute('data-id') == maxId) {
                                            let nextImg = document.querySelectorAll('[data-id="0"]');
                                            expandImg.setAttribute('src', imgs[0].src);
                                            expandImg.setAttribute('data-id', nextImg[0].getAttribute('data-id'));
                                        } else if (element.getAttribute('data-id') != maxId) {
                                            let nextDataId = parseInt((expandImg.getAttribute('data-id'))) + 1;
                                            let stringBuilderSelectDataId = "[data-id=\"" + nextDataId + "\"]";
                                            let nextImg = document.querySelectorAll(stringBuilderSelectDataId);
                                            expandImg.setAttribute('src', imgs[nextDataId].src);
                                            expandImg.setAttribute('data-id', nextImg[0].getAttribute('data-id'));
                                        }
                                    }

                                    function prev() {
                                        const expandImg = document.getElementById("expandedImg");
                                        const imgs = document.querySelectorAll(".galleryItem");
                                        const element = document.getElementById("expandedImg");
                                        if (element.getAttribute('data-id') == 0) {
                                            let prevImg = document.querySelectorAll('[data-id="0"]');
                                            for (i = 0; i < imgs.length; i++) {
                                                var maxId = i;
                                            }
                                            expandImg.setAttribute('src', imgs[maxId].src);
                                            expandImg.setAttribute('data-id', imgs[maxId].getAttribute('data-id'));
                                        } else if (element.getAttribute('data-id') != 0) {
                                            let prevDataId = parseInt((expandImg.getAttribute('data-id'))) - 1;
                                            let stringBuilderSelectDataId = "[data-id=\"" + prevDataId + "\"]";
                                            let prevImg = document.querySelectorAll(stringBuilderSelectDataId);
                                            expandImg.setAttribute('src', imgs[prevDataId].src);
                                            expandImg.setAttribute('data-id', prevImg[0].getAttribute('data-id'));
                                        }
                                    }
                                </script>
                                <div class="container" style="display: none;">
                                    <div class="canvas">
                                        <span onclick="this.parentElement.parentElement.style.display='none'"
                                            class="closebtn noselect">&times;</span>
                                        <div class="overflow">
                                            <div class="view">
                                                <div class="control noselect" onclick="prev()">➜</div>
                                                <div class="imgholder">
                                                    <img draggable="false" id="expandedImg">
                                                </div>
                                                <div class="control noselect" onclick="next()">➜</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="imgtext"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </h2>
            </div>
        </div>
    </div>
</body>

</html>
