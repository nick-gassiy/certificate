<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCertificateRequest;
use App\Services\CertificateService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct(private CertificateService $certificateService)
    {
    }

    public function index(){
        return view('home');
    }

    public function create(CreateCertificateRequest $request){
        $certificate = $this->certificateService->createCertificate($request->input());
        return redirect()->route('getCertificate',$certificate->id);
    }

    public function getCertificate($id){
        if($certificate = $this->certificateService->getCertificate($id)){
            $certificate = $certificate->toArray();
            return view('certificatepage',compact('certificate'));
        }
        return redirect()->route('home');
    }

    public function createPdf ($id){
        $certificate = $this->certificateService->getCertificate($id)->toArray();
        return $this->certificateService->createPDF($certificate);
    }


}
