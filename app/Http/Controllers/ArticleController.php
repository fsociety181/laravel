<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    use UploadTrait;

    public function submit(ArticleRequest $valid)
    {
        $article = new Article();
        $article->article = $valid->input('theme_article');
        $article->text = $valid->input('text');

        if ($valid->has('image')) {
            $name = Str::random(25);
            $image = $valid->file('image');
            $folder = '/storage/uploads/';
            $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
            $article->image = $filePath;
        }

        $article->save();
        return redirect()->route('home')->with('success', 'Новость успешно опубликована!');
    }

    public function allArticle()
    {
        $article = new Article();
        return view('home', ['data' => $article->orderBy('created_at', 'desc')->simplePaginate(6)]);
    }

    public function mainArticle()
    {
        $article = new Article();
        return view('news', ['main' => $article->orderBy('created_at', 'desc')->simplePaginate(4)]);
    }
}
