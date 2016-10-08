<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller {
    /**
     * Show the index page.
     *
     * @return Response
     */
    public function index(Request $request) {

        return view('home');
    }
}