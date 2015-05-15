	$(document).ready(function () {

        //delete

        $(".delete").on('click', function(e) {

          e.preventDefault();

          var route = $(this).attr('href');
          var token = $(this).attr('token');
          // var id = href.substr(href.lastIndexOf('/') + 1);
          var row = $(this).closest('tr');

          swal({
            title: "Are you sure?",
            text: "You will not be able to recover this data !",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
          },
          function(){
            ajaxDelete(route,token,row);
            swal("Deleted!", "Your data has been deleted.", "success");
          });

        });

        function ajaxDelete(route,token,row)
        {
            $.ajax({
                type: "post",
                url: route,
                dataType: 'text',
                data : {
                    _method: 'delete',
                    _token :token
                },
                success : function(data) {
                    if(data=='1')
                    {
                        row.fadeOut().remove();
                    }
                    else
                    {
                        alert('Error');
                    }
                },
                error : function(XMLHttpRequest, textStatus, errorThrown) {
                    alert(XMLHttpRequest + " : " + textStatus + " : " + errorThrown);
                }
            });
        }

	});

