<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use function PHPUnit\Framework\throwException;

class Post extends Model
{
    use HasFactory;


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false , function ($query, $search){
             $query->where(function ($query) use($search){
                $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
             });
        });

        $query->when($filters['category'] ?? false , function ($query, $category)  {
            $query->whereHas('category', function ($query) use($category) {
                $query->where('categories.slug' ,$category );
            });
        });

        $query->when($filters['author'] ?? false , function ($query, $author)  {
            $query->whereHas('author', function ($query) use($author) {
                $query->where('users.username' ,$author );
            });
        });

//method 2 (not so clean)
//        $query->when($filters['category'] ?? false , function ($query, $category)  {
//            return $query->from('posts')
//                ->whereExists(function ($query) use($category){
//                    return $query->from('categories')
//                        ->whereColumn('categories.id', 'posts.category_id')
//                        ->where('categories.slug', $category);
//                });
//        });
    }





//    public function __construct($date, $excerpt, $title, $body , $slug)
//    {
//        $this->title = $title;
//        $this->excerpt = $excerpt;
//        $this->date = $date;
//        $this->body = $body;
//        $this->slug = $slug;
//        $this->save();
//
//    }
//
//    public static function all($columns = ['*'])
//    {
//
//        return Post::all()
//        return cache()->rememberForever('post.all', function (){
//            return collect(File::files(resource_path("posts")))->map(
//                function ($file){
//                    $document = YamlFrontMatter::parseFile(($file));
//
//                    return new Post(
//                        $document->date,
//                        $document->excerpt,
//                        $document->title,
//                        $document->body(),
//                        $document->slug
//                    );
//                }
//            )->sortByDesc('date');
//        });

//    }
//
//    public static function find($slug)
//    {
//        $post = static::all()->firstWhere('slug', $slug);
//
//
//        if (!$post){
//            throw new ModelNotFoundException();
//        }
//        return $post;
////
////        return cache()->remember("posts.{$slug}", 1200, function () use ($path){
////            return file_get_contents($path);
////        });
//    }
//
//    public static function findOrFail($slug)
//    {
//        $post = static::find($slug);
//
//
//        if (!$post){
//            throw new ModelNotFoundException();
//        }
//        return $post;
//
//    }
}
