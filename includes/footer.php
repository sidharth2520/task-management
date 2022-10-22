
<?php
$ret = "Select  PhoneNumber,address,EmailId,footercontent from tblgenralsettings ";
$querys = $dbh -> prepare($ret);
$querys->execute();
$resultss=$querys->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($querys->rowCount() > 0)
{
foreach($resultss as $rows)
{ ?>
            <!--information area are start-->

            <!--footer area are start-->
            <div class="footer-area" align="center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-6 col-xs-12">
                            <div class="social-area">
                             <?php echo htmlentities($rows->footercontent);?>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <?php }} ?>