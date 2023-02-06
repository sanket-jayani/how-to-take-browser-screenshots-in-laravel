<?php
 
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;
  
class DemoController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        Browsershot::url('https://www.itsolutionstuff.com')
            ->setOption('landscape', true)
            ->windowSize(3840, 2160)
            ->waitUntilNetworkIdle()
            ->save('itsolutionstuff.jpg');
  
        dd("Done");
    }
}