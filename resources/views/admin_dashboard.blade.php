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
                line-height:24px;
                height:26px;
            }
        </style>
        <div class="formcontainer">
            <details>
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
                        <input type="file" required name="image" id="image">
                        <input type="submit" value="Zet online" class="submit_details1">
                    </form>
                </div>
            </details>
        </div>
        <div class="formcontainer">
            <details>
                <summary>Afbeeldingen Aanpassen & Verwijderen</summary>
                <div class="summary2_contents">
                    <table class="table table-striped table-hover table-bordered ">
                        <thead>
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
                            @for ($i = 0; $i < count($all_pictures); $i++)
                                <tr>
                                    <td>
                                        {{ $all_pictures[$i]->picture_id }}
                                    </td>
                                    <td>
                                        <?php
                                        $base_url = URL::to('/');
                                        $image = $base_url . '/' . $all_pictures[$i]->path;
                                        ?>
                                        <img style="width:100px;height:100px;" draggable="false" src="<?= $image ?>"
                                            alt="gallery_image" data-id="<?= $i ?>" data-src="<?= $image ?>">
                                    </td>
                                    <td>
                                        {{ $all_pictures[$i]->path }}
                                    </td>
                                    <td>
                                        {{ $all_pictures[$i]->gallery_name }}
                                    </td>
                                    <td>
                                        {{ $all_pictures[$i]->active }}
                                    </td>
                                    <td>
                                        <form action="update_picture_position" method="post" class="action_form">
                                            @csrf
                                            <input type="hidden" name="id" value="<?php print_r($all_pictures[$i]->picture_id); ?>">
                                            <input type="number" name="number" id="number"
                                                value="{{ $all_pictures[$i]->gallery_position }}">
                                            <button type="submit" name="update" class="adesign_btn">
                                                Update
                                            </button>
                                        </form>
                                    </td>
                                    <td class="flex-right">
                                        @if ($all_pictures[$i]->active == 0)
                                            <form action="make_picture_active" method="post" class="action_form">
                                                @csrf
                                                <input type="hidden" name="id" value="<?php print_r($all_pictures[$i]->picture_id); ?>">
                                                <button type="submit" name="activate" class="adesign_btn">
                                                    Activate
                                                </button>
                                            </form>
                                        @endif
                                        @if ($all_pictures[$i]->active == 1)
                                            <form action="make_picture_inactive" method="post" class="action_form">
                                                @csrf
                                                <input type="hidden" name="id" value="<?php print_r($all_pictures[$i]->picture_id); ?>">
                                                <button type="submit" name="inactivate" class="adesign_btn">
                                                    Inactivate
                                                </button>
                                            </form>
                                        @endif
                                        <form action="delete_picture" method="post"
                                            onsubmit="return confirm('Delete?');" class="action_form">
                                            @csrf
                                            <input type="hidden" name="id" value="<?php print_r($all_pictures[$i]->picture_id); ?>">
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
