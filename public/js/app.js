/*
Template: POSDash - Responsive Bootstrap 4 Admin Dashboard Template
Author: iqonicthemes.in
Design and Developed by: iqonicthemes.in
NOTE: This file contains the styling for responsive Template.
*/

/*----------------------------------------------
Index Of Script
------------------------------------------------

:: Tooltip
:: Fixed Nav
:: Magnific Popup
:: Ripple Effect
:: Sidebar Widget
:: FullScreen
:: Page Loader
:: Counter
:: Progress Bar
:: Page Menu
:: Close  navbar Toggle
:: Mailbox
:: chatuser
:: chatuser main
:: Chat start
:: todo Page
:: user toggle
:: Data tables
:: Form Validation
:: Active Class for Pricing Table
:: Flatpicker
:: Scrollbar
:: checkout
:: Datatables
:: image-upload
:: video
:: Button
:: Pricing tab

------------------------------------------------
Index Of Script
----------------------------------------------*/

(function (jQuery) {
  "use strict";

  /*---------------------------------------------------------------------
        Tooltip
        -----------------------------------------------------------------------*/
  jQuery('[data-toggle="popover"]').popover();
  jQuery('[data-toggle="tooltip"]').tooltip();

  /*---------------------------------------------------------------------
        Fixed Nav
        -----------------------------------------------------------------------*/

  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 0) {
      $(".iq-top-navbar").addClass("fixed");
    } else {
      $(".iq-top-navbar").removeClass("fixed");
    }
  });

  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 0) {
      $(".white-bg-menu").addClass("sticky-menu");
    } else {
      $(".white-bg-menu").removeClass("sticky-menu");
    }
  });

  /*---------------------------------------------------------------------
        Magnific Popup
        -----------------------------------------------------------------------*/
  if (typeof $.fn.magnificPopup !== typeof undefined) {
    jQuery(".popup-gallery").magnificPopup({
      delegate: "a.popup-img",
      type: "image",
      tLoading: "Loading image #%curr%...",
      mainClass: "mfp-img-mobile",
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0, 1], // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function (item) {
          return item.el.attr("title") + "<small>by Marsel Van Oosten</small>";
        },
      },
    });
    jQuery(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
      disableOn: 700,
      type: "iframe",
      mainClass: "mfp-fade",
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false,
    });
  }

  /*---------------------------------------------------------------------
        Ripple Effect
        -----------------------------------------------------------------------*/
  jQuery(document).on("click", ".iq-waves-effect", function (e) {
    // Remove any old one
    jQuery(".ripple").remove();
    // Setup
    let posX = jQuery(this).offset().left,
      posY = jQuery(this).offset().top,
      buttonWidth = jQuery(this).width(),
      buttonHeight = jQuery(this).height();

    // Add the element
    jQuery(this).prepend("<span class='ripple'></span>");

    // Make it round!
    if (buttonWidth >= buttonHeight) {
      buttonHeight = buttonWidth;
    } else {
      buttonWidth = buttonHeight;
    }

    // Get the center of the element
    let x = e.pageX - posX - buttonWidth / 2;
    let y = e.pageY - posY - buttonHeight / 2;

    // Add the ripples CSS and start the animation
    jQuery(".ripple")
      .css({
        width: buttonWidth,
        height: buttonHeight,
        top: y + "px",
        left: x + "px",
      })
      .addClass("rippleEffect");
  });

  /*---------------------------------------------------------------------
        Sidebar Widget
        -----------------------------------------------------------------------*/

  jQuery(document).on("click", ".iq-menu > li > a", function () {
    jQuery(".iq-menu > li > a").parent().removeClass("active");
    jQuery(this).parent().addClass("active");
  });

  // Active menu
  var parents = jQuery("li.active").parents(".iq-submenu.collapse");

  parents.addClass("show");

  parents.parents("li").addClass("active");
  jQuery('li.active > a[aria-expanded="false"]').attr("aria-expanded", "true");

  /*---------------------------------------------------------------------
        FullScreen
        -----------------------------------------------------------------------*/
  jQuery(document).on("click", ".iq-full-screen", function () {
    let elem = jQuery(this);
    if (
      !document.fullscreenElement &&
      !document.mozFullScreenElement && // Mozilla
      !document.webkitFullscreenElement && // Webkit-Browser
      !document.msFullscreenElement
    ) {
      // MS IE ab version 11

      if (document.documentElement.requestFullscreen) {
        document.documentElement.requestFullscreen();
      } else if (document.documentElement.mozRequestFullScreen) {
        document.documentElement.mozRequestFullScreen();
      } else if (document.documentElement.webkitRequestFullscreen) {
        document.documentElement.webkitRequestFullscreen(
          Element.ALLOW_KEYBOARD_INPUT
        );
      } else if (document.documentElement.msRequestFullscreen) {
        document.documentElement.msRequestFullscreen(
          Element.ALLOW_KEYBOARD_INPUT
        );
      }
    } else {
      if (document.cancelFullScreen) {
        document.cancelFullScreen();
      } else if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
      } else if (document.webkitCancelFullScreen) {
        document.webkitCancelFullScreen();
      } else if (document.msExitFullscreen) {
        document.msExitFullscreen();
      }
    }
    elem
      .find("i")
      .toggleClass("ri-fullscreen-line")
      .toggleClass("ri-fullscreen-exit-line");
  });

  /*---------------------------------------------------------------------
        Page Loader
        -----------------------------------------------------------------------*/
  jQuery("#load").fadeOut();
  jQuery("#loading").delay().fadeOut("");

  /*---------------------------------------------------------------------
        Counter
        -----------------------------------------------------------------------*/
  if (window.counterUp !== undefined) {
    const counterUp = window.counterUp["default"];
    const $counters = $(".counter");
    $counters.each(function (ignore, counter) {
      var waypoint = new Waypoint({
        element: $(this),
        handler: function () {
          counterUp(counter, {
            duration: 1000,
            delay: 10,
          });
          this.destroy();
        },
        offset: "bottom-in-view",
      });
    });
  }

  /*---------------------------------------------------------------------
        Progress Bar
        -----------------------------------------------------------------------*/
  jQuery(".iq-progress-bar > span").each(function () {
    let progressBar = jQuery(this);
    let width = jQuery(this).data("percent");
    progressBar.css({
      transition: "width 2s",
    });

    setTimeout(function () {
      progressBar.appear(function () {
        progressBar.css("width", width + "%");
      });
    }, 100);
  });

  jQuery(".progress-bar-vertical > span").each(function () {
    let progressBar = jQuery(this);
    let height = jQuery(this).data("percent");
    progressBar.css({
      transition: "height 2s",
    });
    setTimeout(function () {
      progressBar.appear(function () {
        progressBar.css("height", height + "%");
      });
    }, 100);
  });

  /*---------------------------------------------------------------------
        Page Menu
        -----------------------------------------------------------------------*/
  jQuery(document).on("click", ".wrapper-menu", function () {
    jQuery(this).toggleClass("open");
  });

  jQuery(document).on("click", ".wrapper-menu", function () {
    jQuery("body").toggleClass("sidebar-main");
  });

  /*---------------------------------------------------------------------
       Close  navbar Toggle
       -----------------------------------------------------------------------*/

  jQuery(".close-toggle").on("click", function () {
    jQuery(".h-collapse.navbar-collapse").collapse("hide");
  });

  /*---------------------------------------------------------------------
        Mailbox
        -----------------------------------------------------------------------*/
  jQuery(document).on("click", "ul.iq-email-sender-list li", function () {
    jQuery(this).next().addClass("show");
    // jQuery('.mail-box-detail').css('filter','blur(4px)');
  });

  jQuery(document).on("click", ".email-app-details li h4", function () {
    jQuery(".email-app-details").removeClass("show");
  });

  /*---------------------------------------------------------------------
        chatuser
        -----------------------------------------------------------------------*/
  jQuery(document).on("click", ".chat-head .chat-user-profile", function () {
    jQuery(this).parent().next().toggleClass("show");
  });
  jQuery(document).on("click", ".user-profile .close-popup", function () {
    jQuery(this).parent().parent().removeClass("show");
  });

  /*---------------------------------------------------------------------
        chatuser main
        -----------------------------------------------------------------------*/
  jQuery(document).on("click", ".chat-search .chat-profile", function () {
    jQuery(this).parent().next().toggleClass("show");
  });
  jQuery(document).on("click", ".user-profile .close-popup", function () {
    jQuery(this).parent().parent().removeClass("show");
  });

  /*---------------------------------------------------------------------
        Chat start
        -----------------------------------------------------------------------*/
  jQuery(document).on("click", "#chat-start", function () {
    jQuery(".chat-data-left").toggleClass("show");
  });
  jQuery(document).on("click", ".close-btn-res", function () {
    jQuery(".chat-data-left").removeClass("show");
  });
  jQuery(document).on("click", ".iq-chat-ui li", function () {
    jQuery(".chat-data-left").removeClass("show");
  });
  jQuery(document).on("click", ".sidebar-toggle", function () {
    jQuery(".chat-data-left").addClass("show");
  });

  /*---------------------------------------------------------------------
        todo Page
        -----------------------------------------------------------------------*/
  jQuery(document).on("click", ".todo-task-list > li > a", function () {
    jQuery(".todo-task-list li").removeClass("active");
    jQuery(".todo-task-list .sub-task").removeClass("show");
    jQuery(this).parent().toggleClass("active");
    jQuery(this).next().toggleClass("show");
  });
  jQuery(document).on("click", ".todo-task-list > li li > a", function () {
    jQuery(".todo-task-list li li").removeClass("active");
    jQuery(this).parent().toggleClass("active");
  });

  /*---------------------------------------------------------------------
        user toggle
        -----------------------------------------------------------------------*/
  jQuery(document).on("click", ".iq-user-toggle", function () {
    jQuery(this).parent().addClass("show-data");
  });

  jQuery(document).on("click", ".close-data", function () {
    jQuery(".iq-user-toggle").parent().removeClass("show-data");
  });
  jQuery(document).on("click", function (event) {
    var $trigger = jQuery(".iq-user-toggle");
    if ($trigger !== event.target && !$trigger.has(event.target).length) {
      jQuery(".iq-user-toggle").parent().removeClass("show-data");
    }
  });
  /*-------hide profile when scrolling--------*/
  jQuery(window).scroll(function () {
    let scroll = jQuery(window).scrollTop();
    if (
      scroll >= 10 &&
      jQuery(".iq-user-toggle").parent().hasClass("show-data")
    ) {
      jQuery(".iq-user-toggle").parent().removeClass("show-data");
    }
  });
  let Scrollbar = window.Scrollbar;
  if (jQuery(".data-scrollbar").length) {
    Scrollbar.init(document.querySelector(".data-scrollbar"), {
      continuousScrolling: false,
    });
  }

    /*---------------------------------------------------------------------
        Datatables
    -----------------------------------------------------------------------*/
    if(jQuery('.data-tables').length)
    {
      $('.data-tables').DataTable();
    }

  /*---------------------------------------------------------------------
        Form Validation
        -----------------------------------------------------------------------*/

  // Example starter JavaScript for disabling form submissions if there are invalid fields
  window.addEventListener(
    "load",
    function () {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName("needs-validation");
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener(
          "submit",
          function (event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add("was-validated");
          },
          false
        );
      });
    },
    false
  );

  /*---------------------------------------------------------------------
       Active Class for Pricing Table
       -----------------------------------------------------------------------*/
  jQuery("#my-table tr th").click(function () {
    jQuery("#my-table tr th").children().removeClass("active");
    jQuery(this).children().addClass("active");
    jQuery("#my-table td").each(function () {
      if (jQuery(this).hasClass("active")) {
        jQuery(this).removeClass("active");
      }
    });
    var col = jQuery(this).index();
    jQuery("#my-table tr td:nth-child(" + parseInt(col + 1) + ")").addClass(
      "active"
    );
  });

  /*------------------------------------------------------------------
        Select 2 Selectpicker
        * -----------------------------------------------------------------*/

  if ($.fn.select2 !== undefined) {
    $("#single").select2({
      placeholder: "Select a Option",
      allowClear: true,
    });
    $("#multiple").select2({
      placeholder: "Select a Multiple Option",
      allowClear: true,
    });
    $("#multiple2").select2({
      placeholder: "Select a Multiple Option",
      allowClear: true,
    });
  }

  /*------------------------------------------------------------------
        Flatpicker
        * -----------------------------------------------------------------*/
  if (jQuery.fn.flatpickr !== undefined) {
    if (jQuery(".basicFlatpickr").length > 0) {
      jQuery(".basicFlatpickr").flatpickr();
    }

    if (jQuery("#inputTime").length > 0) {
      jQuery("#inputTime").flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
      });
    }
    if (jQuery("#inputDatetime").length > 0) {
      jQuery("#inputDatetime").flatpickr({
        enableTime: true,
      });
    }
    if (jQuery("#inputWeek").length > 0) {
      jQuery("#inputWeek").flatpickr({
        weekNumbers: true,
      });
    }
    if (jQuery("#inline-date").length > 0) {
      jQuery("#inline-date").flatpickr({
        inline: true,
      });
    }
    if (jQuery("#inline-date1").length > 0) {
      jQuery("#inline-date1").flatpickr({
        inline: true,
      });
    }
  }

  /*---------------------------------------------------------------------
        Scrollbar
        -----------------------------------------------------------------------*/

  jQuery(window)
    .on("resize", function () {
      if (jQuery(this).width() <= 1299) {
        jQuery("#salon-scrollbar").addClass("data-scrollbar");
      } else {
        jQuery("#salon-scrollbar").removeClass("data-scrollbar");
      }
    })
    .trigger("resize");

  jQuery(".data-scrollbar").each(function () {
    var attr = $(this).attr("data-scroll");
    if (typeof attr !== typeof undefined && attr !== false) {
      let Scrollbar = window.Scrollbar;
      var a = jQuery(this).data("scroll");
      Scrollbar.init(document.querySelector('div[data-scroll= "' + a + '"]'));
    }
  });

  /*---------------------------------------------------------------------
        Pricing tab
        -----------------------------------------------------------------------*/
  jQuery(window).on("scroll", function (e) {
    // Pricing Pill Tab
    var nav = jQuery("#pricing-pills-tab");
    if (nav.length) {
      var contentNav = nav.offset().top - window.outerHeight;
      if (jQuery(window).scrollTop() >= contentNav) {
        e.preventDefault();
        jQuery("#pricing-pills-tab li a").removeClass("active");
        jQuery("#pricing-pills-tab li a[aria-selected=true]").addClass(
          "active"
        );
      }
    }
  });

  /*---------------------------------------------------------------------
        Sweet alt Delete
        -----------------------------------------------------------------------*/
  $('[data-extra-toggle="delete"]').on("click", function (e) {
    const closestElem = $(this).attr("data-closest-elem");
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: "btn btn-primary",
        cancelButton: "btn btn-outline-primary ml-2",
      },
      buttonsStyling: false,
    });

    swalWithBootstrapButtons
      .fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        showClass: {
          popup: "animate__animated animate__zoomIn",
        },
        hideClass: {
          popup: "animate__animated animate__zoomOut",
        },
      })
      .then((willDelete) => {
        if (willDelete.isConfirmed) {
          swalWithBootstrapButtons
            .fire({
              title: "Deleted!",
              text: "Your note has been deleted.",
              icon: "success",
              showClass: {
                popup: "animate__animated animate__zoomIn",
              },
              hideClass: {
                popup: "animate__animated animate__zoomOut",
              },
            })
            .then(() => {
              if (closestElem == ".card") {
                $(this).closest(closestElem).parent().remove();
              } else {
                $(this).closest(closestElem).remove();
              }
            });
        } else {
          swalWithBootstrapButtons.fire({
            title: "Your note is safe!",
            showClass: {
              popup: "animate__animated animate__zoomIn",
            },
            hideClass: {
              popup: "animate__animated animate__zoomOut",
            },
          });
        }
      });
  });

  if ($.fn.slick !== undefined && $(".top-product").length > 0) {
    jQuery(".top-product").slick({
      slidesToShow: 3,
      speed: 300,
      slidesToScroll: 1,
      focusOnSelect: true,
      autoplay: true,
      arrows: false,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            autoplay: true,
            slidesToShow: 1,
          },
        },
      ],
    });
  }
})(jQuery);


function createInvoice(orderId){
  
  Swal.fire({
    title: 'Do you want to create invoice?',
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: 'Create',
    denyButtonText: `Don't create`,
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
        
      $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/invoice/',
        dataType : 'json',
        type: 'POST',
        data: {
          "orderId" : orderId
        },
        success: function(data) {
          Swal.fire('Created!', '', 'success')
          
          //do stuff
      },
      error: function(data) {
          //do stuff
         
          Swal.fire({
            title: 'Error!',
            text: 'Failed to create quotation',
            icon: 'error',
            confirmButtonText: 'close'
          })
          console.log("error")
          console.log(data)
      },
      complete: function(){
       
          //do stuff
          console.log("complete")
      }
   });
    } else if (result.isDenied) {
      Swal.fire('Invoice not Created', '', 'info')
    }
  })
}

let products = [] ;

const taxRate = 0 ;

var discountRate = 0 ;

var customer = ""

var productCode = document.getElementById("test");
var discountInput = document.getElementById("discountInput");
var orderButton = document.getElementById("addOrder");
var customerName = document.getElementById("cu");
var loading = document.getElementById("loadingId");



customer = customerName.value;

customerName.addEventListener("change",function(){
   customer = this.value;
});

orderButton.addEventListener("click",function(){
   if(products.length != 0){
    this.disabled = true ;
    loading.classList.remove("display-class");
    
    var payload = {}
    payload["products"] = products ;
    payload["amount"] = getTotal();
    payload["discount"] = discountRate
    payload["customer"] = customer
  
    console.log(payload);
  
         $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/quotation/',
            dataType : 'json',
            type: 'POST',
            data: payload,
            success: function(data) {
              loading.classList.add("display-class");
              Swal.fire(
                'Success',
                'Quotation succesfully created',
                'success'
              )
              console.log("sucess")
              console.log(data)
                                 
              orderButton.disabled = false ;
                products = [] ;
                discountRate = 0 ;
                insertIntoTable()
  
              
              //do stuff
          },
          error: function(data) {
              //do stuff
              loading.classList.add("display-class");
              Swal.fire({
                title: 'Error!',
                text: 'Failed to create quotation',
                icon: 'error',
                confirmButtonText: 'close'
              })
              console.log("error")
              console.log(data)
          },
          complete: function(){
            orderButton.disabled = false ;
            loading.classList.add("display-class");
              //do stuff
              console.log("complete")
          }
       });
   }else{
    alert("add at least one product")
   }
})

discountInput.addEventListener("change",function(){
  discountRate = this.value ;
  insertIntoTable();
})
productCode.addEventListener("change",function(){
  $.get("byCode/" + this.value, function(data, status){
        var payload = JSON.parse(data)
         if(payload.length > 0 ){
            const found = products.some(el => el.id === payload[0].id);

            if(found){
              alert("product already added")
            }else{
              products.push({
                "id": payload[0].id,
                "name" : payload[0].name ,
                "price": payload[0].price ,
                "stock" : payload[0].quantity,
                "quantity" : 1
              })
            }
            
            insertIntoTable()
         }

  });

  this.value = ""
});


function insertIntoTable(){
  var table = document.getElementById("product-table").getElementsByTagName("tbody")[0];

  table.innerHTML = ""


  products.forEach(function(value,index){

    var row = table.insertRow()

    var cell1 = row.insertCell(0)
    var cell2 = row.insertCell(1)
    var cell3 = row.insertCell(2)
    var cell4 = row.insertCell(3)
    var cell5 = row.insertCell(4)
    var cell6 = row.insertCell(5)

    cell1.innerHTML = value.name
    cell2.innerHTML = value.price
    cell3.innerHTML = value.stock
    cell4.innerHTML = '<div class="form-group"><input type="text"  onchange="change(this.value,'+ index+')"  class="form-control" placeholder="'+ value.quantity +'" data-errors="Please Enter quantity." ></div>'
    cell5.innerHTML = value.price * value.quantity 
    cell6.innerHTML = '  <a class="badge qb bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" href="#" onclick="remove('+ index+')"><i class="ri-delete-bin-line mr-0"></i></a>'
   

  })
  
  var grandTotal = document.getElementById('total');
  var tax = document.getElementById('tax');
  var beforeTax = document.getElementById('beforetax');
  var discount = document.getElementById('discount');

  var calculatedTax =  getTotal() * taxRate / 100 ;
 // var calculatedDiscount  = getTotal() * discountRate / 100 ;
  grandTotal.innerHTML = getTotal() + calculatedTax - discountRate;
  tax.innerHTML = calculatedTax ;
  discount.innerHTML = discountRate
  beforeTax.innerHTML = getTotal()
  
}

function change(value,index){

  if(value > products[index].stock){
    alert("exceed available stock");
  }else{
    products[index].quantity =  value ; 
    insertIntoTable()
  }
 
}

function remove(index){
  products.splice(index,1)
  insertIntoTable()
}

function getTotal(){
  total = 0 

  products.map((value,index)=>{
    total += value.price * value.quantity
  })
  
  return  total
}

function calculateDiscount(){
  discountRate = 10
}












