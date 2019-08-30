<?php

namespace App\Http\Controllers\administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Category;
use Session;

class CategoryController extends Controller
{

    public function index(Request $request)
    {
        $categories=Category::paginate(25);
        return view('administracion.categories.index',['categories' => $categories]);
    }

    public function create()
    {
        return view('administracion.categories.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'category' => 'required',
        ];

        try {
            $validator = \Validator::make($request->all(), $rules);
            if ($validator->fails()){
                return back()->withErrors($validator)->withInput();
            }
            $category=Category::create($request->toArray());
            return redirect()->route('categories.edit', codifica($category->id))->with("notificacion", __('administracion.grabado_exito') );

        } catch (Exception $e) {
            \Log::info('Error creating item: '.$e);
            return \Response::json(['created' => false], 500);
        }
    }

    public function edit($id)
    {
        $id=decodifica($id);
        $category=Category::find($id);
        Session(['category_id' => $id]);
        return view('administracion.categories.edit',['category' => $category]);
    }

    public function update(Request $request, $id)
    {

        $rules = [
            'category' => 'required',
        ];

        try {
            $validator = \Validator::make($request->all(), $rules);
            if ($validator->fails()){
                return back()->withErrors($validator)->withInput();
            }
            $id=decodifica($id);
            $category=Category::find($id);
            $category->update($request->all());
            return redirect()->route('categories.edit', codifica($id))->with("notificacion", __('administracion.grabado_exito') );

        } catch (Exception $e) {
            \Log::info('Error creating item: '.$e);
            return \Response::json(['created' => false], 500);
        }
    }

    public function destroy($id)
    {
        $id=decodifica($id);
        try{
            $category=Category::find($id);

            $category->delete();
            return redirect()->route('categories.index');
        } catch (\Illuminate\Database\QueryException $e) {
            return back()->with("notificacion_error", __('administracion.error_eliminando') );
        }
    }
}
