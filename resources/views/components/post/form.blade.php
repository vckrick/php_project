@props(['form' => null])

<x-form {{ $attributes }}>

    <x-form-item>
        <x-label required>
            {{ __("Вакансия") }}
        </x-label>
        <x-input name="vocation" value="{{ $form->vocation ?? '' }}" autofocus />
    </x-form-item>

    <x-form-item>
        <x-label required>
            {{ __("О себе") }}
        </x-label>
        <textarea name="about" rows='10' class='form-control'>{{ $form->about ?? '' }}</textarea>
    </x-form-item>

    <x-form-item>
        <x-label required>
            {{ __("Адрес") }}
        </x-label>
        <x-input name="adress" value="{{ $form->adress ?? '' }}" autofocus />
    </x-form-item>

    {{ $slot }}

</x-form>
