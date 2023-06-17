<?php 


    $header = "AD sing Shop";
    $img = $_POST['img'];
    $Nub = $_POST['Nub'];
    $Time = $_POST['Time'];
    $name = $_POST['name'];
    $TP = $_POST['TP'];

    $message = $header.
                "\n". "สลีป: " . $img .
                "\n". "เลขอ้างอิง: " . $Nub .
                "\n". "เวลาโอน: " . $Time .
                "\n". "ชื่อผู้ใช้: " . $name .
                "\n". "ลายละเอียด: " . $TP;

    if (isset($_POST["submit"])) {
        if ( $img <> "" || $Nub <> "" ||  $Time <> "" ||  $name <> "" ||  $TP <> "" ) {
            sendlinemesg();
            header('Content-Type: text/html; charset=utf8');
            $res = notify_message($message);
            echo "<script>alert('สำเร็จ');</script>";
            header("location: index.php");
        } else {
            echo "<script>alert('กรุณากรอกข้อมูลให้ครบถ้วน');</script>";
            header("location: index.php");
        }
    }

    function sendlinemesg() {
		// LINE LINE_API https://notify-api.line.me/api/notify
		// LINE TOKEN mhIYaeEr9u3YUfSH1u7h9a9GlIx3Ry6TlHtfVxn1bEu แนะนำให้ใช้ของตัวเองนะครับเพราะของผมยกเลิกแล้วไม่สามารถใช้ได้
        define('LINE_API',"https://notify-api.line.me/api/notify");
        define('LINE_TOKEN',"eXS5DjGK55dLbXPBWarfbjIzCHrkfKujdNDQJTSHXHy");

        function notify_message($message) {
            $queryData = array('message' => $message);
            $queryData = http_build_query($queryData,'','&');
            $headerOptions = array(
                'http' => array(
                    'method' => 'POST',
                    'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                                ."Authorization: Bearer ".LINE_TOKEN."\r\n"
                                ."Content-Length: ".strlen($queryData)."\r\n",
                    'content' => $queryData
                )
            );
            $context = stream_context_create($headerOptions);
            $result = file_get_contents(LINE_API, FALSE, $context);
            $res = json_decode($result);
            return $res;
        }
    }


?>