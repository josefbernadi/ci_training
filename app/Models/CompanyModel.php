<?php
namespace App\Models;

use CodeIgniter\Model;

class CompanyModel extends Model
{
    protected $table = 'ms_company';

    public function getCompany($id = false){
        if ($id){
            return $this->getWhere(['company_id' => $id]);
        } else {
            return $this->findAll();
        }
    }
}
