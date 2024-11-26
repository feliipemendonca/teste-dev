<?php

namespace App\Livewire;


use App\Services\ContactService;
use Livewire\Component;
use Livewire\WithPagination;

class Contact extends Component
{
    use WithPagination;

    public $search;

    public function render(ContactService $contactService)
    {
        $model = $contactService->getAll()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            });

        $model = $model->paginate(20);

        return view('livewire.contact', [
            'items' => $model
        ]);
    }
}
