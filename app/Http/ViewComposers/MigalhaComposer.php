<?php
/**
 * Created by PhpStorm.
 * User: dennys
 * Date: 20/08/15
 * Time: 20:31
 */
namespace App\Http\ViewComposers;

use App\Model\Rota;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

//use Illuminate\Users\Repository as UserRepository;

class MigalhaComposer
{


    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $rota_as = $rota_as = Route::Current()->getAction()['as'];

        $rota = Rota::where('as',$rota_as)->first();

        if(!isset($rota))
            $rota = null;

        $view->with('rota', $rota);
    }
}