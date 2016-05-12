<?php

class CommoncodeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        Session::clear();
		return View::make('pages.commoncode')
            ->with('commoncode',CommonCode::where('code','=','*')->get())
            ->with('hcode',CommonCode::where('code','=','*')->get());
	}
    public function postHcode($hcode)
    {
        Session::put('hc',$hcode);
        //$hcode = CommonCode::find($hcode);
        return View::make('pages.commoncode')
            ->with('commoncode',CommonCode::where('code','=','*')->get())
            ->with('hcode',CommonCode::where('hcode','=',$hcode)->where('code','!=','*')->get());   
    }

	public function postTambah(){
        $hcode = Input::get('hcode');
        $code  = Input::get('code');
        $code_name = Input::get('code_name');

        $common = new CommonCode();
        $common->hcode = $hcode;
        $common->code = $code;
        $common->code_name = $code_name;
        $common->desc1 = Input::get('desc1');
        $common->desc2 = Input::get('desc2');
        $common->save();

        return Redirect::to('/common-code/'.Session::get('hc'));
    }
    public function postUpdate(){
            $code = CommonCode::find(Input::get('id'));
            $code->hcode    = Input::get('hcode');
            $code->code     = Input::get('code');
            $code->code_name= Input::get('code_name');
            $code->desc1    = Input::get('desc1');
            $code->desc2    = Input::get('desc2');
            $code->save();
            
            return Redirect::to('/common-code/'.Session::get('hc'));
    }
    public function getDelete($id){ //function untuk menghapus jenis
        $hcode = CommonCode::find($id);
        $hcode->delete();
        
        return Redirect::to('/common-code/'.Session::get('hc'));
    }

}
