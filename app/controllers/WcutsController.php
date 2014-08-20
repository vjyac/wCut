<?php

class WcutsController extends BaseController {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

        $urlceo= "";
        return View::make('wcuts.index', array('urlceo' => $urlceo));
	}



	public function store()
	{

		

		if (!Sentry::check()) {
					$rules = [
						'urllarge' => 'required',
						'recaptcha_response_field' => 'required|recaptcha'
					];

					if (! Wcut::isValid(Input::all(),$rules)) {
						return Redirect::back()->withInput()->withErrors(Wcut::$errors);
					}
		}

		if (Input::get('urllarge','')=='') {
			return View::make('wcuts.index', array('urlceo' => 'Invalid url large'));
		}


    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';

		$wcut = new Wcut;


		$i = 0;

		do {
    			$urlceo = str_random(4);
					$i++;
					$wcutvalidate = DB::table('wcuts')->where('urlceo', '=', $urlceo)->first();
		} while (count($wcutvalidate)==1);

		$wcut->users_id = 0;
		$wcut->wcut = Input::get('urllarge','');
		$wcut->urlceo = $urlceo;
		$wcut->visitas = 0;
		$wcut->generate = $i;
    $wcut->ip = $ipaddress;

		$wcut->save();

		return View::make('wcuts.index', array('urlceo' => 'http://wcut.co/' . $urlceo));

	}




public function ceoredirect($urlceo)
{

		$wcut = DB::table('wcuts')->where('urlceo', '=', $urlceo)->first();

		if ($wcut) {
				$wcut = Wcut::find($wcut->id);
				$wcut->visitas++;
				$wcut->save();

				return Redirect::to($wcut->wcut);
		}

		return View::make('wcuts.index', array('urlceo' => 'Short url does not exist'));

}



}
