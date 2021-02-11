`use strict`;

 $(document).ready(function () {
       $('#category').DataTable({
           processing: true,
           serverSide: true,
           ajax: $("#url_lang").val()+'/category_datatable',
           columns: [
               {data: 'id', name: 'id'},
               {data: 'name', name: 'name'},
               {data: 'icon', name: 'icon'},
               {data: 'action', name: 'action'}
           ],
           columnDefs: [
                { targets: 2,
                  render: function(data) {
                    return '<img src="' + $("#url_lang").val() +'/public/upload/category/'+data+'" style="width:100px">'
                  }
                }
              ],
              order:[[0,"DESC"]]
       });
   });

    $('#chef_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: $("#url_lang").val()+'/chef_data_table',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'image', name: 'image'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'phone', name: 'phone'},
            {data: 'address', name: 'address'},
            {data: 'about', name: 'about'},
            {data: 'action', name: 'action'}
        ],
        columnDefs: [
            { targets: 1,
                render: function(data) {
                    return '<img src="' + $("#url_lang").val() +'/public/upload/chef/'+data+'" style="width:100px">'
                }
            }
        ],
        order:[[0,"DESC"]]
    });


 $(document).ready(function () {
       $('#latest_recipe_Table').DataTable({
           processing: true,
           serverSide: true,
           ajax: $("#url_lang").val()+'/latest_recipe_datatable',
           columns: [
               {data: 'id', name: 'id'},
               {data: 'recipe_name', name: 'recipe_name'},
               {data: 'user_name', name: 'user_name'}
           ],

              order:[[0,"DESC"]]
       });
   });
 $(document).ready(function () {
       $('#least_review').DataTable({
           processing: true,
           serverSide: true,
           ajax: $("#url_lang").val()+'/least_review_table',
           columns: [
               {data: 'id', name: 'id'},
               {data: 'recipe_name', name: 'recipe_name'},
               {data: 'user_name', name: 'user_name'},
               {data: 'ratting', name: 'ratting'}
           ],

              order:[[0,"DESC"]]
       });
   });
 $(document).ready(function () {
       $('#user_datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: $("#url_lang").val()+'/user_datatable',
           columns: [
               {data: 'id', name: 'id'},
               {data: 'name', name: 'name'},
               {data: 'email', name: 'email'},
               {data: 'action', name: 'action'}
           ],

              order:[[0,"DESC"]]
       });
   });
 $(document).ready(function () {
       $('#review_table').DataTable({
           processing: true,
           serverSide: true,
           ajax: $("#url_lang").val()+'/review_datatable',
           columns: [
               {data: 'id', name: 'id'},
               {data: 'recipe_name', name: 'recipe_name'},
               {data: 'user_name', name: 'user_name'},
               {data: 'review', name: 'review'},
               {data: 'ratting', name: 'ratting'},
               {data: 'action', name: 'action'}
           ],

              order:[[0,"DESC"]]
       });
   });



  function edit_category(id){
       $.ajax({
             url: $("#url_lang").val()+"/get_category_by_id"+"/"+id,
             data: { },
            success: function( data ) {
               data=JSON.parse(data);
               $("#id").val(data.id);
               $("#real_img").val(data.image);
               $("#edit_name").val(data.name);
               $("#edit_img").attr("src",$("#url_lang").val()+'/public/upload/category/'+data.image);
            }
        });
  }

   $(document).ready(function () {
       $('#recipe_table').DataTable({
           processing: true,
           serverSide: true,
           ajax: $("#url_lang").val()+'/recipe_datatable',
           columns: [
               {data: 'id', name: 'id'},
               {data: 'chef_name', name: 'chef_name'},
               {data: 'category', name: 'category'},
               {data: 'name', name: 'name'},
               {data: 'icon', name: 'icon'},
               {data: 'create_by', name: 'create_by'},
               {data: 'status', name: 'status'},
               {data: 'action', name: 'action'}
           ],
           columnDefs: [
                { targets: 4,
                  render: function(data) {
                    console.log(data);
                    return '<img src="'+$("#url_lang").val()+'/public/upload/recipe/'+data+'" style="width:100px">'
                  }
                } ,
                { targets: 6,
                  render: function(data) {
                     var str=data.split(',');
                    return '<b>'+$("#Likes_lang").val()+':-</b>'+str[0]+'</br><b>'+$("#Views_lang").val()+':-</b>'+str[1]+'</br><b>'+$("#Share_lang").val()+':-</b>'+str[2];
                  }
                }
              ],
              order:[[0,"DESC"]]
       });
   });


   function addoptionrow() {
        var lastrow=$("#totalrow").val();
        var newrow=parseInt(lastrow)+1;
        var txt = '<tr id="ing_'+newrow+'"><td><i class="ti-layout-grid4-alt"></i></td><td data-id="'+newrow+'"><input type="text" required id="label_'+newrow+'" name="ing_name[]" placeholder="" class="form-control"></td><td><input type="text"  required id="price_'+newrow+'" name="ing_weight[]" placeholder="" class="form-control"></td><td><button onclick="removerow('+newrow+','+"'ing_'"+')" class="btn btn-danger"><i class="fa fa-trash f-s-25"></i></button></td></tr>';
        $('#lstable').append(txt);
        $("#totalrow").val(newrow);
    }
    function addnutrirow() {
        var lastrow=$("#totalrownutri").val();
        var newrow=parseInt(lastrow)+1;
        var txt = '<tr id="nutri_'+newrow+'"><td><i class="ti-layout-grid4-alt"></i></td><td data-id="'+newrow+'"><input type="text" required id="name_'+newrow+'" name="nutri_name[]" placeholder="" class="form-control"></td><td><input type="text"  id="value_'+newrow+'" name="nutri_value[]" placeholder="" class="form-control"></td><td><button onclick="removerow('+newrow+','+"'nutri_'"+')" class="btn btn-danger"><i class="fa fa-trash f-s-25"></i></button></td></tr>';
        $('#lstablenutri').append(txt);
        $("#totalrownutri").val(newrow);
    }

    function addsteprow(){
       var lastrow=$("#totalstep").val();
        var newrow=parseInt(lastrow)+1;
        var txt = '<tr id="step_'+newrow+'"><td><i class="ti-layout-grid4-alt"></i></td><td data-id="'+newrow+'"><video width="400" controls><source src="" id="video_here'+newrow+'" ></video><input type="hidden" name="thumbimgdata[]" id="thumbimgdata'+newrow+'" value=""> <input type="hidden" name="thumbreal[]" id="thumbreal'+newrow+'"><textarea class="form-control" name="stepdetail[]" required id="stepdesc'+newrow+'" style="margin-bottom:15px"></textarea><input type="hidden" name="image_real[]" value=""/><input type="file" required id="files'+newrow+'" name="files[]" accept="video/*" placeholder="" onchange="uploadalt('+newrow+')" class="form-control"></td><td><button class="btn btn-danger" onclick="removerow('+newrow+','+"'step_'"+')"><i class="fa fa-trash f-s-25"></i></button></td></tr>';
        $('#lstablestep').append(txt);
        $("#totalstep").val(newrow);
    }
    function removerow(val,val1) {
             if(val!=1){
            $('#'+val1 + val).remove();
          }
    }

    $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
    });


    $(document).ready(function() {
            $('#upload_image').on('change', function(e) {
                    readURL(this,"basic_img");
            });
     });
     function readURL(input,field) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#'+field).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

  function uploadalt(val){
        if(document.getElementById("video").files[0].size > 200000000){
             alert("File is too big!");
             document.getElementById("video").value = "";
         }
        else{
            var $source = $('#video_here');
            $source[0].src = URL.createObjectURL(document.getElementById("video").files[0]);
            $source.parent()[0].load();
              var file = document.getElementById("video").files[0];
              var fileReader = new FileReader();
              if (file.type.match('image')) {
                fileReader.onload = function() {
                  var img = document.createElement('img');
                  img.src = fileReader.result;
                  document.getElementsByTagName('div')[0].appendChild(img);
                };
                fileReader.readAsDataURL(file);
              } else {
                  fileReader.onload = function() {
                    var blob = new Blob([fileReader.result], {type: file.type});
                    var url = URL.createObjectURL(blob);
                    var video = document.createElement('video');
                    var timeupdate = function() {
                      if (snapImage()) {
                        video.removeEventListener('timeupdate', timeupdate);
                        video.pause();
                      }
                    };
                    video.addEventListener('loadeddata', function() {
                      if (snapImage()) {
                        video.removeEventListener('timeupdate', timeupdate);
                      }
                    });
                    var snapImage = function() {
                      var canvas = document.createElement('canvas');
                      canvas.width = video.videoWidth;
                      canvas.height = video.videoHeight;
                      canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
                      var image = canvas.toDataURL();
                      var success = image.length > 100000;
                      if (success) {
                        var img = document.createElement('img');
                        img.src = image;

                        //document.getElementById("thumbimgdata"+val).value=image;
                      //  document.getElementsByTagName('div')[0].appendChild(img);
                        URL.revokeObjectURL(url);
                      }
                      return success;
                    };
                    video.addEventListener('timeupdate', timeupdate);
                    video.preload = 'metadata';
                    video.src = url;
                    // Load video in Safari / IE11
                    video.muted = true;
                    video.playsInline = true;
                    video.play();
                  };
                  fileReader.readAsArrayBuffer(file);
  }
        }
  }


function play_sound() {
            var source = $("#url_lang").val()+'/public/sound/notification/notification.mp3';
            var audioElement = document.createElement('audio');
            audioElement.autoplay = true;
            audioElement.load();
            audioElement.addEventListener("load", function() {
                audioElement.play();
            }, true);
            audioElement.src = source;
        }
    $(document).ready(function(){
            function have_notification(){
                $.ajax({
                    url:$("#url_lang").val()+"/notification/0",
                    method:"GET",
                    dataType:"json",
                    success:function(resp) {
                        var data = resp.response;
                        if(resp.status == 200){
                            if(data.total > 0){
                                document.getElementById("ordercount").innerHTML=data.total;
                                document.getElementById("notificationmsg").innerHTML=$("#you_have").val()+'  <b>'+data.total+'  </b>'+$("#new_order").val();
                                $('#bell-animation').addClass('icon-anim-pulse');
                                $('.notification-badge').addClass('badge-danger');
                                play_sound();

                            } else{
                                document.getElementById("ordercount").innerHTML=0;
                                document.getElementById("notificationmsg").innerHTML=$("#orders_pending").val();
                                   document.getElementById("notificationshow").style.display="none";

                            }
                        } else {
                             document.getElementById("ordercount").innerHTML=0;
                            document.getElementById("notificationmsg").innerHTML=$("#orders_pending").val();
                            $('#bell-animation').removeClass('icon-anim-pulse');
                            $('.notification-badge').removeClass('badge-danger');
                        }
                    }
                });
            }
            have_notification();

            setInterval(function(){
                have_notification();
            },5000);
        });

         function checknotify(){
                $.ajax({
                    url:$("#url_lang").val()+"/notification/1",
                    method:"GET",
                    dataType:"json",
                    success:function(resp){
                        var data = resp.response;
                        if(resp.status == 200){
                            $('#notification-data').html(data.data);
                            $('#bell-animation').removeClass('icon-anim-pulse');
                            $('.notification-badge').removeClass('badge-danger');
                        }
                    }
                });
         }



function delete_record(url) {
        if (confirm($("#delete_data").val())) {
            if($("#demo_lang").val()==1){
                alert('This function is currently disable as it is only a demo website, in your admin it will work perfect');
            }
            else{
                 window.location.href =url;
            }

        } else {
            window.location.reload();
        }
    }

$(function () {
    $("#lstable tbody").sortable({
        cursor: "move",
        placeholder: "sortable-placeholder",
        helper: function (e, tr) {
            var $originals = tr.children();
            var $helper = tr.clone();
            $helper.children().each(function (index) {
                $(this).width($originals.eq(index).width());
            });
            return $helper;
        }
    }).disableSelection();
});
$(function () {
    $("#lstablenutri tbody").sortable({
        cursor: "move",
        placeholder: "sortable-placeholder",
        helper: function (e, tr) {
            var $originals = tr.children();
            var $helper = tr.clone();
            $helper.children().each(function (index) {
                $(this).width($originals.eq(index).width());
            });
            return $helper;
        }
    }).disableSelection();
});
$(function () {
    $("#tdnew tbody").sortable({
        cursor: "move",
        placeholder: "sortable-placeholder",
        helper: function (e, tr) {
            var $originals = tr.children();
            var $helper = tr.clone();
            $helper.children().each(function (index) {
                $(this).width($originals.eq(index).width());
            });
            return $helper;
        }
    }).disableSelection();
});
