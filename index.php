<form action='' method ='POST' class='needs-validation' novalidate>
                                        <p>Please choose a reason for cancelling the appointment below:</p>
                                        <select id='reason' name='reason' required>
                                          <option value='I have an Emergency'>I have an Emergency</option>
                                          <option value='Option 1'>Option 1</option>
                                          <option value='Option 2'>Option 2</option>
                                          <option value='Option 3'>Option 3</option>
                                        </select>
                                        <input type='text' class='modal_postid'  id='validationCustom03' placeholder='Remarks' value=' ".$appointment_id."' name='post_id' required></input>
                                        <div class = 'policy-rules'>";
                                        <?php
                                        if (get_field('policy',  $product_id) == 'flexible') {
                                        echo the_field('flexible',  $product_id); 
                                        }
                                        else if (get_field('policy',  $product_id) == 'moderate'){
                                            echo the_field('moderate',  $product_id); 
                                        }
                                        else if (get_field('policy',  $product_id) == 'strict') {
                                            echo the_field('strict',  $product_id);              }
                                        ?>
                                        
                                        </div>
                                        </div><h1 class='confirmation'>Are you sure you want to cancel this appointment?</h1>
                                        <button name='submitreason' id='saveAppointment' class='transac-buttons' onclick='transacDeleteStatus(".$appointment_id.")'>Yes</button>
                                        <button class='transac-buttons' onclick='closebutton()'>No</button>
                                        </form>