<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Client extends Migration
{

	// protected $DBGroup = 'alternate_db_group';

	public function up()
	{

		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],

			'nom' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
				'null'           => false,
			],
			'prenom' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
				'null'           => false,
			],
			'sexe' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
				'null'           => true,
			],
			'cni' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
				'null'           => false,
			],
			'adresse' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
				'null'           => true,
			],
			'telephone' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
				'null'           => true,
			],
			'created_at' => [
				'type'           => 'DATE',
				'null'           => true,
			],
			'updated_at' => [
				'type'           => 'DATE',
				'null'           => true,
			],
		]);
		//$this->forge->addKey('id', true);
		$this->forge->addPrimarykey('id');
		$this->forge->createTable('client');

		//$this->db->disableForeignKeyChecks();

		// Migration rules would go here..

		//$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('client');
	}
}
