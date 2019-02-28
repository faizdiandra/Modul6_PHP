<head>
    <title>Hapus Cookie</title>
    </head>
    <body>
        <?php
        Setcookie('nama_cookie', 'nilai_cookie');
        if(isset($_COOKIE['nama_cookie'])){
            echo 'cookie di-set <br>';
            echo 'cookie dihapus';
        }
        else{
            echo 'unset';
        }?>
        </body>
