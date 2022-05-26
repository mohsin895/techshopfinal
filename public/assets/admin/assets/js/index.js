
const site_url = "https://roboticsabcshop.autovisabooking.xyz/";


$('body').on('change', '#orderNitificationStatus', function () {
 

  var id = $(this).attr('data-id');
  if (this.checked) {
    var status = '1';
  } else {
    status = '0';
  }
  $('.loader__').show();
  $.ajax({
    url: site_url + "orderNotification/update-status/" + id + '/' + status,
    method: 'get',
    success: function (result) {
      alertify.set('notifier', 'position', 'top-right');
      alertify.success('Status Update Successfully ');
      $('.loader__').hide();
    }
  });
  
  });

$('body').on('change', '#GiftcardStatus', function () {

var id = $(this).attr('data-id');
if (this.checked) {
  var status = '1';
} else {
  status = '0';
}
$('.loader__').show();
$.ajax({
  url: "giftcard/update-status/" + id + '/' + status,
  method: 'get',
  success: function (result) {
    alertify.set('notifier', 'position', 'top-right');
    alertify.success('Status Update Successfully ');
    $('.loader__').hide();
  }
});

});

$('body').on('change', '#blogcategoryStatus', function () {

  var id = $(this).attr('data-id');
  if (this.checked) {
    var status = '1';
  } else {
    status = '0';
  }
  $('.loader__').show();
  $.ajax({
    url: "blogcategory/update-status/" + id + '/' + status,
    method: 'get',
    success: function (result) {
      alertify.set('notifier', 'position', 'top-right');
      alertify.success('Status Update Successfully ');
      $('.loader__').hide();
    }
  });
  
  });

$('body').on('change', '#CategoryStatus', function () {

  var id = $(this).attr('data-id');
  if (this.checked) {
    var status = '1';
  } else {
    status = '0';
  }
  $('.loader__').show();
  $.ajax({
    url: "category/update-status/" + id + '/' + status,
    method: 'get',
    success: function (result) {
      alertify.set('notifier', 'position', 'top-right');
      alertify.success('Status Update Successfully ');
      $('.loader__').hide();
    }
  });
  
  });

//price update
$('body').on('change', '.buying_price', function () {

  var id = $(this).attr('data-id');
    var p = $(this).val();
  
  $('.loader__').show();
  $.ajax({
    url: "product/updateBuyingPrice/" + id + '/' + p,
    method: 'get',
    success: function (result) {
      alertify.set('notifier', 'position', 'top-right');
      alertify.success('Status Update Successfully ');
      $('.loader__').hide();
    }
  });
  
  });

  $('body').on('change', '.price', function () {

    var id = $(this).attr('data-id');
      var p = $(this).val();
    
    $('.loader__').show();
    $.ajax({
      url: "product/updateSellingPrice/" + id + '/' + p,
      method: 'get',
      success: function (result) {
        alertify.set('notifier', 'position', 'top-right');
        alertify.success('Status Update Successfully ');
        $('.loader__').hide();
      }
    });
    
    });

    $('body').on('change', '.quantity', function () {

      var id = $(this).attr('data-id');
      var p = $(this).val();
      
      
      $('.loader__').show();
      $.ajax({
        url: "product/updateQuantity/" + id + '/' + p,
        method: 'get',
        success: function (result) {
         
          alertify.set('notifier', 'position', 'top-right');
          alertify.success('quantity Update Successfully ');
          $('.loader__').hide();
        }
      });


      
      });

      $('body').on('change', '.quantitylow', function () {

        var id = $(this).attr('data-id');
        var p = $(this).val();
        
        
        $('.loader__').show();
        $.ajax({
          url: "low/updateQuantity/" + id + '/' + p,
          method: 'get',
          success: function (result) {
           
            alertify.set('notifier', 'position', 'top-right');
            alertify.success('quantity Update Successfully ');
            $('.loader__').hide();
          }
        });
  
  
        
        });

        $('body').on('change', '.quantityout', function () {

          var id = $(this).attr('data-id');
          var p = $(this).val();
          
          
          $('.loader__').show();
          $.ajax({
            url: "out/updateQuantity/" + id + '/' + p,
            method: 'get',
            success: function (result) {
             
              alertify.set('notifier', 'position', 'top-right');
              alertify.success('quantity Update Successfully ');
              $('.loader__').hide();
            }
          });
    
    
          
          });
  //price update end

  $(function () {
    var limitInput = function () {
        var value = parseInt(this.value, 10);
        var max = parseInt(this.max, 10);
        var min = parseInt(this.min, 10);

        if (value > max) {
            this.value = max;
        } else if (value < min) {
            this.value = min
        }
    };
    $("#numberBox").change(limitInput);
});

$(function () {
  var limitInputprice = function () {
      var value = parseInt(this.value, 10);
      var max = parseInt(this.max, 10);
      var min = parseInt(this.min, 10);

      if (value > max) {
          this.value = max;
      } else if (value < min) {
          this.value = min
      }
  };
  $("#priceBox").change(limitInputprice);
});

$('body').on('change', '#QuestionStatus', function () {

  var id = $(this).attr('data-id');
  if (this.checked) {
    var status = '1';
  } else {
    status = '0';
  }
  $('.loader__').show();
  $.ajax({
    url: "Userquestion/update-status/" + id + '/' + status,
    method: 'get',
    success: function (result) {
      alertify.set('notifier', 'position', 'top-right');
      alertify.success('Status Update Successfully ');
      $('.loader__').hide();
    }
  });
  
  });

$(document).on("click", ".confirmDelete", function () {
    var record = $(this).attr("record");
    var recordid = $(this).attr("recordid");
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
        window.location.href = site_url + "admin/delete-" + record + "/" + recordid;

      }
    });

  });


  $(document).ready(function () {
    $("#current_pwd").click(function () {
      var current_pwd = $("#current_pwd").val();
      $.ajax({
        type: 'get',
        url: site_url + 'admin/check-pwd',
        data: { current_pwd: current_pwd },
        success: function (resp) {
          if (resp == 'false') {
            $("#chkPwd").html("<font color='red'>Current password is incorrect</font>");
          } else if (resp == "true") {
            $("#chkPwd").html("<font color='green'>Current password is correct</font>");
          }
        }
  
      });
    });
  });



  (function($) {
    "use strict";




// FORGOT FORM ENDS

// USER REGISTER NOTIFICATION

$(document).ready(function(){
    setInterval(function(){
            $.ajax({
                    type: "GET",
                    url:$("#user-notf-count").data('href'),
                    success:function(data){
                        $("#user-notf-count").html(data);
                      }
              });
    }, 5000);
});

$(document).on('click','#notf_user',function(){
  $("#user-notf-count").html('0');
  $('#user-notf-show').load($("#user-notf-show").data('href'));
});

$(document).on('click','#user-notf-clear',function(){
  $(this).parent().parent().trigger('click');
  $.get($('#user-notf-clear').data('href'));
});

// USER REGISTER NOTIFICATION ENDS

// ORDER NOTIFICATION

$(document).ready(function(){
    setInterval(function(){
            $.ajax({
                    type: "GET",
                    url:$("#order-notf-count").data('href'),
                    success:function(data){
                        $("#order-notf-count").html(data);
                      }
              });
    }, 5000);
});

$(document).on('click','#notf_order',function(){
  $("#order-notf-count").html('0');
  $('#order-notf-show').load($("#order-notf-show").data('href'));
});
$(document).on('click','#order-notf-status',function(){
  $(this).parent().parent().trigger('click');
  $.get($('#order-notf-status').data('href'));
});


$(document).on('click','#order-notf-clear',function(){
  $(this).parent().parent().trigger('click');
  $.get($('#order-notf-clear').data('href'));
});

// ORDER NOTIFICATION ENDS
// Withdarw NOTIFICATION

$(document).ready(function(){
  setInterval(function(){
          $.ajax({
                  type: "GET",
                  url:$("#withdraw-notf-count").data('href'),
                  success:function(data){
                      $("#withdraw-notf-count").html(data);
                    }
            });
  }, 5000);
});

$(document).on('click','#notf_withdraw',function(){
$("#withdraw-notf-count").html('0');
$('#withdraw-notf-show').load($("#withdraw-notf-show").data('href'));
});

$(document).on('click','#withdraw-notf-clear',function(){
$(this).parent().parent().trigger('click');
$.get($('#withdraw-notf-clear').data('href'));
});

// Withdraw NOTIFICATION ENDS
// GiftcardOrder NOTIFICATION

$(document).ready(function(){
  setInterval(function(){
          $.ajax({
                  type: "GET",
                  url:$("#giftcard-notf-count").data('href'),
                  success:function(data){
                      $("#giftcard-notf-count").html(data);
                    }
            });
  }, 5000);
});

$(document).on('click','#notf_giftcard',function(){
$("#giftcard-notf-count").html('0');
$('#giftcard-notf-show').load($("#giftcard-notf-show").data('href'));
});

$(document).on('click','#giftcard-notf-clear',function(){
$(this).parent().parent().trigger('click');
$.get($('#giftcard-notf-clear').data('href'));
});

// GiftcardOrder NOTIFICATION ENDS

// PRODUCT NOTIFICATION

$(document).ready(function(){
    setInterval(function(){
            $.ajax({
                    type: "GET",
                    url:$("#product-notf-count").data('href'),
                    success:function(data){
                        $("#product-notf-count").html(data);
                      }
              });
    }, 5000);
});

$(document).on('click','#notf_product',function(){
  $("#product-notf-count").html('0');
  $('#product-notf-show').load($("#product-notf-show").data('href'));
});

$(document).on('click','#product-notf-clear',function(){
  $(this).parent().parent().trigger('click');
  $.get($('#product-notf-clear').data('href'));
});

// PRODUCT NOTIFICATION ENDS

// CONVERSATION NOTIFICATION

$(document).ready(function(){
    setInterval(function(){
            $.ajax({
                    type: "GET",
                    url:$("#conv-notf-count").data('href'),
                    success:function(data){
                        $("#conv-notf-count").html(data);
                      }
              });
    }, 5000);
});

$(document).on('click','#notf_conv',function(){
  $("#conv-notf-count").html('0');
  $('#conv-notf-show').load($("#conv-notf-show").data('href'));
});

$(document).on('click','#conv-notf-clear',function(){
  $(this).parent().parent().trigger('click');
  $.get($('#conv-notf-clear').data('href'));
});

// CONVERSATION NOTIFICATION ENDS










// **************************************  AJAX REQUESTS SECTION ENDS *****************************************


})(jQuery);

