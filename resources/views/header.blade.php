

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" >

    <!-- Perfect Scrollbar -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/perfect-scrollbar.css') }}">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <!-- App CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.rtl.css') }}">


    <!-- Material Design Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/vendor-material-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/vendor-material-icons.rtl.css') }}">


    <!-- Font Awesome FREE Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/vendor-fontawesome-free.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/vendor-fontawesome-free.rtl.css') }}">



    <!-- ion Range Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/vendor-ion-rangeslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/vendor-ion-rangeslider.rtl.css') }}">

    <style>
        .floating-btn{
            width: 80px;
            height: 80px;
            background: #009879;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            display: flex;
            border-radius: 50%;
            color: #FFFFFF; 
            font-size: 40px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.25);
            position: fixed;
            right: 50px;
            bottom: 40px;
            transition: background 0.25s; 


        }

        .floating-btn:active{
            background: #007D63;
        }

        .auth-error{
            padding-bottom: 11px;
            margin: auto;
        }

        /* .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#0C9;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            box-shadow: 2px 2px 3px #999;
        }

        .my-float{
            margin-top:22px;
        } */


    </style>