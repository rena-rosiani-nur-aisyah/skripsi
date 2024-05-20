<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Fact
{
    public $id;
    public $name;
    public $Penyebab;
    public $Solusi;
    private $postId;
    public function __construct(array $data, $postId)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->Penyebab = $data['Penyebab'];
        $this->Solusi = $data['Solusi'];
        $this->postId = $postId;
    }

    public function getpostId()
    {
        return $this->postId;
    }
}
