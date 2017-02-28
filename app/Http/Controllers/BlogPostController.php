<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    //

    public function post_detail($id = null)
    {
        if(!$id) 
        {
            return redirect()->route('home');
        }

        // demonstrating 3 ways to put values into views
        $detail_view = view('blog/post_detail', [
            'id' => $id
        ]);
        // put the id in the view
        $detail_view->id = $id;
        $detail_view->with('id', $id);

        return $detail_view;        
    }

    /**
     * list of blog posts
     */
    public function post_list()
    {
        // this should be retrieved from the DB but we don't know how yet
        // just for testing
        $posts = array(
            1 => 'My post',
            2 => 'Your post',
            3 => 'His post'
        );

        $list_view = view('blog/post_list');
        $list_view->posts = $posts;

        return $list_view;
    }
}
