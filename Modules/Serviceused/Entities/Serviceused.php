<?php
// Modules/Serviceused/Entities/Serviceused.php

namespace Modules\Serviceused\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; 
use Modules\Timesheet\Entities\Timesheet; 
use Modules\Proposal\Entities\Proposal;


class Serviceused extends Model
{
    protected $connection = 'activity';

    protected $table = 'serviceused';

    public function proposal()
    {
        return $this->belongsTo(Proposal::class, 'proposal_id'); 
    }

    public function timesheets()
    {
        return $this->hasMany(Timesheet::class, 'serviceused_id');
    }
    
    public function getTimespentAttribute()
    {
        $totalSeconds = $this->timesheets()
                             ->select(DB::raw('SUM(TIMESTAMPDIFF(SECOND, timestart, timefinish)) as total_seconds'))
                             ->value('total_seconds');
                             
        if (empty($totalSeconds)) {
            return '00:00';
        }

        $hours = floor($totalSeconds / 3600);
        $minutes = floor(($totalSeconds % 3600) / 60);

        return sprintf('%02d:%02d', $hours, $minutes);
    }
}