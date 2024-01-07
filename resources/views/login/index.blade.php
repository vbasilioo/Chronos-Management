<x-layout title="Login">
    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

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
    <p>Esqueceu sua senha? <a href="/esqueci-minha-senha">Clique aqui!</a></p>
</x-layout>