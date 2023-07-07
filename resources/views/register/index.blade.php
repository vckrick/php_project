@extends('layouts.auth')

@section('page.title', 'Регистрация')

@section('auth.content')
<x-card>

    <x-card-header>

        <x-card-title>
            {{ __("Регистрация") }}
        </x-card-title>

        <x-slot name='right'>
            <a href="{{ route('login') }}">Вход</a>
        </x-slot>

    </x-card-header>

    <x-card-body>
        <x-form action="{{ route('register.store') }}" method="POST">

            <x-form-item>
                <x-label required>{{ __('Фамилия') }}</x-label>
                <x-input name="last_name" autofocus />
            </x-form-item>

            <x-form-item>
                <x-label required>{{ __('Имя') }}</x-label>
                <x-input name="first_name" />
            </x-form-item>

            <x-form-item>
                <x-label>{{ __('Отчество') }}</x-label>
                <x-input name="father_name" />
            </x-form-item>
            
            <x-form-item>
                <x-label required>{{ __('Email') }}</x-label>
                <x-input type="email" name="email" />
            </x-form-item>

            <x-form-item>
                <x-label required>{{ __('Серия паспорта') }}</x-label>
                <x-input name="passport_seria"/>
            </x-form-item>

            <x-form-item>
                <x-label required>{{ __('Номер паспорта') }}</x-label>
                <x-input name="passport_number"/>
            </x-form-item>

            <x-form-item>
                <x-label required>{{ __('Пол') }}</x-label>
                <select class="form-select" name="sex">
                    <option selected>Выбрать пол</option>
                    <option value="Мужской">Муж.</option>
                    <option value="Женский">Жен.</option>
                </select>
            </x-form-item>

            <x-form-item>
                <x-label required>{{ __('Дата рождения') }}</x-label>
                <x-input name="born_date" type="date" />
            </x-form-item>

            <x-form-item>
                <x-label required>{{ __('Пароль') }}</x-label>
                <x-input type="password" name="password" />
            </x-form-item>

            <x-form-item>
                <x-label required>{{ __('Подтвердите пароль') }}</x-label>
                <x-input type="password" name="password_confirmation" />
            </x-form-item>

            <x-form-item>
                <x-checkbox name="agreement" :checked="!! old('agreement')">
                    {{ __("Принять соглашение на обработку пользовательских данных") }}
                </x-checkbox>
            </x-form-item>

            <x-button type="submit" >
                {{ __("Войти") }}
            </x-button>

        </x-form>
    </x-card-body>

</x-card>
@endsection