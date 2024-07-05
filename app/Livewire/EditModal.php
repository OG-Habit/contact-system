<?php

namespace App\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class EditModal extends ModalComponent
{
    public function render()
    {
        return view('livewire.edit-modal');
    }
}
