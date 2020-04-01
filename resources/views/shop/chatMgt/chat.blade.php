@extends('layouts.app-shop', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
@section('pageName', 'View Chats')
@section('content')
    <div class="content">
        <div class="container-fluid">
            @include("flashMessages")
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
                            
                            @forelse($conversations as $conversation)
                            <tr>
                                <th>{{$conversation->id}}</th>
                                <th><img class="img-fluid rounded-circle" style="border: 1px solid #0e2b57;height:60px;width:60px" src="{{asset($conversation->avatar)}}" alt="Customer"></th>
                                <th><video style="height: 60px;width: 60px; border-radius: 50%" controls muted >
                                                    <source src="{{$conversation->video_link}}" type="video/mp4">
                                                </video></th>
                                <th><a class="btn btn-sm btn-primary" href="{{route('shop.conversation.chat', $conversation->id)}}">View Chat</a></th>
                            </tr>
                                    
                                @empty
                                    <div class="row">
                                        <div class="col-md-12 justify-content-center">
                                            <p>No Conversations Found!</p>
                                        </div>
                                    </div>

                                @endforelse

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
                                             <input type="hidden" id="conversation_id" value="{{$conversation_id}}">
                                             <input type="text" class="form-control" placeholder="Type your message here..." name="inputField" id="message">
                                         </div>
                                         <div class="col-md-6">
                                             <input type="button" class="btn btn-block btn-primary" id="btnSendMessage" value="Send" /> <span id="confirm"></span>
                                         </div>
                                         <div class="col-md-6">
                                             <a class="btn btn-block btn-secondary" href="{{route('shop.order.create', [$customer_id, $conversation_id])}}" id="btnSendOrder">send order request</a>
                                         </div>

                                    </div>

{{--                                This is modal code for order--}}

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
@endsection

@push('js')
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
                    url: "{{route('shop.order.showOrderToCustomer')}}",
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
                    url: "{{route('shop.conversation.chat.viewAll')}}",
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

                             url: "{{route('shop.conversation.chat.send')}}",
                             method:"POST",
                             data:{"message":msg,"senderid":"{{Auth::user()->id}}","conversation_id":conversation_id, "attach": attach},
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

@endpush
