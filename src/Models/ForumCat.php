<?php

namespace XRA\Forum\Models;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManagerStatic as Image;

//------ traits ----
use XRA\Blog\Models\Traits\LinkedTrait;
use XRA\Extend\Traits\Updater;
use XRA\Extend\Traits\CrudSimpleTrait as CrudTrait;

use Laravel\Scout\Searchable;

//--------- models --------
use XRA\Blog\Models\Post;
use XRA\Blog\Models\PostRelated;


class ForumCat extends Model{
    //
    use Updater;
    //use Searchable; //nella importazione rompe
    use LinkedTrait;

    protected $table = "forum_cats";
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
    public function forumItems(){
        $pivot=with(new PostRelated)->getTable();
        return $this->morphToMany(ForumItem::class,'related',$pivot,'post_id','related_id');
    }

}
