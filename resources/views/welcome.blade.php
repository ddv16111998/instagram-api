<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick-theme.css"/>
    <style>
        .header{
            height: 70px;
            width: 100%;
            background: #fff;
            padding: 20px;
            border-bottom: 1px solid rgba(var(--b6a,219,219,219),1);
            position: fixed;
            z-index: 10000;
        }

        .instagram .header .icon-logo{
            padding-top: 5px;
        }
        .instagram .header .input-search{
            border: none;
            background-color: #EFEFEF;
            border-radius: 7px;
            height: 35px;
            width: 270px;
            padding: 15px 45px;
        }
        .instagram .header .input-search:focus{
            outline: none;
        }

        .instagram .header .search{
            position: relative;
        }
        .instagram .header .icon-search{
            position: absolute;
            left: 25px;
            top: 10px;
        }

        .instagram .header .list-action{
            display: flex;
            justify-content: space-between;
            padding-top: 5px;
        }
        .instagram .header .list-action .logo-profile{
            width: 27px;
            height: 27px;
        }
        .instagram .main{
            background-color: #FAFAFA;
            height: auto;
            padding-top: 70px;
        }

        .instagram .main .stories{
            width: 100%;
            height: 100px;
            border: 1px solid rgba(var(--b6a,219,219,219),1);
            margin-top: 30px;
            padding: 17px;
        }

        .instagram .main .story img{
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .instagram .main .story .name-user{
            font-size: 14px;
        }

        .instagram .main .posts .post {
            width: 100%;
            height: auto;
            border: 1px solid rgba(var(--b6a,219,219,219),1);
            padding: 20px;
            padding-bottom: 0px;
            margin-bottom: 60px;
        }

        .instagram .main .posts .post .name {
            margin-left: 10px;
        }

        .instagram .main .posts .post .account{
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(var(--b6a,219,219,219),1);
        ;
        }

        .instagram .main .posts .post .more-options{
            padding-top: 10px;
        }

        .instagram .main .posts .post .actions{
            margin-top: 25px;
        }

        .instagram .main .posts .post .react-and-comment{
            padding-top: 15px;
        }

        .instagram .main .posts .post .react-and-comment textarea{
            border: none;
            overflow: auto;
            outline: none;

            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;

            resize: none; /*remove the resize handle on the bottom right*/
            background-color: #FAFAFA;
        }
        .instagram .main .posts .post .btn-comment{
            text-align: right;
        }
        .friend-onl{
            padding-top: 30px;
        }
        .list-friend-onl li{
            list-style: none;
            margin-bottom: 15px;
            display: flex;
        }

        .list-friend-onl li .avatar-and-online{
            position: relative;
            padding-right: 10px;
        }
        .list-friend-onl li .avatar{
            width: 30px;
            height: 30px;
            border-radius: 50%;
            position: relative;

        }

        .list-friend-onl li .status-online{
            width: 9px;
            height: 9px;
            background-color: #00ac40;
            border-radius: 50%;
            position: absolute;
            top: 21px;
            left: 21px;
        }

    </style>
</head>
<body>
    <div class="instagram">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="icon-logo col-md-4">
                        <img src="{{asset('images/icon-instagram.png')}}" alt="logo-instagram">
                    </div>
                    <div class="search col-md-4">
                        <svg aria-label="Search" class="icon-search" color="#8e8e8e" fill="#8e8e8e" height="16" role="img" viewBox="0 0 24 24" width="16"><path d="M19 10.5A8.5 8.5 0 1110.5 2a8.5 8.5 0 018.5 8.5z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="16.511" x2="22" y1="16.511" y2="22"></line></svg>
                        <input type="text" class="input-search" placeholder="Search">
                    </div>
                    <div class="list-action col-md-4">
                        <div class="home">
                            <svg aria-label="Home" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M9.005 16.545a2.997 2.997 0 012.997-2.997h0A2.997 2.997 0 0115 16.545V22h7V11.543L12 2 2 11.543V22h7.005z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2"></path></svg>
                        </div>
                        <div class="redirect-message">
                            <svg aria-label="Direct" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M22.91 2.388a.69.69 0 00-.597-.347l-20.625.002a.687.687 0 00-.482 1.178L7.26 9.16a.686.686 0 00.778.128l7.612-3.657a.723.723 0 01.937.248.688.688 0 01-.225.932l-7.144 4.52a.69.69 0 00-.3.743l2.102 8.692a.687.687 0 00.566.518.655.655 0 00.103.008.686.686 0 00.59-.337L22.903 3.08a.688.688 0 00.007-.692" fill-rule="evenodd"></path></svg>
                        </div>
                        <div class="new-post">
                            <svg aria-label="New Post" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M2 12v3.45c0 2.849.698 4.005 1.606 4.944.94.909 2.098 1.608 4.946 1.608h6.896c2.848 0 4.006-.7 4.946-1.608C21.302 19.455 22 18.3 22 15.45V8.552c0-2.849-.698-4.006-1.606-4.945C19.454 2.7 18.296 2 15.448 2H8.552c-2.848 0-4.006.699-4.946 1.607C2.698 4.547 2 5.703 2 8.552z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="6.545" x2="17.455" y1="12.001" y2="12.001"></line><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="12.003" x2="12.003" y1="6.545" y2="17.455"></line></svg>
                        </div>
                        <div class="find-people">
                            <svg aria-label="Find People" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><polygon fill="none" points="13.941 13.953 7.581 16.424 10.06 10.056 16.42 7.585 13.941 13.953" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon><polygon fill-rule="evenodd" points="10.06 10.056 13.949 13.945 7.581 16.424 10.06 10.056"></polygon><circle cx="12.001" cy="12.005" fill="none" r="10.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle></svg>
                        </div>
                        <div class="activity-feed">
                            <svg aria-label="Activity Feed" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24"><path d="M34.6 3.1c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5s1.1-.2 1.6-.5c1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path></svg>
                        </div>
                        <div class="account">
                            <img alt="profile picture" class="logo-profile" crossorigin="anonymous" data-testid="user-avatar" draggable="false" src="https://scontent.cdninstagram.com/v/t51.2885-19/44884218_345707102882519_2446069589734326272_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;_nc_cat=1&amp;_nc_ohc=5KuxJ0vBT7YAX_PwMCQ&amp;edm=AKBKmG8AAAAA&amp;ccb=7-4&amp;ig_cache_key=YW5vbnltb3VzX3Byb2ZpbGVfcGlj.2-ccb7-4&amp;oh=00_AT_ZcsQUHN6x8K0mL4GxhTd2_QoVUEmc2HCh73Lvrnf5eA&amp;oe=6232998F&amp;_nc_sid=2cfe3e">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="stories">
                            <div class="story">
                                <img src="{{asset('images/logo-user.png')}}" alt="">
                                <span class="name-user">viendd</span>
                            </div>
                            <div class="story">
                                <img src="{{asset('images/logo-user.png')}}" alt="">
                                <span class="name-user">viendd</span>
                            </div>

                            <div class="story">
                                <img src="{{asset('images/logo-user.png')}}" alt="">
                                <span class="name-user">viendd</span>
                            </div>

                            <div class="story">
                                <img src="{{asset('images/logo-user.png')}}" alt="">
                                <span class="name-user">viendd</span>
                            </div>

                            <div class="story">
                                <img src="{{asset('images/logo-user.png')}}" alt="">
                                <span class="name-user">viendd</span>
                            </div>

                            <div class="story">
                                <img src="{{asset('images/logo-user.png')}}" alt="">
                                <span class="name-user">viendd</span>
                            </div>

                            <div class="story">
                                <img src="{{asset('images/logo-user.png')}}" alt="">
                                <span class="name-user">viendd</span>
                            </div>

                            <div class="story">
                                <img src="{{asset('images/logo-user.png')}}" alt="">
                                <span class="name-user">viendd</span>
                            </div>
                            <div class="story">
                                <img src="{{asset('images/logo-user.png')}}" alt="">
                                <span class="name-user">viendd</span>
                            </div>
                            <div class="story">
                                <img src="{{asset('images/logo-user.png')}}" alt="">
                                <span class="name-user">viendd</span>
                            </div>
                            <div class="story">
                                <img src="{{asset('images/logo-user.png')}}" alt="">
                                <span class="name-user">viendd</span>
                            </div>
                            <div class="story">
                                <img src="{{asset('images/logo-user.png')}}" alt="">
                                <span class="name-user">viendd</span>
                            </div>

                        </div>
                        <div class="posts">
                            <div class="post">
                                <div class="row account">
                                    <div class="col-md-11">
                                        <img class="avatar" src="{{asset('images/logo-user.png')}}" width="50" height="50" alt="">
                                        <span class="name">viendd</span>
                                    </div>
                                    <div class="col-md-1 more-options">
                                        <svg aria-label="More options" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><circle cx="12" cy="12" r="1.5"></circle><circle cx="6" cy="12" r="1.5"></circle><circle cx="18" cy="12" r="1.5"></circle></svg>
                                    </div>
                                </div>
                                <div class="row content">
                                    <img width="100%" height="auto" src="{{asset('images/media.png')}}" alt="">
                                </div>
                                <div class="row actions">
                                    <div class="col-md-11">
                                        <span class="favorite" style="padding-right: 12px">
                                            <svg aria-label="Unlike" class="_8-yf5 " color="#ed4956" fill="#ed4956" height="24" role="img" viewBox="0 0 48 48" width="24"><path d="M34.6 3.1c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5s1.1-.2 1.6-.5c1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path></svg>
                                        </span>
                                        <span class="comment" style="padding-right: 12px">
                                            <svg aria-label="Comment" class="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M20.656 17.008a9.993 9.993 0 10-3.59 3.615L22 22z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2"></path></svg>
                                        </span>
                                        <span class="share" style="padding-right: 12px">
                                            <svg aria-label="Share Post" class="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="24" role="img" viewBox="0 0 24 24" width="24"><line fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2" x1="22" x2="9.218" y1="3" y2="10.083"></line><polygon fill="none" points="11.698 20.334 22 3.001 2 3.001 9.218 10.084 11.698 20.334" stroke="currentColor" stroke-linejoin="round" stroke-width="2"></polygon></svg>
                                        </span>
                                    </div>
                                    <div class="col-md-1 right">
                                        <span class="save">
                                            <svg aria-label="Save" class="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="24" role="img" viewBox="0 0 24 24" width="24"><polygon fill="none" points="20 21 12 13.44 4 21 4 3 20 3 20 21" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon></svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="row info" style="border-bottom: 1px solid rgba(var(--b6a,219,219,219),1)">
                                    <div class="col-md-12">
                                        <b class="like">14,2 like</b>
                                        <p>
                                            karik.koniz No place is safe for sensitive souls.
                                        </p>
                                        <p>
                                            View all 166 comments
                                        </p>
                                        <p>
                                            1 DAY AGO
                                        </p>
                                    </div>
                                </div>

                                <div class="row react-and-comment">
                                    <div class="col-md-1">
                                        <svg aria-label="Emoji" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M15.83 10.997a1.167 1.167 0 101.167 1.167 1.167 1.167 0 00-1.167-1.167zm-6.5 1.167a1.167 1.167 0 10-1.166 1.167 1.167 1.167 0 001.166-1.167zm5.163 3.24a3.406 3.406 0 01-4.982.007 1 1 0 10-1.557 1.256 5.397 5.397 0 008.09 0 1 1 0 00-1.55-1.263zM12 .503a11.5 11.5 0 1011.5 11.5A11.513 11.513 0 0012 .503zm0 21a9.5 9.5 0 119.5-9.5 9.51 9.51 0 01-9.5 9.5z"></path></svg>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea placeholder="Add a comment..." name="comment" id="input-comment" cols="50" rows="1"></textarea>
                                    </div>
                                    <div class="col-md-2 btn-comment">
                                        <b class="right">Post</b>
                                    </div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="row account">
                                    <div class="col-md-11">
                                        <img class="avatar" src="{{asset('images/logo-user.png')}}" width="50" height="50" alt="">
                                        <span class="name">viendd</span>
                                    </div>
                                    <div class="col-md-1 more-options">
                                        <svg aria-label="More options" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><circle cx="12" cy="12" r="1.5"></circle><circle cx="6" cy="12" r="1.5"></circle><circle cx="18" cy="12" r="1.5"></circle></svg>
                                    </div>
                                </div>
                                <div class="row content">
                                    <img width="100%" height="auto" src="{{asset('images/media.png')}}" alt="">
                                </div>
                                <div class="row actions">
                                    <div class="col-md-11">
                                        <span class="favorite" style="padding-right: 12px">
                                            <svg aria-label="Unlike" class="_8-yf5 " color="#ed4956" fill="#ed4956" height="24" role="img" viewBox="0 0 48 48" width="24"><path d="M34.6 3.1c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5s1.1-.2 1.6-.5c1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path></svg>
                                        </span>
                                        <span class="comment" style="padding-right: 12px">
                                            <svg aria-label="Comment" class="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M20.656 17.008a9.993 9.993 0 10-3.59 3.615L22 22z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2"></path></svg>
                                        </span>
                                        <span class="share" style="padding-right: 12px">
                                            <svg aria-label="Share Post" class="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="24" role="img" viewBox="0 0 24 24" width="24"><line fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2" x1="22" x2="9.218" y1="3" y2="10.083"></line><polygon fill="none" points="11.698 20.334 22 3.001 2 3.001 9.218 10.084 11.698 20.334" stroke="currentColor" stroke-linejoin="round" stroke-width="2"></polygon></svg>
                                        </span>
                                    </div>
                                    <div class="col-md-1 right">
                                        <span class="save">
                                            <svg aria-label="Save" class="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="24" role="img" viewBox="0 0 24 24" width="24"><polygon fill="none" points="20 21 12 13.44 4 21 4 3 20 3 20 21" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon></svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="row info" style="border-bottom: 1px solid rgba(var(--b6a,219,219,219),1)">
                                    <div class="col-md-12">
                                        <b class="like">14,2 like</b>
                                        <p>
                                            karik.koniz No place is safe for sensitive souls.
                                        </p>
                                        <p>
                                            View all 166 comments
                                        </p>
                                        <p>
                                            1 DAY AGO
                                        </p>
                                    </div>
                                </div>

                                <div class="row react-and-comment">
                                    <div class="col-md-1">
                                        <svg aria-label="Emoji" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M15.83 10.997a1.167 1.167 0 101.167 1.167 1.167 1.167 0 00-1.167-1.167zm-6.5 1.167a1.167 1.167 0 10-1.166 1.167 1.167 1.167 0 001.166-1.167zm5.163 3.24a3.406 3.406 0 01-4.982.007 1 1 0 10-1.557 1.256 5.397 5.397 0 008.09 0 1 1 0 00-1.55-1.263zM12 .503a11.5 11.5 0 1011.5 11.5A11.513 11.513 0 0012 .503zm0 21a9.5 9.5 0 119.5-9.5 9.51 9.51 0 01-9.5 9.5z"></path></svg>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea placeholder="Add a comment..." name="comment" id="input-comment" cols="50" rows="1"></textarea>
                                    </div>
                                    <div class="col-md-2 btn-comment">
                                        <b class="right">Post</b>
                                    </div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="row account">
                                    <div class="col-md-11">
                                        <img class="avatar" src="{{asset('images/logo-user.png')}}" width="50" height="50" alt="">
                                        <span class="name">viendd</span>
                                    </div>
                                    <div class="col-md-1 more-options">
                                        <svg aria-label="More options" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><circle cx="12" cy="12" r="1.5"></circle><circle cx="6" cy="12" r="1.5"></circle><circle cx="18" cy="12" r="1.5"></circle></svg>
                                    </div>
                                </div>
                                <div class="row content">
                                    <img width="100%" height="auto" src="{{asset('images/media.png')}}" alt="">
                                </div>
                                <div class="row actions">
                                    <div class="col-md-11">
                                        <span class="favorite" style="padding-right: 12px">
                                            <svg aria-label="Unlike" class="_8-yf5 " color="#ed4956" fill="#ed4956" height="24" role="img" viewBox="0 0 48 48" width="24"><path d="M34.6 3.1c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5s1.1-.2 1.6-.5c1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path></svg>
                                        </span>
                                        <span class="comment" style="padding-right: 12px">
                                            <svg aria-label="Comment" class="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M20.656 17.008a9.993 9.993 0 10-3.59 3.615L22 22z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2"></path></svg>
                                        </span>
                                        <span class="share" style="padding-right: 12px">
                                            <svg aria-label="Share Post" class="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="24" role="img" viewBox="0 0 24 24" width="24"><line fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2" x1="22" x2="9.218" y1="3" y2="10.083"></line><polygon fill="none" points="11.698 20.334 22 3.001 2 3.001 9.218 10.084 11.698 20.334" stroke="currentColor" stroke-linejoin="round" stroke-width="2"></polygon></svg>
                                        </span>
                                    </div>
                                    <div class="col-md-1 right">
                                        <span class="save">
                                            <svg aria-label="Save" class="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="24" role="img" viewBox="0 0 24 24" width="24"><polygon fill="none" points="20 21 12 13.44 4 21 4 3 20 3 20 21" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon></svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="row info" style="border-bottom: 1px solid rgba(var(--b6a,219,219,219),1)">
                                    <div class="col-md-12">
                                        <b class="like">14,2 like</b>
                                        <p>
                                            karik.koniz No place is safe for sensitive souls.
                                        </p>
                                        <p>
                                            View all 166 comments
                                        </p>
                                        <p>
                                            1 DAY AGO
                                        </p>
                                    </div>
                                </div>

                                <div class="row react-and-comment">
                                    <div class="col-md-1">
                                        <svg aria-label="Emoji" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M15.83 10.997a1.167 1.167 0 101.167 1.167 1.167 1.167 0 00-1.167-1.167zm-6.5 1.167a1.167 1.167 0 10-1.166 1.167 1.167 1.167 0 001.166-1.167zm5.163 3.24a3.406 3.406 0 01-4.982.007 1 1 0 10-1.557 1.256 5.397 5.397 0 008.09 0 1 1 0 00-1.55-1.263zM12 .503a11.5 11.5 0 1011.5 11.5A11.513 11.513 0 0012 .503zm0 21a9.5 9.5 0 119.5-9.5 9.51 9.51 0 01-9.5 9.5z"></path></svg>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea placeholder="Add a comment..." name="comment" id="input-comment" cols="50" rows="1"></textarea>
                                    </div>
                                    <div class="col-md-2 btn-comment">
                                        <b class="right">Post</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" style="text-align: right">
                        <div class="friend-onl">
                            <ul class="list-friend-onl">
                                <li><b>List friend online</b></li>
                                <li>
                                    <div class="avatar-and-online">
                                        <img src="{{asset('/images/logo-user.png')}}" class="avatar" alt="">
                                        <div class="status-online"></div>
                                    </div>
                                    <span class="name">viendd</span>
                                </li>
                                <li>
                                    <div class="avatar-and-online">
                                        <img src="{{asset('/images/logo-user.png')}}" class="avatar" alt="">
                                        <div class="status-online"></div>
                                    </div>
                                    <span class="name">viendd</span>
                                </li>
                                <li>
                                    <div class="avatar-and-online">
                                        <img src="{{asset('/images/logo-user.png')}}" class="avatar" alt="">
                                        <div class="status-online"></div>
                                    </div>
                                    <span class="name">viendd</span>
                                </li>
                                <li>
                                    <div class="avatar-and-online">
                                        <img src="{{asset('/images/logo-user.png')}}" class="avatar" alt="">
                                        <div class="status-online"></div>
                                    </div>
                                    <span class="name">viendd</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">

        </div>
    </div>
</body>
</html>
<script>
    $(document).ready(function() {
        $('.stories').slick({
            infinite: false,
            slidesToShow: 8,
            slidesToScroll: 2,
            dots: false,
            speed: 400,
            autoplay: true,
            autoplaySpeed: 5000,
            easing: 'linear',
            arrows: true,
            fade: false,
            pauseOnHover: true,
            swipe: true,
        });
    });
</script>
