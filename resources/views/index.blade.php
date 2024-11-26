<x-app>
    <x-slot name="content">
        <main class="container py-5">
            <div class="row pb-4">
                <div class="col-12 col-lg-10">
                    <h5 class="fw-bold">Lista de Contato</h5>
                </div>
                <div class="col-12 col-lg-2">
                    <a href="{{ route('contact.create') }}" class="btn btn-danger w-100 rounded-0">Novo Contato</a>
                </div>
            </div>

            <livewire:contact />

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Endereco</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12 col-md-5">
                                    <div class="form-floating mb-3">
                                        <input type="tel" class="form-control" id="floatingInput" placeholder="Cep"
                                            name="zip">
                                        <label for="floatingInput">Cep <em class="text-danger">*</em></label>
                                        <small><x-error field="zip" class="text-danger" /></small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Endereço" name="address">
                                        <label for="floatingInput">Endereço <em class="text-danger">*</em></label>
                                        <small><x-error field="address" class="text-danger" /></small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Bairro" name="district">
                                        <label for="floatingInput">Bairro <em class="text-danger">*</em></label>
                                        <small><x-error field="district" class="text-danger" /></small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Cidade" name="city">
                                        <label for="floatingInput">Cidade <em class="text-danger">*</em></label>
                                        <small><x-error field="city" class="text-danger" /></small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="tel" class="form-control" id="floatingInput"
                                            placeholder="Número" name="number">
                                        <label for="floatingInput">Número <em class="text-danger">*</em></label>
                                        <small><x-error field="number" class="text-danger" /></small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Estado" name="state">
                                        <label for="floatingInput">Estado <em class="text-danger">*</em></label>
                                        <small><x-error field="state" class="text-danger" /></small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Complemento" name="complement">
                                        <label for="floatingInput">Complemento</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
        </main>

    </x-slot>
</x-app>
