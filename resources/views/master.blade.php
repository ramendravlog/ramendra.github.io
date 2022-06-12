<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Comm Project</title>
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> 
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        {{View::make('header')}}
     @yield('content')
     {{View::make('footer')}}
     
    </body>
    <style >
        img.slider-img{
            height:400px  !important
        }
        .custom-product{

            height:600px;
        }
        .slider-text{

            background-color: rgb(58, 58, 59) !important;
            border-radius: 10px;
            text-align: center;
            height:95px;
            

        }
        .trending-image{
            height:100px;
        }
        .trending-item{
           float: left;
           width: 20%;
        }
        .trending-wrapper{
            margin: 30px;
        }
     .detail-img{
         height: 200px;
     }
     .search-box{
         width: 500px !important
     }
     .cart-list-devider{
         border-bottom: 1px solid #ccc;
         margin-bottom: 20px;
         padding-bottom:20px;
     }
     .login-page{

        background-image: url(https://images.unsplash.com/photo-1554260570-9140fd3b7614?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80);
        background-position-x: 24px;
    }
     .register-page{
         background-image:url(https://media.istockphoto.com/photos/starting-small-businesses-sme-owners-female-entrepreneurs-check-to-picture-id1359145888);
        
     
        }
    </style>
    </html>