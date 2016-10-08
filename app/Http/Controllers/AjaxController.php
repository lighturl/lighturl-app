<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ajax;
use LightUrl\LightUrl;
use Illuminate\Database\Capsule\Manager as Capsule;


class AjaxController extends Controller
{

    private $lighturl;

    public function __construct()
    {
        $this->lighturl = new LightUrl($this->getConnection());
    }

    public function shorten(Request $request)
    {
        $key = $this->lighturl->lighten($request->input('heavyUrl'));
        $light = env('APP_URL', $_SERVER["HTTP_HOST"]) . $key;

        return $light;

    }

    public function redirect($shortKey)
    {
        return redirect($this->lighturl->redirectTo($shortKey));
    }

    private function getConnection()
    {

        $capsule = new Capsule;
        $capsule->addConnection(config('database.connections.mysql'));

        // Make this Capsule instance available globally via static methods... (optional)
        $capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
        $capsule->bootEloquent();

        return $capsule->getConnection();

    }


}