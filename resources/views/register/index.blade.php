@extends('layouts.auth')

@section('page.title', 'Страница регистрации')


@section('auth.content')

    <x-card>

        <x-card-header>

            <x-card-title>

                <h4 class="m-0">
                    {{__("Регистрация")}}
                </h4>

            </x-card-title>

            <x-slot name="right">
                <a href="{{ route('login') }}">
                    {{__('Вход')}}
                </a>
            </x-slot>

        </x-card-header>



        <x-card-body>

            <x-form action="{{route('register.store')}}" method="POST">

                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <x-form-item>
                    <x-label required>{{__('Name')}}</x-label>
                    <x-input name="email" autofocus></x-input>
                </x-form-item>

                <x-form-item>
                    <x-label required>{{__('Email')}}</x-label>
                    <x-input type="email" name="email"></x-input>
                </x-form-item>

                <x-form-item>
                    <x-label required>{{__('Password')}}</x-label>
                    <x-input type="password" name="password" ></x-input>
                </x-form-item>

                <x-form-item>
                    <x-label required>{{__('Password confirm')}}</x-label>
                    <x-input type="password" name="password_confirmation" ></x-input>
                </x-form-item>


                <x-form-item>

                    <x-checkbox name="remember">

                        {{__('Я согласен на обработку пользовательских данных')}}

                    </x-checkbox>


                </x-form-item>




                <x-button type="submit" color="success" size="lg">
                    {{__('Войти')}}
                </x-button>

            </x-form>

        </x-card-body>

    </x-card>

@endsection

