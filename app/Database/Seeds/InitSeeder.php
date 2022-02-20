<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class InitSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $devices =[];
        $data = [];

        $created_at = date('Y-m-d H:i:s');

        for ($i=1; $i < 5; $i++) { 
            $devices[] =  [
                'name'          => 'device '.$i,
                'serie'         => 'dev0'.$i,
                'sampleTime'    => 30,
                'created_at'    => $created_at
            ];
        }
        
        $builder = $this->db->table('devices');
        $builder->insertBatch($devices);

        $builder->select();
        $query = $builder->get();

        

        //Se insertan datos cada periodo de tiempo definido por el sampleTime. En este caso se definio en 30 minutos
        foreach ($query->getResult() as $row) {
            for ($i=1; $i < 48; $i++) { 
                $data[] =[
                    'device_id'     => $row->id,
                    'temperature'   => $faker->randomFloat(1,15,35),
                    'humidity'      => $faker->randomFloat(1,35,90),
                    'created_at'  => $created_at
                ]; 
                $created_at= date('Y-m-d H:i:s', strtotime('+'.($i*$row->sampleTime).' minute'));
            }
            $created_at = date('Y-m-d H:i:s');
        }

        $builder = $this->db->table('data');
        $builder->insertBatch($data);
        
    }
}
