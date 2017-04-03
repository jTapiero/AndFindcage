<!DOCTYPE html>
<html>
    <head>
         
        <meta charset="utf-8" />
        <title>Demineur</title>
        <link rel="stylesheet" href="style.css" type="text/css"/>
    </head>
    <body>

    </br></br></br></br></br></br></br>

 <?php if(isset($yo)){ ?> 

        <table id="DemTable">      
            <?php for($i=0;$i<$yo['Row'];$i++)
                    {
            ?> 
                    <tr><?php  for($j=0;$j<$yo['Col'];$j++)  {  ?>
                                
                                    <td>1</td> 
                                <?php } ?>    
                    </tr>
            <?php } ?> 
        </table>
        <?php }?> 
       </br></br></br>
       
    


        <form id="TheForm" action="Config.php" method="post">
            <label>Colonne :</label>
            <input class="InputParam" name="Col" type="text">
            <label>ligne :</label>
            <input class="InputParam" name="Row" type="text">
            <label>Nombre Mines  :</label>
            <input class="InputParam" name="NbM" type="text">
            <br/> <br/> 
            <input id="SubForm" type="submit" value="New Play">
        </form>
    <script src="script.js"></script>
    </body>
        
</html>