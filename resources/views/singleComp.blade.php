<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="expires" content="Thu Dec 08 2022 18:30:44 GMT+0200" />
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <title data-react-helmet="true">صفحه الشركات </title>
    @include('include.css')
    <style>
        html,
        body {
            padding: 0;
            margin: 0;
            font-family: 'Open Sans', sans-serif;
        }

        input,
        textarea,
        select,
        button {
            font-family: 'Open Sans', sans-serif;
        }

        * {
            box-sizing: border-box;

        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet" />

</head>

<body style="background:#f3f4f6;">
    @include('include.nav')
    @if (Session::has('message'))
        <h3 class="alert text-center {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}
        </h3>
    @endif
    <div id="app">
        <div>
            <style data-emotion="css 1l5zmx1">
                .css-1l5zmx1 {
                    height: 62px;
                    position: relative;
                }
            </style>
            <style data-emotion="css app">
                #app {
                    width: 60%;
                    direction: rtl;
                    margin: auto;
                }

                @media screen and (max-width: 500px) {
                    #app {
                        width: 90%;
                    }

                    li {
                        font-size: 1rem;
                    }
                }
            </style>
            <style data-emotion="css-global lby6aw">
                h1,
                h2,
                h3,
                h4,
                h5,
                h6 {
                    margin: 0;
                }

                body {
                    height: 100%;
                    overflow-y: scroll;
                    -webkit-overflow-scrolling: touch;
                }

                li {
                    font-size: 1.25rem;

                }
            </style>
            <style data-emotion="css 44l6ak">
                .css-44l6ak {
                    max-width: 1170px;
                    margin: 0 auto -80px;
                    padding: 24px 0 32px;
                    position: relative;
                }

                @media screen and (min-width: 992px) {
                    .css-44l6ak {
                        display: -webkit-box;
                        display: -webkit-flex;
                        display: -ms-flexbox;
                        display: flex;
                        padding: 32px 16px;
                    }
                }
            </style>
            <main class="css-44l6ak">
                <style data-emotion="css soatcn">
                    .css-soatcn {
                        margin-right: 16px;
                        -webkit-flex: 1;
                        -ms-flex: 1;
                        flex: 1;
                    }
                </style>
                <article class="css-soatcn">
                    <style data-emotion="css 15orz5f">
                        .css-15orz5f {
                            max-width: calc(1170px - 32px);
                            margin: 0 auto;
                            position: fixed;
                            top: 62px;
                            left: 0;
                            right: 0;
                            z-index: 100;
                        }
                    </style>
                    <div style="transform:translateY(-300px)" class="css-15orz5f">
                        <style data-emotion="css abkpd7">
                            .css-abkpd7 {
                                background: #ffffff;
                                padding: 16px;
                                border: 1px solid #EBEDF0;
                                border-top: 0;
                                border-radius: 0 0 4px 4px;
                                box-shadow: 0px 2px 6px 0px rgba(0, 0, 0, 0.08);
                                display: -webkit-box;
                                display: -webkit-flex;
                                display: -ms-flexbox;
                                display: flex;
                                -webkit-align-items: flex-start;
                                -webkit-box-align: flex-start;
                                -ms-flex-align: flex-start;
                                align-items: flex-start;
                            }

                            @media screen and (min-width: 1170px) {
                                .css-abkpd7 {
                                    margin-right: 330px;
                                }
                            }
                        </style>
                        <div class="css-abkpd7">
                            <style data-emotion="css 17uar7s">
                                .css-17uar7s {
                                    -webkit-flex: 1;
                                    -ms-flex: 1;
                                    flex: 1;
                                    display: -webkit-box;
                                    display: -webkit-flex;
                                    display: -ms-flexbox;
                                    display: flex;
                                    -webkit-align-items: center;
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    align-items: center;
                                }
                            </style>
                            <div class="css-17uar7s"><a>
                                    <style data-emotion="css avtvmf">
                                        .css-avtvmf {
                                            max-height: 60px;
                                            max-width: 60px;
                                            margin-right: 16px;
                                        }
                                    </style>
                                </a>
                                <div>
                                    <style data-emotion="css a8lkn">
                                        .css-a8lkn {
                                            color: #001433;
                                            font-size: 20px;
                                            font-weight: 600;
                                            letter-spacing: -0.5px;
                                            line-height: 29px;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            width: 100%;
                                            white-space: nowrap;
                                        }
                                    </style>
                                    <h1 class="css-a8lkn">{{ $company[0]->representive }}</h1>
                                    <style data-emotion="css 9geu3q">
                                        .css-9geu3q {
                                            font-size: 14px;
                                            font-weight: 600;
                                            font-style: normal;
                                            letter-spacing: -0.35px;
                                            line-height: 22px;
                                            color: #576C8D;
                                            margin-right: 4px;
                                            display: -webkit-inline-box;
                                            display: -webkit-inline-flex;
                                            display: -ms-inline-flexbox;
                                            display: inline-flex;
                                            -webkit-align-items: center;
                                            -webkit-box-align: center;
                                            -ms-flex-align: center;
                                            align-items: center;
                                            -webkit-box-flex-wrap: wrap;
                                            -webkit-flex-wrap: wrap;
                                            -ms-flex-wrap: wrap;
                                            flex-wrap: wrap;
                                            margin-bottom: 4px;
                                        }

                                        @media screen and (max-width: 991px) {
                                            .css-9geu3q {
                                                display: -webkit-box;
                                                display: -webkit-flex;
                                                display: -ms-flexbox;
                                                display: flex;
                                            }
                                        }
                                    </style><strong class="css-9geu3q">
                                        <style data-emotion="css 9iujih">
                                            .css-9iujih {
                                                position: relative;
                                                display: -webkit-box;
                                                display: -webkit-flex;
                                                display: -ms-flexbox;
                                                display: flex;
                                                -webkit-align-items: center;
                                                -webkit-box-align: center;
                                                -ms-flex-align: center;
                                                align-items: center;
                                            }
                                        </style>
                                        <div class="css-9iujih"> </div>{{ $company[0]->work }}
                                    </strong>
                                </div>
                            </div>
                            <div>
                                <style data-emotion="css s5xdrg">
                                    .css-s5xdrg {
                                        display: -webkit-box;
                                        display: -webkit-flex;
                                        display: -ms-flexbox;
                                        display: flex;
                                        -webkit-align-items: center;
                                        -webkit-box-align: center;
                                        -ms-flex-align: center;
                                        align-items: center;
                                    }
                                </style>
                                <div class="css-s5xdrg">
                                    <style data-emotion="css 1q4vxyr">
                                        .css-1q4vxyr {
                                            margin-left: 8px;
                                        }
                                    </style>
                                    <div class="css-1q4vxyr">
                                        <div>
                                            <div class="css-0">
                                                <style data-emotion="css y5no8w">
                                                    .css-y5no8w {
                                                        height: 40px;
                                                        width: 48px;
                                                    }

                                                    .css-y5no8w:focus {
                                                        border: none;
                                                    }
                                                </style>
                                                <style data-emotion="css 16whudl">
                                                    .css-16whudl {
                                                        min-height: auto;
                                                        min-width: auto;
                                                        padding: 8px;
                                                        vertical-align: middle;
                                                        height: 40px;
                                                        width: 48px;
                                                    }

                                                    .css-16whudl:focus {
                                                        border: none;
                                                    }
                                                </style>
                                                <style data-emotion="css w8jhkb">
                                                    .css-w8jhkb {
                                                        display: -webkit-inline-box;
                                                        display: -webkit-inline-flex;
                                                        display: -ms-inline-flexbox;
                                                        display: inline-flex;
                                                        -webkit-box-pack: center;
                                                        -ms-flex-pack: center;
                                                        -webkit-justify-content: center;
                                                        justify-content: center;
                                                        -webkit-align-items: center;
                                                        -webkit-box-align: center;
                                                        -ms-flex-align: center;
                                                        align-items: center;
                                                        font-size: 15px;
                                                        padding: 0 12px;
                                                        border: 1px solid transparent;
                                                        border-radius: 2px;
                                                        -webkit-text-decoration: none;
                                                        text-decoration: none;
                                                        text-align: center;
                                                        -webkit-user-select: none;
                                                        -moz-user-select: none;
                                                        -ms-user-select: none;
                                                        user-select: none;
                                                        cursor: pointer;
                                                        min-width: 80px;
                                                        -webkit-transition: color .2s ease, background-color .2s ease, border-color .2s ease;
                                                        transition: color .2s ease, background-color .2s ease, border-color .2s ease;
                                                        min-height: 40px;
                                                        line-height: 32px;
                                                        color: #4D6182;
                                                        background-color: #EBEDF0;
                                                        border-color: #D9DDE4;
                                                        min-height: auto;
                                                        min-width: auto;
                                                        padding: 8px;
                                                        vertical-align: middle;
                                                        height: 40px;
                                                        width: 48px;
                                                    }

                                                    .css-w8jhkb:focus {
                                                        outline: none;
                                                    }

                                                    .css-w8jhkb:disabled {
                                                        opacity: 0.25;
                                                        cursor: not-allowed;
                                                    }

                                                    .css-w8jhkb:hover {
                                                        background-color: #D9DDE4;
                                                    }

                                                    .css-w8jhkb:active {
                                                        background-color: #CCD2DB;
                                                    }

                                                    .css-w8jhkb:focus {
                                                        border-color: #80B2FF;
                                                    }

                                                    .css-w8jhkb:disabled {
                                                        opacity: 0.5;
                                                    }

                                                    .css-w8jhkb:disabled:hover {
                                                        background-color: #EBEDF0;
                                                    }

                                                    .css-w8jhkb:focus {
                                                        border: none;
                                                    }
                                                </style><button type="button" class="css-w8jhkb ezfki8j0">
                                                    <style data-emotion="css 16r7llb">
                                                        .css-16r7llb {
                                                            display: -webkit-inline-box;
                                                            display: -webkit-inline-flex;
                                                            display: -ms-inline-flexbox;
                                                            display: inline-flex;
                                                            line-height: 1em;
                                                            width: 24px;
                                                            height: 24px;
                                                        }
                                                    </style><i size="24" class="css-16r7llb efou2fk0"><svg
                                                            width="24" height="24" preserveAspectRatio="none"
                                                            viewBox="0 0 24 24">
                                                            <path fill="#4D6182"
                                                                d="M13.8 14.152v3.691l7.2-6.307-7.2-6.286v3.586c-6.998.907-9.788 5.4-10.8 9.914 2.497-3.164 5.805-4.598 10.8-4.598z">
                                                            </path>
                                                        </svg></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <style data-emotion="css 1himkc0">
                                        .css-1himkc0 {
                                            width: 220px;
                                            margin-left: 12px;
                                        }
                                    </style>
                                    <style data-emotion="css 1xmx2ze">
                                        .css-1xmx2ze {
                                            display: -webkit-inline-box;
                                            display: -webkit-inline-flex;
                                            display: -ms-inline-flexbox;
                                            display: inline-flex;
                                            -webkit-box-pack: center;
                                            -ms-flex-pack: center;
                                            -webkit-justify-content: center;
                                            justify-content: center;
                                            -webkit-align-items: center;
                                            -webkit-box-align: center;
                                            -ms-flex-align: center;
                                            align-items: center;
                                            font-size: 15px;
                                            padding: 0 12px;
                                            border: 1px solid transparent;
                                            border-radius: 2px;
                                            -webkit-text-decoration: none;
                                            text-decoration: none;
                                            text-align: center;
                                            -webkit-user-select: none;
                                            -moz-user-select: none;
                                            -ms-user-select: none;
                                            user-select: none;
                                            cursor: pointer;
                                            min-width: 80px;
                                            -webkit-transition: color .2s ease, background-color .2s ease, border-color .2s ease;
                                            transition: color .2s ease, background-color .2s ease, border-color .2s ease;
                                            min-height: 40px;
                                            line-height: 32px;
                                            color: #ffffff;
                                            background-color: #0055D9;
                                            width: 220px;
                                            margin-left: 12px;
                                        }

                                        .css-1xmx2ze:focus {
                                            outline: none;
                                        }

                                        .css-1xmx2ze:disabled {
                                            opacity: 0.25;
                                            cursor: not-allowed;
                                        }

                                        .css-1xmx2ze:hover {
                                            background-color: #0046B2;
                                        }

                                        .css-1xmx2ze:active {
                                            background-color: #00327F;
                                        }

                                        .css-1xmx2ze:focus {
                                            border-color: #80B2FF;
                                        }

                                        .css-1xmx2ze:disabled:hover {
                                            background-color: #0055D9;
                                        }
                                    </style><button type="button" class="css-1xmx2ze ezfki8j0">
                                        التسجيل في الملتقي
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style data-emotion="css dy1y6u">
                        .css-dy1y6u {
                            position: relative;
                            background: #ffffff;
                            margin-bottom: 16px;
                            width: 100%;
                            padding: 16px;
                            border: 0px solid #D9DDE4;
                            border-radius: 4px;
                        }

                        @media screen and (min-width: 992px) {
                            .css-dy1y6u {
                                padding: 24px;
                            }
                        }
                    </style>
                    <section class="css-dy1y6u">
                        <style data-emotion="css bjn8wh">
                            .css-bjn8wh {
                                position: relative;
                            }
                        </style>
                        <div class="css-bjn8wh">
                            <a>
                                <style data-emotion="css jb4x6y">
                                    .css-jb4x6y {
                                        max-height: 80px;
                                        margin-bottom: 16px;
                                        max-width: 120px;
                                    }

                                    @media screen and (min-width: 992px) {
                                        .css-jb4x6y {
                                            float: left;
                                            margin: 0;
                                        }
                                    }
                                </style>
                            </a>
                            <a href="#">
                                <img src="{{ asset('compoany/' . $company[0]->img) }}" alt="Logo"
                                    class="css-jb4x6y"></a>

                            <style data-emotion="css f9uh36">
                                .css-f9uh36 {
                                    font-size: 24px;
                                    font-weight: 600;
                                    font-style: normal;
                                    letter-spacing: -0.6px;
                                    line-height: 34px;
                                    color: #001433;
                                    margin-bottom: 4px;
                                    word-break: break-word;
                                    color: hsl(177, 82%, 27%);
                                    font-weight: 800;
                                }

                                @media screen and (min-width: 992px) {
                                    .css-f9uh36 {
                                        font-size: 28px;
                                        font-weight: 600;
                                        font-style: normal;
                                        letter-spacing: -0.7px;
                                        line-height: 40px;
                                    }
                                }
                            </style>
                            <h1 class="css-f9uh36" style="    font-size: 24px !important;">{{ $company[0]->name }}</h1>

                            <style data-emotion="css 11rcwxl">
                                .css-11rcwxl {
                                    margin-bottom: 4px;
                                }
                            </style>
                            <strong class="css-9geu3q">
                                <div class="css-9iujih"> </div>
                                {{ $company[0]->place }}
                            </strong>
                            <style data-emotion="css 182mrdn">
                                .css-182mrdn {
                                    display: block;
                                    color: #4D6182;
                                    margin-bottom: 16px;
                                    font-size: 13px;
                                    font-weight: 400;
                                    font-style: normal;
                                    letter-spacing: -0.3px;
                                    line-height: 20px;
                                }
                            </style><span class="css-182mrdn">
                                {{ $company[0]->work }}
                            </span>
                            <style data-emotion="css 104dl8g">
                                .css-104dl8g {
                                    margin-top: 16px;
                                    display: -webkit-box;
                                    display: -webkit-flex;
                                    display: -ms-flexbox;
                                    display: flex;
                                    color: #4D6182;
                                    -webkit-box-flex-flow: column;
                                    -webkit-flex-flow: column;
                                    -ms-flex-flow: column;
                                    flex-flow: column;
                                    border-top: 1px solid #EBEDF0;
                                    padding-top: 16px;
                                }

                                @media screen and (min-width: 992px) {
                                    .css-104dl8g {
                                        padding-top: 0;
                                        border: none;
                                        -webkit-box-flex-flow: row;
                                        -webkit-flex-flow: row;
                                        -ms-flex-flow: row;
                                        flex-flow: row;
                                        -webkit-align-items: center;
                                        -webkit-box-align: center;
                                        -ms-flex-align: center;
                                        align-items: center;
                                    }
                                }
                            </style>
                            <div class="css-104dl8g"
                                style="display: flex;
                            justify-content: space-between;">
                                <style data-emotion="css 1wb134k">
                                    .css-1wb134k {
                                        display: -webkit-box;
                                        display: -webkit-flex;
                                        display: -ms-flexbox;
                                        display: flex;
                                        -webkit-align-items: center;
                                        -webkit-box-align: center;
                                        -ms-flex-align: center;
                                        align-items: center;
                                        margin-right: 4px;
                                    }

                                    @media screen and (max-width: 991px) {
                                        .css-1wb134k {
                                            margin-bottom: 8px;
                                        }
                                    }
                                </style>
                                <div class="css-1wb134k">
                                    <style data-emotion="css u1gwks">
                                        .css-u1gwks {
                                            font-size: 18px;
                                            font-weight: 600;
                                            font-style: normal;
                                            letter-spacing: -0.45px;
                                            line-height: 27px;
                                            margin-right: 8px;
                                        }

                                        @media screen and (min-width: 992px) {
                                            .css-u1gwks {
                                                font-size: 28px;
                                                font-weight: 600;
                                                font-style: normal;
                                                letter-spacing: -0.7px;
                                                line-height: 40px;
                                            }
                                        }
                                    </style><strong class="css-u1gwks">{{ $company[0]->numberJoin }}</strong>



                                    <style data-emotion="css ixb653">
                                        .css-ixb653 {
                                            font-size: 12px;
                                            font-weight: 400;
                                            font-style: normal;
                                            letter-spacing: -0.27px;
                                            line-height: 19px;
                                        }

                                        @media screen and (min-width: 992px) {
                                            .css-ixb653 {
                                                font-size: 13px;
                                                font-weight: 400;
                                                font-style: normal;
                                                letter-spacing: -0.3px;
                                                line-height: 20px;
                                            }
                                        }
                                    </style>
                                    <span class="css-ixb653">
                                        <style data-emotion="css 4zleql">
                                            .css-4zleql {
                                                display: block;
                                            }
                                        </style>

                                        <strong class="css-u1gwks">
                                            عدد المتقدمين

                                            حتي الان
                                        </strong>
                                        <br>
                                        <strong>

                                            والمتبقي حتي الان
                                            {{ $company[0]->numberAvailiable - $company[0]->numberJoin }}
                                        </strong>

                                    </span>

                                </div>
                                <div>





                                    <img src={{ asset('img/qrCode/' . $company[0]->id . '.png') }}>


                                </div>

                                <style data-emotion="css 1e3unnb">
                                    .css-1e3unnb {
                                        display: -webkit-box;
                                        display: -webkit-flex;
                                        display: -ms-flexbox;
                                        display: flex;
                                        -webkit-box-pack: center;
                                        -ms-flex-pack: center;
                                        -webkit-justify-content: center;
                                        justify-content: center;
                                        margin: 0 auto;
                                        width: 100%;
                                    }

                                    @media screen and (min-width: 992px) {
                                        .css-1e3unnb {
                                            width: 316px;
                                            margin: initial;
                                        }
                                    }

                                    @media screen and (max-width: 400px) {
                                        .css-1e3unnb {
                                            width: 288px;
                                        }
                                    }
                                </style>

                            </div>
                            <style data-emotion="css 1ur9mvu">
                                .css-1ur9mvu {
                                    margin-top: 16px;
                                    padding-top: 16px;
                                    border-top: 1px solid #EBEDF0;
                                }

                                @media screen and (min-width: 992px) {
                                    .css-1ur9mvu {
                                        display: -webkit-box;
                                        display: -webkit-flex;
                                        display: -ms-flexbox;
                                        display: flex;
                                        -webkit-align-items: center;
                                        -webkit-box-align: center;
                                        -ms-flex-align: center;
                                        align-items: center;
                                    }
                                }
                            </style>

                            <div class="css-1ur9mvu">
                                <style data-emotion="css 10ugwza">
                                    .css-10ugwza {
                                        width: 200px;
                                        margin-right: 12px;
                                    }

                                    @media screen and (max-width: 991px) {
                                        .css-10ugwza {
                                            width: 100%;
                                        }
                                    }
                                </style>
                                <style data-emotion="css 1m0yk35">
                                    .css-1m0yk35 {
                                        display: -webkit-inline-box;
                                        display: -webkit-inline-flex;
                                        display: -ms-inline-flexbox;
                                        display: inline-flex;
                                        -webkit-box-pack: center;
                                        -ms-flex-pack: center;
                                        -webkit-justify-content: center;
                                        justify-content: center;
                                        -webkit-align-items: center;
                                        -webkit-box-align: center;
                                        -ms-flex-align: center;
                                        align-items: center;
                                        font-size: 15px;
                                        padding: 0 12px;
                                        border: 1px solid transparent;
                                        border-radius: 2px;
                                        -webkit-text-decoration: none;
                                        text-decoration: none;
                                        text-align: center;
                                        -webkit-user-select: none;
                                        -moz-user-select: none;
                                        -ms-user-select: none;
                                        user-select: none;
                                        cursor: pointer;
                                        min-width: 80px;
                                        -webkit-transition: color .2s ease, background-color .2s ease, border-color .2s ease;
                                        transition: color .2s ease, background-color .2s ease, border-color .2s ease;
                                        min-height: 40px;
                                        line-height: 32px;
                                        color: #ffffff;
                                        background-color: #0055D9;
                                        width: 200px;
                                        margin-right: 12px;
                                    }

                                    .css-1m0yk35:focus {
                                        outline: none;
                                    }

                                    .css-1m0yk35:disabled {
                                        opacity: 0.25;
                                        cursor: not-allowed;
                                    }

                                    .css-1m0yk35:hover {
                                        background-color: #0046B2;
                                    }

                                    .css-1m0yk35:active {
                                        background-color: #00327F;
                                    }

                                    .css-1m0yk35:focus {
                                        border-color: #80B2FF;
                                    }

                                    .css-1m0yk35:disabled:hover {
                                        background-color: #0055D9;
                                    }

                                    @media screen and (max-width: 991px) {
                                        .css-1m0yk35 {
                                            width: 100%;
                                        }
                                    }
                                </style>




                                <form method="post" action="{{ route('get_company_update') }}">
                                    @csrf
                                    @if (Auth::user())
                                        <input type="hidden" name="auth_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="status" value="{{ Auth::user()->status }}">
                                    @endif
                                    <input type="hidden" name="company_id" value="{{ $company[0]->id }}">
                                    @if (Auth::user())
                                        @if (!isset($User_companys[0]->company_id))
                                            @if ($company[0]->numberAvailiable != $company[0]->numberJoin)
                                                <button type="submit" id="hiid" class="css-1m0yk35 ezfki8j0"
                                                    style="background: #0c7d78;">
                                                    التسجيل في الملتقي

                                                </button>
                                            @elseif ($company[0]->numberJoin == $company[0]->numberAvailiable)
                                                <h2 style="font-size: 23px !important;">
                                                    تم اكتمال العدد او لم يبدا التسجيل بعد
                                                </h2>
                                            @endif
                                        @else
                                            <button type="button" class="btn"
                                                style="
                                                color: hsl(177, 82%, 27%);background: white;font-weight: bold;

                                            ">
                                                تم التسجيل بنجاح
                                            </button>


                                            <button class="btn btn-danger"
                                                onclick="event.preventDefault();document.getElementById('asd').submit();">هل
                                                تود الحذف</button>
                                        @endif
                                    @else
                                        <button type="button"
                                            style="
                                            color: hsl(177, 82%, 27%);background: white;font-weight: bold;}
                                        ">
                                            <a href={{ route('login') }} class="btn"
                                                style="
                                            color: hsl(177, 82%, 27%);background: white;font-weight: bold; pad">
                                                التسجيل</a>
                                        </button>
                                    @endif
                                </form>

                                <button type="button" style="color: hsl(177, 82%, 27%); background: white; font-weight: bold;">
                                    <a href="mailto:{{ $company[0]->User->email }}" class="btn" style="color: hsl(177, 82%, 27%); background: white; font-weight: bold; text-decoration: none;">
                                        قم بارسال ايميل
                                    </a>
                                </button>
+                                


                                {{ $company[0]->email }}

                                @if (Auth::user())
                                    <form action="{{ route('get_company_delete') }}" method="post" id="asd">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="company_id" value="{{ $company[0]->id }}">
                                    </form>
                                @endif


                                <style data-emotion="css 15mwhtj">
                                    .css-15mwhtj {
                                        margin-right: 8px;
                                    }

                                    @media screen and (max-width: 991px) {
                                        .css-15mwhtj {
                                            display: none;
                                        }
                                    }
                                </style>

                                <style data-emotion="css 1iwizm">
                                    .css-1iwizm {
                                        display: none;
                                    }

                                    @media screen and (min-width: 992px) {
                                        .css-1iwizm {
                                            margin-left: auto;
                                            display: -webkit-box;
                                            display: -webkit-flex;
                                            display: -ms-flexbox;
                                            display: flex;
                                            -webkit-box-flex-flow: column;
                                            -webkit-flex-flow: column;
                                            -ms-flex-flow: column;
                                            flex-flow: column;
                                            -webkit-align-items: flex-end;
                                            -webkit-box-align: flex-end;
                                            -ms-flex-align: flex-end;
                                            align-items: flex-end;
                                        }
                                    }
                                </style>

                                <div class="css-1iwizm"></div>
                            </div>
                            <style data-emotion="css 13bhxew">
                                .css-13bhxew {
                                    position: absolute;
                                    top: 0;
                                    right: 0;
                                    display: -webkit-box;
                                    display: -webkit-flex;
                                    display: -ms-flexbox;
                                    display: flex;
                                    -webkit-box-pack: end;
                                    -ms-flex-pack: end;
                                    -webkit-justify-content: flex-end;
                                    justify-content: flex-end;
                                    width: -webkit-fit-content;
                                    width: -moz-fit-content;
                                    width: fit-content;
                                }

                                @media screen and (min-width: 992px) {
                                    .css-13bhxew {
                                        display: none;
                                    }
                                }
                            </style>

                        </div>
                    </section>
                    <style data-emotion="css 3kx5e2">
                        .css-3kx5e2 {
                            background: #ffffff;
                            margin-bottom: 16px;
                            width: 100%;
                            border: 1px solid #D9DDE4;
                            border-radius: 4px;
                            padding: 12px 12px 4px;
                            word-break: break-all;
                        }

                        @media screen and (min-width: 992px) {
                            .css-3kx5e2 {
                                padding: 24px 24px 4px;
                            }
                        }
                    </style>

                    <style data-emotion="css ghicub">
                        .css-ghicub {
                            margin-bottom: 16px;
                            width: 100%;
                            background: #ffffff;
                            border: 0px solid #D9DDE4;
                            padding: 16px 12px;
                        }

                        @media screen and (min-width: 992px) {
                            .css-ghicub {
                                padding: 32px;
                            }
                        }
                    </style>
                    <section class="css-ghicub">
                        <style data-emotion="css fwj1k5">
                            .css-fwj1k5 {
                                color: #001433;
                                margin-bottom: 12px;
                                font-size: 16px;
                                font-weight: 700;
                                font-style: normal;
                                letter-spacing: -0.4px;
                                line-height: 24px;
                            }
                        </style>
                        <h2 class="css-fwj1k5">
                            التعريف بالشركة
                        </h2>
                        <style data-emotion="css 1uobp1k">
                            .css-1uobp1k {
                                font-size: 14px;
                                font-weight: 400;
                                font-style: normal;
                                letter-spacing: -0.35px;
                                line-height: 22px;
                                color: #001433;
                                word-break: break-word;
                                color: hsl(177, 82%, 27%);
                            }

                            .css-1uobp1k p {
                                margin-top: 12px;
                                margin-bottom: 12px;
                            }

                            .css-1uobp1k ul,
                            .css-1uobp1k ol {
                                list-style-type: disc;
                                padding-left: 18px;
                            }

                            @media screen and (max-width: 991px) {
                                .css-1uobp1k {
                                    padding: 0 12px;
                                }
                            }
                        </style>
                        <div class="css-1uobp1k">
                            {{ $company[0]->brief }}
                        </div>
                    </section>
                    <section class="css-ghicub" style="margin-bottom: 14%;">
                        <h2 class="css-fwj1k5">
                            الوظائف المتاحة
                        </h2>
                        <style data-emotion="css 1t5f0fr">
                            .css-1t5f0fr {
                                font-size: 14px;
                                font-weight: 400;
                                font-style: normal;
                                letter-spacing: -0.35px;
                                line-height: 22px;
                                color: #001433;
                                word-break: break-word;
                            }

                            .css-1t5f0fr p {
                                margin-top: 12px;
                                margin-bottom: 12px;
                            }

                            .css-1t5f0fr ul,
                            .css-1t5f0fr ol {
                                list-style-type: disc;
                                padding-left: 18px;
                            }

                            @media screen and (max-width: 991px) {
                                .css-1t5f0fr {
                                    padding: 0 12px;

                                }
                            }
                        </style>
                        <div class="css-1t5f0fr">
                            @php
                                echo nl2br($company[0]->AvailabilityWork);
                            @endphp
                        </div>
                    </section>
                    <style data-emotion="css 1ytqpk1">
                        .css-1ytqpk1 {
                            background: #ffffff;
                            margin-bottom: 16px;
                            width: 100%;
                            border: 1px solid #D9DDE4;
                            border-radius: 0 4px 4px 0;
                            padding: 12px 16px 0;
                            border-left: 4px solid #0055D9;
                        }

                        @media screen and (min-width: 992px) {
                            .css-1ytqpk1 {
                                padding: 32px 32px 8px;
                                border-left-width: 3px;
                            }
                        }
                    </style>

        </div>
    </div>
    @include('include.footer')
    <script></script>
</body>



</html>
