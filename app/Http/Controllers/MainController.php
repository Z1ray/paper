<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Term_paper;
use App\Models\Thing;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function teacher(){
        $teachers = Teacher::all();
        $things = Thing::all();
        $groups = Group::all();
        $students = Student::all();
        return view('teacher', compact('teachers', 'things', 'groups', 'students'));
    }

    public function registrate(){
        $groups = Group::all();

        return view('registrate', compact('groups'));
    }

    public function post(Request $req){
        $post = new Student();
        $post->name = $req->input('name');
        $post->surname = $req->input('surname');
        $post->patronymic = $req->input(    'patronymic');
        $post->id_group = $req->input('group');
        $post->login = $req->input('login');
        $post->password = $req->input('password');

        $post->save();

        return redirect()->route('teacher');
    }

    public function student($id){
        $student = Student::find($id);
        $papers = Term_paper::where('id_student', '=', $id)->get();
        return view('student', compact('student', 'papers'));
    }

    public function addFile($id){
        $things = Thing::all();
        $students = Student::find($id);

        return view('addFile', compact('things', 'students'));
    }

    public function update($id){
        $paper = Term_paper::find($id);

        return view('update', compact( 'paper'));
    }

    public function updateOne(Request $req, $id){
        $paper = Term_paper::find($id);
        $paper->grade = $req->input('grade');
        $paper->save();

        return redirect()->route('update', $id);
    }

    public function addPost(Request $req, $id)
    {
        if ($req->hasFile('file')) {

            $file = $req->file('file');

            $filename = $file->getClientOriginalName();
            $path = $file->storeAs('public', $filename);

            $post = new Term_paper();
            $post->id_things = $req->input('thing');
            $post->theme = $req->input('theme');
            $post->id_student = $id;
            $post->file = $filename;

            $post->save();
            return redirect()->route('student', $id);

        }
    }

}
