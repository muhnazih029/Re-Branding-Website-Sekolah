<?php

use App\Http\Controllers\StudentClassController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\ClassWorkController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\CalendarAcademicController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SchoolOperationalAssistanceController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::delete('/logout', [HomeController::class, 'logout'])->name('logout');

Route::prefix('pengumuman')->group(function () {
    Route::get('/', function () {
        return redirect()->route('announcement.index', ['type' => 'news']);
    });
    Route::get('/{type}', [AnnouncementController::class, 'index'])
        ->where('type', 'announcement|competition')
        ->name('announcement.index');
    Route::get('/{type}/{slug}', [AnnouncementController::class, 'show'])
        ->name('announcement.show');
    Route::get('/ppdb', [AnnouncementController::class, 'new_student'])->name('announcement.new_student');
});

Route::prefix('kurikulum')->group(function () {
    Route::get('/', function () {
        return redirect()->route('home');
    })->name('kurikulum.index');
    Route::get('kurikulum-sekolah', [SettingController::class, 'school_curriculum'])->name('kurikulum.school_curriculum');
    Route::get('/kalender-akademik', [CalendarAcademicController::class, 'index'])->name('kurikulum.calendar');
    Route::get('/tugas-siswa', [ClassWorkController::class, 'index'])->name('kurikulum.homework');
    Route::get('/tugas-siswa/kelas-{id}', [ClassWorkController::class, 'show'])->name('kurikulum.ex_homework');
    Route::get('video-pembelajaran', function () {
        return view('pages.curriculum.learning_videos');
    })->name('kurikulum.learning_videos');
});

Route::prefix('galeri')->group(function () {
    Route::get('/', function () {
        return redirect()->route('home');
    })->name('galeri.index');
    Route::get('/foto', [GaleryController::class, 'photo'])->name('galery.photo');
    Route::get('/video', [GaleryController::class, 'video'])->name('galery.video');
});

Route::prefix('profile')->group(function () {
    Route::get('/', function () {
        return redirect()->route('home');
    })->name('profile.index');
    Route::get('/visi-misi', [SettingController::class, 'vision_mission'])->name('profile.vision_mission');
    Route::get('/sejarah-sekolah', [SettingController::class, 'history'])->name('profile.history');
    Route::get('/pendidik', [TeacherController::class, 'index'])->name('profile.teachers');
    Route::get('/peserta-didik', [StudentClassController::class, 'index'])->name('profile.students');
    Route::get('/peserta-didik/kelas/{id}', [StudentController::class, 'show'])->name('students.show');
    Route::get('/ekstrakulikuler', [ExtracurricularController::class, 'index'])->name('profile.extracurricular');
    Route::get('/dana-bos', [SchoolOperationalAssistanceController::class, 'index'])->name('profile.dana_bos');
    Route::get('/sarana-prasarana', [FacilityController::class, 'index'])->name('profile.facility');
});

Route::get('/kontak', [SettingController::class, 'contact'])->name('contact');

// API for Search Bar
Route::get('/api/announcements', [AnnouncementController::class, 'AnnouncementSearch']);
Route::get('/api/galery/photos', [GaleryController::class, 'searchPhotos']);
Route::get('/api/galery/videos', [GaleryController::class, 'searchVideos']);
