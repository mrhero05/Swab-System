function showdate(click_id){
    $(document).ready(function() {
             var calendar = $('#calendarbody').fullCalendar({

         editable:true,
         weekends:false,
         header:{
          left:'prev,next today',
          center:'title',
          right:'month',
         },
         eventOrder: "id",
         events:[
            {
              title: 'All Day Event',
              start: '2022-05-01'
            }],

         selectable:true,
         selectHelper:true,
         displayEventTime: false,
         timezone:"local",
         select: function(start, end, jsEvent, view){
            var start1 = $.fullCalendar.formatDate(start, "MM-DD-Y");
            swal("Are you sure you want to select this date?", {
                buttons: ["Cancel", "Yes"],
              })
              .then((willDelete) => {
                if (willDelete) {
                  swal("Schedule Successfully Selected", {
                    icon: "success",
                  });
                  $(document).ready(function(){
                    var parent = $(click_id).closest("tr");
                    var id = parent.find('.user_id').val();
                    var rid = parent.find('.r_id').val();
                    //alert(rid);
                    $('#reschedDate').load('../functions/reschedfunction.php',{
                        id:id,
                        date1:start1,
                        rid:rid

                    });
                    location.reload();
                    });
                 
                } else {
                  swal("Please Select Again");
                }
              });
         
         },

        selectAllow: function(info) {
            if ( info.start.isBefore(moment().add(-1, 'days')) )
                return false;
            return true;          
        }

       });

     });


}