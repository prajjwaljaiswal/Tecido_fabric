<div class="layout-px-spacing">
                
                <div class="row layout-top-spacing">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                    <thead>
                                        <tr >
                                            <th style="text-transform: none !important;">Name</th>
                                            <th style="text-transform: none !important;">Ph no.</th>
                                            <th style="text-transform: none !important;">Email</th>
                                            <th style="text-transform: none !important;">City</th>
                                            <th style="text-transform: none !important;">Brand Name</th>
                                            <th style="text-transform: none !important;">Orders</th>
                                            <th style="text-transform: none !important;">Sales</th>
                                            <th style="text-transform: none !important;"></th>
                                        </tr>
                                    </thead>
                                    <tbody >

                                        <?php
                                        require_once("database.php");
                                        $select_data = "SELECT * FROM add_user_data";
                                        $response = $db->query($select_data);
                                        while($data = $response->fetch_assoc())
                                        {
                                            echo ' <tr>
                                            <td>'.$data['name'].'</td>
                                            <td>'.$data['num_ber'].'</td>
                                            <td>'.$data['email'].'</td>
                                            <td>'.$data['city'].'</td>
                                            <td>'.$data['brand'].'</td>
                                            <td>Stickman Services</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModalCenter">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="8"></line></svg>
                                                    </a>
    
                                                    <a href="" class="btn btn-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                       
                                                    </a>
                                                  </div>
                                            </td>
                                        </tr>';
                                        }
                                    ?>

                                       
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2020 <a target="_blank" href="https://stickmanservices.com/profile">STICKMAN SERVICES</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div>

            

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Ankit Saini</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <div class="modal-body">
                                        
                            <div class="content-section  animated animatedFadeInUp fadeInUp">
                                <div class="row inv--detail-section">

                                    <div class="col-sm-5 align-self-center">
                                        <p class="inv-customer-name">Phone No. :</p>
                                        <p class="inv-customer-name">Email :</p>
                                        <p class="inv-customer-name">Brand Name :</p>
                                        <p class="inv-customer-email">Total Orders :</p>
                                        <p class="inv-street-addr">Total Sales :</p>
                                        <p class="inv-street-addr">City : </p>

                                        <p class="inv-email-address">Address :</p>
                                    </div>
                                    <div class="col-sm-7 align-self-center  text-sm-right order-sm-0 order-1">
                                        <p class="inv-detail-title"><b>7889839939</b></p>
                                        <p class="inv-detail-title"><b>as600030@gmail.com</b></p>
                                        <p class="inv-detail-title"><b>Stickman Services</b></p>
                                        <p class="inv-detail-title"><b>5</b></p>
                                        <p class="inv-detail-title"><b>1</b></p>
                                        <p class="inv-detail-title"><b>Vadodara</b></p>
                                        <p class="inv-detail-title"><b>-</b></p>
                                
                                    </div>
                                    <div class="col-sm-12">
                                        201 shaligram tower, shreem shrusti society, sun pharma road, Vadodara.
                                    </div>
                                    
                                   
                                </div>


                            </div>
                </div>
                
