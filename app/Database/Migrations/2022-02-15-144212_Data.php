<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Data extends Migration
{
    public function up()
    {
        
        $this->forge->addField([
            'id'          => [
                    'type'           => 'INT',
                    'constraint'     => 10,
                    'unsigned'       => TRUE,
                    'auto_increment' => TRUE,
            ],
            'device_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => TRUE,
                'null'           => TRUE,
            ],
            'temperature'       => [
                    'type'           => 'FLOAT',
            ],
            
            'humidity'       => [
                'type'           => 'FLOAT',
            ],
           
            'created_at'=> [
                'type'              => 'DATETIME',
                'null'              => TRUE,
            ],
            'deleted_at'            => [
                'type'              => 'datetime',
                'null'              => true,
            ]
    ]);
    $this->forge->addKey('id', TRUE);
    $this->forge->addForeignKey('device_id', 'devices', 'id','CASCADE','CASCADE');
    $this->forge->createTable('data');
   
    }

    public function down()
    {
        $this->forge->dropTable('data');
    }
}
