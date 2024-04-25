<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form action="{{ route('contact.store') }}" method="post">
            <fieldset>
                <div>
                    <label for="">Assunto</label>
                    <input type="text" name="Assunto" id="" placeholder="Digite o assunto do email">
                </div>
                @csrf
                <input type="submit" value="Send">
            </fieldset>
        </form>
        </div>
    </div>
</x-app-layout>
