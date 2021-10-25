<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Manage Store</title>
</head>

<body class="dashboard">
    <div class="wrapper">
        <div class="db-take">
            <div class="sidenav-db">
                <div class="sidenav-1">
                    <a href="#"><img src="https://ta-kemall.com/public/img/logo-take.png" width="100%"></a>
                    <a href="{{url('/manage_order01')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="29px">
                            <image x="0px" y="0px" width="100%" height="29px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAdCAQAAAAas2TAAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQflBBYQKwaJmnU+AAACX0lEQVQ4y4WTS0iUYRSGn/8yjc5YNo5Ug5WFRFhQaHghyE0aZWYQBBFEYRcjFy0qITAxiFLaKBXhIlppqJGIhgWKLUy6QFgLI8HwMkwGXsZGG5x//vlaOL/N6D/jeTcfnPOcl/fAR5B3ruIGu5vFtbTtS+WVcUXy2gr6v2Vt/f57SiNepUh65pyz6g4PLiBqbrdKycSvIt6k5H9MnJdrC2UczR7hZ2PMYScwzcJMervfDq0I0qGSuphADU1IADcRMgKQtlOHDSzmUjjLZQAJ1KUdaTSqz1+x39yhecxRmuRdeocBmS3C4SHVHEh2u/RJooAhCnT31d4YGUo4xTOM1QBYUQjFDC2ApGiH3fQp7U/YZw50jWaW7/VFAYIF5l2kmQM+bV7Woh2GOaFPn/ysGiMSQvoPnNHOcy46gx8/MgQN5QbbtcOaqqGhoVn4SlO0QxYjck8t+cbOybmU8ruel9QDYOEpIhrQ+SG5s8kzAO+fDxucnhxqqSZAL+8jErUg2JGBoEEhxdAhu0AgmMIamf4WIuwwwmNUnRmjE2IRgATu00VfBCMbj4dMrDpnCDsHuMFOM2CcF0grAAnwsZlrZgCMLV8C9PA4wAIVER4yprUJKyoWIAGFRCqWO6o5oPILLyGsUv9p26KrI4f1+OIBnYxSiIWA3FKd6PV2SCjLvfCfXu1RwicEbc5uh6CbdbD0pxUhU6VXkbACCNJFHqUMTPfMFnOMXTziOMCl64j6i504iF9HGVCK3qoBaSI1b9CTdrBtcPhvXCBDsR4Zyi5rJETnntzXBNDXkjRbdu+n7R9EPeWrFJjTWQAAAABJRU5ErkJggg==" />
                        </svg>
                        <br>จัดการ<br>
                        Order
                    </a>
                    <a href="{{url('/manage_money01')}}">
                        <svg mlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="42px">
                            <image x="0px" y="0px" width="100%" height="42px" xlink:href="data:img/png;base64,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" />
                        </svg>
                        <br>จัดการ<br>เงิน
                    </a>
                    <a href="{{url('/manage_store01')}}" class='active'>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="33px">
                            <image x="0px" y="0px" width="100%" height="33px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAhCAQAAAD5GNrZAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQflBBsCOzt2+IS9AAACmElEQVRIx+XWz2tcVRQH8M97SWymcZK0pa0ppdjaUQMF0WLFH1SNLaiYCm6qLvwHpAtRQRBXIjQLN4Ii6EJwJWi61426MO1SdCFu0mKY2NYfNelM5o2ZuS7mzsskmWQ0WXrgwjlfvvf7zrn3vnNvougbhwwKtmKJzJ8e7pc4rOaiZEsywTGH9TGs4qMtSbTsbcFYP5qGFGOK7dISOvzN0KJAouhn+1Qlli0ZNACqmoYkrEIrQo5WFQwICjJ39Ntj1I9+wAGP+86sRPCkEV8IgjETEWXSgGmEnEvJcXs5LTgLHhJMxpS/NBu9Ex3oJT9F70HBGTAhOJsq4TIoYDDS+qRSsHMNag13DuOpuwRz29ipeUtKqZIbft+GzKIrDqb2+01tGzL8aldqwUisuB4HNDQ116FtjL/jgN2qqa/s8wg4ihIYcsCwPUTkaFzW3UaNgttxBNzrmJnEEd9b8Jkxz6sZdMGsZ9yJX3zuNi/I7HDBrKfdjSum7feiqp2mXfacgx5gSFnFkuveN+68sswlz3rCt2qu+8C4KfMyFz3lMV+rueY9Je8oq1lUsZdhN31qRCFWuiOmjQ3R9jm6xYh3278mDX/lpEyW+73QurplaMkkGPWmQoxXW0NmylWTThvI+1LDsinlVrwybdhruLFOJNiFj1014ZxFjZyf+kS5FazINPGhV9d1weAtb2hiGfeZj+g553PJNUVkql2Kyjr8RZXorTr5qY2jbmhfd273if/Z/gcy9a6crLdM54Y33eOldYzgRO+LeUUm0XDKqQ14yb+VuebRjlOx2prx7thUJlFHZqZH5hkW8qiGm+2V60fDca/0fFEEJ/F6bBPBBF4252Sr5qIZh/L2tJnV1BXzz9XV3CqV+cP9/wBFZcy8l1zgegAAAABJRU5ErkJggg==" />
                        </svg>
                        <br>จัดการร้าน<br>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="43px">
                            <image x="0px" y="0px" width="100%" height="43px" xlink:href="data:img/png;base64,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" />
                        </svg>
                        <br>รายงาน
                    </a>
                    <hr>
                    <a href="#" class="setting">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="38px" height="38px">
                            <image opacity="0.4" x="0px" y="0px" width="38px" height="38px" xlink:href="data:img/png;base64,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" />
                        </svg>
                        <br>ตั้งค่า
                    </a>
                </div>
                <!--End sidenav-1 -->
                <div class="sidenav-2">
                    <div>
                        <h2>จัดการร้าน</h2>
                    </div>
                    <div class="sidebar">
                        <a class="bt row" href="{{url('/manage_store01')}}">
                            <div class="col-9">ภาพรวม</div>
                        </a>
                        <a class="bt row" href="{{url('/manage_store02')}}">
                            <div class="col-9">สินค้า(เมนูอาหาร)</div>
                        </a>
                        <!--<a class="bt row active" href="{{url('/manage_store03')}}">
                            <div class="col-9">รายการสั่งซื้อ</div><div class="col-3 num">2</div>
                        </a>-->
                        <a class="bt row active" href="{{url('/manage_store04')}}">
                            <div class="col-9">คูปอง</div>
                        </a>
                        <a class="bt row" href="{{url('/manage_store05')}}">
                            <div class="col-9">ตั้งค่าร้าน</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row content-db">
        <div class="content1 col-2">
            &nbsp;
        </div>
        <div class="content2 col-10">
            @include('templates.header_adminshop')
            <div class="list">
                <div class="head-list">คูปอง</div>
                <hr class="line_hr">
                <!--<div class="search"><a href="#"><img src="{{asset('assets/icon/search.png')}}">ค้นหา</a> <a href="#"><img src="{{asset('assets/icon/fillter.png')}}">เพิ่มตัวกรอง</a></div>-->
            </div>
            <div class="card-list">
                <div class="order-hara row ">
                    <input type="text" class="form-control br" placeholder="ค้นหาจาก หมายเลขออเดอร์ เบอร์โทรศัพท์ " id="inputPlaceholder" style="width: 30%">&nbsp; &nbsp;&nbsp; &nbsp;
                    <button class="btn status-bt rounded-pill" href="#" data-toggle="modal" data-target="#mymodal" style="background-color: #d01f44; color:#ffffff; width:10%; right: 20px; ">เพิ่มใหม่ +</button>
                    
                </div>
                
                <!--loop 1 -->
                <div class="order-hara row">
                
                    <div class="card mx-auto order col-md-12">
                        <div class="d-flex bd-highlight grey">
                            <div class="col"></div>
                            <div class="col">รหัสโปรโมชัน</div>
                            <div class="col">ชื่อโปรโมชัน</div>
                            <div class="col">ระยะเวลา</div>
                            <div class="col">สถานะ</div>
                            <div class="col"></div>
                            
                        </div>
                        <hr>
                        <div class="row">
                            <div class="d-flex bd-highlight">
                                <div class="col"><i class="fas fa-grip-lines"></i></div>
                                <div class="col">000001</div>
                                <div class="col">ทานอาหารครบ 3,000 บาท ลด 15 %</div>
                                <div class="col">ไม่จำกัดเวลา</div>
                                <div class="col"><button type="button" class="btn status-bt rounded-pill" style="background-color: #00C058; color:#ffffff ">Active</button></div>
                                <div class="col"><i class="fas fa-edit"></i>&nbsp; &nbsp;<i class="far fa-trash-alt"></i></div>
                                
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="d-flex bd-highlight">
                                <div class="col"><i class="fas fa-grip-lines"></i></div>
                                <div class="col">000002</div>
                                <div class="col">ฉลองเทศกาลสงกรานต์กับซัมเมอร์โปรโมชัน</div>
                                <div class="col">13/04/2564 - 25/04/2564</div>
                                <div class="col"><button type="button" class="btn status-bt rounded-pill " style="background-color: #00C058; color:#ffffff ">Active</button></div>
                                <div class="col"><i class="fas fa-edit"></i>&nbsp; &nbsp;<i class="far fa-trash-alt"></i></div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="d-flex bd-highlight">
                                <div class="col"><i class="fas fa-grip-lines"></i></div>
                                <div class="col">000003</div>
                                <div class="col">โปรสุดคุ้มต้อนรับวันหยุดยาว</div>
                                <div class="col">1/04/2564 - 30/04/2564</div>
                                <div class="col"><button type="button" class="btn status-bt rounded-pill" style="background-color: #00C058; color:#ffffff ">Active</button></div>
                                <div class="col"><i class="fas fa-edit"></i>&nbsp; &nbsp;<i class="far fa-trash-alt"></i></div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="d-flex bd-highlight">
                                <div class="col"><i class="fas fa-grip-lines"></i></div>
                                <div class="col">000004</div>
                                <div class="col">ซื้อเสื้อผ้า หรือสินค้าภายในร้าน ครบ 5,000...</div>
                                <div class="col">1/04/2564 - 30/04/2564</div>
                                <div class="col"><button type="button" class="btn status-bt rounded-pill" style="background-color: #00C058; color:#ffffff ">Active</button></div>
                                <div class="col"><i class="fas fa-edit"></i>&nbsp; &nbsp;<i class="far fa-trash-alt"></i></div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </div>
    

</body>

</html>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script>

</script>
<script>
    $('.hamber').on('click', function() {
        $(".sidenav-db").css("display", "none");
    });
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>