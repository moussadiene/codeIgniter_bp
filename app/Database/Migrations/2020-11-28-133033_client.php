<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Client extends Migration
{

	protected $DBGroup = 'alternate_db_group';

	public function up()
	{

		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'matricule'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
				'null'           => false,
			],
			'nom' => [
				'type'           => 'TEXT',
				'constraint'     => '100',
				'null'           => true,
			],
			'prenom' => [
				'type'           => 'TEXT',
				'constraint'     => '100',
				'null'           => true,
			],
			'sexe' => [
				'type'           => 'TEXT',
				'constraint'     => '100',
				'null'           => true,
			],
			'cni' => [
				'type'           => 'TEXT',
				'constraint'     => '100',
				'null'           => true,
			],
			'adresse' => [
				'type'           => 'TEXT',
				'constraint'     => '100',
				'null'           => true,
			],
			'telephone' => [
				'type'           => 'TEXT',
				'constraint'     => '100',
				'null'           => true,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('client');

		$this->db->disableForeignKeyChecks();

		// Migration rules would go here..

		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('client');
	}
}
