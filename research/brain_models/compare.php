<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //get the selected research paper

    $research1 = $_POST['research1'];
    $research2 = $_POST['research2'];

    //created variables for relative research paper's paths..

        $model1 = "Researchcomparision,AnalysisForAuditoryStimulus/index.html";
        $model2 = "TonotopicMappingOfHumanAuditoryCortex-comparison/index.html";
        $model3 = "HumanLeftandRightAuditoryCortices-comparison/index.html";
        $model4 = "AuditorySpatialCuesInHumanCortex-comparison/index.html";

    //check whether both papers selected for comparison     

    if($research1=='#' || $research2=='#'){ ?>

    <!DOCTYPE html>
       <html>
       <head>

            <title>selection error</title>

            <link href="../../css/bootstrap.min.css" rel="stylesheet">
            <link href="../../css/font-awesome.css" rel="stylesheet">

       </head>
       <body>

          <div class="container">

            <br>
            <br>
            You havent selected any paper
            <br>
            <br>
            <a href="../sensory.php" class="btn btn-warning" role="button">back to selection..</a>
       
          </div>
            
       </body>
       </html>   


<?php

    // check whether user selected same paper for comparison..
    // if that happened redirects to the sensory.php

    }elseif($research1==$research2){      

        
        function redirect($url, $permanent=false){
            if (headers_sent()===false) {
                header('Location: '.$url, true, ($permanent===true) ? 301:302);                
            }

            exit();
        }
        echo("Please select different papers..");
        redirect('../sensory.php');

        /**
            if all requirements fullfilled check which papers are selected and get the paths of the relevant 3d models.
            $modellink1 and $modellink2 refers to relevant (webgl converted) 3d model path.

        **/

        }else{
            
            $modellink1 = "";
            $modellink2 = "";

            if($research1=='1'){
                $modellink1 = $model1;
            }elseif ($research1=='2') {
                $modellink1 = $model2;
            }elseif ($research1=='3') {
                $modellink1 = $model3;
            }elseif ($research1=='4') {
                $modellink1 = $model4;
            }

            if($research2=='1'){
                $modellink2 = $model1;
            }elseif ($research2=='2') {
                $modellink2 = $model2;
            }elseif ($research2=='3') {
                $modellink2 = $model3;
            }elseif ($research2=='4') {
                $modellink2 = $model4;
            }

        ?>

            <!-- 
                both links are identified in early step
                now we can get those two model into a frame and get them to comparison..
            -->

            <!DOCTYPE html>
            <html>
            <head>
                <title>Comparison</title>

                <frameset  cols="*,*">
                    <frame 
                        src= <?php echo $modellink1;?>
                    >
                    <frame
                        src= <?php echo $modellink2;?>
                    >
                </frameset>

            </head>
            <body></body>
            </html>

        <?php
            
        }

    
}
?>