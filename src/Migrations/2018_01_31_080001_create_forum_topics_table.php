<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

//----- models------- 
use XRA\Forum\Models\ForumCat;
use XRA\Forum\Models\ForumTopic;

class CreateForumTopicsTable extends Migration {
	public function getTable(){
		return with(new ForumTopic)->getTable();
	}

	public function up(){
		if (!Schema::hasTable($this->getTable())) {
			Schema::create($this->getTable(), function (Blueprint $table) {
				$table->increments('post_id');

				$table->string('created_by');
				$table->string('updated_by');
				$table->string('deleted_by');

				$table->ipAddress('created_ip');
				$table->ipAddress('updated_ip');
				$table->ipAddress('deleted_ip'); //$table->ipAddress('visitor');	IP address equivalent column.
				
				$table->timestamps();
				$table->softDeletes();
			});
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down(){
		Schema::dropIfExists($this->getTable());
	}

}//end CreateBlogPostLocationsTable