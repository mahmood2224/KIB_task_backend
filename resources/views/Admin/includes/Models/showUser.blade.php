<div class="modal fade" id="showUser" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel"><i class="ti-marker-alt m-r-10"></i> تفاصيل العضو رقم : <span id="idU"></span> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

{{--                        <div class="col-md-6 showDetilse">--}}
{{--                            <h5><i class="fa fa-check"></i>الاسم</h5>--}}
{{--                            <p class="name_ar valueModal" id="nameU"></p>--}}
{{--                        </div>--}}

                        <div class="col-md-6 showDetilse">
                            <h5><i class="fas fa-star"></i>الكود التعريفي</h5>
                            <p class="main valueModal" id="codeU"></p>
                        </div>

                        <div class="col-md-6 showDetilse">
                            <h5><i class="fas fa-check"></i>الرصيد</h5>
                            <p class="status valueModal" id="balanceU"></p>
                        </div>

                        <div class="col-md-6 showDetilse">
                            <h5><i class="fas fa-check"></i>تاريخ التسجيل بالتطبيق</h5>
                            <p class="status valueModal" id="created_atU"></p>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                </div>
            </form>
        </div>
    </div>
</div>

