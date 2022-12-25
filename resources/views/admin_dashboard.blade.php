<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" id="html">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    @include('head/html_head_components')
    <title>{{ 'Avigail Design' }}</title>
    <meta name="description" content="Grafisch Ontwerp, Fotografie, Fine Art">
</head>

<body class="body antialiased bg-gray-100 dark:bg-gray-900">
    <div class="containerHeader">
        @include('nav/navigation') {{-- Navigation with logo on the left side --}}

        <a href="/admin_dashboard" style="color: black; text-decoration:none;">
            <h1>Admin Dashboard</h1>
        </a>
        <?php
        // if (isset($path)) {
        //     echo $path;
        // }
        // echo '<pre>';
        // if (isset($active_pictures)) {
        //     dump($active_pictures);
        // }
        // if (isset($galleries)) {
        //     dump($galleries);
        // }
        // echo '</pre>';
        ?>
        <style scoped>
            details {
                width: max-content;
                padding: 1rem;
                border-radius: 8px;
                background: white;
                box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.15);
                font-size: 1rem;
            }

            summary {
                cursor: pointer;
            }

            summary {
                color: #F58220;
                font-size: 1.25rem;
                -webkit-user-select: none;
                /* Safari */
                -moz-user-select: none;
                /* Firefox */
                -ms-user-select: none;
                /* IE10+/Edge */
                user-select: none;
                /* Standard */
            }

            details p {
                margin-left: 1.75rem;
                opacity: 0.7;
            }

            .summary1_contents>form>*,
            #image {
                margin-bottom: 10px;
            }

            input[type="file"],
            select {
                border-radius: 10px;
                border: 1px solid #000000;
            }

            select {
                padding-left: 8px;
            }

            details {
                padding: 10px;
            }

            details summary {
                cursor: pointer;
                transition: margin 150ms ease-out;
            }

            details[open] summary {
                margin-bottom: 10px;
            }

            .summary2_contents>*,
            #image {
                margin-bottom: 10px;
            }

            h1 {
                margin-left: 1rem;
            }

            .formcontainer {
                margin: 20px 0 0 1rem;
            }

            .action_form {
                margin-bottom: 8px;
            }

            #number {
                width: min-content;
                max-width: 70px;
                padding: 0 8px;
                border: none;
                margin-bottom: 8px;
                background: rgba(255, 255, 255, 0);
                border-radius: 10px;
                outline: 1px solid #F58220;
                line-height: 24px;
                height: 26px;
            }

            .select {
                border: none;
                background: rgba(255, 255, 255, 0);
                border-radius: 10px;
                outline: none;
                border: 1px solid #F58220;
                border: none;
                background: rgba(255, 255, 255, 0);
                height: 26px;
            }

            /* The container */
            .container {
                display: block;
                position: relative;
                cursor: pointer;
                font-size: 22px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                background-color: rgba(255, 255, 255, 0);
                outline: 1px solid #F58220;
                border-radius: 5px;
                height: 26px;
                width: 26px;
                /* overflow: hidden; */
                transition: 0.4s;
            }

            /* Hide the browser's default checkbox */
            .container input {
                position: absolute;
                opacity: 0;
                cursor: pointer;
                height: 0;
                width: 0;
                /* transition: 0.4s; */
            }

            /* Create a custom checkbox */
            .checkmark {
                position: absolute;
                top: 0;
                left: 0;
                height: 26px;
                width: 26px;
                background-color: rgba(255, 255, 255, 0);
                pointer-events: none;
            }

            /* On mouse-over, add a grey background color */
            .container:hover input~.checkmark {
                background-color: rgba(255, 255, 255, 0);
                background-color: #F58220;
                pointer-events: none;
                border-radius: 5px;
                transition: 0.4s;
            }

            /* When the checkbox is checked, add a blue background */
            .container input:checked~.checkmark {
                /* background-color: #2196F3; default color */
                background-color: #F58220;
                pointer-events: none;
                border-radius: 5px;
                transition: 0.4s;
            }

            .container input:active~.checkmark {
                outline: 4px solid #eaba8f;
                border-radius: 5px;
            }

            /* Create the checkmark/indicator (hidden when not checked) */
            .checkmark:after {
                content: "";
                position: absolute;
                display: none;
            }

            /* Show the checkmark when checked */
            .container input:checked~.checkmark:after {
                display: block;
            }

            /* Style the checkmark/indicator */
            .container .checkmark:after {
                left: 9px;
                top: 6px;
                width: 8px;
                height: 10px;
                border: solid white;
                border-width: 0 3px 3px 0;
                -webkit-transform: rotate(45deg);
                -ms-transform: rotate(45deg);
                transform: rotate(45deg);
            }
        </style>
        <div class="formcontainer">
            <details open>
                <summary>Afbeeldingen uploaden</summary>
                <div class="summary1_contents">
                    <form action="upload_image_to_folder" method="post" enctype="multipart/form-data">
                        @csrf
                        <?php if (isset($galleries)){ ?>
                        <select name="gallery">
                            <?php
                            for ($i = 0; $i < count($galleries); $i++) {
                                echo '<option value="' . $galleries[$i]->id . '">' . $galleries[$i]->name . '</option>';
                            }
                            ?>
                        </select>
                        <?php } ?>
                        <input type="file" required name="attachment[]" id="image" multiple>
                        <input type="submit" value="Zet online" class="submit_details1">
                    </form>
                </div>
            </details>
        </div>
        <div class="formcontainer">
            <details open>
                <summary>Afbeeldingen Aanpassen & Verwijderen</summary>
                <div class="summary2_contents">
                    <form action="update_selected_pictures" method="post" class="action_form" onsubmit="getRecords()"
                        id="update_selected_pictures">
                        @csrf
                        <script>
                            function getRecords() {
                                var markedCheckbox = document.querySelectorAll('input[type="checkbox"]:checked');
                                var index = 0;
                                var form = document.querySelector("#update_selected_pictures");
                                for (var checkbox of markedCheckbox) {
                                    if (index === markedCheckbox.length - 1) {
                                        form.innerHTML += `<input type="hidden" value="${index}" name="maxAmountSelected">`;
                                    }
                                    form.innerHTML += `<input type="hidden" value="${checkbox.getAttribute("data-id")}" name="index${index}">`;
                                    form.innerHTML +=
                                        `<input type="hidden" value="${checkbox.parentElement.parentElement.parentElement.children[6].children[0].children[2].value}" name="gallery_position_index${index}">`;
                                    index++;
                                }
                            }
                        </script>
                        <button type="submit" name="update" class="adesign_btn">
                            Update Positions Of Selected Rows
                        </button>
                    </form>
                    <form action="delete_selected_pictures" method="post" class="action_form" onsubmit="getRecords()"
                        id="delete_selected_pictures">
                        @csrf
                        <script>
                            function getRecords() {
                                var markedCheckbox = document.querySelectorAll('input[type="checkbox"]:checked');
                                var index = 0;
                                var form = document.querySelector("#delete_selected_pictures");
                                for (var checkbox of markedCheckbox) {
                                    if (index === markedCheckbox.length - 1) {
                                        form.innerHTML += `<input type="hidden" value="${index}" name="maxAmountSelected">`;
                                    }
                                    form.innerHTML += `<input type="hidden" value="${checkbox.getAttribute("data-id")}" name="index${index}">`;
                                    form.innerHTML +=
                                        `<input type="hidden" value="${checkbox.parentElement.parentElement.parentElement.children[6].children[0].children[2].value}" name="gallery_position_index${index}">`;
                                    index++;
                                }
                            }
                        </script>
                        <button type="submit" name="delete" class="adesign_btn">
                            Delete Selected Rows
                        </button>
                    </form>
                    <form action="load_gallery" method="post" enctype="multipart/form-data">
                        @csrf
                        <?php if (isset($galleries)){ ?>
                        <select name="gallery">
                            <?php
                            $galleryIdArray = [];
                            for ($i = 0; $i < count($galleries); $i++) {
                                array_push($galleryIdArray, $galleries[$i]->id);
                            }
                            
                            // show all gallery options
                            $gallery = session()->get('LastKnownRequestedGallery');
                            for ($i = 0; $i < count($galleries); $i++) {
                                // set last known requested gallery as selected by default
                                if ($galleryIdArray[$i] === $gallery) {
                                    echo '<option selected value="' . $galleryIdArray[$i] . '">' . $galleries[$i]->name . '</option>';
                                } else {
                                    echo '<option value="' . $galleryIdArray[$i] . '">' . $galleries[$i]->name . '</option>';
                                }
                            }
                            ?>
                        </select>
                        <?php } ?>
                        <button type="submit" name="submit" class="adesign_btn">
                            Gallery Inladen
                        </button>
                    </form>
                    <script>
                        function selectAllRows() {
                            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
                            var toggle = true;
                            var checkboxValues = [];
                            var selectAllRows = document.querySelector(".selectAllRows");

                            for (var i = 0; i < checkboxes.length; i++) {
                                checkboxValues.push(checkboxes[i].checked);
                            }
                            for (var i = 0; i < checkboxes.length; i++) {
                                // check in the function for all array items
                                if (checkboxValues.every(checkAge)) {
                                    checkboxes[i].checked = false;
                                    selectAllRows.innerHTML = "Select All Rows";
                                } else {
                                    checkboxes[i].checked = true;
                                    selectAllRows.innerHTML = "Deselect All Rows";
                                }

                                function checkAge(value) {
                                    return value == true;
                                }
                            }
                        }
                    </script>
                    <button type="submit" onsubmit="event.preventDefault()" name="select_all_rows" onclick="selectAllRows()" class="adesign_btn mb-2 selectAllRows">
                        Select All Rows
                    </button>
                    <table class="table table-striped table-hover table-bordered ">
                        <thead>
                            <th>Select</th>
                            <th>Picture<br>ID</th>
                            <th>Preview<br>Picture</th>
                            <th>Picture<br>Path</th>
                            <th>Picture<br>Gallery</th>
                            <th>
                                <details style="font-size:13px;">
                                    <summary style="font-size:13px;margin-bottom:0;">
                                        Picture Status
                                    </summary>
                                    1 = active<br>0 = inactive
                                </details>
                            </th>
                            <th>Gallery<br>Position</th>
                            <th>Options</th>
                        </thead>
                        <tbody>
                            <?php
                            if (!isset($gallery_pictures)) {
                                $gallery_pictures = $all_pictures;
                            }
                            ?>
                            @for ($i = 0; $i < count($gallery_pictures); $i++)
                                <tr>
                                    <td>
                                        <label class="container">
                                            <input type="checkbox" name="select" data-id="<?php print_r($gallery_pictures[$i]->picture_id); ?>"
                                                class="select">
                                            <span class="checkmark"></span>
                                        </label>
                                    </td>
                                    <td>
                                        {{ $gallery_pictures[$i]->picture_id }}
                                    </td>
                                    <td>
                                        <?php
                                        $base_url = URL::to('/');
                                        $image = $base_url . '/' . $gallery_pictures[$i]->path;
                                        ?>
                                        <img style="width:100px;height:100px;" draggable="false" src="<?= $image ?>"
                                            alt="gallery_image" data-id="<?= $i ?>" data-src="<?= $image ?>">
                                    </td>
                                    <td>
                                        {{ $gallery_pictures[$i]->path }}
                                    </td>
                                    <td>
                                        {{ $gallery_pictures[$i]->gallery_name }}
                                    </td>
                                    <td>
                                        {{ $gallery_pictures[$i]->active }}
                                    </td>
                                    <td>
                                        <form action="update_picture_position" method="post" class="action_form">
                                            @csrf
                                            <input type="hidden" name="id" value="<?php print_r($gallery_pictures[$i]->picture_id); ?>">
                                            <input type="number" name="number" id="number"
                                                value="{{ $gallery_pictures[$i]->gallery_position }}">
                                            <button type="submit" name="update" class="adesign_btn">
                                                Update
                                            </button>
                                        </form>
                                    </td>
                                    <td class="flex-right">
                                        @if ($gallery_pictures[$i]->active == 0)
                                            <form action="make_picture_active" method="post" class="action_form">
                                                @csrf
                                                <input type="hidden" name="id" value="<?php print_r($gallery_pictures[$i]->picture_id); ?>">
                                                <button type="submit" name="activate" class="adesign_btn">
                                                    Activate
                                                </button>
                                            </form>
                                        @endif
                                        @if ($gallery_pictures[$i]->active == 1)
                                            <form action="make_picture_inactive" method="post" class="action_form">
                                                @csrf
                                                <input type="hidden" name="id" value="<?php print_r($gallery_pictures[$i]->picture_id); ?>">
                                                <button type="submit" name="inactivate" class="adesign_btn">
                                                    Inactivate
                                                </button>
                                            </form>
                                        @endif
                                        <form action="delete_picture" method="post"
                                            onsubmit="return confirm('Delete?');" class="action_form">
                                            @csrf
                                            <input type="hidden" name="id" value="<?php print_r($gallery_pictures[$i]->picture_id); ?>">
                                            <button type="submit" name="unban" class="adesign_btn">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </details>
        </div>
    </div>
</body>

</html>
