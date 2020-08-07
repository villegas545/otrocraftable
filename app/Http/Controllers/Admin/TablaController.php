<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tabla\BulkDestroyTabla;
use App\Http\Requests\Admin\Tabla\DestroyTabla;
use App\Http\Requests\Admin\Tabla\IndexTabla;
use App\Http\Requests\Admin\Tabla\StoreTabla;
use App\Http\Requests\Admin\Tabla\UpdateTabla;
use App\Models\Tabla;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class TablaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexTabla $request
     * @return array|Factory|View
     */
    public function index(IndexTabla $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Tabla::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'Nombre', 'Direccion', 'Telefono', 'Edad'],

            // set columns to searchIn
            ['id', 'Nombre', 'Direccion', 'Telefono']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.tabla.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.tabla.create');

        return view('admin.tabla.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTabla $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreTabla $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Tabla
        $tabla = Tabla::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/tablas'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/tablas');
    }

    /**
     * Display the specified resource.
     *
     * @param Tabla $tabla
     * @throws AuthorizationException
     * @return void
     */
    public function show(Tabla $tabla)
    {
        $this->authorize('admin.tabla.show', $tabla);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Tabla $tabla
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Tabla $tabla)
    {
        $this->authorize('admin.tabla.edit', $tabla);


        return view('admin.tabla.edit', [
            'tabla' => $tabla,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTabla $request
     * @param Tabla $tabla
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateTabla $request, Tabla $tabla)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Tabla
        $tabla->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/tablas'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/tablas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyTabla $request
     * @param Tabla $tabla
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyTabla $request, Tabla $tabla)
    {
        $tabla->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyTabla $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyTabla $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Tabla::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
