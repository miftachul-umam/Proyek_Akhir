<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pengajar\BulkDestroyPengajar;
use App\Http\Requests\Admin\Pengajar\DestroyPengajar;
use App\Http\Requests\Admin\Pengajar\IndexPengajar;
use App\Http\Requests\Admin\Pengajar\StorePengajar;
use App\Http\Requests\Admin\Pengajar\UpdatePengajar;
use App\Models\Pengajar;
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

class PengajarController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexPengajar $request
     * @return array|Factory|View
     */
    public function index(IndexPengajar $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Pengajar::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            [''],

            // set columns to searchIn
            ['']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.pengajar.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.pengajar.create');

        return view('admin.pengajar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePengajar $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StorePengajar $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Pengajar
        $pengajar = Pengajar::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/pengajars'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/pengajars');
    }

    /**
     * Display the specified resource.
     *
     * @param Pengajar $pengajar
     * @throws AuthorizationException
     * @return void
     */
    public function show(Pengajar $pengajar)
    {
        $this->authorize('admin.pengajar.show', $pengajar);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Pengajar $pengajar
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Pengajar $pengajar)
    {
        $this->authorize('admin.pengajar.edit', $pengajar);


        return view('admin.pengajar.edit', [
            'pengajar' => $pengajar,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePengajar $request
     * @param Pengajar $pengajar
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdatePengajar $request, Pengajar $pengajar)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Pengajar
        $pengajar->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/pengajars'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/pengajars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyPengajar $request
     * @param Pengajar $pengajar
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyPengajar $request, Pengajar $pengajar)
    {
        $pengajar->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyPengajar $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyPengajar $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Pengajar::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
