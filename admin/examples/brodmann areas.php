<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Brainstorm</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Brainstorm
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="./user.php">
                            <i class="material-icons">person</i>
                            <p>Registered User Data</p>
                        </a>
                    </li>
                    <li>
                        <a href="./log.php">
                            <i class="material-icons">content_paste</i>
                            <p>Registered User Login </p>
                        </a>
                    </li>
                    <li>
                        <a href="./table.php">
                            <i class="material-icons">content_paste</i>
                            <p>3D Brain Model Data</p>
                        </a>
                    </li>
                    <li>
                        <a href="./function.php">
                            <i class="material-icons">content_paste</i>
                            <p>Brain Functions</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="./brodmann areas.php">
                            <i class="material-icons">content_paste</i>
                            <p>Brodmann Areas</p>
                        </a>
                    </li>
                    <li>
                        <a href="./article.php">
                            <i class="material-icons">content_paste</i>
                            <p>Research Article Data</p>
                        </a>
                    </li>
                    <li >
                        <a href="./suggestions.php">
                            <i class="material-icons">content_paste</i>
                            <p>Suggestions</p>
                        </a>
                    </li>
                    
                    
                    
                   <li>
                        <a href="./posts.php">
                            <i class="material-icons">content_paste</i>
                            <p>Posts</p>
                        </a>
                    </li>
                    <li>
                        <a href="./comments.php">
                            <i class="material-icons">content_paste</i>
                            <p>Comments</p>
                        </a>
                    </li>
                    <li>
                        <a href="./form.php">
                            <i class="material-icons">content_paste</i>
                            <p>Add Data</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        
                        <a class="navbar-brand" href="#"></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="view_user.php">
                                    <i class="material-icons">person</i>
                                </a>
                            </li>
                        </ul>
                       
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Brodmann Area Detail Table</h4>
                                    
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Brodmann Area ID</th>
                                            <th>Functional Area</th>
                                            <th>Gyral Landmarks</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>primary somatosensory cortex</td>
                                                <td>postcentral gyrus</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>primary somatosensory cortex</td>
                                                <td>postcentral gyrus</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>primary somatosensory cortex</td>
                                                <td>postcentral gyrus</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>primary motor cortex</td>
                                                <td>precentral gyrus</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>somatosensory association cortex</td>
                                                <td>superior parietal lobule</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td> premotor cortex and supplementary motor cortex</td>
                                                <td>-</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>visuo-motor coordination</td>
                                                <td>superior parietal lobule</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>frontal eye fields</td>
                                                <td>-</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>dorsolateral prefrontal cortex</td>
                                                <td>-</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>anterior prefrontal cortex</td>
                                                <td>-</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>orbitofrontal area</td>
                                                <td>orbital gyri, gyrus rectus, rostral gyrus and part of superior frontal gyrus</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>orbitofrontal area</td>
                                                <td>orbital gyri, gyrus rectus, rostral gyrus and part of superior frontal gyrus</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>insular cortex</td>
                                                <td></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td></td>
                                                <td></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td></td>
                                                <td></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>insular cortex</td>
                                                <td></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>primary visual cortex (V1)</td>
                                                <td></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>18</td>
                                                <td>secondary visual cortex (V2)</td>
                                                <td></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>19</td>
                                                <td>associative visual cortex (V3, V4 and V5)</td>
                                                <td></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>20</td>
                                                <td></td>
                                                <td>inferior temporal gyrus</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>21</td>
                                                <td></td>
                                                <td>middle temporal gyrus</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>22</td>
                                                <td></td>
                                                <td>superior temporal gyrus (including Wernicke area)</td>
                                                
                                            </tr>
                                             <tr>
                                                <td>23</td>
                                                <td>cingulate cortex</td>
                                                <td></td>
                                                
                                            </tr>
                                             <tr>
                                                <td>24</td>
                                                <td>cingulate cortex</td>
                                                <td></td>
                                                
                                            </tr>
                                             <tr>
                                                <td>25</td>
                                                <td>subgenual area</td>
                                                <td></td>
                                                
                                            </tr>
                                             <tr>
                                                <td>26</td>
                                                <td>ectosplenial portion of the retrosplenial region of the cerebral cortex</td>
                                                <td></td>
                                                
                                            </tr>
                                             <tr>
                                                <td>27</td>
                                                <td>piriform cortex</td>
                                                <td></td>
                                                
                                            </tr>
                                             <tr>
                                                <td>28</td>
                                                <td>cingulate cortex</td>
                                                <td></td>
                                                
                                            </tr>
                                             <tr>
                                                <td>29</td>
                                                <td>cingulate cortex</td>
                                                <td></td>
                                                
                                            </tr>
                                             <tr>
                                                <td>30</td>
                                                <td>cingulate cortex</td>
                                                <td></td>
                                                
                                            </tr>
                                             <tr>
                                                <td>31</td>
                                                <td>cingulate cortex</td>
                                                <td></td>
                                                
                                            </tr>
                                             <tr>
                                                <td>32</td>
                                                <td>cingulate cortex</td>
                                                <td></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>33</td>
                                                <td>cingulate cortex</td>
                                                <td></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>34</td>
                                                <td>dorsal entorhinal cortex</td>
                                                <td></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>35</td>
                                                <td>perirhinal cortex and ectorhinal area</td>
                                                <td></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>36</td>
                                                <td>perirhinal cortex and ectorhinal area</td>
                                                <td></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>37</td>
                                                <td></td>
                                                <td>fusiform gyrus</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>38</td>
                                                <td></td>
                                                <td>temporal pole</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>39</td>
                                                <td></td>
                                                <td>angular gyrus</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>40</td>
                                                <td></td>
                                                <td>supramarginal gyrus</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>41</td>
                                                <td>primary auditory cortex</td>
                                                <td>Heschl gyrus</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>42</td>
                                                <td>primary auditory cortex</td>
                                                <td>Heschl gyrus</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>43</td>
                                                <td>primary gustatory cortex</td>
                                                <td></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>44</td>
                                                <td>part of Broca area</td>
                                                <td>pars opercularis, part of the inferior frontal gyrus</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>45</td>
                                                <td>part of Broca area</td>
                                                <td>pars triangularis, part of the inferior frontal gyrus</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>46</td>
                                                <td>dorsolateral prefrontal cortex</td>
                                                <td></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>47</td>
                                                <td></td>
                                                <td>pars orbitalis, part of the inferior frontal gyrus</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>48</td>
                                                <td>retrosubicular area</td>
                                                <td></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>49</td>
                                                <td></td>
                                                <td></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>50</td>
                                                <td></td>
                                                <td></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>51</td>
                                                <td></td>
                                                <td></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>52</td>
                                                <td>parainsular area</td>
                                                <td></td>
                                                
                                            </tr>
                                            

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
 
                        
            
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="../assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</html>