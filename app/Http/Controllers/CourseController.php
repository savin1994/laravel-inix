<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;



class CourseController extends Controller
{
    public function index()
    {
        $courses=Course::all();
        return view('courses.index', compact('courses'))->with('no', 1);
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required|max:255',
            'price' => 'required|integer',
            'description' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,jpg,png,svg|max:1924'
        ]);

        $input = $request->all();
        if($image = $request->file('image'))
        {
            $target_path = 'images/';
            $img_name = date('YmdHis').'.'.$image->getClientOriginalExtension();

            $image->move($target_path, $img_name);
            $input['image'] = $img_name;
        }

        Course::create($input);
        return redirect()
        ->route('courses.index')
        ->with('success','Data Berhasil Ditambahkan');
    }

    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    public function update( Request $request, Course $course)
    {
        $request->validate([
            'course_name' => 'required|max:255',
            'price' => 'required|integer',
            'description' => 'required|max:255'
        ]);

        $input = $request->all();
        if($image = $request->file('image'))
        {
            unlink('images/'.$course->image);
            $target_path = 'images/';
            $img_name = date('YmdHis').'.'.$image->getClientOriginalExtension();

            $image->move($target_path, $img_name);
            $input['image'] = $img_name;
        }else
        {
            unset($input['image']);
        }
        $course->update($input);
        return redirect()
        ->route('courses.index')
        ->with('success','Data Berhasil Diupdate');
    }

    public function show (Course $course)
    {
         return view('courses.show', compact('course'));
    }

    public function destroy ( Request $request ,$id)
    {
        $course = Course::find($id);
        $destination = 'images/'.$course->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
            $course ->delete();
            return redirect()->back()->with('success','Data gambar berhasil dihapus');

    }

}
