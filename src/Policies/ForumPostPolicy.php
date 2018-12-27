<?php

namespace XRA\Forum\Policies;
/*
use App\User;
use App\Post;
*/
use XRA\LU\Models\User;
use XRA\Forum\Models\ForumPost as Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class ForumPostPolicy{
    use HandlesAuthorization;

    public function before($user, $ability){
        if (isset($user->perm) && $user->perm->perm_type>=5) {  //superadmin
            return true;
        }
    }

    /*
    public function update(User $user, Post $post)
    {
        return $user->id === $post->user_id;
    }
    */

    public function create(User $user, Post $post){
        return true;
    }

    public function edit(User $user, Post $post){
        if($post->created_by==$user->handle  ){
            return true;
        }
        return false;
    }

    public function show(User $user, Post $post){
        return true;
    }
}
