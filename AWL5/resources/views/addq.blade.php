<h3 style="text-align: center;">IT-Professionals by Muhammad Yousaf</h3>
<br>
<br>

<br>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        @foreach($errors->all() as $error)
        <h2>{{$error}}</h2>
        @endforeach
      </div>

    </div>

  </div>
  
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-1"><h2>Users <b></b></h2></div>
                    <div class="col-sm-7"><Button data-toggle="modal" data-target="#Modal_add" class="btn btn-primary">Add</Button></div>
                    <div class="col-sm-4">
                        <div class="search-box">

                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Question <i class="fa fa-sort"></i></th>
                       
                    
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>What is the full form of HTML?y</td>
                        

                        <td>
                            <a href="#" class="text-warning"  data-toggle="tooltip" data-toggle="modal" data-target="#Modal_update">Update</a>
                            <a href="#" class="text-danger"  data-toggle="tooltip" >Delete</a>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>
</div>
</body>
</html>


<!-- Modal-Add -->
<div class="modal fade" id="Modal_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method ="post" action="/add">
    {{@csrf_field()}}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
         <h5>Question :</h5>
       </div>
       <div class="row" style="padding :10px;">
         <input name="question" class="form-control">
       </div>

       <div class="row">
         <div class="col-md-6"><label>A:</label></div>
         <div class="col-md-6"><label>B:</label></div>
        
       </div>

       <div class="row">
         <div class="col-md-6"><input name="opa"></div>
         <div class="col-md-6"><input name="opb"></div>
         
       </div>

       <div class="row">
         <div class="col-md-6"><label>C:</label></div>
         <div class="col-md-6"><label>D:</label></div>
        
       </div>

       <div class="row">
         <div class="col-md-6"><input name="opc"></div>
         <div class="col-md-6"><input name="opd"></div>
         
       </div>


       <div class="row">
         <div class="col-md-3"><label >Answer:</label>
           <select name="ans" class="form-control">
             <option value="a">A</option>
             <option value="b">B</option>
             <option value="c">C</option>
             <option value="d">D</option>
           </select>
         
       </div>


         </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" >Add Question</button>
      </div>
      </form>
    </div>
  </div>
</div>





