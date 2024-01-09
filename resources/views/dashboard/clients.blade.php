<x-layout title="Dashboard">
    <div class="row">
        <!--SIDEBAR-->
        <sidebar class="col-md-3 col-lg-2 bg-light d-flex flex-column vh-100">
            <div>
                <div class="mt-5 mb-5">
                    <h4 class="text-center">Chronos Management</h4>
                </div>
                <div class="d-flex flex-column justify-content-end">
                    <a class="btn btn-outline-secondary btn-sm mb-2" href="{{ route('dashboard-clients') }}">Clientes</a>
                    <a class="btn btn-outline-secondary btn-sm mb-2">Botão 2</a>
                </div>
            </div>
            <div class="mt-auto">
                <div class="d-flex flex-column justify-content-end">
                    <a class="btn btn-outline-danger btn-sm mb-2" type="submit" href="{{ route('login') }}">Sair</a>
                </div>
            </div>
        </sidebar>
        <!--FIM DA SIDEBAR-->

        <!--CONTEÚDO PRINCIPAL DA DASHBOARD-->
        <main class="col-9">
            <div class="d-flex justify-content-center">
                <table class="table table-striped mt-5">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>João da Silva</td>
                            <td>joao@example.com</td>
                            <td>(00) 1234-5678</td>
                        </tr>
                        <tr>
                            <td>Maria Souza</td>
                            <td>maria@example.com</td>
                            <td>(00) 9876-5432</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
        <!--FIM DO CONTEÚDO PRINCIPAL DA DASHBOARD-->
    </div>
</x-layout>