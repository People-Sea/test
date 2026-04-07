<?php

declare(strict_types=1);

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class ChatPanel extends Component
{
    public function render(): View
    {
        return view('components.chat-panel');
    }
}
