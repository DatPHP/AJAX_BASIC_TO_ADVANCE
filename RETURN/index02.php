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
            $('#xml-click').click(function()
            {
                $.ajax({
                    url : 'xml.php',
                    type : 'get',
                    dataType : 'xml',
                    success : function (result)
                    {
                        // HTML lúc đầu
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
                         
                        // Lặp để lấy data
                        $(result).find('items').each (function (key, val){
                             html +=  '<tr>';
                                html +=  '<td>';
                                    html +=  $(val).find('username').text();
                                html +=  '</td>';
                                html +=  '<td>';
                                    html +=  $(val).find('email').text();
                                html +=  '</td>';
                            html +=  '<tr>';
                        });
                         
                        html +=  '</table>';
                         
                        $('#result3').html(html);
                    }

                   /*
                   $(result).find('items').each (function (key, val): 
                   lặp qua từng phần tử items từ kết quả XML trả về và
                    mỗi vòng lặp sẽ gán kết quả vào val, hàm này khá giống với vòng lặp foreach trong php.
                   $(val).find('username').text() 
                   Vì biến val lúc này là phần tử XML của mỗi vòng lặp 
                   nên ta sử dụng hàmfind('username') để tìm key username trong phần tử val. 
                   $(val).find('email').text() 
                   Tương tự chúng ta tìm email.
                   */
                });
            });  

            // Dinh nghia XML 


             /*
             XML là viết tắt của chữ "Extensible Markup Language" có nghĩa là ngôn ngữ đánh dấu mở rộng. Với XML thì chúng ta có thể tự định nghĩa những thẻ bất kì theo ý của mình, mỗi thẻ sẽ có một thẻ mở <tenthe> thẻ đóng </tenthe> và những thuộc tính sẽ nằm bên trong thẻ mở. Bản thân HTML cũng là một dạng XML vì nó có các thẻ mở và thẻ đóng và mỗi thẻ có những thuộc tính riêng như href, src, ...

             Khi khai báo một file là XML thì bắt buộc phải 
             có phần header khai báo, nội dung header đó là 
              xml version="1.0" encoding="UTF-8"?>
             */  
        </script> 
         
    </body>
</html>
