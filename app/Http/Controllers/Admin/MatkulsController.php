<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Matkul\BulkDestroyMatkul;
use App\Http\Requests\Admin\Matkul\DestroyMatkul;
use App\Http\Requests\Admin\Matkul\IndexMatkul;
use App\Http\Requests\Admin\Matkul\StoreMatkul;
use App\Http\Requests\Admin\Matkul\UpdateMatkul;
use App\Models\Matkul;
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

class MatkulsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexMatkul $request
     * @return array|Factory|View
     */
    public function index(IndexMatkul $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Matkul::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['kode_matkul', 'matkul', 'sks', 'dosen_pengampu', 'kelas', 'hari', 'jam'],

            // set columns to searchIn
            ['kode_matkul', 'matkul', 'dosen_pengampu', 'kelas']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.matkul.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.matkul.create');

        return view('admin.matkul.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreMatkul $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreMatkul $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Matkul
        $matkul = Matkul::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/matkuls'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/matkuls');
    }

    /**
     * Display the specified resource.
     *
     * @param Matkul $matkul
     * @throws AuthorizationException
     * @return void
     */
    public function show(Matkul $matkul)
    {
        $this->authorize('admin.matkul.show', $matkul);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Matkul $matkul
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Matkul $matkul)
    {
        $this->authorize('admin.matkul.edit', $matkul);


        return view('admin.matkul.edit', [
            'matkul' => $matkul,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateMatkul $request
     * @param Matkul $matkul
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateMatkul $request, Matkul $matkul)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Matkul
        $matkul->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/matkuls'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/matkuls');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyMatkul $request
     * @param Matkul $matkul
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyMatkul $request, Matkul $matkul)
    {
        $matkul->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyMatkul $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyMatkul $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Matkul::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
