<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 17.10.17
 * Time: 23:09
 */

/** @noinspection PhpUndefinedMethodInspection */
$name = $request->get('name', 'World') ?>

Hello <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>
