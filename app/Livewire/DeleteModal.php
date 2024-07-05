<?php

namespace App\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class DeleteModal extends ModalComponent
{
    public $showModal = false;
    public function render()
    {
        return view('livewire.delete-modal');
    }
}
