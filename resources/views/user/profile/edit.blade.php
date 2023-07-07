@extends('layouts.auth')

@section('page.title', 'Регистрация')

@section('auth.content')
<x-card>

    <x-card-header>

        <x-card-title>
            {{ __("Изменение данных") }}
        </x-card-title>

    </x-card-header>

    <x-card-body>
        <x-form action="{{ route('user.profile.update', Auth::user()->id) }}" method="PUT" :post="Auth::user()">

            <x-form-item>
                <x-label required>{{ __('Фамилия') }}</x-label>
                <x-input name="last_name" value="{{ Auth::user()->last_name }}" />
            </x-form-item>

            <x-form-item>
                <x-label required>{{ __('Имя') }}</x-label>
                <x-input name="first_name" value="{{ Auth::user()->first_name  }}" />
            </x-form-item>

            <x-form-item>
                <x-label>{{ __('Отчество') }}</x-label>
                <x-input name="father_name" value="{{ Auth::user()->father_name ?? '' }}" />
            </x-form-item>

            <x-form-item>
                <x-label required>{{ __('Email') }}</x-label>
                <x-input type="email" name="email" value="{{ Auth::user()->email }}" autofocus />
            </x-form-item> 

            <x-form-item>
                <x-label required>{{ __('Серия паспорта') }}</x-label>
                <x-input name="passport_seria" value="{{ Auth::user()->passport_seria }}"/>
            </x-form-item>

            <x-form-item>
                <x-label required>{{ __('Номер паспорта') }}</x-label>
                <x-input name="passport_number" value="{{ Auth::user()->passport_number }}"/>
            </x-form-item>

            <x-form-item>
                <x-label required>{{ __('Пол') }}</x-label>
                <select class="form-select" name="sex">
                    <option selected>{{ Auth::user()->sex }}</option>
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

            <x-button type="submit" class="mb-3">
                {{ __("Сохранить") }}
            </x-button>

        </x-form>
    </x-card-body>

</x-card>
@endsection