(()=>{var e=$(".floating_menu"),a=$(".nav_button"),n=$(".line1"),t=$(".line2"),l=$(".line3");a.click((function(){e.toggleClass("menu_active"),n.toggleClass("line1_active"),t.toggleClass("line2_active"),l.toggleClass("line3_active")}));var r=$("#modal_section");function c(e){$("#err_name").remove();var a=!0;return""==e&&($("#err_textarea").append('<p id="err_name" class="err_text">＊名前を入力してください。</p>'),a=!1),a}function i(e){$("#err_mail").remove();var a=!0;return""==e&&($("#err_textarea").append('<p id="err_mail" class="err_text" >＊メールアドレスを入力してください。</p>'),a=!1),a}function o(e){$("#err_message").remove();var a=!0;return""==e&&($("#err_textarea").append('<p id="err_message" class="err_text">＊メッセージ内容をを入力してください。</p>'),a=!1),a}$(".close_button").click((function(){r.css("display","none")})),$(".confirm_btn").click((function(){var e=!0,a=!0;$("#err_textarea").empty(),(e=c($("#contact_name").val()))||(a=e),(e=i($("#contact_mail").val()))||(a=e),(e=o($("#contact_message").val()))||(a=e),console.log(e),0!=a?function(){var e=$('input[name="username"]').val(),a=$('input[name="email"]').val(),n=$('textarea[name="message"]').val();$(".modal_name").text(e).val(e),$(".modal_email").text(a).val(a),$(".modal_message").text(n).val(n),r.css("display","block")}():alert("入力に問題があります")})),$((function(){$("#contact_name").bind("change blur",(function(){c($(this).val())}))})),$((function(){$("#contact_mail").bind("change blur",(function(){i($(this).val())}))})),$((function(){$("#contact_message").bind("change blur",(function(){o($(this).val())}))}));$("#box").click((function(){console.log(8),$("#box").text("9")}))})();