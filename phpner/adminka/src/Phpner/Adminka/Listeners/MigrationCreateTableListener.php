<?php
/**
 * Created by PhpStorm.
 * User: phpner
 * Date: 04.02.2018
 * Time: 10:16
 */

namespace Phpner\Adminka\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Phpner\Adminka\Events\MigrationCreateTableEvent;
use Phpner\Adminka\Models\Rules;

class MigrationCreateTableListener
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
     * @param  Event  $event
     * @return void
     */
    public function handle(MigrationCreateTableEvent  $event)
    {
        $Admin =  new Rules();
        $Auther = new Rules();
        $User =   new Rules();

        $Admin->name = 'Admin';
        $Admin->id = 1;
        $Admin->save();

        $Auther->name = 'Auther';
        $Auther->id = 2;
        $Auther->save();

        $User->name = 'User';
        $User->id = 3;
        $User->save();
    }
}