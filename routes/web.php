<?php

use App\Http\Controllers\GeneralControllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


Route::get('locale/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('/', [GeneralControllers::class, 'index'])->name('index');
Route::get('/profile', [GeneralControllers::class, 'profile'])->name('profile');
Route::get('/direksi', [GeneralControllers::class, 'direksi'])->name('direksi');

// Route::get('/test-gcs', function () {
//     try {
//         // Path to the local file
//         $localPath = public_path('/img/general/bg-banner.webp');

//         // Check if the file exists locally
//         if (!file_exists($localPath)) {
//             return 'File does not exist at the specified path.';
//         }

//         // Define the destination path in GCS
//         $gcsPath = 'uploads/bg-banner.webp';

//         // Upload the file to GCS
//         $result = Storage::disk('gcs')->put($gcsPath, file_get_contents($localPath));

//         return $result ? 'File uploaded to GCS successfully!' : 'Failed to upload the file.';
//     } catch (\Exception $e) {
//         return 'Error uploading file to GCS: ' . $e->getMessage();
//     }
// });