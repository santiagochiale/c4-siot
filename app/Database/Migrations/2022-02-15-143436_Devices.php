<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Devices extends Migration
{
    public function up()
    {
            
            $this->forge->addField([
                'id'        => [
                        'type'           => 'INT',
                        'constraint'     => 5,
                        'unsigned'       => TRUE,
                        'auto_increment' => TRUE,
                ],
                'name'      => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
                    'unique'         => TRUE,
                ],
                'serie'     => [
                        'type'           => 'VARCHAR',
                        'constraint'     => '255',
                        'unique'         => TRUE,
                ],
                'sampleTime'=> [
                    'type'              => 'INT',
                    'constraint'        => 4,
                ],

                'created_at'=> [
                    'type'              => 'DATETIME',
                    'null'              => TRUE,
                ],

                'updated_at'=> [
                    'type'              => 'DATETIME',
                    'null'              => TRUE,
                ],

                'deleted_at'=> [
                    'type'              => 'DATETIME',
                    'null'              => TRUE,
                ]
                
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('devices');
    }

    public function down()
    {
        $this->forge->dropTable('devices');
    }
}
