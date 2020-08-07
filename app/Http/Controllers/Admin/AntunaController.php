<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Antuna\BulkDestroyAntuna;
use App\Http\Requests\Admin\Antuna\DestroyAntuna;
use App\Http\Requests\Admin\Antuna\IndexAntuna;
use App\Http\Requests\Admin\Antuna\StoreAntuna;
use App\Http\Requests\Admin\Antuna\UpdateAntuna;
use App\Models\Antuna;
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

class AntunaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexAntuna $request
     * @return array|Factory|View
     */
    public function index(IndexAntuna $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Antuna::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['Nombre', 'Apellido', 'Nacimiento', 'Edad', 'id'],

            // set columns to searchIn
            ['Nombre', 'Apellido', 'id']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.antuna.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.antuna.create');

        return view('admin.antuna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAntuna $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreAntuna $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Antuna
        $antuna = Antuna::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/antunas'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/antunas');
    }

    /**
     * Display the specified resource.
     *
     * @param Antuna $antuna
     * @throws AuthorizationException
     * @return void
     */
    public function show(Antuna $antuna)
    {
        $this->authorize('admin.antuna.show', $antuna);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Antuna $antuna
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Antuna $antuna)
    {
        $this->authorize('admin.antuna.edit', $antuna);


        return view('admin.antuna.edit', [
            'antuna' => $antuna,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateAntuna $request
     * @param Antuna $antuna
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateAntuna $request, Antuna $antuna)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Antuna
        $antuna->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/antunas'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/antunas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyAntuna $request
     * @param Antuna $antuna
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyAntuna $request, Antuna $antuna)
    {
        $antuna->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyAntuna $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyAntuna $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Antuna::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
