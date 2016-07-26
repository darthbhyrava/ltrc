               
        <!-- Team Members -->
        <div class="row">
            <?PHP
                $file_handle = fopen("faculty.csv", "r");
                while (!feof($file_handle) ) {
                    $line_of_text = fgetcsv($file_handle, 1024);
                    $name=explode(" ",$line_of_text[1]);
                    ?>
                    <div class="col-md-4 text-center">
                        <div class="thumbnail">
                            <?php $path="img/faculty/".$name[0].".jpg"?>
                            <a href="<?php echo $line_of_text[0] ?>"><img class="img-responsive" src="<?php echo $path?>" alt="">
                            <div class="caption"></a>
                                    <h3><?php echo $line_of_text[1]?><br>
                                    <small><?php echo $line_of_text[2]?></small>
                                    </h3>
                                    <p><?php echo $line_of_text[3]?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                    
                }
            fclose($file_handle);
            ?>                        
        </div>
        <!-- /.row -->

      

        <hr>
