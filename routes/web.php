<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\ClassWorkController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\CalendarAcademicController;
use App\Http\Controllers\ExtracurricularsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SchoolOperationalAssistanceController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('pengumuman')->group(function () {
    Route::get('/', [AnnouncementController::class, 'index']);
    Route::get('/ppdb', [AnnouncementController::class, 'new_student']);
});

Route::prefix('kurikulum')->group(function () {
    Route::get('/', function () {
        return redirect()->route('home');
    })->name('kurikulum.index');
    Route::get('/kalender-akademik', [CalendarAcademicController::class, 'index']);
    Route::get('/tugas-siswa', [ClassWorkController::class, 'index']);
    // Route::get('/tugas-siswa/kelas/{id}', [ClassWorkController::class, 'ex_homework']);
    Route::get('video-pembelajaraan', function () {
        return view('pages.curriculum.learning_videos');
    });
    Route::get('kurikulum-sekolah', [SettingController::class, 'school_curriculum']);
});

Route::prefix('galeri')->group(function () {
    Route::get('/', function () {
        return redirect()->route('home');
    })->name('galeri.index');
    Route::get('/foto', [GaleryController::class, 'photo']);
    Route::get('/video', [GaleryController::class, 'video']);
});

Route::prefix('profile')->group(function () {
    Route::get('/', function () {
        return redirect()->route('home');
    })->name('profile.index');
    Route::get('/visi-misi', [SettingController::class, 'vision_mission']);
    Route::get('/sejarah-sekolah', [SettingController::class, 'history']);
    Route::get('/peserta-didik', [StudentController::class, 'index']);
    Route::get('/pendidik', [TeacherController::class, 'index']);
    Route::get('/ekstrakulikuler', [ExtracurricularsController::class, 'index']);
    Route::get('/sarana-prasarana', [FacilityController::class, 'index']);
    Route::get('/dana-bos', [SchoolOperationalAssistanceController::class, 'index']);
});

Route::get('/kontak', function () {
    return view('pages.contact.contact');
});
