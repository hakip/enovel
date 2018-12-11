<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../views/styles/header.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body>
  <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="text-white" href="dashboard">
                <p class="mb-0 d-flex justify-content-center"><i class="fas fa-book-open fa-2x pr-2"></i><span id="title" class="d-flex flex-column justify-content-center">Admin Novel</span></p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto pr-3">
                  <li class="nav-item">
                        <a href="#" onclick="ajaxNovelIndex();" class="nav-link menu"><i class="fas fa-book"></i> Novels</b></a>
                  </li>
                  <li class="nav-item">
                        <a href="#" onclick="ajaxUserIndex();" class="nav-link menu"><i class="fas fa-users"></i> Users</b></a>
                  </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-alt"></i> 
                            <?php
                              echo $_SESSION['Admin'];
                            ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right item" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="logout">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container-fluid mt-3">
      <table class="table" id="contentTable" >
      </table>
      <div class="modal fade" id="newrecord" tabindex="-1" role="dialog" aria-labelledby="newrecordLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" id="form_new">
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="../views/scripts/admin/index.js"></script>
    <script type="text/javascript">
      $(function () {
          if (window.location.hash === "#rel.in.user") {
            ajaxUserIndex();
          }else if (window.location.hash === "#err.up.user"){
            alert("Update user failed! You can try again!")
            ajaxUserIndex();
          }else if (window.location.hash === "#rel.in.novel") {
            ajaxNovelIndex();
          }else if (window.location.hash === "#err.up.novel"){
            alert("Update novel failed! You can try again!")
            ajaxNovelIndex();
          }
      });
      // ----------- User -----------
      function ajaxUserIndex(){
        $.ajax({
          url      : 'admin/users',
          method   : 'get', 
          success  : function(response){
            $('#contentTable').empty().append(response);
          }
        });
      };
      function newRecord(){
        $.ajax({
          url      : 'admin/user_new',
          method   : 'get', 
          success  : function(data){
            $('#form_new').empty().append(data);
            $('#newrecord').modal("toggle");
          }
        });
      }
      function delete_user(_this){
        $.ajax({
          url      : 'admin/delete_user',
          method   : 'post',
          data     : {id: $($(_this.closest('tr')).find("th[name=id_user]")[0]).data('id')},
          success  : function(data){
            ajaxUserIndex();
          }
        });
      }
      function edit_user(_this){
        $.ajax({
          url      : 'admin/user_edit',
          method   : 'post',
          data     : {id: $($(_this.closest('tr')).find("th[name=id_user]")[0]).data('id')},
          success  : function(data){
            $('#form_new').empty().append(data);
            $('#newrecord').modal("toggle");
          }
        });
      }
      //----------Novel----------
      function ajaxNovelIndex(){
        $.ajax({
          url      : 'admin/novels',
          method   : 'get', 
          success  : function(response){
            $('#contentTable').empty().append(response);
          }
        });
      };
      function newNovel(){
        $.ajax({
          url      : 'admin/novel_new',
          method   : 'get', 
          success  : function(data){
            $('#form_new').empty().append(data);
            $('#newrecord').modal("toggle");
          }
        });
      }
      function delete_novel(_this){
        $.ajax({
          url      : 'admin/delete_novel',
          method   : 'post',
          data     : {id: $($(_this.closest('tr')).find("th[name=id_novel]")[0]).data('id')},
          success  : function(data){
            ajaxNovelIndex();
          }
        });
      }
      function edit_novel(_this){
        $.ajax({
          url      : 'admin/novel_edit',
          method   : 'post',
          data     : {id: $($(_this.closest('tr')).find("th[name=id_novel]")[0]).data('id')},
          success  : function(data){
            $('#form_new').empty().append(data);
            $('#newrecord').modal("toggle");
          }
        });
      }
    </script>

<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
</style>
</body>
</html>