<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meals;
use Illuminate\Support\Facades\Storage;

class MealsController extends Controller
{
    /**
     * Display a listing of the meals.
     */
    public function index()
    {
        $meals = Meals::all(); // Get all meals
        return view('admin.meals', compact('meals'));
    }



  public function sendorder()
    {
        $meals = Meals::all(); // Get all meals
        return view('users.make an order', compact('meals'));
    }


    /**
     * Show the form for creating a new meal.
     */
    public function create()
    {
        return view('admin.createMeal');
    }

    /**
     * Store a newly created meal in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name'        => 'required|string|max:255',
        'description' => 'required|string',
        'price'       => 'required|numeric|min:0',
        'category'    => 'required|string|in:appetizer,main course,dessert,drink',
        'stock'       => 'required|integer|min:0',
        'availability'=> 'required|boolean',
        'photo'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    $data = $request->only(['name','description','price','category','stock']);
    $data['available'] = $request->input('availability');

    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $path = $file->store('meals', 'public');
        // match the update function format
        $data['image'] = '/storage/' . $path;
    }

    Meals::create($data);

    return redirect()->route('mealsList')->with('success', 'Meal added successfully.');
}


    /**
     * Show a single meal by ID.
     */
    public function show($id)
    {
        $meal = Meals::findOrFail($id);
        return view('admin.showMeal', compact('meal'));
    }

    /**
     * Show the form for editing the specified meal.
     */
    public function edit($id)
    {
        $meal = Meals::findOrFail($id);
        return view('admin.editMeal', compact('meal'));
    }

    /**
     * Update the specified meal in storage.
     */
    public function update(Request $request, $id)
    {
        $meal = Meals::findOrFail($id);

        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'required|string',
            'price'       => 'required|numeric|min:0',
            'category'    => 'required|string|in:appetizer,main course,dessert,drink',
            'stock'       => 'required|integer|min:0',
            'availability'=> 'required|boolean',
            'photo'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->only(['name','description','price','category','stock']);
        $data['available'] = $request->input('availability');

        if ($request->hasFile('photo')) {
            if ($meal->image && Storage::disk('public')->exists(str_replace('/storage/', '', $meal->image))) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $meal->image));
            }

            $path = $request->file('photo')->store('meals', 'public');
            $data['image'] = '/storage/' . $path;
        }

        $meal->update($data);

        return redirect()->route('mealsList')->with('success', 'Meal updated successfully.');
    }

    /**
     * Remove the specified meal from storage.
     */
    public function destroy($id)
    {
        $meal = Meals::findOrFail($id);

        if ($meal->image && Storage::disk('public')->exists(str_replace('/storage/', '', $meal->image))) {
            Storage::disk('public')->delete(str_replace('/storage/', '', $meal->image));
        }

        $meal->delete();

        return redirect()->route('mealsList')->with('success', 'Meal deleted successfully.');
    }
   public function menu()
    {
        $meals = Meals::all(); // Get all meals
        return view('menu', compact('meals'));
    }
}
