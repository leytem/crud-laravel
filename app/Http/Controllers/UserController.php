<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PhpParser\Node\Expr\List_;

class Student extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'age',
        'province'
    ];
    public static function List()
    {
        // $data = Student::all();
        // $data = self::get();   // self : model clune vea hx
        $data = self::all();   // self : model clune vea hx
        return $data;
    }
    public static function store($request,$id=null){
        $data = $request->only('name', 'age', 'province');
        // $data = self::create($data);
        $data = self::updateOrCreate(['id'=>$id],$data);
    }
    public static function show($id){
        $data = self::find($id);
        return $data;
    }
  
    
}