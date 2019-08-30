<?php

namespace App\Http\Controllers\administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Category;
use App\Panel;
use App\Exam;
use App\ExamPanel;
use View;
class PanelController extends Controller
{

    public function index(Request $request)
    {
        $panels=Panel::where('category_id',session('category_id'))->paginate(25);
        $category=Category::find(session('category_id'));
        return view('administracion.panels.index',['panels' => $panels, 'category' => $category]);
    }

    public function create()
    {
        $category=Category::find(session('category_id'));
        return view('administracion.panels.create',['category' => $category]);
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'price' => 'numeric|required',
        ];

        try {
            $validator = \Validator::make($request->all(), $rules);
            if ($validator->fails()){
                return back()->withErrors($validator)->withInput();
            }
            $Panel=Panel::create($request->toArray());
            return redirect()->route('panels.edit', codifica($Panel->id))->with("notificacion", __('administracion.grabado_exito') );

        } catch (Exception $e) {
            \Log::info('Error creating item: '.$e);
            return \Response::json(['created' => false], 500);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $id=decodifica($id);
        $panel=Panel::find($id);
        $category=Category::find(session('category_id'));
        Session(['panel_id' => $id]);
        return view('administracion.panels.edit',['panel' => $panel, 'category' => $category]);
    }

    public function update(Request $request, $id)
    {

        $rules = [
            'name' => 'required',
            'price' => 'numeric|required',
        ];

        try {
            $validator = \Validator::make($request->all(), $rules);
            if ($validator->fails()){
                return back()->withErrors($validator)->withInput();
            }
            $id=decodifica($id);
            $Panel=Panel::find($id);
            $Panel->update($request->toArray());
            return redirect()->route('panels.edit', codifica($id))->with("notificacion", __('administracion.grabado_exito') );

        } catch (Exception $e) {
            \Log::info('Error creating item: '.$e);
            return \Response::json(['created' => false], 500);
        }
    }

    public function destroy($id)
    {
        $id=decodifica($id);
        try{
            $Panel=Panel::find($id);

            $Panel->delete();
            return redirect()->route('panels.index');
        } catch (\Illuminate\Database\QueryException $e) {
            return back()->with("notificacion_error", __('administracion.error_eliminando') );
        }
    }

    public function related_exams(){
        $exams=Exam::get();
        $category=Category::find(session('category_id'));
        $panel=Panel::find(session('panel_id'));
        return view('administracion.panels.related_exams',['exams' => $exams, 'category' => $category, 'panel' => $panel]);

    }
    public function related_exams_ajax(Request $request){
        $exams=Exam::search($request->q)->get();
        $view=View::make('administracion.panels.ajax', ['exams'=>$exams]);
        $data=$view->render();
        return ['status' => 'exito', "data" => $data];

    }

    public function related_marcar($id,$accion){
        if($accion==1){
            ExamPanel::create([
                'panel_id' => session('panel_id'),
                'exam_id' => decodifica($id)
            ]);
        }else{
            ExamPanel::where('panel_id',session('panel_id'))->where('exam_id',decodifica($id))->delete();
        }
        return back();
    }
}
