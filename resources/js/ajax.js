const modal_button = $('.modal_button');
jQuery(function($) {
$( '.modal_button' ).click(  function(){
const modal_name =  $('input[name="modal_name"]').val();
const modal_email =  $('input[name="modal_email"]').val();
const modal_message =  $('input[name="modal_message"]').val();

$.ajax({
    headers: {
    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
    type: 'POST',
    dataType: "json",
    url: '/post_mail',
    data: {
    'name' : modal_name,
    'email' : modal_email,
    'message' : modal_message
    }
})
    .done
    ( function( data ){
    //成功した時の処理
    $('#contact input').val('');
    $('#contact textarea').val('');

    $('#contact').empty();
    $('#contact').append('<div id="contact_success"><div id="success_box"><p class="main_message">送信完了しました。</p></div></div>');

    var text = ["お問合せありがとうございます。","確認として自動メールをお送りさせていただいております。","お問合せ内容につきましては、近日中にご返信させていただきます。"];
    for(i = 0; i<text.length; i++){
        $('#success_box').append('<p class="sub_message">'+text[i]+'</p>')
    }




    $('#modal_section').css('display','none')

    })
    .fail( function () {
//失敗した時の処理
    alert("メールの送信に失敗しました");
    })
return false;
});
});
