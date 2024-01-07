<x-layout title="Login">
    <form method="POST" action="{{ route('autenticar') }}">
        @csrf
        <div>
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username">
        </div>
        <div>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password">
        </div>
        <button type="submit">Entrar</button>
    </form>
</x-layout>