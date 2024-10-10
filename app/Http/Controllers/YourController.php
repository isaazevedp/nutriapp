<?php
namespace App\Http\Controllers;

use App\Models\Desperdicio;
use Illuminate\Http\Request;
use App\Models\YourModel; 

class YourController extends Controller
{
    public function fetchData(Request $request)
    {
        $data = $request->input('data');

        $record = Desperdicio::where('data', $data)->first(); 

        return view('calendario', compact('record'));
    }
}
