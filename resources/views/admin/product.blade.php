<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->

  @include('admin.css')

  <style type="text/css">
    .div_center {
      text-align: center;
      padding-top: 40px;
    }

    .font_size {
      font-size: 40px;
      padding-bottom: 40px;
    }

    .text_color {
      color: black;
      padding-bottom: 20px;
    }

    label {
      display: inline-block;
      width: 200px;
    }

    .div_design {
      padding-bottom: 15px;
    }
  </style>

</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.header')
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">


        @if(session()->has('message'))

        <div class="alert alert-success">

          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

          {{session()->get('message')}}

        </div>

        @endif


        <div class="div_center">



          <h1 class="font_size">Adcionar Produto</h1>


          <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="div_design">

              <label>Nome do Produto:</label>
              <input class="text_color" type="text" name="title" placeholder="Nome" required="">

            </div>

            <div class="div_design">

              <label>Descrição do Produto:</label>
              <input class="text_color" type="text" name="description" placeholder="Descrição" required="">

            </div>

            <div class="div_design">

              <label>Preço</label>
              <input class="text_color" type="number" name="price" placeholder="Preço" required="">

            </div>

            <div class="div_design">

              <label>Desconto:</label>
              <input class="text_color" type="number" name="dis_price" placeholder="Aplicar Desconto">

            </div>


            <div class="div_design">

              <label>Quantidade:</label>
              <input class="text_color" type="number" min="0" name="quantity" placeholder="Quantidade" required="">

            </div>

            <div class="div_design">

              <label>Categoria do Produto:</label>

              <select class="text_color" name="catagory" required="">

                <option value="" selected="">Adicione a categoria Aqui</option>

                @foreach($catagory as $catagory)

                <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>

                @endforeach

              </select>

            </div>
            <div class="div_design">



              <div class="col-md-12">
                <label>Imagem do Produto:</label>
                <div class="form-group">
                  <input type="file" name="image" placeholder="Escolha a Imagem" id="image">
                  @error('image')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                </div>
              </div>

              <div class="col-md-12 mb-2">
                <img id="preview-image-before-upload" src="https://triunfo.pe.gov.br/pm_tr430/wp-content/uploads/2018/03/sem-foto-300x300.jpg" alt="preview image" style="max-height: 250px;">
              </div>


              <div class="div_design">



                <input type="submit" value="Adicionar Produto" class="btn btn-primary">
              </div>


          </form>





        </div>
      </div>

      @include('admin.footer')

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function(e) {


        $('#image').change(function() {

          let reader = new FileReader();

          reader.onload = (e) => {

            $('#preview-image-before-upload').attr('src', e.target.result);
          }

          reader.readAsDataURL(this.files[0]);

        });

      });
    </script>
</body>

</html>