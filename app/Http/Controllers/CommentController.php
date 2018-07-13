<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Note;
use App\Repositories\CommentRepository;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    protected $commentRepository;

    /**
     * Create a new controller instance.
     *
     * @param CommentRepository $commentRepository
     */
    public function __construct(CommentRepository $commentRepository)
    {
        $this->middleware('auth');
        $this->commentRepository = $commentRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('comments.list', $this->commentRepository->commentResource());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        return view('comments.all', $this->commentRepository->commentResource());
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Note $note)
    {
        $this->validate($request, [
            'content' => 'required|string',

        ]);
        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->note_id = $note->id;
        $comment->user_id = $request->user()->id;
        $comment->save();
        return redirect()->route('notes.show', compact('note'))->with('status', '送信しました。');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        return view('comments.show', compact('comment'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function adminShow(Comment $comment)
    {
        return view('comments.adminShow', compact('comment'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        return view('comments.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
      $this->validate($request, [
          'title' => 'required|string|max:25',
          'when' => 'required|string',
          'where' => 'required|string',
          'who' => 'required|string',
          'what' => 'required|string',
          'why' => 'required|string',
          'how' => 'required|string',
          'is_published' => 'nullable|boolean',
      ]);

      $comment->title = $request->input('title');
      $comment->when = $request->input('when');
      $comment->where = $request->input('where');
      $comment->who = $request->input('who');
      $comment->what = $request->input('what');
      $comment->why = $request->input('why');
      $comment->how = $request->input('how');
      $comment->is_published = $request->input('is_published', false);
      $comment->user_id = $request->user()->id;
      $comment->update();
        return redirect()->route('comments.show', compact('comment'))
        ->with('status', '編集しました。');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment $comment
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('comments.list')->with('status', '削除しました。');
    }
}
