$(document).ready(function(){
$('.select_streams').change(function(){
   var stream_id = $(this).val();
   $.ajax({
      url:"addnote.php",
      method = "post",
      data:{streamid:stream_id},
      sucess:function(data){
         $('.select_subjects').html(data);
      }
   })
})
  });