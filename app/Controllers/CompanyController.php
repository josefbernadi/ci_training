<?php
namespace App\Controllers;

use App\Models\CompanyModel;
class CompanyController extends BaseController
{
	public function showCompanyList()
	{
        $company = new CompanyModel();
        $data['company'] = $company->getCompany();
		return view('company_list', $data);
	}

	//--------------------------------------------------------------------

}
