<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
    <style type="text/css">
        .div_center{
            text-align: center;
            padding: 40px;
        }
        .h2_font{
            font-size: 40px;
            padding-bottom: 40px;
        }
        .input_color{
            color: black;
        }
        .center{
            margin: auto;
            width: 50%;
            text-align: center;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- sidebar -->
       @include('admin.sidebar')
      <!-- sidebar -->
      <!-- navbar -->
      @include('admin.navbar')
      <!-- navbar -->  
        <div class="main-panel">
           <div class="content-wrapper">
            @if(session()->has('message'))
            <div class="alert alert-sucess">
                {{session()->get('message')}}

            </div>
            @endif
            <div class="div_center">   
                <h2 class="h2_font">Add Catagory</h2>
                <form action="{{url('/add_catagory')}}" method="POST">
                    @csrf
                    <input class="input_color" type="text" name="catagory" placeholder="Write catagory name">
                    <input type="submit" class="btn btn-primary" name="submit" value="Add Catagory">
                </form>
            </div>
            <table class="center">
                <tr>
                    <td>Catagory Name</td>
                    <td>Action</td>
                    @foreach($data as $data)
                    <tr>
                        <td>{{$data->catagory_name}}</td>
                        <td><a class="bth btn-danger" href="{{url('delete_catagory',$data->id)}}">Delete</td>
                    </tr>
                    @endforeach
                </tr>
            </table>
           </div>
        </div>
     </div>
     <!-- script -->
     @include('admin.script')
     <!-- script -->
  </body>
</html>