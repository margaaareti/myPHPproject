@extends('layouts.base')

@section('page.title', 'Страница входа')

@section('content')

    <section>

        <div class="container">

            <div class="row">

                <div class="col-12 col-md-6 offset-md-3">

                   <x-card>

                       <x-card-header>

                           <x-card-title>

                               <h4 class="m-0">
                                   {{__("Вход")}}
                               </h4>

                           </x-card-title>

                       </x-card-header>



                       <x-card-body>

                           <x-form action="{{'login.store'}}" method="POST">

                               <x-form-item>
                                   <x-label required>{{__('Email')}}</x-label>
                                   <x-input type="email" name="email" autofocus></x-input>
                               </x-form-item>

                               <x-form-item>
                                   <x-label required>{{__('Password')}}</x-label>
                                   <x-input type="password" name="password" ></x-input>
                               </x-form-item>


                               <x-form-item>

                                   <x-checkbox name="remember">

                                       {{__('Запоминть меня')}}

                                   </x-checkbox>


                               </x-form-item>




                               <x-button type="submit" color="success" size="lg">
                                   {{__('Войти')}}
                               </x-button>

                           </x-form>

                       </x-card-body>

                   </x-card>

                </div>

            </div>

        </div>

    </section>

@endsection
