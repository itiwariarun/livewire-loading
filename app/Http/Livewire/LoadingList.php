<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;

class LoadingList extends Component
{
    public $perPage = 10;
    protected $listeners = [
        'load-more' => 'loadMore'
    ];
    public function loadMore(){
        $this->perPage = $this->perPage + 5;
    }

    public function render()
    {
        $users = User::latest()->paginate($this->perPage);
        $this->emit('userStore');
        return view('livewire.loading-list',['users' => $users]);
    }
}
