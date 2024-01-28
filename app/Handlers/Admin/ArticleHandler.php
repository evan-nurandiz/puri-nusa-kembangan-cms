<?php

namespace App\Handlers\Admin;
use App\Models\Article;

class ArticleHandler{

    protected $article;
    
    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    public function getArticle()
    {
        return $this->article->paginate(15);
    }

    public function getArticleById($id)
    {
        return $this->article->find($id);
    }

    public function create($data)
    {
        return $this->article->create($data);
    }

    public function delete($id)
    {
        return $this->article->find($id)->delete();
    }

    public function update($id, $data)
    {
        return $this->article->find($id)->update($data);
    }
}

?>