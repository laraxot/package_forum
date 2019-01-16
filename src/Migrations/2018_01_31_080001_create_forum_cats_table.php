<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//----- models-------
use XRA\Forum\Models\ForumCat;

class CreateForumCatsTable extends Migration
{
    public function getTable()
    {
        return with(new ForumCat())->getTable();
    }

    public function up()
    {
        if (!Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table) {
                $table->increments('post_id');

                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->string('deleted_by')->nullable();

                $table->ipAddress('created_ip')->nullable();
                $table->ipAddress('updated_ip')->nullable();
                $table->ipAddress('deleted_ip')->nullable(); //$table->ipAddress('visitor');	IP address equivalent column.

                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists($this->getTable());
    }
}//end CreateBlogPostLocationsTable
