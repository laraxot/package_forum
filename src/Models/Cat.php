<?php
namespace XRA\Forum\Models;

use Illuminate\Database\Eloquent\Model;
//------ traits ----
use XRA\Blog\Models\Traits\PostTrait;
use XRA\Extend\Traits\Updater;
use XRA\Extend\Traits\CrudSimpleTrait as CrudTrait;

use Laravel\Scout\Searchable;

//--------- models --------
use XRA\Blog\Models\Post;

class Cat extends Model{
	protected $table = "blog_posts";
    protected $primaryKey = 'post_id';
    public $incrementing = false;	
}