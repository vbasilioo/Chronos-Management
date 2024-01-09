<x-layout title="Login">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card">
            <div class="card-body">
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif
                <p class="text-center fw-bold">Chronos Management</p>
                <form method="POST" action="{{ route('autenticar') }}">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Usuário">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>
                </form>
                <p class="mt-3">Esqueceu sua senha? <a href="/esqueci-minha-senha">Clique aqui!</a></p>
            </div>
        </div>
    </div>
</x-layout>