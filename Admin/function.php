<?php
require "db_connection.php";
/*
function getMovies()
{
    global $con;
    $getMoviesQuery = "select * from movies_data";
    $getMoviesResult = mysqli_query($con,$getMoviesQuery);
    while($row = mysqli_fetch_assoc($getMoviesResult)) {

        $title = $row['Title'];
        echo "<option>$title</option>";
    }
}
function getTheaters()
{
    global $con;
    $getMoviesQuery = "select * from movies_data";
    $getMoviesResult = mysqli_query($con,$getMoviesQuery);
    while($row = mysqli_fetch_assoc($getMoviesResult)){
        $title = $row['Theaters'];
        echo "<option>$title</option>";
    }
}*/

function getMovies()
{
    global $con;
    $getMoviesQuery = "select * from movies_data";
    $getMoviesResult = mysqli_query($con,$getMoviesQuery);
    while($row = mysqli_fetch_assoc($getMoviesResult)) {
        echo "
        <a class='col-lg-4 col-md-6 col-12 form-inline d-block MovieFirstCol' >
            <div class='row MovieSecondRow'>
                <div class='MovieImage'>
                    <img class='MovieImageStyle' src='Admin/Images/$row[Image]'>
                </div>
                <div class='MovieDetail'>
                    <table class ='MovieDetailTable'>
                         <tr>
                            <th>
                                <span class='MovieTitle' >$row[Title]</span>
                            </th>
                        </tr>
                         <tr style='padding-top: 5px;'>
                      <th>
                          <i class='fas fa-film MovieIcon'></i>  <span class='MovieDescription'> $row[Genre]</span>
                      </th>
                  </tr>
                         <tr>
                            <th>
                                <i class='fas fa-clock  MovieIcon'></i>  <span class='MovieDescription'> $row[Running_Time]</span>
                            </th>
                        </tr>
                         <tr>
                       <th>
                           <i class='fas fa-star MovieIcon'></i>  <span class='MovieDescription'> $row[Rating]</span>
                       </th>
                   </tr>
                         <tr>
                            <th>
                                <i class='fas fa-calendar-week MovieIcon'></i> <span class='MovieDescription'> $row[Release_Date]</span>
                            </th>
                        </tr>
                         <tr>
                            <th>
                                <i class='fas fa-desktop MovieIcon'></i> <span class='MovieDescription'> $row[Screening_Type]</span>
                            </th>
                        </tr>
                         <tr>
                            <th>
                                <i class='fas fa-pen MovieIcon'></i>   <span class='MovieDescription'> $row[Director]</span>
                            </th>
                        </tr>
                         <tr>
                            <th>
                                <i class='fas fa-compass MovieIcon'></i>     <span class='MovieDescription'> $row[Writer]</span>
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
            </a>
        ";
    }
}
?>