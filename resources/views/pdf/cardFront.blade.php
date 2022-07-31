<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
        @media all {
            * {
                -webkit-print-color-adjust: exact;
            }
            .card-front {
                color: #fff;
                width: 359px;
                height: 189px;
                background-image: url("http://sahel.ahmeds.club/images/pdf/front-bg.png");
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                display: flex;
                position: relative;
            }
            .id-qr-wrap {
                margin: auto;
                width: 60%;
                display: flex;
                gap: 22px;
                align-items: center;
                justify-content: space-between;
                align-items: center;
            }
            .card-front .qr-wrap {
                width: 94px;
                height: 94px;
                background-color: #fff;
                border-radius: 10px;
                padding: 4px;
                display: flex;
            }
            .card-front .qr-wrap img,
            .card-front .qr-wrap svg {
                width: 80px;
                height: 80px;
                margin: auto;
            }
            .id-number .label-p,
            .id-number .id-p {
                text-align: center;
                margin: 0;
                font-size: 16px;
            }
            .id-number .label-p {
                margin-bottom: 14px;
            }
            .card-front .logo-img {
                position: absolute;
                width: 68px;
                bottom: 4%;
                right: 0;
            }
        }
        .page-break {
            page-break-after: always;
            background-image: url(http://sahel.ahmeds.club/images/front.png);
            background-size: 100% 100%;
        }

    </style>
</head>
<body>

<div class="card-front page-break">
    <div class="id-qr-wrap">
        <div class="id-number">
            <p class="label-p">ID NUMBER</p>
            <p class="id-p">{{$row->userId}}</p>
        </div>
        <div class="qr-wrap">
            {!! QrCode::size(60)->generate($row->code) !!}
        </div>
    </div>

    <!--    <img class="logo-img" src="SAHL.png" alt="logo" />-->

</div>
<br>
<br>
</body>
</html>



