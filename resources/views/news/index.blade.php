@extends('layouts.main')

@forelse ($newsList as $key => $news)
    <div style="border: 1px solid green;">
        <h2><a href="{{ route('news.show', ['id' => $key]) }}">{{ $news['title'] }}</a></h2>
        <p>{{ $news['author'] }} - {{ $news['created_at']->format('d-m-Y H:i') }}</p>
        <p>{!! $news['description'] !!}</p>
    </div><br><hr>
@empty
    <h2>No news</h2>
@endforelse
