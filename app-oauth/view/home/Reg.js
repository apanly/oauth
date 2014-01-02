;
var ops={
    init:function(){
        this.eventBind();
    },
    eventBind:function(){
        var that=this;
        $(".form-signin").submit(function(){
                var username= $.trim($("#username").val());
                var userpwd=$.trim($("#userpwd").val());
                var usernick= $.trim($("#usernick").val());
                var authimage= $.trim($("#authimage").val());
                var target=$("#tips");
                if(!that.isEmail(username)){
                    //target.attr("class","alert alert-success");
                    target.attr("class","alert alert-error");
                    $(target.find("strong").get(0)).html("用户名格式不对!!请填写邮箱");
                    target.show();
                    return false;
                }
                if(userpwd.length<6){
                    target.attr("class","alert alert-error");
                    $(target.find("strong").get(0)).html("密码至少6位!!");
                    target.show();
                    return false;
                }
                if(!usernick){
                    target.attr("class","alert alert-error");
                    $(target.find("strong").get(0)).html("名号很重要哦!!");
                    target.show();
                    return false;
                }
                if(!authimage){
                    target.attr("class","alert alert-error");
                    $(target.find("strong").get(0)).html("请输入验证码!!");
                    target.show();
                    return false;
                }
                if(authimage.length<4){
                    target.attr("class","alert alert-error");
                    $(target.find("strong").get(0)).html("验证码至少四位!!");
                    target.show();
                    return false;
                }
                return true;
        });
        $("#captcha").click(function(){
            $(".captcha-img").attr("src","/auth/image?rd="+new Date().getTime());
        });
    },
    isEmail:function(email) {
        if (email.search(/^([a-zA-Z0-9]+[_|_|.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|_|.]?)*[a-zA-Z0-9]+\.(?:com|cn|org|cc|co|net)$/) != -1){
            return true;
        }else{
            return false;
        }
    }
}
$(document).ready(function(){
    ops.init();
});