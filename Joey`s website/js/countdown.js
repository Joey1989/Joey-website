$('#say').keyup(function(){
 var comment_val=$('#say').val();
 if(80>=comment_val.length){
$('#count').html(80-comment_val.length+' letters left');
 }
 else
 $('#count').html("Input too long!!!");
});