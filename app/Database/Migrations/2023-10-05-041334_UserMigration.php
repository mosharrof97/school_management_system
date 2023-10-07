<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserMigration extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'user_id'=>array(
                'type'           => 'INT',
                'auto_increment' => true,
            ),
            'name'=>array(
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ),
            'username'=>array(
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ),
            'email'=>array(
                'type'       => 'VARCHAR',
                'constraint' => '80',
            ),
            'password'=>array(
                'type'       => 'VARCHAR',
                'constraint' => '80',
            ),
            'role_id'=>array(
                'type'           => 'INT',
            ),
            'image'=>array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
            )
        ));
        $this->forge->addKey('user_id', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user'); 
    }
}
