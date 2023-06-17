<?php 


    $header = "AD sing Shop ";
    $ID = $_POST['ID'];
    $NameShop = $_POST['NameShop'];
    $ที่อยู่ = $_POST['ที่อยู่'];
    $phone = $_POST['phone'];
    $Knp = $_POST['Knp'];
    $MN = $_POST['MN'];
    
    $message = $header.
                "\n". "ID สินค้า: " . $ID .
                "\n". "ชื่อลูกค้า: " . $NameShop .
                "\n". "ที่อยู่: " . $ที่อยู่ .
                "\n". "เบอร์โทรศัพท์: " . $phone .
                "\n". "ขนาดป้ายที่ลูกค้าต้องการ " . $Knp .
                "\n". "รายละเอียดเพิ่ม: " . $MN;

    if (isset($_POST["submit"])) {
        if ( $ID <> "" || $NameShop <> "" ||  $ที่อยู่ <> "" ||  $phone <> "" ||   $Knp <> "" || $MN <> "") {
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

