<!DOCTYPE html>
<html>
   <head>
     @include('home.css')

   </head>
   <body>

    @include('sweetalert::alert')
      <div class="hero_area">
         <!-- header section strats -->
       @include('home.header')
         <!-- end header section -->
        
     
      <!-- product section -->
      @include('home.product_view')
      <!-- end product section -->



      <!-- Comment and reply system starts here -->

      @include('home.comment')


      <!-- Comment and reply system ends here -->




    
 
           <div class="cpy_">
         <p class="mx-auto">© 2023 - Todos os direitos Reservados <a href="https://www.planbwebapp.com.br">X5 Cell</a><br>
         
            D<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
            Desenvolvido Por <a href="https://www.planbwebapp.com.br" target="_blank">>Planbwebapp.com.br</a>
         
         </p>
      </div>


      <script type="text/javascript">
         
         function reply(caller)
         {  
            document.getElementById('commentId').value=$(caller).attr('data-Commentid');

            $('.replyDiv').insertAfter($(caller));

            $('.replyDiv').show();

         }


         function reply_close(caller)
         {



            $('.replyDiv').hide();

         }

 
      </script>


    <script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>


<script type="text/javascript">
  
  $(function() {
  $(document).on('mouseup', function (e) {
    e.preventDefault();
  });
});
</script>
      
            <!-- jQery -->
      <script src="{{asset('home/js/jquery-3.4.1.min.js')}}"></script>
      <!-- popper js -->
      <script src="{{asset('home/js/popper.min.js')}}"></script>
      <!-- bootstrap js -->
      <script src="{{asset('home/js/bootstrap.js')}}"></script>
      <!-- custom js -->
      <script src="{{asset('home/js/custom.js')}}"></script>
   </body>
</html>