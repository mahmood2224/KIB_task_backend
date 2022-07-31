<div class="modal fade bd-example-modal-lg" id="invoiceModel" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="formSubmitInvoice">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="titleOfModel"><i class="ti-marker-alt m-r-10"></i> اضافة رصيد </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-email">المبلغ</label>
                                <input type="number" id="cost" name="cost" step="0.01" required class="form-control"   >
                            </div>
                        </div>



                    </div>
                </div>
                <div id="errInvoice"></div>
                <input type="hidden" name="user_id" id="user_id">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"  data-dismiss="modal">اغلاق</button>
                    <button type="submit" id="saveInvoice" class="btn btn-success"><i class="ti-save"></i> حفظ</button>
                </div>
            </form>
        </div>
    </div>
</div>
