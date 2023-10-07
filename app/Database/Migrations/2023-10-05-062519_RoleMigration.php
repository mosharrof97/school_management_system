<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserMigration extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'role_id'=>array(
                'type'           => 'INT',
                'auto_increment' => true,
            ),
            'name'=>array(
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ),
            
        ));
        $this->forge->addKey('role_id', true);
        $this->forge->createTable('role');
    }

    public function down()
    {
        $this->forge->dropTable('role'); 
    }
}
