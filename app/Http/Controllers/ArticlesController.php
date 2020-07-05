<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = ArtikelModel::get_all();

        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $new_question = ArtikelModel::save($request->all());

        return redirect('artikel');
    }

    public function edit($id)
    {
        $article = ArtikelModel::get_by_id($id);

        return view('articles.edit', compact('article'));
    }

    public function update($id, Request $request)
    {
        $question = ArtikelModel::update($id, $request->all());

        return redirect('artikel/' . $id);
    }

    public function show($id)
    {
        $article = ArtikelModel::get_by_id($id);
        $tags = ArtikelModel::tags($id);

        return view('articles.show', compact('article', 'tags'));
    }

    public function destroy($id)
    {
        $question = ArtikelModel::delete($id);

        return redirect('artikel/');
    }

}
