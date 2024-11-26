<div class="card border-0">
    <div class="card-header bg-white border-0 py-4">
        <div class="row">
            <div class="col-12 col-lg-10">
                <h5 class="card-title">Lista</h5>
            </div>
            <div class="col-12 col-lg-2">
                <div class="form-group form-control-search">
                    <input wire:model.live="search" type="search" class="form-control rounded-0" placeholder="Nome">
                </div>
            </div>
        </div>
    </div>
    <div class="row container-fluid p-0 m-0">
        <div class="table-responsive p-0">
            <table class="table table-hover align-items-center justify-content-center">
                <thead>
                    <tr>
                        <th scope="col" class="fw-medium text-uppercase">ID</th>
                        <th scope="col" class="fw-medium text-uppercase">Nome</th>
                        <th scope="col" class="fw-medium text-uppercase">Contato</th>
                        <th scope="col" class="fw-medium text-uppercase">Idade</th>
                        <th scope="col" class="fw-medium text-uppercase ps-4">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items->lazy() as $item)
                        <tr wire:key={{ $item->id }}>
                            <td>
                                <div class="d-flex px-2 py-1">{{ $item->id }}</div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">{{ $item->name }}</div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">{{ $item->phone }}</div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">{{ $item->age }}</div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Opções
                                    </button>
                                    <ul class="dropdown-menu bg-white" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('contact.edit', $item->id) }}"
                                                title="Editar">
                                                Editar
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item get-contact" href="#"
                                                data-id="{{ $item->id }}" title="Editar">
                                                Endereço
                                            </a>
                                        </li>
                                        <li class="d-flex dropdown-item">
                                            @livewire('delete', ['route' => route('contact.destroy', $item), 'text' => 'Excluir'], key($item->id))
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer bg-white border-0">
            {{ $items->links() }}
        </div>
    </div>
</div>
