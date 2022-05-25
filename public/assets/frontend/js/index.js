



$(document).ready(function(){
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
 

//Product Filtering



//shorting Product
 $("#sort").on('change',function(){
//   alert('sort')
  this.form.submit();
 });





 $(".owlcarouselMaster1").owlCarousel({
  loop: true,
  margin: 10,

  autoplay: true,
  responsiveClass: true,

  autoplayHoverPause: true,
  responsive: {
      0: {
          items: 1,
          nav: true
      },
      100: {
          items: 1,
          nav: true
      },
      200: {
          items: 1,
          nav: true
      },


      600: {
          items: 2,
          nav: false
      },
      900: {
          items: 2,
          nav: false
      },
      1000: {
          items: 2,
          nav: false
      },
      1600: {
          items: 2,
          nav: false
      }
  }
});
$('.owl-carousel1').owlCarousel({
  loop: true,
  margin: 10,

  responsiveClass: true,
  responsive: {
      0: {
          items: 1,
          nav: true

      },
      100: {
          items: 1,
          nav: true
      },
      200: {
          items: 1,
          nav: true
      },


      600: {
          items: 2,
          nav: false

      },
      1000: {
          items: 2,
          nav: false,
          loop: false
      },
      1600: {
          items: 2,
          nav: false
      }
  }
});

$(".owlcarouselMaster").owlCarousel({
  loop: true,
  margin: 10,

  autoplay: true,
  responsiveClass: true,

  autoplayHoverPause: true,
  responsive: {
      0: {
          items: 1,
          nav: true
      },
      100: {
          items: 1,
          nav: true
      },
      200: {
          items: 1,
          nav: true
      },


      600: {
          items: 3,
          nav: false
      },
      900: {
          items: 5,
          nav: false
      },
      1000: {
          items: 5,
          nav: false
      },
      1600: {
          items: 6,
          nav: false
      }
  }
});





$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,

  responsiveClass: true,
  responsive: {
      0: {
          items: 1,
          nav: true

      },
      100: {
          items: 1,
          nav: true
      },
      200: {
          items: 1,
          nav: true
      },


      600: {
          items: 2,
          nav: false

      },
      1000: {
          items: 2,
          nav: false,
          loop: false
      },
      1600: {
          items: 2,
          nav: false
      }
  }
});

});


function selectPaymentType(){
  if ($('#Bkash').is(':checked') || $('#Nagad').is(':checked') || $('#Rocket').is(':checked') ) {
    // alert("checked");
  }else {
    alert("Please Select Payment Method");
    return false;
  }
  
  }

  function selectShippingType(){
    if ($('#flat').is(':checked') || $('#express').is(':checked') ) {
      // alert("checked");
    }else {
      alert("Please Select Delivery Method");
      return false;
    }
    
    }

  
  const site_url = "http://localhost/techshop/public/";

  $(document).ready(function(){
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#current_pwd").click(function(){
      var current_pwd = $(this).val();
      $.ajax({
        type:'get',
        url: 'check-user-pwd',
        data:{current_pwd:current_pwd},
        success:function(resp){
          if (resp=="false") {
            $("#chkPwd").html("<font color='red'>Current Password is incorrect</font>")
          }else if(resp=="true"){
              $("#chkPwd").html("<font color='green'>Current Password is correct</font>")
          }
        },error:function(){
          alert("faild");
        }
      });
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
        window.location.href = site_url + "user/delete-" + record + "/" + recordid;

      }
    });

  });



  
  $(document).ready(function(){
    const site_url= "http://localhost/project1/";
    $('#showSignupForm').click(function(){
      $("#login-form-box").hide();
      $("#register-form-box").show();
    });
  
  
    $('#showSignInForm').click(function(){
      $("#register-form-box").hide();
      $("#login-form-box").show();
  
    });
  
  
  $('#showForgottPasswordForm').click(function(){
      $("#login-form-box").hide();
      $("#forgotten-form-box").show();
    });
  
  
    $('#showSignForm').click(function(){
      $("#forgotten-form-box").hide();
      $("#login-form-box").show();
  
    });
  
    $('#registerUser').click(function(e){
      if ($("#register-form")[0].checkValidity()) {
        e.preventDefault();
      $("#registerUser").val("Loading...").attr('disabled',true);
      if ($("#name").val() ==='') {
        $("#name").addClass("is-invalid");
        // $("#name").removeClass("is-valid");
  
      }else{
        $("#name").removeClass("is-invalid");
        // $("#name").addClass("is-valid");
  
  
      }
  
        if ($("#r_email").val() ==='') {
        $("#r_email").addClass("is-invalid");
        // $("#r_email").removeClass("is-valid");
      }else{
        $("#r_email").removeClass("is-invalid");
        // $("#r_email").addClass("is-valid");
  
      }
  
  
        if ($("#r-password").val() ==='') {
        $("#r-password").addClass("is-invalid");
        // $("#r-password").removeClass("is-valid");
  
  
      }else{
        $("#r-password").removeClass("is-invalid");
        // $("#r-password").addClass("is-valid");
  
  
      }
  
        if ($("#r-password").val() !== $("#c_password").val()) {
          // $("#c_password").removeClass("is-valid");
        $("#c_password").addClass("is-invalid");
      }else{
        $("#c_password").removeClass("is-invalid");
        // $("#c_password").addClass("is-valid");
  
      }
      if ($("#r-password").val() === $("#c_password").val()) {
        if ($('#name').val !=='' &&$('#c_password').val() !=='') {
          $.ajax({
            url: site_url+ "admin/action.php",
            method: 'post',
            data: $('#register-form').serialize() + '&action=register',
            success:function(response){
              if (response === 'Ok'){
                window.location = 'index.php';
              }else {
                $('#registerError').html(response);
              }
  
  
            }
          })
        }
  
      }
  
        $("#registerUser").val("Register").attr('disabled',false);
  
       }
    });
  
    $('#loginBtn').click(function(e){
      if ($('#login-form')[0].checkValidity()){
        e.preventDefault();
        $("#loginBtn").val("loading...").attr("disabled",true);
  
              $.ajax({
                  url: site_url+ "admin/action.php",
                  method: 'post',
                  data: $('#login-form').serialize() + '&action=login',
                  success:function(response){
                      $("#loginBtn").val("Sig In").attr("disabled",false);
                      if (response === 'Ok'){
                          window.location = 'index.php';
                      }else {
                          $('#loginError').html(response);
                      }
  
  
                  }
              })
      }
    });
  
  });


  $(document).on('click', '.toggle-password', function() {

    $(this).toggleClass("fa-eye fa-eye-slash");

    var input = $("#pass_log_id");
    input.attr('type') === 'password' ? input.attr('type', 'text') : input.attr('type', 'password')
});

  
  $("body").on('click', '.toggle-password', function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $("#pass_reg_id");
  
    if (input.attr("type") === "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }

});

