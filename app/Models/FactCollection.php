<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\Models\post;
use App\Models\Fact;



class FactCollection extends Collection
{
    public function addFact(Fact $fact)
    {
        return $this->put($fact['post_id'], new Fact($fact));
    }

    public function hasPost($postId)
    {
        return $this->has('postId');
    }

    public function getPost()
    {
        return $this->keys();
    }
}
