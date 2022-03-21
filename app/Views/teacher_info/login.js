$(function(){
    $("form").submit(function(e){
        alert("d");
        var username = $(".account").val();
        var password = $(".password").val();
        
        if(username!='' && password!=''){	  
            var errormessage = "使用者名稱密碼匹配中……";
            $.ajax({
                data:{username:username,password:password},       //要傳送的資料
                type:"POST",           //傳送的方式
                url:"../teacher_info/view", //url地址
                error:function(msg){ //處理出錯的資訊
                    var errormessage="再試一次";
                    $(".loginerror").html(errormessage);
                },
                success:function(msg){  //處理正確時的資訊
                    //alert("success" + msg)
                    if(msg!=''){
                        var errormessage="登入成功";
                        $(".loginerror").html(errormessage);
                        
                        location.href = "http://localhost/"
                    }else{
                        var errormessage="使用者名稱或密碼錯誤";
                        $(".loginerror").html(errormessage);
                    }
                }
            });
            
        }else{
           var errormessage = "使用者名稱或密碼不能為空";
        }
        
        $(".loginerror").html(errormessage);	
        return false;
    });
  });

  function alertf(){
      alert("dd");
  }