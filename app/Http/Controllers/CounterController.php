<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CounterController extends Controller
{
    public function index()
    {
        // Increment nilai Jumlah
        DB::table('pagecounter')->where('ID', 1)->increment('Jumlah', 1);

        // Ambil nilai terbaru
        $counter = DB::table('pagecounter')->where('ID', 1)->first();

        // Kirim nilai ke view
        return view('counter', ['visits' => $counter->Jumlah]);
    }
}
