<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <?php require 'welcome.php';

	?>


<section class="classtime-section class-time-table spad" id="acceptor">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Red Cross Youth</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="timetable-controls">
                        <ul>
                            <li class="active" data-tsfilter="all">All Blood Type</li>
                            <li data-tsfilter="A Group" name="search">A Group</li>
                            <li data-tsfilter="B Group" name="search">B Group</li>
                            <li data-tsfilter="AB Group" name="search">AB Group</li>
                            <li data-tsfilter="O Group" name="search">O Group</li>
                        </ul>
                        
                    </div>
                </div>
            </div>
            <div class="classtime-table">
                <table>
                    <thead>
                        <tr>
                            <th colspan="5">FIND OUT YOUR BLOOD TYPE</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                       
                            <td class="hover-bg ts-item" data-tsmeta="A Group" name="search" onclick="searchcheck(this.value)">
                                <span id="message">A+ </span>
                                <h6>If you are A+: You can give blood to A+ and AB+. You can receive blood from A+, A-, O+ and O-</h6>
                                <button type="submit" name="submit">availablity</button>
                           
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="A Group"name="search" onclick="searchcheck(this.value)">
                                <span>A-</span>
                                <h6>If you are A-: You can give blood to A-, A+, AB- and AB+. You can receive blood from A- and O-.</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="B Group"name="search" onclick="searchcheck(this.value)">
                                <span>B+</span>
                                <h6>You can give blood to A+ and AB+. You can receive blood from A+, A-, O+ and O-.</h6>
                            </td>
                           
                        </tr>
                        <tr>
                            
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="B Group"name="search" onclick="searchcheck(this.value)">
                                <span>B-</span>
                                <h6>If you are B-: You can give blood to B-, B+, AB+ and AB-, You can receive blood from B- and O-.You can give blood to B+ and AB+.</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="AB Group"name="search" onclick="searchcheck(this.value)">
                                <span>AB+</span>
                                <h6>People with AB+ blood can receive red blood cells from any blood type. This means that demand for AB+ can donate with AB only.</h6>
                            </td>
                            
                        </tr>
                        <tr>
                          
                            <td class="hover-bg ts-item" data-tsmeta="AB Group"name="search" onclick="searchcheck(this.value)">
                                <span>AB-</span>
                                <h6>AB- patients can receive red blood cells from all negative blood types. AB- can give red blood cells to both AB- and AB+ blood types.</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="O Group"name="search" onclick="searchcheck(this.value)">
                                <span>O+</span>
                                <h6>Blood O+ can donate to A+, B+, AB+ and O+ Blood Group O can donate red blood cells to anybody. It's the universal donor.</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="O Group"name="search" onclick="searchcheck(this.value)">
                                <span>O-</span>
                                <h6>O- can donate to A+, A-, B+, B-, AB+, AB-, O+ and O- Blood People with O negative blood can only receive red cell donations from O negative donors.</h6>
                            </td>
                          
                    </tbody>
                </table>
            </div>
        </div>
    </section>

         <a href="request.php"><h2 style='text-align: center; background-color:lightgrey; font-family:Courier New;'>Become Acceptor</h2></a>
         

    <?php require 'footer.php'; ?>
