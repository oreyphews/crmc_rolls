$('#add_teachers').show();
$('#add_students').hide();
$('#add_programs').hide();
$('#add_course_subs').hide();
$(document).ready(function(){

    /* Tables */

    $('.table').DataTable();

    /* account creation */
    $("#disp_course").hide();
     $("#user_role").change(function() {
         
         var value = $(this).val();
         if(value == "teacher"){
            $("#disp_course").hide();
         }else if(value=="coordinator"){
            $("#disp_course").hide();
         }else if(value=="admin"){
            $("#disp_course").hide();
         }else{
            $("#disp_course").show();
         }
         //alert("student clicked!s" + value);
     });


    var quill = new Quill('#editor', {
        theme: 'snow'
      });




      $("#add_teachers_link").click(function() {
         $('#add_teachers').show();
         $('#add_students').hide();
         $('#add_programs').hide();
         $('#add_course_subs').hide();
      });
      $("#add_students_link").click(function() {
         $('#add_teachers').hide();
         $('#add_students').show();
         $('#add_programs').hide();
         $('#add_course_subs').hide();
      });
      $("#add_programs_link").click(function() {
         $('#add_teachers').hide();
         $('#add_students').hide();
         $('#add_programs').show();
         $('#add_course_subs').hide();
      });
      $("#add_course_subs_link").click(function() {
         $('#add_teachers').hide();
         $('#add_students').hide();
         $('#add_programs').hide();
         $('#add_course_subs').show();
      });

});