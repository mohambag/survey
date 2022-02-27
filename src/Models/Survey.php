<?php

namespace Mbagri\Survey;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;


    public function scores()
    {
        return $this->hasMany(Score::class,'survey_id','id');
    }
}
