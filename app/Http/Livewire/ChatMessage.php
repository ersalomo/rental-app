<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\{User, Conversation, Message};

class ChatMessage extends Component
{
    public int $onClickUser = 26;
    public string $message;
    public int $onClickConversationId = 7;

    public function sendMessage()
    {
        $this->validate([
            'message' => 'required'
        ]);
        $message = Message::create([
            'conversation_id' => $this->onClickConversationId,
            'user_id' => auth()->user()->id,
            'content' => $this->message
        ]);
        // if (!$message) {
        //     dd('error');
        // }
        // dd('success');
    }

    public function setOnClickUser($id)
    {
        $this->onClickUser = $id;
    }

    public function render()
    {

        $user_two = $this->onClickUser;

        return view('livewire.chat-message', [
            'users' => User::all(),
            'conversation' => Conversation::getConversation($user_two)
        ]);
    }
}
