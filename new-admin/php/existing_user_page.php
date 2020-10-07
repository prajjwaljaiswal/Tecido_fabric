<table class="table  border">
                <tr class="table-primary">
                    <th class="border">Name</th>
                    <th class="border">Email</th>
                    <th class="border">Password</th>
                    <th class="border">Address</th>
                    <th class="border">Mo. Number</th>
                    <th class="border">Client Name</th>
                    <th class="border">Delete</th>
                </tr>


                <?php
                    require_once("../php/database.php");
                    $select_data = "SELECT * FROM admin_data";
                    $response = $db->query($select_data);
                    while($data = $response->fetch_assoc())
                    {
                        echo '<tr>
                        <td class="border">'.$data['name'].'</td>
                        <td class="border">'.$data['email'].'</td>
                        <td class="border">'.$data['pass_word'].'</td>
                        <td class="border">'.$data['address'].'</td>
                        <td class="border">'.$data['num_ber'].'</td>
                        <td class="border">'.$data['name_client'].'</td>
                        <td class="border text-center"><i class="fa fa-trash"></i></td>
                    </tr>';
                    }
                ?>

            </table>