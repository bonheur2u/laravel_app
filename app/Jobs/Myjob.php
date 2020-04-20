<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Person;


class MyJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    protected $person;


    public function __construct(Person $person)
    {
        $this->person = $person;
    }


    public function handle()
    {
        $sufix = ' [+MYJOB]';
        if (strpos($this->person->name, $sufix))
        {
            $this->person->name = str_replace( $sufix, '', $this->person->name);
        } else {
            $this->person->name .= $sufix;
        }
        $this->person->save();
    }
}
