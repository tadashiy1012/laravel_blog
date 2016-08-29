<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller {
  public function get() {
    $blogs = Blog::all();
    return json_encode($blogs);
  }
  public function getAt($id) {
    $result = Blog::where('id', $id)->get();
    return json_encode($result);
  }
  public function post(Request $req) {
    $data = $req->all();
    $title = $data['data']['title'];
    $body = $data['data']['body'];
    $blog = new Blog;
    $blog->title = $title;
    $blog->body = $body;
    $blog->date = new \DateTime();
    $blog->save();
    return json_encode(['ok']);
  }
}