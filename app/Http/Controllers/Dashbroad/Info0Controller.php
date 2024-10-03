<?php

namespace App\Http\Controllers\Dashbroad;
//use App\Http\Requests\Info0Request;
use App\Models\Info0;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class Info0Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
$info0=info0::all();

 return view('dashbraod.foodsystems.index',compact('info0') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

       return view('dashbraod.foodsystems.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {



    
    
        $request->validate( [
            'title' => 'required|string|max:255',
            'posts_url' => 'required|url',
            'posts_title' => 'required|string|max:255',
            'posts_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'posts_content' => 'required|string',
            'url' => 'required|url'



        ]);
 $info0 = Info0::create([
'title'=>$request->title,
'posts_title'=>$request->posts_title,
'posts_img'=>$request->posts_img,
'posts_content'=>$request->posts_content,
'url'=>$request->url
     ]);


     if($request->has('img')){

        $image = $request->file('img');

        // Get the original name of the uploaded file
        $imageName = $image->getClientOriginalName();

        // Get the first 5 characters of the original file name
        $firstFiveCharacters = substr($imageName, 0, 5);

        $name = 'img_1716557304_'.$firstFiveCharacters;
        $info->posts_img = $name.'.'.$image->extension();
        $image->move(public_path('topicImages'), $name.'.'.$image->extension());

     }

 return response()->json($info0);
return redirect()->route('Status','info0.index');


 

            
        
            

           

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $info0=info0::findOrFail($id);
       // return $info0;
       return view('dashbraod.foodsystems.edit',compact('info0') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate( [
            'title' => 'required|string|max:255',
            'posts_url' => 'required|url',
            'posts_title' => 'required|string|max:255',
            'posts_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'posts_content' => 'required|string',
            'url' => 'required|url'



        ]);

        if($request->has('img')){

            $image = $request->file('img');

            // Get the original name of the uploaded file
            $imageName = $image->getClientOriginalName();

            // Get the first 5 characters of the original file name
            $firstFiveCharacters = substr($imageName, 0, 5);
 
            $name = 'img_1716557304_'.$firstFiveCharacters;
            $info->posts_img = $name.'.'.$image->extension();
            $image->move(public_path('topicImages'), $name.'.'.$image->extension());

        }





  Info0::findOrFail($id)->update([
'title'=>$request->title,
'posts_title'=>$request->posts_title,
'posts_img'=>$filename,
'posts_content'=>$request->posts_content,
'url'=>$request->url
     ]);

 return response()->json($info0);
return redirect()->back()->with ('Status','info0.update');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $info0=info0::findOrFail($id);
        $info0->delete();
return redirect()->back()->with ('Status','info0.delete');

    }
}
