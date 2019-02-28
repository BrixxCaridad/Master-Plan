/*    window.onload = hideErrorMessages();
*/
/*function hideErrorMessages(){
        $("#error_type").hide();
        $("#error_type2").hide();

        $("#error_address").hide();
        $("#error_address2").hide();
        $("#error_contact_person").hide();
        $("#error_contact_person2").hide();
        $("#error_contact").hide();
        $("#error_contact2").hide();
        //$("#error_email3").hide();
        $("#error_name").hide();
        $("#error_name2").hide();
        $("#error_name3").hide();
        //$("#error_role").hide();
        $("#edit_type").hide();
        $("#edit_type2").hide();

        $("#edit_address").hide();
        $("#edit_address2").hide();
        $("#edit_contact_person").hide();
        $("#edit_contact_person2").hide();
        $("#edit_contact").hide();
        $("#edit_contact2").hide();
        //$("#error_email3").hide();
        $("#edit_name").hide();
        $("#edit_name2").hide();
        $("#edit_name3").hide();
        //$("#error_role").hide();
        $("#new_contact_person").hide();
        $("#new_contact_person2").hide();
        $("#new_contact").hide();
        $("#new_contact2").hide();
        hide_loading();
    }*/

   /* $(document).ready( function () {

        //$('#dataTables-user-log').DataTable();
        $('#dataTables-user-list').DataTable({
            //"bFilter": true,
            //"paging":   false,
            //"iDisplayLength": 20,
            //"order": [[ 0, "asc" ]]
            //"bDestroy": true, 
        });
     } );
*/
    function view_student_popup(id,id_num,s_lname,s_fname,s_mname,s_cellphone,s_telephone,base_url){
        $( "#view-s-id").val(id);
        $( "#view-id-num" ).val(id_num);
        $( "#view-s-name" ).val(s_lname);
        $( "#view-f-name" ).val(s_lname);
        $( "#view-m-name" ).val(s_fname);
        $( "#view-cp-num" ).val(s_cellphone);
        $( "#view-telephone" ).val(s_telephone);
    
    }

    function edit_student_popup(id_num,s_lname,s_fname,s_mname){
        $( "#edit-id-num" ).val(id_num);
        $( "#edit-s-lname" ).val(s_lname);
        $( "#edit-s-fname" ).val(s_fname);
        $( "#edit-s-mname" ).val(s_mname);
        $("#editStudentSubmit").attr("onclick","update_student("+id+")");

    }


    function archive_confirmation(comp_id,comp_name){
        $( "#comp_name" ).html(comp_name);
        $('#archiveYesButton').attr("onclick","archive_submit('"+comp_name+"',"+comp_id+")");
    }


    function archive_submit(contact_id,c_id,c_name){
        show_loading();
            $.ajax({
            url: $("#base-url").val()+"faculty/archive_company/"+comp_name+"/"+comp_id,
            cache: false,
            success: function (result) {
                var result = $.parseJSON(result);
                if(result.status=='success'){
                    location.reload();
                }
                else{
                    alert("Oops there is something wrong!");
                }
            },
            error: function(){
                ajax_error_handling
            },
        });
    }


    function update_student(id){
        hideErrorMessages();
        show_loading();
        var i=0;
        var id_num = $('#edit-id-num').val().trim();
        var s_lname = $('#edit-s-lname').val().trim();
        var s_fname = $('#edit-s-fname').val().trim();
        var s_mname = $('#edit-s-mname').val().trim();


       /* if(c_name == ""){
            $("#edit-error_name").show();
            i++;
        }
        if(contact_person == ""){
            $("#edit-error_contact-person").show();
            i++;
        }
        if(c_contact == ""){
            $("#edit-error_contact").show();
            i++;
        }

        if(c_address == ""){
            $("#edit-error_address").show();
            i++;
        }
*/
        if(i == 0){
            $.ajax({
                url: $("#base-url").val()+"faculty/update_student_details",
                traditional: true,
                type: "post",
                dataType: "text",
                data: {id_num:id_num, s_lname:s_lname, s_fname:s_fname, s_mname:s_mname},
                success: function (result) {
                    var result = $.parseJSON(result);
                    if(result.status=='success'){
                        location.reload();
                    }
                    else if(result.status=='exist'){
                        $("#edit-error_name2").show();
                        hide_loading();
                    }
                    else{
                        alert("Oops there is something wrong!");
                    }
                },
                error: function(){
                    ajax_error_handling
                },
            });
        }
    }


    $( "#newStudentSubmit" ).click(function() {
            hideErrorMessages();
            show_loading();
            var i=0;
            var id_num = $('#id_num').val().trim();
            var s_lname = $('#s_lname').val().trim();
            var s_fname = $('#s_fname').val().trim();
            var s_mname = $('#s_mname').val().trim();      
            

            /*if(c_name == ""){
                $("#error_name").show();
                i++;
            }
            if(contact_person == ""){
                $("#error_contact_person").show();
                i++;
            }

            if(c_contact == ""){
                $("#error_contact").show();
                i++;
            }

            if(c_address == ""){
                $("#error_address").show();
                i++;
            }*/

            if(i == 0){
                $.ajax({
                    url: $("#base-url").val() + "faculty/add_student",
                    traditional: true,
                    type: "post",
                    dataType: "text",
                    data: {id_num:id_num, s_lname:s_lname, s_fname:s_fname, s_mname:s_mname,},
                    success: function (result) {
                        var result = $.parseJSON(result);
                        if(result.status=='success'){
                            location.reload();
                        }
                        /*else if(result.status=='exist'){
                            $("#error_name2").show();
                            hide_loading();
                        }*/
                        else{
                            alert("Oops there is something wrong!");
                        }
                      
                    },
                    error: function(){
                        ajax_error_handling
                    },
                });
            }else{
                hide_loading();
            }
                
        });



    