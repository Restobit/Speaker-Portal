<div class="list-items-container">
    <div id="purple-column">
        <table>
            <tbody>
                <?php
                $getAllPurpleColumContent = $this->purpleColumn;
                foreach ($getAllPurpleColumContent as $purpleContent) {
                    echo "<tr><td data-post-id=" . $purpleContent->id . " data-position=" . $purpleContent->position . ">" . $purpleContent->name . "</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <div id="magenta-column">
        <table>
            <tbody>
                <?php
                $getAllMagentaColumContent = $this->magentaColumn;
                foreach ($getAllMagentaColumContent as $magentaContent) {
                    echo "<tr><td data-post-id=" . $magentaContent->id . " data-position=" . $magentaContent->position . ">" . $magentaContent->name . "</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<button id="save-position-btn">save</button>
<div class="warning-message-container">

</div>