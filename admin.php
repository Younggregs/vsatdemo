<?php

// Start update about 

   if(!empty($_POST['about'])){
      
   $filename = "about.txt";
   $file = fopen( $filename, "w" );
   
   if( $file == false ) {
      echo ( "Error in opening new file" );
      exit();
   }
   fwrite( $file, $_POST['about'] );
   fclose( $file );
    
}
// End update about


// Start update ka Band
if(!empty($_POST['kaBand'])){
      
    $filename = "kaBand.txt";
    $file = fopen( $filename, "w" );
    
    if( $file == false ) {
       echo ( "Error in opening new file" );
       exit();
    }
    fwrite( $file, $_POST['kaBand'] );
    fclose( $file );
     
 }
 // End update about


 // Start update C Band
if(!empty($_POST['cBand'])){
      
    $filename = "cBand.txt";
    $file = fopen( $filename, "w" );
    
    if( $file == false ) {
       echo ( "Error in opening new file" );
       exit();
    }
    fwrite( $file, $_POST['cBand'] );
    fclose( $file );
     
 }
 // End update about


 // Start update Ku Band
if(!empty($_POST['kuBand'])){
      
    $filename = "kuBand.txt";
    $file = fopen( $filename, "w" );
    
    if( $file == false ) {
       echo ( "Error in opening new file" );
       exit();
    }
    fwrite( $file, $_POST['kuBand'] );
    fclose( $file );
     
 }
 // End update Ku Band

?>




<html>

   <head>
      <title>Interweb - Official Admin Page</title>
      	<!-- Bootstrap  -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <!-- Theme style  -->
	    <link rel="stylesheet" href="css/style.css">
   </head>
   
   <body>

    <h1>Interweb Admin</h1>
    <br /><br />

    <!-- Start about box -->
      
      <?php
         $filename = "about.txt";
         $file = fopen( $filename, "r" );
         
         if( $file == false ) {
            echo ( "Error in opening file" );
            exit();
         }
         
         $filesize = filesize( $filename );
         if($filesize <= 0){
            $about = "";
         }else{
            $about = fread( $file, $filesize );
            fclose( $file );
         }
      ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h3>Update About</h3>
            <textarea cols="70" rows="7" name="about" id="about">
            <?php echo ( "$about" ); ?>
        </textarea>

        <input type="submit" value="Submit">
    </form>

    <!-- End about box -->



    <!-- Start Ka Band -->
    <?php
         $filename = "kaBand.txt";
         $file = fopen( $filename, "r" );
         
         if( $file == false ) {
            echo ( "Error in opening file" );
            exit();
         }
         
         $filesize = filesize( $filename );
         if($filesize <= 0){
            $kaband = "";
         }else{
            $kaband = fread( $file, $filesize );
            fclose( $file );
         }
         
      ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h3>Update ka Band</h3>
            <textarea cols="70" rows="7" name="kaBand" id="kaBand">
            <?php echo ( "$kaband" ); ?>
        </textarea>

        <input type="submit" value="Submit">
    </form>

    <!-- End Ka Band -->




     <!-- Start C Band -->
     <?php
         $filename = "cBand.txt";
         $file = fopen( $filename, "r" );
         
         if( $file == false ) {
            echo ( "Error in opening file" );
            exit();
         }
         
         $filesize = filesize( $filename );
         
         if($filesize <= 0){
            $cband = "";
         }else{
            $cband = fread( $file, $filesize );
            fclose( $file );
         }
         
         
      ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h3>Update C Band</h3>
            <textarea cols="70" rows="7" name="cBand" id="cBand">
            <?php echo ( "$cband" ); ?>
        </textarea>

        <input type="submit" value="Submit">
    </form>

    <!-- End C Band -->


    <!-- Start Ku Band -->
    <?php
         $filename = "kuBand.txt";
         $file = fopen( $filename, "r" );
         
         if( $file == false ) {
            echo ( "Error in opening file" );
            exit();
         }
         
         $filesize = filesize( $filename );
         
         if($filesize <= 0){
            $kuband = "";
         }else{
            $kuband = fread( $file, $filesize );
            fclose( $file );
         }
         
         
      ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h3>Update ku Band</h3>
            <textarea cols="70" rows="7" name="kuBand" id="kuBand">
            <?php echo ( "$kuband" ); ?>
        </textarea>

        <input type="submit" value="Submit">
    </form>

    <!-- End Ku Band -->

      
   </body>
</html>