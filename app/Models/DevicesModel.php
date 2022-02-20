<?php namespace App\Models;

 use CodeIgniter\Model;
 use App\Entites\Devices;

 class DevicesModel extends Model
 {
    protected $table      = 'devices';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = Device::class; //puede retornar distintos tipos de datos. Si se definio una etidad de coloca asi
    protected $useSoftDeletes = true;//se usa para el campo deleted_at. Al momento de borrar un registro, codeigniter agrega una fecha en este registro. Si hay una fecha en este campo, esos registros no se traeran en las consultas

    protected $allowedFields = ['name', 'serie', 'sampleTime'];//campos permitidos que se van a poder editar

    protected $useTimestamps = true;//manejo de fechas para los campos abajo definidos
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    //Campos para validaciones
    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;

 }