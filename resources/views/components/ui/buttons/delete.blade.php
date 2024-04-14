@props(['id','model'])
<button class="btn btn-danger js-delete"
        data-toggle="modal"
        data-target="#modal-delete"
        data-action="{{route($model.'.destroy',$id)}}">
    Удалить
</button>
@once
    <div class="modal fade js-modal-delete" id="modal-delete">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body d-flex flex-column">
                    <button type="button"
                            class="close text-right" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="text-center my-2">Категория будет удалена</h3>
                </div>
                <div class="d-flex justify-content-center my-3">
                    <form class="js-delete-form" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit"
                                class="btn btn-danger mr-4 ">
                            Подтвердить
                        </button>
                    </form>
                    <button type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal">
                        Отмена
                    </button>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script>
            $('.js-delete').on('click', function () {
                $('.js-delete-form').attr('action', $(this).data('action'))
            })
        </script>
    @endpush
@endonce
