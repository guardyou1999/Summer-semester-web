<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>你的信息</title>

<div class="container">
    <form id="contact" action="index1.php" method="get">
        <style>
            body{background:url(./1.jpg);}
        </style>
        <fieldset>
            <input placeholder="你的名字" name="me" type="text" tabindex="1" required>
        </fieldset>
        <fieldset>
            <input placeholder="她的名字" name="you" type="text" tabindex="1" required>
        </fieldset>
        <fieldset>
            <input placeholder="相恋的那一年" name="year" type="int" tabindex="1" required>
        </fieldset>
        <fieldset>
            <input placeholder="那一月" name="month" type="int" tabindex="1" required>
        </fieldset>
        <fieldset>
            <input placeholder="那一日" name="day" type="int" tabindex="1" required>
        </fieldset>
        <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">提交</button>
        </fieldset>

    </form >