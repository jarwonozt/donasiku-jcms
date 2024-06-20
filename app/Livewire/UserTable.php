<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserTable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public function placeholder()
    {
        return <<<'HTML'

            <div class="placeholder-glow">
                <span class="placeholder col-12"></span>
                <span class="placeholder col-12"></span>
                <span class="placeholder col-12"></span>
                <span class="placeholder col-12"></span>
                <span class="placeholder col-12"></span>
            </div>

        HTML;
    }

    public function render()
    {
        if($this->search) {
            $users = User::search($this->search)->orderBy('created_at', 'desc')->paginate(10);
        } else {
            $users = User::orderByDesc('created_at')->paginate(10);
        }

        return view('livewire.user-table', [
            'users' => $users
        ]);
    }

    public function delete($id)
    {
        User::find($id)->delete();
    }
}
