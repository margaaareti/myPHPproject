@props(['post' => null])

<x-form {{ $attributes }}>

    <x-form-item>

        <x-label required>{{ __('Название поста') }}</x-label>
        <x-input name="title" value="{{ $post->title ?? '' }}" autofocus/>

    </x-form-item>


    <x-form-item>

        <x-label required>{{ __('Содержание поста') }}</x-label>
        <x-trix name="content" value="{{ $post->content ?? '' }}"></x-trix>

    </x-form-item>

    <x-button type="submit">

        {{__('Создать пост')}}

    </x-button>

</x-form>

