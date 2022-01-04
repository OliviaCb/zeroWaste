<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\File;
use Auth;
use Illuminate\Support\Facades\Hash;
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

            $users->name = $request->input('username');
            $users->userpassword = $request->input('userpassword');
            $users->email = $request->input('email');
            $users->firstname = $request->input('firstname');
            $users->surname = $request->input('surname');
            $users->birthday= $request->input('birthday');
            $users->gender= $request->input('gender');
            $users->role= $request->input('role');

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
          'name' =>$users->name,
          'email' => $users->email,
          'password' => Hash::make($users->userpassword),
          'firstname' => $users->firstname,
          'surname' => $users->surname,
          'birthday' => $users->birthday,
          'gender' => $users->gender,
          'role' => $users->role,
        ]);
        //User::create($request->all());

        return redirect()->route('users.index')
            ->with('success', 'Użytkownik został dodany do bazy.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */

    public function show(User $user)
    {
       return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        // $request->validate([
        //   'email' => 'required',
        //   'firstname' => 'required',
        //   'surname' => 'required',
        //   'birthday' => 'required',
        //   'gender' => 'required',
        //   'role' => 'required',
        //
        //
        // ]);
        $input = $request->all();
            if (str_contains($input['password'], 'argon2id'))
            {
                $user->update($request->all());
            }
            else {
                $user->update($request->all());
                $input['password'] = Hash::make($input['password']);
                $user->update($input);
            }
        return redirect()->route('users.index')
            ->with('success', 'Konto użytkownika zostało zaktualizowane');
    }


//@param int $id
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'Użytkownik został usunięty');
    }

    public function search()
    {
      $search_text = $_GET['query'];
      $user = User::where('name', 'LIKE', '%'.$search_text.'%')->get();


      return view('users.search', compact('user'));
    }

}
