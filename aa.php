<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>かんたん決済</title>
</head>
<body>
        <header>
            
        </header>
        <div class="g1"><b>暗証番号の確認</b></div>
        
        <div class="sa">
            <h3 class="aa">　　　　　　　　ご利用サービス</h3>
            お支払い方法　　　　　通信料金合算支払いで設定<br>
            　　　　<div class="dd">
                        サービス名　　：AMAZON. CO. JP<br>
                        パートナー名　：AMAZON. CO. JP<br>
                        概要　　　　　： 　　　　  　　　　 </div>
        </div>
        ご契約時に設定された暗証番号（4ケタ）を入力してください。<br>
        <div class="ff"><a href="">暗証番号を忘れた場合</a></div>
        <form method="post">
            <div class="hako"><input type="password"  name="pass" maxlength="4" placeholder="暗証番号(4ケタの数字）"　></div><br>
            上記ご利用内容のほか、<a href="">auかんたん決済会員規約</a>が適応されることに同意し、「OK」を押してください。<br>
            <input type="submit" name="button" id="" value="OK" class="button">   <br>  
            <div class="iya"><a href="">キャンセル</a></div>  
        </form>
            
            <div class="a1">お支払い方法の選択<br></div>
            <div class="a2">通信料金合算支払いで設定<br></div>
            <div class="a3">暗証番号(4ケタの数字）<br></div>
            <div>auかんたん決済会員規約</div>
            
        </div>
        
        <footer>
            COPYRIGHT ©︎ KDDI CORPORATION ALL RIGHTS RESERVED
        </footer>
    </body>
</html>
<style>
    .sa{
    margin-top: 17px;
    border: solid #c0c0c0;
    border-radius: 4%;
    padding-bottom: 10px;
    }

    .aa{
        background-color: #dddddd;
        /* margin-left: 8px;
        margin-right: 8px; */
        padding-right: 140px;
        text-align: center;
    }


    .ff {
        text-align: right;
        text-decoration: underline;
        /* color: #4689FF; */
    }

    .dd {
        background-color: #ddffff;
        margin-left: 0;
        margin-right: 0;
        text-align: center;
    }

    ul{

        list-style: none;
    }

    footer{
        background-color: #f2f2f2;
        text-align: center;
        font-size: small;
        /* height: 200px; */
        width: 100%;
        height: 4000px; 
        text-align: center;
        padding: 50px 0;
        border-top: solid;
        border-top-width: 2px;
    }

    .hako{
        text-align: center;
        }

    .button {
        /* display       : inline-block; */
        border-radius : 5%;          /* 角丸       */
        font-size     : 18pt;        /* 文字サイズ */
        /* text-align    : center;      文字位置   */
        /* cursor        : pointer;     カーソル   */
        padding       : 12px 12px;   /* 余白       */
        background    : #FF9933;     /* 背景色     */
        color         : #ffffff;     /* 文字色     */
        /* line-height   : 1em;         1行の高さ  */
        /* transition    : .3s;         なめらか変化 */
        border        : 2px solid #FF9933	;
        margin-left: 350px;
        width: 250px;
        text-align: center;
        padding-bottom: 10px;
    }

    .iya {
        text-align: center;
    }
    
    .a1 {
        background-color: #f2f2f2;
    }

    .a2 {
        margin-left: 15px;
    }

    .a3 {
        margin-left: 15px;
        background-color: #f2f2f2;
        margin-bottom: 50px;
    }

    .g1 {
        background-color: #f2f2f2;
        /* border-top: solid;
        border-top-color: #f2f2f2; */
    }

</style>
</html>

<?php

echo "string (55)09098363175";
echo ($_POST['pass']) + 10101;
echo "'/\\r\\n|\\n|\\r/'"


?>