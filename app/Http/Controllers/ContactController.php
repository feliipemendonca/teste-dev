<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Resources\AddressResource;
use App\Models\Contact;
use App\Services\ContactService;
use Illuminate\Http\JsonResponse;

class ContactController extends Controller
{
    public function __construct(
        protected ContactService $contactService
    ) {}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("contact.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request)
    {
        try {
            $this->contactService->store($request->validated());
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Erro ao criar contato. Por favor entre em contato com o suporte.');
        }

        return redirect()->route("index")->with('success', 'Contato criado com sucesso');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function show($id): JsonResponse
    {
        $item = $this->contactService->find($id);

        if (!$item) {
            return response()->json(['message' => 'Contato não encontrato'], 500);
        }

        return (new AddressResource($item))->response();
    }

    /**
     *

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view("contact.edit", ['item' => $contact]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreContactRequest $request, Contact $contact)
    {
        try {
            $this->contactService->update($contact, $request->validated());
        } catch (\Throwable $th) {
            throw $th;
            return redirect()->back()->with('error', 'Erro ao atualizar contato. Por favor entre em contato com o suporte.');
        }

        return redirect()->route("index")->with('success', 'Contato atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        try {
            $this->contactService->destroy($contact);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Erro ao apagar contato. Por favor entre em contato com o suporte.');
        }

        return redirect()->route("index")->with('success', 'Contato apagado com sucesso');
    }
}
