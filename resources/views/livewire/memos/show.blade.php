<?php

use function Livewire\Volt\{state};
use App\Models\Memo;

state(['memo' => fn(Memo $memo) => $memo]);

// 編集ページにリダイレクト
$edit = function (){
// 編集ページにリダイレクト
    return redirect()->route('memos.edit', $this->memo);
};
$destroy = function(){
    $this->memo->delete();
    return redirect()->route('memos.index');
};
?>

<div>
    <h1>{{ $memo->title }}</h1>
    <p>{!! nl2br(e($memo->body)) !!}</p>
    <a href="/memos">戻る</a>

    <button wire:click="edit">編集する</button>
    <button wire:click="destroy" wire:confirm="本当に削除しますか？">削除する</button>
</div>
