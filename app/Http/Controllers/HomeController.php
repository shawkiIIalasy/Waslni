<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Car;

class HomeController extends Controller
{ /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $cars=Car::all();
  
             return view('home')->with('trips', $user->trips)->with('cars',$cars);   

    }
 public function update(Request $request,$id)
    {
       $this->validate($request,[
       
        'cover_image'=>'image|nullable||max:1999'


       ]) ;

       if($request->hasFile('cover_image')){

        $filenameWithExt=$request->file('cover_image')->getClientOriginalName();
        $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('cover_image')->getClientOriginalExtension();
        $filenameToStore=$filename.'_'.time().'_'.$extension;
        $path=$request->file('cover_image')->storeAs('/public/cover_image',$filenameToStore);
       }
       else
        {$filenameToStore='team2.jpg';}

    $users=User::find($id);
    if($users->cover_image!='team2.jpg')
    {
        Storage::delete('/public/cover_image/'.$users->cover_image);
    }
    $users->cover_image=$filenameToStore;
    $users->save();
    return back();
    }

}
