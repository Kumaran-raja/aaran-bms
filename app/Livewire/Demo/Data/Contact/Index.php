<?php

namespace App\Livewire\Demo\Data\Contact;

use Aaran\Common\Models\Common;
use Aaran\Master\Models\Contact;
use Aaran\Master\Models\ContactDetail;
use Livewire\Component;

class Index extends Component
{



    public function render()
    {
        return view('livewire.demo.data.contact.index');
    }
}
