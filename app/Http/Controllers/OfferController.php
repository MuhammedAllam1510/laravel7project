<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\models\Video;
use App\Offer\Offer;
//use Dotenv\Validator;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use LaravelLocalization;


class OfferController extends Controller
{
    public function index(){
       return  Offer::get();
    }

    public function create()
    {
        return view('Offer.OfferView');
    }
// ================================================================================================
    public function store(OfferRequest $request)
    {


        $file_name = $this->saveimage($request -> photo , 'images/Offers');

        Offer::create([
            'photo' => $file_name,
            'FirstName_en' => $request->FirstName_en,
            'FirstName_ar' => $request->FirstName_ar,
            'LastName_en' => $request->LastName_en,
            'LastName_ar' => $request->LastName_ar,
        ]);
        return redirect()->back()->with(['success'=>'تم اضافة العنصر بنجاح']);
    }
    // ================================================================================================
    protected function saveimage($photo , $folder){

        $file_extension = $photo -> getClientOriginalExtension();
        $file_name = time().".".$file_extension;
        $path = $folder;
        $photo -> move($path , $file_name);
        return $file_name ;
    }

    // ================================================================================================

    public function GetAllOffer()
    {
         $dataoffer = Offer::select(
             'FirstName_'.LaravelLocalization::getCurrentLocale() . ' as name' ,
             'id' ,
             'LastName_'.LaravelLocalization::getCurrentLocale() . ' as detais'
         )->get();
         return view('Offer.GetAllOffer' , compact('dataoffer'));
    }
// ================================================================================================
    public function edite($id)
    {
        $data = Offer::select( 'id' , 'FirstName_ar', 'FirstName_en' , 'LastName_ar' , 'LastName_en')->find($id);
        return view('Offer.Edite' , compact('data')) ;

    }
// ================================================================================================
    public function update(OfferRequest $request , $id)
    {
        $dataOffer = Offer::find($id);
        if(!$dataOffer)
            return redirect()->back();
        $dataOffer -> update($request->all());
        return redirect()->route('offer.GetAllOffer');
    }

    public function VideoView()
    {
        $video = Video::first();
        return view('offer.VideoViewblade' , compact('video'));
    }



}
