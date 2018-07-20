$( document ).ready(function() {
  $('.swal_confirm').click(function(){
                var valid = $(this).attr('valid');
                var urlremove = $(this).attr('urlremove');
                swal({   
                    title: "Are you sure ? : Remove "+valid,   
                    text: "You will not be able to recover this imaginary file!",   
                    type: "warning",   
                    showCancelButton: true,   
                    confirmButtonColor: "#DD6B55",   
                    confirmButtonText: "Yes, delete it!",   
                    cancelButtonText: "No, cancel plx!",   
                    closeOnConfirm: false,   
                    closeOnCancel: false 
                }, function(isConfirm){   
                    if (isConfirm) {
                        window.location=urlremove;     
                        //swal("Deleted!", "Your imaginary file has been deleted.", "success");   
                    } else {     
                        swal("Cancelled", "Your imaginary file is safe :)", "error");   
                    } 
                });
    });
});