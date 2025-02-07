<!-- Modal -->
<div class="modal fade" id="users-modal" tabindex="" aria-labelledby="usersModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="POST">
                <div class="modal-header">
                    <h1 class="modal-title" id="usersModalLabel">Gán quyền người dùng</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="">Người dùng</label>
                        <select name="user_id" class="form-select js-select">
                            <option value="0">Chọn người dùng</option>
                            <option value="0">Chọn người dùng</option>
                            <option value="0">Chọn người dùng</option>
                            <option value="0">Chọn người dùng</option>
                            <option value="0">Chọn người dùng</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Vai trò</label>

                        <label for="" class="mb-3 d-block">
                            <input type="checkbox" name="roles[]"> Vai trò 1
                        </label>
                        <label for="" class="mb-3 d-block">
                            <input type="checkbox" name="roles[]"> Vai trò 2
                        </label>
                        <label for="" class="mb-3 d-block">
                            <input type="checkbox" name="roles[]"> Vai trò 3
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary">Lưu thay đổi</button>
                </div>
            </form>
        </div>
    </div>
</div>
