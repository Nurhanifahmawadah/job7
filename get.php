<?php
if (isset($_POST['send']))
{
echo"Welcome".$_GET["name"]."<br>";
echo"You are".$_GET["age"]."years old!";
}