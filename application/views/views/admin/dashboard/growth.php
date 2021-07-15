                   
                 <h1 class="page-header" >
                              
                            </h1>      
                            <div class="panel panel-default">

                            <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="tabl"  class="table table-bordered table-hover table-striped">
                                           
    <thead>

    <th>Ref#</th><th>Name</th><th>Bank</th><th>Date</th><th>Amount(R)</th><th>Days Left</th>
    <th>Action</th>
    </thead>
    <tbody>

    <?php if(is_array($help)){


    ?>
    <?php foreach ($help as $key) {?>

    <?php 

    $favcolor = $key['period'];

    switch ($favcolor) {
        case "5":
            $total = $key['amount'] + $key['amount'] * 50/100;
            break;
        case "60":
            $total = $key['amount'] + $key['amount'] * 75/100;
            break;
          default:
         //$total = $key['amount'] + 16.6667;
    }
    //$total = $key['amount'] + 16.6667 * $key['period'] ;
    if($key['status'] =='Reserved' || $key['status'] =='Completbed' || $key['status'] =='Waiting' ){}else{?>
        <tr><td>#<?php echo $key['ref_no'];?></td><td><?php echo $key['first_name'];?></td>
            <td><?php echo $key['bank_namez'];?></td><td><?php echo $key['datetime'];?></td>
   
            <td>R <?php echo @$total;?></td>
            <td> <?php    $date = new DateTime($key['scheduled_paymentdate']);
    $now = new DateTime();

    echo $date->diff($now)->format("%m months %d days, %h hours, %i minuts and %s seconds");    ?></td>


         
         <!---  <td><?php //if($date < $now){ ?> -->
            <td>
            <a href="<?php echo base_url();?>/gethelp/with7draw/<?php echo $key['amount'];?>/<?php echo $key['ref_no'];?>"onclick="" class="btn btn-primary">withdraw Now</a></td>

            <!--<?php   //  }else{ 
                //echo "not  matured";} 
                ?> -->
          
        </td>
          
        
    <?php }}}else{?>
    </tbody>
    <?php echo "Nothing Found";}?>

    </table>
                                    </div>
                                   
                                </div>
                 
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->


    </body>
    <script>

    $(document).ready( function () {
        $('#tabkkl').DataTable();
    } );
    </script>

    </html>






































