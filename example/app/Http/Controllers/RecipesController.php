<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipes.recipes')->with('recipes', $recipes);

        //$recipes = Recipe::latest()->paginate(10);

        //return view('recipes.index', compact('recipes'))
          //  ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //
         return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'products' => 'required',
            'food_processors' => 'required',
            'time' => 'required'
        ]);

        Recipe::create($request->all());

        return redirect()->route('recipes.index')
            ->with('success', 'Przepis został dodany do bazy.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $Recipe
     * @return \Illuminate\Http\Response
     */
     //testuje wyswietlanie przpeisow ------------------------------------------
    //public function show($id)
    //{
        //
    //}

    public function show(Recipe $recipe)
    {
        //return DB::select('SELECT * FROM `recipes`');
      //  return DB::table('recipes')
      //  ->where('recipe_id', '1')
      //  ->get();
       return view('recipes.show', compact('recipe'));
    }

    //koniec testowania przepisow ----------------------------------------------
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $Recipe
     * @return \Illuminate\Http\Response
     */
    //public function edit($id)
    public function edit(Recipe $recipe)
    {
        //
        return view('recipes.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $Recipe
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, $id)
    public function update(Request $request, Recipe $recipe)
    {
        //
        $request->validate([
            'title' => 'required',
            'products' => 'required',
            'food_processors' => 'required',
            'time' => 'required'
        ]);
        $project->update($request->all());

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
    //public function destroy($id)
    public function destroy(Recipe $recipe)
    {
        //
        $recipe->delete();

        return redirect()->route('recipes.index')
            ->with('success', 'Przepis został usunięty');
    }
}
