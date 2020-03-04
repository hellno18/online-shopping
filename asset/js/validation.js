//Validation JQuery
$(document).ready(function(){
  $("#checkoutForm").validate({
    // Specify validation rules
    rules: {
      name:"required",
      password:"required",
      email:{
        required:true,
        email:true,
      },
      address: "required",
      telephone:{
        required:true,
        digits:true,
      },
    },
    messages: {
      name:{
        required:"<p class='error'>姓名を入力してください</p>",
      },
      password:{
        required:"<p class='error'>パスワードを入力してください</p>",
      },
      email: {
        required:"<p class='error'>メールアドレスを入力してください</p>",
        email:"<p class='error'>メールアドレスを正しく入力してください</p>",
     },      
     address: {
        required:"<p class='error'>住所を入力してください</p>",
     },    
     telephone: {
      required: "<p class='error'>電話番号を入力してください</p>",
      digits:"<p class='error'>電話番号を正しく入力してください</p>",
     },     
    },
  });
});