<?php

namespace App\Http\Controllers\editor;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articulos = Article::all();
        $categories = Category::all();
        return view('admin.articles', compact(['articulos','categories']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.create_article');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $profileId = $user->profile->id;
         $mensajesError = [
        'title' => 'Debe ingresar un titulo para su articulo.',
        'content' => 'EL contenido del articulo no puede quedar vacio.',
        'category' => 'Debe ingresar una categoria',
        ];
  
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'required|string', 
        ] ,$mensajesError);
   
            $article = Article::create([
                'title' => $request->input('title'),
                'content' => $request->input('content'),   
                'profile_id' => $profileId
            ]);

       
        $categoryName = $request->input('category');
        if (!empty($categoryName)) {
           
            $category = Category::firstOrCreate(['name' => $categoryName]);

            $article->categories()->attach($category->id);
        }
        
    
        $article->save();

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('admin.edit_article', compact(('article')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('articles.edit', $article->id)
                ->withErrors($validator)
                ->withInput();
        }
    
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->save();
    
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        if ($article) {
            $article->categories()->detach();
            $article->delete();
        }
    
        return redirect()->route('articles.index');
    }
    
}
