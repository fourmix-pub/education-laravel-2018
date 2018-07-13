<?php

namespace App\Http\Controllers;

use App\Note;
use App\Comment;
use App\Repositories\NoteRepository;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    protected $noteRepository;

    /**
     * Create a new controller instance.
     *
     * @param NoteRepository $noteRepository
     */
    public function __construct(NoteRepository $noteRepository)
    {
        $this->middleware('auth');
        $this->noteRepository = $noteRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('notes.list', $this->noteRepository->myNoteResource());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        return view('notes.all', $this->noteRepository->noteResource());
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        $note = new Note();
        $note->title = $request->input('title');
        $note->when = $request->input('when');
        $note->where = $request->input('where');
        $note->who = $request->input('who');
        $note->what = $request->input('what');
        $note->why = $request->input('why');
        $note->how = $request->input('how');
        $note->is_published = $request->input('is_published', false);
        $note->user_id = $request->user()->id;
        $note->save();
        return redirect()->route('notes.list')->with('status', '作成しました。');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        $note->load(['comments']);
        return view('notes.show', compact('note'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function adminShow(Note $note)
    {
        return view('notes.adminShow', compact('note'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
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

      $note->title = $request->input('title');
      $note->when = $request->input('when');
      $note->where = $request->input('where');
      $note->who = $request->input('who');
      $note->what = $request->input('what');
      $note->why = $request->input('why');
      $note->how = $request->input('how');
      $note->is_published = $request->input('is_published', false);
      $note->user_id = $request->user()->id;
      $note->update();
        return redirect()->route('notes.adminShow', compact('note'))
        ->with('status', '編集しました。');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Note $note
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('notes.list')->with('status', '削除しました。');
    }
}
