<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 2 - Jquery Ajax </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<script language="javascript">
    function load_ajax(){
        $.ajax({
            url:"result.php",
            type:"post",
            dataType:"text",
            data: {

            },
            success:function(result)
            {
                $('#result').html(result);

            }
        });
    }
</script>
<p> AJAX = Asynchronous JavaScript and XML </p>
<p>Ajax được viết bằng ngôn ngữ Javascript nên nó chạy trên client, tức là mỗi máy (user) sẽ chạy độc lập không hoàn toàn ảnh hưởng lẫn nhau.</p>
<div id="result">
           load noi dung ajax o day!!! 
</div>
<input type="button" name="clickme" id="clickme" onclick="load_ajax()" value="Click Me"/>
</body>
</html>