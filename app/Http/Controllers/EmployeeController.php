<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
  /**
   * @return \Illuminate\Http\JsonResponse
   */
  public function all(): \Illuminate\Http\JsonResponse
  {
      return response()->json(Employee::all()->toArray(), 200, [], JSON_UNESCAPED_UNICODE);
  }

}
