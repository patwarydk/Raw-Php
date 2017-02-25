<?php

function Redirect($url) {
    echo"<script>";
    echo"self.location=\"{$url}\";";
    echo"</script>";
}

function Dropdown($data, $selected) {
    foreach ($data as $dt) {
        if ($dt->id == $selected) {
            echo "<option value = \"{$dt->id}\" selected >$dt->name</option>";
        } else {
            echo "<option value = \"{$dt->id}\">$dt->name</option>";
        }
    }
}

