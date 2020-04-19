<?php
namespace App\Controllers;

use App\Models\EmployeeModel;
use App\Models\CompanyModel;
class EmployeeController extends BaseController
{
    public function showEmployeeList($id){
        $employee = new EmployeeModel();
        $data['employee'] = $employee->getEmployeeByCompanyId($id);
		return view('employee-list', $data);
    }

    public function deleteEmployee($id){
		$employee = new EmployeeModel();
        $employee->deleteEmployee($id);
        return redirect()->back();
	}
}