<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Sesi;

class SessionComposer
{
    public function compose(View $view)
    {
      $session = Sesi::all();
      $view->with('SessionVar', "1");
    }
}
