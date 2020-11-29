<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Compte extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'client_id'       => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'     => true,
				'null'           => true,
			],
			'numero'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
				'null'           => false,
			],
			'typeCompte'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
				'null'           => false,
			],
			'dateOuverture' => [
				'type'           => 'DATETIME',
				'null'           => false,
			],
			'rib' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
				'null'           => true,
			],
			'solde' => [
				'type'           => 'DOUBLE',
				'constraint'     => '50,2',
				'null'           => true,
			],
			'agios' => [
				'type'           => 'DOUBLE',
				'constraint'     => '50,2',
				'null'           => true,
			],
			'renumeration' => [
				'type'           => 'DOUBLE',
				'constraint'     => '50,2',
				'null'           => true,
			],
			'fraisOuverture' => [
				'type'           => 'DOUBLE',
				'constraint'     => '50,2',
				'null'           => true,
			],
			'dateDebut' => [
				'type'           => 'DATE',
				'null'           => true,
			],
			'dateFin' => [
				'type'           => 'DATE',
				'null'           => true,
			],
		]);
		$this->forge->addPrimarykey('id');

		$this->forge->addForeignKey('client_id', 'client', 'id', 'CASCADE', 'CASCADE');

		$this->forge->createTable('compte');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('compte');
	}
}
