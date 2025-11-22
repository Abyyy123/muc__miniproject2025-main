<?php

namespace Modules\Timesheet\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Employees\Entities\Employee;
use Modules\Serviceused\Entities\Serviceused;
use Illuminate\Support\Facades\DB;

class Timesheet extends Model
{
    protected $connection = 'activity';

    protected $table = 'timesheet'; 
    
    protected $fillable = [
        'date', 
        'timestart', 
        'timefinish', 
        'employees_id', 
        'serviceused_id', 
        'description'
    ];
    
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employees_id'); 
    }

    /**
     * Relasi ke model Serviceused.
     */
    public function serviceused()
    {
        return $this->belongsTo(Serviceused::class, 'serviceused_id');
    }

    public function getTotalTimeAttribute()
    {
        // Menggunakan try-catch atau pengecekan null/empty untuk robustness
        if (empty($this->timestart) || empty($this->timefinish)) {
            return '00:00';
        }
        
        $startTime = strtotime($this->timestart);
        $finishTime = strtotime($this->timefinish);
        
        // Cek jika waktu tidak valid atau waktu selesai kurang dari waktu mulai
        if (!$startTime || !$finishTime || $finishTime < $startTime) {
            return '00:00';
        }
        
        $totalSeconds = $finishTime - $startTime;

        $hours = floor($totalSeconds / 3600);
        $minutes = floor(($totalSeconds % 3600) / 60);

        return sprintf('%02d:%02d', $hours, $minutes);
    }
}