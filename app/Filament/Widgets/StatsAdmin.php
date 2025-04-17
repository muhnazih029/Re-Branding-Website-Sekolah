<?php

namespace App\Filament\Widgets;

use App\Models\Complain;
use App\Models\School;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Facility;
use App\Models\Announcement;
use App\Models\StudentClass;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsAdmin extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Card::make('Jumlah Siswa', Student::count()),
            Card::make('Jumlah Guru', Teacher::count()),
            Card::make('Sarana & Prasarana', Facility::count()),
            Card::make('Jumlah Kelas', StudentClass::count()),
            Card::make('Pengumuman', Announcement::count()),
            Card::make('Pengaduan', Complain::count()),
        ];
    }

}
