<?php
require("php/funkcije.php");

if($_SESSION['usluge'] !='')
{
    $usluge = $_SESSION['usluge'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/s.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/9fd4e85602.js"></script>
    <title>Document</title>
</head>
<body>  
 
    
    <div class="kontenjer">
        <div class="left">
            <div class="calendar">
                <div class="month">
                    <i class="fa fa-angle-left prev"></i>
                    <div class="date">march 2023</div>
                    <i class="fa fa-angle-right next"></i>
                </div>
                <div class="weekdays">
                    <div>sun</div>
                    <div>mon</div>
                    <div>tue</div>
                    <div>wed</div>
                    <div>thu</div>
                    <div>fri</div>
                    <div>sat</div>
                </div>
                <div class="days">
                    <div class="day prev-date">26</div>
                    <div class="day prev-date">27</div>
                    <div class="day prev-date">28</div>
                    <div class="day">1</div>
                    <div class="day">2</div>
                    <div class="day">3</div>
                    <div class="day">4</div>
                    <div class="day">5</div>
                    <div class="day">6</div>
                    <div class="day">7</div>
                    <div class="day">8</div>
                    <div class="day">9</div>
                    <div class="day">10</div>
                    <div class="day">11</div>
                    <div class="day">12</div>
                    <div class="day">13</div>
                    <div class="day">14</div>
                    <div class="day">15</div>
                    <div class="day">16</div>
                    <div class="day">17</div>
                    <div class="day">18</div>
                    <div class="day">19</div>
                    <div class="day">20</div>
                    <div class="day">21</div>
                    <div class="day">22</div>
                    <div class="day">23</div>
                    <div class="day">24</div>
                    <div class="day">25</div>
                    <div class="day">26</div>
                    <div class="day">27</div>
                    <div class="day">28</div>
                    <div class="day">29</div>
                    <div class="day">30</div>
                    <div class="day">31</div>
                    <div class="day next-date">1</div>
                    <div class="day next-date">2</div>
                </div>
                <div class="goto-today">
                    <div class="goto">
                        <input type="text" placeholder="mm/yyyy" class="date-input">
                    <button class="goto-btn">go</button>
                    </div>
                    <button class="today-btn">today</button>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="today-date">
                <div class="event-day">Sat</div>
                <div class="event-date">11 March 2023</div>
            </div>
            <div class="events">
              
            </div>
        </div>
    </div>

   <div class="col-md-5 offset-md-7 mt-4">
    <?php
    prikaziZaposlene();
    prikazUsluge();
    ?>
   
</div>
<script>
    let usluge =[];
   usluge = <?php echo json_encode($usluge);?>;
   console.log(usluge);
</script>
<script src="js/js.js"></script>
<script src="js/mainluka.js"></script>
</body>
</html>