@extends('layouts.main')

@section('page.title', 'Изменить пост')

@section('main.content')

    <x-title>

        {{__('Изменить пост')}}


        <x-slot name="link">

            <a href="{{route('user.posts.show', $post->id)}}"> {{__('Назад')}}</a>

        </x-slot>

    </x-title>


   <x-post.form action="{{route('route.posts.edit'), $post->id }}" :post="$post" />


@endsection
