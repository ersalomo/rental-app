<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = [
        'message'
    ];
    public function message()
    {
        return $this->hasMany(Message::class, 'conversation_id');
    }
    public static function getConversation(int $user_two)
    {
        $current_user = auth()->user()->id;
        return self::where('user_id_1', $current_user)
            ->where('user_id_2', $user_two)
            ->with('message')->get();
    }

    public function me()
    {
        // $conversation = Conversation::where(function ($q) use ($current_user, $user_two) {
        //     $q->where([
        //         'user_id_1' => $current_user,
        //         'user_id_2' => $user_two,
        //     ]);
        // })->orWhere(function ($q) use ($current_user, $user_two) {
        //     $q->where([
        //         'user_id_1' => $current_user,
        //         'user_id_2' => $user_two,
        //     ]);
        // })->with('message')->first();
    }
}
