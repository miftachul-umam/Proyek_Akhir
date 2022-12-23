<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Dosen\BulkDestroyDosen;
use App\Http\Requests\Admin\Dosen\DestroyDosen;
use App\Http\Requests\Admin\Dosen\IndexDosen;
use App\Http\Requests\Admin\Dosen\StoreDosen;
use App\Http\Requests\Admin\Dosen\UpdateDosen;
use App\Models\Dosen;
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

class DosensController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexDosen $request
     * @return array|Factory|View
     */
    public function index(IndexDosen $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Dosen::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['nidn', 'nama_dosen', 'alamat', 'kota', 'matkul_yang_diampu', 'jurusan'],

            // set columns to searchIn
            ['nidn', 'nama_dosen', 'kota', 'matkul_yang_diampu', 'jurusan']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.dosen.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.dosen.create');

        return view('admin.dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreDosen $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreDosen $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Dosen
        $dosen = Dosen::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/dosens'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/dosens');
    }

    /**
     * Display the specified resource.
     *
     * @param Dosen $dosen
     * @throws AuthorizationException
     * @return void
     */
    public function show(Dosen $dosen)
    {
        $this->authorize('admin.dosen.show', $dosen);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Dosen $dosen
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Dosen $dosen)
    {
        $this->authorize('admin.dosen.edit', $dosen);


        return view('admin.dosen.edit', [
            'dosen' => $dosen,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDosen $request
     * @param Dosen $dosen
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateDosen $request, Dosen $dosen)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Dosen
        $dosen->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/dosens'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/dosens');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyDosen $request
     * @param Dosen $dosen
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyDosen $request, Dosen $dosen)
    {
        $dosen->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyDosen $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyDosen $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Dosen::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
