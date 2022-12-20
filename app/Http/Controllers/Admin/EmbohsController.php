<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Emboh\BulkDestroyEmboh;
use App\Http\Requests\Admin\Emboh\DestroyEmboh;
use App\Http\Requests\Admin\Emboh\IndexEmboh;
use App\Http\Requests\Admin\Emboh\StoreEmboh;
use App\Http\Requests\Admin\Emboh\UpdateEmboh;
use App\Models\Emboh;
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

class EmbohsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexEmboh $request
     * @return array|Factory|View
     */
    public function index(IndexEmboh $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Emboh::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['nim', 'nama', 'umur', 'kota', 'kelas', 'jurusan'],

            // set columns to searchIn
            ['nim', 'nama', 'alamat', 'kota', 'kelas', 'jurusan']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.emboh.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.emboh.create');

        return view('admin.emboh.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreEmboh $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreEmboh $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Emboh
        $emboh = Emboh::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/embohs'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/embohs');
    }

    /**
     * Display the specified resource.
     *
     * @param Emboh $emboh
     * @throws AuthorizationException
     * @return void
     */
    public function show(Emboh $emboh)
    {
        $this->authorize('admin.emboh.show', $emboh);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Emboh $emboh
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Emboh $emboh)
    {
        $this->authorize('admin.emboh.edit', $emboh);


        return view('admin.emboh.edit', [
            'emboh' => $emboh,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateEmboh $request
     * @param Emboh $emboh
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateEmboh $request, Emboh $emboh)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Emboh
        $emboh->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/embohs'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/embohs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyEmboh $request
     * @param Emboh $emboh
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyEmboh $request, Emboh $emboh)
    {
        $emboh->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyEmboh $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyEmboh $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Emboh::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
