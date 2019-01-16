<?php
    session_start();
    if(!isset($_SESSION['auth'])) {
        echo "<script>alert('로그인이 필요합니다.')</script>";
    }
    else {
        $dir = date("Y-m-d");
        if(!is_dir($dir)) {
            mkdir($dir);
            copy('assets/copy/index.php', $dir.'/index.php');
            copy('assets/copy/write.php', $dir.'/write.php');
            copy('assets/copy/memo.txt', $dir.'/memo.txt');
            echo "<script>alert('오늘의 메모가 생성되었습니다.')</script>"; 
        }
        else {
            echo "<script>alert('이미 오늘의 메모가 생성되었습니다.')</script>"; 
        }
    }
    echo "<script>document.location.href='/';</script>"; 
?>
