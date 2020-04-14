<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Code for Toyama City 新型コロナ関連サイト</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="css/app.css" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container">
                <div class="container-fluid" style="margin-top:1rem">
                    <h2> 
                    富山県オープンデータ(新型コロナウィルス関連)変換データ提供サイト
                    </h2>
                </div>
                <div class="container-fluid" style="margin-top:1rem">
                    <h4>
                    このサイトでは、富山県オープンデータサイトに掲載されているオープンデータを、Code for Japanが作成・公開している「新型コロナウイルス感染症対策に関するオープンデータ項目定義書」に準拠した形式で変換したデータを提供しています。
                    </h4>
                </div>
                <div class="container-fluid" style="margin-top:1rem">
                    富山県のオープンデータについては、<a href="http://opendata.pref.toyama.jp/dataset?q=%E3%82%B3%E3%83%AD%E3%83%8A" target="_blank">こちら</a>をご覧ください。
                </div>
                <div class="container-fluid" style="margin-top:0.1rem">
                    新型コロナウイルス感染症対策に関するオープンデータ項目定義書については、<a href="https://www.code4japan.org/activity/stopcovid19#doc" target="_blank">こちら</a>をご覧ください。
                </div>
                <div style="margin-top:1rem">
                    <div class="container bg-primary" > 
                        <h3>
                            <a href={{url('/get_patients')}} style="color: #ffffff;">陽性患者属性情報</a>
                        </h3>
                    </div>
                    <div class="container-fluid" style="margin-top:1rem">
                        <h5>
                        <p>
                            上のリンクから陽性患者属性情報(新型コロナウイルス感染症対策に関するオープンデータ項目定義書準拠)ダウンロードが可能です。
                        </p>
                        <p>
                            【注意事項】
                        </p>
                        <p>
                            患者_属性については、現状では「入院中」のみ設定されています。このため、このサイトではデータを設定しておりません(退院済フラグに反映しています)。
                        </p>
                        <p>
                            富山県においては、入院中/退院済の情報は、属性としては提供される可能性は低いと考えられます。
                        </p>
                        <p>
                            市区町村名は、富山県オープンデータには「富山市」のみ設定されています。富山市は富山市保険所が対応しておりますが、それ以外は富山県の厚生センターが管轄しているためと思われます。
                        </p>
                        </h5>
                    </div>
                    <div class="container bg-warning" > 
                        <h3>
                            <a  style="color: #ffffff;">検査実施人数(工事中)</a>
                        </h3>
                    </div>
                    <div class="container bg-warning" > 
                        <h3>
                            <a style="color: #ffffff;">検査実施件数(工事中)</a>
                        </h3>
                    </div>
                    <div class="container bg-warning" > 
                        <h3>
                            <a style="color: #ffffff;">陰性確認数(工事中)</a>
                        </h3>
                    </div>
                    <div class="container bg-warning" > 
                        <h3>
                            <a style="color: #ffffff;">コールセンター相談件数(工事中)</a>
                        </h3>
                    </div>
                    <div class="container bg-warning" > 
                        <h3>
                            <a style="color: #ffffff;">GitHub</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
