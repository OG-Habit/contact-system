<?php

namespace App\Livewire;

use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Contacts extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search = '';

    public $showModal = false;

    public function render()
    {
        if (!$this->search) {
            $contacts = DB::table('contacts')
                ->where('user_id', '=', Auth::id())
                ->paginate(3);
        } else {
            $contacts = DB::table('contacts')
                ->where('user_id', '=', Auth::id())
                ->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%')
                ->orWhere('company', 'like', '%' . $this->search . '%')
                ->orWhere('phone', 'like', '%' . $this->search . '%')
                ->paginate(3);
        }
        return view('livewire.contacts', ['contacts' => $contacts]);
    }

    public function delete(Contact $id) {
        $id->delete();

        session()->flash('success', 'Contact deleted successfully');
        return redirect('/contacts', navigate:true);
    }
}
