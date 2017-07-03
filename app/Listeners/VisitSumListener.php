<?php

namespace App\Listeners;

use App\Events\VisitSumEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Session;
class VisitSumListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  VisitSumEvent  $event
     * @return void
     */
    public function handle(VisitSumEvent $event)
    {
        if(!Session::has('user')){
            if(rand(0,9)>=8){
                $setting = $event->setting;
                $setting->web_visitday = $setting->web_visitday + 1;
                $setting->web_tuvan = $setting->web_tuvan + 1;
                $setting->save();
                //dathen today
                if(rand(0,9)>=8){
                    $setting->web_dathen = $setting->web_dathen + 1;
                    $setting->save();
                }
            }
        }
    }
}
