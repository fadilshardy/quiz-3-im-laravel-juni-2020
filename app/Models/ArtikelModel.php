<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class ArtikelModel
{
    public static function get_all()
    {
        $articles = DB::table('articles')->get();
        return $articles;
    }

    public static function get_by_id($id)
    {
        $article = DB::table('articles')->where('id', '=', $id)->first();
        return $article;
    }

    public static function save($data)
    {
        unset($data["_token"]);

        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        $data['slug'] = ArtikelModel::title_slug($data['judul']);
        $data['user_id'] = "1";

        $new_article = DB::table('articles')->insert($data);
        return $new_article;
    }

    public static function update($id, $data)
    {
        unset($data["_token"]);
        unset($data["_method"]);
        $data['slug'] = ArtikelModel::title_slug($data['judul']);

        $data['updated_at'] = date('Y-m-d H:i:s');
        $update_article = DB::table('articles')
            ->where('id', $id)
            ->update($data);
        return $update_article;
    }

    public static function delete($id)
    {
        $deleted = DB::table('articles')->where('id', '=', $id)->delete();
    }

    public static function tags($id)
    {
        $tags = DB::table('articles')->where('id', '=', $id)->pluck('tag');
        $tags = explode(',', $tags); // Split by comma
        $tags = str_replace(['[', ']', '"'], " ", $tags); // remove bracket, and quotation mark.
        return $tags;
    }

    public static function title_slug($title)
    {
        $slug = strtolower($title);
        $slug = str_replace(" ", "-", $slug);

        return $slug;
    }

}
