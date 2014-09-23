<?php

class m140630_120708_admin_table extends CDbMigration
{
	public function up()
	{
		$this->createTable(
			'{{user}}',
			array(
				'id' => 'pk',
				'first_name' => 'string NOT NULL',
				'last_name' => 'string NOT NULL',
				'username' => 'string NOT NULL',
			    'create_time' => 'datetime NOT NULL',
				'update_time' => 'datetime NOT NULL',
				'password' => 'string NOT NULL',
			),
				'ENGINE=InnoDB'
		);
		$this->createTable(
			'{{section}}',
			array(
				'id' => 'pk',
				'title' => 'string NOT NULL',
			    'create_time' => 'datetime NOT NULL',
				'update_time' => 'datetime NOT NULL',
			),
				'ENGINE=InnoDB'
		);
		$this->createTable(
				'{{sub_section}}',
				array(
						'sub_section_id' => 'pk',
						'main_section_id' =>'int(11) NOT NULL',
						'sub_section_title' => 'string NOT NULL',
						'create_time' => 'datetime NOT NULL',
						'update_time' => 'datetime NOT NULL',
				),
				'ENGINE=InnoDB'
		);		
		$this->createTable(
			'{{article}}',
			array(
				'id' => 'pk',
				'title' => 'string NOT NULL',
				'text' => 'text',
				'full_text' =>'text',	
				'section_id' => 'int(11) NOT NULL',
				'sub_sectionId' => 'int(11) NOT NULL',
			    'create_time' => 'datetime NOT NULL',
				'update_time' => 'datetime NOT NULL',
			),
				'ENGINE=InnoDB'
		);
		
		 $this->addForeignKey("fk_sec_article", "{{article}}", "section_id", "{{section}}", "id", "CASCADE", "RESTRICT");
		 $this->addForeignKey("fk_subsec_article", "{{article}}", "sub_sectionId", "{{sub_section}}", "sub_section_id", "CASCADE", "RESTRICT");
		 $this->addForeignKey("fk_coll_sec", "{{sub_section}}", "main_section_id", "{{section}}", "id", "CASCADE", "RESTRICT");
	}

	public function down()
	{
		$this->truncateTable('{{user}}');
		$this->dropTable('{{user}}');
		
		$this->truncateTable('{{article}}');
		$this->dropTable('{{article}}');
			
		$this->truncateTable('{{sub_section}}');
		$this->dropTable('{{sub_section}}');	
				
		$this->truncateTable('{{section}}');
		$this->dropTable('{{section}}');
		

		

	}

}