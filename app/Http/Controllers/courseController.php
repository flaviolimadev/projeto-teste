<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Classe;
use App\Models\ClasseFinish;
use App\Models\ClasseSave;
use App\Models\Course;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class courseController extends Controller
{
    //
    public function newCourse(Request $r){

        $AuthUser = Auth::user();
        $categorias = Category::all();

        return view('newcourse', [
            'AuthUser' => $AuthUser,
            'categorias' => $categorias,
            'sucess' => isset($r->sucess) ? $r->sucess : 999,
        ]);
    }

    public function myCourse(Request $r){

        $AuthUser = Auth::user();
        $courses = Course::where('user_id', $AuthUser->id)->get();

        return view('mycourse', [
            'AuthUser' => $AuthUser,
            'sucess' => isset($r->sucess) ? $r->sucess : 999,
            'courses' => $courses
        ]);
    }

    public function allCourses(Request $r, $curso = 1, $modulo){

        $AuthUser = Auth::user();
        $courses = Course::where('id', $curso)->first();
        $modules = $modulo == 1 ? $courses->modulos->first() : Module::where('id', $modulo)->first();
        $planos = inviteController::compras( $AuthUser->id );

        #return $modules;
        

        if($planos['compras_pagas'] || $courses->user_id == $AuthUser->id){

            return view('allcourses', [

                'AuthUser' => $AuthUser,
                'sucess' => isset($r->sucess) ? $r->sucess : 999,
                'courses' => $courses,
                'modules' => $modules
            ]);

        }else{

            return redirect()->route('marketplace');

        }
    }

    public function editCourse(Request $r, $id){

        $AuthUser = Auth::user();
        $course = Course::find($id);
        $modules = Module::where('course_id', $id)->get();
        $classes = Classe::where('course_id', $id)->get();
        $module_edis = isset($r->edit_course) ? Module::find($r->edit_course) : 0;
        $classe_edis = isset($r->edit_classe) ? Classe::find($r->edit_classe) : 0;
        $categorias = Category::all();

        return view('editcourse', [
            'AuthUser' => $AuthUser,
            'course' =>  $course,
            'modules' => $modules,
            'classes' => $classes,
            'module_edis' => $module_edis,
            'classe_edis' => $classe_edis,
            'categorias' => $categorias
        ]);
    }

    public function viewCourse($id, $modulo){

        $AuthUser = Auth::user();
        $modulo = Module::find($modulo);
        $aula = $id == 1 ? $modulo->aulas->first() : Classe::find($id);
        $concluida = ClasseFinish::where('classe_id', $id)->where('status', 1)->first();
        $salva = ClasseSave::where('classe_id', $id)->where('status', 1)->first();
        $planos = inviteController::compras( $AuthUser->id );

        #return $aula;

        if($planos['compras_pagas'] || $modulo->user_id == $AuthUser->id){

            return view('viewcourse', [
                'AuthUser' => $AuthUser,
                'modulo' => $modulo,
                'aula' => $aula,
                'concluida' => $concluida,
                'salva' => $salva
            ]);

        }else{

            return redirect()->route('marketplace');

        }


    }


    public function addCourse(Request $r){

        $AuthUser = Auth::user();

        #Validados os inputs recebidos do formulario;
        $validate = $r->validate([
            'name' => 'required|min:5|max:80',
            'category' => 'required',
            'description' => 'required',
            'avatar' => 'required',
        ]);

        #Pegando a imagem e salvando no store;
        $save = $r->file('avatar') == null ? $AuthUser->avatar : $r->file('avatar')->store('/', 'public');

        #Criando um novo curso;
        $new_course = new Course;
        $new_course->user_id = $AuthUser->id;
        $new_course->name = $r->name;
        $new_course->avatar = $save;
        $new_course->category_id = $r->category;
        $new_course->description = $r->description;
        $new_course->save();

        return redirect()->route('myCourse', ['sucess' => 1]);

    }


    public function updateCourse(Request $r, $id){

        $AuthUser = Auth::user();

        #Validados os inputs recebidos do formulario;
        $validate = $r->validate([
            'name' => 'required|min:5|max:80',
            'category' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        #Criando um novo curso;
        $new_course = Course::find($id);

        #Pegando a imagem e salvando no store;
        $save = $r->file('avatar') == null ? $new_course->avatar : $r->file('avatar')->store('/', 'public');

        $new_course->name = $r->name;
        $new_course->avatar = $save;
        $new_course->status = $r->status;
        $new_course->category_id = $r->category;
        $new_course->description = $r->description;
        $new_course->save();

        return redirect()->route('myCourse', ['sucess' => 1]);

    }


    public function addModule(Request $r, $id){

        $AuthUser = Auth::user();

        #Validados os inputs recebidos do formulario;
        $validate = $r->validate([
            'name' => 'required|min:5|max:80',
            'description' => 'required',
            'status' => 'required',
        ]);

        #Pegando a imagem e salvando no store;
        $save = $r->file('avatar') == null ? $AuthUser->avatar : $r->file('avatar')->store('/', 'public');


        #Adicionando um novo Modulo;
        $new_module = new Module;
        $new_module->user_id = $AuthUser->id;
        $new_module->course_id = $id;
        $new_module->name = $r->name;
        $new_module->url_video = $r->url_video;
        $new_module->type_video = $r->type_video;
        $new_module->avatar = $save;
        $new_module->description = $r->description;
        $new_module->content = $r->content;
        $new_module->status = $r->status;
        $new_module->save();

        return redirect()->route('myCourse', ['sucess' => 1]);


    }

    public function updateModule(Request $r, $id){

        $AuthUser = Auth::user();

        #Validados os inputs recebidos do formulario;
        $validate = $r->validate([
            'name' => 'required|min:5|max:80',
            'description' => 'required',
            'status' => 'required',
        ]);

        $new_module = Module::find($id);

        #Pegando a imagem e salvando no store;
        $save = $r->file('avatar') == null ? $new_module->avatar : $r->file('avatar')->store('/', 'public');


        #Adicionando um novo Modulo;
        $new_module->name = $r->name;
        $new_module->url_video = $r->url_video;
        $new_module->type_video = $r->type_video;
        $new_module->avatar = $save;
        $new_module->description = $r->description;
        $new_module->content = $r->content;
        $new_module->status = $r->status;
        $new_module->save();

        return redirect()->route('myCourse', ['sucess' => 1]);


    }


    public function addClass(Request $r, $id){

        $AuthUser = Auth::user();
        $course = Course::find($id);

        #Validados os inputs recebidos do formulario;
        $validate = $r->validate([
            'name' => 'required|min:5|max:80',
            'type_video' => 'required',
            'url_video' => 'required',
            'description' => 'required',
            'status' => 'required',
            'content' => 'required',
            'module' => 'required',
        ]);


        #Criando nossa Aula no sistema;
        $new_class = new Classe;
        $new_class->user_id = $AuthUser->id;
        $new_class->module_id = $r->module;
        $new_class->course_id = $id;
        $new_class->name = $r->name;
        $new_class->type_video = $r->type_video;
        $new_class->url_video = $r->url_video;
        $new_class->description = $r->description;
        $new_class->status = $r->status;
        $new_class->content = $r->content;
        $new_class->save();

        return redirect()->route('myCourse', ['sucess' => 1]);

    }


    public function updateClass(Request $r, $id){

        $AuthUser = Auth::user();
        $course = Course::find($id);

        #Validados os inputs recebidos do formulario;
        $validate = $r->validate([
            'name' => 'required|min:5|max:80',
            'type_video' => 'required',
            'url_video' => 'required',
            'description' => 'required',
            'status' => 'required',
            'content' => 'required',
            'module' => 'required',
        ]);

        #Criando nossa Aula no sistema;
        $new_class = Classe::find($r->classId);
        $new_class->user_id = $AuthUser->id;
        $new_class->module_id = $r->module;
        $new_class->course_id = $id;
        $new_class->name = $r->name;
        $new_class->type_video = $r->type_video;
        $new_class->url_video = $r->url_video;
        $new_class->description = $r->description;
        $new_class->status = $r->status;
        $new_class->content = $r->content;
        $new_class->save();


        return redirect()->route('myCourse', ['sucess' => 1]);

    }

    public function viewClasses($id){

        $AuthUser = Auth::user();
        $aulas = Classe::where('course_id', $id)->get();
        $concluida = ClasseFinish::where('course_id', $id)->where('status', 1)->get();
        $salva = ClasseSave::where('course_id', $id)->where('status', 1)->get();
        $curso = Course::find($id);

        return view('viewClasses', [
            'AuthUser' => $AuthUser,
            'aulas' => $aulas,
            'concluidas' => $concluida,
            'salvas' => $salva,
            'curso' => $curso
        ]);

    }

    public function videoSave($id){

        $aula = ClasseSave::where('classe_id', $id)->first();

        if($aula){

            if($aula->status == 1){
                $aula->status = 0;
                $aula->save();
            }else{
                $aula->status = 1;
                $aula->save();
            }

        }else{

            $aula = Classe::find($id);

            $nova_aula = new ClasseSave;
            $nova_aula->user_id = Auth::user()->id;
            $nova_aula->course_id = $aula->course_id;
            $nova_aula->module_id = $aula->module_id;
            $nova_aula->classe_id = $aula->id;
            $nova_aula->status = 1;
            $nova_aula->save();

        }

        return redirect()->route('viewCourse', ['id' => $id, 'modulo' =>  $aula->module_id]);

    }

    public function videoFinish($id){

        $aula = ClasseFinish::where('classe_id', $id)->first();

        if($aula){

            if($aula->status == 1){
                $aula->status = 0;
                $aula->save();
            }else{
                $aula->status = 1;
                $aula->save();
            }

        }else{

            $aula = Classe::find($id);

            $nova_aula = new ClasseFinish;
            $nova_aula->user_id = Auth::user()->id;
            $nova_aula->course_id = $aula->course_id;
            $nova_aula->module_id = $aula->module_id;
            $nova_aula->classe_id = $aula->id;
            $nova_aula->status = 1;
            $nova_aula->save();

        }

        return redirect()->route('viewCourse', ['id' => $id, 'modulo' =>  $aula->module_id]);

    }

}
