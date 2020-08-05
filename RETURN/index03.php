<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    </head>
    <body>
        <div id="result1">TEXT</div>
        <div id="result2">JSON</div>
        <div id="result3">XML</div>
        <br/>
        <input type="button" name="clickme" id="text-click" value="Get List By Text"/>
        <input type="button" name="clickme" id="json-click" value="Get List By Json"/>
        <input type="button" name="clickme" id="xml-click" value="Get List By XML"/>
        <script language="javascript">
            $('#json-click').click(function()
            {
                $.ajax({
                    url : 'json.php',
                    type : 'get',
                    dataType : 'json',
                    success : function (result){
                         
                        var html = '';
                        html += '<table border="1" cellspacing="0" cellpadding="10">';
                        html += '<tr>';
                           html += '<td>';
                                html += 'Username';
                                html += '</td>';
                                html += '<td>';
                                html += 'Email';
                           html += '</td>';
                        html += '<tr>';
                         
                        // Kết quả là một object json
                        // Nên ta sẽ loop result
                        $.each (result, function (key, item){
                            html +=  '<tr>';
                                html +=  '<td>';
                                    html +=  item['username'];
                                html +=  '</td>';
                                html +=  '<td>';
                                    html +=  item['email'];
                                html +=  '</td>';
                            html +=  '<tr>';
                        });
                         
                        html +=  '</table>';
                         
                        $('#result2').html(html);
                    }
                });
            });

/*
Cũng có một cách khác là sử dụng kết quả trả về là dạng text và
 đoạn text này là một chuỗi JSON, lúc này khi nhận kết quả ta 
 phải convert chuỗi JSON đó sang JSON Object bằng cách sử dụng hàm $.parseJSON() 
 trong jQuery.
*/
            /*
               hàm rất quen thuộc trong PHP, 
               đó là hàm json_encode và json_decode(tham khảo JSON trong PHP), 
               đây là hai hàm dùng để xử lý chuyển đổi định dạng dữ liệu trong PHP,
                nó có thể chuyển từ dạng chuỗi JSON sang Object Array
                 và từ Object Array sang chuỗi JSON nên ta sẽ áp dụng hai hàm này 
                 để chuyển đổi dữ liệu thành chuỗi JSON và trả về cho Ajax.




            */
        </script>
         
    </body>
</html>
