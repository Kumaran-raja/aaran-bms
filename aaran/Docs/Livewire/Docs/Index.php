<?php

namespace Aaran\Docs\Livewire\Docs;

use Illuminate\Support\Str;
use Laravel\Jetstream\Jetstream;
use Livewire\Attributes\Layout;
use Livewire\Component;


class Index extends Component
{

    public function getDocs(){

        $policyFile = (__DIR__ . '/../../Markdown/overview.md');

        return Str::markdown(file_get_contents($policyFile));

    }

    #region[render]

    public function render()
    {
        return view('docs::Docs.index')->with([
            'policy' => $this->getDocs()
        ]);
    }
    #endregion
}
