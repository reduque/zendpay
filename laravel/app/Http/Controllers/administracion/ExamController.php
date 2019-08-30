<?php

namespace App\Http\Controllers\administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Exam;
use Session;

class ExamController extends Controller
{

    public function index(Request $request)
    {
        $request->flash();
        $exams=Exam::search($request->exam_filter)->paginate(100);
        return view('administracion.exams.index',['exams' => $exams]);
    }

    public function create()
    {
        return view('administracion.exams.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'full_name' => 'required',
            'quest_code' => 'required',
            'price' => 'numeric|required',
        ];

        try {
            $validator = \Validator::make($request->all(), $rules);
            if ($validator->fails()){
                return back()->withErrors($validator)->withInput();
            }
            $exam=Exam::create($request->toArray());
            return redirect()->route('exams.edit', codifica($exam->id))->with("notificacion", __('administracion.grabado_exito') );

        } catch (Exception $e) {
            \Log::info('Error creating item: '.$e);
            return \Response::json(['created' => false], 500);
        }
    }

    public function edit($id)
    {
        $id=decodifica($id);
        $exam=Exam::find($id);
        Session(['exam_id' => $id]);
        return view('administracion.exams.edit',['exam' => $exam]);
    }

    public function update(Request $request, $id)
    {

        $rules = [
            'name' => 'required',
            'full_name' => 'required',
            'quest_code' => 'required',
            'price' => 'numeric|required',
        ];

        try {
            $validator = \Validator::make($request->all(), $rules);
            if ($validator->fails()){
                return back()->withErrors($validator)->withInput();
            }
            $id=decodifica($id);
            $exam=Exam::find($id);
            $exam->update($request->all());
            return redirect()->route('exams.edit', codifica($id))->with("notificacion", __('administracion.grabado_exito') );

        } catch (Exception $e) {
            \Log::info('Error creating item: '.$e);
            return \Response::json(['created' => false], 500);
        }
    }

    public function destroy($id)
    {
        $id=decodifica($id);
        try{
            $exam=Exam::find($id);

            $exam->delete();
            return redirect()->route('exams.index');
        } catch (\Illuminate\Database\QueryException $e) {
            return back()->with("notificacion_error", __('administracion.error_eliminando') );
        }
    }
}
