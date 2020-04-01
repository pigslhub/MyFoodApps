<?php $__env->startSection('breadcrumb-title', 'Chat'); ?>
<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <?php echo $__env->make("flashMessages", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">All Conversations</h4>
                        </div>
                        <div class="card-body" style='height:400px;overflow: scroll'>
                            <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Customer</th>
                                <th>Problem</th>
                                <th>Action</th>
                            </tr>

                            <?php $__empty_1 = true; $__currentLoopData = $conversations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conversation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <th><?php echo e($conversation->id); ?></th>
                                <th><img class="img-fluid rounded-circle" style="border: 1px solid #0e2b57;height:60px;width:60px" src="<?php echo e(asset($conversation->avatar)); ?>" alt="Customer"></th>
                                <th><video style="height: 60px;width: 60px; border-radius: 50%" controls muted >
                                                    <source src="<?php echo e($conversation->video_link); ?>" type="video/mp4">
                                                </video></th>
                                <th><a class="btn btn-sm btn-primary" href="<?php echo e(route('shop.conversation.chat', $conversation->id)); ?>">View Chat</a></th>
                            </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="row">
                                        <div class="col-md-12 justify-content-center">
                                            <p>No Conversations Found!</p>
                                        </div>
                                    </div>

                                <?php endif; ?>

                            </table>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">All Chats</h4>
                        </div>
                        <div class="card-body">
                            <div class="row" style="height:400px;overflow-y: scroll" id="chatDetails">

                             </div>
                                     <div class="row" style="border-top: 1px solid #0e2b57;">
                                         <div class="col-md-12">
                                             <input type="hidden" id="conversation_id" value="<?php echo e($conversation_id); ?>">
                                             <input type="text" class="form-control" placeholder="Type your message here..." name="inputField" id="message">
                                         </div>
                                         <div class="col-md-6">
                                             <input type="button" class="btn btn-block btn-primary" id="btnSendMessage" value="Send" /> <span id="confirm"></span>
                                         </div>
                                         <div class="col-md-6">
                                             <a class="btn btn-block btn-secondary" href="<?php echo e(route('shop.order.create', [$customer_id, $conversation_id])); ?>" id="btnSendOrder">send order request</a>
                                         </div>

                                    </div>



                                <div class="modal" id="ordermodal">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Order details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary">Accept</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Decline</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("#chatDetails").delegate('a', 'click', '', function () {

                let order_id = $(this).text();

                $.ajax({
                    url: "<?php echo e(route('shop.order.showOrderToCustomer')); ?>",
                    method:"POST",
                    data:{"order_id":order_id},
                    success: function(result){
                        $(".modal-body").html(result);

                    },
                });
            });


            function viewAllChat()
            {
                let conversation_id = $("#conversation_id").val();

                $.ajax({
                    url: "<?php echo e(route('shop.conversation.chat.viewAll')); ?>",
                    method:"POST",
                    data:{"conversation_id":conversation_id},
                    success: function(result){
                        $("#chatDetails").html(result);
                        $("#chatDetails").animate({ scrollTop: $('#chatDetails').prop("scrollHeight")}, 1000);
                        $("table").css("height","200px");
                    },
                });
            }

            viewAllChat();



  var firebaseConfig = {
  apiKey: "AIzaSyAfOAYFDEh5FiFIraFSD2yPdYs6Kmzf9wo",
  authDomain: "ezcaretogo.firebaseapp.com",
  databaseURL: "https://ezcaretogo.firebaseio.com",
  projectId: "ezcaretogo",
  storageBucket: "ezcaretogo.appspot.com",
  messagingSenderId: "982744377474",
  appId: "1:982744377474:web:4477e98bc76ffe6e476c9b",
  measurementId: "G-XC25S42DLK"
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);

  let con_id = $("#conversation_id").val();

    firebase
      .database()
      .ref("conversation")
      .child(con_id)
      .on("child_changed", function() {
        viewAllChat();
        // alert("Tested.");
      });
//       .set({
//     sent:"imran"
//   });



            $("#btnSendMessage").on('click',function () {

                    let msg = $("#message").val();
                    let conversation_id = $("#conversation_id").val();
                    let attach = "";


                     if(msg=="")
                     {
                         $("#message").css({"border":"1px solid red"});
                     }else{
                         $.ajax({

                             url: "<?php echo e(route('shop.conversation.chat.send')); ?>",
                             method:"POST",
                             data:{"message":msg,"senderid":"<?php echo e(Auth::user()->id); ?>","conversation_id":conversation_id, "attach": attach},
                             success: function(result){
                                 // alert(result);
                                    $("#chatDetails").append(result);
                                    $("#message").val("");
                             },error:function(data){
                                     // alert("Not"+data);
                                     alert("Sorry you can't start chat.");
                             }
                         });
                }
            })




        })
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.shop.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Sir Imran\MyFoodApps\resources\views/shop/chatMgt/chat.blade.php ENDPATH**/ ?>