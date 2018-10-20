<?php
namespace XRA\Forum\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//--------- traits -----------
use XRA\Extend\Traits\CrudContainerItemTrait as CrudTrait;

//------------ Models ----------------
use XRA\Food\Models\Cuisine;
use XRA\Food\Models\Recipe;
use XRA\Food\Models\Restaurant;
use XRA\Blog\Models\Post;
//use XRA\Blog\Models\PostRev;
use XRA\Blog\Models\PostRelated;
use XRA\Blog\Models\PostShopItem;

use Cache;
use DB;
use Session;

class ForumTopicController extends Controller{
	use CrudTrait;	
}