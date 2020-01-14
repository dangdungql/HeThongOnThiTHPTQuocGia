<div id="page-wrapper" class="input-wrapper d-none">
    <div class="container-fluid">
        <div id="profile-header" class="row bg-title">
            <div class="col-lg-12">
                <h4 class="page-title">Profile</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Profile Page</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- row -->
        <div class="col-md-8 col-xs-12">
            <div class="white-box">
                <form class="form-horizontal form-material">
                    <div class="form-group">
                        <label class="col-md-12">Tên Mô Phỏng</label>
                        <div class="col-md-12">
                            <input id="name_input" type="text" placeholder="Mô phỏng dao động" class="form-control form-control-line"> </div>
                    </div>
                    <div class="form-group">
                        <label for="example-email" class="col-md-12">Link Mô Phỏng</label>
                        <div class="col-md-12">
                            <input id="user_name_input" type="text" placeholder="https://img" class="form-control form-control-line" name="example-email" id="example-email"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Link hình ảnh mô phỏng </label>
                        <div class="col-md-12">
                            <textarea id="password" rows="5" class="form-control form-control-line"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Chọn môn học</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="#phone_number">
                                <option>Toán</option>
                                <option>Vật lý</option>
                                <option>Hóc Học</option>
                                <option>Sinh học</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <span onclick="themMoPhong()"><a target="_blank" class="btn btn-info btn-rounded waves-effect waves-light btn-warning">Thêm Mô Phỏng</a></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>