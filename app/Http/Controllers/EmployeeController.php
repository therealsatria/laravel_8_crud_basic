<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = Employee::where('nama','LIKE','%' .$request->search. '%')->paginate(5);
        }else{
            $data = Employee::paginate(5);
        }
        
        return view('datapegawai',compact('data'));
    }

    public function tambahpegawai(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        Employee::create($request->all());
        return redirect()->route("pegawai")->with('success','data berhasil disimpan');
    }

    public function tampilkandata($id){
        $data = Employee::find($id);
        return view('tampildata',compact('data'));
    }

    public function updatedata(Request $request,$id){
        $data = Employee::find($id);
        $data->update($request->all());
        return redirect()->route("pegawai")->with('success','data berhasil diupdate');
    }

    public function delete($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route("pegawai")->with('success','data berhasil dihapus');
    }
}