<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\Gallery;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// MAIN MENU
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', static function () {
    return view('about');
});
Route::get('/portfolio', static function () {
    return view('portfolio');
});
Route::get('/contact', static function () {
    return view('contact');
});
//The rule below sends the user to the UseAuth controller when a post form has been submitted with the action named "user"
Route::post('userLogin', [UserAuth::class, 'userLogin']);
Route::post('userSignUp', [UserAuth::class, 'userSignUp']);

//routes for receiving the forms for admin dashboard
Route::post('upload_image_to_folder', [Gallery::class, 'uploadImage']);
Route::post('update_picture_position', [Gallery::class, 'updatePicturePosition']);
Route::post('make_picture_active', [Gallery::class, 'makePictureActive']);
Route::post('make_picture_inactive', [Gallery::class, 'makePictureInactive']);
Route::post('delete_picture', [Gallery::class, 'deletePicture']);
Route::post('load_gallery', [Gallery::class, 'loadGallery']);

//bulk actions
Route::post('delete_selected_pictures', [Gallery::class, 'deleteSelectedPictures']);
Route::post('update_selected_pictures', [Gallery::class, 'UpdateSelectedPictures']);
Route::post('activate_selected_pictures', [Gallery::class, 'activateSelectedPictures']);
Route::post('inactivate_selected_pictures', [Gallery::class, 'inactivateSelectedPictures']);
Route::post('delete_selected_pictures', [Gallery::class, 'deleteSelectedPictures']);


Route::get('/admin_dashboard', function () {
    if (session()->has('email')) {
        // return view('admin_dashboard');
        $gallery = new Gallery();
        return $gallery->admin_dashboard();
    } else {
        return redirect('login');
    }
});

Route::get('/upload_image_to_folder', function () {
    if (session()->has('email')) {
        // return redirect('admin_dashboard');
        $gallery = new Gallery();
        return $gallery->admin_dashboard();
    }
    return view('login');
});

Route::get('/admin', function () {
    if (session()->has('email')) {
        // return redirect('admin_dashboard');
        $gallery = new Gallery();
        return $gallery->admin_dashboard();
    }
    return view('login');
});

Route::get('/login', function () {
    if (session()->has('email')) {
        // return redirect('admin_dashboard');
        $gallery = new Gallery();
        return $gallery->admin_dashboard();
    }
    return view('login');
});

// Code below works, and should not be activated
// Route::get('/signup', function () {
//     if (session()->has('email')) {
//         /*return redirect('admin_dashboard');*/
//         $gallery = new Gallery();
//         return $gallery->admin_dashboard();
//     }
//     return view('signup');
// });

Route::get('/logout', function () {
    if (session()->has('email')) {
        // get the user that is stored in the session and pull it out of the array so it is no longer in there.
        session()->pull('email');
    }
    return redirect('login');
});

// SUB PAGES

// Graphic Design
Route::get('/graphic_design', static function () {
    return view('graphic_design_welcome');
});
Route::get('/graphic_design_welcome', static function () {
    return view('graphic_design_welcome');
});
Route::get('/graphic_design/projects', [Gallery::class, 'GraphicDesign_Project']);
Route::get('/graphic_design/logos_and_corporate_identity', [Gallery::class, 'GraphicDesign_LogosAndCorporateIdentity']);
Route::get('/graphic_design/folders_and_flyers', [Gallery::class, 'GraphicDesign_FoldersAndFlyers']);
Route::get('/graphic_design/magazines_and_brochures', [Gallery::class, 'GraphicDesign_MagazinesAndBrochures']);
Route::get('/graphic_design/packaging', [Gallery::class, 'GraphicDesign_Packaging']);
Route::get('/graphic_design/illustrations', [Gallery::class, 'GraphicDesign_Illustrations']);
Route::get('/graphic_design/diverse', [Gallery::class, 'GraphicDesign_Diverse']);

// Photography
Route::get('/photography', static function () {
    return view('photography_welcome');
});
Route::get('/photography_welcome', static function () {
    return view('photography_welcome');
});
Route::get('/photography/nature', [Gallery::class, 'Photography_Nature']);
Route::get('/photography/portraits', [Gallery::class, 'Photography_Portraits']);
Route::get('/photography/products', [Gallery::class, 'Photography_Products']);
Route::get('/photography/diverse', [Gallery::class, 'Photography_Diverse']);

// FineArt
Route::get('/fine_art', static function () {
    return view('fine_art_welcome');
});
Route::get('/fine_art_welcome', static function () {
    return view('fine_art_welcome');
});
Route::get('/fine_art/portraits', [Gallery::class, 'FineArt_Portraits']);
Route::get('/fine_art/nature', [Gallery::class, 'FineArt_Nature']);
Route::get('/fine_art/diverse', [Gallery::class, 'FineArt_Diverse']);
