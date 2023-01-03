<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Gallery extends Controller
{
    function GraphicDesign_Project()
    {
        $active_pictures = DB::select('SELECT *, `picture`.`id` AS "picture_id", `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id`  WHERE `picture`.`active` = 1 AND `name` = "graphicdesign_project" ORDER BY `gallery_position` ASC;');
        // $inactive_pictures = DB::select('SELECT *, `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id`  WHERE `picture`.`active` = 0 AND `name` = "graphicdesign_project" ORDER BY `gallery_position` ASC;');
        return view('graphic_design')->with(['active_pictures' => $active_pictures]);
    }
    function GraphicDesign_LogosAndCorporateIdentity()
    {
        $active_pictures = DB::select('SELECT *, `picture`.`id` AS "picture_id", `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id`  WHERE `picture`.`active` = 1 AND `name` = "graphicdesign_logosandcorporateidentity" ORDER BY `gallery_position` ASC;');
        return view('graphic_design')->with(['active_pictures' => $active_pictures]);
    }
    function GraphicDesign_FoldersAndFlyers()
    {
        $active_pictures = DB::select('SELECT *, `picture`.`id` AS "picture_id", `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id`  WHERE `picture`.`active` = 1 AND `name` = "graphicdesign_foldersandflyers" ORDER BY `gallery_position` ASC;');
        return view('graphic_design')->with(['active_pictures' => $active_pictures]);
    }
    function GraphicDesign_MagazinesAndBrochures()
    {
        $active_pictures = DB::select('SELECT *, `picture`.`id` AS "picture_id", `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id`  WHERE `picture`.`active` = 1 AND `name` = "graphicdesign_magazinesandbrochures" ORDER BY `gallery_position` ASC;');
        return view('graphic_design')->with(['active_pictures' => $active_pictures]);
    }
    function GraphicDesign_Packaging()
    {
        $active_pictures = DB::select('SELECT *, `picture`.`id` AS "picture_id", `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id`  WHERE `picture`.`active` = 1 AND `name` = "graphicdesign_packaging" ORDER BY `gallery_position` ASC;');
        return view('graphic_design')->with(['active_pictures' => $active_pictures]);
    }
    function GraphicDesign_Illustrations()
    {
        $active_pictures = DB::select('SELECT *, `picture`.`id` AS "picture_id", `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id`  WHERE `picture`.`active` = 1 AND `name` = "graphicdesign_illustrations" ORDER BY `gallery_position` ASC;');
        return view('graphic_design')->with(['active_pictures' => $active_pictures]);
    }
    function GraphicDesign_Diverse()
    {
        $active_pictures = DB::select('SELECT *, `picture`.`id` AS "picture_id", `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id`  WHERE `picture`.`active` = 1 AND `name` = "graphicdesign_diverse" ORDER BY `gallery_position` ASC;');
        return view('graphic_design')->with(['active_pictures' => $active_pictures]);
    }
    function Photography_Nature()
    {
        $active_pictures = DB::select('SELECT *, `picture`.`id` AS "picture_id", `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id`  WHERE `picture`.`active` = 1 AND `name` = "photography_nature" ORDER BY `gallery_position` ASC;');
        return view('photography')->with(['active_pictures' => $active_pictures]);
    }
    function Photography_Portraits()
    {
        $active_pictures = DB::select('SELECT *, `picture`.`id` AS "picture_id", `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id`  WHERE `picture`.`active` = 1 AND `name` = "photography_portraits" ORDER BY `gallery_position` ASC;');
        return view('photography')->with(['active_pictures' => $active_pictures]);
    }
    function Photography_Products()
    {
        $active_pictures = DB::select('SELECT *, `picture`.`id` AS "picture_id", `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id`  WHERE `picture`.`active` = 1 AND `name` = "photography_products" ORDER BY `gallery_position` ASC;');
        return view('photography')->with(['active_pictures' => $active_pictures]);
    }
    function Photography_Diverse()
    {
        $active_pictures = DB::select('SELECT *, `picture`.`id` AS "picture_id", `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id`  WHERE `picture`.`active` = 1 AND `name` = "photography_diverse" ORDER BY `gallery_position` ASC;');
        return view('photography')->with(['active_pictures' => $active_pictures]);
    }
    function FineArt_Portraits()
    {
        $active_pictures = DB::select('SELECT *, `picture`.`id` AS "picture_id", `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id`  WHERE `picture`.`active` = 1 AND `name` = "fineart_portraits" ORDER BY `gallery_position` ASC;');
        return view('fine_art')->with(['active_pictures' => $active_pictures]);
    }
    function FineArt_Nature()
    {
        $active_pictures = DB::select('SELECT *, `picture`.`id` AS "picture_id", `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id`  WHERE `picture`.`active` = 1 AND `name` = "fineart_nature" ORDER BY `gallery_position` ASC;');
        return view('fine_art')->with(['active_pictures' => $active_pictures]);
    }
    function FineArt_Diverse()
    {
        $active_pictures = DB::select('SELECT *, `picture`.`id` AS "picture_id", `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id`  WHERE `picture`.`active` = 1 AND `name` = "fineart_diverse" ORDER BY `gallery_position` ASC;');
        return view('fine_art')->with(['active_pictures' => $active_pictures]);
    }
    public function admin_dashboard()
    {
        $all_pictures = DB::select('SELECT *, `picture`.`id` AS "picture_id", `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id` ORDER BY `gallery_position` ASC;');
        $active_pictures = DB::select('SELECT *, `picture`.`id` AS "picture_id", `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id`  WHERE `picture`.`active` = 1 ORDER BY `gallery_position` ASC;');
        $galleries = DB::select('SELECT * FROM `gallery`;');
        if (session()->has('LastKnownRequestedGallery')) {
            $gallery = session()->get('LastKnownRequestedGallery');
            $gallery_pictures = DB::select("SELECT *, `picture`.`id` AS 'picture_id', `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id` WHERE `gallery`.`id` = $gallery  ORDER BY `gallery_position` ASC;");
            return view('admin_dashboard')->with(['active_pictures' => $active_pictures, 'galleries' => $galleries, 'gallery_pictures' => $gallery_pictures, 'all_pictures' => $all_pictures]);
        } else {
            return view('admin_dashboard')->with(['active_pictures' => $active_pictures, 'galleries' => $galleries, 'all_pictures' => $all_pictures]);
        }
    }
    public function loadGallery(Request $http_request)
    {
        $gallery = (int) $http_request->gallery;
        session()->put('LastKnownRequestedGallery', $gallery);
        $galleries = DB::select('SELECT * FROM `gallery`;');
        $gallery_pictures = DB::select("SELECT *, `picture`.`id` AS 'picture_id', `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id` WHERE `gallery`.`id` = $gallery  ORDER BY `gallery_position` ASC;");
        $all_pictures = DB::select('SELECT *, `picture`.`id` AS "picture_id", `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id` ORDER BY `gallery_position` ASC;');
        return redirect('admin_dashboard')->with(['all_pictures' => $all_pictures, 'galleries' => $galleries, 'gallery_pictures' => $gallery_pictures]);
    }
    public function uploadImage(Request $http_request)
    {
        // access the image by https://domain.com/storage/image.jpg
        // stored in the folder storage/app/public/
        $gallery = (int) $http_request->gallery;
        $all_pictures = DB::select('SELECT *, `picture`.`id` AS "picture_id", `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id` ORDER BY `gallery_position` ASC;');
        $maxPosValue = DB::select('SELECT MAX(`picture`.`gallery_position`) AS `max_position` FROM `picture`');
        $maxPosValue = $maxPosValue[0]->max_position;
        $maxPosValue++;

        if ($http_request->hasFile('attachment')) {
            $files = $http_request->file('attachment');
            $path = [];
            for ($i = 0; $i < count($files); $i++) {
                $attachment_path = (string) $files[$i]->store('public');
                array_push($path, str_replace('public/', 'storage/', $attachment_path));
                $current_path = $path[$i];
                DB::insert("INSERT INTO `picture` (`path`, `gallery_id`, `active`, `gallery_position`) VALUES ('$current_path', '$gallery', 1 ,'$maxPosValue')");
            }
        }
        return redirect('admin_dashboard')->with(['path' => $path, 'upload' => 'success', 'all_pictures' => $all_pictures]);
    }
    public function updatePicturePosition(Request $http_request)
    {
        $id = $http_request->id;
        $position = $http_request->number;
        DB::update("UPDATE `picture` SET `gallery_position` = $position WHERE `picture`.`id` = $id");
        $all_pictures = DB::select('SELECT *, `picture`.`id` AS "picture_id", `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id` ORDER BY `gallery_position` ASC;');
        return redirect('admin_dashboard')->with(['all_pictures' => $all_pictures]);
    }
    public function makePictureActive(Request $http_request)
    {
        $id = $http_request->id;
        DB::update("UPDATE `picture` SET `active` = '1' WHERE `picture`.`id` = $id");
        $all_pictures = DB::select('SELECT *, `picture`.`id` AS "picture_id", `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id` ORDER BY `gallery_position` ASC;');
        return redirect('admin_dashboard')->with(['all_pictures' => $all_pictures]);
    }
    public function makePictureInactive(Request $http_request)
    {
        $id = $http_request->id;
        DB::update("UPDATE `picture` SET `active` = '0' WHERE `picture`.`id` = $id");
        $all_pictures = DB::select('SELECT *, `picture`.`id` AS "picture_id", `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id` ORDER BY `gallery_position` ASC;');
        return redirect('admin_dashboard')->with(['all_pictures' => $all_pictures]);
    }
    public function deletePicture(Request $http_request)
    {
        $id = $http_request->id;
        DB::delete("DELETE FROM `picture` WHERE `picture`.`id` = $id");
        $all_pictures = DB::select('SELECT *, `picture`.`id` AS "picture_id", `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id` ORDER BY `gallery_position` ASC;');
        return redirect('admin_dashboard')->with(['all_pictures' => $all_pictures]);
    }
    public function UpdateSelectedPictures(Request $http_request)
    {
        for ($i = 0; $i <= $http_request->maxAmountSelected; $i++) {
            //binding the data together
            $selected_image_name = 'index' . $i;
            $id = $http_request->$selected_image_name;

            $position_name = 'gallery_position_index' . $i;
            $position = $http_request->$position_name;
            DB::update("UPDATE `picture` SET `gallery_position` = $position WHERE `picture`.`id` = $id");
        }
        $all_pictures = DB::select('SELECT *, `picture`.`id` AS "picture_id", `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id` ORDER BY `gallery_position` ASC;');
        return redirect('admin_dashboard')->with(['all_pictures' => $all_pictures]);
    }
    public function DeleteSelectedPictures(Request $http_request)
    {
        for ($i = 0; $i <= $http_request->maxAmountSelected; $i++) {
            //binding the data together
            $selected_image_name = 'index' . $i;
            $id = $http_request->$selected_image_name;
            DB::update("DELETE FROM `picture` WHERE `picture`.`id` = $id");
        }
        $all_pictures = DB::select('SELECT *, `picture`.`id` AS "picture_id", `gallery`.`name` AS `gallery_name` FROM `picture` INNER JOIN `gallery` ON `gallery`.`id` = `picture`.`gallery_id` ORDER BY `gallery_position` ASC;');
        return redirect('admin_dashboard')->with(['all_pictures' => $all_pictures]);
    }
}
