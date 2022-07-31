<div class="modal fade bd-example-modal-lg" id="formModel" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="formSubmit">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="titleOfModel"><i class="ti-marker-alt m-r-10"></i> Add new </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-6" id="userNumDiv">
                            <div class="form-group">
                                <label for="example-email">عدد الاعضاء</label>
                                <input type="number" id="userNum"  name="userNum"  class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6" id="codeDiv" style="display: none">
                            <div class="form-group">
                                <label for="example-email">الرقم التعريفي</label>
                                <input type="text" id="code"  name="code"  class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6" id="nameDiv" style="display: none">
                            <div class="form-group">
                                <label for="example-email">الاسم</label>
                                <input type="text" id="name"  name="name"  class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6" id="passwordDiv" style="display: none">
                            <div class="form-group">
                                <label for="example-email">كلمة السر</label>
                                <input type="text" id="password" name="password" class="form-control"   >
                            </div>
                        </div>

                        <div class="col-md-6" id="acceptMinusDiv" style="display: none">
                            <div class="form-group">
                                <label for="example-email">حالة قبول السالب</label>
                                <select  id="acceptMinus" name="acceptMinus" class="form-control"   >
                                    <option value="1">يقبل</option>
                                    <option value="2">لا يقبل</option>
                                </select>
                            </div>
                        </div>


                    </div>
                </div>
                <div id="err"></div>
                <input type="hidden" name="id" id="id">
                <input type="hidden" name="type" id="type" value="1">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"  data-dismiss="modal">اغلاق</button>
                    <button type="submit" id="save" class="btn btn-success"><i class="ti-save"></i> حفظ</button>
                </div>
            </form>
        </div>
    </div>
</div>
