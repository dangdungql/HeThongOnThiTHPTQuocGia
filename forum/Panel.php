<div class="col-lg-4 col-md-4">

    <!-- -->
    <div class="sidebarblock">
        <h3>Danh mục</h3>
        <div class="divline"></div>
        <div class="blocktxt">
            <ul class="cats">
                <?php
                $query_1 = "SELECT * FROM monhoc";
                $results_1 = mysqli_query($dbc, $query_1);
                kt_query($results_1, $query_1);
                while ($topic = mysqli_fetch_array($results_1, MYSQLI_ASSOC)) {?>
                    <li><a href="#"><?php echo $topic["TenMonHoc"]?><span class="badge pull-right"></span></a></li>
                <?php }?>
            </ul>
        </div>
    </div>

    <!-- -->
    <div class="sidebarblock">
        <h3>Bình chọn chủ đề của tuần</h3>
        <div class="divline"></div>
        <div class="blocktxt">
            <p>Chủ để đang hot nhất tại diên đàn</p>
            <form action="#" method="post" class="form">
                <table class="poll">
                    <tr>
                        <td>
                            <div class="progress">
                                <div class="progress-bar color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                    Call of Duty Ghosts
                                </div>
                            </div>
                        </td>
                        <td class="chbox">
                            <input id="opt1" type="radio" name="opt" value="1">
                            <label for="opt1"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="progress">
                                <div class="progress-bar color2" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 63%">
                                    Titanfall
                                </div>
                            </div>
                        </td>
                        <td class="chbox">
                            <input id="opt2" type="radio" name="opt" value="2" checked>
                            <label for="opt2"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="progress">
                                <div class="progress-bar color3" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                    Battlefield 4
                                </div>
                            </div>
                        </td>
                        <td class="chbox">
                            <input id="opt3" type="radio" name="opt" value="3">
                            <label for="opt3"></label>
                        </td>
                    </tr>
                </table>
            </form>
            <p class="smal">Voting ends on 19th of October</p>
        </div>
    </div>

    <!-- -->
    <div class="sidebarblock">
        <h3>Câu hỏi / Bài viết hoạt động</h3>
        <?php
        $query_2 = "SELECT * FROM topic ORDER by rand() LIMIT 6";
        $results_2 = mysqli_query($dbc, $query_2);
        kt_query($results_2, $query_2);
        while ($topic = mysqli_fetch_array($results_2, MYSQLI_ASSOC)) {?>
            <div class="divline"></div>
            <div class="blocktxt">
                <a href="#"><?php echo $topic["title"]?></a>
            </div>
        <?php }?>
    </div>


</div>