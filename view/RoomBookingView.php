<?php

class RoomBookingView
{
    private $roomTypes;
    private $suiteTypes;

    public function __construct($roomTypes, $suiteTypes)
    {
        $this->roomTypes = $roomTypes;
        $this->suiteTypes = $suiteTypes;
    }

    public function render()
    {
        ?>
        <form method="post" action="process_form.php">
            <label for="room_type">Room Type:</label>
            <select name="room_type" id="room_type" onchange="updateForm()">
                <?php
                foreach ($this->roomTypes as $roomType) {
                    echo '<option value="' . $roomType . '">' . $roomType . '</option>';
                }
                ?>
            </select>
            <br>
            <div id="suite_type_section" style="display: none;">
                <label for="suite_type">Suite Type:</label>
                <select name="suite_type" id="suite_type">
                    <?php
                    foreach ($this->suiteTypes as $suiteType) {
                        echo '<option value="';
                    }
                }
            }?>