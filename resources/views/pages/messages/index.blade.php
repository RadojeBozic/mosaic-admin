@extends('layouts.app')

@section('content')
<div class="p-6 bg-white dark:bg-slate-800 shadow rounded-lg">
    <h1 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-white">Poruke korisnika</h1>

    @if($messages->count())
        <div class="space-y-4">
            @foreach($messages as $msg)
                <div class="border-b border-gray-200 dark:border-gray-600 pb-2">
                    <p><strong>Ime:</strong> {{ $msg->name }}</p>
                    <p><strong>Email:</strong> {{ $msg->email }}</p>
                    <p><strong>Poruka:</strong> {{ $msg->message }}</p>
                    <p><strong>Newsletter:</strong> {{ $msg->newsletter ? 'DA' : 'NE' }}</p>
                    <p class="text-xs text-gray-500">⏱ {{ $msg->created_at->diffForHumans() }}</p>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-gray-600 dark:text-gray-300">Nema poruka.</p>
    @endif
</div>
@endsection
