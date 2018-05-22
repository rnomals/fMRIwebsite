<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Make a suggestion</title>


        <!--css files-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
    <!--additional css-->
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <style>
            #new-suggestion{
                background-image: url("images/greyBrain (2).jpg");

                padding: 20px;

            }
            #content {
                background-color: #888888;
                border-radius: 50px;
                opacity: 0.95;
            }
            #content .container {
                padding-top: 20px;
            }
            h2{
                color: cadetblue;
                text-align:center;
                font-size: 40px;
                font-family: 'Open-sans', sans-serif;
            }
          .btn {
              background-color: #1b6d85;
              color: whitesmoke;
          }

      </style>

    </head>
    <body>
        <section id="new-suggestion">
            <!--create a form for make suggestions-->
            <form  class="form-group" action="make_suggestion.php" method="post">
                <div class="container-fluid" id="main-div">
                    <div class="row">
                        <div class="col-4">
                            <h2><strong>Make Your Suggestions</strong></h2>
                        </div>
                    </div>
                    <?php if(isset($_SESSION['message'])){?>
                          <div class="alert alert-info alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:black;">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <p><?php echo $_SESSION['message'];?></p>

                            </div>
                    <?php
                    }
                    ?>
                <div id="content" class="row">
                    <div class="container">
                        <div class="col-lg-12">
                            <!--Create text input to take the brain function-->
                                <div class="form-group">
                                    <label >Username</label>
                                    <input type="text" class="form-control" placeholder="Username" name="username"required>
                                </div>

                                <div class="form-group">
                                    <label for="function">Brain Functions</label>
                                    <input type="text" class="form-control" id="function" placeholder="Brain function" name="bfunction"required>
                                </div>

                                <!--Create text area to make a description on the suggestion-->

                                <div class="form-group">
                                    <label for="function">Description</label>
                                    <textarea name="description" id="Article" class="form-control"required></textarea>
                                </div>

                                <!--Insert a text area to state the relevant brodmann areas to the suggestion-->

                                <div class="scrollable">
                                   <label for="function">Brodmann Area</label>
                                    <input type="text" class="form-control"  placeholder="Brodmann Area" name="brodmannarea">
                                </div>
                                    <br>
                                <!--attach the file or the document of the reserch paper-->
                                <div>
                                        <label for="function" class="custom-file">  Reserch Paper
                                        <input type="file" id="file" class="custom-file-input" name="file">
                                        <span class="custom-file-control"></span>
                                        </label>
                                </div>

                                    <br>
                                    <!--Two buttons to submit or the reset the relevant data included in the form-->
                                <div>
                                    <button type="submit" name="submit" class="btn">Submit</button>
                                </div>
                                        <br>

                            </div>

                        </div>

                    </div>

                </div>
            </form>
        </section>

    <!--FOOTER-->
        <footer id="main-footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <p>Copyright &copy; 2017 | BrainStorm</p>

                    </div>
                </div>
            </div>
        </footer>
        <!--javascript - jQuery - multiple selection in the drop down menu-->
        <script>
        $('.alert').hide();
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.close').click(function () {
                    $('.alert').hide();

                });

                $('#multiple-checkboxes').multiselect();

            });
        </script>

    </body>
</html>