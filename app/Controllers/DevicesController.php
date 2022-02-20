<?php

namespace App\Controllers;

use App\Entities\Device;

class DevicesController extends BaseController
{
    public function index()
    {
        $dataDevice =   [
                        'name'          => 'Nuevo Dispositivo',
                        'serie'         => 'DisNvo1',
                        'created_at'    => date('Y-m-d H:i:s') 
                    ];
        
        $device = new Device($dataDevice); //se crea la instancia de la entidad Device y se pasa al constructor los datos del disposito

        $deviceModel = model('DevicesModel');

        d($device);
        
        return view('DevicesView');
    }

   
}
