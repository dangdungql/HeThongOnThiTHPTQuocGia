<!DOCTYPE html>
<html lang="en">
<head>
    <title>Course - Teachers</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Course Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
    <script src="https://www.gstatic.com/firebasejs/7.1.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.1.0/firebase-firestore.js"></script>
    <link href="forum/font-awesome-4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/VirtualRoom.css">
    <link rel="stylesheet" type="text/css" href="Chat/ChatRoom.css">
    <link rel="stylesheet" type="text/css" href="Chat/Tabbar/TabContainer.css">
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>

</head>
<?php include_once('inc/function.php'); ?>
    <?php include_once('inc/myconnect.php'); 

include("general.php"); ?>
<?php include("headerMore.php"); ?>
<?php
 $value = "";
if(!isset($_COOKIE["email"])) {
    $value = 'dvdung97@gmail.com';
} else {
    $value = $_COOKIE["email"];
}

$query_2 = 'SELECT * FROM tbluser WHERE taikhoan = "'.$value.'"';
              $results_2=mysqli_query($dbc,$query_2);
              kt_query($results_2,$query_2);
              
              $t_k=mysqli_fetch_array($results_2,MYSQLI_ASSOC);
              $gv=$t_k['admin'];
?>
<body style="background: #00BAB3">
<div class="container" style="width: 100%">
    <div class="left">
        <div class="videoWrapper">
            <!-- Copy & Pasted from YouTube -->
            <!-- <iframe width="560" height="349" src="http://www.youtube.com/embed/n_dZNLr2cME?rel=0&hd=1" frameborder="0" allowfullscreen style="border-radius: 8px"></iframe> -->
            <pre id="myCode"></pre>
            <div id="myCodef"></div>
        </div>
        <br/>
        <div <?php if($gv !== '1') echo 'style="display: none;"' ?>>
            <div class="Input">
                <input id="myUrl" type="text" value="" class="Input-text" placeholder="Input your livestream url"/>
                <label for="input" class="Input-label">Livestream Url</label>
            </div>
            <div class="d-flex justify-content-center">
                <button id="myBtn" type="button" class="btn btn-danger active m-2"><i class="fab fa-youtube"></i>Youtube
                </button>
                <button id="myBtnf" type="button" class="btn btn-primary active m-2"><i class="fab fa-facebook-f"></i>
                    Facebook
                </button>
            </div>
        </div>
        <span class="lesson-title">Giải phương trình bậc hai</span>
        <div>
            <br/>
        </div>
        <div>
            <p style="text-align: justify">
                <b>Luyện thi THPT quốc gia PEN-C môn Toán - thầy Nguyễn Thanh Tùng</b> được thiết kế phù hợp hơn với
                những học sinh có học lực Khá - Giỏi khi tham gia ôn luyện cho kì thi THPT quốc gia. Khóa học được tinh
                gọn nhưng toàn diện, đảm bảo sự bao phủ toàn bộ kiến thức bám sát cấu trúc đề thi THPT quốc gia. Với sự
                tham gia giảng dạy của thầy Nguyễn Thanh Tùng - Thầy Tùng Mind-map, thầy giáo của sự chỉn chu, bài bản
                và sự nghiêm túc trong mỗi giờ giảng, chắc chắn các bạn học sinh sẽ vô cùng thích thú và hứng khởi khi
                đăng kí khóa học.
            </p>
            <p class="font-italic" style="text-align: justify">
                Đặc biệt, cuối mỗi chuyên đề đều có đề kiểm tra năng lực được chia thành 4 level để học sinh thử thách
                và đánh giá mức độ nắm vững kiến thức ở mỗi chuyên đề của mình. Đề thi 4 level được xây dựng theo 4 cấp
                độ câu hỏi Nhận biết, Thông hiểu, Vận dụng, Vận dụng cao. Vượt qua level thấp mới được thi tiếp level
                cao hơn. Hoàn thành 4 level được coi là đã nắm vững kiến thức trong chuyên đề đó.
            </p>
            <p>
                Học sinh trước khi tham gia khóa học cần:
            </p>
            <ul>
                <li>
                    <b>Đối với kiến thức 10,11:</b> Nắm chắc những phần kiến thức lớp 10,11 được vận dụng sang lớp 12
                    như: xét dấu tam thức bậc II, các công thức về hình học phẳng ứng dụng trong chuyên đề số phức, hàm
                    số,...
                </li>
            </ul>
            <ul>
                <li>
                    <b>Đối với kiến thức lớp 12:</b> hiểu các khái niệm mới và áp dụng làm được các bài tập cơ bản như
                    cực trị, tích phân, phương trình mũ - logarit..
                </li>
            </ul>
            <h2 class="course-outline">
                <span>Đề cương môn học</span>
            </h2>
        </div>

    </div>
    <div class="right" style="height: 80vh;">
        <?php include("Chat/Tabbar/TabContainer.php"); ?>
        <div class="tab-slider--nav">
            <ul class="tab-slider--tabs">
                <li class="tab-slider--trigger active" rel="tab1">Danh sách học sinh</li>
                <li class="tab-slider--trigger" rel="tab2">Cuộc trò chuyện</li>
            </ul>
        </div>
    </div>
</div>

<script type="text/javascript">


</script>
<script src="Chat/ChatApi/firebase-config.js"></script>

<script>
    $(document).ready(function () {

        // fetch_user();

        // getMessage();

        // pushData();
        let myUser;
        let me = {};
        let myEmail = "<?php echo  $value;?>";
        getUsers();
        getStreamUrl();
        onStreamUrlChange();
        cleanDB();

        function getUsers() {
            console.log('get user')
            $.ajax({
                url: 'Chat/Process.php',
                method: 'POST',
                data: {getUsers: 1},
                success: function (response) {
                    console.log(response)
                    var resp = JSON.parse(response);
                    console.log(resp)
                    let listUserHtml = '';
                    if (Array.isArray(resp.message.users)) {
                        const {users} = resp.message;
                        myUser = users[0];
                        me = users[0];
                        users.map(item => {
                            if(item.taikhoan == myEmail) {
                                myUser = item;
                            }
                            listUserHtml += '            <li class="active">\n' +
                                '                <div class="d-flex bd-highlight">\n' +
                                '                    <div class="img_cont">\n' +
                                '                        <img src="' + item.hinhanh + '" class="rounded-circle user_img">\n' +
                                '                        <span class="online_icon"></span>\n' +
                                '                    </div>\n' +
                                '                    <div class="user_info">\n' +
                                '                        <span>' + item.hoten + '</span>\n' +
                                '                        <p>' + item.hoten + ' is online</p>\n' +
                                '                    </div>\n' +
                                '                </div>\n' +
                                '            </li>'
                        })
                        console.log(myUser)
                        getListChat();
                        getMessage(myUser);
                    }
                    $(".contacts").html(listUserHtml);
                }
            })
        }

        function updateMyInfo(myUser) {
            let myInfoHTML =
                '<span>' + myUser.hoten + '</span>\n' +
                '<p>1767 Tin Nhắn</p>';
            $('#profile').html(myInfoHTML);

        }

        function getMessage(myUser) {
            updateMyInfo(myUser);
            db.collection('channels').onSnapshot((snapShot) => {
                let chatHTML = '';
                snapShot.docChanges().forEach(item => {
                    if (item.type === "added") {
                        console.log(item.doc.data().user_id);
                        console.log(myUser.id)
                        if (item.doc.data().user_id == myUser.id) {
                            chatHTML += '        <div class="d-flex justify-content-end mb-4">\n' +
                                '            <div class="msg_cotainer_send">\n' +
                                item.doc.data().text +
                                '            </div>\n' +
                                '            <div class="img_cont_msg">\n' +
                                '                <img src="' + item.doc.data().avatar + '" class="rounded-circle user_img_msg">\n' +
                                '            </div>\n' +
                                '        </div>'
                        } else {
                            chatHTML += '        <div class="d-flex justify-content-start mb-4">\n' +
                                '            <div class="img_cont_msg">\n' +
                                '                <img src="' + item.doc.data().avatar + '" class="rounded-circle user_img_msg">\n' +
                                '            </div>\n' +
                                '            <div class="msg_cotainer">\n' +
                                item.doc.data().text +
                                '            </div>\n' +
                                '        </div>'
                        }
                    }
                });
                $(".msg_card_body").append(chatHTML);

            })
        }

        function getListChat() {
            db.collection("channels")
                .orderBy("createdAt")
                .get()
                .then((querySnapshot) => {
                    let chatHTML = '';
                    querySnapshot.forEach((item) => {
                        if (item.data().user_id == myUser.id) {
                            chatHTML += '        <div class="d-flex justify-content-end mb-4">\n' +
                                '            <div class="msg_cotainer_send">\n' +
                                item.data().text +
                                '            </div>\n' +
                                '            <div class="img_cont_msg">\n' +
                                '                <img src="' + item.data().avatar + '" class="rounded-circle user_img_msg">\n' +
                                '            </div>\n' +
                                '        </div>'
                        } else {
                            chatHTML += '        <div class="d-flex justify-content-start mb-4">\n' +
                                '            <div class="img_cont_msg">\n' +
                                '                <img src="' + item.data().avatar + '" class="rounded-circle user_img_msg">\n' +
                                '            </div>\n' +
                                '            <div class="msg_cotainer">\n' +
                                item.data().text +
                                '            </div>\n' +
                                '        </div>'
                        }
                    });
                    $(".msg_card_body").html(chatHTML);
                });
        }

        function updateURLFacebook(myUrl) {
            const myId = getIdf(myUrl);

            $('#myId').html(myId);

            $('#myCodef').html('<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></scr' + 'ipt><div class="fb-video" data-href="https://www.facebook.com/facebook/videos/' + myId + '/" data-width="500" data-show-text="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook/videos/' + myId + '/"></blockquote></div></div>');
        }

        function updateURLYoutube(myUrl) {
            console.log(myUrl)
            const myId = getId(myUrl);

            $('#myId').html(myId);
            $('#myCode').html('<iframe width="560" height="349" src="//www.youtube.com/embed/' + myId + '?autoplay=1&showinfo=0&controls=0" frameborder="0" allowfullscreen style="border-radius: 8px"></iframe>');
        }

        function getStreamUrl() {
            db.collection("livestream")
                .limit(1)
                .get()
                .then(querySnapshot => {
                    querySnapshot.forEach(snapshot => {
                        if (snapshot.data().status == 'ONLINE') {
                            console.log(snapshot.data())
                            if (snapshot.data().type === 'FACEBOOK') {
                                updateURLFacebook(snapshot.data().url);
                            } else {
                                updateURLYoutube(snapshot.data().url);
                            }
                        }
                    })
                })
        }

        function onStreamUrlChange() {
            db.collection("livestream")
                .onSnapshot(snapshot => {
                    snapshot.docChanges().forEach(item => {
                        if (item.type == "modified") {
                            if (item.doc.data().status == 'ONLINE') {
                                console.log(item.doc.data())
                                if (item.doc.data().type === 'FACEBOOK') {
                                    updateURLFacebook(item.doc.data().url);
                                } else {
                                    updateURLYoutube(item.doc.data().url);
                                }
                            }
                        }
                    })
                })
        }

        function changeStreamUrl(url, type) {
            db.collection("livestream")
                .get()
                .then(function(querySnapshot) {
                    console.log(querySnapshot)
                    querySnapshot.forEach(function(doc) {
                        console.log(doc.id, " => ", doc.data());
                        // Build doc ref from doc.id
                        db.collection("livestream").doc(doc.id).set({type, url, id: 1, status: "ONLINE"});
                    });
                })
        }

        function pushData() {
            const arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
            arr.map((item, index) => {
                if (index % 2 == 0) {
                    db.collection("channels").add({
                        id: index.toString(),
                        user_id: 1,
                        user_name: "Alan Christian",
                        avatar: "https://i.pinimg.com/originals/54/6e/6d/546e6d4c6ce4322e6aa3b2f8ca73ac28.jpg",
                        text: "Đây là dòng chat của mình nè",
                        createdAt: new Date().getTime(),
                    })
                } else {
                    db.collection("channels").add({
                        id: index.toString(),
                        user_id: 2,
                        user_name: "Selena Williams",
                        avatar: "http://profilepicturesdp.com/wp-content/uploads/2018/07/sweet-girl-profile-pictures-9.jpg",
                        text: "Đây là dòng chat của ngừoi khác",
                        createdAt: new Date().getTime(),
                    })
                }
            })
        }

        function fetch_user() {
            db.collection('channels').get().then(function (snapShot) {
                snapShot.forEach((doc) => {
                    console.log(`${doc.id} => ${doc.data()}`);
                });
            })
            db.collection('channels').where('id', '==', '132').get()
                .then(function (snapShot) {
                    snapShot.forEach((doc) => {
                        console.log(`SSS ${doc.id} => ${doc.data()}`);
                    });
                })
            db.collection("channels").add({
                id: '132',
                first: "Alan",
                middle: "Mathison",
                last: "Turing",
                born: 1912
            })
                .then(function (docRef) {
                    console.log("Document written with ID: ", docRef.id);
                })
                .catch(function (error) {
                    console.error("Error adding document: ", error);
                });
        }

        function cleanDB() {
            var jobskill_query = db.collection('channels').where('user_id','==',2);
            jobskill_query.get().then(function(querySnapshot) {
                querySnapshot.forEach(function(doc) {
                    doc.ref.delete();
                    console.log(doc)
                });
        })
        }

        $(".send-btn").on('click', function () {
            var message = $(".type_msg").val();
            if (message != "") {
                db.collection("channels").add({
                    id: Math.random() % 100,
                    user_id: myUser.id.toString(),
                    user_name: myUser.hoten,
                    avatar: myUser.hinhanh,
                    text: message,
                    createdAt: new Date().getTime(),
                })
                    .then(function (docRef) {
                        $(".type_msg").val("");
                        console.log("Document written with ID: ", docRef.id);
                    })
                    .catch(function (error) {
                        console.error("Error adding document: ", error);
                    });
            }
        })

        function getId(url) {
            var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
            var match = url.match(regExp);

            if (match && match[2].length == 11) {
                return match[2];
            } else {
                return 'error';
            }
        }

        function getIdf(url) {
            var testStr = "https://www.facebook.com/wftv/videos/2372884026364163/jvhvjkđsffgdsfds"
            var splitStr = testStr.substring(url.indexOf('/videos/') + 8);
            var test = splitStr.substring(splitStr.indexOf('/'));
            var res = splitStr.replace(test, "");
            return res;
        }

        var myId;

        $('#myBtn').click(function () {
            var myUrl = $('#myUrl').val();
            myId = getId(myUrl);

            $('#myId').html(myId);
            $('#myCode').html('<iframe width="560" height="349" src="//www.youtube.com/embed/' + myId + '?autoplay=1&showinfo=0&controls=0" frameborder="0" allowfullscreen style="border-radius: 8px"></iframe>');
            console.log("Hello", myUrl)
            changeStreamUrl(myUrl, "YOUTUBE")
        });

        $('#myBtnf').click(function () {
            var myUrl = $('#myUrl').val();
            myId = getIdf(myUrl);

            $('#myId').html(myId);

            $('#myCodef').html('<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></scr' + 'ipt><div class="fb-video" data-href="https://www.facebook.com/facebook/videos/' + myId + '/" data-width="500" data-show-text="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook/videos/' + myId + '/"></blockquote></div></div>');
            changeStreamUrl(myUrl, "FACEBOOK")
        });

    });
</script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src="Chat/Tabbar/TabContainer.js"></script>
</body>
</html>
