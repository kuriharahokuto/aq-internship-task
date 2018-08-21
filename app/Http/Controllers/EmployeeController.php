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
    dd($employee);

    return response()->json(Employee::all()->toArray(), 200, [], JSON_UNESCAPED_UNICODE);
  }

  public function nameGet($family_name, $given_name): \Illuminate\Http\JsonResponse
  {
    //姓名取得
    $name = Employee::select('position')->where("family_name","like",$family_name)->where('given_name',"like",$given_name)->get();
    // dd($name->get());
    return response()->json($name);
  }
}
