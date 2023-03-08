<div style="text-align: center; padding-bottom: 30px;">

   <h1 style="font-size: 30px; text-align: center; padding-top: 20px; padding-bottom: 20px;">Comentar</h1>

   <form action="{{url('add_comment')}}" method="POST">

      @csrf

      <textarea style="height: 150px; width: 600px;" placeholder="Deixe um comentário" name="comment" required=""></textarea>

      <br>

      <input type="submit" class="btn btn-primary" value="Enviar Comentario">

   </form>


</div>


<div style="padding-left: 20%;">

   <h1 style="font-size: 20px; padding-bottom: 20px;">Comentários</h1>

   @foreach($comment as $comment)


   <div style="padding-bottom: 20px;">

      <b>{{$comment->name}}</b>
      <p>{{$comment->comment}}</p>

      <a style="color: blue;" href="javascript::void(0);" onclick="reply(this)" data-Commentid="{{$comment->id}}">Responder</a>


      @foreach($reply as $rep)

      @if($rep->comment_id==$comment->id)

      <div style="padding-left: 3%; padding-bottom: 20px; padding-bottom: 10px;">


         <b>{{$rep->name}}</b>
         <p>{{$rep->reply}}</p>
         <a style="color: blue;" href="javascript::void(0);" onclick="reply(this)" data-Commentid="{{$comment->id}}">Responder</a>

      </div>

      @endif

      @endforeach




   </div>

   @endforeach

   <!--  Reply Textbox -->

   <div style="display: none; padding-bottom: 20px;" class="replyDiv">

      <form action="{{url('add_reply')}}" method="POST">

         @csrf

         <input type="text" id="commentId" name="commentId" hidden="">

         <textarea style="height: 100px; width: 500px;" name="reply" placeholder="Comentário" required=""></textarea>

         <br>

         <button type="submit" class="btn btn-warning">Responder</button>

         <a href="javascript::void(0);" class="btn" onClick="reply_close(this)">Fechar</a>


      </form>



   </div>




</div>