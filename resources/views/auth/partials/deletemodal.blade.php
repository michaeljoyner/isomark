<div class="modal fade" id="confirm-delete-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Confirm deletion</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete <span class="users-name">this user</span>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <form method="POST" action="" class="delete-form">
                    <input type="hidden" name="_method" value="DELETE"/>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    <input type="submit" class="btn btn-primary btn-large" value="Delete"/>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->