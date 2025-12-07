<?php

use function Livewire\Volt\{state};
use App\Models\Memo;

state(['memo' => fn(Memo $memo) => $memo]);


?>

<div>
    <h1>{{ $memo->title }}</h1>
    <p>{!! nl2br(e($memo->body)) !!}</p>
    <a href="/memos">戻る</a>
</div>
