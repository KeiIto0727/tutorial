<?php
    require_once './Encode.php';
    $lnk = 'http://localhost/selfphp/Re_Prac/post1.php';
    if(empty($_POST['name'])){
        echo'
            <table>
            <tr>
            <td>名前を入力してください！</td>
            </tr>
            <tr>
            <td align="left"><a href="'.$lnk.'">戻る</a></td>
            </tr>
            </table>
        ';
    }elseif(empty($_POST['gender'])){
        echo'
            <table>
            <tr>
            <td>性別を選択してください！</td>
            </tr>
            <tr>
            <td align="left"><a href="'.$lnk.'">戻る</a></td>
            </tr>
            </table>
        ';
    }else{

        if($_POST['gender']=='男'){
            $gnd = 'くん';
        }else{
            $gnd = 'ちゃん';            
        }

        echo'
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8" />
                <title>送信結果</title>
            </head>
            <body>
                <div align="left">よう、<span style="color:red">'.enc($_POST['name']).'</span> '.$gnd.'</div>
            </body>
        </html>
        ';        
    }    
?>