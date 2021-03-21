

<?php
    include ("connect.php");
    $getimage = "SELECT * from addblog order by id desc limit 8";
    $imageoutput = mysqli_query($server, $getimage);
?>

<?php 
    $folder = "image/"; 
?>


<div class="container-fluid col-md-12">
    <h3><u><b>Recent Blogs</b></u></h3>
</div>
<div class="col-lg-12 row">
<?php 
    while($row = mysqli_fetch_array($imageoutput))
    {
?>
        <div class="col-lg-3">
                        <div class=" container bg-light">
                            <h2><u>
                                <?php 
                                    echo $title = $row['title']; 
                                ?>
                            </u></h2>
                            <div> 
                                <img src="<?php echo $folder.$row['image'] ?>" class="img-fluid" style="height: 200px !important;">
                            </div>
                            <p style="text-align: justify;font-size: 14px;">
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <?php  echo substr($row['description'],0,99)."........." ;?>
                            </p>
                            <p>
                                <a href="insertblog.php?$id=<?php echo $row['id'] ?>&title=<?php echo $row['title'] ?>&description=<?php echo $row['description']?>&type=<?php echo $row['blogtype']?>&image=<?php echo $row['image']?>&email=<?php echo $row['uploadby']?>&date=<?php echo $row['uploadon']?>">
                                    <a href="readmore.php?id=<?php echo $row['id']?>&blogtype=<?php echo $row['blogtype'] ?>"><button type="submit" class="bg-primary float-center">Read More</button></a>
                                </a>
                                <a href="#">
                                    <img src="https://image.flaticon.com/icons/svg/25/25419.svg" style="margin-left: 110px; height: 25px;width: 25px;" class="img-thumbnail">
                                </a>
                                <a href="#">
                                    <img src="https://image.flaticon.com/icons/svg/25/25423.svg" style="margin-left: 0px; height: 25px;width: 25px;" class="img-thumbnail">
                                </a>
                            </p>
                            <hr>
                            <p class="small" align="left" style="font-size: 10px;">
                                Uploaded On:
                                <!-- <img src="icons/calendar.svg" height="17px" width="25px"> -->
                                <?php echo $row['uploadon']; ?>
                                <br>
                                Uploaded By:
                                <!-- <img src="icons/user.svg" height="17px" width="25px"> -->
                                <?php echo $row['uploadby']; ?> 
                            </p>
                            <hr>
                        </div>
        </div>                
<?php
    } 
?>
</div>
    <br>
    <p align="right" style="margin-right: 5px;">
        <a href="seemoreblogs.php">
            <button class="btn-sm">See More Blogs</button>
        </a>
    </p>

