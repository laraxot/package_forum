<?php



namespace XRA\Forum\Models;

use Illuminate\Database\Eloquent\Model;
//------ traits ----
use Laravel\Scout\Searchable;
use XRA\Blog\Models\PostRelated;
use XRA\Blog\Models\Traits\LinkedTrait;
//--------- models --------
use XRA\Extend\Traits\Updater;

class ForumItem extends Model
{
    use Updater;
    //use Searchable; //nella importazione rompe
    use LinkedTrait;

    protected $table = 'forum_items';
    protected $primaryKey = 'post_id';
    public $incrementing = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['post_id'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    //---- relationship ---
    public function forumTopics()
    {
        $pivot = with(new PostRelated())->getTable();

        return $this->morphToMany(ForumTopic::class, 'related', $pivot, 'post_id', 'related_id');
    }
}
