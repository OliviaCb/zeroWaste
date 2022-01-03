<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\File;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = User::all();
      //  return view('users.users')->with('users', $users);

        $users = User::latest()->paginate(5);

        return view('users.users', compact('users'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //
         return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $users = new User;
            $users->title = $request->input('title');

         if($request->hasfile('photo'))
             {
                $file = $request->file('photo');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('../public/uploads/users',$filename);
                $users->photo=$filename;
            }

            $users->products = $request->input('products');
            $users->food_processors = $request->input('food_processors');
            $users->time = $request->input('time');


    //         $request->validate([
    //             'title' => 'required',
    //             if($request->hasFile('photo'))
    //             {
    // $file = $request->file('photo');
    // $extension = $file->getClientOriginalExtension();
    // $filename = time().'.'.$extension
    //             }
    //             'photo' => 'required',
    //             'products' => 'required',
    //             'food_processors' => 'required',
    //             'time' => 'required'
        // ]);

        User::create([
            'title' =>$request->input('title'),
            'photo' =>$filename,
            'products' =>$request->input('products'),
            'food_processors' =>$request->input('food_processors'),
            'description' =>$request->input('description'),
            'time' =>$request->input('time'),
            'level' =>$request->input('level')
        ]);
        //User::create($request->all());

        return redirect()->route('users.index')
            ->with('success', 'Przepis został dodany do bazy.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */

    public function show(User $User)
    {
       return view('users.show', compact('User'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit(User $User)
    {
        return view('users.edit', compact('User'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $User)
    {
        $request->validate([
            'title' => 'required',
            'products' => 'required',
            'food_processors' => 'required',
            'time' => 'required'
        ]);
        $User->update($request->all());

        return redirect()->route('users.index')
            ->with('success', 'Przepis został zaktualizowany');
    }


//@param int $id
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $User)
    {
        $User->delete();

        return redirect()->route('users.index')
            ->with('success', 'Przepis został usunięty');
    }

    public function search()
    {
      $search_text = $_GET['query'];
      $User = User::where('title', 'LIKE', '%'.$search_text.'%')->get();


      return view('users.search', compact('User'));
    }

    public function search1()
    {
      $search1_text = $_GET['query1'];
      $recip = User::where('products', 'LIKE', '%'.$search1_text.'%')->get();

      return view('users.search1', compact('recip'));
    }
}
