<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Actor;
use Illuminate\Support\Facades\DB;

class ActorsController extends Controller
{


    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $actors = Actor::where('name', 'LIKE', "%$search%")->get();
        } else {
            $actors = Actor::all();
        }

        $data = compact('actors', 'search');

        return view('actors')->with($data);
    }

    public function search()
    {
    }
}
