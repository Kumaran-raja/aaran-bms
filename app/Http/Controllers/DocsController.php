<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Laravel\Jetstream\Jetstream;

class DocsController
{
    public function index(){

        $policyFile = Jetstream::localizedMarkdownPath('policy.md');

        return view('docs.index', [
            'policy' => Str::markdown(file_get_contents($policyFile)),
        ]);

    }

}
