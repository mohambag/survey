<?php

namespace Mbagri\Survey;

use Illuminate\Support\Facades\Facade;

class SurveyFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'survey';
    }
}
