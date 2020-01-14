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
                            <label class="col-md-12">Họ và tên</label>
                            <div class="col-md-12">
                                <input id="name_input" type="text" placeholder="Johnathan Doe" class="form-control form-control-line"> </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Tên đăng nhập</label>
                            <div class="col-md-12">
                                <input id="user_name_input" type="text" placeholder="johnathan" class="form-control form-control-line" name="example-email" id="example-email"> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Mật khẩu</label>
                            <div class="col-md-12">
                                <input id="password" type="password" value="password" class="form-control form-control-line"> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Số điện thoại</label>
                            <div class="col-md-12">
                                <input id="phone_number" type="text" placeholder="123 456 7890" class="form-control form-control-line"> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Thông tin bản thân</label>
                            <div class="col-md-12">
                                <textarea rows="5" class="form-control form-control-line"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Chọn khu vực</label>
                            <div class="col-sm-12">
                                <select class="form-control form-control-line">
                                    <option>Hồ Chí Minh</option>
                                    <option>Hà Nội</option>
                                    <option>Đà Nẵng</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <span onclick="insertTeacher()"><a target="_blank" class="btn btn-info btn-rounded waves-effect waves-light btn-warning">Sửa thông tin</a></span>
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