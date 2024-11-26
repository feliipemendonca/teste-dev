<x-app>
    <x-slot name="content">
        <main class="container pt-5">
            <div class="row pb-4">
                <div class="col-12 col-lg-10">
                    <h5 class="fw-bold">Editar Contato</h5>
                </div>
            </div>
            <x-form method="put" action="{{ route('contact.update', $item->id) }}">
                <div class="card border-0">
                    <div class="card-header bg-white border-0 pt-3 pb-4">
                        <h5 class="card-title">Editar contato</h5>
                        <small>Todos os campos com <em class="text-danger">*</em> são obrigatórios</small>
                    </div>
                    <div class="card-body row p-0 m-0">
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Nome"
                                    name="name" value="{{ old('name', $item->name) }}">
                                <label for="floatingInput">Nome <em class="text-danger">*</em></label>
                                <small><x-error field="name" class="text-danger" /></small>
                            </div>

                        </div>
                        <div class="col-12 col-md-3">
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" id="floatingInput" placeholder="Telefone"
                                    name="phone" value="{{ old('phone', $item->phone) }}">
                                <label for="floatingInput">Telefone <em class="text-danger">*</em></label>
                                <small><x-error field="phone" class="text-danger" /></small>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" id="floatingInput" placeholder="Idade"
                                    name="age" value="{{ old('age', $item->age) }}">
                                <label for="floatingInput">Idade <em class="text-danger">*</em></label>
                                <small><x-error field="age" class="text-danger" /></small>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" id="floatingInput" placeholder="Cep"
                                    name="zip" value="{{ old('zip', $item->address->zip) }}">
                                <label for="floatingInput">Cep <em class="text-danger">*</em></label>
                                <small><x-error field="zip" class="text-danger" /></small>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Endereço"
                                    name="address" value="{{ old('address', $item->address->address) }}">
                                <label for="floatingInput">Endereço <em class="text-danger">*</em></label>
                                <small><x-error field="address" class="text-danger" /></small>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Bairro"
                                    name="district" value="{{ old('district', $item->address->district) }}">
                                <label for="floatingInput">Bairro <em class="text-danger">*</em></label>
                                <small><x-error field="district" class="text-danger" /></small>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Cidade"
                                    name="city" value="{{ old('city', $item->address->city) }}">
                                <label for="floatingInput">Cidade <em class="text-danger">*</em></label>
                                <small><x-error field="city" class="text-danger" /></small>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" id="floatingInput" placeholder="Número"
                                    name="number" value="{{ old('number', $item->address->number) }}">
                                <label for="floatingInput">Número <em class="text-danger">*</em></label>
                                <small><x-error field="number" class="text-danger" /></small>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Estado"
                                    name="state" value="{{ old('state', $item->address->state) }}">
                                <label for="floatingInput">Estado <em class="text-danger">*</em></label>
                                <small><x-error field="state" class="text-danger" /></small>
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="Complemento" name="complement"
                                    value="{{ old('complement', $item->address->complement) }}">
                                <label for="floatingInput">Complemento</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0 pb-4">
                        <div class="d-flex justify-content-between">
                            <a href="javascript:history.back();" class="btn btn-danger">Voltar</a>
                            <button type="submit" class="btn btn-dark">Atualizar</button>
                        </div>
                    </div>
                </div>
            </x-form>
        </main>
    </x-slot>
</x-app>
