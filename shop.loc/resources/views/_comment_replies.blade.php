<script>
    function Open($qwe){
        if(document.getElementById('formochka_'+$qwe).style.display == "block"){
        document.getElementById('formochka_'+$qwe).style.display = "none";}
        else{
                document.getElementById('formochka_'+$qwe).style.display = "block";
        }
    }
</script>
<!-- _comment_replies.blade.php -->
@foreach($comments as $comment)
<div class="container">
    <div class="">
        <div class="card-body" style="border: 1px solid blue; border-radius: 20px;background-color:#fafaaa">
            <div class="row" >
                <div class="col-md-2">
                    <p class="text-secondary text-center">{{ $comment->created_at }}</p>
                </div>
                <div class="col-md-10">
                    <p>
                        <strong>{{ $comment->user->name }}</strong>

                   </p>
                   <div class="clearfix"></div>
                    <p>{!! $comment->body !!}</p>
                    <p>
                        @if(isset(Auth::user()->name) and Auth::user()->email == "moderator@gmail.com")
                        <form method="post" action="{{route('delete_comment')}}">
                            {{csrf_field()}}
                            <input type="text" name="comment_id" value="{{$comment->id}}" style="display: none">
                            <button class="float-right btn btn-danger ml-2">Delete</button>
                        </form>
                        @endif
                        @if(auth()->check())
                        <a class="float-right btn btn-primary ml-2" onclick="Open({{$comment->id}})"> <i class="fa fa-reply"></i> Reply</a>
                        @endif
                        <form method="post" action="{{ route('reply.add') }}" id="formochka_{{$comment->id}}" style="display: none;">
                            @csrf
                            <div class="form-group">
                                <input type="text"  name="comment_body" class="form-control md-textarea" />
                                <input type="hidden" name="product_id" value="{{ $product_id }}" />
                                <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-warning" value="Submit" />
                            </div>
                        </form>
                   </p>
                </div>
            </div>
            @include('_comment_replies', ['comments' => $comment->replies])
        </div>
    </div>
</div>
<br>
@endforeach