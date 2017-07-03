<?php

namespace App\Listeners;

use App\Events\VisitTermEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Visit;
class VisitTermListener
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
     * @param  VisitTermEvent  $event
     * @return void
     */
    public function handle(VisitTermEvent $event)
    {
        $term_id = $event->term->id;
        if($visit = Visit::where('term_id',$term_id)->first()){
            $visit->visit_sum = $visit->visit_sum + 1;
        }else{
            $visit = new Visit;
            $visit->term_id = $term_id;
            $visit->visit_sum = 0;
        }
        $visit->save();
    }
}
