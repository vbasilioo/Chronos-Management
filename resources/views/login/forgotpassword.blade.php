<x-layout title="Esqueci minha senha">
    <form method="POST" action="{{ route('') }}">
        @csrf
        <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email">
        </div>
        <button type="submit">Recuperar</button>
    </form>
</x-layout>