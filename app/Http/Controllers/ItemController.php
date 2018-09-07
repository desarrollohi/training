<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * El método devolverá un response del tipo json que contenga todos los items de la app.
     *
     * @return JsonResponse
     */
    public function index()
    {
        // TODO
    }

    /**
     * El método debe crear un nuevo registro de Item y devolver el registro creado en un response de tipo json.
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        // TODO
    }

    /**
     * El método modificara un registro de Item con la información recibida en el $request y la url
     * y al final devolverá el Item modificado en un response de tipo json.
     *
     * @param Request $request
     * @param $id
     */
    public function update(Request $request, $id)
    {
        // TODO
    }

    /**
     * El método eliminara un registro de Item y devolverá una respuesta satisfactoria en caso de éxito
     *
     * @param $id
     */
    public function delete($id)
    {
        // TODO
    }
}
