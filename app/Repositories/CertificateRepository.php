<?php
namespace App\Repositories;

use \App\Models\Certificate;

class CertificateRepository
{
    public function getCertificateById(int $id){
        return Certificate::query()->find($id);
    }

    public function createCertificate(array $data){
       return Certificate::query()->create($data);
    }

    public function getCertificateByNumber(int $certificateNumber){
        return Certificate::query()->where('certificateNumber', $certificateNumber)->first();
    }
}
