<?php 

namespace Entity;

use Spot\EntityInterface as Entity;
use Spot\MapperInterface as Mapper;
use Spot\EventEmitter as EventEmitter;

/**
 *  Model for User
 *  
 */

 class User extends \Spot\Entity
 {

    protected static $table = 'users';
    
    public static function fields(){
        return [
            'id'           => ['type' => 'integer', 'primary' => true, 'autoincrement' => true],
            'fist_name'    => ['type' => 'string', 'length' => 100, 'notnull' => true],
            'last_name'    => ['type' => 'string', 'length' => 100 ],
            'email'        => ['type' => 'string', 'required' => true, 'unique' => true,
                'validation' => [
                    'email',
                    'length' => [4, 255]
                ]
            ],
            'password'     => ['type' => 'string', 'required' => true, 'length' => 150],
            'user_name'    => ['type' => 'string', 'unique' => true, 'length' => 50],
            'type_user'    => ['type' => 'string', 'required' => true, 'options' => [
                'admin', 
                'user'
            ]],
            'is_active'    => ['type' => 'smallint'],
            'date_created' => ['type' => 'datetime', 'value' => new \DateTime()]
        ];
    }

    public static function events(EventEmitter $eventEmitter)
    {
        $eventEmitter->on('beforeInsert', function (Entity $entity, Mapper $mapper) {
            $entity->password = md5( $entity->password );
        });

        $eventEmitter->on('beforeUpdate', function (Entity $entity, Mapper $mapper) {
            $current_passr = $mapper->first(['id' => $entity->toArray()['id']])->toArray()['password'];
            if ($entity->password != $current_passr) {
                $entity->password = md5($entity->password);
            }
        });
    }
    
 } 