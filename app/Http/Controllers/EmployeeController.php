<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beacon;
use App\Employee;

class EmployeeController extends Controller
{
  /**
   * @return \Illuminate\Http\JsonResponse
   */
  public function update(Request $request,$family_name, $given_name): \Illuminate\Http\JsonResponse
  {
    //位置取得
    // return response()->json('jfasfflk',200);
    $beacon = Beacon::where('major' , $request->input('major'))->where('minor' , $request->input('minor'))->first();


    //従業員レコード取得
    $employee = Employee::where("family_name","like",$family_name)->first();

    $employee->position = $beacon->position;
    $employee->save();

    return response()->json("SUCCESS",200);
  }

  public function nameGet($family_name, $given_name): \Illuminate\Http\JsonResponse
  {
    //姓名取得
    $name = Employee::select('position')->where("family_name","like",$family_name)->where('given_name',"like",$given_name)->get();
    // dd($name->get());
    return response()->json($name);
  }

  public function allMember($family_name, $given_name): \Illuminate\Http\JsonResponse
  {
    //拡張機能　全従業員取得
    $allMember = null;
    if($family_name=="みん" && $given_name=="な") {
      $allMember = Employee::all();
    }
    return response()->json($allMember);
  }
}
