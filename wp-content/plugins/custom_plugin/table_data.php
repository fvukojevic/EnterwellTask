<?php
    include(__DIR__ . '/model/Reader.php');

    $reader = new Reader;
    $results = $reader->getPrizeEntries();
?>

<div class>
    <table class="my-table" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Place</th>
                <th>House number</th>
                <th>Zip code</th>
                <th>Nationality</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Bill number</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $result) {
                $id = $result->id_prize_entry;
                $name = $result->name;
                $lastname = $result->lastname;
                $address = $result->address;
                $place = $result->place;
                $house_number = $result->house_number;
                $zip_code = $result->zip_code;
                $nationality = $result->nationality;
                $contact = $result->contact;
                $email = $result->email;
                $bill_number = $result->bill_number;
                $image = $result->image;

            ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $lastname; ?></td>
                <td><?php echo $address; ?></td>
                <td><?php echo $place; ?></td>
                <td><?php echo $house_nubmer; ?></td>
                <td><?php echo $zip_code; ?></td>
                <td><?php echo $nationality; ?></td>
                <td><?php echo $contact; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $bill_number; ?></td>
                <td><img src="<?php echo $img ?>" alt=""></td>
            </tr>
            <?php } ?>
        </tbody>

    </table>
</div>