<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index()
    {
      $comments = Comment::orderBy('title', 'ASC')->get();
      return view('comments.index')->withProducts($comments);
    }


    public function create()
    {
      $comment = new Comment();
      return view('comments.create')->withProduct($comment);
    }


	public function remove(Comment $comment)
	{
	return view('comments.remove')->withProduct($comment);
	}


    public function store(Request $request)
    {
      $attributes = $request->only(['title', 'entry']);
// Создаём кортеж в БД.
$comment = Comment::create($attributes);
// Создаём всплывающее сообщение об успешном сохранении в БД:
// первый аргумент — произвольный ID сообщения, второй — перевод
// (см. resources/lang/ru/messages.php).
$request->session()->flash(
'message',
__('Created', ['title' => $comment->title])
);
// Перенаправляем клиент HTTP на маршрут с именем products.index
// (см. routes/web.php).
return redirect(route('comments.index'));
    }


    public function show(Comment $comment)
    {

    }

    public function edit(Comment $comment)
    {
        return view('comments.edit')->withProduct($comment);
    }

    public function update(Request $request, Comment $comment)
    {
      $attributes = $comment->only(['title', 'entry']);
      $comment->update($attributes);
      $request->session()->flash(
        'message',
        __('Updated', ['title' => $comment->title])
);

return redirect(route('comments.index'));
    }


    public function destroy(Comment $comment)
    {
      $comment->delete();
      $request->session()->flash(
        'message',
        __('Removed', ['title' => $comment->title]));

return redirect(route('comments.index'));
    }
}
