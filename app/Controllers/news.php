<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Controller;
use ReCaptcha\RequestMethod\Post;

class News extends Controller
{
    public function index()
    {
        $model = model(NewsModel::class);

        $data = [
            'news' => $model->getNews(),
            'title' => 'News archive',
        ];
        echo view('templates/header', $data);
        echo view('news/overview', $data);
        echo view('templates/footer', $data);
    }
    public function view($slug = null)
    {

        $model = model(NewsModel::class);

        $data['news'] = $model->getNews($slug);

        if (empty($data['news'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $slug);
        }
        $data['title'] = $data['news']['title'];

        echo view('templates/header', $data);
        echo view('news/view', $data);
        echo view('templates/footer', $data);
    }
    
    public function create()
    {
        
        $model = model(NewsModel::class);
        $request = \Config\Services::request();//?

        if ($this->request->getMethod() === 'post' && $this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'body' => 'required',
        ])) {
            $model->save([
                'title' => $request->getPost('title'),
                'slug' => url_title($request->getPost('title'), '-', true),
                'body' => $request->getPost('body'),
            ]);
            echo $this->request->getMethod();
            echo view("news/success");


// //重定向瀏覽器 
// header("Location: http://localhost:8080/news/"); 
// //確保重定向後，後續代碼不會被執行 
// exit;

        } else {
            echo view('templates/header', ['title' => 'Create a news item']);
            echo view('news/create');
            echo view('templates/footer');
            echo $this->request->getMethod();
        }
        
    }

}
