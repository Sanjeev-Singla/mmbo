<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\InvoiceDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateInvoiceRequest;
use App\Http\Requests\Admin\UpdateInvoiceRequest;
use App\Repositories\InvoiceRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class InvoiceController extends AppBaseController
{
    /** @var  InvoiceRepository */
    private $invoiceRepository;

    public function __construct(InvoiceRepository $invoiceRepo)
    {
        $this->invoiceRepository = $invoiceRepo;
    }

    /**
     * Display a listing of the Invoice.
     *
     * @param InvoiceDataTable $invoiceDataTable
     * @return Response
     */
    public function index(InvoiceDataTable $invoiceDataTable)
    {
        $user = $_GET['user'];
        return $invoiceDataTable->render('admin.invoices.index',compact('user'));
    }

    /**
     * Show the form for creating a new Invoice.
     *
     * @return Response
     */
    public function create()
    {
        $user = $_GET['user'];
        return view('admin.invoices.create',compact('user'));
    }

    /**
     * Store a newly created Invoice in storage.
     *
     * @param CreateInvoiceRequest $request
     *
     * @return Response
     */
    public function store(CreateInvoiceRequest $request)
    {
        $input = $request->all();

        $invoice = $this->invoiceRepository->create($input);

        Flash::success('Invoice saved successfully.');

        return redirect(url('admin/invoices?user='.$input['user_id']));
        //return redirect(route('invoices.index'));
    }

    /**
     * Display the specified Invoice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $invoice = $this->invoiceRepository->find($id);

        if (empty($invoice)) {
            Flash::error('Invoice not found');

            return redirect(route('invoices.index'));
        }

        return view('admin.invoices.show')->with('invoice', $invoice);
    }

    /**
     * Show the form for editing the specified Invoice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $invoice = $this->invoiceRepository->find($id);

        if (empty($invoice)) {
            Flash::error('Invoice not found');

            return redirect(route('invoices.index'));
        }
        $user = $invoice->user_id;
        return view('admin.invoices.edit',compact('invoice','user'));
    }

    /**
     * Update the specified Invoice in storage.
     *
     * @param  int              $id
     * @param UpdateInvoiceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInvoiceRequest $request)
    {
        $invoice = $this->invoiceRepository->find($id);

        if (empty($invoice)) {
            Flash::error('Invoice not found');

            return redirect(route('invoices.index'));
        }

        $invoice = $this->invoiceRepository->update($request->all(), $id);

        Flash::success('Invoice updated successfully.');

        //return redirect(route('invoices.index'));
        return redirect(url('admin/invoices?user='.$request->user_id));
    }

    /**
     * Remove the specified Invoice from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $invoice = $this->invoiceRepository->find($id);

        if (empty($invoice)) {
            Flash::error('Invoice not found');

            return redirect(route('invoices.index'));
        }

        $this->invoiceRepository->delete($id);

        Flash::success('Invoice deleted successfully.');

        return redirect(route('invoices.index'));
    }
}
