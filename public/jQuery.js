
// Notice Search

// $(document).ready(function(){
//     $("#searchingInfoPostTitle").on("keyup", function() {
//       var value = $(this).val().toLowerCase();
//       $(".item .notice-title").filter(function() {
//         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//       });
//     });
// });
  
$(document).ready(function(){  
    $('#search').on("keyup", function(){  
        search_table($(this).val());  
    });  
    function search_table(value){  
        $('#studentData .notice-title').each(function(){  
            var found = 'false';  
            $(this).each(function(){  
                if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                {  
                    found = 'true';  
                }  
            });  
            if(found == 'true'){  
                $(this).show();  
            }  
            else{  
                $(this).hide();  
            }  
        });  
    }  
});  
  
