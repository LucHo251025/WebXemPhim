<?php

namespace App\Livewire;

use App\Models\Actor;
use App\Models\Comment;
use App\Models\Film;
use Livewire\Component;

class PlayPage extends Component
{
    public $films;
    public $film;
    public $actors;
    public $isCollapsed = true;
    public $text;
    public $limit;
    public $comments;
    public $comment_content='';
    public function mount($slug, $text, $limit = 100){
        $this->comments = Comment::query()->where('film_id', 1)->get(); // Lấy tất cả bình luận cho film_id = 1

        $this->films = Film::take(20)->get();
        // get film by slug
        $this->film = Film::where('slug', $slug)->first();
        if (!$this->film) {
            abort(404);
        }
        $this->actors =$this->film->actors;
        $this->text = $text;
        $this->limit = $limit;
    }

    public  function toggle()
    {
        $this->isCollapsed = !$this->isCollapsed;
    }
    public function render()
    {
        return view('livewire.play-page');
    }
    public function play()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        $user = auth()->user();
        $user->load('subscription.subscription');

        // Kiểm tra nếu subscription tồn tại và kiểm tra tên gói
        if ($user->subscription && $user->subscription->subscription && $user->subscription->subscription->name == 'free') {
            return redirect('/subscription-page');
        }
        return redirect('/show-movie-page');
    }

    public function postComment()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        $user = auth()->user();
        Comment::create([
            'user_id' => $user->id,
            'film_id' => $this->film->id,
            'comment' => $this->comment_content
        ]);
        $this->comment_content = '';
        $this->comments = Comment::where('film_id', $this->film->id)->get();

    }
}
