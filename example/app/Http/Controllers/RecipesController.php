<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\File;
use Auth;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$recipes = Recipe::all();
      //  return view('recipes.recipes')->with('recipes', $recipes);

        $recipes = Recipe::latest()->paginate(5);

        return view('recipes.recipes', compact('recipes'))
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
         return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $recipes = new Recipe;
            $recipes->title = $request->input('title');

         if($request->hasfile('photo'))
             {
                $file = $request->file('photo');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('../public/uploads/recipes',$filename);
                $recipes->photo=$filename;
                $owner = Auth::user()->name;
            }

            $recipes->products = $request->input('products');
            $recipes->food_processors = $request->input('food_processors');
            $recipes->time = $request->input('time');


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

        Recipe::create([
            'title' =>$request->input('title'),
            'photo' =>$filename,
            'products' =>$request->input('products'),
            'food_processors' =>$request->input('food_processors'),
            'description' =>$request->input('description'),
            'time' =>$request->input('time'),
            'level' =>$request->input('level'),
            'owner' =>$owner
        ]);
        //Recipe::create($request->all());

        return redirect()->route('recipes.index')
            ->with('success', 'Przepis został dodany do bazy.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $Recipe
     * @return \Illuminate\Http\Response
     */

    public function show(Recipe $recipe)
    {
       return view('recipes.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $Recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $Recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        $request->validate([
            'title' => 'required',
            'products' => 'required',
            'food_processors' => 'required',
            'time' => 'required'
        ]);
        $recipe->update($request->all());

        return redirect()->route('recipes.index')
            ->with('success', 'Przepis został zaktualizowany');
    }


//@param int $id
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $Recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        return redirect()->route('recipes.index')
            ->with('success', 'Przepis został usunięty');
    }

    public function search()
    {
      $search_text = $_GET['query'];
      $recipe = Recipe::where('title', 'LIKE', '%'.$search_text.'%')->get();


      return view('recipes.search', compact('recipe'));
    }

    public function search1()
    {
      $search1_text = $_GET['query1'];
      $recip = Recipe::where('products', 'LIKE', '%'.$search1_text.'%')->get();

      return view('recipes.search1', compact('recip'));
    }
}
