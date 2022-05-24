<?php

namespace App\Services;

use App\Models\Certificate;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Repositories\CertificateRepository;
use Carbon\Carbon;
use ReflectionClass;
use RuntimeException;

class CertificateService
{

    public function __construct(private CertificateRepository $certificateRepository){
    }

    public function createCertificate(array $data){
        $data['certificateFinish'] = Carbon::parse($data['certificateFinish']);
        return $this->certificateRepository->createCertificate($data);
    }

    public function getCertificate($id){
        return $this->certificateRepository->getCertificateById($id);
    }

    public function createPDF(array $data) {
        view()->share('certificate',$data);
        $pdf = PDF::loadView('certificate',$data)->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('certificate.pdf');
    }

}
